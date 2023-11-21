<?php
/* Smarty version 3.1.48, created on 2023-11-21 17:04:28
  from '/var/www/html/admin1/themes/default/template/helpers/tree/tree_toolbar_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_655cd50c481134_27426809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ace5ed69aeb584e1b86547fca194c41c0134ccb' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/helpers/tree/tree_toolbar_search.tpl',
      1 => 1700573886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655cd50c481134_27426809 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- <label for="node-search"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl ) );?>
</label> -->
<div class="pull-right">
	<input type="text"
		<?php if ((isset($_smarty_tpl->tpl_vars['id']->value))) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
"<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?>name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
"<?php }?>
		class="search-field<?php if ((isset($_smarty_tpl->tpl_vars['class']->value))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['class']->value,'html','UTF-8' ));
}?>"
		placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'search...'),$_smarty_tpl ) );?>
" />
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['typeahead_source']->value)) && (isset($_smarty_tpl->tpl_vars['id']->value))) {?>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(
		function()
		{
			$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
").typeahead(
			{
				name: "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
",
				valueKey: 'name',
				local: [<?php echo $_smarty_tpl->tpl_vars['typeahead_source']->value;?>
]
			});

			$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
").keypress(function( event ) {
				if ( event.which == 13 ) {
					event.stopPropagation();
				}
			});
		}
	);
<?php echo '</script'; ?>
>
<?php }
}
}
