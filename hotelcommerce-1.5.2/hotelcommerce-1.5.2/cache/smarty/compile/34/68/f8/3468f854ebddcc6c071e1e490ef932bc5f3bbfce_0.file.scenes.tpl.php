<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\scenes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1ad6de98_72233787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3468f854ebddcc6c071e1e490ef932bc5f3bbfce' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\scenes.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1ad6de98_72233787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),));
if ($_smarty_tpl->tpl_vars['scenes']->value) {?>
<div id="scenes">
	<div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scenes']->value, 'scene', true, 'scene_key');
$_smarty_tpl->tpl_vars['scene']->iteration = 0;
$_smarty_tpl->tpl_vars['scene']->index = -1;
$_smarty_tpl->tpl_vars['scene']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scene_key']->value => $_smarty_tpl->tpl_vars['scene']->value) {
$_smarty_tpl->tpl_vars['scene']->do_else = false;
$_smarty_tpl->tpl_vars['scene']->iteration++;
$_smarty_tpl->tpl_vars['scene']->index++;
$_smarty_tpl->tpl_vars['scene']->first = !$_smarty_tpl->tpl_vars['scene']->index;
$_smarty_tpl->tpl_vars['scene']->last = $_smarty_tpl->tpl_vars['scene']->iteration === $_smarty_tpl->tpl_vars['scene']->total;
$__foreach_scene_202_saved = $_smarty_tpl->tpl_vars['scene'];
?>
		<div class="screen_scene" id="screen_scene_<?php echo $_smarty_tpl->tpl_vars['scene']->value->id;?>
" style="background:transparent url(<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
img/scenes/<?php echo $_smarty_tpl->tpl_vars['scene']->value->id;?>
-scene_default.jpg); height:<?php echo $_smarty_tpl->tpl_vars['largeSceneImageType']->value['height'];?>
px; width:<?php echo $_smarty_tpl->tpl_vars['largeSceneImageType']->value['width'];?>
px;<?php if (!$_smarty_tpl->tpl_vars['scene']->first) {?> display:none;<?php }?>">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scene']->value->products, 'product', false, 'product_key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_image']))) {?>
				<?php $_smarty_tpl->_assignInScope('imageIds', ((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['product']->value['id_image']));?>
			<?php }?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" class="popover-button" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_width'];?>
px; height:<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_height'];?>
px; margin-left:<?php echo $_smarty_tpl->tpl_vars['product']->value['x_axis'];?>
px ;margin-top:<?php echo $_smarty_tpl->tpl_vars['product']->value['y_axis'];?>
px;" data-id_product_scene="<?php echo intval($_smarty_tpl->tpl_vars['scene_key']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_key']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
					<span style="margin-top:<?php echo smarty_function_math(array('equation'=>'a/2 -10','a'=>$_smarty_tpl->tpl_vars['product']->value['zone_height']),$_smarty_tpl);?>
px; margin-left:<?php echo smarty_function_math(array('equation'=>'a/2 -10','a'=>$_smarty_tpl->tpl_vars['product']->value['zone_width']),$_smarty_tpl);?>
px;"></span>
				</a>
				<div id="scene_products_cluetip_<?php echo $_smarty_tpl->tpl_vars['scene_key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['product_key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" style="display:none;">
                	<div class="product-image-container">
						<?php if ((isset($_smarty_tpl->tpl_vars['imageIds']->value))) {?>
							<img class="img-responsive replace-2x" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['imageIds']->value,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="" />
						<?php }?>
                    </div>
					<p class="product-name"><span class="product_name"><?php echo $_smarty_tpl->tpl_vars['product']->value['details']->name;?>
</span></p>
					<div class="description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['details']->description_short),170,'...' ));?>
</div>
                    <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && $_smarty_tpl->tpl_vars['product']->value['details']->show_price) {?>
					<div class="prices">
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['details']->new)) && $_smarty_tpl->tpl_vars['product']->value['details']->new) {?><span class="new-box"><span class="new-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New'),$_smarty_tpl ) );?>
</span></span><?php }?>
						<p class="price product-price"><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['details']->getPrice(false,$_smarty_tpl->tpl_vars['product']->value['details']->getDefaultAttribute($_smarty_tpl->tpl_vars['product']->value['id_product']))),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['details']->getPrice(true,$_smarty_tpl->tpl_vars['product']->value['details']->getDefaultAttribute($_smarty_tpl->tpl_vars['product']->value['id_product']))),$_smarty_tpl ) );
}?></p>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['details']->on_sale) {?>
							<span class="sale-box"><span class="sale-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale'),$_smarty_tpl ) );?>
</span></span>
						<?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['reduction']) {?>
							<span class="discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduced price!'),$_smarty_tpl ) );?>
</span>
						<?php }?>
					</div>
					<?php }?>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<?php
