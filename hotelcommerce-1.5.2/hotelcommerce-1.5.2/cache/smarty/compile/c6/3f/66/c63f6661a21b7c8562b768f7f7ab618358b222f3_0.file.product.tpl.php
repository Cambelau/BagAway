<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1ab8e5e4_82218445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c63f6661a21b7c8562b768f7f7ab618358b222f3' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\product.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1ab8e5e4_82218445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),2=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (count($_smarty_tpl->tpl_vars['errors']->value) == 0) {?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['priceDisplayPrecision']->value))) {?>
		<?php $_smarty_tpl->_assignInScope('priceDisplayPrecision', 2);?>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value || $_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
		<?php $_smarty_tpl->_assignInScope('productPrice', $_smarty_tpl->tpl_vars['product']->value->getPrice(true,(defined('NULL') ? constant('NULL') : null),6));?>
		<?php $_smarty_tpl->_assignInScope('productPriceWithoutReduction', $_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false,(defined('NULL') ? constant('NULL') : null)));?>
	<?php } elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
		<?php $_smarty_tpl->_assignInScope('productPrice', $_smarty_tpl->tpl_vars['product']->value->getPrice(false,(defined('NULL') ? constant('NULL') : null),6));?>
		<?php $_smarty_tpl->_assignInScope('productPriceWithoutReduction', $_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true,(defined('NULL') ? constant('NULL') : null)));?>
	<?php }?>
<div class="product_wrapper" itemscope itemtype="http://schema.org/Product">
	<?php if ((isset($_smarty_tpl->tpl_vars['product_id_hotel']->value)) && $_smarty_tpl->tpl_vars['product_id_hotel']->value) {?>
		<meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value);?>
">
		<div class="primary_block row">
			<!-- <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
				<div class="container">
					<div class="top-hr"></div>
				</div>
			<?php }?> --><!-- by webkul -->
			<?php if ((isset($_smarty_tpl->tpl_vars['adminActionDisplay']->value)) && $_smarty_tpl->tpl_vars['adminActionDisplay']->value) {?>
				<div id="admin-action" class="container">
					<p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is not visible to your customers.'),$_smarty_tpl ) );?>

						<input type="hidden" id="admin-action-product-id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" />
						<a id="publish_button" class="btn btn-default button button-small" href="#">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Publish'),$_smarty_tpl ) );?>
</span>
						</a>
						<a id="lnk_view" class="btn btn-default button button-small" href="#">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>
</span>
						</a>
					</p>
					<p id="admin-action-result"></p>
				</div>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['confirmation']->value)) && $_smarty_tpl->tpl_vars['confirmation']->value) {?>
				<p class="confirmation">
					<?php echo $_smarty_tpl->tpl_vars['confirmation']->value;?>

				</p>
			<?php }?>
			<!-- left infos-->
			<div class="pb-left-column col-xs-12 col-sm-8 col-md-8">
				<div class="room_type_img_containter card">
					<div class="room_hotel_name_block">
						<div class="hotel_name_block">
							<span><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
&nbsp;-&nbsp;<?php echo $_smarty_tpl->tpl_vars['hotel_name']->value;?>
</span>
						</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['num_reviews']->value))) {?>
							<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
								<?php if ($_smarty_tpl->tpl_vars['foo']->value <= $_smarty_tpl->tpl_vars['ratting']->value) {?>
									<div class="room_ratting_yes" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img_path']->value;?>
);"></div>
								<?php } else { ?>
									<div class="room_ratting_no" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img_path']->value;?>
);"></div>
								<?php }?>
							<?php }
}
?>
							<span class="num_reviews"><?php echo $_smarty_tpl->tpl_vars['num_reviews']->value;?>
 &nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review(s)'),$_smarty_tpl ) );?>
</span>
						<?php }?>
					</div>
					<!-- product img-->
					<div class="row">

						<div id="image-block-cont" class="col-xs-12 col-sm-9 col-sm-push-3 col-md-10 col-md-push-2">
							<div id="image-block" class="clearfix">
								<!-- <?php if ($_smarty_tpl->tpl_vars['product']->value->new) {?>
									<span class="new-box">
										<span class="new-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New'),$_smarty_tpl ) );?>
</span>
									</span>
								<?php }?> -->
								<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
									<span class="sale-box no-print">
										<span class="sale-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale!'),$_smarty_tpl ) );?>
</span>
									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'] && $_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value > $_smarty_tpl->tpl_vars['productPrice']->value) {?>
									<span class="discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduced price!'),$_smarty_tpl ) );?>
