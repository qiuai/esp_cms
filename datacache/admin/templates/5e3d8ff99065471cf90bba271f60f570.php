<?php /* 模型字段列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'modelattlist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('article','modelattradd')==true ){ ?>
	<li class="menumain"><a class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['modelmanage_attr_add'],'hc') ?>','index.php?archive=modelmanage&action=modelattradd&mid=<?php echo $this->_tpl_vars['mid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addattr<?php echo $this->_tpl_vars['mid'] ?>',self.frameElement.getAttribute('name'));" id="addattr<?php echo $this->_tpl_vars['mid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['ST']['modelmanage_attr_add'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['modelmanage_attr_add'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['selAll_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<li class="menumain"><a id="bolt" href="#body" hidefocus="true" hidefocus="true"><?php echo $this->_tpl_vars['ST']['bolt_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['user_type_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="attrisclass0" href="#body" onclick="javascript:dbfilter('attrisclass','isclass',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="attrisclass1" href="#body" onclick="javascript:dbfilter('attrisclass','isclass',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="attrisclass2" href="#body" onclick="javascript:dbfilter('attrisclass','isclass',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_attr_isvalidate_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="isvalidate0" href="#body" onclick="javascript:dbfilter('isvalidate','isvalidate',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="isvalidate1" href="#body" onclick="javascript:dbfilter('isvalidate','isvalidate',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="isvalidate2" href="#body" onclick="javascript:dbfilter('isvalidate','isvalidate',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_attr_issearch_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="issearch0" href="#body" onclick="javascript:dbfilter('issearch','issearch',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="issearch1" href="#body" onclick="javascript:dbfilter('issearch','issearch',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="issearch2" href="#body" onclick="javascript:dbfilter('issearch','issearch',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<?php if($this->powercheck('article','delattr')==true ){ ?>
	<li class="menumain"><a id="del" onclick="javascript:callrun('index.php?archive=modelmanage&action=delattr','selectinfoid',false,null,null,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['del_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['del_botton'] ?></a></li>
	<?php } ?>
	<?php if($this->powercheck('article','modelattredit')==true ){ ?>
	<li class="menumain"><a id="sortall" onclick="javascript:sortinput('index.php?archive=modelmanage&action=attrsort&mid=<?php echo $this->_tpl_vars['mid'] ?>','index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['sort_messok'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['pid_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
</ul>
<?php } ?>      