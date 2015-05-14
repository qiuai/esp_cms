<?php

/*
  PHP version 5
  Copyright (c) 2002-2015
*/

class lib_mlink extends connector {

	function lib_mlink() {
		$this->softbase();
		parent::start_pagetemplate();
		$this->pagetemplate->libfile = true;
	}
	function field_mlink($type, $returnname = 'typename', $lng = '') {
		$lngpack = $lng ? $lng : $this->CON['is_lancode'];
		$lng = ($lng == 'big5') ? $this->CON['is_lancode'] : $lng;
		if ($type == 1) {
			$link = $this->memberlink($read, $lngpack);
			return $link[$returnname];
		} else {
			$link = $this->get_link($returnname, $read, $lngpack);
			return $link;
		}
	}

}
