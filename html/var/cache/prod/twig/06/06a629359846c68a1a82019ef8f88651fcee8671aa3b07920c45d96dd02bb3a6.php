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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig */
class __TwigTemplate_bab518b937b547b1254e464ee5f6bea305108c2bdd8fb500a3a8746838d4610b extends \Twig\Template
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
        $context["validOrdersCount"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "validOrders", []));
        // line 27
        $context["invalidOrdersCount"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "invalidOrders", []));
        // line 28
        $context["ordersCount"] = (($context["validOrdersCount"] ?? null) + ($context["invalidOrdersCount"] ?? null));
        // line 29
        echo "
<div class=\"card customer-orders-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_basket</i>
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["ordersCount"] ?? null), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 37
        if ((($context["ordersCount"] ?? null) > 0)) {
            // line 38
            echo "      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col\">
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-success rounded\">";
            // line 43
            echo twig_escape_filter($this->env, ($context["validOrdersCount"] ?? null), "html", null, true);
            echo "</span>
              ";
            // line 44
            $context["totalAmount"] = (("<span id=\"total-order-amount\">" . $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "totalSpent", [])) . "</span>");
            // line 45
            echo "              ";
            echo sprintf($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("for a total amount of %s", [], "Admin.Orderscustomers.Feature"), ($context["totalAmount"] ?? null));
            echo "
            </div>
            <div class=\"col\">
              ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-danger rounded\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["invalidOrdersCount"] ?? null), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col\">
          ";
            // line 57
            if (($context["validOrdersCount"] ?? null)) {
                // line 58
                echo "            <table class=\"table\">
              <thead>
              <tr>
                <th>";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
                <th class=\"text-right\">";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
              </tr>
              </thead>
              <tbody>
              ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "validOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 72
                    echo "                ";
                    $context["orderViewUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($context["order"], "orderId", []), "vieworder" => 1]);
                    // line 73
                    echo "
                <tr class=\"customer-valid-order\">
                  <td class=\"customer-valid-order-id js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderId", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-valid-order-date js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderPlacedDate", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-valid-order-payment js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "paymentMethodName", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-valid-order-status js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderStatus", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-valid-order-products js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderProductsCount", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-valid-order-total js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalPaid", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-valid-order-actions text-right\">
                    <div class=\"btn-group-action\">
                      <div class=\"btn-group\">
                        <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\"
                           class=\"btn tooltip-link dropdown-item view-link\"
                           data-toggle=\"pstooltip\"
                           data-placement=\"top\"
                           data-original-title=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View", [], "Admin.Actions"), "html", null, true);
                    echo "\"
                        >
                          <i class=\"material-icons\">zoom_in</i>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "              </tbody>
            </table>
          ";
            }
            // line 100
            echo "        </div>
      </div>

      <div class=\"row\">
        <div class=\"col\">
          ";
            // line 105
            if (($context["invalidOrdersCount"] ?? null)) {
                // line 106
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
                  <th class=\"text-right\">";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
                </tr>
              </thead>
              <tbody>
              ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "invalidOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 120
                    echo "                ";
                    $context["orderViewUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($context["order"], "orderId", []), "vieworder" => 1]);
                    // line 121
                    echo "
                <tr class=\"customer-invalid-order\">
                  <td class=\"customer-invalid-order-id js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderId", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-invalid-order-date js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderPlacedDate", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-invalid-order-payment js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "paymentMethodName", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-invalid-order-status js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 126
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderStatus", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-invalid-order-products js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderProductsCount", []), "html", null, true);
                    echo "</td>
                  <td class=\"customer-invalid-order-total js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalPaid", []), "html", null, true);
                    echo "</td>
                  <td class=\"text-right customer-invalid-order-actions\">
                    <div class=\"btn-group-action\">
                      <div class=\"btn-group\">
                        <a href=\"";
                    // line 132
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\"
                           class=\"btn tooltip-link dropdown-item grid-view-row-link\"
                           data-toggle=\"pstooltip\"
                           data-placement=\"top\"
                           data-original-title=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View", [], "Admin.Actions"), "html", null, true);
                    echo "\"
                        >
                          <i class=\"material-icons\">zoom_in</i>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "              </tbody>
            </table>
          ";
            }
            // line 148
            echo "        </div>
      </div>
    ";
        } else {
            // line 151
            echo "      <p class=\"text-muted text-center\">
        ";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has not placed any orders yet", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 155
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 155,  340 => 152,  337 => 151,  332 => 148,  327 => 145,  312 => 136,  305 => 132,  296 => 128,  290 => 127,  284 => 126,  278 => 125,  272 => 124,  266 => 123,  262 => 121,  259 => 120,  255 => 119,  248 => 115,  244 => 114,  240 => 113,  236 => 112,  232 => 111,  228 => 110,  224 => 109,  219 => 106,  217 => 105,  210 => 100,  205 => 97,  190 => 88,  183 => 84,  174 => 80,  168 => 79,  162 => 78,  156 => 77,  150 => 76,  144 => 75,  140 => 73,  137 => 72,  133 => 71,  126 => 67,  122 => 66,  118 => 65,  114 => 64,  110 => 63,  106 => 62,  102 => 61,  97 => 58,  95 => 57,  84 => 49,  80 => 48,  73 => 45,  71 => 44,  67 => 43,  63 => 42,  57 => 38,  55 => 37,  49 => 34,  45 => 33,  39 => 29,  37 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/orders.html.twig");
    }
}
