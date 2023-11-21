<?php
/* Smarty version 3.1.48, created on 2023-11-21 17:25:45
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/url.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_655cda099f17f9_74239632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96e11f8517d99a872341480eec115f81225f3310' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/url.tpl',
      1 => 1700573887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655cda099f17f9_74239632 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group psr-url <?php if (((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value['type_link'] != $_smarty_tpl->tpl_vars['LINK_TYPE_URL']->value) || !(isset($_smarty_tpl->tpl_vars['block']->value))) {?> inactive<?php }?>" data-type="url">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4 content_by_lang lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>inactive<?php }?>"
             data-type="url" data-lang="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
            <div class="input-group col-xs-12 col-sm-12 col-md-7 col-lg-12 psrea-flex">
                <div class="input-group-append">
                    <span class="input-group-text picto-url"><i class="material-icons">link</i></span>
                </div>
                <input class="block_url form-control" type="text" name="URL"
                       value="<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable6 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['allblock']->value[$_smarty_tpl->tpl_vars['block']->value['id_psreassurance']]['url'][$_prefixVariable6];
}?>">
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="clearfix"></div>
</div>
<?php }
}
