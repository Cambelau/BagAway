<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:27
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\shopping-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1b1804f9_33734729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aecca7464ef3e6d7194ecae3c5c4d441dcbb5684' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\shopping-cart.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1b1804f9_33734729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php if ((isset($_smarty_tpl->tpl_vars['account_created']->value))) {?>
	<p class="alert alert-success">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account has been created.'),$_smarty_tpl ) );?>

	</p>
<?php }?>

<?php $_smarty_tpl->_assignInScope('current_step', 'summary');
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['empty']->value))) {?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This store has not accepted your new order.'),$_smarty_tpl ) );?>
</p>
<?php } else { ?>
	<p id="emptyCartWarning" class="alert alert-warning unvisible"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</p>
	<?php if ((isset($_smarty_tpl->tpl_vars['lastProductAdded']->value)) && $_smarty_tpl->tpl_vars['lastProductAdded']->value) {?>
		<div class="cart_last_product">
			<div class="cart_last_product_header">
				<div class="left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last product added'),$_smarty_tpl ) );?>
</div>
			</div>
			<a class="cart_last_product_img" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['category'],null,null,$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastProductAdded']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
			</a>
			<div class="cart_last_product_content">
				<p class="product-name">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['category'],null,null,null,$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastProductAdded']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

					</a>
				</p>
				<?php if ((isset($_smarty_tpl->tpl_vars['lastProductAdded']->value['attributes'])) && $_smarty_tpl->tpl_vars['lastProductAdded']->value['attributes']) {?>
					<small>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['category'],null,null,null,$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastProductAdded']->value['attributes'], ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</small>
				<?php }?>
			</div>
		</div>
	<?php }?>
	<?php ob_start();
if ($_smarty_tpl->tpl_vars['total_discounts']->value != 0) {
echo "1";
} else {
echo "0";
}
$_prefixVariable60=ob_get_clean();
$_smarty_tpl->_assignInScope('total_discounts_num', $_prefixVariable60);?>
	<?php ob_start();
if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value) {
echo "2";
} else {
echo "0";
}
$_prefixVariable61=ob_get_clean();
$_smarty_tpl->_assignInScope('use_show_taxes', $_prefixVariable61);?>
	<?php ob_start();
if ($_smarty_tpl->tpl_vars['total_wrapping']->value != 0) {
echo "1";
} else {
echo "0";
}
$_prefixVariable62=ob_get_clean();
$_smarty_tpl->_assignInScope('total_wrapping_taxes_num', $_prefixVariable62);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBeforeShoppingCartBlock"),$_smarty_tpl ) );?>


	<div class="order-detail-content">
		<p class="room_info_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rooms information'),$_smarty_tpl ) );?>
</p>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_htl_data']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_v']->value['date_diff'], 'rm_v', false, 'rm_k');
$_smarty_tpl->tpl_vars['rm_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rm_k']->value => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->do_else = false;
?>
				<div class="row cart_product_line">
					<div class="col-sm-2 room-type-img-block">
						<p>
							<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive" />
							</a>
						</p>
						<p class="room_remove_block">
							<a href="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['link'];?>
"><i class="icon-trash"></i> &nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>
</a>
						</p>
					</div>
					<div class="col-sm-10">
						<div class="room-info-container">
							<div class="room-xs-img">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive" />
								</a>
							</div>
							<div class="room-xs-info">
								<p class="product-name">
									<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
										<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>

									</a>
									<a class="btn btn-default pull-right room-xs-remove" href="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['link'];?>
"><i class="icon-trash"></i></a>
								</p>
								<?php if ((isset($_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['location']))) {?>
									<p class="hotel-location">
										<i class="icon-map-marker"></i> &nbsp;<?php echo $_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['location'];?>

									</p>
								<?php }?>
							</div>
						</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['room_features']))) {?>
							<div class="room-type-features">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['room_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
								<span class="room-type-feature">
									<img src="<?php echo $_smarty_tpl->tpl_vars['THEME_DIR']->value;?>
img/icon/form-ok-circle.svg" /> <?php echo $_smarty_tpl->tpl_vars['feature']->value['name'];?>

								</span>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php }?>
						<div class="room_duration_block">
							<div class="col-sm-3 col-xs-6">
								<p class="room_duration_block_head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CHECK IN'),$_smarty_tpl ) );?>
</p>
								<p class="room_duration_block_value"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d %b, %a");?>
</p>
							</div>
							<div class="col-sm-3 col-xs-6">
								<p class="room_duration_block_head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CHECK OUT'),$_smarty_tpl ) );?>
</p>
								<p class="room_duration_block_value"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d %b, %a");?>
</p>
							</div>
							<div class="col-sm-2 col-xs-6">
								<p class="room_duration_block_head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ROOMS'),$_smarty_tpl ) );?>
</p>
								<p class="room_duration_block_value">
									<?php ob_start();
echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];
$_prefixVariable63 = ob_get_clean();
if ($_prefixVariable63 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];
} else {
echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];
}?>
								</p>
							</div>
							<div class="col-sm-4 col-xs-6">
								<p class="room_duration_block_head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NO. OF GUESTS'),$_smarty_tpl ) );?>
