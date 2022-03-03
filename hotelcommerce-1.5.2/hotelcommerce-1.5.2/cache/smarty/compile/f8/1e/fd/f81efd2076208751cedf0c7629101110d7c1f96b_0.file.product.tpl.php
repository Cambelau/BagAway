<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\mailalerts\views\templates\hook\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b18bc9cd2_88967048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f81efd2076208751cedf0c7629101110d7c1f96b' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\mailalerts\\views\\templates\\hook\\product.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b18bc9cd2_88967048 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE MailAlerts -->
	<?php if ((isset($_smarty_tpl->tpl_vars['email']->value)) && $_smarty_tpl->tpl_vars['email']->value) {?>
		<p class="form-group">
			<input type="text" id="oos_customer_email" name="customer_email" size="20" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','mod'=>'mailalerts'),$_smarty_tpl ) );?>
" class="mailalerts_oos_email form-control" />
    	</p>
    <?php }?>
	<a href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Notify me when available','mod'=>'mailalerts'),$_smarty_tpl ) );?>
" id="mailalert_link" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Notify me when available','mod'=>'mailalerts'),$_smarty_tpl ) );?>
</a>
	<span id="oos_customer_email_result" style="display:none; display: block;"></span>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('oosHookJsCodeFunctions'=>array('oosHookJsCodeMailAlert')),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('mailalerts_url_check'=>$_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'check'))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('mailalerts_url_add'=>$_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'add'))),$_smarty_tpl ) );
$_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'mailalerts_placeholder'));
$_block_repeat=true;
echo $_block_plugin49->addJsDefL(array('name'=>'mailalerts_placeholder'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','mod'=>'mailalerts','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin49->addJsDefL(array('name'=>'mailalerts_placeholder'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'mailalerts_registered'));
$_block_repeat=true;
echo $_block_plugin50->addJsDefL(array('name'=>'mailalerts_registered'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request notification registered','mod'=>'mailalerts','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin50->addJsDefL(array('name'=>'mailalerts_registered'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'mailalerts_already'));
$_block_repeat=true;
echo $_block_plugin51->addJsDefL(array('name'=>'mailalerts_already'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You already have an alert for this product','mod'=>'mailalerts','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin51->addJsDefL(array('name'=>'mailalerts_already'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin52 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin52, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'mailalerts_invalid'));
$_block_repeat=true;
echo $_block_plugin52->addJsDefL(array('name'=>'mailalerts_invalid'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your e-mail address is invalid','mod'=>'mailalerts','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin52->addJsDefL(array('name'=>'mailalerts_invalid'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!-- END : MODULE MailAlerts -->
<?php }
}
