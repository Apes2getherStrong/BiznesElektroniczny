<?php
/* Smarty version 3.1.48, created on 2023-11-07 13:16:19
  from '/var/www/html/admin1/themes/default/template/controllers/customer_threads/helpers/view/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_654a2a93044085_66802982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a44d08a460f5bdec8ea249b60783c4671929b6d2' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/controllers/customer_threads/helpers/view/message.tpl',
      1 => 1698497862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654a2a93044085_66802982 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>
	<?php $_smarty_tpl->_assignInScope('type', "customer");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('type', "employee");
}?>

<div class="message-item<?php if ($_smarty_tpl->tpl_vars['initial']->value) {?>-initial-body<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
	<div class="message-avatar">
		<div class="avatar-md">
			<?php if ($_smarty_tpl->tpl_vars['type']->value == 'customer') {?>
				<i class="icon-user icon-3x"></i>
			<?php } else { ?>
				<?php if ((isset($_smarty_tpl->tpl_vars['current_employee']->value->firstname))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['employee_image'];?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_employee']->value->firstname,'html','UTF-8' ));?>
" /><?php }?>
			<?php }?>
		</div>
	</div>
<?php }?>
	<div class="message-body">
		<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
			<h4 class="message-item-heading">
				<i class="icon-mail-reply text-muted"></i>
					<?php if ($_smarty_tpl->tpl_vars['type']->value == 'customer') {?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['customer_name'],'html','UTF-8' ));?>

					<?php } else { ?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['employee_name'],'html','UTF-8' ));?>

					<?php }?>
			</h4>
		<?php }?>
		<span class="message-date">&nbsp;<i class="icon-calendar"></i> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['message']->value['date_add'],11,5);?>
</span>
		<?php if ((isset($_smarty_tpl->tpl_vars['message']->value['file_name']))) {?> <span class="message-product">&nbsp;<i class="icon-link"></i> <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['file_link'],'html','UTF-8' ));?>
" target="_blank" rel="noopener noreferrer nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Attachment",'d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</a></span><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['message']->value['product_name']))) {?> <span class="message-attachment">&nbsp;<i class="icon-book"></i> <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['product_link'],'html','UTF-8' ));?>
" target="_blank" rel="noopener noreferrer nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Product",'d'=>'Admin.Global'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['product_name'],'html','UTF-8' ));?>
 </a></span><?php }?>
		<p class="message-item-text"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['message'],'html','UTF-8' )));?>
</p>
	</div>
</div>
<?php }
}
