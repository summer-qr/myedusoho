<?php

/* admin/course/course-item.html.twig */
class __TwigTemplate_67d3a68b5a73301faa70d59e86228845d73d2f4289a4c77b2674340fb2d1bae0 extends Twig_Template
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
        $__internal_56e59f3847be97903b3eaef069cfff962a50fe88ce384b655a970b843b12e395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e59f3847be97903b3eaef069cfff962a50fe88ce384b655a970b843b12e395->enter($__internal_56e59f3847be97903b3eaef069cfff962a50fe88ce384b655a970b843b12e395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/course/course-item.html.twig"));

        // line 1
        echo "<li data-course-id=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), null)) : (null)), "html", null, true);
        echo "\" class=\"course-grid related-course-grid\" role=\"course-item\" 
";
        // line 2
        if ( !((array_key_exists("showDelBtn", $context)) ? (_twig_default_filter((isset($context["showDelBtn"]) ? $context["showDelBtn"] : $this->getContext($context, "showDelBtn")), false)) : (false))) {
            // line 3
            echo "style=\"cursor:pointer\"
";
        }
        // line 4
        echo ">
\t<div class=\"grid-body\" style=\"position:relative\">
    ";
        // line 6
        if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
            // line 7
            echo "      ";
            $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseSetId", array()),  -1)) : ( -1))));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "      ";
            $context["courseSet"] = array();
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "large"), "courseSet.png"), "html", null, true);
        echo "\" class=\"img-responsive thumb\"/>
\t\t<span class=\"title\" style=\"max-height: 15px;overflow: hidden;line-height: 20px;\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "title", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.not_select_course"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.not_select_course"))), "html", null, true);
        if (((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")) && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()))) {
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        }
        // line 14
        echo "\t\t</span>

\t\t<button type=\"button\" role=\"course-item-delete\" data-course-id=\"";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), null)) : (null)), "html", null, true);
        echo "\" ";
        if ( !((array_key_exists("showDelBtn", $context)) ? (_twig_default_filter((isset($context["showDelBtn"]) ? $context["showDelBtn"] : $this->getContext($context, "showDelBtn")), false)) : (false))) {
            echo "style=\"display:none\"";
        }
        echo " class=\"series-mode-label close\"><i class=\"glyphicon glyphicon-remove\"></i></button>

\t</div>
</li>";
        
        $__internal_56e59f3847be97903b3eaef069cfff962a50fe88ce384b655a970b843b12e395->leave($__internal_56e59f3847be97903b3eaef069cfff962a50fe88ce384b655a970b843b12e395_prof);

    }

    public function getTemplateName()
    {
        return "admin/course/course-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 14,  57 => 13,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  33 => 4,  29 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li data-course-id=\"{{course.id|default(null)}}\" class=\"course-grid related-course-grid\" role=\"course-item\" 
{% if not showDelBtn|default(false) %}
style=\"cursor:pointer\"
{% endif %}>
\t<div class=\"grid-body\" style=\"position:relative\">
    {% if course %}
      {% set courseSet = data('CourseSet',{'id':course.courseSetId|default(-1)}) %}
    {% else %}
      {% set courseSet = [] %}
    {% endif %}
    <img src=\"{{ filepath(course_set_cover(courseSet, 'large'), 'courseSet.png') }}\" class=\"img-responsive thumb\"/>
\t\t<span class=\"title\" style=\"max-height: 15px;overflow: hidden;line-height: 20px;\">
\t\t{{courseSet.title|default('admin.course_manage.manage.not_select_course'|trans)}}{% if course and course.title %}-{{ course.title }}{% endif %}
\t\t</span>

\t\t<button type=\"button\" role=\"course-item-delete\" data-course-id=\"{{course.id|default(null)}}\" {% if not showDelBtn|default(false) %}style=\"display:none\"{% endif %} class=\"series-mode-label close\"><i class=\"glyphicon glyphicon-remove\"></i></button>

\t</div>
</li>", "admin/course/course-item.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\course\\course-item.html.twig");
    }
}
