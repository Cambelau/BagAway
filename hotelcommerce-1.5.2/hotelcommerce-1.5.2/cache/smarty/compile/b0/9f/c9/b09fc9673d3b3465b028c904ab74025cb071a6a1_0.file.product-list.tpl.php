<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1a95aa29_57775328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b09fc9673d3b3465b028c904ab74025cb071a6a1' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\product-list.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1a95aa29_57775328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),));
if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'index' && $_smarty_tpl->tpl_vars['page_name']->value != 'product') {?>
		<?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 3);?>
		<?php $_smarty_tpl->_assignInScope('nbItemsPerLineTablet', 2);?>
		<?php $_smarty_tpl->_assignInScope('nbItemsPerLineMobile', 3);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 4);?>
		<?php $_smarty_tpl->_assignInScope('nbItemsPerLineTablet', 3);?>
		<?php $_smarty_tpl->_assignInScope('nbItemsPerLineMobile', 2);?>
	<?php }?>
		<?php $_smarty_tpl->_assignInScope('nbLi', count($_smarty_tpl->tpl_vars['products']->value));?>
	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

	<!-- Products list -->
	<ul<?php if ((isset($_smarty_tpl->tpl_vars['id']->value)) && $_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php } else { ?> id="product_list"<?php }?> class="product_list grid row<?php if ((isset($_smarty_tpl->tpl_vars['class']->value)) && $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'total' => true,
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
		<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'] : null),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'] : null),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'] : null),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value,'assign'=>'totModuloMobile'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?>
		<?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloTablet', $_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value);
}?>
		<?php if ($_smarty_tpl->tpl_vars['totModuloMobile']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloMobile', $_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value);
}?>
		<li class="ajax_block_product<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index' || $_smarty_tpl->tpl_vars['page_name']->value == 'product') {?> col-xs-12 col-sm-4 col-md-3<?php } else { ?> col-xs-12 col-sm-6 col-md-4<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?> last-in-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?> first-in-line<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModulo']->value)) {?> last-line<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 0) {?> last-item-of-tablet-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 1) {?> first-item-of-tablet-line<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 0) {?> last-item-of-mobile-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 1) {?> first-item-of-mobile-line<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModuloMobile']->value)) {?> last-mobile-line<?php }?>">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
							<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['homeSize']->value))) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
						</a>
						<?php if ((isset($_smarty_tpl->tpl_vars['quick_view']->value)) && $_smarty_tpl->tpl_vars['quick_view']->value) {?>
							<div class="quick-view-wrapper-mobile">
							<a class="quick-view-mobile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
								<i class="icon-eye-open"></i>
							</a>
						</div>
						<a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view'),$_smarty_tpl ) );?>
</span>
						</a>
						<?php }?>
						<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && (((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price']) || ((isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
							<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
								<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
									<span itemprop="price" class="price product-price">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

										<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl ) );
}?>
									</span>
									<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
									<?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction'] > 0 && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices'] && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'] > 0) {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

										<span class="old-price product-price">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl ) );?>

										</span>
										<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type'] == 'percentage') {?>
											<span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
										<?php }?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value && (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['product']->value['available_for_order'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
										<span class="unvisible">
											<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0)) {?>
													<link itemprop="availability" href="https://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0) {
if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['available_later'])) && $_smarty_tpl->tpl_vars['product']->value['available_later']) {
echo $_smarty_tpl->tpl_vars['product']->value['available_later'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock'),$_smarty_tpl ) );
}
}
} else {
if ((isset($_smarty_tpl->tpl_vars['product']->value['available_now'])) && $_smarty_tpl->tpl_vars['product']->value['available_now']) {
echo $_smarty_tpl->tpl_vars['product']->value['available_now'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock'),$_smarty_tpl ) );
}
}?>
											<?php } elseif (((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])) && $_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'] > 0)) {?>
													<link itemprop="availability" href="https://schema.org/LimitedAvailability" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product available with different options'),$_smarty_tpl ) );?>


											<?php } else { ?>
													<link itemprop="availability" href="https://schema.org/OutOfStock" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock'),$_smarty_tpl ) );?>

											<?php }?>
										</span>
									<?php }?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

								<?php }?>
							</div>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['new'])) && $_smarty_tpl->tpl_vars['product']->value['new'] == 1) {?>
							<a class="new-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
								<span class="new-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New'),$_smarty_tpl ) );?>
</span>
							</a>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])) && $_smarty_tpl->tpl_vars['product']->value['on_sale'] && (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price'] && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
								<span class="sale-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale!'),$_smarty_tpl ) );?>
</span>
							</a>
						<?php }?>
					</div>
					<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['is_virtual'])) && !$_smarty_tpl->tpl_vars['product']->value['is_virtual']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
}?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl ) );?>

				</div>
				<div class="right-block">
					<h5 itemprop="name">
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])) && $_smarty_tpl->tpl_vars['product']->value['pack_quantity']) {
echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');
}?>
						<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
							<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],45,'...' )), ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</h5>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'displayProductListReviews', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayProductListReviews')) {?>
						<div class="hook-reviews">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

						</div>
					<?php }?>
					<p class="product-desc" itemprop="description">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...' ));?>

					</p>
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && (((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price']) || ((isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
					<div class="content_price">
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'before_price'),$_smarty_tpl ) );?>

							<span class="price product-price">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl ) );
}?>
							</span>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction'] > 0 && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices'] && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'] > 0) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

								<span class="old-price product-price">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl ) );?>

								</span>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'type'=>"old_price"),$_smarty_tpl ) );?>

								<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type'] == 'percentage') {?>
									<span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
								<?php }?>
							<?php }?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'after_price'),$_smarty_tpl ) );?>

						<?php }?>
					</div>
					<?php }?>
					<div class="button-container">
						<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] == 0 || ((isset($_smarty_tpl->tpl_vars['add_prod_display']->value)) && ($_smarty_tpl->tpl_vars['add_prod_display']->value == 1))) && $_smarty_tpl->tpl_vars['product']->value['available_for_order'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && $_smarty_tpl->tpl_vars['product']->value['customizable'] != 2 && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<?php if ((!(isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])) || !$_smarty_tpl->tpl_vars['product']->value['customization_required']) && ($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0)) {?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?>add=1&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
if ((isset($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'])) && $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {?>&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
}
if ((isset($_smarty_tpl->tpl_vars['static_token']->value))) {?>&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
" data-id-product-attribute="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" data-minimal_quantity="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])) && $_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'] >= 1) {
echo intval($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']);
} else {
echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);
}?>">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
</span>
								</a>
							<?php } else { ?>
								<span class="button ajax_add_to_cart_button btn btn-default disabled">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
</span>
								</span>
							<?php }?>
						<?php }?>
						<a class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View'),$_smarty_tpl ) );?>
