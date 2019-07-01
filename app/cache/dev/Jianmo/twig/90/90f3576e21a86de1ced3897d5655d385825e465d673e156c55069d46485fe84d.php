<?php

/* open-course-manage/liveOpen/create-show.html.twig */
class __TwigTemplate_a2e1599d1f014f586c91dcf51ee14a1285cfc52f61a9d6ca9291b8a32191da7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/live/base-live-create-show.html.twig", "open-course-manage/liveOpen/create-show.html.twig", 1);
        $this->blocks = array(
            'type_icon' => array($this, 'block_type_icon'),
            'type_title' => array($this, 'block_type_title'),
            'type_intro' => array($this, 'block_type_intro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/live/base-live-create-show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_716ae9af670387e4a87fe45bb27eb1872651c1049983c836a564e270460e9acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716ae9af670387e4a87fe45bb27eb1872651c1049983c836a564e270460e9acd->enter($__internal_716ae9af670387e4a87fe45bb27eb1872651c1049983c836a564e270460e9acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "open-course-manage/liveOpen/create-show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716ae9af670387e4a87fe45bb27eb1872651c1049983c836a564e270460e9acd->leave($__internal_716ae9af670387e4a87fe45bb27eb1872651c1049983c836a564e270460e9acd_prof);

    }

    // line 3
    public function block_type_icon($context, array $blocks = array())
    {
        $__internal_2e3e6bf933a52e193fda028a8d79d9511e922fb72321624e9e518bb200e283a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3e6bf933a52e193fda028a8d79d9511e922fb72321624e9e518bb200e283a6->enter($__internal_2e3e6bf933a52e193fda028a8d79d9511e922fb72321624e9e518bb200e283a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "type_icon"));

        // line 4
        echo "  <i class=\"es-icon es-icon-zhibokecheng2\"></i>
";
        
        $__internal_2e3e6bf933a52e193fda028a8d79d9511e922fb72321624e9e518bb200e283a6->leave($__internal_2e3e6bf933a52e193fda028a8d79d9511e922fb72321624e9e518bb200e283a6_prof);

    }

    // line 7
    public function block_type_title($context, array $blocks = array())
    {
        $__internal_c08c56c8dc489d3bed1bc5a7dc2e0b7f868f2470253476d07df42b888029afa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08c56c8dc489d3bed1bc5a7dc2e0b7f868f2470253476d07df42b888029afa3->enter($__internal_c08c56c8dc489d3bed1bc5a7dc2e0b7f868f2470253476d07df42b888029afa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "type_title"));

        // line 8
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course"), "html", null, true);
        echo "
";
        
        $__internal_c08c56c8dc489d3bed1bc5a7dc2e0b7f868f2470253476d07df42b888029afa3->leave($__internal_c08c56c8dc489d3bed1bc5a7dc2e0b7f868f2470253476d07df42b888029afa3_prof);

    }

    // line 11
    public function block_type_intro($context, array $blocks = array())
    {
        $__internal_cd00a8a38da1e9d67293ecf4271b99990eda4f999aec44226e40728063ab3ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd00a8a38da1e9d67293ecf4271b99990eda4f999aec44226e40728063ab3ef5->enter($__internal_cd00a8a38da1e9d67293ecf4271b99990eda4f999aec44226e40728063ab3ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "type_intro"));

        // line 12
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.tips"), "html", null, true);
        echo "
";
        
        $__internal_cd00a8a38da1e9d67293ecf4271b99990eda4f999aec44226e40728063ab3ef5->leave($__internal_cd00a8a38da1e9d67293ecf4271b99990eda4f999aec44226e40728063ab3ef5_prof);

    }

    public function getTemplateName()
    {
        return "open-course-manage/liveOpen/create-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  66 => 11,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'courseset-manage/live/base-live-create-show.html.twig' %}

{% block type_icon %}
  <i class=\"es-icon es-icon-zhibokecheng2\"></i>
{% endblock %}

{% block type_title %}
  {{ 'my.teaching.course_set.select_type.live_open_course'|trans }}
{% endblock %}

{% block type_intro %}
  {{ 'my.teaching.course_set.select_type.live_open_course.tips'|trans }}
{% endblock %}
", "open-course-manage/liveOpen/create-show.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\open-course-manage\\liveOpen\\create-show.html.twig");
    }
}
