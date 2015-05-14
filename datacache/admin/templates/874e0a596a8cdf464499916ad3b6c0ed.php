<?php /* 显示属性列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'recomlist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('article','recomadd')==true ){ ?>
	<li class="menumain"><a class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['recommanage_type_add'],'hc') ?>','index.php?archive=recommanage&action=recomadd&tab=true&mid=<?php echo $this->_tpl_vars['mid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));" id="addinfo" href="#body" title="<?php echo $this->_tpl_vars['ST']['recommanage_type_add'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['recommanage_type_add'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<?php if($this->powercheck('article','delrecomm')==true ){ ?>
	<li class="menumain"><a id="del" onclick="javascript:callrun('index.php?archive=recommanage&action=delrecomm','selectinfoid',false,null,null,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['del_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['del_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
</ul>
<?php } ?>      