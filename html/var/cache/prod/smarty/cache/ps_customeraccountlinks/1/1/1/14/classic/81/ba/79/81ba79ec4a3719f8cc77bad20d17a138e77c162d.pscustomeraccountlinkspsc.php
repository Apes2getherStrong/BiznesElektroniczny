<?php
/* Smarty version 3.1.48, created on 2024-01-20 13:10:58
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65abb8523caba4_15280874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1705752404,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_65abb8523caba4_15280874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/d2/2d/85/d22d851f6d7c12eb35c1c34c8e84baa801a8cea2_2.file.helpers.tpl.php',
    'uid' => 'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2',
    'call_name' => 'smarty_template_function_renderLogo_140063013865abb852225090_96722937',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://localhost:18888/index.php?controller=my-account" rel="nofollow">
      Twoje konto
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Twoje konto</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="https://localhost:18888/index.php?controller=identity" title="Dane osobowe" rel="nofollow">
            Dane osobowe
          </a>
        </li>
            <li>
          <a href="https://localhost:18888/index.php?controller=history" title="Zamówienia" rel="nofollow">
            Zamówienia
          </a>
        </li>
            <li>
          <a href="https://localhost:18888/index.php?controller=order-slip" title="Moje pokwitowania - korekty płatności" rel="nofollow">
            Moje pokwitowania - korekty płatności
          </a>
        </li>
            <li>
          <a href="https://localhost:18888/index.php?controller=addresses" title="Adresy" rel="nofollow">
            Adresy
          </a>
        </li>
            <li>
          <a href="https://localhost:18888/index.php?controller=discount" title="Kupony" rel="nofollow">
            Kupony
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
