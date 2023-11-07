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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig */
class __TwigTemplate_5d0e90c5d9fe0d5958716ab01fbf994e8fbfa539ef8ef5c894010df2fadc5f44 extends \Twig\Template
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

<div class=\"card customer-personal-informations-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), "html", null, true);
        echo "
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", []), "html", null, true);
        echo "
    ";
        // line 32
        echo twig_escape_filter($this->env, sprintf("[%06d]", $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", [])), "html", null, true);
        echo "
    -
    <a href=\"mailto:";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "email", []), "html", null, true);
        echo "\">
      ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "email", []), "html", null, true);
        echo "
    </a>

    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCustomers", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", []), "updatecustomer" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", [])]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right edit-link\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Social Title", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-social-title col-8\">
        ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "socialTitle", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Age", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-birthday\">
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "birthday", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registration Date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-registration-date\">
        ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "registrationDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Visit", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-last-visit-date\">
        ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastVisitDate", []), "html", null, true);
        echo "
      </div>
    </div>

    ";
        // line 85
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "rankBySales", [])) {
            // line 86
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Best Customer Rank", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8 customer-sales-rank\">
          ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "rankBySales", []), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        if (($context["isMultistoreEnabled"] ?? null)) {
            // line 97
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "Admin.Global"), "html", null, true);
            echo "
        </div>
        <div class=\"customer-shop-name col-8\">
          ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "shopName", []), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 106
        echo "
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-language-name\">
        ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "languageName", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registrations", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 121
        $context["isNewsletterSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "subscriptions", []), "newsletterSubscribed", []);
        // line 122
        echo "        ";
        $context["isPartnerOffersSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "subscriptions", []), "partnerOffersSubscribed", []);
        // line 123
        echo "
        <span class=\"customer-newsletter-subscription-status badge badge-";
        // line 124
        if (($context["isNewsletterSubscribed"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          <i class=\"material-icons\">";
        // line 125
        if (($context["isNewsletterSubscribed"] ?? null)) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Newsletter", [], "Admin.Global"), "html", null, true);
        echo "
        </span>

        <span class=\"customer-partner-offers-status badge badge-";
        // line 129
        if (($context["isPartnerOffersSubscribed"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          <i class=\"material-icons\">";
        // line 130
        if (($context["isPartnerOffersSubscribed"] ?? null)) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partner offers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latest Update", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-latest-update col-8\">
        ";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastUpdateDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 150
        $context["isCustomerActive"] = $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "active", []);
        // line 151
        echo "
        <span class=\"customer-status badge badge-";
        // line 152
        if (($context["isCustomerActive"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          ";
        // line 153
        if (($context["isCustomerActive"] ?? null)) {
            // line 154
            echo "            <i class=\"material-icons\">check</i>
            ";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 157
            echo "            <i class=\"material-icons\">cancel</i>
            ";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inactive", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 160
        echo "        </span>
      </div>
    </div>

    ";
        // line 164
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "guest", [])) {
            // line 165
            echo "      ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["transferGuestAccountForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
            // line 166
            echo "
      <div class=\"customer-guest-status row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This customer is registered as a Guest.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">
          ";
            // line 172
            if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "generalInformation", []), "customerBySameEmailExists", [])) {
                // line 173
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A registered customer account using the defined email address already exists. ", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>
          ";
            } else {
                // line 175
                echo "            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_transform_guest_to_customer", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", [])])]);
                echo "
            ";
                // line 176
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["transferGuestAccountForm"] ?? null), "transfer_guest_account", []), 'widget');
                echo "

            <p class=\"small-text\">
              ";
                // line 179
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This feature generates a random password before sending an email to your customer.", [], "Admin.Orderscustomers.Help"), "html", null, true);
                echo "
            </p>
            ";
                // line 181
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? null), 'form_end');
                echo "
          ";
            }
            // line 183
            echo "        </div>
      </div>
    ";
        }
        // line 186
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 186,  363 => 183,  358 => 181,  353 => 179,  347 => 176,  342 => 175,  336 => 173,  334 => 172,  328 => 169,  323 => 166,  320 => 165,  318 => 164,  312 => 160,  307 => 158,  304 => 157,  299 => 155,  296 => 154,  294 => 153,  286 => 152,  283 => 151,  281 => 150,  275 => 147,  266 => 141,  260 => 138,  250 => 131,  242 => 130,  234 => 129,  228 => 126,  220 => 125,  212 => 124,  209 => 123,  206 => 122,  204 => 121,  198 => 118,  189 => 112,  183 => 109,  178 => 106,  171 => 102,  165 => 99,  161 => 97,  159 => 96,  156 => 95,  149 => 91,  143 => 88,  139 => 86,  137 => 85,  130 => 81,  124 => 78,  115 => 72,  109 => 69,  100 => 63,  94 => 60,  85 => 54,  79 => 51,  68 => 43,  60 => 38,  54 => 35,  50 => 34,  45 => 32,  41 => 31,  37 => 30,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/personal_information.html.twig");
    }
}
