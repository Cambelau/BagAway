<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\order-return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1a545bc5_91239067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0efd8c50e09018600f64bace3a03b1b11323f6da' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\order-return.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./errors.tpl' => 1,
  ),
),false)) {
function content_62209b1a545bc5_91239067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>

	</a>
	<span class="navigation-pipe">
		<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

	</span>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking refund requests'),$_smarty_tpl ) );?>

	</a>
	<span class="navigation-pipe">
		<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

	</span>
	<span class="navigation_page">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking refund detail'),$_smarty_tpl ) );?>

	</span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("file:./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="panel card">
	<h1 class="page-heading bottom-indent">
		<i class="icon-tasks"></i> &nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking Refund Requests'),$_smarty_tpl ) );?>

	</h1>
	<div class="table-responsive wk-datatable-wrapper">
		<table class="table table-bordered">
			<tr>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room type'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Num rooms'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms price (tax incl.)'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional facilities price (tax incl.)'),$_smarty_tpl ) );?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['isRefundCompleted']->value) {?>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund amount'),$_smarty_tpl ) );?>
</th>
				<?php }?>
			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['refundReqBookings']->value, 'booking');
$_smarty_tpl->tpl_vars['booking']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['booking']->value) {
$_smarty_tpl->tpl_vars['booking']->do_else = false;
?>
				<tr>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking']->value['room_type_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['booking']->value['date_from'],"%d-%m-%Y");?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['booking']->value['date_to'],"%d-%m-%Y");?>
</td>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking']->value['num_rooms'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['booking']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value['id']),$_smarty_tpl ) );?>
</td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['booking']->value['extra_demands_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value['id']),$_smarty_tpl ) );?>
</td>
					<?php if ($_smarty_tpl->tpl_vars['isRefundCompleted']->value) {?>
						<td>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['booking']->value['refunded_amount'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value['id']),$_smarty_tpl ) );?>

						</td>
					<?php }?>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current refund state'),$_smarty_tpl ) );?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<span class="badge wk-badge" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentStateInfo']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentStateInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Way of payment'),$_smarty_tpl ) );?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['is_advance_payment']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advance Payment'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full Payment'),$_smarty_tpl ) );
}?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Order Amount'),$_smarty_tpl ) );?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderInfo']->value['total_paid_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderInfo']->value['id_currency']),$_smarty_tpl ) );?>

		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund initiated on'),$_smarty_tpl ) );?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderReturnInfo']->value['date_add'],"%d-%m-%Y %I:%M %p");?>

		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['currentStateInfo']->value['refunded']) {?>
		<div class="form-group row">
			<div class="col-md-2 col-sm-3">
				<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refunded Amount','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</strong>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderReturnInfo']->value['refunded_amount'],'currency'=>$_smarty_tpl->tpl_vars['orderInfo']->value['id_currency']),$_smarty_tpl ) );?>

			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2 col-sm-3">
				<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Mode','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</strong>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderReturnInfo']->value['payment_mode'], ENT_QUOTES, 'UTF-8', true);?>

			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2 col-sm-3">
				<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transaction Id','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</strong>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderReturnInfo']->value['id_transaction'], ENT_QUOTES, 'UTF-8', true);?>

			</div>
		</div>
	<?php }?>
</div>

<ul class="footer_links clearfix">
	<li><a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account'),$_smarty_tpl ) );?>
</span></a></li>
	<li><a class="btn btn-default button button-small" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>"><span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
</span></a></li>
</ul>
<?php }
}
