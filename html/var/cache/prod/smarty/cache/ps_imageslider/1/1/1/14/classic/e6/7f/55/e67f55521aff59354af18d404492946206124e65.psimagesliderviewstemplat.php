<?php
/* Smarty version 3.1.48, created on 2024-01-20 13:10:58
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65abb8521c1ab3_86398364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1705752404,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_65abb8521c1ab3_86398364 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Pokaz slajdów">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://localhost:18888/index.php?id_product=232&amp;rewrite=warsztaty-o-czakrach-masterclass-odzyskaj-harmonie-i-odblokuj-swoj-maksymalny-potencjal&amp;controller=product">
            <figure>
              <img src="https://localhost:18888/modules/ps_imageslider/images/d9d9f488da9e3ab24c0f1427e6ad8c9175d83aec_1.jpg" alt="sample-1" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://localhost:18888/index.php?id_category=40&amp;controller=category">
            <figure>
              <img src="https://localhost:18888/modules/ps_imageslider/images/f3ea5882f94308403213b9b9b6fb8a85753eb2ab_2.jpg" alt="sample-2" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://localhost:18888/index.php?id_product=85&amp;rewrite=alchemia-roku-workbook-do-pracy-z-energia-poszczegolnych-miesiecy&amp;controller=product">
            <figure>
              <img src="https://localhost:18888/modules/ps_imageslider/images/636ca8fab176e3b11e32038ccab586211cf8d8e3_3.jpg" alt="sample-3" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}