<?php
/* Smarty version 3.1.48, created on 2024-01-20 13:10:33
  from '/var/www/html/admin1/themes/new-theme/template/components/layout/non-responsive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65abb839e6d3f5_84268220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd6c69a5efbbd95d3a36f0374961c923b4cbefac' => 
    array (
      0 => '/var/www/html/admin1/themes/new-theme/template/components/layout/non-responsive.tpl',
      1 => 1705752401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65abb839e6d3f5_84268220 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="non-responsive" class="js-non-responsive">
  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oh no!'),$_smarty_tpl ) );?>
</h1>
  <p class="mt-3">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The mobile version of this page is not available yet.'),$_smarty_tpl ) );?>

  </p>
  <p class="mt-2">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please use a desktop computer to access this page, until is adapted to mobile.'),$_smarty_tpl ) );?>

  </p>
  <p class="mt-2">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thank you.'),$_smarty_tpl ) );?>

  </p>
  <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_tab_link']->value,'html','UTF-8' ));?>
" class="btn btn-primary py-1 mt-3">
    <i class="material-icons">arrow_back</i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','d'=>'Admin.Global'),$_smarty_tpl ) );?>

  </a>
</div>
<?php }
}
