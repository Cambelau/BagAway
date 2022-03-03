<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\referralprogram\views\templates\front\program.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b18ebde63_70271055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5db652e900a7993a011d7072e2c59fa7456815ea' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\referralprogram\\views\\templates\\front\\program.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b18ebde63_70271055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage my account','mod'=>'referralprogram'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Referral Program','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
	<p class="alert alert-danger">
		<?php if ($_smarty_tpl->tpl_vars['error']->value == 'conditions not valided') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You need to agree to the conditions of the referral program!','mod'=>'referralprogram'),$_smarty_tpl ) );?>

		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'email invalid') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'At least one e-mail address is invalid!','mod'=>'referralprogram'),$_smarty_tpl ) );?>

		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'name invalid') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'At least one first name or last name is invalid!','mod'=>'referralprogram'),$_smarty_tpl ) );?>

		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'email exists') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Someone with this e-mail address has already been sponsored!','mod'=>'referralprogram'),$_smarty_tpl ) );?>
: <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mails_exists']->value, 'mail');
$_smarty_tpl->tpl_vars['mail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mail']->value) {
$_smarty_tpl->tpl_vars['mail']->do_else = false;
echo $_smarty_tpl->tpl_vars['mail']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'no revive checked') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please mark at least one checkbox','mod'=>'referralprogram'),$_smarty_tpl ) );?>

		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'cannot add friends') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cannot add friends to database','mod'=>'referralprogram'),$_smarty_tpl ) );?>

		<?php }?>
	</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['invitation_sent']->value) {?>
	<p class="alert alert-success">
	<?php if ($_smarty_tpl->tpl_vars['nbInvitation']->value > 1) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mails have been sent to your friends!','mod'=>'referralprogram'),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An e-mail has been sent to your friend!','mod'=>'referralprogram'),$_smarty_tpl ) );?>

	<?php }?>
	</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['revive_sent']->value) {?>
	<p class="alert alert-success">
	<?php if ($_smarty_tpl->tpl_vars['nbRevive']->value > 1) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reminder e-mails have been sent to your friends!','mod'=>'referralprogram'),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A reminder e-mail has been sent to your friend!','mod'=>'referralprogram'),$_smarty_tpl ) );?>

	<?php }?>
	</p>
<?php }?>
<ul class="nav nav-tabs" id="idTabs">
	<li class="active"><a data-toggle="tab" href="#idTab1" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['activeTab']->value == 'sponsor') {?> active<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sponsor my friends','mod'=>'referralprogram'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sponsor my friends','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</a></li>
	<li><a data-toggle="tab" href="#idTab2"  class="tab-pane <?php if ($_smarty_tpl->tpl_vars['activeTab']->value == 'pending') {?> selected<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of pending friends','mod'=>'referralprogram'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending friends','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</a></li>
	<li><a data-toggle="tab" href="#idTab3" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['activeTab']->value == 'subscribed') {?> selected<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of friends I sponsored','mod'=>'referralprogram'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Friends I sponsored','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</a></li>
</ul>
<div class="sheets tab-content">

	<div id="idTab1" class="tab-pane active">
		<p class="bold">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get a discount of %1$s for you and your friends by recommending this Website.','sprintf'=>array($_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl ) );?>
</strong>
		</p>
		<?php if ($_smarty_tpl->tpl_vars['canSendInvitations']->value) {?>
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It\'s quick and it\'s easy. Just fill in the first name, last name, and e-mail address(es) of your friend(s) in the fields below.','mod'=>'referralprogram'),$_smarty_tpl ) );?>

				<?php if ($_smarty_tpl->tpl_vars['orderQuantity']->value > 1) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When one of them makes at least %d orders, ','sprintf'=>$_smarty_tpl->tpl_vars['orderQuantity']->value,'mod'=>'referralprogram'),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When one of them makes at least %d order, ','sprintf'=>$_smarty_tpl->tpl_vars['orderQuantity']->value,'mod'=>'referralprogram'),$_smarty_tpl ) );?>

				<?php }?>,
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'he or she will receive a %1$s voucher and you will receive your own voucher worth %1$s.','sprintf'=>array($_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl ) );?>

			</p>
			<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" class="std">
				<table class="table table-bordered">
				<thead>
					<tr>
						<th class="first_item">&nbsp;</th>
						<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
						<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
						<th class="last_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php
