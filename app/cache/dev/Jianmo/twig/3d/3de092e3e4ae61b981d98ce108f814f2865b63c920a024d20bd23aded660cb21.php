<?php

/* admin/system/optimize.html.twig */
class __TwigTemplate_721ce5374417124fc9d9fae9daa4045273dd56b62a0534a207b4fdc4b6d9b6e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/optimize.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f419d8efeab0bc241168a1e2f536dbf3230d0b4dc6a9c1b1e4261986d930aaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f419d8efeab0bc241168a1e2f536dbf3230d0b4dc6a9c1b1e4261986d930aaf9->enter($__internal_f419d8efeab0bc241168a1e2f536dbf3230d0b4dc6a9c1b1e4261986d930aaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/optimize.html.twig"));

        // line 3
        $context["menu"] = "admin_optimize_settings";
        // line 5
        $context["script_controller"] = "optimize/optimize";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f419d8efeab0bc241168a1e2f536dbf3230d0b4dc6a9c1b1e4261986d930aaf9->leave($__internal_f419d8efeab0bc241168a1e2f536dbf3230d0b4dc6a9c1b1e4261986d930aaf9_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_9b8c74209147340773f9d6dca7fe4568b8960d91e790f23196d563e76b0d3d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8c74209147340773f9d6dca7fe4568b8960d91e790f23196d563e76b0d3d96->enter($__internal_9b8c74209147340773f9d6dca7fe4568b8960d91e790f23196d563e76b0d3d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.refresh_cache"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
  \t<p>
      ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.refresh_cache_tips"), "html", null, true);
        echo "
    </p>
    <p >
  \t\t<button id=\"removecache\" class=\"btn btn-primary fr \" data-url=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_optimize_remove_cache");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.refresh_cache"), "html", null, true);
        echo "</button>
  \t</p>
  </div>
</div>

\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t    <h3 class=\"panel-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.optimize_disk_space"), "html", null, true);
        echo "</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p>
\t       ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.optimize_disk_space_tips"), "html", null, true);
        echo "
\t    </p>
\t    <p >
\t  \t\t<button id=\"removeTmp\" class=\"btn btn-primary fr\" data-url=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_optimize_remove_tmp");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.optimize_disk_space"), "html", null, true);
        echo "</button>
\t  \t</p>
\t  </div>
\t</div>


<div class=\"panel panel-default\" style=\"display:none\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.db_backup_and_download"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
   \t<p>
       ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.db_backup_and_download_tips"), "html", null, true);
        echo "<span class=\"text-info\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.optimize_disk_space"), "html", null, true);
        echo "</span>。
    </p>
    <p>
  \t\t<button id=\"backupDatabase\" class=\"btn btn-primary fr\" data-url=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_optimize_backupdb");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.db_backup_and_download"), "html", null, true);
        echo "</button>
  \t</p>
  \t<p>
  \t\t<span id=\"dbbackup\" class=\"glyphicon glyphicon-download-alt hide\"><a id=\"dbdownload\" href=\"#\" target=\"_blank\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_optimize.db_download"), "html", null, true);
        echo "</a></span>
  \t</p>
  </div>
</div>

";
        
        $__internal_9b8c74209147340773f9d6dca7fe4568b8960d91e790f23196d563e76b0d3d96->leave($__internal_9b8c74209147340773f9d6dca7fe4568b8960d91e790f23196d563e76b0d3d96_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/optimize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 51,  120 => 48,  112 => 45,  105 => 41,  92 => 33,  86 => 30,  79 => 26,  67 => 19,  61 => 16,  54 => 12,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_optimize_settings' %}

{% set script_controller = 'optimize/optimize' %}

{% block main %}

\t{{ web_macro.flash_messages() }}
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">{{'admin.system_optimize.refresh_cache'|trans}}</h3>
  </div>
  <div class=\"panel-body\">
  \t<p>
      {{'admin.system_optimize.refresh_cache_tips'|trans}}
    </p>
    <p >
  \t\t<button id=\"removecache\" class=\"btn btn-primary fr \" data-url=\"{{ url('admin_optimize_remove_cache') }}\">{{'admin.system_optimize.refresh_cache'|trans}}</button>
  \t</p>
  </div>
</div>

\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t    <h3 class=\"panel-title\">{{'admin.system_optimize.optimize_disk_space'|trans}}</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p>
\t       {{'admin.system_optimize.optimize_disk_space_tips'|trans}}
\t    </p>
\t    <p >
\t  \t\t<button id=\"removeTmp\" class=\"btn btn-primary fr\" data-url=\"{{ url('admin_optimize_remove_tmp') }}\">{{'admin.system_optimize.optimize_disk_space'|trans}}</button>
\t  \t</p>
\t  </div>
\t</div>


<div class=\"panel panel-default\" style=\"display:none\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">{{'admin.system_optimize.db_backup_and_download'|trans}}</h3>
  </div>
  <div class=\"panel-body\">
   \t<p>
       {{'admin.system_optimize.db_backup_and_download_tips'|trans}}<span class=\"text-info\">{{'admin.system_optimize.optimize_disk_space'|trans}}</span>。
    </p>
    <p>
  \t\t<button id=\"backupDatabase\" class=\"btn btn-primary fr\" data-url=\"{{ url('admin_optimize_backupdb') }}\">{{'admin.system_optimize.db_backup_and_download'|trans}}</button>
  \t</p>
  \t<p>
  \t\t<span id=\"dbbackup\" class=\"glyphicon glyphicon-download-alt hide\"><a id=\"dbdownload\" href=\"#\" target=\"_blank\">{{'admin.system_optimize.db_download'|trans}}</a></span>
  \t</p>
  </div>
</div>

{% endblock %}
", "admin/system/optimize.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\optimize.html.twig");
    }
}
