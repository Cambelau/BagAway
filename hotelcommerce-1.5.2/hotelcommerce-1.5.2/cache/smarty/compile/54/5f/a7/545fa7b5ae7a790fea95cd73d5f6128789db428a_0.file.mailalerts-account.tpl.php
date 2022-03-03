<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\mailalerts\views\templates\front\mailalerts-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b18b672d1_61249312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '545fa7b5ae7a790fea95cd73d5f6128789db428a' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\mailalerts\\views\\templates\\front\\mailalerts-account.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b18b672d1_61249312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage my account','mod'=>'mailalerts'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','mod'=>'mailalerts'),$_smarty_tpl ) );?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div id="mailalerts_block_account" class="block">
	<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl ) );?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['mailAlerts']->value) {?>
		<ul class="products-block">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mailAlerts']->value, 'mailAlert', false, NULL, 'myLoop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['mailAlert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mailAlert']->value) {
$_smarty_tpl->tpl_vars['mailAlert']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
			<li class="clearfix<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?> last_item<?php }?>">
				<a class="products-block-image" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['mailAlert']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['mailAlert']->value['id_shop']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailAlert']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['mailAlert']->value['link_rewrite'],$_smarty_tpl->tpl_vars['mailAlert']->value['cover'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt=""/></a>
                <div class="product-content">
                	<span class="remove">
                        <i class="icon-remove" rel="ajax_id_mailalert_<?php echo $_smarty_tpl->tpl_vars['mailAlert']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['mailAlert']->value['id_product_attribute'];?>
"></i>
                    </span>
                    <h5><a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['mailAlert']->value['id_product'],null,null,null,null,$_smarty_tpl->tpl_vars['mailAlert']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailAlert']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailAlert']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
                    <div class="product-description"><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailAlert']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>
</small></div>
                </div>
			</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }?>
    <p id="mailalerts_block_account_warning" class="<?php if ($_smarty_tpl->tpl_vars['mailAlerts']->value) {?>hidden<?php }?> alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No mail alerts yet.','mod'=>'mailalerts'),$_smarty_tpl ) );?>
</p>
	<ul class="footer_links clearfix">
		<li><a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Your Account','mod'=>'mailalerts'),$_smarty_tpl ) );?>
"><span><i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Your Account','mod'=>'mailalerts'),$_smarty_tpl ) );?>
</span></a></li>
	</ul>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('mailalerts_url_remove'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'remove')))),$_smarty_tpl ) );
}
}
