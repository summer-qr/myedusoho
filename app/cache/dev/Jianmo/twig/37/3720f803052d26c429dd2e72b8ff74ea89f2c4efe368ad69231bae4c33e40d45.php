<?php

/* course-manage/base-info/rule.html.twig */
class __TwigTemplate_fd265d70f9fbcefd5c8b97728d97b180af10ef6315232c5a0b316ed250fb4a3b extends Twig_Template
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
        $__internal_42005faac305965e57f8bd376cf567838d71e36b38e9a28ef6e5a13773ca6de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42005faac305965e57f8bd376cf567838d71e36b38e9a28ef6e5a13773ca6de2->enter($__internal_42005faac305965e57f8bd376cf567838d71e36b38e9a28ef6e5a13773ca6de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course-manage/base-info/rule.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
  <label for=\"\" class=\"col-sm-2 control-label\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode"), "html", null, true);
        echo "
    <a class=\"es-icon es-icon-help course-mangae-info__help text-normal\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\"
       data-content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.tips"), "html", null, true);
        echo "\">
    </a></label>
  <div class=\"col-sm-8 cd-radio-group mb0\">
    ";
        // line 7
        $context["courseDraft"] = ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()), "draft")) : ("draft")) == "draft");
        // line 8
        echo "    ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("learnMode", array("freeMode" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.free"), "lockMode" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.mode.locked")), (($this->getAttribute(        // line 11
(isset($context["course"]) ? $context["course"] : null), "learnMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "learnMode", array()), "freeMode")) : ("freeMode")), (((isset($context["courseDraft"]) ? $context["courseDraft"] : $this->getContext($context, "courseDraft"))) ? ("") : ("disabled")));
        echo "
  </div>
</div>

";
        // line 15
        $this->loadTemplate("course-manage/marketing/set-rule.html.twig", "course-manage/base-info/rule.html.twig", 15)->display($context);
        // line 16
        echo "
<div class=\"form-group\">
  <label for=\"\" class=\"col-sm-2 control-label mbs\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "</label>
  <div class=\"col-sm-8 cd-radio-group mb0\">
    <label class=\"cd-radio ";
        // line 20
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array()), "0")) : ("0")) == 1)) {
            echo "checked";
        }
        echo "\">
      <input type=\"radio\" data-toggle=\"cd-radio\" name=\"enableFinish\" value=\"1\" > ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule.nothing"), "html", null, true);
        echo "
    </label><label class=\"cd-radio ";
        // line 22
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableFinish", array()), "0")) : ("0")) == 0)) {
            echo "checked";
        }
        echo "\">
      <input type=\"radio\" data-toggle=\"cd-radio\"  name=\"enableFinish\" value=\"0\"> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule.depend_on_finish_condition", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
      <a class=\"es-icon es-icon-help course-mangae-info__help\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" data-content=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_setup.finish_rule.depend_on_finish_condition_tips", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "\"></a>
    </label>
  </div>
</div>
";
        // line 28
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "type", array()) == "live")) {
            // line 29
            echo "  ";
            $this->loadTemplate("course-manage/marketing/set-live-capacity.html.twig", "course-manage/base-info/rule.html.twig", 29)->display($context);
        } else {
            // line 31
            echo "  ";
            $this->loadTemplate("course-manage/marketing/set-preview.html.twig", "course-manage/base-info/rule.html.twig", 31)->display($context);
        }
        // line 33
        echo "<div class=\"form-group js-services\">
  <label class=\"col-sm-2 control-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.services.provide_services"), "html", null, true);
        echo "</label>
  <div class=\"col-sm-8 form-control-static\">
    ";
        // line 36
        $context["serviceTags"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->buildServiceTags((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array()), array())) : (array())));
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serviceTags"]) ? $context["serviceTags"] : $this->getContext($context, "serviceTags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 38
            echo "      <span class=\"service-item js-service-item ";
            if ($this->getAttribute($context["tag"], "active", array())) {
                echo "service-primary-item";
            }
            echo "\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tag"], "summary", array())), "html", null, true);
            echo "\" data-code=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "code", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tag"], "fullName", array())), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    <input type=\"hidden\" id=\"course_services\" name=\"services\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->jsonEncodeUtf8((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array()), array())) : (array()))), "html", null, true);
        echo "\">
  </div>
