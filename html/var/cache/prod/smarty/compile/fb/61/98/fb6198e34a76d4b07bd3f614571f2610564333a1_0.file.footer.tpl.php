<?php
/* Smarty version 3.1.48, created on 2023-12-05 12:45:42
  from '/var/www/html/admin1/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_656f0d6629b367_07690213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb6198e34a76d4b07bd3f614571f2610564333a1' => 
    array (
      0 => '/var/www/html/admin1/themes/new-theme/template/footer.tpl',
      1 => 1701724886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656f0d6629b367_07690213 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
