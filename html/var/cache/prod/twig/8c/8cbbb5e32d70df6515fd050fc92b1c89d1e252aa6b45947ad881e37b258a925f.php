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

/* @PrestaShop/Admin/Sell/Order/Order/view.html.twig */
class __TwigTemplate_c7aabb0371af0a6831f26e2fa1bcd78ea4853ca0c0969853523655502e352db3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["use_regular_h1_structure"] = false;
        // line 27
        ob_start(function () { return ''; });
        // line 28
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 28)->display($context);
        $context["layoutTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        $context["js_translatable"] = twig_array_merge(["The product was successfully added." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The product was successfully added.", [], "Admin.Notifications.Success"), "The product was successfully removed." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The product was successfully removed.", [], "Admin.Notifications.Success"), "[1] products were successfully added." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1] products were successfully added.", [], "Admin.Notifications.Success"), "[1] products were successfully removed." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1] products were successfully removed.", [], "Admin.Notifications.Success")],         // line 128
($context["js_translatable"] ?? null));
        // line 31
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 34
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/orders.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        // line 38
        echo "  <div id=\"order-view-page\"
       data-order-title=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order", [], "Admin.Global"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "reference", []), "html", null, true);
        echo "\">
    <div class=\"row d-print-none\">
      ";
        // line 41
        $context["displayAdminOrderTopHookContent"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderTop", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        // line 42
        echo "
      ";
        // line 43
        if ((($context["displayAdminOrderTopHookContent"] ?? null) != "")) {
            // line 44
            echo "        <div class=\"col-md-12\">
          ";
            // line 45
            echo ($context["displayAdminOrderTopHookContent"] ?? null);
            echo "
        </div>
      ";
        }
        // line 48
        echo "      <div class=\"order-actions col-md-12\">
        ";
        // line 49
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 49)->display($context);
        // line 50
        echo "      </div>
    </div>

    <div class=\"row d-none d-print-block mb-4\">
      <div class=\"col-md-12\">
        ";
        // line 55
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_order_statistics.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 55)->display($context);
        // line 56
        echo "      </div>
    </div>

    <div class=\"row d-none mb-4\">
      <div class=\"col-12\" id=\"orderProductsModificationPosition\"></div>
    </div>

    <div class=\"row d-none d-print-block mb-4\">
      <div class=\"col-md-12\">
        ";
        // line 65
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_title.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 65)->display($context);
        // line 66
        echo "      </div>
    </div>

    <div class=\"product-row row\">
      <div class=\"col-md-4 left-column\">
        ";
        // line 71
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 71)->display($context);
        // line 72
        echo "
        ";
        // line 73
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderSide", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "
        ";
        // line 74
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 74)->display($context);
        // line 75
        echo "
        ";
        // line 76
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderSideBottom", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "
      </div>

      <div class=\"col-md-8 d-print-block right-column\">
        <div id=\"orderProductsOriginalPosition\">
          ";
        // line 81
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 81)->display($context);
        // line 82
        echo "        </div>
        ";
        // line 83
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 83)->display($context);
        // line 84
        echo "
        ";
        // line 85
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderMain", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "
        ";
        // line 86
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 86)->display($context);
        // line 87
        echo "
        ";
        // line 88
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderMainBottom", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "
      </div>
    </div>

    ";
        // line 92
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "sources", []), "sources", []))) {
            // line 93
            echo "      <div class=\"product-row row\">
        <div class=\"col-md-12 left-column\">
          ";
            // line 95
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 95)->display($context);
            // line 96
            echo "        </div>
      </div>
    ";
        }
        // line 99
        echo "
    ";
        // line 100
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "linkedOrders", []), "linkedOrders", []))) {
            // line 101
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 101)->display($context);
            // line 102
            echo "    ";
        }
        // line 103
        echo "
    ";
        // line 104
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrder", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        echo "

    ";
        // line 106
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 106)->display($context);
        // line 107
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 107)->display($context);
        // line 108
        echo "    ";
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []) != 0))) {
            // line 109
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 109)->display($context);
            // line 110
            echo "    ";
        }
        // line 111
        echo "
    ";
        // line 112
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_all_messages_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 112)->display($context);
        // line 113
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 113)->display($context);
        // line 114
        echo "  </div>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_view.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 120,  238 => 118,  235 => 117,  230 => 114,  227 => 113,  225 => 112,  222 => 111,  219 => 110,  216 => 109,  213 => 108,  210 => 107,  208 => 106,  203 => 104,  200 => 103,  197 => 102,  194 => 101,  192 => 100,  189 => 99,  184 => 96,  182 => 95,  178 => 93,  176 => 92,  169 => 88,  166 => 87,  164 => 86,  160 => 85,  157 => 84,  155 => 83,  152 => 82,  150 => 81,  142 => 76,  139 => 75,  137 => 74,  133 => 73,  130 => 72,  128 => 71,  121 => 66,  119 => 65,  108 => 56,  106 => 55,  99 => 50,  97 => 49,  94 => 48,  88 => 45,  85 => 44,  83 => 43,  80 => 42,  78 => 41,  69 => 39,  66 => 38,  63 => 37,  56 => 34,  53 => 33,  48 => 31,  46 => 128,  45 => 123,  41 => 28,  39 => 27,  37 => 26,  31 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/view.html.twig");
    }
}
