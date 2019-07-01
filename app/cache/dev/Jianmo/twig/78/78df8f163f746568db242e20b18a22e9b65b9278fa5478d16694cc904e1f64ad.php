<?php

/* expression.twig */
class __TwigTemplate_8c8494c8024b95d907f4d36d641fc3542064ef059caeaf83ef93b79052241ff2 extends Twig_Template
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
        $__internal_9c15816f09b4d36d47effcc51a69d3182f6512f2ede29640bfcc277c96e38b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c15816f09b4d36d47effcc51a69d3182f6512f2ede29640bfcc277c96e38b93->enter($__internal_9c15816f09b4d36d47effcc51a69d3182f6512f2ede29640bfcc277c96e38b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) != "published"), "html", null, true);
        
        $__internal_9c15816f09b4d36d47effcc51a69d3182f6512f2ede29640bfcc277c96e38b93->leave($__internal_9c15816f09b4d36d47effcc51a69d3182f6512f2ede29640bfcc277c96e38b93_prof);

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
        return new Twig_Source("{{courseSet.status != 'published'}}", "expression.twig", "");
    }
}
