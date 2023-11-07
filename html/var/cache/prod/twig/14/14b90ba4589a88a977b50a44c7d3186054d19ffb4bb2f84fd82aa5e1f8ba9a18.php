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

/* @PrestaShop/Admin/Sell/Customer/view.html.twig */
class __TwigTemplate_aa9cc1921fbde2e20566961dd236d184435da76d12232dac9b453ca4a53f61b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 28
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Information about customer %name%", ["%name%" => ((twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), 0, 1) . ". ") . $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", []))], "Admin.Orderscustomers.Feature");
        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 33)->display($context);
        // line 34
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 34)->display($context);
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 35)->display($context);
        // line 36
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 36)->display($context);
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/viewed_products.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 37)->display($context);
        // line 38
        echo "    </div>

    <div class=\"col\">
      ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 41)->display($context);
        // line 42
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 42)->display($context);
        // line 43
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 43)->display($context);
        // line 44
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 44)->display($context);
        // line 45
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 45)->display($context);
        // line 46
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 46)->display($context);
        // line 47
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 47)->display($context);
        // line 48
        echo "    </div>
  </div>

  <div class=\"row\">
    ";
        // line 52
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminCustomers", ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", [])]);
        echo "
  </div>
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 59
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 59)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 59,  105 => 57,  102 => 56,  95 => 52,  89 => 48,  86 => 47,  83 => 46,  80 => 45,  77 => 44,  74 => 43,  71 => 42,  69 => 41,  64 => 38,  61 => 37,  58 => 36,  55 => 35,  52 => 34,  50 => 33,  46 => 31,  43 => 30,  38 => 28,  36 => 26,  30 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/view.html.twig");
    }
}
