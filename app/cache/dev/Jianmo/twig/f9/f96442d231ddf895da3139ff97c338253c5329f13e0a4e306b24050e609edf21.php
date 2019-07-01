<?php

/* expression.twig */
class __TwigTemplate_912db57a44c6a28f6d4e8be36c6c1c024a9ef083b6ffacc8252fdbd4c0c07454 extends Twig_Template
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
        $__internal_bba97a4d1d503145c4a26284e2ad76b332956fcc87baa002f3669a4c3ac16632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba97a4d1d503145c4a26284e2ad76b332956fcc87baa002f3669a4c3ac16632->enter($__internal_bba97a4d1d503145c4a26284e2ad76b332956fcc87baa002f3669a4c3ac16632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "parentId", array()) == 0) && ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "type", array()) != "live")), "html", null, true);
        
        $__internal_bba97a4d1d503145c4a26284e2ad76b332956fcc87baa002f3669a4c3ac16632->leave($__internal_bba97a4d1d503145c4a26284e2ad76b332956fcc87baa002f3669a4c3ac16632_prof);

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
        return new Twig_Source("{{courseSet.parentId == 0 and courseSet.type != 'live'}}", "expression.twig", "");
    }
}
