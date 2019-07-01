<?php

/* open-course-manage/lesson-list.html.twig */
class __TwigTemplate_f62e7c8497b0f9b8c66b3a9b725c5464988e73b6a1cc08d602a30ef704553625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("open-course-manage/layout.html.twig", "open-course-manage/lesson-list.html.twig", 1);
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
        $__internal_18b19649218ac22e2338d65e0016c3e024517fd54b4e3dbe98119ce403d7afaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b19649218ac22e2338d65e0016c3e024517fd54b4e3dbe98119ce403d7afaf->enter($__internal_18b19649218ac22e2338d65e0016c3e024517fd54b4e3dbe98119ce403d7afaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "open-course-manage/lesson-list.html.twig"));

        // line 5
        $context["side_nav"] = "lesson";
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/open-course-manage/lesson/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b19649218ac22e2338d65e0016c3e024517fd54b4e3dbe98119ce403d7afaf->leave($__internal_18b19649218ac22e2338d65e0016c3e024517fd54b4e3dbe98119ce403d7afaf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49f3f11e35f182935c63008d1b10ad140e194dccea6e080e4a70a111facd7b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f3f11e35f182935c63008d1b10ad140e194dccea6e080e4a70a111facd7b94->enter($__internal_49f3f11e35f182935c63008d1b10ad140e194dccea6e080e4a70a111facd7b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.lesson.manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_49f3f11e35f182935c63008d1b10ad140e194dccea6e080e4a70a111facd7b94->leave($__internal_49f3f11e35f182935c63008d1b10ad140e194dccea6e080e4a70a111facd7b94_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8951a4a6071f990c2b28fa2bba0d1738a7c6c1da2a45a7037f973c941e22d4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8951a4a6071f990c2b28fa2bba0d1738a7c6c1da2a45a7037f973c941e22d4aa->enter($__internal_8951a4a6071f990c2b28fa2bba0d1738a7c6c1da2a45a7037f973c941e22d4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 10
        echo "  <div class=\"pull-right\">
    <button class=\"cd-btn cd-btn-primary cd-btn-sm js-lesson-create-btn\" ";
        // line 11
        if ((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"))) {
            echo "disabled=\"disabled\"";
        }
        echo " id=\"lesson-create-btn\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "open")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        }
        echo "\">";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "open")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.manage.create_lesson"), "html", null, true);
        }
        echo "</button>
  </div>
  ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.lesson.manage"), "html", null, true);
        echo "
";
        
        $__internal_8951a4a6071f990c2b28fa2bba0d1738a7c6c1da2a45a7037f973c941e22d4aa->leave($__internal_8951a4a6071f990c2b28fa2bba0d1738a7c6c1da2a45a7037f973c941e22d4aa_prof);

    }

    // line 16
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_09648d5930d5a60950c1e2f56fcfeac70fac06bc7133dde49c8db60a44f232b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09648d5930d5a60950c1e2f56fcfeac70fac06bc7133dde49c8db60a44f232b7->enter($__internal_09648d5930d5a60950c1e2f56fcfeac70fac06bc7133dde49c8db60a44f232b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 17
        echo "
  <div class=\"cd-alert cd-alert-warning js-lesson-notify\" ";
        // line 18
        if ((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"))) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.lesson.tips"), "html", null, true);
        echo "</div>

  ";
        // line 20
        if (twig_test_empty((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")))) {
            // line 21
            echo "
    <div class=\"empty\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div>

  ";
        }
        // line 25
        echo "
  <ul class=\"open-course-lesson ml0\" id=\"course-item-list\" data-sort-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_lesson_sort", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
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
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 28
            echo "      ";
            if (twig_in_filter("lesson", $context["id"])) {
                // line 29
                echo "        ";
                $this->loadTemplate("open-course-manage/lesson-list-item.html.twig", "open-course-manage/lesson-list.html.twig", 29)->display(array_merge($context, array("lesson" => $context["item"], "file" => (($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array"), null)) : (null)))));
                // line 30
                echo "      ";
            }
            // line 31
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>
";
        
        $__internal_09648d5930d5a60950c1e2f56fcfeac70fac06bc7133dde49c8db60a44f232b7->leave($__internal_09648d5930d5a60950c1e2f56fcfeac70fac06bc7133dde49c8db60a44f232b7_prof);

    }

    public function getTemplateName()
    {
        return "open-course-manage/lesson-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 32,  150 => 31,  147 => 30,  144 => 29,  141 => 28,  124 => 27,  120 => 26,  117 => 25,  111 => 22,  108 => 21,  106 => 20,  97 => 18,  94 => 17,  88 => 16,  79 => 13,  64 => 11,  61 => 10,  55 => 9,  41 => 3,  34 => 1,  32 => 6,  30 => 5,  11 => 1,);
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

{% block title %}{{'my.teaching.open_course.lesson.manage'|trans}} - {{ parent() }}{% endblock %}

{% set side_nav = 'lesson' %}
{% do script(['app/js/open-course-manage/lesson/index.js'])%}


{% block page_title %}
  <div class=\"pull-right\">
    <button class=\"cd-btn cd-btn-primary cd-btn-sm js-lesson-create-btn\" {% if items %}disabled=\"disabled\"{% endif %} id=\"lesson-create-btn\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"{% if course.type == 'open' %}{{ path('open_course_manage_lesson_create', {id:course.id}) }}{% endif %}\">{% if course.type == 'open' %}{{'course.manage.create_lesson'|trans}}{% endif %}</button>
  </div>
  {{'my.teaching.open_course.lesson.manage'|trans}}
{% endblock %}

{% block main_body %}

  <div class=\"cd-alert cd-alert-warning js-lesson-notify\" {% if items %}style=\"display:none;\"{% endif %}>{{ 'my.teaching.open_course.lesson.tips'|trans }}</div>

  {% if items is empty %}

    <div class=\"empty\">{{'site.datagrid.empty'|trans}}</div>

  {% endif %}

  <ul class=\"open-course-lesson ml0\" id=\"course-item-list\" data-sort-url=\"{{ path('open_course_manage_lesson_sort', {id:course.id}) }}\">
    {% for id, item in items %}
      {% if 'lesson' in id  %}
        {% include 'open-course-manage/lesson-list-item.html.twig' with {lesson: item, file: files[item.mediaId]|default(null)} %}
      {% endif %}
    {% endfor %}
  </ul>
{% endblock %}

", "open-course-manage/lesson-list.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\open-course-manage\\lesson-list.html.twig");
    }
}
