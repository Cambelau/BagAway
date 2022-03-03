<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\referralprogram\views\templates\hook\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b18efc1f2_85160953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3094fd584d81ebfef8c06a78b961a93b54ed79b' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\referralprogram\\views\\templates\\hook\\authentication.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b18efc1f2_85160953 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if ((isset($_POST['referralprogram']))) {
echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);
}?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }
}
