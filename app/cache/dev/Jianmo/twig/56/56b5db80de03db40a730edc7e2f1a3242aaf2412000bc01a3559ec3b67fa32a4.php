<?php

/* admin/edu-cloud/key.html.twig */
class __TwigTemplate_9bbb097630a8819eb01b9c5a840faae245985e9088d7d69034e4d121d6294fe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/edu-cloud/layout.html.twig", "admin/edu-cloud/key.html.twig", 1);
        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/edu-cloud/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d8c15f9ddd4c53b93d74fd71ceb55417536ceb9c850c567437db89233d1c57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8c15f9ddd4c53b93d74fd71ceb55417536ceb9c850c567437db89233d1c57c->enter($__internal_8d8c15f9ddd4c53b93d74fd71ceb55417536ceb9c850c567437db89233d1c57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edu-cloud/key.html.twig"));

        // line 3
        $context["submenu"] = "key";
        // line 5
        $context["script_controller"] = "setting/cloud-key";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d8c15f9ddd4c53b93d74fd71ceb55417536ceb9c850c567437db89233d1c57c->leave($__internal_8d8c15f9ddd4c53b93d74fd71ceb55417536ceb9c850c567437db89233d1c57c_prof);

    }

    // line 7
    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_cd1d4a49249f0e03fd3215d5f4cafb97c69af215386af25b6b058e33d1783e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1d4a49249f0e03fd3215d5f4cafb97c69af215386af25b6b058e33d1783e81->enter($__internal_cd1d4a49249f0e03fd3215d5f4cafb97c69af215386af25b6b058e33d1783e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 8
        echo "  ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial()) {
            // line 9
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <p style = \"text-align:center;font-size:16px\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.cloud_setting.trial_hint"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.mobile"), "html", null, true);
            echo "：4008041114 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or"), "html", null, true);
            echo "
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:;\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
    <hr>
  ";
        } else {
            // line 28
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "
    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.cloud_setting.package_info"), "html", null, true);
            echo "</h1>
    </div>
    ";
            // line 32
            if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array()), null)) : (null))) {
                // line 33
                echo "    <form class=\"form-horizontal\" id=\"cloud-edition-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.cloud_setting.package_name"), "html", null, true);
                echo "：</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
                // line 37
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "levelName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "levelName", array()), null)) : (null)), "html", null, true);
                echo "
          </p>
        </div>
      </div>
      ";
                // line 41
                if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "startDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "startDate", array()), null)) : (null)) && (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "endDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "endDate", array()), null)) : (null)))) {
                    // line 42
                    echo "      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.cloud_setting.service_deadline"), "html", null, true);
                    echo "：</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "startDate", array()), "Y.m.d"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "endDate", array()), "Y.m.d"), "html", null, true);
                    echo "
          </p>
        </div>
      </div>
      ";
                }
                // line 51
                echo "      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
                echo "\">
    </form>
    ";
            } elseif (((($this->getAttribute(            // line 53
(isset($context["info"]) ? $context["info"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array()), null)) : (null)) == "error")) {
                // line 54
                echo "      <div class=\"alert alert-danger\">
      ";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.connect_failed_tips", array("%EduSoho%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->removeCopyright("EduSoho"))), "html", null, true);
                echo "
      </div>
    ";
            } else {
                // line 58
                echo "      ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.cloud_setting.buy_package_hint", array("%servicePriceUrl%" => "http://www.edusoho.com/services/price?type=price"));
                echo "
    ";
            }
            // line 60
            echo "
    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.cloud_setting.access_key"), "html", null, true);
            echo "</h1>
    </div>
    <form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">AccessKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.cloud_access_key"), "html", null, true);
            echo "</p>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">SecretKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.cloud_secret_key"), "html", null, true);
            echo "
          </p>
        </div>
      </div>
      ";
            // line 80
            if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.debug"), 0) || ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array()))) : ("")) == "none"))) {
                // line 81
                echo "      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <a href=\"";
                // line 83
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_update");
                echo "\" class=\"btn btn-sm btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.cloud_setting.key_update_btn"), "html", null, true);
                echo "</a>
          </div>
      </div>
      ";
            }
            // line 87
            echo "
      <div class=\"form-group\" id=\"loading-text\">
        <div class=\"col-md-6 col-md-offset-3\">
          <p class=\"text-warning\"><strong>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.cloud_setting.authorization_info_hint"), "html", null, true);
            echo "</strong></p>
        </div>
      </div>

      <div id=\"key-license-info\" data-url=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_info");
            echo "\">
        
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        }
        
        $__internal_cd1d4a49249f0e03fd3215d5f4cafb97c69af215386af25b6b058e33d1783e81->leave($__internal_cd1d4a49249f0e03fd3215d5f4cafb97c69af215386af25b6b058e33d1783e81_prof);

    }

    public function getTemplateName()
    {
        return "admin/edu-cloud/key.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 98,  206 => 94,  199 => 90,  194 => 87,  185 => 83,  181 => 81,  179 => 80,  172 => 76,  161 => 68,  152 => 62,  148 => 60,  142 => 58,  136 => 55,  133 => 54,  131 => 53,  125 => 51,  115 => 46,  109 => 43,  106 => 42,  104 => 41,  97 => 37,  92 => 35,  88 => 33,  86 => 32,  81 => 30,  75 => 28,  58 => 17,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/edu-cloud/layout.html.twig' %}

{% set submenu = 'key' %}

{% set script_controller = 'setting/cloud-key' %}

{% block maincontent %}
  {% if is_trial() %}
    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <p style = \"text-align:center;font-size:16px\">{{'admin.cloud_setting.trial_hint'|trans}}{{'customer_service.mobile'|trans}}：4008041114 {{'or'|trans}}
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:;\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
    <hr>
  {% else %}
    {{ web_macro.flash_messages() }}
    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">{{'admin.cloud_setting.package_info'|trans}}</h1>
    </div>
    {% if info.level|default(null) %}
    <form class=\"form-horizontal\" id=\"cloud-edition-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">{{'admin.cloud_setting.package_name'|trans}}：</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">{{ info.levelName|default(null) }}
          </p>
        </div>
      </div>
      {% if info.startDate|default(null) and info.endDate|default(null) %}
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">{{'admin.cloud_setting.service_deadline'|trans}}：</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            {{ info.startDate|date('Y.m.d') }} - {{ info.endDate|date('Y.m.d') }}
          </p>
        </div>
      </div>
      {% endif %}
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
    </form>
    {% elseif info.error|default(null) == 'error' %}
      <div class=\"alert alert-danger\">
      {{'admin.edu_cloud.connect_failed_tips'|trans({'%EduSoho%': 'EduSoho'|copyright_less })}}
      </div>
    {% else %}
      {{ 'admin.cloud_setting.buy_package_hint'|trans({'%servicePriceUrl%': 'http://www.edusoho.com/services/price?type=price'})|raw }}
    {% endif %}

    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">{{'admin.cloud_setting.access_key'|trans}}</h1>
    </div>
    <form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">AccessKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">{{ setting('storage.cloud_access_key') }}</p>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">SecretKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            {{ setting('storage.cloud_secret_key') }}
          </p>
        </div>
      </div>
      {% if setting(\"developer.debug\")|default(0) or info.level|default() == 'none' %}
      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <a href=\"{{ path('admin_setting_cloud_key_update') }}\" class=\"btn btn-sm btn-default\">{{'admin.cloud_setting.key_update_btn'|trans}}</a>
          </div>
      </div>
      {% endif %}

      <div class=\"form-group\" id=\"loading-text\">
        <div class=\"col-md-6 col-md-offset-3\">
          <p class=\"text-warning\"><strong>{{'admin.cloud_setting.authorization_info_hint'|trans}}</strong></p>
        </div>
      </div>

      <div id=\"key-license-info\" data-url=\"{{ path('admin_setting_cloud_key_info') }}\">
        
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
    </form>
  {% endif %}
{% endblock %}", "admin/edu-cloud/key.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\edu-cloud\\key.html.twig");
    }
}
