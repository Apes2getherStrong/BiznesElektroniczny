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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig */
class __TwigTemplate_fe7353ad13246a7ffd9095e4e1e04bfe11f4f0f21f9dd60cd622e4874eea29f0 extends \Twig\Template
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
<div id=\"customerCard\" class=\"customer card\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
  </div>

  <div class=\"card-body\">
    <div id=\"customerInfo\" class=\"info-block\">
      <div class=\"row\">
        ";
        // line 36
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
            // line 37
            echo "          <div class=\"col-xxl-7\">
            <h2 class=\"mb-0\">
              <i class=\"material-icons\">account_box</i>

              ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "gender", []), "html", null, true);
            echo "
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "firstName", []), "html", null, true);
            echo "
              ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "lastName", []), "html", null, true);
            echo "

              <strong class=\"text-muted ml-2\">#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []), "html", null, true);
            echo "</strong>
            </h2>
            ";
            // line 47
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", [])) {
                // line 48
                echo "              <strong class=\"text-muted\">Guest</strong>
            ";
            }
            // line 50
            echo "          </div>
          <div id=\"viewFullDetails\" class=\"col-xxl-5 text-xxl-right\">
            <a class=\"d-print-none\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", [])]), "html", null, true);
            echo "\">
              ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View full details", [], "Admin.Actions"), "html", null, true);
            echo "
            </a>
          </div>
        ";
        } else {
            // line 57
            echo "          <div class=\"col\">
            <h2 class=\"mb-0\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "</h2>
          </div>
        ";
        }
        // line 61
        echo "      </div>
    </div>
    ";
        // line 63
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
            // line 64
            echo "      <div class=\"row mt-3\">
        <div id=\"customerEmail\" class=\"col-xxl-6\">
          <p class=\"mb-1\">
            <strong>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email:", [], "Admin.Global"), "html", null, true);
            echo "</strong>
          </p>
          <p>
            <a href=\"mailto:";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "email", []), "html", null, true);
            echo "\">
              ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "email", []), "html", null, true);
            echo "
            </a>
          </p>

          ";
            // line 75
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", []) === false)) {
                // line 76
                echo "            <p class=\"mb-1\">
              <strong>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account registered:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "accountRegistrationDate", [])), "html", null, true);
                echo "</p>
          ";
            }
            // line 81
            echo "
          ";
            // line 82
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "siret", []))) {
                // line 83
                echo "            <p class=\"mb-1\">
              <strong>";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIRET", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "siret", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 88
            echo "
          ";
            // line 89
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []))) {
                // line 90
                echo "            <p class=\"mb-1 d-block d-md-none\">
              <strong>";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APE", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p class=\"d-block d-md-none\">";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 95
            echo "        </div>
        <div id=\"validatedOrders\" class=\"col-xxl-6\">
          <p class=\"mb-1\">
            <strong>";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Validated orders placed:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
          </p>
          <p>
            <span class=\"badge rounded badge-dark\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "validOrdersPlaced", []), "html", null, true);
            echo "</span>
          </p>

          ";
            // line 104
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", []) === false)) {
                // line 105
                echo "            <p class=\"mb-1\">
              <strong>";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent since registration:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p>
              <span class=\"badge rounded badge-dark\">";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "totalSpentSinceRegistration", []), "html", null, true);
                echo "</span>
            </p>
          ";
            }
            // line 112
            echo "
          ";
            // line 113
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []))) {
                // line 114
                echo "            <p class=\"mb-1 d-none d-md-block\">
              <strong>";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APE", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p class=\"d-none d-md-block\">";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "ape", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 119
            echo "        </div>
      </div>
    ";
        }
        // line 122
        echo "    <div class=\"info-block mt-2\">
      <div class=\"row\">
        ";
        // line 124
        if (($this->getAttribute(($context["orderForViewing"] ?? null), "virtual", []) === false)) {
            // line 125
            echo "          <div id=\"addressShipping\" class=\"info-block-col col-xl-6\">
            <div class=\"row justify-content-between no-gutters\">
              <strong>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 128
            if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
                // line 129
                echo "                <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
                  <i class=\"material-icons\">more_vert</i>
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"dropdown-item\" id=\"js-delivery-address-edit-btn\"
                     href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "addressType" => "delivery", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
                echo "\"
                  >
                    ";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
                echo "
                  </a>

                  <a href=\"#\"
                     class=\"dropdown-item js-update-customer-address-modal-btn\"
                     data-toggle=\"modal\"
                     data-target=\"#updateCustomerAddressModal\"
                     data-address-type=\"shipping\"
                  >
                    ";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
                echo "
                  </a>
                </div>
              ";
            }
            // line 150
            echo "            </div>

            ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddressFormatted", []), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 153
                echo "              <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "          </div>
        ";
        }
        // line 157
        echo "        <div id=\"addressInvoice\" class=\"info-block-col ";
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "virtual", [])) {
            echo "col-md-12";
        } else {
            echo "col-xl-6";
        }
        echo "\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>

            ";
        // line 161
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
            // line 162
            echo "              <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
                <i class=\"material-icons\">more_vert</i>
              </a>

              <div class=\"dropdown-menu dropdown-menu-right\">
                <a class=\"dropdown-item\" id=\"js-invoice-address-edit-btn\"
                   href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "addressType" => "invoice", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
            echo "\"
                >
                  ";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
            echo "
                </a>

                <a href=\"#\"
                   class=\"dropdown-item js-update-customer-address-modal-btn\"
                   data-toggle=\"modal\"
                   data-target=\"#updateCustomerAddressModal\"
                   data-address-type=\"invoice\"
                >
                  ";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
            echo "
                </a>
              </div>
            ";
        }
        // line 183
        echo "          </div>

          ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddressFormatted", []), "
