<?php

/* my/teaching/course-type-select.html.twig */
class __TwigTemplate_c8f7eeebfa2ea1268367b982dbc50744cba67825d61716ffa43cd5647232db2f extends Twig_Template
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
        $__internal_1d862dcb3202e74f7bb60d5d536c4b86b0d8c8cb1dfb2b1e0c2be8ead72241e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d862dcb3202e74f7bb60d5d536c4b86b0d8c8cb1dfb2b1e0c2be8ead72241e7->enter($__internal_1d862dcb3202e74f7bb60d5d536c4b86b0d8c8cb1dfb2b1e0c2be8ead72241e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/teaching/course-type-select.html.twig"));

        // line 1
        echo "<div class=\"visible-xs cd-mb24 clearfix\">
  <div class=\"pull-right\">
    <a class=\"cd-btn cd-btn-primary\" id=\"create-course\" href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create"), "html", null, true);
        echo "</a>
  </div>
</div>
<div class=\"cd-mb24\">
  <div class=\"pull-right hidden-xs\">
    <a class=\"cd-btn cd-btn-primary\" id=\"create-course\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create"), "html", null, true);
        echo "</a>
  </div>
  <ul class=\"courseset-type-list nav nav-pills\">
    <li class=\"";
        // line 11
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets", array("filter" => "normal"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.normal"), "html", null, true);
        echo "</a></li>
    <li class=\"";
        // line 12
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "live")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets", array("filter" => "live"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.live"), "html", null, true);
        echo "</a></li>
    <li class=\"";
        // line 13
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "open")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_open_courses", array("filter" => "open"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.normal"), "html", null, true);
        echo "</a></li>
    <li class=\"";
        // line 14
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "liveOpen")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_open_courses", array("filter" => "liveOpen"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.live"), "html", null, true);
        echo "</a></li>
    ";
        // line 15
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("my.teaching.menu", array("side_nav" => (isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav"))));
        echo "
  </ul>
</div>
";
        
        $__internal_1d862dcb3202e74f7bb60d5d536c4b86b0d8c8cb1dfb2b1e0c2be8ead72241e7->leave($__internal_1d862dcb3202e74f7bb60d5d536c4b86b0d8c8cb1dfb2b1e0c2be8ead72241e7_prof);

    }

    public function getTemplateName()
    {
        return "my/teaching/course-type-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  74 => 14,  64 => 13,  54 => 12,  44 => 11,  36 => 8,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"visible-xs cd-mb24 clearfix\">
  <div class=\"pull-right\">
    <a class=\"cd-btn cd-btn-primary\" id=\"create-course\" href=\"{{ path('course_set_manage_create') }}\" >{{ 'my.teaching.course_set.create'|trans }}</a>
  </div>
</div>
<div class=\"cd-mb24\">
  <div class=\"pull-right hidden-xs\">
    <a class=\"cd-btn cd-btn-primary\" id=\"create-course\" href=\"{{ path('course_set_manage_create') }}\" >{{ 'my.teaching.course_set.create'|trans }}</a>
  </div>
  <ul class=\"courseset-type-list nav nav-pills\">
    <li class=\"{% if filter == 'normal' %}active{% endif %}\"><a href=\"{{path('my_teaching_course_sets', {filter:'normal'}) }}\">{{'my.teaching.course_set.normal'|trans}}</a></li>
    <li class=\"{% if filter == 'live' %}active{% endif %}\"><a href=\"{{path('my_teaching_course_sets', {filter:'live'}) }}\">{{'my.teaching.course_set.live'|trans}}</a></li>
    <li class=\"{% if filter == 'open' %}active{% endif %}\"><a href=\"{{ path('my_teaching_open_courses', {filter:'open'}) }}\">{{'my.teaching.open_course.normal'|trans}}</a></li>
    <li class=\"{% if filter == 'liveOpen' %}active{% endif %}\"><a href=\"{{ path('my_teaching_open_courses', {filter:'liveOpen'}) }}\">{{'my.teaching.open_course.live'|trans}}</a></li>
    {{ slot('my.teaching.menu', {'side_nav': side_nav}) }}
  </ul>
</div>
", "my/teaching/course-type-select.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\teaching\\course-type-select.html.twig");
    }
}
