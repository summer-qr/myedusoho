<?php

/* course/task-list/parts/task-link-template.html.twig */
class __TwigTemplate_90efc968084719470fbff51135267dc76a71e1c2ae807ac979bd869a690b07ac extends Twig_Template
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
        $__internal_1a31dabe1ef45d88b46d8d786a7e84730127dfcc4c4518c69bc7ed49cb10e3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a31dabe1ef45d88b46d8d786a7e84730127dfcc4c4518c69bc7ed49cb10e3bd->enter($__internal_1a31dabe1ef45d88b46d8d786a7e84730127dfcc4c4518c69bc7ed49cb10e3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/task-list/parts/task-link-template.html.twig"));

        // line 1
        $context["isOvertime"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyExpiryTime", array()) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyExpiryTime", array()) < twig_date_format_filter($this->env, "now", "U"))) || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryEndDate", array()) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryEndDate", array()) < twig_date_format_filter($this->env, "now", "U"))));
        // line 2
        echo "
<tmp hide-if=\"{isItemDisplayedAsUnpublished}\">
  ";
        // line 4
        if ((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member"))) {
            // line 5
            echo "    <a hide-if=\"{isTaskLocked}\" class=\"title\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => "{taskId}")), "html", null, true);
            echo "\">
      ";
            // line 6
            $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 6)->display($context);
            // line 7
            echo "    </a>

    <span display-if=\"{isTaskLocked}\" class=\"title\">
      ";
            // line 10
            $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 10)->display($context);
            // line 11
            echo "    </span>
  ";
        } elseif ( !        // line 12
(isset($context["isOvertime"]) ? $context["isOvertime"] : $this->getContext($context, "isOvertime"))) {
            // line 13
            echo "    <a class=\"title\" href=\"#modal\" data-toggle=\"modal\"
        data-url=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => "{taskId}")), "html", null, true);
            echo "\"
        style=\"margin-top:-6px\">";
            // line 15
            $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 15)->display($context);
            echo "</a>
  ";
        } else {
            // line 17
            echo "    <a class=\"title\" href=\"javascript:;\" data-toggle=\"modal\"
        style=\"margin-top:-6px\">";
            // line 18
            $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 18)->display($context);
            echo "</a>
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        $this->loadTemplate("course/task-list/parts/task-length-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 21)->display($context);
        // line 22
        echo "  <span class=\"right-menu mouse-enter\">
    ";
        // line 23
        if ((( !(isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")) &&  !(isset($context["isOvertime"]) ? $context["isOvertime"] : $this->getContext($context, "isOvertime"))) && ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "status", array()), "published")) : ("published")) == "published"))) {
            // line 24
            echo "      <tmp display-if=\"{isTaskFree}\">
        <a class=\"btn btn-primary\" href=\"#modal\" data-toggle=\"modal\"
            data-url=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => "{taskId}")), "html", null, true);
            echo "\"
            style=\"margin-top:-6px\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.preview_btn"), "html", null, true);
            echo "</a>
      </tmp>

      <tmp hide-if=\"{isTaskFree}\">
        <tmp display-if=\"{isTaskTryLookable}\">
          <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
              data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => "{taskId}")), "html", null, true);
            echo "\"
              style=\"margin-top:-6px\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.try_look_btn"), "html", null, true);
            echo "</a>
        </tmp>

        <tmp hide-if=\"{isTaskTryLookable}\">
          ";
            // line 38
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()), 0)) : (0)) == 0)) {
                // line 39
                echo "            ";
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isFree", array())) {
                    // line 40
                    echo "              <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => "{taskId}")), "html", null, true);
                    echo "\"
                  style=\"margin-top:-6px\">";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.join_btn"), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 44
                    echo "              <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => "{taskId}")), "html", null, true);
                    echo "\"
                  style=\"margin-top:-6px\">";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task.buy_btn"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 48
                echo "          ";
            }
            // line 49
            echo "        </tmp>
      </tmp>
    ";
        }
        // line 52
        echo "  </span>
</tmp>

<tmp display-if=\"{isItemDisplayedAsUnpublished}\">
  <span class=\"title\">
    ";
        // line 57
        $this->loadTemplate("course/task-list/parts/list-li-title-template.html.twig", "course/task-list/parts/task-link-template.html.twig", 57)->display($context);
        // line 58
        echo "  </span>
  <span class=\"right-menu color-gray\">
    ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.looking_forward"), "html", null, true);
        echo "
  </span>
