<?php

/* admin/theme/index.html.twig */
class __TwigTemplate_192d55177352820faf34affab31d3432f088842d943fa1250f68d898cb7c78e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/theme/index.html.twig", 1);
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
        $__internal_75efd6c2b810a8911a10135b941e499588d69917d69f909005f73c9dae2b94f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75efd6c2b810a8911a10135b941e499588d69917d69f909005f73c9dae2b94f4->enter($__internal_75efd6c2b810a8911a10135b941e499588d69917d69f909005f73c9dae2b94f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/theme/index.html.twig"));

        // line 3
        $context["script_controller"] = "setting/theme";
        // line 5
        $context["menu"] = "admin_setting_theme";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75efd6c2b810a8911a10135b941e499588d69917d69f909005f73c9dae2b94f4->leave($__internal_75efd6c2b810a8911a10135b941e499588d69917d69f909005f73c9dae2b94f4_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_073bba71e3f8a11675cdc7502cd5c0aa639f75de9d56b96de1fab4beb36752c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073bba71e3f8a11675cdc7502cd5c0aa639f75de9d56b96de1fab4beb36752c6->enter($__internal_073bba71e3f8a11675cdc7502cd5c0aa639f75de9d56b96de1fab4beb36752c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  <table class=\"table table-striped table-hover\" id=\"theme-table\">
    <thead>
    <tr>
      <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.name"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.version"), "html", null, true);
        echo "</th>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.author"), "html", null, true);
        echo "</th>
      <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.operation"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : $this->getContext($context, "themes")));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 20
            echo "        <tr>
          <td>

            <div class=\"media\">
              <img class=\"media-object pull-left\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("themes/" . $this->getAttribute($context["theme"], "uri", array())) . "/") . $this->getAttribute($context["theme"], "thumb", array()))), "html", null, true);
            echo "\" width=\"150\">
              <div class=\"media-body\">
                <h5 class=\"media-heading\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</h5>
                ";
            // line 27
            echo (($this->getAttribute($context["theme"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "description", array()), "")) : (""));
            echo "
                ";
            // line 28
            if ((($this->getAttribute($context["theme"], "setting", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "setting", array()), null)) : (null))) {
                // line 29
                echo "                  <a href=\"../";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "setting", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.setting_btn"), "html", null, true);
                echo "</a>
                ";
            }
            // line 31
            echo "              </div>
            </div>
          </td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "author", array()), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 37
            if (($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "uri", array()) == $this->getAttribute($context["theme"], "uri", array()))) {
                // line 38
                echo "              <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.current_theme"), "html", null, true);
                echo "</span>
\t            ";
                // line 39
                if ((($this->getAttribute($context["theme"], "support_config", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "support_config", array()), false)) : (false))) {
                    // line 40
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_manage", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                    echo "\"class=\"btn btn-primary\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage_btn"), "html", null, true);
                    echo "</a>
\t            ";
                }
                // line 42
                echo "            ";
            } else {
                // line 43
                echo "              <button class=\"btn btn-default btn-sm use-theme-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_theme_change", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.use_btn"), "html", null, true);
                echo "</button>
            ";
            }
            // line 45
            echo "            
           
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>
  </table>


";
        
        $__internal_073bba71e3f8a11675cdc7502cd5c0aa639f75de9d56b96de1fab4beb36752c6->leave($__internal_073bba71e3f8a11675cdc7502cd5c0aa639f75de9d56b96de1fab4beb36752c6_prof);

    }

    public function getTemplateName()
    {
        return "admin/theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 50,  145 => 45,  137 => 43,  134 => 42,  126 => 40,  124 => 39,  119 => 38,  117 => 37,  112 => 35,  108 => 34,  103 => 31,  95 => 29,  93 => 28,  89 => 27,  85 => 26,  80 => 24,  74 => 20,  70 => 19,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set script_controller = 'setting/theme' %}

{% set menu = 'admin_setting_theme' %}

{% block main %}

  <table class=\"table table-striped table-hover\" id=\"theme-table\">
    <thead>
    <tr>
      <th>{{'admin.setting.theme.name'|trans}}</th>
      <th width=\"10%\">{{'admin.setting.theme.version'|trans}}</th>
      <th>{{'admin.setting.theme.author'|trans}}</th>
      <th>{{'admin.setting.theme.operation'|trans}}</th>
    </tr>
    </thead>
    <tbody>
      {% for theme in themes %}
        <tr>
          <td>

            <div class=\"media\">
              <img class=\"media-object pull-left\" src=\"{{ asset('themes/' ~ theme.uri ~ '/' ~ theme.thumb) }}\" width=\"150\">
              <div class=\"media-body\">
                <h5 class=\"media-heading\">{{ theme.name }}</h5>
                {{ theme.description|default('')|raw }}
                {% if theme.setting|default(null) %}
                  <a href=\"../{{ theme.setting }}\">{{'admin.setting.theme.setting_btn'|trans}}</a>
                {% endif %}
              </div>
            </div>
          </td>
          <td>{{ theme.version }}</td>
          <td>{{ theme.author }}</td>
          <td>
            {% if currentTheme.uri == theme.uri %}
              <span class=\"text-success\">{{'admin.setting.theme.current_theme'|trans}}</span>
\t            {% if theme.support_config|default(false) %}
                <a href=\"{{ path('admin_theme_manage', {uri:theme.uri}) }}\"class=\"btn btn-primary\" >{{'admin.setting.theme.manage_btn'|trans}}</a>
\t            {% endif %}
            {% else %}
              <button class=\"btn btn-default btn-sm use-theme-btn\" data-url=\"{{ path('admin_setting_theme_change', {uri:theme.uri}) }}\">{{'admin.setting.theme.use_btn'|trans}}</button>
            {% endif %}
            
           
          </td>
        </tr>
      {% endfor %}
    </tbody>
  </table>


{% endblock %}", "admin/theme/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\theme\\index.html.twig");
    }
}
