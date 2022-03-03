<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:21
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\category-count.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b159b0213_07423930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '689d5ce422657b76e25c647448f10493123a0d5f' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\category-count.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b159b0213_07423930 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="heading-counter"><?php if (((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value->id == 1) || ((isset($_smarty_tpl->tpl_vars['nb_products']->value)) && $_smarty_tpl->tpl_vars['nb_products']->value == 0)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products in this category.'),$_smarty_tpl ) );
} else {
if ((isset($_smarty_tpl->tpl_vars['nb_products']->value)) && $_smarty_tpl->tpl_vars['nb_products']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.'),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['nb_products']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl ) );
}
}?></span>
<?php }
}
