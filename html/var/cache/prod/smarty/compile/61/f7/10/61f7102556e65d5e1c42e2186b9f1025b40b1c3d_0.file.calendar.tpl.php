<?php
/* Smarty version 3.1.48, created on 2023-11-07 11:48:41
  from '/var/www/html/admin1/themes/default/template/controllers/stats/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_654a16091e2674_37257085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61f7102556e65d5e1c42e2186b9f1025b40b1c3d' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1698497862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../form_date_range_picker.tpl' => 1,
  ),
),false)) {
function content_654a16091e2674_37257085 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="statsContainer" class="col-md-9">
	<?php $_smarty_tpl->_subTemplateRender("file:../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
