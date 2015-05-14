<?php /* 分类列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'typelist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('article','typeadd')==true ){ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_type'],'hc') ?>','index.php?archive=typemanage&action=typeadd&mid=<?php echo $this->_tpl_vars['tabarray']['mid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_type'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_type'] ?></a></li>
	<li class="menumain"><a id="addinfo2" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_type_base'],'hc') ?>','index.php?archive=typemanage&action=typeadd&styleid=4&mid=<?php echo $this->_tpl_vars['tabarray']['mid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo2',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_type_base'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_type_base'] ?></a></li>
	<li class="menumain"><a id="addinfo3" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_type_link'],'hc') ?>','index.php?archive=typemanage&action=typeadd&styleid=3&mid=<?php echo $this->_tpl_vars['tabarray']['mid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo3',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_type_link'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_type_link'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['selAll_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<?php if($this->powercheck('article','typeedit')==true ){ ?>
	<li class="menumain"><a id="sortall" onclick="javascript:sortinput('index.php?archive=typemanage&action=sort','index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['sort_messok'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['pid_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
	<?php if($this->powercheck('article','typeedit')==true ){ ?>
	<li class="menumain"><a id="setbotton" href="#body" hidefocus="true" title="<?php echo $this->_tpl_vars['ST']['set_botton'] ?>"><?php echo $this->_tpl_vars['ST']['set_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['inputtype_set_botton'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=typemanage&action=typesetting','selectinfoid',true,'isclass',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['infooktype_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['infooktype_botton'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=typemanage&action=typesetting','selectinfoid',true,'isclass',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['lockoktype_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['lockoktype_botton'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['typemanage_ismenu_botton'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=typemanage&action=typesetting&ch=1','selectinfoid',true,'ismenu',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=typemanage&action=typesetting&ch=1','selectinfoid',true,'ismenu',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_isaccessory_set'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=typemanage&action=typesetting&ch=1','selectinfoid',true,'isaccessory',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['infook_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['infook_botton'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=typemanage&action=typesetting&ch=1','selectinfoid',true,'isaccessory',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['lockok_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['lockok_botton'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<?php } ?>
</ul>
<?php } ?>      