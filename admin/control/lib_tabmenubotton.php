<?php
/*
  PHP version 5
  Copyright (c) 2002-2015
*/
class lib_tabmenubotton extends connector {
	function lib_tabmenubotton() {
		$this->softbase(true);
		parent::start_template();
		$this->ectemplates->caching = false;
		$this->ectemplates->libfile = true;
	}
	public function call_tabmenubotton($para, $filename = 'tabmenu') {
		include_once admin_ROOT . adminfile . '/include/inc_formtypelist.php';
		$menutype = empty($para[0]) ? 'loglist' : $para[0];
		$mid = empty($para[2]) ? 0 : $para[2];
		$isclass = empty($para[3]) ? 0 : $para[3];
		$tabcount = empty($para[4]) ? 0 : $para[4];
		$tabexp = explode('-', $tabcount);
		$tabarray['mid'] = $tabexp[0];
		$tabarray['tid'] = $tabexp[1];
		$tabarray['fgid'] = $tabexp[2];
		$tabarray['atid'] = $tabexp[3];
		$tabarray['mobtid'] = $tabexp[5];
		$tabarray['wxid'] = $tabexp[6];
		$tabarray['amid'] = $tabexp[7];
		$archive = $this->fun->accept('archive', 'G');
		$action = $this->fun->accept('action', 'G');
		$this->ectemplates->assign('conlist', $this->CON[$menutype]);
		$this->ectemplates->assign('powerlist', $this->esp_powerlist);
		$powerarray = $this->get_power_array();
		$this->ectemplates->assign('powerarray', $powerarray['list']);
		$this->ectemplates->assign('powernum', $powerarray['num']);
		$memberpuv = $this->get_member_purview_array();
		$this->ectemplates->assign('memberpuvlist', $memberpuv['list']);
		$this->ectemplates->assign('pubnum', $memberpuv['num']);
		$dclabel = $this->get_doclabel_array(0, $mid, $this->sitelng);
		$this->ectemplates->assign('dclabellist', $dclabel['list']);
		$this->ectemplates->assign('dclabelnum', $dclabel['num']);
		$this->ectemplates->assign('lantype', $LANPACKTYPE);
		$this->ectemplates->assign('mid', $mid);
		$this->ectemplates->assign('tid', $tabarray['tid']);
		$this->ectemplates->assign('fgid', $tabarray['fgid']);
		$this->ectemplates->assign('isclass', $isclass);
		$this->ectemplates->assign('action', $action);
		$this->ectemplates->assign('menutype', $menutype);
		$this->ectemplates->assign('tabarray', $tabarray);
		$outtemplateFile = 'menu/' . $filename . '_' . $menutype;
		$output = $this->ectemplates->fetch($outtemplateFile);
		return $output;
	}
}
