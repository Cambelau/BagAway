<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\order-opc-new-account-advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1a095286_46119578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bccdee9936975d078b18ef97cfd1bad44731f7a' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\order-opc-new-account-advanced.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1a095286_46119578 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="opc_new_account" class="opc-main-block">
    <div id="opc_new_account-overlay" class="opc-overlay" style="display: none;"></div>
    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account'),$_smarty_tpl ) );?>
</h2>
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true,NULL,"back=order-opc"), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="login_form" class="box">
        <fieldset>
            <h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already registered?'),$_smarty_tpl ) );?>
</h3>
            <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" id="openLoginFormBlock">&raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here'),$_smarty_tpl ) );?>
</a></p>
            <div id="login_form_content" style="display:none;">
                <!-- Error return block -->
                <div id="opc_login_errors" class="alert alert-danger" style="display:none;"></div>
                <!-- END Error return block -->
                <p class="form-group">
                    <label for="login_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address'),$_smarty_tpl ) );?>
</label>
                    <input type="email" class="form-control validate" id="login_email" name="email" data-validate="isEmail" />
                </p>
                <p class="form-group">
                    <label for="login_passwd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password'),$_smarty_tpl ) );?>
</label>
                    <input class="form-control validate" type="password" id="login_passwd" name="login_passwd" data-validate="isPasswd" />
                </p>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('password',true), ENT_QUOTES, 'UTF-8', true);?>
" class="lost_password"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?'),$_smarty_tpl ) );?>
</a>
                <p class="submit">
                    <?php if ((isset($_smarty_tpl->tpl_vars['back']->value))) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
                    <button type="submit" id="SubmitLogin" name="SubmitLogin" data-adv-api="1" class="button btn btn-default button-medium"><span><i class="icon-lock left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in'),$_smarty_tpl ) );?>
</span></button>
                </p>
            </div>
        </fieldset>
    </form>
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="new_account_form" class="std" autocomplete="on" autofill="on">
        <fieldset>
            <div class="box">
                <h3 id="new_account_title" class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Customer'),$_smarty_tpl ) );?>
</h3>
                <div id="opc_account_choice" class="row">
                    <div class="col-xs-12 col-md-6">
                        <p class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instant Checkout'),$_smarty_tpl ) );?>
</p>
                        <p class="opc-button">
                            <button type="submit" class="btn btn-default button button-medium exclusive" id="opc_guestCheckout"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest checkout'),$_smarty_tpl ) );?>
</span></button>
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your account today and enjoy:'),$_smarty_tpl ) );?>
</p>
                        <ul class="bullet">
                            <li>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personalized and secure access'),$_smarty_tpl ) );?>
</li>
                            <li>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A fast and easy check out process'),$_smarty_tpl ) );?>
</li>
                            <li>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Separate billing and shipping addresses'),$_smarty_tpl ) );?>
</li>
                        </ul>
                        <p class="opc-button">
                            <button type="submit" class="btn btn-default button button-medium exclusive" id="opc_createAccount"><span><i class="icon-user left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account'),$_smarty_tpl ) );?>
</span></button>
                        </p>
                    </div>
                </div>
                <div id="opc_account_form" class="unvisible">
                    <?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_TOP']->value;?>

                    <!-- Error return block -->
                    <div id="opc_account_errors" class="alert alert-danger" style="display:none;"></div>
                    <!-- END Error return block -->
                    <!-- Account -->
                    <input type="hidden" id="is_new_customer" name="is_new_customer" value="0" />
                    <input type="hidden" id="opc_id_customer" name="opc_id_customer" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_customer'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_customer']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_customer'];
} else { ?>0<?php }?>" />
                    <input type="hidden" id="opc_id_address_delivery" name="opc_id_address_delivery" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'];
} else { ?>0<?php }?>" />
                    <input type="hidden" id="opc_id_address_invoice" name="opc_id_address_invoice" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'];
} else { ?>0<?php }?>" />
                    <div class="required text form-group">
                        <label for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                        <input type="email" class="text form-control validate" id="email" name="email" data-validate="isEmail" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['email'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['email']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['email'];
}?>" />
                    </div>
                    <div class="required password is_customer_param form-group">
                        <label for="passwd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                        <input type="password" class="text form-control validate" name="passwd" id="passwd" data-validate="isPasswd" />
                        <span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(five characters min.)'),$_smarty_tpl ) );?>
