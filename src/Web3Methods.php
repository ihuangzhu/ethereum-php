<?php
/**
 * @file
 * This is a file generated by scripts/generate-methods.php.
 *
 * DO NOT EDIT THIS FILE.
 *
 * @ingroup generated
 */

namespace Ethereum;

use Ethereum\DataType\EthS;
use Ethereum\DataType\EthD;
use Ethereum\DataType\EthQ;
use Ethereum\DataType\EthB;
use Ethereum\DataType\EthD20;
use Ethereum\DataType\EthBlockParam;
use Ethereum\DataType\EthD32;
use Ethereum\DataType\SendTransaction;
use Ethereum\DataType\CallTransaction;
use Ethereum\DataType\EstimateTransaction;
use Ethereum\DataType\Block;
use Ethereum\DataType\Transaction;
use Ethereum\DataType\Receipt;
use Ethereum\DataType\Filter;
use Ethereum\DataType\SHHPost;
use Ethereum\DataType\SHHFilter;

/**
 * Ethereum JsonRPC Methods.
 *
 * Interface is generated by scripts/generate-methods.php based on resources/ethjs-schema.json.
 * Methods are actually implemented with [method overloading](http://php.net/manual/en/language.oop5.overloading.php#object.call) using __call().
 */
trait Web3Methods {

