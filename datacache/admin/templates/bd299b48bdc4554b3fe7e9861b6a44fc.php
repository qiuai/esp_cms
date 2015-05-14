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
<script type="text/javascript" src="js/dialog.js"></script>
<script type="text/javascript" src="js/colorpicker.js"></script>
<script type="text/javascript" src="js/initedit.js"></script>
<script type="text/javascript">
	var resizewindow= null;
	window.onresize=function(){var h=$(window).height();if(resizewindow!=h){sizewindow();resizewindow=h;}};function sizewindow(){var h=$(window).height();if(document.getElementById("mainbodybottonauto")){$('.managebottonadd').css({height:h-40});}}
	$(document).ready(function(){parent.scrolclear();});function synchronization(){parent.windowsdig('Loading','iframe:index.php?archive=management&action=load','400px','180px','iframe',false);$.ajax({type:"GET",url:"index.php?archive=modenmain&action=synchronization",success:function(data){parent.closeifram();if(data=='false'){alert('<?php echo $this->_tpl_vars['ST']['modenmain_text_setup1'] ?>'+':'+data);}else{alert('<?php echo $this->_tpl_vars['ST']['modenmain_text_setup2'] ?>');$('#applisthtml').prepend(data);}}});}
	function appsetup(appid){parent.windowsdig('Loading','iframe:index.php?archive=management&action=load','400px','180px','iframe',false);var bottonidname="#installdiv_"+appid;var loadurl="index.php?archive=modenmain&action=appsetup";$.ajax({type:"POST",url:loadurl,data:"appid="+appid,dataType:'json',success:function(date){parent.closeifram();alert(date.message);if(date.setuptype==1){$(bottonidname).remove();$('#appinstallhtml').prepend(date.outhtml);}}});}
	function appuninstall(appid){parent.windowsdig('Loading','iframe:index.php?archive=management&action=load','400px','180px','iframe',false);var bottonidname="#installdiv_"+appid;var loadurl="index.php?archive=modenmain&action=appuninstall";$.ajax({type:"POST",url:loadurl,data:"appid="+appid,dataType:'json',success:function(date){parent.closeifram();alert(date.message);if(date.setuptype==1){$(bottonidname).remove();$('#applisthtml').prepend(date.outhtml);}}});}
	function appupdate(appid){parent.windowsdig('Loading','iframe:index.php?archive=management&action=load','400px','180px','iframe',false);var bottonidname="#installbotton_"+appid;var loadurl="index.php?archive=modenmain&action=appupdate";$.ajax({type:"POST",url:loadurl,data:"appid="+appid,dataType:'json',success:function(date){parent.closeifram();alert(date.message);if(date.setuptype==1){$(bottonidname).empty();$(bottonidname).prepend(date.outhtml);}}});}
	document.oncontextmenu=new Function('event.returnValue=false;');
	document.onselectstart=new Function('event.returnValue=false;');
