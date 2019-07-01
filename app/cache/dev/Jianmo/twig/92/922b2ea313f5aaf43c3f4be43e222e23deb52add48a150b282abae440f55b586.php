<?php

/* admin/system/mailer.html.twig */
class __TwigTemplate_2aae0fd9e5c367a41f9874ed859dccd2cbb229e86a39f174945a082354e289dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/mailer.html.twig", 1);
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
        $__internal_46d781d73a885113ff1f06409c3d5a3623beedd851e9a210212ed1c4c644d29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d781d73a885113ff1f06409c3d5a3623beedd851e9a210212ed1c4c644d29d->enter($__internal_46d781d73a885113ff1f06409c3d5a3623beedd851e9a210212ed1c4c644d29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/mailer.html.twig"));

        // line 2
        $context["script_controller"] = "system/mailer";
        // line 3
        $context["script_arguments"] = array("registerEmailVerified" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.email_enabled", "closed"));
        // line 4
        $context["menu"] = "admin_setting_mailer";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d781d73a885113ff1f06409c3d5a3623beedd851e9a210212ed1c4c644d29d->leave($__internal_46d781d73a885113ff1f06409c3d5a3623beedd851e9a210212ed1c4c644d29d_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_29789d1cbd0c6708722967dd037a3d964c3986a64d739b8d89ac3f61b589b742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29789d1cbd0c6708722967dd037a3d964c3986a64d739b8d89ac3f61b589b742->enter($__internal_29789d1cbd0c6708722967dd037a3d964c3986a64d739b8d89ac3f61b589b742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "  ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial()) {
            // line 7
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        <p style = \"text-align:center;font-size:16px\">";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.is_trial.tips");
            echo "
          <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
          BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'});
        </script>
        </br>
      </div>
    </div>
  ";
        } else {
            // line 25
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"mailer-form\" ";
            // line 26
            echo "novalidate data-user-setting=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_auth");
            echo "\">
      ";
            // line 27
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "cloud_email_crm")) {
                // line 28
                echo "        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label >";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 mts\">
            <span class=\"text-success\">";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm.status.open"), "html", null, true);
                echo "</span>
            <p class=\"help-block\">";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm.status.help_block", array("%url%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_email")));
                echo "</p>
          </div>
        </div>
      ";
            } else {
                // line 38
                echo "        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 mts\">
            <a href=\"";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_email");
                echo "\" class=\"prl\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.use_cloud_email_crm"), "html", null, true);
                echo "</a>
            <a href=\"http://open.edusoho.com/show/cloud/email\" target=\"_blank\">";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.understand_cloud_email_crm_advantage"), "html", null, true);
                echo "</a>
            ";
                // line 45
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.cloud_email_crm.help_block");
                echo "
          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label >";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.send_email"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
                // line 53
                echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.send_email.status.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.send_email.status.closed")), $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "enabled", array()));
                echo "
            <p class=\"help-block\">";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.send_email.help_block"), "html", null, true);
                echo "</p>
          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"host\">SMTP";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.server_address"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"host\" name=\"host\" class=\"form-control\" value=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "host", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">
              ";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.server_address.help_block"), "html", null, true);
                echo "
              ";
                // line 65
                if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright") == "2"))) {
                    // line 66
                    echo "                <a href=\"http://www.qiqiuyu.com/article/785\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.commonly_document"), "html", null, true);
                    echo "</a>
              ";
                }
                // line 68
                echo "            </p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"port\">";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_Port_number"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"port\" name=\"port\" class=\"form-control\" value=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "port", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_Port_number.help_block"), "html", null, true);
                echo "25</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"username\" >";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_user_name"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "username", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_user_name.help_block"), "html", null, true);
                echo "abc@mail.com</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"password\" >";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_password"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" value=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "password", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.SMTP_password.help_block"), "html", null, true);
                echo "</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"from\" >";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.senders_email_address"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"from\" name=\"from\" class=\"form-control\" value=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "from", array()), "html", null, true);
                echo "\">
            <p class=\"help-block\">";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.senders_email_address.help_block"), "html", null, true);
                echo "abc@mail.com</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"name\" >";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.senders_name"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "name", array()), "html", null, true);
                echo "\">
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\"></div>
          <div class=\"controls col-md-8\">
            <button type=\"submit\" class=\"btn btn-primary\">";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
                echo "</button>
            ";
                // line 125
                if ($this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "enabled", array())) {
                    // line 126
                    echo "              <a class=\"btn btn-primary js-self-test\" data-url=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mailer_test");
                    echo "\" href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.verify"), "html", null, true);
                    echo "</a>
              <div class=\"mtl ptm\">
                <div class=\"alert alert-info\" role=\"alert\">
                  ";
                    // line 129
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.mailer.verifcation.tips"), "html", null, true);
                    echo "
                </div>
              </div>
            ";
                }
                // line 133
                echo "          </div>
        </div>
      ";
            }
            // line 136
            echo "      <input type=\"hidden\" name=\"email-setting-status\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
            echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        }
        
        $__internal_29789d1cbd0c6708722967dd037a3d964c3986a64d739b8d89ac3f61b589b742->leave($__internal_29789d1cbd0c6708722967dd037a3d964c3986a64d739b8d89ac3f61b589b742_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 137,  305 => 136,  300 => 133,  293 => 129,  284 => 126,  282 => 125,  278 => 124,  268 => 117,  262 => 114,  253 => 108,  249 => 107,  243 => 104,  234 => 98,  230 => 97,  224 => 94,  215 => 88,  211 => 87,  205 => 84,  196 => 78,  192 => 77,  186 => 74,  178 => 68,  172 => 66,  170 => 65,  166 => 64,  161 => 62,  155 => 59,  147 => 54,  143 => 53,  137 => 50,  129 => 45,  125 => 44,  119 => 43,  113 => 40,  109 => 38,  102 => 34,  98 => 33,  92 => 30,  88 => 28,  86 => 27,  81 => 26,  76 => 25,  63 => 15,  59 => 14,  50 => 7,  47 => 6,  41 => 5,  34 => 1,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
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
{% set script_controller = 'system/mailer' %}
{% set script_arguments = { registerEmailVerified: setting('auth.email_enabled','closed') } %}
{% set menu = 'admin_setting_mailer' %}
{% block main %}
  {% if is_trial() %}
    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
        <p style = \"text-align:center;font-size:16px\">{{ 'admin.setting.mailer.is_trial.tips'|trans|raw }}
          <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
          BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'});
        </script>
        </br>
      </div>
    </div>
  {% else %}
    {{ web_macro.flash_messages() }}
    <form class=\"form-horizontal\" method=\"post\" id=\"mailer-form\" {#hidden=\"hidden\"#}novalidate data-user-setting=\"{{ path('admin_setting_auth') }}\">
      {% if status == 'cloud_email_crm' %}
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label >{{ 'admin.setting.mailer.cloud_email_crm'|trans }}</label>
          </div>
          <div class=\"controls col-md-8 mts\">
            <span class=\"text-success\">{{ 'admin.setting.mailer.cloud_email_crm.status.open'|trans }}</span>
            <p class=\"help-block\">{{ 'admin.setting.mailer.cloud_email_crm.status.help_block'|trans({'%url%': path('admin_edu_cloud_email') })|raw }}</p>
          </div>
        </div>
      {% else %}
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>{{ 'admin.setting.mailer.cloud_email_crm'|trans }}</label>
          </div>
          <div class=\"controls col-md-8 mts\">
            <a href=\"{{ path('admin_edu_cloud_email') }}\" class=\"prl\">{{ 'admin.setting.mailer.use_cloud_email_crm'|trans }}</a>
            <a href=\"http://open.edusoho.com/show/cloud/email\" target=\"_blank\">{{ 'admin.setting.mailer.understand_cloud_email_crm_advantage'|trans }}</a>
            {{ 'admin.setting.mailer.cloud_email_crm.help_block'|trans|raw }}
          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label >{{'admin.setting.mailer.send_email'|trans}}</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            {{ radios('enabled', {1:'admin.setting.mailer.send_email.status.open'|trans, 0:'admin.setting.mailer.send_email.status.closed'|trans}, mailer.enabled) }}
            <p class=\"help-block\">{{ 'admin.setting.mailer.send_email.help_block'|trans }}</p>
          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"host\">SMTP{{'admin.setting.mailer.server_address'|trans}}</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"host\" name=\"host\" class=\"form-control\" value=\"{{mailer.host}}\">
            <p class=\"help-block\">
              {{ 'admin.setting.mailer.server_address.help_block'|trans }}
              {% if not setting('copyright.owned') or setting('copyright.thirdCopyright') == \"2\" %}
                <a href=\"http://www.qiqiuyu.com/article/785\" target=\"_blank\">{{'admin.setting.mailer.commonly_document'|trans}}</a>
              {% endif %}
            </p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"port\">{{'admin.setting.mailer.SMTP_Port_number'|trans}}</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"port\" name=\"port\" class=\"form-control\" value=\"{{mailer.port}}\">
            <p class=\"help-block\">{{'admin.setting.mailer.SMTP_Port_number.help_block'|trans}}25</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"username\" >{{ 'admin.setting.mailer.SMTP_user_name'|trans }}</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"{{mailer.username}}\">
            <p class=\"help-block\">{{'admin.setting.mailer.SMTP_user_name.help_block'|trans}}abc@mail.com</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"password\" >{{'admin.setting.mailer.SMTP_password'|trans}}</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" value=\"{{mailer.password}}\">
            <p class=\"help-block\">{{ 'admin.setting.mailer.SMTP_password.help_block'|trans }}</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"from\" >{{'admin.setting.mailer.senders_email_address'|trans}}</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"from\" name=\"from\" class=\"form-control\" value=\"{{mailer.from}}\">
            <p class=\"help-block\">{{'admin.setting.mailer.senders_email_address.help_block'|trans}}abc@mail.com</p>
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"name\" >{{'admin.setting.mailer.senders_name'|trans}}</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"{{mailer.name}}\">
          </div>
        </div>
        <p></p>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\"></div>
          <div class=\"controls col-md-8\">
            <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>
            {% if mailer.enabled %}
              <a class=\"btn btn-primary js-self-test\" data-url=\"{{ path('admin_setting_mailer_test') }}\" href=\"javascript:;\">{{'form.btn.verify'|trans}}</a>
              <div class=\"mtl ptm\">
                <div class=\"alert alert-info\" role=\"alert\">
                  {{ 'admin.setting.mailer.verifcation.tips'|trans }}
                </div>
              </div>
            {% endif %}
          </div>
        </div>
      {% endif %}
      <input type=\"hidden\" name=\"email-setting-status\" value=\"{{status}}\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
    </form>
  {% endif %}
{% endblock %}", "admin/system/mailer.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\mailer.html.twig");
    }
}
