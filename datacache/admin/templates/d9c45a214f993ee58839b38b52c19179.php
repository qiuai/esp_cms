<table border="0" width="100%" bordercolor="#FFFFFF">
	<tr>
		<td width="5%"><input type="checkbox" name="check_all" id="check_all" value="1" onClick="select_ok('selectform','selectall','check_all');"/></td>
		<td width="10%"><a id="bbslimit_adid" class="infolink06" href="javascript:onlimit('atid','asc','#bbslimit_adid','#bbs_limit_adid','','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['forummain_text_mid'] ?></a><span id="bbs_limit_adid" class="limitdesc"></span></td>
		<td width="30%"><?php echo $this->_tpl_vars['ST']['adverttypemain_text_title'] ?></td>
		<td width="20%"><?php echo $this->_tpl_vars['ST']['adverttypemain_text_size'] ?></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['advertmain_text_class'] ?></td>
		<td width="25%"><?php echo $this->_tpl_vars['ST']['printtemplatemain_text_set'] ?></td>
	</tr>
</table>