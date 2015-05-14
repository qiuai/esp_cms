<?php /* 内容列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'articlelist' || $this->_tpl_vars['menutype'] == 'modelarticlelist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('article','docadd')==true ){ ?>
	<?php if($this->_tpl_vars['tabarray']['mid']!=''){ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_article'],'hc') ?>','index.php?archive=article&action=docadd&tid=<?php echo $this->_tpl_vars['tabarray']['tid'] ?>&mid=<?php echo $this->_tpl_vars['tabarray']['mid'] ?>&type=add&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_article'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_article'] ?></a></li>
	<?php }else{ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:alert('<?php echo $this->_tpl_vars['ST']['article_js_doc_add_midtidnoselect'] ?>');return false;"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_article'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_article'] ?></a></li>
	<?php } ?>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['selAll_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<li class="menumain"><a id="bolt" href="#body" hidefocus="true" hidefocus="true"><?php echo $this->_tpl_vars['ST']['bolt_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['viewtype_botton'] ?></span>
				<ul id="articlelabel">
					<li><a class="menunoclick" id="articlelabel0" href="#body" onclick="javascript:dbfilter('articlelabel','dlid',0,0,<?php echo $this->_tpl_vars['dclabelnum'] ?>,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<?php if (count($this->_tpl_vars['dclabellist'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['dclabellist']); $ii++){?>
					<li><a class="menuclick" id="articlelabel<?php echo $ii+1 ?>" href="#body" onclick="javascript:dbfilter('articlelabel','dlid','<?php echo $this->_tpl_vars['dclabellist'][$ii]['dlid'] ?>',<?php echo $ii+1 ?>,<?php echo $this->_tpl_vars['dclabelnum'] ?>,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['dclabellist'][$ii]['labelname'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['dclabellist'][$ii]['labelname'] ?></a></li>
					<?php }} ?>
				</ul>
			</li>

			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['article_ishtml_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="articleishtml0" href="#body" onclick="javascript:dbfilter('articleishtml','ishtml',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="articleishtml1" href="#body" onclick="javascript:dbfilter('articleishtml','ishtml',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['article_ishtml_botton_2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_ishtml_botton_2'] ?></a></li>
					<li><a class="menuclick" id="articleishtml2" href="#body" onclick="javascript:dbfilter('articleishtml','ishtml',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['article_ishtml_botton_1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_ishtml_botton_1'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['article_isorder_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="articleisorder0" href="#body" onclick="javascript:dbfilter('articleisorder','isorder',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="articleisorder1" href="#body" onclick="javascript:dbfilter('articleisorder','isorder',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="articleisorder2" href="#body" onclick="javascript:dbfilter('articleisorder','isorder',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['article_islink_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="articleislink0" href="#body" onclick="javascript:dbfilter('articleislink','islink',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="articleislink1" href="#body" onclick="javascript:dbfilter('articleislink','islink',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" id="articleislink2" href="#body" onclick="javascript:dbfilter('articleislink','islink',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['lock_botton'] ?></span>
				<ul>
					<li><a class="menunoclick" id="articleisclass0" href="#body" onclick="javascript:dbfilter('articleisclass','isclass',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="articleisclass1" href="#body" onclick="javascript:dbfilter('articleisclass','isclass',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['article_audit_ok'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_audit_ok'] ?></a></li>
					<li><a class="menuclick" id="articleisclass2" href="#body" onclick="javascript:dbfilter('articleisclass','isclass',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['article_audit_no'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_audit_no'] ?></a></li>
				</ul>
			</li>
			<li><a class="menuclick" id="articleisorder0" href="#body" onclick="javascript:refreshurl('selectform')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['getalllist_botton'] ?></a></li>
		</ul>
	</li>
	<li class="menumain"><a id="search" href="#body" onclick="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['article_search_botton'] ?>','iframe:index.php?archive=article&action=search&mid=<?php echo $this->_tpl_vars['mid'] ?>&tid=<?php echo $this->_tpl_vars['tid'] ?>&iframename='+self.frameElement.getAttribute('name'),'600px','450px','iframe',true);" title="<?php echo $this->_tpl_vars['ST']['article_search_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['search_botton'] ?></a></li>
	<?php if($this->powercheck('article','docdel')==true ){ ?>
	<li class="menumain"><a id="del" onclick="javascript:callrun('index.php?archive=article&action=articledel','articleselectinfoid',false,null,null,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['del_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['del_botton'] ?></a></li>
	<?php } ?>
	<?php if($this->powercheck('article','docedit')==true ){ ?>
	<li class="menumain"><a id="sortall" onclick="javascript:sortinput('index.php?archive=article&action=sort','index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['sort_messok'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all','articleinfoid','articlepid');" href="#body" title="<?php echo $this->_tpl_vars['ST']['article_log_sort'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['pid_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
	<?php if($this->powercheck('article','docedit')==true ){ ?>
	<li class="menumain"><a id="setbotton" href="#body" hidefocus="true" title="<?php echo $this->_tpl_vars['ST']['set_botton'] ?>"><?php echo $this->_tpl_vars['ST']['set_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['lock_set_botton'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=article&action=setting','articleselectinfoid',true,'isclass',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=article&action=setting','articleselectinfoid',true,'isclass',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['article_isorder_botton_setting'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=article&action=setting','articleselectinfoid',true,'isorder',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=article&action=setting','articleselectinfoid',true,'isorder',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['article_ishtml_botton_setting'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=article&action=setting','articleselectinfoid',true,'ishtml',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['article_ishtml_botton_2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_ishtml_botton_2'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=article&action=setting','articleselectinfoid',true,'ishtml',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['article_ishtml_botton_1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['article_ishtml_botton_1'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['article_recommend_botton_setting1'] ?></span>
				<ul>
					<?php if (count($this->_tpl_vars['dclabellist'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['dclabellist']); $ii++){?>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=article&action=setting&recommend=1','articleselectinfoid',true,'dlid','<?php echo $this->_tpl_vars['dclabellist'][$ii]['dlid'] ?>','index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['dclabellist'][$ii]['labelname'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['dclabellist'][$ii]['labelname'] ?></a></li>
					<?php }} ?>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['article_recommend_botton_setting2'] ?></span>
				<ul>
					<?php if (count($this->_tpl_vars['dclabellist'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['dclabellist']); $ii++){?>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=article&action=setting&recommend=0','articleselectinfoid',true,'dlid','<?php echo $this->_tpl_vars['dclabellist'][$ii]['dlid'] ?>','index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['dclabellist'][$ii]['labelname'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['dclabellist'][$ii]['labelname'] ?></a></li>
					<?php }} ?>
				</ul>
			</li>
		</ul>
	</li>
	<li class="menumain">
		<a id="htmlcreate" onclick="javascript:callrun('index.php?archive=article&action=creathtml','articleselectinfoid',false,null,null,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['creathtml_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['htmlcreat_botton'] ?></a>
	</li>
	<?php } ?>
</ul>
<?php } ?>      