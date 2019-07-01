<?php

/* admin/system/auth.html.twig */
class __TwigTemplate_242ded19f0489b0bdb34da994c95728cf94c27cd620f04a7bb79bd44bcf65ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/auth.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e7ee69dd225b652a57cf4b1db837c0c6d83ae20556b4b114b9ad77daf2f9867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7ee69dd225b652a57cf4b1db837c0c6d83ae20556b4b114b9ad77daf2f9867->enter($__internal_1e7ee69dd225b652a57cf4b1db837c0c6d83ae20556b4b114b9ad77daf2f9867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/auth.html.twig"));

        // line 3
        $context["menu"] = "admin_user_auth";
        // line 5
        $context["script_controller"] = "setting/auth";
        // line 6
        $context["script_arguments"] = array("emailVerified" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "emailVerified", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e7ee69dd225b652a57cf4b1db837c0c6d83ae20556b4b114b9ad77daf2f9867->leave($__internal_1e7ee69dd225b652a57cf4b1db837c0c6d83ae20556b4b114b9ad77daf2f9867_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_41939c035586ba0c89e2f196e9675410cdf67f507805dbb57efaa5a9c742885e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41939c035586ba0c89e2f196e9675410cdf67f507805dbb57efaa5a9c742885e->enter($__internal_41939c035586ba0c89e2f196e9675410cdf67f507805dbb57efaa5a9c742885e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form  id=\"auth-form\" class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <legend>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.sign_up_settings"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.User_sign_up_type"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default ";
        // line 20
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "email")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.email"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 21
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"mobile\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.phone"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 22
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "email_or_mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email_or_mobile\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.email_or_mobile"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 23
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "closed")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"closed\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.closed"), "html", null, true);
        echo "</button>
        </div>
        <input type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()), "none")) : ("none")), "html", null, true);
        echo "\" name=\"register_mode\" />
        <div class=\"help-block\" >";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.User_sign_up_type.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    
    <div class=\"email-content ";
        // line 31
        if ((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "mobile") || ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "closed"))) {
            echo "hidden";
        }
        echo "\">
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label >";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Email_verification_sign"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
        // line 37
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("email_enabled", array("opened" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Email_verification_sign.open"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Email_verification_sign.closed")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "email_enabled", array()));
        echo "
         <button type=\"button\" class=\"btn btn-primary btn-sm js-email-send-check hidden\"  data-url=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_email_send");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Verify_email_address_btn"), "html", null, true);
        echo "</button>
         <div class=\"alert alert-info js-email-status hidden\"  data-url=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mailer");
        echo "\"role=\"alert\" style=\"padding: 5px;margin-bottom: 0\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Verifying"), "html", null, true);
        echo "</div>
         <div class=\"help-block\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Verify_email_address_btn.help_block"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <input type=\"hidden\" name=\"setting_time\"  value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.setting_time"), "html", null, true);
        echo "\" >

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_title\" >";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_title"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "email_activation_title", array()), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "email_activation_body", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.Variables"), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 64
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.Nickname_of_recipient"), "html", null, true);
        echo "</li>
              <li>";
        // line 65
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_site_name"), "html", null, true);
        echo "</li>
              <li>";
        // line 66
        echo "{{siteurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_site_url"), "html", null, true);
        echo "</li>
              <li>";
        // line 67
        echo "{{verifyurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_verify_url"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection"), "html", null, true);
        echo "</label>
      </div>

      <div class=\"controls col-md-8 radios\">
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"none\" value=\"none\" ";
        // line 82
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "none")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.none"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"low\" value=\"low\" ";
        // line 85
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"middle\" value=\"middle\" ";
        // line 88
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.middle"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"high\" value=\"high\"";
        // line 91
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.high"), "html", null, true);
        echo "
        </label>
      </div>

      <button type=\"button\" class=\"hiddenJsAction\" style=\"display: none\"></button>

      <div class=\"controls col-md-8 mtl col-md-offset-3 dync_visible not_closed_mode low_protective\" ";
        // line 97
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.Explaination"), "html", null, true);
        echo "
          <p class=\"mll mtm dync_visible low_protective_email low_protective_email_or_mobile\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code.email"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm dync_visible low_protective_mobile low_protective_email_or_mobile\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code.mobile.tip1"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm dync_visible low_protective_mobile low_protective_email_or_mobile\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code.mobile.tip2"), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl col-md-offset-3 dync_visible not_closed_mode middle_protective\" ";
        // line 106
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.Explaination"), "html", null, true);
        echo "
          <p class=\"mll mtm dync_visible middle_protective_email middle_protective_email_or_mobile\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code.email"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm dync_visible middle_protective_mobile middle_protective_email_or_mobile\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code.mobile.tip1"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm dync_visible middle_protective_mobile middle_protective_email_or_mobile\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code.mobile.tip2"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.middle.30_times"), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl col-md-offset-3 dync_visible not_closed_mode high_protective\" ";
        // line 116
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.Explaination"), "html", null, true);
        echo "
          <p class=\"mll mtm dync_visible high_protective_email high_protective_email_or_mobile\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.low.Verification_code.email"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm dync_visible high_protective_mobile high_protective_email_or_mobile\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.high.Verification_code.mobile"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.high.10_times"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Protection.high.sign_up_count"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        ";
        // line 137
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->checkboxs("welcome_methods", array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.In_site_message"), "email" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.email")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_methods", array()));
        echo "
        <div class=\"help-block\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.help_block"), "html", null, true);
        echo "。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 147
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("welcome_enabled", array("opened" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send.closed"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send.open")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_enabled", array()));
        echo "
        <div class=\"help-block\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.send.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.sender"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_sender", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.sender.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.title"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_title", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.content"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          <div>";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.warning.help_block"), "html", null, true);
        echo "</div>
          <div>";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.Variables"), "html", null, true);
        echo "</div>
          <ul>
            <li>";
        // line 181
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Setup_welcome_message.as_recipient.help_block"), "html", null, true);
        echo "</li>
            <li>";
        // line 182
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_site_name"), "html", null, true);
        echo "</li>
            <li>";
        // line 183
        echo "{{siteurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.active_email_content.as_site_url"), "html", null, true);
        echo "</li>
          </ul>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.Enable"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 197
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("user_terms", array("opened" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.open"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.closed")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "user_terms", array()));
        echo "
        <div class=\"help-block\">";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.Enable.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Term_service_settings.details"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\" data-image-upload-url=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "user_terms_body", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>

  </fieldset>


  ";
        // line 214
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.username_setting"), false)) {
            // line 215
            echo "    <fieldset>
      <legend>";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Name_setting"), "html", null, true);
            echo "</legend>
      <div class=\"row form-group\">
          <div class=\"col-md-2 col-md-offset-2 control-label\">
              <label for=\"user_name\">";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Name_setting.user_name"), "html", null, true);
            echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"user_name\" name=\"user_name\" class=\"form-control\" ";
            // line 222
            if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "user_name", array())) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"))), "html", null, true);
                echo "\" ";
            }
            echo ">
          </div>
      </div>

      <div class=\"alert alert-info deduction text-center\">
        <p><strong> ";
            // line 227
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user_auth.Name_setting.help_block"), "html", null, true);
            echo "
        </strong></p>
      </div>
    </fieldset> 
  ";
        }
        // line 232
        echo "  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled"), "html", null, true);
        echo "\">
