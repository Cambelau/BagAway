<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:25
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\referralprogram\views\templates\hook\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b19021dd8_78290006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc3f1b7f1647bbc49d8ce348dd2ad98796c4141' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\referralprogram\\views\\templates\\hook\\my-account.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b19021dd8_78290006 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE ReferralProgram -->
<li class="referralprogram">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl ) );?>
" rel="nofollow"><i class="icon-cogs"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</span></a>
</li>
<!-- END : MODULE ReferralProgram --><?php }
}
