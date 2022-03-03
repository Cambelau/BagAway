<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:27
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\_partials\room_type_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1b5323b6_38254598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7330855679365329bc614b2b43af3edd8a4fab47' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\_partials\\room_type_list.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1b5323b6_38254598 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['booking_data']->value['rm_data'])) && $_smarty_tpl->tpl_vars['booking_data']->value['rm_data']) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booking_data']->value['rm_data'], 'room_v', false, 'room_k');
$_smarty_tpl->tpl_vars['room_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_k']->value => $_smarty_tpl->tpl_vars['room_v']->value) {
$_smarty_tpl->tpl_vars['room_v']->do_else = false;
?>
		<div class="col-sm-12 room_cont">
			<div class="row">
				<div class="col-sm-4">
					<a href="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['product_link'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['image'];?>
" class="img-responsive">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeListImageAfter','product'=>$_smarty_tpl->tpl_vars['room_v']->value),$_smarty_tpl ) );?>

					</a>
				</div>
				<div class="col-sm-8">
					<p class="rm_heading"><?php echo $_smarty_tpl->tpl_vars['room_v']->value['name'];?>
</p>
					<div class="rm_desc"><?php echo $_smarty_tpl->tpl_vars['room_v']->value['description'];?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['product_link'];?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View More'),$_smarty_tpl ) );?>
....</a></div>

					<p><span class="capa_txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max Capacity:'),$_smarty_tpl ) );?>
</span><span class="capa_data"> <?php echo $_smarty_tpl->tpl_vars['room_v']->value['adult'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php echo $_smarty_tpl->tpl_vars['room_v']->value['children'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'child'),$_smarty_tpl ) );?>
</span></p>
					<?php if ((isset($_smarty_tpl->tpl_vars['room_v']->value['num_review']))) {?>
						<div class="rm_review_cont pull-left">
							<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
								<?php if ($_smarty_tpl->tpl_vars['foo']->value <= $_smarty_tpl->tpl_vars['room_v']->value['ratting']) {?>
									<div class="rm_ratting_yes" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);"></div>
								<?php } else { ?>
									<div class="rm_ratting_no" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);"></div>
								<?php }?>
							<?php }
}
?>
							<span class="rm_review"><?php echo $_smarty_tpl->tpl_vars['room_v']->value['num_review'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews'),$_smarty_tpl ) );?>
</span>
						</div>
					<?php }?>

					<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
						<span class="rm_left pull-right" <?php if ($_smarty_tpl->tpl_vars['room_v']->value['room_left'] > $_smarty_tpl->tpl_vars['warning_num']->value) {?>  style="display:none"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hurry!'),$_smarty_tpl ) );?>
 <span class="cat_remain_rm_qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
"><?php echo $_smarty_tpl->tpl_vars['room_v']->value['room_left'];?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rooms left'),$_smarty_tpl ) );?>
</span>
					<?php }?>

					<?php if (!empty($_smarty_tpl->tpl_vars['room_v']->value['feature'])) {?>
						<div class="rm_amenities_cont">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room_v']->value['feature'], 'feat_v', false, 'feat_k');
$_smarty_tpl->tpl_vars['feat_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feat_k']->value => $_smarty_tpl->tpl_vars['feat_v']->value) {
$_smarty_tpl->tpl_vars['feat_v']->do_else = false;
?>
								<img title="<?php echo $_smarty_tpl->tpl_vars['feat_v']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['feat_img_dir']->value).((string)$_smarty_tpl->tpl_vars['feat_v']->value['value']));?>
" class="rm_amen">  															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php }?>
					<div class="row margin-lr-0 pull-left rm_price_cont">
						<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff'] >= 0) {?>
							<span class="pull-left rm_price_val <?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal(round($_smarty_tpl->tpl_vars['room_v']->value['price_without_reduction'],2))),$_smarty_tpl ) );?>

							</span>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff']) {?>
							<span class="pull-left rm_price_val">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal(round($_smarty_tpl->tpl_vars['room_v']->value['feature_price'],2))),$_smarty_tpl ) );?>

							</span>
						<?php }?>
						<span class="pull-left rm_price_txt">/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Per Night'),$_smarty_tpl ) );?>
</span>
					</div>

					<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
						<a cat_rm_check_in="<?php echo $_smarty_tpl->tpl_vars['booking_date_from']->value;?>
" cat_rm_check_out="<?php echo $_smarty_tpl->tpl_vars['booking_date_to']->value;?>
" href="" rm_product_id="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" cat_rm_book_nm_days="<?php echo $_smarty_tpl->tpl_vars['num_days']->value;?>
" data-id-product-attribute="0" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['room_v']->value['id_product']);?>
" class="btn btn-default button button-medium ajax_add_to_cart_button pull-right"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Book Now'),$_smarty_tpl ) );?>
</span></a>

						<!-- ################################################ -->

						<div class="rm_qty_cont pull-right clearfix" id="cat_rm_quantity_wanted_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
">
							<span class="qty_txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty.'),$_smarty_tpl ) );?>
:</span>
							<div class="qty_sec_cont row">
								<div class="qty_input_cont row margin-lr-0">
									<input autocomplete="off" type="text" min="1" name="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" id="cat_quantity_wanted_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="text-center form-control cat_quantity_wanted" value="1" id_room_product="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
">
								</div>
								<div class="qty_direction">
									<a href="#" data-room_id_product="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" data-field-qty="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="btn btn-default cat_rm_quantity_up">
										<span>
											<i class="icon-plus"></i>
										</span>
									</a>
									<a href="#" data-field-qty="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="btn btn-default cat_rm_quantity_down">
										<span>
											<i class="icon-minus"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
					<?php }?>


					<!-- <div id="cat_rm_quantity_wanted_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
">
						<a href="#" data-field-qty="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="btn btn-default button-minus cat_rm_quantity_down">
							<span>
								<i class="icon-minus"></i>
							</span>
						</a>
						<input autocomplete="off" type="text" min="1" name="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" id="cat_quantity_wanted_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="text" value="1" />

						<a href="#" data-room_id_product="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" data-field-qty="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="btn btn-default button-plus cat_rm_quantity_up">
							<span><i class="icon-plus"></i></span>
						</a>
					</div> -->


					<!-- ################################################ -->
				</div>
			</div>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<div class="noRoomsAvailAlert">
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No room available for this hotel!'),$_smarty_tpl ) );?>
</span>
	</div>
<?php }
}
}
