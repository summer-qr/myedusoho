<?php

/* admin/theme/tab-panel/nav.html.twig */
class __TwigTemplate_7e6a118783930688c98dd00eabb262f55b0a2f4213e1446fb7a729d5464c9cd5 extends Twig_Template
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
        $__internal_1615bcc32cd22f1a5e17d40c0148ba09807a9be4ff90d0807941560ae30d3689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1615bcc32cd22f1a5e17d40c0148ba09807a9be4ff90d0807941560ae30d3689->enter($__internal_1615bcc32cd22f1a5e17d40c0148ba09807a9be4ff90d0807941560ae30d3689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/theme/tab-panel/nav.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiaadminbundle/controller/theme/theme-setting/nav.js");
        // line 3
        echo "<div class=\"tab-pane\" id=\"top\">
  <div class=\"panel panel-default\">
      <div class=\"panel-heading\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.setting_navigation"), "html", null, true);
        echo "</div>
      <div class=\"panel-body \">
          ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.navigation_num_tips", array("%value%" => (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "topNavNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "topNavNum", array()), 5)) : (5))));
        echo "
          <div class=\"help color-danger hide mtm\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.navigation_num_validation"), "html", null, true);
        echo "</div>
      </div>
  </div>
</div>";
        
        $__internal_1615bcc32cd22f1a5e17d40c0148ba09807a9be4ff90d0807941560ae30d3689->leave($__internal_1615bcc32cd22f1a5e17d40c0148ba09807a9be4ff90d0807941560ae30d3689_prof);

    }

    public function getTemplateName()
    {
        return "admin/theme/tab-panel/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% do load_script('topxiaadminbundle/controller/theme/theme-setting/nav.js') %}
<div class=\"tab-pane\" id=\"top\">
  <div class=\"panel panel-default\">
      <div class=\"panel-heading\">{{ 'admin.setting.theme.manage.setting_navigation'|trans }}</div>
      <div class=\"panel-body \">
          {{ 'admin.setting.theme.manage.navigation_num_tips'|trans({'%value%': navigation.topNavNum|default(5)})|raw }}
          <div class=\"help color-danger hide mtm\">{{ 'admin.setting.theme.manage.navigation_num_validation'|trans }}</div>
      </div>
  </div>
</div>", "admin/theme/tab-panel/nav.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\theme\\tab-panel\\nav.html.twig");
    }
}