</script>
</head>
<body>
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['modenmain_text_mess'] ?></span></span>
		</div>
		<div class="manageeditdiv_fff">
			<?php if(count($this->_tpl_vars['array']) > 0){ ?>
				<div class="app_title_lock"><p><?php echo $this->_tpl_vars['ST']['modenmain_text_setup5'] ?></p></div>
				<ul class="applist" id="appinstallhtml">
					<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
					<li id="installdiv_<?php echo $this->_tpl_vars['array'][$list]['appid'] ?>">
						<img src="<?php echo $this->_tpl_vars['loadurl'] ?><?php echo $this->_tpl_vars['array'][$list]['applypic'] ?>" title="<?php echo $this->_tpl_vars['array'][$list]['applyname'] ?>" class="pic"/>
						<p class="title"><?php echo $this->_tpl_vars['array'][$list]['applyname'] ?></p>
						<p class="desc"><?php if($this->_tpl_vars['array'][$list]['isfree']==1){ ?><?php echo $this->_tpl_vars['ST']['modenmain_text_setup6'] ?><?php }else{ ?><?php echo $this->_tpl_vars['ST']['modenmain_text_setup7'] ?><?php } ?></p>
						<p class="setupicon" id="installbotton_<?php echo $this->_tpl_vars['array'][$list]['appid'] ?>">
							<?php if($this->_tpl_vars['array'][$list]['isdel']==1){ ?>
							<a href="#" class="button" id="setupicon_<?php echo $this->_tpl_vars['array'][$list]['appid'] ?>"><?php echo $this->_tpl_vars['ST']['modenmain_text_setup8'] ?></a>
							<?php }else{ ?>
							<?php if($this->powercheck('system','appuninstall')==true ){ ?>
								<?php if($this->_tpl_vars['array'][$list]['volsn']<$this->_tpl_vars['array'][$list]['updatevol']){ ?>
								<a href="javascript:if (confirm('<?php echo $this->_tpl_vars['ST']['modenmain_text_setup24'] ?>')) appupdate(<?php echo $this->_tpl_vars['array'][$list]['appid'] ?>);" class="button three" id="appbotton<?php echo $this->_tpl_vars['array'][$list]['appid'] ?>"><?php echo $this->_tpl_vars['ST']['modenmain_text_setup23'] ?></a>
								<?php }else{ ?>
								<a href="javascript:if (confirm('<?php echo $this->_tpl_vars['ST']['modenmain_text_setup9'] ?>')) appuninstall(<?php echo $this->_tpl_vars['array'][$list]['appid'] ?>);" class="button orange" id="appbotton<?php echo $this->_tpl_vars['array'][$list]['appid'] ?>"><?php echo $this->_tpl_vars['ST']['modenmain_text_setup10'] ?></a>
								<?php } ?>
							<?php } ?>
							<?php } ?>
						</p>
					</li>
					<?php }} ?>
				</ul>
			<?php } ?>
			<?php if(count($this->_tpl_vars['noinstallarray']) > 0){ ?>
				<div class="app_title_lock"><p><?php echo $this->_tpl_vars['ST']['modenmain_text_setup11'] ?></p></div>
				<ul class="applist" id="applisthtml">
					<?php if (count($this->_tpl_vars['noinstallarray'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['noinstallarray']); $list++){?>
					<li id="installdiv_<?php echo $this->_tpl_vars['noinstallarray'][$list]['appid'] ?>">
						<img src="<?php echo $this->_tpl_vars['loadurl'] ?><?php echo $this->_tpl_vars['noinstallarray'][$list]['applypic'] ?>" title="<?php echo $this->_tpl_vars['noinstallarray'][$list]['applyname'] ?>" class="pic"/>
						<p class="title"><?php echo $this->_tpl_vars['noinstallarray'][$list]['applyname'] ?></p>
						<p class="desc"><?php if($this->_tpl_vars['noinstallarray'][$list]['isfree']==1){ ?><?php echo $this->_tpl_vars['ST']['modenmain_text_setup6'] ?><?php }else{ ?><?php echo $this->_tpl_vars['ST']['modenmain_text_setup7'] ?><?php } ?></p>
						<p class="setupicon">
							<?php if($this->powercheck('system','appsetup')==true ){ ?>
							<a disabled="true" href="javascript:appsetup(<?php echo $this->_tpl_vars['noinstallarray'][$list]['appid'] ?>);" class="button three" id="appbotton<?php echo $this->_tpl_vars['noinstallarray'][$list]['appid'] ?>"><?php echo $this->_tpl_vars['ST']['modenmain_text_setup12'] ?></a>
							<?php } ?>
						</p>
					</li>
					<?php }} ?>
				</ul>
			<?php } ?>
		</div>
	</div>
</div>
<div id="downbotton">
	<div id="subbotton">
		<table border="0" width="100%">
			<tr>
				<td id="center"><input type="button" name="cancel" onClick="javascript:synchronization();" value="<?php echo $this->_tpl_vars['ST']['modenmain_text_setup13'] ?>" class="button orange" /></td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>