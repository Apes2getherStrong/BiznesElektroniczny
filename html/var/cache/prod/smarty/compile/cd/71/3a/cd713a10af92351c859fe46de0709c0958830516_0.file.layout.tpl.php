<?php
/* Smarty version 3.1.48, created on 2023-10-27 14:53:48
  from '/var/www/html/admin1/themes/default/template/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_653bb2dcdebe31_53335302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd713a10af92351c859fe46de0709c0958830516' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/layout.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653bb2dcdebe31_53335302 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['header']->value;?>

<?php if ((isset($_smarty_tpl->tpl_vars['conf']->value))) {?>
	<div class="bootstrap">
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

		</div>
	</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
  <div class="bootstrap">
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
  </div>
<?php }
if (count($_smarty_tpl->tpl_vars['errors']->value) && current($_smarty_tpl->tpl_vars['errors']->value) != '' && (!(isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value)) || $_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value == false)) {?>

	<div class="bootstrap">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php if (count($_smarty_tpl->tpl_vars['errors']->value) == 1) {?>
			<?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d errors.','sprintf'=>array(count($_smarty_tpl->tpl_vars['errors']->value)),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>

			<br/>
			<ol>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
		</div>
	</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['informations']->value)) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
	<div class="bootstrap">
		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<ul id="infos_block" class="list-unstyled">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
	<div class="bootstrap">
		<div class="alert alert-success" style="display:block;">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
				<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
<?php }
if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
	<div class="bootstrap">
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php if (count($_smarty_tpl->tpl_vars['warnings']->value) > 1) {?>
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d warnings:','sprintf'=>array(count($_smarty_tpl->tpl_vars['warnings']->value))),$_smarty_tpl ) );?>
</h4>
			<?php }?>
			<ul class="list-unstyled">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
<?php }
echo $_smarty_tpl->tpl_vars['page']->value;?>

<div class="mobile-layer"></div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }
}
