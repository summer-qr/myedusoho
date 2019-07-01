<?php

/* admin/widget/tooltip-widget.html.twig */
class __TwigTemplate_84e23b6b8d2c199a2743abe86fed166167cf42463c6d61429d01c309d9936f85 extends Twig_Template
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
        $__internal_5e5043e076d2b52a64d0edbdd69eaff12407fadc194b2b21499991b63883ad15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5043e076d2b52a64d0edbdd69eaff12407fadc194b2b21499991b63883ad15->enter($__internal_5e5043e076d2b52a64d0edbdd69eaff12407fadc194b2b21499991b63883ad15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/widget/tooltip-widget.html.twig"));

        // line 1
        echo "<div class=\"js-tooltip-twig-widget pull-right mll mts\">
  <span class=\"glyphicon ";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "glyphicon-question-sign")) : ("glyphicon-question-sign")), "html", null, true);
        echo " text-muted js-twig-widget-tips\" data-placement=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("placement", $context)) ? (_twig_default_filter((isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement")), "bottom")) : ("bottom")), "html", null, true);
        echo "\" href=\"javascript:;\">
  </span>
  <div class=\"js-twig-widget-html\" style=\"display:none;\">
    ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
  </div>
</div>

";
        // line 9
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("widget/tooltip-widget");
        
        $__internal_5e5043e076d2b52a64d0edbdd69eaff12407fadc194b2b21499991b63883ad15->leave($__internal_5e5043e076d2b52a64d0edbdd69eaff12407fadc194b2b21499991b63883ad15_prof);

    }

    public function getTemplateName()
    {
        return "admin/widget/tooltip-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"js-tooltip-twig-widget pull-right mll mts\">
  <span class=\"glyphicon {{ icon|default('glyphicon-question-sign') }} text-muted js-twig-widget-tips\" data-placement=\"{{ placement|default('bottom') }}\" href=\"javascript:;\">
  </span>
  <div class=\"js-twig-widget-html\" style=\"display:none;\">
    {{ content|raw }}
  </div>
</div>

{% do load_script('widget/tooltip-widget') %}
", "admin/widget/tooltip-widget.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\widget\\tooltip-widget.html.twig");
    }
}
