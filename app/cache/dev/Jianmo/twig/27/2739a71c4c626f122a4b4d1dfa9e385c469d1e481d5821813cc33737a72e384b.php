<?php

/* courseset-manage/navbar.html.twig */
class __TwigTemplate_5ab008ae7f76b9427e97d6953de94e8b5bb16801082ec8a059734dccb4cafe12 extends Twig_Template
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
        $__internal_2b4384bbbafdcb42daa5d4dafb0159262dcf33784aa8ad3fa6c4c338bd8485d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4384bbbafdcb42daa5d4dafb0159262dcf33784aa8ad3fa6c4c338bd8485d8->enter($__internal_2b4384bbbafdcb42daa5d4dafb0159262dcf33784aa8ad3fa6c4c338bd8485d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/navbar.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-tabs nav-header-section cd-mt24 clearfix\">
  ";
        // line 2
        if ( !$this->env->getExtension('AppBundle\Twig\CourseExtension')->isUnMultiCourseSet($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))) {
            // line 3
            echo "    <li class=\"nav-header-section__item cd-ml32 ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "base")) {
                echo "active";
            }
            echo "\">
      ";
            // line 4
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
                // line 5
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "sideNav" => "base")), "html", null, true);
                echo "\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
                echo "
        </a>
      ";
            } else {
                // line 9
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
                echo "</a>
      ";
            }
            // line 11
            echo "    </li>
    ";
            // line 12
            if ( !$this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))) {
                // line 13
                echo "      <div class=\"pull-left nav-header-section-step\" id=\"step-2\">
        <li class=\"nav-header-section__item ";
                // line 14
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "default-course-info")) {
                    echo "active";
                }
                echo "\">
          ";
                // line 15
                if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
                    // line 16
                    echo "            <a class=\"nav-header-section__link\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.plan_setting"), "html", null, true);
                    echo "</a>
          ";
                } else {
                    // line 18
                    echo "            <a class=\"nav-header-section__link\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.plan_setting"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 20
                echo "        </li>
      </div>
    ";
            }
            // line 23
            echo "    <div class=\"pull-left nav-header-section-step\" id=\"step-3\">
      <li class=\"nav-header-section__item ";
            // line 24
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "plan")) {
                echo "active";
            }
            echo "\">
        ";
            // line 25
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
                // line 26
                echo "          <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
                echo "\">
            ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teach_plan_manage"), "html", null, true);
                echo "
          </a>
        ";
            } elseif (($this->getAttribute(            // line 29
(isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "type", array()) == "live")) {
                // line 30
                echo "          <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teach_plan_manage"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 32
                echo "          <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_courses", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.filter.all_plan"), "html", null, true);
                echo "</a>
        ";
            }
            // line 34
            echo "      </li>
    </div>
  ";
        } else {
            // line 37
            echo "    <li class=\"nav-header-section__item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "default-course-info")) {
                echo "active";
            }
            echo "\">
      ";
            // line 38
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
                // line 39
                echo "        <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("courseset.setup"), "html", null, true);
                echo "</a>
      ";
            } else {
                // line 41
                echo "        <a class=\"nav-header-section__link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("courseset.setup"), "html", null, true);
                echo "</a>
      ";
            }
            // line 43
            echo "    </li>
  ";
        }
        // line 45
        echo "
  <div class=\"clearfix nav-header-section-step\" id=\"step-1\">
    <li class=\"nav-header-section__item pull-right cd-mr32 ";
        // line 47
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "question")) {
            echo "active";
        }
        echo "\">
      ";
        // line 48
        if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
            // line 49
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "sideNav" => "question")), "html", null, true);
            echo "\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage"), "html", null, true);
            echo "
        </a>
      ";
        } else {
            // line 53
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_question", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_manage"), "html", null, true);
            echo "
        </a>
      ";
        }
        // line 57
        echo "    </li>

    <li class=\"nav-header-section__item pull-right ";
        // line 59
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "testpaper")) {
            echo "active";
        }
        echo "\" data-intro-group=\"odd\">
      ";
        // line 60
        if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
            // line 61
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "sideNav" => "testpaper")), "html", null, true);
            echo "\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage"), "html", null, true);
            echo "
        </a>
      ";
        } else {
            // line 65
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_testpaper", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage"), "html", null, true);
            echo "
        </a>
      ";
        }
        // line 69
        echo "    </li>

    <li class=\"nav-header-section__item pull-right cd-ml24 ";
        // line 71
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "files")) {
            echo "active";
        }
        echo "\" data-intro-group=\"odd\">
      ";
        // line 72
        if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
            // line 73
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "sideNav" => "files")), "html", null, true);
            echo "\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files"), "html", null, true);
            echo "
        </a>
      ";
        } else {
            // line 77
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_files"), "html", null, true);
            echo "</a>
      ";
        }
        // line 79
        echo "    </li>
  </div>

  ";
        // line 82
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course_set.menu.extension", array("courseSet" => (isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "sideNav" => (isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav"))));
        echo "
