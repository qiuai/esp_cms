<?php /* 专题列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'subjectlist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('article','subadd')==true ){ ?>
	<li class="menumain"><a class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['subjectmanage_type_add'],'hc') ?>','index.php?archive=subjectmanage&action=subadd&tab=false&mid=<?php echo $this->_tpl_vars['mid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));" id="addinfo" href="#body" title="<?php echo $this->_tpl_vars['ST']['subjectmanage_type_add'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['selAll_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<li class="menumain"><a id="bolt" href="#body" hidefocus="true" hidefocus="true"><?php echo $this->_tpl_vars['ST']['bolt_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['iswap_title'] ?></span>
				<ul>
					<li><a class="menunoclick" id="subiswap0" href="#body" onclick="javascript:dbfilter('subiswap','iswap',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="subiswap1" href="#body" onclick="javascript:dbfilter('subiswap','iswap',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="subiswap2" href="#body" onclick="javascript:dbfilter('subiswap','iswap',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['article_ishtml_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="subishtml0" href="#body" onclick="javascript:dbfilter('subishtml','ishtml',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="subishtml1" href="#body" onclick="javascript:dbfilter('subishtml','ishtml',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['article_ishtml_botton_2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_ishtml_botton_2'] ?></a></li>
					<li><a class="menuclick" id="subishtml2" href="#body" onclick="javascript:dbfilter('subishtml','ishtml',2,2,3,'selectform','selectall','check_all')" title="[%$this->_tpl_vars['ST']['article_ishtml_botton_1']]" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_ishtml_botton_1'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['input_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="subisclass0" href="#body" onclick="javascript:dbfilter('subisclass','isclass',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="subisclass1" href="#body" onclick="javascript:dbfilter('subisclass','isclass',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['infooktype_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['infooktype_botton'] ?></a></li>
					<li><a class="menuclick" id="subisclass2" href="#body" onclick="javascript:dbfilter('subisclass','isclass',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['lockoktype_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['lockoktype_botton'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<?php if($this->powercheck('article','subedit')==true ){ ?>
	<li class="menumain"><a id="sortall" onclick="javascript:sortinput('index.php?archive=subjectmanage&action=sort','index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['sort_messok'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['pid_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
	<?php if($this->powercheck('article','subedit')==true ){ ?>
	<li class="menumain"><a id="setbotton" href="#body" hidefocus="true" title="<?php echo $this->_tpl_vars['ST']['set_botton'] ?>"><?php echo $this->_tpl_vars['ST']['set_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['inputtype_set_botton'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=subjectmanage&action=subsetting','selectinfoid',true,'isclass',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['infooktype_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['infooktype_botton'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=subjectmanage&action=subsetting','selectinfoid',true,'isclass',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['lockoktype_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['lockoktype_botton'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<?php } ?>
</ul>
<?php } ?>      