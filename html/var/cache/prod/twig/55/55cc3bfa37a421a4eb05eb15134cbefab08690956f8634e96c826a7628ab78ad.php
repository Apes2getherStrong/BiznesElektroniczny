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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig */
class __TwigTemplate_58c514644dcdf385ea8b7f5fc760b34beac38afa0179a7f4ea95babb1642275e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'keyword' => [$this, 'block_keyword'],
            'meta_robots_file_form_rest' => [$this, 'block_meta_robots_file_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('keyword', $context, $blocks);
    }

    public function block_keyword($context, array $blocks = [])
    {
        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Robots file generation", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                ";
        // line 40
        $context["defaultDescription"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your robots.txt file MUST be in your website's root directory and nowhere else (e.g. http://www.example.com/robots.txt).", [], "Admin.Shopparameters.Notification");
        // line 41
        echo "                ";
        if (($context["isRobotsTextFileValid"] ?? null)) {
            // line 42
            echo "                  ";
            echo twig_escape_filter($this->env, ($context["defaultDescription"] ?? null), "html", null, true);
            echo " <br>
                  ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate your \"robots.txt\" file by clicking on the following button (this will erase the old robots.txt file)", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                ";
        } else {
            // line 45
            echo "                  ";
            echo twig_escape_filter($this->env, ($context["defaultDescription"] ?? null), "html", null, true);
            echo " <br>
                  ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before you can use this tool, you need to:", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
                  ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1) Create a blank robots.txt file in your root directory.", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo " <br>
                  ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("2) Give it write permissions (CHMOD 666 on Unix system).", [], "Admin.Shopparameters.Notification"), "html", null, true);
            echo "
                ";
        }
        // line 50
        echo "              </div>
            </div>
          </div>
        </div>

        ";
        // line 55
        $this->displayBlock('meta_robots_file_form_rest', $context, $blocks);
        // line 58
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        ";
        // line 62
        if (($context["isRobotsTextFileValid"] ?? null)) {
            // line 63
            echo "          <button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate robots.txt file", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</button>
        ";
        }
        // line 65
        echo "      </div>
    </div>
  </div>
";
    }

    // line 55
    public function block_meta_robots_file_form_rest($context, array $blocks = [])
    {
        // line 56
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["setUpUrlsForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 56,  123 => 55,  116 => 65,  110 => 63,  108 => 62,  102 => 58,  100 => 55,  93 => 50,  88 => 48,  84 => 47,  80 => 46,  75 => 45,  70 => 43,  65 => 42,  62 => 41,  60 => 40,  48 => 31,  44 => 29,  38 => 28,  35 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/robots_file_generation.html.twig");
    }
}