</div>

";
        // line 44
        if ((((isset($context["audioServiceStatus"]) ? $context["audioServiceStatus"] : $this->getContext($context, "audioServiceStatus")) != "needOpen") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal"))) {
            // line 45
            echo "  <div class=\"form-group\" id=\"audio-modal-id\">
    <label for=\"\" class=\"col-sm-2 control-label\">";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.enable"), "html", null, true);
            echo "</label>
    <div class=\"col-sm-8 cd-radio-group\" data-value=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["audioServiceStatus"]) ? $context["audioServiceStatus"] : $this->getContext($context, "audioServiceStatus")), "html", null, true);
            echo "\" id=\"course-audio-mode\">
      <label class=\"cd-radio ";
            // line 48
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableAudio", array()), "0")) : ("0")) == 1)) {
                echo "checked";
            }
            echo "\">
        <input type=\"radio\" data-toggle=\"cd-radio\" name=\"enableAudio\" value=\"1\">
        ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.start"), "html", null, true);
            echo "
      </label>
      <label class=\"cd-radio ";
            // line 52
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableAudio", array()), "0")) : ("0")) == 0)) {
                echo "checked";
            }
            echo "\">
        <input type=\"radio\" data-toggle=\"cd-radio\" name=\"enableAudio\" value=\"0\">
        ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.close"), "html", null, true);
            echo "
      </label>
      <div>
        <div class=\"course-mangae-info__tip\">1.";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.enable.video.convert.audio.benefit"), "html", null, true);
            echo "</div>
        <div class=\"course-mangae-info__tip\">2.";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.audio.status"), "html", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\CourseExtension')->getAudioConvertionStatus($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())), "html", null, true);
            echo " <a class=\"ml5 link-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_files", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array(), "array"))), "html", null, true);
            echo "\" target=\"__blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.audio.detail"), "html", null, true);
            echo "</a></div>
      </div>
    </div>
  </div>
";
        }
        // line 63
        echo "
