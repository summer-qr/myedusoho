<?php

/* my/teaching/classroom.html.twig */
class __TwigTemplate_f1240383c901e1a8adfdb26730a075ae07748da82c3be048bea93137e115095b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/my-teaching.html.twig", "my/teaching/classroom.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/my-teaching.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bef88c7435cfd3f68d9ca0a69afa8ef1419bd0806f30cccffd48abb654e0cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bef88c7435cfd3f68d9ca0a69afa8ef1419bd0806f30cccffd48abb654e0cd3->enter($__internal_6bef88c7435cfd3f68d9ca0a69afa8ef1419bd0806f30cccffd48abb654e0cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/teaching/classroom.html.twig"));

        // line 5
        $context["side_nav"] = "my-teaching-classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bef88c7435cfd3f68d9ca0a69afa8ef1419bd0806f30cccffd48abb654e0cd3->leave($__internal_6bef88c7435cfd3f68d9ca0a69afa8ef1419bd0806f30cccffd48abb654e0cd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d406e363537d9e4ee7bc1cdf8e65003c0b1ea0d49b8027d1f23db11042ed9106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d406e363537d9e4ee7bc1cdf8e65003c0b1ea0d49b8027d1f23db11042ed9106->enter($__internal_d406e363537d9e4ee7bc1cdf8e65003c0b1ea0d49b8027d1f23db11042ed9106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.classroom", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_d406e363537d9e4ee7bc1cdf8e65003c0b1ea0d49b8027d1f23db11042ed9106->leave($__internal_d406e363537d9e4ee7bc1cdf8e65003c0b1ea0d49b8027d1f23db11042ed9106_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_6cf076c40ab84106a40210fd897ef103552823a1ddc40d8b8952dc611e1d982e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf076c40ab84106a40210fd897ef103552823a1ddc40d8b8952dc611e1d982e->enter($__internal_6cf076c40ab84106a40210fd897ef103552823a1ddc40d8b8952dc611e1d982e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.classroom", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
       <ul class=\"course-wide-list\">
            ";
        // line 16
        if ((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms"))) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms")));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 18
                echo "            <li class=\"course-item clearfix\">
              <a class=\"course-picture-link\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "\">
              </a>
              <div class=\"course-body\">
                ";
                // line 23
                if ((($this->getAttribute($this->getAttribute((isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()) == "headTeacher") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                    // line 24
                    echo "                  <div style=\"float:right;\" class=\"color-gray mrm mls\">
                  <span class=\"glyphicon glyphicon-cog\"></span> <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.classroom.manage_btn", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
                    echo "</a>
                  </div>
                ";
                }
                // line 28
                echo "                <h4 class=\"mbl\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a>
                ";
                // line 29
                if (($this->getAttribute($context["classroom"], "status", array()) == "draft")) {
                    // line 30
                    echo "                <span class=\"label label-warning \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.status.unpublish"), "html", null, true);
                    echo "</span>
                ";
                } elseif (($this->getAttribute(                // line 31
$context["classroom"], "status", array()) == "closed")) {
                    // line 32
                    echo "                <span class=\"label label-danger \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.status.closed"), "html", null, true);
                    echo "</span>
                ";
                }
                // line 34
                echo "                </h4>

                <span class=\"color-gray\">";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom.total_course_count", array("%Count%" => $this->getAttribute($context["classroom"], "coursesCount", array()))), "html", null, true);
                echo "
                <i class=\"es-icon es-icon-groupadd mll\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                echo "</span>
                <div class=\"course-footer clearfix mtl\">
                   <strong class=\"mrl\">";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.classroom.today_data_title"), "html", null, true);
                echo "</strong>
                   ";
                // line 40
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.classroom.today_data", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "%allCount%" => $this->getAttribute($context["classroom"], "allCount", array()), "%threadCount%" => $this->getAttribute($context["classroom"], "threadCount", array()), "%todayFinishedTaskNum%" => $this->getAttribute($context["classroom"], "todayFinishedTaskNum", array())));
                echo "
                </div>
              </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "              <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div>
            ";
        }
        // line 48
        echo "          </ul>
  </div>
    <nav class=\"text-center\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "</nav>

