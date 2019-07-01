<?php

/* org/batch-update-org-btn.html.twig */
class __TwigTemplate_1c8e77b4a929f84b2991b197581176bf3f5c8a244363da8a31345f5fc0204e17 extends Twig_Template
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
        $__internal_20a63cc5d84a0c305a0dcb82c852da7c19b154200ce194722e11b226ca354fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a63cc5d84a0c305a0dcb82c852da7c19b154200ce194722e11b226ca354fee->enter($__internal_20a63cc5d84a0c305a0dcb82c852da7c19b154200ce194722e11b226ca354fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/batch-update-org-btn.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t";
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiaadminbundle/controller/org/batch-org-btn");
            // line 3
            echo "
\t";
            // line 4
            $context["generate"] = (((array_key_exists("generate", $context)) ? (_twig_default_filter((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate")), "generate")) : ("generate")) != "no-generate");
            // line 5
            echo "\t";
            if ((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate"))) {
                // line 6
                echo "\t\t<div>
\t    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.btn.all_select"), "html", null, true);
                echo "</label>
\t";
            }
            // line 9
            echo "  \t<a class=\"btn btn-default btn-sm ";
            if ((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate"))) {
                echo " mlm ";
            }
            echo "\" id=\"batch-update-org\" data-form-id=\"";
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")), "html", null, true);
            echo "\" data-toggle=\"modal\" data-generate=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("generate", $context)) ? (_twig_default_filter((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate")), false)) : (false)), "html", null, true);
            echo "\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_batch_update_org", array("module" => (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org.setup"), "html", null, true);
            echo "</a>
\t";
            // line 10
            if ((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate"))) {
                // line 11
                echo "\t  </div>
\t";
            }
        }
        
        $__internal_20a63cc5d84a0c305a0dcb82c852da7c19b154200ce194722e11b226ca354fee->leave($__internal_20a63cc5d84a0c305a0dcb82c852da7c19b154200ce194722e11b226ca354fee_prof);

    }

    public function getTemplateName()
    {
        return "org/batch-update-org-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  58 => 10,  43 => 9,  38 => 7,  35 => 6,  32 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting('magic.enable_org','0') %}
\t{% do load_script('topxiaadminbundle/controller/org/batch-org-btn') %}

\t{% set generate = generate|default('generate') != 'no-generate' %}
\t{% if generate %}
\t\t<div>
\t    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> {{ 'site.btn.all_select'|trans }}</label>
\t{% endif %}
  \t<a class=\"btn btn-default btn-sm {% if generate %} mlm {% endif %}\" id=\"batch-update-org\" data-form-id=\"{{formId}}\" data-toggle=\"modal\" data-generate=\"{{generate|default(false)}}\" data-target=\"#modal\" data-url=\"{{path('admin_batch_update_org',{module:module})}}\">{{ 'site.org.setup'|trans }}</a>
\t{% if generate %}
\t  </div>
\t{% endif %}
{% endif %}
", "org/batch-update-org-btn.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\org\\batch-update-org-btn.html.twig");
    }
}
