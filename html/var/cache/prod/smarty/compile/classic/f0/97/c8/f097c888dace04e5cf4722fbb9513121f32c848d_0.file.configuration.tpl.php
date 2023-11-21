<?php
/* Smarty version 3.1.48, created on 2023-11-07 12:08:46
  from '/var/www/html/modules/ps_checkout/views/templates/admin/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_654a1abea35221_42857633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f097c888dace04e5cf4722fbb9513121f32c848d' => 
    array (
      0 => '/var/www/html/modules/ps_checkout/views/templates/admin/configuration.tpl',
      1 => 1698497863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654a1abea35221_42857633 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app"></div>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
