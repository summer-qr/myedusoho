<?php

/* admin/block/table.html.twig */
class __TwigTemplate_7d2b99fe7656debdea571c13516ed512ccfbbf2e56f7b9f4c3bf381604e5e2fe extends Twig_Template
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
        $__internal_010e2e61aefebbf82e7f4cd9a583bd4545a04424b8485bca36684ff1fce96175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010e2e61aefebbf82e7f4cd9a583bd4545a04424b8485bca36684ff1fce96175->enter($__internal_010e2e61aefebbf82e7f4cd9a583bd4545a04424b8485bca36684ff1fce96175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/block/table.html.twig"));

        // line 1
        echo "<div class=\"btn-group\">
<a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_block", array("category" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            echo " btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.all"), "html", null, true);
        echo "</a>

<a href=\" ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_block", array("category" => "theme"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "theme")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.current_theme"), "html", null, true);
        echo "</a>

<a href=\" ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_block", array("category" => "system"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "system")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.system"), "html", null, true);
        echo "</a>

";
        // line 8
        $context["url"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_match") . "?q={{query}}");
        // line 9
        echo "</div>
<input class=\"form-control quicksearch\" id=\"block-input\"  data-role=\"item-input\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.search_block_placeholder"), "html", null, true);
        echo "\" data-url='";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "'>
";
        
        $__internal_010e2e61aefebbf82e7f4cd9a583bd4545a04424b8485bca36684ff1fce96175->leave($__internal_010e2e61aefebbf82e7f4cd9a583bd4545a04424b8485bca36684ff1fce96175_prof);

    }

    public function getTemplateName()
    {
        return "admin/block/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  60 => 9,  58 => 8,  47 => 6,  36 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"btn-group\">
<a href=\"{{ url('admin_block', {category: 'all'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'all'%} btn-primary{% endif %}\">{{'admin.block_manage.all'|trans}}</a>

<a href=\" {{ url('admin_block', {category: 'theme'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'theme'%}btn-primary{% endif %}\">{{'admin.block_manage.current_theme'|trans}}</a>

<a href=\" {{ url('admin_block', {category: 'system'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'system'%}btn-primary{% endif %}\">{{'admin.block_manage.system'|trans}}</a>

{% set url = path('admin_block_match') ~ '?q={{query}}' %}
</div>
<input class=\"form-control quicksearch\" id=\"block-input\"  data-role=\"item-input\" placeholder=\"{{'admin.block_manage.search_block_placeholder'|trans}}\" data-url='{{url}}'>
", "admin/block/table.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\block\\table.html.twig");
    }
}
