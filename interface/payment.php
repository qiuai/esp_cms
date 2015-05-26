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
		die('x');
		$did = intval($this->fun->accept('did', 'G', true, true));
		if (empty($did)) trigger_error("Parameter error!", E_USER_ERROR);
		$db_table = db_prefix . 'document';
		$db_sql = "SELECT did,tsn,title,oprice,bprice FROM $db_table WHERE isclass=1 AND did=$did AND isorder=1";
		$readdid = $this->db->fetch_first($db_sql);
		if ($readdid) {
			$cartid = $this->fun->eccode($this->fun->accept('ecisp_order_list', 'C'), 'DECODE', db_pscode);
			$cartid = stripslashes(htmlspecialchars_decode($cartid));
			$arraykeyname = 'k' . $did;
			if (empty($cartid) || strlen($cartid) < 7) {
				$orderlist = array($arraykeyname => array('did' => $did, 'amount' => 1));
				$orderlist = serialize($orderlist);
			} else {
				$orderid = unserialize($cartid);
				if (is_array($orderid) && array_key_exists($arraykeyname, $orderid)) {
					$amount = $orderid[$arraykeyname]['amount'] + 1;
					unset($orderid[$arraykeyname]);
					$nowcart = array($arraykeyname => array('did' => $did, 'amount' => $amount));
					$newcart = array_merge($orderid, $nowcart);
					$orderlist = serialize($newcart);
				} elseif (is_array($orderid)) {
					$nowcart = array($arraykeyname => array('did' => $did, 'amount' => 1));
					$newcart = array_merge_recursive($nowcart, $orderid);
					$orderlist = serialize($newcart);
				} else {
					$nowcart = array($arraykeyname => array('did' => $did, 'amount' => 1));
					$orderlist = serialize($newcart);
				}
			}
			$this->fun->setcookie('ecisp_order_list', $this->fun->eccode($orderlist, 'ENCODE', db_pscode), 7200);
			$buylink = $this->get_link('order', array(), admin_LNG);
			header('location:' . $buylink);
		} else {
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
		$templatesDIR = $this->get_templatesdir('order');
		$templatesDIR = $this->get_templatesdir('order');
		$templatefilename = $lng . '/' . $templatesDIR . '/order_buy_center';
		$this->pagetemplate->assign('out', 'buyedit');
		unset($array, $this->mlink, $LANPACK, $this->lng);
		$this->pagetemplate->display($templatefilename, 'order_list', false, '', admin_LNG);
	}
	
}
