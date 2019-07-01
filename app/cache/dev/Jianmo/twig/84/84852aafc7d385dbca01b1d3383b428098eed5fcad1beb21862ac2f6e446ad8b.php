<?php

/* course/task-list/parts/list-li-title-template.html.twig */
class __TwigTemplate_dec3d782f0f93b5c5fb9423b20b319650cd490a0281c010277c95c1de6382fc5 extends Twig_Template
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
        $__internal_95474a065459756768515a1d3a12316ee63ea06e2130615700ca255183308d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95474a065459756768515a1d3a12316ee63ea06e2130615700ca255183308d66->enter($__internal_95474a065459756768515a1d3a12316ee63ea06e2130615700ca255183308d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/task-list/parts/list-li-title-template.html.twig"));

        // line 1
        if (twig_test_empty((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")))) {
            // line 2
            echo "  <span display-if=\"{isTaskFree}\" class=\"label label-success mr10\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.free"), "html", null, true);
            echo "</span>
  
  ";
            // line 4
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "tryLookable", array())) {
                // line 5
                echo "    <tmp hide-if=\"{isTaskFree}\">
      <span display-if=\"{isCloudVideo}\" class=\"label label-warning mrm\">";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.try_lookable"), "html", null, true);
                echo "</span>
    </tmp>
  ";
            }
            // line 9
            echo "
";
        } else {
            // line 11
            echo "  <span display-if=\"{isOptional}\" class=\"label label-info mr10\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.is_optional"), "html", null, true);
            echo "</span>
";
        }
        // line 13
        echo "{getTaskName}";
        
        $__internal_95474a065459756768515a1d3a12316ee63ea06e2130615700ca255183308d66->leave($__internal_95474a065459756768515a1d3a12316ee63ea06e2130615700ca255183308d66_prof);

    }

    public function getTemplateName()
    {
        return "course/task-list/parts/list-li-title-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  45 => 11,  41 => 9,  35 => 6,  32 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if member is empty %}
  <span display-if=\"{isTaskFree}\" class=\"label label-success mr10\">{{ 'course.catalogue.task_status.free'|trans }}</span>
  
  {% if course.tryLookable %}
    <tmp hide-if=\"{isTaskFree}\">
      <span display-if=\"{isCloudVideo}\" class=\"label label-warning mrm\">{{ 'course.catalogue.task_status.try_lookable'|trans }}</span>
    </tmp>
  {% endif %}

{% else %}
  <span display-if=\"{isOptional}\" class=\"label label-info mr10\">{{ 'course.catalogue.task_status.is_optional'|trans }}</span>
{% endif %}
{getTaskName}", "course/task-list/parts/list-li-title-template.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\task-list\\parts\\list-li-title-template.html.twig");
    }
}
