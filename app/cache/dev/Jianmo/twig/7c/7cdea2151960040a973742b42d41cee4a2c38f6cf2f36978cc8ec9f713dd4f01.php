<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_39ca2522b7116816ecf1513b28832bfb5940be6ea5be1a187a3d1e73edb7f615 extends Twig_Template
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
        $__internal_11a1dfc1dc7408ca2958ab50e30015deeb0de6e9f0c4b577a349a64fa1192ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a1dfc1dc7408ca2958ab50e30015deeb0de6e9f0c4b577a349a64fa1192ed6->enter($__internal_11a1dfc1dc7408ca2958ab50e30015deeb0de6e9f0c4b577a349a64fa1192ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a1dfc1dc7408ca2958ab50e30015deeb0de6e9f0c4b577a349a64fa1192ed6->leave($__internal_11a1dfc1dc7408ca2958ab50e30015deeb0de6e9f0c4b577a349a64fa1192ed6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee3da05cd00c87338ea3e00b2da995304fd80d11f0ca87577f648199d3eafd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3da05cd00c87338ea3e00b2da995304fd80d11f0ca87577f648199d3eafd1e->enter($__internal_ee3da05cd00c87338ea3e00b2da995304fd80d11f0ca87577f648199d3eafd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ee3da05cd00c87338ea3e00b2da995304fd80d11f0ca87577f648199d3eafd1e->leave($__internal_ee3da05cd00c87338ea3e00b2da995304fd80d11f0ca87577f648199d3eafd1e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2827be9a00957ad69160fe36130db2b6a9906c25f05bb7286da3c8111a7259a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2827be9a00957ad69160fe36130db2b6a9906c25f05bb7286da3c8111a7259a->enter($__internal_d2827be9a00957ad69160fe36130db2b6a9906c25f05bb7286da3c8111a7259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d2827be9a00957ad69160fe36130db2b6a9906c25f05bb7286da3c8111a7259a->leave($__internal_d2827be9a00957ad69160fe36130db2b6a9906c25f05bb7286da3c8111a7259a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_269129aa0da3f4b30ec06cb0ddfbc70feeadf303cbd44d08c2aa1af9b3e96da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269129aa0da3f4b30ec06cb0ddfbc70feeadf303cbd44d08c2aa1af9b3e96da1->enter($__internal_269129aa0da3f4b30ec06cb0ddfbc70feeadf303cbd44d08c2aa1af9b3e96da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_269129aa0da3f4b30ec06cb0ddfbc70feeadf303cbd44d08c2aa1af9b3e96da1->leave($__internal_269129aa0da3f4b30ec06cb0ddfbc70feeadf303cbd44d08c2aa1af9b3e96da1_prof);

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
