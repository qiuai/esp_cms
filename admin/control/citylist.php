<?php

/*
  PHP version 5
  Copyright (c) 2002-2015
*/

class important extends connector {

	function important() {
		$this->softbase(true);
	}
	function oncitylist() {
		$parentid = $this->fun->accept('parentid', 'R');
		$parentid = empty($parentid) ? 1 : $parentid;
		$verid = $this->fun->accept('verid', 'R');
		$verid = empty($verid) ? 0 : $verid;
		$db_table = db_prefix . 'city';
		$sql = "select * from $db_table where parentid=$parentid";
		$rs = $this->db->query($sql);
		for ($i = 0; $rsList = $this->db->fetch_array($rs); $i++) {
			if ($verid == $rsList['id']) {
				$list.='<option selected value="' . $rsList['id'] . '">' . $rsList['cityname'] . '</option>';
			} else {
				$list.='<option value="' . $rsList['id'] . '">' . $rsList['cityname'] . '</option>';
			}
		}
		exit($list);
	}

}
