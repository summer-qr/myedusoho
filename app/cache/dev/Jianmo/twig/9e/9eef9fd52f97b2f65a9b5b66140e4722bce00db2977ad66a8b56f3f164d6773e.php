<?php

/* admin/default/operation-analysis-dashbord.html.twig */
class __TwigTemplate_192df325a5405365551594bd604eb0838943576398cc90f41d5e23dd2a4e1ed5 extends Twig_Template
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
        $__internal_aafd485ce48cb7dc8c4c308650ea434108135a5ec08abd6222623695e50c7452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafd485ce48cb7dc8c4c308650ea434108135a5ec08abd6222623695e50c7452->enter($__internal_aafd485ce48cb7dc8c4c308650ea434108135a5ec08abd6222623695e50c7452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/operation-analysis-dashbord.html.twig"));

        // line 1
        echo "<ul class=\"subfield-list
";
        // line 2
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("vip.enabled"))) {
            // line 3
            echo "six-subfield
";
        } else {
            // line 5
            echo "five-subfield
";
        }
        // line 7
        echo "clearfix\">
  <li>
    <div class=\"title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.login_users"), "html", null, true);
        echo "</div>
    <span class=\"number\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_online", array("type" => "logined"));
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ((array_key_exists("loginCount", $context)) ? (_twig_default_filter((isset($context["loginCount"]) ? $context["loginCount"] : $this->getContext($context, "loginCount")), "0")) : ("0")), "html", null, true);
        echo "</a></span>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.login_users.online_total"), "html", null, true);
        echo ": <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_online", array("type" => "online"));
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["onlineCount"]) ? $context["onlineCount"] : $this->getContext($context, "onlineCount")), "html", null, true);
        echo "</a></p>
  </li>
  <li>
    <div class=\"title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.new_registration"), "html", null, true);
        echo "</div>
    <span class=\"number\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["todayRegisterNum"]) ? $context["todayRegisterNum"] : $this->getContext($context, "todayRegisterNum")), "html", null, true);
        echo "</span>
    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["totalRegisterNum"]) ? $context["totalRegisterNum"] : $this->getContext($context, "totalRegisterNum")), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.new_course_members"), "html", null, true);
        echo "</div>
    <span class=\"number\"> ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["todayCourseMemberNum"]) ? $context["todayCourseMemberNum"] : $this->getContext($context, "todayCourseMemberNum")), "html", null, true);
        echo "</span>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total_number"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["totalCourseMemberNum"]) ? $context["totalCourseMemberNum"] : $this->getContext($context, "totalCourseMemberNum")), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.new_classroom_members"), "html", null, true);
        echo "</div>
    <span class=\"number\"> ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["todayClassroomMemberNum"]) ? $context["todayClassroomMemberNum"] : $this->getContext($context, "todayClassroomMemberNum")), "html", null, true);
        echo "</span>
    <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total_number"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["totalClassroomMemberNum"]) ? $context["totalClassroomMemberNum"] : $this->getContext($context, "totalClassroomMemberNum")), "html", null, true);
        echo "</p>
  </li>
  ";
        // line 28
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("vip.enabled"))) {
            // line 29
            echo "    <li>
      <div class=\"title\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.new_vip_members"), "html", null, true);
            echo "</div>
      <span class=\"number\">";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["todayVipNum"]) ? $context["todayVipNum"] : $this->getContext($context, "todayVipNum")), "html", null, true);
            echo "</span>
      <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (isset($context["totalVipNum"]) ? $context["totalVipNum"] : $this->getContext($context, "totalVipNum")), "html", null, true);
            echo "</p>
    </li>
  ";
        }
        // line 35
        echo "  ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Invoice") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("invoice.enabled"))) {
            // line 36
            echo "    <li>
      <div class=\"title\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.invoice_import.to_invoice_num"), "html", null, true);
            echo "</div>
      <span class=\"number\"><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_invoice_manage");
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (isset($context["toInvoiceNum"]) ? $context["toInvoiceNum"] : $this->getContext($context, "toInvoiceNum")), "html", null, true);
            echo "</a></span>
      <p>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.invoice_import.total_invoice_num"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (isset($context["totalInvoiceNum"]) ? $context["totalInvoiceNum"] : $this->getContext($context, "totalInvoiceNum")), "html", null, true);
            echo "</p>
    </li>
  ";
        }
        // line 42
        echo "  <li>
    <div class=\"title\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.thread_un_answer"), "html", null, true);
        echo "</div>
    <span class=\"number\">
      ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["todayThreadUnAnswerNum"]) ? $context["todayThreadUnAnswerNum"] : $this->getContext($context, "todayThreadUnAnswerNum")), "html", null, true);
        echo "
    </span>
    <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["totalThreadNum"]) ? $context["totalThreadNum"] : $this->getContext($context, "totalThreadNum")), "html", null, true);
        echo "</p>
  </li>
