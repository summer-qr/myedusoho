<?php

/* classroom-manage/course/course-pick-modal.html.twig */
class __TwigTemplate_5c4cf2299ace49d5dd394dd850379a1ab47817180925e342354492bc50fa3bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "classroom-manage/course/course-pick-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5018c89e2ac71cecb80ddbcdd1ef8983c4690d5c26054cbe781c1713b0b62a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5018c89e2ac71cecb80ddbcdd1ef8983c4690d5c26054cbe781c1713b0b62a1e->enter($__internal_5018c89e2ac71cecb80ddbcdd1ef8983c4690d5c26054cbe781c1713b0b62a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classroom-manage/course/course-pick-modal.html.twig"));

        // line 3
        $context["modal_class"] = "modal-lg";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/classroom-manage/course-manage-pick/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5018c89e2ac71cecb80ddbcdd1ef8983c4690d5c26054cbe781c1713b0b62a1e->leave($__internal_5018c89e2ac71cecb80ddbcdd1ef8983c4690d5c26054cbe781c1713b0b62a1e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_771f15d3060daf3b006c54fbc5215629713a2b8b17b739b38543403ce4957493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771f15d3060daf3b006c54fbc5215629713a2b8b17b739b38543403ce4957493->enter($__internal_771f15d3060daf3b006c54fbc5215629713a2b8b17b739b38543403ce4957493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.select_course"), "html", null, true);
        
        $__internal_771f15d3060daf3b006c54fbc5215629713a2b8b17b739b38543403ce4957493->leave($__internal_771f15d3060daf3b006c54fbc5215629713a2b8b17b739b38543403ce4957493_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_58ae47a04f2f68905010f9665afc3f4b9f8810f0e3307e6b6b5b13cf5c258641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ae47a04f2f68905010f9665afc3f4b9f8810f0e3307e6b6b5b13cf5c258641->enter($__internal_58ae47a04f2f68905010f9665afc3f4b9f8810f0e3307e6b6b5b13cf5c258641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"alert alert-info\" role=\"alert\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.select_course_tips", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "
</div>

<form class=\"form-inline form-search\" role=\"search-form\">
      <div class=\"form-group \">
        <input type=\"text\" class=\"form-control\" name=\"key\" id=\"enterSearch\" value=\"\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course_name_placeholder"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_course_search", array("classroomId" => (isset($context["classroomId"]) ? $context["classroomId"] : $this->getContext($context, "classroomId")))), "html", null, true);
        echo "\">
      </div>
      <button type=\"button\" class=\"btn btn-primary\"  id=\"search\"  data-url=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_course_search", array("classroomId" => (isset($context["classroomId"]) ? $context["classroomId"] : $this->getContext($context, "classroomId")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
      <a class=\"btn btn-primary\" id=\"all-courses\" data-url=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses_pick", array("classroomId" => (isset($context["classroomId"]) ? $context["classroomId"] : $this->getContext($context, "classroomId")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.all_courses"), "html", null, true);
        echo "</a>
</form>

<div class=\"row mtl\">
    <div class=\"col-md-12\">
      <div class=\"courses-list\">
        ";
        // line 21
        $this->loadTemplate("course/course-select-list.html.twig", "classroom-manage/course/course-pick-modal.html.twig", 21)->display($context);
        // line 22
        echo "      </div>
    </div>
</div>

";
        
        $__internal_58ae47a04f2f68905010f9665afc3f4b9f8810f0e3307e6b6b5b13cf5c258641->leave($__internal_58ae47a04f2f68905010f9665afc3f4b9f8810f0e3307e6b6b5b13cf5c258641_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_51dd8a714e90805bc3c14fe76f3d178d7b40ccc12fc9b59391d1d9b6693db97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dd8a714e90805bc3c14fe76f3d178d7b40ccc12fc9b59391d1d9b6693db97a->enter($__internal_51dd8a714e90805bc3c14fe76f3d178d7b40ccc12fc9b59391d1d9b6693db97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        echo "  <button id=\"sure\" class=\"btn btn-primary pull-right\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses_select", array("id" => (isset($context["classroomId"]) ? $context["classroomId"] : $this->getContext($context, "classroomId")))), "html", null, true);
        echo "\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.add_course_btn"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</button>
  <p id=\"tip\" class=\"color-danger pull-right mts mbs hide\" >";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.add_course_tips"), "html", null, true);
        echo "</p>
";
        
        $__internal_51dd8a714e90805bc3c14fe76f3d178d7b40ccc12fc9b59391d1d9b6693db97a->leave($__internal_51dd8a714e90805bc3c14fe76f3d178d7b40ccc12fc9b59391d1d9b6693db97a_prof);

    }

    public function getTemplateName()
    {
        return "classroom-manage/course/course-pick-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  120 => 30,  111 => 29,  105 => 28,  94 => 22,  92 => 21,  81 => 15,  75 => 14,  68 => 12,  59 => 7,  53 => 6,  41 => 2,  34 => 1,  32 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'bootstrap-modal-layout.html.twig' %}
{% block title %}{{'classroom.select_course'|trans}}{% endblock %}
{% set modal_class= \"modal-lg\" %}
{% do script(['app/js/classroom-manage/course-manage-pick/index.js']) %}

{% block body %}
<div class=\"alert alert-info\" role=\"alert\">{{'classroom.select_course_tips'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}
</div>

<form class=\"form-inline form-search\" role=\"search-form\">
      <div class=\"form-group \">
        <input type=\"text\" class=\"form-control\" name=\"key\" id=\"enterSearch\" value=\"\" placeholder=\"{{'classroom.course_name_placeholder'|trans}}\" data-url=\"{{path('classroom_course_search',{classroomId:classroomId})}}\">
      </div>
      <button type=\"button\" class=\"btn btn-primary\"  id=\"search\"  data-url=\"{{path('classroom_course_search',{classroomId:classroomId})}}\">{{'form.btn.search'|trans}}</button>
      <a class=\"btn btn-primary\" id=\"all-courses\" data-url=\"{{path('classroom_courses_pick',{classroomId:classroomId})}}\">{{'classroom.all_courses'|trans}}</a>
</form>

<div class=\"row mtl\">
    <div class=\"col-md-12\">
      <div class=\"courses-list\">
        {% include('course/course-select-list.html.twig') %}
      </div>
    </div>
</div>

{% endblock %}

{% block footer %}
  <button id=\"sure\" class=\"btn btn-primary pull-right\" data-url=\"{{ path('classroom_courses_select', {id:classroomId})}}\" data-loading-text=\"{{'form.btn.submit.submiting'|trans}}\">{{'classroom.add_course_btn'|trans}}</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">{{'form.btn.cancel'|trans}}</button>
  <p id=\"tip\" class=\"color-danger pull-right mts mbs hide\" >{{'classroom.add_course_tips'|trans}}</p>
{% endblock %}", "classroom-manage/course/course-pick-modal.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\classroom-manage\\course\\course-pick-modal.html.twig");
    }
}