</span>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['have_image']->value) {?>
									<span id="view_full_size">
										<?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value && $_smarty_tpl->tpl_vars['have_image']->value && !$_smarty_tpl->tpl_vars['content_only']->value) {?>
											<a class="jqzoom" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" rel="gal1" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
">
												<img itemprop="image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>"/>
											</a>
										<?php } else { ?>
											<img id="bigpic" itemprop="image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" width="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['height'];?>
"/>
											<!-- <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
												<span class="span_link no-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View larger'),$_smarty_tpl ) );?>
</span>
											<?php }?> -->
										<?php }?>
									</span>
								<?php } else { ?>
									<span id="view_full_size">
										<img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;
echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-large_default.jpg" id="bigpic" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['height'];?>
"/>
										<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
											<span class="span_link">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View larger'),$_smarty_tpl ) );?>

											</span>
										<?php }?>
									</span>
								<?php }?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRoomTypeImageAfter"),$_smarty_tpl ) );?>

							</div> <!-- end image-block -->
						</div>
						<div class="col-xs-12 col-sm-3 col-sm-pull-9 col-md-2 col-md-pull-10">
							<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 0) {?>
								<!-- thumbnails -->
									<div id="views_block" class="clearfix <?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) < 2) {?>hidden<?php }?>">
										<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 2) {?>
																							<a id="view_scroll_left" class="" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other views'),$_smarty_tpl ) );?>
" href="javascript:{}">
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>

												</a>
																					<?php }?>
										<div id="thumbs_list">
											<ul id="thumbs_list_frame">
											<?php if ((isset($_smarty_tpl->tpl_vars['images']->value))) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'thumbnails', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['total'];
?>
													<?php $_smarty_tpl->_assignInScope('imageIds', ((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']));?>
													<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
														<?php $_smarty_tpl->_assignInScope('imageTitle', htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true));?>
													<?php } else { ?>
														<?php $_smarty_tpl->_assignInScope('imageTitle', htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true));?>
													<?php }?>
													<li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['last'] : null)) {?> class="last"<?php }?>>
														<a<?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value && $_smarty_tpl->tpl_vars['have_image']->value && !$_smarty_tpl->tpl_vars['content_only']->value) {?> href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
',largeimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
'}"<?php } else { ?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
"	data-fancybox-group="other-views" class="fancybox<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['cover']->value['id_image']) {?> shown<?php }?>"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
">
															<img class="img-responsive" id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['cartSize']->value))) {?> height="<?php echo $_smarty_tpl->tpl_vars['cartSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['cartSize']->value['width'];?>
"<?php }?> itemprop="image" />
														</a>
													</li>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
											</ul>
										</div> <!-- end thumbs_list -->
										<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 2) {?>
											<a id="view_scroll_right" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other views'),$_smarty_tpl ) );?>
" href="javascript:{}">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next'),$_smarty_tpl ) );?>

											</a>
										<?php }?>
									</div> <!-- end views-block -->
								<!-- end thumbnails -->
							<?php }?>
						</div>
					</div>
					<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 1) {?>
						<p class="resetimg clear no-print">
							<span id="wrapResetImages" style="display: none;">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
" data-id="resetImages">
									<i class="icon-repeat"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display all pictures'),$_smarty_tpl ) );?>

								</a>
							</span>
						</p>
					<?php }?>
				</div>

				<div class="room_type_info_containter">
					<!-- tab hook is added here -->
					<!--HOOK_PRODUCT_TAB -->
					<section class="page-product-box">
						<ul class="nav nav-tabs product_description_tabs">
							<li class="active"><a href="#room_info_tab" class="idTabHrefShort" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Information'),$_smarty_tpl ) );?>
</a></li>
							<li><a href="#refund_policies_tab" class="idTabHrefShort" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund policies'),$_smarty_tpl ) );?>
</a></li>
							<?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value;?>

						</ul>
						<div class="tab-content product_description_tabs_contents">
							<div id="room_info_tab" class="tab-pane active card">
								<div id="room_info_tab_information">
									<div class="row info_margin_div room_description">
										<div class="col-sm-12">
											<?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>

										</div>
									</div>
									<?php if ((isset($_smarty_tpl->tpl_vars['product']->value->capacity['adult'])) && (isset($_smarty_tpl->tpl_vars['product']->value->capacity['children']))) {?>
										<div class="info_margin_div">
											<div class="room_info_heading">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max Capacity'),$_smarty_tpl ) );?>
</span>
											</div>
											<div class="room_info_content">
												<p> <?php echo $_smarty_tpl->tpl_vars['product']->value->capacity['adult'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php echo $_smarty_tpl->tpl_vars['product']->value->capacity['children'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'child'),$_smarty_tpl ) );?>
</p>
											</div>
										</div>
									<?php }?>
									<?php if ((isset($_smarty_tpl->tpl_vars['features']->value)) && $_smarty_tpl->tpl_vars['features']->value) {?>
										<div class="info_margin_div">
											<div class="room_info_heading">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Features'),$_smarty_tpl ) );?>
</span>
											</div>
											<div class="room_info_content row">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'ftr_v', false, 'ftr_k');
