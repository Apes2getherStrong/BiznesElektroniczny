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

/* @PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig */
class __TwigTemplate_277340b4469223920f81c2a95449d20b3b90c56b1b34b3a19334d7545472746b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'admin_form_order_delivery_slip_pdf' => [$this, 'block_admin_form_order_delivery_slip_pdf'],
            'admin_form_order_delivery_slip_options' => [$this, 'block_admin_form_order_delivery_slip_options'],
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
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig", 27)->unwrap();
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pdfForm"] ?? null), 'form_start', ["attr" => ["class" => "form", "autocomplete" => "off", "id" => "form-delivery-slips-print-pdf"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_delivery_slip_pdf")]);
        // line 33
        echo "
    <div class=\"row justify-content-center\">
      ";
        // line 35
        $this->displayBlock('admin_form_order_delivery_slip_pdf', $context, $blocks);
        // line 68
        echo "    </div>
  ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pdfForm"] ?? null), 'form_end');
        echo "

  ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionsForm"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "form-delivery-slips-options"]]);
        echo "
    <div class=\"row justify-content-center\">
      ";
        // line 73
        $this->displayBlock('admin_form_order_delivery_slip_options', $context, $blocks);
        // line 113
        echo "    </div>
  ";
        // line 114
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 35
    public function block_admin_form_order_delivery_slip_pdf($context, array $blocks = [])
    {
        // line 36
        echo "        <div class=\"col-xl-12\">
          <div class=\"card\" id=\"delivery_pdf_fieldset\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">print</i> ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Print PDF", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
              <div class=\"card-text\">
                <div class=\"form-group row\">
                  ";
        // line 44
        echo $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", [], "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pdfForm"] ?? null), "date_from", []), 'errors');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pdfForm"] ?? null), "date_from", []), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"form-group row\">
                  ";
        // line 51
        echo $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", [], "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pdfForm"] ?? null), "date_to", []), 'errors');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pdfForm"] ?? null), "date_to", []), 'widget');
        echo "
                  </div>
                </div>
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["pdfForm"] ?? null), 'rest');
        echo "
              </div>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\" id=\"generate-delivery-slip-by-date\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate PDF", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 73
    public function block_admin_form_order_delivery_slip_options($context, array $blocks = [])
    {
        // line 74
        echo "        <div class=\"col-xl-12\">
          <div class=\"card\" id=\"delivery_options_fieldset\">
            <h3 class=\"card-header\">
              <i class=\"material-icons\">settings</i> ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery slip options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
              <div class=\"card-text\">
                <div class=\"form-group row\">
                  ";
        // line 82
        echo $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery prefix", [], "Admin.Orderscustomers.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prefix used for delivery slips.", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? null), "prefix", []), 'errors');
        echo "
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? null), "prefix", []), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"form-group row\">
                  ";
        // line 89
        echo $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery number", [], "Admin.Orderscustomers.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The next delivery slip will begin with this number and then increase with each additional slip.", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? null), "number", []), 'errors');
        echo "
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? null), "number", []), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"form-group row\">
                  ";
        // line 96
        echo $this->getAttribute(($context["ps"] ?? null), "label_with_help", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable product image", [], "Admin.Orderscustomers.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add an image before product name on delivery slip", [], "Admin.Orderscustomers.Help")], "method");
        echo "
                  <div class=\"col-sm\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? null), "enable_product_image", []), 'errors');
        echo "
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["optionsForm"] ?? null), "enable_product_image", []), 'widget');
        echo "
                  </div>
                </div>
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["optionsForm"] ?? null), 'rest');
        echo "
              </div>
            </div>
            <div class=\"card-footer\">
              <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary\" id=\"save-delivery-slip-options-button\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        // line 118
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_delivery.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 120,  230 => 118,  227 => 117,  217 => 107,  209 => 102,  203 => 99,  199 => 98,  194 => 96,  187 => 92,  183 => 91,  178 => 89,  171 => 85,  167 => 84,  162 => 82,  154 => 77,  149 => 74,  146 => 73,  136 => 62,  128 => 57,  122 => 54,  118 => 53,  113 => 51,  106 => 47,  102 => 46,  97 => 44,  89 => 39,  84 => 36,  81 => 35,  75 => 114,  72 => 113,  70 => 73,  65 => 71,  60 => 69,  57 => 68,  55 => 35,  51 => 33,  48 => 30,  45 => 29,  40 => 25,  38 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Delivery/slip.html.twig");
    }
}
