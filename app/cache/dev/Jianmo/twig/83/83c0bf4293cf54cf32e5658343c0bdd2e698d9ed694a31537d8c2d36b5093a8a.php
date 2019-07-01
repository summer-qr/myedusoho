<?php

/* my/layout.html.twig */
class __TwigTemplate_0a419b7d2c2226b256323d1bdc33194b92096afa192cdc50619c50f42916e2c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "my/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'main_mobile' => array($this, 'block_main_mobile'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e1c4954a78f795b5b3554f4b600976c367c5248604962916958f59640ff52c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1c4954a78f795b5b3554f4b600976c367c5248604962916958f59640ff52c8->enter($__internal_9e1c4954a78f795b5b3554f4b600976c367c5248604962916958f59640ff52c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e1c4954a78f795b5b3554f4b600976c367c5248604962916958f59640ff52c8->leave($__internal_9e1c4954a78f795b5b3554f4b600976c367c5248604962916958f59640ff52c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21eb3189d937ccd70928da8c4c0cdf61534d81bb6797244dfda1262b7f32c52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21eb3189d937ccd70928da8c4c0cdf61534d81bb6797244dfda1262b7f32c52e->enter($__internal_21eb3189d937ccd70928da8c4c0cdf61534d81bb6797244dfda1262b7f32c52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.menu_heading"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_21eb3189d937ccd70928da8c4c0cdf61534d81bb6797244dfda1262b7f32c52e->leave($__internal_21eb3189d937ccd70928da8c4c0cdf61534d81bb6797244dfda1262b7f32c52e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_a56802deefcbbca1b2c21aca6df2b1a3f99a070ff25bd91558a03f8a0efe084f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56802deefcbbca1b2c21aca6df2b1a3f99a070ff25bd91558a03f8a0efe084f->enter($__internal_a56802deefcbbca1b2c21aca6df2b1a3f99a070ff25bd91558a03f8a0efe084f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
  ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:My/User:avatarAlert"));
        echo "

  <div class=\"row row-3-9 my-layout\">
    <div class=\"col-md-3\">
      <div class=\"sidenav\">
        ";
        // line 14
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Point")) {
            // line 15
            echo "          <ul class=\"list-group\">
            <li class=\"list-group-heading\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.point"), "html", null, true);
            echo "</li>
            <li class=\"list-group-item
           ";
            // line 18
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "growth")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.point.growth"), "html", null, true);
            echo "</a>
            </li>
          </ul>
        ";
        }
        // line 23
        echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.menu_heading"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 25
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-learning")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course_set_menu"), "html", null, true);
        echo "</a>
          </li>

          <li class=\"list-group-item ";
        // line 29
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-classroom")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_classrooms");
        echo "\">
              ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.classroom_menu", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
        echo "
            </a>
          </li>

          ";
        // line 35
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.live_course_enabled")) {
            // line 36
            echo "            <li class=\"list-group-item
          ";
            // line 37
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-learning-live")) {
                echo " active ";
            }
            echo "\">
              <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_live_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.live_menu"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 41
        echo "
          <li class=\"list-group-item
        ";
        // line 43
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-questions")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_questions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.question_menu"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item
        ";
        // line 47
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-discussions")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_discussions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.discussion_menu"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item
        ";
        // line 51
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-notes")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_notebooks");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.notebook_menu"), "html", null, true);
        echo "</a>
          </li>

          <li class=\"list-group-item ";
        // line 55
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-homework")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homework_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.homework_menu"), "html", null, true);
        echo "</a>
          </li>

          <li class=\"list-group-item ";
        // line 59
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-testpaper")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_testpaper_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.testpaper_menu"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item
        ";
        // line 63
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-group")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_group_member_center");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.group_menu"), "html", null, true);
        echo "</a>
          </li>

          ";
        // line 67
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("my.learning.menu", array("side_nav" => (isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav"))));
        echo "
        </ul>
      </div>
    </div>
    <div class=\"col-md-9\">";
        // line 71
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
  </div>

  ";
        // line 74
        $this->displayBlock('main_mobile', $context, $blocks);
        // line 75
        echo "
";
        
        $__internal_a56802deefcbbca1b2c21aca6df2b1a3f99a070ff25bd91558a03f8a0efe084f->leave($__internal_a56802deefcbbca1b2c21aca6df2b1a3f99a070ff25bd91558a03f8a0efe084f_prof);

    }

    // line 71
    public function block_main($context, array $blocks = array())
    {
        $__internal_f6fe410b5824891ea629bf2f86cd13a993109c968a540e888c3e1d5c1b7ceec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fe410b5824891ea629bf2f86cd13a993109c968a540e888c3e1d5c1b7ceec3->enter($__internal_f6fe410b5824891ea629bf2f86cd13a993109c968a540e888c3e1d5c1b7ceec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_f6fe410b5824891ea629bf2f86cd13a993109c968a540e888c3e1d5c1b7ceec3->leave($__internal_f6fe410b5824891ea629bf2f86cd13a993109c968a540e888c3e1d5c1b7ceec3_prof);

    }

    // line 74
    public function block_main_mobile($context, array $blocks = array())
    {
        $__internal_4abf7681f53594294d45827dc0e5a24ab5947791933de1ddca9106ef10b070ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abf7681f53594294d45827dc0e5a24ab5947791933de1ddca9106ef10b070ef->enter($__internal_4abf7681f53594294d45827dc0e5a24ab5947791933de1ddca9106ef10b070ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_mobile"));

        
        $__internal_4abf7681f53594294d45827dc0e5a24ab5947791933de1ddca9106ef10b070ef->leave($__internal_4abf7681f53594294d45827dc0e5a24ab5947791933de1ddca9106ef10b070ef_prof);

    }

    public function getTemplateName()
    {
        return "my/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 74,  265 => 71,  257 => 75,  255 => 74,  249 => 71,  242 => 67,  234 => 64,  228 => 63,  220 => 60,  214 => 59,  206 => 56,  200 => 55,  192 => 52,  186 => 51,  178 => 48,  172 => 47,  164 => 44,  158 => 43,  154 => 41,  146 => 38,  140 => 37,  137 => 36,  135 => 35,  128 => 31,  124 => 30,  118 => 29,  110 => 26,  104 => 25,  100 => 24,  97 => 23,  88 => 19,  82 => 18,  77 => 16,  74 => 15,  72 => 14,  64 => 9,  61 => 8,  55 => 7,  43 => 4,  37 => 3,  11 => 1,);
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

{% block title %}
  {{ 'my.learning.menu_heading'|trans }} - {{ parent() }}
{% endblock %}

{% block content %}

  {{ render(controller('AppBundle:My/User:avatarAlert')) }}

  <div class=\"row row-3-9 my-layout\">
    <div class=\"col-md-3\">
      <div class=\"sidenav\">
        {% if is_plugin_installed('Point') %}
          <ul class=\"list-group\">
            <li class=\"list-group-heading\">{{ 'plugin.point'|trans }}</li>
            <li class=\"list-group-item
           {% if side_nav == 'growth' %} active {% endif %}\">
              <a href=\"{{ path('my') }}\">{{ 'plugin.point.growth'|trans }}</a>
            </li>
          </ul>
        {% endif %}
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">{{ 'my.learning.menu_heading'|trans }}</li>
          <li class=\"list-group-item {% if side_nav == 'my-learning' %} active {% endif %}\">
            <a href=\"{{ path('my_courses_learning') }}\">{{ 'my.learning.course_set_menu'|trans }}</a>
          </li>

          <li class=\"list-group-item {% if side_nav == 'my-classroom' %} active {% endif %}\">
            <a href=\"{{ path('my_classrooms') }}\">
              {{ 'my.learning.classroom_menu'|trans({'%classroom%':setting('classroom.name')|default('site.default.classroom'|trans)}) }}
            </a>
          </li>

          {% if setting('course.live_course_enabled') %}
            <li class=\"list-group-item
          {% if side_nav == 'my-learning-live' %} active {% endif %}\">
              <a href=\"{{ path('my_live_courses_learning') }}\">{{ 'my.learning.live_menu'|trans }}</a>
            </li>
          {% endif %}

          <li class=\"list-group-item
        {% if side_nav == 'my-questions' %} active {% endif %}\">
            <a href=\"{{ path('my_questions') }}\">{{ 'my.learning.question_menu'|trans }}</a>
          </li>
          <li class=\"list-group-item
        {% if side_nav == 'my-discussions' %} active {% endif %}\">
            <a href=\"{{ path('my_discussions') }}\">{{ 'my.learning.discussion_menu'|trans }}</a>
          </li>
          <li class=\"list-group-item
        {% if side_nav == 'my-notes' %} active {% endif %}\">
            <a href=\"{{ path('my_notebooks') }}\">{{ 'my.learning.notebook_menu'|trans }}</a>
          </li>

          <li class=\"list-group-item {% if side_nav == 'my-homework' %} active {% endif %}\">
            <a href=\"{{ path('my_homework_list') }}\">{{ 'my.learning.homework_menu'|trans }}</a>
          </li>

          <li class=\"list-group-item {% if side_nav == 'my-testpaper' %} active {% endif %}\">
            <a href=\"{{ path('my_testpaper_list') }}\">{{ 'my.learning.testpaper_menu'|trans }}</a>
          </li>
          <li class=\"list-group-item
        {% if side_nav == 'my-group' %} active {% endif %}\">
            <a href=\"{{ path('my_group_member_center') }}\">{{ 'my.learning.group_menu'|trans }}</a>
          </li>

          {{ slot('my.learning.menu', {'side_nav': side_nav}) }}
        </ul>
      </div>
    </div>
    <div class=\"col-md-9\">{% block main %}{% endblock %}</div>
  </div>

  {% block main_mobile %}{% endblock %}

{% endblock %}
", "my/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\layout.html.twig");
    }
}
