<?php
/* Smarty version 3.1.48, created on 2023-12-04 22:38:24
  from '/var/www/html/admin1/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_656e46d0502d12_94101132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faabd56fcbd62163a0cc95fa2ed15e1517fe6b08' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/content.tpl',
      1 => 1701724885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656e46d0502d12_94101132 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
