<?php

/* admin/classroom/index.html.twig */
class __TwigTemplate_c46e264a3360ae76fb20f8d35e6bb28e5bd06085670761db4336c5cd034fcd09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/classroom/index.html.twig", 1);
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
        $__internal_7be97aea70200bafa33608b464a65eea5b7e627b3bf8a7b757181bd0d74695c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be97aea70200bafa33608b464a65eea5b7e627b3bf8a7b757181bd0d74695c8->enter($__internal_7be97aea70200bafa33608b464a65eea5b7e627b3bf8a7b757181bd0d74695c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/classroom/index.html.twig"));

        // line 3
        $context["menu"] = "admin_classroom_manage";
        // line 5
        $context["script_controller"] = "topxiaadminbundle/controller/classroom/classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be97aea70200bafa33608b464a65eea5b7e627b3bf8a7b757181bd0d74695c8->leave($__internal_7be97aea70200bafa33608b464a65eea5b7e627b3bf8a7b757181bd0d74695c8_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_e1493ca00adcecfc4543a9cfc4fedb35af2b3ae7d8cf58c1725a49482c5c9d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1493ca00adcecfc4543a9cfc4fedb35af2b3ae7d8cf58c1725a49482c5c9d61->enter($__internal_e1493ca00adcecfc4543a9cfc4fedb35af2b3ae7d8cf58c1725a49482c5c9d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
        // line 9
        $this->loadTemplate("org/org-tree-select.html.twig", "admin/classroom/index.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 10
        echo "
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.name_placeholder", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "\" name=\"titleLike\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "titleLike"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
    ";
        // line 16
        $this->loadTemplate("admin/widget/tooltip-widget.html.twig", "admin/classroom/index.html.twig", 16)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.describe_tips"), "placement" => "left")));
        // line 17
        echo "
  </form>

  <p class=\"text-muted\">
    <span class=\"mrl\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.count", array("%courseNum%" => $this->getAttribute((isset($context["classroomStatusNum"]) ? $context["classroomStatusNum"] : $this->getContext($context, "classroomStatusNum")), "total", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.published_count", array("%publishedNum%" => $this->getAttribute((isset($context["classroomStatusNum"]) ? $context["classroomStatusNum"] : $this->getContext($context, "classroomStatusNum")), "published", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.closed_count", array("%closedNum%" => $this->getAttribute((isset($context["classroomStatusNum"]) ? $context["classroomStatusNum"] : $this->getContext($context, "classroomStatusNum")), "closed", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.unpublish_count", array("%unPublishedNum%" => $this->getAttribute((isset($context["classroomStatusNum"]) ? $context["classroomStatusNum"] : $this->getContext($context, "classroomStatusNum")), "draft", array())));
        echo "</span>
  </p>
  
  ";
        // line 27
        if ((isset($context["classroomInfo"]) ? $context["classroomInfo"] : $this->getContext($context, "classroomInfo"))) {
            // line 28
            echo "  <table class=\"table table-striped table-hover 111\" id=\"classroom-table\">
    <thead>
    <tr>
      ";
            // line 31
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
                // line 32
                echo "        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      ";
            }
            // line 34
            echo "      <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.number_th", array("%title%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("calssroom.title"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</th>
      <th width=\"22%\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.name_th", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</th>
      ";
            // line 36
            $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/classroom/index.html.twig", 36)->display($context);
            // line 37
            echo "      <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.course_number_th"), "html", null, true);
            echo "</th>
      <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.student_number_th"), "html", null, true);
            echo "</th>
      <th width=\"12%\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.price_th"), "html", null, true);
            echo "</th>
      <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.status_th"), "html", null, true);
            echo "</th>
      <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.operate_th"), "html", null, true);
            echo "</th>
    </tr>
    </thead>
    <tbody>

   ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classroomInfo"]) ? $context["classroomInfo"] : $this->getContext($context, "classroomInfo")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 47
                echo "      ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 48
                echo "      ";
                $this->loadTemplate("admin/classroom/table-tr.html.twig", "admin/classroom/index.html.twig", 48)->display(array_merge($context, array("classroom" => $context["classroom"], "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))));
                // line 49
                echo "
   ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
    </tbody>

  </table>
  ";
        } else {
            // line 56
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.empty", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</div>
  ";
        }
        // line 58
        echo "  ";
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/classroom/index.html.twig", 58)->display(array_merge($context, array("module" => "classroom", "formId" => "classroom-table")));
        // line 59
        echo "  <div class=\"pull-right\">
   ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
  </div>


";
        
        $__internal_e1493ca00adcecfc4543a9cfc4fedb35af2b3ae7d8cf58c1725a49482c5c9d61->leave($__internal_e1493ca00adcecfc4543a9cfc4fedb35af2b3ae7d8cf58c1725a49482c5c9d61_prof);

    }

    public function getTemplateName()
    {
        return "admin/classroom/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 60,  196 => 59,  193 => 58,  187 => 56,  180 => 51,  165 => 49,  162 => 48,  159 => 47,  142 => 46,  134 => 41,  130 => 40,  126 => 39,  122 => 38,  117 => 37,  115 => 36,  111 => 35,  106 => 34,  102 => 32,  100 => 31,  95 => 28,  93 => 27,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  69 => 17,  67 => 16,  63 => 15,  55 => 12,  51 => 10,  49 => 9,  45 => 7,  39 => 6,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_classroom_manage' %}

{% set script_controller='topxiaadminbundle/controller/classroom/classroom' %}
{% block main %}

  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    {% include 'org/org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"{{'admin.classroom_manage.manage.name_placeholder'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}\" name=\"titleLike\" value=\"{{ app.request.get('titleLike') }}\">
    </div>

    <button class=\"btn btn-primary\">{{ 'form.btn.search'|trans }}</button>
    {% include 'admin/widget/tooltip-widget.html.twig' with { icon: 'glyphicon-question-sign', content: 'admin.classroom_manage.manage.describe_tips'|trans|raw, placement: 'left'} %}

  </form>

  <p class=\"text-muted\">
    <span class=\"mrl\">{{ 'admin.classroom_manage.manage.count'|trans({'%courseNum%':classroomStatusNum.total})|raw }}</span>
    <span class=\"mrl\">{{ 'admin.classroom_manage.manage.published_count'|trans({'%publishedNum%':classroomStatusNum.published})|raw }}</span>
    <span class=\"mrl\">{{ 'admin.classroom_manage.manage.closed_count'|trans({'%closedNum%':classroomStatusNum.closed})|raw }}</span>
    <span class=\"mrl\">{{ 'admin.classroom_manage.manage.unpublish_count'|trans({'%unPublishedNum%':classroomStatusNum.draft})|raw }}</span>
  </p>
  
  {% if classroomInfo%}
  <table class=\"table table-striped table-hover 111\" id=\"classroom-table\">
    <thead>
    <tr>
      {% if setting('magic.enable_org','0') %}
        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      {% endif %}
      <th>{{'admin.classroom_manage.manage.number_th'|trans({'%title%':setting('calssroom.title')|default('classroom'|trans)}) }}</th>
      <th width=\"22%\">{{'admin.classroom_manage.manage.name_th'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</th>
      {% include 'org/parts/table-thead-tr.html.twig' %}
      <th>{{'admin.classroom_manage.manage.course_number_th'|trans}}</th>
      <th>{{'admin.classroom_manage.manage.student_number_th'|trans}}</th>
      <th width=\"12%\">{{'admin.classroom_manage.manage.price_th'|trans}}</th>
      <th>{{'admin.classroom_manage.manage.status_th'|trans}}</th>
      <th>{{'admin.classroom_manage.manage.operate_th'|trans}}</th>
    </tr>
    </thead>
    <tbody>

   {% for classroom in classroomInfo %}
      {% set category = categories[classroom.categoryId]|default(null) %}
      {% include 'admin/classroom/table-tr.html.twig' with {classroom:classroom,category:category} %}

   {% endfor %}

    </tbody>

  </table>
  {% else %}
    <div class=\"empty\">{{'admin.classroom_manage.manage.empty'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</div>
  {% endif %}
  {% include 'org/batch-update-org-btn.html.twig' with {module:'classroom', formId:'classroom-table'} %}
  <div class=\"pull-right\">
   {{ admin_macro.paginator(paginator) }}
  </div>


{% endblock %}
", "admin/classroom/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\classroom\\index.html.twig");
    }
}
