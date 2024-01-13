<?php
/* Smarty version 3.1.48, created on 2023-12-05 13:30:04
  from '/var/www/html/admin1/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_656f17cc543371_44209267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64cfaea3d786e1a9cf80feeafe8ad3757284176f' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1701779206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656f17cc543371_44209267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1662412246656f17cc542937_03227354', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_1662412246656f17cc542937_03227354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1662412246656f17cc542937_03227354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
