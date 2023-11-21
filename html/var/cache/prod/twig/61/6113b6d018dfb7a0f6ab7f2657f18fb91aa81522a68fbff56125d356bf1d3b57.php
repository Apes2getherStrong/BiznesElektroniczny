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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig */
class __TwigTemplate_6c70da56aa1d7efe5c261614595b8fd4a25a42c73f4190b74c61dcd10130c83c extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "orderInformation", []), "id", [])) {
            // line 34
            echo "          <h2>
            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "orderInformation", []), "id", []), "vieworder" => 1]), "html", null, true);
            echo "\">
              ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order #%d", ["%d" => sprintf($this->getAttribute($this->getAttribute(            // line 37
($context["cartView"] ?? null), "orderInformation", []), "id", []), "\"%06d")], "Admin.Orderscustomers.Feature"), "html", null, true);
            // line 38
            echo "
            </a>
          </h2>

          <p class=\"mb-0\">
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Made on:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "orderInformation", []), "placed_date", []), "html", null, true);
            echo "
          </p>
        ";
        } else {
            // line 47
            echo "          <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No order was created from this cart.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</h2>

          ";
            // line 49
            if ($this->getAttribute($this->getAttribute(($context["cartView"] ?? null), "customerInformation", []), "id", [])) {
                // line 50
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["createOrderFromCartLink"] ?? null), "html", null, true);
                echo "\"
               class=\"btn btn-outline-secondary\"
            >
              ";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create an order from this cart.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 56
            echo "        ";
        }
        // line 57
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 57,  93 => 56,  87 => 53,  80 => 50,  78 => 49,  72 => 47,  66 => 44,  62 => 43,  55 => 38,  53 => 37,  52 => 36,  48 => 35,  45 => 34,  43 => 33,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig");
    }
}