</span>
                    </div>
                    <div class="required clearfix gender-line">
                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Social title'),$_smarty_tpl ) );?>
</label>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender', false, 'k');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                            <div class="radio-inline">
                                <label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_gender;?>
" class="top">
                                    <input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_gender;?>
" value="<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_gender;?>
"<?php if ((isset($_POST['id_gender'])) && $_POST['id_gender'] == $_smarty_tpl->tpl_vars['gender']->value->id_gender || ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_gender'] == $_smarty_tpl->tpl_vars['gender']->value->id_gender)) {?> checked="checked"<?php }?> />
                                    <?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
</label></div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="required form-group">
                        <label for="firstname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                        <input type="text" class="text form-control validate" id="customer_firstname" name="customer_firstname" onblur="$('#firstname').val($(this).val());" data-validate="isName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['customer_firstname'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['customer_firstname']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['customer_firstname'];
}?>" />
                    </div>
                    <div class="required form-group">
                        <label for="lastname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                        <input type="text" class="form-control validate" id="customer_lastname" name="customer_lastname" onblur="$('#lastname').val($(this).val());" data-validate="isName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['customer_lastname'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['customer_lastname']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['customer_lastname'];
}?>" />
                    </div>
                    <div class="select form-group date-select">
                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date of Birth'),$_smarty_tpl ) );?>
</label>
                        <div class="row">
                            <div class="col-xs-4">
                                <select id="days" name="days" class="form-control">
                                    <option value="">-</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
                                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['day']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['sl_day'])) && ($_smarty_tpl->tpl_vars['guestInformations']->value['sl_day'] == $_smarty_tpl->tpl_vars['day']->value)) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['day']->value, ENT_QUOTES, 'UTF-8', true);?>
&nbsp;&nbsp;</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                                            </div>
                            <div class="col-xs-4">
                                <select id="months" name="months" class="form-control">
                                    <option value="">-</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'month', false, 'k');
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
?>
                                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['sl_month'])) && ($_smarty_tpl->tpl_vars['guestInformations']->value['sl_month'] == $_smarty_tpl->tpl_vars['k']->value)) {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl ) );?>
&nbsp;</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="col-xs-4">
                                <select id="years" name="years" class="form-control">
                                    <option value="">-</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>
                                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['sl_year'])) && ($_smarty_tpl->tpl_vars['guestInformations']->value['sl_year'] == $_smarty_tpl->tpl_vars['year']->value)) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8', true);?>
&nbsp;&nbsp;</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['newsletter']->value)) && $_smarty_tpl->tpl_vars['newsletter']->value) {?>
                        <div class="checkbox">
                            <label for="newsletter">
                                <input type="checkbox" name="newsletter" id="newsletter" value="1"<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['newsletter'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['newsletter']) {?> checked="checked"<?php }?> autocomplete="off"/>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our newsletter!'),$_smarty_tpl ) );?>
</label>
                            <?php if (array_key_exists('newsletter',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
                                <sup> *</sup>
                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['optin']->value)) && $_smarty_tpl->tpl_vars['optin']->value) {?>
                        <div class="checkbox">
                            <label for="optin">
                                <input type="checkbox" name="optin" id="optin" value="1"<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['optin'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['optin']) {?> checked="checked"<?php }?> autocomplete="off"/>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Receive special offers from our partners!'),$_smarty_tpl ) );?>
</label>
                            <?php if (array_key_exists('optin',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
                                <sup> *</sup>
                            <?php }?>
                        </div>
                    <?php }?>
                    <h3 class="page-subheading top-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>
</h3>
                    <?php $_smarty_tpl->_assignInScope('stateExist', false);?>
                    <?php $_smarty_tpl->_assignInScope('postCodeExist', false);?>
                    <?php $_smarty_tpl->_assignInScope('dniExist', false);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dlv_all_fields']->value, 'field_name');
$_smarty_tpl->tpl_vars['field_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['field_name']->value == "company") {?>
                            <div class="text form-group">
                                <label for="company"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                                <input type="text" class="text form-control validate" id="company" name="company" data-validate="isGenericName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['company'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['company']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['company'];
}?>" />
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "vat_number") {?>
                            <div id="vat_number_block" style="display:none;">
                                <div class="form-group">
                                    <label for="vat_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VAT number'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                                    <input type="text" class="text form-control" name="vat_number" id="vat_number" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['vat_number'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['vat_number']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['vat_number'];
}?>" />
                                </div>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "dni") {?>
                            <?php $_smarty_tpl->_assignInScope('dniExist', true);?>
                            <div class="required dni form-group">
                                <label for="dni"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification number'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <input type="text" class="text form-control validate" name="dni" id="dni" data-validate="isDniLite" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['dni'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['dni']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni'];
}?>" />
                                <span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI / NIF / NIE'),$_smarty_tpl ) );?>
