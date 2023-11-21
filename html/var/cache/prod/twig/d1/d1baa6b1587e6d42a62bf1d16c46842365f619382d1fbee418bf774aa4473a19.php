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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig */
class __TwigTemplate_8a32f0716bbf630d83fd0a60ac221581229c8e9103f5f7e2046cb3207af18002 extends \Twig\Template
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
<div class=\"modal fade\" id=\"addOrderDiscountModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
      ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderCartRuleForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_add_cart_rule", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])])]);
        echo "
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\">
              ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new cart rule", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
            </h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-group\">
                  <label class=\"form-control-label\" for=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderCartRuleForm"] ?? null), "name", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "
                  </label>

                  ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderCartRuleForm"] ?? null), "name", []), 'widget');
        echo "
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-group\">
                  <label class=\"form-control-label\" for=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderCartRuleForm"] ?? null), "type", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Global"), "html", null, true);
        echo "
                  </label>

                  ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderCartRuleForm"] ?? null), "type", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-group mb-0\">
                  <label class=\"form-control-label\" for=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderCartRuleForm"] ?? null), "value", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                    ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "
                  </label>

                  <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                      <div class=\"input-group-text\" id=\"add_order_cart_rule_value_unit\" data-currency-symbol=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? null), "symbol", []), "html", null, true);
        echo "\">%</div>
                    </div>
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderCartRuleForm"] ?? null), "value", []), 'widget');
        echo "
                  </div>
                  <small class=\"text-muted js-cart-rule-value-help d-none\">
                    ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This value must include taxes.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
                  </small>
                </div>
              </div>
            </div>

            <div class=\"";
        // line 80
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [])) {
            echo "d-none";
        }
        echo "\">
              <div class=\"row\">
                <div class=\"col\">
                  <div class=\"form-group\">
                    <label class=\"form-control-label\" for=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderCartRuleForm"] ?? null), "invoice_id", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                      ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "
                    </label>

                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderCartRuleForm"] ?? null), "invoice_id", []), 'widget', ["attr" => ["disabled" =>  !$this->getAttribute(        // line 89
($context["orderForViewing"] ?? null), "hasInvoice", [])]]);
        // line 90
        echo "
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
              ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
            <button type=\"submit\" class=\"btn btn-primary\" id=\"add_order_cart_rule_submit\">
              ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
      ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderCartRuleForm"] ?? null), 'form_end');
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 105,  167 => 101,  161 => 98,  151 => 90,  149 => 89,  148 => 88,  142 => 85,  138 => 84,  129 => 80,  120 => 74,  114 => 71,  109 => 69,  101 => 64,  97 => 63,  89 => 58,  83 => 55,  79 => 54,  68 => 46,  62 => 43,  58 => 42,  47 => 34,  42 => 32,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig");
    }
}
