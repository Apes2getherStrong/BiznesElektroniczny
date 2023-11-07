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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig */
class __TwigTemplate_c789dff5f8dde7d848499d6b76fe102f6a06df6f2cbdec5765db0ab15744feb0 extends \Twig\Template
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
<div class=\"title-content\">
  <h1 class=\"d-inline\">
    <strong class=\"text-muted\">#";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
        echo "</strong>
    <strong>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "reference", []), "html", null, true);
        echo "</strong>
  </h1>

  <p class=\"lead d-inline\">
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("from", [], "Admin.Global"), "html", null, true);
        echo "

    ";
        // line 35
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
            // line 36
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "firstName", []), "html", null, true);
            echo "
      ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "lastName", []), "html", null, true);
            echo "
    ";
        } else {
            // line 39
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "
    ";
        }
        // line 41
        echo "  </p>

  <span class=\"badge rounded badge-dark ml-2 mr-2 font-size-100\">
    ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "totalAmountFormatted", []), "html", null, true);
        echo "
  </span>

  <p class=\"lead d-inline\">
    ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatLite($this->getAttribute(($context["orderForViewing"] ?? null), "createdAt", [])), "html", null, true);
        echo "
    <span class=\"text-muted\">
      ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at", [], "Admin.Global"), "html", null, true);
        echo "

      ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "createdAt", []), "H:i:s"), "html", null, true);
        echo "
    </span>
  </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 52,  86 => 50,  81 => 48,  74 => 44,  69 => 41,  63 => 39,  58 => 37,  53 => 36,  51 => 35,  46 => 33,  39 => 29,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/header.html.twig");
    }
}
