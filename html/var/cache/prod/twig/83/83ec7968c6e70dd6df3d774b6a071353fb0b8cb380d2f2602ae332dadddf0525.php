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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_navigation.html.twig */
class __TwigTemplate_81d99f096c4c553ef218ff5dc012666ada31550873db469cc3d7990835e2143c extends \Twig\Template
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
<div class=\"order-navigation\">
  <div class=\"order-navigation-left\">
      <a
        href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => ($context["previousOrderId"] ?? null)]), "html", null, true);
        echo "\"
        role=\"button\"
        class=\"btn btn-action ";
        // line 31
        if ( !($context["previousOrderId"] ?? null)) {
            echo " disabled ";
        }
        echo "\"
       >
        <span class=\"material-icons\">arrow_back</span>
      </a>
  </div>

  <div class=\"order-navigation-right\">
      <a
        href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => ($context["nextOrderId"] ?? null)]), "html", null, true);
        echo "\"
        role=\"button\"
        class=\"btn btn-action ";
        // line 41
        if ( !($context["nextOrderId"] ?? null)) {
            echo " disabled ";
        }
        echo "\"
      >
        <span class=\"material-icons\">arrow_forward</span>
      </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 41,  54 => 39,  41 => 31,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_navigation.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/order_navigation.html.twig");
    }
}
