<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\order-opc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1a27eaa2_66795973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df8521f04a88b1fd0527b4487d1d9c7afcdd95c' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\order-opc.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1a27eaa2_66795973 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['opc']->value) {?>
	<?php $_smarty_tpl->_assignInScope('back_order_page', "order-opc.php");?>
	<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('back_order_page', "order.php");
}?>

<section id="wrapper">
	<div class="container">
		<section id="content">
			<div class="row">
				<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your booking cart'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<h2 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your booking cart'),$_smarty_tpl ) );?>
</h2>

					<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The hotel is currently no accepting any bookings.'),$_smarty_tpl ) );?>
</p>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['productNumber']->value && (isset($_smarty_tpl->tpl_vars['cart_htl_data']->value))) {?>

						<div class="col-md-8">
							<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

														<div class="accordion" id="oprder-opc-accordion">
								<?php if ((isset($_smarty_tpl->tpl_vars['checkout_process_steps']->value)) && $_smarty_tpl->tpl_vars['checkout_process_steps']->value) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checkout_process_steps']->value, 'step');
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
										<?php if ($_smarty_tpl->tpl_vars['step']->value->step_key == 'checkout_rooms_summary') {?>
											<div class="card">
												<div class="card-header" id="shopping-cart-summary-head">
													<h5 class="accordion-header" data-toggle="collapse" data-target="#collapse-shopping-cart" aria-expanded="true" aria-controls="collapse-shopping-cart">
														<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms & Price Summary'),$_smarty_tpl ) );?>
</span>
														<i class="icon-angle-left pull-right accordion-left-arrow <?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>hidden<?php }?>"></i>
													</h5>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_reachable) {?>
													<div id="collapse-shopping-cart" class="opc-collapse <?php if (!$_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>collapse<?php }?>" aria-labelledby="shopping-cart-head" data-parent="#oprder-opc-accordion">
														<div class="card-body">
																														<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
														</div>
													</div>
												<?php }?>
											</div>
																				<?php } elseif ($_smarty_tpl->tpl_vars['step']->value->step_key == 'checkout_customer') {?>
											<div class="card" id="guest-info-block">
												<div class="card-header" id="guest-info-head">
													<h5 class="accordion-header" data-toggle="collapse" data-target="#collapse-guest-info" aria-expanded="true" aria-controls="collapse-guest-info">
														<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Information'),$_smarty_tpl ) );?>
</span>
														<i class="icon-angle-left pull-right accordion-left-arrow <?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>hidden<?php }?>"></i>
													</h5>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_reachable) {?>
													<div id="collapse-guest-info" class="opc-collapse <?php if (!$_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>collapse<?php }?>" aria-labelledby="guest-info-head" data-parent="#oprder-opc-accordion">
														<div class="card-body">
															<?php if ($_smarty_tpl->tpl_vars['is_logged']->value || $_smarty_tpl->tpl_vars['isGuest']->value) {?>
																<div class="row margin-btm-10">
																	<div class="col-sm-3 col-xs-5 info-head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</div>
																	<div class="col-sm-9 col-xs-7 info-value"><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['lastname'];?>
</div>
																</div>
																<div class="row margin-btm-10">
																	<div class="col-sm-3 col-xs-5 info-head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</div>
																	<div class="col-sm-9 col-xs-7 info-value"><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['email'];?>
</div>
																</div>
																<?php if (((isset($_smarty_tpl->tpl_vars['delivery']->value->phone_mobile)) && $_smarty_tpl->tpl_vars['delivery']->value->phone_mobile) || ((isset($_smarty_tpl->tpl_vars['delivery']->value->phone)) && $_smarty_tpl->tpl_vars['delivery']->value->phone)) {?>
																	<div class="row margin-btm-10">
																		<div class="col-sm-3 col-xs-5 info-head">
																			<?php if ((isset($_smarty_tpl->tpl_vars['delivery']->value->phone_mobile)) && $_smarty_tpl->tpl_vars['delivery']->value->phone_mobile) {?>
																				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile Number'),$_smarty_tpl ) );?>

																			<?php } else { ?>
																				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone Number'),$_smarty_tpl ) );?>

																			<?php }?>
																		</div>
																		<div class="col-sm-9 col-xs-7 info-value">
																			<?php if ((isset($_smarty_tpl->tpl_vars['delivery']->value->phone_mobile)) && $_smarty_tpl->tpl_vars['delivery']->value->phone_mobile) {?>
																				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true);?>

																			<?php } else { ?>
																				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->phone, ENT_QUOTES, 'UTF-8', true);?>

																			<?php }?>
																		</div>
																	</div>
																<?php }?>

																																<?php if (!$_smarty_tpl->tpl_vars['orderRestrictErr']->value) {?>
																	<hr>
																	<div class="row">
																		<div class="col-sm-12 proceed_btn_block">
																			<a class="btn btn-default button button-medium pull-right" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',null,null,array('proceed_to_payment'=>1));?>
" title="Proceed to Payment" rel="nofollow">
																				<span>
																					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed'),$_smarty_tpl ) );?>

																				</span>
																			</a>
																		</div>
																	</div>
																<?php }?>
															<?php } else { ?>
																<!-- Create account / Guest account / Login block -->
																<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-opc-new-account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
															<?php }?>
														</div>
													</div>
												<?php }?>
											</div>
										<?php } elseif ($_smarty_tpl->tpl_vars['step']->value->step_key == 'checkout_payment') {?>
																						<div class="card">
												<div class="card-header" id="order-payment-head">
													<h5 class="accordion-header" data-toggle="collapse" data-target="#collapse-order-payment" aria-expanded="true" aria-controls="collapse-order-payment">
														<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Information'),$_smarty_tpl ) );?>
</span>
														<i class="icon-angle-left pull-right accordion-left-arrow <?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>hidden<?php }?>"></i>
													</h5>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_reachable) {?>
													<div id="collapse-order-payment" class="opc-collapse <?php if (!$_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>collapse<?php }?>" aria-labelledby="order-payment-head" data-parent="#oprder-opc-accordion">
														<div class="card-body">
															<!-- Payment -->
															<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
															<!-- END Payment -->
														</div>
													</div>
												<?php }?>
											</div>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
							</div>
						</div>
						<div class="col-md-4">
														<div class="col-sm-12 card cart_total_detail_block">
								<p>
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms cost'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' (tax excl.)'),$_smarty_tpl ) );
}?></span>
									<span class="cart_total_values"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl ) );?>
