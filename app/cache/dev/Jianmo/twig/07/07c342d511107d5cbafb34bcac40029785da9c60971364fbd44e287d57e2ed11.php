<?php

/* classroom-manage/layout.html.twig */
class __TwigTemplate_d213c151b83f1c40c9df0c7de5b97fb91b3f5734b14f91c489240bdd3e918ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "classroom-manage/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db39c4ef8da4835c380b496ba2cdace079917c410f0fd3261d650f9e05f98f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db39c4ef8da4835c380b496ba2cdace079917c410f0fd3261d650f9e05f98f65->enter($__internal_db39c4ef8da4835c380b496ba2cdace079917c410f0fd3261d650f9e05f98f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classroom-manage/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db39c4ef8da4835c380b496ba2cdace079917c410f0fd3261d650f9e05f98f65->leave($__internal_db39c4ef8da4835c380b496ba2cdace079917c410f0fd3261d650f9e05f98f65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e7f8dae46144db1b114b5a7fbc347ce6abbbd848c3e5677ffda88328dd7b6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7f8dae46144db1b114b5a7fbc347ce6abbbd848c3e5677ffda88328dd7b6e2->enter($__internal_3e7f8dae46144db1b114b5a7fbc347ce6abbbd848c3e5677ffda88328dd7b6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_3e7f8dae46144db1b114b5a7fbc347ce6abbbd848c3e5677ffda88328dd7b6e2->leave($__internal_3e7f8dae46144db1b114b5a7fbc347ce6abbbd848c3e5677ffda88328dd7b6e2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_12fec5dede3eceeb2d1196dbf28f728997bf57817bd3604f5cc4ea9ec007cdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fec5dede3eceeb2d1196dbf28f728997bf57817bd3604f5cc4ea9ec007cdf1->enter($__internal_12fec5dede3eceeb2d1196dbf28f728997bf57817bd3604f5cc4ea9ec007cdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  ";
        $this->loadTemplate("classroom-manage/header.html.twig", "classroom-manage/layout.html.twig", 6)->display($context);
        // line 7
        echo "
  <div class=\"row\">
    <div class=\"col-md-3\">
      ";
        // line 10
        $this->displayBlock('side', $context, $blocks);
        // line 16
        echo "    </div>
    <div class=\"col-md-9\">
      ";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 19
        echo "    </div>
  </div>
";
        
        $__internal_12fec5dede3eceeb2d1196dbf28f728997bf57817bd3604f5cc4ea9ec007cdf1->leave($__internal_12fec5dede3eceeb2d1196dbf28f728997bf57817bd3604f5cc4ea9ec007cdf1_prof);

    }

    // line 10
    public function block_side($context, array $blocks = array())
    {
        $__internal_31abd338ec320fe7edd6aea78b2f0aaaad88df7de44ba0d035e6d1e28c90af7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31abd338ec320fe7edd6aea78b2f0aaaad88df7de44ba0d035e6d1e28c90af7d->enter($__internal_31abd338ec320fe7edd6aea78b2f0aaaad88df7de44ba0d035e6d1e28c90af7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 11
        echo "        ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), null)) : (null));
        // line 12
        echo "        <div class=\"sidenav\">
          ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Classroom/ClassroomManage:menu", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "sideNav" => (isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), "context" => $context)));
        echo "
        </div>
      ";
        
        $__internal_31abd338ec320fe7edd6aea78b2f0aaaad88df7de44ba0d035e6d1e28c90af7d->leave($__internal_31abd338ec320fe7edd6aea78b2f0aaaad88df7de44ba0d035e6d1e28c90af7d_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_6fa50082e414afa37fffffdf32403684c0fb675f5b252ed5c3aaed9df532161d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa50082e414afa37fffffdf32403684c0fb675f5b252ed5c3aaed9df532161d->enter($__internal_6fa50082e414afa37fffffdf32403684c0fb675f5b252ed5c3aaed9df532161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6fa50082e414afa37fffffdf32403684c0fb675f5b252ed5c3aaed9df532161d->leave($__internal_6fa50082e414afa37fffffdf32403684c0fb675f5b252ed5c3aaed9df532161d_prof);

    }

    public function getTemplateName()
    {
        return "classroom-manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  95 => 13,  92 => 12,  89 => 11,  83 => 10,  74 => 19,  72 => 18,  68 => 16,  66 => 10,  61 => 7,  58 => 6,  52 => 5,  37 => 3,  11 => 1,);
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

{% block title %}{{ setting('classroom.name')|default(\"classroom\"|trans) }}{{'classroom.manage'|trans}} - {{ parent() }}{% endblock %}

{% block content %}
  {% include ('classroom-manage/header.html.twig') %}

  <div class=\"row\">
    <div class=\"col-md-3\">
      {% block side %}
        {% set side_nav = side_nav|default(null) %}
        <div class=\"sidenav\">
          {{ render(controller('AppBundle:Classroom/ClassroomManage:menu',{classroom:classroom,sideNav:side_nav, context: _context})) }}
        </div>
      {% endblock %}
    </div>
    <div class=\"col-md-9\">
      {% block main %}{% endblock %}
    </div>
  </div>
{% endblock %}", "classroom-manage/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\classroom-manage\\layout.html.twig");
    }
}
