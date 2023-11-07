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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig */
class __TwigTemplate_e9c8e0992a7d2c39edbe3b5968b9bdd414c6ce16df0c0db0a2cb315e09664088 extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      ";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "id", [])) {
            // line 33
            echo "        <div class=\"col\">
          <h2>
            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "id", [])]), "html", null, true);
            echo "\">
              ";
            // line 36
            if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "gender", [])) {
                // line 37
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "gender", []), "html", null, true);
                echo "
              ";
            }
            // line 39
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "first_name", []), "html", null, true);
            echo "
              ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "last_name", []), "html", null, true);
            echo "
            </a>
          </h2>

          <p class=\"mb-0\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account registration date:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "registration_date", []), "html", null, true);
            echo "
          </p>

          <p class=\"mb-0\">
            ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valid orders placed:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "valid_orders_count", []), "html", null, true);
            echo "
          </p>

          <p class=\"mb-0\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent since registration:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "total_spent_since_registration", []), "html", null, true);
            echo "
          </p>
        </div>

        <div class=\"col text-right\">
          <a href=\"mailto:";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "email", []), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
            ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "email", []), "html", null, true);
            echo "
          </a>
        </div>
      ";
        } else {
            // line 66
            echo "        <div class=\"col\">
          <h2 class=\"mb-0\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Guest not registered", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</h2>
        </div>
      ";
        }
        // line 70
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 70,  121 => 67,  118 => 66,  111 => 62,  107 => 61,  99 => 56,  95 => 55,  88 => 51,  84 => 50,  77 => 46,  73 => 45,  65 => 40,  60 => 39,  54 => 37,  52 => 36,  48 => 35,  44 => 33,  42 => 32,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig");
    }
}
