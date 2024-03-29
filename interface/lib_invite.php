<?php

/*
  PHP version 5
  Copyright (c) 2002-2015
*/

class lib_invite extends connector {

	function lib_invite() {
		$this->softbase();
		parent::start_pagetemplate();
		$this->pagetemplate->libfile = true;
	}
	function call_invite($lng, $para, $filename = 'invite', $outHTML = null) {
		$para = $this->fun->array_getvalue($para);
		$lngpack = $lng ? $lng : $this->CON['is_lancode'];
		$lng = ($lng == 'big5') ? $this->CON['is_lancode'] : $lng;
		include admin_ROOT . 'datacache/' . $lng . '_pack.php';
		$mlvid = intval($para['mlvid']);
		if (empty($mlvid)) {
			return null;
		}
		$inviteread = $this->get_mailinvite_view($mlvid);
		$link = $this->get_link('invite', $inviteread, $lngpack);
		$this->pagetemplate->assign('link', $link);
		$this->pagetemplate->assign('read', $inviteread);
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
