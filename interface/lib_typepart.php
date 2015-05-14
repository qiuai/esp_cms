<?php

/*
  PHP version 5
  Copyright (c) 2002-2015
*/

class lib_typepart extends connector {

	function lib_typepart() {
		$this->softbase();
		parent::start_pagetemplate();
		$this->pagetemplate->libfile = true;
	}
	function call_typepart($lng, $para, $filename = 'typepart', $outHTML = null) {
		$para = $this->fun->array_getvalue($para);
		$lngpack = $lng ? $lng : $this->CON['is_lancode'];
		$lng = ($lng == 'big5') ? $this->CON['is_lancode'] : $lng;
		include admin_ROOT . 'datacache/' . $lng . '_pack.php';

		$mid = intval($para['mid']);
		$mid = empty($mid) ? 0 : $mid;
		$typeout = $this->get_type_array(0, $mid, 0, $lng, 1, 1);
		$typearray = $typeout['list'];
		if (count($typearray) > 0 && is_array($typearray)) {
			foreach ($typearray as $key => $value) {
				$value['link'] = $this->get_link('type', $value, $lngpack);
				$value['rsslink'] = $this->get_link('typerss', $value, $lngpack);
				$typelist[] = $value;
			}
		}
		$this->pagetemplate->assign('array', $typelist);
		$this->pagetemplate->assign('lng', $lng);
		$this->pagetemplate->assign('lngpack', $LANPACK);
		if (!empty($outHTML)) {
			$output = $this->pagetemplate->gettemprequire($outHTML);
		} else {
			$output = $this->pagetemplate->fetch($lng . '/lib/' . $filename);
		}
		return $output;
	}

}
