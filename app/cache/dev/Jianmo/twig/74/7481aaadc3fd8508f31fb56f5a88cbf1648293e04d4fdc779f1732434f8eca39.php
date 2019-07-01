<?php

/* open-course-manage/layout.html.twig */
class __TwigTemplate_8f9e79a9b3eb4eca294b65a2a80e187cd424b5f01789c24befc4bcda0699d183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/layout.html.twig", "open-course-manage/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'courseset_header' => array($this, 'block_courseset_header'),
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'main' => array($this, 'block_main'),
            'main_heading_class' => array($this, 'block_main_heading_class'),
            'main_heading' => array($this, 'block_main_heading'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9013af19c91c0ebb3529627685437161843f90d858a0d9896f31dfff343266e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9013af19c91c0ebb3529627685437161843f90d858a0d9896f31dfff343266e4->enter($__internal_9013af19c91c0ebb3529627685437161843f90d858a0d9896f31dfff343266e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "open-course-manage/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9013af19c91c0ebb3529627685437161843f90d858a0d9896f31dfff343266e4->leave($__internal_9013af19c91c0ebb3529627685437161843f90d858a0d9896f31dfff343266e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1e571848a396ea04c9c9eed8a9cc77f8ee3a49acabe7b13a7b931159e4e16b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e571848a396ea04c9c9eed8a9cc77f8ee3a49acabe7b13a7b931159e4e16b3->enter($__internal_c1e571848a396ea04c9c9eed8a9cc77f8ee3a49acabe7b13a7b931159e4e16b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.course_manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_c1e571848a396ea04c9c9eed8a9cc77f8ee3a49acabe7b13a7b931159e4e16b3->leave($__internal_c1e571848a396ea04c9c9eed8a9cc77f8ee3a49acabe7b13a7b931159e4e16b3_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6578578976149f29000c979e8ab438c52f404b1f7b4b0fd0a4e0810e62d03d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6578578976149f29000c979e8ab438c52f404b1f7b4b0fd0a4e0810e62d03d40->enter($__internal_6578578976149f29000c979e8ab438c52f404b1f7b4b0fd0a4e0810e62d03d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li class=\"text-overflow\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set_menu"), "html", null, true);
        echo "</a></li>
    <li class=\"active text-overflow courseset-header-section__breadcrumb\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</li>
  </ol>
