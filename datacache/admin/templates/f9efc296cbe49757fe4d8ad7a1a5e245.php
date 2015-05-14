<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript">
	var resizewindow= null;
	window.onresize = function(){
		var h = $(window).height();
		if(resizewindow!=h){
			sizewindow();
			resizewindow=h;
		}
	};
	function sizewindow(){
		var h = $(window).height();
		if(document.getElementById("mainbodybottonauto")){
			$('.managebottonadd').css({height:h-40});
		}
	}
	var subjectmanage_type_add_mid  = "<?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_mid'] ?>";
	var subjectmanage_js_noselect_empty  = "<?php echo $this->_tpl_vars['ST']['subjectmanage_js_noselect_empty'] ?>";
	var subjectmanage_js_subjectname_empty  = "<?php echo $this->_tpl_vars['ST']['subjectmanage_js_subjectname_empty'] ?>";
	var subjectmanage_js_dirname_empty  = "<?php echo $this->_tpl_vars['ST']['subjectmanage_js_dirname_empty'] ?>";
	var subjectmanage_js_template_empty  = "<?php echo $this->_tpl_vars['ST']['subjectmanage_js_template_empty'] ?>";
	var subjectmanage_js_pagemax_empty  = "<?php echo $this->_tpl_vars['ST']['subjectmanage_js_pagemax_empty'] ?>";
	var subjectmanage_js_type_add_ok = "<?php echo $this->_tpl_vars['ST']['subjectmanage_js_type_add_ok'] ?>";
	var subjectmanage_js_type_add_no = "<?php echo $this->_tpl_vars['ST']['subjectmanage_js_type_add_no'] ?>";
	var iframename = "<?php echo $this->_tpl_vars['iframename'] ?>";
	iframename = iframename=='' ? "jerichotabiframe_0" : iframename;
	$(document).ready(function(){
		var h = '<?php echo $this->_tpl_vars['iframeheightwindow'] ?>';
		$('.managebottonadd').css({height:h-40});
		var options = {
			beforeSubmit: formverify,
			success:saveResponse,
			resetForm: false
		};
		$('#subadd').submit(function() {
			$(this).ajaxSubmit(options);
			return false;
		});
		parent.scrolclear();
	});
	function formverify(formData) {
		var queryString = $.param(formData);
		var get=urlarray(queryString);
		if(get['mid']==0){
			document.subadd.mid.focus();
			alert(subjectmanage_type_add_mid+subjectmanage_js_noselect_empty);
			return false;
		}
		if(get['subjectname']==''){
			document.subadd.subjectname.focus();
			alert(subjectmanage_js_subjectname_empty);
			return false;
		}
		if(get['isdirname']==0) {
			if(get['dirname'].match(/^[\w-]+$/ig)==null) {
				document.subadd.dirname.focus();
				alert(subjectmanage_js_dirname_empty);
				return false;
			}
		}
		if(get['template'].match(/^[\w]+$/ig)==null || get['filenamestyle'].match(/^[\{\}\w-]+$/ig)==null) {
			document.subadd.template.focus();
			alert(subjectmanage_js_template_empty);
			return false;
		}
		if(get['pagemax']!='') {
			if(get['pagemax'].match(/^[0-9]+$/ig)==null) {
				document.subadd.pagemax.focus();
				alert(subjectmanage_js_pagemax_empty);
				return false;
			}
		}
		parent.windowsdig('Loading','iframe:index.php?archive=management&action=load','400px','180px','iframe',false);
	}
	function saveResponse(options){
		parent.closeifram();
		var tab=document.getElementById("subaddtab").value;
		if (options=='true'){
			if(parent.frames[iframename].document.getElementById("selectform")){
				parent.frames[iframename].refresh('selectform','selectall','check_all');
			}
			alert(subjectmanage_js_type_add_ok);
		}else{
			alert(subjectmanage_js_type_add_no+"("+options+")");
		}
		var refalse = "<?php echo $this->_tpl_vars['refalse'] ?>";
		if (refalse!='1' || $.browser.mozilla){
			parent.scrolopen();
			parent.onaletdoc()
		}else{
			window.location.reload();
		}
	}
