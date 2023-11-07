<?php
/* Smarty version 3.1.48, created on 2023-11-07 13:16:19
  from '/var/www/html/admin1/themes/default/template/controllers/customer_threads/helpers/view/modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_654a2a9301e006_77811511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e765b6db63221c15c7ddd463d4040f46f417fb22' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/controllers/customer_threads/helpers/view/modal.tpl',
      1 => 1698497862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654a2a9301e006_77811511 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomerThreads',true,array(),array('id_customer_thread'=>intval($_smarty_tpl->tpl_vars['id_customer_thread']->value),'viewcustomer_thread'=>1)),'html','UTF-8' ));?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Forward this discussion",'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</h4>
		</div>
		<div class="modal-body">
			<div class="row row-margin-bottom">
				<label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forward this discussion to an employee:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-3">
					<select name="id_employee_forward">
						<option value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- Choose --','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['id_employee'];?>
"> <?php echo Tools::substr($_smarty_tpl->tpl_vars['employee']->value['firstname'],0,1);?>
. <?php echo $_smarty_tpl->tpl_vars['employee']->value['lastname'];?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Someone else','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</option>
					</select>
				</div>
			</div>
			<div id="message_forward_email" class="row row-margin-bottom" style="display:none">
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-3">
					<input type="email" name="email" />
				</div>
			</div>
			<div id="message_forward" style="display:none;">
				<div class="row row-margin-bottom">
					<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-7">
						<textarea name="message_forward" rows="6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can add a comment here.','d'=>'Admin.Orderscustomers.Help'),$_smarty_tpl ) );?>
</textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Close"),$_smarty_tpl ) );?>
</button>
			<button type="submit" class="btn btn-primary" name="submitForward" disabled="disabled"><i class="icon-mail-forward"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Forward",'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</button>
		</div>
		</div>
	</div>
</div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	$("select[name='id_employee_forward']").on('change', function() {
		if ($(this).val() != '-1')
			$("button[name='submitForward']").prop('disabled', false);
		else
			$("button[name='submitForward']").prop('disabled', 'disabled');
	});
<?php echo '</script'; ?>
>
<?php }
}
