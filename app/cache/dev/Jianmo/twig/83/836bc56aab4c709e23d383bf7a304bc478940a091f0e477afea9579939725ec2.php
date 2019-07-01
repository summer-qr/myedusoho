<?php

/* default/header/part/user-inform.html.twig */
class __TwigTemplate_28c8b450d946e09fd96c170260d10acb770260a742b3abdda61a3d877cbcccc3 extends Twig_Template
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
        $__internal_109b5b92d8dde2409b4abbabdaf0acb2b99b4001196c3ff09f01c360dce1c0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109b5b92d8dde2409b4abbabdaf0acb2b99b4001196c3ff09f01c360dce1c0c0->enter($__internal_109b5b92d8dde2409b4abbabdaf0acb2b99b4001196c3ff09f01c360dce1c0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header/part/user-inform.html.twig"));

        // line 1
        echo "<li class=\"user-inform-li js-user-inform hidden-xs hidden-sm cd-ml24 cd-dropdown\" data-toggle=\"cd-dropdown\">
  <a class=\"inform-dropdown-toggle\"><i class=\"cd-icon cd-icon-bell\"></i>";
        // line 2
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0))) {
            echo "<span class=\"inform-dropdown-toggle__num cd-badge cd-badge-danger ";
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) + $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array())) > 9)) {
                echo " inform-dropdown-toggle__num--big ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) + $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array())), "html", null, true);
            echo "</span>";
        }
        echo "</a>
  <div class=\"dropdown-menu inform-dropdown js-user-nav-dropdown\" role=\"menu\">
    <div class=\"clearfix inform-dropdown-head\" role=\"tablist\">
      <a class=\"inform-dropdown-head__tab js-inform-tab active\" href=\"#notification\" role=\"tab\" data-toggle=\"tab\" data-type=\"newNotification\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notification.user_notification"), "html", null, true);
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
            echo "<span class=\"inform-dropdown-dot\"></span>";
        }
        echo "</a>
      <a class=\"inform-dropdown-head__tab js-inform-tab\" href=\"#message\" role=\"tab\" data-toggle=\"tab\" data-type=\"conversation\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.send_message"), "html", null, true);
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
            echo "<span class=\"inform-dropdown-dot\"></span>";
        }
        echo "</a>
    </div>
    <div class=\"tab-content\">
      <div class=\"notification-content tab-pane active\" role=\"tabpanel\" id=\"notification\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
            // line 12
            echo "            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-newNotification\"></div>
          ";
        } else {
            // line 15
            echo "            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice.png"), "html", null, true);
            echo "\"
            srcset=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice.png"), "html", null, true);
            echo " 1x, ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice@2x.png"), "html", null, true);
            echo " 2x\"/>
              <div class=\"inform-empty-status__tip\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.no_new_notifications"), "html", null, true);
            echo "</div>
            </div>
          ";
        }
        // line 21
        echo "        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.check_all_notifications"), "html", null, true);
        echo "</a>
        </div>
      </div>
      <div class=\"message-content tab-pane\" role=\"tabpanel\" id=\"message\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          ";
        // line 28
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
            // line 29
            echo "            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-conversation\"></div>
          ";
        } else {
            // line 32
            echo "            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message.png"), "html", null, true);
            echo "\"
          srcset=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message.png"), "html", null, true);
            echo " 1x, ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message@2x.png"), "html", null, true);
            echo " 2x\"/>
              <div class=\"inform-empty-status__tip\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.no_new_messages"), "html", null, true);
            echo "</div>
            </div>
          ";
        }
        // line 38
        echo "        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.check_all_messages"), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</li>";
        
        $__internal_109b5b92d8dde2409b4abbabdaf0acb2b99b4001196c3ff09f01c360dce1c0c0->leave($__internal_109b5b92d8dde2409b4abbabdaf0acb2b99b4001196c3ff09f01c360dce1c0c0_prof);

    }

    public function getTemplateName()
    {
        return "default/header/part/user-inform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  123 => 38,  117 => 35,  111 => 34,  107 => 33,  104 => 32,  99 => 29,  97 => 28,  87 => 23,  83 => 21,  77 => 18,  71 => 17,  67 => 16,  64 => 15,  59 => 12,  57 => 11,  46 => 6,  39 => 5,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"user-inform-li js-user-inform hidden-xs hidden-sm cd-ml24 cd-dropdown\" data-toggle=\"cd-dropdown\">
  <a class=\"inform-dropdown-toggle\"><i class=\"cd-icon cd-icon-bell\"></i>{% if app.user.newNotificationNum > 0 or app.user.newMessageNum > 0 %}<span class=\"inform-dropdown-toggle__num cd-badge cd-badge-danger {% if app.user.newNotificationNum + app.user.newMessageNum > 9 %} inform-dropdown-toggle__num--big {% endif %}\">{{ app.user.newNotificationNum + app.user.newMessageNum }}</span>{% endif %}</a>
  <div class=\"dropdown-menu inform-dropdown js-user-nav-dropdown\" role=\"menu\">
    <div class=\"clearfix inform-dropdown-head\" role=\"tablist\">
      <a class=\"inform-dropdown-head__tab js-inform-tab active\" href=\"#notification\" role=\"tab\" data-toggle=\"tab\" data-type=\"newNotification\">{{ 'notification.user_notification'|trans }}{% if app.user.newNotificationNum > 0 %}<span class=\"inform-dropdown-dot\"></span>{% endif %}</a>
      <a class=\"inform-dropdown-head__tab js-inform-tab\" href=\"#message\" role=\"tab\" data-toggle=\"tab\" data-type=\"conversation\">{{ 'user.btn.send_message'|trans }}{% if app.user.newMessageNum > 0 %}<span class=\"inform-dropdown-dot\"></span>{% endif %}</a>
    </div>
    <div class=\"tab-content\">
      <div class=\"notification-content tab-pane active\" role=\"tabpanel\" id=\"notification\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          {% if app.user.newNotificationNum > 0 %}
            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-newNotification\"></div>
          {% else %}
            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"{{ asset('static-dist/app/img/notice/null-notice.png') }}\"
            srcset=\"{{ asset('static-dist/app/img/notice/null-notice.png') }} 1x, {{ asset('static-dist/app/img/notice/null-notice@2x.png') }} 2x\"/>
              <div class=\"inform-empty-status__tip\">{{ 'homepage.header.no_new_notifications'|trans }}</div>
            </div>
          {% endif %}
        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"{{ path('notification') }}\">{{ 'homepage.header.check_all_notifications'|trans }}</a>
        </div>
      </div>
      <div class=\"message-content tab-pane\" role=\"tabpanel\" id=\"message\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          {% if app.user.newMessageNum > 0 %}
            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-conversation\"></div>
          {% else %}
            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"{{ asset('static-dist/app/img/notice/null-message.png') }}\"
          srcset=\"{{ asset('static-dist/app/img/notice/null-message.png') }} 1x, {{ asset('static-dist/app/img/notice/null-message@2x.png') }} 2x\"/>
              <div class=\"inform-empty-status__tip\">{{ 'homepage.header.no_new_messages'|trans }}</div>
            </div>
          {% endif %}
        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"{{ path('message') }}\">{{ 'homepage.header.check_all_messages'|trans }}</a>
        </div>
      </div>
    </div>
  </div>
</li>", "default/header/part/user-inform.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\header\\part\\user-inform.html.twig");
    }
}
