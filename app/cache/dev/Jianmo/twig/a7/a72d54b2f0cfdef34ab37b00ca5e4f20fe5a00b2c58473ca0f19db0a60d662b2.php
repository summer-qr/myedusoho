<?php

/* admin/theme/base-edit.html.twig */
class __TwigTemplate_40d62f68a00f6fd79bf11a0a898108f5cd8f737e1c2493dec157d3ca790f4631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/theme/base-edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'theme_nav' => array($this, 'block_theme_nav'),
            'theme_panes' => array($this, 'block_theme_panes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30676baa84e5b1436aaa2e2932f52f87119bc58f62c91f06b4fcd03fbea86482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30676baa84e5b1436aaa2e2932f52f87119bc58f62c91f06b4fcd03fbea86482->enter($__internal_30676baa84e5b1436aaa2e2932f52f87119bc58f62c91f06b4fcd03fbea86482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/theme/base-edit.html.twig"));

        // line 2
        $context["script_controller"] = "topxiaadminbundle/controller/theme/edit";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30676baa84e5b1436aaa2e2932f52f87119bc58f62c91f06b4fcd03fbea86482->leave($__internal_30676baa84e5b1436aaa2e2932f52f87119bc58f62c91f06b4fcd03fbea86482_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de1f0269c849eccb45291bde41433522108092c372dd4cc11d9696fef8c3b852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1f0269c849eccb45291bde41433522108092c372dd4cc11d9696fef8c3b852->enter($__internal_de1f0269c849eccb45291bde41433522108092c372dd4cc11d9696fef8c3b852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage"), "html", null, true);
        echo "
";
        
        $__internal_de1f0269c849eccb45291bde41433522108092c372dd4cc11d9696fef8c3b852->leave($__internal_de1f0269c849eccb45291bde41433522108092c372dd4cc11d9696fef8c3b852_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d4cc2d407a35fdb56987e47b8468ec2e7fd2e741a6a524e08e689101da332fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4cc2d407a35fdb56987e47b8468ec2e7fd2e741a6a524e08e689101da332fa->enter($__internal_9d4cc2d407a35fdb56987e47b8468ec2e7fd2e741a6a524e08e689101da332fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "  <style>
    body {
      padding-bottom: 0
    }
    .list-group {
      height: 244px;
      overflow:auto;
    }

    .iframe-box {
      z-index: 1024;
      position: relative;
      border: 1px solid #ccc;
    }

    .iframe-box:after {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
    }

    .radios, .checkboxs {
      padding-top: 20px;
      vertical-align: middle;
    }

    .mod-cpanel-basic-color {
      width: 85px;
      height: 25px;
      border: 1px solid #aaa;
      cursor: pointer;
    }

    .edit-sort {
      color: #aaa;
      margin-right: 20px;
    }

    .edit-sort:hover {
      color: #444;
    }
  </style>
  <body style=\"background: #eeeff0\">
    <script id=\"theme-config\" type=\"text/x-handlebars-template\">";
        // line 53
        echo twig_jsonencode_filter((isset($context["themeConfig"]) ? $context["themeConfig"] : $this->getContext($context, "themeConfig")));
        echo "</script>
    <script id=\"theme-all-config\" type=\"text/x-handlebars-template\">";
        // line 54
        echo twig_jsonencode_filter((isset($context["allConfig"]) ? $context["allConfig"] : $this->getContext($context, "allConfig")));
        echo "</script>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"col-md-12\">
          <a class=\"navbar-brand\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.theme_edit"), "html", null, true);
        echo "</a>
          <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_theme");
        echo "\"><i class=\"glyphicon glyphicon-remove\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.theme_cancel"), "html", null, true);
        echo "</a></li>
          <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_confirm_themes_config", array("uri" => (isset($context["themeUri"]) ? $context["themeUri"] : $this->getContext($context, "themeUri")))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-ok\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.theme_ok"), "html", null, true);
        echo "</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class=\"container\">
      <div class=\"col-md-12\">
        <!-- Nav tabs -->
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          ";
        // line 71
        $this->displayBlock('theme_nav', $context, $blocks);
        // line 73
        echo "          <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reset_currentTheme_config", array("uri" => (isset($context["themeUri"]) ? $context["themeUri"] : $this->getContext($context, "themeUri")))), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.all_reset"), "html", null, true);
        echo "</a>
        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\" id=\"theme-edit-content\" data-url=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_save_themes_config");
        echo "\">
          ";
        // line 78
        $this->displayBlock('theme_panes', $context, $blocks);
        // line 80
        echo "        </div>
        
      </div>
    </div>

    ";
        // line 85
        $context["iframeUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_show");
        // line 86
        echo "    <div class=\"iframe-box\">
      <iframe src=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["iframeUrl"]) ? $context["iframeUrl"] : $this->getContext($context, "iframeUrl")), "html", null, true);
        echo "\" marginheight=\"0\" marginwidth=\"0\" frameborder=\"0\" scrolling=\"no\" width=\"100%\" id=\"iframepage\" name=\"iframepage\">
      </iframe>
    </div>
    ";
        // line 90
        $this->loadTemplate("old-script_boot.html.twig", "admin/theme/base-edit.html.twig", 90)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 91
        echo "    <div id=\"modal\" class=\"modal\" ></div>
  </body>
