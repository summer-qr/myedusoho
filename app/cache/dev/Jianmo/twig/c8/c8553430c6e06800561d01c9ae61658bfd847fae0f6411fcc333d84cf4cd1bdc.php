<?php

/* course/widgets/course-grid.html.twig */
class __TwigTemplate_e37dbc169196f34d74ca6a68db03f4870e0738256945936545d301e8400aacc3 extends Twig_Template
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
        $__internal_f650d38d5c4cbb1208d7744fcd454222169540c661b6e3283c193a0ab6527eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f650d38d5c4cbb1208d7744fcd454222169540c661b6e3283c193a0ab6527eaf->enter($__internal_f650d38d5c4cbb1208d7744fcd454222169540c661b6e3283c193a0ab6527eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/course-grid.html.twig"));

        // line 1
        echo "<div class=\"course-item\">
  <div class=\"course-img\">
    ";
        // line 3
        if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "course", array(), "any", true, true)) {
            // line 4
            echo "      ";
            $context["course"] = $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "course", array());
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "      ";
            $context["course"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PublishedCourseByCourseSet", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array())));
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
        echo "\" target=\"_blank\">
      ";
        // line 10
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "discountId", array()) > 0)) {
            // line 11
            echo "        ";
            if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "discount", array()) == 0)) {
                // line 12
                echo "          <!-- 限免 -->
          <span class=\"tag-discount free\"></span>
        ";
            } else {
                // line 15
                echo "          <!-- 折扣 -->
          <span class=\"tag-discount\"></span>
        ";
            }
            // line 18
            echo "      ";
        }
        // line 19
        echo "      ";
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "serializeMode", array()) == "serialized")) {
            // line 20
            echo "        <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
      ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "serializeMode", array()) == "finished")) {
            // line 22
            echo "        <span class=\"tags\"><span class=\"tag-finished\"></span></span>
      ";
        }
        // line 24
        echo "      ";
        if (((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()))) : ("")) == "live")) {
            // line 25
            echo "        <span class=\"tags\">
          <span class=\"tag-live\"></span>
        </span>
      ";
        }
        // line 29
        echo "      ";
        if (((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "type", array()))) : ("")) == "reservation")) {
            // line 30
            echo "        <span class=\"tags\">
          <span class=\"tag-reservation\"></span>
        </span>
      ";
        }
        // line 34
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "large"), "courseSet.png"), "img-responsive", $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()));
        echo "
    </a>
  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
        echo "\" target=\"_blank\">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"metas clearfix\">
      ";
        // line 44
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 45
            echo "        <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "studentNum", array()), "html", null, true);
            echo "</span>
      ";
        }
        // line 47
        echo "      <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "ratingNum", array()), "html", null, true);
        echo "</span>
      ";
        // line 48
        if ((($this->getAttribute($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "course", array(), "any", false, true), "tryLookVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "course", array(), "any", false, true), "tryLookVideo", array()), false)) : (false))) {
            // line 49
            echo "        <span class=\"comment\"><i class=\"es-icon es-icon-playcircleoutline\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.badge.try_watch"), "html", null, true);
            echo "</span>
      ";
        }
        // line 51
        echo "      ";
        // line 52
        echo "        ";
        // line 53
        echo "      ";
        // line 54
        echo "        ";
        $this->loadTemplate("course/widgets/course-set-price.html.twig", "course/widgets/course-grid.html.twig", 54)->display(array_merge($context, array("shows" => "price")));
        // line 55
        echo "      ";
        // line 56
        echo "    </div>
  </div>
</div>";
        
        $__internal_f650d38d5c4cbb1208d7744fcd454222169540c661b6e3283c193a0ab6527eaf->leave($__internal_f650d38d5c4cbb1208d7744fcd454222169540c661b6e3283c193a0ab6527eaf_prof);

    }

    public function getTemplateName()
    {
        return "course/widgets/course-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 56,  145 => 55,  142 => 54,  140 => 53,  138 => 52,  136 => 51,  130 => 49,  128 => 48,  123 => 47,  117 => 45,  115 => 44,  108 => 40,  104 => 39,  95 => 34,  89 => 30,  86 => 29,  80 => 25,  77 => 24,  73 => 22,  71 => 21,  68 => 20,  65 => 19,  62 => 18,  57 => 15,  52 => 12,  49 => 11,  47 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"course-item\">
  <div class=\"course-img\">
    {% if courseSet.course is defined %}
      {% set course = courseSet.course %}
    {% else %}
      {% set course = data('PublishedCourseByCourseSet',{ courseSetId: courseSet.id } ) %}
    {% endif %}

    <a href=\"{{ path('course_show', {id: courseSet.defaultCourseId}) }}\" target=\"_blank\">
      {% if courseSet.discountId > 0 %}
        {% if courseSet.discount == 0 %}
          <!-- 限免 -->
          <span class=\"tag-discount free\"></span>
        {% else %}
          <!-- 折扣 -->
          <span class=\"tag-discount\"></span>
        {% endif %}
      {% endif %}
      {% if courseSet.serializeMode == 'serialized' %}
        <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
      {% elseif courseSet.serializeMode == 'finished' %}
        <span class=\"tags\"><span class=\"tag-finished\"></span></span>
      {% endif %}
      {% if courseSet.type|default() == 'live' %}
        <span class=\"tags\">
          <span class=\"tag-live\"></span>
        </span>
      {% endif %}
      {% if courseSet.type|default() == 'reservation' %}
        <span class=\"tags\">
          <span class=\"tag-reservation\"></span>
        </span>
      {% endif %}
      {{ lazy_img(filepath(course_set_cover(courseSet, 'large'), 'courseSet.png'), 'img-responsive', courseSet.title) }}
    </a>
  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      <a class=\"link-dark\" href=\"{{ path('course_show', {id: courseSet.defaultCourseId}) }}\" target=\"_blank\">
        {{ courseSet.title }}
      </a>
    </div>
    <div class=\"metas clearfix\">
      {% if setting('course.show_student_num_enabled', '1') == 1  %}
        <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>{{ courseSet.studentNum }}</span>
      {% endif %}
      <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>{{ courseSet.ratingNum }}</span>
      {% if courseSet.course.tryLookVideo|default(false) %}
        <span class=\"comment\"><i class=\"es-icon es-icon-playcircleoutline\"></i>{{'site.badge.try_watch'|trans}}</span>
      {% endif %}
      {# {% if course and priceFor|default('course') == 'course' %} #}
        {# {% include 'course/widgets/price.html.twig' with {shows:'price'} %} #}
      {# {% else %} #}
        {% include 'course/widgets/course-set-price.html.twig' with {shows: 'price'} %}
      {# {% endif %} #}
    </div>
  </div>
</div>", "course/widgets/course-grid.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\widgets\\course-grid.html.twig");
    }
}
