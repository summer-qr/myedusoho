<?php

/* admin/live-course/index.html.twig */
class __TwigTemplate_f7725f7b6016954c8ed324cb9e1f7c069a8e7019a2a7839c524a5db825372a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/live-course/index.html.twig", 1);
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
        $__internal_d965b3ac9c12364c9175c326740da9f34e5cb8128915bda5e4cd29bbf93aad91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d965b3ac9c12364c9175c326740da9f34e5cb8128915bda5e4cd29bbf93aad91->enter($__internal_d965b3ac9c12364c9175c326740da9f34e5cb8128915bda5e4cd29bbf93aad91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/live-course/index.html.twig"));

        // line 3
        $context["menu"] = "admin_live_course_manage";
        // line 5
        $context["script_controller"] = "course/live-lesson-search";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d965b3ac9c12364c9175c326740da9f34e5cb8128915bda5e4cd29bbf93aad91->leave($__internal_d965b3ac9c12364c9175c326740da9f34e5cb8128915bda5e4cd29bbf93aad91_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_81c3d0ef07e357f510589d920e3307fa98b859eb81296700f836c873d4732a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c3d0ef07e357f510589d920e3307fa98b859eb81296700f836c873d4732a58->enter($__internal_81c3d0ef07e357f510589d920e3307fa98b859eb81296700f836c873d4732a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.live_course_enabled") == 1)) {
            // line 10
            echo "
  ";
            // line 11
            $this->loadTemplate("admin/live-course/tab.html.twig", "admin/live-course/index.html.twig", 11)->display($context);
            // line 12
            echo "  <br>
  <form id=\"message-search-form\" class=\"form-inline well well-sm mtl\" action=\" ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_live_course", array("status" => (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")))), "html", null, true);
            echo "\" method=\"get\" novalidate>
    ";
            // line 14
            $this->loadTemplate("org/org-tree-select.html.twig", "admin/live-course/index.html.twig", 14)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
            // line 15
            echo "    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
            // line 17
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("courseSetTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.name_option"), "taskTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.task_option", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task"))))), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keywordType"), "method"));
            echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.keyword_placeholder"), "html", null, true);
            echo "\" name=\"keyword\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
    ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.live_start_time_label"), "html", null, true);
            echo "：
    <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" placeholder=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.live_start_time_placeholder"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
            echo "\">
    <div class=\"form-group\">-</div>
    <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" placeholder=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.live_end_time_placeholder"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
            echo "\">
    </div>
    <button class=\"btn btn-primary\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
            echo "</button>
  </form>
  <input type=\"hidden\" id=\"status\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
            echo "\">
  <table class=\"table table-striped table-hover\" id=\"course-table\">
    <thead>
    <tr>
      <th width=\"45%\">";
            // line 35
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "html", null, true);
            echo "</th>
      ";
            // line 36
            $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/live-course/index.html.twig", 36)->display($context);
            // line 37
            echo "      <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.live_start_time_th"), "html", null, true);
            echo "</th>
      <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.live_time_long_th"), "html", null, true);
            echo "</th>
      <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.max_participate_count_th"), "html", null, true);
            echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liveTasks"]) ? $context["liveTasks"] : $this->getContext($context, "liveTasks")));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["liveTask"]) {
                // line 44
                echo "        ";
                $context["courseSet"] = (($this->getAttribute((isset($context["courseSets"]) ? $context["courseSets"] : null), $this->getAttribute($context["liveTask"], "fromCourseSetId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSets"]) ? $context["courseSets"] : null), $this->getAttribute($context["liveTask"], "fromCourseSetId", array()), array(), "array"), null)) : (null));
                // line 45
                echo "        ";
                $this->loadTemplate("admin/live-course/tr.html.twig", "admin/live-course/index.html.twig", 45)->display($context);
                // line 46
                echo "      ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 47
                echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.empty"), "html", null, true);
                echo "</div></td></tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liveTask'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    </tbody>
  </table>

  ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo "
";
        } else {
            // line 54
            echo "<div class=\"well\" style=\"text-align:center;\">

";
            // line 56
            if (((isset($context["eduCloudStatus"]) ? $context["eduCloudStatus"] : $this->getContext($context, "eduCloudStatus")) == "closed")) {
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.edu_cloud_closed"), "html", null, true);
                echo "，<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_my_cloud_overview");
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.show_detail"), "html", null, true);
                echo " </a>
";
            }
            // line 59
            if (((isset($context["eduCloudStatus"]) ? $context["eduCloudStatus"] : $this->getContext($context, "eduCloudStatus")) == "open")) {
                // line 60
                echo "  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.cloud_live_closed"), "html", null, true);
                echo "，<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_edulive");
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.live_manage.now_start"), "html", null, true);
                echo " </a>
