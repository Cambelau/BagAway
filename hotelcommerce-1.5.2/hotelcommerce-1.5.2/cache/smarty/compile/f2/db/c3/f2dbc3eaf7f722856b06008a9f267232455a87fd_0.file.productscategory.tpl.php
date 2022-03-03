<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\productscategory\productscategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b18e03ab4_95285092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2dbc3eaf7f722856b06008a9f267232455a87fd' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\productscategory\\productscategory.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b18e03ab4_95285092 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['categoryProducts']->value) > 0 && $_smarty_tpl->tpl_vars['categoryProducts']->value !== false) {?>
<section class="page-product-box blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading">
		<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value) == 1) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl ) );?>

		<?php }?>
	</h3>
	<div id="productscategory_list" class="clearfix">
		<ul id="bxslider1" class="bxslider clearfix">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryProducts']->value, 'categoryProduct', false, NULL, 'categoryProduct', array (
));
$_smarty_tpl->tpl_vars['categoryProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->value) {
$_smarty_tpl->tpl_vars['categoryProduct']->do_else = false;
?>
			<li class="product-box item">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" class="lnk_img product-image" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
" /></a>
				<h5 itemprop="name" class="product-name">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['categoryProduct']->value['name'],14,'...' )), ENT_QUOTES, 'UTF-8', true);?>
</a>
				</h5>
				<?php if ($_smarty_tpl->tpl_vars['ProdDisplayPrice']->value && $_smarty_tpl->tpl_vars['categoryProduct']->value['show_price'] == 1 && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
					<p class="price_display">
					<?php if ((isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices'] && (number_format($_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price'],2) !== number_format($_smarty_tpl->tpl_vars['categoryProduct']->value['price_without_reduction'],2))) {?>

						<span class="price special-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl ) );?>
</span>
						<?php if ($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction'] && $_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction_type'] == 'percentage') {?>
							<span class="price-percent-reduction small">-<?php echo $_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction']*100;?>
%</span>
						<?php }?>
						<span class="old-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price_without_reduction']),$_smarty_tpl ) );?>
</span>

					<?php } else { ?>
						<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl ) );?>
</span>
					<?php }?>
					</p>
				<?php } else { ?>
				<br />
				<?php }?>
				<div class="clearfix" style="margin-top:5px">
					<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && ($_smarty_tpl->tpl_vars['categoryProduct']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['categoryProduct']->value['quantity'] > 0)) {?>
						<div class="no-print">
							<a class="exclusive button ajax_add_to_cart_button" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product']);
$_prefixVariable20=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"qty=1&amp;id_product=".$_prefixVariable20."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product']);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'productscategory'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'productscategory'),$_smarty_tpl ) );?>
</span>
							</a>
						</div>
					<?php }?>
				</div>
			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</section>
<?php }
}
}
