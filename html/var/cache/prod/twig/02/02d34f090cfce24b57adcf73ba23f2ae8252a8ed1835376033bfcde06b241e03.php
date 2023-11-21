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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig */
class __TwigTemplate_b833de8d9957f4ecbd723528eabd9193c4c4f1591ff9776d8fda8727a0d07a1c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "<div class=\"card card-details\">
  <div class=\"card-header d-none d-print-block\">
    ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "  </div>
  <div class=\"card-body\">
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "  </div>
</div>
";
    }

    // line 27
    public function block_header($context, array $blocks = [])
    {
        // line 28
        echo "    ";
    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        // line 32
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 32,  57 => 31,  53 => 28,  50 => 27,  44 => 33,  42 => 31,  38 => 29,  36 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig");
    }
}
