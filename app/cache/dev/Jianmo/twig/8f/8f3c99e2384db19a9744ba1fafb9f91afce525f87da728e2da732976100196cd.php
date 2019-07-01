<?php

/* expression.twig */
class __TwigTemplate_7ecae5a900e3b7e669fb6a9bb73c81fa66939b611721a2779df88dcd6849a11a extends Twig_Template
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
        $__internal_306d603c9c51ad54f863afdf55c6811b94482fb741d4a489a42116ef77835710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306d603c9c51ad54f863afdf55c6811b94482fb741d4a489a42116ef77835710->enter($__internal_306d603c9c51ad54f863afdf55c6811b94482fb741d4a489a42116ef77835710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommended", array()), "html", null, true);
        
        $__internal_306d603c9c51ad54f863afdf55c6811b94482fb741d4a489a42116ef77835710->leave($__internal_306d603c9c51ad54f863afdf55c6811b94482fb741d4a489a42116ef77835710_prof);

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
        return new Twig_Source("{{ classroom.recommended }}", "expression.twig", "");
    }
}
