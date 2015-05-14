<table border="0" width="100%" bordercolor="#FFFFFF">
	<tr>
		<td width="10%"><input type="checkbox" name="check_all" id="check_all" value="1" onClick="select_ok('selectform','selectall','check_all');"/></td>
		<td width="10%"><a id="btlimit_id" class="infolink06" href="javascript:onlimit('mid','asc','#btlimit_id','#limit_id','','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['modelmanage_text_mid'] ?></a><span id="limit_id" class="limitdesc"></span></td>
		<td width="50%"><?php echo $this->_tpl_vars['ST']['modelmanage_text_modelname'] ?></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['modelmanage_text_class'] ?></td>
		<td width="20%"><?php echo $this->_tpl_vars['ST']['modelmanage_text_set'] ?></td>
	</tr>
</table>