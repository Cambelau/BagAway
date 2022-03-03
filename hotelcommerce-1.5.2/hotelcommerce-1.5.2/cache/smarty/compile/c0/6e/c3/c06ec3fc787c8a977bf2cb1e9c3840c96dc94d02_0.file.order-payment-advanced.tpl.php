<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\order-payment-advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1a2b6d49_82757273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c06ec3fc787c8a977bf2cb1e9c3840c96dc94d02' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\order-payment-advanced.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1a2b6d49_82757273 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['addresses_style']->value))) {?>
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
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);
}
$_smarty_tpl->_assignInScope('have_non_virtual_products', false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual'] == 0) {?>
        <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', true);?>
        <?php break 1;?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_block_plugin129 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin129, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProduct'));
$_block_repeat=true;
echo $_block_plugin129->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin129->addJsDefL(array('name'=>'txtProduct'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin130 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin130, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProducts'));
$_block_repeat=true;
echo $_block_plugin130->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin130->addJsDefL(array('name'=>'txtProducts'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['productNumber']->value == 0) {?>
<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This store has not accepted your new order.'),$_smarty_tpl ) );?>
</p>
<?php } else { ?>
    <p id="emptyCartWarning" class="alert alert-warning unvisible"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</p>
    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Options'),$_smarty_tpl ) );?>
</h2>
    <!-- HOOK_ADVANCED_PAYMENT -->
    <div id="HOOK_ADVANCED_PAYMENT">
        <div class="row">
        <!-- Should get a collection of "PaymentOption" object -->
        <?php $_smarty_tpl->_assignInScope('adv_payment_empty', true);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOOK_ADVANCED_PAYMENT']->value, 'pay_option', false, 'key');
$_smarty_tpl->tpl_vars['pay_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pay_option']->value) {
$_smarty_tpl->tpl_vars['pay_option']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['pay_option']->value) {?>
                <?php $_smarty_tpl->_assignInScope('adv_payment_empty', false);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['HOOK_ADVANCED_PAYMENT']->value && !$_smarty_tpl->tpl_vars['adv_payment_empty']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOOK_ADVANCED_PAYMENT']->value, 'advanced_payment_opt_list');
$_smarty_tpl->tpl_vars['advanced_payment_opt_list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['advanced_payment_opt_list']->value) {
$_smarty_tpl->tpl_vars['advanced_payment_opt_list']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_payment_opt_list']->value, 'paymentOption');
$_smarty_tpl->tpl_vars['paymentOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paymentOption']->value) {
$_smarty_tpl->tpl_vars['paymentOption']->do_else = false;
?>
                    <div class="col-xs-12 col-md-6">
                        <p class="payment_module pointer-box">
                            <a class="payment_module_adv">
                                <img class="payment_option_logo" src="<?php echo $_smarty_tpl->tpl_vars['paymentOption']->value->getLogo();?>
"/>
                                <span class="payment_option_cta">
                                    <?php echo $_smarty_tpl->tpl_vars['paymentOption']->value->getCallToActionText();?>

                                </span>
                                <span class="pull-right payment_option_selected">
                                    <i class="icon-check"></i>
                                </span>
                            </a>

                        </p>
                        <div class="payment_option_form">
                            <?php if ($_smarty_tpl->tpl_vars['paymentOption']->value->getForm()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['paymentOption']->value->getForm();?>

                            <?php } else { ?>
                                <form method="<?php if ($_smarty_tpl->tpl_vars['paymentOption']->value->getMethod()) {
echo $_smarty_tpl->tpl_vars['paymentOption']->value->getMethod();
} else { ?>POST<?php }?>" action="<?php echo $_smarty_tpl->tpl_vars['paymentOption']->value->getAction();?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['paymentOption']->value->getInputs()) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentOption']->value->getInputs(), 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </form>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php } else { ?>
        <div class="col-xs-12 col-md-12">
            <p class="alert alert-warning "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to find any available payment option for your cart. Please contact us if the problem persists'),$_smarty_tpl ) );?>
</p>
        </div>
        <?php }?>
    </div>
    <!-- end HOOK_ADVANCED_PAYMENT -->

    <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
        <!-- Carrier -->
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-carrier-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <!-- END Carrier -->
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_logged']->value && !$_smarty_tpl->tpl_vars['is_guest']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-address-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['opc']->value) {?>
        <!-- Create account / Guest account / Login block -->
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-opc-new-account-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <!-- END Create account / Guest account / Login block -->
    <?php }?>

    <!-- TNC -->
    <?php if ($_smarty_tpl->tpl_vars['conditions']->value && $_smarty_tpl->tpl_vars['cms_id']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['override_tos_display']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['override_tos_display']->value;?>

        <?php } else { ?>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Terms and Conditions'),$_smarty_tpl ) );?>
</h2>
                    <div class="box">
                        <p class="checkbox">
                            <input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
                            <label for="cgv"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl ) );?>
</label>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Read the Terms of Service)'),$_smarty_tpl ) );?>
</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php }?>
    <?php }?>
    <!-- end TNC -->

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
