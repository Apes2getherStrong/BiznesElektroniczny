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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig */
class __TwigTemplate_6e5d9ebc26a969ba01b5b7b7a349bb7302e6700c1d3c4556d4c7b8e9f073a15b extends \Twig\Template
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
 <li class=\"mb-2 ";
        // line 26
        if ($this->getAttribute(($context["message"] ?? null), "employeeId", [])) {
            echo "messages-block-employee";
        } else {
            echo "messages-block-customer";
        }
        echo "\">
  <div class=\"row no-gutters\">
    ";
        // line 28
        if ( !$this->getAttribute(($context["message"] ?? null), "employeeId", [])) {
            // line 29
            echo "      <div class=\"messages-block-icon\">
        <i class=\"material-icons\">account_circle</i>
      </div>

      <div class=\"messages-block-content\">
        <p class=\"mb-0 message customer-message\">
          ";
            // line 35
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? null), "message", []), "html", null, true));
            echo "
        </p>
        <p class=\"text-muted mb-0\">
          ";
            // line 38
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["message"] ?? null), "customerFirstName", []) . " ") . $this->getAttribute(($context["message"] ?? null), "customerLastName", [])), "html", null, true);
            echo "
          ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? null), "messageDate", []), "format", []), "html", null, true);
            echo "
        </p>
      </div>
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if ($this->getAttribute(($context["message"] ?? null), "employeeId", [])) {
            // line 45
            echo "      <div class=\"messages-block-content\">
        <p class=\"mb-0 message employee-message";
            // line 46
            echo (($this->getAttribute(($context["message"] ?? null), "isPrivate", [])) ? ("--private") : (""));
            echo "\">
          ";
            // line 47
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? null), "message", []), "html", null, true));
            echo "
        </p>
        <p class=\"text-muted mb-0 text-right\">
          ";
            // line 50
            if ($this->getAttribute(($context["message"] ?? null), "isCurrentEmployeesMessage", [])) {
                // line 51
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Me", [], "Admin.Global"), "html", null, true);
                echo "
          ";
            } else {
                // line 53
                echo "            ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["message"] ?? null), "employeeFirstName", []) . " ") . $this->getAttribute(($context["message"] ?? null), "employeeLastName", [])), "html", null, true);
                echo "
          ";
            }
            // line 55
            echo "
          ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["message"] ?? null), "messageDate", []), "format", []), "html", null, true);
            echo "
        </p>
      </div>

      <div class=\"messages-block-icon\">
        <i class=\"material-icons employee-icon";
            // line 61
            echo (($this->getAttribute(($context["message"] ?? null), "isPrivate", [])) ? ("--private") : (""));
            echo "\"></i>
      </div>
    ";
        }
        // line 64
        echo "  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 64,  112 => 61,  104 => 56,  101 => 55,  95 => 53,  89 => 51,  87 => 50,  81 => 47,  77 => 46,  74 => 45,  72 => 44,  69 => 43,  62 => 39,  58 => 38,  52 => 35,  44 => 29,  42 => 28,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig");
    }
}