$_smarty_tpl->tpl_vars['scene'] = $__foreach_scene_202_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php if ((isset($_smarty_tpl->tpl_vars['scenes']->value[1]))) {?>
	<div class="thumbs_banner" style="height:<?php echo $_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height'];?>
px;">
		<span class="space-keeper">
			<a class="prev" href="#" style="height:<?php echo smarty_function_math(array('equation'=>'a+2','a'=>$_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height']),$_smarty_tpl);?>
px;">&nbsp;</a>
		</span>
		<div id="scenes_list">
			<ul style="width:<?php echo smarty_function_math(array('equation'=>'(a*b + (a-1)*10)','a'=>count($_smarty_tpl->tpl_vars['scenes']->value),'b'=>$_smarty_tpl->tpl_vars['thumbSceneImageType']->value['width']),$_smarty_tpl);?>
px; height:<?php echo $_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height'];?>
px;">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scenes']->value, 'scene', true);
$_smarty_tpl->tpl_vars['scene']->iteration = 0;
$_smarty_tpl->tpl_vars['scene']->index = -1;
$_smarty_tpl->tpl_vars['scene']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scene']->value) {
$_smarty_tpl->tpl_vars['scene']->do_else = false;
$_smarty_tpl->tpl_vars['scene']->iteration++;
$_smarty_tpl->tpl_vars['scene']->index++;
$_smarty_tpl->tpl_vars['scene']->first = !$_smarty_tpl->tpl_vars['scene']->index;
$_smarty_tpl->tpl_vars['scene']->last = $_smarty_tpl->tpl_vars['scene']->iteration === $_smarty_tpl->tpl_vars['scene']->total;
$__foreach_scene_204_saved = $_smarty_tpl->tpl_vars['scene'];
?>
				<li id="scene_thumb_<?php echo $_smarty_tpl->tpl_vars['scene']->value->id;?>
" style="<?php if (!$_smarty_tpl->tpl_vars['scene']->last) {?> padding-right:10px;<?php }?>">
					<a style="width:<?php echo $_smarty_tpl->tpl_vars['thumbSceneImageType']->value['width'];?>
px; height:<?php echo $_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height'];?>
px" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scene']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>" data-id_scene="<?php echo intval($_smarty_tpl->tpl_vars['scene']->value->id);?>
" class="scene_thumb">
						<img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scene']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/scenes/thumbs/<?php echo $_smarty_tpl->tpl_vars['scene']->value->id;?>
-m_scene_default.jpg" width="<?php echo $_smarty_tpl->tpl_vars['thumbSceneSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['thumbSceneSize']->value['height'];?>
" />
					</a>
				</li>
		 	<?php
$_smarty_tpl->tpl_vars['scene'] = $__foreach_scene_204_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		 	</ul>
		</div>
		<span class="space-keeper">
			<a class="next" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>" style="height:<?php echo smarty_function_math(array('equation'=>'a+2','a'=>$_smarty_tpl->tpl_vars['thumbSceneImageType']->value['height']),$_smarty_tpl);?>
px;">&nbsp;</a>
		</span>
	</div>
	<?php }?>
</div>
<?php $_block_plugin152 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin152, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'i18n_scene_close'));
$_block_repeat=true;
echo $_block_plugin152->addJsDefL(array('name'=>'i18n_scene_close'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin152->addJsDefL(array('name'=>'i18n_scene_close'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('li_width'=>(intval($_smarty_tpl->tpl_vars['thumbSceneImageType']->value['width'])+10)),$_smarty_tpl ) );?>

<?php }
}
}
