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

/* @PrestaShop/Admin/Sell/Customer/Blocks/form.html.twig */
class __TwigTemplate_616a26bf734fc7da39b3b8a11969171a6f1da25baffa94b623507d6b7e015c27 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'customer_form' => [$this, 'block_customer_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["customerForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 26
        echo "
";
        // line 27
        $context["allowedNameChars"] = "0-9!<>,;?=+()@#\"°{}_\$%:";
        // line 28
        $context["isGuest"] = ((array_key_exists("isGuest", $context)) ? (_twig_default_filter(($context["isGuest"] ?? null), false)) : (false));
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('customer_form', $context, $blocks);
    }

    public function block_customer_form($context, array $blocks = [])
    {
        // line 31
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["customerForm"] ?? null), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">person</i>
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["customerForm"] ?? null), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        ";
        // line 43
        if ((array_key_exists("displayInIframe", $context) && (($context["displayInIframe"] ?? null) == true))) {
            // line 44
            echo "          <a href=\"javascript:window.parent.\$.fancybox.close();\" class=\"btn btn-outline-secondary\">
        ";
        } else {
            // line 46
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension')->getPathWithBackUrl("admin_customers_index"), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
        ";
        }
        // line 48
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\" id=\"save-button\">
          ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["customerForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 55,  90 => 51,  83 => 48,  77 => 46,  73 => 44,  71 => 43,  64 => 39,  57 => 35,  49 => 31,  43 => 30,  40 => 29,  38 => 28,  36 => 27,  33 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/form.html.twig");
    }
}
