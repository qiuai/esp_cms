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
<script type="text/javascript" language="JavaScript">
	var iframename = "<?php echo $this->_tpl_vars['iframename'] ?>";
	var digheight="<?php echo $this->_tpl_vars['digheight'] ?>";
	var isfunction="<?php echo $this->_tpl_vars['isfunction'] ?>";

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
	var seconds = 5;
	var defaultUrl = "<?php echo $this->_tpl_vars['linkURL'] ?>";
	onload = function() {
		if (defaultUrl == 'javascript:history.go(-1)' && window.history.length == 0){
		    document.getElementById('redirectionMsg').innerHTML = '';
		    return;
		}
		window.setInterval(redirection, 1000);
	}

	function redirection(){
		if (seconds <= 0){
			window.clearInterval();
			return;
		}
		seconds --;
		document.getElementById('spanSeconds').innerHTML = seconds;
		if (seconds == 0){
			window.clearInterval();

			execute();
		}
	}

	function execute(){

		<?php if($this->_tpl_vars['isfunction']==1){ ?>
			parent.<?php echo $this->_tpl_vars['functionname'] ?>();
		<?php }else{ ?>
			closewindow();
		<?php } ?>




	}

	$(document).ready(function(){
		var h = '<?php echo $this->_tpl_vars['iframeheightwindow'] ?>';
		h=digheight>0 ? digheight : h;
		$('.managebottonadd').css({height:h-40});
	});
</script>
</head>

<body>
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['position_title'] ?></span><span class="padding-left5 colorgorningage"><?php echo $this->_tpl_vars['ST']['digmessage_title_mess'] ?></span></span>
		</div>
		<div class="manageeditdiv_fff">
			<div class="maneditcontent">
				<table class="formtablewin">
					<tr>
						<td id="center" style="padding:5px;"><img alt="" src="templates/images/Infoicon50.gif" /></td>
					</tr>
					<tr class="trstyle2">
						<td id="center" class="strong colorgorningage"><?php echo $this->_tpl_vars['calltitle'] ?></td>
					</tr>
					<tr class="trstyle2">
						<td id="center" class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['digmessage_spanSeconds_mess_left'] ?><span id="spanSeconds">5</span><?php echo $this->_tpl_vars['ST']['digmessage_spanSeconds_mess_right'] ?></td>
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
				<td id="center"><input type="submit" name="Submit" value="<?php echo $this->_tpl_vars['bottonName'] ?>" class="button orange" onclick="javascript:execute();" title="<?php echo $this->_tpl_vars['bottonName'] ?>"/></td>
			</tr>
		</table>
	</div>
</div>
</body>

</html>
      