<?php

/* courseset-manage/sidebar.html.twig */
class __TwigTemplate_da669c2493b578a4c8daba98cc5e7bd91943e9ce61af4a1be96e5d57aa257598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'side' => array($this, 'block_side'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55786f260b6aef0958f1d7baf0ee7658c638bee338e4edbee66af07c2d88c108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55786f260b6aef0958f1d7baf0ee7658c638bee338e4edbee66af07c2d88c108->enter($__internal_55786f260b6aef0958f1d7baf0ee7658c638bee338e4edbee66af07c2d88c108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/sidebar.html.twig"));

        // line 1
        $this->displayBlock('side', $context, $blocks);
        
        $__internal_55786f260b6aef0958f1d7baf0ee7658c638bee338e4edbee66af07c2d88c108->leave($__internal_55786f260b6aef0958f1d7baf0ee7658c638bee338e4edbee66af07c2d88c108_prof);

    }

    public function block_side($context, array $blocks = array())
    {
        $__internal_ca1864f361b7ede734027d2d3d44d2888e207e6aac0537b0018712cd69f6a293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1864f361b7ede734027d2d3d44d2888e207e6aac0537b0018712cd69f6a293->enter($__internal_ca1864f361b7ede734027d2d3d44d2888e207e6aac0537b0018712cd69f6a293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 2
        echo "  <div class=\"cd-sidebar locked js-sidenav\" data-course-length=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseCount($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array())), "html", null, true);
        echo "\">
    <ul class=\"cd-sidebar__list\">
      <div class=\"js-sidenav-course-menu\">
        <li class=\"cd-sidebar__item ";
        // line 5
        if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "info")) {
            echo "active";
        }
        echo "\">
          ";
        // line 6
        if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
            // line 7
            echo "            <a class=\"pl10\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "sideNav" => "info")), "html", null, true);
            echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_base_info"), "html", null, true);
            echo "
            </a>
          ";
        } else {
            // line 11
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_info", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_base_info"), "html", null, true);
            echo "
            </a>
          ";
        }
        // line 15
        echo "        </li>
        <li class=\"cd-sidebar__item ";
        // line 16
        if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "tasks")) {
            echo "active";
        }
        echo "\">
          ";
        // line 17
        if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
            // line 18
            echo "            <a class=\"pl10\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "sideNav" => "tasks")), "html", null, true);
            echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task"), "html", null, true);
            echo "
            </a>
          ";
        } else {
            // line 22
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task"), "html", null, true);
            echo "
            </a>
          ";
        }
        // line 26
        echo "        </li>
        ";
        // line 28
        echo "        ";
        if (((isset($context["hasLiveTasks"]) ? $context["hasLiveTasks"] : $this->getContext($context, "hasLiveTasks")) || ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "type", array()) == "live"))) {
            // line 29
            echo "          <li class=\"cd-sidebar__item ";
            if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "replay")) {
                echo "active";
            }
            echo "\">
            ";
            // line 30
            if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
                // line 31
                echo "              <a class=\"pl10\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "sideNav" => "replay")), "html", null, true);
                echo "\">
                <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.replay_manage"), "html", null, true);
                echo "
              </a>
            ";
            } else {
                // line 35
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_replay", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.replay_manage"), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 39
            echo "          </li>
        ";
        }
        // line 41
        echo "        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>

        <li class=\"cd-sidebar__item ";
        // line 43
        if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "teachers")) {
            echo "active";
        }
        echo "\">
          ";
        // line 44
        if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "locked", array())) {
            // line 45
            echo "            <a class=\"pl10\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "sideNav" => "teachers")), "html", null, true);
            echo "\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup"), "html", null, true);
            echo "
            </a>
          ";
        } else {
            // line 49
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_teachers", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher_setup"), "html", null, true);
            echo "
            </a>
          ";
        }
        // line 53
        echo "        </li>

        <li class=\"cd-sidebar__item ";
        // line 55
        if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "students")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_students", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.student_manage"), "html", null, true);
        echo "
          </a>
        </li>


        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>

        <li class=\"cd-sidebar__item ";
        // line 64
        if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "testpaper-check")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_testpaper_check_list", array("id" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_check"), "html", null, true);
        echo "
          </a>
        </li>
        <li class=\"cd-sidebar__item ";
        // line 68
        if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "homework-check")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_homework_check_list", array("id" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.homework_check"), "html", null, true);
        echo "
          </a>
        </li>

        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>
        <li class=\"cd-sidebar__item ";
        // line 74
        if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "overview")) {
            echo "active";
        }
        echo "\" id=\"step-0\">
          <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_overview", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
        echo "\">
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_overview"), "html", null, true);
        echo "
          </a>
        </li>
        ";
        // line 79
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "cloud")) {
            // line 80
            echo "          <li class=\"cd-sidebar__item ";
            if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "question_marker")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_question_marker", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
            echo "\">
              ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.question_marker_statistics"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 85
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.teacher_search_order") == 1))) {
            // line 86
            echo "          <li class=\"cd-sidebar__item ";
            if (((isset($context["course_side_nav"]) ? $context["course_side_nav"] : $this->getContext($context, "course_side_nav")) == "orders")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_orders", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "courseId" => $this->getAttribute((isset($context["curCourse"]) ? $context["curCourse"] : $this->getContext($context, "curCourse")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.order"), "html", null, true);
            echo "
            </a>
          </li>
        ";
        }
        // line 91
        echo "      </div>
    </ul>
  </div>
