<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:24
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\themes\hotel-reservation-theme\modules\productcomments\productcomments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b18c78da2_85692271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c233a12fdaac2984d836d6ca00ff0485e2f537ae' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\themes\\hotel-reservation-theme\\modules\\productcomments\\productcomments.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b18c78da2_85692271 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="idTab5" class="tab-pane card">
	<div id="product_comments_block_tab">
		<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value && ($_smarty_tpl->tpl_vars['is_logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
			<p class="open-comment-block">
				<a id="new_comment_tab_btn" class="btn button button-medium" href="#new_comment_form">
					<span>
						<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make a review','mod'=>'productcomments'),$_smarty_tpl ) );?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write your review','mod'=>'productcomments'),$_smarty_tpl ) );?>

						<?php }?>
					</span>
				</a>
			</p>
			<div class="new_comment_form_outer" style="display: none;">
				<div id="new_comment_form">
					<form id="id_new_comment_form" action="#">
						<!-- <h2 class="page-subheading">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','mod'=>'productcomments'),$_smarty_tpl ) );?>

						</h2> -->
						<div class="row">
							<!-- <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?>
								<div class="product clearfix  col-xs-12 col-sm-6">
									<img src="<?php echo $_smarty_tpl->tpl_vars['productcomment_cover_image']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
									<div class="product_desc">
										<p class="product_name">
											<strong><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</strong>
										</p>
										<?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>

									</div>
								</div>
							<?php }?> -->
							<div class="new_comment_form_content col-xs-12 col-sm-12">
								<div id="new_comment_form_error" class="error" style="display: none;background-color: #cd5d5d;color: #ffffff;font-size: 13px;padding-left: 10px;font-weight:400;">
									<ul></ul>
								</div>
								<label for="comment_title">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title:','mod'=>'productcomments'),$_smarty_tpl ) );?>
 <sup class="required">*</sup>
								</label>
								<input id="comment_title" name="title" type="text" value=""/>
								<?php if (count($_smarty_tpl->tpl_vars['criterions']->value) > 0) {?>
									<ul id="criterions_list">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['criterions']->value, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
										<li>
											<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criterion']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
:</label>
											<div class="raty_star" data-score-name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]"></div>
											<div class="clearfix"></div>
										</li>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								<?php }?>
								<label for="content">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description:','mod'=>'productcomments'),$_smarty_tpl ) );?>
 <sup class="required">*</sup>
								</label>
								<textarea id="content" name="content"></textarea>
								<?php if ($_smarty_tpl->tpl_vars['allow_guests']->value == true && !$_smarty_tpl->tpl_vars['is_logged']->value) {?>
									<label>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your name:','mod'=>'productcomments'),$_smarty_tpl ) );?>
 <sup class="required">*</sup>
									</label>
									<input id="commentCustomerName" name="customer_name" type="text" value=""/>
								<?php }?>
								<div id="new_comment_form_footer">
									<input id="id_product_comment_send" name="id_product" type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['id_product_comment_form']->value;?>
' />
									<!-- <p class="fl required"><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required fields','mod'=>'productcomments'),$_smarty_tpl ) );?>
</p> -->
									<p class="fr review_submit_div">
										<button id="submitNewMessage" name="submitMessage" type="submit" class="btn button button-medium">
											<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make Review','mod'=>'productcomments'),$_smarty_tpl ) );?>
</span>
										</button>&nbsp;
										<!-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or','mod'=>'productcomments'),$_smarty_tpl ) );?>
&nbsp; -->
										<button id="cancelreview" name="cancelreview" type="submit" class="btn button button-medium">
											<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'productcomments'),$_smarty_tpl ) );?>
</span>
										</button>
									</p>
									<div class="clearfix"></div>
								</div> <!-- #new_comment_form_footer -->
							</div>
						</div>
					</form><!-- /end new_comment_form_content -->
				</div>
			</div>
			<hr>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['comment']->value['content']) {?>
					<div class="reviews_blogs">
						<div class="name_person">
							<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
							<span class="comment_date"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl ) );?>
</em></span>
						</div>
						<div class="review_container">
							<div class="review_title">
								<p><?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>
</p>
							</div>
							<div class="star_content clearfix"  itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
								<div class="raty_star readonly" data-score="<?php echo $_smarty_tpl->tpl_vars['comment']->value['grade'];?>
"></div>
		        				<meta itemprop="worstRating" content = "0" />
								<meta itemprop="ratingValue" content = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['grade'], ENT_QUOTES, 'UTF-8', true);?>
" />
		        				<meta itemprop="bestRating" content = "5" />
							</div>
							<div class="review_content">
								<p itemprop="reviewBody"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['content'], ENT_QUOTES, 'UTF-8', true));?>
