<?php

/* my/navbar.html.twig */
class __TwigTemplate_5b39df5e0993b4c9cea52f3b98468b2066d691acb0c53a58aa09ed0bad0c0e3c extends Twig_Template
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
        $__internal_54cbcad2167463fcf32b20caa81fc7ed5fa64ea11357f3e847a05479a98b0c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cbcad2167463fcf32b20caa81fc7ed5fa64ea11357f3e847a05479a98b0c64->enter($__internal_54cbcad2167463fcf32b20caa81fc7ed5fa64ea11357f3e847a05479a98b0c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/navbar.html.twig"));

        // line 1
        echo "<div class=\"nav-header\">
  <ul class=\"nav nav-tabs nav-header-section clearfix\">
    <div class=\"nav-header-section__heading\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.menu_heading"), "html", null, true);
        echo "</div>
    <li class=\"nav-header-section__item ";
        // line 4
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-courses")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_course_sets");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set_menu"), "html", null, true);
        echo "</a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 8
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-live-calendar")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_live_calendar");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.live_schedule_menu"), "html", null, true);
        echo "</a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 12
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-classroom")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_classrooms");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.classroom_menu", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
        echo "
      </a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 17
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-questions")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_threads", array("type" => "question"));
        echo "\">
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.question_menu"), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"nav-header-section__item ";
        // line 22
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-discussions")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_teaching_threads", array("type" => "discussion"));
        echo "\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.discussion_menu"), "html", null, true);
        echo "
      </a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 28
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-testpaper-check")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_testpaper_check_list", array("status" => "reviewing"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.testpaper_check_menu"), "html", null, true);
        echo "</a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 32
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-homework-check")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_homework_check_list", array("status" => "reviewing"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.homework_check_menu"), "html", null, true);
        echo "</a>
    </li>

    <li class=\"nav-header-section__item ";
        // line 36
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "material-lib")) {
            echo " active ";
        }
        echo "\">
      <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_browsing");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.material_lib_menu"), "html", null, true);
        echo "</a>
    </li>
  </ul>
</div>";
        
        $__internal_54cbcad2167463fcf32b20caa81fc7ed5fa64ea11357f3e847a05479a98b0c64->leave($__internal_54cbcad2167463fcf32b20caa81fc7ed5fa64ea11357f3e847a05479a98b0c64_prof);

    }

    public function getTemplateName()
    {
        return "my/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 37,  134 => 36,  126 => 33,  120 => 32,  112 => 29,  106 => 28,  99 => 24,  95 => 23,  89 => 22,  83 => 19,  79 => 18,  73 => 17,  64 => 13,  58 => 12,  50 => 9,  44 => 8,  36 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"nav-header\">
  <ul class=\"nav nav-tabs nav-header-section clearfix\">
    <div class=\"nav-header-section__heading\">{{ 'my.teaching.menu_heading'|trans }}</div>
    <li class=\"nav-header-section__item {% if side_nav == 'my-teaching-courses' %} active {% endif %}\">
      <a href=\"{{ path('my_teaching_course_sets') }}\">{{ 'my.teaching.course_set_menu'|trans }}</a>
    </li>

    <li class=\"nav-header-section__item {% if side_nav == 'my-teaching-live-calendar' %} active {% endif %}\">
      <a href=\"{{ path('my_teaching_live_calendar') }}\">{{ 'my.teaching.live_schedule_menu'|trans }}</a>
    </li>

    <li class=\"nav-header-section__item {% if side_nav == 'my-teaching-classroom' %} active {% endif %}\">
      <a href=\"{{ path('my_teaching_classrooms') }}\">{{ 'my.teaching.classroom_menu'|trans({'%classroom%': setting('classroom.name')|default(\"classroom\"|trans)}) }}
      </a>
    </li>

    <li class=\"nav-header-section__item {% if side_nav == 'my-teaching-questions' %}active {% endif %}\">
      <a href=\"{{ path('my_teaching_threads', {type:'question'}) }}\">
        {{ 'my.teaching.question_menu'|trans }}
      </a>
    </li>
    <li class=\"nav-header-section__item {% if side_nav == 'my-teaching-discussions' %} active {% endif %}\">
      <a href=\"{{ path('my_teaching_threads', {type:'discussion'}) }}\">
        {{ 'my.teaching.discussion_menu'|trans }}
      </a>
    </li>

    <li class=\"nav-header-section__item {% if side_nav == 'my-testpaper-check' %} active {% endif %}\">
      <a href=\"{{ path('my_testpaper_check_list',{status:'reviewing'}) }}\">{{ 'my.teaching.testpaper_check_menu'|trans }}</a>
    </li>

    <li class=\"nav-header-section__item {% if side_nav == 'my-homework-check' %} active {% endif %}\">
      <a href=\"{{ path('my_homework_check_list',{status:'reviewing'}) }}\">{{ 'my.teaching.homework_check_menu'|trans }}</a>
    </li>

    <li class=\"nav-header-section__item {% if side_nav == 'material-lib' %} active {% endif %}\">
      <a href=\"{{ path('material_lib_browsing') }}\">{{ 'my.teaching.material_lib_menu'|trans }}</a>
    </li>
  </ul>
</div>", "my/navbar.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\navbar.html.twig");
    }
}
