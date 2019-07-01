<?php

/* event_report.html.twig */
class __TwigTemplate_e384d231572040d5077067eebe90e9c82d4d4f46c23bc7e2f09913ae1762e716 extends Twig_Template
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
        $__internal_f0c38749188a990e8e45ba6bc5f4f4e6eb7510478b45b0996f86e77378689d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c38749188a990e8e45ba6bc5f4f4e6eb7510478b45b0996f86e77378689d6f->enter($__internal_f0c38749188a990e8e45ba6bc5f4f4e6eb7510478b45b0996f86e77378689d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event_report.html.twig"));

        // line 1
        echo "<div
    ";
        // line 2
        if (((array_key_exists("eventId", $context)) ? (_twig_default_filter((isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")), "")) : (""))) {
            // line 3
            echo "        id=\"";
            echo twig_escape_filter($this->env, (isset($context["eventId"]) ? $context["eventId"] : $this->getContext($context, "eventId")), "html", null, true);
            echo "\"
    ";
        }
        // line 5
        echo "     class=\"event-report\"
     data-url=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_dispatch");
        echo "\" data-event-name=\"";
        echo twig_escape_filter($this->env, (isset($context["eventName"]) ? $context["eventName"] : $this->getContext($context, "eventName")), "html", null, true);
        echo "\"
     data-subject-type=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["subjectType"]) ? $context["subjectType"] : $this->getContext($context, "subjectType")), "html", null, true);
        echo "\"
     data-subject-id=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["subjectId"]) ? $context["subjectId"] : $this->getContext($context, "subjectId")), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("eventReportParams", $context)) ? (_twig_default_filter((isset($context["eventReportParams"]) ? $context["eventReportParams"] : $this->getContext($context, "eventReportParams")))) : ("")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo " data-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "></div>";
        
        $__internal_f0c38749188a990e8e45ba6bc5f4f4e6eb7510478b45b0996f86e77378689d6f->leave($__internal_f0c38749188a990e8e45ba6bc5f4f4e6eb7510478b45b0996f86e77378689d6f_prof);

    }

    public function getTemplateName()
    {
        return "event_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  36 => 6,  33 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div
    {% if eventId|default('') %}
        id=\"{{ eventId }}\"
    {% endif %}
     class=\"event-report\"
     data-url=\"{{ path('event_dispatch') }}\" data-event-name=\"{{ eventName }}\"
     data-subject-type=\"{{ subjectType }}\"
     data-subject-id=\"{{ subjectId }}\" {% for key,value in eventReportParams|default() %} data-{{ key }}=\"{{ value }}\"{% endfor %}></div>", "event_report.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\event_report.html.twig");
    }
}
