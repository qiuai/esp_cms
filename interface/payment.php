<?php
/*
  PHP version 5
  Copyright (c) 2002-2015
*/
class mainpage extends connector {
	function mainpage() {
		$this->softbase(false);
		$this->mlink = $this->memberlink(array(), admin_LNG);
	}
	function in_pay() {
		parent::start_pagetemplate();
		$linkURL = $_SERVER['HTTP_REFERER'];$lng = (admin_LNG == 'big5') ? $this->CON['is_lancode'] : admin_LNG;
		
		$cartid = $this->fun->eccode($this->fun->accept('ecisp_order_list', 'C'), 'DECODE', db_pscode);
		$cartid = stripslashes(htmlspecialchars_decode($cartid));
		$uncartid = !empty($cartid) ? unserialize($cartid) : 0;
		$ordersncode = $this->fun->accept('ecisp_order_sncode', 'C');
		$userid = intval($this->fun->accept('uid', 'P'));
		$userid = empty($userid) ? 0 : $userid;
		$consignee = trim($this->fun->accept('alias', 'P', true, true));
		$consignee = $this->fun->substr($consignee, 12);
		$email = $this->fun->accept('Email', 'P', true, true);
		$firstname = $this->fun->accept('FirstName', 'P', true, true);
		$lastname = $this->fun->accept('LastName', 'P', true, true);
		$consignee = $firstname .' '.$lastname;
		$country = intval($this->fun->accept('cityone', 'P'));
		$country = empty($country) ? 0 : $country;
		$province = intval($this->fun->accept('citytwo', 'P'));
		$province = empty($province) ? 0 : $province;
		$city = intval($this->fun->accept('citythree', 'P'));
		$city = empty($city) ? 0 : $city;
		$district = intval($this->fun->accept('district', 'P'));
		$district = empty($district) ? 0 : $district;
		$address = trim($this->fun->accept('address', 'P', true, true));
		$address = $this->fun->substr($address, 120);
		$zipcode = trim($this->fun->accept('zipcode', 'P', true, true));
		$zipcode = $this->fun->substr($zipcode, 10);
		$tel = trim($this->fun->accept('tel', 'P', true, true));
		$tel = $this->fun->substr($tel, 20);
		$mobile = trim($this->fun->accept('mobile', 'P', true, true));
		$mobile = $this->fun->substr($mobile, 15);
		$sendtime = intval($this->fun->accept('sendtime', 'R'));
		$username = $firstname.' '.$lastname;
		$bankid = trim($this->fun->accept('Bankid', 'P', true, true));;
		$content = trim($this->fun->accept('content', 'P', true, true));
		$content = $this->fun->substr($content, 500);
		$invpayee = trim($this->fun->accept('invpayee', 'P', true, true));
		$invpayee = $this->fun->substr($invpayee, 60);
		$invcontent = trim($this->fun->accept('invcontent', 'P', true, true));
		$invcontent = $this->fun->substr($invcontent, 60);
		$opid = intval($this->fun->accept('opid', 'P'));
		$opid = empty($opid) ? 0 : $opid;
		$osid = intval($this->fun->accept('osid', 'P'));
		$osid = empty($osid) ? 0 : $osid;
		$productmoney = floatval($this->fun->accept('productmoney', 'P'));
		$discount = floatval($this->CON['moneys']);
		$invpayee = floatval($this->CON['payis']);
		
		$payprice = 0;
		$shipprice = 0;
		$payread = !empty($opid) ? $this->get_payplug_view($opid) : 0;
		$shipprice = !empty($osid) ? $this->get_shipplug_view($osid, 'price') : 0;
		$shipprice = floatval($shipprice);
		$payprice = 0;
		$orderamount = $productmoney * (100 - $invpayee) * 0.01 / $discount;
		$order_snfont = $this->CON['order_snfont'];
		$ordersn = $order_snfont . date('YmdHis') . rand(100, 9999);
		$db_table = db_prefix . 'order';
		$db_table2 = db_prefix . 'order_info';
		$addtime = time();
		$db_field = 'ordersn,userid,ordertype,osid,opid,shippingsn,paysn,consignee,country,province,city,district,address,
			zipcode,tel,mobile,email,sendtime,invpayee,invcontent,content,treatnote,paytime,shippingtime,productmoney,shippingmoney,
			paymoney,orderamount,discount,integral,addtime';
		$db_values = "'$ordersn',$userid,1,$osid,$opid,'','','$consignee',$country,$province,$city,$district,'$address',
			'$zipcode','$tel','$mobile','$email','$sendtime','$invpayee','$invcontent','$content','',0,0,$productmoney,$shipprice,
			$payprice,$orderamount,$discount,0,$addtime";
		$this->db->query('INSERT INTO ' . $db_table . ' (' . $db_field . ') VALUES (' . $db_values . ')');
		$insert_id = $this->db->insert_id();
		if($insert_id){
				
			if (!empty($opid)) { // 在线支付
				$paysn = date('YmdHis') . rand(100, 9999);
				$paytime = time();
				
				// 创建支付订单
				$db_table = db_prefix . 'order_payreceipt';
				$db_field = 'oid,opid,paysn,ordersn,orderamount,bankaccount,bankname,bankid,username,content,userid,paytime,addtime';
				$db_values = "$insert_id,$opid,'$paysn','$ordersn',$orderamount,'','','$bankid','$username','',$userid,$paytime,$addtime";
				$this->db->query('INSERT INTO ' . $db_table . ' (' . $db_field . ') VALUES (' . $db_values . ')');
				$insert_id = $this->db->insert_id();
				
				$plugcode = $payread['paycode'];
				if (!empty($plugcode)) {
					include_once admin_ROOT . 'public/plug/payment/' . $plugcode . '.php';
					$payobj = new $plugcode();
					$pay_url = $payobj->get_code($insert_id);
					
					header("Location:$pay_url");exit;
				}
			}
		
			$linkURL = $_SERVER['HTTP_REFERER'];
			$this->callmessage("订单创建成功", $linkURL, $this->lng['gobackbotton']);
		}else{
			$linkURL = $_SERVER['HTTP_REFERER'];
			$this->callmessage($this->lng['order_buy_err'], $linkURL, $this->lng['gobackbotton']);
		}
	}
	function in_order() {
		parent::start_pagetemplate();
		$lng = (admin_LNG == 'big5') ? $this->CON['is_lancode'] : admin_LNG;
		
		$this->lng['sitename'] = '充值中心' . '-' . $this->lng['sitename'];
		$this->pagetemplate->assign('moneys', $this->CON['moneys']);
		$this->pagetemplate->assign('lngpack', $this->lng);
		$this->pagetemplate->assign('mlink', $this->mlink);
		$this->pagetemplate->assign('member', $rsMember);
		$this->pagetemplate->assign('path', 'order');
		$this->pagetemplate->assign('tokenkey', $this->fun->token());
		$this->pagetemplate->assign('mem_isaddress', $this->CON['mem_isaddress']);
		
		// 支付模版
		$opid = 2; // 宝付支付
		$payread = !empty($opid) ? $this->get_payplug_view($opid) : 0;
		$plugcode = $payread['paycode'];
		if (!empty($plugcode)) {
			include_once admin_ROOT . 'public/plug/payment/' . $plugcode . '.php';
			$payobj = new $plugcode();
			$this->pagetemplate->assign('display_code', $payobj->get_display_code());
		}
				
		$templatesDIR = $this->get_templatesdir('order');
		$templatefilename = $lng . '/' . $templatesDIR . '/order_buy_center';
		$this->pagetemplate->assign('out', 'buyedit');
		unset($array, $this->mlink, $LANPACK, $this->lng);
		$this->pagetemplate->display($templatefilename, 'order_list', false, '', admin_LNG);
	}
	
