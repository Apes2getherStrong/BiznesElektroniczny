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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig */
class __TwigTemplate_cadf76c43dfe6921a8296d631326e28e318cbe613c401184abc9db7a4be2add5 extends \Twig\Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderStatusActionBarForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_update_status", ["orderId" => $this->getAttribute(        // line 27
($context["orderForViewing"] ?? null), "id", [])]), "attr" => ["id" => "update_order_status_action_form"]]);
        // line 31
        echo "

  <div class=\"input-group\">
    ";
        // line 34
        $context["backgroundColor"] = "#ffffff";
        // line 35
        echo "    ";
        $context["isBright"] = true;
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["updateOrderStatusActionBarForm"] ?? null), "new_order_status_id", []), "vars", []), "choices", []));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 37
            echo "      ";
            if (($this->getAttribute($context["choice"], "value", []) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["updateOrderStatusActionBarForm"] ?? null), "new_order_status_id", []), "vars", []), "data", []))) {
                // line 38
                echo "        ";
                $context["backgroundColor"] = $this->getAttribute($this->getAttribute($context["choice"], "attr", []), "data-background-color", [], "array");
                // line 39
                echo "        ";
                $context["isBright"] = $this->getAttribute($this->getAttribute($context["choice"], "attr", []), "data-is-bright", [], "array");
                // line 40
                echo "      ";
            }
            // line 41
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    <div class=\"select-status";
        if (($context["isBright"] ?? null)) {
            echo " is-bright";
        }
        echo "\" id=\"update_order_status_action_input_wrapper\" style=\"background-color:";
        echo twig_escape_filter($this->env, ($context["backgroundColor"] ?? null), "html", null, true);
        echo ";\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["updateOrderStatusActionBarForm"] ?? null), "new_order_status_id", []), 'widget', ["attr" => ["class" => "select-status-colored"], "id" => "update_order_status_action_input"]);
        // line 48
        echo "
    </div>

    <button class=\"btn btn-action ml-2\"
            id=\"update_order_status_action_btn\"
            disabled
            data-order-status-id=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "history", []), "currentOrderStatusId", []), "html", null, true);
        echo "\"
    >
      ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </button>
  </div>

  <div class=\"d-none\">
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["updateOrderStatusActionBarForm"] ?? null), 'rest');
        echo "
  </div>
  ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderStatusActionBarForm"] ?? null), 'form_end');
        echo "

  ";
        // line 65
        if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "canGenerateInvoice", [])) {
            // line 66
            echo "    <form class=\"order-actions-invoice\">
      <div class=\"input-group\">
        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_generate_invoice_pdf", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]), "html", null, true);
            echo "\"
           class=\"btn btn-action\">
          <i class=\"material-icons\">receipt</i>
          ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View invoice", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </a>
      </div>
    </form>
  ";
        }
        // line 76
        echo "
  <form class=\"order-actions-print\">
    <div class=\"input-group\">
      <button type=\"button\" class=\"btn btn-action js-print-order-view-page\">
        <i class=\"material-icons\" aria-hidden=\"true\">print</i>
        ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Print order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </button>
    </div>
  </form>

  ";
        // line 86
        if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "canGenerateDeliverySlip", [])) {
            // line 87
            echo "    <form class=\"order-actions-delivery\">
      <div class=\"input-group\">
        <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_generate_delivery_slip_pdf", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]), "html", null, true);
            echo "\"
           class=\"btn btn-action\">
          <i class=\"material-icons\">local_shipping</i>
          ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View delivery slip", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </a>
      </div>
    </form>
  ";
        }
        // line 97
        echo "
  ";
        // line 98
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", 98)->display($context);
        // line 99
        echo "
  ";
        // line 100
        if (($context["merchandiseReturnEnabled"] ?? null)) {
            // line 101
            echo "    ";
            if ($this->getAttribute(($context["orderForViewing"] ?? null), "isDelivered", [], "method")) {
                // line 102
                echo "      <button class=\"btn btn-action return-product-display\" type=\"button\"";
                if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "isRefundable", [], "method")) {
                    echo " disabled";
                }
                echo ">
        <i class=\"material-icons\">swap_horiz</i>
        ";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
      </button>
    ";
            } elseif (($this->getAttribute(            // line 106
($context["orderForViewing"] ?? null), "hasBeenPaid", [], "method") || $this->getAttribute(($context["orderForViewing"] ?? null), "hasPayments", [], "method"))) {
                // line 107
                echo "      <button class=\"btn btn-action standard-refund-display\" type=\"button\"";
                if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "isRefundable", [], "method")) {
                    echo " disabled";
                }
                echo ">
        <i class=\"material-icons\">swap_horiz</i>
        ";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Standard refund", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
      </button>
    ";
            } else {
                // line 112
                echo "      <button class=\"btn btn-action cancel-product-display\" type=\"button\">
        ";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
      </button>
    ";
            }
            // line 116
            echo "  ";
        }
        // line 117
        echo "
  ";
        // line 118
        if (($this->getAttribute(($context["orderForViewing"] ?? null), "hasBeenPaid", [], "method") || $this->getAttribute(($context["orderForViewing"] ?? null), "hasPayments", [], "method"))) {
            // line 119
            echo "      <button class=\"btn btn-action partial-refund-display\" type=\"button\"";
            if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "isRefundable", [], "method")) {
                echo " disabled";
            }
            echo ">
        <i class=\"material-icons\">swap_horiz</i>
        ";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partial refund", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </button>
  ";
        }
        // line 124
        echo "
  ";
        // line 125
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_navigation.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", 125)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 125,  239 => 124,  233 => 121,  225 => 119,  223 => 118,  220 => 117,  217 => 116,  211 => 113,  208 => 112,  202 => 109,  194 => 107,  192 => 106,  187 => 104,  179 => 102,  176 => 101,  174 => 100,  171 => 99,  169 => 98,  166 => 97,  158 => 92,  152 => 89,  148 => 87,  146 => 86,  138 => 81,  131 => 76,  123 => 71,  117 => 68,  113 => 66,  111 => 65,  106 => 63,  101 => 61,  93 => 56,  88 => 54,  80 => 48,  78 => 43,  69 => 42,  63 => 41,  60 => 40,  57 => 39,  54 => 38,  51 => 37,  46 => 36,  43 => 35,  41 => 34,  36 => 31,  34 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig");
    }
}
