<?php

/* admin/open-course-analysis/referer/summary-tab.html.twig */
class __TwigTemplate_7c30133c03aedc8f95f87fd2fedb14800205746b0662866fc5b839cc5ac87af1 extends Twig_Template
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
        $__internal_ab38f55c20b01eb062e57057a8941aad95b8ad188620464c95f272d943b28c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab38f55c20b01eb062e57057a8941aad95b8ad188620464c95f272d943b28c2b->enter($__internal_ab38f55c20b01eb062e57057a8941aad95b8ad188620464c95f272d943b28c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/open-course-analysis/referer/summary-tab.html.twig"));

        // line 1
        echo "<div class=\"mbs\">
  <div class= \"btn-group\" >
  \t<a class=\"btn btn-default btn-sm ";
        // line 3
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "list")) {
            echo "btn-primary ";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_summary_list", array("startTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "endTime", array()))), "html", null, true);
        echo "\" role=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.referer.summary_list_tab"), "html", null, true);
        echo "</a>
  \t<a class=\" btn btn-default btn-sm ";
        // line 4
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "summary")) {
            echo "btn-primary ";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_opencourse_analysis_referer_summary", array("startTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dateRange"]) ? $context["dateRange"] : $this->getContext($context, "dateRange")), "endTime", array()))), "html", null, true);
        echo "\" role=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.analysis.referer.summary_tab"), "html", null, true);
        echo "</a>
  </div>
</div>";
        
        $__internal_ab38f55c20b01eb062e57057a8941aad95b8ad188620464c95f272d943b28c2b->leave($__internal_ab38f55c20b01eb062e57057a8941aad95b8ad188620464c95f272d943b28c2b_prof);

    }

    public function getTemplateName()
    {
        return "admin/open-course-analysis/referer/summary-tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"mbs\">
  <div class= \"btn-group\" >
  \t<a class=\"btn btn-default btn-sm {% if tab == 'list' %}btn-primary {% endif %}\" href=\"{{path('admin_opencourse_analysis_referer_summary_list',{startTime:dateRange.startTime,endTime:dateRange.endTime})}}\" role=\"button\">{{ 'admin.open_manage.analysis.referer.summary_list_tab'|trans }}</a>
  \t<a class=\" btn btn-default btn-sm {% if tab == 'summary' %}btn-primary {% endif %}\" href=\"{{path('admin_opencourse_analysis_referer_summary',{startTime:dateRange.startTime,endTime:dateRange.endTime})}}\" role=\"button\">{{ 'admin.open_manage.analysis.referer.summary_tab'|trans }}</a>
  </div>
</div>", "admin/open-course-analysis/referer/summary-tab.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\open-course-analysis\\referer\\summary-tab.html.twig");
    }
}
