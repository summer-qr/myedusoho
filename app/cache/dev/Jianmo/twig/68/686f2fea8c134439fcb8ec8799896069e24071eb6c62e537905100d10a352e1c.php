<?php

/* script/translation.html.twig */
class __TwigTemplate_75adbb6a8eb0f4fdae63d8d92ac695790b0d7686645ffeca240df215fd3da219 extends Twig_Template
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
        $__internal_e292f00a229c8079ae0a5ce803fb8df95ade51f1134243cbbff2ea8e6f838766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e292f00a229c8079ae0a5ce803fb8df95ade51f1134243cbbff2ea8e6f838766->enter($__internal_e292f00a229c8079ae0a5ce803fb8df95ade51f1134243cbbff2ea8e6f838766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "script/translation.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/translations/translator.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 3
        $context["locales"] = (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "get", array(0 => "_locale", 1 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())), "method")) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())));
        // line 4
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            // line 5
            echo "  <script src=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jstranslation_js", array("domain" => "js"));
            echo "?locales=";
            echo twig_escape_filter($this->env, (isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 7
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/translations/" . (isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales"))) . ".js")), "html", null, true);
            echo "\"></script>
";
        }
        
        $__internal_e292f00a229c8079ae0a5ce803fb8df95ade51f1134243cbbff2ea8e6f838766->leave($__internal_e292f00a229c8079ae0a5ce803fb8df95ade51f1134243cbbff2ea8e6f838766_prof);

    }

    public function getTemplateName()
    {
        return "script/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  32 => 5,  30 => 4,  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ asset('bundles/translations/translator.min.js') }}\"></script>

{% set locales = app.request.session ? app.request.session.get('_locale',app.request.locale) : app.request.locale %}
{% if app.debug %}
  <script src=\"{{ path('jstranslation_js', {'domain': 'js'}) }}?locales={{ locales }}\"></script>
{% else %}
  <script src=\"{{ asset('bundles/translations/' ~ locales ~ '.js') }}\"></script>
{% endif %}", "script/translation.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\script\\translation.html.twig");
    }
}
