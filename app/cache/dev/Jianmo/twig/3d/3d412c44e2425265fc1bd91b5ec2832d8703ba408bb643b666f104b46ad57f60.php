<?php

/* expression.twig */
class __TwigTemplate_22e47a4e73eb660f8e97f924a635f12416a8928c5f673bcc8028f6d6c15eb6a2 extends Twig_Template
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
        $__internal_379b67c52f7ed47cb303bf19125b1d7b7e11aae9a3affb9a4a0b72975a4ad7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379b67c52f7ed47cb303bf19125b1d7b7e11aae9a3affb9a4a0b72975a4ad7de->enter($__internal_379b67c52f7ed47cb303bf19125b1d7b7e11aae9a3affb9a4a0b72975a4ad7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) != "published"), "html", null, true);
        
        $__internal_379b67c52f7ed47cb303bf19125b1d7b7e11aae9a3affb9a4a0b72975a4ad7de->leave($__internal_379b67c52f7ed47cb303bf19125b1d7b7e11aae9a3affb9a4a0b72975a4ad7de_prof);

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
        return new Twig_Source("{{ classroom.status != 'published' }}", "expression.twig", "");
    }
}
