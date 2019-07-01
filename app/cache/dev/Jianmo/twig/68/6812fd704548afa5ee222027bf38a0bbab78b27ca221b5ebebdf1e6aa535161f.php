<?php

/* expression.twig */
class __TwigTemplate_1c34f25b4cf2dcf739deafb5562eb66503bb4addf8f9735564911e7e22a700ff extends Twig_Template
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
        $__internal_5dbb86f1da4125923ada9a4b82c8b44996ad8f4f0faa2f73d7b4c92814ab1a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbb86f1da4125923ada9a4b82c8b44996ad8f4f0faa2f73d7b4c92814ab1a8c->enter($__internal_5dbb86f1da4125923ada9a4b82c8b44996ad8f4f0faa2f73d7b4c92814ab1a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_mobile_iap", "0"), "html", null, true);
        
        $__internal_5dbb86f1da4125923ada9a4b82c8b44996ad8f4f0faa2f73d7b4c92814ab1a8c->leave($__internal_5dbb86f1da4125923ada9a4b82c8b44996ad8f4f0faa2f73d7b4c92814ab1a8c_prof);

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
        return new Twig_Source("{{setting('magic.enable_mobile_iap', '0')}}", "expression.twig", "");
    }
}
