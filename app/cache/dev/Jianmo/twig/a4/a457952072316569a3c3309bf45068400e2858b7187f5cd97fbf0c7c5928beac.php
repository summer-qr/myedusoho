<?php

/* course-manage/layout.html.twig */
class __TwigTemplate_aaa312dd13e66ea14decf180e0bffde27f6094258121aa1d15599521bfb0b99c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "course-manage/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'courseset_header' => array($this, 'block_courseset_header'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'course_header' => array($this, 'block_course_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
            'main_heading_class' => array($this, 'block_main_heading_class'),
            'main_heading' => array($this, 'block_main_heading'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0088353ae619ee81921fdee6d45e3a3c7d34e295095222ee0fac65c2d9558522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0088353ae619ee81921fdee6d45e3a3c7d34e295095222ee0fac65c2d9558522->enter($__internal_0088353ae619ee81921fdee6d45e3a3c7d34e295095222ee0fac65c2d9558522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course-manage/layout.html.twig"));

        // line 6
        $context["hasMulCourses"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()));
        // line 7
        $context["side_nav"] = (((isset($context["hasMulCourses"]) ? $context["hasMulCourses"] : $this->getContext($context, "hasMulCourses"))) ? ("plan") : ("default-course-info"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0088353ae619ee81921fdee6d45e3a3c7d34e295095222ee0fac65c2d9558522->leave($__internal_0088353ae619ee81921fdee6d45e3a3c7d34e295095222ee0fac65c2d9558522_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_18844b3567a348a70ec72233e78faa3c4792582f3d508b26dc0c1498f5e49c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18844b3567a348a70ec72233e78faa3c4792582f3d508b26dc0c1498f5e49c47->enter($__internal_18844b3567a348a70ec72233e78faa3c4792582f3d508b26dc0c1498f5e49c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_18844b3567a348a70ec72233e78faa3c4792582f3d508b26dc0c1498f5e49c47->leave($__internal_18844b3567a348a70ec72233e78faa3c4792582f3d508b26dc0c1498f5e49c47_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_17d006e3d31b09027aae325e7ae018dd18096deacfe72f6ff6192d2ae0594093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d006e3d31b09027aae325e7ae018dd18096deacfe72f6ff6192d2ae0594093->enter($__internal_17d006e3d31b09027aae325e7ae018dd18096deacfe72f6ff6192d2ae0594093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li class=\"text-overflow\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set_menu"), "html", null, true);
        echo "</a></li>
    <li class=\"text-overflow courseset-header-section__breadcrumb\"><a class=\"active\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
        echo "</a></li>
  </ol>
";
        
        $__internal_17d006e3d31b09027aae325e7ae018dd18096deacfe72f6ff6192d2ae0594093->leave($__internal_17d006e3d31b09027aae325e7ae018dd18096deacfe72f6ff6192d2ae0594093_prof);

    }

    // line 16
    public function block_courseset_header($context, array $blocks = array())
    {
        $__internal_39dce88ea6374d14e875bba0787f979dadaff4f011a53628ee440c8ef36588f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dce88ea6374d14e875bba0787f979dadaff4f011a53628ee440c8ef36588f6->enter($__internal_39dce88ea6374d14e875bba0787f979dadaff4f011a53628ee440c8ef36588f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courseset_header"));

        // line 17
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:header", array("courseSet" => (isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "course" => ((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), null)) : (null)), "foldType" => 1)));
        echo "
";
        
        $__internal_39dce88ea6374d14e875bba0787f979dadaff4f011a53628ee440c8ef36588f6->leave($__internal_39dce88ea6374d14e875bba0787f979dadaff4f011a53628ee440c8ef36588f6_prof);

    }

    // line 21
    public function block_paddingClass($context, array $blocks = array())
    {
        $__internal_0a1e14800705727d156c0fddc4ca55f9a2162aaad7dd81d0985999c1464e1477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1e14800705727d156c0fddc4ca55f9a2162aaad7dd81d0985999c1464e1477->enter($__internal_0a1e14800705727d156c0fddc4ca55f9a2162aaad7dd81d0985999c1464e1477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paddingClass"));

        echo "course-manage-body ";
        
        $__internal_0a1e14800705727d156c0fddc4ca55f9a2162aaad7dd81d0985999c1464e1477->leave($__internal_0a1e14800705727d156c0fddc4ca55f9a2162aaad7dd81d0985999c1464e1477_prof);

    }

    // line 23
    public function block_course_header($context, array $blocks = array())
    {
        $__internal_54644f15fcecdba25c0a6bb2fb8a708ce2c4b77a9fca9dc586213b003154c709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54644f15fcecdba25c0a6bb2fb8a708ce2c4b77a9fca9dc586213b003154c709->enter($__internal_54644f15fcecdba25c0a6bb2fb8a708ce2c4b77a9fca9dc586213b003154c709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header"));

        // line 24
        echo "  ";
        if ((isset($context["hasMulCourses"]) ? $context["hasMulCourses"] : $this->getContext($context, "hasMulCourses"))) {
            // line 25
            echo "    <div class=\"course-manage-header-wrap\">
      ";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseManage:header", array("courseSet" => (isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "manage" => true)));
            echo "
    </div>
  ";
        }
        
        $__internal_54644f15fcecdba25c0a6bb2fb8a708ce2c4b77a9fca9dc586213b003154c709->leave($__internal_54644f15fcecdba25c0a6bb2fb8a708ce2c4b77a9fca9dc586213b003154c709_prof);

    }

    // line 31
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2aa3d71f828fde0cb608ef7899fb1681bf2d7ea4e09b545ce80655c5d5150bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa3d71f828fde0cb608ef7899fb1681bf2d7ea4e09b545ce80655c5d5150bf9->enter($__internal_2aa3d71f828fde0cb608ef7899fb1681bf2d7ea4e09b545ce80655c5d5150bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 32
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:sidebar", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "curCourse" => ((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), null)) : (null)), "courseSideNav" => ((array_key_exists("course_side_nav", $context)) ? (_twig_default_filter((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")), null)) : (null)))));
        echo "
