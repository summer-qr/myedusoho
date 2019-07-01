<?php

/* default/header/part/visitor-login.html.twig */
class __TwigTemplate_2128eb67183e36e9cbcf742b4c7d8b1493b68d40dfdd69db7948b08611995693 extends Twig_Template
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
        $__internal_c820176e0fe1a7099775e850249320c31e7671723f3d1a3899088debb6d68d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c820176e0fe1a7099775e850249320c31e7671723f3d1a3899088debb6d68d94->enter($__internal_c820176e0fe1a7099775e850249320c31e7671723f3d1a3899088debb6d68d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header/part/visitor-login.html.twig"));

        // line 1
        echo "<li class=\"user-avatar-li nav-hover visible-xs\">
  <a href=\"javascript:;\" class=\"user-avatar-toggle\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
        echo "\">
  </a>
  <ul class=\"dropdown-menu\" role=\"menu\">
    <li class=\"user-nav-li-login\">
      <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-denglu\"></i>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.login"), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"user-nav-li-register\">
      <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-zhuce\"></i>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.register"), "html", null, true);
        echo "
      </a>
    </li>
    ";
        // line 16
        if ((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile"))) {
            // line 17
            echo "      <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_pc"), "html", null, true);
            echo "</a>
      </li>
    ";
        } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wap.version") == 1)) {
            // line 21
            echo "      <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_mobile"), "html", null, true);
            echo "</a>
      </li>
     ";
        }
        // line 25
        echo "    ";
        if (((isset($context["show_switch_locale"]) ? $context["show_switch_locale"] : $this->getContext($context, "show_switch_locale")) == 1)) {
            // line 26
            echo "      ";
            $this->loadTemplate("default/switch-language.html.twig", "default/header/part/visitor-login.html.twig", 26)->display(array_merge($context, array("langClass" => "text-center visible-xs")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "  </ul>
</li>

<li class=\"visitor-li hidden-xs\"><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.login"), "html", null, true);
        echo "</a></li>
<li class=\"visitor-li hidden-xs\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.register"), "html", null, true);
        echo "</a></li>";
        
        $__internal_c820176e0fe1a7099775e850249320c31e7671723f3d1a3899088debb6d68d94->leave($__internal_c820176e0fe1a7099775e850249320c31e7671723f3d1a3899088debb6d68d94_prof);

    }

    public function getTemplateName()
    {
        return "default/header/part/visitor-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  88 => 31,  83 => 28,  80 => 27,  77 => 26,  74 => 25,  68 => 22,  65 => 21,  59 => 18,  56 => 17,  54 => 16,  48 => 13,  44 => 12,  37 => 8,  33 => 7,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"user-avatar-li nav-hover visible-xs\">
  <a href=\"javascript:;\" class=\"user-avatar-toggle\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"{{ asset('assets/img/default/avatar.png') }}\">
  </a>
  <ul class=\"dropdown-menu\" role=\"menu\">
    <li class=\"user-nav-li-login\">
      <a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">
        <i class=\"es-icon es-icon-denglu\"></i>{{'homepage.header.login'|trans}}
      </a>
    </li>
    <li class=\"user-nav-li-register\">
      <a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">
        <i class=\"es-icon es-icon-zhuce\"></i>{{'homepage.header.register'|trans}}
      </a>
    </li>
    {% if mobile %}
      <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>{{'homepage.header.switch_pc'|trans}}</a>
      </li>
    {% elseif setting('wap.version') == 1  %}
      <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>{{'homepage.header.switch_mobile'|trans}}</a>
      </li>
     {% endif %}
    {% if show_switch_locale == 1 %}
      {% include 'default/switch-language.html.twig' with {langClass: 'text-center visible-xs'} %}
    {% endif %}
  </ul>
</li>

<li class=\"visitor-li hidden-xs\"><a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'homepage.header.login'|trans}}</a></li>
<li class=\"visitor-li hidden-xs\"><a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'homepage.header.register'|trans}}</a></li>", "default/header/part/visitor-login.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\header\\part\\visitor-login.html.twig");
    }
}
