<?php

/* my/teaching/course-set-list.html.twig */
class __TwigTemplate_511af2dfd0ff75d8e18d2fd64c784d7891822ca2d2b3b37197e4a8d720947a26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/header.html.twig", "my/teaching/course-set-list.html.twig", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'coursesetImg' => array($this, 'block_coursesetImg'),
            'coursesetTitle' => array($this, 'block_coursesetTitle'),
            'courseTitle' => array($this, 'block_courseTitle'),
            'courseType' => array($this, 'block_courseType'),
            'btn' => array($this, 'block_btn'),
            'close' => array($this, 'block_close'),
            'fold' => array($this, 'block_fold'),
            'unfold' => array($this, 'block_unfold'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4f6d7f99deee93213e7ac74909363ee12c09943a21de9e83b794ea5bb00a608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f6d7f99deee93213e7ac74909363ee12c09943a21de9e83b794ea5bb00a608->enter($__internal_b4f6d7f99deee93213e7ac74909363ee12c09943a21de9e83b794ea5bb00a608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/teaching/course-set-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f6d7f99deee93213e7ac74909363ee12c09943a21de9e83b794ea5bb00a608->leave($__internal_b4f6d7f99deee93213e7ac74909363ee12c09943a21de9e83b794ea5bb00a608_prof);

    }

    // line 3
    public function block_js($context, array $blocks = array())
    {
        $__internal_c948bba3e50ff263f391a83d7fc947ead4f471e84eb744d2bc9cec0c3fd57727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c948bba3e50ff263f391a83d7fc947ead4f471e84eb744d2bc9cec0c3fd57727->enter($__internal_c948bba3e50ff263f391a83d7fc947ead4f471e84eb744d2bc9cec0c3fd57727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_c948bba3e50ff263f391a83d7fc947ead4f471e84eb744d2bc9cec0c3fd57727->leave($__internal_c948bba3e50ff263f391a83d7fc947ead4f471e84eb744d2bc9cec0c3fd57727_prof);

    }

    // line 6
    public function block_coursesetImg($context, array $blocks = array())
    {
        $__internal_dd38aed4708f2f22eea71cb84bdbae005331f0e5992fe4219d6706835094d149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd38aed4708f2f22eea71cb84bdbae005331f0e5992fe4219d6706835094d149->enter($__internal_dd38aed4708f2f22eea71cb84bdbae005331f0e5992fe4219d6706835094d149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "coursesetImg"));

        // line 7
        echo "  <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "redirect_path", array()), "html", null, true);
        echo "\">
    <img class=\"courseset-manage-header__img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "large"), "courseSet.png"), "html", null, true);
        echo "\" /> <!-- courseSet.largePicture -->
  </a>
";
        
        $__internal_dd38aed4708f2f22eea71cb84bdbae005331f0e5992fe4219d6706835094d149->leave($__internal_dd38aed4708f2f22eea71cb84bdbae005331f0e5992fe4219d6706835094d149_prof);

    }

    // line 12
    public function block_coursesetTitle($context, array $blocks = array())
    {
        $__internal_42508c7cc66692b5cb2a896efcb56820e22045a4469d4945300cde1d4c895d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42508c7cc66692b5cb2a896efcb56820e22045a4469d4945300cde1d4c895d75->enter($__internal_42508c7cc66692b5cb2a896efcb56820e22045a4469d4945300cde1d4c895d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "coursesetTitle"));

        // line 13
        echo "  <a class=\"cd-link-major\" target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "redirect_path", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_42508c7cc66692b5cb2a896efcb56820e22045a4469d4945300cde1d4c895d75->leave($__internal_42508c7cc66692b5cb2a896efcb56820e22045a4469d4945300cde1d4c895d75_prof);

    }

    // line 16
    public function block_courseTitle($context, array $blocks = array())
    {
        $__internal_91c7d474e31bb5def1f6c0e335708b9e99b12a93aec2277d02ae81aa404980af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c7d474e31bb5def1f6c0e335708b9e99b12a93aec2277d02ae81aa404980af->enter($__internal_91c7d474e31bb5def1f6c0e335708b9e99b12a93aec2277d02ae81aa404980af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courseTitle"));

        // line 17
        echo "  ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "courseNum", array()), 0)) : (0)), "html", null, true);
        echo "
";
        
        $__internal_91c7d474e31bb5def1f6c0e335708b9e99b12a93aec2277d02ae81aa404980af->leave($__internal_91c7d474e31bb5def1f6c0e335708b9e99b12a93aec2277d02ae81aa404980af_prof);

    }

    // line 20
    public function block_courseType($context, array $blocks = array())
    {
        $__internal_73b4e7333918d573c46dab7d2c3d5bafea3f100a8509b858c110d04b5f43a7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b4e7333918d573c46dab7d2c3d5bafea3f100a8509b858c110d04b5f43a7f1->enter($__internal_73b4e7333918d573c46dab7d2c3d5bafea3f100a8509b858c110d04b5f43a7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courseType"));

        
        $__internal_73b4e7333918d573c46dab7d2c3d5bafea3f100a8509b858c110d04b5f43a7f1->leave($__internal_73b4e7333918d573c46dab7d2c3d5bafea3f100a8509b858c110d04b5f43a7f1_prof);

    }

    // line 23
    public function block_btn($context, array $blocks = array())
    {
        $__internal_14523fd789abd7ca5470997fa503aeb1d567f026d20deea322a5c3bc9e5e6f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14523fd789abd7ca5470997fa503aeb1d567f026d20deea322a5c3bc9e5e6f31->enter($__internal_14523fd789abd7ca5470997fa503aeb1d567f026d20deea322a5c3bc9e5e6f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btn"));

        // line 24
        echo "  <a class=\"cd-btn cd-btn-ghost-primary cd-mr16\" target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "redirect_path", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.manage_btn"), "html", null, true);
        echo "</a>
  ";
        // line 25
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) != "published")) {
            // line 26
            echo "    <a class=\"cd-btn cd-btn-ghost-default\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()), "previewAs" => "guest")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.preview.course"), "html", null, true);
            echo "</a>
  ";
        } else {
            // line 28
            echo "    <a class=\"cd-btn cd-btn-ghost-default\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.watch"), "html", null, true);
            echo "</a>
  ";
        }
        
        $__internal_14523fd789abd7ca5470997fa503aeb1d567f026d20deea322a5c3bc9e5e6f31->leave($__internal_14523fd789abd7ca5470997fa503aeb1d567f026d20deea322a5c3bc9e5e6f31_prof);

    }

    // line 32
    public function block_close($context, array $blocks = array())
    {
        $__internal_c6d12a57999e859a6a5f6edc6e26e48af6ed5061ebda74370d137970714a6042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d12a57999e859a6a5f6edc6e26e48af6ed5061ebda74370d137970714a6042->enter($__internal_c6d12a57999e859a6a5f6edc6e26e48af6ed5061ebda74370d137970714a6042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "close"));

        
        $__internal_c6d12a57999e859a6a5f6edc6e26e48af6ed5061ebda74370d137970714a6042->leave($__internal_c6d12a57999e859a6a5f6edc6e26e48af6ed5061ebda74370d137970714a6042_prof);

    }

    // line 35
    public function block_fold($context, array $blocks = array())
    {
        $__internal_9206976345b834bd6ade1b0f2ff008bc1a12bcc37579d039a693f7579bfc1542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9206976345b834bd6ade1b0f2ff008bc1a12bcc37579d039a693f7579bfc1542->enter($__internal_9206976345b834bd6ade1b0f2ff008bc1a12bcc37579d039a693f7579bfc1542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fold"));

        
        $__internal_9206976345b834bd6ade1b0f2ff008bc1a12bcc37579d039a693f7579bfc1542->leave($__internal_9206976345b834bd6ade1b0f2ff008bc1a12bcc37579d039a693f7579bfc1542_prof);

    }

    // line 36
    public function block_unfold($context, array $blocks = array())
    {
        $__internal_6cd530eb29f639c67fc6a64400da44796e8af32c3f141f90a2f02ee056c80c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd530eb29f639c67fc6a64400da44796e8af32c3f141f90a2f02ee056c80c52->enter($__internal_6cd530eb29f639c67fc6a64400da44796e8af32c3f141f90a2f02ee056c80c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "unfold"));

        
        $__internal_6cd530eb29f639c67fc6a64400da44796e8af32c3f141f90a2f02ee056c80c52->leave($__internal_6cd530eb29f639c67fc6a64400da44796e8af32c3f141f90a2f02ee056c80c52_prof);

    }

    public function getTemplateName()
    {
        return "my/teaching/course-set-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 36,  166 => 35,  155 => 32,  142 => 28,  134 => 26,  132 => 25,  125 => 24,  119 => 23,  108 => 20,  98 => 17,  92 => 16,  80 => 13,  74 => 12,  64 => 8,  59 => 7,  53 => 6,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'courseset-manage/header.html.twig' %}

{% block js %}
{% endblock %}

{% block coursesetImg %}
  <a target=\"_blank\" href=\"{{ courseSet.redirect_path }}\">
    <img class=\"courseset-manage-header__img\" src=\"{{ filepath(course_set_cover(courseSet, 'large'), 'courseSet.png') }}\" /> <!-- courseSet.largePicture -->
  </a>
{% endblock %}

{% block coursesetTitle %}
  <a class=\"cd-link-major\" target=\"_blank\" href=\"{{ courseSet.redirect_path }}\">{{ courseSet.title }}</a>
{% endblock %}

{% block courseTitle %}
  {{ courseSet.courseNum|default(0) }}
{% endblock %}

{% block courseType %}
{% endblock %}

{% block btn %}
  <a class=\"cd-btn cd-btn-ghost-primary cd-mr16\" target=\"_blank\" href=\"{{ courseSet.redirect_path }}\">{{ 'course.manage_btn'|trans }}</a>
  {% if courseSet.status != 'published' %}
    <a class=\"cd-btn cd-btn-ghost-default\" target=\"_blank\" href=\"{{ path('course_show', {id: courseSet.defaultCourseId, 'previewAs':'guest'}) }}\">{{ 'course.preview.course'|trans }}</a>
  {% else %}
    <a class=\"cd-btn cd-btn-ghost-default\" target=\"_blank\" href=\"{{ path('course_show', {id: courseSet.defaultCourseId}) }}\">{{'my.learning.course.watch'|trans}}</a>
  {% endif %}
{% endblock %}

{% block close %}
{% endblock %}

{% block fold %}{% endblock %}
{% block unfold %}{% endblock %}
", "my/teaching/course-set-list.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\teaching\\course-set-list.html.twig");
    }
}
