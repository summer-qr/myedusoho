<?php

/* init-password/init-password.html.twig */
class __TwigTemplate_9e7844ece1598e38dae08b7487cd404a3b29c3881b94edc7576b83a812c57b27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "init-password/init-password.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72d6336adbb33ecf8e7dcf8dbe1a2dbb84b14db45cc091e096a7d4f5d77e7c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d6336adbb33ecf8e7dcf8dbe1a2dbb84b14db45cc091e096a7d4f5d77e7c34->enter($__internal_72d6336adbb33ecf8e7dcf8dbe1a2dbb84b14db45cc091e096a7d4f5d77e7c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "init-password/init-password.html.twig"));

        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/init-password/index.js"));
        // line 3
        $context["bodyClass"] = "login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d6336adbb33ecf8e7dcf8dbe1a2dbb84b14db45cc091e096a7d4f5d77e7c34->leave($__internal_72d6336adbb33ecf8e7dcf8dbe1a2dbb84b14db45cc091e096a7d4f5d77e7c34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2efbb0f11f340e0526c469c8037a01cdf59a06a39596fe674834ff732e9e5629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efbb0f11f340e0526c469c8037a01cdf59a06a39596fe674834ff732e9e5629->enter($__internal_2efbb0f11f340e0526c469c8037a01cdf59a06a39596fe674834ff732e9e5629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.content_title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_2efbb0f11f340e0526c469c8037a01cdf59a06a39596fe674834ff732e9e5629->leave($__internal_2efbb0f11f340e0526c469c8037a01cdf59a06a39596fe674834ff732e9e5629_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_1075bb4375c402170504284abe9c70683c651959cc35912d70a326dca8f8878b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1075bb4375c402170504284abe9c70683c651959cc35912d70a326dca8f8878b->enter($__internal_1075bb4375c402170504284abe9c70683c651959cc35912d70a326dca8f8878b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
  <div class=\"es-section login-section login-init-section\">
    <div class=\"login-main cd-pt24\">
      <h2 class=\"login-init-section__title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.init.password_tips"), "html", null, true);
        echo "</h2>
      <form class=\"form-vertical\" id=\"init-password-form\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_init");
        echo "\" method=\"post\">
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"newPassword\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.password_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"newPassword\" type=\"password\" name=\"newPassword\" value=\"\" required=\"required\"
                   placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.init.password_placeholder"), "html", null, true);
        echo "\"/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"confirmPassword\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.oauth.register.confirm_password_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"confirmPassword\" type=\"password\" name=\"confirmPassword\" required=\"required\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.init.password_placeholder_again"), "html", null, true);
        echo "\"/>
          </div>
        </div>

        <div class=\"form-group mbl cd-mt24\">
          <button type=\"submit\" data-loading-text=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.init.password.submit.password.loading"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.init.password.confirm.password"), "html", null, true);
        echo "</button>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"goto\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "goto"), "method"), "html", null, true);
        echo "\">
      </form>
    </div>
  </div>

";
        
        $__internal_1075bb4375c402170504284abe9c70683c651959cc35912d70a326dca8f8878b->leave($__internal_1075bb4375c402170504284abe9c70683c651959cc35912d70a326dca8f8878b_prof);

    }

    public function getTemplateName()
    {
        return "init-password/init-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  109 => 32,  101 => 29,  93 => 24,  88 => 22,  80 => 17,  74 => 14,  69 => 12,  65 => 11,  60 => 8,  54 => 7,  40 => 5,  33 => 1,  31 => 3,  29 => 2,  11 => 1,);
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
{% do script(['libs/jquery-validation.js','app/js/init-password/index.js']) %}
{% set bodyClass = 'login' %}

{% block title %}{{ 'user.login.content_title'|trans }} - {{ parent() }}{% endblock %}

{% block content %}

  <div class=\"es-section login-section login-init-section\">
    <div class=\"login-main cd-pt24\">
      <h2 class=\"login-init-section__title\">{{ 'user.init.password_tips'|trans }}</h2>
      <form class=\"form-vertical\" id=\"init-password-form\" action=\"{{ path('password_init') }}\" method=\"post\">
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"newPassword\">{{ 'user.register.password_label'|trans }}</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"newPassword\" type=\"password\" name=\"newPassword\" value=\"\" required=\"required\"
                   placeholder=\"{{ 'user.init.password_placeholder'|trans }}\"/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"confirmPassword\">{{ 'user.oauth.register.confirm_password_label'|trans }}</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"confirmPassword\" type=\"password\" name=\"confirmPassword\" required=\"required\" placeholder=\"{{ 'user.init.password_placeholder_again'|trans }}\"/>
          </div>
        </div>

        <div class=\"form-group mbl cd-mt24\">
          <button type=\"submit\" data-loading-text=\"{{ 'user.init.password.submit.password.loading'|trans }}\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">{{ 'user.init.password.confirm.password'|trans }}</button>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
        <input type=\"hidden\" name=\"goto\" value=\"{{app.request.get('goto')}}\">
      </form>
    </div>
  </div>

{% endblock %}
", "init-password/init-password.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\init-password\\init-password.html.twig");
    }
}
