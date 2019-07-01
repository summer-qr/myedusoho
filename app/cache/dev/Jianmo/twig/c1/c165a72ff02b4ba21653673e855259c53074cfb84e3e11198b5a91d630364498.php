<?php

/* default/script-webpack.html.twig */
class __TwigTemplate_7035ef02a54610498b3f68762b191874936f35a92159e05732fd13ed121e58ec extends Twig_Template
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
        $__internal_bca1df9d48889e9d559f37095f8227ba4abd2e9b5d44c0dd1fd098c5987c5342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca1df9d48889e9d559f37095f8227ba4abd2e9b5d44c0dd1fd098c5987c5342->enter($__internal_bca1df9d48889e9d559f37095f8227ba4abd2e9b5d44c0dd1fd098c5987c5342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/script-webpack.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/base.js", 1 => "app/js/common.js", 2 => "app/js/main.js"), 1000);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("script.webpack.extension");
        echo "

";
        // line 5
        $this->loadTemplate("script/script-custom.html.twig", "default/script-webpack.html.twig", 5)->display($context);
        
        $__internal_bca1df9d48889e9d559f37095f8227ba4abd2e9b5d44c0dd1fd098c5987c5342->leave($__internal_bca1df9d48889e9d559f37095f8227ba4abd2e9b5d44c0dd1fd098c5987c5342_prof);

    }

    public function getTemplateName()
    {
        return "default/script-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do script(['libs/base.js','app/js/common.js','app/js/main.js'], 1000) %}

{{ slot('script.webpack.extension') }}

{% include 'script/script-custom.html.twig' %}", "default/script-webpack.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\script-webpack.html.twig");
    }
}
