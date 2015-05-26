<?php

/*
  PHP version 5
  Copyright (c) 2002-2015
*/
if (isset($modulesid) && $modulesid == TRUE) {
	$i = isset($modules) ? count($modules) : 0;

	$modules[$i]['plugname'] = '宝付支付';

	$modules[$i]['code'] = basename(__FILE__, '.php');

	$modules[$i]['desc'] = '宝付支付';

	$modules[$i]['is_cod'] = '1';

	$modules[$i]['is_online'] = '1';

	$modules[$i]['pay_fee'] = '0';

	$modules[$i]['website'] = 'http://www.ecisp.cn';

	$modules[$i]['version'] = '1.0.1';
	$modules[$i]['config'] = array();
	return;
}

class downpay {

	function downpay() {

	}

	function __construct() {
		$this->downpay();
	}

	function get_code($order, $payment, $return_url, $notify_url) {
		return '宝付支付';
	}

	function respond($payment = null, $orderread = array()) {
		return false;
	}

}

?>