$_smarty_tpl->tpl_vars['ftr_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ftr_k']->value => $_smarty_tpl->tpl_vars['ftr_v']->value) {
$_smarty_tpl->tpl_vars['ftr_v']->do_else = false;
?>
													<div class="col-md-3 col-sm-4 col-xs-6">
														<div class="rm_ftr_wrapper" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" >
															<img src="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['value'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable45=ob_get_clean();
echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(htmlspecialchars($_smarty_tpl->tpl_vars['ftr_img_src']->value, ENT_QUOTES, 'UTF-8', true))).$_prefixVariable45);?>
">  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

														</div>
													</div>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</div>
										</div>
									<?php }?>
									<?php if ((isset($_smarty_tpl->tpl_vars['hotel_features']->value)) && $_smarty_tpl->tpl_vars['hotel_features']->value) {?>
										<div class="info_margin_div">
											<div class="room_info_heading">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Features'),$_smarty_tpl ) );?>
</span>
											</div>
											<div class="room_info_content row">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_features']->value, 'ftr_v', false, 'ftr_k');
$_smarty_tpl->tpl_vars['ftr_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ftr_k']->value => $_smarty_tpl->tpl_vars['ftr_v']->value) {
$_smarty_tpl->tpl_vars['ftr_v']->do_else = false;
?>
													<div class="col-sm-4 col-xs-12"><i class="circle-small">o</i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</div>
										</div>
									<?php }?>
									<!-- <div class="info_margin_div">
										<div class="room_info_heading">
											<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );?>
</span>
										</div>
										<div class="room_info_content row"></div>
									</div> -->
									<?php if ((isset($_smarty_tpl->tpl_vars['hotel_policies']->value)) && $_smarty_tpl->tpl_vars['hotel_policies']->value) {?>
										<div class="info_margin_div">
											<div class="room_info_heading">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Policies'),$_smarty_tpl ) );?>
</span>
											</div>
											<div class="room_info_content">
												<p class=""><?php echo $_smarty_tpl->tpl_vars['hotel_policies']->value;?>
</p>
											</div>
										</div>
									<?php }?>
								</div>
							</div>
							<div id="refund_policies_tab" class="tab-pane card">
								<?php if ((isset($_smarty_tpl->tpl_vars['isHotelRefundable']->value)) && $_smarty_tpl->tpl_vars['isHotelRefundable']->value) {?>
									<?php if ((isset($_smarty_tpl->tpl_vars['hotelRefundRules']->value)) && $_smarty_tpl->tpl_vars['hotelRefundRules']->value) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotelRefundRules']->value, 'refundRule');
$_smarty_tpl->tpl_vars['refundRule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['refundRule']->value) {
$_smarty_tpl->tpl_vars['refundRule']->do_else = false;
?>
											<div class="info_margin_div">
												<div class="room_info_content">
													<i class="circle-small">o</i> <span class="refund-rule-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 - </span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</span>
												</div>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php } else { ?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );?>

									<?php }?>
								<?php } else { ?>
									<span class="non_refundable_txt error_msg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Non Refundable'),$_smarty_tpl ) );?>
</span>
								<?php }?>
							</div>
							<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value) {
echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value;
}?>
						</div>
					</section>
				</div>
			</div> <!-- end pb-left-column -->

			<div class="pb-right-column col-xs-12 col-sm-4 col-md-4">
				<?php if (($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) || (isset($_smarty_tpl->tpl_vars['groups']->value)) || $_smarty_tpl->tpl_vars['product']->value->reference || ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) {?>
					<p class="hidden">
						<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
" />
						<input type="hidden" name="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
" id="product_page_product_id" />
						<input type="hidden" name="add" value="1" />
						<input type="hidden" name="id_product_attribute" id="idCombination" value="" />
					</p>
					<div class="booking-form card">
						<div class="booking_room_fields">
							<form action="" method="post">
								<div class="form-group htl_location_block">
									<label for="" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Location'),$_smarty_tpl ) );?>
</label>
									<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_location']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
									<div class="row">
										<div class="form-group col-sm-6">
											<label for="" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check In Date'),$_smarty_tpl ) );?>
</label>
											<input type="text" class="form-control input-date" name="room_check_in" id="room_check_in" value="<?php if ((isset($_smarty_tpl->tpl_vars['date_from']->value))) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_from']->value,"%d-%m-%Y");
}?>" autocomplete="off" readonly />
										</div>
										<div class="form-group col-sm-6">
											<label for="" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out Date'),$_smarty_tpl ) );?>
</label>
											<input type="text" class="form-control input-date" name="room_check_out" id="room_check_out" value="<?php if ((isset($_smarty_tpl->tpl_vars['date_to']->value))) {
echo smarty_modifier_date_format(htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true),"%d-%m-%Y");
}?>" autocomplete="off" readonly />
										</div>
									</div>
									<div class="room_unavailability_date_error_div"></div>
									<div class="unvail_rooms_cond_display row">
										<div class="form-group col-sm-6" id="quantity_wanted_p"<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value && $_smarty_tpl->tpl_vars['product']->value->quantity <= 0) || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
											<label for="quantity_wanted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No. of Rooms'),$_smarty_tpl ) );?>
