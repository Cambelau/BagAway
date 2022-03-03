<?php
/* Smarty version 3.1.39, created on 2022-03-03 12:13:07
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\modules\dashperformance\views\templates\hook\dashboard_zone_two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6220a2c33998c8_26968073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd573955bf03a2566d77b4326c765f5482e8f1356' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\modules\\dashperformance\\views\\templates\\hook\\dashboard_zone_two.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6220a2c33998c8_26968073 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-12">
	<section id="dashperformance" class="panel widget <?php if ($_smarty_tpl->tpl_vars['allow_push']->value) {?> allow_push<?php }?>">
		<header class="panel-heading">
			<i class="icon-bar-chart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Performance",'mod'=>"dashperformance"),$_smarty_tpl ) );?>

			<span class="panel-heading-action">
				<a class="list-toolbar-btn" href="#"
					onclick="refreshDashboard('dashperformance'); return false;"
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Refresh",'mod'=>"dashperformance"),$_smarty_tpl ) );?>
">
					<i class="process-icon-refresh"></i>
				</a>
			</span>
		</header>

		<section id="dashperformance" class="dash_config hide">
			<header>
				<i class="icon-wrench"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Configuration",'mod'=>"dashperformance"),$_smarty_tpl ) );?>

			</header>
		</section>

		<section>
			<div class="circles-wrapper row">
				<div class="col-xs-6 col-lg-3">
					<div class="circle-wrapper">
						<div class="circle avg-daily-rate label-tooltip" style="border: 25px solid #113CFC;"
							data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"The Average Daily Rate represents the average rental income per paid occupied room over a given time period.",'mod'=>"dashperformance"),$_smarty_tpl ) );?>
" data-placement="top">
							<div class="circle-content-wrapper">
								<div class="title-wrapper">
									<p class="text-center">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Avg. Daily Rate",'mod'=>"dashperformance"),$_smarty_tpl ) );?>

									</p>
								</div>
								<div class="value-wrapper">
									<p class="text-center" id="dp_average_daily_rate" style="color: #113CFC">
										<?php if ((isset($_smarty_tpl->tpl_vars['average_daily_rate']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['average_daily_rate']->value, ENT_QUOTES, 'UTF-8', true);
}?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-lg-3">
					<div class="circle-wrapper">
						<div class="circle cancellation-rate label-tooltip" style="border: 25px solid #FF4036;"
							data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"The Cancellation Rate is a percentage of all cancelled orders out of all orders over a given time period.",'mod'=>"dashperformance"),$_smarty_tpl ) );?>
" data-placement="top">
							<div class="circle-content-wrapper">
								<div class="title-wrapper">
									<p class="text-center">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Cancellation  Rate",'mod'=>"dashperformance"),$_smarty_tpl ) );?>

									</p>
								</div>
								<div class="value-wrapper">
									<p class="text-center" id="dp_cancellation_rate" style="color: #FF4036">
										<?php if ((isset($_smarty_tpl->tpl_vars['cancellation_rate']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cancellation_rate']->value, ENT_QUOTES, 'UTF-8', true);
}?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-lg-3">
					<div class="circle-wrapper">
						<div class="circle revenue label-tooltip" style="border: 25px solid #56CE56;"
							data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"The Revenue is the total amount of income generated by the sale of rooms.",'mod'=>"dashperformance"),$_smarty_tpl ) );?>
" data-placement="top">
							<div class="circle-content-wrapper">
								<div class="title-wrapper">
									<p class="text-center">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Revenue",'mod'=>"dashperformance"),$_smarty_tpl ) );?>

									</p>
								</div>
								<div class="value-wrapper">
									<p class="text-center" id="dp_revenue" style="color: #56CE56">
										<?php if ((isset($_smarty_tpl->tpl_vars['revenue']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['revenue']->value, ENT_QUOTES, 'UTF-8', true);
}?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-lg-3">
					<div class="circle-wrapper">
						<div class="circle nights-stayed label-tooltip" style="border: 25px solid #FFC148;"
							data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"The Nights Stayed is the total number of nights guests occupied over a given time period.",'mod'=>"dashperformance"),$_smarty_tpl ) );?>
" data-placement="top">
							<div class="circle-content-wrapper">
								<div class="title-wrapper">
									<p class="text-center">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Nights Stayed",'mod'=>"dashperformance"),$_smarty_tpl ) );?>

									</p>
								</div>
								<div class="value-wrapper">
									<p class="text-center" id="dp_nights_stayed" style="color: #FFC148">
										<?php if ((isset($_smarty_tpl->tpl_vars['nights_stayed']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['nights_stayed']->value, ENT_QUOTES, 'UTF-8', true);
}?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
</div>
<div class="clearfix"></div><?php }
}