</tmp>";
        
        $__internal_1a31dabe1ef45d88b46d8d786a7e84730127dfcc4c4518c69bc7ed49cb10e3bd->leave($__internal_1a31dabe1ef45d88b46d8d786a7e84730127dfcc4c4518c69bc7ed49cb10e3bd_prof);

    }

    public function getTemplateName()
    {
        return "course/task-list/parts/task-link-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 60,  153 => 58,  151 => 57,  144 => 52,  139 => 49,  136 => 48,  131 => 46,  127 => 45,  124 => 44,  119 => 42,  115 => 41,  112 => 40,  109 => 39,  107 => 38,  100 => 34,  96 => 33,  87 => 27,  83 => 26,  79 => 24,  77 => 23,  74 => 22,  72 => 21,  69 => 20,  64 => 18,  61 => 17,  56 => 15,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  42 => 10,  37 => 7,  35 => 6,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set isOvertime = (course.buyExpiryTime and course.buyExpiryTime < 'now'|date('U')) or (course.expiryEndDate and course.expiryEndDate < 'now'|date('U')) %}

<tmp hide-if=\"{isItemDisplayedAsUnpublished}\">
  {% if member %}
    <a hide-if=\"{isTaskLocked}\" class=\"title\" href=\"{{ path('course_task_show',{courseId:course.id, id: '{taskId}'}) }}\">
      {% include 'course/task-list/parts/list-li-title-template.html.twig' %}
    </a>

    <span display-if=\"{isTaskLocked}\" class=\"title\">
      {% include 'course/task-list/parts/list-li-title-template.html.twig' %}
    </span>
  {% elseif not isOvertime %}
    <a class=\"title\" href=\"#modal\" data-toggle=\"modal\"
        data-url=\"{{ path('course_task_preview',{courseId:course.id, id: '{taskId}'}) }}\"
        style=\"margin-top:-6px\">{% include 'course/task-list/parts/list-li-title-template.html.twig' %}</a>
  {% else %}
    <a class=\"title\" href=\"javascript:;\" data-toggle=\"modal\"
        style=\"margin-top:-6px\">{% include 'course/task-list/parts/list-li-title-template.html.twig' %}</a>
  {% endif %}

  {% include 'course/task-list/parts/task-length-template.html.twig' %}
  <span class=\"right-menu mouse-enter\">
    {% if not member and not isOvertime and courseSet.status | default('published') == 'published' %}
      <tmp display-if=\"{isTaskFree}\">
        <a class=\"btn btn-primary\" href=\"#modal\" data-toggle=\"modal\"
            data-url=\"{{ path('course_task_preview',{courseId:course.id, id: '{taskId}'}) }}\"
            style=\"margin-top:-6px\">{{ 'course.catalogue.task.preview_btn'|trans }}</a>
      </tmp>

      <tmp hide-if=\"{isTaskFree}\">
        <tmp display-if=\"{isTaskTryLookable}\">
          <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
              data-url=\"{{ path('course_task_preview',{courseId:course.id, id: '{taskId}'}) }}\"
              style=\"margin-top:-6px\">{{ 'course.catalogue.task.try_look_btn'|trans }}</a>
        </tmp>

        <tmp hide-if=\"{isTaskTryLookable}\">
          {% if course.parentId|default(0) == 0 %}
            {% if course.isFree %}
              <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"{{ path('course_task_preview',{courseId:course.id, id: '{taskId}'}) }}\"
                  style=\"margin-top:-6px\">{{ 'course.catalogue.task.join_btn'|trans }}</a>
            {% else %}
              <a class=\"btn btn-warning\" href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"{{ path('course_task_preview',{courseId:course.id, id: '{taskId}'}) }}\"
                  style=\"margin-top:-6px\">{{ 'course.catalogue.task.buy_btn'|trans }}</a>
            {% endif %}
          {% endif %}
        </tmp>
      </tmp>
    {% endif %}
  </span>
</tmp>

<tmp display-if=\"{isItemDisplayedAsUnpublished}\">
  <span class=\"title\">
    {% include 'course/task-list/parts/list-li-title-template.html.twig' %}
  </span>
  <span class=\"right-menu color-gray\">
    {{ 'course.catalogue.task_status.looking_forward'|trans }}
  </span>
</tmp>", "course/task-list/parts/task-link-template.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\task-list\\parts\\task-link-template.html.twig");
    }
}
