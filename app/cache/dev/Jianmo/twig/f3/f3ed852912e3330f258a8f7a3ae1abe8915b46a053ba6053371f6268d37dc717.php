<?php

/* expression.twig */
class __TwigTemplate_07dd1227b99ddeb3dfd4ecaa6391a5db801255ffcda38628f4accc11af44e0bc extends Twig_Template
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
        $__internal_af728044fee3b9dccf0d8900e212ba3867aa17b441c2902c8f158dc2a8715672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af728044fee3b9dccf0d8900e212ba3867aa17b441c2902c8f158dc2a8715672->enter($__internal_af728044fee3b9dccf0d8900e212ba3867aa17b441c2902c8f158dc2a8715672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo $this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudStatus();
        
        $__internal_af728044fee3b9dccf0d8900e212ba3867aa17b441c2902c8f158dc2a8715672->leave($__internal_af728044fee3b9dccf0d8900e212ba3867aa17b441c2902c8f158dc2a8715672_prof);

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
        return new Twig_Source("{{cloudStatus()}}", "expression.twig", "");
    }
}
