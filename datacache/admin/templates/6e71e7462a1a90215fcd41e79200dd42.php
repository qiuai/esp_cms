<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<link href="templates/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" language="JavaScript">
	var filemanage_filecheck_select_allno = "<?php echo $this->_tpl_vars['ST']['filemanage_filecheck_select_allno'] ?>";
	var filemanage_filecheck_select_max = "<?php echo $this->_tpl_vars['ST']['filemanage_filecheck_select_max'] ?>";
	var filemanage_js_album_select_err = "<?php echo $this->_tpl_vars['ST']['filemanage_js_album_select_err'] ?>";
	var fheight="<?php echo $this->_tpl_vars['fheight'] ?>";
	var loadurl="<?php echo $this->_tpl_vars['loadurl'] ?>";
	var ShowImage = function() {
            xOffset = 10;
            yOffset = 30;
            $("#imglist").find(".showpic").hover(function(e) {
                $("<img id='imgshow' src='" + this.id + "' height=\"100\"/>").appendTo("body");
                $("#imgshow").css("top", (e.pageY - xOffset) + "px").css("left", (e.pageX + yOffset) + "px").fadeIn("fast");
            }, function() {
                $("#imgshow").remove();
            });
            $("#imglist").find("span").mousemove(function(e) {
		$("#imgshow").css("top", (e.pageY - xOffset) + "px").css("left", (e.pageX + yOffset) + "px")
            });
        };
	$(document).ready(function(){
		var h = parseInt(fheight);
		$('#mainbodybottonauto').css({height:h-44});
		ShowImage();
	})
	function refile(){
		var albumlist=$('input:[name="albumlist"]').val();
		var albumiswidthlist=$('input:[name="albumiswidthlist"]').val();
		if(albumlist){
			filename=albumlist.substring(0,albumlist.length-1);
			iswidtharray=albumiswidthlist.substring(0,albumiswidthlist.length-1);
			parent.refile(filename,iswidtharray);
		}else{
			alert(filemanage_js_album_select_err);
			return false;
		}
	}
	function alselected(gid,imgpath,setype,iswidth){
		var gidstr="#"+gid;
		var maxselect=$('input:[name="maxselect"]').val();
		var albumlist=$('input:[name="albumlist"]').val();
		var albumiswidthlist=$('input:[name="albumiswidthlist"]').val();
		if (setype=='selected'){
			if (maxselect<1){
				alert(filemanage_filecheck_select_max);
				var htmlse='<input type="checkbox" id="'+gid+'" name="selectinfoid" value="'+imgpath+'" onclick="alselected(\''+gid+'\',this.value,\'selected\','+iswidth+');">';
				$(htmlse).replaceAll("#"+gid);
				return false;
			}
			var htmlse='<input type="checkbox" id="'+gid+'" name="selectinfoid" value="'+imgpath+'" onclick="alselected(\''+gid+'\',this.value,\'unde\','+iswidth+');" checked>';
			$(htmlse).replaceAll("#"+gid);
			var nowid=Number(maxselect)-1;
			$('input:[name="maxselect"]').val(nowid);
			var albumlist=albumlist+imgpath+'|';
			$('input:[name="albumlist"]').val(albumlist);
			var albumiswidthlist=albumiswidthlist+iswidth+'|';
			$('input:[name="albumiswidthlist"]').val(albumiswidthlist);
		}else{
			var htmlse='<input type="checkbox" id="'+gid+'" name="selectinfoid" value="'+imgpath+'" onclick="alselected(\''+gid+'\',this.value,\'selected\','+iswidth+');">';
			$(htmlse).replaceAll("#"+gid);
			var maxnowid=Number(maxselect)+1;
			$('input:[name="maxselect"]').val(maxnowid);
			var albumlist=albumlist.replace(imgpath+"|","");
			$('input:[name="albumlist"]').val(albumlist);
			var albumiswidthlist=albumiswidthlist.replace(iswidth+"|","");
			$('input:[name="albumiswidthlist"]').val(albumiswidthlist);
		}
	}
	document.oncontextmenu=new Function('event.returnValue=false;');
	document.onselectstart=new Function('event.returnValue=false;');