	/**
	 * Generated method web3_clientVersion().
	 *
	 * See [Ethereum Wiki web3_clientVersion](https://github.com/ethereum/wiki/wiki/JSON-RPC#web3_clientversion)
	 *
	 * @return null|EthS
	 */
	public function web3_clientVersion() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method web3_sha3().
	 *
	 * See [Ethereum Wiki web3_sha3](https://github.com/ethereum/wiki/wiki/JSON-RPC#web3_sha3)
	 *
	 * @param EthS $arg1
	 * @return null|EthD
	 */
	public function web3_sha3(EthS $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method net_version().
	 *
	 * See [Ethereum Wiki net_version](https://github.com/ethereum/wiki/wiki/JSON-RPC#net_version)
	 *
	 * @return null|EthS
	 */
	public function net_version() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method net_peerCount().
	 *
	 * See [Ethereum Wiki net_peerCount](https://github.com/ethereum/wiki/wiki/JSON-RPC#net_peercount)
	 *
	 * @return null|EthQ
	 */
	public function net_peerCount() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method net_listening().
	 *
	 * See [Ethereum Wiki net_listening](https://github.com/ethereum/wiki/wiki/JSON-RPC#net_listening)
	 *
	 * @return null|EthB
	 */
	public function net_listening() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method personal_lockAccount().
	 *
	 * See [Ethereum Wiki personal_lockAccount](https://github.com/ethereum/wiki/wiki/JSON-RPC#personal_lockAccount)
	 *
	 * @param EthD20 $arg1
	 * @return null|EthB
	 */
	public function personal_lockAccount(EthD20 $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method personal_unlockAccount().
	 *
	 * See [Ethereum Wiki personal_sign](https://github.com/ethereum/wiki/wiki/JSON-RPC#personal_unlockAccount)
	 *
	 * @param EthD20 $arg1
	 * @param EthS $arg2
	 * @return null|EthB
	 */
	public function personal_unlockAccount(EthD20 $arg1, EthS $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method personal_sign().
	 *
	 * See [Ethereum Wiki personal_sign](https://github.com/ethereum/wiki/wiki/JSON-RPC#personal_sign)
	 *
	 * @param EthD20 $arg1
	 * @param EthD $arg2
	 * @param EthS $arg3
	 * @return null|EthD
	 */
	public function personal_sign(EthD20 $arg1, EthD $arg2, EthS $arg3) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method personal_ecRecover().
	 *
	 * See [Ethereum Wiki personal_ecRecover](https://github.com/ethereum/wiki/wiki/JSON-RPC#personal_ecrecover)
	 *
	 * @param EthD $arg1
	 * @param EthD $arg2
	 * @return null|EthD20
	 */
	public function personal_ecRecover(EthD $arg1, EthD $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_protocolVersion().
	 *
	 * See [Ethereum Wiki eth_protocolVersion](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_protocolversion)
	 *
	 * @return null|EthS
	 */
	public function eth_protocolVersion() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_syncing().
	 *
	 * See [Ethereum Wiki eth_syncing](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_syncing)
	 *
	 * @return null|EthB
	 */
	public function eth_syncing() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_coinbase().
	 *
	 * See [Ethereum Wiki eth_coinbase](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_coinbase)
	 *
	 * @return null|EthD20
	 */
	public function eth_coinbase() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_mining().
	 *
	 * See [Ethereum Wiki eth_mining](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_mining)
	 *
	 * @return null|EthB
	 */
	public function eth_mining() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_hashrate().
	 *
	 * See [Ethereum Wiki eth_hashrate](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_hashrate)
	 *
	 * @return null|EthQ
	 */
	public function eth_hashrate() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_gasPrice().
	 *
	 * See [Ethereum Wiki eth_gasPrice](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gasprice)
	 *
	 * @return null|EthQ
	 */
	public function eth_gasPrice() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_accounts().
	 *
	 * See [Ethereum Wiki eth_accounts](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_accounts)
	 *
	 * @return null|array   Array of EthD20
	 */
	public function eth_accounts() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_blockNumber().
	 *
	 * See [Ethereum Wiki eth_blockNumber](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_blocknumber)
	 *
	 * @return null|EthQ
	 */
	public function eth_blockNumber() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getBalance().
	 *
	 * See [Ethereum Wiki eth_getBalance](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getbalance)
	 *
	 * @param EthD20 $arg1
	 * @param EthBlockParam $arg2
	 * @return null|EthQ
	 */
	public function eth_getBalance(EthD20 $arg1, EthBlockParam $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getStorageAt().
	 *
	 * See [Ethereum Wiki eth_getStorageAt](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getstorageat)
	 *
	 * @param EthD20 $arg1
	 * @param EthQ $arg2
	 * @param EthBlockParam $arg3
	 * @return null|EthD
	 */
	public function eth_getStorageAt(EthD20 $arg1, EthQ $arg2, EthBlockParam $arg3) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getTransactionCount().
	 *
	 * See [Ethereum Wiki eth_getTransactionCount](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactioncount)
	 *
	 * @param EthD20 $arg1
	 * @param EthBlockParam $arg2
	 * @return null|EthQ
	 */
	public function eth_getTransactionCount(EthD20 $arg1, EthBlockParam $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getBlockTransactionCountByHash().
	 *
	 * See [Ethereum Wiki eth_getBlockTransactionCountByHash](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getblocktransactioncountbyhash)
	 *
	 * @param EthD32 $arg1
	 * @return null|EthQ
	 */
	public function eth_getBlockTransactionCountByHash(EthD32 $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getBlockTransactionCountByNumber().
	 *
	 * See [Ethereum Wiki eth_getBlockTransactionCountByNumber](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getblocktransactioncountbynumber)
	 *
	 * @param EthBlockParam $arg1
	 * @return null|EthQ
	 */
	public function eth_getBlockTransactionCountByNumber(EthBlockParam $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getUncleCountByBlockHash().
	 *
	 * See [Ethereum Wiki eth_getUncleCountByBlockHash](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getunclecountbyblockhash)
	 *
	 * @param EthD32 $arg1
	 * @return null|EthQ
	 */
	public function eth_getUncleCountByBlockHash(EthD32 $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getUncleCountByBlockNumber().
	 *
	 * See [Ethereum Wiki eth_getUncleCountByBlockNumber](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getunclecountbyblocknumber)
	 *
	 * @param EthQ $arg1
	 * @return null|EthQ
	 */
	public function eth_getUncleCountByBlockNumber(EthQ $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getCode().
	 *
	 * See [Ethereum Wiki eth_getCode](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getcode)
	 *
	 * @param EthD20 $arg1
	 * @param EthBlockParam $arg2
	 * @return null|EthD
	 */
	public function eth_getCode(EthD20 $arg1, EthBlockParam $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_sign().
	 *
	 * See [Ethereum Wiki eth_sign](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_sign)
	 *
	 * @param EthD20 $arg1
	 * @param EthD32 $arg2
	 * @return null|EthD
	 */
	public function eth_sign(EthD20 $arg1, EthD32 $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_sendTransaction().
	 *
	 * See [Ethereum Wiki eth_sendTransaction](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_sendtransaction)
	 *
	 * @param SendTransaction $arg1
	 * @return null|EthD
	 */
	public function eth_sendTransaction(SendTransaction $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_sendRawTransaction().
	 *
	 * See [Ethereum Wiki eth_sendRawTransaction](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_sendrawtransaction)
	 *
	 * @param EthD $arg1
	 * @return null|EthD32
	 */
	public function eth_sendRawTransaction(EthD $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_call().
	 *
	 * See [Ethereum Wiki eth_call](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_call)
	 *
	 * @param CallTransaction $arg1
	 * @param EthBlockParam $arg2
	 * @return null|EthD
	 */
	public function eth_call(CallTransaction $arg1, EthBlockParam $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_estimateGas().
	 *
	 * See [Ethereum Wiki eth_estimateGas](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_estimategas)
	 *
	 * @param EstimateTransaction $arg1
	 * @param EthBlockParam $arg2
	 * @return null|EthQ
	 */
	public function eth_estimateGas(EstimateTransaction $arg1, EthBlockParam $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getBlockByHash().
	 *
	 * See [Ethereum Wiki eth_getBlockByHash](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getblockbyhash)
	 *
	 * @param EthD32 $arg1
	 * @param EthB $arg2
	 * @return null|Block
	 */
	public function eth_getBlockByHash(EthD32 $arg1, EthB $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getBlockByNumber().
	 *
	 * See [Ethereum Wiki eth_getBlockByNumber](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getblockbynumber)
	 *
	 * @param EthBlockParam $arg1
	 * @param EthB $arg2
	 * @return null|Block
	 */
	public function eth_getBlockByNumber(EthBlockParam $arg1, EthB $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getTransactionByHash().
	 *
	 * See [Ethereum Wiki eth_getTransactionByHash](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactionbyhash)
	 *
	 * @param EthD32 $arg1
	 * @return null|Transaction
	 */
	public function eth_getTransactionByHash(EthD32 $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getTransactionByBlockHashAndIndex().
	 *
	 * See [Ethereum Wiki eth_getTransactionByBlockHashAndIndex](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactionbyblockhashandindex)
	 *
	 * @param EthD32 $arg1
	 * @param EthQ $arg2
	 * @return null|Transaction
	 */
	public function eth_getTransactionByBlockHashAndIndex(EthD32 $arg1, EthQ $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getTransactionByBlockNumberAndIndex().
	 *
	 * See [Ethereum Wiki eth_getTransactionByBlockNumberAndIndex](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactionbyblocknumberandindex)
	 *
	 * @param EthBlockParam $arg1
	 * @param EthQ $arg2
	 * @return null|Transaction
	 */
	public function eth_getTransactionByBlockNumberAndIndex(EthBlockParam $arg1, EthQ $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getTransactionReceipt().
	 *
	 * See [Ethereum Wiki eth_getTransactionReceipt](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_gettransactionreceipt)
	 *
	 * @param EthD32 $arg1
	 * @return null|Receipt
	 */
	public function eth_getTransactionReceipt(EthD32 $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getUncleByBlockHashAndIndex().
	 *
	 * See [Ethereum Wiki eth_getUncleByBlockHashAndIndex](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getunclebyblockhashandindex)
	 *
	 * @param EthD32 $arg1
	 * @param EthQ $arg2
	 * @return null|Block
	 */
	public function eth_getUncleByBlockHashAndIndex(EthD32 $arg1, EthQ $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getUncleByBlockNumberAndIndex().
	 *
	 * See [Ethereum Wiki eth_getUncleByBlockNumberAndIndex](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getunclebyblocknumberandindex)
	 *
	 * @param EthBlockParam $arg1
	 * @param EthQ $arg2
	 * @return null|Block
	 */
	public function eth_getUncleByBlockNumberAndIndex(EthBlockParam $arg1, EthQ $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getCompilers().
	 *
	 * See [Ethereum Wiki eth_getCompilers](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getcompilers)
	 *
	 * @return null|array   Array of EthS
	 */
	public function eth_getCompilers() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_compileLLL().
	 *
	 * See [Ethereum Wiki eth_compileLLL](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_compilelll)
	 *
	 * @param EthS $arg1
	 * @return null|EthD
	 */
	public function eth_compileLLL(EthS $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_compileSolidity().
	 *
	 * See [Ethereum Wiki eth_compileSolidity](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_compilesolidity)
	 *
	 * @param EthS $arg1
	 * @return null|EthD
	 */
	public function eth_compileSolidity(EthS $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_compileSerpent().
	 *
	 * See [Ethereum Wiki eth_compileSerpent](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_compileserpent)
	 *
	 * @param EthS $arg1
	 * @return null|EthD
	 */
	public function eth_compileSerpent(EthS $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_newFilter().
	 *
	 * See [Ethereum Wiki eth_newFilter](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_newfilter)
	 *
	 * @param Filter $arg1
	 * @return null|EthQ
	 */
	public function eth_newFilter(Filter $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_newBlockFilter().
	 *
	 * See [Ethereum Wiki eth_newBlockFilter](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_newblockfilter)
	 *
	 * @return null|EthQ
	 */
	public function eth_newBlockFilter() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_newPendingTransactionFilter().
	 *
	 * See [Ethereum Wiki eth_newPendingTransactionFilter](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_newpendingtransactionfilter)
	 *
	 * @return null|EthQ
	 */
	public function eth_newPendingTransactionFilter() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_uninstallFilter().
	 *
	 * See [Ethereum Wiki eth_uninstallFilter](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_uninstallfilter)
	 *
	 * @param EthQ $arg1
	 * @return null|EthB
	 */
	public function eth_uninstallFilter(EthQ $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getFilterChanges().
	 *
	 * See [Ethereum Wiki eth_getFilterChanges](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getfilterchanges)
	 *
	 * @param EthQ $arg1
	 * @return null|array   Array of FilterChange
	 */
	public function eth_getFilterChanges(EthQ $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getFilterLogs().
	 *
	 * See [Ethereum Wiki eth_getFilterLogs](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getfilterlogs)
	 *
	 * @param EthQ $arg1
	 * @return null|array   Array of FilterChange
	 */
	public function eth_getFilterLogs(EthQ $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getLogs().
	 *
	 * See [Ethereum Wiki eth_getLogs](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getlogs)
	 *
	 * @param Filter $arg1
	 * @return null|array   Array of FilterChange
	 */
	public function eth_getLogs(Filter $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_getWork().
	 *
	 * See [Ethereum Wiki eth_getWork](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_getwork)
	 *
	 * @return null|array   Array of EthD
	 */
	public function eth_getWork() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_submitWork().
	 *
	 * See [Ethereum Wiki eth_submitWork](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_submitwork)
	 *
	 * @param EthD $arg1
	 * @param EthD32 $arg2
	 * @param EthD32 $arg3
	 * @return null|EthB
	 */
	public function eth_submitWork(EthD $arg1, EthD32 $arg2, EthD32 $arg3) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method eth_submitHashrate().
	 *
	 * See [Ethereum Wiki eth_submitHashrate](https://github.com/ethereum/wiki/wiki/JSON-RPC#eth_submithashrate)
	 *
	 * @param EthD $arg1
	 * @param EthD $arg2
	 * @return null|EthB
	 */
	public function eth_submitHashrate(EthD $arg1, EthD $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method db_putString().
	 *
	 * See [Ethereum Wiki db_putString](https://github.com/ethereum/wiki/wiki/JSON-RPC#db_putstring)
	 *
	 * @param EthS $arg1
	 * @param EthS $arg2
	 * @param EthS $arg3
	 * @return null|EthB
	 */
	public function db_putString(EthS $arg1, EthS $arg2, EthS $arg3) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method db_getString().
	 *
	 * See [Ethereum Wiki db_getString](https://github.com/ethereum/wiki/wiki/JSON-RPC#db_getstring)
	 *
	 * @param EthS $arg1
	 * @param EthS $arg2
	 * @return null|EthS
	 */
	public function db_getString(EthS $arg1, EthS $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method db_putHex().
	 *
	 * See [Ethereum Wiki db_putHex](https://github.com/ethereum/wiki/wiki/JSON-RPC#db_puthex)
	 *
	 * @param EthS $arg1
	 * @param EthS $arg2
	 * @param EthD $arg3
	 * @return null|EthB
	 */
	public function db_putHex(EthS $arg1, EthS $arg2, EthD $arg3) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method db_getHex().
	 *
	 * See [Ethereum Wiki db_getHex](https://github.com/ethereum/wiki/wiki/JSON-RPC#db_gethex)
	 *
	 * @param EthS $arg1
	 * @param EthS $arg2
	 * @return null|EthD
	 */
	public function db_getHex(EthS $arg1, EthS $arg2) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_post().
	 *
	 * See [Ethereum Wiki shh_post](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_post)
	 *
	 * @param SHHPost $arg1
	 * @return null|EthB
	 */
	public function shh_post(SHHPost $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_version().
	 *
	 * See [Ethereum Wiki shh_version](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_version)
	 *
	 * @return null|EthS
	 */
	public function shh_version() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_newIdentity().
	 *
	 * See [Ethereum Wiki shh_newIdentity](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_newidentity)
	 *
	 * @return null|EthD
	 */
	public function shh_newIdentity() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_hasIdentity().
	 *
	 * See [Ethereum Wiki shh_hasIdentity](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_hasidentity)
	 *
	 * @param EthD $arg1
	 * @return null|EthB
	 */
	public function shh_hasIdentity(EthD $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_newGroup().
	 *
	 * See [Ethereum Wiki shh_newGroup](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_newgroup)
	 *
	 * @return null|EthD
	 */
	public function shh_newGroup() {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_addToGroup().
	 *
	 * See [Ethereum Wiki shh_addToGroup](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_addtogroup)
	 *
	 * @param EthD $arg1
	 * @return null|EthB
	 */
	public function shh_addToGroup(EthD $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_newFilter().
	 *
	 * See [Ethereum Wiki shh_newFilter](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_newfilter)
	 *
	 * @param SHHFilter $arg1
	 * @return null|EthQ
	 */
	public function shh_newFilter(SHHFilter $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_uninstallFilter().
	 *
	 * See [Ethereum Wiki shh_uninstallFilter](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_uninstallfilter)
	 *
	 * @param EthQ $arg1
	 * @return null|EthB
	 */
	public function shh_uninstallFilter(EthQ $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_getFilterChanges().
	 *
	 * See [Ethereum Wiki shh_getFilterChanges](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_getfilterchanges)
	 *
	 * @param EthQ $arg1
	 * @return null|array   Array of SHHFilterChange
	 */
	public function shh_getFilterChanges(EthQ $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method shh_getMessages().
	 *
	 * See [Ethereum Wiki shh_getMessages](https://github.com/ethereum/wiki/wiki/JSON-RPC#shh_getmessages)
	 *
	 * @param EthQ $arg1
	 * @return null|array   Array of SHHFilterChange
	 */
	public function shh_getMessages(EthQ $arg1) {
		return $this->__call(__FUNCTION__, func_get_args());
	}
}
