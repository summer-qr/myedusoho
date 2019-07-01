<?php

/* admin/navigation/index.html.twig */
class __TwigTemplate_fee596d19915a13e9720a9e3a8b7acafdf30c4a55a5245253c02daad8c570cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/navigation/index.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3d2207b2651556607722ae6c0bd2781eea346b416bdd5d47be03a24462b3896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d2207b2651556607722ae6c0bd2781eea346b416bdd5d47be03a24462b3896->enter($__internal_a3d2207b2651556607722ae6c0bd2781eea346b416bdd5d47be03a24462b3896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/navigation/index.html.twig"));

        // line 3
        $context["script_controller"] = "navigation/index";
        // line 5
        $context["menu"] = (("admin_" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) . "_navigation");
        // line 6
        $context["types"] = array("top" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.top"), "foot" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.foot"), "friendlyLink" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.friendlyLink"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d2207b2651556607722ae6c0bd2781eea346b416bdd5d47be03a24462b3896->leave($__internal_a3d2207b2651556607722ae6c0bd2781eea346b416bdd5d47be03a24462b3896_prof);

    }

    // line 8
    public function block_page_buttons($context, array $blocks = array())
    {
        $__internal_f668ad6dbd412c4b79e035f57b8e60868f06093fb7924b31661cdb9dd15fdcc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f668ad6dbd412c4b79e035f57b8e60868f06093fb7924b31661cdb9dd15fdcc7->enter($__internal_f668ad6dbd412c4b79e035f57b8e60868f06093fb7924b31661cdb9dd15fdcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_buttons"));

        echo " 
    <button class=\"btn btn-success btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_create", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\">
        ";
        // line 10
        if (($this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array") == $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.friendlyLink"))) {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.add_type_btn", array("%types[type]%" => $this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"))), "html", null, true);
            echo "
        ";
        } else {
            // line 13
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.add_type_nav_btn", array("%types[type]%" => $this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"))), "html", null, true);
            echo "
        ";
        }
        // line 15
        echo "    </button>
";
        
        $__internal_f668ad6dbd412c4b79e035f57b8e60868f06093fb7924b31661cdb9dd15fdcc7->leave($__internal_f668ad6dbd412c4b79e035f57b8e60868f06093fb7924b31661cdb9dd15fdcc7_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_17d8c34dc119fed4cffb7b4ce5876635248f26396d2909f4e7738d3f05ffd8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d8c34dc119fed4cffb7b4ce5876635248f26396d2909f4e7738d3f05ffd8ec->enter($__internal_17d8c34dc119fed4cffb7b4ce5876635248f26396d2909f4e7738d3f05ffd8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "
";
        // line 20
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "foot")) {
            // line 21
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block", array("category" => "theme"));
            // line 22
            echo "<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.foot.tips", array("%url%" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))));
            echo "</div>
";
        } elseif ((        // line 23
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "friendlyLink")) {
            // line 24
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_theme");
            // line 25
            echo "<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.friendlyLink.tips", array("%url%" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))));
            echo "
</div>
";
        }
        // line 28
        echo "
<table id=\"navigation-table\" class=\"table table-striped table-hover navigation-table sortable-list\">
  <thead>
    <tr>
      <th width=\"50%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.name"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.new_windows"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status"), "html", null, true);
        echo "</th>  
      <th width=\"30%\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.operation"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
    
  ";
        // line 39
        $this->loadTemplate("admin/navigation/tbody.html.twig", "admin/navigation/index.html.twig", 39)->display($context);
        // line 40
        echo "</table>
    
<div class=\"alert alert-info\">
  ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.tips");
        echo "
</div>

";
        
        $__internal_17d8c34dc119fed4cffb7b4ce5876635248f26396d2909f4e7738d3f05ffd8ec->leave($__internal_17d8c34dc119fed4cffb7b4ce5876635248f26396d2909f4e7738d3f05ffd8ec_prof);

    }

    public function getTemplateName()
    {
        return "admin/navigation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 40,  130 => 39,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  105 => 28,  98 => 25,  96 => 24,  94 => 23,  89 => 22,  87 => 21,  85 => 20,  82 => 19,  76 => 18,  68 => 15,  62 => 13,  56 => 11,  54 => 10,  50 => 9,  42 => 8,  35 => 1,  33 => 6,  31 => 5,  29 => 3,  11 => 1,);
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

{% set script_controller = 'navigation/index' %}

{% set menu = 'admin_'~type~'_navigation' %}
{% set types = {top:'admin.setting.navigation.top'|trans, foot:'admin.setting.navigation.foot'|trans, friendlyLink:'admin.setting.navigation.friendlyLink'|trans} %}

{% block page_buttons %} 
    <button class=\"btn btn-success btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_navigation_create', {type: type}) }}\">
        {% if types[type] == 'admin.setting.navigation.friendlyLink'|trans %}
            {{'admin.setting.navigation.add_type_btn'|trans({'%types[type]%': types[type] })}}
        {% else %}
            {{'admin.setting.navigation.add_type_nav_btn'|trans({'%types[type]%': types[type] })}}
        {% endif %}
    </button>
{% endblock %}

{% block main %}

{% if type == 'foot' %}
{% set url = path('admin_block', {category:'theme'}) %}
<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> {{ 'admin.setting.navigation.foot.tips'|trans({'%url%': url })|raw }}</div>
{% elseif type == 'friendlyLink' %}
{% set url = path('admin_setting_theme') %}
<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i>{{ 'admin.setting.navigation.friendlyLink.tips'|trans({'%url%': url})|raw }}
</div>
{% endif %}

<table id=\"navigation-table\" class=\"table table-striped table-hover navigation-table sortable-list\">
  <thead>
    <tr>
      <th width=\"50%\">{{'admin.setting.navigation.name'|trans}}</th>
      <th width=\"10%\">{{'admin.setting.navigation.new_windows'|trans}}</th>
      <th width=\"10%\">{{'admin.setting.navigation.status'|trans}}</th>  
      <th width=\"30%\">{{'admin.setting.navigation.operation'|trans}}</th>
    </tr>
  </thead>
    
  {% include 'admin/navigation/tbody.html.twig' %}
</table>
    
<div class=\"alert alert-info\">
  {{ 'admin.setting.navigation.tips'|trans|raw }}
</div>

{% endblock %}
", "admin/navigation/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\navigation\\index.html.twig");
    }
}
