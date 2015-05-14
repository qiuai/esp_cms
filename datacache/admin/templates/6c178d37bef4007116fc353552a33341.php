<table border="0" width="100%" bordercolor="#FFFFFF">
	<tr>
		<td width="3%"><input type="checkbox" name="check_all" id="check_all" value="1" onClick="select_ok('selectform','selectall','check_all');"/></td>
		<td width="6%"><a id="btlimit_pid" class="infolink06" href="javascript:onlimit('pid','desc','#btlimit_pid','#limit_pid','','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['typemanage_text_pid'] ?></a><span id="limit_pid" class="limitasc"></span></td>
		<td width="5%"><?php echo $this->_tpl_vars['ST']['typemanage_text_tid'] ?></td>
		<td width="22%"><?php echo $this->_tpl_vars['ST']['typemanage_text_typename'] ?></td>
		<td width="8%"><?php echo $this->_tpl_vars['ST']['typemanage_text_purview'] ?></td>
		<!--<td width="13%"><?php echo $this->_tpl_vars['ST']['modelmanage_text_class'] ?></td>
		<td width="33%"><?php echo $this->_tpl_vars['ST']['modelmanage_text_set'] ?></td>
		-->
		<td width="56%"><?php echo $this->_tpl_vars['ST']['modelmanage_text_set'] ?></td>
	</tr>
</table>