<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\product-sort.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1a9a0560_81112864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f871df23f7d59b7fcc98128fe16b4e609ab319' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\product-sort.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1a9a0560_81112864 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['orderby']->value)) && (isset($_smarty_tpl->tpl_vars['orderway']->value))) {?>
<ul class="display hidden-xs">
	<li class="display-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View:'),$_smarty_tpl ) );?>
</li>
    <li id="grid"><a rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid'),$_smarty_tpl ) );?>
"><i class="icon-th-large"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid'),$_smarty_tpl ) );?>
</a></li>
    <li id="list"><a rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List'),$_smarty_tpl ) );?>
"><i class="icon-th-list"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List'),$_smarty_tpl ) );?>
</a></li>
</ul>
<?php if (!(isset($_smarty_tpl->tpl_vars['request']->value))) {?>
	<!-- Sort products -->
	<?php if ((isset($_GET['id_category'])) && $_GET['id_category']) {?>
		<?php $_smarty_tpl->_assignInScope('request', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,true));?>	<?php } elseif ((isset($_GET['id_manufacturer'])) && $_GET['id_manufacturer']) {?>
		<?php $_smarty_tpl->_assignInScope('request', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,true));?>
	<?php } elseif ((isset($_GET['id_supplier'])) && $_GET['id_supplier']) {?>
		<?php $_smarty_tpl->_assignInScope('request', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,true));?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('request', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,true));?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['page_name']->value == 'best-sales' && (!(isset($_GET['orderby'])) || empty($_GET['orderby']))) {
$_smarty_tpl->_assignInScope('orderby', '');
$_smarty_tpl->_assignInScope('orderbydefault', '');
}?>
<form id="productsSortForm<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="productsSortForm">
	<div class="select selector1">
		<label for="selectProductSort<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by'),$_smarty_tpl ) );?>
</label>
		<select id="selectProductSort<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" class="selectProductSort form-control">
			<option value="<?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'best-sales') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['orderbydefault']->value, ENT_QUOTES, 'UTF-8', true);?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderwaydefault']->value, ENT_QUOTES, 'UTF-8', true);
}?>"<?php if (!in_array($_smarty_tpl->tpl_vars['orderby']->value,array('price','name','quantity','reference')) && $_smarty_tpl->tpl_vars['orderby']->value == $_smarty_tpl->tpl_vars['orderbydefault']->value) {?> selected="selected"<?php }?>>--</option>
			<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
				<option value="price:asc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'price' && $_smarty_tpl->tpl_vars['orderway']->value == 'asc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price: Lowest first'),$_smarty_tpl ) );?>
</option>
				<option value="price:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'price' && $_smarty_tpl->tpl_vars['orderway']->value == 'desc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price: Highest first'),$_smarty_tpl ) );?>
</option>
			<?php }?>
			<option value="name:asc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'name' && $_smarty_tpl->tpl_vars['orderway']->value == 'asc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Name: A to Z'),$_smarty_tpl ) );?>
</option>
			<option value="name:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'name' && $_smarty_tpl->tpl_vars['orderway']->value == 'desc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Name: Z to A'),$_smarty_tpl ) );?>
</option>
			<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
				<option value="quantity:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'quantity' && $_smarty_tpl->tpl_vars['orderway']->value == 'desc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock'),$_smarty_tpl ) );?>
</option>
			<?php }?>
			<option value="reference:asc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'reference' && $_smarty_tpl->tpl_vars['orderway']->value == 'asc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference: Lowest first'),$_smarty_tpl ) );?>
</option>
			<option value="reference:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'reference' && $_smarty_tpl->tpl_vars['orderway']->value == 'desc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference: Highest first'),$_smarty_tpl ) );?>
</option>
		</select>
	</div>
</form>
<!-- /Sort products -->
	<?php if (!(isset($_smarty_tpl->tpl_vars['paginationId']->value)) || $_smarty_tpl->tpl_vars['paginationId']->value == '') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('request'=>$_smarty_tpl->tpl_vars['request']->value),$_smarty_tpl ) );?>

	<?php }
}
}
}
