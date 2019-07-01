<?php

/* default/middle-banner.html.twig */
class __TwigTemplate_eeebc45ef4601cdede540d932cefa4830aa7aeee96a1eefe2720fe4cd0788078 extends Twig_Template
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
        $__internal_59e6b8feaa104a94680f0e3b47303df6ef1c5d8bbc476599a7c5b6b75f6df90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e6b8feaa104a94680f0e3b47303df6ef1c5d8bbc476599a7c5b6b75f6df90a->enter($__internal_59e6b8feaa104a94680f0e3b47303df6ef1c5d8bbc476599a7c5b6b75f6df90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/middle-banner.html.twig"));

        // line 1
        echo "  <!-- 特性 --> 
  ";
        // line 2
        echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:middle_banner");
        
        $__internal_59e6b8feaa104a94680f0e3b47303df6ef1c5d8bbc476599a7c5b6b75f6df90a->leave($__internal_59e6b8feaa104a94680f0e3b47303df6ef1c5d8bbc476599a7c5b6b75f6df90a_prof);

    }

    public function getTemplateName()
    {
        return "default/middle-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <!-- 特性 --> 
  {{ block_show('jianmo:middle_banner') }}", "default/middle-banner.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\middle-banner.html.twig");
    }
}
