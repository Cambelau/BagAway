<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:25
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\order-carrier-opc-advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b19a28cc4_04632670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e191d06d06134f318f39a5fe98256ac6eb7883b' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\order-carrier-opc-advanced.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b19a28cc4_04632670 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="order_carrier_content box">
    <?php if ((isset($_smarty_tpl->tpl_vars['virtual_cart']->value)) && $_smarty_tpl->tpl_vars['virtual_cart']->value) {?>
        <input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
    <?php } else { ?>
        <div id="HOOK_BEFORECARRIER">
            <?php if ((isset($_smarty_tpl->tpl_vars['carriers']->value)) && (isset($_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value;?>

            <?php }?>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) && $_smarty_tpl->tpl_vars['isVirtualCart']->value) {?>
            <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carrier is needed for this order.'),$_smarty_tpl ) );?>
</p>
        <?php } else { ?>
            <div class="delivery_options_address">
                <?php if ((isset($_smarty_tpl->tpl_vars['delivery_option_list']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delivery_option_list']->value, 'option_list', false, 'id_address');
$_smarty_tpl->tpl_vars['option_list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_address']->value => $_smarty_tpl->tpl_vars['option_list']->value) {
$_smarty_tpl->tpl_vars['option_list']->do_else = false;
?>
                        <p class="carrier_title">
                            <?php if ((isset($_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value]))) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a shipping option for this address:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value]->alias;?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a shipping option'),$_smarty_tpl ) );?>

                            <?php }?>
                        </p>
                        <div class="delivery_options">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option_list']->value, 'option', false, 'key');
$_smarty_tpl->tpl_vars['option']->index = -1;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_131_saved = $_smarty_tpl->tpl_vars['option'];
?>
                                <div class="delivery_option <?php if (($_smarty_tpl->tpl_vars['option']->index%2)) {?>alternate_<?php }?>item">
                                    <div>
                                        <table class="resume table table-bordered<?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?> hide<?php }?>">
                                            <tr>
                                                <td class="delivery_option_radio">
                                                    <input id="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
" class="delivery_option_radio" type="radio" name="delivery_option[<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
]" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-id_address="<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])) && $_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value] == $_smarty_tpl->tpl_vars['key']->value) {?> checked="checked"<?php }?> />
                                                </td>
                                                <td class="delivery_option_logo">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['carrier_list'], 'carrier', true);
$_smarty_tpl->tpl_vars['carrier']->iteration = 0;
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
$_smarty_tpl->tpl_vars['carrier']->iteration++;
$_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
$__foreach_carrier_132_saved = $_smarty_tpl->tpl_vars['carrier'];
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                                                            <img class="order_carrier_logo" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                                                        <?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                            <?php if (!$_smarty_tpl->tpl_vars['carrier']->last) {?> - <?php }?>
                                                        <?php }?>
                                                    <?php
$_smarty_tpl->tpl_vars['carrier'] = $__foreach_carrier_132_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['carrier_list'], 'carrier', true);
$_smarty_tpl->tpl_vars['carrier']->iteration = 0;
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
$_smarty_tpl->tpl_vars['carrier']->iteration++;
$_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
$__foreach_carrier_133_saved = $_smarty_tpl->tpl_vars['carrier'];
?>
                                                            <strong><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</strong>
                                                        <?php
$_smarty_tpl->tpl_vars['carrier'] = $__foreach_carrier_133_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang]))) {?>
                                                            <br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery time:'),$_smarty_tpl ) );?>
&nbsp;<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                        <?php }?>
                                                    <?php }?>
                                                    <?php if (count($_smarty_tpl->tpl_vars['option_list']->value) > 1) {?>
                                                        <br />
                                                        <?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_grade']) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
                                                                <span class="best_grade best_grade_price best_grade_speed"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The best price and speed'),$_smarty_tpl ) );?>
</span>
                                                            <?php } else { ?>
                                                                <span class="best_grade best_grade_speed"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The fastest'),$_smarty_tpl ) );?>
</span>
                                                            <?php }?>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
                                                            <span class="best_grade best_grade_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The best price'),$_smarty_tpl ) );?>
</span>
                                                        <?php }?>
                                                    <?php }?>
                                                </td>
                                                <td class="delivery_option_price">
                                                    <div class="delivery_option_price">
                                                        <?php if ($_smarty_tpl->tpl_vars['option']->value['total_price_with_tax'] && !$_smarty_tpl->tpl_vars['option']->value['is_free'] && (!(isset($_smarty_tpl->tpl_vars['free_shipping']->value)) || ((isset($_smarty_tpl->tpl_vars['free_shipping']->value)) && !$_smarty_tpl->tpl_vars['free_shipping']->value))) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value == 1) {?>
                                                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
}?>
                                                                <?php } else { ?>
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?>
                                                                <?php }?>
                                                            <?php } else { ?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl ) );?>

                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free'),$_smarty_tpl ) );?>

                                                        <?php }?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                            <table class="delivery_option_carrier<?php if ((isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])) && $_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value] == $_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?> resume table table-bordered<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?> hide<?php }?>">
                                                <tr>
                                                    <?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                        <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['option']->value['carrier_list']);?>
