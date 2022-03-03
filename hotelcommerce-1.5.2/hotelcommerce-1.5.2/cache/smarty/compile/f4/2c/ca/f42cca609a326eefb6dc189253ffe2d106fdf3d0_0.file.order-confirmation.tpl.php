<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:25
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b19aa9b02_26087660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f42cca609a326eefb6dc189253ffe2d106fdf3d0' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\order-confirmation.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b19aa9b02_26087660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order confirmation'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order confirmation'),$_smarty_tpl ) );?>
</h1>

<?php $_smarty_tpl->_assignInScope('current_step', 'payment');
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

<div class="box">
	<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

	<?php if ((isset($_smarty_tpl->tpl_vars['order']->value->id)) && $_smarty_tpl->tpl_vars['order']->value->id) {?>
		<?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order ID is:'),$_smarty_tpl ) );?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['id_order_formatted']->value;?>
</span> . <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order ID has been sent via email.'),$_smarty_tpl ) );?>
</p>
		    <p class="cart_navigation exclusive">
			<a class="button-exclusive btn btn-default" href="<?php ob_start();
echo urlencode($_smarty_tpl->tpl_vars['reference_order']->value);
$_prefixVariable39=ob_get_clean();
ob_start();
echo urlencode($_smarty_tpl->tpl_vars['email']->value);
$_prefixVariable40=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('guest-tracking',true,NULL,"id_order=".$_prefixVariable39."&email=".$_prefixVariable40), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow my order'),$_smarty_tpl ) );?>
"><i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow my order'),$_smarty_tpl ) );?>
</a>
		    </p>
		<?php } else { ?>
			<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Status :'),$_smarty_tpl ) );?>
</strong> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirmed'),$_smarty_tpl ) );?>
</span></p>
			<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference :'),$_smarty_tpl ) );?>
</strong> <span class="bold"><?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
</span></p>
			<?php if ($_smarty_tpl->tpl_vars['any_back_order']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['shw_bo_msg']->value) {?>
					<br>
					<p class="back_o_msg"><strong><sup>*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some of your rooms are on back order. Please read the following message for rooms with status on backorder'),$_smarty_tpl ) );?>
</strong></p>
					<p>
						-&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['back_ord_msg']->value;?>

					</p>
				<?php }?>
			<?php }?>
			<hr>
			<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Details -'),$_smarty_tpl ) );?>
</strong></p>
			<div id="order-detail-content" class="">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="cart_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Image'),$_smarty_tpl ) );?>
</th>
							<th class="cart_description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Description'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Name'),$_smarty_tpl ) );?>
</th>
							<th class="cart_unit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit Price'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-in Date'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-out Date'),$_smarty_tpl ) );?>
</th>
							<th class="cart_total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value))) {?>
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
									<tr class="table_body">
										<td class="cart_product">
											<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
												<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive"/>
											</a>
										</td>
										<td class="cart_description">
											<p class="product-name">
												<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
													<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>

												</a>
											</p>
											<?php if ((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) {?>
												<p class="room_extra_demands">
													<a date_from="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['data_form'];?>
" date_to="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['data_to'];?>
" id_product="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
" id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="open_rooms_extra_demands" href="#rooms_type_extra_demands">
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities'),$_smarty_tpl ) );?>

													</a>
												</p>
												<p>
													<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

													<?php }?>
												</p>
											<?php }?>
										</td>
										<td><?php echo $_smarty_tpl->tpl_vars['data_v']->value['hotel_name'];?>
