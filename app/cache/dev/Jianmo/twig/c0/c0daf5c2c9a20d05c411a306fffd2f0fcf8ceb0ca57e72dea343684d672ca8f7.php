<?php

/* default/base-index.html.twig */
class __TwigTemplate_5f11148cf8e64d888fd580eda7ec64f36bea75ff780589d4ce28ee82919678d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/base-index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee9707c056739fdee1abd95484bc0e4e0fc685bcb18629149bb6a34e58a34641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9707c056739fdee1abd95484bc0e4e0fc685bcb18629149bb6a34e58a34641->enter($__internal_ee9707c056739fdee1abd95484bc0e4e0fc685bcb18629149bb6a34e58a34641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/base-index.html.twig"));

        // line 6
        $context["appDownload"] = (($this->env->getExtension('AppBundle\Twig\WebExtension')->isESCopyright() && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled", null)) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage());
        // line 7
        $context["bodyClass"] = (((isset($context["appDownload"]) ? $context["appDownload"] : $this->getContext($context, "appDownload"))) ? ("homepage has-app") : ("homepage"));
        // line 8
        $context["siteNav"] = "/";
        // line 10
        $context["_target_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        // line 12
        $context["isIndex"] = true;
        // line 13
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee9707c056739fdee1abd95484bc0e4e0fc685bcb18629149bb6a34e58a34641->leave($__internal_ee9707c056739fdee1abd95484bc0e4e0fc685bcb18629149bb6a34e58a34641_prof);

    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_1f280e0d833e36785571532fd7b59d2ee96daa5d3ab23a6c7c0ad807817e5ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f280e0d833e36785571532fd7b59d2ee96daa5d3ab23a6c7c0ad807817e5ef6->enter($__internal_1f280e0d833e36785571532fd7b59d2ee96daa5d3ab23a6c7c0ad807817e5ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_1f280e0d833e36785571532fd7b59d2ee96daa5d3ab23a6c7c0ad807817e5ef6->leave($__internal_1f280e0d833e36785571532fd7b59d2ee96daa5d3ab23a6c7c0ad807817e5ef6_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_8e09ed2e7767b7efc7df13a14e8067d438884c948b91502c4aa333e2bc891916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e09ed2e7767b7efc7df13a14e8067d438884c948b91502c4aa333e2bc891916->enter($__internal_8e09ed2e7767b7efc7df13a14e8067d438884c948b91502c4aa333e2bc891916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_8e09ed2e7767b7efc7df13a14e8067d438884c948b91502c4aa333e2bc891916->leave($__internal_8e09ed2e7767b7efc7df13a14e8067d438884c948b91502c4aa333e2bc891916_prof);

    }

    // line 15
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_2d2def4bfa57ec30348dd4e68785fbef29132d13248bdb51356f256cd85f117b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2def4bfa57ec30348dd4e68785fbef29132d13248bdb51356f256cd85f117b->enter($__internal_2d2def4bfa57ec30348dd4e68785fbef29132d13248bdb51356f256cd85f117b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 16
        echo "  ";
        if ((isset($context["appDownload"]) ? $context["appDownload"] : $this->getContext($context, "appDownload"))) {
            // line 17
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:appDownload"));
            echo "
  ";
        }
        // line 19
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "default/base-index.html.twig", 20)->display(array_merge($context, array("mobile_tool_bar" => "index")));
        
        $__internal_2d2def4bfa57ec30348dd4e68785fbef29132d13248bdb51356f256cd85f117b->leave($__internal_2d2def4bfa57ec30348dd4e68785fbef29132d13248bdb51356f256cd85f117b_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a6536be1b769fd7bf669098bbee43002c075e0651f2acbf68d2f629e9eb6f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6536be1b769fd7bf669098bbee43002c075e0651f2acbf68d2f629e9eb6f22->enter($__internal_3a6536be1b769fd7bf669098bbee43002c075e0651f2acbf68d2f629e9eb6f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3a6536be1b769fd7bf669098bbee43002c075e0651f2acbf68d2f629e9eb6f22->leave($__internal_3a6536be1b769fd7bf669098bbee43002c075e0651f2acbf68d2f629e9eb6f22_prof);

    }

    public function getTemplateName()
    {
        return "default/base-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  92 => 20,  89 => 19,  83 => 17,  80 => 16,  74 => 15,  62 => 4,  50 => 3,  43 => 1,  41 => 13,  39 => 12,  37 => 10,  35 => 8,  33 => 7,  31 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}
{% block description %}{{ setting('site.seo_description') }}{% endblock %}

{% set appDownload = is_ES_copyright() and setting('mobile.enabled', null) and is_show_mobile_page() %}
{% set bodyClass = appDownload ? 'homepage has-app' : 'homepage' %}
{% set siteNav = '/' %}

{% set _target_path = path('homepage') %}

{% set isIndex = true %}
{% set consultDisplay = true %}

{% block full_content %}
  {% if appDownload  %}
    {{ render(controller('AppBundle:Default:appDownload')) }}
  {% endif %}
  {% block content %}{% endblock %}
  {% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'index' } %}
{% endblock %}
", "default/base-index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\base-index.html.twig");
    }
}
