<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:25
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\order-address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b19623cd9_08629953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9823d90dc3f31f95a6d1ad7816d49a07cff36ec8' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\order-address.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b19623cd9_08629953 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
	<?php $_smarty_tpl->_assignInScope('current_step', 'address');?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('back_order_page', "order.php");?>
	<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses'),$_smarty_tpl ) );?>
</h1>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['back_order_page']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('back_order_page', "order-opc.php");?>
	<h1 class="page-heading step-num"><span>1</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses'),$_smarty_tpl ) );?>
</h1>
	<div id="opc_account" class="opc-main-block">
		<div id="opc_account-overlay" class="opc-overlay" style="display: none;"></div>
<?php }?>
<div class="addresses clearfix">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="address_delivery select form-group selector1">
				<label for="id_address_delivery"><?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a billing address:'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a delivery address:'),$_smarty_tpl ) );
}?></label>
				<select name="id_address_delivery" id="id_address_delivery" class="address_select form-control">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address', false, 'k');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
						<option value="<?php echo intval($_smarty_tpl->tpl_vars['address']->value['id_address']);?>
"<?php if ($_smarty_tpl->tpl_vars['address']->value['id_address'] == $_smarty_tpl->tpl_vars['cart']->value->id_address_delivery) {?> selected="selected"<?php }?>>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select><span class="waitimage"></span>
			</div>
			<p class="checkbox addressesAreEquals"<?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()) {?> style="display:none;"<?php }?>>
				<input type="checkbox" name="same" id="addressesAreEquals" value="1"<?php if ($_smarty_tpl->tpl_vars['cart']->value->id_address_invoice == $_smarty_tpl->tpl_vars['cart']->value->id_address_delivery || count($_smarty_tpl->tpl_vars['addresses']->value) == 1) {?> checked="checked"<?php }?> />
				<label for="addressesAreEquals"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use the delivery address as the billing address.'),$_smarty_tpl ) );?>
</label>
			</p>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div id="address_invoice_form" class="select form-group selector1"<?php if ($_smarty_tpl->tpl_vars['cart']->value->id_address_invoice == $_smarty_tpl->tpl_vars['cart']->value->id_address_delivery) {?> style="display: none;"<?php }?>>
				<?php if (count($_smarty_tpl->tpl_vars['addresses']->value) > 1) {?>
					<label for="id_address_invoice" class="strong"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a billing address:'),$_smarty_tpl ) );?>
</label>
					<select name="id_address_invoice" id="id_address_invoice" class="address_select form-control">
					<?php
$__section_address_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['addresses']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_address_8_start = $__section_address_8_loop - 1;
$__section_address_8_total = min(($__section_address_8_start+ 1), $__section_address_8_loop);
$_smarty_tpl->tpl_vars['__smarty_section_address'] = new Smarty_Variable(array());
if ($__section_address_8_total !== 0) {
for ($__section_address_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_address']->value['index'] = $__section_address_8_start; $__section_address_8_iteration <= $__section_address_8_total; $__section_address_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_address']->value['index'] -= 1){
?>
						<option value="<?php echo intval($_smarty_tpl->tpl_vars['addresses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_address']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_address']->value['index'] : null)]['id_address']);?>
"<?php if ($_smarty_tpl->tpl_vars['addresses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_address']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_address']->value['index'] : null)]['id_address'] == $_smarty_tpl->tpl_vars['cart']->value->id_address_invoice && $_smarty_tpl->tpl_vars['cart']->value->id_address_delivery != $_smarty_tpl->tpl_vars['cart']->value->id_address_invoice) {?> selected="selected"<?php }?>>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addresses']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_address']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_address']->value['index'] : null)]['alias'], ENT_QUOTES, 'UTF-8', true);?>

						</option>
					<?php
}
}
?>
					</select><span class="waitimage"></span>
				<?php } else { ?>
					<a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['back']->value) {
echo "&mod=";
echo (string)$_smarty_tpl->tpl_vars['back']->value;
}
$_prefixVariable32=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,NULL,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)."?step=1&select_address=1".$_prefixVariable32), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>
" class="button button-small btn btn-default">
						<span>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new address'),$_smarty_tpl ) );?>

							<i class="icon-chevron-right right"></i>
						</span>
					</a>
				<?php }?>
			</div>
		</div>
	</div> <!-- end row -->
	<div class="row">
		<div class="col-xs-12 col-sm-6"<?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()) {?> style="display:none;"<?php }?>>
			<ul class="address item box" id="address_delivery">
			</ul>
		</div>
		<div class="col-xs-12 col-sm-6">
			<ul class="address alternate_item<?php if ($_smarty_tpl->tpl_vars['cart']->value->isVirtualCart()) {?> full_width<?php }?> box" id="address_invoice">
			</ul>
		</div>
	</div> <!-- end row -->
	<p class="address_add submit">
		<a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['back']->value) {
echo "&mod=";
echo (string)$_smarty_tpl->tpl_vars['back']->value;
}
$_prefixVariable33=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,NULL,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)."?step=1".$_prefixVariable33), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>
" class="button button-small btn btn-default">
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new address'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span>
		</a>
	</p>
	<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
		<div id="ordermsg" class="form-group">
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl ) );?>
</label>
			<textarea class="form-control" cols="60" rows="6" name="message"><?php if ((isset($_smarty_tpl->tpl_vars['oldMessage']->value))) {
echo $_smarty_tpl->tpl_vars['oldMessage']->value;
}?></textarea>
		</div>
	<?php }?>
