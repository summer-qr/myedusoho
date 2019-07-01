<?php

/* admin/open-course/index.html.twig */
class __TwigTemplate_39afbb2b92271d004a1e0b99c0bd6c49f0c203f5ec1a860862a0d4109433c514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/open-course/index.html.twig", 1);
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
        $__internal_5a7c7cc11760cbc099eecdf34fe9f2111f406422ff48ef82c5b54bfb55227123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7c7cc11760cbc099eecdf34fe9f2111f406422ff48ef82c5b54bfb55227123->enter($__internal_5a7c7cc11760cbc099eecdf34fe9f2111f406422ff48ef82c5b54bfb55227123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/open-course/index.html.twig"));

        // line 3
        $context["menu"] = "admin_open_course";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 7
        $context["script_arguments"] = array("tagMatchUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7c7cc11760cbc099eecdf34fe9f2111f406422ff48ef82c5b54bfb55227123->leave($__internal_5a7c7cc11760cbc099eecdf34fe9f2111f406422ff48ef82c5b54bfb55227123_prof);

    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        $__internal_ba5d0286dd334282b585d14c83701e06903d7a77516b170b65bf094f8ef7923e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5d0286dd334282b585d14c83701e06903d7a77516b170b65bf094f8ef7923e->enter($__internal_ba5d0286dd334282b585d14c83701e06903d7a77516b170b65bf094f8ef7923e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "  ";
        $this->loadTemplate("admin/open-course/course-search-form.html.twig", "admin/open-course/index.html.twig", 12)->display(array_merge($context, array("actionUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_course"), "showStatusSelect" => 1)));
        // line 13
        echo "  
  ";
        // line 14
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled", 0) || (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled", 0) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_day") == "off")) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_live_play_one_hour") == "off")))) {
            // line 15
            echo "    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.open_cloud_sms_tips"), "html", null, true);
            echo "&nbsp;&nbsp;";
            if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.open_cloud_sms", array("%cloudSmsUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_sms")));
            }
            echo "</div>
  ";
        }
        // line 17
        echo "
  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      ";
        // line 21
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 22
            echo "        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      ";
        }
        // line 24
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.number_th"), "html", null, true);
        echo "</th>
      <th width=\"40%\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.name_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.status_th"), "html", null, true);
        echo "</th>
      ";
        // line 27
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/open-course/index.html.twig", 27)->display($context);
        // line 28
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.creator_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.operater_th"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 34
            echo "        ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 35
            echo "        ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 36
            echo "        ";
            $this->loadTemplate("admin/open-course/tr.html.twig", "admin/open-course/index.html.twig", 36)->display($context);
            // line 37
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 38
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.empty"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
  </table>
  ";
        // line 42
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/open-course/index.html.twig", 42)->display(array_merge($context, array("module" => "openCourse", "formId" => "course-table")));
        // line 43
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_ba5d0286dd334282b585d14c83701e06903d7a77516b170b65bf094f8ef7923e->leave($__internal_ba5d0286dd334282b585d14c83701e06903d7a77516b170b65bf094f8ef7923e_prof);

    }

    public function getTemplateName()
    {
        return "admin/open-course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 43,  157 => 42,  153 => 40,  144 => 38,  131 => 37,  128 => 36,  125 => 35,  122 => 34,  104 => 33,  97 => 29,  92 => 28,  90 => 27,  86 => 26,  82 => 25,  77 => 24,  73 => 22,  71 => 21,  65 => 17,  55 => 15,  53 => 14,  50 => 13,  47 => 12,  41 => 11,  34 => 1,  32 => 7,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_open_course' %}

{% set script_controller = 'course/manage' %}
{%
  set script_arguments = {
    tagMatchUrl: path('tag_match')
  }
%}
{% block main %}
  {% include 'admin/open-course/course-search-form.html.twig' with {actionUrl:path('admin_open_course'),showStatusSelect:1} %}
  
  {% if not setting('cloud_sms.sms_enabled',0) or (setting('cloud_sms.sms_enabled',0) and setting('cloud_sms.sms_live_play_one_day') == 'off' and setting('cloud_sms.sms_live_play_one_hour') == 'off') %}
    <div class=\"alert alert-warning\">{{ 'admin.open_manage.manage.open_cloud_sms_tips'|trans }}&nbsp;&nbsp;{% if 'ROLE_SUPER_ADMIN' in app.user.roles%}{{ 'admin.open_manage.manage.open_cloud_sms'|trans({'%cloudSmsUrl%': path('admin_edu_cloud_sms')})|raw }}{% endif %}</div>
  {% endif %}

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      {% if setting('magic.enable_org','0') %}
        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      {% endif %}
      <th>{{ 'admin.open_manage.manage.number_th'|trans }}</th>
      <th width=\"40%\">{{ 'admin.open_manage.manage.name_th'|trans }}</th>
      <th>{{ 'admin.open_manage.manage.status_th'|trans }}</th>
      {% include 'org/parts/table-thead-tr.html.twig' %}
      <th>{{ 'admin.open_manage.manage.creator_th'|trans }}</th>
      <th>{{ 'admin.open_manage.manage.operater_th'|trans }}</th>
    </tr>
    </thead>
    <tbody>
      {% for course in courses %}
        {% set user = users[course.userId]|default(null) %}
        {% set category = categories[course.categoryId]|default(null) %}
        {% include 'admin/open-course/tr.html.twig' %}
      {% else %}
        <tr><td colspan=\"20\"><div class=\"empty\">{{ 'admin.open_manage.empty'|trans }}</div></td></tr>
      {% endfor %}
    </tbody>
  </table>
  {% include 'org/batch-update-org-btn.html.twig' with {module:'openCourse', formId:'course-table'} %}
  {{ admin_macro.paginator(paginator) }}

{% endblock %}", "admin/open-course/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\open-course\\index.html.twig");
    }
}
