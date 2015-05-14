<?php if(count($this->_tpl_vars['array']) > 0){ ?>
<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
<div class="infolist" title="<?php echo $this->_tpl_vars['array'][$list]['title'] ?> - <?php echo $this->timeformat($this->_tpl_vars['array'][$list]['addtime'],3) ?>" onselectstart="return false;" <?php if($this->powercheck('communicate','advertedit')==true ){ ?>ondblClick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['array'][$list]['title'],'hc') ?>-<?php echo $this->_tpl_vars['ST']['setedit_botton'] ?>','index.php?archive=advertmain&action=advertedit&adid=<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'articleeditbotton<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>',self.frameElement.getAttribute('name'));"<?php } ?>>
	<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
		<tr>
			<td width="5%"><input type="checkbox" name="selectinfoid" value="<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>"></td>
			<td width="8%"><input type="hidden" name="infoid" value="<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>"><input type="text" name="infopid" size="3" value="<?php echo $this->_tpl_vars['array'][$list]['pid'] ?>" class="infoInput" onclick="if(this.value=='<?php echo $this->_tpl_vars['array'][$list]['pid'] ?>'){this.value = '';}else {this.select();}" onblur="if(this.value ==''){this.value ='<?php echo $this->_tpl_vars['array'][$list]['pid'] ?>';}"></td>
			<td width="8%"><?php echo $this->_tpl_vars['array'][$list]['adid'] ?></td>
			<td width="38%"><?php echo $this->cutstr($this->_tpl_vars['array'][$list]['title'],20) ?></td>
			<td width="20%"><?php echo $this->_tpl_vars['array'][$list]['adtypename'] ?></td>
			<td width="8%" id="infotype">
				<table>
					<tr>
						<td><?php if($this->_tpl_vars['array'][$list]['isclass']==1){ ?><span class="audit_ok" title="<?php echo $this->_tpl_vars['ST']['article_audit_ok'] ?>"></span><?php }else{ ?><span class="audit_no" title="<?php echo $this->_tpl_vars['ST']['article_audit_no'] ?>"></span><?php } ?></td>
					</tr>
				</table>
			</td>
			<td width="13%" id="infotype">
				<?php if($this->powercheck('communicate','advertedit')==true ){ ?>
				<table border="0" style="border-collapse:collapse" bordercolor="#FFFFFF">
					<tr>
						<td><a class="setedit" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['array'][$list]['title'],'hc') ?>-<?php echo $this->_tpl_vars['ST']['setedit_botton'] ?>','index.php?archive=advertmain&action=advertedit&adid=<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'articleeditbotton<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>',self.frameElement.getAttribute('name'));" id="articleeditbotton<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['array'][$list]['title'] ?><?php echo $this->_tpl_vars['ST']['setedit_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['setedit_botton'] ?></a></td>
						<td class="padding-left3"><a class="setedit" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['array'][$list]['title'],'hc') ?>-<?php echo $this->_tpl_vars['ST']['setcopy_botton'] ?>','index.php?archive=advertmain&action=advertedit&adid=<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>&type=add&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'articleeditbotton<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>',self.frameElement.getAttribute('name'));" id="articleeditbotton<?php echo $this->_tpl_vars['array'][$list]['adid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['array'][$list]['title'] ?><?php echo $this->_tpl_vars['ST']['setcopy_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['setcopy_botton'] ?></a></td>
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