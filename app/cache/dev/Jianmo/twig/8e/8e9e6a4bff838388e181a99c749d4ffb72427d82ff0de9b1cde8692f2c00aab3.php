<?php

/* admin/content/index.html.twig */
class __TwigTemplate_4c198d02094c85423c5fb3f9defe120a83444c34152998227b2bd46f5a820d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/content/index.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66cd08f5c145557f7135973ccf2eb8f80ced84dc08d730f542e94735f4ab1636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cd08f5c145557f7135973ccf2eb8f80ced84dc08d730f542e94735f4ab1636->enter($__internal_66cd08f5c145557f7135973ccf2eb8f80ced84dc08d730f542e94735f4ab1636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/content/index.html.twig"));

        // line 3
        $context["script_controller"] = "content/list";
        // line 5
        $context["menu"] = "admin_content";
        // line 6
        $context["type"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "type"), "method");
        // line 7
        $context["typeName"] = $this->getAttribute($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("contentType"), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66cd08f5c145557f7135973ccf2eb8f80ced84dc08d730f542e94735f4ab1636->leave($__internal_66cd08f5c145557f7135973ccf2eb8f80ced84dc08d730f542e94735f4ab1636_prof);

    }

    // line 9
    public function block_page_buttons($context, array $blocks = array())
    {
        $__internal_e7730ef49d278f91c3655f410c4bef0191384e57d1ff885c923fac5d0f21ea8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7730ef49d278f91c3655f410c4bef0191384e57d1ff885c923fac5d0f21ea8c->enter($__internal_e7730ef49d278f91c3655f410c4bef0191384e57d1ff885c923fac5d0f21ea8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_buttons"));

        echo "  \t
\t<button class=\"btn btn-success btn-sm pull-right\" id=\"content-add-btn\" type=\"button\" data-target=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_create", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.top_button"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["typeName"]) ? $context["typeName"] : $this->getContext($context, "typeName")), "html", null, true);
        echo "</button>
";
        
        $__internal_e7730ef49d278f91c3655f410c4bef0191384e57d1ff885c923fac5d0f21ea8c->leave($__internal_e7730ef49d278f91c3655f410c4bef0191384e57d1ff885c923fac5d0f21ea8c_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_c5e978a29c0d531d0c370a01fa50c87cdbe696473b8984e492569b3f69af99d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e978a29c0d531d0c370a01fa50c87cdbe696473b8984e492569b3f69af99d7->enter($__internal_c5e978a29c0d531d0c370a01fa50c87cdbe696473b8984e492569b3f69af99d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "
<form class=\"well well-sm form-inline\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  ";
        // line 18
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("contentStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.all_status_placeholder"));
        echo "
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.keyword_placeholder"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
\t</div>
\t\t<input type=\"hidden\" name=\"type\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\">
\t<button class=\"btn btn-primary\" type=\"submit\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>

</form>

<table class=\"table table-hover\" id=\"content-table\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"30%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.table_title"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.table_page_url"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.table_type"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.table_status"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.table_publish_time_or_user"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.table_operation"), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 41
        if ((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents"))) {
            // line 42
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 43
                echo "\t\t\t  ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["content"], "userId", array()), array(), "array");
                // line 44
                echo "\t\t\t  ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 45
                echo "\t\t\t  ";
                $this->loadTemplate("admin/content/content-tr.html.twig", "admin/content/index.html.twig", 45)->display($context);
                // line 46
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t";
        } else {
            // line 48
            echo "\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.empty"), "html", null, true);
            echo "</div></td></tr>
\t\t";
        }
        // line 50
        echo "\t</tbody>
</table>

";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_c5e978a29c0d531d0c370a01fa50c87cdbe696473b8984e492569b3f69af99d7->leave($__internal_c5e978a29c0d531d0c370a01fa50c87cdbe696473b8984e492569b3f69af99d7_prof);

    }

    public function getTemplateName()
    {
        return "admin/content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 53,  183 => 50,  177 => 48,  174 => 47,  160 => 46,  157 => 45,  154 => 44,  151 => 43,  133 => 42,  131 => 41,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  94 => 25,  90 => 24,  83 => 22,  76 => 18,  70 => 14,  64 => 13,  52 => 10,  44 => 9,  37 => 1,  35 => 7,  33 => 6,  31 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% set script_controller = 'content/list' %}

{% set menu = 'admin_content' %}
{% set type = app.request.get('type') %}
{% set typeName = dict('contentType')[type] %}

{% block page_buttons %}  \t
\t<button class=\"btn btn-success btn-sm pull-right\" id=\"content-add-btn\" type=\"button\" data-target=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_content_create', {type: type}) }}\"> {{'admin.custom_page_manage.top_button'|trans}}{{ typeName }}</button>
{% endblock %}

{% block main %}

<form class=\"well well-sm form-inline\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  {{ select_options(dict('contentStatus'), app.request.query.get('status'), 'admin.custom_page_manage.all_status_placeholder'|trans) }}
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"{{'admin.custom_page_manage.keyword_placeholder'|trans}}\" value=\"{{ app.request.query.get('keywords') }}\">
\t</div>
\t\t<input type=\"hidden\" name=\"type\" value=\"{{ type }}\">
\t<button class=\"btn btn-primary\" type=\"submit\">{{'form.btn.search'|trans}}</button>

</form>

<table class=\"table table-hover\" id=\"content-table\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"30%\">{{'admin.custom_page_manage.table_title'|trans}}</th>
\t\t\t<th>{{'admin.custom_page_manage.table_page_url'|trans}}</th>
\t\t\t<th>{{'admin.custom_page_manage.table_type'|trans}}</th>
\t\t\t<th>{{'admin.custom_page_manage.table_status'|trans}}</th>
\t\t\t<th>{{'admin.custom_page_manage.table_publish_time_or_user'|trans}}</th>
\t\t\t<th>{{'admin.custom_page_manage.table_operation'|trans}}</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% if contents %}
\t\t\t{% for content in contents %}
\t\t\t  {% set user = users[content.userId] %}
\t\t\t  {% set category = categories[content.categoryId]|default(null) %}
\t\t\t  {% include 'admin/content/content-tr.html.twig' %}
\t\t\t{% endfor %}
\t\t{% else %}
\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">{{'admin.custom_page_manage.empty'|trans}}</div></td></tr>
\t\t{% endif %}
\t</tbody>
</table>

{{ admin_macro.paginator(paginator) }}

{% endblock %}", "admin/content/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\content\\index.html.twig");
    }
}