</span>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "firstname") {?>
                            <div class="required text form-group">
                                <label for="firstname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <input type="text" class="text form-control validate" id="firstname" name="firstname" data-validate="isName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['firstname'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['firstname']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['firstname'];
}?>" />
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "lastname") {?>
                            <div class="required text form-group">
                                <label for="lastname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <input type="text" class="text form-control validate" id="lastname" name="lastname" data-validate="isName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['lastname'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['lastname']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['lastname'];
}?>" />
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address1") {?>
                            <div class="required text form-group">
                                <label for="address1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <input type="text" class="text form-control validate" name="address1" id="address1" data-validate="isAddress" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['address1'])) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['address1'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['address1']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['address1'];
}?>" />
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address2") {?>
                            <div class="text<?php if (!in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> is_customer_param<?php }?> form-group">
                                <label for="address2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address (Line 2)'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                                <input type="text" class="text form-control validate" name="address2" id="address2" data-validate="isAddress" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['address2'])) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['address2'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['address2']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['address2'];
}?>" />
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "postcode") {?>
                            <?php $_smarty_tpl->_assignInScope('postCodeExist', true);?>
                            <div class="required postcode text form-group">
                                <label for="postcode"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <input type="text" class="text form-control validate" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['postcode'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['postcode']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['postcode'];
}?>"/>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "city") {?>
                            <div class="required text form-group">
                                <label for="city"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <input type="text" class="text form-control validate" name="city" id="city" data-validate="isCityName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['city'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['city']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['city'];
}?>" />
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "country" || $_smarty_tpl->tpl_vars['field_name']->value == "Country:name") {?>
                            <div class="required select form-group">
                                <label for="id_country"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <select name="id_country" id="id_country" class="form-control">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if (((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_country'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_country'] == $_smarty_tpl->tpl_vars['v']->value['id_country']) || (!(isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && $_smarty_tpl->tpl_vars['sl_country']->value == $_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "state" || $_smarty_tpl->tpl_vars['field_name']->value == 'State:name') {?>
                            <?php $_smarty_tpl->_assignInScope('stateExist', true);?>
                            <div class="required id_state form-group" style="display:none;">
                                <label for="id_state"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <select name="id_state" id="id_state" class="form-control">
                                    <option value="">-</option>
                                </select>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if (!$_smarty_tpl->tpl_vars['postCodeExist']->value) {?>
                        <div class="required postcode form-group unvisible">
                            <label for="postcode"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                            <input type="text" class="text form-control validate" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['postcode'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['postcode']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['postcode'];
}?>"/>
                        </div>
                    <?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['stateExist']->value) {?>
                        <div class="required id_state form-group unvisible">
                            <label for="id_state"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                            <select name="id_state" id="id_state" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>
                    <?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['dniExist']->value) {?>
                        <div class="required dni form-group">
                            <label for="dni"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification number'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                            <input type="text" class="text form-control validate" name="dni" id="dni" data-validate="isDniLite" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['dni'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['dni']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni'];
}?>" />
                            <span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI / NIF / NIE'),$_smarty_tpl ) );?>
</span>
                        </div>
                    <?php }?>
                    <div class="form-group is_customer_param">
                        <label for="other"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional information'),$_smarty_tpl ) );?>
</label>
                        <textarea class="form-control" name="other" id="other" cols="26" rows="7"></textarea>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>
                        <p class="inline-infos required is_customer_param"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must register at least one phone number.'),$_smarty_tpl ) );?>
</p>
                    <?php }?>
                    <div class="form-group is_customer_param">
                        <label for="phone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home phone'),$_smarty_tpl ) );?>
</label>
                        <input type="text" class="text form-control validate" name="phone" id="phone"  data-validate="isPhoneNumber" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['phone']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone'];
}?>" />
                    </div>
                    <div class="<?php if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
                        <label for="phone_mobile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile phone'),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>*</sup><?php }?></label>
                        <input type="text" class="text form-control validate" name="phone_mobile" id="phone_mobile" data-validate="isPhoneNumber" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile'];
}?>" />
                    </div>
                    <input type="hidden" name="alias" id="alias" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My address'),$_smarty_tpl ) );?>
