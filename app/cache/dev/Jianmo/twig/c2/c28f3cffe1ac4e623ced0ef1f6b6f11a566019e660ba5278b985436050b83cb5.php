<?php

/* course/tabs/summary.html.twig */
class __TwigTemplate_6dc6f13d54a1e4ae6b50605c36d08c2a1203cf71b4eb6a35bdd9a5a90bab2434 extends Twig_Template
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
        $__internal_f29f36d7b6b38e3cdab092269ef92c92442b32806cca51f54e89918585dd8594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29f36d7b6b38e3cdab092269ef92c92442b32806cca51f54e89918585dd8594->enter($__internal_f29f36d7b6b38e3cdab092269ef92c92442b32806cca51f54e89918585dd8594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/tabs/summary.html.twig"));

        // line 1
        $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array())));
        // line 2
        echo "
";
        // line 3
        if (( !((array_key_exists("isMarketingPage", $context)) ? (_twig_default_filter((isset($context["isMarketingPage"]) ? $context["isMarketingPage"] : $this->getContext($context, "isMarketingPage")), null)) : (null)) && ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseNum", array()), 1)) : (1)) > 1))) {
            // line 4
            echo "  <div class=\"es-piece\">
    <div class=\"piece-body\">
      ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.introduction.more_teaching_plan", array("%courseUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())))));
            echo "
    </div>
  </div>
";
        }
        // line 10
        echo "
<div class=\"es-piece\">
  <div class=\"piece-header\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.introduction.course_introduction"), "html", null, true);
        echo "</div>
  <div class=\"piece-body p-lg clearfix\">
    ";
        // line 14
        echo _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->cdn($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "summary", array())), $this->env->getExtension('AppBundle\Twig\WebExtension')->cdn($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "summary", array())));
        echo "
  </div>
</div>

</section>


";
        // line 21
        if ((((array_key_exists("isMarketingPage", $context)) ? (_twig_default_filter((isset($context["isMarketingPage"]) ? $context["isMarketingPage"] : $this->getContext($context, "isMarketingPage")), null)) : (null)) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseItemNum", array()) > 0))) {
            // line 22
            echo "
  <div class=\"panel panel-default hidden-xs\">
    <div class=\"panel-heading \">
      <h3 class=\"panel-title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.content_title"), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"panel-body\">
      ";
            // line 28
            $this->loadTemplate($this->env->getExtension('AppBundle\Twig\CourseExtension')->getDynUrl("course/tabs/tasks.html.twig", array("type" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()))), "course/tabs/summary.html.twig", 28)->display(array_merge($context, array("limitCount" => 2)));
            // line 29
            echo "      <div class=\"js-only-display-one-page\"></div>

      ";
            // line 31
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseItemNum", array()) > 25)) {
                // line 32
                echo "        <div class=\"text-center pt10 border-top-gray-lighter\" >
          <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "tab" => "tasks")), "html", null, true);
                echo " \" class=\"link-dark\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.view_all_btn"), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 36
            echo "    </div>
  </div>
";
        }
        
        $__internal_f29f36d7b6b38e3cdab092269ef92c92442b32806cca51f54e89918585dd8594->leave($__internal_f29f36d7b6b38e3cdab092269ef92c92442b32806cca51f54e89918585dd8594_prof);

    }

    public function getTemplateName()
    {
        return "course/tabs/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 36,  83 => 33,  80 => 32,  78 => 31,  74 => 29,  72 => 28,  66 => 25,  61 => 22,  59 => 21,  49 => 14,  44 => 12,  40 => 10,  33 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set courseSet = data('CourseSet', {id: course.courseSetId}) %}

{% if not isMarketingPage|default(null) and course.courseNum|default(1) > 1 %}
  <div class=\"es-piece\">
    <div class=\"piece-body\">
      {{ 'course.introduction.more_teaching_plan'|trans({'%courseUrl%':path('course_show', {id: course.id})})|raw }}
    </div>
  </div>
{% endif %}

<div class=\"es-piece\">
  <div class=\"piece-header\">{{ 'course.introduction.course_introduction'|trans }}</div>
  <div class=\"piece-body p-lg clearfix\">
    {{ course.summary|cdn|default(courseSet.summary|cdn)|raw }}
  </div>
</div>

</section>


{% if  isMarketingPage|default(null)  and course.courseItemNum > 0 %}

  <div class=\"panel panel-default hidden-xs\">
    <div class=\"panel-heading \">
      <h3 class=\"panel-title\">{{ 'course.catalogue.content_title'|trans }}</h3>
    </div>
    <div class=\"panel-body\">
      {% include dyn_url('course/tabs/tasks.html.twig', {type:course.type}) with {limitCount : 2} %}
      <div class=\"js-only-display-one-page\"></div>

      {% if course.courseItemNum > 25 %}
        <div class=\"text-center pt10 border-top-gray-lighter\" >
          <a href=\"{{path('course_show',{id: course.id, tab:'tasks'})}} \" class=\"link-dark\">{{ 'course.catalogue.view_all_btn'|trans }}</a>
        </div>
      {% endif %}
    </div>
  </div>
{% endif %}
", "course/tabs/summary.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\tabs\\summary.html.twig");
    }
}
