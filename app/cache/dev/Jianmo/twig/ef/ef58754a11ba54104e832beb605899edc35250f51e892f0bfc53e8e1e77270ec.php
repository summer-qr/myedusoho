<?php

/* course/widgets/student-activity.html.twig */
class __TwigTemplate_fc412fdca9621357acc0021e70847ec2c41efd940428520408aa509c8dabbd15 extends Twig_Template
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
        $__internal_4c2eb3a3f832e6d821e60ec843e4ffdb244cae9452e75d0a5ad1c86b0a81113c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2eb3a3f832e6d821e60ec843e4ffdb244cae9452e75d0a5ad1c86b0a81113c->enter($__internal_4c2eb3a3f832e6d821e60ec843e4ffdb244cae9452e75d0a5ad1c86b0a81113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/student-activity.html.twig"));

        // line 1
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), false)) : (false))) {
            // line 2
            echo "  ";
            $context["learns"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestStatuses", array("count" => 5, "mode" => "simple", "objectType" => "course", "objectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())));
        } else {
            // line 4
            echo "  ";
            $context["learns"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestStatuses", array("count" => 5, "mode" => "simple", "objectType" => "courseSet", "objectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array())));
        }
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("status/status-block.html.twig", "course/widgets/student-activity.html.twig", 7)->display(array_merge($context, array("learns" => (isset($context["learns"]) ? $context["learns"] : $this->getContext($context, "learns")))));
        
        $__internal_4c2eb3a3f832e6d821e60ec843e4ffdb244cae9452e75d0a5ad1c86b0a81113c->leave($__internal_4c2eb3a3f832e6d821e60ec843e4ffdb244cae9452e75d0a5ad1c86b0a81113c_prof);

    }

    public function getTemplateName()
    {
        return "course/widgets/student-activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  32 => 6,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if member|default(false)  %}
  {% set learns = data('LatestStatuses', {count:5, mode:'simple', objectType: 'course', objectId: course.id}) %}
{% else %}
  {% set learns = data('LatestStatuses', {count:5, mode:'simple', objectType: 'courseSet', objectId: course.courseSetId }) %}
{% endif %}

{% include \"status/status-block.html.twig\" with {learns: learns} %}
", "course/widgets/student-activity.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\widgets\\student-activity.html.twig");
    }
}
