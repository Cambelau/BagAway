<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\carriercompare\template\configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b182c5c09_87304958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c48c92726a5fdaaf884370f341f2e1f3f1684a1c' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\carriercompare\\template\\configuration.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b182c5c09_87304958 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['display_error']->value))) {?>
	<?php if ($_smarty_tpl->tpl_vars['display_error']->value) {?>
		<div class="error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An error occurred during form validation.','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</div>
	<?php } else { ?>
		<div class="conf"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration updated','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</div>
	<?php }
}?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true);?>
">
	<fieldset>
		<div class="warn">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module is only available during the standard five-step checkout process. The carrier list has already been defined for one-page checkout.','mod'=>'carriercompare'),$_smarty_tpl ) );?>

		</div>
		<legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Global Configuration','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</legend>
		
		<label for="refresh_method">Refresh carrier list method</label>
		<div class="margin-form">
			<select id="refresh_method" name="refresh_method">
				<option value="0" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value == 0) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Anytime','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</option>
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value == 1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The required information is set.','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</option>
			</select>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How would you like to refresh information for a customer?','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</p>
		</div>
		
		<div class="margin-form">
			<input name="setGlobalConfiguration" type="submit" class="button" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','mod'=>'carriercompare'),$_smarty_tpl ) );?>
">
		</div>
	</fieldset>
</form>
<?php }
}
