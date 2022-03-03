<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\shopping-cart-advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1ae84ae8_22617865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd50259596342121f7c23f7735244ff662960d1e' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\shopping-cart-advanced.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1ae84ae8_22617865 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Summary'),$_smarty_tpl ) );?>
</h2>
<?php ob_start();
if ($_smarty_tpl->tpl_vars['total_discounts']->value != 0) {
echo "1";
} else {
echo "0";
}
$_prefixVariable48=ob_get_clean();
$_smarty_tpl->_assignInScope('total_discounts_num', $_prefixVariable48);
ob_start();
if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value) {
echo "2";
} else {
echo "0";
}
$_prefixVariable49=ob_get_clean();
$_smarty_tpl->_assignInScope('use_show_taxes', $_prefixVariable49);
ob_start();
if ($_smarty_tpl->tpl_vars['total_wrapping']->value != 0) {
echo "1";
} else {
echo "0";
}
$_prefixVariable50=ob_get_clean();
$_smarty_tpl->_assignInScope('total_wrapping_taxes_num', $_prefixVariable50);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBeforeShoppingCartBlock"),$_smarty_tpl ) );?>

<div id="order-detail-content" class="table_block table-responsive">
    <table id="cart_summary" class="table table-bordered <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>stock-management-on<?php } else { ?>stock-management-off<?php }?>">
        <thead>
        <tr>
            <th class="cart_product first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product'),$_smarty_tpl ) );?>
</th>
            <th class="cart_description item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description'),$_smarty_tpl ) );?>
</th>
            <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
                <?php $_smarty_tpl->_assignInScope('col_span_subtotal', '3');?>
                <?php $_smarty_tpl->_assignInScope('col_span_total', '7');?>
                <th class="cart_avail item text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability'),$_smarty_tpl ) );?>
</th>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('col_span_subtotal', '2');?>
                <?php $_smarty_tpl->_assignInScope('col_span_total', '6');?>
            <?php }?>
            <th class="cart_unit item text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price'),$_smarty_tpl ) );?>
</th>
            <th class="cart_quantity item text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty'),$_smarty_tpl ) );?>
</th>
            <th colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="cart_total item text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</th>
        </tr>
        </thead>
        <tfoot>
        <?php $_smarty_tpl->_assignInScope('rowspan_total', 2+$_smarty_tpl->tpl_vars['total_discounts_num']->value+$_smarty_tpl->tpl_vars['total_wrapping_taxes_num']->value);?>

        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value && $_smarty_tpl->tpl_vars['total_tax']->value != 0) {?>
            <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value != 0) {?>
            <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value <= 0 && (!(isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) || !$_smarty_tpl->tpl_vars['isVirtualCart']->value) && $_smarty_tpl->tpl_vars['free_ship']->value) {?>
            <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value != $_smarty_tpl->tpl_vars['total_shipping']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value > 0) {?>
                    <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['total_shipping']->value > 0) {?>
                    <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value > 0) {?>
                <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                <tr class="cart_total_price">
                    <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan_total']->value;?>
" colspan="3" id="cart_voucher" class="cart_voucher">
                        <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                            <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" id="voucher">
                                <fieldset>
                                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers'),$_smarty_tpl ) );?>
</h4>
                                    <input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['discount_name']->value)) && $_smarty_tpl->tpl_vars['discount_name']->value) {
echo $_smarty_tpl->tpl_vars['discount_name']->value;
}?>" />
                                    <input type="hidden" name="submitDiscount" />
                                    <button type="submit" name="submitAddDiscount" class="button btn btn-default button-small"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK'),$_smarty_tpl ) );?>
</span></button>
                                </fieldset>
                            </form>
                            <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                                <p id="title" class="title-offers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:'),$_smarty_tpl ) );?>
</p>
                                <div id="display_cart_vouchers">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayVouchers']->value, 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code'] != '') {?><span class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }
echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
<br />
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>
                        <?php }?>
                    </td>
                    <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products'),$_smarty_tpl ) );
}?></td>
                    <td colspan="2" class="price" id="total_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl ) );?>
</td>
                </tr>
            <?php } else { ?>
                <tr class="cart_total_price">
                    <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan_total']->value;?>
" colspan="2" id="cart_voucher" class="cart_voucher">
                        <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                            <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" id="voucher">
                                <fieldset>
                                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers'),$_smarty_tpl ) );?>
</h4>
                                    <input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['discount_name']->value)) && $_smarty_tpl->tpl_vars['discount_name']->value) {
echo $_smarty_tpl->tpl_vars['discount_name']->value;
}?>" />
                                    <input type="hidden" name="submitDiscount" />
                                    <button type="submit" name="submitAddDiscount" class="button btn btn-default button-small"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK'),$_smarty_tpl ) );?>
