<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/swfupload.js"></script>
<script type="text/javascript" src="js/swfuploaddb.js"></script>
<script type="text/javascript" src="js/batupfile.js"></script>
<script type="text/javascript" language="JavaScript">
	var filemanage_js_upfile_zoomsize  = "<?php echo $this->_tpl_vars['ST']['filemanage_js_upfile_zoomsize'] ?>";
	var filemanage_js_upfile_driname_err  = "<?php echo $this->_tpl_vars['ST']['filemanage_js_upfile_driname_err'] ?>";
	var filemanage_js_upfile_ok = "<?php echo $this->_tpl_vars['ST']['filemanage_js_upfile_ok'] ?>";
	var filemanage_js_upfile_no = "<?php echo $this->_tpl_vars['ST']['filemanage_js_upfile_no'] ?>";
	var fheight="<?php echo $this->_tpl_vars['fheight'] ?>";
	var isgetback="<?php echo $this->_tpl_vars['isgetback'] ?>";
	$(window).load(function(){
		var h = parseInt(fheight);
		$('#mainwindowhidden').css({height:h-39});
	});
	$(function(){
		$('#swfupload-control').each(function(){
			$(this).swfupload({
				upload_url: "index.php?archive=filemanage&action=batupfilesave&path=<?php echo $this->_tpl_vars['path'] ?>&filetype=<?php echo $this->_tpl_vars['filetype'] ?>&isgetback=<?php echo $this->_tpl_vars['isgetback'] ?>&ecisp_admininfo=<?php echo $this->_tpl_vars['ecisp_admininfo'] ?>&esp_powerlist=<?php echo $this->_tpl_vars['esp_powerlist'] ?>",
				file_size_limit : "<?php echo $this->_tpl_vars['maxfile'] ?>",
				file_types : "<?php echo $this->_tpl_vars['upfile_pictype'] ?>",
				file_types_description : "All Files",
				file_upload_limit : "<?php echo $this->_tpl_vars['maxselect'] ?>",
				flash_url : "js/swfupload.swf",
				button_image_url : 'js/upfilebotton.png',
				button_width : 116,
				button_height : 27,
				button_placeholder : $('.button', this)[0],
				debug: false
			});
		});
	});
	function saveResponse(options){
		if (options=='true'){
			alert(filemanage_js_upfile_ok);
		}else{
			alert(options);
		}
	}
	document.oncontextmenu=new Function('event.returnValue=false;');
	document.onselectstart=new Function('event.returnValue=false;');
</script>
<!--[if IE 6]>
<style type="text/css" media="screen">
body { behavior:url("templates/css/csshover.htc");}
</style>
<![endif]-->
</head>
<body class="bodyflow">
<input type="hidden" name="maxupfile" id="maxupfile" value="<?php echo $this->_tpl_vars['maxselect'] ?>"/>
<input type="hidden" name="remainfile" id="remainfile" value="0"/>
<input type="hidden" name="isgetback" id="isgetback" value="<?php echo $this->_tpl_vars['isgetback'] ?>"/>
<?php if($this->_tpl_vars['amid']){ ?>
<input type="hidden" name="amid"id="amid" value="<?php echo $this->_tpl_vars['amid'] ?>"/>
<?php } ?>
<div class="centerrightwindow" id="swfupload-control">
	<div id="mainwindowhidden">
		<?php if($this->_tpl_vars['filetype']=='img'){ ?>
		<div id="select" class="windowselecttop">
			<?php if(!$this->_tpl_vars['amid']){ ?>
			<select size="1" name="amid" id="amid">
				<option value="222"><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_amid_option'] ?></option>
				<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
				<option value="<?php echo $this->_tpl_vars['array'][$list]['amid'] ?>"><?php echo $this->_tpl_vars['array'][$list]['title'] ?></option>
				<?php }} ?>
			</select>
			<?php } ?>
			<select size="1" name="img_iswater" id="img_iswater">
				<option value="0"<?php if($this->_tpl_vars['img_iswater']==0){ ?> selected<?php } ?>><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_img_iswater0'] ?></option>
				<option value="1"<?php if($this->_tpl_vars['img_iswater']==1){ ?> selected<?php } ?>><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_img_iswater'] ?></option>
				<option value="2"<?php if($this->_tpl_vars['img_iswater']==2){ ?> selected<?php } ?>><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_img_iswater2'] ?></option>
			</select>
		</div>
		<?php } ?>
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['position_title'] ?></span><span class="padding-left5 colorgorningage"><?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_type_mess'] ?><?php echo $this->_tpl_vars['upfile_pictype_str'] ?>，<?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_dirname_mess'] ?><?php echo $this->_tpl_vars['maxfile2'] ?>，<?php echo $this->_tpl_vars['ST']['filemanage_file_upfile_maxfile_mess'] ?><?php echo $this->_tpl_vars['maxselect'] ?> 个</span></span>
		</div>
		<div class="sugtitle-line"></div>
		<div class="listitle">
			<table border="0" width="100%" bordercolor="#FFFFFF">
				<tr>
					<td width="70%">文件名</td>
					<td width="20%">上传状态</td>
					<td width="10%"><?php echo $this->_tpl_vars['ST']['mangerlist_text_set'] ?></td>
				</tr>
			</table>
		</div>
		<div class="loadingdiv" id="log"></div>
	</div>
	<div id="downbotton">
		<div id="subbotton">
			<table border="0" width="100%">
				<tr id="bottonsubmit">
					<td id="center">
						<table border="0" style="margin: 0 auto;">
							<tr>
								<td><input type="button" class="button"/></td>
								<td style="padding:0px 5px 0px 5px;"><input type="submit" name="Submit" id="submitbotton" value="<?php echo $this->_tpl_vars['ST']['botton_upfile'] ?>" class="button orange" title="<?php echo $this->_tpl_vars['ST']['botton_upfile'] ?>"/></td>
								<td><input type="reset" name="reset" onClick="javascript:parent.resetwindow();" id="release" value="<?php echo $this->_tpl_vars['ST']['botton_upfile_reset'] ?>" class="button orange"  title="<?php echo $this->_tpl_vars['ST']['botton_upfile_reset'] ?>" /></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>