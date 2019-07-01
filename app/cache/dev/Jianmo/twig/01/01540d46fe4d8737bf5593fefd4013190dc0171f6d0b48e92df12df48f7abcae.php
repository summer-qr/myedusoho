<?php

/* courseset-manage/base.html.twig */
class __TwigTemplate_515c3dbbefcccd32dce2aa5212ebfbadfbdbf457043810228f65e043a5432e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/courseset-layout.html.twig", "courseset-manage/base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/courseset-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa1a0141f0c0e901102c7b23772f989ba03d2ddaa83b5ea161c255d08d494f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1a0141f0c0e901102c7b23772f989ba03d2ddaa83b5ea161c255d08d494f97->enter($__internal_fa1a0141f0c0e901102c7b23772f989ba03d2ddaa83b5ea161c255d08d494f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/base.html.twig"));

        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "libs/select2.js", 3 => "app/js/courseset-manage/base/index.js"));
        // line 6
        $context["side_nav"] = "base";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1a0141f0c0e901102c7b23772f989ba03d2ddaa83b5ea161c255d08d494f97->leave($__internal_fa1a0141f0c0e901102c7b23772f989ba03d2ddaa83b5ea161c255d08d494f97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d93355b6cea9802c739a7a4ee60b08db9b7c9825b7d63e76f0ab40347c53dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d93355b6cea9802c739a7a4ee60b08db9b7c9825b7d63e76f0ab40347c53dff->enter($__internal_7d93355b6cea9802c739a7a4ee60b08db9b7c9825b7d63e76f0ab40347c53dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_7d93355b6cea9802c739a7a4ee60b08db9b7c9825b7d63e76f0ab40347c53dff->leave($__internal_7d93355b6cea9802c739a7a4ee60b08db9b7c9825b7d63e76f0ab40347c53dff_prof);

    }

    // line 7
    public function block_paddingClass($context, array $blocks = array())
    {
        $__internal_de3b9bb5e749f7108670ec610e03a7e8bcc947813fa4c9945d5c00e9f90aab8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3b9bb5e749f7108670ec610e03a7e8bcc947813fa4c9945d5c00e9f90aab8c->enter($__internal_de3b9bb5e749f7108670ec610e03a7e8bcc947813fa4c9945d5c00e9f90aab8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paddingClass"));

        echo " courseset-manage-padding course-manage-info ";
        
        $__internal_de3b9bb5e749f7108670ec610e03a7e8bcc947813fa4c9945d5c00e9f90aab8c->leave($__internal_de3b9bb5e749f7108670ec610e03a7e8bcc947813fa4c9945d5c00e9f90aab8c_prof);

    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        $__internal_3874740df531e011ef1d4d060c4370dc430a1d1057432b827a04ebce891d8092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3874740df531e011ef1d4d060c4370dc430a1d1057432b827a04ebce891d8092->enter($__internal_3874740df531e011ef1d4d060c4370dc430a1d1057432b827a04ebce891d8092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "  <div class=\"courseset-manage-body__title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.content_title"), "html", null, true);
        echo "</div>
  <div class=\"courseset-manage-body__content cd-mt32\">
    <form class=\"form-horizontal\" id=\"courseset-form\" data-value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["isCoursesSummaryEmpty"]) ? $context["isCoursesSummaryEmpty"] : $this->getContext($context, "isCoursesSummaryEmpty")), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      ";
        // line 13
        $this->loadTemplate("courseset-manage/base-info/info.html.twig", "courseset-manage/base.html.twig", 13)->display(array_merge($context, array("form" => "courseset-form", "button" => "courseset-base-submit")));
        // line 14
        echo "
      <div class=\"form-group cd-mt40\">
        <div class=\"col-md-offset-2 col-sm-8\">
          <button id=\"courseset-base-submit\" type=\"button\" class=\"cd-btn cd-btn-primary\" data-loading-text=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
  </div>
";
        
        $__internal_3874740df531e011ef1d4d060c4370dc430a1d1057432b827a04ebce891d8092->leave($__internal_3874740df531e011ef1d4d060c4370dc430a1d1057432b827a04ebce891d8092_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  92 => 17,  87 => 14,  85 => 13,  79 => 12,  73 => 10,  67 => 9,  55 => 7,  41 => 3,  34 => 1,  32 => 6,  30 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'courseset-manage/courseset-layout.html.twig' %}

{% block title %}{{ 'course.base'|trans }} - {{ parent() }}{% endblock %}

{% do script(['libs/es-ckeditor/ckeditor.js', 'libs/jquery-validation.js', 'libs/select2.js', 'app/js/courseset-manage/base/index.js']) %}
{% set side_nav = 'base' %}
{% block paddingClass %} courseset-manage-padding course-manage-info {% endblock %}

{% block main %}
  <div class=\"courseset-manage-body__title\">{{ 'course.base.content_title'|trans }}</div>
  <div class=\"courseset-manage-body__content cd-mt32\">
    <form class=\"form-horizontal\" id=\"courseset-form\" data-value=\"{{ isCoursesSummaryEmpty }}\" action=\"{{path('course_set_manage_base', {id: courseSet.id})}}\" method=\"post\">
      {% include 'courseset-manage/base-info/info.html.twig' with {form: 'courseset-form', button:'courseset-base-submit'} %}

      <div class=\"form-group cd-mt40\">
        <div class=\"col-md-offset-2 col-sm-8\">
          <button id=\"courseset-base-submit\" type=\"button\" class=\"cd-btn cd-btn-primary\" data-loading-text=\"{{ 'form.btn.save.submiting'|trans }}\">{{ 'form.btn.save'|trans }}</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
    </form>
  </div>
{% endblock %}
", "courseset-manage/base.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\base.html.twig");
    }
}
