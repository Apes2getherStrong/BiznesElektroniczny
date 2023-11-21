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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig */
class __TwigTemplate_26137f7412ebd7772cfc28987851424ba4d25c4db620f67cbd612049ad5a43c2 extends \Twig\Template
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
<table class=\"table\">
  <tbody>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "history", []), "statuses", []));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 29
            echo "    <tr>
      <td>
        <span class=\"badge rounded badge-print-light\"
              style=\"background-color: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "color", []), "html", null, true);
            echo "; color: ";
            echo ((call_user_func_array($this->env->getFunction('is_color_bright')->getCallable(), [$this->getAttribute($context["status"], "color", [])])) ? ("black") : ("white"));
            echo ";\"
        >
          ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "name", []), "html", null, true);
            echo "
        </span>
      </td>
      <td class=\"text-right\">
        ";
            // line 38
            if ( !twig_test_empty($this->getAttribute($context["status"], "employeeLastName", []))) {
                // line 39
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["status"], "employeeFirstName", []) . " ") . $this->getAttribute($context["status"], "employeeLastName", [])), "html", null, true);
                echo "
        ";
            }
            // line 41
            echo "      </td>
      <td class=\"text-right\">
        ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["status"], "createdAt", [])), "html", null, true);
            echo "
      </td>
      <td class=\"text-right\">
        ";
            // line 46
            if ($this->getAttribute($context["status"], "withEmail", [])) {
                // line 47
                echo "          <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_resend_email", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "orderHistoryId" => $this->getAttribute($context["status"], "orderHistoryId", []), "orderStatusId" => $this->getAttribute($context["status"], "orderStatusId", [])]), "html", null, true);
                echo "\">
            <button class=\"btn btn-link pt-0 pb-0\">
              ";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Resend email", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
            </button>
          </form>
        ";
            }
            // line 53
            echo "      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  </tbody>
</table>

<div class=\"row\">
  <div class=\"col-sm-6 offset-sm-6\">
    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderStatusForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_update_status", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]), "attr" => ["class" => "card-details-form"]]);
        echo "
      <div class=\"form-group card-details-actions\">
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["updateOrderStatusForm"] ?? null), "new_order_status_id", []), 'widget');
        echo "

        <button class=\"btn btn-primary update-status ml-3\">
          ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </button>
      </div>

      <div class=\"d-none\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["updateOrderStatusForm"] ?? null), 'rest');
        echo "
      </div>
    ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderStatusForm"] ?? null), 'form_end');
        echo "
  </div>
</div>

";
        // line 77
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig", 77)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 77,  130 => 73,  125 => 71,  117 => 66,  111 => 63,  106 => 61,  99 => 56,  91 => 53,  84 => 49,  78 => 47,  76 => 46,  70 => 43,  66 => 41,  60 => 39,  58 => 38,  51 => 34,  44 => 32,  39 => 29,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/history.html.twig");
    }
}
