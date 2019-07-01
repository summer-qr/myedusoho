<?php

/* script/script-custom.html.twig */
class __TwigTemplate_7bef30708fc491a53b13aec3da97303645c3a53680bebefce477684809e8265d extends Twig_Template
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
        $__internal_4ccc05fbca6e077dd1130a89fde61ff25340e69cf221f5cf412ade5debffb60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccc05fbca6e077dd1130a89fde61ff25340e69cf221f5cf412ade5debffb60c->enter($__internal_4ccc05fbca6e077dd1130a89fde61ff25340e69cf221f5cf412ade5debffb60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "script/script-custom.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "jianmotheme/js/main.js"), 999);
        
        $__internal_4ccc05fbca6e077dd1130a89fde61ff25340e69cf221f5cf412ade5debffb60c->leave($__internal_4ccc05fbca6e077dd1130a89fde61ff25340e69cf221f5cf412ade5debffb60c_prof);

    }

    public function getTemplateName()
    {
        return "script/script-custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do script(['jianmotheme/js/main.js'], 999) %}", "script/script-custom.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho/web/themes/jianmo/views/script/script-custom.html.twig");
    }
}
