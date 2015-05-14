<?php /* 内链接分组列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'seolinktypelist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('article','keylinktypeadd')==true ){ ?>
	<?php if($this->_tpl_vars['tabarray']['mid']!=''){ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_seotypelink'],'hc') ?>','index.php?archive=seomanage&action=keylinktypeadd&tid=<?php echo $this->_tpl_vars['tabarray']['tid'] ?>&mid=<?php echo $this->_tpl_vars['tabarray']['mid'] ?>&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_seotypelink'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_seotypelink'] ?></a></li>
	<?php }else{ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:alert('<?php echo $this->_tpl_vars['ST']['article_js_doc_add_midtidnoselect'] ?>');return false;"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_seotypelink'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_seotypelink'] ?></a></li>
	<?php } ?>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['selAll_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<?php if($this->powercheck('article','delkeytype')==true ){ ?>
	<li class="menumain"><a id="del" onclick="javascript:callrun('index.php?archive=seomanage&action=delkeytype','selectinfoid',false,null,null,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['del_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['del_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
</ul>
<?php } ?>      