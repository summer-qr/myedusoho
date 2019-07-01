<?php

/* admin/system/report/dir-permission.html.twig */
class __TwigTemplate_bca9f4196e46b52782f83ad220dbe90763c5721fd0ae598372bbbc5e272ba0e7 extends Twig_Template
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
        $__internal_d7ba89acc81da64ad20633e0796824ba4dff4a042abf8bbf5f6a5a87f4ae5e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ba89acc81da64ad20633e0796824ba4dff4a042abf8bbf5f6a5a87f4ae5e4d->enter($__internal_d7ba89acc81da64ad20633e0796824ba4dff4a042abf8bbf5f6a5a87f4ae5e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/report/dir-permission.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errorPaths"]) ? $context["errorPaths"] : $this->getContext($context, "errorPaths")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  <tr>
    <td>";
            // line 3
            echo twig_escape_filter($this->env, $context["path"], "html", null, true);
            echo "</td>
    <td>
      <span class=\"text-danger\">X ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_no_can_write"), "html", null, true);
            echo "</span>
    </td>
    <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_can_write"), "html", null, true);
            echo "</td>
    
  </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "<tr>
  <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_file_and_catalog_authority_available"), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d7ba89acc81da64ad20633e0796824ba4dff4a042abf8bbf5f6a5a87f4ae5e4d->leave($__internal_d7ba89acc81da64ad20633e0796824ba4dff4a042abf8bbf5f6a5a87f4ae5e4d_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/report/dir-permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  49 => 11,  40 => 7,  35 => 5,  30 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for path in errorPaths %}
  <tr>
    <td>{{ path }}</td>
    <td>
      <span class=\"text-danger\">X {{'admin.reports_status.system_no_can_write'|trans}}</span>
    </td>
    <td>{{ 'admin.reports_status.system_can_write'|trans }}</td>
    
  </tr>
{% else %}
<tr>
  <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">{{'admin.reports_status.system_file_and_catalog_authority_available'|trans}}</td>
</tr>
{% endfor %}
", "admin/system/report/dir-permission.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\report\\dir-permission.html.twig");
    }
}