</span>
								</p>
								<?php if ((isset($_smarty_tpl->tpl_vars['totalFacilityCostTE']->value)) && $_smarty_tpl->tpl_vars['totalFacilityCostTE']->value) {?>
									<p>
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total additional facilities'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' (tax excl.)'),$_smarty_tpl ) );
}?></span>
										<span class="cart_total_values"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['totalFacilityCostTE']->value),$_smarty_tpl ) );?>
</span>
									</p>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value && $_smarty_tpl->tpl_vars['total_tax']->value != 0) {?>
									<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value != 0) {?>
										<p class="cart_total_price">
											<span><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );
}?></span>
											<span class="cart_total_values"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl ) );?>
</span>
										</p>
									<?php }?>
									<p class="cart_total_tax">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax on rooms'),$_smarty_tpl ) );?>
</span>
										<span class="cart_total_values"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['total_tax']->value-$_smarty_tpl->tpl_vars['additional_facilities_tax']->value)),$_smarty_tpl ) );?>
</span>
									</p>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value && $_smarty_tpl->tpl_vars['additional_facilities_tax']->value != 0) {?>
									<p class="cart_total_tax">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax on facilities'),$_smarty_tpl ) );?>
</span>
										<span class="cart_total_values"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['additional_facilities_tax']->value),$_smarty_tpl ) );?>
</span>
									</p>
								<?php }?>
								<p <?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value == 0) {?> class="unvisible"<?php }?>>
									<span>
										<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift-wrapping cost'),$_smarty_tpl ) );
}?>
										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift-wrapping cost'),$_smarty_tpl ) );?>

										<?php }?>
									</span>
									<span class="cart_total_values">
										<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl ) );?>

											<?php } else { ?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping']->value),$_smarty_tpl ) );?>

											<?php }?>
										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl ) );?>

										<?php }?>
									</span>
								</p>
								<p class="total_discount_block <?php if ($_smarty_tpl->tpl_vars['total_discounts']->value == 0) {?> unvisible<?php }?>">
									<span>
										<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Discount (tax incl)'),$_smarty_tpl ) );?>

											<?php } else { ?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Discount (tax excl)'),$_smarty_tpl ) );?>

											<?php }?>
										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Discount'),$_smarty_tpl ) );?>

										<?php }?>
									</span>
									<span class="cart_total_values">
										<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {?>
											<?php $_smarty_tpl->_assignInScope('total_discounts_negative', $_smarty_tpl->tpl_vars['total_discounts']->value*-1);?>
										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('total_discounts_negative', $_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1);?>
										<?php }?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_discounts_negative']->value),$_smarty_tpl ) );?>

									</span>
								</p>
								<?php if ((isset($_smarty_tpl->tpl_vars['is_advance_payment']->value)) && $_smarty_tpl->tpl_vars['is_advance_payment']->value) {?>
									<p>
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advance Payment Amount'),$_smarty_tpl ) );?>
</span>
										<span class="cart_total_values"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['advPaymentAmount']->value),$_smarty_tpl ) );?>
