<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:27
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\admin\themes\default\template\controllers\webservice\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1be964a0_18337202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd309b7515c412f488cf58002cea812201eadcab6' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\admin\\themes\\default\\template\\controllers\\webservice\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1be964a0_18337202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173280268062209b1be243d7_40851776', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208097933662209b1be91013_30124895', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_173280268062209b1be243d7_40851776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_173280268062209b1be243d7_40851776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'resources') {?>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set the resource permissions for this key:'),$_smarty_tpl ) );?>
</div>
		<table class="table accesses">
			<thead>
				<tr>
					<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Resource'),$_smarty_tpl ) );?>
</span></th>
					<th class="center fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All'),$_smarty_tpl ) );?>
</span></th>
					<th class="center fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View (GET)'),$_smarty_tpl ) );?>
</span></th>
					<th class="center fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify (PUT)'),$_smarty_tpl ) );?>
</span></th>
					<th class="center fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add (POST)'),$_smarty_tpl ) );?>
</span></th>
					<th class="center fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete (DELETE)'),$_smarty_tpl ) );?>
</span></th>
					<th class="center fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fast view (HEAD)'),$_smarty_tpl ) );?>
</span></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th></th>
					<th></th>
					<th class="center"><input type="checkbox" class="all_get get " /></th>
					<th class="center"><input type="checkbox" class="all_put put " /></th>
					<th class="center"><input type="checkbox" class="all_post post " /></th>
					<th class="center"><input type="checkbox" class="all_delete delete" /></th>
					<th class="center"><input type="checkbox" class="all_head head" /></th>
				</tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ressources']->value, 'resource', false, 'resource_name');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource_name']->value => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['resource_name']->value;?>
</td>
						<td class="center"><input type="checkbox" class="all"/></td>
						<td class="center"><input type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) && in_array('GET',$_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) {?>disabled="disabled"<?php }?> class="get" name="resources[<?php echo $_smarty_tpl->tpl_vars['resource_name']->value;?>
][GET]" <?php if ((isset($_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) && in_array('GET',$_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) {?>checked="checked"<?php }?> /></td>
						<td class="center"><input type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) && in_array('PUT',$_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) {?>disabled="disabled"<?php }?> class="put" name="resources[<?php echo $_smarty_tpl->tpl_vars['resource_name']->value;?>
][PUT]" <?php if ((isset($_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) && in_array('PUT',$_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) {?>checked="checked"<?php }?>/></td>
						<td class="center"><input type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) && in_array('POST',$_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) {?>disabled="disabled"<?php }?> class="post" name="resources[<?php echo $_smarty_tpl->tpl_vars['resource_name']->value;?>
][POST]" <?php if ((isset($_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) && in_array('POST',$_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) {?>checked="checked"<?php }?>/></td>
						<td class="center"><input type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) && in_array('DELETE',$_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) {?>disabled="disabled"<?php }?> class="delete" name="resources[<?php echo $_smarty_tpl->tpl_vars['resource_name']->value;?>
][DELETE]" <?php if ((isset($_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) && in_array('DELETE',$_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) {?>checked="checked"<?php }?>/></td>
						<td class="center"><input type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) && in_array('HEAD',$_smarty_tpl->tpl_vars['ressources']->value[$_smarty_tpl->tpl_vars['resource_name']->value]['forbidden_method'])) {?>disabled="disabled"<?php }?> class="head" name="resources[<?php echo $_smarty_tpl->tpl_vars['resource_name']->value;?>
][HEAD]" <?php if ((isset($_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) && in_array('HEAD',$_smarty_tpl->tpl_vars['permissions']->value[$_smarty_tpl->tpl_vars['resource_name']->value])) {?>checked="checked"<?php }?>/></td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "script"} */
class Block_208097933662209b1be91013_30124895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_208097933662209b1be91013_30124895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(function() {
		$('table.accesses input.all').click(function() {
			if($(this).is(':checked'))
				$(this).parent().parent().find('input.get:not(:checked), input.put:not(:checked), input.post:not(:checked), input.delete:not(:checked), input.head:not(:checked)').click();
			else
				$(this).parent().parent().find('input.get:checked, input.put:checked, input.post:checked, input.delete:checked, input.head:checked').click();
		});
		$('table.accesses .all_get').click(function() {
			if($(this).is(':checked'))
				$(this).parent().parent().parent().find('input.get:not(:checked)').click();
			else
				$(this).parent().parent().parent().find('input.get:checked').click();
		});
		$('table.accesses .all_put').click(function() {
			if($(this).is(':checked'))
				$(this).parent().parent().parent().find('input.put:not(:checked)').click();
			else
				$(this).parent().parent().parent().find('input.put:checked').click();
		});
		$('table.accesses .all_post').click(function() {
			if($(this).is(':checked'))
				$(this).parent().parent().parent().find('input.post:not(:checked)').click();
			else
				$(this).parent().parent().parent().find('input.post:checked').click();
		});
		$('table.accesses .all_delete').click(function() {
			if($(this).is(':checked'))
				$(this).parent().parent().parent().find('input.delete:not(:checked)').click();
			else
				$(this).parent().parent().parent().find('input.delete:checked').click();
		});
		$('table.accesses .all_head').click(function() {
			if($(this).is(':checked'))
				$(this).parent().parent().parent().find('input.head:not(:checked)').click();
			else
				$(this).parent().parent().parent().find('input.head:checked').click();
		});
	});
<?php
}
}
/* {/block "script"} */
}
