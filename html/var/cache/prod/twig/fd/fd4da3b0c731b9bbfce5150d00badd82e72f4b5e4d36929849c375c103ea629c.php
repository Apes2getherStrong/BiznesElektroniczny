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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig */
class __TwigTemplate_3132cd64102eadedc4dc50f020788a07b3ed87c0b45e0f6bfe3cceba7226684f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_message_form_rest' => [$this, 'block_order_message_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $context["messagesToShow"] = 4;
        // line 29
        echo "
<div class=\"card mt-2 d-print-none\">
  <div class=\"card-header\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <h3 class=\"card-header-title\">
          ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Messages", [], "Admin.Global"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "messages", []), "total", []), "html", null, true);
        echo ")
        </h3>
      </div>
      ";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "messages", []), "total", []) > ($context["messagesToShow"] ?? null))) {
            // line 39
            echo "        <div class=\"col-md-6 text-right\">
          <a
            href=\"#\"
            data-toggle=\"modal\"
            data-target=\"#view_all_messages_modal\"
            class=\"d-print-none js-open-all-messages-btn\"
          >
            ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View full conversation", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          </a>
        </div>
      ";
        }
        // line 50
        echo "    </div>
  </div>

  ";
        // line 53
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "messages", []), "messages", []))) {
            // line 54
            echo "    <ul class=\"list-unstyled messages-block\">
      ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "messages", []), "messages", []), 0, ($context["messagesToShow"] ?? null))));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 56
                echo "        ";
                $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", 56)->display($context);
                // line 57
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    </ul>
  ";
        }
        // line 60
        echo "
  <div class=\"card-body\">
    ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderMessageForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_send_message", ["orderId" => $this->getAttribute(        // line 63
($context["orderForViewing"] ?? null), "id", [])])]);
        // line 64
        echo "

    ";
        // line 66
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderMessageForm"] ?? null), "order_message", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose your order message", [], "Admin.Orderscustomers.Feature"), "label_on_top" => true, "class" => "mb-0"]);
        // line 70
        echo "

    <div class=\"js-order-messages-container d-none\">
      <div class=\"js-message-change-warning\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you want to overwrite your existing message?", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</div>
      ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderMessageForm"] ?? null), "vars", []), "messages", [], "array"));
        foreach ($context['_seq'] as $context["id"] => $context["message"]) {
            // line 75
            echo "        <div data-id=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">
          ";
            // line 76
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </div>

    <div class=\"form-group row configure\">
      <div class=\"col-sm\">
        <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_messages_index");
        echo "\" class=\"configure-link\">
          ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure predefined messages", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          <i class=\"material-icons\">arrow_right_alt</i>
        </a>
      </div>
    </div>

    ";
        // line 90
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderMessageForm"] ?? null), "is_displayed_to_customer", []), ["material_design" => true]);
        echo "

    ";
        // line 92
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderMessageForm"] ?? null), "message", []), ["attr" => ["cols" => 30, "rows" => 3]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Message", [], "Admin.Global"), "label_on_top" => true, "class" => "js-text-with-length-counter"]);
        // line 96
        echo "

    ";
        // line 98
        $this->displayBlock('order_message_form_rest', $context, $blocks);
        // line 101
        echo "
    <div class=\"text-right\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send message", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderMessageForm"] ?? null), 'form_end');
        echo "
  </div>
</div>

";
    }

    // line 98
    public function block_order_message_form_rest($context, array $blocks = [])
    {
        // line 99
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderMessageForm"] ?? null), 'rest');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 99,  214 => 98,  205 => 106,  199 => 103,  195 => 101,  193 => 98,  189 => 96,  187 => 92,  182 => 90,  173 => 84,  169 => 83,  163 => 79,  154 => 76,  149 => 75,  145 => 74,  141 => 73,  136 => 70,  134 => 66,  130 => 64,  128 => 63,  127 => 62,  123 => 60,  119 => 58,  105 => 57,  102 => 56,  85 => 55,  82 => 54,  80 => 53,  75 => 50,  68 => 46,  59 => 39,  57 => 38,  49 => 35,  41 => 29,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/messages.html.twig");
    }
}
