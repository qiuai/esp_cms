<?php if($this->_tpl_vars['loadfun']=='articlelist'){ ?>
<script type="text/javascript">
	$().ready(function() {
		$("#three").treeview({collapsed: true, control: "#sidetreecontrol", prerendered: false, persist: "location"});
	});
</script>
<div class="modeltitle">按所属模型查看</div>
<div class="scrolltext">
	<div class="srcolcontent" style="height:75px;">
		<ul>
			<?php if (count($this->_tpl_vars['modelarray'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['modelarray']); $i++){?>
			<?php if($this->_tpl_vars['modelarray'][$i]['selected']=='selected'){ ?>
			<li><b><?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?></b></li>
			<?php }else{ ?>
			<li><a href="<?php echo $this->_tpl_vars['modelarray'][$i]['url'] ?>" title="<?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?>"><?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?></a></li>
			<?php } ?>
			<?php }} ?>
		</ul>
	</div>
</div>

<div class="modeltitle2">按分类查看</div>
<div class="scrolltext">
	<div class="srcolcontentThree" style="height:250px;" id="srcolcontent">
		<ul id="three" class="treeview">
			<?php if (count($this->_tpl_vars['typelist'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['typelist']); $i++){?>
			<li<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'] ) <= 0){ ?> class="onefast"<?php } ?>>
				<?php if($this->_tpl_vars['typelist'][$i]['styleid']==4){ ?>
				<p class="tabclick" datatype="iframe" datalink="index.php?archive=article&action=docedit&did=<?php echo $this->_tpl_vars['typelist'][$i]['linkid'] ?>&tid=<?php echo $this->_tpl_vars['typelist'][$i]['tid'] ?>&mid=<?php echo $this->_tpl_vars['typelist'][$i]['mid'] ?>&type=edit&iframename=jerichotabiframe_0" iconimg="templates/images/tab.gif" jerichotabindex="10000"><a href="#body" class="tabclicklink" hidefocus="true"><?php echo $this->_tpl_vars['typelist'][$i]['typename'] ?></a></p>
				<?php }else{ ?>
				<a href="<?php echo $this->_tpl_vars['typelist'][$i]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['typename'] ?></a>
				<?php } ?>
				<!--II-->
				<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'] ) > 0){ ?>
				<ul>
					<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['typelist'][$i]['childArray']); $ii++){?>
					<li class="one">
						<?php if($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['styleid']==4){ ?>
						<p class="tabclick" datatype="iframe" datalink="index.php?archive=article&action=docedit&did=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['linkid'] ?>&tid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['tid'] ?>&mid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['mid'] ?>&type=edit&iframename=jerichotabiframe_0" iconimg="templates/images/tab.gif" jerichotabindex="10000"><a href="#body" class="tabclicklink" hidefocus="true"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['typename'] ?></a></p>
						<?php }else{ ?>
						<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['typename'] ?></a>
						<?php } ?>
						<!--III-->
						<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'] ) > 0){ ?>
						<ul>
							<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'])>0){$divid_iii=1;for($iii=0;$iii<count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray']); $iii++){?>
							<li class="tow">
								<?php if($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['styleid']==4){ ?>
								<p class="tabclick" datatype="iframe" datalink="index.php?archive=article&action=docedit&did=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['linkid'] ?>&tid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['tid'] ?>&mid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['mid'] ?>&type=edit&iframename=jerichotabiframe_0" iconimg="templates/images/tab.gif" jerichotabindex="10000"><a href="#body" class="tabclicklink" hidefocus="true"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['typename'] ?></a></p>
								<?php }else{ ?>
								<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['typename'] ?></a>
								<?php } ?>
								<!--IIII-->
								<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'] ) > 0){ ?>
								<ul>
									<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'])>0){$divid_iiii=1;for($iiii=0;$iiii<count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray']); $iiii++){?>
									<li class="four">
										<?php if($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['styleid']==4){ ?>
										<p class="tabclick" datatype="iframe" datalink="index.php?archive=article&action=docedit&did=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['linkid'] ?>&tid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['tid'] ?>&mid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['mid'] ?>&type=edit&iframename=jerichotabiframe_0" iconimg="templates/images/tab.gif" jerichotabindex="10000"><a href="#body" class="tabclicklink" hidefocus="true"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['typename'] ?></a></p>
										<?php }else{ ?>
										<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['typename'] ?></a>
										<?php } ?>
										<!--IIIII-->
										<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'] ) > 0){ ?>
										<ul>
											<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'])>0){$divid_iiiii=1;for($iiiii=0;$iiiii<count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray']); $iiiii++){?>
											<li class="five">
												<?php if($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['styleid']==4){ ?>
												<p class="tabclick" datatype="iframe" datalink="index.php?archive=article&action=docedit&did=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['linkid'] ?>&tid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['tid'] ?>&mid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['mid'] ?>&type=edit&iframename=jerichotabiframe_0" iconimg="templates/images/tab.gif" jerichotabindex="10000"><a href="#body" class="tabclicklink" hidefocus="true"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['typename'] ?></a></p>
												<?php }else{ ?>
												<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['typename'] ?></a>
												<?php } ?>
												<!--IIIIII-->
												<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'] ) > 0){ ?>
												<ul>
													<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'])>0){$divid_iiiiii=1;for($iiiiii=0;$iiiiii<count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray']); $iiiiii++){?>
													<li class="six">
														<?php if($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['styleid']==4){ ?>
														<p class="tabclick" datatype="iframe" datalink="index.php?archive=article&action=docedit&did=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['linkid'] ?>&tid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['tid'] ?>&mid=<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['mid'] ?>&type=edit&iframename=jerichotabiframe_0" iconimg="templates/images/tab.gif" jerichotabindex="10000"><a href="#body" class="tabclicklink" hidefocus="true"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['typename'] ?></a></p>
														<?php }else{ ?>
														<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['typename'] ?></a>
														<?php } ?>
													</li>
													<?php }} ?>
												</ul>
												<?php } ?>
											</li>
											<?php }} ?>
										</ul>
										<?php } ?>
									</li>
									<?php }} ?>
								</ul>
								<?php } ?>
							</li>
							<?php }} ?>
						</ul>
						<?php } ?>
					</li>
					<?php }} ?>
				</ul>
				<?php } ?>
			</li>
			<?php }} ?>
		</ul>
	</div>