</label>
											<div class="qty_sec_cont">
												<div class="qty_input_cont row margin-lr-0">
													<input autocomplete="off" type="text" min="1" name="qty" id="quantity_wanted" class="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['quantityBackup']->value))) {
echo intval($_smarty_tpl->tpl_vars['quantityBackup']->value);
} else {
if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity > 1) {
echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;
} else { ?>1<?php }
}?>">

													<input type="hidden" id="num_days" value="<?php if ((isset($_smarty_tpl->tpl_vars['num_days']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['num_days']->value, ENT_QUOTES, 'UTF-8', true);
}?>">
													<input type="hidden" id="max_avail_type_qty" value="<?php if ((isset($_smarty_tpl->tpl_vars['total_available_rooms']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['total_available_rooms']->value, ENT_QUOTES, 'UTF-8', true);
}?>">
												</div>
												<div class="qty_direction">
													<a href="#" data-field-qty="qty" class="btn btn-default product_quantity_up">
														<span>
															<i class="icon-plus"></i>
														</span>
													</a>
													<a href="#" data-field-qty="qty" class="btn btn-default product_quantity_down">
														<span>
															<i class="icon-minus"></i>
														</span>
													</a>
												</div>
											</div>
											<span class="clearfix"></span>
										</div>
									</div>
									<?php if ((isset($_smarty_tpl->tpl_vars['room_type_demands']->value)) && $_smarty_tpl->tpl_vars['room_type_demands']->value) {?>
										<hr class="separator-hr-mg-10 unvail_rooms_cond_display">
										<div class="row price_desc_block unvail_rooms_cond_display">
											<div class="col-sm-6">
												<label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Price'),$_smarty_tpl ) );?>
</label>
													<p>
														<span class="total_rooms_price_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['total_price']->value)),$_smarty_tpl ) );?>
</span>
														<span class="pull-right plus-sign">+</span>
													</p>
											</div>
											<div class="col-sm-6">
												<label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Facilities'),$_smarty_tpl ) );?>
</label>
													<p class="extra_demands_price_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>0),$_smarty_tpl ) );?>
</p>
											</div>
										</div>
										<hr class="separator-hr-mg-10 form-group unvail_rooms_cond_display">
									<?php }?>
									<div class="room_unavailability_qty_error_div"></div>
									<div class="row unvail_rooms_cond_display">
										<div class="total_price_block col-xs-7 form-group">
											<label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subtotal'),$_smarty_tpl ) );?>
</label>
											<p>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['total_price']->value)),$_smarty_tpl ) );?>

											</p>
										</div>
										<div class="col-xs-5 form-group pull-right num_quantity_alert">
											<span class="num_searched_avail_rooms"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_available_rooms']->value, ENT_QUOTES, 'UTF-8', true);?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room(s) Left !'),$_smarty_tpl ) );?>

										</div>
									</div>

									<!-- End -->
									<div class="sold_out_alert">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms Sold Out !'),$_smarty_tpl ) );?>
</span>
									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
									<div class="order_restrict_alert">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can\'t book for rooms after date'),$_smarty_tpl ) );?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['max_order_date']->value,"%d-%m-%Y");?>
</span>
									</div>
								<?php }?>
								<div class="unvail_rooms_cond_display">
									<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value && $_smarty_tpl->tpl_vars['product']->value->quantity <= 0) || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || ((isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && $_smarty_tpl->tpl_vars['restricted_country_mode']->value) || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value || $_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
									<?php } else { ?>
										<p id="add_to_cart" class="buttons_bottom_block no-print">
											<button type="submit" name="Submit" class="exclusive book_now_submit">
												<span>
													<?php if ($_smarty_tpl->tpl_vars['content_only']->value && ((isset($_smarty_tpl->tpl_vars['product']->value->customization_required)) && $_smarty_tpl->tpl_vars['product']->value->customization_required)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Book Now'),$_smarty_tpl ) );
}?>
												</span>
											</button>
										</p>
									<?php }?>
								</div>
							</form>
						</div>
					</div>

										<?php if ((isset($_smarty_tpl->tpl_vars['room_type_demands']->value)) && $_smarty_tpl->tpl_vars['room_type_demands']->value) {?>
						<div class="col-sm-12 card room_demands_container">
							<label for="" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities'),$_smarty_tpl ) );?>
</label>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room_type_demands']->value, 'demand', false, 'idGlobalDemand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idGlobalDemand']->value => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
								<div class="row room_demand_block">
									<?php if ($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
										<div class="col-xs-1">
											<p class="checkbox">
												<input value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idGlobalDemand']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="id_room_type_demand" />
											</p>
										</div>
									<?php }?>
									<div class="col-xs-11 demand_adv_option_block">
										<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><span class="pull-right"><span class="extra_demand_option_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['demand']->value['price']),$_smarty_tpl ) );?>
</span><?php if ($_smarty_tpl->tpl_vars['demand']->value['price_calc_method'] == $_smarty_tpl->tpl_vars['WK_PRICE_CALC_METHOD_EACH_DAY']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'/night'),$_smarty_tpl ) );
}?></span><?php }?></p>
										<?php if ((isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])) && $_smarty_tpl->tpl_vars['demand']->value['adv_option']) {?>
											<select class="id_option">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['demand']->value['adv_option'], 'option', false, 'idOption');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idOption']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
													<option optionPrice="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idOption']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										<?php } else { ?>
											<input type="hidden" class="id_option" value="0" />
										<?php }?>
									</div>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<div class="room_demands_container_overlay">
							</div>
						</div>
					<?php }?>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value)) && $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value) {
echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value;
}?>
			</div>

		</div> <!-- end primary_block -->
		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
	<?php if (((isset($_smarty_tpl->tpl_vars['quantity_discounts']->value)) && count($_smarty_tpl->tpl_vars['quantity_discounts']->value) > 0)) {?>
				<!-- quantity discount -->
				<section class="page-product-box ">
					<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Volume discounts'),$_smarty_tpl ) );?>
</h3>
					<div id="quantityDiscount">
						<table class="std table-product-discounts">
							<thead>
								<tr>
									<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</th>
									<th><?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount'),$_smarty_tpl ) );
}?></th>
									<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You Save'),$_smarty_tpl ) );?>
