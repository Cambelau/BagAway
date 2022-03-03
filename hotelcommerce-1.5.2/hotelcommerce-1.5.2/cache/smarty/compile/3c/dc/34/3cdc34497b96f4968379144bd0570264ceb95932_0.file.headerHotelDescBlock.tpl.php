<?php
/* Smarty version 3.1.39, created on 2022-03-03 12:12:04
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\modules\hotelreservationsystem\views\templates\hook\headerHotelDescBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6220a284bc1866_44295922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cdc34497b96f4968379144bd0570264ceb95932' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\modules\\hotelreservationsystem\\views\\templates\\hook\\headerHotelDescBlock.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6220a284bc1866_44295922 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="header-desc-container">
	<div class="header-desc-wrapper">
		<div class="header-desc-primary">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
						<p class="header-desc-welcome"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome To','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</p>
						<hr class="heasder-desc-hr-first"/>
						<div class="header-desc-inner-wrapper">
							<h1 class="header-hotel-name"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
							<p class="header-hotel-desc"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['WK_HTL_TAG_LINE']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							<hr class="heasder-desc-hr-second"/>
						</div>
					</div>
				</div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAfterHeaderHotelDesc"),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>
</div><?php }
}
