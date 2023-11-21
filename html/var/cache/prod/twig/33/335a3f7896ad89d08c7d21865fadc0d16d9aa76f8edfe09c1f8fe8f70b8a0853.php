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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig */
class __TwigTemplate_082cc486c567e09f71c2b0025c6e5abdf8039cee282c1501eec0b3aeb1803974 extends \Twig\Template
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
<div class=\"card mt-2\" id=\"view_order_payments_block\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "payments", []), "payments", [])), "html", null, true);
        echo ")
    </h3>
  </div>

  <div class=\"card-body\">
    ";
        // line 34
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", 34)->display(twig_array_merge($context, ["payments" => $this->getAttribute(        // line 35
($context["orderForViewing"] ?? null), "payments", []), "linkedOrders" => $this->getAttribute(        // line 36
($context["orderForViewing"] ?? null), "linkedOrders", [])]));
        // line 38
        echo "
    <table class=\"table\">
      <thead>
        <tr>
          <th class=\"table-head-date\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-payment\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment method", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-transaction\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transaction ID", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-amount\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-invoice\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "payments", []), "payments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 52
            echo "        <tr>
          <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["payment"], "date", [])), "html", null, true);
            echo "</td>
          <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "paymentMethod", []), "html", null, true);
            echo "</td>
          <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "transactionId", []), "html", null, true);
            echo "</td>
          <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "amount", []), "html", null, true);
            echo "</td>
          <td>";
            // line 57
            if ($this->getAttribute($context["payment"], "invoiceNumber", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "invoiceNumber", []), "html", null, true);
            }
            echo "</td>
          <td class=\"text-right\">
            <button class=\"btn btn-sm btn-outline-secondary js-payment-details-btn\">
              ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details", [], "Admin.Global"), "html", null, true);
            echo "
            </button>
          </td>
        </tr>
        <tr class=\"d-none\">
          <td colspan=\"6\">
            <p class=\"mb-0\">
              <strong>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Card number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 68
            if ($this->getAttribute($context["payment"], "cardNumber", [])) {
                // line 69
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardNumber", []), "html", null, true);
                echo "
              ";
            } else {
                // line 71
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 73
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Card type", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 76
            if ($this->getAttribute($context["payment"], "cardBrand", [])) {
                // line 77
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardBrand", []), "html", null, true);
                echo "
              ";
            } else {
                // line 79
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 81
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expiration date", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 84
            if ($this->getAttribute($context["payment"], "cardExpiration", [])) {
                // line 85
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardExpiration", []), "html", null, true);
                echo "
              ";
            } else {
                // line 87
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 89
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cardholder name", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 92
            if ($this->getAttribute($context["payment"], "cardHolder", [])) {
                // line 93
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardHolder", []), "html", null, true);
                echo "
              ";
            } else {
                // line 95
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 97
            echo "            </p>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "      <tr class=\"d-print-none\">
        ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_add_payment", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])])]);
        echo "
          <td>
            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "date", []), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "payment_method", []), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "transaction_id", []), 'widget');
        echo "
          </td>
          <td>
            <div class=\"input-group\">
              ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "amount", []), 'widget');
        echo "
              ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "id_currency", []), 'widget');
        echo "
            </div>
          </td>
          <td>
            <div ";
        // line 119
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "id_invoice", []), "vars", []), "choices", []))) {
            echo "class=\"d-none\"";
        }
        echo ">
              ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "id_invoice", []), 'widget');
        echo "
            </div>
          </td>
          <td>
            <button type=\"submit\" class=\"btn btn-primary btn-sm\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "</button>
          </td>
        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? null), 'form_end');
        echo "
      </tr>
      </tbody>
    </table>

    ";
        // line 131
        if (( !$this->getAttribute(($context["orderForViewing"] ?? null), "valid", []) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["changeOrderCurrencyForm"] ?? null), "new_currency_id", []), "vars", []), "choices", [])))) {
            // line 132
            echo "      ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_change_currency", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])])]);
            echo "
        <div class=\"form-group row d-print-none\">
          <label class=\"form-control-label\">";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change currency", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderCurrencyForm"] ?? null), "new_currency_id", []), 'widget');
            echo "
              <button class=\"btn btn-outline-secondary btn-sm ml-2\">
                ";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>

            <div class=\"d-none\">
              ";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["changeOrderCurrencyForm"] ?? null), 'rest');
            echo "
            </div>

            <small class=\"text-muted\">
              ";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do not forget to update your exchange rate before making this change.", [], "Admin.Orderscustomers.Help"), "html", null, true);
            echo "
            </small>
          </div>
        </div>
      ";
            // line 152
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? null), 'form_end');
            echo "
    ";
        }
        // line 154
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 154,  319 => 152,  312 => 148,  305 => 144,  297 => 139,  292 => 137,  286 => 134,  280 => 132,  278 => 131,  270 => 126,  265 => 124,  258 => 120,  252 => 119,  245 => 115,  241 => 114,  234 => 110,  228 => 107,  222 => 104,  217 => 102,  214 => 101,  205 => 97,  199 => 95,  193 => 93,  191 => 92,  187 => 91,  183 => 89,  177 => 87,  171 => 85,  169 => 84,  165 => 83,  161 => 81,  155 => 79,  149 => 77,  147 => 76,  143 => 75,  139 => 73,  133 => 71,  127 => 69,  125 => 68,  121 => 67,  111 => 60,  103 => 57,  99 => 56,  95 => 55,  91 => 54,  87 => 53,  84 => 52,  80 => 51,  72 => 46,  68 => 45,  64 => 44,  60 => 43,  56 => 42,  50 => 38,  48 => 36,  47 => 35,  46 => 34,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/payments.html.twig");
    }
}
