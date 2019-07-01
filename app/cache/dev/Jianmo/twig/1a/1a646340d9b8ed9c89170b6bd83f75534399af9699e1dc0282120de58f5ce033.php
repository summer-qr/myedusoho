<?php

/* courseset-manage/courseset-layout.html.twig */
class __TwigTemplate_d74f5ccce1c359adeec2ec2e9c5d6ac1edf9860217df380783cc183527f94048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "courseset-manage/courseset-layout.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'courseset_header' => array($this, 'block_courseset_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d46fb8847ff9e1b0f539d9dc4c20b850dc1a712da0404cb255759efa4e592b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46fb8847ff9e1b0f539d9dc4c20b850dc1a712da0404cb255759efa4e592b01->enter($__internal_d46fb8847ff9e1b0f539d9dc4c20b850dc1a712da0404cb255759efa4e592b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/courseset-layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46fb8847ff9e1b0f539d9dc4c20b850dc1a712da0404cb255759efa4e592b01->leave($__internal_d46fb8847ff9e1b0f539d9dc4c20b850dc1a712da0404cb255759efa4e592b01_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f0a0915092bc5e0ccd32c85284be5e88f87e0e4143a38bca49897903974b5071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a0915092bc5e0ccd32c85284be5e88f87e0e4143a38bca49897903974b5071->enter($__internal_f0a0915092bc5e0ccd32c85284be5e88f87e0e4143a38bca49897903974b5071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li class=\"text-overflow\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set_menu"), "html", null, true);
        echo "</a></li>
    <li class=\"active text-overflow courseset-header-section__breadcrumb\" title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
        echo "</li>
  </ol>
";
        
        $__internal_f0a0915092bc5e0ccd32c85284be5e88f87e0e4143a38bca49897903974b5071->leave($__internal_f0a0915092bc5e0ccd32c85284be5e88f87e0e4143a38bca49897903974b5071_prof);

    }

    // line 9
    public function block_courseset_header($context, array $blocks = array())
    {
        $__internal_c19448ad295215edbf8159f1c25ccc69cf8256c06b893a0ecb383c30a3f88dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19448ad295215edbf8159f1c25ccc69cf8256c06b893a0ecb383c30a3f88dc1->enter($__internal_c19448ad295215edbf8159f1c25ccc69cf8256c06b893a0ecb383c30a3f88dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courseset_header"));

        // line 10
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Course/CourseSetManage:header", array("courseSet" => (isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "course" => ((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), null)) : (null)), "foldType" => 0)));
        echo "
";
        
        $__internal_c19448ad295215edbf8159f1c25ccc69cf8256c06b893a0ecb383c30a3f88dc1->leave($__internal_c19448ad295215edbf8159f1c25ccc69cf8256c06b893a0ecb383c30a3f88dc1_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/courseset-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  62 => 9,  50 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

{% block breadcrumb %}
  <ol class=\"breadcrumb breadcrumb-o\">
    <li class=\"text-overflow\"><a href=\"{{ path('my_teaching_course_sets') }}\">{{ 'my.teaching.course_set_menu'|trans }}</a></li>
    <li class=\"active text-overflow courseset-header-section__breadcrumb\" title=\"{{ courseSet.title }}\">{{ courseSet.title }}</li>
  </ol>
{% endblock %}
{% block courseset_header %}
  {{ render(controller('AppBundle:Course/CourseSetManage:header', {courseSet:courseSet, course: course|default(null), foldType: 0})) }}
{% endblock %}", "courseset-manage/courseset-layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\courseset-layout.html.twig");
    }
}
