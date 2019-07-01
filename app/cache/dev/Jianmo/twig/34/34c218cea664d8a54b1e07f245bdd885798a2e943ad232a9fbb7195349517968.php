<?php

/* admin/course-set/tab.html.twig */
class __TwigTemplate_c0603bfa892796724ecb5d5db2489e3c2dee718344feff8e8fc8f4a9b63f5042 extends Twig_Template
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
        $__internal_e75042c77db7c840179aae61f28af13af71de3cf90f4ec854b1946068630afc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75042c77db7c840179aae61f28af13af71de3cf90f4ec854b1946068630afc0->enter($__internal_e75042c77db7c840179aae61f28af13af71de3cf90f4ec854b1946068630afc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/course-set/tab.html.twig"));

        // line 1
        echo "<div class=\"btn-group\">

    <a href=\" ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course_set", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.normal_course"), "html", null, true);
        echo "</a>

    <a href=\" ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course_set", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.classroom_course", array("%classroomName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getClassroomName(), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
        echo "</a>

    ";
        // line 7
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip")) {
            // line 8
            echo "        <a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course_set", array("filter" => "vip"));
            echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "vip")) {
                echo "btn-primary";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_course"), "html", null, true);
            echo "</a>
    ";
        }
        // line 10
        echo "</div>";
        
        $__internal_e75042c77db7c840179aae61f28af13af71de3cf90f4ec854b1946068630afc0->leave($__internal_e75042c77db7c840179aae61f28af13af71de3cf90f4ec854b1946068630afc0_prof);

    }

    public function getTemplateName()
    {
        return "admin/course-set/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  50 => 8,  48 => 7,  37 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"btn-group\">

    <a href=\" {{ url('admin_course_set', {filter: 'normal'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if filter == 'normal'%}btn-primary{% endif %}\">{{ 'admin.course_manage.manage.normal_course'|trans }}</a>

    <a href=\" {{ url('admin_course_set', {filter: 'classroom'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if filter == 'classroom' %}btn-primary{% endif %}\">{{ 'admin.course_manage.manage.classroom_course'|trans({'%classroomName%':get_classroom_name() |default('site.default.classroom'|trans) }) }}</a>

    {% if is_plugin_installed('Vip') %}
        <a href=\" {{ url('admin_course_set', {filter: 'vip'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if filter == 'vip' %}btn-primary{% endif %}\">{{'admin.course_manage.manage.vip_course'|trans }}</a>
    {% endif %}
</div>", "admin/course-set/tab.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\course-set\\tab.html.twig");
    }
}
