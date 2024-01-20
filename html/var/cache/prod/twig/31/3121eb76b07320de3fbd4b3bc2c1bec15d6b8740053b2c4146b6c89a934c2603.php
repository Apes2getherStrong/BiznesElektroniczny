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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig */
class __TwigTemplate_e6c2d5c16cbfa79d8fd4a32806e329698a88ce01e9a66204887f4b392a93a750 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "  <div class=\"row\">
    <div class=\"col-sm\">
      ";
        // line 32
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 32)->display($context);
        // line 33
        echo "    </div>
  </div>
  ";
        // line 35
        if ( !($context["isGridDisplayed"] ?? null)) {
            // line 36
            echo "    <div class=\"row\">
      <div class=\"col-sm\">
        <div class=\"alert alert-info\" role=\"alert\">
          <div class=\"alert-text\">
            ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can only display the page list in a shop context.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        } else {
            // line 46
            echo "    <div class=\"row\">
      <div class=\"col\">
        ";
            // line 48
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 48)->display(twig_array_merge($context, ["grid" => ($context["grid"] ?? null)]));
            // line 49
            echo "      </div>
    </div>
  ";
        }
        // line 52
        echo "
  <div class=\"row justify-content-center\">
    <div class=\"col\">
      ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["setUpUrlsForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_set_up_urls_save")]);
        echo "
        ";
        // line 56
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/set_up_urls_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 56)->display($context);
        // line 57
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["setUpUrlsForm"] ?? null), 'form_end');
        echo "

      ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["shopUrlsForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_shop_urls_save")]);
        echo "
        ";
        // line 60
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 60)->display($context);
        // line 61
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["shopUrlsForm"] ?? null), 'form_end');
        echo "

      ";
        // line 63
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/domain_name_management.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 63)->display($context);
        // line 64
        echo "
      ";
        // line 65
        if ( !twig_test_empty(($context["urlSchemaForm"] ?? null))) {
            // line 66
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["urlSchemaForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_url_schema_save")]);
            echo "
          ";
            // line 67
            $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/url_schema_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 67)->display($context);
            // line 68
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["urlSchemaForm"] ?? null), 'form_end');
            echo "
      ";
        }
        // line 70
        echo "
      ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["seoOptionsForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_seo_options_save")]);
        echo "
        ";
        // line 72
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/seo_options_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 72)->display($context);
        // line 73
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["seoOptionsForm"] ?? null), 'form_end');
        echo "


      ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["robotsForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_generate_robots_text_file")]);
        echo "
        ";
        // line 77
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", 77)->display($context);
        // line 78
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["robotsForm"] ?? null), 'form_end');
        echo "
    </div>
  </div>

";
    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        // line 85
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/meta.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 87,  170 => 86,  165 => 85,  162 => 84,  152 => 78,  150 => 77,  146 => 76,  139 => 73,  137 => 72,  133 => 71,  130 => 70,  124 => 68,  122 => 67,  117 => 66,  115 => 65,  112 => 64,  110 => 63,  104 => 61,  102 => 60,  98 => 59,  92 => 57,  90 => 56,  86 => 55,  81 => 52,  76 => 49,  74 => 48,  70 => 46,  61 => 40,  55 => 36,  53 => 35,  49 => 33,  47 => 32,  43 => 30,  40 => 29,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/index.html.twig");
    }
}
