<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:27
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\admin\themes\default\template\controllers\supply_orders_receipt_history\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1b5e3107_26608204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea07901cd9a27e540c1f10c57140973ceac57241' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\admin\\themes\\default\\template\\controllers\\supply_orders_receipt_history\\helpers\\list\\list_header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1b5e3107_26608204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48727656062209b1b5e1df9_33922208', 'override_header');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_48727656062209b1b5e1df9_33922208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_48727656062209b1b5e1df9_33922208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
	$('input.quantity_received_today').live('click', function() {
		/* checks checkbox when the input is clicked */
		$(this).parents('tr:eq(0)').find('input[type=checkbox]').attr('checked', true);
	});
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'override_header'} */
}