</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quantity_discounts']->value, 'quantity_discount', false, NULL, 'quantity_discounts', array (
));
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price'] >= 0 || $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'amount') {?>
										<?php $_smarty_tpl->_assignInScope('realDiscountPrice', floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['base_price'])-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']));?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('realDiscountPrice', floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['base_price'])*floatval((1-$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])));?>
									<?php }?>
									<tr class="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
" data-real-discount-value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['realDiscountPrice']->value),$_smarty_tpl ) );?>
" data-discount-type="<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'];?>
" data-discount="<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
" data-discount-quantity="<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
">
										<td>
											<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>

										</td>
										<td>
											<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price'] >= 0 || $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'amount') {?>
												<?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
													<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax'] == 0 && !$_smarty_tpl->tpl_vars['quantity_discount']->value['price']) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl ) );?>

													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl ) );?>

													<?php }?>
												<?php } else { ?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl ) );?>

												<?php }?>
											<?php } else { ?>
												<?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
													<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax'] == 0) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl ) );?>

													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction']))),$_smarty_tpl ) );?>

													<?php }?>
												<?php } else { ?>
													<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
%
												<?php }?>
											<?php }?>
										</td>
										<td>
											<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to'),$_smarty_tpl ) );?>
</span>
											<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price'] >= 0 || $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'amount') {?>
												<?php $_smarty_tpl->_assignInScope('discountPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']));?>
											<?php } else { ?>
												<?php $_smarty_tpl->_assignInScope('discountPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])));?>
											<?php }?>
											<?php $_smarty_tpl->_assignInScope('discountPrice', $_smarty_tpl->tpl_vars['discountPrice']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
											<?php $_smarty_tpl->_assignInScope('qtyProductPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['qtyProductPrice']->value-$_smarty_tpl->tpl_vars['discountPrice']->value),$_smarty_tpl ) );?>

										</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
					</div>
				</section>
			<?php }?>
			<!-- <?php if ((isset($_smarty_tpl->tpl_vars['features']->value)) && $_smarty_tpl->tpl_vars['features']->value) {?>
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet'),$_smarty_tpl ) );?>
</h3>
					<table class="table-data-sheet">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
							<?php if ((isset($_smarty_tpl->tpl_vars['feature']->value['value']))) {?>
							<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<?php }?>
						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</table>
				</section>
			<?php }?> -->
			<!-- <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->description) {?>
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More info'),$_smarty_tpl ) );?>
</h3>
					<div  class="rte"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</div>
				</section>
			<?php }?> --><!-- by webkul commented -->
			<?php if ((isset($_smarty_tpl->tpl_vars['packItems']->value)) && count($_smarty_tpl->tpl_vars['packItems']->value) > 0) {?>
			<section id="blockpack">
				<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pack content'),$_smarty_tpl ) );?>
</h3>
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['packItems']->value), 0, true);
?>
			</section>
			<?php }?>
			<!-- tab hook is shifted to left column -->
			<!--end HOOK_PRODUCT_TAB -->
			<?php if ((isset($_smarty_tpl->tpl_vars['accessories']->value)) && $_smarty_tpl->tpl_vars['accessories']->value) {?>
				<!--Accessories -->
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accessories'),$_smarty_tpl ) );?>
</h3>
					<div class="block products_block accessories-block clearfix">
						<div class="block_content">
							<ul id="bxslider" class="bxslider clearfix">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'accessory', false, NULL, 'accessories_list', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['total'];
?>
									<?php if (($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['accessory']->value['quantity_all_versions'] > 0 || $_smarty_tpl->tpl_vars['accessory']->value['quantity'] > 0) && $_smarty_tpl->tpl_vars['accessory']->value['available_for_order'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
										<?php $_smarty_tpl->_assignInScope('accessoryLink', $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['accessory']->value['id_product'],$_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['category']));?>
										<li class="item product-box ajax_block_product<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['first'] : null)) {?> first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['last'] : null)) {?> last_item<?php } else { ?> item<?php }?> product_accessories_description">
											<div class="product_desc">
												<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" class="product-image product_image">
													<img class="lazyOwl" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"/>
												</a>
												<div class="block_description">
													<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More'),$_smarty_tpl ) );?>
" class="product_description">
														<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['accessory']->value['description_short']),25,'...' ));?>

													</a>
												</div>
											</div>
											<div class="s_title_block">
												<h5 itemprop="name" class="product-name">
													<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true);?>
