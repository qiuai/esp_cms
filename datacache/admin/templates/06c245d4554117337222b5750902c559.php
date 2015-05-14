<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" language="JavaScript">
	var filemanage_js_upfile_zoomsize  = "<?php echo $this->_tpl_vars['ST']['filemanage_js_upfile_zoomsize'] ?>";
	var filemanage_js_upfile_driname_err  = "<?php echo $this->_tpl_vars['ST']['filemanage_js_upfile_driname_err'] ?>";
	var filemanage_js_upfile_ok = "<?php echo $this->_tpl_vars['ST']['filemanage_js_upfile_ok'] ?>";
	var filemanage_js_upfile_no = "<?php echo $this->_tpl_vars['ST']['filemanage_js_upfile_no'] ?>";
	var fheight="<?php echo $this->_tpl_vars['fheight'] ?>";
	var isgetback="<?php echo $this->_tpl_vars['isgetback'] ?>";
	$(window).load(function(){
		var h = parseInt(fheight);
		$('#mainbodybottonauto').css({height:h-39});
		var options = {
			beforeSubmit: formverify,
			success:saveResponse
		}
		$('#upfile').submit(function() {
			$(this).ajaxSubmit(options);
			return false;
		});
	});
	function formverify(formData, jqForm, options) {
		var queryString = $.param(formData);
		var get=urlarray(queryString);
		if(get['upfilepath']=='') {
			document.upfile.upfilepath.focus();
			alert(filemanage_js_upfile_driname_err);
			return false;
		}
	}
	function saveResponse(options){
		var inputstr="<td class=\"trtitle02\" id=\"upfilepath\"><input type=\"file\" name=\"upfilepath\" maxlength=\"200\" size=\"50\" class=\"infoInput\"></td>";
		$("#upfilepath").replaceWith(inputstr);
		var strarray = options.split('|');
		if (strarray[1]!=undefined){
			if (isgetback==1 || isgetback==2){
				parent.refile('',1);
				return false;
			}
			$("#resulttable").removeClass('displaynone');
			if (strarray[1]=='img'){
				var outfile=strarray[3] ? strarray[3] : strarray[0];
				if (strarray[2]=='1'){
					var upresult='<td class="trtitle02" id="upresult"><a onclick="javascript:refile(\''+outfile+'\',\''+strarray[2]+'\');" href="#body" hidefocus="true"><img src="../' + strarray[0] + '" width="100"></a></td>';
				}else{
					var upresult='<td class="trtitle02" id="upresult"><a onclick="javascript:refile(\''+outfile+'\',\''+strarray[2]+'\');" href="#body" hidefocus="true"><img src="../' + strarray[0] + '" height="100"></a></td>';
				}
				$("#upresult").replaceWith(upresult);
			}else{
				var upresult='<td class="trtitle02" id="upresult"><a class="lnglist" onclick="javascript:refile(\''+strarray[0]+'\',\''+strarray[2]+'\');" href="#body" hidefocus="true">' + strarray[0] + '</a></td>';
				$("#upresult").replaceWith(upresult);
			}
			$("#title").val("");
			alert(filemanage_js_upfile_ok);
		}else{
			alert(strarray[0]);
		}
	}
	function refile(filename,iswidth){
		parent.refile(filename,iswidth);
	}
	document.oncontextmenu=new Function('event.returnValue=false;');
	document.onselectstart=new Function('event.returnValue=false;');
