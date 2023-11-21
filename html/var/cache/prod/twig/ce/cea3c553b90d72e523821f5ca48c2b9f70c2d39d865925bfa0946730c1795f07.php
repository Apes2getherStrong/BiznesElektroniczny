<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig */
class __TwigTemplate_eeae1d9570c63a29ac6a91e5eb9b17097acfddcf5f988b728ec9b49dd5257b1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"modal fade\" id=\"product-pack-modal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"card-header\">
        <div class=\"row\">
          <div class=\"col\">
            <h3 class=\"card-header-title\">
              ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products in pack", [], "Admin.Global"), "html", null, true);
        echo "
            </h3>
          </div>
          <div class=\"col\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <i class=\"material-icons\">
                close
              </i>
            </button>
          </div>
        </div>
      </div>
      <div class=\"modal-body\">
        <table class=\"table\" id=\"product-pack-modal-table\">
          <thead>
          <tr>
            <th colspan=\"3\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available", [], "Admin.Global"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>
          <tr class=\"d-none\" id=\"template-pack-table-row\">
            <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Package item", [], "Admin.Global"), "html", null, true);
        echo "</td>
            <td class=\"cell-product-img\">
              <img alt=\"\"/>
            </td>
            <td class=\"cell-product-name\">
              <a href=\"\">
                <p class=\"mb-0 product-name\"></p>
                <p class=\"mb-0 product-reference\">
                  ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference number:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </p>
                <p class=\"mb-0 product-supplier-reference\">
                  ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </p>
              </a>
            </td>
            <td class=\"cell-product-quantity\">
              <span class=\"badge badge-secondary rounded-circle\"></span>
            </td>
            <td class=\"cell-product-available-quantity\"></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 67,  86 => 64,  75 => 56,  67 => 51,  63 => 50,  59 => 49,  40 => 33,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig");
    }
}
