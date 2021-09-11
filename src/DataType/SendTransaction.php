<?php
/**
 * @file
 * This is a file generated by scripts/generate-complex-datatypes.php.
 *
 * DO NOT EDIT THIS FILE.
 *
 * @ingroup generated
 * @ingroup dataTypesComplex
 */
namespace Ethereum\DataType;

/**
 * Ethereum data type SendTransaction.
 *
 * Generated by scripts/generate-complex-datatypes.php based on resources/ethjs-schema.json.
 */
class SendTransaction extends EthDataType {

	/**
	 * Value for 'from'.
     *
     * @var EthD20
	 */
	public $from;

	/**
	 * Value for 'data'.
     *
     * @var EthD
	 */
	public $data;

	/**
	 * Value for 'to'.
     *
     * @var EthD20
	 */
	public $to;

	/**
	 * Value for 'gas'.
     *
     * @var EthQ
	 */
	public $gas;

	/**
	 * Value for 'gasPrice'.
     *
     * @var EthQ
	 */
	public $gasPrice;

	/**
	 * Value for 'value'.
     *
     * @var EthQ
	 */
	public $value;

	/**
	 * Value for 'nonce'.
     *
     * @var EthQ
	 */
	public $nonce;

	/**
	 * @param EthD20 $from
	 * @param EthD $data
	 * @param EthD20 $to
	 * @param EthQ $gas
	 * @param EthQ $gasPrice
	 * @param EthQ $value
	 * @param EthQ $nonce
	 */
	public function __construct(EthD20 $from, EthD $data, EthD20 $to = null, EthQ $gas = null, EthQ $gasPrice = null, EthQ $value = null, EthQ $nonce = null) {
		$this->from = $from;
		$this->data = $data;
		$this->to = $to;
		$this->gas = $gas;
		$this->gasPrice = $gasPrice;
		$this->value = $value;
		$this->nonce = $nonce;
	}

	/**
	 * Returns a name => type array.
	 */
	public static function getTypeArray() {
		return array(
			'from' => 'EthD20',
			'data' => 'EthD',
			'to' => 'EthD20',
			'gas' => 'EthQ',
			'gasPrice' => 'EthQ',
			'value' => 'EthQ',
			'nonce' => 'EthQ',
		);
	}

	/**
	 * Returns array with values.
	 */
	public function toArray() {
		$return = [];
		(!is_null($this->from)) ? $return['from'] = $this->from->hexVal() : NULL;
		(!is_null($this->data)) ? $return['data'] = $this->data->hexVal() : NULL;
		(!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : NULL;
		(!is_null($this->gas)) ? $return['gas'] = $this->gas->hexValUnpadded() : NULL;
		(!is_null($this->gasPrice)) ? $return['gasPrice'] = $this->gasPrice->hexValUnpadded() : NULL;
		(!is_null($this->value)) ? $return['value'] = $this->value->hexValUnpadded() : NULL;
		(!is_null($this->nonce)) ? $return['nonce'] = $this->nonce->hexValUnpadded() : NULL;
		return $return;
	}
}
