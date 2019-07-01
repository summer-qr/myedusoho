<?php

/* register/index.html.twig */
class __TwigTemplate_33466247a6967163b21b94ae0ff2e64534ccab4a8c03969359e1a39930b20af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "register/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6985e68a957806df31d3313556d5b5de142dfcc1f15f05b3d0285ba8d182572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6985e68a957806df31d3313556d5b5de142dfcc1f15f05b3d0285ba8d182572->enter($__internal_d6985e68a957806df31d3313556d5b5de142dfcc1f15f05b3d0285ba8d182572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        // line 3
        $context["bodyClass"] = "register";
        // line 4
        $context["parameter"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()));
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/bootstrap-datetimepicker.js", 1 => "libs/jquery-validation.js", 2 => "app/js/auth/register/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6985e68a957806df31d3313556d5b5de142dfcc1f15f05b3d0285ba8d182572->leave($__internal_d6985e68a957806df31d3313556d5b5de142dfcc1f15f05b3d0285ba8d182572_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_265dc01a2807cb48769513a9380d66905770030b54acd8afd94ef120d9d0305a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265dc01a2807cb48769513a9380d66905770030b54acd8afd94ef120d9d0305a->enter($__internal_265dc01a2807cb48769513a9380d66905770030b54acd8afd94ef120d9d0305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_265dc01a2807cb48769513a9380d66905770030b54acd8afd94ef120d9d0305a->leave($__internal_265dc01a2807cb48769513a9380d66905770030b54acd8afd94ef120d9d0305a_prof);

    }

    // line 7
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_c69e2fbefc3ab3e18e0367abeaf9b924659466a1a994a62ff7b6b0ff43a870f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69e2fbefc3ab3e18e0367abeaf9b924659466a1a994a62ff7b6b0ff43a870f2->enter($__internal_c69e2fbefc3ab3e18e0367abeaf9b924659466a1a994a62ff7b6b0ff43a870f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        // line 8
        echo "  ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.enabled") == 1)) {
            // line 9
            echo "    ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.script");
            echo "
  ";
        }
        
        $__internal_c69e2fbefc3ab3e18e0367abeaf9b924659466a1a994a62ff7b6b0ff43a870f2->leave($__internal_c69e2fbefc3ab3e18e0367abeaf9b924659466a1a994a62ff7b6b0ff43a870f2_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_3bd648a29066504753c6e2e71409e8338557ea613537aaa590d128addc93c8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd648a29066504753c6e2e71409e8338557ea613537aaa590d128addc93c8df->enter($__internal_3bd648a29066504753c6e2e71409e8338557ea613537aaa590d128addc93c8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "\t<div class=\"es-section login-section\">
\t\t<div class=\"logon-tab clearfix\">
\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.login_account"), "html", null, true);
        echo "</a>
\t\t\t<a class=\"active\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.register_account"), "html", null, true);
        echo "</a>
\t\t</div>
\t\t<div class=\"login-main\">
\t\t\t";
        // line 20
        if ((isset($context["isRegisterEnabled"]) ? $context["isRegisterEnabled"] : $this->getContext($context, "isRegisterEnabled"))) {
            // line 21
            echo "\t\t\t\t<form id=\"register-form\" method=\"post\" action=\"\">
\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "

\t\t\t\t\t";
            // line 24
            if ((isset($context["inviteUser"]) ? $context["inviteUser"] : $this->getContext($context, "inviteUser"))) {
                // line 25
                echo "\t\t\t\t\t\t<div class=\"alert alert-info alert-sm\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.register_through_inviter", array("%inviteUser%" => $this->getAttribute((isset($context["inviteUser"]) ? $context["inviteUser"] : $this->getContext($context, "inviteUser")), "nickname", array())));
                echo "</div>
\t\t\t\t\t";
            }
            // line 27
            echo "
