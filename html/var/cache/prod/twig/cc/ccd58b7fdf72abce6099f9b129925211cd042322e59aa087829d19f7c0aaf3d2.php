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

/* @PrestaShop/Admin/Sell/Order/CreditSlip/index.html.twig */
class __TwigTemplate_f673555362bb3caf539469db9bcce01e64985962dbb9e95f176de5ca1d70bdfc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'credit_slips_listing' => [$this, 'block_credit_slips_listing'],
            'credit_slips_print_pdf' => [$this, 'block_credit_slips_print_pdf'],
            'credit_slips_options' => [$this, 'block_credit_slips_options'],
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
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "@PrestaShop/Admin/Sell/Order/CreditSlip/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        $this->displayBlock('credit_slips_listing', $context, $blocks);
        // line 36
        echo "
  ";
        // line 37
        $this->displayBlock('credit_slips_print_pdf', $context, $blocks);
        // line 44
        echo "
  ";
        // line 45
        $this->displayBlock('credit_slips_options', $context, $blocks);
    }

    // line 29
    public function block_credit_slips_listing($context, array $blocks = [])
    {
        // line 30
        echo "    <div class=\"row justify-content-center\">
      <div class=\"col\">
        ";
        // line 32
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Order/CreditSlip/index.html.twig", 32)->display(twig_array_merge($context, ["grid" => ($context["creditSlipGrid"] ?? null)]));
        // line 33
        echo "      </div>
    </div>
  ";
    }

    // line 37
    public function block_credit_slips_print_pdf($context, array $blocks = [])
    {
        // line 38
        echo "    <div class=\"row justify-content-center\">
      <div class=\"col\">
        ";
        // line 40
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/pdf_by_date.html.twig", "@PrestaShop/Admin/Sell/Order/CreditSlip/index.html.twig", 40)->display($context);
        // line 41
        echo "      </div>
    </div>
  ";
    }

    // line 45
    public function block_credit_slips_options($context, array $blocks = [])
    {
        // line 46
        echo "    <div class=\"row justify-content-center\">
      <div class=\"col\">
        ";
        // line 48
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig", "@PrestaShop/Admin/Sell/Order/CreditSlip/index.html.twig", 48)->display($context);
        // line 49
        echo "      </div>
    </div>
  ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        // line 55
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/credit_slip.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/CreditSlip/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 58,  115 => 57,  109 => 55,  106 => 54,  100 => 49,  98 => 48,  94 => 46,  91 => 45,  85 => 41,  83 => 40,  79 => 38,  76 => 37,  70 => 33,  68 => 32,  64 => 30,  61 => 29,  57 => 45,  54 => 44,  52 => 37,  49 => 36,  46 => 29,  43 => 28,  33 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/CreditSlip/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/CreditSlip/index.html.twig");
    }
}
