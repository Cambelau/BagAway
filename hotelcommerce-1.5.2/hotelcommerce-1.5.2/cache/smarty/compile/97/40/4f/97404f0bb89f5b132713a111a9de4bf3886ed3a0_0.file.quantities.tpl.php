<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\admin\themes\default\template\controllers\products\quantities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1a72a799_95109605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97404f0bb89f5b132713a111a9de4bf3886ed3a0' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\admin\\themes\\default\\template\\controllers\\products\\quantities.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/products/multishop/check_fields.tpl' => 1,
    'file:controllers/products/multishop/checkbox.tpl' => 4,
    'file:controllers/products/input_text_lang.tpl' => 2,
  ),
),false)) {
function content_62209b1a72a799_95109605 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
	<div id="product-quantities" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Quantities" />
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available quantities for sale'),$_smarty_tpl ) );?>
</h3>
		<?php if (!$_smarty_tpl->tpl_vars['ps_stock_management']->value) {?>
			<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The stock management is disabled'),$_smarty_tpl ) );?>
</div>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab'=>"Quantities"), 0, false);
?>
			<div class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This interface allows you to manage available quantities for sale for products. It also allows you to manage product combinations in the current shop.'),$_smarty_tpl ) );?>
<br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can choose whether or not to use the advanced stock management system for this product.'),$_smarty_tpl ) );?>
<br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can manually specify the quantities for the product/each product combination, or you can choose to automatically determine these quantities based on your stock (if advanced stock management is activated).'),$_smarty_tpl ) );?>
<br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In this case, quantities correspond to the real-stock quantities in the warehouses connected with the current shop, or current group of shops.'),$_smarty_tpl ) );?>
<br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For packs: If it has products that use advanced stock management, you have to specify a common warehouse for these products in the pack.'),$_smarty_tpl ) );?>
<br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Also, please note that when a product has combinations, its default combination will be used in stock movements.'),$_smarty_tpl ) );?>

			</div>

			<?php if ($_smarty_tpl->tpl_vars['show_quantities']->value == true) {?>
				<div class="form-group" <?php if ($_smarty_tpl->tpl_vars['product']->value->is_virtual) {?>style="display:none;"<?php }?> class="row stockForVirtualProduct">
					<div class="col-lg-9 col-lg-offset-3">
						<p class="checkbox">
							<label for="advanced_stock_management">
								<input type="checkbox" id="advanced_stock_management" name="advanced_stock_management" class="advanced_stock_management"
									<?php if ($_smarty_tpl->tpl_vars['product']->value->advanced_stock_management == 1 && $_smarty_tpl->tpl_vars['stock_management_active']->value == 1) {?>
										value="1" checked="checked"
									<?php } else { ?>
										value="0"
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['stock_management_active']->value == 0) {?>
										disabled="disabled"
									<?php }?>
								/>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I want to use the advanced stock management system for this product.'),$_smarty_tpl ) );?>

							</label>
						</p>
							<?php if ($_smarty_tpl->tpl_vars['stock_management_active']->value == 0 && !$_smarty_tpl->tpl_vars['product']->value->cache_is_pack) {?>
								<p class="help-block"><i class="icon-warning-sign"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This requires you to enable advanced stock management.'),$_smarty_tpl ) );?>
</p>
							<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->cache_is_pack) {?>
								<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.'),$_smarty_tpl ) );?>
</p>
							<?php }?>
					</div>
				</div>

				<div <?php if ($_smarty_tpl->tpl_vars['product']->value->is_virtual) {?>style="display:none;"<?php }?> class="form-group stockForVirtualProduct">
					<label class="control-label col-lg-3" for="depends_on_stock_1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available quantities'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-9">
						<p class="radio">
							<label for="depends_on_stock_1">
								<input type="radio" id="depends_on_stock_1" name="depends_on_stock" class="depends_on_stock"  value="1"
									<?php if ($_smarty_tpl->tpl_vars['product']->value->depends_on_stock == 1 && $_smarty_tpl->tpl_vars['stock_management_active']->value == 1) {?>
										checked="checked"
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['stock_management_active']->value == 0 || $_smarty_tpl->tpl_vars['product']->value->advanced_stock_management == 0) {?>
										disabled="disabled"
									<?php }?>
								/>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The available quantities for the current product and its combinations are based on the stock in your warehouse (using the advanced stock management system). '),$_smarty_tpl ) );?>

								<?php if (($_smarty_tpl->tpl_vars['stock_management_active']->value == 0 || $_smarty_tpl->tpl_vars['product']->value->advanced_stock_management == 0) && !$_smarty_tpl->tpl_vars['product']->value->cache_is_pack) {?> &nbsp;-&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This requires you to enable advanced stock management globally or for this product.'),$_smarty_tpl ) );?>

								<?php }?>
							</label>
						</p>
						<?php if ($_smarty_tpl->tpl_vars['product']->value->cache_is_pack) {?>
							<p class="help-block">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot use advanced stock management for this pack if'),$_smarty_tpl ) );?>
<br />
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- advanced stock management is not enabled for these products'),$_smarty_tpl ) );?>
<br />
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- you have chosen to decrement products quantities.'),$_smarty_tpl ) );?>

							</p>
						<?php }?>
						<p class="radio">
							<label for="depends_on_stock_0" for="depends_on_stock_0">
								<input type="radio"  id="depends_on_stock_0" name="depends_on_stock" class="depends_on_stock" value="0"
									<?php if ($_smarty_tpl->tpl_vars['product']->value->depends_on_stock == 0 || $_smarty_tpl->tpl_vars['stock_management_active']->value == 0) {?>
										checked="checked"
									<?php }?>
								/>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I want to specify available quantities manually.'),$_smarty_tpl ) );?>

							</label>
						</p>
					</div>
				</div>
				<div class="form-group" <?php if (!$_smarty_tpl->tpl_vars['product']->value->cache_is_pack) {?>style="display:none"<?php }?>>
					<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pack quantities'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-9">
						<p class="radio">
							<label id="label_pack_stock_1" for="pack_stock_type_1">
								<input type="radio" class="pack_stock_type" value="0" name="pack_stock_type" id="pack_stock_type_1" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value->pack_stock_type)) && $_smarty_tpl->tpl_vars['product']->value->pack_stock_type == 0) {?> checked="checked" <?php }?>/>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrement pack only.'),$_smarty_tpl ) );?>

							</label>
						</p>
						<p class="radio">
							<label id="label_pack_stock_2" for="pack_stock_type_2">
								<input type="radio" class="pack_stock_type" value="1" name="pack_stock_type" id="pack_stock_type_2" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value->pack_stock_type)) && $_smarty_tpl->tpl_vars['product']->value->pack_stock_type == 1) {?> checked="checked" <?php }?>/>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrement products in pack only.'),$_smarty_tpl ) );?>

							</label>
						</p>
						<p class="radio">
							<label id="label_pack_stock_3" for="pack_stock_type_3">
								<input type="radio" class="pack_stock_type" value="2" name="pack_stock_type" id="pack_stock_type_3" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value->pack_stock_type)) && $_smarty_tpl->tpl_vars['product']->value->pack_stock_type == 2) {?> checked="checked" <?php }?>/>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrement both.'),$_smarty_tpl ) );?>

							</label>
						</p>
						<p class="radio">
							<label id="label_pack_stock_4" for="pack_stock_type_4">
								<input type="radio" class="pack_stock_type" value="3" name="pack_stock_type" id="pack_stock_type_4" <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value->pack_stock_type)) || $_smarty_tpl->tpl_vars['product']->value->pack_stock_type == 3) {?> checked="checked" <?php }?>/>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default'),$_smarty_tpl ) );?>