$__section_friends_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nbFriends']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_friends_6_start = min(0, $__section_friends_6_loop);
$__section_friends_6_total = min(($__section_friends_6_loop - $__section_friends_6_start), $__section_friends_6_loop);
$_smarty_tpl->tpl_vars['__smarty_section_friends'] = new Smarty_Variable(array());
if ($__section_friends_6_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] = $__section_friends_6_start; $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['iteration'] <= $__section_friends_6_total; $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']++){
?>
					<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null)%2) {?>item<?php } else { ?>alternate_item<?php }?>">
						<td class="align_right"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['iteration'] : null);?>
</td>
						<td><input type="text" class="form-control" name="friendsLastName[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null);?>
]" size="14" value="<?php if ((isset($_POST['friendsLastName'][(isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null)]))) {
echo htmlspecialchars($_POST['friendsLastName'][(isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null)], ENT_QUOTES, 'UTF-8', true);
}?>" /></td>
						<td><input type="text" class="form-control" name="friendsFirstName[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null);?>
]" size="14" value="<?php if ((isset($_POST['friendsFirstName'][(isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null)]))) {
echo htmlspecialchars($_POST['friendsFirstName'][(isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null)], ENT_QUOTES, 'UTF-8', true);
}?>" /></td>
						<td><input type="text" class="form-control" name="friendsEmail[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null);?>
]" size="20" value="<?php if ((isset($_POST['friendsEmail'][(isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null)]))) {
echo htmlspecialchars($_POST['friendsEmail'][(isset($_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_friends']->value['index'] : null)], ENT_QUOTES, 'UTF-8', true);
}?>" /></td>
					</tr>
					<?php
}
}
?>
				</tbody>
				</table>
				<p class="bold">
					<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Important: Your friends\' e-mail addresses will only be used in the referral program. They will never be used for other purposes.','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</strong>
				</p>
				<p class="checkbox">
					<input type="checkbox" name="conditionsValided" id="conditionsValided" value="1" <?php if ((isset($_POST['conditionsValided'])) && $_POST['conditionsValided'] == 1) {?>checked="checked"<?php }?> />
					<label for="conditionsValided"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree to the terms of service and adhere to them unconditionally.','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</label>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','rules',array('height'=>'500','width'=>'400'),true), ENT_QUOTES, 'UTF-8', true);?>
" class="thickbox" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conditions of the referral program','mod'=>'referralprogram'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read conditions.','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</a>
				</p>
				<p class="see_email">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','mod'=>'referralprogram'),$_smarty_tpl ) );?>

					<?php $_smarty_tpl->_assignInScope('file', ((string)$_smarty_tpl->tpl_vars['lang_iso']->value)."/referralprogram-invitation.html");?>
					<a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['file']->value;
$_prefixVariable21 = ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','email',array('height'=>'500','width'=>'600','mail'=>$_prefixVariable21),true), ENT_QUOTES, 'UTF-8', true);?>
" class="thickbox" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invitation e-mail','mod'=>'referralprogram'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'the default e-mail','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</a> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'that will be sent to your friend(s).','mod'=>'referralprogram'),$_smarty_tpl ) );?>

				</p>
				<p class="submit">
                    <button type="submit" id="submitSponsorFriends" name="submitSponsorFriends" class="btn btn-default button button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Validate','mod'=>'referralprogram'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></button>
				</p>
			</form>
		<?php } else { ?>
			<p class="alert alert-warning">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To become a sponsor, you need to have completed at least','mod'=>'referralprogram'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['orderQuantity']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['orderQuantity']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'orders','mod'=>'referralprogram'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'order','mod'=>'referralprogram'),$_smarty_tpl ) );
}?>.
			</p>
		<?php }?>
	</div>

	<div id="idTab2" class="tab-pane">
	<?php if ($_smarty_tpl->tpl_vars['pendingFriends']->value && count($_smarty_tpl->tpl_vars['pendingFriends']->value) > 0) {?>
		<p>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'These friends have not yet placed an order on this Website since you sponsored them, but you can try again! To do so, mark the checkboxes of the friend(s) you want to remind, then click on the button "Remind my friend(s)"','mod'=>'referralprogram'),$_smarty_tpl ) );?>

		</p>
		<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" class="std">
			<table class="table table-bordered">
			<thead>
				<tr>
					<th class="first_item">&nbsp;</th>
					<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
					<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
					<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
					<th class="last_item"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last invitation','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</b></th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pendingFriends']->value, 'pendingFriend', false, NULL, 'myLoop', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['pendingFriend']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pendingFriend']->value) {
$_smarty_tpl->tpl_vars['pendingFriend']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
?>
				<tr>
					<td>
						<input type="checkbox" name="friendChecked[<?php echo $_smarty_tpl->tpl_vars['pendingFriend']->value['id_referralprogram'];?>
]" id="friendChecked[<?php echo $_smarty_tpl->tpl_vars['pendingFriend']->value['id_referralprogram'];?>
]" value="1" />
					</td>
					<td>
						<label for="friendChecked[<?php echo $_smarty_tpl->tpl_vars['pendingFriend']->value['id_referralprogram'];?>
]"><?php echo substr($_smarty_tpl->tpl_vars['pendingFriend']->value['lastname'],0,22);?>
</label>
					</td>
					<td><?php echo substr($_smarty_tpl->tpl_vars['pendingFriend']->value['firstname'],0,22);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['pendingFriend']->value['email'];?>
