<?php

/* default/exception.html.twig */
class __TwigTemplate_74b548ff6c37738e988a47b19122b9ad9f1376d7cb698b6c7c8813b2d17615a3 extends Twig_Template
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
        $__internal_1e1bc6905218fc332ba3c9679375bdbba0e5ac727212fbd09619f24902ea8ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1bc6905218fc332ba3c9679375bdbba0e5ac727212fbd09619f24902ea8ed2->enter($__internal_1e1bc6905218fc332ba3c9679375bdbba0e5ac727212fbd09619f24902ea8ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/exception.html.twig"));

        // line 1
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "flashBag", array(), "any", false, true), "has", array(0 => "currentThrowedException"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "flashBag", array(), "any", false, true), "has", array(0 => "currentThrowedException"), "method"))) : (""))) {
            // line 2
            echo "  <div class=\"js-hidden-exception hidden\">
    ";
            // line 3
            $context["currentThrowedException"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "currentThrowedException"), "method"), 0, array(), "array");
            // line 4
            echo "    {
      \"statusCode\": \"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentThrowedException"]) ? $context["currentThrowedException"] : $this->getContext($context, "currentThrowedException")), "statusCode", array(), "array"), "html", null, true);
            echo "\",
      \"code\": \"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentThrowedException"]) ? $context["currentThrowedException"] : $this->getContext($context, "currentThrowedException")), "code", array(), "array"), "html", null, true);
            echo "\",
      \"message\": \"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["currentThrowedException"]) ? $context["currentThrowedException"] : $this->getContext($context, "currentThrowedException")), "message", array(), "array")), "html", null, true);
            echo "\"
    }
  </div>

  ";
            // line 11
            if (("dev" == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()))) {
                // line 12
                echo "    <div class=\"js-hidden-exception-trace hidden\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentThrowedException"]) ? $context["currentThrowedException"] : $this->getContext($context, "currentThrowedException")), "trace", array(), "array"), "html", null, true);
                echo "
    </div>
  ";
            }
        }
        
        $__internal_1e1bc6905218fc332ba3c9679375bdbba0e5ac727212fbd09619f24902ea8ed2->leave($__internal_1e1bc6905218fc332ba3c9679375bdbba0e5ac727212fbd09619f24902ea8ed2_prof);

    }

    public function getTemplateName()
    {
        return "default/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  49 => 12,  47 => 11,  40 => 7,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session.flashBag.has('currentThrowedException')|default() %}
  <div class=\"js-hidden-exception hidden\">
    {% set currentThrowedException = app.session.flashBag.get('currentThrowedException')[0] %}
    {
      \"statusCode\": \"{{ currentThrowedException['statusCode'] }}\",
      \"code\": \"{{ currentThrowedException['code'] }}\",
      \"message\": \"{{ currentThrowedException['message']|trans }}\"
    }
  </div>

  {% if 'dev' == app.environment %}
    <div class=\"js-hidden-exception-trace hidden\">
        {{ currentThrowedException['trace'] }}
    </div>
  {% endif %}
{% endif %}", "default/exception.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\exception.html.twig");
    }
}
