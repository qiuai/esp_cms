
885BA145EFC8431D34F5CC06D142F143defalut/cn/public/header.html|885BA145EFC8431D34F5CC06D142F143

<!-- 广告 -->
<div class="banner_new"></div>
<!-- 广告End -->
<!-- 面包屑 -->
<div class="crumbs">
	<div class="warp">6623ef97c6f6ccf2fb032e800d2edda9path|type:type,id:<?php echo $this->_tpl_vars['type']['tid'] ?>||||6623ef97c6f6ccf2fb032e800d2edda9</div>
</div>
<!-- 面包屑End -->
<!-- 内容区域 -->
<div class="warp clear">
	<div class="cont_left">
    	<ul>
        	214adb21252b0af7b03s214s9typelist|utid:<?php echo $this->_tpl_vars['type']['topid'] ?>,tid:<?php echo $this->_tpl_vars['type']['tid'] ?>|||60af7b03s21fs
        	<li><a href="javascript:void(0);" class="hot"><?php echo $this->_tpl_vars['uptypeview']['typename'] ?></a><em class="hot"></em></li>
            <?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
			<li><a href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>" <?php if($this->_tpl_vars['array'][$i]['selected']==1 ){ ?>class="hot"<?php } ?> title="<?php echo $this->_tpl_vars['array'][$i]['typename'] ?>"><?php echo $this->_tpl_vars['array'][$i]['typename'] ?></a><em></em></li>
            <?php }} ?>
            214adb21252b0af7b03s214s9
        </ul>
    </div>
    <div class="cont_right">
    	<div class="title"><?php echo $this->_tpl_vars['type']['typename'] ?></div>

        <?php if(count($this->_tpl_vars['array']) > 0){ ?>
        <div class="news_list">
            <?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
            <div class="newsbox clear">
                <span><a title="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php if($this->_tpl_vars['array'][$i]['pic']){ ?><img alt="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" src="<?php echo $this->zoom($this->_tpl_vars['array'][$i]['pic'],80,80,'',3) ?>" width="144" height="144" /><?php }else{ ?><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/tu.jpg" width="144" height="144" /></a><?php } ?></span>
                <dl>
                    <dt><a title="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['ctitle'] ?></a></dt>
                    <dd><?php echo $this->_tpl_vars['array'][$i]['summary'] ?></br></br><?php echo $this->timeformat($this->_tpl_vars['array'][$i]['addtime'],3) ?></dd>
                </dl>
            </div>
			<?php }} ?>
        </div>
       <?php } ?>	

       </div>
    </div>
</div>
<!-- 内容区域End -->

885BA145EFC8431D34F5CC06D142F143defalut/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143