\t\t\t\t\t";
            // line 28
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "email")) {
                // line 29
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_email\">";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.password_reset.email"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"email\" id=\"register_email\" name=\"email\"  class=\"form-control input-lg\" data-url=\"";
                // line 32
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.account_with_email_placeholder"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile")) {
                // line 37
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_mobile\">";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.password_reset.mobile"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"number\" id=\"register_mobile\" name=\"verifiedMobile\"  class=\"form-control input-lg\" data-url=\"";
                // line 40
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.account_with_mobile_placeholder"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_emailOrmobile\">";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.account_with_mobile_or_email_label"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\"  class=\"form-control input-lg\" data-url=\"";
                // line 48
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_or_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.account_with_mobile_or_email_placeholder"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 53
            echo "
\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_nickname\">";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.username_label"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_nickname_check");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.username_label_placeholder"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_password\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.password_label"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg\" placeholder=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.password_label_placeholder"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
          ";
            // line 69
            if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.captcha_enabled"), 0) == 1)) {
                // line 70
                echo "            <div class=\"form-group cd-mb32 js-drag-jigsaw ";
                if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile")) {
                    echo "hidden";
                }
                echo "\">
              ";
                // line 71
                $this->loadTemplate("common/drag.html.twig", "register/index.html.twig", 71)->display(array_merge($context, array("auth" => true)));
                // line 72
                echo "            </div>
          ";
            }
            // line 74
            echo "\t\t\t\t\t";
            if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "email_or_mobile") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile"))) {
                // line 75
                echo "\t\t\t\t\t\t<div class=\"form-group mbl ";
                if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") != "mobile")) {
                    echo "hidden";
                }
                echo " email_mobile_msg\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"sms_code\">";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.sms_code"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"controls cd-row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" maxlength=\"6\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.input_sms_code"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_check", array("type" => "sms_registration"));
                echo "\">
\t\t\t\t\t\t\t\t\t<p class=\"help-block\"> </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-default sms-send-btn js-sms-send-btn disabled\" data-sms-url=\"";
                // line 83
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_send_registration");
                echo "\">
\t\t\t\t\t\t\t\t\t\t<span id=\"js-time-left\"></span>
\t\t\t\t\t\t\t\t\t\t<span id=\"js-fetch-btn-text\">";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.get_sms_code_btn"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 91
            echo "
\t\t\t\t\t";
            // line 92
            if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("invite.invite_code_setting"), 0) == 1) &&  !(isset($context["inviteUser"]) ? $context["inviteUser"] : $this->getContext($context, "inviteUser")))) {
                // line 93
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"invitedCode\">";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.invite_code_label"), "html", null, true);
                echo "<span class=\"color-success\">（";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.field.optional"), "html", null, true);
                echo "）</span></label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invitedCode\" class=\"form-control input-lg invitecode\" data-url=\"";
                // line 96
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("invitecode_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.invite_code_placeholder"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 100
            echo "        
\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"register-btn\" data-submiting-text=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit.submiting"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.user_terms") == "opened")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.agree_terms"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.register"), "html", null, true);
            }
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

          ";
            // line 107
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.user_terms") == "opened")) {
                // line 108
                echo "            <div class=\"form-group mbl\">
              <div class=\"controls\">
                <span>";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.read_detail"), "html", null, true);
                echo "</span>
                <a href=\"";
                // line 111
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_terms");
                echo "\" target=\"_blank\">《";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.user_service_protocol"), "html", null, true);
                echo "》</a>
              </div>
            </div>
          ";
            }
            // line 115
            echo "
\t\t\t\t\t<input type=\"hidden\" name=\"captcha_enabled\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.captcha_enabled"), "html", null, true);
            echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"registerVisitId\" value=\"\">
\t\t\t\t</form>