</script>
</head>
<body>
<form name="subadd" id="subadd" method="post" action="index.php?archive=subjectmanage&action=subsave">
<input type="hidden" name="inputclass" value="add">
<input type="hidden" name="lng" id="lng" value="<?php echo $this->_tpl_vars['lng'] ?>">
<input type="hidden" name="tab" id="subaddtab" value="<?php echo $this->_tpl_vars['tab'] ?>">
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<!--查看已选择的类型-->
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['position_title'] ?></span><span class="colorgorningage"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_mess'] ?></span></span>
		</div>
		<div class="manageeditdiv">
			<div class="maneditcontent">
				<table class="formtable">
					<tr class="trstyle2">
						<td width="15%" class="trtitle011"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_mid'] ?></td>
						<td width="85%" class="trtitle02">
							<select size="1" name="mid" id="mid">
								<option value="0"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_mid_option'] ?></option>
								<?php if (count($this->_tpl_vars['modelarray'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['modelarray']); $list++){?>
								<option <?php echo $this->_tpl_vars['modelarray'][$list]['selected'] ?>  value="<?php echo $this->_tpl_vars['modelarray'][$list]['mid'] ?>"><?php echo $this->_tpl_vars['modelarray'][$list]['modelname'] ?></option>
								<?php }} ?>
							</select>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_mid_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle011"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_subjectname'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="text" name="subjectname" size="60" maxlength="100" class="infoInput"/>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_subjectname_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle011"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_isdirname'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="radio" value="1" name="isdirname" onclick="ondisplay('isdirnamediv','trstyle2 displaynone');sumbiton();" checked="checked"/> <?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>&nbsp;
							<input type="radio" value="0" name="isdirname" onclick="ondisplay('isdirnamediv','trstyle2 displaytrue')"/> <?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_isdirname_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2 displaynone" id="isdirnamediv">
						<td width="15%" class="trtitle011"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_dirname'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="text" name="dirname" size="20" maxlength="100" class="infoInput" onblur="checktypelngname('dirname',this.value,/^[\w-]+$/ig,'index.php?archive=subjectmanage&action=checkdirname','dirnameerr','<?php echo $this->_tpl_vars['ST']['subjectmanage_js_type_dirname_check_ok'] ?>','<?php echo $this->_tpl_vars['ST']['subjectmanage_js_type_dirname_check_no'] ?>','subaddsubmitbotton');"/>
							<span class="cautiontitle" id="dirnameerr"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_dirname_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_subpic'] ?></td>
						<td width="85%" class="trtitle02">
							<ul class="addpiclist">
								<li id="addsrlipic"><a title="<?php echo $this->_tpl_vars['ST']['selectfile_botton'] ?>" onclick="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['filemanage_select_title'] ?>','iframe:index.php?archive=filemanage&action=filewindow&listfunction=filelist&filetype=img&checkfrom=picshow&getbyid=addsrlipic&fileinputid=subpic&maxselect=1&iframename='+self.frameElement.getAttribute('name'),'900px','480px','iframe')" href="#body"><p><img id="addsrcpic" src="templates/images/pic.png"></p></a></li>
							</ul>
							<input type="hidden" name="subpic" id="subpic" size="50" maxlength="50" class="infoInput"/>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_content'] ?></td>
						<td width="85%" class="trtitle02"><textarea name="content" cols="50" rows="5" class="smallInput" style="width:98%;height:70px;" ></textarea></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle03" colspan="2"><?php echo $this->_tpl_vars['ST']['article_doc_tab_title01'] ?></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['article_doc_add_headtitle'] ?></td>
						<td class="trtitle02"><input type="text" name="headtitle" id="headtitle" maxlength="100" class="infoInput" style="width:98%;"/></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"></td>
						<td class="trtitle02">
							<a class="keyselect" href="#body" onclick="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['selectkeytype_botton'] ?>','iframe:index.php?archive=seomanage&action=listwindow&inputtext=keywords&listfunction=keytype&checkfrom=function&maxselect=1&mid='+document.subadd.mid.value+'&iframename='+self.frameElement.getAttribute('name'),'850px','450px','iframe');"><?php echo $this->_tpl_vars['ST']['selectkeytype_botton'] ?></a>
							<a class="keyselect" href="#body" onclick="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['selectkeyword_botton'] ?>','iframe:index.php?archive=seomanage&action=listwindow&inputtext=keywords&listfunction=key&checkfrom=input&mid='+document.subadd.mid.value+'&iframename='+self.frameElement.getAttribute('name'),'650px','380px','iframe');"><?php echo $this->_tpl_vars['ST']['selectkeyword_botton'] ?></a>
						</td>
					</tr>
					<tr class="trstyle3">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['article_doc_add_keywords'] ?></td>
						<td class="trtitle02">
							<input type="text" name="keywords" id="keywords" maxlength="100" class="infoInput" style="width:98%;"/>
						</td>
					</tr>
					<tr class="trstyle3">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['article_doc_add_description'] ?></td>
						<td class="trtitle02">
							<textarea name="description" id="description"  style="width:98%;height:50px;" class="smallInput"></textarea>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle03" colspan="2"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_templatesurl'] ?></td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_purview'] ?></td>
						<td width="85%" class="trtitle02">
							<select size="1" name="purview" id="purview">
								<option value="0"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_purview_option'] ?></option>
								<?php if (count($this->_tpl_vars['memberpuvlist'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['memberpuvlist']); $list++){?>
								<option value="<?php echo $this->_tpl_vars['memberpuvlist'][$list]['mcid'] ?>"><?php echo $this->_tpl_vars['memberpuvlist'][$list]['rankname'] ?></option>
								<?php }} ?>
							</select>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_pageclass'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="radio" value="1" name="ishtml" checked="checked" onclick="showdiv(1,'#filenamestylediv','0|1','trstyle2 displaynone|trstyle2 displaytrue',1,0)"/> <?php echo $this->_tpl_vars['ST']['typemanage_type_add_pageclass_1'] ?>&nbsp;
							<input type="radio" value="0" name="ishtml" onclick="showdiv(0,'#filenamestylediv','0|1','trstyle2 displaynone|trstyle2 displaytrue',1,0)"/> <?php echo $this->_tpl_vars['ST']['typemanage_type_add_pageclass_0'] ?>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_pageclass_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_styleid'] ?></td>
						<td width="85%" class="trtitle02">
							<select size="1" name="styleid" id="styleid" onchange="showdiv(this.value,'#filenamestylediv|#pagemaxdiv','1|2','trstyle2 displaynone|trstyle2 displaytrue',1,1)">
								<option value="2"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_styleid_2'] ?></option>
								<option value="1"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_styleid_1'] ?></option>
							</select>
						</td>
					</tr>
					<tr class="trstyle2" id="templatediv">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_templateindex'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="text" name="indextemplates" id="indextemplates" size="20" maxlength="80" value="<?php echo $this->_tpl_vars['tempname']['subjectindex'] ?>" class="infoInput"/>
							<a class="filecheck" href="#body" onclick="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['selecttempfile_botton'] ?>','iframe:index.php?archive=templatemain&action=listwindow&inputtext=indextemplates&typeclass=article&skindir=&filedir=article&fileclass=&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),'750px','400px','iframe');"><?php echo $this->_tpl_vars['ST']['selecttempfile_botton'] ?></a>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['typemanage_type_add_template_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_template'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="text" id="subtemplatevalue" name="template" size="20" maxlength="80" value="<?php echo $this->_tpl_vars['tempname']['subjectlist'] ?>" class="infoInput"/>
							<a class="filecheck" href="#body" onclick="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['selecttempfile_botton'] ?>','iframe:index.php?archive=templatemain&action=listwindow&inputtext=subtemplatevalue&typeclass=article&skindir=&filedir=article&fileclass=&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),'750px','400px','iframe');"><?php echo $this->_tpl_vars['ST']['selecttempfile_botton'] ?></a>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_template_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2" id="pagemaxdiv">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_pagemax'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="text" name="pagemax" size="5" maxlength="3" value="0" class="infoInput"/>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_pagemax_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2" id="filenamestylediv">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_filenamestyle'] ?></td>
						<td width="85%" class="trtitle02">
							<select size="1" name="filenamestyle" id="filenamestyle">
								<?php if (count($this->_tpl_vars['filetemplate'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['filetemplate']); $list++){?>
								<option value="<?php echo $this->_tpl_vars['filetemplate'][$list]['id'] ?>"><?php echo $this->_tpl_vars['filetemplate'][$list]['name'] ?>.<?php echo $this->_tpl_vars['ext'] ?></option>
								<?php }} ?>
							</select>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle03" colspan="2"><?php echo $this->_tpl_vars['ST']['iswap_message'] ?></td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['iswap_title'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="radio" value="1" name="iswap" checked="checked"/> <?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>&nbsp;
							<input type="radio" value="0" name="iswap"/> <?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['iswap_title_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['iswap_templates_file'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="text" id="waptempalte" name="waptempalte" size="30" maxlength="80" value="<?php echo $this->_tpl_vars['tempname']['subjectlist'] ?>" class="infoInput"/>
							<a class="filecheck" href="#body" onclick="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['selecttempfile_botton'] ?>','iframe:index.php?archive=templatemain&action=listwindow&inputtext=waptempalte&typeclass=article&skindir=wap&filedir=article&fileclass=&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),'750px','400px','iframe');"><?php echo $this->_tpl_vars['ST']['selecttempfile_botton'] ?></a>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_template_mess'] ?></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="downbotton">
	<div id="subbotton">
		<table border="0" width="100%">
			<tr>
				<td id="right"><input type="submit" id="subaddsubmitbotton" name="Submit" value="<?php echo $this->_tpl_vars['ST']['botton_add'] ?>" class="button orange" /></td>
				<td id="left" class="padding-left5"><input type="button" name="cancel" onClick="javascript:closewindow();" value="<?php echo $this->_tpl_vars['ST']['botton_add_reset'] ?>" class="button orange" /></td>
			</tr>
		</table>
	</div>
</div>
</form>
</body>
</html>