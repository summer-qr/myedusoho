<?php

/* admin/system/esbar-setting.html.twig */
class __TwigTemplate_79ee47d05aa386c5ff962dcff8e8c43697f70aeab389f0af0e580b566d130bd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/esbar-setting.html.twig", 1);
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
        $__internal_1a02300a0cb4ee563bd5816d3a45149d6468c17470c27e56e2b9b8d55b65b7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a02300a0cb4ee563bd5816d3a45149d6468c17470c27e56e2b9b8d55b65b7c6->enter($__internal_1a02300a0cb4ee563bd5816d3a45149d6468c17470c27e56e2b9b8d55b65b7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/esbar-setting.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_es_bar";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a02300a0cb4ee563bd5816d3a45149d6468c17470c27e56e2b9b8d55b65b7c6->leave($__internal_1a02300a0cb4ee563bd5816d3a45149d6468c17470c27e56e2b9b8d55b65b7c6_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_92590acc05992dcc3120d41613c7e7ff466a00024abdb5a952f8d9dc381bbc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92590acc05992dcc3120d41613c7e7ff466a00024abdb5a952f8d9dc381bbc83->enter($__internal_92590acc05992dcc3120d41613c7e7ff466a00024abdb5a952f8d9dc381bbc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"esbar-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.es_bar.esbar_function"), "html", null, true);
        echo "</label>

    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 16
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.es_bar.esbar_function.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.es_bar.esbar_function.closed")), $this->getAttribute((isset($context["esBar"]) ? $context["esBar"] : $this->getContext($context, "esBar")), "enabled", array()));
        echo "
      <p class=\"help-block\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.es_bar.help_block"), "html", null, true);
        echo "</p>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
        
        $__internal_92590acc05992dcc3120d41613c7e7ff466a00024abdb5a952f8d9dc381bbc83->leave($__internal_92590acc05992dcc3120d41613c7e7ff466a00024abdb5a952f8d9dc381bbc83_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/esbar-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  75 => 24,  65 => 17,  61 => 16,  54 => 12,  46 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_setting_es_bar' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" method=\"post\" id=\"esbar-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >{{'admin.setting.es_bar.esbar_function'|trans}}</label>

    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('enabled', {1:'admin.setting.es_bar.esbar_function.open'|trans, 0:'admin.setting.es_bar.esbar_function.closed'|trans}, esBar.enabled) }}
      <p class=\"help-block\">{{'admin.setting.es_bar.help_block'|trans}}</p>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
</form>
{% endblock %}", "admin/system/esbar-setting.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\esbar-setting.html.twig");
    }
}