:
								<?php if ($_smarty_tpl->tpl_vars['pack_stock_type']->value == 0) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrement pack only.'),$_smarty_tpl ) );?>

								<?php } elseif ($_smarty_tpl->tpl_vars['pack_stock_type']->value == 1) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrement products in pack only.'),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrement both.'),$_smarty_tpl ) );?>

								<?php }?>
								<a class="confirm_leave" href="index.php?tab=AdminPPreferences&amp;token=<?php echo $_smarty_tpl->tpl_vars['token_preferences']->value;?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'as set in the Products Preferences page'),$_smarty_tpl ) );?>

								</a>
							</label>
						</p>
					</div>
				</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['pack_quantity']->value))) {?>
					<div class="alert alert-info">
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When a product has combinations, quantities will be based on the default combination.'),$_smarty_tpl ) );?>
</p>
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Given the quantities of the products in this pack, the maximum quantity should be:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['pack_quantity']->value;?>
</p>
					</div>
				<?php }?>
				<div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<table class="table">
							<thead>
								<tr>
									<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</span></th>
									<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Designation'),$_smarty_tpl ) );?>
</span></th>
								</tr>
							</thead>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
								<tr<?php if ((isset($_smarty_tpl->tpl_vars['attribute']->value['default_on'])) && $_smarty_tpl->tpl_vars['attribute']->value['default_on']) {?> class="highlighted"<?php }?>>
									<td class="available_quantity" id="qty_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'];?>
