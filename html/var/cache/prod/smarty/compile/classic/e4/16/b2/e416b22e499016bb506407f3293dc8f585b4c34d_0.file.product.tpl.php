<?php
/* Smarty version 3.1.48, created on 2023-11-21 17:25:45
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_655cda09a144f8_79948515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e416b22e499016bb506407f3293dc8f585b4c34d' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display/product.tpl',
      1 => 1700573887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655cda09a144f8_79948515 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default panel-blockreassurance col-lg-12 col-xs-12">
    <div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific position for product page','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 position-hook">
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img js-show-all" name="PSR_HOOK_PRODUCT" value="1"
                       id="PSR_HOOK_PRODUCT" <?php if ($_smarty_tpl->tpl_vars['psr_hook_product']->value == 1) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_PRODUCT"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Main column','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayReassurance_active.jpg" width="150" height="150"
                     class="psr-product-color<?php if ($_smarty_tpl->tpl_vars['psr_hook_product']->value == 1) {?> active<?php }?>" />
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
displayReassurance_inactive.jpg" width="150" height="150"
                     class="psr-product-grey <?php if ($_smarty_tpl->tpl_vars['psr_hook_product']->value != 1) {?> active<?php }?>" />
            </div>
        </label>
        <label class="col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1">
            <div class="help-block customradiodesign">
                <input type="radio" class="input_img" name="PSR_HOOK_PRODUCT" value="0" id="PSR_HOOK_PRODUCT_0"
                       <?php if ($_smarty_tpl->tpl_vars['psr_hook_product']->value == 0) {?>checked="checked"<?php }?> />
                <label for="PSR_HOOK_PRODUCT_0"><span><span></span></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'none','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label><br/><br/>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
productPage_none.jpg" width="150" height="150" />
            </div>
        </label>
    </div>

</div>
<?php }
}
