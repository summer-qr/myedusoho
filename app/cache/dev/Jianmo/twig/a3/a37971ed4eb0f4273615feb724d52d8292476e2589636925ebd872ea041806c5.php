<?php

/* admin/theme/edit.html.twig */
class __TwigTemplate_1b21a86bf8f28a956973156180964cddf4f4200619c98892ced3eaf681e03801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin/theme/base-edit.html.twig", "admin/theme/edit.html.twig", 2);
        $this->blocks = array(
            'theme_nav' => array($this, 'block_theme_nav'),
            'theme_panes' => array($this, 'block_theme_panes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/theme/base-edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0cafbd87c91e8a1de226ac9ee41e20d312a12c87218f604d051bbbe6e2e5641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cafbd87c91e8a1de226ac9ee41e20d312a12c87218f604d051bbbe6e2e5641->enter($__internal_d0cafbd87c91e8a1de226ac9ee41e20d312a12c87218f604d051bbbe6e2e5641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/theme/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0cafbd87c91e8a1de226ac9ee41e20d312a12c87218f604d051bbbe6e2e5641->leave($__internal_d0cafbd87c91e8a1de226ac9ee41e20d312a12c87218f604d051bbbe6e2e5641_prof);

    }

    // line 3
    public function block_theme_nav($context, array $blocks = array())
    {
        $__internal_6c72b6b835581c60d2aff0e3def6382d218be542745880a6edf09a68527362b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c72b6b835581c60d2aff0e3def6382d218be542745880a6edf09a68527362b6->enter($__internal_6c72b6b835581c60d2aff0e3def6382d218be542745880a6edf09a68527362b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme_nav"));

        // line 4
        echo "  <li class=\"active\"><a href=\"#left\" role=\"tab\" data-toggle=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.components"), "html", null, true);
        echo "</a></li>
  <li><a href=\"#top\" role=\"tab\" data-toggle=\"tab\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.top"), "html", null, true);
        echo "</a></li>
  <li><a href=\"#maincolor\" role=\"tab\" data-toggle=\"tab\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.coloring_scheme_btn"), "html", null, true);
        echo "</a></li>
";
        
        $__internal_6c72b6b835581c60d2aff0e3def6382d218be542745880a6edf09a68527362b6->leave($__internal_6c72b6b835581c60d2aff0e3def6382d218be542745880a6edf09a68527362b6_prof);

    }

    // line 9
    public function block_theme_panes($context, array $blocks = array())
    {
        $__internal_675eb3cb900afa2cd92435448960052c19073784dc0aefad999fe5cc2243551c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675eb3cb900afa2cd92435448960052c19073784dc0aefad999fe5cc2243551c->enter($__internal_675eb3cb900afa2cd92435448960052c19073784dc0aefad999fe5cc2243551c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme_panes"));

        // line 10
        echo "  ";
        $this->loadTemplate("admin/theme/tab-panel/components.html.twig", "admin/theme/edit.html.twig", 10)->display(array_merge($context, array("allBlockConfig" => (($this->getAttribute($this->getAttribute(        // line 11
(isset($context["allConfig"]) ? $context["allConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["allConfig"]) ? $context["allConfig"] : null), "blocks", array(), "any", false, true), "left", array()))) : ("")), "blockConfig" => (($this->getAttribute($this->getAttribute(        // line 12
(isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array()))) : ("")), "configKey" => "left", "isActive" => true)));
        // line 16
        echo "  ";
        $this->loadTemplate("admin/theme/tab-panel/nav.html.twig", "admin/theme/edit.html.twig", 16)->display(array_merge($context, array("navigation" => (($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "navigation", array()))) : ("")))));
        // line 17
        echo "  ";
        $this->loadTemplate("admin/theme/tab-panel/maincolor.html.twig", "admin/theme/edit.html.twig", 17)->display(array_merge($context, array("maincolor" => $this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : $this->getContext($context, "themeConfig")), "maincolor", array()), "navigationcolor" => $this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : $this->getContext($context, "themeConfig")), "navigationcolor", array()))));
        
        $__internal_675eb3cb900afa2cd92435448960052c19073784dc0aefad999fe5cc2243551c->leave($__internal_675eb3cb900afa2cd92435448960052c19073784dc0aefad999fe5cc2243551c_prof);

    }

    public function getTemplateName()
    {
        return "admin/theme/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  70 => 16,  68 => 12,  67 => 11,  65 => 10,  59 => 9,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'admin/theme/base-edit.html.twig' %}
{% block theme_nav %}
  <li class=\"active\"><a href=\"#left\" role=\"tab\" data-toggle=\"tab\">{{'admin.setting.theme.manage.components'|trans}}</a></li>
  <li><a href=\"#top\" role=\"tab\" data-toggle=\"tab\">{{'admin.setting.theme.manage.top'|trans}}</a></li>
  <li><a href=\"#maincolor\" role=\"tab\" data-toggle=\"tab\">{{'admin.setting.theme.manage.coloring_scheme_btn'|trans}}</a></li>
{% endblock %}

{% block theme_panes %}
  {% include 'admin/theme/tab-panel/components.html.twig' with {
    allBlockConfig: allConfig.blocks.left|default(),  
    blockConfig: themeConfig.blocks.left|default(),
    configKey: 'left',
    isActive: true,
  }%}
  {% include 'admin/theme/tab-panel/nav.html.twig' with {navigation: themeConfig.navigation|default() }%}
  {% include 'admin/theme/tab-panel/maincolor.html.twig' with {maincolor: themeConfig.maincolor, navigationcolor: themeConfig.navigationcolor} %}
{% endblock %}", "admin/theme/edit.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\theme\\edit.html.twig");
    }
}
