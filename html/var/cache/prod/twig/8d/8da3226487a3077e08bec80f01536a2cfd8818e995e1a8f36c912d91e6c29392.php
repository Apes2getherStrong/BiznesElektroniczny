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

/* @PrestaShop/Admin/Sell/Order/Order/index.html.twig */
class __TwigTemplate_9c443353255a46a4029c7a7458694372664383d44e1c7e2254ae88aab0d348ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'orders_kpi' => [$this, 'block_orders_kpi'],
            'order_grid_row' => [$this, 'block_order_grid_row'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 29
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/orders.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        // line 33
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", 33)->display($context);
        // line 34
        echo "
  ";
        // line 35
        $this->displayBlock('orders_kpi', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('order_grid_row', $context, $blocks);
    }

    // line 35
    public function block_orders_kpi($context, array $blocks = [])
    {
        // line 36
        echo "    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"card card-kpis\">
          <div class=\"row orders-kpi\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", ["kpiRow" =>         // line 42
($context["orderKpi"] ?? null)]));
        // line 43
        echo "
          </div>
        </div>
      </div>
    </div>
  ";
    }

    // line 50
    public function block_order_grid_row($context, array $blocks = [])
    {
        // line 51
        echo "    <div class=\"row\">
      <div class=\"col-12\">
        ";
        // line 53
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", 53)->display(twig_array_merge($context, ["grid" => ($context["orderGrid"] ?? null)]));
        // line 54
        echo "      </div>
    </div>
  ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        // line 60
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 63,  116 => 62,  110 => 60,  107 => 59,  101 => 54,  99 => 53,  95 => 51,  92 => 50,  83 => 43,  81 => 42,  80 => 40,  74 => 36,  71 => 35,  67 => 50,  64 => 49,  62 => 35,  59 => 34,  56 => 33,  53 => 32,  46 => 29,  43 => 28,  33 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/index.html.twig");
    }
}
