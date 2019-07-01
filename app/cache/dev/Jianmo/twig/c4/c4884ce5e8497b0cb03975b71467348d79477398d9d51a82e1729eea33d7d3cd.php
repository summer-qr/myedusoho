<?php

/* open-course-manage/open-course-marketing.html.twig */
class __TwigTemplate_d3ff34be17cd0ba39038931dfc4c0596c521e66f446e9c42b8642d8f7daedcbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("open-course-manage/layout.html.twig", "open-course-manage/open-course-marketing.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "open-course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6956280838c6f356c95e3732299ffd78f830d73c27dad846dc672c9b8ba0a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6956280838c6f356c95e3732299ffd78f830d73c27dad846dc672c9b8ba0a5a->enter($__internal_c6956280838c6f356c95e3732299ffd78f830d73c27dad846dc672c9b8ba0a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "open-course-manage/open-course-marketing.html.twig"));

        // line 3
        $context["side_nav"] = "marketing";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/open-course-manage/recommend-course/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6956280838c6f356c95e3732299ffd78f830d73c27dad846dc672c9b8ba0a5a->leave($__internal_c6956280838c6f356c95e3732299ffd78f830d73c27dad846dc672c9b8ba0a5a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6213681d2131e723b1d1863397c83808ccf8996d6ef274b50ebcd0911e69aa98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6213681d2131e723b1d1863397c83808ccf8996d6ef274b50ebcd0911e69aa98->enter($__internal_6213681d2131e723b1d1863397c83808ccf8996d6ef274b50ebcd0911e69aa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6213681d2131e723b1d1863397c83808ccf8996d6ef274b50ebcd0911e69aa98->leave($__internal_6213681d2131e723b1d1863397c83808ccf8996d6ef274b50ebcd0911e69aa98_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1a64ea720947229c221d162504d7b78f66aa7d711405318ccb9bc18cc276c953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a64ea720947229c221d162504d7b78f66aa7d711405318ccb9bc18cc276c953->enter($__internal_1a64ea720947229c221d162504d7b78f66aa7d711405318ccb9bc18cc276c953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 6
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.title"), "html", null, true);
        echo "
  <div class=\"pull-right\">
    <button class=\"cd-btn cd-btn-success cd-btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_course_pick", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array(), "array"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.add_course_btn"), "html", null, true);
        echo "</button>
  </div>
";
        
        $__internal_1a64ea720947229c221d162504d7b78f66aa7d711405318ccb9bc18cc276c953->leave($__internal_1a64ea720947229c221d162504d7b78f66aa7d711405318ccb9bc18cc276c953_prof);

    }

    // line 12
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_1f272ad2db5f9d779dea2905abf10f4c24797c5c7657562f7c7a060896e8158b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f272ad2db5f9d779dea2905abf10f4c24797c5c7657562f7c7a060896e8158b->enter($__internal_1f272ad2db5f9d779dea2905abf10f4c24797c5c7657562f7c7a060896e8158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 13
        echo "  <form class=\"form-horizontal\" id=\"recommend-course-form\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_marketing", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 14
        $context["openCourse"] = (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"));
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

    <div class=\"form-group\" id=\"courses-form-group\">
      <div class=\"col-md-12 controls\">
        <ul class=\"course-list-group sortable-list course-wide-list courses-selected\" id=\"course-list-group\" data-role=\"list\" >

          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : $this->getContext($context, "courseSets")));
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
        foreach ($context['_seq'] as $context["recommendId"] => $context["courseSet"]) {
            // line 22
            echo "            ";
            $context["showUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array())));
            // line 23
            echo "
            <li class=\"course-item item-";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
            echo " clearfix\" data-role=\"item\" >
              <input type=\"hidden\" name=\"recommendIds[]\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $context["recommendId"], "html", null, true);
            echo "\" />

              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\" style=\"padding: 50px 20px 0 20px\"></span>
              <a class=\"course-picture-link\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["showUrl"]) ? $context["showUrl"] : $this->getContext($context, "showUrl")), "html", null, true);
            echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover($context["courseSet"], "middle"), "courseSet.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
            echo "\">
              </a>

              <button class=\"close delete-btn pull-right mrl mts mll\" data-role=\"item-delete\" type=\"button\" title=\"form.btn.delete\" style=\"font-size:35px;\" data-cancel-url=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_recommend_course_delete", array("id" => $this->getAttribute((isset($context["openCourse"]) ? $context["openCourse"] : $this->getContext($context, "openCourse")), "id", array()), "recommendId" => $context["recommendId"])), "html", null, true);
            echo "\" data-recommend-id=\"";
            echo twig_escape_filter($this->env, $context["recommendId"], "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
            echo "\">× </button>

              <div class=\"course-body\">
                <div style=\"float:right;\" class=\"color-gray mrm mls\">
                  ";
            // line 36
            $this->loadTemplate("open-course-manage/course-set-price-interval.html.twig", "open-course-manage/open-course-marketing.html.twig", 36)->display($context);
            // line 37
            echo "                </div>

                <h4 class=\"course-title\"><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["showUrl"]) ? $context["showUrl"] : $this->getContext($context, "showUrl")), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
            echo "</a>
                ";
            // line 40
            if ((($this->getAttribute($context["courseSet"], "type", array()) == "normal") || ($this->getAttribute($context["courseSet"], "type", array()) == "live"))) {
                // line 41
                echo "                  ";
                if (($this->getAttribute($context["courseSet"], "serializeMode", array()) == "serialized")) {
                    // line 42
                    echo "                    <span class=\"label label-success \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.serializeMode.live"), "html", null, true);
                    echo "</span>
                  ";
                } elseif (($this->getAttribute(                // line 43
$context["courseSet"], "serializeMode", array()) == "finished")) {
                    // line 44
                    echo "                    <span class=\"label label-warning \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.serializeMode.finished"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 46
                echo "                ";
            }
            // line 47
            echo "
                ";
            // line 48
            if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                // line 49
                echo "                  ";
                $context["task"] = (($this->getAttribute($context["courseSet"], "task", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", array(), "array"), null)) : (null));
                // line 50
                echo "                  ";
                if ((((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "endTime", array())))) {
                    // line 51
                    echo "                    <span class=\"label label-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.onlive"), "html", null, true);
                    echo "</span>
                  ";
                } else {
                    // line 53
                    echo "                    <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.live"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 55
                echo "                ";
            }
            // line 56
            echo "                </h4>

                ";
            // line 58
            if (($this->getAttribute($context["courseSet"], "type", array()) == "live")) {
                // line 59
                echo "                  ";
                $context["task"] = (($this->getAttribute($context["courseSet"], "task", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", array()), null)) : (null));
                // line 60
                echo "                  ";
                if ((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task"))) {
                    // line 61
                    echo "                    <div class=\"live-course-lesson mbm\">
                      <span class=\"color-success fsm mrm\">";
                    // line 62
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo " ~ ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "endTime", array()), "H:i"), "html", null, true);
                    echo "</span>
                      <span class=\"color-gray fsm mrm\">";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.task_number", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "%task_number%" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "number", array()))), "html", null, true);
                    echo "</span>
                    </div>
                  ";
                }
                // line 66
                echo "                ";
            } else {
                // line 67
                echo "                  <div class=\"course-about ellipsis\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "subtitle", array()), "html", null, true);
                echo "</div>
                ";
            }
            // line 69
            echo "
                <div class=\"course-footer clearfix\">
                  ";
            // line 71
            $context["teacher"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), _twig_default_filter(twig_first($this->env, $this->getAttribute($context["courseSet"], "teacherIds", array())), $this->getAttribute($context["courseSet"], "creator", array())), array(), "array");
            // line 72
            echo "                  ";
            if ((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher"))) {
                // line 73
                echo "                    <div class=\"teacher\">
                      <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"teacher-avatar\"></a>
                      <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname", array()), "html", null, true);
                echo "</a>
                      <span class=\"teacher-title ellipsis\">";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title", array()), "html", null, true);
                echo "</span>
                    </div>
                  ";
            }
            // line 79
            echo "
                  <div class=\"course-metas\">

                    ";
            // line 82
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 83
                echo "                      <span class=\"color-gray text-sm\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "studentNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"), "html", null, true);
                echo "</span>
                      ";
                // line 85
                echo "                    ";
            }
            // line 86
            echo "
                    ";
            // line 90
            echo "                    ";
            // line 102
            echo "                  </div>

                </div>

              </div>
            </li>

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
        unset($context['_seq'], $context['_iterated'], $context['recommendId'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
        </ul>
      </div>
    </div>

    ";
        // line 115
        if ((isset($context["courseSets"]) ? $context["courseSets"] : $this->getContext($context, "courseSets"))) {
            // line 116
            echo "      <div class=\"form-group\">
        <div class=\"col-md-offset-9 col-md-3 controls\">
          <button type=\"submit\" class=\"cd-btn cd-btn-primary pull-right\">";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.save_btn"), "html", null, true);
            echo "</button>
        </div>
      </div>
    ";
        } else {
            // line 122
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.recommend_setting.course_empty"), "html", null, true);
            echo "</div>
    ";
        }
        // line 124
        echo "
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>
";
        
        $__internal_1f272ad2db5f9d779dea2905abf10f4c24797c5c7657562f7c7a060896e8158b->leave($__internal_1f272ad2db5f9d779dea2905abf10f4c24797c5c7657562f7c7a060896e8158b_prof);

    }

    public function getTemplateName()
    {
        return "open-course-manage/open-course-marketing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 125,  351 => 124,  345 => 122,  338 => 118,  334 => 116,  332 => 115,  325 => 110,  304 => 102,  302 => 90,  299 => 86,  296 => 85,  290 => 83,  288 => 82,  283 => 79,  277 => 76,  271 => 75,  265 => 74,  262 => 73,  259 => 72,  257 => 71,  253 => 69,  247 => 67,  244 => 66,  238 => 63,  232 => 62,  229 => 61,  226 => 60,  223 => 59,  221 => 58,  217 => 56,  214 => 55,  208 => 53,  202 => 51,  199 => 50,  196 => 49,  194 => 48,  191 => 47,  188 => 46,  182 => 44,  180 => 43,  175 => 42,  172 => 41,  170 => 40,  164 => 39,  160 => 37,  158 => 36,  147 => 32,  139 => 29,  135 => 28,  129 => 25,  125 => 24,  122 => 23,  119 => 22,  102 => 21,  92 => 15,  90 => 14,  85 => 13,  79 => 12,  67 => 8,  61 => 6,  55 => 5,  41 => 2,  34 => 1,  32 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'open-course-manage/layout.html.twig' %}
{% block title %}{{'my.teaching.open_course.recommend_setting.title'|trans}} - {{ parent() }}{% endblock %}
{% set side_nav = 'marketing' %}
{% do script(['app/js/open-course-manage/recommend-course/index.js'])%}
{% block page_title %}
  {{'my.teaching.open_course.recommend_setting.title'|trans}}
  <div class=\"pull-right\">
    <button class=\"cd-btn cd-btn-success cd-btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('open_course_manage_course_pick', {id:course['id']})}}\">{{ 'my.teaching.open_course.recommend_setting.add_course_btn'|trans }}</button>
  </div>
{% endblock %}

{% block main_body %}
  <form class=\"form-horizontal\" id=\"recommend-course-form\" method=\"post\" action=\"{{ path('open_course_manage_marketing',{id:course.id}) }}\">
    {% set openCourse = course %}
    {{ web_macro.flash_messages() }}

    <div class=\"form-group\" id=\"courses-form-group\">
      <div class=\"col-md-12 controls\">
        <ul class=\"course-list-group sortable-list course-wide-list courses-selected\" id=\"course-list-group\" data-role=\"list\" >

          {% for recommendId, courseSet in courseSets %}
            {% set showUrl = path('course_show',{id: courseSet.defaultCourseId}) %}

            <li class=\"course-item item-{{courseSet.id}} clearfix\" data-role=\"item\" >
              <input type=\"hidden\" name=\"recommendIds[]\" value=\"{{ recommendId }}\" />

              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\" style=\"padding: 50px 20px 0 20px\"></span>
              <a class=\"course-picture-link\" href=\"{{ showUrl }}\" target=\"_blank\">
                <img class=\"course-picture\" src=\"{{ filepath(course_set_cover(courseSet, 'middle'), 'courseSet.png') }}\" alt=\"{{ courseSet.title }}\">
              </a>

              <button class=\"close delete-btn pull-right mrl mts mll\" data-role=\"item-delete\" type=\"button\" title=\"form.btn.delete\" style=\"font-size:35px;\" data-cancel-url=\"{{ path('open_course_manage_recommend_course_delete', {id:openCourse.id, recommendId: recommendId}) }}\" data-recommend-id=\"{{ recommendId }}\" data-id=\"{{courseSet.id}}\">× </button>

              <div class=\"course-body\">
                <div style=\"float:right;\" class=\"color-gray mrm mls\">
                  {% include 'open-course-manage/course-set-price-interval.html.twig' %}
                </div>

                <h4 class=\"course-title\"><a href=\"{{ showUrl }}\" target=\"_blank\">{{ courseSet.title }}</a>
                {% if courseSet.type == 'normal' or courseSet.type == 'live' %}
                  {% if courseSet.serializeMode=='serialized' %}
                    <span class=\"label label-success \">{{ 'my.teaching.open_course.recommend_setting.serializeMode.live'|trans }}</span>
                  {% elseif courseSet.serializeMode=='finished' %}
                    <span class=\"label label-warning \">{{ 'my.teaching.open_course.recommend_setting.serializeMode.finished'|trans }}</span>
                  {% endif %}
                {% endif %}

                {% if courseSet.type == 'live' %}
                  {% set task = courseSet['task']|default(null) %}
                  {% if task and \"now\"|date(\"U\") >= task.startTime and \"now\"|date(\"U\") <= task.endTime %}
                    <span class=\"label label-warning\">{{ 'my.teaching.open_course.recommend_setting.onlive'|trans }}</span>
                  {% else %}
                    <span class=\"label label-success\">{{ 'my.teaching.open_course.recommend_setting.live'|trans }}</span>
                  {% endif %}
                {% endif %}
                </h4>

                {% if courseSet.type == 'live' %}
                  {% set task = courseSet.task|default(null) %}
                  {% if task %}
                    <div class=\"live-course-lesson mbm\">
                      <span class=\"color-success fsm mrm\">{{ task.startTime|date('n月j日 H:i') }} ~ {{ task.endTime|date('H:i') }}</span>
                      <span class=\"color-gray fsm mrm\">{{'my.teaching.open_course.recommend_setting.task_number'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans),'%task_number%':task.number })}}</span>
                    </div>
                  {% endif %}
                {% else %}
                  <div class=\"course-about ellipsis\">{{ courseSet.subtitle }}</div>
                {% endif %}

                <div class=\"course-footer clearfix\">
                  {% set teacher = users[courseSet.teacherIds|first|default(courseSet.creator)] %}
                  {% if teacher %}
                    <div class=\"teacher\">
                      <a href=\"{{ path('user_show', {id:teacher.id}) }}\" target=\"_blank\"><img src=\"{{ filepath(teacher.smallAvatar, 'avatar.png') }}\" class=\"teacher-avatar\"></a>
                      <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"{{ path('user_show', {id:teacher.id}) }}\">{{ teacher.nickname }}</a>
                      <span class=\"teacher-title ellipsis\">{{ teacher.title }}</span>
                    </div>
                  {% endif %}

                  <div class=\"course-metas\">

                    {% if setting('course.show_student_num_enabled', '1') == 1  %}
                      <span class=\"color-gray text-sm\">{{ courseSet.studentNum }}{{'site.default.student'|trans}}</span>
                      {#<span class=\"divider\"></span>#}
                    {% endif %}

                    {#<span class=\"color-gray text-sm\">
                        {{course.lessonNum}}个任务
                    </span>#}
                    {#{% if course.type == 'normal' or course.type == 'live' %}
                      <span class=\"divider\"></span>

                      <span class=\"color-gray text-sm\">
                        有效期:
                        {% if course.expiryDay %}
                          {{course.expiryDay}}天
                        {% else %}
                          永久
                        {% endif %}
                      </span>
                    {% endif %}#}
                  </div>

                </div>

              </div>
            </li>

          {% endfor %}

        </ul>
      </div>
    </div>

    {% if courseSets %}
      <div class=\"form-group\">
        <div class=\"col-md-offset-9 col-md-3 controls\">
          <button type=\"submit\" class=\"cd-btn cd-btn-primary pull-right\">{{ 'my.teaching.open_course.recommend_setting.save_btn'|trans }}</button>
        </div>
      </div>
    {% else %}
      <div class=\"empty\">{{ 'my.teaching.open_course.recommend_setting.course_empty'|trans }}</div>
    {% endif %}

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

  </form>
{% endblock %}
", "open-course-manage/open-course-marketing.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\open-course-manage\\open-course-marketing.html.twig");
    }
}
