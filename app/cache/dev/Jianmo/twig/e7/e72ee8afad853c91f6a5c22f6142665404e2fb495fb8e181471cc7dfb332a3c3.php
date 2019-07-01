<?php

/* classroom/classroomadd.html.twig */
class __TwigTemplate_3f7ebedde15ef85b38c4225f6a19791be3c3d1e4872a76539224b0170a4b4cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "classroom/classroomadd.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_147f0b9e9d564f778b562f823af71dda07b7a5e483871a017ca45135b232f323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147f0b9e9d564f778b562f823af71dda07b7a5e483871a017ca45135b232f323->enter($__internal_147f0b9e9d564f778b562f823af71dda07b7a5e483871a017ca45135b232f323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classroom/classroomadd.html.twig"));

        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "libs/select2.js", 2 => "app/js/classroom/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_147f0b9e9d564f778b562f823af71dda07b7a5e483871a017ca45135b232f323->leave($__internal_147f0b9e9d564f778b562f823af71dda07b7a5e483871a017ca45135b232f323_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb8d2241369f151cfd2fc4f7b05d623bcb96710341c52150b66e47595c21dc92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8d2241369f151cfd2fc4f7b05d623bcb96710341c52150b66e47595c21dc92->enter($__internal_fb8d2241369f151cfd2fc4f7b05d623bcb96710341c52150b66e47595c21dc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.title", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_fb8d2241369f151cfd2fc4f7b05d623bcb96710341c52150b66e47595c21dc92->leave($__internal_fb8d2241369f151cfd2fc4f7b05d623bcb96710341c52150b66e47595c21dc92_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4b6e3e07174730df00f5938aaf232fdd661029d790f224fb508052ad9c5ca99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b6e3e07174730df00f5938aaf232fdd661029d790f224fb508052ad9c5ca99->enter($__internal_f4b6e3e07174730df00f5938aaf232fdd661029d790f224fb508052ad9c5ca99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<div class=\"row\">
  <div class=\"col-md-offset-2 col-md-8\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.title", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "</h2></div>

        <form id=\"classroom-create-form\" class=\"form-horizontal\" method=\"post\">

          ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

          <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
              <label for=\"classroom_title\" class=\"required\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.name_label", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"classroom_title\" name=\"title\" required=\"required\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\">
            </div>
          </div>

          ";
        // line 28
        $this->loadTemplate("org/org-tree-select-webpack.html.twig", "classroom/classroomadd.html.twig", 28)->display(array_merge($context, array("lablecolmd" => 3)));
        // line 29
        echo "
          <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
              <label >";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.show_label", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "</label>
            </div>
            <div id=\"create-classroom\"  class=\"col-md-8 controls radios\">
              <label>
              <input id=\"showable-open\" type=\"radio\" name=\"showable\" value=\"1\" checked=\"checked\" > ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.open_radio"), "html", null, true);
        echo "
              </label>
              <label>
                <input id=\"showable-close\" type=\"radio\" name=\"showable\" value=\"0\"> ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.close_radio"), "html", null, true);
        echo "
              </label>
              <div class=\"help-block\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.show_tips", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "</div>
            </div>

          </div>
          <div class=\"form-group\">
            <div id='buyable'>
              <div class=\"col-md-3 control-label\">
                <label >";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.buy_label", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "</label>
              </div>
              <div class=\"col-md-8 controls radios\">
                <label>
                  <input id=\"buyable-open\" type=\"radio\" name=\"buyable\" value=\"1\" checked=\"checked\" > ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.open_radio"), "html", null, true);
        echo "
                </label>
                <label>
                  <input id=\"buyable-close\" type=\"radio\" name=\"buyable\" value=\"0\"> ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.close_radio"), "html", null, true);
        echo "
                </label>
                <div class=\"help-block\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create.buy_tips", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "</div>
              </div>
            </div>

          </div>

          <div class=\"form-group\">
            <div class=\"col-md-offset-3 col-md-8 controls\">
              <button id=\"classroom-create-btn\" data-loading-text=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create.submiting"), "html", null, true);
        echo "\" class=\"btn btn-fat btn-primary\" type=\"submit\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.create"), "html", null, true);
        echo "</button>
            </div>
          </div>

          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

        </form>

    </div>
  </div>