"/>

                    <div class="checkbox">
                        <label for="invoice_address">
                            <input type="checkbox" name="invoice_address" id="invoice_address"<?php if (((isset($_POST['invoice_address'])) && $_POST['invoice_address']) || ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['invoice_address'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['invoice_address'])) {?> checked="checked"<?php }?> autocomplete="off"/>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please use another address for invoice'),$_smarty_tpl ) );?>
</label>
                    </div>

                    <div id="opc_invoice_address" class="is_customer_param">
                        <?php $_smarty_tpl->_assignInScope('stateExist', false);?>
                        <?php $_smarty_tpl->_assignInScope('postCodeExist', false);?>
                        <?php $_smarty_tpl->_assignInScope('dniExist', false);?>
                        <h3 class="page-subheading top-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>
</h3>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inv_all_fields']->value, 'field_name');
$_smarty_tpl->tpl_vars['field_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['field_name']->value == "company") {?>
                                <div class="form-group">
                                    <label for="company_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                                    <input type="text" class="text form-control validate" id="company_invoice" name="company_invoice"  data-validate="isName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['company_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['company_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['company_invoice'];
}?>" />
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "vat_number") {?>
                                <div id="vat_number_block_invoice" class="is_customer_param" style="display:none;">
                                    <div class="form-group">
                                        <label for="vat_number_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VAT number'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                                        <input type="text" class="form-control" id="vat_number_invoice" name="vat_number_invoice" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['vat_number_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['vat_number_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['vat_number_invoice'];
}?>" />
                                    </div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "dni") {?>
                                <?php $_smarty_tpl->_assignInScope('dniExist', true);?>
                                <div class="required form-group dni_invoice">
                                    <label for="dni_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification number'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                    <input type="text" class="text form-control validate" name="dni_invoice" id="dni_invoice" data-validate="isDniLite" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice'];
}?>" />
                                    <span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI / NIF / NIE'),$_smarty_tpl ) );?>
