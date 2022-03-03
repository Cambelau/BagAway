<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:27
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\admin\themes\default\template\controllers\themes\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1b87d450_29587143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '102017ed3ed865e71b8ea8dfe1dd9613245e9c52' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\admin\\themes\\default\\template\\controllers\\themes\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1b87d450_29587143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50750832862209b1b86f095_62905490', "defaultForm");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "defaultForm"} */
class Block_50750832862209b1b86f095_62905490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultForm' => 
  array (
    0 => 'Block_50750832862209b1b86f095_62905490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['context_mode']->value == Context::MODE_HOST && (isset($_smarty_tpl->tpl_vars['import_theme']->value)) && $_smarty_tpl->tpl_vars['import_theme']->value) {?>

	<div class="defaultForm form-horizontal">
		<?php if ($_smarty_tpl->tpl_vars['logged_on_addons']->value) {?>

			<div class="panel">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
						<img class="img-responsive" alt="PrestaShop Addons" src="themes/default/img/prestashop-addons-logo.png">
					</div>
					<div class="col-lg-4 col-lg-offset-1 col-md-4 col-sm-7 col-xs-12 addons-style-search-bar">
						<form id="addons-search-form" method="get" action="http://addons.prestashop.com/<?php echo $_smarty_tpl->tpl_vars['iso_code']->value;?>
/search" class="float">
						<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search on PrestaShop Marketplace:'),$_smarty_tpl ) );?>
</label>
						<div class="input-group">
							<input id="addons-search-box" class="form-control" type="text" autocomplete="off" name="query" value="" placeholder="Search on PrestaShop Marketplace">
							<div id="addons-search-btn" class="btn btn-primary input-group-addon">
								<i class="icon-search"></i>
							</div>
						</div>
						</form>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 addons-see-all-themes">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or'),$_smarty_tpl ) );?>
<a href="http://addons.prestashop.com/<?php echo $_smarty_tpl->tpl_vars['iso_code']->value;?>
/3-templates-prestashop" class="btn btn-primary" onclick="return !window.open(this.href)p"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See all themes'),$_smarty_tpl ) );?>
</a>
					</div>
				</div>
			</div>

		<?php } else { ?>

			<div class="panel" id="">
				<div class="panel-heading">
					<i class="icon-picture"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new theme'),$_smarty_tpl ) );?>

				</div>

				<div class="form-wrapper">
					<div class="form-group">
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To add a new theme, simply connect to your PrestaShop Addons account: your new theme will be automatically imported to your shop.'),$_smarty_tpl ) );?>
</p>
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can choose among 1,500+ professional templates!'),$_smarty_tpl ) );?>
</p>
					</div>
				</div><!-- /.form-wrapper -->

				<div class="panel-footer">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes',true), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default">
						<i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

					</a>
					<a href="#" data-toggle="modal" data-target="#modal_addons_connect" class="btn btn-default pull-right">
						<i class="process-icon-next"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next'),$_smarty_tpl ) );?>

					</a>
				</div>
			</div>

		<?php }?>

			<div class="alert alert-info">
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Can I add my own theme?'),$_smarty_tpl ) );?>
</h4>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please note that for security reasons, you can only add themes that are being distributed on PrestaShop Addons, the official marketplace.'),$_smarty_tpl ) );?>
</p>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also create a new theme below.'),$_smarty_tpl ) );?>
</p>
			</div>

	</div>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "defaultForm"} */
}