"));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 186
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "</p>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "        </div>
      </div>
    </div>

    ";
        // line 192
        if ((( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0)) &&  !(null === ($context["privateNoteForm"] ?? null)))) {
            // line 193
            echo "      <div id=\"privateNote\" class=\"mt-2 info-block\">
        <div class=\"row\">
          ";
            // line 195
            $context["isPrivateNoteOpen"] =  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "privateNote", []));
            // line 196
            echo "
          <div class=\"col-md-6\">
            <h3 class=\"mb-0";
            // line 198
            echo (( !($context["isPrivateNoteOpen"] ?? null)) ? (" d-print-none") : (""));
            echo "\">
              ";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Private note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"col-md-6 text-right d-print-none\">
            <a href=\"#\"
               class=\"float-right tooltip-link js-private-note-toggle-btn ";
            // line 204
            if (($context["isPrivateNoteOpen"] ?? null)) {
                echo "is-opened";
            }
            echo "\"
            >
              ";
            // line 206
            if (($context["isPrivateNoteOpen"] ?? null)) {
                // line 207
                echo "                <i class=\"material-icons\">remove</i>
              ";
            } else {
                // line 209
                echo "                <i class=\"material-icons\">add</i>
              ";
            }
            // line 211
            echo "            </a>
          </div>

          <div class=\"col-md-12 mt-3 js-private-note-block ";
            // line 214
            if ( !($context["isPrivateNoteOpen"] ?? null)) {
                echo "d-none";
            }
            echo "\">
            ";
            // line 215
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_set_private_note", ["customerId" => $this->getAttribute($this->getAttribute(            // line 217
($context["orderForViewing"] ?? null), "customer", []), "id", []), "back" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute(            // line 218
($context["orderForViewing"] ?? null), "id", [])])])]);
            // line 220
            echo "

              ";
            // line 222
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["privateNoteForm"] ?? null), "note", []), 'widget');
            echo "
              <div class=\"d-none\">
                ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["privateNoteForm"] ?? null), 'rest');
            echo "
              </div>

              <div class=\"mt-2 text-right\">
                <button type=\"submit\"
                        class=\"btn btn-primary btn-sm js-private-note-btn\"
                        ";
            // line 230
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "privateNote", []))) {
                echo "disabled";
            }
            // line 231
            echo "                >
                  ";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "
                </button>
              </div>
            ";
            // line 235
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_end');
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 240
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 240,  468 => 235,  462 => 232,  459 => 231,  455 => 230,  446 => 224,  441 => 222,  437 => 220,  435 => 218,  434 => 217,  433 => 215,  427 => 214,  422 => 211,  418 => 209,  414 => 207,  412 => 206,  405 => 204,  397 => 199,  393 => 198,  389 => 196,  387 => 195,  383 => 193,  381 => 192,  375 => 188,  366 => 186,  361 => 185,  357 => 183,  350 => 179,  338 => 170,  333 => 168,  325 => 162,  323 => 161,  318 => 159,  308 => 157,  304 => 155,  295 => 153,  290 => 152,  286 => 150,  279 => 146,  267 => 137,  262 => 135,  254 => 129,  252 => 128,  248 => 127,  244 => 125,  242 => 124,  238 => 122,  233 => 119,  228 => 117,  223 => 115,  220 => 114,  218 => 113,  215 => 112,  209 => 109,  203 => 106,  200 => 105,  198 => 104,  192 => 101,  186 => 98,  181 => 95,  176 => 93,  171 => 91,  168 => 90,  166 => 89,  163 => 88,  158 => 86,  153 => 84,  150 => 83,  148 => 82,  145 => 81,  140 => 79,  135 => 77,  132 => 76,  130 => 75,  123 => 71,  119 => 70,  113 => 67,  108 => 64,  106 => 63,  102 => 61,  96 => 58,  93 => 57,  86 => 53,  82 => 52,  78 => 50,  74 => 48,  72 => 47,  67 => 45,  62 => 43,  58 => 42,  54 => 41,  48 => 37,  46 => 36,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/customer.html.twig");
    }
}
