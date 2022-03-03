<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\productcomments\products-comparison.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b18d16653_47920551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4322ec23114278f809df86be24f138ba3f69d407' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\productcomments\\products-comparison.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b18d16653_47920551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>

<tr class="comparison_header">
    <td class="feature-name td_empty">
    	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'productcomments'),$_smarty_tpl ) );?>
</span>
    </td>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_ids_product']->value, 'id_product');
$_smarty_tpl->tpl_vars['id_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->do_else = false;
?>
    	<td class="product-<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
"></td>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grades']->value, 'grade', false, 'grade_id');
$_smarty_tpl->tpl_vars['grade']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['grade_id']->value => $_smarty_tpl->tpl_vars['grade']->value) {
$_smarty_tpl->tpl_vars['grade']->do_else = false;
?>
    <tr>
    <?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

        <td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 feature-name">
        	<strong><?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
</strong>
        </td>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_ids_product']->value, 'id_product');
$_smarty_tpl->tpl_vars['id_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->do_else = false;
?>
        	<?php $_smarty_tpl->_assignInScope('tab_grade', $_smarty_tpl->tpl_vars['product_grades']->value[$_smarty_tpl->tpl_vars['grade_id']->value]);?>
        	<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos ajax_block_product product-<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" align="center">
        		<?php if ((isset($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])) && $_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value]) {?>
        			<div class="product-rating">
        				<?php
$_smarty_tpl->tpl_vars['__smarty_section_average'] = new Smarty_Variable(array());
if (true) {
for ($__section_average_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_average']->value['index'] = 1; $__section_average_4_iteration <= 5; $__section_average_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_average']->value['index']++){
?>
        					<input class="auto-submit-star" disabled="disabled" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['grade_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_average']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_average']->value['index'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])) && round($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value]) != 0 && (isset($_smarty_tpl->tpl_vars['__smarty_section_average']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_average']->value['index'] : null) == round($_smarty_tpl->tpl_vars['tab_grade']->value[$_smarty_tpl->tpl_vars['id_product']->value])) {?>checked="checked"<?php }?> />
        				<?php
}
}
?>
        			</div>
        		<?php } else { ?>
        			-
        		<?php }?>
        	</td>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>				
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

<tr>
    <td  class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 feature-name">
    	<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Average','mod'=>'productcomments'),$_smarty_tpl ) );?>
</strong>
    </td>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_ids_product']->value, 'id_product');
$_smarty_tpl->tpl_vars['id_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->do_else = false;
?>
		<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos product-<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" align="center" >
			<?php if ((isset($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])) && $_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value]) {?>
				<div class="product-rating">
					<?php
$_smarty_tpl->tpl_vars['__smarty_section_average'] = new Smarty_Variable(array());
if (true) {
for ($__section_average_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_average']->value['index'] = 1; $__section_average_5_iteration <= 5; $__section_average_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_average']->value['index']++){
?>
						<input class="auto-submit-star" disabled="disabled" type="radio" name="average_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" <?php if (round($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value]) != 0 && (isset($_smarty_tpl->tpl_vars['__smarty_section_average']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_average']->value['index'] : null) == round($_smarty_tpl->tpl_vars['list_product_average']->value[$_smarty_tpl->tpl_vars['id_product']->value])) {?>checked="checked"<?php }?> />
					<?php
}
}
?>
				</div>
			<?php } else { ?>
				-
			<?php }?>
		</td>	
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>

<tr>
<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos feature-name">&nbsp;</td>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_ids_product']->value, 'id_product');
$_smarty_tpl->tpl_vars['id_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_product']->value) {
$_smarty_tpl->tpl_vars['id_product']->do_else = false;
?>
    	<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos product-<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" align="center" >
    		<?php if ((isset($_smarty_tpl->tpl_vars['product_comments']->value[$_smarty_tpl->tpl_vars['id_product']->value])) && $_smarty_tpl->tpl_vars['product_comments']->value[$_smarty_tpl->tpl_vars['id_product']->value]) {?>
    			<a class="btn btn-default button button-small" href="#" data-id-product-comment="<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
" rel="#comments_<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
">
    				<span>
    					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View comments','mod'=>'productcomments'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i>
    				</span>
    			</a>
    			<div style="display:none" id="comments_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
">   
    				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_comments']->value[$_smarty_tpl->tpl_vars['id_product']->value], 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>	
    					<div class="well well-sm">
    						<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>
 </strong>
    						<small class="date"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl ) );?>
</small>
                            <div class="comment_title"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['title'], ENT_QUOTES, 'UTF-8', true));?>
</div>
                            <div class="comment_content"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['content'], ENT_QUOTES, 'UTF-8', true));?>
</div>
    					</div>
    				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    			</div>
    		<?php } else { ?>
    			-
    		<?php }?>
    	</td>	
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>
<?php }
}
