<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\order-payment-classic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1a3a83c1_13673042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e47bb4af150cc6ffa8027549639d0c1fbc80e1d2' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\order-payment-classic.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./shopping-cart-product-line.tpl' => 1,
  ),
),false)) {
function content_62209b1a3a83c1_13673042 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="paiement_block">
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-opc-advanced-payment-option.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <div id="tc_cont">
        <p class="checkbox">
            <input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
            <label for="cgv" id="tc_txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl ) );?>
</label>
            <a id="tc_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Read the Terms of Service)'),$_smarty_tpl ) );?>
</a>
        </p>
    </div>

    <p class="block-small-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PAYMENT RESOURCE'),$_smarty_tpl ) );?>
</p>
    <div id="HOOK_TOP_PAYMENT"><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP_PAYMENT']->value;?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['HOOK_PAYMENT']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
            <div id="order-detail-content" class="table_block table-responsive">
                <table id="cart_summary" class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="cart_product first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product'),$_smarty_tpl ) );?>
</th>
                        <th class="cart_description item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description'),$_smarty_tpl ) );?>
</th>
                        <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
                            <th class="cart_availability item text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability'),$_smarty_tpl ) );?>
</th>
                        <?php }?>
                        <th class="cart_unit item text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price'),$_smarty_tpl ) );?>
</th>
                        <th class="cart_quantity item text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty'),$_smarty_tpl ) );?>
</th>
                        <th class="cart_total last_item text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                            <tr class="cart_total_price">
                                <td colspan="4" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products'),$_smarty_tpl ) );
}?></td>
                                <td colspan="2" class="price" id="total_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl ) );?>
</td>
                            </tr>
                        <?php } else { ?>
                            <tr class="cart_total_price">
                                <td colspan="4" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
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
                            <td colspan="4" class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products'),$_smarty_tpl ) );?>
</td>
                            <td colspan="2" class="price" id="total_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl ) );?>
</td>
                        </tr>
                    <?php }?>
                    <tr class="cart_total_voucher" <?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value == 0) {?>style="display:none"<?php }?>>
                        <td colspan="4" class="text-right">
                            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping (tax excl.):'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping cost:'),$_smarty_tpl ) );
}?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping cost:'),$_smarty_tpl ) );
}?>
                                <?php }?>
                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping cost:'),$_smarty_tpl ) );?>

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
                    <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value <= 0 && (!(isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) || !$_smarty_tpl->tpl_vars['isVirtualCart']->value) && $_smarty_tpl->tpl_vars['free_ship']->value) {?>
                        <tr class="cart_total_delivery">
                            <td colspan="4" class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );?>
</td>
                            <td colspan="2" class="price" id="total_shipping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free Shipping!'),$_smarty_tpl ) );?>
</td>
                        </tr>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value != $_smarty_tpl->tpl_vars['total_shipping']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                <tr class="cart_total_delivery" <?php if ($_smarty_tpl->tpl_vars['shippingCost']->value <= 0) {?> style="display:none"<?php }?>>
                                    <td colspan="4" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );
}?></td>
                                    <td colspan="2" class="price" id="total_shipping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['shippingCostTaxExc']->value),$_smarty_tpl ) );?>
</td>
                                </tr>
                            <?php } else { ?>
                                <tr class="cart_total_delivery"<?php if ($_smarty_tpl->tpl_vars['shippingCost']->value <= 0) {?> style="display:none"<?php }?>>
                                    <td colspan="4" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );
}?></td>
                                    <td colspan="2" class="price" id="total_shipping" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['shippingCost']->value),$_smarty_tpl ) );?>
</td>
                                </tr>
                            <?php }?>
                        <?php } else { ?>
                            <tr class="cart_total_delivery"<?php if ($_smarty_tpl->tpl_vars['shippingCost']->value <= 0) {?> style="display:none"<?php }?>>
                                <td colspan="4" class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );?>
</td>
                                <td colspan="2" class="price" id="total_shipping" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['shippingCostTaxExc']->value),$_smarty_tpl ) );?>
