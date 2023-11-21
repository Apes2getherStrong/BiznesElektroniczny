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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig */
class __TwigTemplate_948cfd331e4fec242145138ae6507bd21cef506592753391ba66c4af561c9893 extends \Twig\Template
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
";
        // line 26
        $context["choices"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "choice_provider", []), "getChoices", [0 => ($context["record"] ?? null)], "method");
        // line 27
        $context["selectedChoice"] = $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "field", []), [], "array");
        // line 28
        $context["selectedChoiceName"] = "";
        // line 29
        $context["routeParams"] = $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayPluck(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "record_route_params", []));
        // line 30
        echo "
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 32
            echo "  ";
            if (($context["value"] == ($context["selectedChoice"] ?? null))) {
                // line 33
                echo "    ";
                $context["selectedChoiceName"] = $context["name"];
                // line 34
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
        // line 37
        $context["classes"] = "btn btn-secondary dropdown-toggle dropdown-toggle-split rounded";
        // line 38
        echo "
";
        // line 39
        if ( !twig_test_empty(($context["choices"] ?? null))) {
            // line 40
            echo "  <div class=\"dropdown\">
    <button
      ";
            // line 42
            if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "color_field", [])) {
                // line 43
                echo "        ";
                $context["textColor"] = ((call_user_func_array($this->env->getFunction('is_color_bright')->getCallable(), [$this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "color_field", []), [], "array")])) ? ("#383838") : ("white"));
                // line 44
                echo "        style=\"background-color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "color_field", []), [], "array"), "html", null, true);
                echo "; color: ";
                echo twig_escape_filter($this->env, ($context["textColor"] ?? null), "html", null, true);
                echo ";\"
        ";
                // line 45
                $context["classes"] = (($context["classes"] ?? null) . " coloured");
                // line 46
                echo "      ";
            }
            // line 47
            echo "      class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
      data-flip=\"false\"
    >
      ";
            // line 54
            echo twig_escape_filter($this->env, ($context["selectedChoiceName"] ?? null), "html", null, true);
            echo "
    </button>
    <div
      class=\"dropdown-menu js-choice-options\"
      data-url=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route", []), ($context["routeParams"] ?? null)), "html", null, true);
            echo "\"
    >
      ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                if (($context["value"] != ($context["selectedChoice"] ?? null))) {
                    // line 61
                    echo "        <button class=\"js-dropdown-item dropdown-item\" data-value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</button>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 63,  120 => 61,  115 => 60,  110 => 58,  103 => 54,  92 => 47,  89 => 46,  87 => 45,  80 => 44,  77 => 43,  75 => 42,  71 => 40,  69 => 39,  66 => 38,  64 => 37,  61 => 36,  54 => 34,  51 => 33,  48 => 32,  44 => 31,  41 => 30,  39 => 29,  37 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/choice.html.twig");
    }
}
