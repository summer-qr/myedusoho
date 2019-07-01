<?php

/* expression.twig */
class __TwigTemplate_70e172f57cb1a6007299a5343db09f64c1fd24ed9f909c1e2c76b4af4b4382e4 extends Twig_Template
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
        $__internal_70949d8fbed8a7d7b0b53049918bf6683233033cfaa8ba2fb44bd6438e08248b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70949d8fbed8a7d7b0b53049918bf6683233033cfaa8ba2fb44bd6438e08248b->enter($__internal_70949d8fbed8a7d7b0b53049918bf6683233033cfaa8ba2fb44bd6438e08248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published"), "html", null, true);
        
        $__internal_70949d8fbed8a7d7b0b53049918bf6683233033cfaa8ba2fb44bd6438e08248b->leave($__internal_70949d8fbed8a7d7b0b53049918bf6683233033cfaa8ba2fb44bd6438e08248b_prof);

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
        return new Twig_Source("{{ classroom.status == 'published' }}", "expression.twig", "");
    }
}
