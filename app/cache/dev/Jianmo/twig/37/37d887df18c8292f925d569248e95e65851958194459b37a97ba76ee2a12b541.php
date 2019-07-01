<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d3dae0ac03ec7ec313168d9b905195b5578a6b44d89e40b341348edd8b2b8c6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf79232aba2bd8ebbd8e97e4d39302a271fcdd5e1be7af1433b22a9ccaa29224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf79232aba2bd8ebbd8e97e4d39302a271fcdd5e1be7af1433b22a9ccaa29224->enter($__internal_bf79232aba2bd8ebbd8e97e4d39302a271fcdd5e1be7af1433b22a9ccaa29224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf79232aba2bd8ebbd8e97e4d39302a271fcdd5e1be7af1433b22a9ccaa29224->leave($__internal_bf79232aba2bd8ebbd8e97e4d39302a271fcdd5e1be7af1433b22a9ccaa29224_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29381c8403743c36b4988bd884ba38905795df07638a688efd402e43de9bd641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29381c8403743c36b4988bd884ba38905795df07638a688efd402e43de9bd641->enter($__internal_29381c8403743c36b4988bd884ba38905795df07638a688efd402e43de9bd641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29381c8403743c36b4988bd884ba38905795df07638a688efd402e43de9bd641->leave($__internal_29381c8403743c36b4988bd884ba38905795df07638a688efd402e43de9bd641_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04f3cde6c9415fa5f9f5e7a7aeb634bf70448686b29f1cadd3e91ce818a768b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f3cde6c9415fa5f9f5e7a7aeb634bf70448686b29f1cadd3e91ce818a768b1->enter($__internal_04f3cde6c9415fa5f9f5e7a7aeb634bf70448686b29f1cadd3e91ce818a768b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04f3cde6c9415fa5f9f5e7a7aeb634bf70448686b29f1cadd3e91ce818a768b1->leave($__internal_04f3cde6c9415fa5f9f5e7a7aeb634bf70448686b29f1cadd3e91ce818a768b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f48fa24dd299aa02e1d032f0d4dab73d0dd0791124dbf34df7f2225305bc5ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48fa24dd299aa02e1d032f0d4dab73d0dd0791124dbf34df7f2225305bc5ec7->enter($__internal_f48fa24dd299aa02e1d032f0d4dab73d0dd0791124dbf34df7f2225305bc5ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f48fa24dd299aa02e1d032f0d4dab73d0dd0791124dbf34df7f2225305bc5ec7->leave($__internal_f48fa24dd299aa02e1d032f0d4dab73d0dd0791124dbf34df7f2225305bc5ec7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
