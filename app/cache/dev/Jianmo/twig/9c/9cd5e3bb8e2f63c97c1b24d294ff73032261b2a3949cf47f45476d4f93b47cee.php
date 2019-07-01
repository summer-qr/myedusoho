<?php

/* course-manage/marketing/set-rule.html.twig */
class __TwigTemplate_489632bbd1bb7b7f3ed696f2a810df7295dc3bb34e5544369909957bb41bba3b extends Twig_Template
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
        $__internal_7f46866e31619510b2890803d7e94587f4854e311cb9d53cc926675038a3e983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f46866e31619510b2890803d7e94587f4854e311cb9d53cc926675038a3e983->enter($__internal_7f46866e31619510b2890803d7e94587f4854e311cb9d53cc926675038a3e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course-manage/marketing/set-rule.html.twig"));

        // line 1
        echo "<div class=\"form-group mb0\">
  <label class=\"col-sm-2 control-label\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.expiry_date"), "html", null, true);
        echo "
    <a class=\"es-icon es-icon-help course-mangae-info__help text-normal\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" 
    data-content=\"<ul class='pl10 list-unstyled'>
      <li class='mb10'>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.anytime");
        echo "</li>
      <li class='mb10'>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.real_time");
        echo "</li>
      <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.overdue_tips"), "html", null, true);
        echo "</li>
    </ul>\">
    </a>
  </label>
  <div class=\"col-sm-10 cd-radio-group mbm\">
    ";
        // line 13
        $context["coursePublished"] = ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()), "draft")) : ("draft")) == "published");
        // line 14
        echo "    ";
        $context["courseClosed"] = ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()), "draft")) : ("draft")) == "closed");
        // line 15
        echo "    ";
        $context["courseSetPublished"] = ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "status", array()), "draft")) : ("draft")) == "published");
        // line 16
        echo "    ";
        $context["courseSetClosed"] = ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "status", array()), "draft")) : ("draft")) == "closed");
        // line 17
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("expiryMode", array("days" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.anywhere_mode"), "date" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.date_mode"), "forever" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.forever_mode")), (($this->getAttribute(        // line 19
(isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")), ((((isset($context["coursePublished"]) ? $context["coursePublished"] : $this->getContext($context, "coursePublished")) || (isset($context["courseClosed"]) ? $context["courseClosed"] : $this->getContext($context, "courseClosed")))) ? ("disabled") : ("")));
        echo "
    
    ";
        // line 21
        if (((isset($context["courseClosed"]) ? $context["courseClosed"] : $this->getContext($context, "courseClosed")) || (((isset($context["courseSetClosed"]) ? $context["courseSetClosed"] : $this->getContext($context, "courseSetClosed")) && ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")) == "days")) && ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()), "draft")) : ("draft")) != "draft")))) {
            // line 22
            echo "      <input type=\"hidden\" name=\"expiryMode\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")), "html", null, true);
            echo "\">
    ";
        }
        // line 24
        echo "    ";
        // line 25
        echo "    <div class=\"course-manage-expiry ";
        if (twig_in_filter((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")), array(0 => "date", 1 => "forever"))) {
            echo "hidden";
        }
        echo "\" id=\"expiry-days\">
      <span class=\"caret\"></span>
      ";
        // line 27
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("deadlineType", array("end_date" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.end_date_mode"), "days" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan.expiry_date.days_mode")), (($this->getAttribute(        // line 29
(isset($context["course"]) ? $context["course"] : null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array()), "days")) : ("days")), ((((isset($context["coursePublished"]) ? $context["coursePublished"] : $this->getContext($context, "coursePublished")) || (isset($context["courseClosed"]) ? $context["courseClosed"] : $this->getContext($context, "courseClosed")))) ? ("disabled") : ("")));
        echo "

      ";
        // line 31
        if (((isset($context["coursePublished"]) ? $context["coursePublished"] : $this->getContext($context, "coursePublished")) || (isset($context["courseClosed"]) ? $context["courseClosed"] : $this->getContext($context, "courseClosed")))) {
            // line 32
            echo "        <input type=\"hidden\" name=\"deadlineType\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array()), "days")) : ("days")), "html", null, true);
            echo "\">
      ";
        }
        // line 34
        echo "
      <div class=\"cd-mt16 ";
        // line 35
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array()), "days")) : ("days")) != "end_date")) {
            echo "hidden";
        }
        echo "\" id=\"deadlineType-date\">
        <input autocomplete=\"off\" class=\"form-control course-mangae-info__input js-expiry-input cd-mr8\" id=\"deadline\" name=\"deadline\" value=\"";
        // line 36
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), 0)) : (0))) {
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), 0)) : (0)), "html", null, true);
        }
        echo "\" ";
        if (((isset($context["coursePublished"]) ? $context["coursePublished"] : $this->getContext($context, "coursePublished")) && (isset($context["courseSetPublished"]) ? $context["courseSetPublished"] : $this->getContext($context, "courseSetPublished")))) {
            echo " disabled ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.expiry_date_tips"), "html", null, true);
        echo "
      </div>
      <div class=\"cd-mt16 ";
        // line 38
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "deadlineType", array()), "days")) : ("days")) != "days")) {
            echo "hidden";
        }
        echo "\" id=\"deadlineType-days\">
        <input class=\"form-control course-mangae-info__input js-expiry-input cd-mr8\" type=\"text\" id=\"expiryDays\" name=\"expiryDays\" value=\"";
        // line 39
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDays", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDays", array()), 1)) : (1))) {
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDays", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDays", array()), 1)) : (1)), "html", null, true);
        }
        echo "\" ";
        if (((isset($context["coursePublished"]) ? $context["coursePublished"] : $this->getContext($context, "coursePublished")) && (isset($context["courseSetPublished"]) ? $context["courseSetPublished"] : $this->getContext($context, "courseSetPublished")))) {
            echo "disabled ";
        }
        echo ">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.expiry_date.publish_tips"), "html", null, true);
        echo "
      </div>
    </div>
    ";
        // line 44
        echo "    <div class=\"course-manage-expiry ";
        if (twig_in_filter((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")), array(0 => "days", 1 => "forever"))) {
            echo "hidden";
        }
        echo "\" id=\"expiry-date\">
      <span class=\"caret\"></span>
      <div class=\"course-manage-expiry__circle\">
        ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.start_time"), "html", null, true);
        echo "<input class=\"form-control cd-ml16 cd-mr32 course-mangae-info__input js-expiry-input\" id=\"expiryStartDate\" type=\"text\" name=\"expiryStartDate\" value=\"";
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array()), 0)) : (0)) == 0)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryStartDate", array()), twig_date_format_filter($this->env, "now", "Y-m-d"))) : (twig_date_format_filter($this->env, "now", "Y-m-d"))), "html", null, true);
        }
        echo "\" ";
        if (((isset($context["coursePublished"]) ? $context["coursePublished"] : $this->getContext($context, "coursePublished")) && (isset($context["courseSetPublished"]) ? $context["courseSetPublished"] : $this->getContext($context, "courseSetPublished")))) {
            echo " disabled ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.end_time"), "html", null, true);
        echo "<input class=\"form-control cd-ml16 course-mangae-info__input js-expiry-input\" type=\"text\" id=\"expiryEndDate\" name=\"expiryEndDate\" value=\"";
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), 0)) : (0)) != 0)) {
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryEndDate", array()), 0)) : (0)), "html", null, true);
        }
        echo "\" ";
        if (((isset($context["coursePublished"]) ? $context["coursePublished"] : $this->getContext($context, "coursePublished")) && (isset($context["courseSetPublished"]) ? $context["courseSetPublished"] : $this->getContext($context, "courseSetPublished")))) {
            echo "disabled ";
        }
        echo " >
      </div>
    </div>
    <div class=\"course-mangae-info__tip js-expiry-tip ";
        // line 50
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "days")) : ("days")) == "forever")) {
            echo " ml0 ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.expiry_date.first_publish_tips"), "html", null, true);
        echo "</div>
  </div>
