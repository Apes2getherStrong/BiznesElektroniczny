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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig */
class __TwigTemplate_bdb53fbbe7770225f9e80126f8887486b303a0fc67fb7ed6a6f42044e8bdc53a extends \Twig\Template
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
<div class=\"card customer-discounts-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">loyalty</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vouchers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? null), "discountsInformation", [])), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if (($this->getAttribute($this->getAttribute(($context["customerDiscountGrid"] ?? null), "data", []), "records_total", []) > 0)) {
            // line 34
            echo "      <div class=\"row\">
        <div class=\"col\">
          ";
            // line 36
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", 36)->display(twig_array_merge($context, ["grid" => ($context["customerDiscountGrid"] ?? null)]));
            // line 37
            echo "        </div>
      </div>
    ";
        } else {
            // line 40
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has no discount vouchers", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 44
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 44,  62 => 41,  59 => 40,  54 => 37,  52 => 36,  48 => 34,  46 => 33,  40 => 30,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/discounts.html.twig");
    }
}
