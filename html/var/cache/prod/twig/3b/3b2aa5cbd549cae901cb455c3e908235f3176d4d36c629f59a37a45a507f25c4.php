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

/* @PrestaShop/Admin/Sell/Order/Cart/view.html.twig */
class __TwigTemplate_227e88c89c3787280af629d8c812d24138eb5059c01e9821f9734df1394980a9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'cart_kpis' => [$this, 'block_cart_kpis'],
            'cart_customer_information' => [$this, 'block_cart_customer_information'],
            'cart_order_information' => [$this, 'block_cart_order_information'],
            'cart_summary' => [$this, 'block_cart_summary'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        $this->displayBlock('cart_kpis', $context, $blocks);
        // line 43
        echo "
  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 46
        $this->displayBlock('cart_customer_information', $context, $blocks);
        // line 49
        echo "    </div>
    <div class=\"col\">
      ";
        // line 51
        $this->displayBlock('cart_order_information', $context, $blocks);
        // line 54
        echo "    </div>
  </div>

  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 59
        $this->displayBlock('cart_summary', $context, $blocks);
        // line 62
        echo "    </div>
  </div>
";
    }

    // line 29
    public function block_cart_kpis($context, array $blocks = [])
    {
        // line 30
        echo "    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"card card-kpis\">
          <div class=\"row\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", ["kpiRow" =>         // line 36
($context["cartKpi"] ?? null)]));
        // line 37
        echo "
          </div>
        </div>
      </div>
    </div>
  ";
    }

    // line 46
    public function block_cart_customer_information($context, array $blocks = [])
    {
        // line 47
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 47)->display($context);
        // line 48
        echo "      ";
    }

    // line 51
    public function block_cart_order_information($context, array $blocks = [])
    {
        // line 52
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 52)->display($context);
        // line 53
        echo "      ";
    }

    // line 59
    public function block_cart_summary($context, array $blocks = [])
    {
        // line 60
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 60)->display($context);
        // line 61
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 61,  121 => 60,  118 => 59,  114 => 53,  111 => 52,  108 => 51,  104 => 48,  101 => 47,  98 => 46,  89 => 37,  87 => 36,  86 => 34,  80 => 30,  77 => 29,  71 => 62,  69 => 59,  62 => 54,  60 => 51,  56 => 49,  54 => 46,  49 => 43,  46 => 29,  43 => 28,  33 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/view.html.twig");
    }
}
