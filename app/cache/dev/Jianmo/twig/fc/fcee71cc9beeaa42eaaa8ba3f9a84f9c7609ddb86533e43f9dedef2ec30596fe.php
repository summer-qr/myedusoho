<?php

/* org/parts/table-body-td.html.twig */
class __TwigTemplate_f2b5d2fcbe41e75abe458f820d46e324f227399c50fa468f7799f34e10218352 extends Twig_Template
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
        $__internal_a1cb515f34cd89d86e7a9f44cbedb335cbcfc35efe4222f550bccf367a177296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cb515f34cd89d86e7a9f44cbedb335cbcfc35efe4222f550bccf367a177296->enter($__internal_a1cb515f34cd89d86e7a9f44cbedb335cbcfc35efe4222f550bccf367a177296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/parts/table-body-td.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t<td>
\t    ";
            // line 3
            $context["org"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Org", array("orgCode" => (isset($context["orgCode"]) ? $context["orgCode"] : $this->getContext($context, "orgCode"))));
            // line 4
            echo "\t    ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "name", array()), "--")) : ("--")), "html", null, true);
            echo "
\t    <br>
\t    <span class=\"color-gray text-sm\">";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org.code"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : $this->getContext($context, "org")), "code", array()), "html", null, true);
            echo "</span>
\t</td>
";
        }
        
        $__internal_a1cb515f34cd89d86e7a9f44cbedb335cbcfc35efe4222f550bccf367a177296->leave($__internal_a1cb515f34cd89d86e7a9f44cbedb335cbcfc35efe4222f550bccf367a177296_prof);

    }

    public function getTemplateName()
    {
        return "org/parts/table-body-td.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
\t<td>
\t    {% set org = data('Org',{orgCode: orgCode}) %}
\t    {{ org.name|default('--')}}
\t    <br>
\t    <span class=\"color-gray text-sm\">{{ 'site.org.code'|trans }} {{ org.code }}</span>
\t</td>
{% endif %}", "org/parts/table-body-td.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\org\\parts\\table-body-td.html.twig");
    }
}