">
														<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['name'],20,'...',true )), ENT_QUOTES, 'UTF-8', true);?>

													</a>
												</h5>
												<?php if ($_smarty_tpl->tpl_vars['accessory']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
												<span class="price">
													<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value != 1) {?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price_tax_exc']),$_smarty_tpl ) );?>

													<?php }?>
												</span>
												<?php }?>
											</div>
											<div class="clearfix" style="margin-top:5px">
												<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && ($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['accessory']->value['quantity'] > 0)) {?>
													<div class="no-print">
														<a class="exclusive button ajax_add_to_cart_button" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);
$_prefixVariable46=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"qty=1&amp;id_product=".$_prefixVariable46."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
">
															<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
</span>
														</a>
													</div>
												<?php }?>
											</div>
										</li>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					</div>
				</section>
				<!--end Accessories -->
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value) {
echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value;
}?>
			<!-- description & features -->
			<?php if (((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->description) || ((isset($_smarty_tpl->tpl_vars['features']->value)) && $_smarty_tpl->tpl_vars['features']->value) || ((isset($_smarty_tpl->tpl_vars['accessories']->value)) && $_smarty_tpl->tpl_vars['accessories']->value) || ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value) || ((isset($_smarty_tpl->tpl_vars['attachments']->value)) && $_smarty_tpl->tpl_vars['attachments']->value) || (isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->customizable) {?>
				<?php if ((isset($_smarty_tpl->tpl_vars['attachments']->value)) && $_smarty_tpl->tpl_vars['attachments']->value) {?>
				<!--Download -->
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download'),$_smarty_tpl ) );?>
</h3>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attachments']->value, 'attachment', false, NULL, 'attachements', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['total'];
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration'] : null)%3 == 1) {?><div class="row"><?php }?>
							<div class="col-lg-4">
								<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,NULL,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h4>
								<p class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
								<a class="btn btn-default btn-block" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,NULL,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="icon-download"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Download"),$_smarty_tpl ) );?>
 (<?php echo Tools::formatBytes($_smarty_tpl->tpl_vars['attachment']->value['file_size'],2);?>
)
								</a>
								<hr />
							</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration'] : null)%3 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['last'] : null)) {?></div><?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</section>
				<!--end Download -->
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->customizable) {?>
				<!--Customization -->
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization'),$_smarty_tpl ) );?>
</h3>
					<!-- Customizable products -->
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['customizationFormTarget']->value;?>
" enctype="multipart/form-data" id="customizationForm" class="clearfix">
						<p class="infoCustomizable">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'After saving your customized product, remember to add it to your cart.'),$_smarty_tpl ) );?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value->uploadable_files) {?>
							<br />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allowed file formats are: GIF, JPG, PNG'),$_smarty_tpl ) );
}?>
						</p>
						<?php if (intval($_smarty_tpl->tpl_vars['product']->value->uploadable_files)) {?>
							<div class="customizableProductsFile">
								<h5 class="product-heading-h5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pictures'),$_smarty_tpl ) );?>
</h5>
								<ul id="uploadable_files" class="clearfix">
									<?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationFields']->value, 'field', false, NULL, 'customizationFields', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 0) {?>
											<li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>"><?php $_smarty_tpl->_assignInScope('key', ((('pictures_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']));?>
												<?php if ((isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
													<div class="customizationUploadBrowse">
														<img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;
echo $_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value];?>
_small" alt="" />
															<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductDeletePictureLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['field']->value['id_customization_field']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
" >
																<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
" class="customization_delete_icon" width="11" height="13" />
															</a>
													</div>
												<?php }?>
												<div class="customizationUploadBrowse form-group">
													<label class="customizationUploadBrowseDescription">
														<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
															<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

														<?php } else { ?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select an image file from your computer'),$_smarty_tpl ) );?>

														<?php }?>
														<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
													</label>
													<input type="file" name="file<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" id="img<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" class="form-control customization_block_input <?php if ((isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>filled<?php }?>" />
												</div>
											</li>
											<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							</div>
						<?php }?>
						<?php if (intval($_smarty_tpl->tpl_vars['product']->value->text_fields)) {?>
							<div class="customizableProductsText">
								<h5 class="product-heading-h5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text'),$_smarty_tpl ) );?>
</h5>
								<ul id="text_fields">
								<?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationFields']->value, 'field', false, NULL, 'customizationFields', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 1) {?>
										<li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
											<label for ="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
">
												<?php $_smarty_tpl->_assignInScope('key', ((('textFields_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']));?>
												<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
													<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
											</label>
											<textarea name="textField<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" class="form-control customization_block_input" id="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" rows="3" cols="20"><?php if ((isset($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]))) {
echo stripslashes($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]);
}?></textarea>
										</li>
										<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							</div>
						<?php }?>
						<p id="customizedDatas">
							<input type="hidden" name="quantityBackup" id="quantityBackup" value="" />
							<input type="hidden" name="submitCustomizedDatas" value="1" />
							<button class="button btn btn-default button button-small" name="saveCustomization">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</span>
							</button>
							<span id="ajax-loader" class="unvisible">
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" alt="loader" />
							</span>
						</p>
					</form>
					<p class="clear required"><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'required fields'),$_smarty_tpl ) );?>
