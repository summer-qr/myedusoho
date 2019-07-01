<?php

/* org/parts/table-thead-tr.html.twig */
class __TwigTemplate_803286984d04d09f1741bcfb1b5829e9763fe88277287301f2d22ae409fb0182 extends Twig_Template
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
        $__internal_bb8da2f465defa971ed689cd47ec169271019e8e4b60729b7a8a98ec4095fdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8da2f465defa971ed689cd47ec169271019e8e4b60729b7a8a98ec4095fdaf->enter($__internal_bb8da2f465defa971ed689cd47ec169271019e8e4b60729b7a8a98ec4095fdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/parts/table-thead-tr.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "  <th width=\"12%\">
\t";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org.belongs_to_org_th"), "html", null, true);
            echo "
  </th>
";
        }
        
        $__internal_bb8da2f465defa971ed689cd47ec169271019e8e4b60729b7a8a98ec4095fdaf->leave($__internal_bb8da2f465defa971ed689cd47ec169271019e8e4b60729b7a8a98ec4095fdaf_prof);

    }

    public function getTemplateName()
    {
        return "org/parts/table-thead-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  24 => 2,  22 => 1,);
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
  <th width=\"12%\">
\t{{ 'site.org.belongs_to_org_th'|trans }}
  </th>
{% endif %}", "org/parts/table-thead-tr.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\org\\parts\\table-thead-tr.html.twig");
    }
}
