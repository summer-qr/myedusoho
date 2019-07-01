<?php

/* expression.twig */
class __TwigTemplate_7ee9aa46d8c27bd9217c121d3c72de946fa3d23d1439ea5472d970fba51920c4 extends Twig_Template
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
        $__internal_6da25a129b79c8e66b6c2b66ba63d9ee70f1138db6dd41bd46c105fcab769e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da25a129b79c8e66b6c2b66ba63d9ee70f1138db6dd41bd46c105fcab769e71->enter($__internal_6da25a129b79c8e66b6c2b66ba63d9ee70f1138db6dd41bd46c105fcab769e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) == "published"), "html", null, true);
        
        $__internal_6da25a129b79c8e66b6c2b66ba63d9ee70f1138db6dd41bd46c105fcab769e71->leave($__internal_6da25a129b79c8e66b6c2b66ba63d9ee70f1138db6dd41bd46c105fcab769e71_prof);

    }

    public function getTemplateName()
    {
        return "expression.twig";
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
        return new Twig_Source("{{courseSet.status == 'published'}}", "expression.twig", "");
    }
}
