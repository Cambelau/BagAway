<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1adb43c6_90199632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16b356392474aa08ca89a8446dda46f9ccc22938' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\search.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nbr-product-page.tpl' => 1,
    'file:./product-compare.tpl' => 2,
  ),
),false)) {
function content_62209b1adb43c6_90199632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1
<?php if ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && $_smarty_tpl->tpl_vars['instant_search']->value) {?>id="instant_search_results"<?php }?>
class="page-heading <?php if (!(isset($_smarty_tpl->tpl_vars['instant_search']->value)) || ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && !$_smarty_tpl->tpl_vars['instant_search']->value)) {?> product-listing<?php }?>">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search'),$_smarty_tpl ) );?>
&nbsp;
    <?php if ($_smarty_tpl->tpl_vars['nbProducts']->value > 0) {?>
        <span class="lighter">
            "<?php if ((isset($_smarty_tpl->tpl_vars['search_query']->value)) && $_smarty_tpl->tpl_vars['search_query']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['search_tag']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['search_tag']->value, ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['ref']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['ref']->value, ENT_QUOTES, 'UTF-8', true);
}?>"
        </span>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && $_smarty_tpl->tpl_vars['instant_search']->value) {?>
        <a href="#" class="close">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return to the previous page'),$_smarty_tpl ) );?>

        </a>
    <?php } else { ?>
        <span class="heading-counter">
            <?php if ($_smarty_tpl->tpl_vars['nbProducts']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d result has been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d results have been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl ) );
}?>
        </span>
    <?php }?>
</h1>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (!$_smarty_tpl->tpl_vars['nbProducts']->value) {?>
	<p class="alert alert-warning">
		<?php if ((isset($_smarty_tpl->tpl_vars['search_query']->value)) && $_smarty_tpl->tpl_vars['search_query']->value) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No results were found for your search'),$_smarty_tpl ) );?>
&nbsp;"<?php if ((isset($_smarty_tpl->tpl_vars['search_query']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true);
}?>"
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['search_tag']->value)) && $_smarty_tpl->tpl_vars['search_tag']->value) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No results were found for your search'),$_smarty_tpl ) );?>
&nbsp;"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_tag']->value, ENT_QUOTES, 'UTF-8', true);?>
"
		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter a search keyword'),$_smarty_tpl ) );?>

		<?php }?>
	</p>
<?php } else { ?>
	<?php if ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && $_smarty_tpl->tpl_vars['instant_search']->value) {?>
        <p class="alert alert-info">
            <?php if ($_smarty_tpl->tpl_vars['nbProducts']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d result has been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d results have been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl ) );
}?>
        </p>
    <?php }?>
    <div class="content_sortPagiBar">
        <div class="sortPagiBar clearfix <?php if ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && $_smarty_tpl->tpl_vars['instant_search']->value) {?> instant_search<?php }?>">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php if (!(isset($_smarty_tpl->tpl_vars['instant_search']->value)) || ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && !$_smarty_tpl->tpl_vars['instant_search']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </div>
    	<div class="top-pagination-content clearfix">
            <?php $_smarty_tpl->_subTemplateRender("file:./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php if (!(isset($_smarty_tpl->tpl_vars['instant_search']->value)) || ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && !$_smarty_tpl->tpl_vars['instant_search']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_follow'=>1), 0, true);
?>
            <?php }?>
        </div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['search_products']->value), 0, true);
?>
    <div class="content_sortPagiBar">
    	<div class="bottom-pagination-content clearfix">
        	<?php $_smarty_tpl->_subTemplateRender("file:./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        	<?php if (!(isset($_smarty_tpl->tpl_vars['instant_search']->value)) || ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && !$_smarty_tpl->tpl_vars['instant_search']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paginationId'=>'bottom','no_follow'=>1), 0, true);
?>
            <?php }?>
        </div>
    </div>
<?php }
}
}
