<table border="0" width="100%" bordercolor="#FFFFFF">
	<tr>
		<td width="5%"><input type="checkbox" name="check_all" id="check_all" value="1" onClick="select_ok('selectform','selectall','check_all');"/></td>
		<td width="8%"><a id="btlimit_amid" class="infolink06" href="javascript:onlimit('mlvid','asc','#btlimit_amid','#limit_amid','','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['forumtype_text_tid'] ?></a><span id="limit_amid" class="limitdesc"></span></td>
		<td width="30%"><?php echo $this->_tpl_vars['ST']['mailinvite_text_title'] ?></td>
		<td width="12%"><?php echo $this->_tpl_vars['ST']['templatemain_text_time'] ?></td>
		<td width="7%"><?php echo $this->_tpl_vars['ST']['forumtype_text_class'] ?></td>
		<td width="38%"><?php echo $this->_tpl_vars['ST']['templatemain_text_set'] ?></td>
	</tr>
</table>