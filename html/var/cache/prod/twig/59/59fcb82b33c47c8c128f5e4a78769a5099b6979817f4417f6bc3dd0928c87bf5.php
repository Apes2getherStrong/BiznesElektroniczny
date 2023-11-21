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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig */
class __TwigTemplate_d86d9c5bd4cbb1c593d7820ddc957f58bed54ff7447f28770dd36abd88128eb4 extends \Twig\Template
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
<span
  class=\"preview-toggle\"
  ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", [], "any", false, true), "preview_data_route", [], "any", true, true)) {
            // line 29
            echo "    ";
            $context["params"] = [];
            // line 30
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", [], "any", false, true), "preview_route_params", [], "any", true, true)) {
                // line 31
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "preview_route_params", []));
                foreach ($context['_seq'] as $context["param_name"] => $context["record_field"]) {
                    // line 32
                    echo "        ";
                    $context["params"] = twig_array_merge(($context["params"] ?? null), [$context["param_name"] => $this->getAttribute(($context["record"] ?? null), $context["record_field"], [], "array")]);
                    // line 33
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['param_name'], $context['record_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "    ";
            }
            // line 35
            echo "    data-preview-data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "preview_data_route", []), ($context["params"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 37
        echo ">
  <i class=\"text-primary material-icons js-expand d-none\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "icon_expand", []), "html", null, true);
        echo "</i>
  <i class=\"text-primary material-icons js-collapse d-none\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "icon_collapse", []), "html", null, true);
        echo "</i>
</span>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 39,  69 => 38,  66 => 37,  60 => 35,  57 => 34,  51 => 33,  48 => 32,  43 => 31,  40 => 30,  37 => 29,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/preview.html.twig");
    }
}
