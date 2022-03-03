<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\productcomments\productcomments-extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b18c1d960_30146014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '021eaa6647ba0fd17609e3e465451932dc56ae63' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\productcomments\\productcomments-extra.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b18c1d960_30146014 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php if ((!$_smarty_tpl->tpl_vars['content_only']->value && (($_smarty_tpl->tpl_vars['nbComments']->value == 0 && $_smarty_tpl->tpl_vars['too_early']->value == false && ($_smarty_tpl->tpl_vars['is_logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value)) || ($_smarty_tpl->tpl_vars['nbComments']->value != 0)))) {?>
<div id="product_comments_block_extra" class="no-print" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
	<?php if ($_smarty_tpl->tpl_vars['nbComments']->value != 0) {?>
		<div class="comments_note clearfix">
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating','mod'=>'productcomments'),$_smarty_tpl ) );?>
&nbsp;</span>
			<div class="star_content clearfix">
				<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= 5; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
						<div class="star"></div>
					<?php } else { ?>
						<div class="star star_on"></div>
					<?php }?>
				<?php
}
}
?>
				<meta itemprop="worstRating" content = "0" />
				<meta itemprop="ratingValue" content = "<?php if ((isset($_smarty_tpl->tpl_vars['ratings']->value['avg']))) {
echo htmlspecialchars(round($_smarty_tpl->tpl_vars['ratings']->value['avg'],1), ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars(round($_smarty_tpl->tpl_vars['averageTotal']->value,1), ENT_QUOTES, 'UTF-8', true);
}?>" />
				<meta itemprop="bestRating" content = "5" />
			</div>
		</div> <!-- .comments_note -->
	<?php }?>

	<ul class="comments_advices">
		<?php if ($_smarty_tpl->tpl_vars['nbComments']->value != 0) {?>
			<li>
				<a href="#idTab5" class="reviews">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read reviews','mod'=>'productcomments'),$_smarty_tpl ) );?>
 (<span itemprop="reviewCount"><?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
</span>)
				</a>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['too_early']->value == false && ($_smarty_tpl->tpl_vars['is_logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
			<li>
				<a class="open-comment-form" href="#new_comment_form">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','mod'=>'productcomments'),$_smarty_tpl ) );?>

				</a>
			</li>
		<?php }?>
	</ul>
</div>
<?php }?>
<!--  /Module ProductComments -->
<?php }
}
