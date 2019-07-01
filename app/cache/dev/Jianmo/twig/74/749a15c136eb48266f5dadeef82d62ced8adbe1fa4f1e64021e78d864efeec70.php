<?php

/* course/block/related-courses.html.twig */
class __TwigTemplate_5f25ba532bcf7cd23e9ab94972564faf9e2fb78a2afd223ba5dea47915a2f9d0 extends Twig_Template
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
        $__internal_90988dc44cae12c17b36862ec459bad54fbfe564e86a124e9c8b5b88474fc4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90988dc44cae12c17b36862ec459bad54fbfe564e86a124e9c8b5b88474fc4ea->enter($__internal_90988dc44cae12c17b36862ec459bad54fbfe564e86a124e9c8b5b88474fc4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/block/related-courses.html.twig"));

        // line 1
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.relatedCourses"), 0)) {
            // line 2
            echo "  ";
            $context["relatedCourseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RelatedCourseSets", array("courseSetId" => (isset($context["courseSetId"]) ? $context["courseSetId"] : $this->getContext($context, "courseSetId")), "count" => 4));
            // line 3
            echo "  ";
            if ( !twig_test_empty((isset($context["relatedCourseSets"]) ? $context["relatedCourseSets"] : $this->getContext($context, "relatedCourseSets")))) {
                // line 4
                echo "    <div class=\"panel panel-default hidden-xs pt10\">
      ";
                // line 5
                $this->loadTemplate("course-set/block/course-block-list.html.twig", "course/block/related-courses.html.twig", 5)->display(array_merge($context, array("courseSets" => (isset($context["relatedCourseSets"]) ? $context["relatedCourseSets"] : $this->getContext($context, "relatedCourseSets")), "ref" => "relatedCourseSets")));
                // line 6
                echo "    </div>
  ";
            }
        }
        
        $__internal_90988dc44cae12c17b36862ec459bad54fbfe564e86a124e9c8b5b88474fc4ea->leave($__internal_90988dc44cae12c17b36862ec459bad54fbfe564e86a124e9c8b5b88474fc4ea_prof);

    }

    public function getTemplateName()
    {
        return "course/block/related-courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  33 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting('course.relatedCourses')|default(0) %}
  {% set relatedCourseSets = data('RelatedCourseSets', { courseSetId: courseSetId, count: 4 }) %}
  {% if relatedCourseSets is not empty %}
    <div class=\"panel panel-default hidden-xs pt10\">
      {% include 'course-set/block/course-block-list.html.twig' with { courseSets: relatedCourseSets , ref:'relatedCourseSets'} %}
    </div>
  {% endif %}
{% endif %}", "course/block/related-courses.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\block\\related-courses.html.twig");
    }
}
