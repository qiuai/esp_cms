<?php
/*
  PHP version 5
  Copyright (c) 2002-2015
*/
class lib_order extends connector {
	function lib_order() {
		$this->softbase();
		parent::start_pagetemplate();
		$this->pagetemplate->libfile = true;
	}
	function call_order($lng, $para, $filename = 'order', $outHTML = null) {
		$para = $this->fun->array_getvalue($para);
		$lngpack = $lng ? $lng : $this->CON['is_lancode'];
		$lng = ($lng == 'big5') ? $this->CON['is_lancode'] : $lng;
		include admin_ROOT . 'datacache/' . $lng . '_pack.php';
		$cartid = $this->fun->eccode($this->fun->accept('ecisp_order_list', 'C'), 'DECODE', db_pscode);
		$cartid = stripslashes(htmlspecialchars_decode($cartid));
		$uncartid = !empty($cartid) ? unserialize($cartid) : null;
		$total = $this->fun->eccode($this->fun->accept('ecisp_order_productmoney', 'C'), 'DECODE', db_pscode);
		$total = empty($total) ? 0 : $total;
		$buylink = $this->get_link('order', array(), $lngpack);
		$this->pagetemplate->assign('lngpack', $LANPACK);
		$this->pagetemplate->assign('buylink', $buylink);
		$this->pagetemplate->assign('ordertotal', number_format($total, 2));
		$this->pagetemplate->assign('total', $total);
		$this->pagetemplate->assign('uncartid', count($uncartid));
		$this->pagetemplate->assign('cartid', $cartid);
		if (!empty($outHTML)) {
			$output = $this->pagetemplate->fetch(null, null, $outHTML);
		} else {
			$output = $this->pagetemplate->fetch($lng . '/lib/' . $filename);
		}
		return $output;
	}
}
