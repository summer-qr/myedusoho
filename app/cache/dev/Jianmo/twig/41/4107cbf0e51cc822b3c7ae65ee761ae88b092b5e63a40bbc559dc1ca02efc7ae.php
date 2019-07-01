<?php

/* classroom-manage/menu.html.twig */
class __TwigTemplate_cc5496edb3f3f7be175b2367a0cd8f4b60f9ca76e616f086b8bab3db1ceebd05 extends Twig_Template
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
        $__internal_26625a861c972352010e052fd55ad685eef887d4b259ef287803a8d0f48fdb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26625a861c972352010e052fd55ad685eef887d4b259ef287803a8d0f48fdb25->enter($__internal_26625a861c972352010e052fd55ad685eef887d4b259ef287803a8d0f48fdb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classroom-manage/menu.html.twig"));

        // line 1
        if ((isset($context["canManage"]) ? $context["canManage"] : $this->getContext($context, "canManage"))) {
            // line 2
            echo "  <ul class=\"list-group\">
    <li class=\"list-group-item ";
            // line 3
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "main")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.manage_homepage"), "html", null, true);
            echo "</a>
    </li>
  </ul>
  
  <ul class=\"list-group\">
    <li class=\"list-group-heading\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.manage.side_nav.setting", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</li>
    <li class=\"list-group-item ";
            // line 10
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "base")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.basic_info"), "html", null, true);
            echo " ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array()))) {
                echo "<span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.about_empty"), "html", null, true);
                echo "</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 13
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "price")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.set_price"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 16
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "picture")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.set_picture"), "html", null, true);
            echo " ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array()))) {
                echo "<span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.unset"), "html", null, true);
                echo "</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 19
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "service")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_service", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.set_service"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 22
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "headTeacher")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_headteacher", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.set_head_teacher"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 25
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "teachers")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_teachers", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.set_teachers"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 28
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "assistant")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_assistants", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.set_assistant"), "html", null, true);
            echo "</a>
    </li>
  </ul>
";
        }
        // line 33
        echo "
<ul class=\"list-group\">
  <li class=\"list-group-heading\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.manage.side_nav.manage", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "</li>
  ";
        // line 36
        if ((isset($context["canManage"]) ? $context["canManage"] : $this->getContext($context, "canManage"))) {
            // line 37
            echo "    <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "courses")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course_manage"), "html", null, true);
            echo "</a></li>
    <li class=\"list-group-item ";
            // line 38
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "students")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.student_manage"), "html", null, true);
            echo "</a>
    </li>
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        if ((isset($context["canHandle"]) ? $context["canHandle"] : $this->getContext($context, "canHandle"))) {
            // line 44
            echo "    <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "testpaper-check")) {
                echo " active ";
            }
            echo "\">
      <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.testpaper_check"), "html", null, true);
            echo "</a>
    </li>
   
    <li class=\"list-group-item ";
            // line 48
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "homework-check")) {
                echo " active ";
            }
            echo "\">
      <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_homework", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.homework_check"), "html", null, true);
            echo "</a>
    </li>
  ";
        }
        // line 52
        echo "</ul>
";
        
        $__internal_26625a861c972352010e052fd55ad685eef887d4b259ef287803a8d0f48fdb25->leave($__internal_26625a861c972352010e052fd55ad685eef887d4b259ef287803a8d0f48fdb25_prof);

    }

    public function getTemplateName()
    {
        return "classroom-manage/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 52,  213 => 49,  207 => 48,  199 => 45,  192 => 44,  190 => 43,  187 => 42,  179 => 39,  173 => 38,  162 => 37,  160 => 36,  156 => 35,  152 => 33,  143 => 29,  137 => 28,  130 => 26,  124 => 25,  117 => 23,  111 => 22,  104 => 20,  98 => 19,  85 => 17,  79 => 16,  72 => 14,  66 => 13,  53 => 11,  47 => 10,  43 => 9,  33 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if canManage %}
  <ul class=\"list-group\">
    <li class=\"list-group-item {% if side_nav == 'main' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage', {id:classroom.id}) }}\">{{'classroom.manage_homepage'|trans}}</a>
    </li>
  </ul>
  
  <ul class=\"list-group\">
    <li class=\"list-group-heading\">{{ 'classroom.manage.side_nav.setting'|trans({'%classroom%':setting('classroom.name')|default('classroom'|trans)}) }}</li>
    <li class=\"list-group-item {% if side_nav == 'base' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_set_info', {id:classroom.id}) }}\">{{'classroom.basic_info'|trans}} {% if classroom.about is empty %}<span class=\"label label-info\">{{'classroom.about_empty'|trans}}</span>{% endif %}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'price' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_set_price', {id:classroom.id}) }}\">{{'classroom.set_price'|trans}}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'picture' %}active{% endif %}\">
    <a href=\"{{ path('classroom_manage_set_picture', {id:classroom.id}) }}\">{{'classroom.set_picture'|trans}} {% if classroom.smallPicture is empty %}<span class=\"label label-info\">{{'classroom.unset'|trans}}</span>{% endif %}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'service' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_service', {id:classroom.id}) }}\">{{'classroom.set_service'|trans}}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'headTeacher' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_headteacher', {id:classroom.id}) }}\">{{'classroom.set_head_teacher'|trans}}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'teachers' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_teachers', {id:classroom.id}) }}\">{{'classroom.set_teachers'|trans}}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'assistant' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_assistants', {id:classroom.id}) }}\">{{'classroom.set_assistant'|trans}}</a>
    </li>
  </ul>
{% endif %}

<ul class=\"list-group\">
  <li class=\"list-group-heading\">{{ 'classroom.manage.side_nav.manage'|trans({'%classroom%':setting('classroom.name')|default('classroom'|trans)}) }}</li>
  {% if canManage %}
    <li class=\"list-group-item {% if side_nav == 'courses' %}active{% endif %}\"><a href=\"{{ path('classroom_manage_courses', {id:classroom.id}) }}\">{{'classroom.course_manage'|trans}}</a></li>
    <li class=\"list-group-item {% if side_nav == 'students' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_students', {id:classroom.id}) }}\">{{'classroom.student_manage'|trans}}</a>
    </li>
  {% endif %}

  {% if canHandle %}
    <li class=\"list-group-item {% if side_nav == 'testpaper-check' %} active {% endif %}\">
      <a href=\"{{ path('classroom_manage_testpaper', {id:classroom.id}) }}\">{{'classroom.testpaper_check'|trans}}</a>
    </li>
   
    <li class=\"list-group-item {% if side_nav == 'homework-check' %} active {% endif %}\">
      <a href=\"{{ path('classroom_manage_homework', {id:classroom.id}) }}\">{{'classroom.homework_check'|trans}}</a>
    </li>
  {% endif %}
</ul>
", "classroom-manage/menu.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\classroom-manage\\menu.html.twig");
    }
}
