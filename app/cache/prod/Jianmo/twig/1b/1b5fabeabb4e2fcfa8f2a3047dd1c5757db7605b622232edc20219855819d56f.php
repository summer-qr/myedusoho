<?php

/* default/middle-banner.html.twig */
class __TwigTemplate_48ffa9240a2bfb8f035079900dfc3eb4c3b4a46c15b85c75dbbca99a1e04f72d extends Twig_Template
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
        // line 1
        echo "  <!-- 特性 --> 
  ";
        // line 2
        echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:middle_banner");
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
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/middle-banner.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\middle-banner.html.twig");
    }
}