";
            }
            // line 62
            echo "</div>
";
        }
        
        $__internal_81c3d0ef07e357f510589d920e3307fa98b859eb81296700f836c873d4732a58->leave($__internal_81c3d0ef07e357f510589d920e3307fa98b859eb81296700f836c873d4732a58_prof);

    }

    public function getTemplateName()
    {
        return "admin/live-course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 62,  208 => 60,  206 => 59,  197 => 57,  195 => 56,  191 => 54,  186 => 52,  181 => 49,  172 => 47,  159 => 46,  156 => 45,  153 => 44,  135 => 43,  128 => 39,  124 => 38,  119 => 37,  117 => 36,  113 => 35,  106 => 31,  101 => 29,  94 => 27,  87 => 25,  83 => 24,  75 => 21,  68 => 17,  64 => 15,  62 => 14,  58 => 13,  55 => 12,  53 => 11,  50 => 10,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_live_course_manage' %}

{% set script_controller = 'course/live-lesson-search' %}

{% block main %}

{% if setting(\"course.live_course_enabled\") == 1 %}

  {% include 'admin/live-course/tab.html.twig' %}
  <br>
  <form id=\"message-search-form\" class=\"form-inline well well-sm mtl\" action=\" {{ path('admin_live_course', {status:status}) }}\" method=\"get\" novalidate>
    {% include 'org/org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        {{ select_options({courseSetTitle:'admin.live_manage.name_option'|trans, taskTitle: 'admin.live_manage.task_option'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans)})}, app.request.get('keywordType')) }}
      </select>
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"{{'admin.live_manage.keyword_placeholder'|trans}}\" name=\"keyword\" value=\"{{ app.request.get('keyword') }}\">
    </div>
    <div class=\"form-group\">
    {{'admin.live_manage.live_start_time_label'|trans}}：
    <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" placeholder=\"{{'admin.live_manage.live_start_time_placeholder'|trans}}\" value=\"{{ app.request.get('startDateTime') }}\">
    <div class=\"form-group\">-</div>
    <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" placeholder=\"{{'admin.live_manage.live_end_time_placeholder'|trans}}\" value=\"{{ app.request.get('endDateTime') }}\">
    </div>
    <button class=\"btn btn-primary\">{{'form.btn.search'|trans}}</button>
  </form>
  <input type=\"hidden\" id=\"status\" value=\"{{status}}\">
  <table class=\"table table-striped table-hover\" id=\"course-table\">
    <thead>
    <tr>
      <th width=\"45%\">{{ setting('course.task_name')|default('admin.setting_course.task'|trans) }}</th>
      {% include 'org/parts/table-thead-tr.html.twig' %}
      <th>{{'admin.live_manage.live_start_time_th'|trans}}</th>
      <th>{{'admin.live_manage.live_time_long_th'|trans}}</th>
      <th>{{'admin.live_manage.max_participate_count_th'|trans}}</th>
    </tr>
    </thead>
    <tbody>
      {% for liveTask in liveTasks %}
        {% set courseSet = courseSets[liveTask.fromCourseSetId]|default(null) %}
        {% include 'admin/live-course/tr.html.twig' %}
      {% else %}
        <tr><td colspan=\"20\"><div class=\"empty\">{{'admin.live_manage.empty'|trans}}</div></td></tr>
      {% endfor %}
    </tbody>
  </table>

  {{ admin_macro.paginator(paginator) }}
{% else %}
<div class=\"well\" style=\"text-align:center;\">

{% if eduCloudStatus == 'closed' %}
{{'admin.live_manage.edu_cloud_closed'|trans}}，<a href=\"{{ path('admin_my_cloud_overview') }}\"> {{'admin.live_manage.show_detail'|trans}} </a>
{% endif %}
{% if eduCloudStatus == 'open' %}
  {{'admin.live_manage.cloud_live_closed'|trans}}，<a href=\"{{ path('admin_setting_cloud_edulive') }}\"> {{'admin.live_manage.now_start'|trans}} </a>
{% endif %}
</div>
{% endif %}
{% endblock %}", "admin/live-course/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\live-course\\index.html.twig");
    }
}
