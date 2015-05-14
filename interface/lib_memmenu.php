<?php

/*
  PHP version 5
  Copyright (c) 2002-2015
*/

class lib_memmenu extends connector {

	function lib_memmenu() {
		$this->softbase();
		parent::start_pagetemplate();
		$this->pagetemplate->libfile = true;
	}
	function call_memmenu($lng, $para, $filename = 'member_menu', $outHTML = null) {
		$para = $this->fun->array_getvalue($para);
		$lngpack = $lng ? $lng : $this->CON['is_lancode'];
		$lng = ($lng == 'big5') ? $this->CON['is_lancode'] : $lng;
		include admin_ROOT . 'datacache/' . $lng . '_pack.php';
		$this->pagetemplate->assign('lngpack', $LANPACK);
		$this->pagetemplate->assign('mlink', $this->memberlink(array(), $lngpack));
		$this->pagetemplate->assign('lng', $lng);
		if ($this->get_app_view('bbs', 'isetup')) {
			$this->pagetemplate->assign('bbsapp', 1);
		}
		if (!empty($outHTML)) {
			$output = $this->pagetemplate->fetch(null, null, $outHTML);
		} else {
			$output = $this->pagetemplate->fetch($lng . '/lib/' . $filename);
		}
		return $output;
	}

}