</p>
									<ul>
										<?php if ($_smarty_tpl->tpl_vars['comment']->value['total_advice'] > 0) {?>
											<li>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['comment']->value['total_useful'],$_smarty_tpl->tpl_vars['comment']->value['total_advice']),'mod'=>'productcomments'),$_smarty_tpl ) );?>

											</li>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
											<?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_advice']) {?>
											<li>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Was this comment useful to you?','mod'=>'productcomments'),$_smarty_tpl ) );?>

												<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="1" data-id-product-comment="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'];?>
">
													<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'productcomments'),$_smarty_tpl ) );?>
</span>
												</button>
												<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="0" data-id-product-comment="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'];?>
">
													<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'productcomments'),$_smarty_tpl ) );?>
</span>
												</button>
											</li>
											<?php }?>
											<?php if (!$_smarty_tpl->tpl_vars['comment']->value['customer_report']) {?>
											<li>
												<span class="report_btn" data-id-product-comment="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'];?>
">
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','mod'=>'productcomments'),$_smarty_tpl ) );?>

												</span>
											</li>
											<?php }?>
										<?php }?>
									</ul>
								</p><!-- .comment_details -->
							</div>
						</div>
					</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<p class="align_center no_reviews_cond_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'productcomments'),$_smarty_tpl ) );?>
</p>
		<?php }?>
	</div> <!-- #product_comments_block_tab -->
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productcomments_controller_url'=>addcslashes($_smarty_tpl->tpl_vars['productcomments_controller_url']->value,'\'')),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('moderation_active'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['moderation_active']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productcomments_url_rewrite'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['productcomments_url_rewriting_activated']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('secure_key'=>$_smarty_tpl->tpl_vars['secure_key']->value),$_smarty_tpl ) );
$_block_plugin53 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin53, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'confirm_report_message'));
$_block_repeat=true;
echo $_block_plugin53->addJsDefL(array('name'=>'confirm_report_message'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure that you want to report this review?','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin53->addJsDefL(array('name'=>'confirm_report_message'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin54 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin54, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'productcomment_added'));
$_block_repeat=true;
echo $_block_plugin54->addJsDefL(array('name'=>'productcomment_added'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review has been added!','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin54->addJsDefL(array('name'=>'productcomment_added'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin55 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin55, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'productcomment_added_moderation'));
$_block_repeat=true;
echo $_block_plugin55->addJsDefL(array('name'=>'productcomment_added_moderation'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review has been added and will be available once approved by a moderator.','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin55->addJsDefL(array('name'=>'productcomment_added_moderation'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin56 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin56, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'productcomment_title'));
$_block_repeat=true;
echo $_block_plugin56->addJsDefL(array('name'=>'productcomment_title'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Review','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin56->addJsDefL(array('name'=>'productcomment_title'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin57 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin57, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'productcomment_ok'));
$_block_repeat=true;
echo $_block_plugin57->addJsDefL(array('name'=>'productcomment_ok'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin57->addJsDefL(array('name'=>'productcomment_ok'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<style type="text/css">

	.no_reviews_cond_block
	{
		color: #404040;
		font-size:15px;
		font-weight:400;
	}
	.name_person
	{
		padding: 10px;
		color: #404040;
		font-size:15px;
		font-weight:700;
	}
	.review_title
	{
		color: #404040;
		font-size:15px;
		font-weight:700;
	}
	.review_content
	{
		color: #404040;
		font-size:15px;
		font-weight:400;
		line-height: 23px;
		padding-top: 10px;
	}
	.review_container
	{
		padding:20px;
		border: 1px solid #cccccc;
	}
	.reviews_blogs
	{
		margin-bottom: 25px;
	}
	.comment_date
	{
		font-size:15px;

		font-weight:400;
		color: #9A9A9A;
		margin-left: 10px;
	}
	.review_submit_div
	{
		float: left!important;
	}
	.cancel, .star
	{
		width: 25px;
		font-size: 21px;
		height: 21px;

	}

	.review_container
	{
		border: 1px solid #cccccc;
	    padding: 20px;
	    position: relative;
	}
	.review_container:after, .review_container:before
	{
		border: medium solid transparent;
	    bottom: 100%;
	    content: " ";
	    height: 0;
	    left: 7%;
	    pointer-events: none;
	    position: absolute;
	    width: 0;
	}

	.review_container:after
	{
		border-color: rgba(136, 183, 213, 0) rgba(136, 183, 213, 0) #ffffff;
	    border-width: 9px;
	    margin-left: -22px;
	}
	.review_container:before
	{
		border-color: rgba(245, 233, 171, 0) rgba(245, 233, 171, 0) #cccccc;
	    border-width: 11px;
	    margin-left: -24px;
	}

</style>
<?php }
}
