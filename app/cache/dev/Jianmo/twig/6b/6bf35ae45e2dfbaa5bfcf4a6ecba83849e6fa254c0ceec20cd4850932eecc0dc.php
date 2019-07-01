<?php

/* admin/edu-cloud/key-license-info.html.twig */
class __TwigTemplate_00fd8f00712c4e98d779f659a2ae28e43664e18831f6447ef54333d2b0ecdf11 extends Twig_Template
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
        $__internal_2c2bc8e81ecec9b994ed0736460f5b91b6bd56ef5fd310b804a055b2ac42ddad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2bc8e81ecec9b994ed0736460f5b91b6bd56ef5fd310b804a055b2ac42ddad->enter($__internal_2c2bc8e81ecec9b994ed0736460f5b91b6bd56ef5fd310b804a055b2ac42ddad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edu-cloud/key-license-info.html.twig"));

        // line 1
        if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array()), null)) : (null))) {
            // line 2
            echo "
  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <div class=\"alert alert-danger key-error-alert\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->removeCopyright($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.key_error_tips")), "html", null, true);
            echo "
      </div>
    </div>
  </div>

";
        } else {
            // line 12
            echo "
  ";
            // line 13
            if ( !(($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), null)) : (null))) {
                // line 14
                echo "
  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\">";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.license_domain"), "html", null, true);
                echo "</label>
    <div class=\"col-md-6\">
      <p class=\"form-control-static\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), "html", null, true);
                echo " <span class=\"text-warning\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.not_license_tips"), "html", null, true);
                echo ")</span></p>
      <p class=\"help-block\">";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.domain_bind_tips"), "html", null, true);
                echo "</p>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <button type=\"button\" class=\"btn btn-sm btn-warning key-bind-btn\" data-url=\"";
                // line 25
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_bind");
                echo "\" data-loading-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.domain_bind.submiting"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.domain_bind"), "html", null, true);
                echo "</button>
    </div>
  </div>

  ";
            } else {
                // line 30
                echo "
    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.license_info"), "html", null, true);
                echo "</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "levelName", array()), "html", null, true);
                echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.license_domain"), "html", null, true);
                echo "</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static text-success\">";
                // line 41
                if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array()), 1)) : (1)) == 1)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomains", array()), "html", null, true);
                } else {
                    echo "<span class=\"license-domain\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomains", array()), ";"));
                    foreach ($context['_seq'] as $context["_key"] => $context["doman"]) {
                        echo twig_escape_filter($this->env, $context["doman"], "html", null, true);
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doman'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomainCount", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.num"), "html", null, true);
                    echo "</span>";
                }
                echo "</p>
        ";
                // line 43
                if (!twig_in_filter((isset($context["currentHost"]) ? $context["currentHost"] : $this->getContext($context, "currentHost")), twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomains", array()), ";"))) {
                    // line 44
                    echo "          <div class=\"alert alert-danger\">
            ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.licese_domain_not_match_tips", array("%currentHost%" => (isset($context["currentHost"]) ? $context["currentHost"] : $this->getContext($context, "currentHost")), "%EduSoho%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->removeCopyright("EduSoho"))), "html", null, true);
                    echo "
          </div>
        ";
                }
                // line 48
                echo "      </div>
    </div>



    ";
                // line 53
                if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "copyright", array()) && ($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "thirdCopyright", array()) != 2)) && twig_in_filter((isset($context["currentHost"]) ? $context["currentHost"] : $this->getContext($context, "currentHost")), twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomains", array()), ";")))) {
                    // line 54
                    echo "      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.copyright_name"), "html", null, true);
                    echo "</label>
        <div class=\"col-md-6\">
          <input id=\"field-copyrightName\" class=\"form-control\" type=\"text\" name=\"copyrightName\" value=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.name", ""), "html", null, true);
                    echo "\">
          <p class=\"help-block\">";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.copyright_name_hint"), "html", null, true);
                    echo "</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <button class=\"btn btn-primary save-copyright-btn\" data-url=\"";
                    // line 64
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_copyright");
                    echo "\" data-loading-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.copyright_save.submiting"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.copyright_save_btn"), "html", null, true);
                    echo "</button>
        </div>
      </div>
    ";
                } else {
                    // line 68
                    echo "    <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.copyright_info"), "html", null, true);
                    echo "</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.key_info.copyright_not_remove_hint"), "html", null, true);
                    echo "</p>
        </div>
      </div>
    ";
                }
                // line 75
                echo "



  ";
            }
            // line 80
            echo "
