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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig */
class __TwigTemplate_1f47d6e6fb6f3110265ac4b5924c4532e1af308a7f92f05de5e6550ce5aea77c extends \Twig\Template
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
        echo "<div class=\"mt-2 info-block\">
  <div class=\"row\">
    ";
        // line 27
        $context["isNoteOpen"] =  !twig_test_empty($this->getAttribute(($context["orderForViewing"] ?? null), "note", []));
        // line 28
        echo "
    <div class=\"col-md-6\">
      <h3 class=\"mb-0";
        // line 30
        echo (( !($context["isNoteOpen"] ?? null)) ? (" d-print-none") : (""));
        echo "\">
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </h3>
    </div>

    <div class=\"col-md-6 text-right d-print-none\">
      <a href=\"#\"
         class=\"float-right tooltip-link js-order-notes-toggle-btn";
        // line 37
        if (($context["isNoteOpen"] ?? null)) {
            echo " is-opened";
        }
        echo "\"
      >
        <i class=\"material-icons\">";
        // line 39
        if (($context["isNoteOpen"] ?? null)) {
            echo "remove";
        } else {
            echo "add";
        }
        echo "</i>
      </a>
    </div>

    <div class=\"col-md-12 mt-3 js-order-notes-block";
        // line 43
        if ( !($context["isNoteOpen"] ?? null)) {
            echo " d-none";
        }
        echo "\">
      ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["internalNoteForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_set_internal_note", ["orderId" => $this->getAttribute(        // line 45
($context["orderForViewing"] ?? null), "getId", [], "method")])]);
        // line 46
        echo "
      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["internalNoteForm"] ?? null), "note", []), 'widget');
        echo "
      <div class=\"d-none\">
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["internalNoteForm"] ?? null), 'rest');
        echo "
      </div>

      <div class=\"mt-2 text-right\">
        <button type=\"submit\"
                class=\"btn btn-primary btn-sm js-order-notes-btn\"
                ";
        // line 55
        if (twig_test_empty($this->getAttribute(($context["orderForViewing"] ?? null), "note", []))) {
            echo "disabled";
        }
        // line 56
        echo "        >
          ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
      ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["internalNoteForm"] ?? null), 'form_end');
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 60,  104 => 57,  101 => 56,  97 => 55,  88 => 49,  83 => 47,  80 => 46,  78 => 45,  77 => 44,  71 => 43,  60 => 39,  53 => 37,  44 => 31,  40 => 30,  36 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig");
    }
}
