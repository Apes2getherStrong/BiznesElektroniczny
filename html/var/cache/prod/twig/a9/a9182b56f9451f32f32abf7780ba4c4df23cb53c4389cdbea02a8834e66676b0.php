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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig */
class __TwigTemplate_aaa94dfd0f2e5a6fd22bf6366a61bb73758c7ccf105142e932d51c076344f9fe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'meta_showcase_card' => [$this, 'block_meta_showcase_card'],
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
        $this->displayBlock('meta_showcase_card', $context, $blocks);
    }

    public function block_meta_showcase_card($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        if ( !($context["showcaseCardIsClosed"] ?? null)) {
            // line 30
            echo "  <div id=\"seo-urls-showcase-card\" class=\"showcase-card card\">
    <div class=\"showcase-card__left shape-one helper-card__meta-background img-rtl\">
      <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/helper-card/seo@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
    <div class=\"showcase-card__right\">
      <h2>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Improve your SEO", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit information about your pages to gain visibility and therefore reach more visitors. We advise you to start with the index page, it stands for your homepage.", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["helperDocLink"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "</a>
      ";
            // line 38
            if ((($context["indexPageId"] ?? null) && ($context["isGridDisplayed"] ?? null))) {
                // line 39
                echo "        <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_edit", ["metaId" => ($context["indexPageId"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure index page", [], "Admin.Shopparameters.Feature"), "html", null, true);
                echo "</a>
      ";
            }
            // line 41
            echo "    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\" data-card-name=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["metaShowcaseCardName"] ?? null), "html", null, true);
            echo "\" data-close-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_close_showcase_card");
            echo "\">close</i>
  </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 42,  80 => 41,  72 => 39,  70 => 38,  64 => 37,  60 => 36,  56 => 35,  50 => 32,  46 => 30,  43 => 29,  37 => 28,  34 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/meta_showcase_card.html.twig");
    }
}
