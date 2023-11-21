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

/* @PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig */
class __TwigTemplate_f511a2eadaa2bbe84d7b951391efaf64f0367f80c293672d137734e81f92b190 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'credit_slip_options_form' => [$this, 'block_credit_slip_options_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["creditSlipOptionsForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["creditSlipOptionsForm"] ?? null), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_credit_slips_process_options"), "attr" => ["id" => "form-credit-slips-options"]]);
        // line 33
        echo "
<div class=\"card\">

  <h3 class=\"card-header\">
    <i class=\"material-icons\">settings</i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Credit slip options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 42
        $this->displayBlock('credit_slip_options_form', $context, $blocks);
        // line 45
        echo "    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" id=\"save-credit-slip-options-button\">
        ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>

</div>
";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["creditSlipOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 42
    public function block_credit_slip_options_form($context, array $blocks = [])
    {
        // line 43
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["creditSlipOptionsForm"] ?? null), 'widget');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 43,  80 => 42,  74 => 57,  65 => 51,  57 => 45,  55 => 42,  47 => 37,  41 => 33,  39 => 29,  36 => 28,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig");
    }
}
