<?php

/* course/tabs/tasks.html.twig */
class __TwigTemplate_35b308839afaf99ac66d211185b8345be592ecfa55e246cb0e8c2d527685a42e extends Twig_Template
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
        $__internal_c1053379b799f104e4b8d1aa5815b52465e0a456bc3c2d761dc3afb3343a6674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1053379b799f104e4b8d1aa5815b52465e0a456bc3c2d761dc3afb3343a6674->enter($__internal_c1053379b799f104e4b8d1aa5815b52465e0a456bc3c2d761dc3afb3343a6674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/tabs/tasks.html.twig"));

        // line 1
        $this->loadTemplate((("course/task-list/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseType", array())) . "-task-list.html.twig"), "course/tabs/tasks.html.twig", 1)->display($context);
        // line 2
        echo "
";
        
        $__internal_c1053379b799f104e4b8d1aa5815b52465e0a456bc3c2d761dc3afb3343a6674->leave($__internal_c1053379b799f104e4b8d1aa5815b52465e0a456bc3c2d761dc3afb3343a6674_prof);

    }

    public function getTemplateName()
    {
        return "course/tabs/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'course/task-list/'~course.courseType~'-task-list.html.twig' %}

", "course/tabs/tasks.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\tabs\\tasks.html.twig");
    }
}
