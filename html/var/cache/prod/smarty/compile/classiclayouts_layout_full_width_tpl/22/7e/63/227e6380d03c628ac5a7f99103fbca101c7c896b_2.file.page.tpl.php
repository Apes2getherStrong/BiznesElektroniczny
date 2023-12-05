<?php
/* Smarty version 3.1.48, created on 2023-12-05 12:52:04
  from '/var/www/html/themes/classic/templates/customer/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_656f0ee491e1c1_51187408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '227e6380d03c628ac5a7f99103fbca101c7c896b' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/page.tpl',
      1 => 1701724888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 1,
    'file:customer/_partials/my-account-links.tpl' => 1,
  ),
),false)) {
function content_656f0ee491e1c1_51187408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436177561656f0ee491b4e6_41266882', 'notifications');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_392980654656f0ee491b9f5_54764436', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1789730676656f0ee491d250_60225927', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_1436177561656f0ee491b4e6_41266882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_1436177561656f0ee491b4e6_41266882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'customer_notifications'} */
class Block_1940159745656f0ee491be56_01968202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'customer_notifications'} */
/* {block 'page_content_top'} */
class Block_220556728656f0ee491bc34_02793433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1940159745656f0ee491be56_01968202', 'customer_notifications', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_34011793656f0ee491cc99_77937762 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Page content -->
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_392980654656f0ee491b9f5_54764436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_392980654656f0ee491b9f5_54764436',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_220556728656f0ee491bc34_02793433',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_1940159745656f0ee491be56_01968202',
  ),
  'page_content' => 
  array (
    0 => 'Block_34011793656f0ee491cc99_77937762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_220556728656f0ee491bc34_02793433', 'page_content_top', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34011793656f0ee491cc99_77937762', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'my_account_links'} */
class Block_488082915656f0ee491d8d9_69223597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_1789730676656f0ee491d250_60225927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_1789730676656f0ee491d250_60225927',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_488082915656f0ee491d8d9_69223597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_488082915656f0ee491d8d9_69223597', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