" class="delivery_option_radio first_item">
                                                            <input id="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
" class="delivery_option_radio" type="radio" name="delivery_option[<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
]" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-id_address="<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])) && $_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value] == $_smarty_tpl->tpl_vars['key']->value) {?> checked="checked"<?php }?> />
                                                        </td>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_assignInScope('first', current($_smarty_tpl->tpl_vars['option']->value['carrier_list']));?>
                                                    <td class="delivery_option_logo<?php if ($_smarty_tpl->tpl_vars['first']->value['product_list'][0]['carrier_list'][0] == 0) {?> hide<?php }?>">
                                                        <?php if ($_smarty_tpl->tpl_vars['first']->value['logo']) {?>
                                                            <img class="order_carrier_logo" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['first']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['first']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                                                        <?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['first']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                        <?php }?>
                                                    </td>
                                                    <td class="<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>first_item<?php }
if ($_smarty_tpl->tpl_vars['first']->value['product_list'][0]['carrier_list'][0] == 0) {?> hide<?php }?>">
                                                        <input type="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['first']->value['instance']->id);?>
" name="id_carrier" />
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['first']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang]))) {?>
                                                            <i class="icon-info-sign"></i>
                                                            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['first']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&nbsp;<?php if (count($_smarty_tpl->tpl_vars['first']->value['product_list']) <= 1) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For this product:'),$_smarty_tpl ) );
} else { ?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For these products:'),$_smarty_tpl ) );
}?>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first']->value['product_list'], 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_134_saved = $_smarty_tpl->tpl_vars['product'];
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->index == 4) {?>
                                                                    <acronym title="
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->index >= 4) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>">&hellip;</acronym>)<?php }
} else {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>)<?php }
}?>
                                                            <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_134_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php }?>
                                                    </td>
                                                    <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['option']->value['carrier_list']);?>
" class="delivery_option_price">
                                                        <div class="delivery_option_price">
                                                            <?php if ($_smarty_tpl->tpl_vars['option']->value['total_price_with_tax'] && !$_smarty_tpl->tpl_vars['option']->value['is_free'] && (!(isset($_smarty_tpl->tpl_vars['free_shipping']->value)) || ((isset($_smarty_tpl->tpl_vars['free_shipping']->value)) && !$_smarty_tpl->tpl_vars['free_shipping']->value))) {?>
                                                                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value == 1) {?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
}?>
                                                                    <?php } else { ?>
                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl ) );?>

                                                                <?php }?>
                                                            <?php } else { ?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free'),$_smarty_tpl ) );?>

                                                            <?php }?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['carrier_list'], 'carrier', true);
$_smarty_tpl->tpl_vars['carrier']->iteration = 0;
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
$_smarty_tpl->tpl_vars['carrier']->iteration++;
$_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
$__foreach_carrier_135_saved = $_smarty_tpl->tpl_vars['carrier'];
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['carrier']->iteration != 1) {?>
                                                        <tr>
                                                            <td class="delivery_option_logo<?php if ($_smarty_tpl->tpl_vars['carrier']->value['product_list'][0]['carrier_list'][0] == 0) {?> hide<?php }?>">
                                                                <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                                                                    <img class="order_carrier_logo" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                                                                <?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                                                    <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                                                <?php }?>
                                                            </td>
                                                            <td class="<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?> first_item<?php }
if ($_smarty_tpl->tpl_vars['carrier']->value['product_list'][0]['carrier_list'][0] == 0) {?> hide<?php }?>">
                                                                <input type="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['first']->value['instance']->id);?>
" name="id_carrier" />
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang]))) {?>
                                                                    <i class="icon-info-sign"></i>
                                                                    <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&nbsp;<?php if (count($_smarty_tpl->tpl_vars['first']->value['product_list']) <= 1) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For this product:'),$_smarty_tpl ) );
} else { ?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For these products:'),$_smarty_tpl ) );
}?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carrier']->value['product_list'], 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_136_saved = $_smarty_tpl->tpl_vars['product'];
?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['product']->index == 4) {?>
                                                                            <acronym title="
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['product']->index >= 4) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>">&hellip;</acronym>)<?php }
} else {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>)<?php }
}?>
                                                                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_136_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                <?php }?>
                                                            </td>
                                                        </tr>
                                                    <?php }?>
                                                <?php
$_smarty_tpl->tpl_vars['carrier'] = $__foreach_carrier_135_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </table>
                                        <?php }?>
                                    </div>
                                </div> <!-- end delivery_option -->
                            <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_131_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div> <!-- end delivery_options -->
                        <div class="hook_extracarrier" id="HOOK_EXTRACARRIER_<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
">
                            <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value)) && (isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value]))) {
echo $_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value];
}?>
                        </div>
                        <?php
}
if ($_smarty_tpl->tpl_vars['option_list']->do_else) {
?>
                        <?php $_smarty_tpl->_assignInScope('errors', explode(' ',''));?>
                        <p class="alert alert-warning" id="noCarrierWarning">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value->getDeliveryAddressesWithoutCarriers(true,$_smarty_tpl->tpl_vars['errors']->value), 'address', true);
