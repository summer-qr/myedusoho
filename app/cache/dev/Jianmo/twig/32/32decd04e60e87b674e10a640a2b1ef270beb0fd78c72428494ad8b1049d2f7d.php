<?php

/* admin/system/share.html.twig */
class __TwigTemplate_f0e107a172ce1d0c3bb710873dc663d34e135feeb0014a65cf960b4c57d6fa00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/share.html.twig", 1);
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
        $__internal_bbfcf57a172df359e8fafc1d3fd3dda0f92d547f006b62da20bd85a508adcaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfcf57a172df359e8fafc1d3fd3dda0f92d547f006b62da20bd85a508adcaa7->enter($__internal_bbfcf57a172df359e8fafc1d3fd3dda0f92d547f006b62da20bd85a508adcaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/share.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_share";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbfcf57a172df359e8fafc1d3fd3dda0f92d547f006b62da20bd85a508adcaa7->leave($__internal_bbfcf57a172df359e8fafc1d3fd3dda0f92d547f006b62da20bd85a508adcaa7_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e7c66881dd3583750b55c24d0178489d79de0e05e41c471bbe74c016df30023a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c66881dd3583750b55c24d0178489d79de0e05e41c471bbe74c016df30023a->enter($__internal_e7c66881dd3583750b55c24d0178489d79de0e05e41c471bbe74c016df30023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<meta http-equiv=\"pragma\" content=\"no-cache\" />
  ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  ";
        // line 9
        $this->loadTemplate("admin/system/default-share-content.html.twig", "admin/system/share.html.twig", 9)->display($context);
        // line 10
        echo "
";
        
        $__internal_e7c66881dd3583750b55c24d0178489d79de0e05e41c471bbe74c016df30023a->leave($__internal_e7c66881dd3583750b55c24d0178489d79de0e05e41c471bbe74c016df30023a_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  51 => 9,  46 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_setting_share' %}

{% block main %}
<meta http-equiv=\"pragma\" content=\"no-cache\" />
  {{ web_macro.flash_messages() }}

  {% include 'admin/system/default-share-content.html.twig' %}

{% endblock %}", "admin/system/share.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\share.html.twig");
    }
}
