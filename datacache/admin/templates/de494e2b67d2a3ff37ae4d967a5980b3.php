<?php if(count($this->_tpl_vars['array']) > 0){ ?>
<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
<div class="infolist" onselectstart="return false;" title="<?php echo $this->_tpl_vars['array'][$list]['subjectname'] ?>" <?php if($this->powercheck('article','subedit')==true ){ ?>ondblClick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['subjectmanage_edit_title'] ?>','index.php?archive=subjectmanage&action=subedit&sid=<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'subjectedit<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>',self.frameElement.getAttribute('name'));"<?php } ?>>
	<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
		<tr>
			<td width="4%"><input type="checkbox" name="selectinfoid" value="<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>"></td>
			<td width="8%">
				<input type="hidden" name="infoid" id="infoid" value="<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>">
				<input type="text" name="pid" size="3" value="<?php echo $this->_tpl_vars['array'][$list]['pid'] ?>" class="infoInput" onclick="if(this.value=='<?php echo $this->_tpl_vars['array'][$list]['pid'] ?>'){this.value = '';}else {this.select();}" onblur="if(this.value ==''){this.value ='<?php echo $this->_tpl_vars['array'][$list]['pid'] ?>';}">
			</td>
			<td width="8%"><?php echo $this->_tpl_vars['array'][$list]['sid'] ?></td>
			<td width="6%"><?php echo $this->_tpl_vars['array'][$list]['lng'] ?></td>
			<td width="34%"><a target="_blank" class="infolink04" href="<?php echo $this->_tpl_vars['array'][$list]['glink'] ?>"><?php echo $this->_tpl_vars['array'][$list]['subjectname'] ?></a></td>
			<td width="10%"><?php echo $this->_tpl_vars['array'][$list]['puvname'] ?></td>
			<td width="10%" id="infotype">
				<table>
					<tr>
						<td><?php if($this->_tpl_vars['array'][$list]['subpic']!=''){ ?><span class="pic_ok" title="<?php echo $this->_tpl_vars['ST']['article_pic_ok'] ?>"></span><?php }else{ ?><span class="pic_no" title="<?php echo $this->_tpl_vars['ST']['article_pic_no'] ?>"></span><?php } ?></td>
						<td><?php if($this->_tpl_vars['array'][$list]['iswap']==1){ ?><span class="iswap_ok" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>"></span><?php }else{ ?><span class="iswap_no" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>"></span><?php } ?></td>
						<td><?php if($this->_tpl_vars['array'][$list]['isclass']==1){ ?><span class="audit_ok" title="<?php echo $this->_tpl_vars['ST']['infooktype_botton'] ?>"></span><?php }else{ ?><span class="audit_no" title="<?php echo $this->_tpl_vars['ST']['lockoktype_botton'] ?>"></span><?php } ?></td>
					</tr>
				</table>
			</td>
			<td width="20%" id="infotype">
				<table border="0" style="border-collapse:collapse" bordercolor="#FFFFFF">
					<tr>
						<td><a class="setedit" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['subjectmanage_text_infolist_title'] ?>','index.php?archive=management&action=list&listfunction=articlelist&sid=<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>&mid=<?php echo $this->_tpl_vars['array'][$list]['mid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),true,'subjectlist<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>',self.frameElement.getAttribute('name'));" id="subjectlist<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['ST']['subjectmanage_text_infolist_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['viewfield_botton'] ?></a></td>
						<?php if($this->powercheck('article','subedit')==true ){ ?>
						<td class="padding-left3"><a class="setedit" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['subjectmanage_edit_title'] ?>','index.php?archive=subjectmanage&action=subedit&sid=<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'subjectedit<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>',self.frameElement.getAttribute('name'));" id="subjectedit<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['array'][$list]['subjectname'] ?><?php echo $this->_tpl_vars['ST']['subjectmanage_edit_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['setedit_botton'] ?></a></td>
						<?php } ?>
						<?php if($this->powercheck('article','subdel')==true ){ ?>
						<td class="padding-left3"><a class="setedit" onclick="javascript:submiturl('index.php?archive=subjectmanage&action=subdel&sid=<?php echo $this->_tpl_vars['array'][$list]['sid'] ?>&freshid='+Math.random(),'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['del_messok'] ?>','selectform','selectall','check_all');" href="#body" title="<?php echo $this->_tpl_vars['ST']['setdel_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['setdel_botton'] ?></a></td>
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