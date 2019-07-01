<?php

/* admin/block/index.html.twig */
class __TwigTemplate_934ce17d433e351af7bbf494d31d40bbcee3762ee7c1410e90afe2b46562212f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/block/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecd248565c56263e828c53df95cf8e9d42540cd7342a210e451b4115b8769ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd248565c56263e828c53df95cf8e9d42540cd7342a210e451b4115b8769ede->enter($__internal_ecd248565c56263e828c53df95cf8e9d42540cd7342a210e451b4115b8769ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/block/index.html.twig"));

        // line 3
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "admin_block")) : ("admin_block"));
        // line 5
        $context["script_controller"] = "block/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd248565c56263e828c53df95cf8e9d42540cd7342a210e451b4115b8769ede->leave($__internal_ecd248565c56263e828c53df95cf8e9d42540cd7342a210e451b4115b8769ede_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_473ae2881649381af3cb310322f519129e31dca87a2ca6eca6596b3a8f0d4db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473ae2881649381af3cb310322f519129e31dca87a2ca6eca6596b3a8f0d4db0->enter($__internal_473ae2881649381af3cb310322f519129e31dca87a2ca6eca6596b3a8f0d4db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo " ";
        $this->loadTemplate("admin/block/table.html.twig", "admin/block/index.html.twig", 7)->display($context);
        // line 8
        echo "<table id=\"block-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"50%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.title"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.latest_update"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.operation"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 17
        if ((isset($context["blockTemplates"]) ? $context["blockTemplates"] : $this->getContext($context, "blockTemplates"))) {
            // line 18
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTemplates"]) ? $context["blockTemplates"] : $this->getContext($context, "blockTemplates")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["blockTemplate"]) {
                // line 19
                echo "        ";
                $context["latestHistory"] = (($this->getAttribute((isset($context["latestHistories"]) ? $context["latestHistories"] : null), $this->getAttribute($context["blockTemplate"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistories"]) ? $context["latestHistories"] : null), $this->getAttribute($context["blockTemplate"], "id", array()), array(), "array"), null)) : (null));
                // line 20
                echo "        ";
                $context["latestUpdateUser"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), (($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null)), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), (($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null)), array(), "array"), null)) : (null));
                // line 21
                echo "        ";
                $this->loadTemplate("admin/block/list-tr.html.twig", "admin/block/index.html.twig", 21)->display($context);
                // line 22
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockTemplate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  ";
        } else {
            // line 24
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.empty"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        // line 26
        echo "   </tbody>
</table>
 ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo " 
 <style>
.form-control.quicksearch{
  display:inline;
  float:right;
  width:auto;
  padding:4px 12px;
}
<style>

.price{

  color: #e57259;
  font-size: 16px;

}

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}
</style>
";
        
        $__internal_473ae2881649381af3cb310322f519129e31dca87a2ca6eca6596b3a8f0d4db0->leave($__internal_473ae2881649381af3cb310322f519129e31dca87a2ca6eca6596b3a8f0d4db0_prof);

    }

    public function getTemplateName()
    {
        return "admin/block/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 28,  120 => 26,  114 => 24,  111 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  70 => 18,  68 => 17,  61 => 13,  57 => 12,  53 => 11,  48 => 8,  45 => 7,  39 => 6,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = menu|default('admin_block') %}

{% set script_controller = 'block/list' %}
{% block main %}
 {% include 'admin/block/table.html.twig'%}
<table id=\"block-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"50%\">{{'admin.block_manage.title'|trans}}</th>
      <th width=\"25%\">{{'admin.block_manage.latest_update'|trans}}</th>
      <th width=\"25%\">{{'admin.block_manage.operation'|trans}}</th>
    </tr>
  </thead>
  <tbody>
    {% if blockTemplates %}
      {% for blockTemplate in blockTemplates %}
        {% set latestHistory = latestHistories[blockTemplate.id]|default(null) %}
        {% set latestUpdateUser = users[latestHistory.userId|default(null)]|default(null) %}
        {% include 'admin/block/list-tr.html.twig' %}
      {% endfor %}
  {% else %}
        <tr><td colspan=\"20\"><div class=\"empty\">{{'admin.block_manage.empty'|trans}}</div></td></tr>
  {% endif %}
   </tbody>
</table>
 {{ admin_macro.paginator(paginator) }} 
 <style>
.form-control.quicksearch{
  display:inline;
  float:right;
  width:auto;
  padding:4px 12px;
}
<style>

.price{

  color: #e57259;
  font-size: 16px;

}

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}
</style>
{% endblock %}
", "admin/block/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\block\\index.html.twig");
    }
}
