<?php

/* my/learning/course/learning.html.twig */
class __TwigTemplate_21eed2f5b2b3907a55568f5da79c48254665b9d1d32afb4953bff97d945a0e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("my/learning/course/layout.html.twig", "my/learning/course/learning.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'main_mobile' => array($this, 'block_main_mobile'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "my/learning/course/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f414128c637b0fd25061503d901fd7ff09c74f76a5eb251419f4fe0e6773d04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f414128c637b0fd25061503d901fd7ff09c74f76a5eb251419f4fe0e6773d04d->enter($__internal_f414128c637b0fd25061503d901fd7ff09c74f76a5eb251419f4fe0e6773d04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/learning/course/learning.html.twig"));

        // line 3
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 4
        $context["tab_nav"] = "learning";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f414128c637b0fd25061503d901fd7ff09c74f76a5eb251419f4fe0e6773d04d->leave($__internal_f414128c637b0fd25061503d901fd7ff09c74f76a5eb251419f4fe0e6773d04d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98c03677df34099ee3dfb311c3a465214ca5b5bdc2ebeb0b51c92df4955cfa3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c03677df34099ee3dfb311c3a465214ca5b5bdc2ebeb0b51c92df4955cfa3e->enter($__internal_98c03677df34099ee3dfb311c3a465214ca5b5bdc2ebeb0b51c92df4955cfa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.learning"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_98c03677df34099ee3dfb311c3a465214ca5b5bdc2ebeb0b51c92df4955cfa3e->leave($__internal_98c03677df34099ee3dfb311c3a465214ca5b5bdc2ebeb0b51c92df4955cfa3e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_7eb22afc7cc050fb8ee635776bf6cd69ff97ffb9bfa2654e785521222bc24af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb22afc7cc050fb8ee635776bf6cd69ff97ffb9bfa2654e785521222bc24af1->enter($__internal_7eb22afc7cc050fb8ee635776bf6cd69ff97ffb9bfa2654e785521222bc24af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  <div class=\"panel panel-default panel-col\">

    <div class=\"panel-heading\">
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course"), "html", null, true);
        echo "
      <a class=\"btn cd-btn cd-btn-info cd-btn-sm pull-right\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_live_calendar");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.live_schedule_menu"), "html", null, true);
        echo "</a>
    </div>

    <div class=\"panel-body\">
      ";
        // line 17
        $this->loadTemplate("my/learning/course/nav-pill.html.twig", "my/learning/course/learning.html.twig", 17)->display($context);
        // line 18
        echo "      ";
        $context["type"] = "learning";
        // line 19
        echo "
      ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : $this->getContext($context, "courseSets")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            if ($context["courseSet"]) {
                // line 21
                echo "        ";
                $context["currentCourses"] = $this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute($context["courseSet"], "id", array()), array(), "array");
                // line 22
                echo "        ";
                $context["classroom"] = (($this->getAttribute($context["courseSet"], "classroom", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "classroom", array(), "array"), null)) : (null));
                // line 23
                echo "
        ";
                // line 24
                if ((isset($context["currentCourses"]) ? $context["currentCourses"] : $this->getContext($context, "currentCourses"))) {
                    // line 25
                    echo "          ";
                    $this->loadTemplate("my/learning/course/courses-block-item.html.twig", "my/learning/course/learning.html.twig", 25)->display($context);
                    // line 26
                    echo "        ";
                }
                // line 27
                echo "      ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        <div class=\"cd-empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.learning_empty"), "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
    </div>
  </div>
";
        
        $__internal_7eb22afc7cc050fb8ee635776bf6cd69ff97ffb9bfa2654e785521222bc24af1->leave($__internal_7eb22afc7cc050fb8ee635776bf6cd69ff97ffb9bfa2654e785521222bc24af1_prof);

    }

    // line 35
    public function block_main_mobile($context, array $blocks = array())
    {
        $__internal_a4115432e5b040ea10c701c47f668884de37efb8703f62683741534ba6afccad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4115432e5b040ea10c701c47f668884de37efb8703f62683741534ba6afccad->enter($__internal_a4115432e5b040ea10c701c47f668884de37efb8703f62683741534ba6afccad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_mobile"));

        // line 36
        echo "  ";
        if ((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile"))) {
            // line 37
            echo "    ";
            $this->loadTemplate("my/learning/course/learning-mobile.html.twig", "my/learning/course/learning.html.twig", 37)->display(array_merge($context, array("courses" => (isset($context["learningCourses"]) ? $context["learningCourses"] : $this->getContext($context, "learningCourses")))));
            // line 38
            echo "  ";
        }
        
        $__internal_a4115432e5b040ea10c701c47f668884de37efb8703f62683741534ba6afccad->leave($__internal_a4115432e5b040ea10c701c47f668884de37efb8703f62683741534ba6afccad_prof);

    }

    // line 41
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_056998f0b764c3a71c9a3a8b21883e6124e3f442a1bc076b31db94ad7dbeca07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056998f0b764c3a71c9a3a8b21883e6124e3f442a1bc076b31db94ad7dbeca07->enter($__internal_056998f0b764c3a71c9a3a8b21883e6124e3f442a1bc076b31db94ad7dbeca07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        // line 42
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "my/learning/course/learning.html.twig", 42)->display(array_merge($context, array("mobile_tool_bar" => "learning")));
        
        $__internal_056998f0b764c3a71c9a3a8b21883e6124e3f442a1bc076b31db94ad7dbeca07->leave($__internal_056998f0b764c3a71c9a3a8b21883e6124e3f442a1bc076b31db94ad7dbeca07_prof);

    }

    public function getTemplateName()
    {
        return "my/learning/course/learning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 42,  168 => 41,  160 => 38,  157 => 37,  154 => 36,  148 => 35,  136 => 30,  127 => 28,  118 => 27,  115 => 26,  112 => 25,  110 => 24,  107 => 23,  104 => 22,  101 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  72 => 13,  68 => 12,  62 => 8,  56 => 7,  42 => 5,  35 => 1,  33 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'my/learning/course/layout.html.twig' %}

{% set mobile = is_show_mobile_page() %}
{% set tab_nav = 'learning' %}
{% block title %}{{ 'my.learning.course.learning'|trans }} - {{ parent() }}{% endblock %}

{% block main %}

  <div class=\"panel panel-default panel-col\">

    <div class=\"panel-heading\">
      {{ 'my.learning.course'|trans }}
      <a class=\"btn cd-btn cd-btn-info cd-btn-sm pull-right\" href=\"{{ path('my_courses_live_calendar') }}\">{{ 'my.learning.live_schedule_menu'|trans }}</a>
    </div>

    <div class=\"panel-body\">
      {% include 'my/learning/course/nav-pill.html.twig' %}
      {% set type = 'learning' %}

      {% for courseSet in courseSets if courseSet %}
        {% set currentCourses = courses[courseSet.id] %}
        {% set classroom = courseSet['classroom']|default(null) %}

        {% if currentCourses %}
          {% include 'my/learning/course/courses-block-item.html.twig' %}
        {% endif %}
      {% else %}
        <div class=\"cd-empty\">{{ 'my.learning.course.learning_empty'|trans }}</div>
      {% endfor %}
      {{ web_macro.paginator(paginator) }}
    </div>
  </div>
{% endblock %}

{% block main_mobile %}
  {% if mobile %}
    {% include 'my/learning/course/learning-mobile.html.twig' with {'courses':learningCourses} %}
  {% endif %}
{% endblock %}

{% block bottom %}
  {% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'learning' } %}
{% endblock %}

", "my/learning/course/learning.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\learning\\course\\learning.html.twig");
    }
}
