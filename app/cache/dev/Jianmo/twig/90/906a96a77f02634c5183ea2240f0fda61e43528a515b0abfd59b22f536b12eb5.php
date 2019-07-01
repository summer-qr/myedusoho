<?php

/* admin/system/log/template.html.twig */
class __TwigTemplate_1b64defd2485c22f8517bfa12be2ad704e8a6dd4c724abe793d1b2082f9aee16 extends Twig_Template
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
        $__internal_981f7b33a6395b5f24325a167131f9c972b5b02793bd520f115debfb8fc3b5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981f7b33a6395b5f24325a167131f9c972b5b02793bd520f115debfb8fc3b5ca->enter($__internal_981f7b33a6395b5f24325a167131f9c972b5b02793bd520f115debfb8fc3b5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/log/template.html.twig"));

        // line 1
        echo "

";
        // line 3
        if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "shouldShowTemplate", array()) == true)) {
            // line 4
            echo "
  ";
            // line 5
            $context["template"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((("log.action.template." . $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "module", array())) . ".") . $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "action", array())), $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "urlParamsJson", array()));
            // line 6
            echo "
  ";
            // line 7
            if (((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")) == ((("log.action.template." . $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "module", array())) . ".") . $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "action", array())))) {
                // line 8
                echo "
    ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message", array()), "html", null, true);
                echo "

  ";
            } else {
                // line 12
                echo "
    ";
                // line 13
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((("log.action.template." . $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "module", array())) . ".") . $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "action", array())), $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "urlParamsJson", array()));
                echo "

  ";
            }
            // line 16
            echo "
  ";
            // line 17
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "shouldShowModal", array()) == true)) {
                // line 18
                echo "    <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-sm\"
       data-url=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logs_field_change", array("log" => (isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")))), "html", null, true);
                echo "\">
      ";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("log.field.detail"), "html", null, true);
                echo "
    </a>
  ";
            }
            // line 23
            echo "
";
        } else {
            // line 25
            echo "
  ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->logTrans($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message", array()), $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "data", array())), "html", null, true);
            echo "

";
        }
        
        $__internal_981f7b33a6395b5f24325a167131f9c972b5b02793bd520f115debfb8fc3b5ca->leave($__internal_981f7b33a6395b5f24325a167131f9c972b5b02793bd520f115debfb8fc3b5ca_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/log/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  78 => 25,  74 => 23,  68 => 20,  64 => 19,  61 => 18,  59 => 17,  56 => 16,  50 => 13,  47 => 12,  41 => 9,  38 => 8,  36 => 7,  33 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% if log.shouldShowTemplate == true %}

  {% set template = ('log.action.template.'~log.module~'.'~log.action)|trans(log.urlParamsJson)|raw %}

  {% if template == ('log.action.template.'~log.module~'.'~log.action) %}

    {{ log.message }}

  {% else %}

    {{ ('log.action.template.'~log.module~'.'~log.action)|trans(log.urlParamsJson)|raw }}

  {% endif %}

  {% if log.shouldShowModal == true %}
    <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-sm\"
       data-url=\"{{path('admin_logs_field_change',{log: log} )}}\">
      {{ 'log.field.detail'|trans }}
    </a>
  {% endif %}

{% else %}

  {{ log_trans(log.message, log.data) }}

{% endif %}
", "admin/system/log/template.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\log\\template.html.twig");
    }
}
