<?php
/*
  PHP version 5
  Copyright (c) 2002-2015
*/
class lib_tablabel extends connector {
	function lib_tablabel() {
		$this->softbase(true);
		parent::start_template();
		$this->ectemplates->caching = false;
		$this->ectemplates->libfile = true;
	}
	public function call_tablabel($para, $filename = 'tablabel') {
		$menutype = empty($para[0]) ? 'loglist' : $para[0];
		$archive = $this->fun->accept('archive', 'G');
		$action = $this->fun->accept('action', 'G');
		$this->ectemplates->assign('powerlist', $this->esp_powerlist);
		$this->ectemplates->assign('archive', $archive);
		$this->ectemplates->assign('action', $action);
		$this->ectemplates->assign('menutype', $menutype);
		$outtemplateFile = 'menu/lib_' . $filename . '_' . $menutype;
		$output = $this->ectemplates->fetch($outtemplateFile);
		return $output;
	}
}
