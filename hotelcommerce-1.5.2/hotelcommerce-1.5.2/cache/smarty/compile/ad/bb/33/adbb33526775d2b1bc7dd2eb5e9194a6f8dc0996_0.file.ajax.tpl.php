<?php
/* Smarty version 3.1.39, created on 2022-03-03 10:40:26
  from 'C:\Users\Owner\Documents\Life\ECE\~ING 4.1\PPE\BagAwayGit\hotelcommerce-1.5.2\hotelcommerce-1.5.2\admin\themes\default\template\controllers\products\helpers\uploader\ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62209b1a122db8_89284812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adbb33526775d2b1bc7dd2eb5e9194a6f8dc0996' => 
    array (
      0 => 'C:\\Users\\Owner\\Documents\\Life\\ECE\\~ING 4.1\\PPE\\BagAwayGit\\hotelcommerce-1.5.2\\hotelcommerce-1.5.2\\admin\\themes\\default\\template\\controllers\\products\\helpers\\uploader\\ajax.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62209b1a122db8_89284812 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
	<div class="col-lg-12">
		<input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="file" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
[]"<?php if ((isset($_smarty_tpl->tpl_vars['url']->value))) {?> data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['multiple']->value)) && $_smarty_tpl->tpl_vars['multiple']->value) {?> multiple="multiple"<?php }?> style="width:0px;height:0px;" />
		<button class="btn btn-default" data-style="expand-right" data-size="s" type="button" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-add-button">
			<i class="icon-folder-open"></i> <?php if ((isset($_smarty_tpl->tpl_vars['multiple']->value)) && $_smarty_tpl->tpl_vars['multiple']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add files...'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add file...'),$_smarty_tpl ) );
}?>
		</button>
	</div>
</div>
<div class="well" style="display:none">
	<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-files-list"></div>
	<button class="ladda-button btn btn-primary" data-style="expand-right" type="button" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-upload-button" style="display:none;">
		<span class="ladda-label"><i class="icon-check"></i> <?php if ((isset($_smarty_tpl->tpl_vars['multiple']->value)) && $_smarty_tpl->tpl_vars['multiple']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload files'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload file'),$_smarty_tpl ) );
}?></span>
	</button>
</div>
<div class="row" style="display:none">
	<div class="alert alert-success" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-success"></div>
</div>
<div class="row" style="display:none">
	<div class="alert alert-danger" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-errors"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	function humanizeSize(bytes)
	{
		if (typeof bytes !== 'number') {
			return '';
		}

		if (bytes >= 1000000000) {
			return (bytes / 1000000000).toFixed(2) + ' GB';
		}

		if (bytes >= 1000000) {
			return (bytes / 1000000).toFixed(2) + ' MB';
		}

		return (bytes / 1000).toFixed(2) + ' KB';
	}

	$( document ).ready(function() {
		<?php if ((isset($_smarty_tpl->tpl_vars['multiple']->value)) && (isset($_smarty_tpl->tpl_vars['max_files']->value))) {?>
			var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_max_files = <?php echo $_smarty_tpl->tpl_vars['max_files']->value-count($_smarty_tpl->tpl_vars['files']->value);?>
;
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['files']->value)) && $_smarty_tpl->tpl_vars['files']->value) {?>
		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-images-thumbnails').parent().show();
		<?php }?>

		var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_upload_button = Ladda.create( document.querySelector('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-upload-button' ));
		var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_total_files = 0;

		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').fileupload({
			dataType: 'json',
			async: false,
			autoUpload: false,
			singleFileUploads: true,
			maxFileSize: <?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
,
			start: function (e) {
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_upload_button.start();
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-upload-button').unbind('click'); //Important as we bind it for every elements in add function
			},
			fail: function (e, data) {
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-errors').html(data.errorThrown.message).parent().show();
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-files-list').html('').parent().hide();
			},
			done: function (e, data) {
				if (data.result) {
					if (typeof data.result.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
 !== 'undefined') {
						for (var i=0; i<data.result.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
.length; i++) {
							if (typeof data.result.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
[i].error !== 'undefined' && data.result.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
[i].error != '') {
								$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-errors').html('<strong>'+data.result.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
[i].name+'</strong> : '+data.result.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
[i].error).parent().show();
								$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-files-list').html('').parent().hide();
							}
							else
							{
								$(data.context).appendTo($('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-success'));
								$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-success').parent().show();

								if (data.result.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
[i] !== null && data.result.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
[i].status == 'ok')
								{
									var response = data.result.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
[i];
									var cover = "icon-check-empty";
									var legend = '';

									if (response.cover == "1")
										cover = "icon-check-sign";

									if (typeof response.legend !== 'undefined' && response.legend != null)
										legend = response.legend[<?php echo intval($_smarty_tpl->tpl_vars['default_language']->value);?>
];

									imageLine(response.id, response.path, response.position, cover, response.shops, legend);
									$("#countImage").html(parseInt($("#countImage").html()) + 1);
									$("#img" + id).remove();
									$("#imageTable").tableDnDUpdate();
								}
							}

						}
					}

					$(data.context).find('button').remove();
				}
			},
		}).on('fileuploadalways', function (e, data) {
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_total_files--;

				if (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_total_files == 0)
				{
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_upload_button.stop();
					$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-upload-button').unbind('click');
					$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-files-list').parent().hide();
				}
		}).on('fileuploadadd', function(e, data) {
			if (typeof <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_max_files !== 'undefined') {
				if (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_total_files >= <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_max_files) {
					e.preventDefault();
					alert('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('You can upload a maximum of %s files',$_smarty_tpl->tpl_vars['max_files']->value)),$_smarty_tpl ) );?>
');
					return;
				}
			}

			data.context = $('<div/>').addClass('form-group').appendTo($('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-files-list'));
			var file_name = $('<span/>').append('<i class="icon-picture-o"></i> <strong>'+data.files[0].name+'</strong> ('+humanizeSize(data.files[0].size)+')').appendTo(data.context);

			var button = $('<button/>').addClass('btn btn-default pull-right').prop('type', 'button').html('<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove file'),$_smarty_tpl ) );?>
').appendTo(data.context).on('click', function() {
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_total_files--;
				data.files = null;

				var total_elements = $(this).parent().siblings('div.form-group').length;
				$(this).parent().remove();

				if (total_elements == 0) {
					$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-files-list').html('').parent().hide();
				}
			});

			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-files-list').parent().show();
			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-upload-button').show().bind('click', function () {
				if (data.files != null)
					data.submit();
			});

			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
_total_files++;
		}).on('fileuploadprocessalways', function (e, data) {
			var index = data.index,	file = data.files[index];

			if (file.error) {
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-errors').append('<div class="form-group"><i class="icon-picture-o"></i> <strong>'+file.name+'</strong> ('+humanizeSize(file.size)+') : '+file.error+'</div>').parent().show();
				$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-files-list').html('').parent().hide();
				$(data.context).find('button').trigger('click');
			}
		}).on('fileuploadsubmit', function (e, data) {
			var params = new Object();

			$('input[id^="legend_"]').each(function()
			{
				id = $(this).prop("id").replace("legend_", "legend[") + "]";
				params[id] = $(this).val();
			});

			data.formData = params;
		});

		$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-add-button').on('click', function() {
			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-success').html('').parent().hide();
			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-errors').html('').parent().hide();
			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').trigger('click');
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
