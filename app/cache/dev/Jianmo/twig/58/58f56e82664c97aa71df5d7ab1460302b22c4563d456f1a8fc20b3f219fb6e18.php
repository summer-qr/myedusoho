<?php

/* admin/open-course-analysis/layout.html.twig */
class __TwigTemplate_2318ea0590e5a50fe6973ecd7fca26c66144f3ca5da45fd995618df583707479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/open-course-analysis/layout.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'form' => array($this, 'block_form'),
            'form_input' => array($this, 'block_form_input'),
            'analysis_content' => array($this, 'block_analysis_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25d3409305a7d075a1422cf613fd7203f82aec233a48ab863981994f1474a5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d3409305a7d075a1422cf613fd7203f82aec233a48ab863981994f1474a5e4->enter($__internal_25d3409305a7d075a1422cf613fd7203f82aec233a48ab863981994f1474a5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/open-course-analysis/layout.html.twig"));

        // line 2
        $context["nav"] = ((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), null)) : (null));
        // line 4
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("open-course-analysis/index");
        // line 6
        $context["menu"] = "admin_opencourse_analysis";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d3409305a7d075a1422cf613fd7203f82aec233a48ab863981994f1474a5e4->leave($__internal_25d3409305a7d075a1422cf613fd7203f82aec233a48ab863981994f1474a5e4_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_97dcd92cfc5cf372a703852e83f0b76a3312067b5b3ce2906a4f1afe6473c39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97dcd92cfc5cf372a703852e83f0b76a3312067b5b3ce2906a4f1afe6473c39a->enter($__internal_97dcd92cfc5cf372a703852e83f0b76a3312067b5b3ce2906a4f1afe6473c39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "  <style>
    .form-control[readonly] {
      cursor: pointer;
      background: #fff;
    }
  </style>

  ";
        // line 16
        $this->displayBlock('form', $context, $blocks);
        // line 45
        echo "
  <div class=\"btn-group mbm\" role=\"group\" aria-label=\"...\">
    <a class=\"btn btn-default ";
        // line 47
        if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "referer")) {
            echo "active";
        }
        echo "\"
       href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_summary_list", array("startTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "startTime"), "method"), "endTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "endTime"), "method"), "date-range" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "date-range"), "method"))), "html", null, true);
        echo "\"
       role=\"button\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.referer_tab"), "html", null, true);
        echo "</a>
    <a class=\"btn btn-default ";
        // line 50
        if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "conversion")) {
            echo "active";
        }
        echo "\"
       href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_conversion", array("startTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "startTime"), "method"), "endTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "endTime"), "method"), "date-range" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "date-range"), "method"))), "html", null, true);
        echo "\"
       role=\"button\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.conversion_tab"), "html", null, true);
        echo "</a>
    <a class=\"btn btn-default ";
        // line 53
        if ((((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "")) : ("")) == "watch")) {
            echo "active";
        }
        echo "\"
       href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_watch_statistics", array("startTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "startTime"), "method"), "endTime" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "endTime"), "method"), "date-range" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "date-range"), "method"))), "html", null, true);
        echo "\"
       role=\"button\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.watch_tab"), "html", null, true);
        echo "</a>
  </div>

  ";
        // line 58
        $this->displayBlock('analysis_content', $context, $blocks);
        
        $__internal_97dcd92cfc5cf372a703852e83f0b76a3312067b5b3ce2906a4f1afe6473c39a->leave($__internal_97dcd92cfc5cf372a703852e83f0b76a3312067b5b3ce2906a4f1afe6473c39a_prof);

    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        $__internal_d9ba37d0246632c7ec995b3a2929d7f9f71ddda4fe605036a5be9116bb432cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ba37d0246632c7ec995b3a2929d7f9f71ddda4fe605036a5be9116bb432cbd->enter($__internal_d9ba37d0246632c7ec995b3a2929d7f9f71ddda4fe605036a5be9116bb432cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 17
        echo "    <form id=\"refererlog-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate=\"\">
      <div class=\"form-group \">
        <label for=\"startDate\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.start_date_label"), "html", null, true);
        echo "</label>
        <input class=\"form-control datetimepicker-input\" type=\"text\" id=\"startTime\" name=\"startTime\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "startTime", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.start_date_label"), "html", null, true);
        echo "\" readonly>
        <label for=\"endDate\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.end_date_label"), "html", null, true);
        echo "</label>
        <input class=\"form-control datetimepicker-input\" type=\"text\" id=\"endTime\" name=\"endTime\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "endTime", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.end_date_label"), "html", null, true);
        echo "\" readonly>
        <button
            class=\"btn btn-default btn-data-range ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "date-range"), "method") == "day")) {
            echo "active ";
        }
        echo "\"
            type=\"button\" id=\"btn-yesterday-range\" data-type=\"day\" data-start=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "yesterdayStart", array()), "html", null, true);
        echo "\"
            data-end=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "yesterdayEnd", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.yesterday_btn"), "html", null, true);
        echo "
        </button>
        <button
            class=\"btn btn-default btn-data-range ";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "date-range"), "method") == "week")) {
            echo "active ";
        }
        echo "\"
            type=\"button\" id=\"btn-lastWeek-range\" data-type=\"week\" data-start=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "lastWeekStart", array()), "html", null, true);
        echo "\"
            data-end=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "lastWeekEnd", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.recent_seven_day_btn"), "html", null, true);
        echo "
        </button>
        <button
            class=\"btn btn-default btn-data-range ";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "date-range"), "method") == "month")) {
            echo "active ";
        }
        echo "\"
            type=\"button\" id=\"btn-lastMonth-range\" data-type=\"month\" data-start=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "lastMonthStart", array()), "html", null, true);
        echo "\"
            data-end=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "lastMonthEnd", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.recent_thirty_day_btn"), "html", null, true);
        echo "
        </button>
        <input name=\"date-range\" type=\"hidden\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "date-range", 1 => "week"), "method"), "html", null, true);
        echo "\">
        ";
        // line 39
        $this->displayBlock('form_input', $context, $blocks);
        // line 41
        echo "        <button class=\"btn btn-primary\" type=\"submit\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
      </div>
    </form>
  ";
        
        $__internal_d9ba37d0246632c7ec995b3a2929d7f9f71ddda4fe605036a5be9116bb432cbd->leave($__internal_d9ba37d0246632c7ec995b3a2929d7f9f71ddda4fe605036a5be9116bb432cbd_prof);

    }

    // line 39
    public function block_form_input($context, array $blocks = array())
    {
        $__internal_5acbd1418bcf58b7242ed5123f12ddb5aa9eef9b7add33b8b694ea4a7f44430d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acbd1418bcf58b7242ed5123f12ddb5aa9eef9b7add33b8b694ea4a7f44430d->enter($__internal_5acbd1418bcf58b7242ed5123f12ddb5aa9eef9b7add33b8b694ea4a7f44430d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_input"));

        // line 40
        echo "        ";
        
        $__internal_5acbd1418bcf58b7242ed5123f12ddb5aa9eef9b7add33b8b694ea4a7f44430d->leave($__internal_5acbd1418bcf58b7242ed5123f12ddb5aa9eef9b7add33b8b694ea4a7f44430d_prof);

    }

    // line 58
    public function block_analysis_content($context, array $blocks = array())
    {
        $__internal_a5b27db97dc176e23c36f2ea0d219e2cad38959e9b682f64219585dcc9684771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b27db97dc176e23c36f2ea0d219e2cad38959e9b682f64219585dcc9684771->enter($__internal_a5b27db97dc176e23c36f2ea0d219e2cad38959e9b682f64219585dcc9684771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "analysis_content"));

        // line 59
        echo "
  ";
        
        $__internal_a5b27db97dc176e23c36f2ea0d219e2cad38959e9b682f64219585dcc9684771->leave($__internal_a5b27db97dc176e23c36f2ea0d219e2cad38959e9b682f64219585dcc9684771_prof);

    }

    public function getTemplateName()
    {
        return "admin/open-course-analysis/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 59,  231 => 58,  224 => 40,  218 => 39,  206 => 41,  204 => 39,  200 => 38,  193 => 36,  189 => 35,  183 => 34,  175 => 31,  171 => 30,  165 => 29,  157 => 26,  153 => 25,  147 => 24,  140 => 22,  136 => 21,  130 => 20,  126 => 19,  122 => 17,  116 => 16,  109 => 58,  103 => 55,  99 => 54,  93 => 53,  89 => 52,  85 => 51,  79 => 50,  75 => 49,  71 => 48,  65 => 47,  61 => 45,  59 => 16,  50 => 9,  44 => 8,  37 => 1,  35 => 6,  33 => 4,  31 => 2,  11 => 1,);
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
{% set nav = nav|default(null) %} 

{% do load_script('open-course-analysis/index') %}

{% set menu = 'admin_opencourse_analysis' %}

{% block main %}
  <style>
    .form-control[readonly] {
      cursor: pointer;
      background: #fff;
    }
  </style>

  {% block form %}
    <form id=\"refererlog-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate=\"\">
      <div class=\"form-group \">
        <label for=\"startDate\">{{ 'admin.open_manage.analysis.start_date_label'|trans }}</label>
        <input class=\"form-control datetimepicker-input\" type=\"text\" id=\"startTime\" name=\"startTime\" value=\"{{ dateRange.startTime }}\" placeholder=\"{{ 'admin.open_manage.analysis.start_date_label'|trans }}\" readonly>
        <label for=\"endDate\">{{ 'admin.open_manage.analysis.end_date_label'|trans }}</label>
        <input class=\"form-control datetimepicker-input\" type=\"text\" id=\"endTime\" name=\"endTime\" value=\"{{ dateRange.endTime }}\" placeholder=\"{{ 'admin.open_manage.analysis.end_date_label'|trans }}\" readonly>
        <button
            class=\"btn btn-default btn-data-range {% if app.request.query.get('date-range') == 'day' %}active {% endif %}\"
            type=\"button\" id=\"btn-yesterday-range\" data-type=\"day\" data-start=\"{{ dateRange.yesterdayStart }}\"
            data-end=\"{{ dateRange.yesterdayEnd }}\">{{ 'admin.open_manage.analysis.yesterday_btn'|trans }}
        </button>
        <button
            class=\"btn btn-default btn-data-range {% if app.request.query.get('date-range') == 'week' %}active {% endif %}\"
            type=\"button\" id=\"btn-lastWeek-range\" data-type=\"week\" data-start=\"{{ dateRange.lastWeekStart }}\"
            data-end=\"{{ dateRange.lastWeekEnd }}\">{{ 'admin.open_manage.analysis.recent_seven_day_btn'|trans }}
        </button>
        <button
            class=\"btn btn-default btn-data-range {% if app.request.query.get('date-range') == 'month' %}active {% endif %}\"
            type=\"button\" id=\"btn-lastMonth-range\" data-type=\"month\" data-start=\"{{ dateRange.lastMonthStart }}\"
            data-end=\"{{ dateRange.lastMonthEnd }}\">{{ 'admin.open_manage.analysis.recent_thirty_day_btn'|trans }}
        </button>
        <input name=\"date-range\" type=\"hidden\" value=\"{{ app.request.query.get('date-range','week') }}\">
        {% block form_input %}
        {% endblock %}
        <button class=\"btn btn-primary\" type=\"submit\">{{ 'form.btn.search'|trans }}</button>
      </div>
    </form>
  {% endblock form %}

  <div class=\"btn-group mbm\" role=\"group\" aria-label=\"...\">
    <a class=\"btn btn-default {% if nav  == 'referer' %}active{% endif %}\"
       href=\"{{ path('admin_opencourse_analysis_referer_summary_list',{startTime:app.request.get('startTime'),endTime:app.request.get('endTime'),'date-range':app.request.get('date-range')}) }}\"
       role=\"button\">{{ 'admin.open_manage.analysis.referer_tab'|trans }}</a>
    <a class=\"btn btn-default {% if nav == 'conversion' %}active{% endif %}\"
       href=\"{{ path('admin_opencourse_analysis_conversion',{startTime:app.request.get('startTime'),endTime:app.request.get('endTime'),'date-range':app.request.get('date-range')}) }}\"
       role=\"button\">{{ 'admin.open_manage.analysis.conversion_tab'|trans }}</a>
    <a class=\"btn btn-default {% if nav|default('') == 'watch' %}active{% endif %}\"
       href=\"{{ path('admin_opencourse_analysis_referer_watch_statistics',{startTime:app.request.get('startTime'),endTime:app.request.get('endTime'),'date-range':app.request.get('date-range')}) }}\"
       role=\"button\">{{ 'admin.open_manage.analysis.watch_tab'|trans }}</a>
  </div>

  {% block analysis_content %}

  {% endblock %}
{% endblock %}", "admin/open-course-analysis/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\open-course-analysis\\layout.html.twig");
    }
}
