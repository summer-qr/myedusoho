<?php

/* admin/default/unsolved-questions-block.html.twig */
class __TwigTemplate_e90ca6d1b8e918b02434049eaa0fd4eb51147b91fabef2f2e1dab4bce22422c5 extends Twig_Template
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
        $__internal_11605ca5a93166bdf61e7a14f9a12e075f0d06e2d2d6777f56e03746717c9060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11605ca5a93166bdf61e7a14f9a12e075f0d06e2d2d6777f56e03746717c9060->enter($__internal_11605ca5a93166bdf61e7a14f9a12e075f0d06e2d2d6777f56e03746717c9060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/unsolved-questions-block.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/default/unsolved-questions-block.html.twig", 1);
        // line 2
        echo "  \t";
        if ((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions"))) {
            // line 3
            echo "      <table class=\"table table-condensed table-noborder table-overflow\" style=\"margin-bottom:0\">
        <thead>
          <tr>
            <th width=\"58%\">";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.tr.question_th"), "html", null, true);
            echo "</th>
            <th width=\"20%\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.tr.view_count_th"), "html", null, true);
            echo "</th>
            <th width=\"22%\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.tr.operation_th"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody class=\"tbody\">
          ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 13
                echo "            ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), null)) : (null));
                // line 14
                echo "  \t        <tr>
  \t          <td>
                <a class=\"link-primary\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "threadId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                  ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true);
                echo "
                </a>
  \t          </td>
              <td class=\"pull-right prl\">
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo "
              </td>
  \t          <td>
  \t          \t";
                // line 24
                if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                    // line 25
                    echo "  \t\t\t          <button class=\"btn btn-default btn-xs js-remind-teachers\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "questionId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.remind_teacher_btn"), "html", null, true);
                    echo "</button>
  \t\t          ";
                }
                // line 27
                echo "  \t\t        </td>
  \t        </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </tbody>
        </table>
    ";
        } else {
            // line 33
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.empty"), "html", null, true);
            echo "</div>
    ";
        }
        // line 35
        echo "
";
        
        $__internal_11605ca5a93166bdf61e7a14f9a12e075f0d06e2d2d6777f56e03746717c9060->leave($__internal_11605ca5a93166bdf61e7a14f9a12e075f0d06e2d2d6777f56e03746717c9060_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/unsolved-questions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  98 => 33,  93 => 30,  85 => 27,  77 => 25,  75 => 24,  69 => 21,  62 => 17,  58 => 16,  54 => 14,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  32 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"admin/macro.html.twig\" as admin_macro %}
  \t{% if questions %}
      <table class=\"table table-condensed table-noborder table-overflow\" style=\"margin-bottom:0\">
        <thead>
          <tr>
            <th width=\"58%\">{{'admin.homepage.latest_question.tr.question_th'|trans}}</th>
            <th width=\"20%\">{{'admin.homepage.latest_question.tr.view_count_th'|trans}}</th>
            <th width=\"22%\">{{'admin.homepage.latest_question.tr.operation_th'|trans}}</th>
          </tr>
        </thead>
        <tbody class=\"tbody\">
          {% for question in questions %}
            {% set course =  courses[question.courseId]|default(null) %}
  \t        <tr>
  \t          <td>
                <a class=\"link-primary\" href=\"{{ path('course_thread_show', {courseId:question.courseId, threadId:question.id}) }}\" target=\"_blank\">
                  {{ question.title }}
                </a>
  \t          </td>
              <td class=\"pull-right prl\">
                {{ question.hitNum }}
              </td>
  \t          <td>
  \t          \t{% if course %}
  \t\t\t          <button class=\"btn btn-default btn-xs js-remind-teachers\" data-url=\"{{ path('admin_question_remind_teachers', {courseId:question.courseId, questionId:question.id}) }}\">{{'admin.homepage.latest_question.remind_teacher_btn'|trans}}</button>
  \t\t          {% endif %}
  \t\t        </td>
  \t        </tr>
          {% endfor %}
        </tbody>
        </table>
    {% else %}
      <div class=\"empty\">{{'admin.homepage.latest_question.empty'|trans}}</div>
    {% endif %}

", "admin/default/unsolved-questions-block.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\default\\unsolved-questions-block.html.twig");
    }
}
