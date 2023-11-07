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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig */
class __TwigTemplate_3419b13d0655bd3acef1e8c6adaf7cfc83488fbb3cb2c1999535702f508a2dc9 extends \Twig\Template
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
            echo "  ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "returns", []), "orderReturns", []))) {
                // line 28
                echo "    <table class=\"table\">
      <thead>
      <tr>
        <th>";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
        <th>";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Global"), "html", null, true);
                echo "</th>
        <th>";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Shipping.Feature"), "html", null, true);
                echo "</th>
        <th>";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
                echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "returns", []), "orderReturns", []));
                foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                    // line 39
                    echo "        <tr>
          <td>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["return"], "date", [])), "html", null, true);
                    echo "</td>
          <td>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "type", []), "html", null, true);
                    echo "</td>
          <td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "stateName", []), "html", null, true);
                    echo "</td>
          <td class=\"text-right\">
            ";
                    // line 44
                    if (($this->getAttribute($context["return"], "trackingNumber", []) && $this->getAttribute($context["return"], "trackingUrl", []))) {
                        // line 45
                        echo "              <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "trackingUrl", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "trackingNumber", []), "html", null, true);
                        echo "</a>
            ";
                    } elseif ($this->getAttribute(                    // line 46
$context["return"], "trackingNumber", [])) {
                        // line 47
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "trackingNumber", []), "html", null, true);
                        echo "
            ";
                    }
                    // line 49
                    echo "          </td>
        </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "      </tbody>
    </table>
  ";
            } else {
                // line 55
                echo "    <p class=\"text-center mb-0\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No merchandise returned yet", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>
  ";
            }
            // line 57
            echo "
  ";
            // line 58
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shipping", []), "carrierModuleInfo", [])) {
                // line 59
                echo "    ";
                echo $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shipping", []), "carrierModuleInfo", []);
                echo "
  ";
            }
        } else {
            // line 62
            echo "  <p class=\"text-center mb-0\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise returns are not applicable for virtual orders", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 62,  123 => 59,  121 => 58,  118 => 57,  112 => 55,  107 => 52,  99 => 49,  93 => 47,  91 => 46,  84 => 45,  82 => 44,  77 => 42,  73 => 41,  69 => 40,  66 => 39,  62 => 38,  55 => 34,  51 => 33,  47 => 32,  43 => 31,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig");
    }
}
