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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_order_statistics.html.twig */
class __TwigTemplate_60680e48ca51fa03a9cc9edd807ff48858bb80e4333c1ba46b4f4a11e38df6fb extends \Twig\Template
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
        echo "<div class=\"card\">
  <div class=\"card-body\">
    <div class=\"row\">
      <div class=\"col-sm\">
        <p>
          <strong>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</strong>
        </p>
        <strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute(($context["orderForViewing"] ?? null), "createdAt", [])), "html", null, true);
        echo "</strong>
      </div>
      <div class=\"col-sm\">
        <p>
          <strong>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</strong>
        </p>
        <p>
          <span class=\"badge rounded font-size-100\">
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "totalAmountFormatted", []), "html", null, true);
        echo "
          </span>
        </p>
      </div>
      <div class=\"col-sm\">
        <p>
          <strong>
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Message", [], "Admin.Global"), "html", null, true);
        echo "
          </strong>
        </p>
        <strong>
          ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "messages", []), "total", []), "html", null, true);
        echo "
        </strong>
      </div>
      <div class=\"col-sm\">
        <p>
          <strong>
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
          </strong>
        </p>
        <strong>
          ";
        // line 61
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", [])), "html", null, true);
        echo "
        </strong>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_order_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 61,  82 => 57,  73 => 51,  66 => 47,  56 => 40,  49 => 36,  42 => 32,  37 => 30,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_order_statistics.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/print_order_statistics.html.twig");
    }
}