";
        // line 64
        $this->loadTemplate("course-manage/marketing/set-reward-point.html.twig", "course-manage/base-info/rule.html.twig", 64)->display($context);
        
        $__internal_42005faac305965e57f8bd376cf567838d71e36b38e9a28ef6e5a13773ca6de2->leave($__internal_42005faac305965e57f8bd376cf567838d71e36b38e9a28ef6e5a13773ca6de2_prof);

    }

    public function getTemplateName()
    {
        return "course-manage/base-info/rule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 64,  191 => 63,  177 => 58,  173 => 57,  167 => 54,  160 => 52,  155 => 50,  148 => 48,  144 => 47,  140 => 46,  137 => 45,  135 => 44,  127 => 40,  110 => 38,  105 => 37,  103 => 36,  98 => 34,  95 => 33,  91 => 31,  87 => 29,  85 => 28,  78 => 24,  74 => 23,  68 => 22,  64 => 21,  58 => 20,  53 => 18,  49 => 16,  47 => 15,  40 => 11,  38 => 8,  36 => 7,  30 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-group\">
  <label for=\"\" class=\"col-sm-2 control-label\">{{'course.plan_setup.mode'|trans}}
    <a class=\"es-icon es-icon-help course-mangae-info__help text-normal\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\"
       data-content=\"{{ 'course.plan_setup.mode.tips'|trans }}\">
    </a></label>
  <div class=\"col-sm-8 cd-radio-group mb0\">
    {% set courseDraft = course.status|default('draft') == 'draft' %}
    {{ cd_radios('learnMode',
    { 'freeMode': 'course.plan_setup.mode.free'|trans,
      'lockMode':'course.plan_setup.mode.locked'|trans },
    course.learnMode|default('freeMode'), courseDraft ? '' : 'disabled') }}
  </div>
</div>

{% include 'course-manage/marketing/set-rule.html.twig' %}

<div class=\"form-group\">
  <label for=\"\" class=\"col-sm-2 control-label mbs\">{{'course.plan_setup.finish_rule'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans)})}}</label>
  <div class=\"col-sm-8 cd-radio-group mb0\">
    <label class=\"cd-radio {% if course.enableFinish|default('0') == 1 %}checked{% endif %}\">
      <input type=\"radio\" data-toggle=\"cd-radio\" name=\"enableFinish\" value=\"1\" > {{'course.plan_setup.finish_rule.nothing'|trans}}
    </label><label class=\"cd-radio {% if course.enableFinish|default('0') == 0 %}checked{% endif %}\">
      <input type=\"radio\" data-toggle=\"cd-radio\"  name=\"enableFinish\" value=\"0\"> {{'course.plan_setup.finish_rule.depend_on_finish_condition'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans)})}}
      <a class=\"es-icon es-icon-help course-mangae-info__help\" data-trigger=\"hover\" data-toggle=\"popover\" data-container=\"body\" data-placement=\"top\" data-content=\"{{'course.plan_setup.finish_rule.depend_on_finish_condition_tips'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans)})}}\"></a>
    </label>
  </div>
</div>
{% if courseSet.type == 'live' %}
  {% include 'course-manage/marketing/set-live-capacity.html.twig' %}
{% else %}
  {% include 'course-manage/marketing/set-preview.html.twig' %}
{% endif %}
<div class=\"form-group js-services\">
  <label class=\"col-sm-2 control-label\">{{ 'course.marketing_setup.services.provide_services'|trans }}</label>
  <div class=\"col-sm-8 form-control-static\">
    {% set serviceTags = services(course.services | default([])) %}
    {% for tag in serviceTags %}
      <span class=\"service-item js-service-item {% if tag.active %}service-primary-item{% endif %}\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ tag.summary|trans }}\" data-code=\"{{ tag.code }}\">{{ tag.fullName|trans }}</span>
    {% endfor %}
    <input type=\"hidden\" id=\"course_services\" name=\"services\" value=\"{{ course.services|default([])|json_encode_utf8() }}\">
  </div>
</div>

{% if audioServiceStatus != 'needOpen' and course.type == 'normal' %}
  <div class=\"form-group\" id=\"audio-modal-id\">
    <label for=\"\" class=\"col-sm-2 control-label\">{{ 'course.info.video.convert.audio.enable'|trans }}</label>
    <div class=\"col-sm-8 cd-radio-group\" data-value=\"{{ audioServiceStatus }}\" id=\"course-audio-mode\">
      <label class=\"cd-radio {% if course.enableAudio|default('0') == 1 %}checked{% endif %}\">
        <input type=\"radio\" data-toggle=\"cd-radio\" name=\"enableAudio\" value=\"1\">
        {{ 'course.info.video.convert.audio.start'|trans }}
      </label>
      <label class=\"cd-radio {% if course.enableAudio|default('0') == 0 %}checked{% endif %}\">
        <input type=\"radio\" data-toggle=\"cd-radio\" name=\"enableAudio\" value=\"0\">
        {{ 'course.info.video.convert.audio.close'|trans }}
      </label>
      <div>
        <div class=\"course-mangae-info__tip\">1.{{ 'course.enable.video.convert.audio.benefit'|trans }}</div>
        <div class=\"course-mangae-info__tip\">2.{{ 'course.video.convert.audio.status'|trans }}：{{ video_convert_completion(course.id) }} <a class=\"ml5 link-primary\" href=\"{{ path('course_set_manage_files', { id: courseSet['id'] }) }}\" target=\"__blank\">{{'course.video.convert.audio.detail'|trans }}</a></div>
      </div>
    </div>
  </div>
{% endif %}

{% include 'course-manage/marketing/set-reward-point.html.twig' %}", "course-manage/base-info/rule.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course-manage\\base-info\\rule.html.twig");
    }
}
