<?php

/* course/task-list/parts/task-length-template.html.twig */
class __TwigTemplate_6df4bbe6a87f44bb78099cf269324989ef22f188657c72457a7433c65e719d74 extends Twig_Template
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
        $__internal_558e9a310b7f9d4d07ba176b32ead6fc361ea10db8abea67757cfbb74680c62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558e9a310b7f9d4d07ba176b32ead6fc361ea10db8abea67757cfbb74680c62b->enter($__internal_558e9a310b7f9d4d07ba176b32ead6fc361ea10db8abea67757cfbb74680c62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/task-list/parts/task-length-template.html.twig"));

        // line 1
        echo "<span class=\"right-menu color-gray ";
        if ( !(isset($context["member"]) ? $context["member"] : $this->getContext($context, "member"))) {
            echo " mouse-leave ";
        }
        echo "\">

  <span class=\"hidden-xs mr20\" display-if=\"{hasWatchLimitRemaining}\">  ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.remaining.watch_time"), "html", null, true);
        echo "：{watchLimitRemaining} </span>
  ";
        // line 4
        $context["now"] = $this->getAttribute(twig_date_converter($this->env), "timestamp", array());
        // line 5
        echo "
  <tmp display-if=\"{isLive}\">
    <tmp display-if=\"{isLiveReplayGenerated}\">
      ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.block_grid.live_back"), "html", null, true);
        echo "
    </tmp>

    <tmp hide-if=\"{isLiveReplayGenerated}\">
      <tmp display-if=\"{isLiveNotStarted}\">
        {activityStartTimeStr}
      </tmp>

      <tmp display-if=\"{isLiveStarting}\">
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.block_grid.onlive"), "html", null, true);
        echo "
      </tmp>

      <tmp display-if=\"{isLiveFinished}\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.block_grid.live_finish"), "html", null, true);
        echo "
      </tmp>
    </tmp>
  </tmp>

  <tmp hide-if=\"{isLive}\">
    {activityLength}
  </tmp>
  <i class=\"{getMetaIcon}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{getMetaName}任务\" data-container=\"body\"></i>
</span>
";
        
        $__internal_558e9a310b7f9d4d07ba176b32ead6fc361ea10db8abea67757cfbb74680c62b->leave($__internal_558e9a310b7f9d4d07ba176b32ead6fc361ea10db8abea67757cfbb74680c62b_prof);

    }

    public function getTemplateName()
    {
        return "course/task-list/parts/task-length-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  53 => 17,  41 => 8,  36 => 5,  34 => 4,  30 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"right-menu color-gray {% if not member %} mouse-leave {% endif %}\">

  <span class=\"hidden-xs mr20\" display-if=\"{hasWatchLimitRemaining}\">  {{'course.task.learning.remaining.watch_time'|trans}}：{watchLimitRemaining} </span>
  {% set now = date().timestamp %}

  <tmp display-if=\"{isLive}\">
    <tmp display-if=\"{isLiveReplayGenerated}\">
      {{ 'course.block_grid.live_back'|trans }}
    </tmp>

    <tmp hide-if=\"{isLiveReplayGenerated}\">
      <tmp display-if=\"{isLiveNotStarted}\">
        {activityStartTimeStr}
      </tmp>

      <tmp display-if=\"{isLiveStarting}\">
        {{ 'course.block_grid.onlive'|trans }}
      </tmp>

      <tmp display-if=\"{isLiveFinished}\">
        {{ 'course.block_grid.live_finish'|trans }}
      </tmp>
    </tmp>
  </tmp>

  <tmp hide-if=\"{isLive}\">
    {activityLength}
  </tmp>
  <i class=\"{getMetaIcon}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{getMetaName}任务\" data-container=\"body\"></i>
</span>
", "course/task-list/parts/task-length-template.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\task-list\\parts\\task-length-template.html.twig");
    }
}
