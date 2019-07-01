<?php

/* course-manage/marketing/set-reward-point.html.twig */
class __TwigTemplate_7b3589b5e957a861a272bee296259f9cadb202ba039fe61ffbff78ee8ff87990 extends Twig_Template
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
        $__internal_27c1e794d4b82f738b7af26b41062468a3e5683e60e17713ae68037fd02c2e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c1e794d4b82f738b7af26b41062468a3e5683e60e17713ae68037fd02c2e89->enter($__internal_27c1e794d4b82f738b7af26b41062468a3e5683e60e17713ae68037fd02c2e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course-manage/marketing/set-reward-point.html.twig"));

        // line 1
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("reward_point.enable", 0) && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("reward_point.allowTeacherSet", 0))) {
            // line 2
            echo "  <div class=\"es-piece\">
    <div class=\"form-group form-inline\">
      <label class=\"col-sm-2 control-label\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.study_award"), "html", null, true);
            echo "
      </label>
      <div class=\"col-sm-8\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.task_award"), "html", null, true);
            echo "
        <input class=\"form-control\" type=\"text\" name=\"taskRewardPoint\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "taskRewardPoint", array()), "html", null, true);
            echo "\">   / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.times"), "html", null, true);
            echo "
      </div>
    </div>
    <div class=\"form-group form-inline\">
      <label class=\"col-sm-2 control-label display\"></label>
      <div class=\"col-sm-8\">
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.course_award"), "html", null, true);
            echo "  <input class=\"form-control\" type=\"text\" name=\"rewardPoint\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "rewardPoint", array()), "html", null, true);
            echo "\">   / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.times"), "html", null, true);
            echo "
      </div>
    </div>
  </div>
  <hr class=\"mb30 bg-border-color\">
";
        }
        
        $__internal_27c1e794d4b82f738b7af26b41062468a3e5683e60e17713ae68037fd02c2e89->leave($__internal_27c1e794d4b82f738b7af26b41062468a3e5683e60e17713ae68037fd02c2e89_prof);

    }

    public function getTemplateName()
    {
        return "course-manage/marketing/set-reward-point.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  39 => 9,  35 => 8,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting('reward_point.enable', 0) and setting('reward_point.allowTeacherSet', 0) %}
  <div class=\"es-piece\">
    <div class=\"form-group form-inline\">
      <label class=\"col-sm-2 control-label\">
        {{ 'course.marketing_setup.study_award'|trans }}
      </label>
      <div class=\"col-sm-8\">
        {{ 'course.marketing_setup.task_award'|trans }}
        <input class=\"form-control\" type=\"text\" name=\"taskRewardPoint\" value=\"{{ course.taskRewardPoint }}\">   / {{'site.default.times'|trans}}
      </div>
    </div>
    <div class=\"form-group form-inline\">
      <label class=\"col-sm-2 control-label display\"></label>
      <div class=\"col-sm-8\">
        {{ 'course.marketing_setup.course_award'|trans }}  <input class=\"form-control\" type=\"text\" name=\"rewardPoint\" value=\"{{ course.rewardPoint }}\">   / {{'site.default.times'|trans}}
      </div>
    </div>
  </div>
  <hr class=\"mb30 bg-border-color\">
{% endif %}
", "course-manage/marketing/set-reward-point.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course-manage\\marketing\\set-reward-point.html.twig");
    }
}
