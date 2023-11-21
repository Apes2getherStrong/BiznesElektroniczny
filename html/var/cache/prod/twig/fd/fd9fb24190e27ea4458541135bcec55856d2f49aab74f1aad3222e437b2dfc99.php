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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig */
class __TwigTemplate_50ac7816a60bc4abb1b66cee1851764ffea5e94387a31ff94956c8409e33b256 extends \Twig\Template
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
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig", 26, "2122818386")->display(twig_array_merge($context, ["id" => "changeOrdersStatusModal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose an order status", [], "Admin.Orderscustomers.Feature"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update status", [], "Admin.Orderscustomers.Feature"), "class" => "btn btn-primary btn-lg js-submit-modal-form-btn"]]]));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig */
class __TwigTemplate_50ac7816a60bc4abb1b66cee1851764ffea5e94387a31ff94956c8409e33b256___2122818386 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"modal-body\">
      ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderStatusesForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_change_orders_status"), "attr" => ["data-bulk-inputs-id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 41
($context["changeOrderStatusesForm"] ?? null), "order_ids", []), "vars", []), "id", [])]]);
        // line 43
        echo "

      <div class=\"form-group mb-0\">
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderStatusesForm"] ?? null), "new_order_status_id", []), 'widget');
        echo "
      </div>

      <div class=\"d-none\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderStatusesForm"] ?? null), "order_ids", []), 'widget');
        echo "
      </div>

      ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderStatusesForm"] ?? null), 'form_end');
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 53,  111 => 50,  104 => 46,  99 => 43,  97 => 41,  96 => 38,  93 => 37,  90 => 36,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/change_orders_status_modal.html.twig");
    }
}