</td>
                            </tr>
                        <?php }?>
                    <?php }?>
                    <tr class="cart_total_voucher" <?php if ($_smarty_tpl->tpl_vars['total_discounts']->value == 0) {?>style="display:none"<?php }?>>
                        <td colspan="4" class="text-right">
                            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value && $_smarty_tpl->tpl_vars['show_taxes']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers'),$_smarty_tpl ) );
}?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value && $_smarty_tpl->tpl_vars['show_taxes']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers'),$_smarty_tpl ) );
}?>
                                <?php }?>
                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers'),$_smarty_tpl ) );?>

                            <?php }?>
                        </td>
                        <td colspan="2" class="price-discount price" id="total_discount">
                            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_discounts']->value*-1),$_smarty_tpl ) );?>

                                <?php }?>
                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1),$_smarty_tpl ) );?>

                            <?php }?>
                        </td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['total_tax']->value != 0 && $_smarty_tpl->tpl_vars['show_taxes']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value != 0) {?>
                                <tr class="cart_total_price">
                                    <td colspan="4" class="text-right"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );
}?></td>
                                    <td colspan="2" class="price" id="total_price_without_tax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl ) );?>
</td>
                                </tr>
                            <?php }?>
                            <tr class="cart_total_tax">
                                <td colspan="4" class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax'),$_smarty_tpl ) );?>
</td>
                                <td colspan="2" class="price" id="total_tax" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_tax']->value),$_smarty_tpl ) );?>
</td>
                            </tr>
                        <?php }?>
                        <tr class="cart_total_price">
                            <td colspan="4" class="total_price_container text-right"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</span></td>
                            <td colspan="2" class="price" id="total_price_container">
                                <span id="total_price" data-selenium-total-price="<?php echo $_smarty_tpl->tpl_vars['total_price']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl ) );?>
</span>
                            </td>
                        </tr>
                    <?php } else { ?>
                        <tr class="cart_total_price">
                            <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                                <td colspan="2" id="cart_voucher" class="cart_voucher">
                                    <div id="cart_voucher" class="table_block">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['errors_discount']->value)) && $_smarty_tpl->tpl_vars['errors_discount']->value) {?>
                                            <ul class="alert alert-danger">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors_discount']->value, 'error', false, 'k');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                                                    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                                            <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" id="voucher">
                                                <fieldset>
                                                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers'),$_smarty_tpl ) );?>
</h4>
                                                    <input type="text" id="discount_name" class="form-control" name="discount_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['discount_name']->value)) && $_smarty_tpl->tpl_vars['discount_name']->value) {
echo $_smarty_tpl->tpl_vars['discount_name']->value;
}?>" />
                                                    <input type="hidden" name="submitDiscount" />
                                                    <button type="submit" name="submitAddDiscount" class="button btn btn-default button-small"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ok'),$_smarty_tpl ) );?>
</span></button>
                                                    <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                                                        <p id="title" class="title_offers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our offers:'),$_smarty_tpl ) );?>
</p>
                                                        <div id="display_cart_vouchers">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayVouchers']->value, 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                                                                <span onclick="$('#discount_name').val('<?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
');return false;" class="voucher_name"><?php echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
</span> - <?php echo $_smarty_tpl->tpl_vars['voucher']->value['description'];?>
 <br />
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </div>
                                                    <?php }?>
                                                </fieldset>
                                            </form>
                                        <?php }?>
                                    </div>
                                </td>
                            <?php }?>
                            <td colspan="<?php if (!$_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>4<?php } else { ?>2<?php }?>" class="text-right total_price_container">
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</span>
                            </td>
                            <td colspan="2" class="price total_price_container" id="total_price_container">
                                <span id="total_price" data-selenium-total-price="<?php echo $_smarty_tpl->tpl_vars['total_price_without_tax']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl ) );?>
</span>
                            </td>
                        </tr>
                    <?php }?>
                    </tfoot>

                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', true, NULL, 'productLoop', array (
));
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->first = !$_smarty_tpl->tpl_vars['product']->index;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_175_saved = $_smarty_tpl->tpl_vars['product'];
?>
                        <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
                        <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
                        <?php $_smarty_tpl->_assignInScope('quantityDisplayed', 0);?>
                        <?php $_smarty_tpl->_assignInScope('cannotModify', 1);?>
                        <?php $_smarty_tpl->_assignInScope('odd', $_smarty_tpl->tpl_vars['product']->iteration%2);?>
                        <?php $_smarty_tpl->_assignInScope('noDeleteButton', 1);?>

                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                                <?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']], 'customization', false, 'id_customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_customization']->value => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
                                <tr id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
" class="alternate_item cart_item">
                                    <td colspan="4">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['datas'], 'datas', false, 'type');
