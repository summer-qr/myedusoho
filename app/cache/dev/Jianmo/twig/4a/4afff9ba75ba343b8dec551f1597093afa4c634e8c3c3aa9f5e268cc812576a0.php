<?php

/* admin/default/script-webpack.html.twig */
class __TwigTemplate_9230b0bbc817142cf799b456f385e48b09bfd68de12b878c12dfe30ac404e52a extends Twig_Template
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
        $__internal_092f23da1e6ec40262c12efa23fa3b0e05a802fcde2cd358ee455e6f3876bc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092f23da1e6ec40262c12efa23fa3b0e05a802fcde2cd358ee455e6f3876bc97->enter($__internal_092f23da1e6ec40262c12efa23fa3b0e05a802fcde2cd358ee455e6f3876bc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/script-webpack.html.twig"));

        // line 1
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("script.webpack.extension");
        echo "
";
        
        $__internal_092f23da1e6ec40262c12efa23fa3b0e05a802fcde2cd358ee455e6f3876bc97->leave($__internal_092f23da1e6ec40262c12efa23fa3b0e05a802fcde2cd358ee455e6f3876bc97_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/script-webpack.html.twig";
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
        return new Twig_Source("{{ slot('script.webpack.extension') }}
", "admin/default/script-webpack.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\default\\script-webpack.html.twig");
    }
}
