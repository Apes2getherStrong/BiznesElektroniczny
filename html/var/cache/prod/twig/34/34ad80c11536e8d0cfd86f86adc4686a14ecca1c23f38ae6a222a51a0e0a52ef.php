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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig */
class __TwigTemplate_8855324c330eca634ed61caee5abb95f710e72059241d31eb2f63ebf02eb16c1 extends \Twig\Template
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
        if ( !(null === ($context["changeOrderAddressForm"] ?? null))) {
            // line 27
            echo "  <div class=\"modal fade\" id=\"updateCustomerAddressModal\">
      <div class=\"modal-dialog\" role=\"document\">
        ";
            // line 29
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderAddressForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_change_customer_address", ["orderId" => $this->getAttribute(            // line 30
($context["orderForViewing"] ?? null), "id", []), "customerId" => $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", [])])]);
            echo "
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\">
                ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
            echo "
              </h5>

              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
            echo "\">
                <span aria-hidden=\"true\">×</span>
              </button>
            </div>

            <div class=\"modal-body\">
              <div class=\"form-group m-0\">
                ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderAddressForm"] ?? null), "new_address_id", []), 'widget');
            echo "
              </div>
            </div>

            ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderAddressForm"] ?? null), "address_type", []), 'widget');
            echo "

            <div class=\"modal-footer\">
              <button id=\"change-address-cancel-button\" type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
                ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>

              <button id=\"change-address-submit-button\" type=\"submit\" class=\"btn btn-primary\">
                ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>
          </div>
        ";
            // line 60
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderAddressForm"] ?? null), 'form_end');
            echo "
      </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 60,  84 => 56,  77 => 52,  70 => 48,  63 => 44,  53 => 37,  47 => 34,  40 => 30,  39 => 29,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig");
    }
}