</div>
<?php } ?>

<?php if($this->_tpl_vars['loadfun']=='seolinklist' || $this->_tpl_vars['loadfun']=='seolinktypelist'){ ?>
<script type="text/javascript">
	$().ready(function() {
		$("#three").treeview({collapsed: true, control: "#sidetreecontrol", prerendered: false, persist: "location"});
	});
</script>
<div class="modeltitle">按所属模型查看</div>
<div class="scrolltext">
	<div class="srcolcontent" style="height:75px;">
		<ul>
			<?php if (count($this->_tpl_vars['modelarray'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['modelarray']); $i++){?>
			<?php if($this->_tpl_vars['modelarray'][$i]['selected']=='selected'){ ?>
			<li><b><?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?></b></li>
			<?php }else{ ?>
			<li><a title="<?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?>" href="<?php echo $this->_tpl_vars['modelarray'][$i]['url'] ?>" title="<?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?>"><?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?></a></li>
			<?php } ?>
			<?php }} ?>
		</ul>
	</div>
</div>

<div class="modeltitle2">按分类查看</div>
<div class="scrolltext">
	<div class="srcolcontentThree" style="height:250px;" id="srcolcontent">
		<ul id="three" class="treeview">
			<?php if (count($this->_tpl_vars['typelist'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['typelist']); $i++){?>
			<li<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'] ) <= 0){ ?> class="onefast"<?php } ?>>
				<a href="<?php echo $this->_tpl_vars['typelist'][$i]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['typename'] ?></a>
				<!--II-->
				<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'] ) > 0){ ?>
				<ul>
					<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['typelist'][$i]['childArray']); $ii++){?>
					<li class="one">
						<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['typename'] ?></a>
						<!--III-->
						<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'] ) > 0){ ?>
						<ul>
							<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'])>0){$divid_iii=1;for($iii=0;$iii<count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray']); $iii++){?>
							<li class="tow">
								<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['typename'] ?></a>
								<!--IIII-->
								<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'] ) > 0){ ?>
								<ul>
									<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'])>0){$divid_iiii=1;for($iiii=0;$iiii<count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray']); $iiii++){?>
									<li class="four">
										<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['typename'] ?></a>
										<!--IIIII-->
										<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'] ) > 0){ ?>
										<ul>
											<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'])>0){$divid_iiiii=1;for($iiiii=0;$iiiii<count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray']); $iiiii++){?>
											<li class="five">
												<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['typename'] ?></a>
												<!--IIIIII-->
												<?php if(count( $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'] ) > 0){ ?>
												<ul>
													<?php if (count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'])>0){$divid_iiiiii=1;for($iiiiii=0;$iiiiii<count($this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray']); $iiiiii++){?>
													<li class="six">
														<a href="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['url'] ?>" title="<?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['typename'] ?>"><?php echo $this->_tpl_vars['typelist'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['childArray'][$iiiiii]['typename'] ?></a>
													</li>
													<?php }} ?>
												</ul>
												<?php } ?>
											</li>
											<?php }} ?>
										</ul>
										<?php } ?>
									</li>
									<?php }} ?>
								</ul>
								<?php } ?>
							</li>
							<?php }} ?>
						</ul>
						<?php } ?>
					</li>
					<?php }} ?>
				</ul>
				<?php } ?>
			</li>
			<?php }} ?>
		</ul>
	</div>
