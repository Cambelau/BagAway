<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\products-comparison.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1ac13761_81015967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '265628e5e94406b1277e0d0c9143c35c1df3e1bd' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\products-comparison.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1ac13761_81015967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Comparison'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Comparison'),$_smarty_tpl ) );?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['hasProduct']->value) {?>
	<div class="products_block table-responsive">
		<table id="product_comparison" class="table table-bordered">
			<tr>
				<td class="td_empty compare_extra_information">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_COMPARE_EXTRA_INFORMATION']->value;?>

					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Features:'),$_smarty_tpl ) );?>
</span>
				</td>
				<?php $_smarty_tpl->_assignInScope('taxes_behavior', false);?>
				<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && (!$_smarty_tpl->tpl_vars['priceDisplay']->value || $_smarty_tpl->tpl_vars['priceDisplay']->value == 2)) {?>
					<?php $_smarty_tpl->_assignInScope('taxes_behavior', true);?>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'for_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<?php $_smarty_tpl->_assignInScope('replace_id', ($_smarty_tpl->tpl_vars['product']->value->id).('|'));?>
					<td class="ajax_block_product comparison_infos product-block product-<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
						<div class="remove">
							<a class="cmp_remove" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
								<i class="icon-trash"></i>
							</a>
						</div>
						<div class="product-image-block">
							<a
							class="product_image"
							href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->getLink(), ENT_QUOTES, 'UTF-8', true);?>
"
							title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
								<img
								class="img-responsive"
								src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
"
								alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
							</a>
							<?php if ((isset($_smarty_tpl->tpl_vars['product']->value->new)) && $_smarty_tpl->tpl_vars['product']->value->new == 1) {?>
								<a class="new-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->getLink(), ENT_QUOTES, 'UTF-8', true);?>
">
									<span class="new-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New'),$_smarty_tpl ) );?>
</span>
								</a>
							<?php }?>
							<?php if ((isset($_smarty_tpl->tpl_vars['product']->value->show_price)) && $_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
								<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
									<a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->getLink(), ENT_QUOTES, 'UTF-8', true);?>
">
										<span class="sale-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale!'),$_smarty_tpl ) );?>
</span>
									</a>
								<?php }?>
							<?php }?>
						</div> <!-- end product-image-block -->
						<h5>
							<a class="product-name"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->getLink(), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->name,32,'...' )), ENT_QUOTES, 'UTF-8', true);?>
">
								<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->name,45,'...' )), ENT_QUOTES, 'UTF-8', true);?>

							</a>
						</h5>
						<div class="prices-container">
							<?php if ((isset($_smarty_tpl->tpl_vars['product']->value->show_price)) && $_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
								<span class="price product-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value)),$_smarty_tpl ) );?>
</span>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['product']->value->id,'type'=>"price"),$_smarty_tpl ) );?>

								<?php if ((isset($_smarty_tpl->tpl_vars['product']->value->specificPrice)) && $_smarty_tpl->tpl_vars['product']->value->specificPrice) {?>
									<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] == 'percentage';
$_prefixVariable47 = ob_get_clean();
if ($_prefixVariable47) {?>
										<span class="old-price product-price">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>($_smarty_tpl->tpl_vars['product']->value->getPrice(true,null,6,null,false,false))),$_smarty_tpl ) );?>

										</span>
										<span class="price-percent-reduction">
											-<?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*floatval(100);?>
