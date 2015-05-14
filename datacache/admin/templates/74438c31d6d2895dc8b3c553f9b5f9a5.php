<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript">

	var resizewindow= null;

	window.onresize = function(){
		var h = $(window).height();
		if(resizewindow!=h){
			sizewindow();
			resizewindow=h;
		}
	}

	function sizewindow(){
		var h = $(window).height();
		if(document.getElementById("mainbodybottonauto")){
			$('.managebottonadd').css({height:h-40});
		}
	}
	var seomanage_js_keytypename_empty  = "<?php echo $this->_tpl_vars['ST']['seomanage_js_keytypename_empty'] ?>";
	var seomanage_js_keyworklist_empty  = "<?php echo $this->_tpl_vars['ST']['seomanage_js_keyworklist_empty'] ?>";
	var seomanage_js_description_empty  = "<?php echo $this->_tpl_vars['ST']['seomanage_js_description_empty'] ?>";
	var article_js_noselect_empty  = "<?php echo $this->_tpl_vars['ST']['article_js_noselect_empty'] ?>";
	var article_doc_add_tid  = "<?php echo $this->_tpl_vars['ST']['article_doc_add_tid'] ?>";
	var seomanage_js_edit_ok = "<?php echo $this->_tpl_vars['ST']['seomanage_js_edit_ok'] ?>";
	var seomanage_js_edit_no = "<?php echo $this->_tpl_vars['ST']['seomanage_js_edit_no'] ?>";
	var iframename = "<?php echo $this->_tpl_vars['iframename'] ?>";
	$(document).ready(function(){
		var h = '<?php echo $this->_tpl_vars['iframeheightwindow'] ?>';
		$('.managebottonadd').css({height:h-40});
		var options = {
			beforeSubmit: formverify,
			success:saveResponse
		}
		$('#keylinktypeedit').submit(function() {
			$(this).ajaxSubmit(options);
			return false;
		});
		parent.scrolclear();
	})




	function formverify(formData) {
		var queryString = $.param(formData);
		var get=urlarray(queryString);
		if(get['keytypename']==""){
			document.keylinktypeedit.keytypename.focus();
			alert(seomanage_js_keytypename_empty);
			return false;
		}
		if(get['keyworklist']==""){
			document.keylinktypeedit.keyworklist.focus();
			alert(seomanage_js_keyworklist_empty);
			return false;
		}
		if(get['description']==""){
			document.keylinktypeedit.description.focus();
			alert(seomanage_js_description_empty);
			return false;
		}
		if(get['tid']==0){
			document.keylinktypeedit.tid.focus();
			alert(article_doc_add_tid+article_js_noselect_empty);
			return false;
		}
		parent.windowsdig('Loading','iframe:index.php?archive=management&action=load','400px','180px','iframe',false);
	}
	function saveResponse(options){
		parent.closeifram();
		if (options=='true'){
			parent.frames[iframename].refresh('selectform','selectall','check_all');
			alert(seomanage_js_edit_ok);
		}else{
			alert(seomanage_js_edit_no);
		}
		parent.scrolopen();
		parent.onaletdoc();
	}
	
</script>
</head>

<body>
<form name="keylinktypeedit" id="keylinktypeedit" method="post" action="index.php?archive=seomanage&action=keylinktypesave">
<input type="hidden" name="inputclass" value="edit">
<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['keyread']['ktid'] ?>">
<input type="hidden" name="lng" value="<?php echo $this->_tpl_vars['keyread']['lng'] ?>">
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<!--查看已选择的类型-->
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['position_title'] ?></span><span class="colorgorningage"><?php echo $this->_tpl_vars['ST']['seomanage_typeedit_mess'] ?><u><?php echo $this->_tpl_vars['keyread']['keytypename'] ?></u></span></span>
		</div>
		<div class="manageeditdiv">
			<div class="maneditcontent">
				<table class="formtable">
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['subjectmanage_type_add_mid'] ?></td>
						<td width="85%" class="trtitle02 colorgblue"><?php echo $this->_tpl_vars['model'] ?></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle011"><?php echo $this->_tpl_vars['ST']['seomanage_add_keytypename'] ?></td>
						<td class="trtitle02"><input type="text" name="keytypename" size="60" maxlength="100" value="<?php echo $this->_tpl_vars['keyread']['keytypename'] ?>" class="infoInput"/> <span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['seomanage_add_keytypename_mess'] ?></span></td>
					</tr>
					<tr class="trstyle3">
						<td class="trtitle011"><?php echo $this->_tpl_vars['ST']['seomanage_add_keyworklist'] ?></td>
						<td class="trtitle02">
							<textarea name="keyworklist" id="keyworklist" style="width:98%;height:60px;" class="smallInput"><?php echo $this->_tpl_vars['keyread']['keyworklist'] ?></textarea>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"></td>
						<td class="trtitle02">
							<a class="filecheck" href="#body" onclick="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['selectkeyword_botton'] ?>','iframe:index.php?archive=seomanage&action=listwindow&inputtext=keyworklist&listfunction=key&checkfrom=input&mid=<?php echo $this->_tpl_vars['keyread']['mid'] ?>&tid='+document.keylinktypeedit.tid.value+'&iframename='+self.frameElement.getAttribute('name'),'650px','380px','iframe');"><?php echo $this->_tpl_vars['ST']['selectkeyword_botton'] ?></a>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['seomanage_add_keyworklist_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle3">
						<td class="trtitle011"><?php echo $this->_tpl_vars['ST']['seomanage_add_description'] ?></td>
						<td class="trtitle02">
							<textarea name="description" cols="50" rows="3" class="smallInput" style="width:98%;height:60px;"><?php echo $this->_tpl_vars['keyread']['description'] ?></textarea>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"></td>
						<td class="trtitle02"><span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['seomanage_add_description_mess'] ?></span></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle03" colspan="2"><?php echo $this->_tpl_vars['ST']['article_doc_tab_title02'] ?></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle011"><?php echo $this->_tpl_vars['ST']['article_doc_add_tid'] ?></td>
						<td class="trtitle02">
							<select size="1" name="tid" id="tid">
								<option selected="selected" value="0"><?php echo $this->_tpl_vars['ST']['article_doc_add_tid_option'] ?></option>
								<?php if (count($this->_tpl_vars['typelist'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['typelist']); $list++){?>
								<option <?php echo $this->_tpl_vars['typelist'][$list]['selected'] ?> value="<?php echo $this->_tpl_vars['typelist'][$list]['tid'] ?>"><?php echo $this->treelist($this->_tpl_vars['typelist'][$list]['level'],'&nbsp;&nbsp;&nbsp;') ?>├─ <?php echo $this->_tpl_vars['typelist'][$list]['typename'] ?></option>
								<?php }} ?>
							</select>
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
					<td id="right"><input type="submit" name="Submit" value="<?php echo $this->_tpl_vars['ST']['botton_edit'] ?>" class="button orange" /></td>
					<td id="left" class="padding-left5"><input type="button" name="cancel" onClick="javascript:closewindow();" value="<?php echo $this->_tpl_vars['ST']['botton_edit_reset'] ?>" class="button orange" /></td>
				</tr>
			</table>
		</div>
	</div>
</form>
</body>

</html>      