</form>

";
        
        $__internal_41939c035586ba0c89e2f196e9675410cdf67f507805dbb57efaa5a9c742885e->leave($__internal_41939c035586ba0c89e2f196e9675410cdf67f507805dbb57efaa5a9c742885e_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 240,  581 => 239,  575 => 236,  569 => 232,  561 => 227,  549 => 222,  543 => 219,  537 => 216,  534 => 215,  532 => 214,  520 => 207,  514 => 204,  505 => 198,  501 => 197,  495 => 194,  489 => 191,  476 => 183,  470 => 182,  464 => 181,  459 => 179,  455 => 178,  450 => 176,  444 => 173,  435 => 167,  429 => 164,  420 => 158,  416 => 157,  410 => 154,  401 => 148,  397 => 147,  391 => 144,  382 => 138,  378 => 137,  372 => 134,  365 => 130,  354 => 122,  350 => 121,  346 => 120,  342 => 119,  338 => 118,  330 => 116,  323 => 112,  319 => 111,  315 => 110,  311 => 109,  307 => 108,  299 => 106,  292 => 102,  288 => 101,  284 => 100,  280 => 99,  272 => 97,  259 => 91,  249 => 88,  239 => 85,  229 => 82,  221 => 77,  206 => 67,  200 => 66,  194 => 65,  188 => 64,  183 => 62,  178 => 60,  172 => 57,  163 => 51,  157 => 48,  150 => 44,  143 => 40,  137 => 39,  131 => 38,  127 => 37,  121 => 34,  113 => 31,  105 => 26,  101 => 25,  92 => 23,  84 => 22,  76 => 21,  68 => 20,  61 => 16,  55 => 13,  47 => 8,  41 => 7,  34 => 1,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% set menu = 'admin_user_auth' %}

