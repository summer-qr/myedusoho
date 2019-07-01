<?php

/* course/course-select-list.html.twig */
class __TwigTemplate_81fbf415079e976391f267844377eab83768a901643f88e5bc92727e846c322b extends Twig_Template
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
        $__internal_f94d6dbb7e657138b500efda867db460f0a988cbc4dd75d7f0f6f67be4a08f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94d6dbb7e657138b500efda867db460f0a988cbc4dd75d7f0f6f67be4a08f1a->enter($__internal_f94d6dbb7e657138b500efda867db460f0a988cbc4dd75d7f0f6f67be4a08f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/course-select-list.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course/course-select-list.html.twig", 1);
        // line 2
        echo "<style>
.course-wide-list .enabled:hover{
    background: #eee;
    border-color: #ddd;
}

.course-wide-list .enabled{
    cursor: default;
    background: #eee;
}

</style>
<table class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"5%\" ></th>
      <th width=\"30%\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.classroom_manage.course_select.courseTitle"), "html", null, true);
        echo "</th>
      <th width=\"30%\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.classroom_manage.course_select.teach_plan"), "html", null, true);
        echo "</th>
      <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.classroom_manage.course_select.teacher_name"), "html", null, true);
        echo "</th>
      <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.classroom_manage.course_select.price"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 25
        if (((array_key_exists("courseSets", $context)) ? (_twig_default_filter((isset($context["courseSets"]) ? $context["courseSets"] : $this->getContext($context, "courseSets")), null)) : (null))) {
            // line 26
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : $this->getContext($context, "courseSets")));
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
                // line 27
                echo "    <tr>
      <td class='text-center' data-id=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
                echo "\">
        <input class=\"course-item-cbx\" type=\"checkbox\" name=\"course-";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
                echo "\">
      </td>
      <td>
        <a class=\"pull-left mr5 link-primary\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
                echo "\" target=\"_blank\">
          <img class=\"course-picture\" src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover($context["courseSet"], "middle"), "courseSet.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
                echo "\" width=\"100\">
        </a>
        <div class=\"mlm\">
          <a class=\"link-primary\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["courseSet"], "defaultCourseId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "title", array()), "html", null, true);
                echo "</a>
          ";
                // line 37
                if (($this->getAttribute($context["courseSet"], "serializeMode", array()) == "serialized")) {
                    // line 38
                    echo "            <span class=\"label label-success \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.serialized"), "html", null, true);
                    echo "</span>
          ";
                } elseif (($this->getAttribute(                // line 39
$context["courseSet"], "serializeMode", array()) == "finished")) {
                    // line 40
                    echo "            <span class=\"label label-warning \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.finished"), "html", null, true);
                    echo "</span>
          ";
                }
                // line 42
                echo "        </div>
      </td>
      <td>
        ";
                // line 45
                if ((twig_length_filter($this->env, (($this->getAttribute($context["courseSet"], "courses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "courses", array()), null)) : (null))) == 1)) {
                    // line 46
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["courseSet"], "courses", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                        // line 47
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                        echo "
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "          <select class=\"form-control js-course-select width-150 hidden\" id=\"course-select-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
                    echo "\" style=\"width:80%;display: inline-block;\">
            ";
                    // line 50
                    if ($this->getAttribute($context["courseSet"], "courses", array())) {
                        // line 51
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["courseSet"], "courses", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                            // line 52
                            echo "                  ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                            echo "
                  <option value=\"";
                            // line 53
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                            echo "</option>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "            ";
                    }
                    // line 56
                    echo "          </select>
        ";
                } else {
                    // line 58
                    echo "          <select class=\"form-control js-course-select width-150\" id=\"course-select-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
                    echo "\" style=\"width:80%;display: inline-block;\">
            ";
                    // line 59
                    if ((($this->getAttribute($context["courseSet"], "courses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "courses", array()), null)) : (null))) {
                        // line 60
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["courseSet"], "courses", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                            // line 61
                            echo "                  ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                            echo "
                  <option value=\"";
                            // line 62
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                            echo "\" 
                    data-price=\"";
                            // line 63
                            $this->loadTemplate("course/widgets/classroom-course-price.html.twig", "course/course-select-list.html.twig", 63)->display(array_merge($context, array("price" => $this->getAttribute($context["course"], "price", array()))));
                            echo "\">
                    ";
                            // line 64
                            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                            echo "
                  </option>
              ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "            ";
                    }
                    // line 68
                    echo "          </select>
          <a class=\"color-gray\" data-toggle=\"tooltip\" data-trigger=\"hover\" data-placement=\"top\" title=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.classroom_manage.course_select.tips"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-help\"></i></a>
        ";
                }
                // line 71
                echo "      </td>
      <td>
        ";
                // line 73
                $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array"), null)) : (null));
                // line 74
                echo "        ";
                if ((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher"))) {
                    // line 75
                    echo "          <div class=\"teacher\">
            <a class=\"teacher-nickname ellipsis link-primary\" target=\"_blank\"  href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname", array()), "html", null, true);
                    echo "</a>
          </div>
        ";
                }
                // line 79
                echo "      </td>
      <td>
          <span class=\"course-price js-price-";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseSet"], "id", array()), "html", null, true);
                echo "\" style=\"display:inline\">
          ";
                // line 82
                $this->loadTemplate("course/widgets/classroom-course-price.html.twig", "course/course-select-list.html.twig", 82)->display(array_merge($context, array("price" => $this->getAttribute($this->getAttribute($this->getAttribute($context["courseSet"], "courses", array()), 0, array(), "array"), "originPrice", array()))));
                // line 83
                echo "          </span>
      </td>
    </tr>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "    ";
        }
        // line 88
        echo "  </tbody>
</table>

";
        // line 91
        if ((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "")) : ("")) == "ajax_pagination")) {
            // line 92
            echo $context["web_macro"]->getajax_paginator((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")));
            echo "
";
        } else {
            // line 94
            echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")));
            echo "
";
        }
        
        $__internal_f94d6dbb7e657138b500efda867db460f0a988cbc4dd75d7f0f6f67be4a08f1a->leave($__internal_f94d6dbb7e657138b500efda867db460f0a988cbc4dd75d7f0f6f67be4a08f1a_prof);

    }

    public function getTemplateName()
    {
        return "course/course-select-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 94,  305 => 92,  303 => 91,  298 => 88,  295 => 87,  278 => 83,  276 => 82,  272 => 81,  268 => 79,  260 => 76,  257 => 75,  254 => 74,  252 => 73,  248 => 71,  243 => 69,  240 => 68,  237 => 67,  220 => 64,  216 => 63,  212 => 62,  207 => 61,  189 => 60,  187 => 59,  182 => 58,  178 => 56,  175 => 55,  165 => 53,  160 => 52,  155 => 51,  153 => 50,  148 => 49,  139 => 47,  134 => 46,  132 => 45,  127 => 42,  121 => 40,  119 => 39,  114 => 38,  112 => 37,  106 => 36,  98 => 33,  94 => 32,  88 => 29,  84 => 28,  81 => 27,  63 => 26,  61 => 25,  54 => 21,  50 => 20,  46 => 19,  42 => 18,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macro.html.twig\" as web_macro %}
<style>
.course-wide-list .enabled:hover{
    background: #eee;
    border-color: #ddd;
}

.course-wide-list .enabled{
    cursor: default;
    background: #eee;
}

</style>
<table class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"5%\" ></th>
      <th width=\"30%\">{{ 'classroom.classroom_manage.course_select.courseTitle'|trans }}</th>
      <th width=\"30%\">{{ 'classroom.classroom_manage.course_select.teach_plan'|trans }}</th>
      <th>{{ 'classroom.classroom_manage.course_select.teacher_name'|trans }}</th>
      <th>{{ 'classroom.classroom_manage.course_select.price'|trans }}</th>
    </tr>
  </thead>
  <tbody>
    {% if courseSets|default(null) %}
    {% for courseSet in courseSets %}
    <tr>
      <td class='text-center' data-id=\"{{courseSet.id}}\">
        <input class=\"course-item-cbx\" type=\"checkbox\" name=\"course-{{courseSet.id}}\">
      </td>
      <td>
        <a class=\"pull-left mr5 link-primary\" href=\"{{ path('course_show',{id: courseSet.defaultCourseId}) }}\" target=\"_blank\">
          <img class=\"course-picture\" src=\"{{ filepath(course_set_cover(courseSet, 'middle'), 'courseSet.png') }}\" alt=\"{{ courseSet.title }}\" width=\"100\">
        </a>
        <div class=\"mlm\">
          <a class=\"link-primary\" href=\"{{ path('course_show',{id: courseSet.defaultCourseId}) }}\">{{ courseSet.title }}</a>
          {% if courseSet.serializeMode == 'serialized' %}
            <span class=\"label label-success \">{{'course.status.serialized'|trans}}</span>
          {% elseif courseSet.serializeMode == 'finished' %}
            <span class=\"label label-warning \">{{'course.status.finished'|trans}}</span>
          {% endif %}
        </div>
      </td>
      <td>
        {% if courseSet.courses|default(null)|length == 1 %}
          {% for course in courseSet.courses %}
            {{course.title}}
          {% endfor %}
          <select class=\"form-control js-course-select width-150 hidden\" id=\"course-select-{{courseSet.id}}\" style=\"width:80%;display: inline-block;\">
            {% if courseSet.courses %}
              {% for course in courseSet.courses %}
                  {{course.title}}
                  <option value=\"{{course.id}}\">{{course.title}}</option>
              {% endfor %}
            {% endif %}
          </select>
        {% else %}
          <select class=\"form-control js-course-select width-150\" id=\"course-select-{{courseSet.id}}\" style=\"width:80%;display: inline-block;\">
            {% if courseSet.courses|default(null) %}
              {% for course in courseSet.courses %}
                  {{course.title}}
                  <option value=\"{{course.id}}\" 
                    data-price=\"{% include 'course/widgets/classroom-course-price.html.twig' with { price : course.price } %}\">
                    {{course.title}}
                  </option>
              {% endfor %}
            {% endif %}
          </select>
          <a class=\"color-gray\" data-toggle=\"tooltip\" data-trigger=\"hover\" data-placement=\"top\" title=\"{{'classroom.classroom_manage.course_select.tips'|trans}}\"><i class=\"es-icon es-icon-help\"></i></a>
        {% endif %}
      </td>
      <td>
        {% set teacher = users[courseSet.creator]|default(null) %}
        {% if teacher %}
          <div class=\"teacher\">
            <a class=\"teacher-nickname ellipsis link-primary\" target=\"_blank\"  href=\"{{ path('user_show', {id:teacher.id}) }}\">{{ teacher.nickname }}</a>
          </div>
        {% endif %}
      </td>
      <td>
          <span class=\"course-price js-price-{{courseSet.id}}\" style=\"display:inline\">
          {% include 'course/widgets/classroom-course-price.html.twig' with { price : courseSet.courses[0].originPrice } %}
          </span>
      </td>
    </tr>
    {% endfor %}
    {% endif %}
  </tbody>
</table>

{% if type|default('') == 'ajax_pagination' %}
{{ web_macro.ajax_paginator(paginator) }}
{% else %}
{{ web_macro.paginator(paginator) }}
{% endif %}", "course/course-select-list.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\course-select-list.html.twig");
    }
}
