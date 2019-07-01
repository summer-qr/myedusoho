<?php

/* login/index.html.twig */
class __TwigTemplate_5cd3610778511661375ea36126862bb03e3599fa60d11ee869e7fdec6677e961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82bb78728b5ed0de9c81d7e73b00587202b77615bc00745b540cde1a8fc5e251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bb78728b5ed0de9c81d7e73b00587202b77615bc00745b540cde1a8fc5e251->enter($__internal_82bb78728b5ed0de9c81d7e73b00587202b77615bc00745b540cde1a8fc5e251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/auth/login/index.js"));
        // line 3
        $context["bodyClass"] = "login";
        // line 4
        $context["ai_face_enabled"] = ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("feature.face_enabled"), 0) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("face.login.enabled"), 0)) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("face.login.pc_enabled"), 0));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82bb78728b5ed0de9c81d7e73b00587202b77615bc00745b540cde1a8fc5e251->leave($__internal_82bb78728b5ed0de9c81d7e73b00587202b77615bc00745b540cde1a8fc5e251_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85773111b6e16114b8cb40c92ab265fa57d71aa47eb98074420b89aba57b3e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85773111b6e16114b8cb40c92ab265fa57d71aa47eb98074420b89aba57b3e80->enter($__internal_85773111b6e16114b8cb40c92ab265fa57d71aa47eb98074420b89aba57b3e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.content_title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_85773111b6e16114b8cb40c92ab265fa57d71aa47eb98074420b89aba57b3e80->leave($__internal_85773111b6e16114b8cb40c92ab265fa57d71aa47eb98074420b89aba57b3e80_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_b54609f854697a81e4a73f3a7fd124007da6f474d4a2660a727ca85ac010da54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54609f854697a81e4a73f3a7fd124007da6f474d4a2660a727ca85ac010da54->enter($__internal_b54609f854697a81e4a73f3a7fd124007da6f474d4a2660a727ca85ac010da54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 9
            echo "    <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\"
      data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\"><span
        class=\"receive-modal\"></span></a>
  ";
        }
        // line 13
        echo "  <div class=\"es-section login-section\" style=\"margin: 157.5px auto;\">
    <div class=\"logon-tab clearfix\">
      <a class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.login_account"), "html", null, true);
        echo "</a>
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.register_account"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"login-main js-login-main\">
      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

        ";
        // line 21
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "          <div class=\"alert alert-danger\">
            ";
            // line 23
            if (($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()) == "Bad credentials.")) {
                // line 24
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.user_password.error_tips"), "html", null, true);
                echo "
            ";
            } elseif (($this->getAttribute(            // line 25
(isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()) == "User account is locked.")) {
                // line 26
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exception.user_lock"), "html", null, true);
                echo "
            ";
            } else {
                // line 28
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
                echo "
            ";
            }
            // line 30
            echo "          </div>
        ";
        }
        // line 32
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_username\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required
              placeholder='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_placeholder"), "html", null, true);
        echo "'/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_password\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_placeholder"), "html", null, true);
        echo "'/>
          </div>
        </div>

        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.remember_me"), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"form-group mbl\">
          <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.submit_button"), "html", null, true);
        echo "</button>
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <div class=\"mbl\">
        <a class=\"link-primary\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.find_password"), "html", null, true);
        echo "</a>
        <span class=\"color-gray mhs\">|</span>
        <span class=\"color-gray\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.ask_register"), "html", null, true);
        echo "</span>
        <a class=\"link-primary\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.go_register"), "html", null, true);
        echo "</a>
      </div>

      ";
        // line 68
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled") || (isset($context["ai_face_enabled"]) ? $context["ai_face_enabled"] : $this->getContext($context, "ai_face_enabled")))) {
            // line 69
            echo "        <div class=\"social-login\">
            <span>
              ";
            // line 71
            if ((isset($context["ai_face_enabled"]) ? $context["ai_face_enabled"] : $this->getContext($context, "ai_face_enabled"))) {
                // line 72
                echo "                <a class=\"sts-login-link js-sts-login-link\" href=\"javascript:;\">
                  <img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face.png"), "html", null, true);
                echo "\"
                    srcset=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face.png"), "html", null, true);
                echo " 1x, ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face@2x.png"), "html", null, true);
                echo " 2x\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.sts_discovery"), "html", null, true);
                echo "\"/>
                </a>
              ";
            }
            // line 77
            echo "              ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))));
            echo "
            </span>
          <div class=\"line\"></div>
        </div>
      ";
        }
        // line 82
        echo "    </div>

    ";
        // line 84
        if ((isset($context["ai_face_enabled"]) ? $context["ai_face_enabled"] : $this->getContext($context, "ai_face_enabled"))) {
            // line 85
            echo "      ";
            $context["type"] = "page";
            // line 86
            echo "      ";
            $this->loadTemplate("login/sts-logins-block.htm.twig", "login/index.html.twig", 86)->display(array_merge($context, array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))));
            // line 87
            echo "    ";
        }
        // line 88
        echo "  </div>

