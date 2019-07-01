<?php

/* expression.twig */
class __TwigTemplate_1a71c11d9dda10ab71c26fa069c737d2f83773a9990d19f7da7e9154fd6d9655 extends Twig_Template
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
        $__internal_5b74341cff1a2dd38ba3617e66416421b94f047dd6706edf7c98d901b4bba729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b74341cff1a2dd38ba3617e66416421b94f047dd6706edf7c98d901b4bba729->enter($__internal_5b74341cff1a2dd38ba3617e66416421b94f047dd6706edf7c98d901b4bba729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_in_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()), array(0 => "closed", 1 => "draft", 2 => "published")), "html", null, true);
        
        $__internal_5b74341cff1a2dd38ba3617e66416421b94f047dd6706edf7c98d901b4bba729->leave($__internal_5b74341cff1a2dd38ba3617e66416421b94f047dd6706edf7c98d901b4bba729_prof);

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
        return new Twig_Source("{{ courseSet.status in ['closed', 'draft', 'published']}}", "expression.twig", "");
    }
}
