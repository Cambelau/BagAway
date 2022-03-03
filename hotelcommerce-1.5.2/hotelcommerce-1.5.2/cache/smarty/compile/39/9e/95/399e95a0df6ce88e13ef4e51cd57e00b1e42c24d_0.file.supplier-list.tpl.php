<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:27
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\supplier-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1b3f72d5_08676514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '399e95a0df6ce88e13ef4e51cd57e00b1e42c24d' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\supplier-list.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nbr-product-page.tpl' => 1,
  ),
),false)) {
function content_62209b1b3f72d5_08676514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers:'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading product-listing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers:'),$_smarty_tpl ) );?>

	<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no suppliers.'),$_smarty_tpl ) );
} else {
if ($_smarty_tpl->tpl_vars['nbSuppliers']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is %d supplier.','sprintf'=>$_smarty_tpl->tpl_vars['nbSuppliers']->value),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d suppliers.','sprintf'=>$_smarty_tpl->tpl_vars['nbSuppliers']->value),$_smarty_tpl ) );
}
}?></span>
</h1>

<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['nbSuppliers']->value > 0) {?>
	<div class="content_sortPagiBar">
        <div class="sortPagiBar clearfix">
			<?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value)) && (isset($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])) && $_smarty_tpl->tpl_vars['supplier']->value['nb_products'] > 0) {?>
				<ul class="display hidden-xs">
					<li class="display-title">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View:'),$_smarty_tpl ) );?>

					</li>
					<li id="grid">
						<a rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid'),$_smarty_tpl ) );?>
">
							<i class="icon-th-large"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid'),$_smarty_tpl ) );?>

						</a>
					</li>
					<li id="list">
						<a rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List'),$_smarty_tpl ) );?>
">
							<i class="icon-th-list"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List'),$_smarty_tpl ) );?>

						</a>
					</li>
				</ul>
			<?php }?>
	        <?php $_smarty_tpl->_subTemplateRender("file:./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="top-pagination-content clearfix bottom-line">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_follow'=>1), 0, true);
?>
        </div>
    </div> <!-- .content_sortPagiBar -->

    <?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 3);?>
    <?php $_smarty_tpl->_assignInScope('nbItemsPerLineTablet', 2);?>
    <?php $_smarty_tpl->_assignInScope('nbLi', count($_smarty_tpl->tpl_vars['suppliers_list']->value));?>
    <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

    <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>


	<ul id="suppliers_list" class="list row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers_list']->value, 'supplier', false, NULL, 'supplier', array (
  'total' => true,
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration']++;
?>
	    	<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['total'] : null),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

	        <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['total'] : null),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

	        <?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?>
	        <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloTablet', $_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value);
}?>
			<li class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?> last-in-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?> first-in-line<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModulo']->value)) {?>last-line<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 0) {?>last-item-of-tablet-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 1) {?>first-item-of-tablet-line<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModuloTablet']->value)) {?>last-tablet-line<?php }?>col-xs-12">
				<div class="mansup-container">
					<div class="row">
		            	<div class="left-side col-xs-12 col-sm-3">
							<!-- logo -->
							<div class="logo">
								<?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])) && $_smarty_tpl->tpl_vars['supplier']->value['nb_products'] > 0) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
								<?php }?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_sup_dir']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
								<?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])) && $_smarty_tpl->tpl_vars['supplier']->value['nb_products'] > 0) {?>
									</a>
								<?php }?>
							</div> <!-- .logo -->
						</div> <!-- .left-side -->

						<div class="middle-side col-xs-12 col-sm-5">
							<h3>
								<?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])) && $_smarty_tpl->tpl_vars['supplier']->value['nb_products'] > 0) {?>
									<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
">
								<?php }?>
								<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['name'],60,'...' )), ENT_QUOTES, 'UTF-8', true);?>

								<?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])) && $_smarty_tpl->tpl_vars['supplier']->value['nb_products'] > 0) {?>
									</a>
								<?php }?>
							</h3>
							<div class="description">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['supplier']->value['description'],180,'...' ));?>

							</div>
			            </div><!-- .middle-side -->

						<div class="right-side col-xs-12 col-sm-4">
			            	<div class="right-side-content">
			                    <p class="product-counter">
			                        <?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])) && $_smarty_tpl->tpl_vars['supplier']->value['nb_products'] > 0) {?>
			                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
">
			                        <?php }?>
			                        <?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])) && $_smarty_tpl->tpl_vars['supplier']->value['nb_products'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d product','sprintf'=>intval($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d products','sprintf'=>intval($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])),$_smarty_tpl ) );
}?>
			                    	<?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])) && $_smarty_tpl->tpl_vars['supplier']->value['nb_products'] > 0) {?>
			                        	</a>
			                    	<?php }?>
			                    </p>
			                    <?php if ((isset($_smarty_tpl->tpl_vars['supplier']->value['nb_products'])) && $_smarty_tpl->tpl_vars['supplier']->value['nb_products'] > 0) {?>
			                        <a class="btn btn-default button exclusive-medium" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View products'),$_smarty_tpl ) );?>
 <i class="icon-chevron-right right"></i></span></a>
			                    <?php }?>
			                </div>
						</div><!-- .right-side -->
					</div>
		        </div>
			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<div class="content_sortPagiBar">
        <div class="bottom-pagination-content clearfix">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_follow'=>1,'paginationId'=>'bottom'), 0, true);
?>
        </div>
    </div>
<?php }
}
}
}
