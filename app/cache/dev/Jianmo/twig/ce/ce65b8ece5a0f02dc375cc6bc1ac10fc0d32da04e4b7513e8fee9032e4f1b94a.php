<?php

/* admin/default/system-status.html.twig */
class __TwigTemplate_36bfb48d2400e6aeb20428a8ac6b7b46314f1176567a8d7815918e9cc9866ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc0d836b707516e8f8489fab3ebfba009072a824e0858bf8e00d2a99e05851cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0d836b707516e8f8489fab3ebfba009072a824e0858bf8e00d2a99e05851cc->enter($__internal_dc0d836b707516e8f8489fab3ebfba009072a824e0858bf8e00d2a99e05851cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/system-status.html.twig"));

        // line 1
        echo "<ul class=\"subfield-list four-subfield clearfix\">
  <li>
    <div class=\"title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.system_version_title"), "html", null, true);
        echo "</div>
    <div class=\"info\">
      ";
        // line 5
        if ((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : $this->getContext($context, "mainAppUpgrade"))) {
            // line 6
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <span class=\"text-lg\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : $this->getContext($context, "mainAppUpgrade")), "package", array()), "fromVersion", array()), "html", null, true);
            echo "</span>
        <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.system_version_status.have_update"), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 10
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">";
            // line 11
            echo twig_escape_filter($this->env, twig_constant("AppBundle\\System::VERSION"), "html", null, true);
            echo "</span>
      ";
        }
        // line 13
        echo "    </div>
  </li>
  <li>
    <div class=\"title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.school_app_title"), "html", null, true);
        echo "</div>
    <div class=\"info\">
      ";
        // line 18
        if (((isset($context["upgradeAppCount"]) ? $context["upgradeAppCount"] : $this->getContext($context, "upgradeAppCount")) == 0)) {
            // line 19
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.school_app_status.updated"), "html", null, true);
            echo "</span>
      ";
        } else {
            // line 22
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\"> ";
            echo twig_escape_filter($this->env, (isset($context["upgradeAppCount"]) ? $context["upgradeAppCount"] : $this->getContext($context, "upgradeAppCount")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.school_app_status.several_are_not_updated"), "html", null, true);
            echo "</a>
      ";
        }
        // line 25
        echo "    </div>
  </li>
  <li>
    <div class=\"title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_title"), "html", null, true);
        echo "</div>
    <div class=\"info\">

      <span class=\"status-card-warp\">
        ";
        // line 32
        if (((isset($context["disabledCloudServiceCount"]) ? $context["disabledCloudServiceCount"] : $this->getContext($context, "disabledCloudServiceCount")) > 0)) {
            // line 33
            echo "          <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
          <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_my_cloud_overview");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["disabledCloudServiceCount"]) ? $context["disabledCloudServiceCount"] : $this->getContext($context, "disabledCloudServiceCount")), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.several_are_not_open"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 36
            echo "          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          <span class=\"text-lg\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
        ";
        }
        // line 39
        echo "        <div class=\"status-card\">
          <ul class=\"open-serve-list\">
            <li>
              <span class=\"key\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_video_title"), "html", null, true);
        echo "</span>
              ";
        // line 43
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud")) {
            // line 44
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 46
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_video_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 48
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_document_title"), "html", null, true);
        echo "</span>
              ";
        // line 51
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud")) {
            // line 52
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 54
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_video_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 56
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_live_title"), "html", null, true);
        echo "</span>
              ";
        // line 59
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.live_course_enabled")) {
            // line 60
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 62
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_edulive_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 64
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_sms_title"), "html", null, true);
        echo "</span>
              ";
        // line 67
        if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled"), "0") == "1")) {
            // line 68
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 70
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_sms");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 72
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_search_title"), "html", null, true);
        echo "</span>
              ";
        // line 75
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_search.search_enabled")) {
            // line 76
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 78
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_search");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 80
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_question_title"), "html", null, true);
        echo "</span>
              ";
        // line 83
        $context["cloud_consult"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_consult", "");
        // line 84
        echo "              ";
        if ((($this->getAttribute((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null), "cloud_consult_setting_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cloud_consult"]) ? $context["cloud_consult"] : null), "cloud_consult_setting_enabled", array()), 0)) : (0))) {
            // line 85
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 87
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_consult_setting");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 89
        echo "            </li>
          </ul>
        </div>
      </span>
    </div>
  </li>
  <li>
    <div class=\"title\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.mobile_app_title"), "html", null, true);
        echo "</div>
    <div class=\"info\">
      ";
        // line 98
        if ((($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile"), "enabled", array()), null)) : (null))) {
            // line 99
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.mobile_app_status.open"), "html", null, true);
            echo "</span>
      ";
        } else {
            // line 102
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile");
            echo "\" class=\"text-lg link-underline text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.mobile_app_status.not_open"), "html", null, true);
            echo "</a>
      ";
        }
        // line 105
        echo "    </div>
  </li>