</span>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "firstname") {?>
                                <div class="required form-group">
                                    <label for="firstname_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                    <input type="text" class="form-control validate" id="firstname_invoice" name="firstname_invoice" data-validate="isName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['firstname_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['firstname_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['firstname_invoice'];
}?>" />
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "lastname") {?>
                                <div class="required form-group">
                                    <label for="lastname_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                    <input type="text" class="form-control validate" id="lastname_invoice" name="lastname_invoice" data-validate="isName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['lastname_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['lastname_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['lastname_invoice'];
}?>" />
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address1") {?>
                                <div class="required form-group">
                                    <label for="address1_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                    <input type="text" class="form-control validate" name="address1_invoice" id="address1_invoice" data-validate="isAddress" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['address1_invoice'])) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['address1_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['address1_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['address1_invoice'];
}?>" />
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address2") {?>
                                <div class="form-group<?php if (!in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> is_customer_param<?php }?>">
                                    <label for="address2_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address (Line 2)'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
                                    <input type="text" class="form-control address" name="address2_invoice" id="address2_invoice" data-validate="isAddress" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['address2_invoice'])) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['address2_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['address2_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['address2_invoice'];
}?>" />
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "postcode") {?>
                                <?php $_smarty_tpl->_assignInScope('postCodeExist', true);?>
                                <div class="required postcode_invoice form-group">
                                    <label for="postcode_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                    <input type="text" class="form-control validate" name="postcode_invoice" id="postcode_invoice" data-validate="isPostCode" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice'];
}?>"/>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "city") {?>
                                <div class="required form-group">
                                    <label for="city_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                    <input type="text" class="form-control validate" name="city_invoice" id="city_invoice" data-validate="isCityName" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['city_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['city_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['city_invoice'];
}?>" />
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "country" || $_smarty_tpl->tpl_vars['field_name']->value == "Country:name") {?>
                                <div class="required form-group">
                                    <label for="id_country_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                    <select name="id_country_invoice" id="id_country_invoice" class="form-control">
                                        <option value="">-</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if (((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice'] == $_smarty_tpl->tpl_vars['v']->value['id_country']) || (!(isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && $_smarty_tpl->tpl_vars['sl_country']->value == $_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "state" || $_smarty_tpl->tpl_vars['field_name']->value == 'State:name') {?>
                                <?php $_smarty_tpl->_assignInScope('stateExist', true);?>
                                <div class="required id_state_invoice form-group" style="display:none;">
                                    <label for="id_state_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                    <select name="id_state_invoice" id="id_state_invoice" class="form-control">
                                        <option value="">-</option>
                                    </select>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if (!$_smarty_tpl->tpl_vars['postCodeExist']->value) {?>
                            <div class="required postcode_invoice form-group unvisible">
                                <label for="postcode_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <input type="text" class="form-control validate" name="postcode_invoice" id="postcode_invoice" data-validate="isPostCode" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['postcode_invoice'];
}?>"/>
                            </div>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['stateExist']->value) {?>
                            <div class="required id_state_invoice form-group unvisible">
                                <label for="id_state_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <select name="id_state_invoice" id="id_state_invoice" class="form-control">
                                    <option value="">-</option>
                                </select>
                            </div>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['dniExist']->value) {?>
                            <div class="required form-group dni_invoice">
                                <label for="dni"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification number'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
                                <input type="text" class="text form-control validate" name="dni_invoice" id="dni_invoice" data-validate="isDniLite" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni_invoice'];
}?>" />
                                <span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI / NIF / NIE'),$_smarty_tpl ) );?>
</span>
                            </div>
                        <?php }?>
                        <div class="form-group is_customer_param">
                            <label for="other_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional information'),$_smarty_tpl ) );?>
</label>
                            <textarea class="form-control" name="other_invoice" id="other_invoice" cols="26" rows="3"></textarea>
                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>
                            <p class="inline-infos required is_customer_param"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must register at least one phone number.'),$_smarty_tpl ) );?>
</p>
                        <?php }?>
                        <div class="form-group is_customer_param">
                            <label for="phone_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home phone'),$_smarty_tpl ) );?>
</label>
                            <input type="text" class="form-control validate" name="phone_invoice" id="phone_invoice" data-validate="isPhoneNumber" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['phone_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone_invoice'];
}?>" />
                        </div>
                        <div class="<?php if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
                            <label for="phone_mobile_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile phone'),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>*</sup><?php }?></label>
                            <input type="text" class="form-control validate" name="phone_mobile_invoice" id="phone_mobile_invoice" data-validate="isPhoneNumber" value="<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile_invoice']) {
echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile_invoice'];
}?>" />
                        </div>
                        <input type="hidden" name="alias_invoice" id="alias_invoice" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Invoice address'),$_smarty_tpl ) );?>
" />
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value;?>

                    <div class="submit opc-add-save clearfix">
                        <p class="required opc-required pull-right">
                            <sup>*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required field'),$_smarty_tpl ) );?>

                        </p>
                        <button type="submit" name="submitAccount" id="submitAccount" data-adv-api="1" class="btn btn-default button button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></button>

                    </div>
                    <div style="display: none;" id="opc_account_saved" class="alert alert-success">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account information saved successfully'),$_smarty_tpl ) );?>

                    </div>
                    <!-- END Account -->
                </div>
            </div>
        </fieldset>
    </form>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_state'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_state']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedState'=>intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_state'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedState'=>false),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_state_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_state_invoice']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedStateInvoice'=>intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_state_invoice'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedStateInvoice'=>false),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_country'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_country']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountry'=>intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_country'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountry'=>false),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)) && (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountryInvoice'=>intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_country_invoice'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountryInvoice'=>false),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['countries']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('countries'=>$_smarty_tpl->tpl_vars['countries']->value),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value)) && $_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('vatnumber_ajax_call'=>$_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value),$_smarty_tpl ) );
}
}
}
