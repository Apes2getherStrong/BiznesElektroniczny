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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig */
class __TwigTemplate_26dda97397e6026503f7c5b8e208b23f5dfcd26315872aba43130cc0a8e4e86e extends \Twig\Template
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
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "virtual", [])) {
            // line 27
            echo "
    ";
            // line 28
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shipping", []), "giftMessage", [])) {
                // line 29
                echo "      <div class=\"row col-lg-12\">
        <label>
          ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift message:", [], "Admin.Global"), "html", null, true);
                echo "
        </label>
        <div id=\"gift-message\" class=\"col-lg-9\">
           ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shipping", []), "giftMessage", []), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            // line 38
            echo "
    <table class=\"table\">
    <thead>
      <tr>
        <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
        <th>&nbsp;</th>
        <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</th>
        <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight", [], "Admin.Global"), "html", null, true);
            echo "</th>
        <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping cost", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</th>
        <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shipping", []), "carriers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["carrier"]) {
                // line 53
                echo "        <tr>
          <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatLite($this->getAttribute($context["carrier"], "date", [])), "html", null, true);
                echo "</td>
          <td>&nbsp;</td>
          <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "name", []), "html", null, true);
                echo "</td>
          <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "weight", []), "html", null, true);
                echo "</td>
          <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "price", []), "html", null, true);
                echo "</td>
          <td>
            ";
                // line 60
                if ($this->getAttribute($context["carrier"], "trackingNumber", [])) {
                    // line 61
                    echo "              ";
                    if ($this->getAttribute($context["carrier"], "trackingUrl", [])) {
                        // line 62
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "trackingUrl", []), "html", null, true);
                        echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "trackingNumber", []), "html", null, true);
                        echo "</a>
              ";
                    } else {
                        // line 64
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "trackingNumber", []), "html", null, true);
                        echo "
              ";
                    }
                    // line 66
                    echo "            ";
                }
                // line 67
                echo "          </td>
          <td class=\"text-right\">
            ";
                // line 69
                if ($this->getAttribute($context["carrier"], "canEdit", [])) {
                    // line 70
                    echo "              <a href=\"#\"
                 class=\"js-update-shipping-btn d-print-none\"
                 data-toggle=\"modal\"
                 data-target=\"#updateOrderShippingModal\"
                 data-order-carrier-id=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "orderCarrierId", []), "html", null, true);
                    echo "\"
                 data-order-tracking-number=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "trackingNumber", []), "html", null, true);
                    echo "\"
              >
                ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                    echo "
              </a>
            ";
                }
                // line 80
                echo "          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "    </tbody>
  </table>

  ";
            // line 86
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shipping", []), "carrierModuleInfo", [])) {
                // line 87
                echo "    ";
                echo $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shipping", []), "carrierModuleInfo", []);
                echo "
  ";
            }
        } else {
            // line 90
            echo "  <p class=\"text-center mb-0\">
    ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping does not apply to virtual orders", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 91,  184 => 90,  177 => 87,  175 => 86,  170 => 83,  162 => 80,  156 => 77,  151 => 75,  147 => 74,  141 => 70,  139 => 69,  135 => 67,  132 => 66,  126 => 64,  118 => 62,  115 => 61,  113 => 60,  108 => 58,  104 => 57,  100 => 56,  95 => 54,  92 => 53,  88 => 52,  80 => 47,  76 => 46,  72 => 45,  68 => 44,  63 => 42,  57 => 38,  50 => 34,  44 => 31,  40 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig");
    }
}
