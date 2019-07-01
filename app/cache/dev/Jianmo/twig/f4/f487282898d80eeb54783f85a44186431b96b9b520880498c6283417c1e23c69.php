<?php

/* my/teaching/course-sets.html.twig */
class __TwigTemplate_68deb126114b4826e0130bf55ccc57e72e46eae68353c515b9d18f8ff14bce1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("my/my-teaching.html.twig", "my/teaching/course-sets.html.twig", 2);
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
        $__internal_9a98ccc33fa550d42236ea04b6743b2bd61265b881892be5b9c228fc214951d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a98ccc33fa550d42236ea04b6743b2bd61265b881892be5b9c228fc214951d1->enter($__internal_9a98ccc33fa550d42236ea04b6743b2bd61265b881892be5b9c228fc214951d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/teaching/course-sets.html.twig"));

        // line 1
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "my/teaching/course-sets.html.twig", 1);
        // line 6
        $context["side_nav"] = "my-teaching-courses";
        // line 8
        $context["type"] = "question";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a98ccc33fa550d42236ea04b6743b2bd61265b881892be5b9c228fc214951d1->leave($__internal_9a98ccc33fa550d42236ea04b6743b2bd61265b881892be5b9c228fc214951d1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_250f08bc6e8c227a4aa8d4c583ef58b2a5cec67819cd964e43cf0faf926b16dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250f08bc6e8c227a4aa8d4c583ef58b2a5cec67819cd964e43cf0faf926b16dc->enter($__internal_250f08bc6e8c227a4aa8d4c583ef58b2a5cec67819cd964e43cf0faf926b16dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.page_title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_250f08bc6e8c227a4aa8d4c583ef58b2a5cec67819cd964e43cf0faf926b16dc->leave($__internal_250f08bc6e8c227a4aa8d4c583ef58b2a5cec67819cd964e43cf0faf926b16dc_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_5d6302097d3e69ec0a8eabe3fa343d3c5c9eee920c32e3eb195b35c022ab32cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6302097d3e69ec0a8eabe3fa343d3c5c9eee920c32e3eb195b35c022ab32cd->enter($__internal_5d6302097d3e69ec0a8eabe3fa343d3c5c9eee920c32e3eb195b35c022ab32cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "  <div role=\"my-teaching-course-sets\">
    ";
        // line 12
        $this->loadTemplate("my/teaching/course-type-select.html.twig", "my/teaching/course-sets.html.twig", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : $this->getContext($context, "courseSets")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 15
            echo "      <div class=\"js-course-set-item cd-mb32\">
        ";
            // line 16
            $this->loadTemplate("my/teaching/course-set-list.html.twig", "my/teaching/course-sets.html.twig", 16)->display($context);
            // line 17
            echo "      </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 19
            echo "      <div class=\"empty\">
        <a class=\"cd-link-primary\" href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
            echo "\" target=\"_blank\">
          ";
            // line 21
            if ((((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "normal")) : ("normal")) == "live")) {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.live_empty_hint"), "html", null, true);
                echo "
          ";
            } else {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.empty_hint"), "html", null, true);
                echo "
          ";
            }
            // line 26
            echo "        </a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    <nav class=\"text-center\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
        
        $__internal_5d6302097d3e69ec0a8eabe3fa343d3c5c9eee920c32e3eb195b35c022ab32cd->leave($__internal_5d6302097d3e69ec0a8eabe3fa343d3c5c9eee920c32e3eb195b35c022ab32cd_prof);

    }

    public function getTemplateName()
    {
        return "my/teaching/course-sets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  136 => 29,  128 => 26,  122 => 24,  116 => 22,  114 => 21,  110 => 20,  107 => 19,  93 => 17,  91 => 16,  88 => 15,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  56 => 10,  42 => 4,  35 => 2,  33 => 8,  31 => 6,  29 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"common/data-dict-macro.html.twig\" as dict_macro %}
{% extends 'my/my-teaching.html.twig' %}

{% block title %}{{ 'my.teaching.page_title'|trans }} - {{ parent() }}{% endblock %}

{% set side_nav = 'my-teaching-courses' %}

{% set type=\"question\" %}

{% block main %}
  <div role=\"my-teaching-course-sets\">
    {% include 'my/teaching/course-type-select.html.twig' %}

    {% for courseSet in courseSets %}
      <div class=\"js-course-set-item cd-mb32\">
        {% include 'my/teaching/course-set-list.html.twig' %}
      </div>
    {% else %}
      <div class=\"empty\">
        <a class=\"cd-link-primary\" href=\"{{ path('course_set_manage_create') }}\" target=\"_blank\">
          {% if filter|default('normal') == 'live' %}
            {{ 'my.teaching.course_set.live_empty_hint'|trans }}
          {% else %}
            {{ 'my.teaching.course_set.empty_hint'|trans }}
          {% endif %}
        </a>
      </div>
    {% endfor %}

    <nav class=\"text-center\">
      {{ web_macro.paginator(paginator) }}
    </nav>
  </div>
{% endblock %}
", "my/teaching/course-sets.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\teaching\\course-sets.html.twig");
    }
}
