<?php

/* expression.twig */
class __TwigTemplate_af15ee5e3398bdbef67865dbda4c14f85ea5b46b2dae3700e4369017c9e9732a extends Twig_Template
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
        $__internal_290eb7fa3f7f6c7457c26a2d21a32187da52757007eb3213933fdabbede77f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290eb7fa3f7f6c7457c26a2d21a32187da52757007eb3213933fdabbede77f67->enter($__internal_290eb7fa3f7f6c7457c26a2d21a32187da52757007eb3213933fdabbede77f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "html", null, true);
        
        $__internal_290eb7fa3f7f6c7457c26a2d21a32187da52757007eb3213933fdabbede77f67->leave($__internal_290eb7fa3f7f6c7457c26a2d21a32187da52757007eb3213933fdabbede77f67_prof);

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
        return new Twig_Source("{{filter}}", "expression.twig", "");
    }
}
