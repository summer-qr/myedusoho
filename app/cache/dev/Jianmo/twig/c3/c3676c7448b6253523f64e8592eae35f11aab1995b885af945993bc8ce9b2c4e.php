<?php

/* expression.twig */
class __TwigTemplate_07ae71d5fc700806e1b3a1e1440c2aef00ac79c95da8fed70c3e64c329abcbab extends Twig_Template
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
        $__internal_c146b285c3e19ffaf82a79fad5698d017683495ef697b9c783cca12f57dec465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c146b285c3e19ffaf82a79fad5698d017683495ef697b9c783cca12f57dec465->enter($__internal_c146b285c3e19ffaf82a79fad5698d017683495ef697b9c783cca12f57dec465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "draft"), "html", null, true);
        
        $__internal_c146b285c3e19ffaf82a79fad5698d017683495ef697b9c783cca12f57dec465->leave($__internal_c146b285c3e19ffaf82a79fad5698d017683495ef697b9c783cca12f57dec465_prof);

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
        return new Twig_Source("{{ classroom.status=='draft' }}", "expression.twig", "");
    }
}
