<?php /* 主题列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'skinlist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('templates','skinadd')==true ){ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_skinadd'],'hc') ?>','index.php?archive=skinmain&action=skinadd&tab=true&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_skinadd'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_skinadd'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="bolt" href="#body" hidefocus="true" hidefocus="true"><?php echo $this->_tpl_vars['ST']['bolt_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['skinmain_lockin_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="lockin0" href="#body" onclick="javascript:dbfilter('lockin','lockin',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="lockin1" href="#body" onclick="javascript:dbfilter('lockin','lockin',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['skinmain_lockin_botton1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['skinmain_lockin_botton1'] ?></a></li>
					<li><a class="menuclick" id="lockin2" href="#body" onclick="javascript:dbfilter('lockin','lockin',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['skinmain_lockin_botton2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['skinmain_lockin_botton2'] ?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
</ul>
<?php } ?>      