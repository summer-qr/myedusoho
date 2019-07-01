<?php

/* course-manage/info.html.twig */
class __TwigTemplate_7216d4cb98a0e1db0ef74203dfb833bac846a716ca54b62427956bf2e11f765f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course-manage/layout.html.twig", "course-manage/info.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'main_heading_class' => array($this, 'block_main_heading_class'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28676444b497a63960d6bb5ce2ea8515f9dd1abe09123cf80588c64bfaedf44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28676444b497a63960d6bb5ce2ea8515f9dd1abe09123cf80588c64bfaedf44d->enter($__internal_28676444b497a63960d6bb5ce2ea8515f9dd1abe09123cf80588c64bfaedf44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course-manage/info.html.twig"));

        // line 4
        $context["course_side_nav"] = "info";
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-intro.js", 1 => "libs/es-ckeditor/ckeditor.js", 2 => "libs/jquery-validation.js", 3 => "libs/bootstrap-datetimepicker.js", 4 => "libs/select2.js", 5 => "libs/perfect-scrollbar.js", 6 => "app/js/course-manage/info/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28676444b497a63960d6bb5ce2ea8515f9dd1abe09123cf80588c64bfaedf44d->leave($__internal_28676444b497a63960d6bb5ce2ea8515f9dd1abe09123cf80588c64bfaedf44d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06e48a9d171da88ab658410503e18a979c431090e4f6733c625b81bb711a64a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e48a9d171da88ab658410503e18a979c431090e4f6733c625b81bb711a64a4->enter($__internal_06e48a9d171da88ab658410503e18a979c431090e4f6733c625b81bb711a64a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_base_info"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_06e48a9d171da88ab658410503e18a979c431090e4f6733c625b81bb711a64a4->leave($__internal_06e48a9d171da88ab658410503e18a979c431090e4f6733c625b81bb711a64a4_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_629d97ef84b9b5fc7aadb34fda947b8ee0a0a99534c93bce94ea2757ddd67d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629d97ef84b9b5fc7aadb34fda947b8ee0a0a99534c93bce94ea2757ddd67d40->enter($__internal_629d97ef84b9b5fc7aadb34fda947b8ee0a0a99534c93bce94ea2757ddd67d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_base_info"), "html", null, true);
        
        $__internal_629d97ef84b9b5fc7aadb34fda947b8ee0a0a99534c93bce94ea2757ddd67d40->leave($__internal_629d97ef84b9b5fc7aadb34fda947b8ee0a0a99534c93bce94ea2757ddd67d40_prof);

    }

    // line 8
    public function block_paddingClass($context, array $blocks = array())
    {
        $__internal_2c016b1828d05a2e70eab6c2276046bd4c47b7774202f292f2db7b66b19db50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c016b1828d05a2e70eab6c2276046bd4c47b7774202f292f2db7b66b19db50b->enter($__internal_2c016b1828d05a2e70eab6c2276046bd4c47b7774202f292f2db7b66b19db50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paddingClass"));

        echo "course-manage-body course-manage-info js-course-manage-info";
        
        $__internal_2c016b1828d05a2e70eab6c2276046bd4c47b7774202f292f2db7b66b19db50b->leave($__internal_2c016b1828d05a2e70eab6c2276046bd4c47b7774202f292f2db7b66b19db50b_prof);

    }

    // line 9
    public function block_main_heading_class($context, array $blocks = array())
    {
        $__internal_6655368a9b6e027a34075d57203db2724a80dbc4661e773d3db9c83cb99a13ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6655368a9b6e027a34075d57203db2724a80dbc4661e773d3db9c83cb99a13ba->enter($__internal_6655368a9b6e027a34075d57203db2724a80dbc4661e773d3db9c83cb99a13ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_heading_class"));

        echo " course-manage-info__title ";
        
        $__internal_6655368a9b6e027a34075d57203db2724a80dbc4661e773d3db9c83cb99a13ba->leave($__internal_6655368a9b6e027a34075d57203db2724a80dbc4661e773d3db9c83cb99a13ba_prof);

    }

    // line 11
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_05681d3f0863bfc0b808284473ce1388da1b142d9548609ea5e49cb7905ad6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05681d3f0863bfc0b808284473ce1388da1b142d9548609ea5e49cb7905ad6da->enter($__internal_05681d3f0863bfc0b808284473ce1388da1b142d9548609ea5e49cb7905ad6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 12
        echo "  ";
        $context["hasMulCourses"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()));
        // line 13
        echo "  ";
        if ((((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())) || twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) || (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_manage_marketing", 0) == 1))) || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage"))) {
            // line 14
            echo "    <form class=\"form-horizontal\" role=\"form\" id=\"course-info-form\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
      ";
            // line 16
            echo "      ";
            if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isUnMultiCourseSet($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))) {
                // line 17
                echo "        <div class=\"course-manage-subltitle cd-mb40\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base_info"), "html", null, true);
                echo "</div>
        ";
                // line 18
                $this->loadTemplate("courseset-manage/base-info/info.html.twig", "course-manage/info.html.twig", 18)->display(array_merge($context, array("form" => "course-info-form", "button" => "course-submit")));
                // line 19
                echo "      ";
            }
            // line 20
            echo "
      ";
            // line 22
            echo "      ";
            if ((isset($context["hasMulCourses"]) ? $context["hasMulCourses"] : $this->getContext($context, "hasMulCourses"))) {
                // line 23
                echo "        <div class=\"course-manage-subltitle cd-mb40\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base_info"), "html", null, true);
                echo "</div>
        ";
                // line 24
                $this->loadTemplate("course-manage/base-info/title.html.twig", "course-manage/info.html.twig", 24)->display($context);
                // line 25
                echo "      ";
            }
            // line 26
            echo "      
      ";
            // line 28
            echo "      <div class=\"course-manage-subltitle cd-mb40\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup"), "html", null, true);
            echo "</div>
      <div role=\"course-marketing-info\">
        ";
            // line 30
            $this->loadTemplate("course-manage/base-info/marketing.html.twig", "course-manage/info.html.twig", 30)->display($context);
            // line 31
            echo "      </div>

      ";
            // line 34
            echo "      <div class=\"course-manage-subltitle cd-mb40\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base_setup.rules"), "html", null, true);
            echo "</div>
      <div role=\"course-base-rule\">
        ";
            // line 36
            $this->loadTemplate("course-manage/base-info/rule.html.twig", "course-manage/info.html.twig", 36)->display($context);
            // line 37
            echo "      </div>
      
      <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-8\">
          <button id=\"course-submit\" type=\"button\" class=\"cd-btn cd-btn-primary\" data-loading-text=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
            echo "</button>
          <div id=\"test\"></div>
        </div>
      </div>
      
      ";
            // line 46
            if (( !(isset($context["hasMulCourses"]) ? $context["hasMulCourses"] : $this->getContext($context, "hasMulCourses")) && ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "type", array()) == "normal"))) {
                // line 47
                echo "        <div class=\"course-manage-intro js-plan-intro hidden\">
          <div class=\"course-manage-intro__outer js-plan-intro-btn\">
            <div class=\"course-manage-intro__inner\"><i class=\"es-icon es-icon-zhinan\"></i></div>
          </div>
          <div class=\"mtm course-manage-intro__tip\">";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base_plan_intro"), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 54
            echo "      
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        } else {
            // line 58
            echo "    <div class=\"cd-alert cd-alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.no_permission_tips"), "html", null, true);
            echo "</div>
  ";
        }
        
        $__internal_05681d3f0863bfc0b808284473ce1388da1b142d9548609ea5e49cb7905ad6da->leave($__internal_05681d3f0863bfc0b808284473ce1388da1b142d9548609ea5e49cb7905ad6da_prof);

    }

    public function getTemplateName()
    {
        return "course-manage/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 58,  197 => 55,  194 => 54,  188 => 51,  182 => 47,  180 => 46,  170 => 41,  164 => 37,  162 => 36,  156 => 34,  152 => 31,  150 => 30,  144 => 28,  141 => 26,  138 => 25,  136 => 24,  131 => 23,  128 => 22,  125 => 20,  122 => 19,  120 => 18,  115 => 17,  112 => 16,  107 => 14,  104 => 13,  101 => 12,  95 => 11,  83 => 9,  71 => 8,  59 => 7,  43 => 3,  36 => 1,  34 => 5,  32 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'course-manage/layout.html.twig' %}

{% block title %}{{'course.plan_base_info'|trans}} - {{ course.title }} - {{ parent() }}{% endblock %}
{% set course_side_nav = 'info' %}
{% do script(['libs/jquery-intro.js', 'libs/es-ckeditor/ckeditor.js', 'libs/jquery-validation.js', 'libs/bootstrap-datetimepicker.js', 'libs/select2.js', 'libs/perfect-scrollbar.js', 'app/js/course-manage/info/index.js']) %}

{% block page_title %}{{ 'course.plan_base_info'|trans }}{% endblock %}
{% block paddingClass %}course-manage-body course-manage-info js-course-manage-info{% endblock %}
{% block main_heading_class %} course-manage-info__title {% endblock %}

{% block main_body %}
  {% set hasMulCourses = has_mul_courses(courseSet.id) %}
  {% if 'ROLE_SUPER_ADMIN' in app.user.roles or 'ROLE_ADMIN' in app.user.roles or ('ROLE_TEACHER' in app.user.roles and setting('course.teacher_manage_marketing', 0) == 1) or has_permission('admin_course_content_manage') %}
    <form class=\"form-horizontal\" role=\"form\" id=\"course-info-form\" action=\"{{path('course_set_manage_course_info', {courseSetId: courseSet.id, courseId: course.id})}}\" method=\"post\">
      {# 课程基础信息 #}
      {% if is_un_multi_courseset(courseSet.id) %}
        <div class=\"course-manage-subltitle cd-mb40\">{{ 'course.base_info'|trans }}</div>
        {% include 'courseset-manage/base-info/info.html.twig' with {form: 'course-info-form', button:'course-submit'} %}
      {% endif %}

      {# 计划基础信息 #}
      {% if hasMulCourses %}
        <div class=\"course-manage-subltitle cd-mb40\">{{ 'course.base_info'|trans }}</div>
        {% include 'course-manage/base-info/title.html.twig' %}
      {% endif %}
      
      {# 营销设置 #}
      <div class=\"course-manage-subltitle cd-mb40\">{{ 'course.marketing_setup'|trans }}</div>
      <div role=\"course-marketing-info\">
        {% include 'course-manage/base-info/marketing.html.twig' %}
      </div>

      {# 基础规则 #}
      <div class=\"course-manage-subltitle cd-mb40\">{{ 'course.base_setup.rules'|trans }}</div>
      <div role=\"course-base-rule\">
        {% include 'course-manage/base-info/rule.html.twig' %}
      </div>
      
      <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-8\">
          <button id=\"course-submit\" type=\"button\" class=\"cd-btn cd-btn-primary\" data-loading-text=\"{{ 'form.btn.save.submiting'|trans }}\">{{ 'form.btn.save'|trans }}</button>
          <div id=\"test\"></div>
        </div>
      </div>
      
      {% if not hasMulCourses and courseSet.type == 'normal' %}
        <div class=\"course-manage-intro js-plan-intro hidden\">
          <div class=\"course-manage-intro__outer js-plan-intro-btn\">
            <div class=\"course-manage-intro__inner\"><i class=\"es-icon es-icon-zhinan\"></i></div>
          </div>
          <div class=\"mtm course-manage-intro__tip\">{{ 'course.base_plan_intro'|trans }}</div>
        </div>
      {% endif %}
      
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
    </form>
  {% else %}
    <div class=\"cd-alert cd-alert-danger\">{{ 'course.marketing_setup.no_permission_tips'|trans }}</div>
  {% endif %}
{% endblock %}
", "course-manage/info.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course-manage\\info.html.twig");
    }
}
