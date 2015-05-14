<?php /* 模型类别列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'modellist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('article','modeladd')==true ){ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['modelmanage_add_title'],'hc') ?>','index.php?archive=modelmanage&action=modeladd&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['modelmanage_add_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['modelmanage_add_title'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['selAll_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<li class="menumain"><a id="bolt" href="#body" hidefocus="true" hidefocus="true"><?php echo $this->_tpl_vars['ST']['bolt_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['user_type_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="isclass0" href="#body" onclick="javascript:dbfilter('isclass','isclass',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="isclass1" href="#body" onclick="javascript:dbfilter('isclass','isclass',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="isclass2" href="#body" onclick="javascript:dbfilter('isclass','isclass',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_islockin_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="lockin0" href="#body" onclick="javascript:dbfilter('lockin','lockin',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="lockin1" href="#body" onclick="javascript:dbfilter('lockin','lockin',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['modelmanage_islockin_botton1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['modelmanage_islockin_botton1'] ?></a></li>
					<li><a class="menuclick" id="lockin2" href="#body" onclick="javascript:dbfilter('lockin','lockin',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['modelmanage_islockin_botton2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['modelmanage_islockin_botton2'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_isbase_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="isbase0" href="#body" onclick="javascript:dbfilter('isbase','isbase',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="isbase1" href="#body" onclick="javascript:dbfilter('isbase','isbase',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="isbase2" href="#body" onclick="javascript:dbfilter('isbase','isbase',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_istsn_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="istsn0" href="#body" onclick="javascript:dbfilter('istsn','istsn',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="istsn1" href="#body" onclick="javascript:dbfilter('istsn','istsn',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="istsn2" href="#body" onclick="javascript:dbfilter('istsn','istsn',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>

			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_isalbum_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="isalbum0" href="#body" onclick="javascript:dbfilter('isalbum','isalbum',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="isalbum1" href="#body" onclick="javascript:dbfilter('isalbum','isalbum',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="isalbum2" href="#body" onclick="javascript:dbfilter('isalbum','isalbum',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>


			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_isextid_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="isextid0" href="#body" onclick="javascript:dbfilter('isextid','isextid',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="isextid1" href="#body" onclick="javascript:dbfilter('isextid','isextid',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="isextid2" href="#body" onclick="javascript:dbfilter('isextid','isextid',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_issid_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="issid0" href="#body" onclick="javascript:dbfilter('issid','issid',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="issid1" href="#body" onclick="javascript:dbfilter('issid','issid',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="issid2" href="#body" onclick="javascript:dbfilter('issid','issid',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_isfgid_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="isfgid0" href="#body" onclick="javascript:dbfilter('isfgid','isfgid',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="isfgid1" href="#body" onclick="javascript:dbfilter('isfgid','isfgid',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="isfgid2" href="#body" onclick="javascript:dbfilter('isfgid','isfgid',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['modelmanage_islinkdid_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="islinkdid0" href="#body" onclick="javascript:dbfilter('islinkdid','islinkdid',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="islinkdid1" href="#body" onclick="javascript:dbfilter('islinkdid','islinkdid',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="islinkdid2" href="#body" onclick="javascript:dbfilter('islinkdid','islinkdid',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
	<?php if($this->powercheck('article','modeledit')==true ){ ?>
	<li class="menumain"><a id="setbotton" href="#body" hidefocus="true" title="<?php echo $this->_tpl_vars['ST']['set_botton'] ?>"><?php echo $this->_tpl_vars['ST']['set_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['user_type_set_botton'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=modelmanage&action=modelsetting','selectinfoid',true,'isclass',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=modelmanage&action=modelsetting','selectinfoid',true,'isclass',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<?php } ?>
</ul>
<?php } ?>      