</ul>";
        
        $__internal_aafd485ce48cb7dc8c4c308650ea434108135a5ec08abd6222623695e50c7452->leave($__internal_aafd485ce48cb7dc8c4c308650ea434108135a5ec08abd6222623695e50c7452_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 47,  159 => 45,  154 => 43,  151 => 42,  143 => 39,  137 => 38,  133 => 37,  130 => 36,  127 => 35,  119 => 32,  115 => 31,  111 => 30,  108 => 29,  106 => 28,  99 => 26,  95 => 25,  91 => 24,  83 => 21,  79 => 20,  75 => 19,  67 => 16,  63 => 15,  59 => 14,  49 => 11,  43 => 10,  39 => 9,  35 => 7,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"subfield-list
{% if is_plugin_installed('Vip') and setting('vip.enabled') %}
six-subfield
{% else %}
five-subfield
{% endif %}
clearfix\">
  <li>
    <div class=\"title\">{{ 'admin.homepage.todays_data.login_users'|trans }}</div>
    <span class=\"number\"><a href=\"{{ path('admin_online', {type:'logined'}) }}\" target=\"_blank\">{{ loginCount| default('0') }}</a></span>
    <p>{{ 'admin.homepage.todays_data.login_users.online_total'|trans }}: <a href=\"{{ path('admin_online', {type:'online'}) }}\" target=\"_blank\">{{ onlineCount }}</a></p>
  </li>
  <li>
    <div class=\"title\">{{ 'admin.homepage.todays_data.new_registration'|trans }}</div>
    <span class=\"number\">{{ todayRegisterNum }}</span>
    <p>{{ 'admin.homepage.todays_data.total'|trans }}: {{ totalRegisterNum }}</p>
  </li>
  <li>
    <div class=\"title\">{{ 'admin.homepage.todays_data.new_course_members'|trans }}</div>
    <span class=\"number\"> {{ todayCourseMemberNum }}</span>
    <p>{{ 'admin.homepage.todays_data.total_number'|trans }}: {{ totalCourseMemberNum }}</p>
  </li>
  <li>
    <div class=\"title\">{{ 'admin.homepage.todays_data.new_classroom_members'|trans }}</div>
    <span class=\"number\"> {{ todayClassroomMemberNum }}</span>
    <p>{{ 'admin.homepage.todays_data.total_number'|trans }}: {{ totalClassroomMemberNum }}</p>
  </li>
  {% if is_plugin_installed('Vip') and setting('vip.enabled') %}
    <li>
      <div class=\"title\">{{ 'admin.homepage.todays_data.new_vip_members'|trans }}</div>
      <span class=\"number\">{{ todayVipNum }}</span>
      <p>{{ 'admin.homepage.todays_data.total'|trans }}: {{ totalVipNum }}</p>
    </li>
  {% endif %}
  {% if is_plugin_installed('Invoice') and setting('invoice.enabled') %}
    <li>
      <div class=\"title\">{{ 'admin.invoice_import.to_invoice_num'|trans }}</div>
      <span class=\"number\"><a href=\"{{ path('admin_invoice_manage') }}\" target=\"_blank\">{{ toInvoiceNum }}</a></span>
      <p>{{ 'admin.invoice_import.total_invoice_num'|trans }}: {{ totalInvoiceNum }}</p>
    </li>
  {% endif %}
  <li>
    <div class=\"title\">{{ 'admin.homepage.todays_data.thread_un_answer'|trans }}</div>
    <span class=\"number\">
      {{ todayThreadUnAnswerNum }}
    </span>
    <p>{{ 'admin.homepage.todays_data.total'|trans }}: {{ totalThreadNum }}</p>
  </li>
</ul>", "admin/default/operation-analysis-dashbord.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\default\\operation-analysis-dashbord.html.twig");
    }
}
