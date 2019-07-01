<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b72222b884b4a53933e4b17c8d845e0c56a0a9109cc794e40e7b0985113ecbd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_972380cc1490011eb03087e31028a633b09cd6d60eb7b5c8d5cf38b2fb4f6cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972380cc1490011eb03087e31028a633b09cd6d60eb7b5c8d5cf38b2fb4f6cd3->enter($__internal_972380cc1490011eb03087e31028a633b09cd6d60eb7b5c8d5cf38b2fb4f6cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_972380cc1490011eb03087e31028a633b09cd6d60eb7b5c8d5cf38b2fb4f6cd3->leave($__internal_972380cc1490011eb03087e31028a633b09cd6d60eb7b5c8d5cf38b2fb4f6cd3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_410fb337aaac0fd5c74e4b8c1fbcc4a7f2b7b1b1cb3cc152529652502a5ea3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410fb337aaac0fd5c74e4b8c1fbcc4a7f2b7b1b1cb3cc152529652502a5ea3bd->enter($__internal_410fb337aaac0fd5c74e4b8c1fbcc4a7f2b7b1b1cb3cc152529652502a5ea3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_410fb337aaac0fd5c74e4b8c1fbcc4a7f2b7b1b1cb3cc152529652502a5ea3bd->leave($__internal_410fb337aaac0fd5c74e4b8c1fbcc4a7f2b7b1b1cb3cc152529652502a5ea3bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0016318048a4cbce07eb6dfcbbd92a2ad3dcf514689ae534f0d044fdd92ec197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0016318048a4cbce07eb6dfcbbd92a2ad3dcf514689ae534f0d044fdd92ec197->enter($__internal_0016318048a4cbce07eb6dfcbbd92a2ad3dcf514689ae534f0d044fdd92ec197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0016318048a4cbce07eb6dfcbbd92a2ad3dcf514689ae534f0d044fdd92ec197->leave($__internal_0016318048a4cbce07eb6dfcbbd92a2ad3dcf514689ae534f0d044fdd92ec197_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c4def8ca19fdb2a7debd6387a01502a797a64c7f88d4c97a374409b30f3263d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4def8ca19fdb2a7debd6387a01502a797a64c7f88d4c97a374409b30f3263d->enter($__internal_3c4def8ca19fdb2a7debd6387a01502a797a64c7f88d4c97a374409b30f3263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3c4def8ca19fdb2a7debd6387a01502a797a64c7f88d4c97a374409b30f3263d->leave($__internal_3c4def8ca19fdb2a7debd6387a01502a797a64c7f88d4c97a374409b30f3263d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