</ul>";
        
        $__internal_dc0d836b707516e8f8489fab3ebfba009072a824e0858bf8e00d2a99e05851cc->leave($__internal_dc0d836b707516e8f8489fab3ebfba009072a824e0858bf8e00d2a99e05851cc_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/system-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 105,  295 => 103,  292 => 102,  287 => 100,  284 => 99,  282 => 98,  277 => 96,  268 => 89,  260 => 87,  254 => 85,  251 => 84,  249 => 83,  245 => 82,  241 => 80,  233 => 78,  227 => 76,  225 => 75,  221 => 74,  217 => 72,  209 => 70,  203 => 68,  201 => 67,  197 => 66,  193 => 64,  185 => 62,  179 => 60,  177 => 59,  173 => 58,  169 => 56,  161 => 54,  155 => 52,  153 => 51,  149 => 50,  145 => 48,  137 => 46,  131 => 44,  129 => 43,  125 => 42,  120 => 39,  115 => 37,  112 => 36,  104 => 34,  101 => 33,  99 => 32,  92 => 28,  87 => 25,  78 => 23,  75 => 22,  70 => 20,  67 => 19,  65 => 18,  60 => 16,  55 => 13,  50 => 11,  47 => 10,  40 => 8,  36 => 7,  33 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"subfield-list four-subfield clearfix\">
  <li>
    <div class=\"title\">{{ 'admin.homepage.status_bar.system_version_title'|trans }}</div>
    <div class=\"info\">
      {% if mainAppUpgrade %}
        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <span class=\"text-lg\">{{ mainAppUpgrade.package.fromVersion }}</span>
        <a class=\"text-lg link-underline text-danger\" href=\"{{ path(\"admin_app_upgrades\") }}\">{{ 'admin.homepage.status_bar.system_version_status.have_update'|trans }}</a>
      {% else %}
        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">{{ constant('AppBundle\\\\System::VERSION') }}</span>
      {% endif %}
    </div>
  </li>
  <li>
    <div class=\"title\">{{ 'admin.homepage.status_bar.school_app_title'|trans }}</div>
    <div class=\"info\">
      {% if upgradeAppCount == 0 %}
        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">{{ 'admin.homepage.status_bar.school_app_status.updated'|trans }}</span>
      {% else %}
        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a class=\"text-lg link-underline text-danger\" href=\"{{ path(\"admin_app_upgrades\") }}\"> {{ upgradeAppCount }} {{ 'admin.homepage.status_bar.school_app_status.several_are_not_updated'|trans }}</a>
      {% endif %}
    </div>
  </li>
  <li>
    <div class=\"title\">{{ 'admin.homepage.status_bar.cloud_service_title'|trans }}</div>
    <div class=\"info\">

      <span class=\"status-card-warp\">
        {% if disabledCloudServiceCount > 0 %}
          <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
          <a class=\"text-lg link-underline text-danger\" href=\"{{ path('admin_my_cloud_overview') }}\">{{ disabledCloudServiceCount }}{{ 'admin.homepage.status_bar.cloud_service_status.several_are_not_open'|trans }}</a>
        {% else %}
          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          <span class=\"text-lg\">{{ 'admin.homepage.status_bar.cloud_service_status.open'|trans }}</span>
        {% endif %}
        <div class=\"status-card\">
          <ul class=\"open-serve-list\">
            <li>
              <span class=\"key\">{{ 'admin.homepage.status_bar.cloud_video_title'|trans }}</span>
              {% if setting('storage.upload_mode') == \"cloud\" %}
                <span class=\"value value-success\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.open'|trans }}</span>
              {% else %}
                <a href=\"{{ path('admin_cloud_video_overview') }}\" class=\"value value-danger\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.not_open'|trans }}</a>
              {% endif %}
            </li>
            <li>
              <span class=\"key\">{{ 'admin.homepage.status_bar.cloud_document_title'|trans }}</span>
              {% if setting('storage.upload_mode') == \"cloud\" %}
                <span class=\"value value-success\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.open'|trans }}</span>
              {% else %}
                <a href=\"{{ path('admin_cloud_video_overview') }}\" class=\"value value-danger\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.not_open'|trans }}</a>
              {% endif %}
            </li>
            <li>
              <span class=\"key\">{{ 'admin.homepage.status_bar.cloud_live_title'|trans }}</span>
              {% if setting('course.live_course_enabled') %}
                <span class=\"value value-success\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.open'|trans }}</span>
              {% else %}
                <a href=\"{{ path('admin_cloud_edulive_overview') }}\" class=\"value value-danger\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.not_open'|trans }}</a>
              {% endif %}
            </li>
            <li>
              <span class=\"key\">{{ 'admin.homepage.status_bar.cloud_sms_title'|trans }}</span>
              {% if  setting('cloud_sms.sms_enabled')|default('0') == \"1\" %}
                <span class=\"value value-success\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.open'|trans }}</span>
              {% else %}
                <a href=\"{{ path('admin_edu_cloud_sms') }}\" class=\"value value-danger\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.not_open'|trans }}</a>
              {% endif %}
            </li>
            <li>
              <span class=\"key\">{{ 'admin.homepage.status_bar.cloud_search_title'|trans }}</span>
              {% if setting('cloud_search.search_enabled') %}
                <span class=\"value value-success\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.open'|trans }}</span>
              {% else %}
                <a href=\"{{ path('admin_edu_cloud_search') }}\" class=\"value value-danger\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.not_open'|trans }}</a>
              {% endif %}
            </li>
            <li>
              <span class=\"key\">{{ 'admin.homepage.status_bar.cloud_question_title'|trans }}</span>
              {% set cloud_consult = setting('cloud_consult', '') %}
              {% if cloud_consult.cloud_consult_setting_enabled | default(0) %}
                <span class=\"value value-success\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.open'|trans }}</span>
              {% else %}
                <a href=\"{{ path('admin_cloud_consult_setting') }}\" class=\"value value-danger\"><i class=\"dot\"></i>{{ 'admin.homepage.status_bar.cloud_service_status.not_open'|trans }}</a>
              {% endif %}
            </li>
          </ul>
        </div>
      </span>
    </div>
  </li>
  <li>
    <div class=\"title\">{{ 'admin.homepage.status_bar.mobile_app_title'|trans }}</div>
    <div class=\"info\">
      {% if setting(\"mobile\").enabled|default(null) %}
        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">{{ 'admin.homepage.status_bar.mobile_app_status.open'|trans }}</span>
      {% else %}
        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a href=\"{{ path('admin_setting_mobile') }}\" class=\"text-lg link-underline text-danger\"> {{ 'admin.homepage.status_bar.mobile_app_status.not_open'|trans }}</a>
      {% endif %}
    </div>
  </li>
</ul>", "admin/default/system-status.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\default\\system-status.html.twig");
    }
}
