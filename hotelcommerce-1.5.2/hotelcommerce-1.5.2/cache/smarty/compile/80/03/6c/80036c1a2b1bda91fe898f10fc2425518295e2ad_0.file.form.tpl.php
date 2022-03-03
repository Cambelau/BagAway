<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\admin\themes\default\template\controllers\shop\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1accfa13_15164399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80036c1a2b1bda91fe898f10fc2425518295e2ad' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1accfa13_15164399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151230537762209b1ac9bc00_07233383', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191080004962209b1acad504_02489763', "other_fieldsets");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54343177962209b1acccc94_91146018', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_151230537762209b1ac9bc00_07233383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_151230537762209b1ac9bc00_07233383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'theme') {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
			<div class="col-lg-3 select_theme <?php if ($_smarty_tpl->tpl_vars['theme']->value->id == $_smarty_tpl->tpl_vars['fields_value']->value['id_theme_checked']) {?>select_theme_choice<?php }?>" onclick="$(this).find('input').attr('checked', true); $('.select_theme').removeClass('select_theme_choice'); $(this).toggleClass('select_theme_choice');">
				<div class="radio">
					<label>
						<input type="radio" name="id_theme" value="<?php echo intval($_smarty_tpl->tpl_vars['theme']->value->id);?>
"<?php if ($_smarty_tpl->tpl_vars['theme']->value->id == $_smarty_tpl->tpl_vars['fields_value']->value['id_theme_checked']) {?> checked="checked"<?php }?> /> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value->name, ENT_QUOTES, 'UTF-8', true);?>

					</label>
				</div>
				<div class="theme-container">
					<img class="thumbnail" src="../themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value->directory;?>
/preview.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['theme']->value->directory;?>
" />
				</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div class="clear">&nbsp;</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'textShopGroup') {?>
		<p style="color: #000000; padding: 0px; font-size: 12px; margin-top: 4px;"><?php echo $_smarty_tpl->tpl_vars['input']->value['value'];?>
</p>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'id_category') {?>
			<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function(){
					$('#id_category').change(function(){
						doAdminAjax(
							{
							ajax: '1',
							id_category : $(this).val(),
							use_shop_context : 0,
							action : 'getCategoriesFromRootCategory',
							controller: 'AdminShop',
							token : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
',
							},
							function(res)
							{
								$('#categories-tree').parent().parent().html(res);
							}
						);
					});
					$('#id_category').trigger('change');
				});
			<?php echo '</script'; ?>
>
		<?php }?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "other_fieldsets"} */
class Block_191080004962209b1acad504_02489763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_fieldsets' => 
  array (
    0 => 'Block_191080004962209b1acad504_02489763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['form_import']->value))) {?>
	<div class="panel">
		<h3><i class="icon-cloud-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import data from another shop'),$_smarty_tpl ) );?>
</h3>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_import']->value, 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
		<div class="form-group">
		<?php if ($_smarty_tpl->tpl_vars['key']->value == 'radio') {?>
			<label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
			<div class="col-lg-2">
				<span class="switch prestashop-switch">
					<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_on" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?> checked="checked" <?php }?> />
					<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_on">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_off" value="0"  <?php if (!$_smarty_tpl->tpl_vars['field']->value['value']) {?> checked="checked" <?php }?> />
					<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_off">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'select') {?>
			<div id="shop_list" <?php if (!$_smarty_tpl->tpl_vars['checked']->value) {?>display:none<?php }?>>
				<label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
				<div class="col-lg-9">
					<select name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" >
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options']['query'], 'option', false, 'key');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['defaultShop']->value) {?>selected="selected"<?php }?>>
								<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>

							</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'allcheckbox') {?>
			<div id="data_list" <?php if (!$_smarty_tpl->tpl_vars['checked']->value) {?>display:none<?php }?>>
				<label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
				<div class="col-lg-9">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['values'], 'label', false, 'key');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
					<p class="checkbox"><input type="checkbox" name="importData[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" checked="checked" /> <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</p>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'submit') {?>
			<div class="col-lg-9">
				<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
" name="submitAdd<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['class'];
}?>" />
			</div>
		<?php }?>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div class="panel-footer">
			<button type="submit" value="1" id="shop_form_submit_btn" name="submitAddshop" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>

			</button>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=0&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default" onclick="window.history.back();">
				<i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

			</a>
		</div>
	</div>
	<?php }
}
}
/* {/block "other_fieldsets"} */
/* {block "script"} */
class Block_54343177962209b1acccc94_91146018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_54343177962209b1acccc94_91146018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	var ids_category = new Array();
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ids_category']->value, 'id_category', false, 'key');
$_smarty_tpl->tpl_vars['id_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['id_category']->value) {
$_smarty_tpl->tpl_vars['id_category']->do_else = false;
?>
		ids_category[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
] = <?php echo $_smarty_tpl->tpl_vars['id_category']->value;?>
;
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	$(document).ready(function() {
		$('input[name=useImportData]').click(function()	{
			if ($(this).attr('id') == 'useImportData_on')
			{
				$('input[name^="importData["]').prop('checked', true);
				$('#shop_list, #data_list').slideDown('slow');
			}
			else
			{
				$('input[name^="importData["]').prop('checked', false);
				$('#shop_list, #data_list').slideUp('slow');
			}
		});
		$('#id_category, #importFromShop').change(function(){
			shop_id = $('#importFromShop').val();
			category_id = $('#id_category').val();
			if (ids_category[shop_id] != category_id)
				disableProductsDuplication();
			else
				enableProductsDuplication();
		});
	});
	function disableProductsDuplication()
	{
		$('input[name="importData[product_attribute]"], input[name="importData[image]"], input[name="importData[product]"], input[name="importData[stock_available]"], input[name="importData[discount]"]').removeAttr('checked').attr('disabled', 'disabled');
	}
	function enableProductsDuplication()
	{
		$('input[name="importData[product_attribute]"], input[name="importData[image]"], input[name="importData[product]"], input[name="importData[stock_available]"], input[name="importData[discount]"]').removeAttr('disabled').attr('checked', 'checked');
	}
<?php
}
}
/* {/block "script"} */
}