</script>
</head>
<body class="bodyflow">
<form name="upfile" id="upfile" method="post" enctype="multipart/form-data" action="index.php?archive=filemanage&action=upfilesave">
<input type="hidden" name="path" id="path" value="<?php echo $this->_tpl_vars['path'] ?>"/>
<input type="hidden" name="MAX_FILE_SIZE" id="maxfile" value="<?php echo $this->_tpl_vars['maxfile'] ?>"/>
<input type="hidden" name="img_width" value="<?php echo $this->_tpl_vars['img_width'] ?>"/>
<input type="hidden" name="img_height" value="<?php echo $this->_tpl_vars['img_height'] ?>"/>
<input type="hidden" name="filetype" value="<?php echo $this->_tpl_vars['filetype'] ?>"/>
<input type="hidden" name="lng" value="<?php echo $this->_tpl_vars['lng'] ?>"/>
<input type="hidden" name="isgetback" value="<?php echo $this->_tpl_vars['isgetback'] ?>"/>
<?php if($this->_tpl_vars['amid']){ ?>
<input type="hidden" name="amid" id="amid" value="<?php echo $this->_tpl_vars['amid'] ?>"/>
<?php } ?>
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<div class="maneditcontent">
			<table class="formtablewin">
				<tr class="trstyle2">
					<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_dirname'] ?></td>
					<td class="trtitle02" id="upfilepath"><input type="file" name="upfilepath" maxlength="200" size="50" class="infoInput"></td>
				</tr>
				<?php if($this->_tpl_vars['filetype']=='img'){ ?>
				<?php if(!$this->_tpl_vars['amid']){ ?>
				<tr class="trstyle2">
					<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_isamid_str'] ?></td>
					<td class="trtitle02">
						<input type="radio" value="1" name="isamid" onclick="ondisplayother('isdirnamediv','trstyle2 displaytrue','isdirnamediv2','trstyle2 displaynone')"/> <?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_isamid1'] ?>&nbsp;
						<input type="radio" value="0" name="isamid" onclick="ondisplayother('isdirnamediv','trstyle2 displaynone','isdirnamediv2','trstyle2 displaytrue')" checked="checked"/> <?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_isamid2'] ?>
					</td>
				</tr>
				<tr class="trstyle2  displaynone" id="isdirnamediv">
					<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_isamidname'] ?></td>
					<td class="trtitle02"><input type="text" name="title" id="title" maxlength="150" size="50" class="infoInput"></td>
				</tr>
				<tr class="trstyle2" id="isdirnamediv2">
					<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_amid'] ?></td>
					<td class="trtitle02">
						<select size="1" name="amid" id="amid">
							<option value="0"><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_amid_option'] ?></option>
							<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
							<option value="<?php echo $this->_tpl_vars['array'][$list]['amid'] ?>"><?php echo $this->_tpl_vars['array'][$list]['title'] ?></option>
							<?php }} ?>
						</select>
					</td>
				</tr>
				<?php } ?>
				<tr class="trstyle2">
					<td class="trtitle01"></td>
					<td class="trtitle02">
						<input type="radio" value="0" name="img_iswater"<?php if($this->_tpl_vars['img_iswater']==0){ ?> checked="checked"<?php } ?>> <?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_img_iswater0'] ?> &nbsp;&nbsp;
						<input type="radio" value="1" name="img_iswater"<?php if($this->_tpl_vars['img_iswater']==1){ ?> checked="checked"<?php } ?>> <?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_img_iswater'] ?> &nbsp;&nbsp;
						<input type="radio" value="2" name="img_iswater"<?php if($this->_tpl_vars['img_iswater']==2){ ?> checked="checked"<?php } ?>> <?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_img_iswater2'] ?>
					</td>
				</tr>
				<tr class="trstyle2">
					<td class="trtitle01"></td>
					<td class="trtitle02"><input type="checkbox" value="1" name="img_issmallpic"<?php if($this->_tpl_vars['img_issmallpic']==1){ ?> checked="checked"<?php } ?>> <?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_zoom_type'] ?></td>
				</tr>
				<?php } ?>
				<tr class="trstyle2">
					<td class="trtitle01"></td>
					<td class="trtitle02">1、<?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_dirname_mess'] ?><?php echo $this->_tpl_vars['maxfile2'] ?>，<?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_type_mess'] ?><?php echo $this->_tpl_vars['upfile_pictype'] ?>；<br>2、<?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_mess'] ?><?php echo $this->_tpl_vars['path'] ?></td>
				</tr>
			</table>
			<table class="formtablewin displaynone" id="resulttable">
				<tr class="trstyle3">
					<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['filemanage_file_select'] ?></td>
					<td class="trtitle02" id="upresult"><img src="templates/images/pic.png" width="100px" height="100px"></td>
				</tr>
				<tr class="trstyle2">
					<td class="trtitle01"></td>
					<td class="trtitle02"><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_resple_mess'] ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div id="downbotton">
	<div id="subbotton">
		<table border="0" width="100%">
			<tr id="bottonsubmit">
				<td id="center">
					<table border="0" style="margin: 0 auto;">
						<tr >
							<td><input type="submit" name="Submit" id="submitbotton" value="<?php echo $this->_tpl_vars['ST']['botton_upfile'] ?>" class="button orange" title="<?php echo $this->_tpl_vars['ST']['botton_upfile'] ?>"/></td>
							<td style="padding:0px 5px 0px 5px;"><input type="reset" name="reset" onClick="javascript:location.reload();" id="refresh" value="<?php echo $this->_tpl_vars['ST']['refresh_botton_photoab'] ?>" class="button orange"  title="<?php echo $this->_tpl_vars['ST']['refresh_botton_photoab'] ?>" /></td>
							<td><input type="reset" name="reset" onClick="javascript:parent.resetwindow();" id="release" value="<?php echo $this->_tpl_vars['ST']['botton_upfile_reset'] ?>" class="button orange"  title="<?php echo $this->_tpl_vars['ST']['botton_upfile_reset'] ?>" /></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div>
</form>
</body>
</html>