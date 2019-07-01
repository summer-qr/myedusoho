<?php

/* default/message.html.twig */
class __TwigTemplate_1777c9b3c2cd366936e7496135e06ac709d1b0f36af08f4981d20e5611097a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/message.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d2038ddef38e8973eb664b8392b4440645d5ffeca3e62e4bc0f680e4cfa226d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2038ddef38e8973eb664b8392b4440645d5ffeca3e62e4bc0f680e4cfa226d->enter($__internal_9d2038ddef38e8973eb664b8392b4440645d5ffeca3e62e4bc0f680e4cfa226d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/message.html.twig"));

        // line 2
        $context["typeTitles"] = array("info" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.message.info"), "warning" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.message.warning"), "error" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.message.error"));
        // line 3
        $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), $this->getAttribute((isset($context["typeTitles"]) ? $context["typeTitles"] : $this->getContext($context, "typeTitles")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"))) : ($this->getAttribute((isset($context["typeTitles"]) ? $context["typeTitles"] : $this->getContext($context, "typeTitles")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array")));
        // line 6
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/default/message/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2038ddef38e8973eb664b8392b4440645d5ffeca3e62e4bc0f680e4cfa226d->leave($__internal_9d2038ddef38e8973eb664b8392b4440645d5ffeca3e62e4bc0f680e4cfa226d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f82fe16c0fb46229a03c26645577d789d984542cf152334265fdf20cf48ecc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f82fe16c0fb46229a03c26645577d789d984542cf152334265fdf20cf48ecc3->enter($__internal_2f82fe16c0fb46229a03c26645577d789d984542cf152334265fdf20cf48ecc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_2f82fe16c0fb46229a03c26645577d789d984542cf152334265fdf20cf48ecc3->leave($__internal_2f82fe16c0fb46229a03c26645577d789d984542cf152334265fdf20cf48ecc3_prof);

    }

    // line 5
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_2921a7f01232363a843f4641838c4798db445f9d6f4585fc17647409795419f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2921a7f01232363a843f4641838c4798db445f9d6f4585fc17647409795419f9->enter($__internal_2921a7f01232363a843f4641838c4798db445f9d6f4585fc17647409795419f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        echo ((array_key_exists("script", $context)) ? (_twig_default_filter((isset($context["script"]) ? $context["script"] : $this->getContext($context, "script")), "")) : (""));
        
        $__internal_2921a7f01232363a843f4641838c4798db445f9d6f4585fc17647409795419f9->leave($__internal_2921a7f01232363a843f4641838c4798db445f9d6f4585fc17647409795419f9_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ec25f046309ed57eac881d868818d1060e2d6f196ca50a0d62a8c28b37417ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec25f046309ed57eac881d868818d1060e2d6f196ca50a0d62a8c28b37417ac->enter($__internal_7ec25f046309ed57eac881d868818d1060e2d6f196ca50a0d62a8c28b37417ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "<div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"";
        echo twig_escape_filter($this->env, (isset($context["goto"]) ? $context["goto"] : $this->getContext($context, "goto")), "html", null, true);
        echo "\" data-duration=";
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo ">
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"page-message-body\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "")) : (""))), "html", null, true);
        echo "</div>
  </div>
</div>
";
        
        $__internal_7ec25f046309ed57eac881d868818d1060e2d6f196ca50a0d62a8c28b37417ac->leave($__internal_7ec25f046309ed57eac881d868818d1060e2d6f196ca50a0d62a8c28b37417ac_prof);

    }

    public function getTemplateName()
    {
        return "default/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  84 => 12,  75 => 9,  69 => 8,  57 => 5,  43 => 4,  36 => 1,  34 => 6,  32 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% set typeTitles = {info:'site.message.info'|trans, warning:'site.message.warning'|trans, error: 'site.message.error'|trans} %}
{% set title = title|default(typeTitles[type]) %}
{% block title %}{{ title|trans }} - {{ parent() }}{% endblock %}
{% block head_scripts %}{{ script|default('')|raw }}{% endblock %}
{% do script(['app/js/default/message/index.js']) %}

{% block content %}
<div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"{{ goto }}\" data-duration={{ duration }}>
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">{{ title|trans }}</h2>
    </div>
    <div class=\"page-message-body\">{{ message|default('')|trans }}</div>
  </div>
</div>
{% endblock %}
", "default/message.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\message.html.twig");
    }
}