</script>
</head>
<body>
<input type="hidden" name="maxselect" value="<?php echo $this->_tpl_vars['maxselect'] ?>"/>
<input type="hidden" name="filepath" id="filepath" value="<?php echo $this->_tpl_vars['filepath'] ?>">
<input type="hidden" name="albumlist" value=""/>
<input type="hidden" name="albumiswidthlist" value=""/>
<div id="mainbodybottonauto">
	<div class="filelist" id="imglist">
		<?php if(count($this->_tpl_vars['upfilearray']) > 0){ ?>
		<div class="infolist" title="<?php echo $this->_tpl_vars['ST']['filemanage_view_updir'] ?>">
			<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF" onclick="javascript:document.location='<?php echo $this->_tpl_vars['upfilearray']['loadurl'] ?>';">
				<tr>
					<td width="5%"></td>
					<td width="75%" id="left" class="padding-left3"><img src="templates/images/fileicon/dir.png">/<?php echo $this->_tpl_vars['upfilearray']['filepath'] ?></td>
					<td width="20%" id="infotype">
						<table border="0" style="border-collapse:collapse" bordercolor="#FFFFFF">
							<tr>
								<td><a class="setedit3" id="center" href="<?php echo $this->_tpl_vars['upfilearray']['loadurl'] ?>" title="<?php echo $this->_tpl_vars['ST']['filemanage_view_updir'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['filemanage_view_updir'] ?></a></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<?php } ?>
		<?php if(count($this->_tpl_vars['array']) > 0){ ?>
		<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
		<div class="infolist gallery clearfix">
			<?php if($this->_tpl_vars['array'][$list]['filetype']=='dir'){ ?>
			<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF" title="<?php echo $this->_tpl_vars['ST']['filemanage_view_opendir'] ?>" onclick="javascript:document.location='<?php echo $this->_tpl_vars['array'][$list]['loadurl'] ?>';">
			<?php } elseif($this->_tpl_vars['array'][$list]['filetype']=='img'){ ?>
			<table border="0" class="showpic" id="<?php echo $this->_tpl_vars['array'][$list]['url'] ?>" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
			<?php }else{ ?>
			<table border="0"  style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
			<?php } ?>
				<tr>
					<td width="5%">
						<?php if($this->_tpl_vars['array'][$list]['filetype']!='dir'){ ?>
						<input type="checkbox" id="<?php echo $this->_tpl_vars['array'][$list]['fiid'] ?>" name="selectinfoid" value="<?php echo $this->_tpl_vars['filepath'] ?><?php echo $this->_tpl_vars['array'][$list]['filename'] ?>" onclick="alselected('<?php echo $this->_tpl_vars['array'][$list]['fiid'] ?>',this.value,'selected',<?php echo $this->_tpl_vars['array'][$list]['iswidth'] ?>);">
						<?php } ?>
					</td>
					<td width="65%" id="left" class="padding-left3"><img src="templates/images/fileicon/<?php echo $this->_tpl_vars['array'][$list]['extension'] ?>.png"> <?php echo $this->_tpl_vars['array'][$list]['filename'] ?></td>
					<td width="10%" id="right" class="padding-right3"><?php if($this->_tpl_vars['array'][$list]['filetype']!='dir'){ ?><?php echo $this->format_size($this->_tpl_vars['array'][$list]['size'],1) ?><?php } ?></td>
					<td width="20%"><?php echo $this->timeformat($this->_tpl_vars['array'][$list]['addtime'],3) ?></td>
				</tr>
			</table>
		</div>
		<?php }} ?>
		<?php }else{ ?>
		<div class="infolist">
			<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
				<tr>
					<td align="center"><?php echo $this->_tpl_vars['ST']['list_nothing_title'] ?></td>
				</tr>
			</table>
		</div>
		<?php } ?>
	</div>
</div>
<div id="downbotton" style="margin-top: 5px;">
	<div id="subbotton">
		<table border="0" width="100%">
			<tr id="bottonsubmit">
				<td id="right"><input type="submit" name="Submit" id="submitbotton" onclick="javascript:refile();" value="<?php echo $this->_tpl_vars['ST']['botton_add'] ?>" class="button orange" title="<?php echo $this->_tpl_vars['ST']['botton_add'] ?>"/></td>
				<td id="left" class="padding-left5"><input type="reset" name="reset" onclick="javascript:parent.resetwindow();" id="release" value="<?php echo $this->_tpl_vars['ST']['botton_upfile_reset'] ?>" class="button orange"  title="<?php echo $this->_tpl_vars['ST']['botton_upfile_reset'] ?>" /></td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>