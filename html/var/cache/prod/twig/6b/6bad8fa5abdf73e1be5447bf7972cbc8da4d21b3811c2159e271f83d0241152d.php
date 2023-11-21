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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig */
class __TwigTemplate_2ef3016b5b7f862188fb6c5076e78c78514f36c94d395d5222cbdfd153eb1a5b extends \Twig\Template
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
        echo "<div class=\"col-md-12\">
  <table class=\"table discountList";
        // line 26
        if (twig_test_empty(($context["discounts"] ?? null))) {
            echo " d-none";
        }
        echo "\">
    <thead>
    <tr>
      <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th class=\"text-right d-print-none\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 36
            echo "      <tr>
        <td class=\"discountList-name\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", []), "html", null, true);
            echo "</td>
        <td>
          ";
            // line 39
            if ($this->getAttribute($this->getAttribute($context["discount"], "amountRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
                echo "-";
            }
            // line 40
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "amountFormatted", []), "html", null, true);
            echo "
        </td>
        <td class=\"text-right d-print-none\">
          <a class=\"delete-cart-rule btn btn-text\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_remove_cart_rule", ["orderId" => ($context["orderId"] ?? null), "orderCartRuleId" => $this->getAttribute($context["discount"], "orderCartRuleId", [])]), "html", null, true);
            echo "\">
            <i class=\"material-icons\">delete</i>
          </a>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 49,  79 => 43,  72 => 40,  68 => 39,  63 => 37,  60 => 36,  56 => 35,  49 => 31,  45 => 30,  41 => 29,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig");
    }
}
