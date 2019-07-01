<?php

/* admin/content/content-tr.html.twig */
class __TwigTemplate_b3a7401fe66dbf2ce6f8850a8f3630d08c64fbb0e6b28af29a57ea17b8e42e68 extends Twig_Template
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
        $__internal_890f9a7d7ef0bd4522c0dc07f38f7dcbd90f2cfcddc20e64746d2aa6411a4ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890f9a7d7ef0bd4522c0dc07f38f7dcbd90f2cfcddc20e64746d2aa6411a4ef8->enter($__internal_890f9a7d7ef0bd4522c0dc07f38f7dcbd90f2cfcddc20e64746d2aa6411a4ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/content/content-tr.html.twig"));

        // line 1
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "admin/content/content-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"content-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()), "html", null, true);
        echo "\">
\t<td>
\t\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((("content_" . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "type", array())) . "_show"), array("alias" => (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title", array()), "html", null, true);
        echo "</a><br />
\t\t";
        // line 5
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "type", array()) == "page")) {
            // line 6
            echo "\t\t  <span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.title_url"), "html", null, true);
            echo "page/";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 8
        echo "\t\t";
        if ((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))) {
            // line 9
            echo "\t\t\t<span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.title_category"), "html", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 11
        echo "\t</td>
\t";
        // line 12
        $context["content_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl((("content_" . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "type", array())) . "_show"), array("alias" => (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array())))));
        // line 13
        echo "\t<td><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["content_uri"]) ? $context["content_uri"] : $this->getContext($context, "content_uri")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["content_uri"]) ? $context["content_uri"] : $this->getContext($context, "content_uri")), "html", null, true);
        echo "</a></td>
\t<td>";
        // line 14
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("contentType", $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "type", array()));
        echo "</td>
\t<td>";
        // line 15
        echo $context["dict_macro"]->getcontentStatus($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()));
        echo "</td>
\t<td>
\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "publishedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "<br />
\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
        echo "
\t</td>
\t<td>
\t\t<div class=\"btn-group\">
\t\t  <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_edit", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.edit_btn"), "html", null, true);
        echo "</a>
\t\t  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    <span class=\"caret\"></span>
\t\t  </a>
\t\t  <ul class=\"dropdown-menu\">
\t\t  \t";
        // line 27
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) != "published")) {
            // line 28
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_publish", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.menu_publish"), "html", null, true);
            echo "</a></li>
\t\t    ";
        }
        // line 30
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) != "trash")) {
            // line 31
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"trash-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_trash", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.menu_trash"), "html", null, true);
            echo "</a></li>
\t\t    ";
        }
        // line 33
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) == "trash")) {
            // line 34
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_delete", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.custom_page_manage.menu_delete"), "html", null, true);
            echo "</a></li>
\t\t\t  ";
        }
        // line 36
        echo "\t\t  </ul>
\t\t</div>
\t</td>
</tr>";
        
        $__internal_890f9a7d7ef0bd4522c0dc07f38f7dcbd90f2cfcddc20e64746d2aa6411a4ef8->leave($__internal_890f9a7d7ef0bd4522c0dc07f38f7dcbd90f2cfcddc20e64746d2aa6411a4ef8_prof);

    }

    public function getTemplateName()
    {
        return "admin/content/content-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  123 => 34,  120 => 33,  112 => 31,  109 => 30,  101 => 28,  99 => 27,  89 => 22,  82 => 18,  78 => 17,  73 => 15,  69 => 14,  62 => 13,  60 => 12,  57 => 11,  49 => 9,  46 => 8,  38 => 6,  36 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"common/data-dict-macro.html.twig\" as dict_macro %}
<tr id=\"content-{{ content.id }}\">
\t<td>
\t\t<a href=\"{{ path('content_' ~ content.type ~ '_show', {alias:content.alias|default(content.id)}) }}\" target=\"_blank\">{{ content.title }}</a><br />
\t\t{% if content.type == 'page' %}
\t\t  <span class=\"text-muted text-sm\">{{'admin.custom_page_manage.title_url'|trans}}page/{{ content.alias|default(content.id) }}</span>
\t\t{% endif %}
\t\t{% if category %}
\t\t\t<span class=\"text-muted text-sm\">{{'admin.custom_page_manage.title_category'|trans}}：{{ category.name }}</span>
\t\t{% endif %}
\t</td>
\t{% set content_uri = url('content_' ~ content.type ~ '_show', {alias:content.alias|default(content.id)}) %}
\t<td><a href=\"{{ content_uri }}\" target=\"_blank\">{{ content_uri }}</a></td>
\t<td>{{ dict_text('contentType', content.type) }}</td>
\t<td>{{ dict_macro.contentStatus(content.status) }}</td>
\t<td>
\t\t{{ content.publishedTime|date('Y-n-d H:i') }}<br />
\t\t{{ user.nickname }}
\t</td>
\t<td>
\t\t<div class=\"btn-group\">
\t\t  <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_content_edit', {id:content.id}) }}\" class=\"btn btn-default btn-sm\">{{'admin.custom_page_manage.edit_btn'|trans}}</a>
\t\t  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    <span class=\"caret\"></span>
\t\t  </a>
\t\t  <ul class=\"dropdown-menu\">
\t\t  \t{% if content.status != 'published' %}
\t\t\t    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"{{ path('admin_content_publish', {id:content.id}) }}\">{{'admin.custom_page_manage.menu_publish'|trans}}</a></li>
\t\t    {% endif  %}
\t\t    {% if content.status != 'trash' %}
\t\t\t    <li><a href=\"javascript:\" data-role=\"trash-item\" data-url=\"{{ path('admin_content_trash', {id:content.id}) }}\">{{'admin.custom_page_manage.menu_trash'|trans}}</a></li>
\t\t    {% endif %}
\t\t    {% if content.status == 'trash' %}
\t\t\t    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"{{ path('admin_content_delete', {id:content.id}) }}\">{{'admin.custom_page_manage.menu_delete'|trans}}</a></li>
\t\t\t  {% endif %}
\t\t  </ul>
\t\t</div>
\t</td>
</tr>", "admin/content/content-tr.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\content\\content-tr.html.twig");
    }
}