$_smarty_tpl->tpl_vars['datas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['datas']->value) {
$_smarty_tpl->tpl_vars['datas']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value) {?>
                                                <div class="customizationUploaded">
                                                    <ul class="customizationUploaded">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'picture');
$_smarty_tpl->tpl_vars['picture']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->do_else = false;
?>
                                                            <li>
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;
echo $_smarty_tpl->tpl_vars['picture']->value['value'];?>
_small" alt="" class="customizationUploaded" />
                                                            </li>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </ul>
                                                </div>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value) {?>
                                                <ul class="typedText">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'textField', false, NULL, 'typedText', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['textField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['textField']->value) {
$_smarty_tpl->tpl_vars['textField']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_typedText']->value['index']++;
?>
                                                        <li>
                                                            <?php if ($_smarty_tpl->tpl_vars['textField']->value['name']) {?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s:','sprintf'=>$_smarty_tpl->tpl_vars['textField']->value['name']),$_smarty_tpl ) );?>

                                                            <?php } else { ?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text #%s:','sprintf'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_typedText']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_typedText']->value['index'] : null)+1),$_smarty_tpl ) );?>

                                                            <?php }?>
                                                            <?php echo $_smarty_tpl->tpl_vars['textField']->value['value'];?>

                                                        </li>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </ul>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </td>
                                    <td class="cart_quantity text-center">
                                        <?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>

                                    </td>
                                    <td class="cart_total"></td>
                                </tr>
                                <?php $_smarty_tpl->_assignInScope('quantityDisplayed', $_smarty_tpl->tpl_vars['quantityDisplayed']->value+$_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_175_saved;
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
$__foreach_product_180_saved = $_smarty_tpl->tpl_vars['product'];
?>
                        <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
                        <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
                        <?php $_smarty_tpl->_assignInScope('quantityDisplayed', 0);?>
                        <?php $_smarty_tpl->_assignInScope('odd', ($_smarty_tpl->tpl_vars['product']->iteration+$_smarty_tpl->tpl_vars['last_was_odd']->value)%2);?>
                        <?php $_smarty_tpl->_assignInScope('ignoreProductLast', (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])));?>
                        <?php $_smarty_tpl->_assignInScope('cannotModify', 1);?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first), 0, true);
?>
                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_180_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>

                    <?php if (count($_smarty_tpl->tpl_vars['discounts']->value)) {?>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount', false, NULL, 'discountLoop', array (
  'last' => true,
  'first' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['total'];
?>
                            <?php if ((float)$_smarty_tpl->tpl_vars['discount']->value['value_real'] == 0) {?>
                                <?php continue 1;?>
                            <?php }?>
                            <tr class="cart_discount <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['last'] : null)) {?>last_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_discountLoop']->value['first'] : null)) {?>first_item<?php } else { ?>item<?php }?>" id="cart_discount_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">
                                <td class="cart_discount_name" colspan="<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>3<?php } else { ?>2<?php }?>"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</td>
                                <td class="cart_discount_price">
													<span class="price-discount">
														<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real'] > 0) {?>
                                                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl ) );?>

                                                            <?php } else { ?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl ) );?>

                                                            <?php }?>
                                                        <?php }?>
													</span>
                                </td>
                                <td class="cart_discount_delete">1</td>
                                <td class="cart_discount_price">
													<span class="price-discount">
														<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real'] > 0) {?>
                                                            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl ) );?>

                                                            <?php } else { ?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl ) );?>

                                                            <?php }?>
                                                        <?php }?>
													</span>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    <?php }?>
                </table>
            </div> <!-- end order-detail-content -->
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
            <div id="opc_payment_methods-content">
        <?php }?>
        <div id="HOOK_PAYMENT">
            <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT']->value;?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
            </div> <!-- end opc_payment_methods-content -->
        <?php }?>
    <?php } else { ?>
        <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No payment modules have been installed.'),$_smarty_tpl ) );?>
</p>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
    <p class="cart_navigation clearfix">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,"step=2"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>
" class="button-exclusive btn btn-default">
            <i class="icon-chevron-left"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping'),$_smarty_tpl ) );?>

        </a>
    </p>
    <?php } else { ?>
</div> <!-- end opc_payment_methods -->
<?php }?>
</div> <!-- end HOOK_TOP_PAYMENT -->
<?php }
}
