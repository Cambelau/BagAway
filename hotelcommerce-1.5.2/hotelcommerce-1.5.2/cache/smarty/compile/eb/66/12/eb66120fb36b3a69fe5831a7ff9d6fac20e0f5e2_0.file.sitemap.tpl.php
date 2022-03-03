<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:27
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1b267e21_68041224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb66120fb36b3a69fe5831a7ff9d6fac20e0f5e2' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\sitemap.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1b267e21_68041224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap'),$_smarty_tpl ) );?>

</h1>
<div id="sitemap_content" class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="sitemap_block box">
    		<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our offers'),$_smarty_tpl ) );?>
</h3>
    		<ul>
    			<li>
                    <a 
                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" 
                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View a new product'),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products'),$_smarty_tpl ) );?>

                    </a>
                </li>
    			<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    			<?php if ($_smarty_tpl->tpl_vars['PS_DISPLAY_BEST_SELLERS']->value) {?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View top-selling products'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best sellers'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                <?php }?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View products with a price drop'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price drop'),$_smarty_tpl ) );?>

                        </a>
                    </li>
    			<?php }?>
    			<?php if ($_smarty_tpl->tpl_vars['display_manufacturer_link']->value || $_smarty_tpl->tpl_vars['PS_DISPLAY_SUPPLIERS']->value) {?>
                    <li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View a list of manufacturers'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manufacturers'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                <?php }?>
    			<?php if ($_smarty_tpl->tpl_vars['display_supplier_link']->value || $_smarty_tpl->tpl_vars['PS_DISPLAY_SUPPLIERS']->value) {?>
                    <li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('supplier'), ENT_QUOTES, 'UTF-8', true);?>
" 
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View a list of suppliers'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                <?php }?>
    		</ul>
	   </div>
    </div>
    <div class="col-xs-12 col-sm-6">
		<div class="sitemap_block box">
    		<h3 class="page-subheading">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Account'),$_smarty_tpl ) );?>

            </h3>
    		<ul>
        		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow" 
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage your customer account'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Account'),$_smarty_tpl ) );?>

                        </a>
                    </li>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow" 
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage your personal information'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal information'),$_smarty_tpl ) );?>

                        </a>
                    </li>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow" 
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View a list of my addresses'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses'),$_smarty_tpl ) );?>

                        </a>
                    </li>
        			<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                        <li>
                            <a 
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                            rel="nofollow" 
                            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View a list of my discounts'),$_smarty_tpl ) );?>
">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discounts'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                        <?php }?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View a list of my orders'),$_smarty_tpl ) );?>
" >
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history'),$_smarty_tpl ) );?>

                        </a>
                    </li>
        		<?php } else { ?>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" 
                        rel="nofollow"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );?>
" >
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );?>

                        </a>
                    </li>
        			<li>
                        <a 
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
"
                        rel="nofollow" 
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new account'),$_smarty_tpl ) );?>
" >
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new account'),$_smarty_tpl ) );?>

                        </a>
                    </li>
        		<?php }?>
        		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
        			<li>
                        <a 
                        href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
?mylogout" 
                        rel="nofollow"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out'),$_smarty_tpl ) );?>
" >
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out'),$_smarty_tpl ) );?>

                        </a>
                    </li>
        		<?php }?>
    		</ul>
    	</div>
    </div>
</div>
<div id="listpage_content" class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="categTree box">
            <h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories'),$_smarty_tpl ) );?>
</h3>
            <div class="tree_top">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoriesTree']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></a>
            </div>
            <ul class="tree">
            <?php if ((isset($_smarty_tpl->tpl_vars['categoriesTree']->value['children']))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriesTree']->value['children'], 'child', true);
$_smarty_tpl->tpl_vars['child']->iteration = 0;
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
$_smarty_tpl->tpl_vars['child']->iteration++;
$_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
$__foreach_child_221_saved = $_smarty_tpl->tpl_vars['child'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['child']->last) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0, true);
?>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_221_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </ul>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
		<div class="sitemap_block box">
            <h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pages'),$_smarty_tpl ) );?>
</h3>
            <ul>
            	<li>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoriescmsTree']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoriescmsTree']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoriescmsTree']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                </li>
                <?php if ((isset($_smarty_tpl->tpl_vars['categoriescmsTree']->value['children']))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriescmsTree']->value['children'], 'child', true);
$_smarty_tpl->tpl_vars['child']->iteration = 0;
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
$_smarty_tpl->tpl_vars['child']->iteration++;
$_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
$__foreach_child_222_saved = $_smarty_tpl->tpl_vars['child'];
?>
                        <?php if (((isset($_smarty_tpl->tpl_vars['child']->value['children'])) && count($_smarty_tpl->tpl_vars['child']->value['children']) > 0) || count($_smarty_tpl->tpl_vars['child']->value['cms']) > 0) {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-cms-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0, true);
?>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_222_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriescmsTree']->value['cms'], 'cms', false, NULL, 'cmsTree', array (
));
$_smarty_tpl->tpl_vars['cms']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->do_else = false;
?>
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>

                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <li>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact'),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact'),$_smarty_tpl ) );?>

                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['display_store']->value) {?>
                    <li class="last">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of our stores'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our stores'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<?php }
}
