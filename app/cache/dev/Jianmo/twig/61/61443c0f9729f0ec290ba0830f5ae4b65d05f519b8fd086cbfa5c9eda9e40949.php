<?php

/* admin/edu-cloud/layout.html.twig */
class __TwigTemplate_9b55e3e7b78794d6ddb24e4dca3936128e87cd5e3bee6745cf6bf249e59d369d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/edu-cloud/layout.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7899fe1bd6d04101f46fdb16a135105685a991942022dbb3c041d480a04675da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7899fe1bd6d04101f46fdb16a135105685a991942022dbb3c041d480a04675da->enter($__internal_7899fe1bd6d04101f46fdb16a135105685a991942022dbb3c041d480a04675da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edu-cloud/layout.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_my_cloud";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7899fe1bd6d04101f46fdb16a135105685a991942022dbb3c041d480a04675da->leave($__internal_7899fe1bd6d04101f46fdb16a135105685a991942022dbb3c041d480a04675da_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_b2045f5f03d4e26c0ef986ccae23ca5f8be39e7dde6349c0e14195a170dadcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2045f5f03d4e26c0ef986ccae23ca5f8be39e7dde6349c0e14195a170dadcd3->enter($__internal_b2045f5f03d4e26c0ef986ccae23ca5f8be39e7dde6349c0e14195a170dadcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
  ";
        // line 7
        $this->displayBlock('maincontent', $context, $blocks);
        
        $__internal_b2045f5f03d4e26c0ef986ccae23ca5f8be39e7dde6349c0e14195a170dadcd3->leave($__internal_b2045f5f03d4e26c0ef986ccae23ca5f8be39e7dde6349c0e14195a170dadcd3_prof);

    }

    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_c9cde8c5d15d5e9e82e021d32a39de32615da1fc1bbe9da2ea7f20d4d5c77dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cde8c5d15d5e9e82e021d32a39de32615da1fc1bbe9da2ea7f20d4d5c77dc8->enter($__internal_c9cde8c5d15d5e9e82e021d32a39de32615da1fc1bbe9da2ea7f20d4d5c77dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        
        $__internal_c9cde8c5d15d5e9e82e021d32a39de32615da1fc1bbe9da2ea7f20d4d5c77dc8->leave($__internal_c9cde8c5d15d5e9e82e021d32a39de32615da1fc1bbe9da2ea7f20d4d5c77dc8_prof);

    }

    public function getTemplateName()
    {
        return "admin/edu-cloud/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% set menu = 'admin_setting_my_cloud' %}

{% block main %}

  {% block maincontent %}{% endblock %}
{% endblock %}
", "admin/edu-cloud/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\edu-cloud\\layout.html.twig");
    }
}