	public function in_response() {
		//支付跳转返回页
		$plugcode = addslashes(trim($_REQUEST['plugcode']));
		$payment_info = $this->db->getRow("select * from ".db_prefix."order_pay where paycode = '".$plugcode."'");
		if($payment_info && $plugcode){
			include_once admin_ROOT . 'public/plug/payment/' . $plugcode . '.php';
			$payobj = new $plugcode();
			adddeepslashes($_REQUEST);
			$return = $payobj->response($_REQUEST);
			$linkURL = $_SERVER['HTTP_HOST'];
		}else{
			$return['info'] = '支付失败';
			$linkURL = $_SERVER['HTTP_HOST'];
		}

		if($return['status']){
			$this->in_charge($return['oid']);
		}

		$this->callmessage($return['info'], $linkURL, $this->lng['gobackbotton']);
	}
	
	public function in_notify(){
		//支付跳转返回页
		$plugcode = addslashes(trim($_REQUEST['plugcode']));
		$payment_info = $this->db->getRow("select * from ".db_prefix."order_pay where paycode = '".$plugcode."'");
		if($payment_info && $plugcode){
			include_once admin_ROOT . 'public/plug/payment/' . $plugcode . '.php';
			$payobj = new $plugcode();
			adddeepslashes($_REQUEST);
			$return = $payobj->response($_REQUEST);
		}else{
			$return['info'] = 'failed';
			$return['status'] = false;
		}

		if($return['status']){
			$this->in_charge($return['oid']);
		}

		echo $return['info'];
	}

	private function in_charge($oid){
		//给用户充值
		//充值接口 MODULE=CustomerDeposits&COMMAND=add&method=depositTerminal&customerId=12&amount=300&transactionID=abcdTest123&paymentMethod=cashU
		// URL ：  api-spotplatform.sky9fx.com/Api
		// 用户 sky9fx_api
		// 密码  G3UNeg9yFWtf

		$order = $this->db->getRow("select * from ".db_prefix."order where oid=".$oid);

		$apiData = array( 
			'api_username'	=> 'sky9fx_api',
			'api_password'	=> 'G3UNeg9yFWtf',
			'MODULE'		=> 'add', 
			'COMMAND'		=> 'view', 
			'customerId'	=> $order['user_id'],
			'amount'		=> intval($order['paymoney']) / intval($order['discount']),
			'transactionID'	=> $order['ordersn'],
			'paymentMethod'	=> 'cashU'
		); 
		$URL = 'api-spotplatform.sky9fx.com/Api';  
		$ch = curl_init($URL); 
		curl_setopt($ch, CURLOPT_POST, true); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($apiData)); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
		$result = curl_exec($ch); // run the whole process  
		curl_close($ch); 

		// 更新订单信息

		return $result; 
	}
}
