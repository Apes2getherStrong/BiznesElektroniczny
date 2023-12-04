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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig */
class __TwigTemplate_44703b2361fe2e5c5f44ce46266073c95f6c66359a8912aad72a52361421ec6a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        // line 22
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"application/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["cdc_error_templating_url"] ?? null), "html", null, true);
        echo "\"></script>

  ";
        // line 25
        if ((array_key_exists("cdc_script_not_found", $context) && (($context["cdc_script_not_found"] ?? null) === true))) {
            // line 26
            echo "    <script type=\"application/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["cdc_error_url"] ?? null), "html", null, true);
            echo "\"></script>
  ";
        }
        // line 28
        echo "
  <script>
    function addOrUpdateUrlParam(name, value)
    {
      var href = window.location.href;
      var regex = new RegExp(\"[&\\\\?]\" + name + \"=\");
      if(regex.test(href))
      {
        regex = new RegExp(\"([&\\\\?])\" + name + \"=\\\\d+\");
        window.location.href = href.replace(regex, \"\$1\" + name + \"=\" + value);
      }
      else
      {
        if(href.indexOf(\"?\") > -1)
          window.location.href = href + \"&\" + name + \"=\" + value;
        else
          window.location.href = href + \"?\" + name + \"=\" + value;
      }
    }

    if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
      if (typeof renderCdcError === 'function') {
        window.\$(document).ready(function() {
          renderCdcError(\$('#cdc-container'));
        });
      }
    } else {
      const currentUrl = new URL(window.location.href)
      if (currentUrl.searchParams.has('filterCategoryRef') && !currentUrl.searchParams.has('mbo_cdc_path')) {
        addOrUpdateUrlParam('mbo_cdc_path', encodeURIComponent('/#/modules'));
      } else {
        const renderModules = window.mboCdc.renderModules

        const context = ";
        // line 61
        echo twig_jsonencode_filter(($context["shop_context"] ?? null));
        echo ";

        renderModules(context, '#cdc-container')
      }
    }
  </script>
";
    }

    // line 69
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 70
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["cdc_error_templating_css"] ?? null), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
        // line 75
        echo "  <div class=\"mbo-catalog-wrapper cdc-container\" id=\"cdc-container\" data-error-path=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mbo_module_cdc_error");
        echo "\"></div>

  ";
        // line 78
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 78)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 79
        echo "
  ";
        // line 80
        $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/modal_import.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 80)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 80,  134 => 79,  131 => 78,  125 => 75,  122 => 74,  116 => 71,  111 => 70,  108 => 69,  97 => 61,  62 => 28,  56 => 26,  54 => 25,  49 => 23,  44 => 22,  41 => 21,  31 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", "/var/www/html/modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig");
    }
}
