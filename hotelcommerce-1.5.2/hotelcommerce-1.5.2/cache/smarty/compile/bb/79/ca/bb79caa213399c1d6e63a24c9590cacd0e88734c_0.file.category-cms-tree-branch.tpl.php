<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:21
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\category-cms-tree-branch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b15997750_53306502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb79caa213399c1d6e63a24c9590cacd0e88734c' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\category-cms-tree-branch.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b15997750_53306502 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li <?php if ((isset($_smarty_tpl->tpl_vars['last']->value)) && $_smarty_tpl->tpl_vars['last']->value == 'true') {?>class="last"<?php }?>>
	<strong><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></strong>
	<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['children'])) && count($_smarty_tpl->tpl_vars['node']->value['children']) > 0) {?>
		<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'child', false, NULL, 'categoryCmsTreeBranch', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryCmsTreeBranch']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryCmsTreeBranch']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categoryCmsTreeBranch']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_categoryCmsTreeBranch']->value['total'];
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['child']->value['children'])) && count($_smarty_tpl->tpl_vars['child']->value['children']) > 0 || (isset($_smarty_tpl->tpl_vars['child']->value['cms'])) && count($_smarty_tpl->tpl_vars['child']->value['cms']) > 0) {?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categoryCmsTreeBranch']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categoryCmsTreeBranch']->value['last'] : null) && count($_smarty_tpl->tpl_vars['node']->value['cms']) == 0) {?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-cms-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0, true);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-cms-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0, true);
?>
				<?php }?>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['cms'])) && count($_smarty_tpl->tpl_vars['node']->value['cms']) > 0) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['cms'], 'cms', false, NULL, 'cmsTreeBranch', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['cms']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['total'];
?>
				<li <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['last'] : null)) {?>class="last"<?php }?> ><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		</ul>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['node']->value['cms'])) && count($_smarty_tpl->tpl_vars['node']->value['cms']) > 0) {?>
		<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['cms'], 'cms', false, NULL, 'cmsTreeBranch', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['cms']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['total'];
?>
			<li <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cmsTreeBranch']->value['last'] : null)) {?>class="last"<?php }?> ><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }?>
</li>
<?php }
}