</span></button>
                                </fieldset>
                            </form>
                            <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                                <p id="title" class="title-offers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:'),$_smarty_tpl ) );?>
</p>
                                <div id="display_cart_vouchers">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayVouchers']->value, 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code'] != '') {?><span class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }
echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
<br />
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>
                        <?php }?>
                    </td>
                    <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products'),$_smarty_tpl ) );
}?></td>
                    <td colspan="2" class="price" id="total_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products_wt']->value),$_smarty_tpl ) );?>
</td>
                </tr>
            <?php }?>
        <?php } else { ?>
            <tr class="cart_total_price">
                <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan_total']->value;?>
" colspan="2" id="cart_voucher" class="cart_voucher">
                    <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                        <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" id="voucher">
                            <fieldset>
                                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers'),$_smarty_tpl ) );?>
</h4>
                                <input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['discount_name']->value)) && $_smarty_tpl->tpl_vars['discount_name']->value) {
echo $_smarty_tpl->tpl_vars['discount_name']->value;
}?>" />
                                <input type="hidden" name="submitDiscount" />
                                <button type="submit" name="submitAddDiscount" class="button btn btn-default button-small">
                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK'),$_smarty_tpl ) );?>
</span>
                                </button>
                            </fieldset>
                        </form>
                        <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                            <p id="title" class="title-offers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:'),$_smarty_tpl ) );?>
</p>
                            <div id="display_cart_vouchers">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayVouchers']->value, 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code'] != '') {?><span class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }
echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
<br />
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>
                    <?php }?>
                </td>
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products'),$_smarty_tpl ) );?>
</td>
                <td colspan="2" class="price" id="total_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl ) );?>
</td>
            </tr>
        <?php }?>
        <tr<?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value == 0) {?> style="display: none;"<?php }?>>
            <td colspan="3" class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift-wrapping cost'),$_smarty_tpl ) );
}?>
                <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift-wrapping cost'),$_smarty_tpl ) );?>

                <?php }?>
            </td>
            <td colspan="2" class="price-discount price" id="total_wrapping">
                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl ) );?>

                    <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping']->value),$_smarty_tpl ) );?>

                    <?php }?>
                <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl ) );?>

                <?php }?>
            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value <= 0 && (!(isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) || !$_smarty_tpl->tpl_vars['isVirtualCart']->value)) {?>
            <tr class="cart_total_delivery<?php if (!$_smarty_tpl->tpl_vars['opc']->value && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> unvisible<?php }?>">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );?>
</td>
                <td colspan="2" class="price" id="total_shipping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping!'),$_smarty_tpl ) );?>
</td>
            </tr>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value != $_smarty_tpl->tpl_vars['total_shipping']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                    <tr class="cart_total_delivery<?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value <= 0) {?> unvisible<?php }?>">
                        <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );
}?></td>
                        <td colspan="2" class="price" id="total_shipping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value),$_smarty_tpl ) );?>
</td>
                    </tr>
                <?php } else { ?>
                    <tr class="cart_total_delivery<?php if ($_smarty_tpl->tpl_vars['total_shipping']->value <= 0) {?> unvisible<?php }?>">
                        <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );
}?></td>
                        <td colspan="2" class="price" id="total_shipping" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_shipping']->value),$_smarty_tpl ) );?>
</td>
                    </tr>
                <?php }?>
            <?php } else { ?>
                <tr class="cart_total_delivery<?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value <= 0) {?> unvisible<?php }?>">
                    <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );?>
</td>
                    <td colspan="2" class="price" id="total_shipping" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value),$_smarty_tpl ) );?>
</td>
                </tr>
            <?php }?>
        <?php }?>
        <tr class="cart_total_voucher<?php if ($_smarty_tpl->tpl_vars['total_discounts']->value == 0) {?> unvisible<?php }?>">
            <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right">
                <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers (tax incl.)'),$_smarty_tpl ) );?>

                    <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers (tax excl.)'),$_smarty_tpl ) );?>

                    <?php }?>
                <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers'),$_smarty_tpl ) );?>

                <?php }?>
            </td>
            <td colspan="2" class="price-discount price" id="total_discount">
                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {?>
                    <?php $_smarty_tpl->_assignInScope('total_discounts_negative', $_smarty_tpl->tpl_vars['total_discounts']->value*-1);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('total_discounts_negative', $_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1);?>
                <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_discounts_negative']->value),$_smarty_tpl ) );?>

            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value && $_smarty_tpl->tpl_vars['total_tax']->value != 0) {?>
            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value != 0) {?>
                <tr class="cart_total_price">
                    <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );
}?></td>
                    <td colspan="2" class="price" id="total_price_without_tax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl ) );?>
