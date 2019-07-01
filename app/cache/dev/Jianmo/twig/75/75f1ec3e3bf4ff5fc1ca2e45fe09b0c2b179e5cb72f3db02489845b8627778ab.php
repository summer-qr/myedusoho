<?php

/* org/parts/table-body-checkbox.html.twig */
class __TwigTemplate_610324c634ea7db82faa1a09d12e1d420e348525725b170e33976074f47236da extends Twig_Template
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
        $__internal_b5c499e5cd6bfed7b3e1a5ad2957560d94c198ff48f643b8210915bf0df1fa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c499e5cd6bfed7b3e1a5ad2957560d94c198ff48f643b8210915bf0df1fa01->enter($__internal_b5c499e5cd6bfed7b3e1a5ad2957560d94c198ff48f643b8210915bf0df1fa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/parts/table-body-checkbox.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
";
        }
        
        $__internal_b5c499e5cd6bfed7b3e1a5ad2957560d94c198ff48f643b8210915bf0df1fa01->leave($__internal_b5c499e5cd6bfed7b3e1a5ad2957560d94c198ff48f643b8210915bf0df1fa01_prof);

    }

    public function getTemplateName()
    {
        return "org/parts/table-body-checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting('magic.enable_org','0') %}
\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
{% endif %}
", "org/parts/table-body-checkbox.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\org\\parts\\table-body-checkbox.html.twig");
    }
}
