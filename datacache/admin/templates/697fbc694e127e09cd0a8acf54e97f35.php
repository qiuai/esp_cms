<table border="0" width="100%" bordercolor="#FFFFFF">
	<tr>
		<td width="4%"><input type="checkbox" name="check_all" id="check_all" value="1" onClick="select_ok('selectform', 'selectall', 'check_all');"/></td>
		<td width="7%"><a id="ddbtlimit_pid" class="infolink06" href="javascript:onlimit('pid','desc','#ddbtlimit_pid','#ddlimit_pid','#limit_did','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_text_pid'] ?></a><span id="ddlimit_pid" class="limitdesc displaynone"></span></td>
		<td width="7%"><a id="btlimit_did" class="infolink06" href="javascript:onlimit('did','asc','#btlimit_did','#limit_did','#ddlimit_pid','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_text_did'] ?></a><span id="limit_did" class="limitdesc"></span></td>
		<td width="40%"><?php echo $this->_tpl_vars['ST']['article_text_title'] ?></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['article_text_type'] ?></td>
		<td width="11%"><?php echo $this->_tpl_vars['ST']['article_text_class'] ?></td>
		<td width="20%"><?php echo $this->_tpl_vars['ST']['article_text_set'] ?></td>
	</tr>
</table>