</div>
";
        
        $__internal_f4b6e3e07174730df00f5938aaf232fdd661029d790f224fb508052ad9c5ca99->leave($__internal_f4b6e3e07174730df00f5938aaf232fdd661029d790f224fb508052ad9c5ca99_prof);

    }

    public function getTemplateName()
    {
        return "classroom/classroomadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 69,  152 => 65,  141 => 57,  136 => 55,  130 => 52,  123 => 48,  113 => 41,  108 => 39,  102 => 36,  95 => 32,  90 => 29,  88 => 28,  78 => 21,  71 => 17,  64 => 13,  59 => 10,  53 => 9,  44 => 4,  38 => 3,  31 => 1,  29 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{%- block title -%}
  {{'admin.classroom_manage.create.title'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}} - {{ parent() }}
{%- endblock -%}

{% do script(['libs/jquery-validation.js', 'libs/select2.js', 'app/js/classroom/create/index.js']) %}

{% block content %}
<div class=\"row\">
  <div class=\"col-md-offset-2 col-md-8\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>{{'admin.classroom_manage.create.title'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</h2></div>

        <form id=\"classroom-create-form\" class=\"form-horizontal\" method=\"post\">

          {{ web_macro.flash_messages() }}

          <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
              <label for=\"classroom_title\" class=\"required\">{{'admin.classroom_manage.create.name_label'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</label>
            </div>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"classroom_title\" name=\"title\" required=\"required\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\">
            </div>
          </div>

          {% include 'org/org-tree-select-webpack.html.twig' with {lablecolmd:3} %}

          <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
              <label >{{'admin.classroom_manage.create.show_label'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</label>
            </div>
            <div id=\"create-classroom\"  class=\"col-md-8 controls radios\">
              <label>
              <input id=\"showable-open\" type=\"radio\" name=\"showable\" value=\"1\" checked=\"checked\" > {{'admin.classroom_manage.create.open_radio'|trans}}
              </label>
              <label>
                <input id=\"showable-close\" type=\"radio\" name=\"showable\" value=\"0\"> {{'admin.classroom_manage.create.close_radio'|trans}}
              </label>
              <div class=\"help-block\">{{'admin.classroom_manage.create.show_tips'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</div>
            </div>

          </div>
          <div class=\"form-group\">
            <div id='buyable'>
              <div class=\"col-md-3 control-label\">
                <label >{{'admin.classroom_manage.create.buy_label'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</label>
              </div>
              <div class=\"col-md-8 controls radios\">
                <label>
                  <input id=\"buyable-open\" type=\"radio\" name=\"buyable\" value=\"1\" checked=\"checked\" > {{'admin.classroom_manage.create.open_radio'|trans}}
                </label>
                <label>
                  <input id=\"buyable-close\" type=\"radio\" name=\"buyable\" value=\"0\"> {{'admin.classroom_manage.create.close_radio'|trans}}
                </label>
                <div class=\"help-block\">{{'admin.classroom_manage.create.buy_tips'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</div>
              </div>
            </div>

          </div>

          <div class=\"form-group\">
            <div class=\"col-md-offset-3 col-md-8 controls\">
              <button id=\"classroom-create-btn\" data-loading-text=\"{{'form.btn.create.submiting'|trans}}\" class=\"btn btn-fat btn-primary\" type=\"submit\">{{'admin.classroom_manage.create'|trans}}</button>
            </div>
          </div>

          <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

        </form>

    </div>
  </div>
</div>
{% endblock %}", "classroom/classroomadd.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\classroom\\classroomadd.html.twig");
    }
}