</p>
				</section>
				<!--end Customization -->
				<?php }?>
			<?php }?>
		<?php }?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('total_avail_rms'=>$_smarty_tpl->tpl_vars['total_available_rooms']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('max_order_date'=>$_smarty_tpl->tpl_vars['max_order_date']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('booking_date_to'=>$_smarty_tpl->tpl_vars['date_to']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('booking_date_from'=>$_smarty_tpl->tpl_vars['date_from']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('product_controller_url'=>$_smarty_tpl->tpl_vars['product_controller_url']->value),$_smarty_tpl ) );?>

	<?php } else { ?>
		<div class="bootstrap">
			<div class="alert alert-warning">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This room type has not enough information. Please save information of related hotel and other required room information for the booking of this room type.'),$_smarty_tpl ) );?>

			</div>
		</div>
	<?php }?>
</div> <!-- itemscope product wrapper -->
<?php if ((isset($_GET['ad'])) && $_GET['ad']) {
$_block_plugin137 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin137, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'ad'));
$_block_repeat=true;
echo $_block_plugin137->addJsDefL(array('name'=>'ad'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars(($_smarty_tpl->tpl_vars['base_dir']->value).($_GET['ad']), ENT_QUOTES, 'UTF-8', true);
$_block_repeat=false;
echo $_block_plugin137->addJsDefL(array('name'=>'ad'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_GET['adtoken'])) && $_GET['adtoken']) {
$_block_plugin138 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin138, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adtoken'));
$_block_repeat=true;
echo $_block_plugin138->addJsDefL(array('name'=>'adtoken'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);
$_block_repeat=false;
echo $_block_plugin138->addJsDefL(array('name'=>'adtoken'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('allowBuyWhenOutOfStock'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['allow_oosp']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('availableNowValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_now)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('availableLaterValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_later)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('attribute_anchor_separator'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['attribute_anchor_separator']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('attributesCombinations'=>$_smarty_tpl->tpl_vars['attributesCombinations']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currentDate'=>smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['combinations']->value)) && $_smarty_tpl->tpl_vars['combinations']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('combinations'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('combinationsFromController'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayDiscountPrice'=>$_smarty_tpl->tpl_vars['display_discount_price']->value),$_smarty_tpl ) );
$_block_plugin139 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin139, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'upToTxt'));
$_block_repeat=true;
echo $_block_plugin139->addJsDefL(array('name'=>'upToTxt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin139->addJsDefL(array('name'=>'upToTxt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['combinationImages']->value)) && $_smarty_tpl->tpl_vars['combinationImages']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('combinationImages'=>$_smarty_tpl->tpl_vars['combinationImages']->value),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customizationId'=>$_smarty_tpl->tpl_vars['id_customization']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customizationFields'=>$_smarty_tpl->tpl_vars['customizationFields']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('default_eco_tax'=>floatval($_smarty_tpl->tpl_vars['product']->value->ecotax)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayPrice'=>intval($_smarty_tpl->tpl_vars['priceDisplay']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('ecotaxTax_rate'=>floatval($_smarty_tpl->tpl_vars['ecotaxTax_rate']->value)),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['cover']->value['id_image_only']))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idDefaultImage'=>intval($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idDefaultImage'=>0),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('img_ps_dir'=>$_smarty_tpl->tpl_vars['img_ps_dir']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('img_prod_dir'=>$_smarty_tpl->tpl_vars['img_prod_dir']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('jqZoomEnabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['jqZoomEnabled']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('maxQuantityToAllowDisplayOfLastQuantityMessage'=>intval($_smarty_tpl->tpl_vars['last_qties']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('minimalQuantity'=>intval($_smarty_tpl->tpl_vars['product']->value->minimal_quantity)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('noTaxForThisProduct'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_tax']->value ))),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['customer_group_without_tax']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customerGroupWithoutTax'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_group_without_tax']->value ))),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customerGroupWithoutTax'=>false),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['group_reduction']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('groupReduction'=>floatval($_smarty_tpl->tpl_vars['group_reduction']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('groupReduction'=>false),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('oosHookJsCodeFunctions'=>array()),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productHasAttributes'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['groups']->value)) ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPriceTaxExcluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPriceTaxIncluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productBasePriceTaxExcluded'=>floatval(($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,6,null,false,false)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productBasePriceTaxExcl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,6,null,false,false)))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productBasePriceTaxIncl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(true,null,6,null,false,false)))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productReference'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productAvailableForOrder'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->available_for_order ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPriceWithoutReduction'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPrice'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productUnitPriceRatio'=>floatval($_smarty_tpl->tpl_vars['product']->value->unit_price_ratio)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productShowPrice'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && $_smarty_tpl->tpl_vars['product']->value->show_price) ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('PS_CATALOG_MODE'=>$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && count($_smarty_tpl->tpl_vars['product']->value->specificPrice)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('product_specific_price'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('product_specific_price'=>array()),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['display_qties']->value == 1 && $_smarty_tpl->tpl_vars['product']->value->quantity) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quantityAvailable'=>$_smarty_tpl->tpl_vars['product']->value->quantity),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quantityAvailable'=>0),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quantitiesDisplayAllowed'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['display_qties']->value ))),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'] && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] == 'percentage') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_percent'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*floatval(100)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_percent'=>0),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'] && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] == 'amount') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_price'=>0),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['price']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('specific_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['price'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('specific_price'=>0),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('specific_currency'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['id_currency']) ))),$_smarty_tpl ) );?>
 	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('stock_management'=>intval($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('taxRate'=>floatval($_smarty_tpl->tpl_vars['tax_rate']->value)),$_smarty_tpl ) );
$_block_plugin140 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin140, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'doesntExist'));
$_block_repeat=true;
echo $_block_plugin140->addJsDefL(array('name'=>'doesntExist'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This combination does not exist for this product. Please select another combination.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin140->addJsDefL(array('name'=>'doesntExist'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin141 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin141, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'doesntExistNoMore'));
$_block_repeat=true;
echo $_block_plugin141->addJsDefL(array('name'=>'doesntExistNoMore'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is no longer in stock','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin141->addJsDefL(array('name'=>'doesntExistNoMore'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin142 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin142, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'doesntExistNoMoreBut'));
$_block_repeat=true;
echo $_block_plugin142->addJsDefL(array('name'=>'doesntExistNoMoreBut'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'with those attributes but is available with others.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin142->addJsDefL(array('name'=>'doesntExistNoMoreBut'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin143 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin143, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'fieldRequired'));
$_block_repeat=true;
echo $_block_plugin143->addJsDefL(array('name'=>'fieldRequired'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill in all the required fields before saving your customization.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin143->addJsDefL(array('name'=>'fieldRequired'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin144 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin144, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'uploading_in_progress'));
$_block_repeat=true;
echo $_block_plugin144->addJsDefL(array('name'=>'uploading_in_progress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploading in progress, please be patient.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin144->addJsDefL(array('name'=>'uploading_in_progress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin145 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin145, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'product_fileDefaultHtml'));
$_block_repeat=true;
echo $_block_plugin145->addJsDefL(array('name'=>'product_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No file selected','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin145->addJsDefL(array('name'=>'product_fileDefaultHtml'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin146 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin146, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'product_fileButtonHtml'));
$_block_repeat=true;
echo $_block_plugin146->addJsDefL(array('name'=>'product_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose File','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin146->addJsDefL(array('name'=>'product_fileButtonHtml'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_sign'=>$_smarty_tpl->tpl_vars['currency']->value->sign),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_format'=>$_smarty_tpl->tpl_vars['currency']->value->format),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_blank'=>$_smarty_tpl->tpl_vars['currency']->value->blank),$_smarty_tpl ) );
$_block_plugin147 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin147, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'correct_date_cond'));
$_block_repeat=true;
echo $_block_plugin147->addJsDefL(array('name'=>'correct_date_cond'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out Date should be greater than Check in date.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin147->addJsDefL(array('name'=>'correct_date_cond'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin148 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin148, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'some_error_cond'));
$_block_repeat=true;
echo $_block_plugin148->addJsDefL(array('name'=>'some_error_cond'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occured .Please try again.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin148->addJsDefL(array('name'=>'some_error_cond'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin149 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin149, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'unavail_qty_text'));
$_block_repeat=true;
echo $_block_plugin149->addJsDefL(array('name'=>'unavail_qty_text'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required quantity of rooms are Not available.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin149->addJsDefL(array('name'=>'unavail_qty_text'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin150 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin150, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'out_of_stock_cond'));
$_block_repeat=true;
echo $_block_plugin150->addJsDefL(array('name'=>'out_of_stock_cond'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No room is available for this period.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin150->addJsDefL(array('name'=>'out_of_stock_cond'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin151 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin151, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'wrong_qty_cond'));
$_block_repeat=true;
echo $_block_plugin151->addJsDefL(array('name'=>'wrong_qty_cond'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'you are trying for a invalid quantity.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin151->addJsDefL(array('name'=>'wrong_qty_cond'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
