<?php
/* Smarty version 3.1.48, created on 2024-01-16 13:31:39
  from '/var/www/html/admin1/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65a6772b988509_34745865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '777beb713a7ff0f56ce497e7ced72520e63aa424' => 
    array (
      0 => '/var/www/html/admin1/themes/new-theme/template/content.tpl',
      1 => 1705407155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a6772b988509_34745865 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