";
        
        $__internal_9d4cc2d407a35fdb56987e47b8468ec2e7fd2e741a6a524e08e689101da332fa->leave($__internal_9d4cc2d407a35fdb56987e47b8468ec2e7fd2e741a6a524e08e689101da332fa_prof);

    }

    // line 71
    public function block_theme_nav($context, array $blocks = array())
    {
        $__internal_4f511323ed5986a4085d2214a418d8bdb3e0c2da3a216dd43d15ed0e7b5d3440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f511323ed5986a4085d2214a418d8bdb3e0c2da3a216dd43d15ed0e7b5d3440->enter($__internal_4f511323ed5986a4085d2214a418d8bdb3e0c2da3a216dd43d15ed0e7b5d3440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme_nav"));

        // line 72
        echo "          ";
        
        $__internal_4f511323ed5986a4085d2214a418d8bdb3e0c2da3a216dd43d15ed0e7b5d3440->leave($__internal_4f511323ed5986a4085d2214a418d8bdb3e0c2da3a216dd43d15ed0e7b5d3440_prof);

    }

    // line 78
    public function block_theme_panes($context, array $blocks = array())
    {
        $__internal_b2737247cd47dfad4d544d5591e357d8e61d27b100c308156a16e3e4348b7408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2737247cd47dfad4d544d5591e357d8e61d27b100c308156a16e3e4348b7408->enter($__internal_b2737247cd47dfad4d544d5591e357d8e61d27b100c308156a16e3e4348b7408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theme_panes"));

        // line 79
        echo "          ";
        
        $__internal_b2737247cd47dfad4d544d5591e357d8e61d27b100c308156a16e3e4348b7408->leave($__internal_b2737247cd47dfad4d544d5591e357d8e61d27b100c308156a16e3e4348b7408_prof);

    }

    public function getTemplateName()
    {
        return "admin/theme/base-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 79,  207 => 78,  200 => 72,  194 => 71,  185 => 91,  183 => 90,  177 => 87,  174 => 86,  172 => 85,  165 => 80,  163 => 78,  159 => 77,  149 => 73,  147 => 71,  133 => 62,  127 => 61,  122 => 59,  114 => 54,  110 => 53,  62 => 7,  56 => 6,  46 => 4,  40 => 3,  33 => 1,  31 => 2,  11 => 1,);
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
{% set script_controller = 'topxiaadminbundle/controller/theme/edit' %}
{% block title %}
    {{ 'admin.setting.theme.manage'|trans }}
{% endblock %}
{% block body %}
  <style>
    body {
      padding-bottom: 0
    }
    .list-group {
      height: 244px;
      overflow:auto;
    }

    .iframe-box {
      z-index: 1024;
      position: relative;
      border: 1px solid #ccc;
    }

    .iframe-box:after {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
    }

    .radios, .checkboxs {
      padding-top: 20px;
      vertical-align: middle;
    }

    .mod-cpanel-basic-color {
      width: 85px;
      height: 25px;
      border: 1px solid #aaa;
      cursor: pointer;
    }

    .edit-sort {
      color: #aaa;
      margin-right: 20px;
    }

    .edit-sort:hover {
      color: #444;
    }
  </style>
  <body style=\"background: #eeeff0\">
    <script id=\"theme-config\" type=\"text/x-handlebars-template\">{{ themeConfig|json_encode|raw }}</script>
    <script id=\"theme-all-config\" type=\"text/x-handlebars-template\">{{ allConfig|json_encode|raw }}</script>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"col-md-12\">
          <a class=\"navbar-brand\">{{'admin.setting.theme.manage.theme_edit'|trans}}</a>
          <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"{{ path('admin_setting_theme') }}\"><i class=\"glyphicon glyphicon-remove\"></i>{{'admin.setting.theme.manage.theme_cancel'|trans}}</a></li>
          <li><a href=\"{{ path('admin_confirm_themes_config',{uri:themeUri}) }}\"><i class=\"glyphicon glyphicon-ok\"></i> {{'admin.setting.theme.manage.theme_ok'|trans}}</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class=\"container\">
      <div class=\"col-md-12\">
        <!-- Nav tabs -->
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          {% block theme_nav %}
          {% endblock %}
          <a href=\"{{ path('admin_reset_currentTheme_config', {uri:themeUri}) }}\" class=\"btn btn-primary pull-right\">{{'admin.setting.theme.manage.all_reset'|trans}}</a>
        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\" id=\"theme-edit-content\" data-url=\"{{ path('admin_save_themes_config') }}\">
          {% block theme_panes %}
          {% endblock %}
        </div>
        
      </div>
    </div>

    {% set iframeUrl = path('admin_themes_show') %}
    <div class=\"iframe-box\">
      <iframe src=\"{{ iframeUrl }}\" marginheight=\"0\" marginwidth=\"0\" frameborder=\"0\" scrolling=\"no\" width=\"100%\" id=\"iframepage\" name=\"iframepage\">
      </iframe>
    </div>
    {% include 'old-script_boot.html.twig' with {script_main: asset('bundles/topxiaadmin/js/admin-app.js')} %}
    <div id=\"modal\" class=\"modal\" ></div>
  </body>
{% endblock %}", "admin/theme/base-edit.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\theme\\base-edit.html.twig");
    }
}
