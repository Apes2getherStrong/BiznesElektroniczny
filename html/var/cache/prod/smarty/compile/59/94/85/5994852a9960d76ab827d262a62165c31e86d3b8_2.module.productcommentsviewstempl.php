<?php
/* Smarty version 3.1.48, created on 2023-12-05 12:46:16
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_656f0d88d4c7b9_53701035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5994852a9960d76ab827d262a62165c31e86d3b8' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1701724887,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:productcomments/views/templates/hook/average-grade-stars.tpl' => 1,
    'module:productcomments/views/templates/hook/product-comment-item-prototype.tpl' => 1,
    'module:productcomments/views/templates/hook/empty-product-comment.tpl' => 1,
    'module:productcomments/views/templates/hook/alert-modal.tpl' => 3,
    'module:productcomments/views/templates/hook/confirm-modal.tpl' => 1,
  ),
),false)) {
function content_656f0d88d4c7b9_53701035 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
  var productCommentUpdatePostErrorMessage = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, your review appreciation cannot be sent.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) ),'javascript' ));?>
';
  var productCommentAbuseReportErrorMessage = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, your abuse report cannot be sent.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) ),'javascript' ));?>
';
<?php echo '</script'; ?>
>

<div id="product-comments-list-header">
  <div class="comments-nb">
    <i class="material-icons chat" data-icon="chat"></i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb_comments']->value, ENT_QUOTES, 'UTF-8');?>
)
  </div>
  <?php $_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/average-grade-stars.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['average_grade']->value), 0, false);
?>
</div>

<?php ob_start();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/product-comment-item-prototype.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('comment_prototype', ob_get_clean());
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/empty-product-comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="product-comments-list"
  data-list-comments-url="<?php echo $_smarty_tpl->tpl_vars['list_comments_url']->value;?>
"
  data-update-comment-usefulness-url="<?php echo $_smarty_tpl->tpl_vars['update_comment_usefulness_url']->value;?>
"
  data-report-comment-url="<?php echo $_smarty_tpl->tpl_vars['report_comment_url']->value;?>
"
  data-comment-item-prototype="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_prototype']->value,'html' )), ENT_QUOTES, 'UTF-8');?>
">
</div>

<div id="product-comments-list-footer">
  <div id="product-comments-list-pagination"></div>
  <?php if ($_smarty_tpl->tpl_vars['post_allowed']->value && $_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
    <button class="btn btn-comment btn-comment-big post-product-comment">
      <i class="material-icons edit" data-icon="edit"></i>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </button>
  <?php }?>
</div>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review appreciation cannot be sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'update-comment-usefulness-post-error','modal_title'=>$_prefixVariable1,'icon'=>'error'), 0, false);
?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report comment','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure that you want to report this comment?','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/confirm-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'report-comment-confirmation','modal_title'=>$_prefixVariable2,'modal_message'=>$_prefixVariable3,'icon'=>'feedback'), 0, false);
?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your report has been submitted and will be considered by a moderator.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'report-comment-posted','modal_title'=>$_prefixVariable4,'modal_message'=>$_prefixVariable5), 0, true);
?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your report cannot be sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'report-comment-post-error','modal_title'=>$_prefixVariable6,'icon'=>'error'), 0, true);
}
}
