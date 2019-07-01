<?php

/* admin/open-course-analysis/referer/list.html.twig */
class __TwigTemplate_97eaeb2d1b321302545fc0eb7e67e16e4b9f257f3ff018c76cc3af5b960d69da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/open-course-analysis/layout.html.twig", "admin/open-course-analysis/referer/list.html.twig", 1);
        $this->blocks = array(
            'analysis_content' => array($this, 'block_analysis_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/open-course-analysis/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2be60cc1c8818e6834418a585aa2eeb25b989dc3673a2eaf2f6c6f822133d585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be60cc1c8818e6834418a585aa2eeb25b989dc3673a2eaf2f6c6f822133d585->enter($__internal_2be60cc1c8818e6834418a585aa2eeb25b989dc3673a2eaf2f6c6f822133d585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/open-course-analysis/referer/list.html.twig"));

        // line 2
        $context["nav"] = "referer";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be60cc1c8818e6834418a585aa2eeb25b989dc3673a2eaf2f6c6f822133d585->leave($__internal_2be60cc1c8818e6834418a585aa2eeb25b989dc3673a2eaf2f6c6f822133d585_prof);

    }

    // line 3
    public function block_analysis_content($context, array $blocks = array())
    {
        $__internal_c6b94dc90e8081d9eeb3d17edb29db180cc14ae3fc6f2ec995c8a49a867c9fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b94dc90e8081d9eeb3d17edb29db180cc14ae3fc6f2ec995c8a49a867c9fd1->enter($__internal_c6b94dc90e8081d9eeb3d17edb29db180cc14ae3fc6f2ec995c8a49a867c9fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "analysis_content"));

        // line 4
        echo "  ";
        $context["tab"] = "list";
        // line 5
        echo "  ";
        $this->loadTemplate("admin/open-course-analysis/referer/summary-tab.html.twig", "admin/open-course-analysis/referer/list.html.twig", 5)->display(array_merge($context, array("tab" => (isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")))));
        // line 6
        echo "  <table class=\"table table-hover\" style=\"word-break:break-all;\">
    <thead>
      <tr>
        <th width=\"60%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.referer.summary_list.name_th"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.referer.summary_list.visit_number_th"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.referer.summary_list.detail_th"), "html", null, true);
        echo "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refererlogDatas"]) ? $context["refererlogDatas"] : $this->getContext($context, "refererlogDatas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["refererLog"]) {
            // line 16
            echo "        ";
            $context["orderCount"] = (($this->getAttribute($context["refererLog"], "orderCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["refererLog"], "orderCount", array()), 0)) : (0));
            // line 17
            echo "        ";
            $context["hitNum"] = (($this->getAttribute($context["refererLog"], "hitNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["refererLog"], "hitNum", array()), 0)) : (0));
            // line 18
            echo "        ";
            if ((null === $this->getAttribute($context["refererLog"], "orderCount", array()))) {
                // line 19
                echo "          ";
                $context["orderCount"] = 0;
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if ((null === $this->getAttribute($context["refererLog"], "hitNum", array()))) {
                // line 22
                echo "          ";
                $context["hitNum"] = 0;
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            $context["openCourse"] = (($this->getAttribute((isset($context["openCourses"]) ? $context["openCourses"] : null), $this->getAttribute($context["refererLog"], "targetId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["openCourses"]) ? $context["openCourses"] : null), $this->getAttribute($context["refererLog"], "targetId", array()), array(), "array"), null)) : (null));
            // line 26
            echo "        <tr ";
            if ( !(isset($context["openCourse"]) ? $context["openCourse"] : $this->getContext($context, "openCourse"))) {
                echo "style=\"text-decoration:line-through\"";
            }
            echo ">
          <th scope=\"row\">
            ";
            // line 28
            if ((isset($context["openCourse"]) ? $context["openCourse"] : $this->getContext($context, "openCourse"))) {
                // line 29
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : $this->getContext($context, "openCourse")), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : $this->getContext($context, "openCourse")), "title", array()), "html", null, true);
                echo "</strong></a>
              ";
                // line 30
                if ((($this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : $this->getContext($context, "openCourse")), "type", array()) == "live") || ($this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : $this->getContext($context, "openCourse")), "type", array()) == "liveOpen"))) {
                    // line 31
                    echo "                <span class=\"label label-success live-label mls\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.live_course"), "html", null, true);
                    echo "</span>
              ";
                }
                // line 33
                echo "            ";
            } else {
                // line 34
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.live_course_empty"), "html", null, true);
                echo "
            ";
            }
            // line 36
            echo "          </th>
          <th>
            ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.referer.summary_list.visit_number", array("%visitNum%" => (isset($context["hitNum"]) ? $context["hitNum"] : $this->getContext($context, "hitNum")))), "html", null, true);
            echo "
          </th>
          <th>
            ";
            // line 41
            if ((isset($context["openCourse"]) ? $context["openCourse"] : $this->getContext($context, "openCourse"))) {
                // line 42
                echo "              <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\"
               data-url=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_detail", array("id" => $this->getAttribute($context["refererLog"], "targetId", array()), "startTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "endTime", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.referer.summary_list.detail_btn"), "html", null, true);
                echo "</a>
            ";
            }
            // line 45
            echo "          </th>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "        <tr>
          <td colspan=\"20\">
            <div class=\"empty\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.referer.empty"), "html", null, true);
            echo "</div>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['refererLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "      </tbody>
    </table>

    <span>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.footer_tips"), "html", null, true);
        echo "</span>
    ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_c6b94dc90e8081d9eeb3d17edb29db180cc14ae3fc6f2ec995c8a49a867c9fd1->leave($__internal_c6b94dc90e8081d9eeb3d17edb29db180cc14ae3fc6f2ec995c8a49a867c9fd1_prof);

    }

    public function getTemplateName()
    {
        return "admin/open-course-analysis/referer/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 58,  185 => 57,  180 => 54,  170 => 50,  166 => 48,  159 => 45,  152 => 43,  149 => 42,  147 => 41,  141 => 38,  137 => 36,  131 => 34,  128 => 33,  122 => 31,  120 => 30,  113 => 29,  111 => 28,  103 => 26,  101 => 25,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  69 => 15,  62 => 11,  58 => 10,  54 => 9,  49 => 6,  46 => 5,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/open-course-analysis/layout.html.twig' %}
{% set nav = 'referer' %}\t
{% block analysis_content %}
  {% set tab = 'list' %}
  {% include 'admin/open-course-analysis/referer/summary-tab.html.twig' with { tab: tab } %}
  <table class=\"table table-hover\" style=\"word-break:break-all;\">
    <thead>
      <tr>
        <th width=\"60%\">{{ 'admin.open_manage.analysis.referer.summary_list.name_th'|trans }}</th>
        <th width=\"20%\">{{ 'admin.open_manage.analysis.referer.summary_list.visit_number_th'|trans }}</th>
        <th width=\"20%\">{{ 'admin.open_manage.analysis.referer.summary_list.detail_th'|trans }}</th>
      </tr>
    </thead>
    <tbody>
      {% for refererLog in refererlogDatas %}
        {% set orderCount = refererLog.orderCount|default(0) %}
        {% set hitNum = refererLog.hitNum|default(0) %}
        {% if refererLog.orderCount is null %}
          {% set orderCount = 0 %}
        {% endif %}
        {% if refererLog.hitNum is null %}
          {% set hitNum = 0 %}
        {% endif %}

        {% set openCourse = openCourses[refererLog.targetId]|default(null) %}
        <tr {% if not openCourse %}style=\"text-decoration:line-through\"{% endif %}>
          <th scope=\"row\">
            {% if openCourse %}
              <a href=\"{{ path('open_course_show', {courseId:openCourse.id}) }}\" target=\"_blank\"><strong>{{ openCourse.title }}</strong></a>
              {% if openCourse.type == 'live' or openCourse.type == 'liveOpen' %}
                <span class=\"label label-success live-label mls\">{{ 'admin.open_manage.manage.live_course'|trans }}</span>
              {% endif %}
            {% else %}
              {{ 'admin.open_manage.manage.live_course_empty'|trans }}
            {% endif %}
          </th>
          <th>
            {{ 'admin.open_manage.analysis.referer.summary_list.visit_number'|trans({'%visitNum%': hitNum})}}
          </th>
          <th>
            {% if openCourse %}
              <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\"
               data-url=\"{{ path('admin_opencourse_analysis_referer_detail',{id:refererLog.targetId, startTime:dateRange.startTime,endTime:dateRange.endTime}) }}\">{{ 'admin.open_manage.analysis.referer.summary_list.detail_btn'|trans }}</a>
            {% endif %}
          </th>
        </tr>
      {% else %}
        <tr>
          <td colspan=\"20\">
            <div class=\"empty\">{{ 'admin.open_manage.analysis.referer.empty'|trans }}</div>
          </td>
        </tr>
      {% endfor %}
      </tbody>
    </table>

    <span>{{ 'admin.open_manage.analysis.footer_tips'|trans }}</span>
    {{ admin_macro.paginator(paginator) }}
{% endblock %}", "admin/open-course-analysis/referer/list.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\open-course-analysis\\referer\\list.html.twig");
    }
}
