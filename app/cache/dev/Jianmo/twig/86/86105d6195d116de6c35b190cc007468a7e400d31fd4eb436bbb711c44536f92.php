<?php

/* admin/app/app-detail.html.twig */
class __TwigTemplate_7fb74c99f2215dbe0a714ea0e0c4ffb626e142ac7f5c82e353a1c390ed5552f1 extends Twig_Template
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
        $__internal_2aefbc8a0021f29641d852deb14a0d5138e1ae68b8adc182a1ef945791a66c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aefbc8a0021f29641d852deb14a0d5138e1ae68b8adc182a1ef945791a66c8c->enter($__internal_2aefbc8a0021f29641d852deb14a0d5138e1ae68b8adc182a1ef945791a66c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/app/app-detail.html.twig"));

        // line 1
        echo "<img src=\"http://open.edusoho.com/files/product/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "icon", array()), "html", null, true);
        echo "\" class=\"app-img pull-left mrl mtm\"/>
<div class=\"mtm\">

  <h4>
    <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "id", array()), "html", null, true);
        echo "\">
      <strong class=\"text-primary\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "name", array()), "html", null, true);
        echo "</strong>
      ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "licensed", array())) {
            // line 8
            echo "        <span class=\"label label-success mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.business_edition"), "html", null, true);
            echo "</span>
      ";
        }
        // line 10
        echo "    </a>
  </h4>

</div>

<div class=\"info mtm mbm clearfix\">
  <div class=\"left-info pull-left\">

    <div class=\"text-muted\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.author"), "html", null, true);
        echo "： ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "developerName", array()), "html", null, true);
        echo "</div>
    <div class=\"mts text-muted\">";
        // line 19
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "type", array()) == "theme")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.type.theme"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.type.app"), "html", null, true);
        }
        // line 20
        echo "    </div>
  </div>

  <div class=\"middle-info pull-left short-long-text\">
    <div class=\"short-text text-muted\">";
        // line 24
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "description", array()), 80);
        echo " <span
          class=\"trigger\">(";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.description_open"), "html", null, true);
        echo ")</span></div>
    <div class=\"long-text text-muted\">";
        // line 26
        echo $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "description", array());
        echo " <span class=\"trigger\">(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.description_close"), "html", null, true);
        echo ")</span></div>
  </div>
";
        
        $__internal_2aefbc8a0021f29641d852deb14a0d5138e1ae68b8adc182a1ef945791a66c8c->leave($__internal_2aefbc8a0021f29641d852deb14a0d5138e1ae68b8adc182a1ef945791a66c8c_prof);

    }

    public function getTemplateName()
    {
        return "admin/app/app-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  78 => 25,  74 => 24,  68 => 20,  62 => 19,  56 => 18,  46 => 10,  40 => 8,  38 => 7,  34 => 6,  30 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<img src=\"http://open.edusoho.com/files/product/{{ app.icon }}\" class=\"app-img pull-left mrl mtm\"/>
<div class=\"mtm\">

  <h4>
    <a target=\"_blank\" href=\"http://open.edusoho.com/app/{{ app.id }}\">
      <strong class=\"text-primary\">{{ app.name }}</strong>
      {% if app.licensed %}
        <span class=\"label label-success mls\">{{ 'admin.app_center.business_edition'|trans }}</span>
      {% endif %}
    </a>
  </h4>

</div>

<div class=\"info mtm mbm clearfix\">
  <div class=\"left-info pull-left\">

    <div class=\"text-muted\">{{ 'admin.app_center.author'|trans }}： {{ app.developerName }}</div>
    <div class=\"mts text-muted\">{% if app.type == \"theme\" %}{{ 'admin.app_center.type.theme'|trans }}{% else %}{{ 'admin.app_center.type.app'|trans }}{% endif %}
    </div>
  </div>

  <div class=\"middle-info pull-left short-long-text\">
    <div class=\"short-text text-muted\">{{ app.description|plain_text(80) }} <span
          class=\"trigger\">({{ 'admin.app_center.description_open'|trans }})</span></div>
    <div class=\"long-text text-muted\">{{ app.description|raw }} <span class=\"trigger\">({{ 'admin.app_center.description_close'|trans }})</span></div>
  </div>
", "admin/app/app-detail.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\app\\app-detail.html.twig");
    }
}
