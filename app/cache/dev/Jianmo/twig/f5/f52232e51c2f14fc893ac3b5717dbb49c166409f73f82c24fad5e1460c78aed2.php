<?php

/* admin/open-course/course-search-form.html.twig */
class __TwigTemplate_f3d42ff6b25d2cd2befbbf2e54d7bdcf19ecb81a96d7f9a5eac82c7e8bd6ccf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e5904e2ab52190ae67d4b37cb1c1f2e8827572621940fbd2668f226c797ad17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5904e2ab52190ae67d4b37cb1c1f2e8827572621940fbd2668f226c797ad17->enter($__internal_1e5904e2ab52190ae67d4b37cb1c1f2e8827572621940fbd2668f226c797ad17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/open-course/course-search-form.html.twig"));

        // line 1
        echo "<form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("actionUrl", $context)) ? (_twig_default_filter((isset($context["actionUrl"]) ? $context["actionUrl"] : $this->getContext($context, "actionUrl")), "")) : ("")), "html", null, true);
        echo "\" method=\"get\" novalidate>
  ";
        // line 2
        $this->loadTemplate("org/org-tree-select.html.twig", "admin/open-course/course-search-form.html.twig", 2)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 3
        echo "  <div class=\"form-group\">
    <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
      ";
        // line 5
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.category_placeholder"));
        echo "
    </select>
  </div>
  ";
        // line 8
        if (((array_key_exists("showStatusSelect", $context)) ? (_twig_default_filter((isset($context["showStatusSelect"]) ? $context["showStatusSelect"] : $this->getContext($context, "showStatusSelect")), null)) : (null))) {
            // line 9
            echo "    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
            // line 11
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.status_option"));
            echo "
      </select>
    </div>
  ";
        }
        // line 15
        echo "  <div class=\"form-group\">
      <select class=\"form-control\" name=\"type\">
        ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("openCourseCategory"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "type"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("type"));
        echo "
      </select>
    </div>
  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.title_placeholder"), "html", null, true);
        echo "\" name=\"titleLike\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.creator_placeholer"), "html", null, true);
        echo "\" name=\"creator\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
  </div>
  <button class=\"btn btn-primary\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
  ";
        // line 27
        $this->loadTemplate("admin/widget/tooltip-widget.html.twig", "admin/open-course/course-search-form.html.twig", 27)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.open_tips"), "placement" => "left")));
        // line 28
        echo "</form>";
        
        $__internal_1e5904e2ab52190ae67d4b37cb1c1f2e8827572621940fbd2668f226c797ad17->leave($__internal_1e5904e2ab52190ae67d4b37cb1c1f2e8827572621940fbd2668f226c797ad17_prof);

    }

    public function getTemplateName()
    {
        return "admin/open-course/course-search-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  82 => 27,  78 => 26,  71 => 24,  63 => 21,  56 => 17,  52 => 15,  45 => 11,  41 => 9,  39 => 8,  33 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"{{ actionUrl|default('')}}\" method=\"get\" novalidate>
  {% include 'org/org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}
  <div class=\"form-group\">
    <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
      {{ select_options(category_choices('course'), app.request.query.get('categoryId'), 'admin.open_manage.category_placeholder'|trans) }}
    </select>
  </div>
  {% if showStatusSelect|default(null) %}
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        {{ select_options(dict('courseStatus'), app.request.query.get('status'), 'admin.open_manage.manage.status_option'|trans) }}
      </select>
    </div>
  {% endif %}
  <div class=\"form-group\">
      <select class=\"form-control\" name=\"type\">
        {{ select_options(dict('openCourseCategory'), app.request.query.get('type'), 'type'|trans) }}
      </select>
    </div>
  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"{{ 'admin.open_manage.title_placeholder'|trans }}\" name=\"titleLike\" value=\"{{ app.request.get('title') }}\">
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"{{ 'admin.open_manage.creator_placeholer'|trans }}\" name=\"creator\" value=\"{{ app.request.get('creator') }}\">
  </div>
  <button class=\"btn btn-primary\">{{ 'form.btn.search'|trans }}</button>
  {% include 'admin/widget/tooltip-widget.html.twig' with { icon: 'glyphicon-question-sign', content: 'admin.open_manage.open_tips'|trans|raw, placement: 'left'} %}
</form>", "admin/open-course/course-search-form.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\open-course\\course-search-form.html.twig");
    }
}
