<?php

/* admin/plugin-upgrade-notify-modal.html.twig */
class __TwigTemplate_9b49d72132a2ec216397801dd447b47c01db81f743ef7f71a60c28f1c54b7213 extends Twig_Template
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
        $__internal_45100ba1fb57a3736b181e4bfabaccbf0b8a29f220ffd712d3f9b7150be250ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45100ba1fb57a3736b181e4bfabaccbf0b8a29f220ffd712d3f9b7150be250ed->enter($__internal_45100ba1fb57a3736b181e4bfabaccbf0b8a29f220ffd712d3f9b7150be250ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/plugin-upgrade-notify-modal.html.twig"));

        // line 1
        $context["current_route"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method");
        // line 2
        echo "
";
        // line 3
        if (((((isset($context["current_route"]) ? $context["current_route"] : $this->getContext($context, "current_route")) != "admin_app_upgrades") && $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isSuperAdmin", array(), "method"))) {
            // line 4
            echo "  ";
            $context["notifies"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->pluginUpdateNotify();
            // line 5
            echo "
  ";
            // line 6
            $context["dispalys"] = array("plugin" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.plugin"), "theme" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.theme"));
            // line 7
            echo "  ";
            if ( !twig_test_empty((isset($context["notifies"]) ? $context["notifies"] : $this->getContext($context, "notifies")))) {
                // line 8
                echo "    <div class=\"modal js-update-modal\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.upgrade_guide"), "html", null, true);
                echo "</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"update-redmine-body\">
              <img class=\"pbm img-responsive\" src='";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/img/course-8-update.jpg"), "html", null, true);
                echo "'>
              <div class=\"mll mtl mrl clearfix\">
                ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notifies"]) ? $context["notifies"] : $this->getContext($context, "notifies")));
                foreach ($context['_seq'] as $context["type"] => $context["apps"]) {
                    // line 20
                    echo "                  <p class=\"color-primary mbl mtl\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.upgrade.tips", array("%displayType%" => $this->getAttribute((isset($context["dispalys"]) ? $context["dispalys"] : $this->getContext($context, "dispalys")), $context["type"], array(), "array"))), "html", null, true);
                    echo "</p>
                  <div class=\"clearfix\">
                    ";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["apps"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                        // line 23
                        echo "                      <p class=\"color-dark\" style=\"float:left;width:33.33%\"><span class=\"mrm\">●</span>";
                        echo twig_escape_filter($this->env, $context["app"], "html", null, true);
                        echo "</p>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['apps'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                <p class=\"color-primary mbl mtl\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades.not_upgrade.tips"), "html", null, true);
                echo "</p>

              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <a type=\"button\" class=\"btn btn-primary\" href=\"";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.upgrades_btn"), "html", null, true);
                echo "</a>
          </div>
        </div>
      </div>
    </div>
  ";
            }
        }
        
        $__internal_45100ba1fb57a3736b181e4bfabaccbf0b8a29f220ffd712d3f9b7150be250ed->leave($__internal_45100ba1fb57a3736b181e4bfabaccbf0b8a29f220ffd712d3f9b7150be250ed_prof);

    }

    public function getTemplateName()
    {
        return "admin/plugin-upgrade-notify-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  89 => 27,  82 => 25,  73 => 23,  69 => 22,  63 => 20,  59 => 19,  54 => 17,  47 => 13,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set current_route = app.request.get('_route') %}

{% if current_route != 'admin_app_upgrades' and app.user and app.user.isSuperAdmin() %}
  {% set notifies = plugin_update_notify() %}

  {% set dispalys = {plugin: 'admin.plugin.upgrades.plugin'|trans, theme: 'admin.plugin.upgrades.theme'|trans} %}
  {% if not notifies is empty %}
    <div class=\"modal js-update-modal\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">{{ 'admin.plugin.upgrades.upgrade_guide'|trans }}</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"update-redmine-body\">
              <img class=\"pbm img-responsive\" src='{{ asset('bundles/topxiaadmin/img/course-8-update.jpg') }}'>
              <div class=\"mll mtl mrl clearfix\">
                {% for type, apps in notifies %}
                  <p class=\"color-primary mbl mtl\">{{ 'admin.plugin.upgrades.upgrade.tips'|trans({'%displayType%':dispalys[type]}) }}</p>
                  <div class=\"clearfix\">
                    {% for app in apps %}
                      <p class=\"color-dark\" style=\"float:left;width:33.33%\"><span class=\"mrm\">●</span>{{ app }}</p>
                    {% endfor  %}
                  </div>
                {% endfor %}
                <p class=\"color-primary mbl mtl\">{{ 'admin.plugin.upgrades.not_upgrade.tips'|trans }}</p>

              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <a type=\"button\" class=\"btn btn-primary\" href=\"{{ path('admin_app_upgrades') }}\">{{ 'admin.plugin.upgrades_btn'|trans }}</a>
          </div>
        </div>
      </div>
    </div>
  {% endif %}
{% endif %}
", "admin/plugin-upgrade-notify-modal.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\plugin-upgrade-notify-modal.html.twig");
    }
}
