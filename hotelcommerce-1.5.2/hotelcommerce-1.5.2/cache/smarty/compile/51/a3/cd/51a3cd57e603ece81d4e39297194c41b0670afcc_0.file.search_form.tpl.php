<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:30
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\admin\themes\default\template\search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1edb8a53_55422710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51a3cd57e603ece81d4e39297194c41b0670afcc' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\admin\\themes\\default\\template\\search_form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1edb8a53_55422710 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="bo_search_form" method="post" action="index.php?controller=AdminSearch&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminSearch'),$_smarty_tpl ) );?>
" role="search">
	<div class="form-group">
		<input type="hidden" name="bo_search_type" id="bo_search_type" />
		<div class="input-group">
			<div class="input-group-btn">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i id="search_type_icon" class="icon-search"></i>
					<i class="icon-caret-down"></i>
				</button>
				<ul id="header_search_options" class="dropdown-menu">
					<li class="search-all search-option active">
						<a href="#" data-value="0" data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What are you looking for?'),$_smarty_tpl ) );?>
" data-icon="icon-search">
							<i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Everywhere'),$_smarty_tpl ) );?>
</a>
					</li>
					<li class="divider"></li>
					<li class="search-book search-option">
						<a href="#" data-value="1" data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product name, SKU, reference...'),$_smarty_tpl ) );?>
" data-icon="icon-book">
							<i class="icon-book"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Catalog'),$_smarty_tpl ) );?>

						</a>
					</li>
					<li class="search-customers-name search-option">
						<a href="#" data-value="2" data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email, name...'),$_smarty_tpl ) );?>
" data-icon="icon-group">
							<i class="icon-group"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by name'),$_smarty_tpl ) );?>

						</a>
					</li>
					<li class="search-customers-addresses search-option">
						<a href="#" data-value="6" data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'123.45.67.89'),$_smarty_tpl ) );?>
" data-icon="icon-desktop">
							<i class="icon-desktop"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by ip address'),$_smarty_tpl ) );?>
</a>
					</li>
					<li class="search-orders search-option">
						<a href="#" data-value="3" data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order ID'),$_smarty_tpl ) );?>
" data-icon="icon-credit-card">
							<i class="icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders'),$_smarty_tpl ) );?>

						</a>
					</li>
					<li class="search-invoices search-option">
						<a href="#" data-value="4" data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice Number'),$_smarty_tpl ) );?>
" data-icon="icon-book">
							<i class="icon-book"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoices'),$_smarty_tpl ) );?>

						</a>
					</li>
					<li class="search-carts search-option">
						<a href="#" data-value="5" data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart ID'),$_smarty_tpl ) );?>
" data-icon="icon-shopping-cart">
							<i class="icon-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carts'),$_smarty_tpl ) );?>

						</a>
					</li>
					<li class="search-modules search-option">
						<a href="#" data-value="7" data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module name'),$_smarty_tpl ) );?>
" data-icon="icon-puzzle-piece">
							<i class="icon-puzzle-piece"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules'),$_smarty_tpl ) );?>

						</a>
					</li>
				</ul>
			</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['show_clear_btn']->value)) && $_smarty_tpl->tpl_vars['show_clear_btn']->value) {?>
			<a href="#" class="clear_search hide"><i class="icon-remove"></i></a>
			<?php }?>
			<input id="bo_query" name="bo_query" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bo_query']->value;?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search'),$_smarty_tpl ) );?>
" />
<!--  							<span class="input-group-btn">
				<button type="submit" id="bo_search_submit" class="btn btn-primary">
					<i class="icon-search"></i>
				</button>
			</span> -->
		</div>
	</div>

	<?php echo '<script'; ?>
>
		<?php if ((isset($_smarty_tpl->tpl_vars['search_type']->value)) && $_smarty_tpl->tpl_vars['search_type']->value) {?>
			$(document).ready(function() {
				$('.search-option a[data-value='+<?php echo intval($_smarty_tpl->tpl_vars['search_type']->value);?>
+']').click();
			});
		<?php }?>
	<?php echo '</script'; ?>
>
</form><?php }
}
