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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig */
class __TwigTemplate_b06db6edc890135fe01589112ded968fdeecce9dc18e7cee25b9dff0b351773e extends \Twig\Template
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
<table class=\"table mb-3";
        // line 26
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "documents", []))) {
            echo " table-empty";
        }
        echo "\">
  <thead>
  <tr>
    <th>
      ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Document", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "
    </th>
    <th class=\"text-right d-print-none\">
      ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
    </th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 47
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "documents", []))) {
            // line 48
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "documents", []));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 49
                echo "      <tr>
        <td class=\"documents-table-column-date\">
          ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatLite($this->getAttribute($context["document"], "createdAt", [])), "html", null, true);
                echo "
        </td>
        <td class=\"documents-table-column-type\">
          ";
                // line 54
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 55
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
                    echo "
          ";
                } elseif (($this->getAttribute(                // line 56
$context["document"], "type", []) == "credit_slip")) {
                    // line 57
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Credit slip", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
          ";
                } else {
                    // line 59
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery slip", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
          ";
                }
                // line 61
                echo "        </td>
        <td class=\"documents-table-column-download-link\">
          ";
                // line 63
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 64
                    echo "            <a target=\"_blank\" rel=\"noopener noreferrer nofollow\"
               href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPdf", true, ["submitAction" => "generateInvoicePDF", "id_order_invoice" => $this->getAttribute($context["document"], "id", [])]), "html", null, true);
                    echo "\"
            >
              ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "referenceNumber", []), "html", null, true);
                    echo "
            </a>
          ";
                } elseif (($this->getAttribute(                // line 69
$context["document"], "type", []) == "delivery_slip")) {
                    // line 70
                    echo "            <a target=\"_blank\" rel=\"noopener noreferrer nofollow\"
               href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPdf", true, ["submitAction" => "generateDeliverySlipPDF", "id_order_invoice" => $this->getAttribute($context["document"], "id", [])]), "html", null, true);
                    echo "\"
            >
              ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "referenceNumber", []), "html", null, true);
                    echo "
            </a>
          ";
                } elseif (($this->getAttribute(                // line 75
$context["document"], "type", []) == "credit_slip")) {
                    // line 76
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPdf", true, ["submitAction" => "generateOrderSlipPDF", "id_order_slip" => $this->getAttribute($context["document"], "id", [])]), "html", null, true);
                    echo "\">
              ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "referenceNumber", []), "html", null, true);
                    echo "
            </a>
          ";
                }
                // line 80
                echo "        </td>
        <td class=\"documents-table-column-amount\">
          ";
                // line 82
                if ($this->getAttribute($context["document"], "amount", [])) {
                    // line 83
                    echo "            <p class=\"mb-0\">
              ";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "amount", []), "html", null, true);
                    echo "

              ";
                    // line 86
                    if ($this->getAttribute($context["document"], "amountMismatch", [])) {
                        // line 87
                        echo "                (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "amountMismatch", []), "html", null, true);
                        echo ")
              ";
                    }
                    // line 89
                    echo "            </p>
          ";
                } else {
                    // line 91
                    echo "            --
          ";
                }
                // line 93
                echo "        </td>
        <td class=\"text-right documents-table-column-actions\">
          ";
                // line 95
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 96
                    echo "            ";
                    if (($this->getAttribute($context["document"], "isAddPaymentAllowed", []) && $this->getAttribute($context["document"], "amount", []))) {
                        // line 97
                        echo "              <button href=\"#\" class=\"js-enter-payment-btn btn btn-primary btn-sm\" data-payment-amount=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "numericalAmount", []), "html", null, true);
                        echo "\">
                ";
                        // line 98
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter payment", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "
              </button>
            ";
                    }
                    // line 101
                    echo "            <button href=\"#\" class=\"js-open-invoice-note-btn btn btn-primary btn-sm\">
              ";
                    // line 102
                    if (twig_test_empty($this->getAttribute($context["document"], "note", []))) {
                        // line 103
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "
              ";
                    } else {
                        // line 105
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "
              ";
                    }
                    // line 107
                    echo "            </button>
          ";
                }
                // line 109
                echo "        </td>
      </tr>
      ";
                // line 111
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 112
                    echo "        <tr class=\"d-none\">
          <td colspan=\"5\">
            <form action=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_update_invoice_note", ["orderId" => $this->getAttribute(                    // line 115
($context["orderForViewing"] ?? null), "id", []), "orderInvoiceId" => $this->getAttribute(                    // line 116
$context["document"], "id", [])]), "html", null, true);
                    // line 117
                    echo "\" method=\"post\">
              <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" name=\"invoice_note\" value=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "note", []), "html", null, true);
                    echo "\">
                <button class=\"btn btn-secondary ml-2 btn-sm js-cancel-invoice-note-btn\" type=\"button\">
                  ";
                    // line 121
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
                    echo "
                </button>
                <button class=\"btn btn-primary ml-2 btn-sm\" type=\"submit\">
                  ";
                    // line 124
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
                    echo "
                </button>
              </div>
            </form>
          </td>
        </tr>
      ";
                }
                // line 131
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "  ";
        } else {
            // line 133
            echo "    <tr>
      <td colspan=\"5\" class=\"text-center\">
        ";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no available document", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </td>
    </tr>
  ";
        }
        // line 139
        echo "  </tbody>
</table>

";
        // line 142
        if ((twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "documents", [])) && $this->getAttribute(($context["orderForViewing"] ?? null), "invoiceManagementIsEnabled", []))) {
            // line 143
            echo "  <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_generate_invoice", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]), "html", null, true);
            echo "\" method=\"POST\">
    <button class=\"btn btn-primary\">
      <i class=\"material-icons\">autorenew</i>
      ";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate invoice", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    </button>
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 146,  296 => 143,  294 => 142,  289 => 139,  282 => 135,  278 => 133,  275 => 132,  269 => 131,  259 => 124,  253 => 121,  248 => 119,  244 => 117,  242 => 116,  241 => 115,  240 => 114,  236 => 112,  234 => 111,  230 => 109,  226 => 107,  220 => 105,  214 => 103,  212 => 102,  209 => 101,  203 => 98,  198 => 97,  195 => 96,  193 => 95,  189 => 93,  185 => 91,  181 => 89,  175 => 87,  173 => 86,  168 => 84,  165 => 83,  163 => 82,  159 => 80,  153 => 77,  148 => 76,  146 => 75,  141 => 73,  136 => 71,  133 => 70,  131 => 69,  126 => 67,  121 => 65,  118 => 64,  116 => 63,  112 => 61,  106 => 59,  100 => 57,  98 => 56,  93 => 55,  91 => 54,  85 => 51,  81 => 49,  76 => 48,  74 => 47,  66 => 42,  60 => 39,  54 => 36,  48 => 33,  42 => 30,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/documents.html.twig");
    }
}
