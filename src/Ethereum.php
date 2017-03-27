<?php

namespace Ethereum;

use Graze\GuzzleHttp\JsonRpc\Client as RpcClient;
use Ethereum\EthS;
use Ethereum\EthDataTypePrimitive;


/**
 * Ethereum JsonRPC API for PHP.
 *
 * Implements Ethereum JsonRPC API for PHP
 *   https://github.com/ethereum/wiki/wiki/JSON-RPC.
 *
 * This part of the Drupal Ethereum Module:
 * https://groups.drupal.org/ethereum
 *
 * Ethereum class is based on ethjs-schema by Nick Dodson.
 *   https://github.com/digitaldonkey/ethjs-schema
 */
class Ethereum extends EthereumStatic {

  private $definition;
  private $methods;
  protected $id = 0;
  public $client;
  public $debugHtml = '';

  /**
   * Constructing Ethereum Class.
   *
   * Remarks:
   * Ethereum class is based on ethjs-schema.json file.
   * - Everything is typed. All data types extend EthDataType class.
   * - Primitive data have a mostly common interface. See EthDataTypePrimitive.
   * - Complex data types (See "objects" in schema.json) are generated by
   *   script. This guarantees consistent type handling. Changes to the
   *   generated need to be implemented in make_datatypes.php.
   * - Methods are typed based on ethjs-schema and implemented as Closure calls,
   *   which makes this constructor complex, but ensures consistent typing.
   *
   * @param string $url
   *   Connection to Ethereum node. E.g:
   *   http://localhost:8545 or https://mainnet.infura.io/drupal.
   * @param bool $debug
   *   Provide debug info.
   */
  public function __construct($url) {

    $this->client = RpcClient::factory($url, array(
      'debug' => FALSE,
    ));

    $schema_path = substr(__DIR__, 0, -strlen('src')) . 'ethjs-schema.json';
    $this->definition = json_decode(file_get_contents($schema_path), TRUE);;

    foreach ($this->definition['methods'] as $name => $params) {
      ${$name} = function () {

        $request_params = array();

        // Get name of called function.
        $method = debug_backtrace()[2]['args'][0];
        $this->debug('Called function name', $method);

        // Get call and return parameters and types.
        $param_definition = $this->definition['methods'][$method];

        // Arguments send with function call.
        $valid_arguments = $param_definition[0];
        $argument_class_names = array();
        if (count($valid_arguments)) {
          $this->debug('Valid arguments', $valid_arguments);

          // Get argument definition Classes.
          foreach ($valid_arguments as $type) {
            $primitiveType = EthDataTypePrimitive::typeMap($type);
            if ($primitiveType) {
              $argument_class_names[] = $primitiveType;
            }
            else {
              $argument_class_names[] = $type;
            }
          }
          $this->debug('Valid arguments class names', $argument_class_names);
        }

        // Arguments send with function call.
        $args = func_get_args();
        if (count($args) && isset($argument_class_names)) {
          $this->debug('Arguments', $args);

          // Validate arguments.
          foreach ($args as $i => $arg) {

            if ($argument_class_names[$i] !== $arg->getType()) {
              throw new \InvalidArgumentException("Argument $i is " . $arg->getType() . " but expected $argument_class_names[$i] in $method().");
            }
            else {

              // Add value. Inconsistently booleans are not hexEncoded if they
              // are not data like in eth_getBlockByHash().
              if ($arg->isPrimitive() && $arg->getType() !== 'EthB') {
                $request_params[] = $arg->hexVal();
              }
              elseif ($arg->isPrimitive() && $arg->getType() === 'EthB') {
                $request_params[] = $arg->val();
              }
              else {
                $request_params[] = $arg->toArray();
              }
            }
          }
        }

        // Validate required parameters.
        if (isset($param_definition[2])) {
          $required_params = array_slice($param_definition[0], 0, $param_definition[2]);
          $this->debug('Required Params', $required_params);
        }

        if (isset($required_params) && count($required_params)) {
          foreach ($required_params as $i => $param) {
            if (!isset($request_params[$i])) {
              throw new \InvalidArgumentException("Required argument $i $argument_class_names[$i] is missing in $method().");
            }
          }
        }

        // Default block parameter required for function call.
        // See: https://github.com/ethereum/wiki/wiki/JSON-RPC#the-default-block-parameter.
        $require_default_block = FALSE;
        if (isset($param_definition[3])) {
          $require_default_block = $param_definition[3];
          $this->debug('Require default block parameter', $require_default_block);
        }
        if ($require_default_block) {
          $arg_is_set = FALSE;
          foreach ($argument_class_names as $i => $class) {
            if ($class === 'EthBlockParam' && !isset($request_params[$i])) {
              $request_params[$i] = 'latest';
            }
          }
        }

        // Return type.
        $return_type = $param_definition[1];
        $this->debug('Return value type', $return_type);

        $is_primitive = (bool) EthDataTypePrimitive::typeMap($return_type);

        if (is_array($return_type)) {
          $return_type_class = array(EthDataTypePrimitive::typeMap($return_type[0]));
        }
        elseif ($is_primitive) {
          $return_type_class = EthDataTypePrimitive::typeMap($return_type);
        }
        else {
          // Return Complex type.
          $return_type_class = $return_type;
        }
        $this->debug('Return value Class name ', $return_type_class);

        // Call.
        $this->debug('Final request params', $request_params);
        $value = $this->etherRequest($method, $request_params);

        // Workaround varying client implementations.
        $workaround_file = substr(__DIR__, 0, -3) . 'workarounds/' . $method . '.php';
        if (file_exists($workaround_file)) {
          require_once $workaround_file;
          $value = call_user_func('eth_workaround_' . $method, $value);
        }

        $return = $this->createReturnValue($value, $return_type_class, $method);
        $this->debug('Final return object', $return);
        $this->debug('<hr />');
        return $return;
      };
      // Binding above function.
      $this->methods[$name] = \Closure::bind(${$name}, $this, get_class());
    }
  }

