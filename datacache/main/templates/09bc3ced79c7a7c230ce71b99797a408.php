
885BA145EFC8431D34F5CC06D142F143defalut/cn/public/header.html|885BA145EFC8431D34F5CC06D142F143
<!-- 广告 -->
<div class="banner_jl"></div>
<!-- 广告End -->
<!-- 面包屑 -->
<div class="crumbs">
	<div class="warp">6623ef97c6f6ccf2fb032e800d2edda9path|type:type,id:<?php echo $this->_tpl_vars['type']['tid'] ?>||||6623ef97c6f6ccf2fb032e800d2edda9</div>
</div>
<!-- 面包屑End -->
<!-- 内容区域 -->
<div class="warp clear">
	<div class="cont_left">
    	885BA145EFC8431D34F5CC06D142F143defalut/cn/public/left.html|885BA145EFC8431D34F5CC06D142F143
    </div>
    <div class="cont_right">
    	<div class="title"><?php echo $this->_tpl_vars['type']['typename'] ?></div>
        <div class="ny_zb">
            <div class="ny_zblb1">
                <ul class="clearfix">
                    <?php if(count($this->_tpl_vars['array']) > 0){ ?>
                    <?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
                    <li>
                        <a <?php if($i==0){ ?>class="cur"<?php } ?> href="javascript:void(0)"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/q.jpg"><?php echo $this->_tpl_vars['array'][$i]['title'] ?></a>
                        <ul <?php if($i==0){ ?>style="display:block;"<?php } ?>>               
                            <li><span><?php echo $this->_tpl_vars['array'][$i]['description'] ?></span></li>               
                        </ul>
                    </li>
                    <?php }} ?>
                    <?php } ?>
                </ul>
            </div>
		</div>
    </div>
</div>
<!-- 内容区域End -->

<!-- 引入JS -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootpath'] ?>js/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
	$(".ny_zblb1 ul li").click(function(){
		var thisSpan=$(this);
		$(".ny_zblb1 ul li ul").prev("a").removeClass("cur");
		$("ul", this).prev("a").addClass("cur");
		$(this).children("ul").slideDown("fast");
		$(this).siblings().children("ul").slideUp("fast");
	})
});
</script>

885BA145EFC8431D34F5CC06D142F143defalut/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143