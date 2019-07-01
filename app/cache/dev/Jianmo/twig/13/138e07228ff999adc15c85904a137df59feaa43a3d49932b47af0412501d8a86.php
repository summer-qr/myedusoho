<?php

/* site-hint.html.twig */
class __TwigTemplate_a836fece5981fac003f70e0b98385f55c61bb9bf5dac157256d3b296b6375b5f extends Twig_Template
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
        $__internal_66349b6001f5dddf90a4e2f0584707db66691edc0ed7c78e9b35f80827edff39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66349b6001f5dddf90a4e2f0584707db66691edc0ed7c78e9b35f80827edff39->enter($__internal_66349b6001f5dddf90a4e2f0584707db66691edc0ed7c78e9b35f80827edff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site-hint.html.twig"));

        // line 1
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("layout/announcement", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 2
                echo "  ";
                $this->loadTemplate("announcement/announcement.html.twig", "site-hint.html.twig", 2)->display($context);
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        
        $__internal_66349b6001f5dddf90a4e2f0584707db66691edc0ed7c78e9b35f80827edff39->leave($__internal_66349b6001f5dddf90a4e2f0584707db66691edc0ed7c78e9b35f80827edff39_prof);

    }

    public function getTemplateName()
    {
        return "site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% cache 'layout/announcement' 600 %}
  {% include 'announcement/announcement.html.twig' %}
{% endcache %}", "site-hint.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\site-hint.html.twig");
    }
}
