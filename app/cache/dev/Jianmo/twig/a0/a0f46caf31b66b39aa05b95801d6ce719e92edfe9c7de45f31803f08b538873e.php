<?php

/* admin/marketing/login.html.twig */
class __TwigTemplate_fbf1f2b6bcfea52bfd022661f51219360ab0f33b2002ae6038beb19df875085a extends Twig_Template
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
        $__internal_2e5ea3d6ef67bc8f6a0840a95ac745789e7f3354cf278c2eb4f52c538d026185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5ea3d6ef67bc8f6a0840a95ac745789e7f3354cf278c2eb4f52c538d026185->enter($__internal_2e5ea3d6ef67bc8f6a0840a95ac745789e7f3354cf278c2eb4f52c538d026185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/marketing/login.html.twig"));

        // line 4
        echo "
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
  ";
        // line 13
        echo (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"));
        echo "
</body>

";
        
        $__internal_2e5ea3d6ef67bc8f6a0840a95ac745789e7f3354cf278c2eb4f52c538d026185->leave($__internal_2e5ea3d6ef67bc8f6a0840a95ac745789e7f3354cf278c2eb4f52c538d026185_prof);

    }

    public function getTemplateName()
    {
        return "admin/marketing/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  22 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends 'admin/layout.html.twig' %}

{% set menu = '_marketing_wyx_page' %} #}

<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
  {{form|raw}}
</body>

", "admin/marketing/login.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\marketing\\login.html.twig");
    }
}
