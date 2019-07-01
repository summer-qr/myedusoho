<?php

/* my/learning/course/layout.html.twig */
class __TwigTemplate_520c89b70a296dc7af5e4afa05a9bf872912fd2881aa42c69b46391d706287b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/layout.html.twig", "my/learning/course/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bbf7ec93486afd7637436201f158ec1dd14ab19b72d16e872578bab89b95274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbf7ec93486afd7637436201f158ec1dd14ab19b72d16e872578bab89b95274->enter($__internal_2bbf7ec93486afd7637436201f158ec1dd14ab19b72d16e872578bab89b95274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/learning/course/layout.html.twig"));

        // line 3
        $context["bodyClass"] = "my-course cd-design";
        // line 4
        $context["side_nav"] = "my-learning";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bbf7ec93486afd7637436201f158ec1dd14ab19b72d16e872578bab89b95274->leave($__internal_2bbf7ec93486afd7637436201f158ec1dd14ab19b72d16e872578bab89b95274_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd33e9556c8a30bfcbfd9316a53d74c89fa1ef2f38e78fbd14f7b10fc8df5e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd33e9556c8a30bfcbfd9316a53d74c89fa1ef2f38e78fbd14f7b10fc8df5e4f->enter($__internal_bd33e9556c8a30bfcbfd9316a53d74c89fa1ef2f38e78fbd14f7b10fc8df5e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_bd33e9556c8a30bfcbfd9316a53d74c89fa1ef2f38e78fbd14f7b10fc8df5e4f->leave($__internal_bd33e9556c8a30bfcbfd9316a53d74c89fa1ef2f38e78fbd14f7b10fc8df5e4f_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_207361e7dfdb83690f78ad55a63b581e0e15f89a95ca384578d3200b64de5cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207361e7dfdb83690f78ad55a63b581e0e15f89a95ca384578d3200b64de5cdf->enter($__internal_207361e7dfdb83690f78ad55a63b581e0e15f89a95ca384578d3200b64de5cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "
";
        
        $__internal_207361e7dfdb83690f78ad55a63b581e0e15f89a95ca384578d3200b64de5cdf->leave($__internal_207361e7dfdb83690f78ad55a63b581e0e15f89a95ca384578d3200b64de5cdf_prof);

    }

    public function getTemplateName()
    {
        return "my/learning/course/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  54 => 8,  40 => 6,  33 => 1,  31 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'my/layout.html.twig' %}

{% set bodyClass = 'my-course cd-design' %}
{% set side_nav = 'my-learning' %}

{% block title %}{{'my.learning.course'|trans}} - {{ parent() }}{% endblock %}

{% block main %}

{% endblock %}
", "my/learning/course/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\learning\\course\\layout.html.twig");
    }
}
