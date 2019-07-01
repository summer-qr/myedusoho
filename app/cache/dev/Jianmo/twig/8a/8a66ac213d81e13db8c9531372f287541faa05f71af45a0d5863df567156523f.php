<?php

/* admin/block/list-tr.html.twig */
class __TwigTemplate_fbdd681bff092477eb081d057bb408ae44a2ae7f14b09c5facf5e76c839649ff extends Twig_Template
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
        $__internal_c7fcee35d873f47fb1179e8ea12538444520742b3f1c21241091a9e41efc1e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fcee35d873f47fb1179e8ea12538444520742b3f1c21241091a9e41efc1e22->enter($__internal_c7fcee35d873f47fb1179e8ea12538444520742b3f1c21241091a9e41efc1e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/block/list-tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/block/list-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"blockitem";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()), "html", null, true);
        echo "\">
    <td>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "title", array()), "html", null, true);
        echo "
        <br>
        <span class=\"text-muted text-sm\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.code", array("%code%" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "code", array()))), "html", null, true);
        echo "</span>
    </td>
    <td>
        ";
        // line 9
        if ((($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null))) {
            // line 10
            echo "        ";
            echo $context["admin_macro"]->getuser_link(((array_key_exists("latestUpdateUser", $context)) ? (_twig_default_filter((isset($context["latestUpdateUser"]) ? $context["latestUpdateUser"] : $this->getContext($context, "latestUpdateUser")), null)) : (null)));
            echo "
        ";
        } else {
            // line 12
            echo "        <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.no_edit"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "        <br>
        ";
        // line 15
        if ((($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "createdTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "createdTime", array()), null)) : (null))) {
            // line 16
            echo "        <span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : $this->getContext($context, "latestHistory")), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
        ";
        }
        // line 18
        echo "    </td>
    <td>
        ";
        // line 20
        if (($this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "mode", array()) == "html")) {
            // line 21
            echo "            <button class=\"btn btn-sm btn-primary update-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_update", array("blockTemplateId" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.edit_html"), "html", null, true);
            echo "</button>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if (($this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "mode", array()) == "template")) {
            // line 25
            echo "            <a class=\"btn btn-sm btn-primary update-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_visual_edit", array("blockTemplateId" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.edit_content"), "html", null, true);
            echo "</a>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.debug")) {
            // line 29
            echo "        
        <button class=\"btn btn-sm btn-default edit-btn hidden\" data-url=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_edit", array("blockTemplateId" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.set_up"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_delete", array("id" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.delete"), "html", null, true);
            echo "</button>
        ";
        }
        // line 33
        echo "    </td>
</tr>";
        
        $__internal_c7fcee35d873f47fb1179e8ea12538444520742b3f1c21241091a9e41efc1e22->leave($__internal_c7fcee35d873f47fb1179e8ea12538444520742b3f1c21241091a9e41efc1e22_prof);

    }

    public function getTemplateName()
    {
        return "admin/block/list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  107 => 31,  101 => 30,  98 => 29,  96 => 28,  93 => 27,  85 => 25,  83 => 24,  80 => 23,  72 => 21,  70 => 20,  66 => 18,  60 => 16,  58 => 15,  55 => 14,  49 => 12,  43 => 10,  41 => 9,  35 => 6,  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"admin/macro.html.twig\" as admin_macro %}
<tr id=\"blockitem{{ blockTemplate.id }}\">
    <td>
        {{ blockTemplate.title }}
        <br>
        <span class=\"text-muted text-sm\">{{'admin.block_manage.code'|trans({'%code%': blockTemplate.code})}}</span>
    </td>
    <td>
        {% if latestHistory.userId|default(null) %}
        {{ admin_macro.user_link(latestUpdateUser|default(null)) }}
        {% else %}
        <span class=\"text-muted\">{{'admin.block_manage.no_edit'|trans}}</span>
        {% endif %}
        <br>
        {% if latestHistory.createdTime|default(null) %}
        <span class=\"text-muted text-sm\">{{ latestHistory.createdTime|date('Y-n-d H:i:s') }}</span>
        {% endif %}
    </td>
    <td>
        {% if blockTemplate.mode == 'html' %}
            <button class=\"btn btn-sm btn-primary update-btn\" data-url=\"{{ path('admin_block_update', {blockTemplateId:blockTemplate.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\">{{'admin.block_manage.edit_html'|trans}}</button>
        {% endif %}

        {% if blockTemplate.mode == 'template' %}
            <a class=\"btn btn-sm btn-primary update-btn\" href=\"{{ path('admin_block_visual_edit', {blockTemplateId:blockTemplate.id}) }}\">{{'admin.block_manage.edit_content'|trans}}</a>
        {% endif %}

        {% if setting('developer.debug') %}
        
        <button class=\"btn btn-sm btn-default edit-btn hidden\" data-url=\"{{ path('admin_block_edit', {blockTemplateId:blockTemplate.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\" >{{'admin.block_manage.set_up'|trans}}</button>
        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"{{ path('admin_block_delete', {id:blockTemplate.id}) }}\" data-target=\"{{ blockTemplate.id }}\">{{'admin.block_manage.delete'|trans}}</button>
        {% endif %}
    </td>
</tr>", "admin/block/list-tr.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\block\\list-tr.html.twig");
    }
}
