<table border="0" width="100%" bordercolor="#FFFFFF">
	<tr>
		<td width="5%"><input type="checkbox" name="check_all" id="check_all" value="1" onClick="select_ok('selectform', 'selectall', 'check_all');"/></td>
		<td width="10%"><a id="btlimit_id" class="infolink06" href="javascript:onlimit('ktid','asc','#btlimit_id','#limit_id','#limit_pid','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['seomanage_text_kid'] ?></a><span id="limit_id" class="limitdesc"></span></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['lng_title'] ?></td>
		<td width="25%"><?php echo $this->_tpl_vars['ST']['seomanage_text_keywordtypename'] ?></td>
		<td width="40%"><?php echo $this->_tpl_vars['ST']['seomanage_text_keywordnamelist'] ?></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['seomanage_text_set'] ?></td>
	</tr>
</table>