</td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['pendingFriend']->value['date_upd'],'full'=>1),$_smarty_tpl ) );?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
			</table>
			<p class="submit">
                <button type="submit" name="revive" id="revive" class="button_large btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remind my friend(s)','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</button>
			</p>
		</form>
		<?php } else { ?>
			<p class="alert alert-warning">
				<?php if ($_smarty_tpl->tpl_vars['subscribeFriends']->value && count($_smarty_tpl->tpl_vars['subscribeFriends']->value) > 0) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have no pending invitations.','mod'=>'referralprogram'),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have not sponsored any friends yet.','mod'=>'referralprogram'),$_smarty_tpl ) );?>

				<?php }?>
			</p>
		<?php }?>
	</div>

	<div id="idTab3" class="tab-pane">
	<?php if ($_smarty_tpl->tpl_vars['subscribeFriends']->value && count($_smarty_tpl->tpl_vars['subscribeFriends']->value) > 0) {?>
		<p>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here are sponsored friends who have accepted your invitation:','mod'=>'referralprogram'),$_smarty_tpl ) );?>

		</p>
		<table class="table table-bordered">
		<thead>
			<tr>
				<th class="first_item">&nbsp;</th>
				<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
				<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
				<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
				<th class="last_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Inscription date','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subscribeFriends']->value, 'subscribeFriend', false, NULL, 'myLoop', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['subscribeFriend']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subscribeFriend']->value) {
$_smarty_tpl->tpl_vars['subscribeFriend']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
?>
			<tr>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] : null);?>
.</td>
				<td><?php echo substr($_smarty_tpl->tpl_vars['subscribeFriend']->value['lastname'],0,22);?>
</td>
				<td><?php echo substr($_smarty_tpl->tpl_vars['subscribeFriend']->value['firstname'],0,22);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subscribeFriend']->value['email'];?>
</td>
				<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['subscribeFriend']->value['date_upd'],'full'=>1),$_smarty_tpl ) );?>
</td>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
		</table>
	<?php } else { ?>
		<p class="alert alert-warning">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No sponsored friends have accepted your invitation yet.','mod'=>'referralprogram'),$_smarty_tpl ) );?>

		</p>
	<?php }?>
	</div>
</div>

<ul class="footer_links clearfix">
	<li>
		<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Your Account','mod'=>'referralprogram'),$_smarty_tpl ) );?>
" rel="nofollow">
		<span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Your Account','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</span></a>
	</li>
	<li><a class="btn btn-default button button-small" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','mod'=>'referralprogram'),$_smarty_tpl ) );?>
"><span><i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</span></a></li>
</ul>
<?php $_block_plugin58 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin58, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'ThickboxI18nClose'));
$_block_repeat=true;
echo $_block_plugin58->addJsDefL(array('name'=>'ThickboxI18nClose'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'referralprogram','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin58->addJsDefL(array('name'=>'ThickboxI18nClose'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin59 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin59, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'ThickboxI18nOrEscKey'));
$_block_repeat=true;
echo $_block_plugin59->addJsDefL(array('name'=>'ThickboxI18nOrEscKey'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or Esc key','mod'=>'referralprogram','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin59->addJsDefL(array('name'=>'ThickboxI18nOrEscKey'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('tb_pathToImage'=>($_smarty_tpl->tpl_vars['img_ps_dir']->value).('loadingAnimation.gif')),$_smarty_tpl ) );?>

<?php }
}
