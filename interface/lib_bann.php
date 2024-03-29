<?php

/*
  PHP version 5
  Copyright (c) 2002-2015
*/

class lib_bann extends connector {

	function lib_bann() {
		$this->softbase();
		parent::start_pagetemplate();
		$this->pagetemplate->libfile = true;
	}
	function call_bann($lng, $para, $filename = 'bann', $outHTML = null) {
		$para = $this->fun->array_getvalue($para);
		$lngpack = $lng ? $lng : $this->CON['is_lancode'];
		$lng = ($lng == 'big5') ? $this->CON['is_lancode'] : $lng;
		include admin_ROOT . 'datacache/' . $lng . '_pack.php';
		$atid = intval($para['atid']);
		if (empty($atid)) {
			return false;
		}
		if (!$this->get_app_view('bann', 'isetup')) {
			return false;
		}
		$typeread = $this->get_advert_type_view($atid);
		$adtype = intval($para['adtype']);
		$adtype = empty($adtype) || $adtype > 3 ? 1 : $adtype;
		$limit = empty($para['max']) ? 10 : intval($para['max']);
		$db_table = db_prefix . 'advert';
		$db_where = ' WHERE isclass=1 AND atid=' . $atid . ' AND adtype=' . $adtype;
		$bann_array = array();
		$sql = "SELECT * FROM $db_table $db_where ORDER BY pid,adid DESC LIMIT 0,$limit";
		$rs = $this->db->query($sql);
		while ($rsList = $this->db->fetch_assoc($rs)) {
			if ($rsList['islink'] == 2 && $rsList['gotoid'] > 0) {
				$docread = $this->get_documentview($rsList['gotoid']);
				if ($docread['did'] > 0) $rsList['url'] = $this->get_link('doc', $docread, $lngpack);
			}
			if ($rsList['istime'] == 1) {
				if ($rsList['starttime'] < time() && $rsList['endtime'] > time()) {
					$bann_array[] = $rsList;
				}
			} else {
				$bann_array[] = $rsList;
			}
		}
		$this->pagetemplate->assign('max', $limit);
		$this->pagetemplate->assign('adtype', $adtype);
		$this->pagetemplate->assign('typeread', $typeread);
		$this->pagetemplate->assign('array', $bann_array);
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
