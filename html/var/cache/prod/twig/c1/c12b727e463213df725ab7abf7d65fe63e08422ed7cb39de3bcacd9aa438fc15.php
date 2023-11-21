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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig */
class __TwigTemplate_bdfa9abc7c95a419a1f9b6493737921e1bdd9ca23b7ecd48c9361a62d586afd7 extends \Twig\Template
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
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "sources", []), "sources", []))) {
            // line 27
            echo "    <div class=\"card mt-2 d-print-none\">
      <div class=\"card-header\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <i class=\"material-icons\">public</i>
            ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sources", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            <span class=\"badge badge-primary rounded\">";
            // line 33
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "sources", []), "sources", [])), "html", null, true);
            echo "</span>
          </div>

          <ul id=\"order-sources-list\">
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "sources", []), "sources", []));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 38
                echo "              <li>
                ";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["source"], "addedAt", [])), "html", null, true);
                echo "
                <br/>
                <b>";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</b>
                ";
                // line 42
                if (($this->getAttribute($context["source"], "httpReferer", []) != "")) {
                    // line 43
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "httpReferer", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "httpReferer", []), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 45
                    echo "                  -
                ";
                }
                // line 47
                echo "                <br/>
                <b>";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</b>
                <a href=\"http://";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "requestUri", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["source"], "requestUri", []), 0, 100), "html", null, true);
                echo "</a>
                <br/>
                ";
                // line 51
                if (($this->getAttribute($context["source"], "keywords", []) != "")) {
                    // line 52
                    echo "                  <b>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Keywords", [], "Admin.Global"), "html", null, true);
                    echo "</b>
                  <br/>
                  ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "keywords", []), "html", null, true);
                    echo "
                ";
                }
                // line 56
                echo "                <br/>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "          </ul>
        </div>
      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 59,  110 => 56,  105 => 54,  99 => 52,  97 => 51,  90 => 49,  86 => 48,  83 => 47,  79 => 45,  71 => 43,  69 => 42,  65 => 41,  60 => 39,  57 => 38,  53 => 37,  46 => 33,  42 => 32,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/sources.html.twig");
    }
}
