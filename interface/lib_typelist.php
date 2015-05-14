<?php

/*
  PHP version 5
  Copyright (c) 2002-2015
*/

class lib_typelist extends connector {

	function lib_typelist() {
		$this->softbase();
		parent::start_pagetemplate();
		$this->pagetemplate->libfile = true;
	}
	function call_typelist($lng, $para, $filename = 'typelist', $outHTML = null) {
		$para = $this->fun->array_getvalue($para);
		$lngpack = $lng ? $lng : $this->CON['is_lancode'];
		$lng = ($lng == 'big5') ? $this->CON['is_lancode'] : $lng;
		include admin_ROOT . 'datacache/' . $lng . '_pack.php';
		$tid = intval($para['utid']);
		$mid = intval($para['mid']);
		$now_tid = intval($para['tid']);
		if (empty($tid)) {
			$tid = !empty($now_tid) ? $now_tid : $tid;
		}
		$tid = empty($tid) ? 0 : $tid;
		$db_table = db_prefix . 'typelist';
		$typeview = $this->get_type($tid);
		$typeview['lng'] = empty($typeview['lng']) ? $lng : $typeview['lng'];
		$typearray = $this->get_typelist(array(), $mid, $tid, $now_tid, $typeview['lng'], 0, 1);
		if (is_array($typearray)) {
			foreach ($typearray as $key => $value) {
				$typearray[$key]['selected'] = $value['tid'] == $now_tid ? 1 : 0;
				$typearray[$key]['link'] = $this->get_link('type', $value, $lngpack);
				$typearray[$key]['rsslink'] = $this->get_link('typerss', $value, $lngpack);
			}
		}
		$array = $this->fun->getTree($typearray, 'tid', 'upid', 'childArray', $tid);
		$this->pagetemplate->assign('nowtid', $now_tid);
		$this->pagetemplate->assign('uptypeview', $typeview);
		$this->pagetemplate->assign('array', $array);
		$this->pagetemplate->assign('lng', $lng);
		$this->pagetemplate->assign('lngpack', $LANPACK);
		if (!empty($outHTML)) {
			$output = $this->pagetemplate->fetch(null, null, $outHTML);
		} else {
			$output = $this->pagetemplate->fetch($lng . '/lib/' . $filename);
		}
		return $output;
	}

}
