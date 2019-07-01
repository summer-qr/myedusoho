<?php

/* v2/layout.html.twig */
class __TwigTemplate_6356a77bb8f32d273fb0b5d4bc896fb13f0fe59a7374f9e65e5e0d7b586122d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "v2/layout.html.twig", 1);
        $this->blocks = array(
            'full_content' => array($this, 'block_full_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
            'main_heading' => array($this, 'block_main_heading'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ce2ab53c5683d282110bdfd4c30ea90652061c0a4e31c1925233e8c5076047a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce2ab53c5683d282110bdfd4c30ea90652061c0a4e31c1925233e8c5076047a->enter($__internal_4ce2ab53c5683d282110bdfd4c30ea90652061c0a4e31c1925233e8c5076047a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "v2/layout.html.twig"));

        // line 3
        $context["bodyClass"] = "cd-design";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ce2ab53c5683d282110bdfd4c30ea90652061c0a4e31c1925233e8c5076047a->leave($__internal_4ce2ab53c5683d282110bdfd4c30ea90652061c0a4e31c1925233e8c5076047a_prof);

    }

    // line 5
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_33d14ff08d1c63df17d4d124adee22d8645c8fda49b3c5b01aa337e75e07c121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d14ff08d1c63df17d4d124adee22d8645c8fda49b3c5b01aa337e75e07c121->enter($__internal_33d14ff08d1c63df17d4d124adee22d8645c8fda49b3c5b01aa337e75e07c121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 6
        echo "  <div class=\"container cd-container\">
    <div class=\"cd-content\">
      ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 11
        echo "
      ";
        // line 12
        $this->displayBlock('main', $context, $blocks);
        // line 27
        echo "    </div>
  </div>
";
        
        $__internal_33d14ff08d1c63df17d4d124adee22d8645c8fda49b3c5b01aa337e75e07c121->leave($__internal_33d14ff08d1c63df17d4d124adee22d8645c8fda49b3c5b01aa337e75e07c121_prof);

    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4f2c8b7a9ffe5e6bbf88c2a2f2faab72fef9170fdf1223ad544fd265795b53ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2c8b7a9ffe5e6bbf88c2a2f2faab72fef9170fdf1223ad544fd265795b53ee->enter($__internal_4f2c8b7a9ffe5e6bbf88c2a2f2faab72fef9170fdf1223ad544fd265795b53ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 9
        echo "        ";
        $this->loadTemplate("v2/sidebar.html.twig", "v2/layout.html.twig", 9)->display(array_merge($context, array("side_nav" => ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), "")) : ("")))));
        // line 10
        echo "      ";
        
        $__internal_4f2c8b7a9ffe5e6bbf88c2a2f2faab72fef9170fdf1223ad544fd265795b53ee->leave($__internal_4f2c8b7a9ffe5e6bbf88c2a2f2faab72fef9170fdf1223ad544fd265795b53ee_prof);

    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        $__internal_f062c1b1cb6513c9e3515c36f75b3c53102ad843529e3c5dbc8e01136b519d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f062c1b1cb6513c9e3515c36f75b3c53102ad843529e3c5dbc8e01136b519d03->enter($__internal_f062c1b1cb6513c9e3515c36f75b3c53102ad843529e3c5dbc8e01136b519d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "        <div class=\"cd-main\">
          <div class=\"cd-main__heading\">
            ";
        // line 15
        $this->displayBlock('main_heading', $context, $blocks);
        // line 20
        echo "          </div>
          <div class=\"cd-main__body\">
            ";
        // line 22
        $this->displayBlock('main_body', $context, $blocks);
        // line 24
        echo "          </div>
        </div>
      ";
        
        $__internal_f062c1b1cb6513c9e3515c36f75b3c53102ad843529e3c5dbc8e01136b519d03->leave($__internal_f062c1b1cb6513c9e3515c36f75b3c53102ad843529e3c5dbc8e01136b519d03_prof);

    }

    // line 15
    public function block_main_heading($context, array $blocks = array())
    {
        $__internal_88311b07760b91679abe125726fa7689ddb74f80cbd78c65fe4a5894dc2a9b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88311b07760b91679abe125726fa7689ddb74f80cbd78c65fe4a5894dc2a9b86->enter($__internal_88311b07760b91679abe125726fa7689ddb74f80cbd78c65fe4a5894dc2a9b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_heading"));

        // line 16
        echo "              <div class=\"cd-main__title\">
                ";
        // line 17
        $this->displayBlock('page_title', $context, $blocks);
        // line 18
        echo "              </div>
            ";
        
        $__internal_88311b07760b91679abe125726fa7689ddb74f80cbd78c65fe4a5894dc2a9b86->leave($__internal_88311b07760b91679abe125726fa7689ddb74f80cbd78c65fe4a5894dc2a9b86_prof);

    }

    // line 17
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d35d44a4e57a411a3caf7c1e954b2fe67f51ef5845ec6d0924ff499d45d97345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35d44a4e57a411a3caf7c1e954b2fe67f51ef5845ec6d0924ff499d45d97345->enter($__internal_d35d44a4e57a411a3caf7c1e954b2fe67f51ef5845ec6d0924ff499d45d97345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_d35d44a4e57a411a3caf7c1e954b2fe67f51ef5845ec6d0924ff499d45d97345->leave($__internal_d35d44a4e57a411a3caf7c1e954b2fe67f51ef5845ec6d0924ff499d45d97345_prof);

    }

    // line 22
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_63e4e28647430d6c41fdca099006825823b8ffb60d140cdd4bcc4e9c9181cc28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e4e28647430d6c41fdca099006825823b8ffb60d140cdd4bcc4e9c9181cc28->enter($__internal_63e4e28647430d6c41fdca099006825823b8ffb60d140cdd4bcc4e9c9181cc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 23
        echo "            ";
        
        $__internal_63e4e28647430d6c41fdca099006825823b8ffb60d140cdd4bcc4e9c9181cc28->leave($__internal_63e4e28647430d6c41fdca099006825823b8ffb60d140cdd4bcc4e9c9181cc28_prof);

    }

    // line 31
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_9b69d9ab3372a403cdef9a52fb19369d61e3dc814d02000b9a306aa583fc5939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b69d9ab3372a403cdef9a52fb19369d61e3dc814d02000b9a306aa583fc5939->enter($__internal_9b69d9ab3372a403cdef9a52fb19369d61e3dc814d02000b9a306aa583fc5939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

        
        $__internal_9b69d9ab3372a403cdef9a52fb19369d61e3dc814d02000b9a306aa583fc5939->leave($__internal_9b69d9ab3372a403cdef9a52fb19369d61e3dc814d02000b9a306aa583fc5939_prof);

    }

    // line 34
    public function block_floatConsult($context, array $blocks = array())
    {
        $__internal_c191fa67a9de0d86db579a7f78acd0dcc2ba46cec4deb61329675d07cfc5902b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c191fa67a9de0d86db579a7f78acd0dcc2ba46cec4deb61329675d07cfc5902b->enter($__internal_c191fa67a9de0d86db579a7f78acd0dcc2ba46cec4deb61329675d07cfc5902b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "floatConsult"));

        
        $__internal_c191fa67a9de0d86db579a7f78acd0dcc2ba46cec4deb61329675d07cfc5902b->leave($__internal_c191fa67a9de0d86db579a7f78acd0dcc2ba46cec4deb61329675d07cfc5902b_prof);

    }

    public function getTemplateName()
    {
        return "v2/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 34,  156 => 31,  149 => 23,  143 => 22,  132 => 17,  124 => 18,  122 => 17,  119 => 16,  113 => 15,  104 => 24,  102 => 22,  98 => 20,  96 => 15,  92 => 13,  86 => 12,  79 => 10,  76 => 9,  70 => 8,  61 => 27,  59 => 12,  56 => 11,  54 => 8,  50 => 6,  44 => 5,  37 => 1,  35 => 3,  11 => 1,);
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

{% set bodyClass = 'cd-design' %}

{% block full_content %}
  <div class=\"container cd-container\">
    <div class=\"cd-content\">
      {% block sidebar %}
        {% include 'v2/sidebar.html.twig' with { side_nav: side_nav|default('') } %}
      {% endblock %}

      {% block main %}
        <div class=\"cd-main\">
          <div class=\"cd-main__heading\">
            {% block main_heading %}
              <div class=\"cd-main__title\">
                {% block page_title %}{% endblock %}
              </div>
            {% endblock %}
          </div>
          <div class=\"cd-main__body\">
            {% block main_body %}
            {% endblock %}
          </div>
        </div>
      {% endblock %}
    </div>
  </div>
{% endblock %}

{% block esBar %}
{% endblock %}

{% block floatConsult %}
{% endblock %}
", "v2/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\v2\\layout.html.twig");
    }
}
