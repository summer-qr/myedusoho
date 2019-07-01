<?php

/* my/user/avatar-alert.html.twig */
class __TwigTemplate_355b28512402c4937d38711e9659d81c6a72ae78c2e1494ee99dc6e13db7436d extends Twig_Template
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
        $__internal_0af43eee30c5cb8533476019c82d38a688a926551a3f78dcc5c86f1ba9ef1451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af43eee30c5cb8533476019c82d38a688a926551a3f78dcc5c86f1ba9ef1451->enter($__internal_0af43eee30c5cb8533476019c82d38a688a926551a3f78dcc5c86f1ba9ef1451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/user/avatar-alert.html.twig"));

        // line 1
        if ((isset($context["avatarAlert"]) ? $context["avatarAlert"] : $this->getContext($context, "avatarAlert"))) {
            // line 2
            echo "  <div class=\"alert cd-alert cd-alert-warning cd-alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"><i class=\"cd-icon cd-icon-close\"></i></button>
    ";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.avatar", array("%setAvatar%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings")));
            echo "
  </div>
";
        }
        
        $__internal_0af43eee30c5cb8533476019c82d38a688a926551a3f78dcc5c86f1ba9ef1451->leave($__internal_0af43eee30c5cb8533476019c82d38a688a926551a3f78dcc5c86f1ba9ef1451_prof);

    }

    public function getTemplateName()
    {
        return "my/user/avatar-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if avatarAlert %}
  <div class=\"alert cd-alert cd-alert-warning cd-alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"><i class=\"cd-icon cd-icon-close\"></i></button>
    {{'user.settings.avatar'|trans({'%setAvatar%': path('settings')})|raw}}
  </div>
{% endif %}", "my/user/avatar-alert.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\user\\avatar-alert.html.twig");
    }
}