";
        
        $__internal_ca1864f361b7ede734027d2d3d44d2888e207e6aac0537b0018712cd69f6a293->leave($__internal_ca1864f361b7ede734027d2d3d44d2888e207e6aac0537b0018712cd69f6a293_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  288 => 91,  279 => 87,  272 => 86,  269 => 85,  263 => 82,  259 => 81,  252 => 80,  250 => 79,  244 => 76,  240 => 75,  234 => 74,  224 => 69,  218 => 68,  210 => 65,  204 => 64,  194 => 57,  190 => 56,  184 => 55,  180 => 53,  174 => 50,  169 => 49,  163 => 46,  158 => 45,  156 => 44,  150 => 43,  146 => 41,  142 => 39,  136 => 36,  131 => 35,  125 => 32,  120 => 31,  118 => 30,  111 => 29,  108 => 28,  105 => 26,  99 => 23,  94 => 22,  88 => 19,  83 => 18,  81 => 17,  75 => 16,  72 => 15,  66 => 12,  61 => 11,  55 => 8,  50 => 7,  48 => 6,  42 => 5,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block side %}
  <div class=\"cd-sidebar locked js-sidenav\" data-course-length=\"{{get_course_count(courseSet.id)}}\">
    <ul class=\"cd-sidebar__list\">
      <div class=\"js-sidenav-course-menu\">
        <li class=\"cd-sidebar__item {% if course_side_nav == 'info' %}active{% endif %}\">
          {% if courseSet.locked %}
            <a class=\"pl10\" href=\"{{ path('course_set_manage_sync', {id: courseSet.id, sideNav: 'info'}) }}\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>{{ 'course.plan_base_info'|trans }}
            </a>
          {% else %}
            <a href=\"{{ path('course_set_manage_course_info', {courseSetId: courseSet.id, courseId: curCourse.id}) }}\">
              {{ 'course.plan_base_info'|trans }}
            </a>
          {% endif %}
        </li>
        <li class=\"cd-sidebar__item {% if course_side_nav == 'tasks' %}active{% endif %}\">
          {% if courseSet.locked %}
            <a class=\"pl10\" href=\"{{ path('course_set_manage_sync', {id: courseSet.id, sideNav: 'tasks'}) }}\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>{{ 'course.plan_task'|trans }}
            </a>
          {% else %}
            <a href=\"{{ path('course_set_manage_course_tasks', {courseSetId: courseSet.id, courseId: curCourse.id}) }}\">
              {{ 'course.plan_task'|trans }}
            </a>
          {% endif %}
        </li>
        {# 录播管理 #}
        {% if hasLiveTasks or courseSet.type == 'live' %}
          <li class=\"cd-sidebar__item {% if course_side_nav == 'replay' %}active{% endif %}\">
            {% if courseSet.locked %}
              <a class=\"pl10\" href=\"{{ path('course_set_manage_sync', {id: courseSet.id, sideNav: 'replay'}) }}\">
                <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>{{ 'course.replay_manage'|trans }}
              </a>
            {% else %}
              <a href=\"{{ path('course_set_manage_course_replay', {courseSetId: courseSet.id, courseId: curCourse.id}) }}\">
                {{ 'course.replay_manage'|trans }}
              </a>
            {% endif %}
          </li>
        {% endif %}
        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>

        <li class=\"cd-sidebar__item {% if course_side_nav == 'teachers' %}active{% endif %}\">
          {% if courseSet.locked %}
            <a class=\"pl10\" href=\"{{ path('course_set_manage_sync', {id: courseSet.id, sideNav: 'teachers'}) }}\">
              <span class=\"es-icon es-icon-lock mr10\" aria-hidden=\"true\"></span>{{ 'course.teacher_setup'|trans }}
            </a>
          {% else %}
            <a href=\"{{ path('course_set_manage_course_teachers', {courseSetId: courseSet.id, courseId: curCourse.id}) }}\">
              {{ 'course.teacher_setup'|trans }}
            </a>
          {% endif %}
        </li>

        <li class=\"cd-sidebar__item {% if course_side_nav == 'students' %}active{% endif %}\">
          <a href=\"{{ path('course_set_manage_course_students', {courseSetId: courseSet.id, courseId: curCourse.id}) }}\">
            {{ 'course.student_manage'|trans }}
          </a>
        </li>


        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>

        <li class=\"cd-sidebar__item {% if course_side_nav == 'testpaper-check' %}active{% endif %}\">
          <a href=\"{{ path('course_manage_testpaper_check_list', {id: curCourse.id}) }}\">{{ 'course.testpaper_check'|trans }}
          </a>
        </li>
        <li class=\"cd-sidebar__item {% if course_side_nav == 'homework-check' %}active{% endif %}\">
          <a href=\"{{ path('course_manage_homework_check_list', {id: curCourse.id}) }}\">{{ 'course.homework_check'|trans }}
          </a>
        </li>

        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>
        <li class=\"cd-sidebar__item {% if course_side_nav == 'overview' %}active{% endif %}\" id=\"step-0\">
          <a href=\"{{ path('course_set_manage_course_overview', {courseSetId: courseSet.id, courseId: curCourse.id}) }}\">
            {{ 'course.plan_overview'|trans }}
          </a>
        </li>
        {% if setting('storage.upload_mode', 'local') == 'cloud' %}
          <li class=\"cd-sidebar__item {% if course_side_nav == 'question_marker' %}active{% endif %}\">
            <a href=\"{{ path('course_manage_question_marker',{courseSetId: courseSet.id, courseId: curCourse.id}) }}\">
              {{ 'course.question_marker_statistics'|trans }}</a>
          </li>
        {% endif %}
        {% if app.user.isAdmin() or setting('course.teacher_search_order') == 1 %}
          <li class=\"cd-sidebar__item {% if course_side_nav == 'orders' %}active{% endif %}\">
            <a href=\"{{ path('course_set_manage_course_orders', {courseSetId: courseSet.id, courseId: curCourse.id}) }}\">{{ 'course.order'|trans }}
            </a>
          </li>
        {% endif %}
      </div>
    </ul>
  </div>
{% endblock %}
", "courseset-manage/sidebar.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\sidebar.html.twig");
    }
}