</div>
<?php } ?>

<?php if($this->_tpl_vars['loadfun']=='typelist' || $this->_tpl_vars['loadfun']=='subjectlist' || $this->_tpl_vars['loadfun']=='recomlist'){ ?>
<div class="modeltitle">按所属模型查看</div>
<div class="scrolltext">
	<div class="srcolcontent" style="height:75px;" id="modelleftcontent">
		<ul>
			<?php if (count($this->_tpl_vars['modelarray'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['modelarray']); $i++){?>
			<?php if($this->_tpl_vars['modelarray'][$i]['selected']=='selected'){ ?>
			<li><b><?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?></b></li>
			<?php }else{ ?>
			<li><a href="<?php echo $this->_tpl_vars['modelarray'][$i]['url'] ?>" title="<?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?>"><?php echo $this->_tpl_vars['modelarray'][$i]['modelname'] ?></a></li>
			<?php } ?>
			<?php }} ?>
		</ul>
	</div>
</div>
<?php } ?>

<?php if($this->_tpl_vars['loadfun']=='memberlist'){ ?>
<div class="modeltitle">按会员等级查看</div>
<div class="scrolltext">
	<div class="srcolcontent" style="height:75px;" id="modelleftcontent">
		<ul>
			<?php if (count($this->_tpl_vars['memberclass'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['memberclass']); $i++){?>
			<?php if($this->_tpl_vars['memberclass'][$i]['selected']=='selected'){ ?>
			<li><b><?php echo $this->_tpl_vars['memberclass'][$i]['rankname'] ?></b></li>
			<?php }else{ ?>
			<li><a href="<?php echo $this->_tpl_vars['memberclass'][$i]['url'] ?>" title="<?php echo $this->_tpl_vars['memberclass'][$i]['rankname'] ?>"><?php echo $this->_tpl_vars['memberclass'][$i]['rankname'] ?></a></li>
			<?php } ?>
			<?php }} ?>
		</ul>
	</div>
</div>
<?php } ?>

<?php if($this->_tpl_vars['loadfun']=='advertlist'){ ?>
<div class="modeltitle">按广告位查看</div>
<div class="scrolltext">
	<div class="srcolcontent" style="height:75px;" id="modelleftcontent">
		<ul>
			<?php if (count($this->_tpl_vars['adtype'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['adtype']); $i++){?>
			<?php if($this->_tpl_vars['adtype'][$i]['selected']=='selected'){ ?>
			<li><b><?php echo $this->_tpl_vars['adtype'][$i]['adtypename'] ?></b></li>
			<?php }else{ ?>
			<li><a href="<?php echo $this->_tpl_vars['adtype'][$i]['url'] ?>" title="<?php echo $this->_tpl_vars['adtype'][$i]['adtypename'] ?>"><?php echo $this->_tpl_vars['adtype'][$i]['adtypename'] ?></a></li>
			<?php } ?>
			<?php }} ?>
		</ul>
	</div>
</div>
<?php } ?>