</span>
									</p>
									<p>
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
</span>
										<span class="cart_total_values"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['dueAmount']->value),$_smarty_tpl ) );?>
</span>
									</p>
								<?php }?>
								<p class="cart_final_total_block">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final Total'),$_smarty_tpl ) );?>
</span>
									<?php if ((isset($_smarty_tpl->tpl_vars['is_advance_payment']->value)) && $_smarty_tpl->tpl_vars['is_advance_payment']->value) {?>
										<span class="cart_total_values"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['advPaymentAmount']->value),$_smarty_tpl ) );?>
</span>
									<?php } else { ?>
										<span class="cart_total_values">
											<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl ) );?>

											<?php } else { ?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl ) );?>

											<?php }?>
										</span>
										<div class="hookDisplayProductPriceBlock-price">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayCartTotalPriceLabel"),$_smarty_tpl ) );?>

										</div>
									<?php }?>
								</p>
							</div>
														<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
																<div class="col-sm-12 card cart_voucher_detail_block">
									<p class="cart_voucher_head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply Coupon'),$_smarty_tpl ) );?>
</p>
									<p><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have promocode ?'),$_smarty_tpl ) );?>
</span></p>
																		<?php if (sizeof($_smarty_tpl->tpl_vars['discounts']->value)) {?>
										<div class="row">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount', true);
$_smarty_tpl->tpl_vars['discount']->iteration = 0;
$_smarty_tpl->tpl_vars['discount']->index = -1;
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
$_smarty_tpl->tpl_vars['discount']->iteration++;
$_smarty_tpl->tpl_vars['discount']->index++;
$_smarty_tpl->tpl_vars['discount']->first = !$_smarty_tpl->tpl_vars['discount']->index;
$_smarty_tpl->tpl_vars['discount']->last = $_smarty_tpl->tpl_vars['discount']->iteration === $_smarty_tpl->tpl_vars['discount']->total;
$__foreach_discount_166_saved = $_smarty_tpl->tpl_vars['discount'];
?>
												<?php if (((float)$_smarty_tpl->tpl_vars['discount']->value['value_real'] == 0 && $_smarty_tpl->tpl_vars['discount']->value['free_shipping'] != 1) || ((float)$_smarty_tpl->tpl_vars['discount']->value['value_real'] == 0 && $_smarty_tpl->tpl_vars['discount']->value['code'] == '')) {?>
													<?php continue 1;?>
												<?php }?>

												<div class="col-sm-12 margin-btm-10 cart_discount <?php if ($_smarty_tpl->tpl_vars['discount']->last) {?>last_item<?php } elseif ($_smarty_tpl->tpl_vars['discount']->first) {?>first_item<?php } else { ?>item<?php }?>" id="cart_discount_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">
													<span class="cart_discount_name">
														<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

														<?php if (strlen($_smarty_tpl->tpl_vars['discount']->value['code'])) {?>
															<a
																href="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>?deleteDiscount=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
"
																class="price_discount_delete pull-right"
																title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
">
																<i class="icon-times"></i>
															</a>
														<?php }?>
													</span>
													<span class="voucher_apply_state pull-right">
														<img src="<?php echo $_smarty_tpl->tpl_vars['THEME_DIR']->value;?>
img/icon/form-ok-circle.svg" /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Applied'),$_smarty_tpl ) );?>

													</span>
												</div>
											<?php
$_smarty_tpl->tpl_vars['discount'] = $__foreach_discount_166_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
										<hr class="seperator">
									<?php }?>
									<div class="row margin-btm-20">
																				<form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" id="voucher">
											<div class="col-sm-8 col-xs-12 col-md-12 col-lg-8">
												<input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['discount_name']->value)) && $_smarty_tpl->tpl_vars['discount_name']->value) {
echo $_smarty_tpl->tpl_vars['discount_name']->value;
}?>" />
												<input type="hidden" name="submitDiscount" />
											</div>
											<div class="col-sm-4 col-xs-12 col-md-12 col-lg-4 submit_discount_div">
												<button type="submit" name="submitAddDiscount" class="opc-button-small opc-btn-primary">
													<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply'),$_smarty_tpl ) );?>
