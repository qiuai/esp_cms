<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
<title><?php echo $this->_tpl_vars['lngpack']['sitename'] ?></title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['lngpack']['keyword'] ?>" />
<meta name="description" content="<?php echo $this->_tpl_vars['lngpack']['description'] ?>" />
<!-- 引入CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['rootpath'] ?>css/style.css">
<!-- 引入JS -->
<script src="<?php echo $this->_tpl_vars['rootpath'] ?>js/jquery.min.js"></script>
<script src="<?php echo $this->_tpl_vars['rootpath'] ?>js/jquery.flexslider-min.js"></script>
</head>
<body>
<!-- 头部导航 -->
<div class="top">
	<div class="warp box">
    	<span>GMT+8  2015-5-5 12:00</span>
        <dl>
        	214adb21252b0af7b03s214s9lng||||60af7b03s21fs
			<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
            <?php if($i== 0){ ?>
            <dt><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/c.jpg"/><a href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['lngtitle'] ?></a></dt>
            <?php }else{ ?>
            <dd><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/c.jpg"/><a href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['lngtitle'] ?></a></dd>
            <?php } ?>
			<?php }} ?>
			214adb21252b0af7b03s214s9
        </dl>
        <em>帮助</em>
    </div>
</div>
<!-- 头部导航 End -->
<!-- LOGO 登录 -->
<div class="bar_box">
    <div class="warp bar_top">
        <div class="logo"><a href="<?php echo $this->_tpl_vars['rootdir'] ?>"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/logo.jpg"/></a></div>
        <div class="login">
            <ul>
                <li><span>账户</span><input name="" type="text" class="text_01"><em><input name="" type="checkbox" value="" class="checkbox">自动登录 </em><a href="#">找回密码</a></li>
                <li><span>密码</span><input name="" type="text" class="text_02"><input name="" type="button" class="button_01"><input name="" type="button" class="button_02"></li>
            </ul>
        </div>
    </div>
</div>
<!-- LOGO 登录 End -->
<!-- 主导航 -->
<div class="header">
	<ul class="warp clear">
        214adb21252b0af7b03s214s9menu|path:<?php echo $this->_tpl_vars['path'] ?>,current:<?php echo $this->_tpl_vars['current'] ?>,ishome:1|||60af7b03s21fs
		<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
		<li <?php if($this->_tpl_vars['array'][$i]['path']==$this->_tpl_vars['path'] && $this->_tpl_vars['array'][$i]['current']==$this->_tpl_vars['current']){ ?>class="hover"<?php } ?>><span><a class="menu" title="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['title'] ?></a></span></li>
		<?php }} ?>
		214adb21252b0af7b03s214s9
    </ul>
</div>
<!-- 主导航 End -->