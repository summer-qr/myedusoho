<?php

/* expression.twig */
class __TwigTemplate_0b4cbe96761bf0268de8a537c1c96764683af77ca4d62bdf38d8068ecf37903a extends Twig_Template
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
        $__internal_05e1adcded68e90e1575625240c46d7f9ee9ffe0ea7699938071f710a4460cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e1adcded68e90e1575625240c46d7f9ee9ffe0ea7699938071f710a4460cd7->enter($__internal_05e1adcded68e90e1575625240c46d7f9ee9ffe0ea7699938071f710a4460cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env,  !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommended", array()), "html", null, true);
        
        $__internal_05e1adcded68e90e1575625240c46d7f9ee9ffe0ea7699938071f710a4460cd7->leave($__internal_05e1adcded68e90e1575625240c46d7f9ee9ffe0ea7699938071f710a4460cd7_prof);

    }

    public function getTemplateName()
    {
        return "expression.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ not classroom.recommended }}", "expression.twig", "");
    }
}