</span>
												</button>
											</div>
										</form>
									</div>

																		<?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
										<p class="cart_voucher_head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available Coupons'),$_smarty_tpl ) );?>
</p>
										<div class="row avail_vouchers_block">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayVouchers']->value, 'voucher', false, 'key', 'availVoucher', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_availVoucher']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_availVoucher']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_availVoucher']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_availVoucher']->value['total'];
?>
												<div class="col-xs-12">
													<p class="avail_voucher_name">
														<span class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
 - </span><?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>

													</p>
													<p class="avail_voucher_des"><?php echo $_smarty_tpl->tpl_vars['voucher']->value['description'];?>
</p>
													<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_availVoucher']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_availVoucher']->value['last'] : null)) {?>
														<hr class="seperator">
													<?php }?>
												</div>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
									<?php }?>
								</div>
							<?php }?>
													</div>
					<?php } else { ?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your booking cart'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<h2 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your booking cart'),$_smarty_tpl ) );?>
</h2>
						<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

						<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Till now you did not added any room in your cart.'),$_smarty_tpl ) );?>
</p>
					<?php }?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('imgDir'=>$_smarty_tpl->tpl_vars['img_dir']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('authenticationUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("authentication",true))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('orderOpcUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("order-opc",true))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('historyUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("history",true))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('guestTrackingUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("guest-tracking",true))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addressUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("address",true,NULL,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('orderProcess'=>'order-opc'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('guestCheckoutEnabled'=>intval($_smarty_tpl->tpl_vars['PS_GUEST_CHECKOUT_ENABLED']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayPrice'=>$_smarty_tpl->tpl_vars['priceDisplay']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('taxEnabled'=>$_smarty_tpl->tpl_vars['use_taxes']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('conditionEnabled'=>intval($_smarty_tpl->tpl_vars['conditions']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('vat_management'=>intval($_smarty_tpl->tpl_vars['vat_management']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('errorCarrier'=>addcslashes($_smarty_tpl->tpl_vars['errorCarrier']->value,'\'')),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('errorTOS'=>addcslashes($_smarty_tpl->tpl_vars['errorTOS']->value,'\'')),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('checkedCarrier'=>intval($_smarty_tpl->tpl_vars['checked']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addresses'=>array()),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('isVirtualCart'=>intval($_smarty_tpl->tpl_vars['isVirtualCart']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('isPaymentStep'=>intval($_smarty_tpl->tpl_vars['isPaymentStep']->value)),$_smarty_tpl ) );
$_block_plugin108 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin108, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtWithTax'));
$_block_repeat=true;
echo $_block_plugin108->addJsDefL(array('name'=>'txtWithTax'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin108->addJsDefL(array('name'=>'txtWithTax'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin109 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin109, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtWithoutTax'));
$_block_repeat=true;
echo $_block_plugin109->addJsDefL(array('name'=>'txtWithoutTax'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin109->addJsDefL(array('name'=>'txtWithoutTax'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin110 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin110, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtHasBeenSelected'));
$_block_repeat=true;
echo $_block_plugin110->addJsDefL(array('name'=>'txtHasBeenSelected'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'has been selected','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin110->addJsDefL(array('name'=>'txtHasBeenSelected'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin111 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin111, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtNoCarrierIsSelected'));
$_block_repeat=true;
echo $_block_plugin111->addJsDefL(array('name'=>'txtNoCarrierIsSelected'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carrier has been selected','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin111->addJsDefL(array('name'=>'txtNoCarrierIsSelected'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin112 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin112, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtNoCarrierIsNeeded'));
$_block_repeat=true;
echo $_block_plugin112->addJsDefL(array('name'=>'txtNoCarrierIsNeeded'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carrier is needed for this order','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin112->addJsDefL(array('name'=>'txtNoCarrierIsNeeded'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin113 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin113, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtConditionsIsNotNeeded'));
$_block_repeat=true;
echo $_block_plugin113->addJsDefL(array('name'=>'txtConditionsIsNotNeeded'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You do not need to accept the Terms of Service for this order.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin113->addJsDefL(array('name'=>'txtConditionsIsNotNeeded'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin114 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin114, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtTOSIsAccepted'));
$_block_repeat=true;
echo $_block_plugin114->addJsDefL(array('name'=>'txtTOSIsAccepted'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The service terms have been accepted','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin114->addJsDefL(array('name'=>'txtTOSIsAccepted'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin115 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin115, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtTOSIsNotAccepted'));
$_block_repeat=true;
echo $_block_plugin115->addJsDefL(array('name'=>'txtTOSIsNotAccepted'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The service terms have not been accepted','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin115->addJsDefL(array('name'=>'txtTOSIsNotAccepted'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin116 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin116, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtThereis'));
$_block_repeat=true;
echo $_block_plugin116->addJsDefL(array('name'=>'txtThereis'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin116->addJsDefL(array('name'=>'txtThereis'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin117 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin117, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtErrors'));
$_block_repeat=true;
echo $_block_plugin117->addJsDefL(array('name'=>'txtErrors'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error(s)','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin117->addJsDefL(array('name'=>'txtErrors'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin118 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin118, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtDeliveryAddress'));
$_block_repeat=true;
echo $_block_plugin118->addJsDefL(array('name'=>'txtDeliveryAddress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin118->addJsDefL(array('name'=>'txtDeliveryAddress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin119 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin119, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtInvoiceAddress'));
$_block_repeat=true;
echo $_block_plugin119->addJsDefL(array('name'=>'txtInvoiceAddress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin119->addJsDefL(array('name'=>'txtInvoiceAddress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin120 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin120, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtModifyMyAddress'));
$_block_repeat=true;
echo $_block_plugin120->addJsDefL(array('name'=>'txtModifyMyAddress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify my address','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin120->addJsDefL(array('name'=>'txtModifyMyAddress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin121 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin121, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtInstantCheckout'));
$_block_repeat=true;
echo $_block_plugin121->addJsDefL(array('name'=>'txtInstantCheckout'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instant checkout','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin121->addJsDefL(array('name'=>'txtInstantCheckout'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin122 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin122, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtSelectAnAddressFirst'));
$_block_repeat=true;
echo $_block_plugin122->addJsDefL(array('name'=>'txtSelectAnAddressFirst'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please start by selecting an address.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin122->addJsDefL(array('name'=>'txtSelectAnAddressFirst'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin123 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin123, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtFree'));
$_block_repeat=true;
echo $_block_plugin123->addJsDefL(array('name'=>'txtFree'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin123->addJsDefL(array('name'=>'txtFree'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
if ($_smarty_tpl->tpl_vars['back']->value) {?>&mod=<?php echo urlencode($_smarty_tpl->tpl_vars['back']->value);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'addressUrl', null, null);
echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,NULL,((('back=').($_smarty_tpl->tpl_vars['back_order_page']->value)).('?step=1')).($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'))));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addressUrl'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrl')),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
echo urlencode('&multi-shipping=1');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addressMultishippingUrl'=>($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrl')).($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'addressUrlAdd', null, null);
echo ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrl')).('&id_address=');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addressUrlAdd'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrlAdd')),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('opc'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['opc']->value ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your billing address','js'=>1),$_smarty_tpl ) );?>
</h3><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin124 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin124, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'titleInvoice'));
$_block_repeat=true;
echo $_block_plugin124->addJsDefL(array('name'=>'titleInvoice'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo addcslashes($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'\'');
$_block_repeat=false;
echo $_block_plugin124->addJsDefL(array('name'=>'titleInvoice'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your delivery address','js'=>1),$_smarty_tpl ) );?>
</h3><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin125 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin125, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'titleDelivery'));
$_block_repeat=true;
echo $_block_plugin125->addJsDefL(array('name'=>'titleDelivery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo addcslashes($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'\'');
$_block_repeat=false;
echo $_block_plugin125->addJsDefL(array('name'=>'titleDelivery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?><a class="button button-small btn btn-default" href="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrlAdd');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','js'=>1),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','js'=>1),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin126 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin126, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'liUpdate'));
$_block_repeat=true;
echo $_block_plugin126->addJsDefL(array('name'=>'liUpdate'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo addcslashes($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'\'');
$_block_repeat=false;
echo $_block_plugin126->addJsDefL(array('name'=>'liUpdate'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin127 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin127, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtExtraDemandSucc'));
$_block_repeat=true;
echo $_block_plugin127->addJsDefL(array('name'=>'txtExtraDemandSucc'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Updated Successfully','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin127->addJsDefL(array('name'=>'txtExtraDemandSucc'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin128 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin128, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtExtraDemandErr'));
$_block_repeat=true;
echo $_block_plugin128->addJsDefL(array('name'=>'txtExtraDemandErr'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while updating demands','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin128->addJsDefL(array('name'=>'txtExtraDemandErr'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
			</div>
		</section>
	</div>
</section><?php }
}
