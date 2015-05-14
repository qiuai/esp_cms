<?php /* 广告列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'advertlist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('communicate','advertadd')==true ){ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_advert'],'hc') ?>','index.php?archive=advertmain&action=advertadd&atid=<?php echo $this->_tpl_vars['tabarray']['atid'] ?>&type=add&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_advert'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_advert'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['selAll_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<li class="menumain"><a id="bolt" href="#body" hidefocus="true" hidefocus="true"><?php echo $this->_tpl_vars['ST']['bolt_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['lock_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="articleisclass0" href="#body" onclick="javascript:dbfilter('articleisclass','isclass',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="articleisclass1" href="#body" onclick="javascript:dbfilter('articleisclass','isclass',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['article_audit_ok'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_audit_ok'] ?></a></li>
					<li><a class="menuclick" id="articleisclass2" href="#body" onclick="javascript:dbfilter('articleisclass','isclass',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['article_audit_no'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_audit_no'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['advertmain_text_istime'] ?></span>
				<ul>
					<li><a class="menunoclick" id="istime0" href="#body" onclick="javascript:dbfilter('istime','istime',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="istime1" href="#body" onclick="javascript:dbfilter('istime','istime',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['article_audit_ok'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_audit_ok'] ?></a></li>
					<li><a class="menuclick" id="istime2" href="#body" onclick="javascript:dbfilter('istime','istime',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['article_audit_no'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_audit_no'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<?php if($this->powercheck('communicate','advertdel')==true ){ ?>
	<li class="menumain"><a id="del" onclick="javascript:callrun('index.php?archive=advertmain&action=advertdel','selectinfoid',false,null,null,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['del_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['del_botton'] ?></a></li>
	<?php } ?>
	<?php if($this->powercheck('communicate','advertedit')==true ){ ?>
	<li class="menumain"><a id="sortall" onclick="javascript:sortinput('index.php?archive=advertmain&action=sort','index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['sort_messok'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all','infoid','infopid');" href="#body" title="<?php echo $this->_tpl_vars['ST']['article_log_sort'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['pid_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
	<?php if($this->powercheck('communicate','advertedit')==true ){ ?>
	<li class="menumain"><a id="setbotton" href="#body" hidefocus="true" title="<?php echo $this->_tpl_vars['ST']['set_botton'] ?>"><?php echo $this->_tpl_vars['ST']['set_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['lock_set_botton'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=advertmain&action=setting','selectinfoid',true,'isclass',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=advertmain&action=setting','selectinfoid',true,'isclass',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<?php } ?>
</ul>
<?php } ?>      