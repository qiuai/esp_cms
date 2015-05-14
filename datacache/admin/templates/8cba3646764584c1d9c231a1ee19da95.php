<?php if(count($this->_tpl_vars['array']) > 0){ ?>
<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
<div class="infolist" title="<?php echo $this->_tpl_vars['array'][$list]['title'] ?>" onselectstart="return false;" <?php if($this->powercheck('marketing','mailinviteedit')==true ){ ?>ondblClick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['setedit_botton'] ?>','index.php?archive=mailinvite&action=mailinviteedit&mlvid=<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),true,'mailetypeidt<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>',self.frameElement.getAttribute('name'));"<?php } ?>>
	<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
		<tr>
			<td width="5%"><input type="checkbox" name="selectinfoid" value="<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>"></td>
			<td width="8%"><?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?></td>
			<td width="30%"><?php echo $this->_tpl_vars['array'][$list]['title'] ?></td>
			<td width="12%"><?php echo $this->timeformat($this->_tpl_vars['array'][$list]['addtime'],3) ?></td>
			<td width="7%" id="infotype">
				<table>
					<tr>
						<td><?php if($this->_tpl_vars['array'][$list]['isclass']==1){ ?><span class="audit_ok" title="<?php echo $this->_tpl_vars['ST']['article_audit_ok'] ?>"></span><?php }else{ ?><span class="audit_no" title="<?php echo $this->_tpl_vars['ST']['article_audit_no'] ?>"></span><?php } ?></td>
					</tr>
				</table>
			</td>
			<td width="38%" id="infotype">
				<table border="0" style="border-collapse:collapse" bordercolor="#FFFFFF">
					<tr>
						<td><a class="setedit3" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['mailinvite_botton_title'] ?>','index.php?archive=management&action=list&listfunction=mailinvitesendlist&mlvid=<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),true,'typelist<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>',self.frameElement.getAttribute('name'));" id="typelist<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['ST']['mailinvite_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['mailinvite_botton_title'] ?></a></td>
						<?php if($this->powercheck('marketing','mailinviteedit')==true ){ ?>
						<td class="padding-left3"><a class="setedit" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['setedit_botton'] ?>','index.php?archive=mailinvite&action=mailinviteedit&mlvid=<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'mailetypeidt<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>',self.frameElement.getAttribute('name'));" id="mailetypeidt<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['ST']['setedit_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['setedit_botton'] ?></a></td>
						<?php } ?>
						<?php if($this->powercheck('marketing','mailinviteout')==true ){ ?>
						<td class="padding-left3"><a class="setedit2" target="_blank" href="index.php?archive=mailinvite&action=mailinviteout&mlvid=<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>" title="<?php echo $this->_tpl_vars['ST']['mailinvite_botton_outmail'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['mailinvite_botton_outmail'] ?></a></td>
						<?php } ?>
						<?php if($this->powercheck('marketing','mailinviteinput')==true ){ ?>
						<td class="padding-left3"><a class="setedit3" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['mailinvite_botton_intmail'] ?>','index.php?archive=mailinvite&action=mailinviteinput&mlvid=<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'mailinput<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>',self.frameElement.getAttribute('name'));" id="mailinput<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['ST']['mailinvite_botton_intmail'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['mailinvite_botton_intmail'] ?></a></td>
						<td class="padding-left3"><a class="setedit3" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['mailinvite_botton_intmail2'] ?>','index.php?archive=mailinvite&action=mailinviteinput&mlvid=<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>&type=member&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'mailinput<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>',self.frameElement.getAttribute('name'));" id="mailinput<?php echo $this->_tpl_vars['array'][$list]['mlvid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['ST']['mailinvite_botton_intmail2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['mailinvite_botton_intmail2'] ?></a></td>
						<?php } ?>
					</tr>
				</table>
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