";
        }
        // line 82
        echo "
";
        
        $__internal_2c2bc8e81ecec9b994ed0736460f5b91b6bd56ef5fd310b804a055b2ac42ddad->leave($__internal_2c2bc8e81ecec9b994ed0736460f5b91b6bd56ef5fd310b804a055b2ac42ddad_prof);

    }

    public function getTemplateName()
    {
        return "admin/edu-cloud/key-license-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 82,  199 => 80,  192 => 75,  185 => 71,  180 => 69,  177 => 68,  166 => 64,  157 => 58,  153 => 57,  148 => 55,  145 => 54,  143 => 53,  136 => 48,  130 => 45,  127 => 44,  125 => 43,  117 => 42,  102 => 41,  97 => 39,  89 => 34,  84 => 32,  80 => 30,  68 => 25,  59 => 19,  53 => 18,  48 => 16,  44 => 14,  42 => 13,  39 => 12,  30 => 6,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if info.error|default(null) %}

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <div class=\"alert alert-danger key-error-alert\">
        {{ 'admin.edu_cloud.key_info.key_error_tips'|trans|copyright_less }}
      </div>
    </div>
  </div>

{% else %}

  {% if not info.licenseDomains|default(null) %}

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\">{{'admin.edu_cloud.key_info.license_domain'|trans}}</label>
    <div class=\"col-md-6\">
      <p class=\"form-control-static\">{{ app.request.server.get('HTTP_HOST') }} <span class=\"text-warning\">({{'admin.edu_cloud.key_info.not_license_tips'|trans}})</span></p>
      <p class=\"help-block\">{{'admin.edu_cloud.key_info.domain_bind_tips'|trans}}</p>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <button type=\"button\" class=\"btn btn-sm btn-warning key-bind-btn\" data-url=\"{{ path('admin_setting_cloud_key_bind') }}\" data-loading-text=\"{{'admin.edu_cloud.key_info.domain_bind.submiting'|trans}}\">{{'admin.edu_cloud.key_info.domain_bind'|trans}}</button>
    </div>
  </div>

  {% else %}

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">{{'admin.edu_cloud.key_info.license_info'|trans}}</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static\">{{ info.levelName }}</p>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">{{'admin.edu_cloud.key_info.license_domain'|trans}}</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static text-success\">{% if info.licenseDomainCount|default(1) == 1 %}{{ info.licenseDomains }}{% else %}<span class=\"license-domain\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{% for doman in info.licenseDomains|split(';') %}{{doman}}
        {% endfor %}\">{{info.licenseDomainCount}}{{ 'site.data.num'|trans }}</span>{% endif %}</p>
        {% if currentHost not in info.licenseDomains|split(';') %}
          <div class=\"alert alert-danger\">
            {{'admin.edu_cloud.key_info.licese_domain_not_match_tips'|trans({'%currentHost%':currentHost,'%EduSoho%': 'EduSoho'|copyright_less})}}
          </div>
        {% endif %}
      </div>
    </div>



    {% if info.copyright and info.thirdCopyright != 2 and currentHost in info.licenseDomains|split(';')%}
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">{{'admin.edu_cloud.key_info.copyright_name'|trans}}</label>
        <div class=\"col-md-6\">
          <input id=\"field-copyrightName\" class=\"form-control\" type=\"text\" name=\"copyrightName\" value=\"{{ setting('copyright.name', '') }}\">
          <p class=\"help-block\">{{'admin.edu_cloud.key_info.copyright_name_hint'|trans}}</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <button class=\"btn btn-primary save-copyright-btn\" data-url=\"{{ path('admin_setting_cloud_key_copyright') }}\" data-loading-text=\"{{'admin.edu_cloud.key_info.copyright_save.submiting'|trans}}\">{{'admin.edu_cloud.key_info.copyright_save_btn'|trans}}</button>
        </div>
      </div>
    {% else %}
    <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">{{'admin.edu_cloud.key_info.copyright_info'|trans}}</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">{{'admin.edu_cloud.key_info.copyright_not_remove_hint'|trans}}</p>
        </div>
      </div>
    {% endif %}




  {% endif %}

{% endif %}

", "admin/edu-cloud/key-license-info.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\edu-cloud\\key-license-info.html.twig");
    }
}
