<?php

/* courseset-manage/layout.html.twig */
class __TwigTemplate_acd21af314e4b53e4b00c7d16b508fdb8030056c26eced1f6b291d6520a0d61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("v2/layout.html.twig", "courseset-manage/layout.html.twig", 1);
        $this->blocks = array(
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'sectionClass' => array($this, 'block_sectionClass'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'courseset_header' => array($this, 'block_courseset_header'),
            'navbar' => array($this, 'block_navbar'),
            'course_header' => array($this, 'block_course_header'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "v2/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c21e58604a53cf587da6aabad77013a98ffc941d46594fc9097da0cb802fcfac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21e58604a53cf587da6aabad77013a98ffc941d46594fc9097da0cb802fcfac->enter($__internal_c21e58604a53cf587da6aabad77013a98ffc941d46594fc9097da0cb802fcfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c21e58604a53cf587da6aabad77013a98ffc941d46594fc9097da0cb802fcfac->leave($__internal_c21e58604a53cf587da6aabad77013a98ffc941d46594fc9097da0cb802fcfac_prof);

    }

    // line 3
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_b9167fbf60a271cb73a0317b071754021ae48250f0ff91a0c0806df99aaace57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9167fbf60a271cb73a0317b071754021ae48250f0ff91a0c0806df99aaace57->enter($__internal_b9167fbf60a271cb73a0317b071754021ae48250f0ff91a0c0806df99aaace57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 4
        echo "  ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 20
        echo "  <div class=\"container cd-container\">
    <div class=\"cd-content courseset-manage-body ";
        // line 21
        $this->displayBlock('paddingClass', $context, $blocks);
        echo "\">
      ";
        // line 22
        $this->displayBlock('sidebar', $context, $blocks);
        // line 24
        echo "
      ";
        // line 25
        $this->displayBlock('main', $context, $blocks);
        // line 27
        echo "    </div>
  </div>
";
        
        $__internal_b9167fbf60a271cb73a0317b071754021ae48250f0ff91a0c0806df99aaace57->leave($__internal_b9167fbf60a271cb73a0317b071754021ae48250f0ff91a0c0806df99aaace57_prof);

    }

    // line 4
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_d3d4281bd76796d8ff5a7afb664485bcc287c644c24051be9cdab81b18d692bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d4281bd76796d8ff5a7afb664485bcc287c644c24051be9cdab81b18d692bd->enter($__internal_d3d4281bd76796d8ff5a7afb664485bcc287c644c24051be9cdab81b18d692bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        // line 5
        echo "    <div class=\"";
        $this->displayBlock('sectionClass', $context, $blocks);
        echo "\">
      <div class=\"container cd-container\">
        ";
        // line 7
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('courseset_header', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('course_header', $context, $blocks);
        // line 17
        echo "      </div>
    </div>
  ";
        
        $__internal_d3d4281bd76796d8ff5a7afb664485bcc287c644c24051be9cdab81b18d692bd->leave($__internal_d3d4281bd76796d8ff5a7afb664485bcc287c644c24051be9cdab81b18d692bd_prof);

    }

    // line 5
    public function block_sectionClass($context, array $blocks = array())
    {
        $__internal_b775674d7ca88da394ef4b3998107d614352ca274141a5da4be384b533dca57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b775674d7ca88da394ef4b3998107d614352ca274141a5da4be384b533dca57e->enter($__internal_b775674d7ca88da394ef4b3998107d614352ca274141a5da4be384b533dca57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sectionClass"));

        echo " courseset-header-section ";
        
        $__internal_b775674d7ca88da394ef4b3998107d614352ca274141a5da4be384b533dca57e->leave($__internal_b775674d7ca88da394ef4b3998107d614352ca274141a5da4be384b533dca57e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7c6f8a90c8337862400b1c168d38d187b9e1c40dea25cbcce38f21daf6a419a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6f8a90c8337862400b1c168d38d187b9e1c40dea25cbcce38f21daf6a419a9->enter($__internal_7c6f8a90c8337862400b1c168d38d187b9e1c40dea25cbcce38f21daf6a419a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "          ";
        // line 9
        echo "        ";
        
        $__internal_7c6f8a90c8337862400b1c168d38d187b9e1c40dea25cbcce38f21daf6a419a9->leave($__internal_7c6f8a90c8337862400b1c168d38d187b9e1c40dea25cbcce38f21daf6a419a9_prof);

    }

    // line 10
    public function block_courseset_header($context, array $blocks = array())
    {
        $__internal_4dd6a3d79ecd8ae1263e3f868abcc718758486bf8beddab6d23fbab45a91698a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd6a3d79ecd8ae1263e3f868abcc718758486bf8beddab6d23fbab45a91698a->enter($__internal_4dd6a3d79ecd8ae1263e3f868abcc718758486bf8beddab6d23fbab45a91698a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courseset_header"));

        // line 11
        echo "        ";
        
        $__internal_4dd6a3d79ecd8ae1263e3f868abcc718758486bf8beddab6d23fbab45a91698a->leave($__internal_4dd6a3d79ecd8ae1263e3f868abcc718758486bf8beddab6d23fbab45a91698a_prof);

    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_c278b4d244053d3a0df14ffaf2e28faca46be0da2c5b36dfd701ee3a87de98b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c278b4d244053d3a0df14ffaf2e28faca46be0da2c5b36dfd701ee3a87de98b5->enter($__internal_c278b4d244053d3a0df14ffaf2e28faca46be0da2c5b36dfd701ee3a87de98b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 13
        echo "          ";
        $this->loadTemplate("courseset-manage/navbar.html.twig", "courseset-manage/layout.html.twig", 13)->display($context);
        // line 14
        echo "        ";
        
        $__internal_c278b4d244053d3a0df14ffaf2e28faca46be0da2c5b36dfd701ee3a87de98b5->leave($__internal_c278b4d244053d3a0df14ffaf2e28faca46be0da2c5b36dfd701ee3a87de98b5_prof);

    }

    // line 15
    public function block_course_header($context, array $blocks = array())
    {
        $__internal_403b83a0b0bee61718824672ee74ba6c9fbd300b72b116d1b72dc25014f662c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403b83a0b0bee61718824672ee74ba6c9fbd300b72b116d1b72dc25014f662c3->enter($__internal_403b83a0b0bee61718824672ee74ba6c9fbd300b72b116d1b72dc25014f662c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header"));

        // line 16
        echo "        ";
        
        $__internal_403b83a0b0bee61718824672ee74ba6c9fbd300b72b116d1b72dc25014f662c3->leave($__internal_403b83a0b0bee61718824672ee74ba6c9fbd300b72b116d1b72dc25014f662c3_prof);

    }

    // line 21
    public function block_paddingClass($context, array $blocks = array())
    {
        $__internal_91242acf6b708f053ca4add47c29501722d68db457edb9be4801d4bd29bb6a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91242acf6b708f053ca4add47c29501722d68db457edb9be4801d4bd29bb6a06->enter($__internal_91242acf6b708f053ca4add47c29501722d68db457edb9be4801d4bd29bb6a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paddingClass"));

        echo " courseset-manage-padding ";
        
        $__internal_91242acf6b708f053ca4add47c29501722d68db457edb9be4801d4bd29bb6a06->leave($__internal_91242acf6b708f053ca4add47c29501722d68db457edb9be4801d4bd29bb6a06_prof);

    }

    // line 22
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9b27d36c0aeb70155e580a2b6caeae7054dc921ea39848fd7d1db57ac6fdb6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b27d36c0aeb70155e580a2b6caeae7054dc921ea39848fd7d1db57ac6fdb6b7->enter($__internal_9b27d36c0aeb70155e580a2b6caeae7054dc921ea39848fd7d1db57ac6fdb6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 23
        echo "      ";
        
        $__internal_9b27d36c0aeb70155e580a2b6caeae7054dc921ea39848fd7d1db57ac6fdb6b7->leave($__internal_9b27d36c0aeb70155e580a2b6caeae7054dc921ea39848fd7d1db57ac6fdb6b7_prof);

    }

    // line 25
    public function block_main($context, array $blocks = array())
    {
        $__internal_8f63e251f7adeb84d636e4cc20d0137e1677c43d57a7e3b2aa3c327357aeb5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f63e251f7adeb84d636e4cc20d0137e1677c43d57a7e3b2aa3c327357aeb5a7->enter($__internal_8f63e251f7adeb84d636e4cc20d0137e1677c43d57a7e3b2aa3c327357aeb5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 26
        echo "      ";
        
        $__internal_8f63e251f7adeb84d636e4cc20d0137e1677c43d57a7e3b2aa3c327357aeb5a7->leave($__internal_8f63e251f7adeb84d636e4cc20d0137e1677c43d57a7e3b2aa3c327357aeb5a7_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 26,  201 => 25,  194 => 23,  188 => 22,  176 => 21,  169 => 16,  163 => 15,  156 => 14,  153 => 13,  147 => 12,  140 => 11,  134 => 10,  127 => 9,  125 => 8,  119 => 7,  107 => 5,  98 => 17,  95 => 15,  92 => 12,  89 => 10,  87 => 7,  81 => 5,  75 => 4,  66 => 27,  64 => 25,  61 => 24,  59 => 22,  55 => 21,  52 => 20,  49 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'v2/layout.html.twig' %}

{% block full_content %}
  {% block top_content %}
    <div class=\"{% block sectionClass %} courseset-header-section {% endblock %}\">
      <div class=\"container cd-container\">
        {% block breadcrumb %}
          {# 面包屑courseset 和 course 分开 #}
        {% endblock %}
        {% block courseset_header %}
        {% endblock %}
        {% block navbar %}
          {% include 'courseset-manage/navbar.html.twig' %}
        {% endblock %}
        {% block course_header %}
        {% endblock %}
      </div>
    </div>
  {% endblock %}
  <div class=\"container cd-container\">
    <div class=\"cd-content courseset-manage-body {% block paddingClass %} courseset-manage-padding {% endblock %}\">
      {% block sidebar %}
      {% endblock %}

      {% block main %}
      {% endblock %}
    </div>
  </div>
{% endblock %}
", "courseset-manage/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\layout.html.twig");
    }
}
