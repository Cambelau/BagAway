<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:25
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\order-address-advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b19379491_11903342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e6c3b6ce3ec779170c47d6920d84af72daea75d' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\order-address-advanced.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b19379491_11903342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\tools\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_assignInScope('have_non_virtual_products', false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual'] == 0) {?>
        <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', true);?>
        <?php break 1;?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address(es) Details'),$_smarty_tpl ) );?>
</h2>
<?php if (((!empty($_smarty_tpl->tpl_vars['delivery_option']->value) && (!(isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) || !$_smarty_tpl->tpl_vars['isVirtualCart']->value)) || $_smarty_tpl->tpl_vars['delivery']->value->id || $_smarty_tpl->tpl_vars['invoice']->value->id)) {?>
    <div class="order_delivery clearfix row">
        <?php if (!(isset($_smarty_tpl->tpl_vars['formattedAddresses']->value)) || (count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice']) == 0 && count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery']) == 0) || (count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice']['formated']) == 0 && count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery']['formated']) == 0)) {?>
            <?php if ($_smarty_tpl->tpl_vars['delivery']->value->id) {?>
                <div class="col-xs-12 col-sm-6"<?php if (!$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
                    <ul id="delivery_address" class="address item box">
                        <li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['delivery']->value->alias;?>
)</span></h3></li>
                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->company) {?><li class="address_company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
                        <li class="address_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
                        <li class="address_address1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
                        <li class="address_city"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
                        <li class="address_country"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['delivery']->value->id_state) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_state']->value->name, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
                    </ul>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['invoice']->value->id) {?>
                <div class="col-xs-12 col-sm-6">
                    <ul id="invoice_address" class="address alternate_item box">
                        <li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['invoice']->value->alias;?>
)</span></h3></li>
                        <?php if ($_smarty_tpl->tpl_vars['invoice']->value->company) {?><li class="address_company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
                        <li class="address_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
                        <li class="address_address1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
                        <?php if ($_smarty_tpl->tpl_vars['invoice']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
                        <li class="address_city"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
                        <li class="address_country"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['invoice']->value->id_state) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->name, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
                    </ul>
                </div>
            <?php }?>
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formattedAddresses']->value, 'address', true, 'k');
$_smarty_tpl->tpl_vars['address']->iteration = 0;
$_smarty_tpl->tpl_vars['address']->index = -1;
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
$_smarty_tpl->tpl_vars['address']->iteration++;
$_smarty_tpl->tpl_vars['address']->index++;
$_smarty_tpl->tpl_vars['address']->first = !$_smarty_tpl->tpl_vars['address']->index;
$_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
$__foreach_address_115_saved = $_smarty_tpl->tpl_vars['address'];
?>
                <div class="col-xs-12 col-sm-6"<?php if ($_smarty_tpl->tpl_vars['k']->value == 'delivery' && !$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
                    <ul class="address <?php if ($_smarty_tpl->tpl_vars['address']->last) {?>last_item<?php } elseif ($_smarty_tpl->tpl_vars['address']->first) {?>first_item<?php }?> <?php if ($_smarty_tpl->tpl_vars['address']->index%2) {?>alternate_item<?php } else { ?>item<?php }?> box">
                        <li>
                            <h3 class="page-subheading">
                                <?php if ($_smarty_tpl->tpl_vars['k']->value == 'invoice') {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['k']->value == 'delivery' && $_smarty_tpl->tpl_vars['delivery']->value->id) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>

                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['address']->value['object']['alias']))) {?>
                                    <span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
)</span>
                                <?php }?>
                            </h3>
                        </li>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value['ordered'], 'pattern');
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('addressKey', explode(" ",$_smarty_tpl->tpl_vars['pattern']->value));?>
                            <?php $_smarty_tpl->_assignInScope('addedli', false);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addressKey']->value, 'key', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
                                <?php $_smarty_tpl->_assignInScope('key_str', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['key']->value,AddressFormat::_CLEANING_REGEX_,''));?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])) && !empty($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])) {?>
                                    <?php if ((!$_smarty_tpl->tpl_vars['addedli']->value)) {?>
                                        <?php $_smarty_tpl->_assignInScope('addedli', true);?>
                                        <li><span class="<?php if ((isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value]))) {
echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value];
}?>">
                                    <?php }?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value], ENT_QUOTES, 'UTF-8', true);?>

                                <?php }?>
                                <?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null) && $_smarty_tpl->tpl_vars['addedli']->value)) {?>
                                    </span></li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php
$_smarty_tpl->tpl_vars['address'] = $__foreach_address_115_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
<?php }?>

<?php }
}