</div>
";
        // line 53
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.lesson_watch_limit")) {
            // line 54
            echo "  <div class=\"form-group mtl\">
    <label class=\"col-sm-2 control-label\">
      ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.watch_time_limit"), "html", null, true);
            echo "
    </label>
    <div class=\"col-sm-8\">
      <input class=\"form-control course-mangae-info__input mrs\" type=\"text\" name=\"watchLimit\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()), 0)) : (0)), "html", null, true);
            echo "\">
      ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.watch_time_limit.watch_limit"), "html", null, true);
            echo "
      <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.rule.watch_time_limit.watch_limit_tips");
            echo "\">
      </a>
    </div>
  </div>
";
        }
        
        $__internal_7f46866e31619510b2890803d7e94587f4854e311cb9d53cc926675038a3e983->leave($__internal_7f46866e31619510b2890803d7e94587f4854e311cb9d53cc926675038a3e983_prof);

    }

    public function getTemplateName()
    {
        return "course-manage/marketing/set-rule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 61,  203 => 60,  199 => 59,  193 => 56,  189 => 54,  187 => 53,  177 => 50,  151 => 47,  142 => 44,  136 => 40,  126 => 39,  120 => 38,  107 => 36,  101 => 35,  98 => 34,  92 => 32,  90 => 31,  85 => 29,  84 => 27,  76 => 25,  74 => 24,  68 => 22,  66 => 21,  61 => 19,  59 => 17,  56 => 16,  53 => 15,  50 => 14,  48 => 13,  40 => 8,  36 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-group mb0\">
  <label class=\"col-sm-2 control-label\">
    {{ 'course.marketing_setup.rule.expiry_date'|trans }}
    <a class=\"es-icon es-icon-help course-mangae-info__help text-normal\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" 
    data-content=\"<ul class='pl10 list-unstyled'>
      <li class='mb10'>{{ 'course.teaching_plan.expiry_date.anytime'|trans|raw }}</li>
      <li class='mb10'>{{ 'course.teaching_plan.expiry_date.real_time'|trans|raw }}</li>
      <li>{{ 'course.teaching_plan.expiry_date.overdue_tips'|trans }}</li>
    </ul>\">
    </a>
  </label>
  <div class=\"col-sm-10 cd-radio-group mbm\">
    {% set coursePublished = course.status|default('draft') == 'published' %}
    {% set courseClosed = course.status|default('draft') == 'closed' %}
    {% set courseSetPublished = courseSet.status|default('draft') == 'published' %}
    {% set courseSetClosed = courseSet.status|default('draft') == 'closed' %}
    {{ cd_radios('expiryMode',
    { 'days': 'course.teaching_plan.expiry_date.anywhere_mode'|trans, 'date': 'course.teaching_plan.expiry_date.date_mode'|trans,'forever':'course.teaching_plan.expiry_date.forever_mode'|trans },
    course.expiryMode|default('days'), coursePublished or courseClosed ? 'disabled' : '') }}
    
    {% if courseClosed or (courseSetClosed and course.expiryMode|default('days') == 'days') and course.status|default('draft') != 'draft' %}
      <input type=\"hidden\" name=\"expiryMode\" value=\"{{ course.expiryMode|default('days') }}\">
    {% endif %}
    {#随到随学#}
    <div class=\"course-manage-expiry {% if course.expiryMode|default('days') in ['date', 'forever'] %}hidden{% endif %}\" id=\"expiry-days\">
      <span class=\"caret\"></span>
      {{ cd_radios('deadlineType',
      { 'end_date': 'course.teaching_plan.expiry_date.end_date_mode'|trans, 'days': 'course.teaching_plan.expiry_date.days_mode'|trans},
      course.deadlineType|default('days'),  coursePublished or courseClosed ? 'disabled' : '') }}

      {% if coursePublished or courseClosed %}
        <input type=\"hidden\" name=\"deadlineType\" value=\"{{ course.deadlineType|default('days') }}\">
      {% endif %}

      <div class=\"cd-mt16 {% if course.deadlineType|default('days') != 'end_date' %}hidden{% endif %}\" id=\"deadlineType-date\">
        <input autocomplete=\"off\" class=\"form-control course-mangae-info__input js-expiry-input cd-mr8\" id=\"deadline\" name=\"deadline\" value=\"{% if course.expiryEndDate|default(0) %}{{ course.expiryEndDate|default(0) }}{% endif %}\" {% if coursePublished and courseSetPublished %} disabled {% endif %}>{{ 'course.marketing_setup.rule.expiry_date_tips'|trans }}
      </div>
      <div class=\"cd-mt16 {% if course.deadlineType|default('days') != 'days' %}hidden{% endif %}\" id=\"deadlineType-days\">
        <input class=\"form-control course-mangae-info__input js-expiry-input cd-mr8\" type=\"text\" id=\"expiryDays\" name=\"expiryDays\" value=\"{% if course.expiryDays|default(1) %}{{ course.expiryDays|default(1) }}{% endif %}\" {% if coursePublished and courseSetPublished %}disabled {% endif %}>
        {{ 'course.marketing_setup.rule.expiry_date.publish_tips'|trans }}
      </div>
    </div>
    {#固定周期#}
    <div class=\"course-manage-expiry {% if course.expiryMode|default('days') in ['days', 'forever'] %}hidden{% endif %}\" id=\"expiry-date\">
      <span class=\"caret\"></span>
      <div class=\"course-manage-expiry__circle\">
        {{ 'course.plan_task.start_time'|trans }}<input class=\"form-control cd-ml16 cd-mr32 course-mangae-info__input js-expiry-input\" id=\"expiryStartDate\" type=\"text\" name=\"expiryStartDate\" value=\"{% if course.expiryStartDate|default(0) == 0 %}{{'now'|date('Y-m-d')}}{% else %}{{ course.expiryStartDate|default('now'|date('Y-m-d')) }}{% endif %}\" {% if coursePublished and courseSetPublished %} disabled {% endif %}>{{ 'course.plan_task.end_time'|trans }}<input class=\"form-control cd-ml16 course-mangae-info__input js-expiry-input\" type=\"text\" id=\"expiryEndDate\" name=\"expiryEndDate\" value=\"{% if course.expiryEndDate|default(0) != 0 %}{{ course.expiryEndDate|default(0) }}{% endif %}\" {% if coursePublished and courseSetPublished %}disabled {% endif %} >
      </div>
    </div>
    <div class=\"course-mangae-info__tip js-expiry-tip {% if course.expiryMode|default('days') == 'forever' %} ml0 {% endif %}\">{{ 'course.marketing_setup.rule.expiry_date.first_publish_tips'|trans }}</div>
  </div>
</div>
{% if setting('magic.lesson_watch_limit') %}
  <div class=\"form-group mtl\">
    <label class=\"col-sm-2 control-label\">
      {{ 'course.marketing_setup.rule.watch_time_limit'|trans }}
    </label>
    <div class=\"col-sm-8\">
      <input class=\"form-control course-mangae-info__input mrs\" type=\"text\" name=\"watchLimit\" value=\"{{ course.watchLimit|default(0) }}\">
      {{ 'course.marketing_setup.rule.watch_time_limit.watch_limit'|trans }}
      <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ 'course.marketing_setup.rule.watch_time_limit.watch_limit_tips'|trans|raw }}\">
      </a>
    </div>
  </div>
{% endif %}
", "course-manage/marketing/set-rule.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course-manage\\marketing\\set-rule.html.twig");
    }
}
