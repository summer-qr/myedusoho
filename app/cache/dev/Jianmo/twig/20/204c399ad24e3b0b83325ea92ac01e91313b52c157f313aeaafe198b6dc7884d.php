<?php

/* default/header.html.twig */
class __TwigTemplate_3950fc944d0acb8071a8889b1aa5c36a68e846e7160446496545f3109654567e extends Twig_Template
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
        $__internal_098929708579a40ce2ba1b71cbcc8825fba5630da7ae9fb7d1a94d09ff2526bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098929708579a40ce2ba1b71cbcc8825fba5630da7ae9fb7d1a94d09ff2526bb->enter($__internal_098929708579a40ce2ba1b71cbcc8825fba5630da7ae9fb7d1a94d09ff2526bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/default/header/index.js"));
        // line 2
        $context["navigations"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("NavigationsTree", array());
        // line 3
        echo "
<header class=\"es-header navbar\">
  ";
        // line 5
        $this->loadTemplate("default/header/logo.html.twig", "default/header.html.twig", 5)->display($context);
        // line 6
        echo "  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 8
        $this->loadTemplate("default/top-navigation.html.twig", "default/header.html.twig", 8)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => false)));
        // line 9
        echo "    </ul>
    ";
        // line 10
        $this->loadTemplate("default/header/user-operation.html.twig", "default/header.html.twig", 10)->display($context);
        // line 11
        echo "  </nav>
</header>";
        
        $__internal_098929708579a40ce2ba1b71cbcc8825fba5630da7ae9fb7d1a94d09ff2526bb->leave($__internal_098929708579a40ce2ba1b71cbcc8825fba5630da7ae9fb7d1a94d09ff2526bb_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  41 => 10,  38 => 9,  36 => 8,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do script(['app/js/default/header/index.js']) %}
{% set navigations = data('NavigationsTree', {}) %}

<header class=\"es-header navbar\">
  {% include 'default/header/logo.html.twig' %}
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      {% include 'default/top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: false} %}
    </ul>
    {% include 'default/header/user-operation.html.twig' %}
  </nav>
</header>", "default/header.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\header.html.twig");
    }
}
