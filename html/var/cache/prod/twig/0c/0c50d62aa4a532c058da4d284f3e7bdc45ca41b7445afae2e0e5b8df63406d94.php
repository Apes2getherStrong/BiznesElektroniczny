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

/* @PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig */
class __TwigTemplate_9c4c4c2eb13200bc0f6b854db994c4aa1a7e94a7bab44e2219a14238f447dd94 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'feature_flag_form' => [$this, 'block_feature_flag_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["featureFlagsForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "  ";
        if (($context["displayAllShopsContextForced"] ?? null)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "infotip", [0 => ($context["multistoreForcedContextInfoTip"] ?? null), 1 => true], "method"), "html", null, true);
        }
        // line 32
        echo "  <div class=\"row justify-content-center\">
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureFlagsForm"] ?? null), 'form_start', ["attr" => ["class" => "form col", "id" => "feature-flag-form"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_feature_flags_index")]);
        echo "
    ";
        // line 34
        $this->displayBlock('feature_flag_form', $context, $blocks);
        // line 66
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureFlagsForm"] ?? null), 'form_end');
        echo "
  </div>

";
    }

    // line 34
    public function block_feature_flag_form($context, array $blocks = [])
    {
        // line 35
        echo "      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Experimental features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-block row\">
          <div class=\"card-text\">
            <div class=\"alert medium-alert alert-warning\" role=\"alert\">
              ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Testing a feature before its official release can be exciting. However, you must be aware of the potential risks of such experiments:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
              <ul>
                <li>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Experimental features are still under development. Enabling them could therefore have unintended consequences and cause data loss.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
                <li>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In any case, you should never experiment in production.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
              </ul>
            </div>
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["featureFlagsForm"] ?? null), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 52
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["featureFlagsForm"] ?? null), "vars", []), "data", []))) {
            // line 53
            echo "          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" id=\"submit-btn-feature-flag\" class=\"btn btn-primary\"
                      data-modal-title=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to enable this experimental feature?", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "\"
                      data-modal-message=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to enable a feature that is not stable yet. This should only be done in a test environment or in full knowledge of the potential risks.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "\"
                      data-modal-apply=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable", [], "Admin.Actions"), "html", null, true);
            echo "\"
                      data-modal-cancel=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
            echo "\"
              >";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "</button>
            </div>
          </div>
        ";
        }
        // line 64
        echo "      </div>
    ";
    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        // line 72
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/feature_flag.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 74,  145 => 72,  142 => 71,  137 => 64,  130 => 60,  126 => 59,  122 => 58,  118 => 57,  114 => 56,  109 => 53,  107 => 52,  101 => 49,  95 => 46,  91 => 45,  86 => 43,  77 => 37,  73 => 35,  70 => 34,  61 => 66,  59 => 34,  55 => 33,  52 => 32,  47 => 31,  44 => 30,  39 => 25,  37 => 28,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig");
    }
}
