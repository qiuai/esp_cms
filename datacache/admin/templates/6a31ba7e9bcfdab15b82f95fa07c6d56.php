<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript">

	var resizewindow= null;

	window.onresize = function(){
		var h = $(window).height();
		if(resizewindow!=h){
			sizewindow();
			resizewindow=h;
		}
	};

	function sizewindow(){
		var h = $(window).height();
		if(document.getElementById("mainbodybottonauto")){
			$('.managebottonadd').css({height:h-40});
		}
	}
	var recommanage_type_add_mid  = "<?php echo $this->_tpl_vars['ST']['recommanage_type_add_mid'] ?>";
	var recommanage_js_noselect_empty  = "<?php echo $this->_tpl_vars['ST']['recommanage_js_noselect_empty'] ?>";
	var recommanage_js_labelname_empty  = "<?php echo $this->_tpl_vars['ST']['recommanage_js_labelname_empty'] ?>";
	var recommanage_js_type_add_ok = "<?php echo $this->_tpl_vars['ST']['recommanage_js_type_add_ok'] ?>";
	var recommanage_js_type_add_no = "<?php echo $this->_tpl_vars['ST']['recommanage_js_type_add_no'] ?>";
	var iframename = "<?php echo $this->_tpl_vars['iframename'] ?>";
	iframename = iframename=='' ? "jerichotabiframe_0" : iframename;
	$(document).ready(function(){
		var h = '<?php echo $this->_tpl_vars['iframeheightwindow'] ?>';
		$('.managebottonadd').css({height:h-40});
		var options = {
			beforeSubmit: formverify,
			success:saveResponse,
			resetForm: false
		};
		$('#recomadd').submit(function() {
			$(this).ajaxSubmit(options);
			return false;
		});
		parent.scrolclear();
	})




	function formverify(formData) {
		var queryString = $.param(formData);
		var get=urlarray(queryString);
		if(get['mid']==0){
			document.recomadd.mid.focus();
			alert(recommanage_type_add_mid+recommanage_js_noselect_empty);
			return false;
		}
		if(get['labelname']==''){
			document.recomadd.labelname.focus();
			alert(recommanage_js_labelname_empty);
			return false;
		}
		parent.windowsdig('Loading','iframe:index.php?archive=management&action=load','400px','180px','iframe',false);
	}
	function saveResponse(options){
		parent.closeifram();
		var tab=document.getElementById("recomaddtab").value;
		if (options=='true'){
			if (tab=='true'){
				if(parent.frames[iframename].document.getElementById("selectform")){
					parent.frames[iframename].refresh('selectform','selectall','check_all');
				}
			}
			alert(recommanage_js_type_add_ok);
		}else{
			alert(recommanage_js_type_add_no+options);
		}

		var refalse = "<?php echo $this->_tpl_vars['refalse'] ?>";
		if (refalse!='1' || $.browser.mozilla){
			if (tab=='true'){
				parent.scrolopen();
				parent.onaletdoc()
			}
		}else{
			window.location.reload();
		}
	}
</script>
</head>

<body>
<form name="recomadd" id="recomadd" method="post" action="index.php?archive=recommanage&action=recomsave">
<input type="hidden" name="inputclass" value="add">
<input type="hidden" name="lng" id="lng" value="<?php echo $this->_tpl_vars['lng'] ?>">
<input type="hidden" name="tab" id="recomaddtab" value="<?php echo $this->_tpl_vars['tab'] ?>">
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<!--查看已选择的类型-->
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['position_title'] ?></span><span class="colorgorningage"><?php echo $this->_tpl_vars['ST']['recommanage_type_add_mess'] ?></span></span>
		</div>
		<div class="manageeditdiv">
			<div class="maneditcontent">
				<table class="formtable">
					<tr class="trstyle2">
						<td width="15%" class="trtitle011"><?php echo $this->_tpl_vars['ST']['recommanage_type_add_mid'] ?></td>
						<td width="85%" class="trtitle02">
							<select size="1" name="mid" id="mid">
								<option value="0"><?php echo $this->_tpl_vars['ST']['recommanage_type_add_mid_option'] ?></option>
								<?php if (count($this->_tpl_vars['modelarray'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['modelarray']); $list++){?>
								<option <?php echo $this->_tpl_vars['modelarray'][$list]['selected'] ?> value="<?php echo $this->_tpl_vars['modelarray'][$list]['mid'] ?>"><?php echo $this->_tpl_vars['modelarray'][$list]['modelname'] ?></option>
								<?php }} ?>
							</select>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['recommanage_type_add_mid_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle011"><?php echo $this->_tpl_vars['ST']['recommanage_type_add_labelname'] ?></td>
						<td width="85%" class="trtitle02">
							<input type="text" name="labelname" size="40" maxlength="80" class="infoInput"/>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['recommanage_type_add_labelname_mess'] ?></span>
						</td>
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
				<td id="right"><input type="submit" name="Submit" value="<?php echo $this->_tpl_vars['ST']['botton_add'] ?>" class="button orange" /></td>
				<td id="left" class="padding-left5"><input type="button" name="cancel" onClick="javascript:closewindow();" value="<?php echo $this->_tpl_vars['ST']['botton_add_reset'] ?>" class="button orange" /></td>
			</tr>
		</table>
	</div>
</div>
</form>
</body>

</html>