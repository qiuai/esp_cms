<?php if(count($this->_tpl_vars['array']) > 0){ ?>
<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
<div class="infolist" onselectstart="return false;" title="<?php echo $this->_tpl_vars['array'][$list]['labelname'] ?>" <?php if($this->powercheck('article','recomedit')==true ){ ?>ondblClick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['array'][$list]['labelname'] ?><?php echo $this->_tpl_vars['ST']['recommanage_edit_title'] ?>','index.php?archive=recommanage&action=recomedit&dlid=<?php echo $this->_tpl_vars['array'][$list]['dlid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'recommedit<?php echo $this->_tpl_vars['array'][$list]['dlid'] ?>',self.frameElement.getAttribute('name'));"<?php } ?>>
	<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
		<tr>
			<td width="8%"><input type="checkbox" name="selectinfoid" value="<?php echo $this->_tpl_vars['array'][$list]['dlid'] ?>"></td>
			<td width="10%"><?php echo $this->_tpl_vars['array'][$list]['dlid'] ?></td>
			<td width="12%"><?php echo $this->_tpl_vars['array'][$list]['lng'] ?></td>
			<td width="40%"><?php echo $this->_tpl_vars['array'][$list]['labelname'] ?></td>
			<td width="20%"><?php echo $this->_tpl_vars['array'][$list]['modelname'] ?></td>
			<td width="10%" id="infotype">
				<?php if($this->powercheck('article','recomedit')==true ){ ?>
				<table border="0" style="border-collapse:collapse" bordercolor="#FFFFFF">
					<tr>
						<td><a class="setedit" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['array'][$list]['labelname'] ?><?php echo $this->_tpl_vars['ST']['recommanage_edit_title'] ?>','index.php?archive=recommanage&action=recomedit&dlid=<?php echo $this->_tpl_vars['array'][$list]['dlid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'recommedit<?php echo $this->_tpl_vars['array'][$list]['dlid'] ?>',self.frameElement.getAttribute('name'));" id="recommedit<?php echo $this->_tpl_vars['array'][$list]['dlid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['array'][$list]['labelname'] ?><?php echo $this->_tpl_vars['ST']['recommanage_edit_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['setedit_botton'] ?></a></td>
					</tr>
				</table>
				<?php } ?>
			</td>
		</tr>
	</table>
</div>
<?php }} ?>
<?php }else{ ?>
<div class="infolist">
<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
	<tr>
	    <td align="center"><?php echo $this->_tpl_vars['ST']['list_nothing_title'] ?></td>
	</tr>
</table>
</div>
<?php } ?>      