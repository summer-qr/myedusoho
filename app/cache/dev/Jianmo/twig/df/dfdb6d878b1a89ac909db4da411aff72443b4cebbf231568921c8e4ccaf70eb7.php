<?php

/* expression.twig */
class __TwigTemplate_37f06655fb4f9f56f10f5ca60e7e80dd99453ff100a36a489f158f0c9286fc44 extends Twig_Template
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
        $__internal_167f59186836d5f70044bcc95260f5276784cdadca432ce7a9e2ed0a91f10052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167f59186836d5f70044bcc95260f5276784cdadca432ce7a9e2ed0a91f10052->enter($__internal_167f59186836d5f70044bcc95260f5276784cdadca432ce7a9e2ed0a91f10052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal") && $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "recommended", array())), "html", null, true);
        
        $__internal_167f59186836d5f70044bcc95260f5276784cdadca432ce7a9e2ed0a91f10052->leave($__internal_167f59186836d5f70044bcc95260f5276784cdadca432ce7a9e2ed0a91f10052_prof);

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
        return new Twig_Source("{{ filter == 'normal' and courseSet.recommended }}", "expression.twig", "");
    }
}