$_smarty_tpl->tpl_vars['address']->iteration = 0;
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
$_smarty_tpl->tpl_vars['address']->iteration++;
$_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
$__foreach_address_137_saved = $_smarty_tpl->tpl_vars['address'];
?>
                                <?php if (empty($_smarty_tpl->tpl_vars['address']->value->alias)) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carriers available.'),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('flag_error_message', false);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['error']->value == Carrier::SHIPPING_WEIGHT_EXCEPTION) {?>
                                            <?php $_smarty_tpl->_assignInScope('flag_error_message', true);?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product selection cannot be delivered by the available carrier(s): it is too heavy. Please amend your cart to lower its weight.'),$_smarty_tpl ) );?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == Carrier::SHIPPING_PRICE_EXCEPTION) {?>
                                            <?php $_smarty_tpl->_assignInScope('flag_error_message', true);?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product selection cannot be delivered by the available carrier(s). Please amend your cart.'),$_smarty_tpl ) );?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == Carrier::SHIPPING_SIZE_EXCEPTION) {?>
                                            <?php $_smarty_tpl->_assignInScope('flag_error_message', true);?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product selection cannot be delivered by the available carrier(s): its size does not fit. Please amend your cart to reduce its size.'),$_smarty_tpl ) );?>

                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if (!$_smarty_tpl->tpl_vars['flag_error_message']->value) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carriers available for the address "%s".','sprintf'=>$_smarty_tpl->tpl_vars['address']->value->alias),$_smarty_tpl ) );?>

                                    <?php }?>
                                <?php }?>
                                <?php if (!$_smarty_tpl->tpl_vars['address']->last) {?>
                                    <br />
                                <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['address'] = $__foreach_address_137_saved;
}
if ($_smarty_tpl->tpl_vars['address']->do_else) {
?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carriers available.'),$_smarty_tpl ) );?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </p>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div> <!-- end delivery_options_address -->
            <div id="extra_carrier" style="display: none;"></div>
            <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
                <p class="carrier_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave a message'),$_smarty_tpl ) );?>
</p>
                <div>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl ) );?>
</p>
        <textarea class="form-control" cols="120" rows="2" name="message" id="message"><?php if ((isset($_smarty_tpl->tpl_vars['oldMessage']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['oldMessage']->value, ENT_QUOTES, 'UTF-8', true);
}?></textarea>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value) {?>
                <p class="carrier_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recyclable Packaging'),$_smarty_tpl ) );?>
</p>
                <div class="checkbox recyclable">
                    <label for="recyclable">
                        <input type="checkbox" name="recyclable" id="recyclable" value="1"<?php if ($_smarty_tpl->tpl_vars['recyclable']->value == 1) {?> checked="checked"<?php }?> />
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I would like to receive my order in recycled packaging.'),$_smarty_tpl ) );?>

                    </label>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['giftAllowed']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
                    <hr style="" />
                <?php }?>
                <p class="carrier_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift'),$_smarty_tpl ) );?>
</p>
                <p class="checkbox gift">
                    <input type="checkbox" name="gift" id="gift" value="1"<?php if ($_smarty_tpl->tpl_vars['cart']->value->gift == 1) {?> checked="checked"<?php }?> />
                    <label for="gift">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I would like my order to be gift wrapped.'),$_smarty_tpl ) );?>

                        <?php if ($_smarty_tpl->tpl_vars['gift_wrapping_price']->value > 0) {?>
                            &nbsp;<i>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional cost of'),$_smarty_tpl ) );?>

                            <span class="price" id="gift-price">
                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc_cost']->value),$_smarty_tpl ) );?>

                    <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_cost']->value),$_smarty_tpl ) );?>

                    <?php }?>
                </span>
                            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );?>

                                <?php }?>
                            <?php }?>)
                        </i>
                        <?php }?>
                    </label>
                </p>
                <p id="gift_div">
                    <label for="gift_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you\'d like, you can add a note to the gift:'),$_smarty_tpl ) );?>
</label>
                    <textarea rows="2" cols="120" id="gift_message" class="form-control" name="gift_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->gift_message, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </p>
            <?php }?>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['conditions']->value && $_smarty_tpl->tpl_vars['cms_id']->value && !$_smarty_tpl->tpl_vars['advanced_payment_api']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
            <hr style="" />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['override_tos_display']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['override_tos_display']->value;?>

        <?php } else { ?>
            <div class="box">
                <p class="checkbox">
                    <input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
                    <label for="cgv"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl ) );?>
</label>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Read the Terms of Service)'),$_smarty_tpl ) );?>
</a>
                </p>
            </div>
        <?php }?>
    <?php }?>
</div> <!-- end delivery_options_address -->
</div> <!-- end carrier_area -->
<?php if ($_smarty_tpl->tpl_vars['conditions']->value) {
$_block_plugin83 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin83, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'msg_order_carrier'));
$_block_repeat=true;
echo $_block_plugin83->addJsDefL(array('name'=>'msg_order_carrier'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must agree to the terms of service before continuing.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin83->addJsDefL(array('name'=>'msg_order_carrier'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
