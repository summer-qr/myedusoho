<?php

/* expression.twig */
class __TwigTemplate_bd6abcf27569215045ce7dc13035bd36e1f0c16204e06ab9d6222cd6c62418c2 extends Twig_Template
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
        $__internal_3e7f41ca2f881dc9487bf9eab5612539d0b1abd39255a02e046c036d7d117da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7f41ca2f881dc9487bf9eab5612539d0b1abd39255a02e046c036d7d117da5->enter($__internal_3e7f41ca2f881dc9487bf9eab5612539d0b1abd39255a02e046c036d7d117da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "html", null, true);
        
        $__internal_3e7f41ca2f881dc9487bf9eab5612539d0b1abd39255a02e046c036d7d117da5->leave($__internal_3e7f41ca2f881dc9487bf9eab5612539d0b1abd39255a02e046c036d7d117da5_prof);

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
        return new Twig_Source("{{classroom.id}}", "expression.twig", "");
    }
}