">
							<span><?php if (((isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])) && $_smarty_tpl->tpl_vars['product']->value['customization_required'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More'),$_smarty_tpl ) );
}?></span>
						</a>
					</div>
					<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['color_list']))) {?>
						<div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['product']->value['color_list'];?>
</div>
					<?php }?>
					<div class="product-flags">
						<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && (((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price']) || ((isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
							<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['online_only'])) && $_smarty_tpl->tpl_vars['product']->value['online_only']) {?>
								<span class="online_only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Online only'),$_smarty_tpl ) );?>
</span>
							<?php }?>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])) && $_smarty_tpl->tpl_vars['product']->value['on_sale'] && (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price'] && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['reduction'] && (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price'] && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
								<span class="discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduced price!'),$_smarty_tpl ) );?>
</span>
							<?php }?>
					</div>
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && $_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value && (((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price']) || ((isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['product']->value['available_for_order'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
							<span class="availability">
								<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0)) {?>
									<span class="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0 && (isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) && !$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?> label-danger<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0) {?> label-warning<?php } else { ?> label-success<?php }?>">
										<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0) {
if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['available_later'])) && $_smarty_tpl->tpl_vars['product']->value['available_later']) {
echo $_smarty_tpl->tpl_vars['product']->value['available_later'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock'),$_smarty_tpl ) );
}
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock'),$_smarty_tpl ) );
}
} else {
if ((isset($_smarty_tpl->tpl_vars['product']->value['available_now'])) && $_smarty_tpl->tpl_vars['product']->value['available_now']) {
echo $_smarty_tpl->tpl_vars['product']->value['available_now'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock'),$_smarty_tpl ) );
}
}?>
									</span>
								<?php } elseif (((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])) && $_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'] > 0)) {?>
									<span class="label-warning">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product available with different options'),$_smarty_tpl ) );?>

									</span>
								<?php } else { ?>
									<span class="label-danger">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock'),$_smarty_tpl ) );?>

									</span>
								<?php }?>
							</span>
						<?php }?>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'index') {?>
					<div class="functional-buttons clearfix">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

						<?php if ((isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)) && $_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
							<div class="compare">
								<a class="add_to_compare" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Compare'),$_smarty_tpl ) );?>
</a>
							</div>
						<?php }?>
					</div>
				<?php }?>
			</div><!-- .product-container> -->
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php $_block_plugin135 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin135, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'min_item'));
$_block_repeat=true;
echo $_block_plugin135->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin135->addJsDefL(array('name'=>'min_item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin136 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin136, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'max_item'));
$_block_repeat=true;
echo $_block_plugin136->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin136->addJsDefL(array('name'=>'max_item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl ) );?>

<?php }
}
}