">
										<span><?php echo $_smarty_tpl->tpl_vars['available_quantity']->value[$_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute']];?>
</span>
										<input type="text" name="qty_<?php echo $_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute'];?>
" class="fixed-width-sm" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['available_quantity']->value[$_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute']]);?>
"/>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['product_designation']->value[$_smarty_tpl->tpl_vars['attribute']->value['id_product_attribute']];?>
</td>
								</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</table>
					</div>
				</div>
				<div id="when_out_of_stock" class="form-group">
					<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When out of stock'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-9">
						<p class="radio">
							<label id="label_out_of_stock_1" for="out_of_stock_1">
								<input type="radio" id="out_of_stock_1" name="out_of_stock" checked="checked" value="0" class="out_of_stock" <?php if ($_smarty_tpl->tpl_vars['product']->value->out_of_stock == 0) {?> checked="checked" <?php }?>>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deny orders'),$_smarty_tpl ) );?>

							</label>
						</p>
						<p class="radio">
							<label id="label_out_of_stock_2" for="out_of_stock_2">
								<input type="radio" id="out_of_stock_2" name="out_of_stock" value="1" class="out_of_stock" <?php if ($_smarty_tpl->tpl_vars['product']->value->out_of_stock == 1) {?> checked="checked" <?php }?>>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow orders'),$_smarty_tpl ) );?>

							</label>
						</p>
						<p class="radio">
							<label id="label_out_of_stock_3" for="out_of_stock_3">
								<input type="radio" id="out_of_stock_3" name="out_of_stock" value="2" class="out_of_stock" <?php if ($_smarty_tpl->tpl_vars['product']->value->out_of_stock == 2) {?> checked="checked" <?php }?>>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default'),$_smarty_tpl ) );?>
:
								<?php if ($_smarty_tpl->tpl_vars['order_out_of_stock']->value == 1) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow orders'),$_smarty_tpl ) );?>

								<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deny orders'),$_smarty_tpl ) );?>

								<?php }?>
								<a class="confirm_leave" href="index.php?tab=AdminPPreferences&amp;token=<?php echo $_smarty_tpl->tpl_vars['token_preferences']->value;?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'as set in the Products Preferences page'),$_smarty_tpl ) );?>

								</a>
							</label>
						</p>
					</div>
				</div>

			<?php } else { ?>
				<div class="alert alert-warning">
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It is not possible to manage quantities when:'),$_smarty_tpl ) );?>
</p>
					<ul>
						<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are currently managing all of your shops.'),$_smarty_tpl ) );?>
</li>
						<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are currently managing a group of shops where quantities are not shared between every shop in this group.'),$_smarty_tpl ) );?>
</li>
						<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are currently managing a shop that is in a group where quantities are shared between every shop in this group.'),$_smarty_tpl ) );?>
</li>
					</ul>
				</div>
			<?php }?>
		<?php }?>
		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
		</div>
	</div>
	<div class="panel">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability settings'),$_smarty_tpl ) );?>
