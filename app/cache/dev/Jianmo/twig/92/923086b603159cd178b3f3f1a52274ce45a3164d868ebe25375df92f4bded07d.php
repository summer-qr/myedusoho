<?php

/* admin/default/cloud-notice.html.twig */
class __TwigTemplate_cb176a4637d771368e86bedb222bc674802ca690009a4eb7b74708363d14954c extends Twig_Template
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
        $__internal_a85f947fa566528a3dc31c054141a2a8da9a274b9f7670ca249d9212c4fc21f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85f947fa566528a3dc31c054141a2a8da9a274b9f7670ca249d9212c4fc21f7->enter($__internal_a85f947fa566528a3dc31c054141a2a8da9a274b9f7670ca249d9212c4fc21f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/cloud-notice.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/default/cloud-notice.html.twig", 1);
        // line 2
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial()) {
            // line 3
            echo "  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  <div class=\"col-md-12\">
    <div class=\"alert alert-warning\">
      ";
            // line 9
            if ($this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "endTime", array(), "any", true, true)) {
                // line 10
                echo "        ";
                $context["endTime"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : $this->getContext($context, "trialTime")), "endTime", array()), "Y-m-d");
                echo " 
      ";
            } else {
                // line 11
                echo " 
        ";
                // line 12
                $context["endTime"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.cloud_notice.unknown_time");
                // line 13
                echo "      ";
            }
            // line 14
            echo "      
      ";
            // line 15
            if ($this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "remainDays", array(), "any", true, true)) {
                // line 16
                echo "        ";
                $context["remainDays"] = $this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : $this->getContext($context, "trialTime")), "remainDays", array());
                // line 17
                echo "      ";
            } else {
                // line 18
                echo "        ";
                $context["remainDays"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.data.unknown");
                // line 19
                echo "      ";
            }
            // line 20
            echo "
      ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.cloud_notice", array("%endTime%" => (("<span style=\"color:#fed032;\">" . (isset($context["endTime"]) ? $context["endTime"] : $this->getContext($context, "endTime"))) . "</span>"), "%remainDays%" => (("<span style=\"color:#fed032;\">" . (isset($context["remainDays"]) ? $context["remainDays"] : $this->getContext($context, "remainDays"))) . "</span>")));
            echo "
      <a id=\"BizQQWPA\" href=\"javascript:\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\" style='text-decoration:none;'>QQ：800023860 </a>。
    </div>
  </div>

  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
";
        } else {
            // line 30
            echo "    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.admins_announcements_title"), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"panel-body\">
          <ul class=\"admin-notice-list\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : $this->getContext($context, "notices")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 38
                echo "            <li>
              <a class=\"link-primary\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "detailUrl", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "content", array()), "html", null, true);
                echo "</a>
              ";
                // line 41
                echo "            </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 43
                echo "              <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.admins_announcements_empty"), "html", null, true);
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "          </ul>
        </div>
      </div>
    </div>
";
        }
        
        $__internal_a85f947fa566528a3dc31c054141a2a8da9a274b9f7670ca249d9212c4fc21f7->leave($__internal_a85f947fa566528a3dc31c054141a2a8da9a274b9f7670ca249d9212c4fc21f7_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  114 => 43,  108 => 41,  102 => 39,  99 => 38,  94 => 37,  87 => 33,  82 => 30,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  53 => 15,  50 => 14,  47 => 13,  45 => 12,  42 => 11,  36 => 10,  34 => 9,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"admin/macro.html.twig\" as admin_macro %}
{% if is_trial() %}
  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  <div class=\"col-md-12\">
    <div class=\"alert alert-warning\">
      {% if trialTime.endTime is defined %}
        {% set endTime = trialTime.endTime|date(\"Y-m-d\") %} 
      {% else %} 
        {% set endTime = 'admin.homepage.cloud_notice.unknown_time'|trans %}
      {% endif %}
      
      {% if trialTime.remainDays is defined %}
        {% set remainDays = trialTime.remainDays %}
      {% else %}
        {% set remainDays = 'site.data.unknown'|trans %}
      {% endif %}

      {{ 'admin.homepage.cloud_notice'|trans({'%endTime%':'<span style=\"color:#fed032;\">' ~ endTime ~ '</span>', '%remainDays%': '<span style=\"color:#fed032;\">' ~ remainDays ~ '</span>'})|raw }}
      <a id=\"BizQQWPA\" href=\"javascript:\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\" style='text-decoration:none;'>QQ：800023860 </a>。
    </div>
  </div>

  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
{% else %}
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">{{'admin.homepage.admins_announcements_title'|trans}}</h3>
        </div>
        <div class=\"panel-body\">
          <ul class=\"admin-notice-list\">
          {% for notice in notices %}
            <li>
              <a class=\"link-primary\" href=\"{{notice.detailUrl}}\" target=\"_blank\">{{notice.content}}</a>
              {# <span>{{notice.createdTime|date(\"Y-m-d H:i:s\")}}</span>#}
            </li>
            {% else %}
              <div class=\"empty\">{{ 'admin.homepage.admins_announcements_empty'|trans }}</div>
          {% endfor %}
          </ul>
        </div>
      </div>
    </div>
{% endif %}", "admin/default/cloud-notice.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\default\\cloud-notice.html.twig");
    }
}
