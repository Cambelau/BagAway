<?php
/* Smarty version 3.1.39, created on 2022-03-03 12:13:06
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\modules\dashguestcycle\views\templates\hook\dashboard-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6220a2c283cf67_49187189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf4cdff27200005513dd2eee97176aaf8d924ec' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\modules\\dashguestcycle\\views\\templates\\hook\\dashboard-top.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6220a2c283cf67_49187189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-xs-12">
		<section id="dashguestcycle" class="widget allow_push">
			<div class="badges-wrapper">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayDashboardBadgeListBefore"),$_smarty_tpl ) );?>

				<div class="badge-wrapper">
					<div class="badge-item label-tooltip" data-toggle="tooltip" data-original-title="Current status for arrived guest.">
						<div class="badge-strip" style="background-color: #266FFE;"></div>
						<div class="badge-content-wrapper">
							<div class="title-wrapper">
								<p class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Arrivals",'mod'=>"dashguestcycle"),$_smarty_tpl ) );?>
</p>
							</div>
							<div class="value-wrapper">
								<p class="text-center">
									<span id="dgc_arrived"></span>/<span id="dgc_total_arrivals"></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="badge-wrapper">
					<div class="badge-item label-tooltip" data-toggle="tooltip" data-original-title="Number of guest departs till now.">
						<div class="badge-strip" style="background-color: #72C3F0;"></div>
						<div class="badge-content-wrapper">
							<div class="title-wrapper">
								<p class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Departures",'mod'=>"dashguestcycle"),$_smarty_tpl ) );?>
</p>
							</div>
							<div class="value-wrapper">
								<p class="text-center">
									<span id="dgc_departed"></span>/<span id="dgc_total_departures"></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="badge-wrapper">
					<div class="badge-item label-tooltip" data-toggle="tooltip" data-original-title="Current status for new bookings.">
						<div class="badge-strip" style="background-color: #56CE56;"></div>
						<div class="badge-content-wrapper">
							<div class="title-wrapper">
								<p class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"New Bookings",'mod'=>"dashguestcycle"),$_smarty_tpl ) );?>
</p>
							</div>
							<div class="value-wrapper">
								<p class="text-center">
									<span id="dgc_new_bookings"></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="badge-wrapper">
					<div class="badge-item label-tooltip" data-toggle="tooltip" data-original-title="Total number of checkout that turned away/refused.">
						<div class="badge-strip" style="background-color: #FFC148;"></div>
						<div class="badge-content-wrapper">
							<div class="title-wrapper">
								<p class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Stay Overs",'mod'=>"dashguestcycle"),$_smarty_tpl ) );?>
</p>
							</div>
							<div class="value-wrapper">
								<p class="text-center">
									<span id="dgc_stay_overs"></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="badge-wrapper">
					<div class="badge-item label-tooltip" data-toggle="tooltip" data-original-title="Total number of messages received from the guest.">
						<div class="badge-strip" style="background-color: #A569DF;"></div>
						<div class="badge-content-wrapper">
							<div class="title-wrapper">
								<p class="text-center">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Guest Messages",'mod'=>"dashguestcycle"),$_smarty_tpl ) );?>

								</p>
							</div>
							<div class="value-wrapper">
								<p class="text-center">
									<span id="dgc_new_messages"></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="badge-wrapper">
					<div class="badge-item label-tooltip" data-toggle="tooltip" data-original-title="The number of bookings canceled so far.">
						<div class="badge-strip" style="background-color: #FF4036;"></div>
						<div class="badge-content-wrapper">
							<div class="title-wrapper">
								<p class="text-center">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Cancelled Bookings",'mod'=>"dashguestcycle"),$_smarty_tpl ) );?>

								</p>
							</div>
							<div class="value-wrapper">
								<p class="text-center">
									<span id="dgc_cancelled_bookings"></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="badge-wrapper">
					<div class="badge-item label-tooltip" data-toggle="tooltip" data-original-title="The total number of adults and children.">
						<div class="badge-strip" style="background-color: #FF809E;"></div>
						<div class="badge-content-wrapper">
							<div class="title-wrapper">
								<p class="text-center">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Guests (Adults/Children)",'mod'=>"dashguestcycle"),$_smarty_tpl ) );?>

								</p>
							</div>
							<div class="value-wrapper">
								<p class="text-center">
									<span id="dgc_guests_adults"></span>/<span id="dgc_guests_children"></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayDashboardBadgeListAfter"),$_smarty_tpl ) );?>

			</div>
		</section>
	</div>
</div>
<?php }
}