";
        
        $__internal_b54609f854697a81e4a73f3a7fd124007da6f474d4a2660a727ca85ac010da54->leave($__internal_b54609f854697a81e4a73f3a7fd124007da6f474d4a2660a727ca85ac010da54_prof);

    }

    // line 92
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_3c6313ff6099a0d8220a983b7135ff7944ca53019d27e404be51abb57b570eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6313ff6099a0d8220a983b7135ff7944ca53019d27e404be51abb57b570eeb->enter($__internal_3c6313ff6099a0d8220a983b7135ff7944ca53019d27e404be51abb57b570eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        // line 93
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "login/index.html.twig", 93)->display(array_merge($context, array("mobile_tool_bar" => "login")));
        
        $__internal_3c6313ff6099a0d8220a983b7135ff7944ca53019d27e404be51abb57b570eeb->leave($__internal_3c6313ff6099a0d8220a983b7135ff7944ca53019d27e404be51abb57b570eeb_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 93,  264 => 92,  255 => 88,  252 => 87,  249 => 86,  246 => 85,  244 => 84,  240 => 82,  231 => 77,  221 => 74,  217 => 73,  214 => 72,  212 => 71,  208 => 69,  206 => 68,  198 => 65,  194 => 64,  187 => 62,  180 => 58,  176 => 57,  170 => 54,  163 => 50,  154 => 44,  149 => 42,  141 => 37,  137 => 36,  132 => 34,  126 => 32,  122 => 30,  116 => 28,  110 => 26,  108 => 25,  103 => 24,  101 => 23,  98 => 22,  96 => 21,  91 => 19,  83 => 16,  79 => 15,  75 => 13,  69 => 10,  66 => 9,  63 => 8,  57 => 7,  43 => 5,  36 => 1,  34 => 4,  32 => 3,  30 => 2,  11 => 1,);
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
{% do script(['libs/jquery-validation.js','app/js/auth/login/index.js']) %}
{% set bodyClass = 'login' %}
{% set ai_face_enabled = (setting('feature.face_enabled')|default(0) and setting('face.login.enabled')|default(0) and setting('face.login.pc_enabled')|default(0)) %}
{% block title %}{{ 'user.login.content_title'|trans }} - {{ parent() }}{% endblock %}

{% block content %}
  {% if app.request.cookies.get('modalOpened') == 1 %}
    <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\"
      data-url=\"{{ path('card_info',{'cardType':app.request.query.get('cardType'),'cardId':app.request.query.get('cardId')}) }}\" class=\"hidden\"><span
        class=\"receive-modal\"></span></a>
  {% endif %}
  <div class=\"es-section login-section\" style=\"margin: 157.5px auto;\">
    <div class=\"logon-tab clearfix\">
      <a class=\"active\">{{ 'user.login.login_account'|trans }}</a>
      <a href=\"{{ path('register', {goto:_target_path}) }}\">{{ 'user.register.register_account'|trans }}</a>
    </div>
    <div class=\"login-main js-login-main\">
      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"{{ path('login_check') }}\">

        {% if error %}
          <div class=\"alert alert-danger\">
            {% if error.message == 'Bad credentials.' %}
              {{ 'site.user_password.error_tips'|trans }}
            {% elseif error.message == 'User account is locked.' %}
              {{ 'exception.user_lock'|trans }}
            {% else %}
              {{ error.message|trans }}
            {% endif %}
          </div>
        {% endif %}
        {{ web_macro.flash_messages() }}
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_username\">{{ 'user.login.account_label'|trans }}</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\" required
              placeholder='{{ 'user.login.account_placeholder'|trans }}'/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_password\">{{ 'user.login.password_label'|trans }}</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='{{ 'user.login.password_placeholder'|trans }}'/>
          </div>
        </div>

        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> {{ 'user.login.remember_me'|trans }}
          </div>
        </div>
        <div class=\"form-group mbl\">
          <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">{{ 'user.login.submit_button'|trans }}</button>
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"{{ _target_path }}\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
      </form>

      <div class=\"mbl\">
        <a class=\"link-primary\" href=\"{{ path('password_reset') }}\">{{ 'user.login.find_password'|trans }}</a>
        <span class=\"color-gray mhs\">|</span>
        <span class=\"color-gray\">{{ 'user.login.ask_register'|trans }}</span>
        <a class=\"link-primary\" href=\"{{ path('register', {goto:_target_path}) }}\">{{ 'user.login.go_register'|trans }}</a>
      </div>

      {% if setting('login_bind.enabled') or ai_face_enabled %}
        <div class=\"social-login\">
            <span>
              {% if ai_face_enabled %}
                <a class=\"sts-login-link js-sts-login-link\" href=\"javascript:;\">
                  <img src=\"{{ asset('static-dist/app/img/face.png') }}\"
                    srcset=\"{{ asset('static-dist/app/img/face.png') }} 1x, {{ asset('static-dist/app/img/face@2x.png') }} 2x\" alt=\"{{'user.login.sts_discovery'|trans}}\"/>
                </a>
              {% endif %}
              {{ render(controller('AppBundle:Login:oauth2LoginsBlock', {targetPath:_target_path})) }}
            </span>
          <div class=\"line\"></div>
        </div>
      {% endif %}
    </div>

    {% if ai_face_enabled %}
      {% set type = 'page' %}
      {% include 'login/sts-logins-block.htm.twig'  with { type: type, goto: _target_path } %}
    {% endif %}
  </div>

{% endblock %}

{% block bottom %}
  {% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'login' } %}
{% endblock %}
", "login/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\login\\index.html.twig");
    }
}
