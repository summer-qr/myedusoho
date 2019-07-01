<?php

/* expression.twig */
class __TwigTemplate_7e91c8fd39e557c4680513b402aef5162f2e10f05db79d68e965545aec31bfba extends Twig_Template
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
        $__internal_1e938d4edf73d4b9b14e45cec9372271e734b759d7547f48b6874780e0092c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e938d4edf73d4b9b14e45cec9372271e734b759d7547f48b6874780e0092c8c->enter($__internal_1e938d4edf73d4b9b14e45cec9372271e734b759d7547f48b6874780e0092c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ( !($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1) &&  !$this->env->getExtension('AppBundle\Twig\WebExtension')->isWithoutNetwork()), "html", null, true);
        
        $__internal_1e938d4edf73d4b9b14e45cec9372271e734b759d7547f48b6874780e0092c8c->leave($__internal_1e938d4edf73d4b9b14e45cec9372271e734b759d7547f48b6874780e0092c8c_prof);

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
        return new Twig_Source("{{not (setting('copyright.thirdCopyright', false) == 1) and not is_without_network()}}", "expression.twig", "");
    }
}