";
        
        $__internal_2aa3d71f828fde0cb608ef7899fb1681bf2d7ea4e09b545ce80655c5d5150bf9->leave($__internal_2aa3d71f828fde0cb608ef7899fb1681bf2d7ea4e09b545ce80655c5d5150bf9_prof);

    }

    // line 35
    public function block_main($context, array $blocks = array())
    {
        $__internal_59b8342583f99501db33c981da8f54feebf4c9bcbdfd48411f02447f170917e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b8342583f99501db33c981da8f54feebf4c9bcbdfd48411f02447f170917e0->enter($__internal_59b8342583f99501db33c981da8f54feebf4c9bcbdfd48411f02447f170917e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "  <div class=\"cd-main\">
    <div class=\"cd-main__heading ";
        // line 37
        $this->displayBlock('main_heading_class', $context, $blocks);
        echo "\">
      ";
        // line 38
        $this->displayBlock('main_heading', $context, $blocks);
        // line 43
        echo "    </div>
    <div class=\"cd-main__body\">
      ";
        // line 45
        $this->displayBlock('main_body', $context, $blocks);
        // line 47
        echo "    </div>
  </div>
";
        
        $__internal_59b8342583f99501db33c981da8f54feebf4c9bcbdfd48411f02447f170917e0->leave($__internal_59b8342583f99501db33c981da8f54feebf4c9bcbdfd48411f02447f170917e0_prof);

    }

    // line 37
    public function block_main_heading_class($context, array $blocks = array())
    {
        $__internal_b9ad58802a3e98e25b755e4f01f4859f947644a6ac355bdf341f043f2144df0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ad58802a3e98e25b755e4f01f4859f947644a6ac355bdf341f043f2144df0b->enter($__internal_b9ad58802a3e98e25b755e4f01f4859f947644a6ac355bdf341f043f2144df0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_heading_class"));

        
        $__internal_b9ad58802a3e98e25b755e4f01f4859f947644a6ac355bdf341f043f2144df0b->leave($__internal_b9ad58802a3e98e25b755e4f01f4859f947644a6ac355bdf341f043f2144df0b_prof);

    }

    // line 38
    public function block_main_heading($context, array $blocks = array())
    {
        $__internal_d93ac8dc61e397cf5c19bd98d8c0d389dda5e58f518104cf0f455db40139ba4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93ac8dc61e397cf5c19bd98d8c0d389dda5e58f518104cf0f455db40139ba4c->enter($__internal_d93ac8dc61e397cf5c19bd98d8c0d389dda5e58f518104cf0f455db40139ba4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_heading"));

        // line 39
        echo "        <div class=\"cd-main__title\">
          ";
        // line 40
        $this->displayBlock('page_title', $context, $blocks);
        // line 41
        echo "        </div>
      ";
        
        $__internal_d93ac8dc61e397cf5c19bd98d8c0d389dda5e58f518104cf0f455db40139ba4c->leave($__internal_d93ac8dc61e397cf5c19bd98d8c0d389dda5e58f518104cf0f455db40139ba4c_prof);

    }

    // line 40
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_47bb8901d21feeeac20bb64e19a306f269daabfbabc92cb680275a3c7e98886d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47bb8901d21feeeac20bb64e19a306f269daabfbabc92cb680275a3c7e98886d->enter($__internal_47bb8901d21feeeac20bb64e19a306f269daabfbabc92cb680275a3c7e98886d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_47bb8901d21feeeac20bb64e19a306f269daabfbabc92cb680275a3c7e98886d->leave($__internal_47bb8901d21feeeac20bb64e19a306f269daabfbabc92cb680275a3c7e98886d_prof);

    }

    // line 45
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_7aeaaaccb5906003ca12331993b550aa3d2a86cd37c37e4c01caee2795e0cc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aeaaaccb5906003ca12331993b550aa3d2a86cd37c37e4c01caee2795e0cc73->enter($__internal_7aeaaaccb5906003ca12331993b550aa3d2a86cd37c37e4c01caee2795e0cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 46
        echo "      ";
        
        $__internal_7aeaaaccb5906003ca12331993b550aa3d2a86cd37c37e4c01caee2795e0cc73->leave($__internal_7aeaaaccb5906003ca12331993b550aa3d2a86cd37c37e4c01caee2795e0cc73_prof);

    }

    public function getTemplateName()
    {
        return "course-manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 46,  232 => 45,  221 => 40,  213 => 41,  211 => 40,  208 => 39,  202 => 38,  191 => 37,  182 => 47,  180 => 45,  176 => 43,  174 => 38,  170 => 37,  167 => 36,  161 => 35,  151 => 32,  145 => 31,  134 => 26,  131 => 25,  128 => 24,  122 => 23,  110 => 21,  100 => 17,  94 => 16,  82 => 12,  76 => 11,  73 => 10,  67 => 9,  55 => 3,  49 => 2,  42 => 1,  40 => 7,  38 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'courseset-manage/layout.html.twig' %}
{% block title %}
  {{ 'course.plan_task.manage'|trans }} - {{ parent() }}
{% endblock %}

{% set hasMulCourses = has_mul_courses(courseSet.id) %}
{% set side_nav =  hasMulCourses ? 'plan' : 'default-course-info' %}

{% block breadcrumb %}
  <ol class=\"breadcrumb breadcrumb-o\">
    <li class=\"text-overflow\"><a href=\"{{ path('my_teaching_course_sets') }}\">{{ 'my.teaching.course_set_menu'|trans }}</a></li>
    <li class=\"text-overflow courseset-header-section__breadcrumb\"><a class=\"active\" title=\"{{courseSet.title}}\">{{courseSet.title}}</a></li>
  </ol>
{% endblock %}

{% block courseset_header %}
  {{ render(controller('AppBundle:Course/CourseSetManage:header', {courseSet:courseSet, course: course|default(null), foldType: 1})) }}
{% endblock %}


{% block paddingClass %}course-manage-body {% endblock %}

{% block course_header %}
  {% if hasMulCourses %}
    <div class=\"course-manage-header-wrap\">
      {{ render(controller('AppBundle:Course/CourseManage:header', {courseSet:courseSet, course: course, manage: true})) }}
    </div>
  {% endif %}
{% endblock %}

{% block sidebar %}
  {{ render(controller('AppBundle:Course/CourseSetManage:sidebar', {courseSetId:courseSet.id, curCourse: course|default(null), courseSideNav: course_side_nav|default(null)})) }}
{% endblock %}

{% block main %}
  <div class=\"cd-main\">
    <div class=\"cd-main__heading {% block main_heading_class %}{% endblock %}\">
      {% block main_heading %}
        <div class=\"cd-main__title\">
          {% block page_title %}{% endblock %}
        </div>
      {% endblock %}
    </div>
    <div class=\"cd-main__body\">
      {% block main_body %}
      {% endblock %}
    </div>
  </div>
{% endblock %}
", "course-manage/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course-manage\\layout.html.twig");
    }
}