{% set script_controller = 'setting/auth' %}
{% set script_arguments = { emailVerified: app.user.emailVerified} %}
{% block main %}
{{ web_macro.flash_messages() }}

<form  id=\"auth-form\" class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <legend>{{'admin.user_auth.sign_up_settings'|trans}}</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'admin.user_auth.User_sign_up_type'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default {% if auth.register_mode ==\"email\" %}btn-primary{% endif %} model\" data-modle=\"email\">{{'admin.user_auth.email'|trans}}</button>
          <button type=\"button\" class=\"btn btn-default {% if auth.register_mode ==\"mobile\" %}btn-primary{% endif %} model\" data-modle=\"mobile\">{{'admin.user_auth.phone'|trans}}</button>
          <button type=\"button\" class=\"btn btn-default {% if auth.register_mode ==\"email_or_mobile\" %}btn-primary{% endif %} model\" data-modle=\"email_or_mobile\">{{'admin.user_auth.email_or_mobile'|trans}}</button>
          <button type=\"button\" class=\"btn btn-default {% if auth.register_mode ==\"closed\" %}btn-primary{% endif %} model\" data-modle=\"closed\">{{'admin.user_auth.closed'|trans}}</button>
        </div>
        <input type=\"hidden\" value=\"{{ auth.register_mode|default('none') }}\" name=\"register_mode\" />
        <div class=\"help-block\" >{{'admin.user_auth.User_sign_up_type.help_block'|trans}}</div>
      </div>
    </div>

    
    <div class=\"email-content {% if auth.register_mode == 'mobile' or auth.register_mode == 'closed' %}hidden{% endif %}\">
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label >{{'admin.user_auth.Email_verification_sign'|trans}}</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          {{ radios('email_enabled', {'opened':'admin.user_auth.Email_verification_sign.open'|trans, 'closed':'admin.user_auth.Email_verification_sign.closed'|trans}, auth.email_enabled) }}
         <button type=\"button\" class=\"btn btn-primary btn-sm js-email-send-check hidden\"  data-url=\"{{ path('admin_report_status_email_send') }}\">{{ 'admin.user_auth.Verify_email_address_btn'|trans }}</button>
         <div class=\"alert alert-info js-email-status hidden\"  data-url=\"{{path('admin_setting_mailer')}}\"role=\"alert\" style=\"padding: 5px;margin-bottom: 0\">{{ 'admin.user_auth.Verifying'|trans }}</div>
         <div class=\"help-block\">{{ 'admin.user_auth.Verify_email_address_btn.help_block'|trans }}</div>
        </div>
      </div>

      <input type=\"hidden\" name=\"setting_time\"  value=\"{{setting('auth.setting_time') }}\" >

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_title\" >{{'admin.user_auth.active_email_title'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"{{auth.email_activation_title}}\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">{{'admin.user_auth.active_email_content'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">{{auth.email_activation_body}}</textarea>
          <div class=\"help-block\">
            <div>{{'admin.user_auth.active_email_content.Variables'|trans}}</div>
            <ul>
              <li>{% verbatim %}{{nickname}}{% endverbatim %} {{'admin.user_auth.active_email_content.Nickname_of_recipient'|trans}}</li>
              <li>{% verbatim %}{{sitename}}{% endverbatim %} {{'admin.user_auth.active_email_content.as_site_name'|trans}}</li>
              <li>{% verbatim %}{{siteurl}}{% endverbatim %} {{'admin.user_auth.active_email_content.as_site_url'|trans}}</li>
              <li>{% verbatim %}{{verifyurl}}{% endverbatim %} {{'admin.user_auth.active_email_content.as_verify_url'|trans}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'admin.user_auth.Protection'|trans}}</label>
      </div>

      <div class=\"controls col-md-8 radios\">
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"none\" value=\"none\" {% if auth.register_protective|default(none) == \"none\" %}checked=\"checked\"{% endif %}> {{'admin.user_auth.Protection.none'|trans}}
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"low\" value=\"low\" {% if  auth.register_protective|default(null) == \"low\" %}checked=\"checked\"{% endif %}> {{'admin.user_auth.Protection.low'|trans}}
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"middle\" value=\"middle\" {% if  auth.register_protective|default(null) == \"middle\" %}checked=\"checked\"{% endif %}> {{'admin.user_auth.Protection.middle'|trans}}
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"high\" value=\"high\"{% if auth.register_protective|default(null) == \"high\" %}checked=\"checked\"{% endif %}> {{'admin.user_auth.Protection.high'|trans}}
        </label>
      </div>

      <button type=\"button\" class=\"hiddenJsAction\" style=\"display: none\"></button>

      <div class=\"controls col-md-8 mtl col-md-offset-3 dync_visible not_closed_mode low_protective\" {% if  auth.register_protective|default(null) == \"low\" %}{% else %}style=\"display:none;\"{% endif %}>
        <div class=\"well\">
          {{'admin.user_auth.Protection.Explaination'|trans}}
          <p class=\"mll mtm dync_visible low_protective_email low_protective_email_or_mobile\">{{'admin.user_auth.Protection.low.Verification_code.email'|trans}}</p>
          <p class=\"mll mtm dync_visible low_protective_mobile low_protective_email_or_mobile\">{{'admin.user_auth.Protection.low.Verification_code.mobile.tip1'|trans}}</p>
          <p class=\"mll mtm dync_visible low_protective_mobile low_protective_email_or_mobile\">{{'admin.user_auth.Protection.low.Verification_code.mobile.tip2'|trans}}</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl col-md-offset-3 dync_visible not_closed_mode middle_protective\" {% if  auth.register_protective|default(null) == \"middle\" %}{% else %}style=\"display:none;\"{% endif %}>
        <div class=\"well\">
          {{'admin.user_auth.Protection.Explaination'|trans}}
          <p class=\"mll mtm dync_visible middle_protective_email middle_protective_email_or_mobile\">{{'admin.user_auth.Protection.low.Verification_code.email'|trans}}</p>
          <p class=\"mll mtm dync_visible middle_protective_mobile middle_protective_email_or_mobile\">{{'admin.user_auth.Protection.low.Verification_code.mobile.tip1'|trans}}</p>
          <p class=\"mll mtm dync_visible middle_protective_mobile middle_protective_email_or_mobile\">{{'admin.user_auth.Protection.low.Verification_code.mobile.tip2'|trans}}</p>
          <p class=\"mll mtm\">{{'admin.user_auth.Protection.middle.30_times'|trans}}</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl col-md-offset-3 dync_visible not_closed_mode high_protective\" {% if  auth.register_protective|default(null) == \"high\" %}{% else %}style=\"display:none;\"{% endif %}>
        <div class=\"well\">
          {{'admin.user_auth.Protection.Explaination'|trans}}
          <p class=\"mll mtm dync_visible high_protective_email high_protective_email_or_mobile\">{{'admin.user_auth.Protection.low.Verification_code.email'|trans}}</p>
          <p class=\"mll mtm dync_visible high_protective_mobile high_protective_email_or_mobile\">{{'admin.user_auth.Protection.high.Verification_code.mobile'|trans}}</p>
          <p class=\"mll mtm\">{{'admin.user_auth.Protection.high.10_times'|trans}}</p>
          <p class=\"mll mtm\">{{'admin.user_auth.Protection.high.sign_up_count'|trans}}</p>
        </div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>{{'admin.user_auth.Setup_welcome_message'|trans}}</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>{{'admin.user_auth.Setup_welcome_message.send'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        {{ checkboxs('welcome_methods', {'message':'admin.user_auth.Setup_welcome_message.In_site_message'|trans, 'email':'admin.user_auth.Setup_welcome_message.email'|trans}, auth.welcome_methods) }}
        <div class=\"help-block\">{{'admin.user_auth.Setup_welcome_message.help_block'|trans}}。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">{{'admin.user_auth.Setup_welcome_message.send'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('welcome_enabled', {'opened':'admin.user_auth.Setup_welcome_message.send.closed'|trans, 'closed':'admin.user_auth.Setup_welcome_message.send.open'|trans}, auth.welcome_enabled) }}
        <div class=\"help-block\">{{'admin.user_auth.Setup_welcome_message.send.help_block'|trans}}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">{{'admin.user_auth.Setup_welcome_message.sender'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"{{auth.welcome_sender}}\">
        <div class=\"help-block\">{{'admin.user_auth.Setup_welcome_message.sender.help_block'|trans}}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">{{'admin.user_auth.Setup_welcome_message.title'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"{{auth.welcome_title}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">{{'admin.user_auth.Setup_welcome_message.content'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">{{auth.welcome_body}}</textarea>
        <div class=\"help-block\">
          <div>{{'admin.user_auth.Setup_welcome_message.warning.help_block'|trans}}</div>
          <div>{{'admin.user_auth.active_email_content.Variables'|trans}}</div>
          <ul>
            <li>{% verbatim %}{{nickname}}{% endverbatim %} {{'admin.user_auth.Setup_welcome_message.as_recipient.help_block'|trans}}</li>
            <li>{% verbatim %}{{sitename}}{% endverbatim %} {{'admin.user_auth.active_email_content.as_site_name'|trans}}</li>
            <li>{% verbatim %}{{siteurl}}{% endverbatim %} {{'admin.user_auth.active_email_content.as_site_url'|trans}}</li>
          </ul>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>{{'admin.user_auth.Term_service_settings'|trans}}</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">{{'admin.user_auth.Term_service_settings.Enable'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('user_terms', {'opened':'admin.user_auth.Term_service_settings.open'|trans, 'closed':'admin.user_auth.Term_service_settings.closed'|trans}, auth.user_terms) }}
        <div class=\"help-block\">{{'admin.user_auth.Term_service_settings.Enable.help_block'|trans}}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">{{'admin.user_auth.Term_service_settings.details'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\" data-image-upload-url=\"{{ path('editor_upload', {token:upload_token('default')}) }}\">{{ auth.user_terms_body }}</textarea>
      </div>
    </div>

  </fieldset>


  {% if setting('magic.username_setting')|default(false) %}
    <fieldset>
      <legend>{{'admin.user_auth.Name_setting'|trans}}</legend>
      <div class=\"row form-group\">
          <div class=\"col-md-2 col-md-offset-2 control-label\">
              <label for=\"user_name\">{{'admin.user_auth.Name_setting.user_name'|trans}}</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"user_name\" name=\"user_name\" class=\"form-control\" {% if defaultSetting.user_name %}value=\"{{defaultSetting.user_name|default('site.default.student'|trans)}}\" {% endif %}>
          </div>
      </div>

      <div class=\"alert alert-info deduction text-center\">
        <p><strong> {{'admin.user_auth.Name_setting.help_block'|trans}}
        </strong></p>
      </div>
    </fieldset> 
  {% endif %}
  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"{{setting('cloud_sms.sms_enabled')}}\">
</form>

{% endblock %}", "admin/system/auth.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\auth.html.twig");
    }
}
