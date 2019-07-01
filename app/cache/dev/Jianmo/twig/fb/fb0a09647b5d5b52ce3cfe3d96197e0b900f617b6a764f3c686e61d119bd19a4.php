<?php

/* expression.twig */
class __TwigTemplate_c5f5179edea32bd50f27fd45724118d915aca0133666065cf471e8f68b2999e4 extends Twig_Template
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
        $__internal_3642f8f82c2643f74a33fb0018c6de65c731cc4b5d8b0bee4436bda469a2f0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3642f8f82c2643f74a33fb0018c6de65c731cc4b5d8b0bee4436bda469a2f0b7->enter($__internal_3642f8f82c2643f74a33fb0018c6de65c731cc4b5d8b0bee4436bda469a2f0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudStatus() && (($this->getAttribute($this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudInfo(), "ai.face", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudInfo(), "ai.face", array(), "array"), 0)) : (0))) && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("feature.face_enabled")), "html", null, true);
        
        $__internal_3642f8f82c2643f74a33fb0018c6de65c731cc4b5d8b0bee4436bda469a2f0b7->leave($__internal_3642f8f82c2643f74a33fb0018c6de65c731cc4b5d8b0bee4436bda469a2f0b7_prof);

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
        return new Twig_Source("{{cloudStatus() and cloud_info()['ai.face']|default(0) and setting('feature.face_enabled')}}", "expression.twig", "");
    }
}
