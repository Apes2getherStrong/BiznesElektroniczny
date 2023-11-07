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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig */
class __TwigTemplate_2351cb03ce4f711a4620b60e0d6b7ae7b18390839f4b644c89d976a572fca84f extends \Twig\Template
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
        // line 27
        if (($this->getAttribute(($context["backOfficeOrderButtons"] ?? null), "isEmpty", [], "method") != true)) {
            // line 28
            echo "
  ";
            // line 29
            $context["buttons"] = $this->getAttribute(($context["backOfficeOrderButtons"] ?? null), "toArray", [], "method");
            // line 30
            echo "  ";
            if ((twig_length_filter($this->env, ($context["buttons"] ?? null)) > 2)) {
                // line 31
                echo "
    ";
                // line 32
                $context["firstButton"] = twig_first($this->env, ($context["buttons"] ?? null));
                // line 33
                echo "    <div class=\"d-inline-block ml-2\">
      <div class=\"input-group\">
        <a class=\"btn ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute(($context["firstButton"] ?? null), "class", []), "html", null, true);
                echo "\"
        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["firstButton"] ?? null), "properties", []));
                foreach ($context['_seq'] as $context["propertyName"] => $context["propertyContent"]) {
                    // line 37
                    echo "          ";
                    echo twig_escape_filter($this->env, $context["propertyName"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["propertyContent"], "html", null, true);
                    echo "\"
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['propertyName'], $context['propertyContent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        >
        ";
                // line 40
                echo $this->getAttribute(($context["firstButton"] ?? null), "content", []);
                echo "
        </a>
      </div>
    </div>

    ";
                // line 46
                echo "    ";
                $context["buttons"] = twig_slice($this->env, ($context["buttons"] ?? null), 1, twig_length_filter($this->env, ($context["buttons"] ?? null)));
                // line 47
                echo "
    <div class=\"d-inline-block ml-2\">
      <div class=\"input-group\">
        <div class=\"dropdown\">
          <button class=\"btn btn-action dropdown-toggle\" type=\"button\" id=\"dropdownOrderActionBar\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"material-icons form-error-icon\">more_horiz</i>

            ";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More actions", [], "Admin.Global"), "html", null, true);
                echo "
          </button>

          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownOrderActionBar\">
            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 61
                    echo "              <a class=\"dropdown-item btn ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", []), "html", null, true);
                    echo "\"
              ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["button"], "properties", []));
                    foreach ($context['_seq'] as $context["propertyName"] => $context["propertyContent"]) {
                        // line 63
                        echo "                ";
                        echo twig_escape_filter($this->env, $context["propertyName"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["propertyContent"], "html", null, true);
                        echo "\"
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['propertyName'], $context['propertyContent'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo ">
              ";
                    // line 65
                    echo $this->getAttribute($context["button"], "content", []);
                    echo "
              </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "          </div>
        </div>
      </div>
    </div>
  ";
            } else {
                // line 73
                echo "    ";
                // line 74
                echo "
    ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 76
                    echo "      <div class=\"d-inline-block ml-2\">
        <div class=\"input-group\">
          <a class=\"btn ";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", []), "html", null, true);
                    echo "\"
          ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["button"], "properties", []));
                    foreach ($context['_seq'] as $context["propertyName"] => $context["propertyContent"]) {
                        // line 80
                        echo "            ";
                        echo twig_escape_filter($this->env, $context["propertyName"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["propertyContent"], "html", null, true);
                        echo "\"
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['propertyName'], $context['propertyContent'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "          >
          ";
                    // line 83
                    echo $this->getAttribute($context["button"], "content", []);
                    echo "
          </a>
        </div>
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "  ";
            }
            // line 89
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 89,  192 => 88,  181 => 83,  178 => 82,  167 => 80,  163 => 79,  159 => 78,  155 => 76,  151 => 75,  148 => 74,  146 => 73,  139 => 68,  130 => 65,  127 => 64,  116 => 63,  112 => 62,  107 => 61,  103 => 60,  96 => 56,  85 => 47,  82 => 46,  74 => 40,  71 => 39,  60 => 37,  56 => 36,  52 => 35,  48 => 33,  46 => 32,  43 => 31,  40 => 30,  38 => 29,  35 => 28,  33 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig");
    }
}
