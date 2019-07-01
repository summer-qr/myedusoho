<?php

/* expression.twig */
class __TwigTemplate_99b4eb14e9372ad46adfaa2bf75d7973910382fd8f5ddf4434eb03acf00df2ea extends Twig_Template
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
        $__internal_8fdd5c5c51879172bd040a802f4a272e15c6d0f0456b99d7a7df5d3eaedf12d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdd5c5c51879172bd040a802f4a272e15c6d0f0456b99d7a7df5d3eaedf12d8->enter($__internal_8fdd5c5c51879172bd040a802f4a272e15c6d0f0456b99d7a7df5d3eaedf12d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "html", null, true);
        
        $__internal_8fdd5c5c51879172bd040a802f4a272e15c6d0f0456b99d7a7df5d3eaedf12d8->leave($__internal_8fdd5c5c51879172bd040a802f4a272e15c6d0f0456b99d7a7df5d3eaedf12d8_prof);

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
        return new Twig_Source("{{courseSet.id}}", "expression.twig", "");
    }
}