  /**
   * Method call wrapper.
   */
  public function __call($method, $args) {

    if(is_callable($this->methods[$method])) {
      return call_user_func_array($this->methods[$method], $args);
    }
    else {
      throw new \InvalidArgumentException('Unknown Method: ' . $method);
    }
  }

  /**
   * Handle Return Value.
   *
   * @param string|array $value
   *   Returned value from JsonRPC request.
   * @param string $return_type_class
   *   Class name of the expected return type.
   * @param string $method
   *   Method name for error messages.
   *
   * @return object|array
   *   Expected object.
   *
   * @throws \Exception
   */
  public function createReturnValue($value, $return_type_class, $method) {
    $return = NULL;

    // Get return value type.
    $class_name = '\\Ethereum\\' . EthDataType::getTypeClass($return_type_class);
    // Is array ?
    $array_val = is_array($return_type_class);
    // Is primitive data type?
    $is_primitive = $class_name::isPrimitive();

    // Primitive array Values.
    if ($is_primitive && $array_val && is_array($value)) {
      // According to schema array returns will always have primitive values.
      $return = $this->valueArray($value, $class_name);
    }
    elseif ($is_primitive && !$array_val && !is_array($value)) {
      $return = new $class_name($value);
    }

    // Complex array types.
    if (!$is_primitive && !$array_val && is_array($value)) {
      $return = $this->arrayToComplexType($class_name, $value);
    }
    elseif (!$is_primitive) {
      throw new \Exception('Return type not implemented yet.');
    }

    if (!$return) {
      throw new \Exception('Expected ' . $return_type_class . ' at ' . $method . ' (), couldn not be decoded. Value was: ' . print_r($value, TRUE));
    }
    return $return;
  }

  /**
   * Request().
   *
   * @param string $method
   *   JsonRPC method to be called.
   * @param array $params
   *   Request parameters. See Guzzle doc.
   */
  public function request($method, array $params = []) {
    $this->id++;
    return $this->client->send($this->client->request($this->id, $method, $params))->getRpcResult();
  }

  /**
   * Ethereum request.
   */
  public function etherRequest($method, $params = array()) {
    try {
      return $this->request($method, $params);
    }
    catch (\Exception $e) {
      throw $e;
    }
  }


  /**
   * Get signature of a solidity method.
   *
   * Returns hash of the Smart contract method - it's signature.
   *
   * See:
   * https://github.com/ethereum/wiki/wiki/Ethereum-Contract-ABI#function-selector
   *
   * @param string $input
   *   Method signature.
   *
   * @return string
   *   Hash of the method signature.
   */
  public function getMethodSignature($input) {
    if ($this->isValidFunction($input)) {
      $keccac = $this->web3_sha3(new EthS($input));
      // The signature is 4bytes of the methods keccac hash. E.g: "0x00000000".
      return substr($keccac->hexVal(), 0, 10);
    }
    else {
      throw new \InvalidArgumentException("No valid (solidity) signature string provided.");
    }
  }

  /**
   * Debug Helper.
   *
   * @param string $title
   *   Any HTML. Will be printed bold.
   * @param string|object|array $content
   *   Content will be printed in appropriate format.
   *
   * @return string
   *   Debug HTML output.
   */
  public function debug($title, $content = NULL) {
    $return = '';
    $return .= '<p style="margin-left: 1em"><b>' . $title . "</b></p>";
    if ($content) {
      $return .= '<pre style="background: rgba(0,0,0, .1); margin: .5em; padding: .25em; ">';
      if (is_object($content) || is_array($content)) {
        ob_start();
        var_dump($content);
        $return .= ob_get_clean();
      }
      else {
        $return .= ($content);
      }
      $return .= "</pre>";
    }
    $this->debugHtml .= $return;
    return $return;
  }

}
