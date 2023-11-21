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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig */
class __TwigTemplate_3826725a346dc0d71a7924a5d43290928f616f5bb905ebb23105c88e6a79bdb7 extends \Twig\Template
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
";
        // line 26
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "productsInformation", []), "boughtProductsInformation", []))) {
            // line 27
            echo "<div class=\"card customer-bought-products-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Purchased products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    <span class=\"badge badge-primary rounded\">";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "productsInformation", []), "boughtProductsInformation", [])), "html", null, true);
            echo "</span>
  </h3>
  <div class=\"card-body\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "productsInformation", []), "boughtProductsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                echo "          <tr class=\"customer-bought-product\">
            <td class=\"customer-bought-product-date\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "boughtDate", []), "html", null, true);
                echo "</td>
            <td class=\"customer-bought-product-name\">
              <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($context["product"], "orderId", []), "vieworder" => 1]), "html", null, true);
                echo "\">
                ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productName", []), "html", null, true);
                echo "
              </a>
            </td>
            <td class=\"customer-bought-product-quantity\">";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "boughtQuantity", []), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </tbody>
      </table>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 54,  90 => 51,  84 => 48,  80 => 47,  75 => 45,  72 => 44,  68 => 43,  61 => 39,  57 => 38,  53 => 37,  44 => 31,  40 => 30,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/bought_products.html.twig");
    }
}
