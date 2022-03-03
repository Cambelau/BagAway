<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\loyalty\views\templates\hook\shopping-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b18b2cf70_02718414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47661785a7526bc3d22c4d604b280d357345ccde' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\loyalty\\views\\templates\\hook\\shopping-cart.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b18b2cf70_02718414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE Loyalty -->
<p id="loyalty">
	<i class="icon-flag"></i>
	<?php if ($_smarty_tpl->tpl_vars['points']->value > 0) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By checking out this shopping cart you can collect up to','mod'=>'loyalty'),$_smarty_tpl ) );?>
 <b>
		<?php if ($_smarty_tpl->tpl_vars['points']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d loyalty points','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d loyalty point','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl ) );
}?></b>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['guest_checkout']->value)) && $_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup><?php }?>.<br />
		<?php if ((isset($_smarty_tpl->tpl_vars['guest_checkout']->value)) && $_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not available for Instant checkout order','mod'=>'loyalty'),$_smarty_tpl ) );
}?>
	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add some products to your shopping cart to collect some loyalty points.','mod'=>'loyalty'),$_smarty_tpl ) );?>

	<?php }?>
</p>
<!-- END : MODULE Loyalty --><?php }
}