</td>
                </tr>
            <?php }?>
            <tr class="cart_total_tax">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax'),$_smarty_tpl ) );?>
</td>
                <td colspan="2" class="price" id="total_tax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_tax']->value),$_smarty_tpl ) );?>
</td>
            </tr>
        <?php }?>
        <tr class="cart_total_price">
            <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="total_price_container text-right">
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</span>
                <div class="hookDisplayProductPriceBlock-price">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayCartTotalPriceLabel"),$_smarty_tpl ) );?>

                </div>
            </td>
            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                <td colspan="2" class="price" id="total_price_container">
                    <span id="total_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl ) );?>
</span>
                </td>
            <?php } else { ?>
                <td colspan="2" class="price" id="total_price_container">
                    <span id="total_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl ) );?>
</span>
                </td>
            <?php }?>
        </tr>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAfterShoppingCartBlock",'colspan_total'=>$_smarty_tpl->tpl_vars['col_span_total']->value),$_smarty_tpl ) );?>

        </tfoot>
        <tbody>
        <?php $_smarty_tpl->_assignInScope('odd', 0);?>
        <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', false);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->first = !$_smarty_tpl->tpl_vars['product']->index;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_208_saved = $_smarty_tpl->tpl_vars['product'];
?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual'] == 0) {?>
                <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', true);?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
            <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
            <?php $_smarty_tpl->_assignInScope('quantityDisplayed', 0);?>
            <?php $_smarty_tpl->_assignInScope('odd', ($_smarty_tpl->tpl_vars['odd']->value+1)%2);?>
            <?php $_smarty_tpl->_assignInScope('ignoreProductLast', (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) || count($_smarty_tpl->tpl_vars['gift_products']->value));?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first,'noDeleteButton'=>0,'cannotModify'=>0), 0, true);
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']], 'customization', true, 'id_customization');
$_smarty_tpl->tpl_vars['customization']->iteration = 0;
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_customization']->value => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
$_smarty_tpl->tpl_vars['customization']->iteration++;
$_smarty_tpl->tpl_vars['customization']->last = $_smarty_tpl->tpl_vars['customization']->iteration === $_smarty_tpl->tpl_vars['customization']->total;
$__foreach_customization_209_saved = $_smarty_tpl->tpl_vars['customization'];
?>
                    <tr
                            id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
"
                            class="product_customization_for_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
if ($_smarty_tpl->tpl_vars['odd']->value) {?> odd<?php } else { ?> even<?php }?> customization alternate_item <?php if ($_smarty_tpl->tpl_vars['product']->last && $_smarty_tpl->tpl_vars['customization']->last && !count($_smarty_tpl->tpl_vars['gift_products']->value)) {?>last_item<?php }?>">
                        <td></td>
                        <td colspan="3">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['datas'], 'custom_data', false, 'type');
