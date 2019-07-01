<?php

/* expression.twig */
class __TwigTemplate_e0260a584e337962f1fbd307fc586d012cb497e142f16c1e3183b768cbfd8e0a extends Twig_Template
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
        $__internal_2ed1daa604bfdb70bb43f2f9a38d938ebd80c03ccaedb654928df11ea3cf6fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed1daa604bfdb70bb43f2f9a38d938ebd80c03ccaedb654928df11ea3cf6fb4->enter($__internal_2ed1daa604bfdb70bb43f2f9a38d938ebd80c03ccaedb654928df11ea3cf6fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal") &&  !$this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "recommended", array())), "html", null, true);
        
        $__internal_2ed1daa604bfdb70bb43f2f9a38d938ebd80c03ccaedb654928df11ea3cf6fb4->leave($__internal_2ed1daa604bfdb70bb43f2f9a38d938ebd80c03ccaedb654928df11ea3cf6fb4_prof);

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
        return new Twig_Source("{{ filter == 'normal' and not courseSet.recommended }}", "expression.twig", "");
    }
}
