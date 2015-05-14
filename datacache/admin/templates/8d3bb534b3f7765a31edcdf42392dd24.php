<?php /* 语言包管理 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'lanpacklist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('system','lanpackadd')==true ){ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_lanpackadd'],'hc') ?>','index.php?archive=languagepack&action=lanpackadd&tab=true&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_lanpackadd'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_lanpackadd'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<li class="menumain"><a id="bolt" href="#body" hidefocus="true" hidefocus="true"><?php echo $this->_tpl_vars['ST']['bolt_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['languagepack_add_typeid'] ?></span>
				<ul id="modeltablist">
					<li><a class="menunoclick" id="typeid0" href="#body" onclick="javascript:dbfilter('typeid','typeid',0,0,7,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<?php if (count($this->_tpl_vars['lantype'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['lantype']); $ii++){?>
					<li><a class="menuclick" id="typeid<?php echo $ii+1 ?>" href="#body" onclick="javascript:dbfilter('typeid','typeid','<?php echo $this->_tpl_vars['lantype'][$ii]['key'] ?>',<?php echo $ii+1 ?>,7,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['lantype'][$ii]['name'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['lantype'][$ii]['name'] ?></a></li>
					<?php }} ?>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['languagepack_lockin_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="lockin0" href="#body" onclick="javascript:dbfilter('lockin','lockin',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="lockin1" href="#body" onclick="javascript:dbfilter('lockin','lockin',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['languagepack_lockin_botton1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['languagepack_lockin_botton1'] ?></a></li>
					<li><a class="menuclick" id="lockin2" href="#body" onclick="javascript:dbfilter('lockin','lockin',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['languagepack_lockin_botton2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['languagepack_lockin_botton2'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<?php if($this->powercheck('system','lanpackdel')==true ){ ?>
	<li class="menumain"><a id="del" onclick="javascript:callrun('index.php?archive=languagepack&action=lanpackdel','selectinfoid',false,null,null,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['del_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['del_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
</ul>
<?php } ?>      