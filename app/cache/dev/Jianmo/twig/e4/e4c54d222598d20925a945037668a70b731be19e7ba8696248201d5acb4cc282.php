<?php

/* admin/edu-cloud/overview/index.html.twig */
class __TwigTemplate_6a8a56a0b256e4ad4822f4a1a088f477716b63763f3c996e6f423efe45f650eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/edu-cloud/overview/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ec80b6dd2c2f894655f0b58e3fbdfab4d2673db08dc58821516f447a0eb8368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec80b6dd2c2f894655f0b58e3fbdfab4d2673db08dc58821516f447a0eb8368->enter($__internal_6ec80b6dd2c2f894655f0b58e3fbdfab4d2673db08dc58821516f447a0eb8368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edu-cloud/overview/index.html.twig"));

        // line 3
        $context["menu"] = "admin_my_cloud_overview";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ec80b6dd2c2f894655f0b58e3fbdfab4d2673db08dc58821516f447a0eb8368->leave($__internal_6ec80b6dd2c2f894655f0b58e3fbdfab4d2673db08dc58821516f447a0eb8368_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_23876eda9e7d1bd575b5c8c01f9508b59c7fad8376e8175b3dc7502cd262df59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23876eda9e7d1bd575b5c8c01f9508b59c7fad8376e8175b3dc7502cd262df59->enter($__internal_23876eda9e7d1bd575b5c8c01f9508b59c7fad8376e8175b3dc7502cd262df59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        if ((($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "error", array()), "")) : (""))) {
            // line 7
            echo "  ";
            $this->loadTemplate("admin/edu-cloud/overview/not-access.html.twig", "admin/edu-cloud/overview/index.html.twig", 7)->display($context);
        } elseif (($this->getAttribute(        // line 8
(isset($context["overview"]) ? $context["overview"] : $this->getContext($context, "overview")), "enabled", array()) == false)) {
            // line 9
            echo "  ";
            $this->loadTemplate("admin/edu-cloud/overview/disabled.html.twig", "admin/edu-cloud/overview/index.html.twig", 9)->display($context);
        } elseif ((($this->getAttribute(        // line 10
(isset($context["overview"]) ? $context["overview"] : $this->getContext($context, "overview")), "accessCloud", array()) == false) || $this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial())) {
            // line 11
            echo "  ";
            $this->loadTemplate("admin/edu-cloud/overview/not-access.html.twig", "admin/edu-cloud/overview/index.html.twig", 11)->display($context);
        } else {
            // line 13
            echo "  ";
            $this->loadTemplate("admin/edu-cloud/overview/normal-use.html.twig", "admin/edu-cloud/overview/index.html.twig", 13)->display($context);
        }
        
        $__internal_23876eda9e7d1bd575b5c8c01f9508b59c7fad8376e8175b3dc7502cd262df59->leave($__internal_23876eda9e7d1bd575b5c8c01f9508b59c7fad8376e8175b3dc7502cd262df59_prof);

    }

    public function getTemplateName()
    {
        return "admin/edu-cloud/overview/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  55 => 11,  53 => 10,  50 => 9,  48 => 8,  45 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_my_cloud_overview' %}

{% block main %}
{% if overview.error|default('') %}
  {% include 'admin/edu-cloud/overview/not-access.html.twig' %}
{% elseif overview.enabled == false %}
  {% include 'admin/edu-cloud/overview/disabled.html.twig' %}
{% elseif overview.accessCloud == false or is_trial() %}
  {% include 'admin/edu-cloud/overview/not-access.html.twig' %}
{% else %}
  {% include 'admin/edu-cloud/overview/normal-use.html.twig' %}
{% endif %}
{% endblock %}", "admin/edu-cloud/overview/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\edu-cloud\\overview\\index.html.twig");
    }
}