\t\t\t\t";
            // line 121
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled")) {
                // line 122
                echo "\t\t\t\t\t<div class=\"social-login\">

            <span>
              ";
                // line 125
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))));
                echo "
            </span>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 130
            echo "\t\t\t";
        } else {
            // line 131
            echo "\t\t\t\t<div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.system_close_tips"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 133
        echo "\t\t</div>
\t</div>
";
        
        $__internal_3bd648a29066504753c6e2e71409e8338557ea613537aaa590d128addc93c8df->leave($__internal_3bd648a29066504753c6e2e71409e8338557ea613537aaa590d128addc93c8df_prof);

    }

    // line 137
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_6a7c009e2282d2076e27519a672722b81f5fc544eb48d4dcfd816e3419fc7814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7c009e2282d2076e27519a672722b81f5fc544eb48d4dcfd816e3419fc7814->enter($__internal_6a7c009e2282d2076e27519a672722b81f5fc544eb48d4dcfd816e3419fc7814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        // line 138
        echo "\t";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "register/index.html.twig", 138)->display(array_merge($context, array("mobile_tool_bar" => "register")));
        
        $__internal_6a7c009e2282d2076e27519a672722b81f5fc544eb48d4dcfd816e3419fc7814->leave($__internal_6a7c009e2282d2076e27519a672722b81f5fc544eb48d4dcfd816e3419fc7814_prof);

    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 138,  371 => 137,  362 => 133,  356 => 131,  353 => 130,  345 => 125,  340 => 122,  338 => 121,  331 => 117,  327 => 116,  324 => 115,  315 => 111,  311 => 110,  307 => 108,  305 => 107,  292 => 103,  287 => 100,  278 => 96,  271 => 94,  268 => 93,  266 => 92,  263 => 91,  254 => 85,  249 => 83,  240 => 79,  234 => 76,  227 => 75,  224 => 74,  220 => 72,  218 => 71,  211 => 70,  209 => 69,  202 => 65,  197 => 63,  186 => 57,  181 => 55,  177 => 53,  167 => 48,  162 => 46,  159 => 45,  149 => 40,  144 => 38,  141 => 37,  131 => 32,  126 => 30,  123 => 29,  121 => 28,  118 => 27,  112 => 25,  110 => 24,  105 => 22,  102 => 21,  100 => 20,  94 => 17,  88 => 16,  84 => 14,  78 => 13,  67 => 9,  64 => 8,  58 => 7,  44 => 2,  37 => 1,  35 => 5,  33 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block title %}{{'user.register'|trans}} - {{ parent() }}{% endblock %}
{% set bodyClass = 'register' %}
{% set parameter = get_parameters_from_url(app.request.uri) %}
{% do script(['libs/bootstrap-datetimepicker.js','libs/jquery-validation.js','app/js/auth/register/index.js'])%}

{% block head_scripts %}
  {% if (setting('siteTrace.enabled') == 1) %}
    {{ setting('siteTrace.script')|raw }}
  {% endif %}
{% endblock %}

{% block content %}
\t<div class=\"es-section login-section\">
\t\t<div class=\"logon-tab clearfix\">
\t\t\t<a href=\"{{ path('login', {goto:_target_path}) }}\">{{'user.register.login_account'|trans}}</a>
\t\t\t<a class=\"active\">{{'user.register.register_account'|trans}}</a>
\t\t</div>
\t\t<div class=\"login-main\">
\t\t\t{% if isRegisterEnabled %}
\t\t\t\t<form id=\"register-form\" method=\"post\" action=\"\">
\t\t\t\t\t{{ web_macro.flash_messages() }}

