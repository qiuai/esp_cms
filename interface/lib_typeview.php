<?php
/*
  PHP version 5
  Copyright (c) 2002-2015
*/
class lib_typeview extends connector {
	function lib_typeview() {
		$this->softbase();
		parent::start_pagetemplate();
		$this->pagetemplate->libfile = true;
	}
	function call_typeview($lng, $para, $filename = 'read', $outHTML = null) {
		$para = $this->fun->array_getvalue($para);
		$lngpack = $lng ? $lng : $this->CON['is_lancode'];
		$lng = ($lng == 'big5') ? $this->CON['is_lancode'] : $lng;
		include admin_ROOT . 'datacache/' . $lng . '_pack.php';
		$tid = intval($para['tid']);
		$typeread = $this->get_type($tid);
		$typeread['link'] = $this->get_link('type', $typeread, $lngpack);
		$this->pagetemplate->assign('typeread', $typeread);
		$this->pagetemplate->assign('lng', $lng);
		$this->pagetemplate->assign('lngpack', $LANPACK);
		if (!empty($outHTML)) {
			$output = $this->pagetemplate->fetch(null, null, $outHTML);
		} else {
			$output = $this->pagetemplate->fetch($lng . '/lib/' . $filename);
		}
		return $outsput;
	}
}