</ul>";
        
        $__internal_2b4384bbbafdcb42daa5d4dafb0159262dcf33784aa8ad3fa6c4c338bd8485d8->leave($__internal_2b4384bbbafdcb42daa5d4dafb0159262dcf33784aa8ad3fa6c4c338bd8485d8_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 82,  264 => 79,  256 => 77,  250 => 74,  245 => 73,  243 => 72,  237 => 71,  233 => 69,  227 => 66,  222 => 65,  216 => 62,  211 => 61,  209 => 60,  203 => 59,  199 => 57,  193 => 54,  188 => 53,  182 => 50,  177 => 49,  175 => 48,  169 => 47,  165 => 45,  161 => 43,  153 => 41,  145 => 39,  143 => 38,  136 => 37,  131 => 34,  123 => 32,  115 => 30,  113 => 29,  108 => 27,  103 => 26,  101 => 25,  95 => 24,  92 => 23,  87 => 20,  79 => 18,  71 => 16,  69 => 15,  63 => 14,  60 => 13,  58 => 12,  55 => 11,  47 => 9,  41 => 6,  36 => 5,  34 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-tabs nav-header-section cd-mt24 clearfix\">
  {% if not is_un_multi_courseset(courseSet.id) %}
    <li class=\"nav-header-section__item cd-ml32 {% if side_nav == 'base' %}active{% endif %}\">
      {% if courseSet.locked %}
        <a href=\"{{ path('course_set_manage_sync', {id: courseSet.id, sideNav: 'base'}) }}\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>{{ 'course.base'|trans }}
        </a>
      {% else %}
        <a href=\"{{ path('course_set_manage_base', {id: courseSet.id}) }}\">{{ 'course.base'|trans }}</a>
      {% endif %}
    </li>
    {% if not has_mul_courses(courseSet.id) %}
      <div class=\"pull-left nav-header-section-step\" id=\"step-2\">
        <li class=\"nav-header-section__item {% if side_nav == 'default-course-info' %}active{% endif %}\">
          {% if courseSet.locked %}
            <a class=\"nav-header-section__link\" href=\"{{ path('course_set_manage_course_students', {courseSetId: courseSet.id, courseId: courseSet.defaultCourseId}) }}\">{{ 'site.default.plan_setting'|trans }}</a>
          {% else %}
            <a class=\"nav-header-section__link\" href=\"{{ path('course_set_manage_course_info', {courseSetId: courseSet.id, courseId: courseSet.defaultCourseId}) }}\">{{ 'site.default.plan_setting'|trans }}</a>
          {% endif %}
        </li>
      </div>
    {% endif %}
    <div class=\"pull-left nav-header-section-step\" id=\"step-3\">
      <li class=\"nav-header-section__item {% if side_nav == 'plan' %}active{% endif %}\">
        {% if courseSet.locked %}
          <a class=\"nav-header-section__link\" href=\"{{ path('course_set_manage_course_students', {courseSetId: courseSet.id, courseId: courseSet.defaultCourseId}) }}\">
            {{ 'course.teach_plan_manage'|trans }}
          </a>
        {% elseif courseSet.type == 'live' %}
          <a class=\"nav-header-section__link\" href=\"{{ path('course_set_manage_course_tasks', {courseSetId: courseSet.id, courseId: courseSet.defaultCourseId}) }}\">{{ 'course.teach_plan_manage'|trans }}</a>
        {% else %}
          <a class=\"nav-header-section__link\" href=\"{{ path('course_set_manage_courses', {courseSetId: courseSet.id}) }}\">{{ 'course.filter.all_plan'|trans }}</a>
        {% endif %}
      </li>
    </div>
  {% else %}
    <li class=\"nav-header-section__item {% if side_nav == 'default-course-info' %}active{% endif %}\">
      {% if courseSet.locked %}
        <a class=\"nav-header-section__link\" href=\"{{ path('course_set_manage_course_students', {courseSetId: courseSet.id, courseId: courseSet.defaultCourseId}) }}\">{{ 'courseset.setup'|trans }}</a>
      {% else %}
        <a class=\"nav-header-section__link\" href=\"{{ path('course_set_manage_course_info', {courseSetId: courseSet.id, courseId: courseSet.defaultCourseId}) }}\">{{ 'courseset.setup'|trans }}</a>
      {% endif %}
    </li>
  {% endif %}

  <div class=\"clearfix nav-header-section-step\" id=\"step-1\">
    <li class=\"nav-header-section__item pull-right cd-mr32 {% if side_nav == 'question' %}active{% endif %}\">
      {% if courseSet.locked %}
        <a href=\"{{ path('course_set_manage_sync', {id: courseSet.id, sideNav: 'question'}) }}\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>{{ 'course.question_manage'|trans }}
        </a>
      {% else %}
        <a href=\"{{ path('course_set_manage_question', {id: courseSet.id}) }}\">
          {{ 'course.question_manage'|trans }}
        </a>
      {% endif %}
    </li>

    <li class=\"nav-header-section__item pull-right {% if side_nav == 'testpaper' %}active{% endif %}\" data-intro-group=\"odd\">
      {% if courseSet.locked %}
        <a href=\"{{ path('course_set_manage_sync', {id: courseSet.id, sideNav: 'testpaper'}) }}\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>{{ 'course.testpaper_manage'|trans }}
        </a>
      {% else %}
        <a href=\"{{ path('course_set_manage_testpaper', {id: courseSet.id}) }}\">
          {{ 'course.testpaper_manage'|trans }}
        </a>
      {% endif %}
    </li>

    <li class=\"nav-header-section__item pull-right cd-ml24 {% if side_nav == 'files' %}active{% endif %}\" data-intro-group=\"odd\">
      {% if courseSet.locked %}
        <a href=\"{{ path('course_set_manage_sync', {id: courseSet.id, sideNav: 'files'}) }}\">
          <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>{{ 'course.course_files'|trans }}
        </a>
      {% else %}
        <a href=\"{{ path('course_set_manage_files', {id: courseSet.id}) }}\">{{ 'course.course_files'|trans }}</a>
      {% endif %}
    </li>
  </div>

  {{ slot('course_set.menu.extension', {'courseSet':courseSet,'sideNav':side_nav}) }}
</ul>", "courseset-manage/navbar.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\navbar.html.twig");
    }
}
