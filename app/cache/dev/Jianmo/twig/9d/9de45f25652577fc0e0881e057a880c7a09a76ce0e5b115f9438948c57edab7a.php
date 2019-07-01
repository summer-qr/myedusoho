<?php

/* admin/system/security.html.twig */
class __TwigTemplate_eab1251be142f4846fd5ad848a67e976efe92631c350acf527a911527f8a450a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/security.html.twig", 1);
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
        $__internal_9f6074813e2fd94cd5571e07974f7e17cecba002fe29335f03016d4f0d387b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6074813e2fd94cd5571e07974f7e17cecba002fe29335f03016d4f0d387b7c->enter($__internal_9f6074813e2fd94cd5571e07974f7e17cecba002fe29335f03016d4f0d387b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/security.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f6074813e2fd94cd5571e07974f7e17cecba002fe29335f03016d4f0d387b7c->leave($__internal_9f6074813e2fd94cd5571e07974f7e17cecba002fe29335f03016d4f0d387b7c_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_822ef50c02ef7ebacd6d2b3f73f698d2a48febc1c73def2b5c88506669786f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822ef50c02ef7ebacd6d2b3f73f698d2a48febc1c73def2b5c88506669786f65->enter($__internal_822ef50c02ef7ebacd6d2b3f73f698d2a48febc1c73def2b5c88506669786f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\">
  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.security.IFrame_white_domain"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-10\">
        <textarea name=\"safe_iframe_domains\" rows=\"8\" class=\"form-control\">";
        // line 16
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["security"]) ? $context["security"] : $this->getContext($context, "security")), "safe_iframe_domains", array()), "
"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.security.help_block"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-10\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </div>
    </div>
  </fieldset>
</form>

";
        
        $__internal_822ef50c02ef7ebacd6d2b3f73f698d2a48febc1c73def2b5c88506669786f65->leave($__internal_822ef50c02ef7ebacd6d2b3f73f698d2a48febc1c73def2b5c88506669786f65_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  73 => 21,  66 => 17,  61 => 16,  55 => 13,  46 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_setting_security' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" method=\"post\">
  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >{{'admin.setting.security.IFrame_white_domain'|trans}}</label>
      </div>
      <div class=\"controls col-md-10\">
        <textarea name=\"safe_iframe_domains\" rows=\"8\" class=\"form-control\">{{ security.safe_iframe_domains|join(\"\\n\") }}</textarea>
        <div class=\"help-block\">{{'admin.setting.security.help_block'|trans}}</div>
    </div>
    <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-10\">
        <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
      </div>
    </div>
  </fieldset>
</form>

{% endblock %}", "admin/system/security.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\security.html.twig");
    }
}
