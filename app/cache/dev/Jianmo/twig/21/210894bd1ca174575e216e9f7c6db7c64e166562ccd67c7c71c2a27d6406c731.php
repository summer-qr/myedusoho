<?php

/* admin/system/post-num-rules.html.twig */
class __TwigTemplate_92e719c2aa56d2e21285db9b59a7c077345b8334d375a5823b0a2dfcc30eb5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/post-num-rules.html.twig", 1);
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
        $__internal_7aa99741f047185ebbc1f3d4c0ada3956db66bf632710259480c68b11dff030f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa99741f047185ebbc1f3d4c0ada3956db66bf632710259480c68b11dff030f->enter($__internal_7aa99741f047185ebbc1f3d4c0ada3956db66bf632710259480c68b11dff030f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/post-num-rules.html.twig"));

        // line 3
        $context["script_controller"] = "system/post-num-rules";
        // line 4
        $context["menu"] = "admin_setting_post_num_rules_settings";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa99741f047185ebbc1f3d4c0ada3956db66bf632710259480c68b11dff030f->leave($__internal_7aa99741f047185ebbc1f3d4c0ada3956db66bf632710259480c68b11dff030f_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_2e866601a950ed9c110bd44aa4a71d1601e3535e48f68cef9fa90f39a153eda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e866601a950ed9c110bd44aa4a71d1601e3535e48f68cef9fa90f39a153eda2->enter($__internal_2e866601a950ed9c110bd44aa4a71d1601e3535e48f68cef9fa90f39a153eda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form id='post-num-rules-form' class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-5 control-label\">
        <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.post_num_rules.same_ip_rule"), "html", null, true);
        echo "</label>
        <label style=\"display:none\" for=\"thread-post-num-for-ip\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.post_num_rules.post_num"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-6\">
        <input type=\"hidden\" name=\"setting[rules][thread][fiveMuniteRule][interval]\" class=\"form-control\" value=\"300\">
        <input id=\"thread-post-num-for-ip\" type=\"text\" name=\"setting[rules][thread][fiveMuniteRule][postNum]\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "thread", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "thread", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array()), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"help-block\" style=\"\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.post_num_rules.post_num_tips"), "html", null, true);
        echo "</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-5 control-label\">
        <label>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.post_num_rules.same_user_rule"), "html", null, true);
        echo "</label>
        <label style=\"display:none\" for=\"thread-post-num-for-user\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.post_num_rules.post_num"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-6\">
        <input type=\"hidden\" name=\"setting[rules][threadLoginedUser][fiveMuniteRule][interval]\" class=\"form-control\" value=\"300\">
        <input id=\"thread-post-num-for-user\" type=\"text\" name=\"setting[rules][threadLoginedUser][fiveMuniteRule][postNum]\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "threadLoginedUser", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "threadLoginedUser", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array()), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"help-block\" style=\"\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.post_num_rules.post_num_tips"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-4 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
        
        $__internal_2e866601a950ed9c110bd44aa4a71d1601e3535e48f68cef9fa90f39a153eda2->leave($__internal_2e866601a950ed9c110bd44aa4a71d1601e3535e48f68cef9fa90f39a153eda2_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/post-num-rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  104 => 39,  93 => 31,  89 => 30,  82 => 26,  78 => 25,  70 => 20,  66 => 19,  59 => 15,  55 => 14,  45 => 7,  39 => 6,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
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

{% set script_controller = 'system/post-num-rules' %}
{% set menu = 'admin_setting_post_num_rules_settings' %}

{% block main %}
{{ web_macro.flash_messages() }}

<form id='post-num-rules-form' class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-5 control-label\">
        <label >{{'admin.post_num_rules.same_ip_rule'|trans}}</label>
        <label style=\"display:none\" for=\"thread-post-num-for-ip\">{{'admin.post_num_rules.post_num'|trans}}</label>
      </div>
      <div class=\"controls col-md-6\">
        <input type=\"hidden\" name=\"setting[rules][thread][fiveMuniteRule][interval]\" class=\"form-control\" value=\"300\">
        <input id=\"thread-post-num-for-ip\" type=\"text\" name=\"setting[rules][thread][fiveMuniteRule][postNum]\" class=\"form-control\" value=\"{{setting('post_num_rules').rules.thread.fiveMuniteRule.postNum|default('')}}\">
        <div class=\"help-block\" style=\"\">{{'admin.post_num_rules.post_num_tips'|trans}}</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-5 control-label\">
        <label>{{'admin.post_num_rules.same_user_rule'|trans}}</label>
        <label style=\"display:none\" for=\"thread-post-num-for-user\">{{'admin.post_num_rules.post_num'|trans}}</label>
      </div>
      <div class=\"controls col-md-6\">
        <input type=\"hidden\" name=\"setting[rules][threadLoginedUser][fiveMuniteRule][interval]\" class=\"form-control\" value=\"300\">
        <input id=\"thread-post-num-for-user\" type=\"text\" name=\"setting[rules][threadLoginedUser][fiveMuniteRule][postNum]\" class=\"form-control\" value=\"{{setting('post_num_rules').rules.threadLoginedUser.fiveMuniteRule.postNum|default('')}}\">
        <div class=\"help-block\" style=\"\">{{'admin.post_num_rules.post_num_tips'|trans}}</div>
      </div>
    </div>
  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-4 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

</form>

{% endblock %}", "admin/system/post-num-rules.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\post-num-rules.html.twig");
    }
}