";
        
        $__internal_6578578976149f29000c979e8ab438c52f404b1f7b4b0fd0a4e0810e62d03d40->leave($__internal_6578578976149f29000c979e8ab438c52f404b1f7b4b0fd0a4e0810e62d03d40_prof);

    }

    // line 12
    public function block_courseset_header($context, array $blocks = array())
    {
        $__internal_0debe9848832dfa70273202da05328901aaf17debc06b26b4a681cabe32839b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0debe9848832dfa70273202da05328901aaf17debc06b26b4a681cabe32839b0->enter($__internal_0debe9848832dfa70273202da05328901aaf17debc06b26b4a681cabe32839b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courseset_header"));

        // line 13
        echo "  ";
        $this->loadTemplate("open-course-manage/header.html.twig", "open-course-manage/layout.html.twig", 13)->display($context);
        
        $__internal_0debe9848832dfa70273202da05328901aaf17debc06b26b4a681cabe32839b0->leave($__internal_0debe9848832dfa70273202da05328901aaf17debc06b26b4a681cabe32839b0_prof);

    }

    // line 16
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_a7c3fd21a1e35a9994d1cd6dfcaf2073e9121c5cdae4181bf34ee3fe89a63db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c3fd21a1e35a9994d1cd6dfcaf2073e9121c5cdae4181bf34ee3fe89a63db3->enter($__internal_a7c3fd21a1e35a9994d1cd6dfcaf2073e9121c5cdae4181bf34ee3fe89a63db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_a7c3fd21a1e35a9994d1cd6dfcaf2073e9121c5cdae4181bf34ee3fe89a63db3->leave($__internal_a7c3fd21a1e35a9994d1cd6dfcaf2073e9121c5cdae4181bf34ee3fe89a63db3_prof);

    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_789a0a3d4b550ae52aa1c3411fbe832bf91983d05d27cddf3ea074e88cc8596e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789a0a3d4b550ae52aa1c3411fbe832bf91983d05d27cddf3ea074e88cc8596e->enter($__internal_789a0a3d4b550ae52aa1c3411fbe832bf91983d05d27cddf3ea074e88cc8596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 20
        echo "  ";
        $this->loadTemplate("open-course-manage/sidebar.html.twig", "open-course-manage/layout.html.twig", 20)->display($context);
        
        $__internal_789a0a3d4b550ae52aa1c3411fbe832bf91983d05d27cddf3ea074e88cc8596e->leave($__internal_789a0a3d4b550ae52aa1c3411fbe832bf91983d05d27cddf3ea074e88cc8596e_prof);

    }

    // line 23
    public function block_paddingClass($context, array $blocks = array())
    {
        $__internal_dfd75b5bcabae7356b97c0eb19b75f30a06ebd605ad025afe75d66737fa4f670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd75b5bcabae7356b97c0eb19b75f30a06ebd605ad025afe75d66737fa4f670->enter($__internal_dfd75b5bcabae7356b97c0eb19b75f30a06ebd605ad025afe75d66737fa4f670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paddingClass"));

        
        $__internal_dfd75b5bcabae7356b97c0eb19b75f30a06ebd605ad025afe75d66737fa4f670->leave($__internal_dfd75b5bcabae7356b97c0eb19b75f30a06ebd605ad025afe75d66737fa4f670_prof);

    }

    // line 25
    public function block_main($context, array $blocks = array())
    {
        $__internal_6de93f03b0d8fe15cd11139f63f8a0e56f77dfc8d9f5d57e38983b9afb51baa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de93f03b0d8fe15cd11139f63f8a0e56f77dfc8d9f5d57e38983b9afb51baa0->enter($__internal_6de93f03b0d8fe15cd11139f63f8a0e56f77dfc8d9f5d57e38983b9afb51baa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 26
        echo "  <div class=\"cd-main\">
    <div class=\"cd-main__heading open-course-heading ";
        // line 27
        $this->displayBlock('main_heading_class', $context, $blocks);
        echo "\">
      ";
        // line 28
        $this->displayBlock('main_heading', $context, $blocks);
        // line 33
        echo "    </div>
    <div class=\"cd-main__body\">
      ";
        // line 35
        $this->displayBlock('main_body', $context, $blocks);
        // line 37
        echo "    </div>
  </div>
";
        
        $__internal_6de93f03b0d8fe15cd11139f63f8a0e56f77dfc8d9f5d57e38983b9afb51baa0->leave($__internal_6de93f03b0d8fe15cd11139f63f8a0e56f77dfc8d9f5d57e38983b9afb51baa0_prof);

    }

    // line 27
    public function block_main_heading_class($context, array $blocks = array())
    {
        $__internal_46057d256d2a169e6d4b79f1121aaf7d129dee66805ff55dee84872f74ce456d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46057d256d2a169e6d4b79f1121aaf7d129dee66805ff55dee84872f74ce456d->enter($__internal_46057d256d2a169e6d4b79f1121aaf7d129dee66805ff55dee84872f74ce456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_heading_class"));

        
        $__internal_46057d256d2a169e6d4b79f1121aaf7d129dee66805ff55dee84872f74ce456d->leave($__internal_46057d256d2a169e6d4b79f1121aaf7d129dee66805ff55dee84872f74ce456d_prof);

    }

    // line 28
    public function block_main_heading($context, array $blocks = array())
    {
        $__internal_e47f0c735e188b474190c6060771038137a8a1e7b11f87d093d93b58dc1d04c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47f0c735e188b474190c6060771038137a8a1e7b11f87d093d93b58dc1d04c6->enter($__internal_e47f0c735e188b474190c6060771038137a8a1e7b11f87d093d93b58dc1d04c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_heading"));

        // line 29
        echo "        <div class=\"cd-main__title open-course-heading__title\">
          ";
        // line 30
        $this->displayBlock('page_title', $context, $blocks);
        // line 31
        echo "        </div>
      ";
        
        $__internal_e47f0c735e188b474190c6060771038137a8a1e7b11f87d093d93b58dc1d04c6->leave($__internal_e47f0c735e188b474190c6060771038137a8a1e7b11f87d093d93b58dc1d04c6_prof);

    }

    // line 30
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_949965da041dae9f414537a834f0c332df72078802eb30ef3a1cf6f5f6b3e114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949965da041dae9f414537a834f0c332df72078802eb30ef3a1cf6f5f6b3e114->enter($__internal_949965da041dae9f414537a834f0c332df72078802eb30ef3a1cf6f5f6b3e114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_949965da041dae9f414537a834f0c332df72078802eb30ef3a1cf6f5f6b3e114->leave($__internal_949965da041dae9f414537a834f0c332df72078802eb30ef3a1cf6f5f6b3e114_prof);

    }

    // line 35
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_f4eadba83ebf490a98c1434ab9f8213640f5540424850951f3291276650d4689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4eadba83ebf490a98c1434ab9f8213640f5540424850951f3291276650d4689->enter($__internal_f4eadba83ebf490a98c1434ab9f8213640f5540424850951f3291276650d4689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 36
        echo "      ";
        
        $__internal_f4eadba83ebf490a98c1434ab9f8213640f5540424850951f3291276650d4689->leave($__internal_f4eadba83ebf490a98c1434ab9f8213640f5540424850951f3291276650d4689_prof);

    }

    public function getTemplateName()
    {
        return "open-course-manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 36,  206 => 35,  195 => 30,  187 => 31,  185 => 30,  182 => 29,  176 => 28,  165 => 27,  156 => 37,  154 => 35,  150 => 33,  148 => 28,  144 => 27,  141 => 26,  135 => 25,  124 => 23,  116 => 20,  110 => 19,  99 => 16,  91 => 13,  85 => 12,  73 => 8,  67 => 7,  64 => 6,  58 => 5,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'courseset-manage/layout.html.twig' %}

{% block title %}{{'my.teaching.open_course.course_manage'|trans}} - {{ parent() }}{% endblock %}

{% block breadcrumb %}
  <ol class=\"breadcrumb breadcrumb-o\">
    <li class=\"text-overflow\"><a href=\"{{ path('my_teaching_course_sets') }}\">{{ 'my.teaching.course_set_menu'|trans }}</a></li>
    <li class=\"active text-overflow courseset-header-section__breadcrumb\" title=\"{{ course.title }}\">{{ course.title }}</li>
  </ol>
{% endblock %}

{% block courseset_header %}
  {% include 'open-course-manage/header.html.twig' %}
{% endblock %}

{% block navbar %}
{% endblock %}

{% block sidebar %}
  {% include 'open-course-manage/sidebar.html.twig' %}
{% endblock %}

{% block paddingClass %}{% endblock %}

{% block main %}
  <div class=\"cd-main\">
    <div class=\"cd-main__heading open-course-heading {% block main_heading_class %}{% endblock %}\">
      {% block main_heading %}
        <div class=\"cd-main__title open-course-heading__title\">
          {% block page_title %}{% endblock %}
        </div>
      {% endblock %}
    </div>
    <div class=\"cd-main__body\">
      {% block main_body %}
      {% endblock %}
    </div>
  </div>
{% endblock %}

", "open-course-manage/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\open-course-manage\\layout.html.twig");
    }
}
