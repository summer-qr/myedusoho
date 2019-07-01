<?php

/* open-course-manage/sidebar.html.twig */
class __TwigTemplate_629d5799e9a5dbed762d95615452d912a9c0dcf6e399c2b8ba8cdc84df74acc4 extends Twig_Template
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
        $__internal_39a948531e1b8adef275f17cc0ee15d8a63b47aee453e5d0a938a7c55136c1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a948531e1b8adef275f17cc0ee15d8a63b47aee453e5d0a938a7c55136c1f7->enter($__internal_39a948531e1b8adef275f17cc0ee15d8a63b47aee453e5d0a938a7c55136c1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "open-course-manage/sidebar.html.twig"));

        // line 1
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), null)) : (null));
        // line 2
        echo "
<div class=\"cd-sidebar\">
    <ul class=\"cd-sidebar__list\">

        <li class=\"cd-sidebar__item ";
        // line 6
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "base")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
            <span ";
        // line 8
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info"), "html", null, true);
        echo "
          </a>
        </li>

        ";
        // line 12
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "liveOpen")) {
            // line 13
            echo "            <li class=\"cd-sidebar__item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "replay")) {
                echo "active";
            }
            echo "\" >
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_open_course_manage_replay", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">
                    <span ";
            // line 15
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.live_manage"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        // line 18
        echo "        ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "open")) {
            // line 19
            echo "            <li class=\"cd-sidebar__item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "lesson")) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">
                    <span ";
            // line 21
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo " ></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.lesson.manage"), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        // line 25
        echo "
        <li class=\"cd-sidebar__item ";
        // line 26
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "marketing")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_marketing", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
                <span></span>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.liveTimeSet.recommend_setting"), "html", null, true);
        echo "
            </a>
        </li>

        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>

        <li class=\"cd-sidebar__item ";
        // line 34
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "teachers")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_teachers", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
                <span ";
        // line 36
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.teachers_setting.title"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"cd-sidebar__item ";
        // line 39
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "students")) {
            echo "active";
        }
        echo "\">
            <a ";
        // line 40
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "open")) {
            echo "class=\"nav-header-section__link\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "userType" => "login")), "html", null, true);
        echo "\">
                <span></span>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.student_setting.manage_btn"), "html", null, true);
        echo "
            </a>
        </li>

        <li class=\"cd-sidebar__heading\">";
        // line 45
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "open")) {
            echo "<hr class=\"mt0 mb0 mh10 bg-border-color\"/>";
        }
        echo "</li>

        ";
        // line 47
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "open")) {
            // line 48
            echo "            <li class=\"cd-sidebar__item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "files")) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">
                    <span ";
            // line 50
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo " ></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.file_manage_btn"), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        // line 54
        echo "
    </ul>
</div>
";
        
        $__internal_39a948531e1b8adef275f17cc0ee15d8a63b47aee453e5d0a938a7c55136c1f7->leave($__internal_39a948531e1b8adef275f17cc0ee15d8a63b47aee453e5d0a938a7c55136c1f7_prof);

    }

    public function getTemplateName()
    {
        return "open-course-manage/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 54,  183 => 50,  179 => 49,  172 => 48,  170 => 47,  163 => 45,  155 => 41,  147 => 40,  141 => 39,  131 => 36,  127 => 35,  121 => 34,  112 => 28,  108 => 27,  102 => 26,  99 => 25,  88 => 21,  84 => 20,  77 => 19,  74 => 18,  64 => 15,  60 => 14,  53 => 13,  51 => 12,  40 => 8,  36 => 7,  30 => 6,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set side_nav = side_nav|default(null) %}

<div class=\"cd-sidebar\">
    <ul class=\"cd-sidebar__list\">

        <li class=\"cd-sidebar__item {% if side_nav == 'base' %}active{% endif %}\">
          <a href=\"{{ path('open_course_manage_base', {id:course.id}) }}\">
            <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'my.teaching.open_course.Basic_Info'|trans}}
          </a>
        </li>

        {% if course.type == 'liveOpen' %}
            <li class=\"cd-sidebar__item {% if side_nav == 'replay' %}active{% endif %}\" >
                <a href=\"{{ path('live_open_course_manage_replay', {id:course.id}) }}\">
                    <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'my.teaching.open_course.live_manage'|trans}}</a>
            </li>
        {% endif %}
        {% if course.type == 'open' %}
            <li class=\"cd-sidebar__item {% if side_nav == 'lesson' %}active{% endif %}\">
                <a href=\"{{ path('open_course_manage_lesson', {id:course.id}) }}\">
                    <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'my.teaching.open_course.lesson.manage'|trans}}
                </a>
            </li>
        {% endif %}

        <li class=\"cd-sidebar__item {% if side_nav == 'marketing' %}active{% endif %}\">
            <a href=\"{{ path('open_course_manage_marketing', {id:course.id}) }}\">
                <span></span>{{'my.teaching.open_course.liveTimeSet.recommend_setting'|trans}}
            </a>
        </li>

        <li class=\"cd-sidebar__heading\"><hr class=\"mt0 mb0 mh10 bg-border-color\"/></li>

        <li class=\"cd-sidebar__item {% if side_nav == 'teachers' %}active{% endif %}\">
            <a href=\"{{ path('open_course_manage_teachers', {id:course.id}) }}\">
                <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'my.teaching.open_course.teachers_setting.title'|trans}}
            </a>
        </li>
        <li class=\"cd-sidebar__item {% if side_nav == 'students' %}active{% endif %}\">
            <a {% if course.type == 'open' %}class=\"nav-header-section__link\"{% endif %} href=\"{{ path('open_course_manage_students', {id:course.id,userType:'login'}) }}\">
                <span></span>{{'site.default.student'|trans}}{{'my.teaching.open_course.student_setting.manage_btn'|trans}}
            </a>
        </li>

        <li class=\"cd-sidebar__heading\">{% if course.type == 'open' %}<hr class=\"mt0 mb0 mh10 bg-border-color\"/>{% endif %}</li>

        {% if course.type == 'open' %}
            <li class=\"cd-sidebar__item {% if side_nav == 'files' %}active{% endif %}\">
                <a href=\"{{ path('open_course_manage_files', {id:course.id}) }}\">
                    <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'my.teaching.open_course.file_manage_btn'|trans}}
                </a>
            </li>
        {% endif %}

    </ul>
</div>
", "open-course-manage/sidebar.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\open-course-manage\\sidebar.html.twig");
    }
}