$_smarty_tpl->tpl_vars['custom_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['custom_data']->value) {
$_smarty_tpl->tpl_vars['custom_data']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value) {?>
                                    <div class="customizationUploaded">
                                        <ul class="customizationUploaded">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_data']->value, 'picture');
$_smarty_tpl->tpl_vars['picture']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->do_else = false;
?>
                                                <li><img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;
echo $_smarty_tpl->tpl_vars['picture']->value['value'];?>
_small" alt="" class="customizationUploaded" /></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value) {?>
                                    <ul class="typedText">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_data']->value, 'textField');
$_smarty_tpl->tpl_vars['textField']->index = -1;
$_smarty_tpl->tpl_vars['textField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['textField']->value) {
$_smarty_tpl->tpl_vars['textField']->do_else = false;
$_smarty_tpl->tpl_vars['textField']->index++;
$__foreach_textField_212_saved = $_smarty_tpl->tpl_vars['textField'];
?>
                                            <li>
                                                <?php if ($_smarty_tpl->tpl_vars['textField']->value['name']) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['textField']->value['name'];?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text #'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['textField']->index+1;?>

                                                <?php }?>
                                                : <?php echo $_smarty_tpl->tpl_vars['textField']->value['value'];?>

                                            </li>
                                        <?php
$_smarty_tpl->tpl_vars['textField'] = $__foreach_textField_212_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </td>
                        <td class="cart_quantity" colspan="1">
                            <span><?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value == 0 && (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {
echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);
} else {
echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;
}?></span>
                        </td>

                        <td>
                        </td>
                    </tr>
                    <?php $_smarty_tpl->_assignInScope('quantityDisplayed', $_smarty_tpl->tpl_vars['quantityDisplayed']->value+$_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
                <?php
$_smarty_tpl->tpl_vars['customization'] = $__foreach_customization_209_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first,'noDeleteButton'=>0,'cannotModify'=>0), 0, true);
}?>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_208_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->_assignInScope('last_was_odd', $_smarty_tpl->tpl_vars['product']->iteration%2);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gift_products']->value, 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->first = !$_smarty_tpl->tpl_vars['product']->index;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_213_saved = $_smarty_tpl->tpl_vars['product'];
?>
            <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
            <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
            <?php $_smarty_tpl->_assignInScope('quantityDisplayed', 0);?>
            <?php $_smarty_tpl->_assignInScope('odd', ($_smarty_tpl->tpl_vars['product']->iteration+$_smarty_tpl->tpl_vars['last_was_odd']->value)%2);?>
            <?php $_smarty_tpl->_assignInScope('ignoreProductLast', (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])));?>
            <?php $_smarty_tpl->_assignInScope('cannotModify', 1);?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first,'noDeleteButton'=>0,'cannotModify'=>0), 0, true);
?>
        <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_213_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        <?php if (sizeof($_smarty_tpl->tpl_vars['discounts']->value)) {?>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount', true);
$_smarty_tpl->tpl_vars['discount']->iteration = 0;
$_smarty_tpl->tpl_vars['discount']->index = -1;
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
$_smarty_tpl->tpl_vars['discount']->iteration++;
$_smarty_tpl->tpl_vars['discount']->index++;
$_smarty_tpl->tpl_vars['discount']->first = !$_smarty_tpl->tpl_vars['discount']->index;
$_smarty_tpl->tpl_vars['discount']->last = $_smarty_tpl->tpl_vars['discount']->iteration === $_smarty_tpl->tpl_vars['discount']->total;
$__foreach_discount_214_saved = $_smarty_tpl->tpl_vars['discount'];
?>
                <?php if ((float)$_smarty_tpl->tpl_vars['discount']->value['value_real'] == 0) {?>
                    <?php continue 1;?>
                <?php }?>
                <tr class="cart_discount <?php if ($_smarty_tpl->tpl_vars['discount']->last) {?>last_item<?php } elseif ($_smarty_tpl->tpl_vars['discount']->first) {?>first_item<?php } else { ?>item<?php }?>" id="cart_discount_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">
                    <td class="cart_discount_name" colspan="<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>3<?php } else { ?>2<?php }?>"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</td>
                    <td class="cart_discount_price">
								<span class="price-discount">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl ) );
}?>
								</span>
                    </td>
                    <td class="cart_discount_delete">1</td>
                    <td class="price_discount_del text-center">
                        <?php if (strlen($_smarty_tpl->tpl_vars['discount']->value['code'])) {?>
                            <a
                                    href="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>?deleteDiscount=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
"
                                    class="price_discount_delete"
                                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
">
                                <i class="icon-trash"></i>
                            </a>
                        <?php }?>
                    </td>
                    <td class="cart_discount_price">
                        <span class="price-discount price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl ) );
}?></span>
                    </td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['discount'] = $__foreach_discount_214_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        <?php }?>
    </table>
</div> <!-- end order-detail-content -->



<p class="cart_navigation clearfix">

    <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
        <?php $_smarty_tpl->_assignInScope('back_link', $_smarty_tpl->tpl_vars['link']->value->getPageLink('index'));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('back_link', $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,"step=2"));?>
    <?php }?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>
" class="button-exclusive btn btn-default">
        <i class="icon-chevron-left"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping'),$_smarty_tpl ) );?>

    </a>
    <button data-show-if-js="" style="" id="confirmOrder" type="button" class="button btn btn-default standard-checkout button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order With Obligation To Pay'),$_smarty_tpl ) );?>
</span></button>
</p>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('deliveryAddress'=>intval($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)),$_smarty_tpl ) );?>

<?php }
}
