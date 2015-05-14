<!-- 底部 -->
<div class="footer">
  	<div class="warp clear">
   		<div class="footer_left clear">
        
        214adb21252b0af7b03s214s9typelist||||60af7b03s21fs
			<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<3; $i++){?>
			<dl>
				<dt class="icon_0<?php echo $i+1 ?>"><?php echo $this->_tpl_vars['array'][$i]['typename'] ?></dt>
				<?php if(count( $this->_tpl_vars['array'][$i]['childArray'] ) > 0 ){ ?>
				<?php if (count($this->_tpl_vars['array'][$i]['childArray'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['array'][$i]['childArray']); $ii++){?>
				<dd><a href="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['link'] ?>" title="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['typename'] ?>"><?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['typename'] ?></a></dd>
				<?php }} ?>
				<?php } ?>
			</dl>
			<?php }} ?>
		214adb21252b0af7b03s214s9
        
        </div>
        <div class="footer_right"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/tel.jpg" width="216" height="102"></div>
  	</div>
</div>
<div class="warp foote_bottom">
    <h6>版权所有 © 深圳友融金融公司 www.yourongjr.com 备案号：粤ICP备14001856-1号 </h6>
    <h5><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/icon_04.jpg" width="296" height="42"></h5>
</div>
<!-- 底部End -->
<script>
$(window).load(function() {
	$('.flexslider').flexslider({
		directionNav: false,
		pauseOnAction: false
	});
});
</script>
</body>
</html>