</p>
								<p class="room_duration_block_value">
									<?php ob_start();
echo $_smarty_tpl->tpl_vars['data_v']->value['adult'];
$_prefixVariable64 = ob_get_clean();
if ($_prefixVariable64 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['data_v']->value['adult'];
} else {
echo $_smarty_tpl->tpl_vars['data_v']->value['adult'];
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php ob_start();
echo $_smarty_tpl->tpl_vars['data_v']->value['children'];
$_prefixVariable65 = ob_get_clean();
if ($_prefixVariable65 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['data_v']->value['children'];
} else {
echo $_smarty_tpl->tpl_vars['data_v']->value['children'];
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );?>

								</p>
							</div>
						</div>
						<div class="row room_price_detail_block">
							<div class="col-sm-7">
								<div class="row">
									<div class="col-sm-6">
										<div class="rooms_price_block">
											<p class="room_total_price">
												<span class="room_type_current_price">
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount'])),$_smarty_tpl ) );?>

												</span>
												<?php if ((isset($_smarty_tpl->tpl_vars['data_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data_v']->value['extra_demands']) {?>
													<span class="plus-sign pull-right">
														+
													</span>
												<?php }?>
											</p>
											<p class="room_total_price_detial">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms price'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Excl.'),$_smarty_tpl ) );?>
 <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Incl.)'),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'all taxes.)'),$_smarty_tpl ) );
}?>
											</p>
										</div>
									</div>
									<?php if ((isset($_smarty_tpl->tpl_vars['data_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data_v']->value['extra_demands']) {?>
										<div class="col-sm-6">
											<div class="demand_price_block">
												<p class="demand_total_price">
													<span class="room_type_current_price">
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['demand_price']),$_smarty_tpl ) );?>

													</span>
												</p>
												<p class="room_total_price_detial">
													<a date_from="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rm_v']->value['data_form'], ENT_QUOTES, 'UTF-8', true);?>