%
										</span>
									<?php } else { ?>
										<span class="old-price product-price">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value)+$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl ) );?>

										</span>
										<span class="price-percent-reduction">
											-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']),$_smarty_tpl ) );?>

										</span>
									<?php }?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

								<?php }?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

								<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
									<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) {?>
										<div class="product_discount">
											<span class="reduced-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduced price!'),$_smarty_tpl ) );?>
</span>
										</div>
									<?php }?>
									<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity) && $_smarty_tpl->tpl_vars['product']->value->unit_price_ratio > 0.000000) {?>
										<?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value),'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

										<span class="comparison_unit_price">
											&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'per %s','sprintf'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->unity, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );?>

										</span>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

									<?php } else { ?>
								<?php }?>
							<?php }?>
						</div> <!-- end prices-container -->
						<div class="product_desc">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->description_short),60,'...' ));?>

						</div>
						<div class="comparison_product_infos">
							<p class="comparison_availability_statut">
								<?php if (!(($_smarty_tpl->tpl_vars['product']->value->quantity <= 0 && !$_smarty_tpl->tpl_vars['product']->value->available_later) || ($_smarty_tpl->tpl_vars['product']->value->quantity != 0 && !$_smarty_tpl->tpl_vars['product']->value->available_now) || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>
									<span class="availability_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability:'),$_smarty_tpl ) );?>
</span>
									<span class="availability_value"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity <= 0) {?> class="warning-inline"<?php }?>>
										<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity <= 0) {?>
											<?php if ($_smarty_tpl->tpl_vars['product']->value->allow_oosp) {?>
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->available_later, ENT_QUOTES, 'UTF-8', true);?>

											<?php } else { ?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is no longer in stock.'),$_smarty_tpl ) );?>

											<?php }?>
										<?php } else { ?>
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->available_now, ENT_QUOTES, 'UTF-8', true);?>

										<?php }?>
									</span>
								<?php }?>
							</p>
							<?php if (!$_smarty_tpl->tpl_vars['product']->value->is_virtual) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
}?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl ) );?>

							<div class="clearfix">
								<div class="button-container">
									<?php if ((!$_smarty_tpl->tpl_vars['product']->value->hasAttributes() || ((isset($_smarty_tpl->tpl_vars['add_prod_display']->value)) && ($_smarty_tpl->tpl_vars['add_prod_display']->value == 1))) && $_smarty_tpl->tpl_vars['product']->value->minimal_quantity == 1 && $_smarty_tpl->tpl_vars['product']->value->customizable != 2 && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
										<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity > 0 || $_smarty_tpl->tpl_vars['product']->value->allow_oosp)) {?>
											<a class="button ajax_add_to_cart_button btn btn-default" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"qty=1&amp;id_product=".((string)$_smarty_tpl->tpl_vars['product']->value->id)."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
</span>
											</a>
										<?php } else { ?>
											<span class="ajax_add_to_cart_button button btn btn-default disabled">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
</span>
											</span>
										<?php }?>
									<?php }?>
									<a class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->getLink(), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View'),$_smarty_tpl ) );?>
">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View'),$_smarty_tpl ) );?>
</span>
									</a>
								</div>
							</div>
						</div> <!-- end comparison_product_infos -->
					</td>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['ordered_features']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordered_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
					<tr>
						<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

						<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 feature-name" >
							<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
						</td>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'for_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('product_id', $_smarty_tpl->tpl_vars['product']->value->id);?>
							<?php $_smarty_tpl->_assignInScope('feature_id', $_smarty_tpl->tpl_vars['feature']->value['id_feature']);?>
							<?php if ((isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value]))) {?>
								<?php $_smarty_tpl->_assignInScope('tab', $_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value]);?>
								<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos product-<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php if (((isset($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value])))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value], ENT_QUOTES, 'UTF-8', true);
}?></td>
							<?php } else { ?>
								<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos product-<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"></td>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<tr>
					<td></td>
					<td colspan="<?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
" class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No features to compare'),$_smarty_tpl ) );?>
</td>
				</tr>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_PRODUCT_COMPARISON']->value;?>

		</table>
	</div> <!-- end products_block -->
<?php } else { ?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products selected for comparison.'),$_smarty_tpl ) );?>
</p>
<?php }?>
<ul class="footer_link">
	<li>
		<a class="button lnk_view btn btn-default" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>">
			<span><i class="icon-chevron-left left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue Shopping'),$_smarty_tpl ) );?>
</span>
		</a>
	</li>
</ul>
<?php }
}
