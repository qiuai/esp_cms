
885BA145EFC8431D34F5CC06D142F143defalut/cn/public/header.html|885BA145EFC8431D34F5CC06D142F143

<!-- 广告 -->
<div class="vid_banner"></div>
<!-- 广告End -->
<!-- 面包屑 -->
<div class="crumbs">
	<div class="warp">6623ef97c6f6ccf2fb032e800d2edda9path|type:type,id:<?php echo $this->_tpl_vars['type']['tid'] ?>||||6623ef97c6f6ccf2fb032e800d2edda9</div>
</div>
<!-- 面包屑End -->
<!-- 内容区域 -->
<div class="warp clear">
	<div class="vid">
    	<div class="title"><?php echo $this->_tpl_vars['type']['typename'] ?></div>

        <?php if(count($this->_tpl_vars['array']) > 0){ ?>
        <div class="vidlist clear">
            <?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
        	<dl>
            	<dt><a title="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><img src="<?php echo $this->_tpl_vars['rootdir'] ?><?php echo $this->_tpl_vars['array'][$i]['pic'] ?>"></a></dt>
                <dd><a title="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['ctitle'] ?></a></dd>
            </dl>
            <?php }} ?>
        </div>
        <?php } ?>

  </div>
</div>
<!-- 内容区域End -->

885BA145EFC8431D34F5CC06D142F143defalut/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143