</h3>

		<?php if (!$_smarty_tpl->tpl_vars['has_attribute']->value) {?>
			<div class="form-group">
				<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"minimal_quantity",'type'=>"default"), 0, false);
?></span></div>
				<label class="control-label col-lg-2" for="minimal_quantity">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum quantity'),$_smarty_tpl ) );?>

				</label>
				<div class="col-lg-9">
					<input type="text" id="minimal_quantity" name="minimal_quantity" class="form-control fixed-width-sm" maxlength="6" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value->minimal_quantity)===null||$tmp==='' ? 1 : $tmp);?>
" />
					<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum quantity to buy this product (set to 1 to disable this feature)'),$_smarty_tpl ) );?>
</p>
				</div>
			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['ps_stock_management']->value) {?>
			<div class="form-group">
				<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"available_now",'type'=>"default",'multilang'=>"true"), 0, true);
?></span></div>
				<label class="control-label col-lg-2" for="available_now_<?php echo $_smarty_tpl->tpl_vars['default_language']->value;?>
">
					<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forbidden characters:'),$_smarty_tpl ) );?>
 &#60;&#62;;&#61;#&#123;&#125;">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Displayed text when in-stock'),$_smarty_tpl ) );?>

					</span>
				</label>
				<div class="col-lg-9">
					<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->available_now,'input_name'=>'available_now'), 0, false);
?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"available_later",'type'=>"default",'multilang'=>"true"), 0, true);
?></span></div>
				<label class="control-label col-lg-2" for="available_later_<?php echo $_smarty_tpl->tpl_vars['default_language']->value;?>
">
					<span class="label-tooltip" data-toggle="tooltip"
						title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If empty, the message "in stock" will be displayed.'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forbidden characters:'),$_smarty_tpl ) );?>
 &#60;&#62;;&#61;#&#123;&#125;">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Displayed text when backordering is allowed'),$_smarty_tpl ) );?>

					</span>
				</label>
				<div class="col-lg-9">
					<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->available_later,'input_name'=>'available_later'), 0, true);
?>
				</div>
			</div>

			<?php if (!$_smarty_tpl->tpl_vars['countAttributes']->value) {?>
			<div class="form-group">
				<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"available_date",'type'=>"default"), 0, true);
?></span></div>
				<label class="control-label col-lg-2" for="available_date">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:'),$_smarty_tpl ) );?>

				</label>
				<div class="col-lg-9">
					<div class="input-group fixed-width-md">
						<input id="available_date" name="available_date" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->available_date;?>
" class="datepicker" type="text" />
						<div class="input-group-addon">
							<i class="icon-calendar-empty"></i>
						</div>

					</div>
					<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The next date of availability for this product when it is out of stock.'),$_smarty_tpl ) );?>
</p>
				</div>
			</div>
			<?php }?>
		<?php }?>
		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
		</div>
		<?php echo '<script'; ?>
 type="text/javascript">
			var quantities_ajax_success = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data saved','js'=>1),$_smarty_tpl ) );?>
';
			var quantities_ajax_waiting = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saving data...','js'=>1),$_smarty_tpl ) );?>
';
		<?php echo '</script'; ?>
>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		if (tabs_manager.allow_hide_other_languages)
			hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['default_form_language']->value;?>
);
	<?php echo '</script'; ?>
>
<?php }
}
}
