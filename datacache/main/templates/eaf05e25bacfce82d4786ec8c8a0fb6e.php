<ul>
    214adb21252b0af7b03s214s9typelist|utid:<?php echo $this->_tpl_vars['type']['topid'] ?>,tid:<?php echo $this->_tpl_vars['type']['tid'] ?>|||60af7b03s21fs
    <li><a <?php if($this->_tpl_vars['uptypeview']['tid']==$_GET[tid]){ ?>href="javascript:void(0);" class="hot"<?php } ?>><?php echo $this->_tpl_vars['uptypeview']['typename'] ?></a><em <?php if($this->_tpl_vars['uptypeview']['tid']==$_GET[tid]){ ?>class="hot"<?php } ?>></em></li>
    <?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
    <li><a href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>" <?php if($this->_tpl_vars['array'][$i]['selected']==1 ){ ?>href="javascript:void(0);" class="hot"<?php } ?> title="<?php echo $this->_tpl_vars['array'][$i]['typename'] ?>"><?php echo $this->_tpl_vars['array'][$i]['typename'] ?></a><em <?php if($this->_tpl_vars['array'][$i]['selected']==1 ){ ?>class="hot"<?php } ?>></em></li>
    <?php }} ?>
    214adb21252b0af7b03s214s9
</ul>