</td>
										<td class="cart_unit">
											<p class="text-center">

												<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
													<p class="text-center">
														<span class="product_original_price <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>" <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff'] < 0) {?> style="display:none;"<?php }?>>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['product_price_without_reduction_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

																													</span>&nbsp;
									                    <span class="room_type_current_price" <?php if (!$_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff']) {?>style="display:none;"<?php }?>>
									                    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['paid_unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

																								                    </span>
													</p>
												<?php } else { ?>
													<p class="text-center">
														<span class="product_original_price <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>" <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff'] < 0) {?> style="display:none;"<?php }?>>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['product_price_without_reduction_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

														</span>&nbsp;
									                    <span class="room_type_current_price" <?php if (!$_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff']) {?>style="display:none;"<?php }?>>
									                    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['paid_unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

									                    </span>
													</p>
												<?php }?>
											</p>
										</td>
										<td class="text-center">
											<p>
												<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];?>

											</p>
										</td>
										<td class="text-center">
											<p>
												<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d-%m-%Y");?>

											</p>
										</td>
										<td class="text-center">
											<p>
												<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d-%m-%Y");?>

											</p>
										</td>
										<td class="cart_total text-left">
											<p class="text-left">
												<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

												<?php } else { ?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

												<?php }?>
											</p>
										</td>
										<?php if ((isset($_smarty_tpl->tpl_vars['orders_has_invoice']->value)) && $_smarty_tpl->tpl_vars['orders_has_invoice']->value && $_smarty_tpl->tpl_vars['order']->value->payment != 'Free order') {?>
										<?php }?>
																			</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</tbody>
					<tfoot>
						<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
							<tr class="item">
								<td colspan="3"></td>
								<td colspan="3">
									<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms (tax excl.)'),$_smarty_tpl ) );?>
</strong>
								</td>
								<td colspan="2">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_products_te'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
								</td>
							</tr>
						<?php }?>
						<tr class="item">
							<td colspan="3"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> </strong>
							</td>
							<td colspan="2">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_products_ti'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_demands_price_te'] > 0) {?>
							<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
								<tr class="item">
									<td colspan="3"></td>
									<td colspan="3">
										<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional facilities Cost (tax excl.)'),$_smarty_tpl ) );?>
</strong>
									</td>
									<td colspan="2">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_demands_price_te'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
									</td>
								</tr>
							<?php }?>
							<tr class="item">
								<td colspan="3"></td>
								<td colspan="3">
									<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional facilities Cost (tax incl.)'),$_smarty_tpl ) );?>
</strong>
								</td>
								<td colspan="2">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_demands_price_ti'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
								</td>
							</tr>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['order']->value->total_wrapping > 0) {?>
						<tr class="item">
							<td colspan="3"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping cost'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2">
								<span class="price-wrapping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_wrapping'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts > 0) {?>
						<tr class="item">
							<td colspan="3"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2">
								<span class="price-discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_discounts'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
						<?php }?>
						<tr class="totalprice item">
							<td colspan="3"></td>
							<td colspan="3">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final Booking Total'),$_smarty_tpl ) );?>
</strong>
							</td>
							<td colspan="2">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
							</td>
						</tr>
						<?php if ($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid'] > $_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid_real']) {?>
							<tr class="item">
								<td colspan="3"></td>
								<td colspan="3">
									<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
</strong>
								</td>
								<td colspan="2">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid']-$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid_real']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
								</td>
							</tr>
						<?php }?>
					</tfoot>
				</table>
			</div>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent with this information.'),$_smarty_tpl ) );?>

				<br /><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order will be sent as soon as we receive payment.'),$_smarty_tpl ) );?>
</strong>
				<br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have questions, comments or concerns, please contact our'),$_smarty_tpl ) );?>
 <a class="cust_serv_lnk" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'expert customer support team'),$_smarty_tpl ) );?>
</a>
			</p>
		</div>
	<?php }?>
	<p class="cart_navigation exclusive">
		<a class="btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to your order history page'),$_smarty_tpl ) );?>
"><i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View your order history'),$_smarty_tpl ) );?>
</a>
	</p>
<?php }?>

<div style="display:none;" id="rooms_extra_demands">
	<div id="rooms_type_extra_demands">
		<div class="panel">
			<div class="rooms_extra_demands_head">
				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities'),$_smarty_tpl ) );?>
</h3>
				<p class="rooms_extra_demands_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below are the additional facilities chosen by you in this booking'),$_smarty_tpl ) );?>
</p>
			</div>
			<div id="room_type_demands_desc"></div>
		</div>
	</div>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('historyUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("orderdetail",true))),$_smarty_tpl ) );
$_block_plugin84 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin84, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'req_sent_msg'));
$_block_repeat=true;
echo $_block_plugin84->addJsDefL(array('name'=>'req_sent_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request Sent..','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin84->addJsDefL(array('name'=>'req_sent_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin85 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin85, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'wait_stage_msg'));
$_block_repeat=true;
echo $_block_plugin85->addJsDefL(array('name'=>'wait_stage_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Waiting','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin85->addJsDefL(array('name'=>'wait_stage_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin86 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin86, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'pending_state_msg'));
$_block_repeat=true;
echo $_block_plugin86->addJsDefL(array('name'=>'pending_state_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending...','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin86->addJsDefL(array('name'=>'pending_state_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin87 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin87, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'mail_sending_err'));
$_block_repeat=true;
echo $_block_plugin87->addJsDefL(array('name'=>'mail_sending_err'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while sending mail to the customer','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin87->addJsDefL(array('name'=>'mail_sending_err'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin88 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin88, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'refund_request_sending_error'));
$_block_repeat=true;
echo $_block_plugin88->addJsDefL(array('name'=>'refund_request_sending_error'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while processing request for order cancellation.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin88->addJsDefL(array('name'=>'refund_request_sending_error'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