" date_to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rm_v']->value['data_to'], ENT_QUOTES, 'UTF-8', true);?>
" id_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
" class="open_rooms_extra_demands" href="#rooms_type_extra_demands_form">
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities'),$_smarty_tpl ) );?>

													</a>
												</p>
											</div>
										</div>
									<?php }?>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="total_price_block">
									<p class="room_total_price">
										<span class="room_type_current_price">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount']+$_smarty_tpl->tpl_vars['rm_v']->value['demand_price'])),$_smarty_tpl ) );?>

										</span>
									</p>
									<p class="room_total_price_detial">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price for'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_days'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Night(s) stay'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Excl.'),$_smarty_tpl ) );?>
 <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Incl.'),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'all taxes.)'),$_smarty_tpl ) );
}?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php if (!$_smarty_tpl->tpl_vars['orderRestrictErr']->value) {?>
			<div class="row">
				<div class="col-sm-12 proceed_btn_block">
					<a class="btn btn-default button button-medium pull-right" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',null,null,array('proceed_to_customer_dtl'=>1));?>
" title="Proceed to checkout" rel="nofollow">
						<span>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed'),$_smarty_tpl ) );?>

						</span>
					</a>
				</div>
			</div>
		<?php }?>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['show_option_allow_separate_package']->value) {?>
	<p>
		<label for="allow_seperated_package" class="checkbox inline">
			<input type="checkbox" name="allow_seperated_package" id="allow_seperated_package" <?php if ($_smarty_tpl->tpl_vars['cart']->value->allow_seperated_package) {?>checked="checked"<?php }?> autocomplete="off"/>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send available products first'),$_smarty_tpl ) );?>

		</label>
	</p>
	<?php }?>

			<?php if (!(isset($_smarty_tpl->tpl_vars['addresses_style']->value))) {?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['company'] = 'address_company';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['vat_number'] = 'address_company';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['firstname'] = 'address_name';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['lastname'] = 'address_name';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['address1'] = 'address_address1';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['address2'] = 'address_address2';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['city'] = 'address_city';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['country'] = 'address_country';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['phone'] = 'address_phone';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['phone_mobile'] = 'address_phone_mobile';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['alias'] = 'address_title';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['advanced_payment_api']->value && ((!empty($_smarty_tpl->tpl_vars['delivery_option']->value) && (!(isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) || !$_smarty_tpl->tpl_vars['isVirtualCart']->value)) || $_smarty_tpl->tpl_vars['delivery']->value->id || $_smarty_tpl->tpl_vars['invoice']->value->id) && !$_smarty_tpl->tpl_vars['opc']->value) {?>
		<div class="order_delivery clearfix row">
			<?php if (!(isset($_smarty_tpl->tpl_vars['formattedAddresses']->value)) || (count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice']) == 0 && count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery']) == 0) || (count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice']['formated']) == 0 && count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery']['formated']) == 0)) {?>
				<?php if ($_smarty_tpl->tpl_vars['delivery']->value->id) {?>
					<div class="col-xs-12 col-sm-6"<?php if (!$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
						<ul id="delivery_address" class="address item box">
							<li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['delivery']->value->alias;?>
)</span></h3></li>
							<?php if ($_smarty_tpl->tpl_vars['delivery']->value->company) {?><li class="address_company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_address1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<?php if ($_smarty_tpl->tpl_vars['delivery']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_city"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_country"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['delivery_state']->value) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_state']->value, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
						</ul>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['invoice']->value->id) {?>
					<div class="col-xs-12 col-sm-6">
						<ul id="invoice_address" class="address alternate_item box">
							<li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['invoice']->value->alias;?>
)</span></h3></li>
							<?php if ($_smarty_tpl->tpl_vars['invoice']->value->company) {?><li class="address_company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_address1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<?php if ($_smarty_tpl->tpl_vars['invoice']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_city"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_country"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['invoice_state']->value) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice_state']->value, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
						</ul>
					</div>
				<?php }?>
			<?php } else { ?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formattedAddresses']->value, 'address', true, 'k');
$_smarty_tpl->tpl_vars['address']->iteration = 0;
$_smarty_tpl->tpl_vars['address']->index = -1;
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
$_smarty_tpl->tpl_vars['address']->iteration++;
$_smarty_tpl->tpl_vars['address']->index++;
$_smarty_tpl->tpl_vars['address']->first = !$_smarty_tpl->tpl_vars['address']->index;
$_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
$__foreach_address_218_saved = $_smarty_tpl->tpl_vars['address'];
?>
					<div class="col-xs-12 col-sm-6"<?php if ($_smarty_tpl->tpl_vars['k']->value == 'delivery' && !$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
						<ul class="address <?php if ($_smarty_tpl->tpl_vars['address']->last) {?>last_item<?php } elseif ($_smarty_tpl->tpl_vars['address']->first) {?>first_item<?php }?> <?php if ($_smarty_tpl->tpl_vars['address']->index%2) {?>alternate_item<?php } else { ?>item<?php }?> box">
							<li>
								<h3 class="page-subheading">
									<?php if ($_smarty_tpl->tpl_vars['k']->value == 'invoice') {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>

									<?php } elseif ($_smarty_tpl->tpl_vars['k']->value == 'delivery' && $_smarty_tpl->tpl_vars['delivery']->value->id) {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>

									<?php }?>
									<?php if ((isset($_smarty_tpl->tpl_vars['address']->value['object']['alias']))) {?>
										<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
)</span>
									<?php }?>
								</h3>
							</li>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value['ordered'], 'pattern');
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('addressKey', explode(" ",$_smarty_tpl->tpl_vars['pattern']->value));?>
								<?php $_smarty_tpl->_assignInScope('addedli', false);?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addressKey']->value, 'key', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
								<?php $_smarty_tpl->_assignInScope('key_str', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['key']->value,AddressFormat::_CLEANING_REGEX_,''));?>
									<?php if ((isset($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])) && !empty($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])) {?>
										<?php if ((!$_smarty_tpl->tpl_vars['addedli']->value)) {?>
											<?php $_smarty_tpl->_assignInScope('addedli', true);?>
											<li><span class="<?php if ((isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value]))) {
echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value];
}?>">
										<?php }?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value], ENT_QUOTES, 'UTF-8', true);?>

									<?php }?>
									<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null) && $_smarty_tpl->tpl_vars['addedli']->value)) {?>
										</span></li>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php
$_smarty_tpl->tpl_vars['address'] = $__foreach_address_218_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
	<?php }?>
	<div id="HOOK_SHOPPING_CART"><?php echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART']->value;?>
</div>
		<div class="clear"></div>
	<div class="cart_navigation_extra">
		<div id="HOOK_SHOPPING_CART_EXTRA"><?php if ((isset($_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value))) {
echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value;
}?></div>
	</div>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('deliveryAddress'=>intval($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)),$_smarty_tpl ) );
$_block_plugin153 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin153, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProduct'));
$_block_repeat=true;
echo $_block_plugin153->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'product','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin153->addJsDefL(array('name'=>'txtProduct'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin154 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin154, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProducts'));
$_block_repeat=true;
echo $_block_plugin154->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'products','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin154->addJsDefL(array('name'=>'txtProducts'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<div style="display:none;" id="rooms_extra_demands">
	<div id="rooms_type_extra_demands">
		<div class="panel">
			<div class="rooms_extra_demands_head">
				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities'),$_smarty_tpl ) );?>
</h3>
				<p class="rooms_extra_demands_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add below additional facilities to the rooms for better hotel experience'),$_smarty_tpl ) );?>
</p>
			</div>
			<div id="room_type_demands_desc"></div>
		</div>
	</div>
</div><?php }
}
