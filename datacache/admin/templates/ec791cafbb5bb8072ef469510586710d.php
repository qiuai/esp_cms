<?php if(count($this->_tpl_vars['array']) > 0){ ?>
<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
<div class="infolist" title="<?php echo $this->_tpl_vars['array'][$list]['adtypename'] ?>" onselectstart="return false;" <?php if($this->powercheck('communicate','adverttypeedit')==true ){ ?>ondblClick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['array'][$list]['adtypename'],'hc') ?>-<?php echo $this->_tpl_vars['ST']['setedit_botton'] ?>','index.php?archive=adverttypemain&action=adverttypeedit&atid=<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'articleeditbotton<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>',self.frameElement.getAttribute('name'));"<?php } ?>>
	<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
		<tr>
			<td width="5%"><input type="checkbox" name="selectinfoid" value="<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>"></td>
			<td width="10%"><?php echo $this->_tpl_vars['array'][$list]['atid'] ?></td>
			<td width="30%"><?php echo $this->_tpl_vars['array'][$list]['adtypename'] ?></td>
			<td width="20%"><?php echo $this->_tpl_vars['array'][$list]['width'] ?> * <?php echo $this->_tpl_vars['array'][$list]['height'] ?></td>
			<td width="10%" id="infotype">
				<table>
					<tr>
						<td><?php if($this->_tpl_vars['array'][$list]['isclass']==1){ ?><span class="audit_ok" title="<?php echo $this->_tpl_vars['ST']['article_audit_ok'] ?>"></span><?php }else{ ?><span class="audit_no" title="<?php echo $this->_tpl_vars['ST']['article_audit_no'] ?>"></span><?php } ?></td>
					</tr>
				</table>
			</td>
			<td width="25%" id="infotype">
				<?php if($this->powercheck('communicate','adverttypeedit')==true ){ ?>
				<table border="0" style="border-collapse:collapse" bordercolor="#FFFFFF">
					<tr>
						<td><a class="setedit3" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['array'][$list]['adtypename'],'hc') ?><?php echo $this->_tpl_vars['ST']['viewbannlist_botton'] ?>','index.php?archive=management&action=list&listfunction=advertlist&atid=<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),true,'typelist<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>',self.frameElement.getAttribute('name'));" id="typelist<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['ST']['viewbannlist_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['viewbannlist_botton'] ?></a></td>
						<?php if($this->_tpl_vars['array'][$list]['isxml']==1){ ?><td class="padding-left3"><a class="setedit3" onclick="javascript:submiturl('index.php?archive=adverttypemain&action=xmlcreat&atid=<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>&lng=<?php echo $this->_tpl_vars['array'][$list]['lng'] ?>','index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['adverttypemain_setting_xmlcreat_xml'] ?>','selectform','selectall','check_all')" href="#body" title="<?php echo $this->_tpl_vars['ST']['adverttypemain_setting_xmlcreat'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['adverttypemain_setting_xmlcreat'] ?></a><?php } ?></td>
						<td class="padding-left3"><a class="setedit" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['array'][$list]['adtypename'],'hc') ?>-<?php echo $this->_tpl_vars['ST']['setedit_botton'] ?>','index.php?archive=adverttypemain&action=adverttypeedit&atid=<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'articleeditbotton<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>',self.frameElement.getAttribute('name'));" id="articleeditbotton<?php echo $this->_tpl_vars['array'][$list]['atid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['array'][$list]['adtypename'] ?><?php echo $this->_tpl_vars['ST']['setedit_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['setedit_botton'] ?></a></td>
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