</div> <!-- end addresses -->
<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
			<p class="cart_navigation clearfix">
				<input type="hidden" class="hidden" name="step" value="2" />
				<input type="hidden" name="back" value="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
" />
				<a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['back']->value) {
echo "back=";
echo (string)$_smarty_tpl->tpl_vars['back']->value;
}
$_prefixVariable34=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['back_order_page']->value,true,NULL,$_prefixVariable34), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>
" class="button-exclusive btn btn-default">
					<i class="icon-chevron-left"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue Shopping'),$_smarty_tpl ) );?>

				</a>
				<button type="submit" name="processAddress" class="button btn btn-default button-medium">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span>
				</button>
			</p>
		</form>
<?php } else { ?>
	</div> <!--  end opc_account -->
<?php }
if (!$_smarty_tpl->tpl_vars['opc']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('orderProcess'=>'order'),$_smarty_tpl ) );
$_block_plugin74 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin74, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProduct'));
$_block_repeat=true;
echo $_block_plugin74->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'product','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin74->addJsDefL(array('name'=>'txtProduct'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin75 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin75, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProducts'));
$_block_repeat=true;
echo $_block_plugin75->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'products','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin75->addJsDefL(array('name'=>'txtProducts'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin76 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin76, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'CloseTxt'));
$_block_repeat=true;
echo $_block_plugin76->addJsDefL(array('name'=>'CloseTxt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin76->addJsDefL(array('name'=>'CloseTxt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
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
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('formatedAddressFieldsValuesList'=>$_smarty_tpl->tpl_vars['formatedAddressFieldsValuesList']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('opc'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['opc']->value ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your billing address','js'=>1),$_smarty_tpl ) );?>
</h3><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin77 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin77, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'titleInvoice'));
$_block_repeat=true;
echo $_block_plugin77->addJsDefL(array('name'=>'titleInvoice'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo addcslashes($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'\'');
$_block_repeat=false;
echo $_block_plugin77->addJsDefL(array('name'=>'titleInvoice'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your delivery address','js'=>1),$_smarty_tpl ) );?>
</h3><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin78 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin78, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'titleDelivery'));
$_block_repeat=true;
echo $_block_plugin78->addJsDefL(array('name'=>'titleDelivery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo addcslashes($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'\'');
$_block_repeat=false;
echo $_block_plugin78->addJsDefL(array('name'=>'titleDelivery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?><a class="button button-small btn btn-default" href="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrlAdd');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','js'=>1),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','js'=>1),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin79 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin79, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'liUpdate'));
$_block_repeat=true;
echo $_block_plugin79->addJsDefL(array('name'=>'liUpdate'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo addcslashes($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'\'');
$_block_repeat=false;
echo $_block_plugin79->addJsDefL(array('name'=>'liUpdate'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
