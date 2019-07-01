<?php

/* course/task-list/parts/task-course-data.html.twig */
class __TwigTemplate_a3416e15cb113b5f9cd5862aa56ca65eb736f614094158f406222452e1919f7a extends Twig_Template
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
        $__internal_ac5d965751acddb2909a33f430065ae4b9fc919f81de96283850b452463d767f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5d965751acddb2909a33f430065ae4b9fc919f81de96283850b452463d767f->enter($__internal_ac5d965751acddb2909a33f430065ae4b9fc919f81de96283850b452463d767f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/task-list/parts/task-course-data.html.twig"));

        // line 1
        echo "<!-- 
  接受参数 showOptional, 表示是否显示选修课程
-->

<div class=\"hidden js-hidden-course-info\">
  {
    \"id\": \"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "\",
    \"isDefault\": \"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isDefault", array()), "html", null, true);
        echo "\",
    \"learnMode\": \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "learnMode", array()), "html", null, true);
        echo "\",
    \"isMember\": \"";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id", array()), "")) : ("")), "html", null, true);
        echo "\",
    \"status\": \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()), "html", null, true);
        echo "\",
    \"currentTaskId\": \"";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("currentTaskId", $context)) ? (_twig_default_filter((isset($context["currentTaskId"]) ? $context["currentTaskId"] : $this->getContext($context, "currentTaskId")), "")) : ("")), "html", null, true);
        echo "\",
    \"isHideUnpublish\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isHideUnpublish", array()), "html", null, true);
        echo "\"
  }
</div>

<div class=\"hidden js-hidden-current-task-id\">";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("currentTaskId", $context)) ? (_twig_default_filter((isset($context["currentTaskId"]) ? $context["currentTaskId"] : $this->getContext($context, "currentTaskId")), "")) : ("")), "html", null, true);
        echo "</div>

<div class=\"hidden js-hidden-i18n\">
  {
    \"i18nChapterName\": \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("chapter")), "html", null, true);
        echo "\",
    \"i18nUnitName\": \"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("part")), "html", null, true);
        echo "\",
    \"i18nLessonName\": \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.lesson"), "html", null, true);
        echo "\",
    \"i18nTaskName\":\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseChapterAlias("task")), "html", null, true);
        echo "\"
  }
</div>

<div class=\"hidden js-hidden-cached-data\">
  ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\CourseExtension')->taskListJsonData((isset($context["courseItems"]) ? $context["courseItems"] : $this->getContext($context, "courseItems")), ((array_key_exists("showOptional", $context)) ? (_twig_default_filter((isset($context["showOptional"]) ? $context["showOptional"] : $this->getContext($context, "showOptional")), false)) : (false))), "html", null, true);
        echo "
</div>

<div class=\"hidden js-hidden-activity-metas\">
  {
    ";
        // line 34
        $context["allMetas"] = $this->env->getExtension('AppBundle\Twig\ActivityExtension')->getActivityMeta();
        // line 35
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allMetas"]) ? $context["allMetas"] : $this->getContext($context, "allMetas")));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 36
            echo "      ";
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                // line 37
                echo "        ,
      ";
            }
            // line 39
            echo "      
      \"";
            // line 40
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\": {
        \"icon\": \"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo "\",
        \"name\": \"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\"
      }
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  }
</div>

<div class=\"hidden js-hidden-current-timestamp\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "html", null, true);
        echo "</div>
";
        
        $__internal_ac5d965751acddb2909a33f430065ae4b9fc919f81de96283850b452463d767f->leave($__internal_ac5d965751acddb2909a33f430065ae4b9fc919f81de96283850b452463d767f_prof);

    }

    public function getTemplateName()
    {
        return "course/task-list/parts/task-course-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 48,  151 => 45,  134 => 42,  130 => 41,  126 => 40,  123 => 39,  119 => 37,  116 => 36,  98 => 35,  96 => 34,  88 => 29,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  61 => 17,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- 
  接受参数 showOptional, 表示是否显示选修课程
-->

<div class=\"hidden js-hidden-course-info\">
  {
    \"id\": \"{{course.id}}\",
    \"isDefault\": \"{{course.isDefault}}\",
    \"learnMode\": \"{{course.learnMode}}\",
    \"isMember\": \"{{member.id|default('')}}\",
    \"status\": \"{{course.status}}\",
    \"currentTaskId\": \"{{currentTaskId|default('')}}\",
    \"isHideUnpublish\": \"{{course.isHideUnpublish}}\"
  }
</div>

<div class=\"hidden js-hidden-current-task-id\">{{currentTaskId|default('')}}</div>

<div class=\"hidden js-hidden-i18n\">
  {
    \"i18nChapterName\": \"{{course_chapter_alias('chapter')|trans}}\",
    \"i18nUnitName\": \"{{course_chapter_alias('part')|trans}}\",
    \"i18nLessonName\": \"{{'site.data.lesson'|trans}}\",
    \"i18nTaskName\":\"{{ course_chapter_alias('task')|trans}}\"
  }
</div>

<div class=\"hidden js-hidden-cached-data\">
  {{ task_list_json_data(courseItems, showOptional|default(false)) }}
</div>

<div class=\"hidden js-hidden-activity-metas\">
  {
    {% set allMetas = activity_meta() %}
    {% for key, item in allMetas %}
      {% if not loop.first %}
        ,
      {% endif %}
      
      \"{{key}}\": {
        \"icon\": \"{{item.icon}}\",
        \"name\": \"{{item.name}}\"
      }
    {% endfor %}
  }
</div>

<div class=\"hidden js-hidden-current-timestamp\">{{ date().timestamp }}</div>
", "course/task-list/parts/task-course-data.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\task-list\\parts\\task-course-data.html.twig");
    }
}