</div>

";
        
        $__internal_6cf076c40ab84106a40210fd897ef103552823a1ddc40d8b8952dc611e1d982e->leave($__internal_6cf076c40ab84106a40210fd897ef103552823a1ddc40d8b8952dc611e1d982e_prof);

    }

    public function getTemplateName()
    {
        return "my/teaching/classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 50,  165 => 48,  159 => 46,  156 => 45,  145 => 40,  141 => 39,  136 => 37,  132 => 36,  128 => 34,  122 => 32,  120 => 31,  115 => 30,  113 => 29,  106 => 28,  98 => 25,  95 => 24,  93 => 23,  85 => 20,  81 => 19,  78 => 18,  73 => 17,  71 => 16,  63 => 11,  58 => 8,  52 => 7,  38 => 3,  31 => 1,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'my/my-teaching.html.twig' %}

{% block title %}{{'my.teaching.classroom'|trans({'%classroom%':setting('classroom.name')|default('site.default.classroom'|trans)})}} - {{ parent() }}{% endblock %}

{% set side_nav = 'my-teaching-classroom' %}

{% block main %}

<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    {{'my.teaching.classroom'|trans({'%classroom%':setting('classroom.name')|default('site.default.classroom'|trans)})}}
  </div>

  <div class=\"panel-body\">
       <ul class=\"course-wide-list\">
            {% if classrooms %}
            {% for classroom in classrooms %}
            <li class=\"course-item clearfix\">
              <a class=\"course-picture-link\" href=\"{{ path('classroom_show', {id:classroom.id}) }}\" target=\"_blank\">
                <img class=\"course-picture\" src=\"{{ filepath(classroom.middlePicture, 'classroom.png') }}\" alt=\"{{ classroom.title }}\">
              </a>
              <div class=\"course-body\">
                {% if members[classroom.id].role == \"headTeacher\"  or is_granted('ROLE_ADMIN') %}
                  <div style=\"float:right;\" class=\"color-gray mrm mls\">
                  <span class=\"glyphicon glyphicon-cog\"></span> <a href=\"{{path('classroom_manage',{id:classroom.id})}}\">{{'my.teaching.classroom.manage_btn'|trans({'%classroom%':setting('classroom.name')|default('site.default.classroom'|trans)})}}</a>
                  </div>
                {% endif %}
                <h4 class=\"mbl\"><a href=\"{{ path('classroom_show', {id:classroom.id}) }}\" target=\"_blank\">{{classroom.title}}</a>
                {% if classroom.status == \"draft\" %}
                <span class=\"label label-warning \">{{'classroom.status.unpublish'|trans}}</span>
                {% elseif classroom.status == \"closed\" %}
                <span class=\"label label-danger \">{{'classroom.status.closed'|trans}}</span>
                {% endif %}
                </h4>

                <span class=\"color-gray\">{{'my.learning.classroom.total_course_count'|trans({'%Count%':classroom.coursesCount})}}
                <i class=\"es-icon es-icon-groupadd mll\"></i> {{classroom.studentNum + classroom.auditorNum}}</span>
                <div class=\"course-footer clearfix mtl\">
                   <strong class=\"mrl\">{{'my.teaching.classroom.today_data_title'|trans}}</strong>
                   {{ 'my.teaching.classroom.today_data'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans),'%allCount%':classroom.allCount, '%threadCount%':classroom.threadCount, '%todayFinishedTaskNum%':classroom.todayFinishedTaskNum})|raw }}
                </div>
              </div>
            </li>
            {% endfor %}
            {% else %}
              <div class=\"empty\">{{'site.datagrid.empty'|trans}}</div>
            {% endif %}
          </ul>
  </div>
    <nav class=\"text-center\">{{ web_macro.paginator(paginator) }}</nav>

</div>

{% endblock %}", "my/teaching/classroom.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\teaching\\classroom.html.twig");
    }
}