\t\t\t\t\t{% if inviteUser %}
\t\t\t\t\t\t<div class=\"alert alert-info alert-sm\">{{'user.register.register_through_inviter'|trans({'%inviteUser%': inviteUser.nickname})|raw}}</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if setting('auth.register_mode') == 'email' %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_email\">{{'user.settings.security.password_reset.email'|trans}}</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"email\" id=\"register_email\" name=\"email\"  class=\"form-control input-lg\" data-url=\"{{path('register_email_check')}}\" placeholder=\"{{'user.register.account_with_email_placeholder'|trans}}\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif setting('auth.register_mode') == 'mobile' %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_mobile\">{{'user.settings.security.password_reset.mobile'|trans}}</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"number\" id=\"register_mobile\" name=\"verifiedMobile\"  class=\"form-control input-lg\" data-url=\"{{path('register_mobile_check')}}\" placeholder=\"{{'user.register.account_with_mobile_placeholder'|trans}}\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_emailOrmobile\">{{'user.register.account_with_mobile_or_email_label'|trans}}</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\"  class=\"form-control input-lg\" data-url=\"{{path('register_email_or_mobile_check')}}\" placeholder=\"{{'user.register.account_with_mobile_or_email_placeholder'|trans}}\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_nickname\">{{'user.register.username_label'|trans}}</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"{{path('register_nickname_check')}}\" placeholder=\"{{'user.register.username_label_placeholder'|trans}}\">
\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_password\">{{'user.register.password_label'|trans}}</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg\" placeholder=\"{{'user.register.password_label_placeholder'|trans}}\">
\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
          {% if (setting('auth.captcha_enabled')|default(0)) == 1 %}
            <div class=\"form-group cd-mb32 js-drag-jigsaw {% if setting('auth.register_mode') == 'mobile' %}hidden{% endif%}\">
              {% include 'common/drag.html.twig' with { auth: true } %}
            </div>
          {% endif %}
\t\t\t\t\t{% if setting('auth.register_mode') == 'email_or_mobile' or setting('auth.register_mode') == 'mobile' %}
\t\t\t\t\t\t<div class=\"form-group mbl {% if setting('auth.register_mode') != 'mobile' %}hidden{% endif %} email_mobile_msg\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"sms_code\">{{'user.settings.security.sms_code'|trans}}</label>
\t\t\t\t\t\t\t<div class=\"controls cd-row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" maxlength=\"6\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"{{'user.settings.security.input_sms_code'|trans}}\" data-url=\"{{path('edu_cloud_sms_check',{type:'sms_registration'})}}\">
\t\t\t\t\t\t\t\t\t<p class=\"help-block\"> </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-default sms-send-btn js-sms-send-btn disabled\" data-sms-url=\"{{ path('edu_cloud_sms_send_registration') }}\">
\t\t\t\t\t\t\t\t\t\t<span id=\"js-time-left\"></span>
\t\t\t\t\t\t\t\t\t\t<span id=\"js-fetch-btn-text\">{{'user.settings.security.get_sms_code_btn'|trans}}</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if (setting('invite.invite_code_setting')|default(0) == 1) and not inviteUser %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"invitedCode\">{{'user.register.invite_code_label'|trans}}<span class=\"color-success\">（{{'form.field.optional'|trans}}）</span></label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invitedCode\" class=\"form-control input-lg invitecode\" data-url=\"{{path('invitecode_check')}}\" placeholder=\"{{'user.register.invite_code_placeholder'|trans}}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
        
\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"register-btn\" data-submiting-text=\"{{'form.btn.submit.submiting'|trans}}\" class=\"btn btn-primary btn-lg btn-block\">{% if setting('auth.user_terms') == 'opened' %}{{ 'user.register.agree_terms'|trans }}{% else %}{{'form.btn.register'|trans}}{% endif %}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

          {% if setting('auth.user_terms') == 'opened' %}
            <div class=\"form-group mbl\">
              <div class=\"controls\">
                <span>{{ 'user.register.read_detail'|trans }}</span>
                <a href=\"{{ path('user_terms') }}\" target=\"_blank\">《{{'user.register.user_service_protocol'|trans}}》</a>
              </div>
            </div>
          {% endif %}

\t\t\t\t\t<input type=\"hidden\" name=\"captcha_enabled\" value=\"{{ setting('auth.captcha_enabled') }}\" />
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"registerVisitId\" value=\"\">
\t\t\t\t</form>

\t\t\t\t{% if setting('login_bind.enabled') %}
\t\t\t\t\t<div class=\"social-login\">

            <span>
              {{ render(controller('AppBundle:Login:oauth2LoginsBlock', {targetPath:_target_path})) }}
            </span>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% else %}
\t\t\t\t<div class=\"empty\">{{'user.register.system_close_tips'|trans}}</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
{% endblock %}

{% block bottom %}
\t{% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'register' } %}
{% endblock %}
", "register/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\register\\index.html.twig");
    }
}
