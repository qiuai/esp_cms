<?php /* 数据库 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'sqllist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('system','export')==true ){ ?>
	<li class="menumain"><a id="dbbak" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['sql_bak_botton_title'] ?>','index.php?archive=sqlmanage&action=export&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),true,true);" href="#body" title="<?php echo $this->_tpl_vars['ST']['sql_bak_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['sql_bak_botton'] ?></a></li>
	<?php } ?>
	<?php if($this->powercheck('system','bakfilelist')==true ){ ?>
	<li class="menumain"><a id="restore" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['sql_restore_botton_title'] ?>','index.php?archive=sqlmanage&action=bakfilelist&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),true,true);" href="#body" title="<?php echo $this->_tpl_vars['ST']['sql_restore_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['sql_restore_botton'] ?></a></li>
	<?php } ?>
	<?php if($this->powercheck('system','sqldel')==true ){ ?>
	<li class="menumain"><a id="del" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['sql_del_botton_title'] ?>','index.php?archive=sqlmanage&action=bakfilelist&listtype=del&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),true,true);" href="#body" title="<?php echo $this->_tpl_vars['ST']['sql_del_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['del_botton'] ?></a></li>
	<?php } ?>
	<?php if($this->powercheck('system','optimize')==true ){ ?>
	<li class="menumain"><a id="optimize" onclick="javascript:submiturl('index.php?archive=sqlmanage&action=optimize','index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>',false,'','selectform','selectall','check_all')" href="#body" title="<?php echo $this->_tpl_vars['ST']['sql_optimize_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['sql_optimize_botton_title'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
</ul>
<?php } ?>      