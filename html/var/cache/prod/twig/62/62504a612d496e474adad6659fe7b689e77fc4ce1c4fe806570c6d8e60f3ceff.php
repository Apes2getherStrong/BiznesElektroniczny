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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig */
class __TwigTemplate_524f19580eaca6292d01bad32f76dbaf596dfae986143116412a966786ff2d53 extends \Twig\Template
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
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart summary", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <table class=\"table\">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit price", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "products", []));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "          ";
            if ( !twig_test_empty($this->getAttribute($context["product"], "customization", []))) {
                // line 45
                echo "            <tr>
              <td>";
                // line 46
                echo $this->getAttribute($context["product"], "image", []);
                echo "</td>
              <td>
                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
                echo "\">
                  ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "

                  ";
                // line 51
                if ($this->getAttribute($context["product"], "attributes", [])) {
                    // line 52
                    echo "                    <br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "attributes", []), "html", null, true);
                    echo "
                  ";
                }
                // line 54
                echo "                  <br>

                  ";
                // line 56
                if ($this->getAttribute($context["product"], "reference", [])) {
                    // line 57
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ref:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
                    ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", []), "html", null, true);
                    echo "
                  ";
                }
                // line 60
                echo "
                  ";
                // line 61
                if (($this->getAttribute($context["product"], "reference", []) && $this->getAttribute($context["product"], "supplier_reference", []))) {
                    // line 62
                    echo "                    / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "supplier_reference", []), "html", null, true);
                    echo "
                  ";
                }
                // line 64
                echo "                </a>
              </td>
              <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "unit_price_formatted", []), "html", null, true);
                echo "</td>
              <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                echo "</td>
              <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "stock_quantity", []), "html", null, true);
                echo "</td>
              <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "total_price_formatted", []), "html", null, true);
                echo "</td>
            </tr>

            <tr>
              <td colspan=\"2\">
                ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["product"], "customization", []), "fields", []));
                foreach ($context['_seq'] as $context["_key"] => $context["customizationField"]) {
                    // line 75
                    echo "                  <div class=\"row\">
                    <div class=\"col-6 text-right\">
                      ";
                    // line 77
                    if ($this->getAttribute($context["customizationField"], "name", [])) {
                        // line 78
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["customizationField"], "name", []), "html", null, true);
                        echo "</strong>
                      ";
                    } else {
                        // line 80
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Text #", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "</strong>
                      ";
                    }
                    // line 82
                    echo "                    </div>
                    <div class=\"col-6\">
                      ";
                    // line 84
                    if (($this->getAttribute($context["customizationField"], "type", []) == "customizable_file")) {
                        // line 85
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["customizationField"], "image", []), "html", null, true);
                        echo "\">
                      ";
                    } else {
                        // line 87
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["customizationField"], "value", []), "html", null, true);
                        echo "
                      ";
                    }
                    // line 89
                    echo "                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customizationField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "              </td>

              <td></td>
              <td>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "customization", []), "quantity", []), "html", null, true);
                echo "</td>
              <td></td>
              <td></td>
            </tr>
          ";
            }
            // line 100
            echo "
          ";
            // line 101
            if ((twig_test_empty($this->getAttribute($context["product"], "customization", [])) || ($this->getAttribute($context["product"], "cart_quantity", []) > $this->getAttribute($context["product"], "customization_quantity", [])))) {
                // line 102
                echo "            <tr>
              <td>";
                // line 103
                echo $this->getAttribute($context["product"], "image", []);
                echo "</td>
              <td>
                <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute($context["product"], "id", [])]), "html", null, true);
                echo "\">
                  ";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "

                  ";
                // line 108
                if ($this->getAttribute($context["product"], "attributes", [])) {
                    // line 109
                    echo "                    <br> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "attributes", []), "html", null, true);
                    echo "
                  ";
                }
                // line 111
                echo "                  <br>

                  ";
                // line 113
                if ($this->getAttribute($context["product"], "reference", [])) {
                    // line 114
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ref:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
                    ";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", []), "html", null, true);
                    echo "
                  ";
                }
                // line 117
                echo "
                  ";
                // line 118
                if (($this->getAttribute($context["product"], "reference", []) && $this->getAttribute($context["product"], "supplier_reference", []))) {
                    // line 119
                    echo "                    / ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "supplier_reference", []), "html", null, true);
                    echo "
                  ";
                }
                // line 121
                echo "                </a>
              </td>
              <td>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "unit_price_formatted", []), "html", null, true);
                echo "</td>
              <td>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "cart_quantity", []), "html", null, true);
                echo "</td>
              <td>";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "stock_quantity", []), "html", null, true);
                echo "</td>
              <td>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "total_price_formatted", []), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            // line 129
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
        <tr>
          <td colspan=\"5\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total cost of products:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
          <td class=\"text-right\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "total_products_formatted", []), "html", null, true);
        echo "</td>
        </tr>

        ";
        // line 136
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "total_discounts", [])) {
            // line 137
            echo "          <tr>
            <td colspan=\"5\">";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total value of vouchers:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "total_discounts_formatted", []), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 142
        echo "
        ";
        // line 143
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "total_wrapping", [])) {
            // line 144
            echo "          <tr>
            <td colspan=\"5\">";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total cost of gift wrapping:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "total_wrapping_formatted", []), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 149
        echo "
        ";
        // line 150
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "total_shipping", [])) {
            // line 151
            echo "          <tr>
            <td colspan=\"5\">";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total shipping costs:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "total_shipping_formatted", []), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 156
        echo "
        <tr>
          <td colspan=\"5\">
            <strong>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</strong>
          </td>
          <td class=\"text-right\">
            <strong>";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "total_formatted", []), "html", null, true);
        echo "</strong>
          </td>
        </tr>
      </tbody>
    </table>

    ";
        // line 168
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "cart_rules", []))) {
            // line 169
            echo "      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discount name", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th class=\"text-right\">";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
          ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "cart_rules", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cartRule"]) {
                // line 179
                echo "            <tr>
              <td>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["cartRule"], "id", []), "html", null, true);
                echo "</td>
              <td>
                <a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute(                // line 183
$context["cartRule"], "id", []), "updatecart_rule" => 1]), "html", null, true);
                // line 185
                echo "\">
                  ";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["cartRule"], "name", []), "html", null, true);
                echo "
                </a>
              </td>
              <td class=\"text-right\">
                ";
                // line 190
                if ($this->getAttribute($context["cartRule"], "is_free_shipping", [])) {
                    // line 191
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free shipping", [], "Admin.Shipping.Feature"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 193
                    echo "                  - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cartRule"], "formatted_value", []), "html", null, true);
                    echo "
                ";
                }
                // line 195
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartRule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "        </tbody>
      </table>
    ";
        }
        // line 201
        echo "
    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For this particular customer group, prices are displayed as:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
        <strong>
          ";
        // line 206
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "cartSummary", []), "is_tax_included", [])) {
            // line 207
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 209
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 211
        echo "        </strong>
      </p>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 211,  474 => 209,  468 => 207,  466 => 206,  461 => 204,  456 => 201,  451 => 198,  443 => 195,  437 => 193,  431 => 191,  429 => 190,  422 => 186,  419 => 185,  417 => 183,  416 => 182,  411 => 180,  408 => 179,  404 => 178,  397 => 174,  393 => 173,  389 => 172,  384 => 169,  382 => 168,  373 => 162,  367 => 159,  362 => 156,  356 => 153,  352 => 152,  349 => 151,  347 => 150,  344 => 149,  338 => 146,  334 => 145,  331 => 144,  329 => 143,  326 => 142,  320 => 139,  316 => 138,  313 => 137,  311 => 136,  305 => 133,  301 => 132,  297 => 130,  291 => 129,  285 => 126,  281 => 125,  277 => 124,  273 => 123,  269 => 121,  263 => 119,  261 => 118,  258 => 117,  253 => 115,  248 => 114,  246 => 113,  242 => 111,  236 => 109,  234 => 108,  229 => 106,  225 => 105,  220 => 103,  217 => 102,  215 => 101,  212 => 100,  204 => 95,  199 => 92,  191 => 89,  185 => 87,  179 => 85,  177 => 84,  173 => 82,  167 => 80,  161 => 78,  159 => 77,  155 => 75,  151 => 74,  143 => 69,  139 => 68,  135 => 67,  131 => 66,  127 => 64,  121 => 62,  119 => 61,  116 => 60,  111 => 58,  106 => 57,  104 => 56,  100 => 54,  94 => 52,  92 => 51,  87 => 49,  83 => 48,  78 => 46,  75 => 45,  72 => 44,  68 => 43,  61 => 39,  57 => 38,  53 => 37,  49 => 36,  45 => 35,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig");
    }
}
