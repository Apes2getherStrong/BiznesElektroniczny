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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig */
class __TwigTemplate_c1051ecfe0e7847220bec7ff40c12082630efbf67594dea468ab3ad1fb72bd76 extends \Twig\Template
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
<tr id=\"addProductTableRow\" class=\"add-product d-none\" data-is-order-tax-included=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "isTaxIncluded", []), "html", null, true);
        echo "\">
  <td colspan=\"2\" class=\"pr-2\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "product_id", []), 'row');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "tax_rate", []), 'row');
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "search", []), 'label');
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "search", []), 'widget');
        echo "
    <div class=\"dropdown\">
      <div class=\"dropdown-menu\"></div>
    </div>
    <div class=\"input-group mt-2 d-none\" id=\"addProductCombinations\">
      <div class=\"input-group-prepend\">
        <div class=\"input-group-text\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Global"), "html", null, true);
        echo "</div>
      </div>
      <select id=\"addProductCombinationId\" class=\"custom-select\"></select>
    </div>
  </td>
  <td class=\"pr-2\">
   <div class=\"row add-product-inputs\">
     <div class=\"col-sm-6\">
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "price_tax_excluded", []), 'widget');
        echo "
     </div>

     <div class=\"col-sm-6\">
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "price_tax_included", []), 'widget');
        echo "
     </div>
   </div>
  </td>
  <td class=\"pr-2 add-product-quantity\">
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "quantity", []), 'row', ["type" => "number"]);
        echo "
  </td>
  <td id=\"addProductLocation\" class=\"cellProductLocation\"></td>
  <td id=\"addProductRefunded\" class=\"cellProductRefunded\"></td>
  <td id=\"addProductAvailable\"";
        // line 58
        if ( !($context["isAvailableQuantityDisplayed"] ?? null)) {
            echo " class=\"d-none\"";
        }
        echo "></td>
  <td id=\"addProductTotalPrice\"></td>
  ";
        // line 60
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [], "method")) {
            // line 61
            echo "    <td class=\"addProductInvoice pr-2\">
      ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "invoice", []), 'row', ["attr" => ["data-modal-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new invoice", [], "Admin.Orderscustomers.Feature"), "data-modal-apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create", [], "Admin.Actions"), "data-modal-cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "data-modal-body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to create a new invoice?", [], "Admin.Orderscustomers.Notification"), "data-modal-edit-price-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit the price", [], "Admin.Orderscustomers.Feature"), "data-modal-edit-price-apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "Admin.Actions"), "data-modal-edit-price-cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "data-modal-edit-price-body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to edit this product price? It will be applied to all invoices of this order.", [], "Admin.Orderscustomers.Notification")]]);
            // line 73
            echo "
    </td>
  ";
        }
        // line 76
        echo "  <td class=\"text-right add-product-buttons\">
    <div class=\"btn-group\">
      ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "cancel", []), 'row');
        echo "
      ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "add", []), 'row');
        echo "
    </div>
  </td>
</tr>
<tr id=\"addProductNewInvoiceInfo\" class=\"d-none\">
  <td colspan=\"12\">
    <div>
      <h4>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New invoice information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h4>
      <p><b>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Shipping.Feature"), "html", null, true);
        echo " :</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "carrierName", []), "html", null, true);
        echo "</p>
      ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "free_shipping", []), 'row');
        echo "
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 88,  133 => 87,  129 => 86,  119 => 79,  115 => 78,  111 => 76,  106 => 73,  104 => 62,  101 => 61,  99 => 60,  92 => 58,  85 => 54,  77 => 49,  70 => 45,  59 => 37,  50 => 31,  46 => 30,  42 => 29,  38 => 28,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig");
    }
}
