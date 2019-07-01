<?php

/* my/my-teaching.html.twig */
class __TwigTemplate_0b26ae57a9143c04a51cd1581de7532f89d5da872f7aecef7cebc64c9d383a72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("v2/layout.html.twig", "my/my-teaching.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'main' => array($this, 'block_main'),
            'main_mobile' => array($this, 'block_main_mobile'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "v2/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faf0e6fca1b490621a85805eaf18f2d5b2f47d3bd41154f7ddfa9104b6f6bf68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf0e6fca1b490621a85805eaf18f2d5b2f47d3bd41154f7ddfa9104b6f6bf68->enter($__internal_faf0e6fca1b490621a85805eaf18f2d5b2f47d3bd41154f7ddfa9104b6f6bf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/my-teaching.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf0e6fca1b490621a85805eaf18f2d5b2f47d3bd41154f7ddfa9104b6f6bf68->leave($__internal_faf0e6fca1b490621a85805eaf18f2d5b2f47d3bd41154f7ddfa9104b6f6bf68_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d551d45fd69f1bc9afe653b377096ed44486a6a3e78dd61a2620af0cb1a73c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d551d45fd69f1bc9afe653b377096ed44486a6a3e78dd61a2620af0cb1a73c9e->enter($__internal_d551d45fd69f1bc9afe653b377096ed44486a6a3e78dd61a2620af0cb1a73c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.menu_heading"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d551d45fd69f1bc9afe653b377096ed44486a6a3e78dd61a2620af0cb1a73c9e->leave($__internal_d551d45fd69f1bc9afe653b377096ed44486a6a3e78dd61a2620af0cb1a73c9e_prof);

    }

    // line 7
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_8da5b7a227d4899d898391f3e638134ec1e29833449c849fb7bde39c858db5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da5b7a227d4899d898391f3e638134ec1e29833449c849fb7bde39c858db5a0->enter($__internal_8da5b7a227d4899d898391f3e638134ec1e29833449c849fb7bde39c858db5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 8
        echo "  ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 15
        echo "  <div class=\"cd-container\">
    <div class=\"cd-content my-teaching-body\">
      ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:My/User:avatarAlert"));
        echo "
      ";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 20
        echo "
      ";
        // line 21
        $this->displayBlock('main_mobile', $context, $blocks);
        // line 22
        echo "    </div>
  </div>
";
        
        $__internal_8da5b7a227d4899d898391f3e638134ec1e29833449c849fb7bde39c858db5a0->leave($__internal_8da5b7a227d4899d898391f3e638134ec1e29833449c849fb7bde39c858db5a0_prof);

    }

    // line 8
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_6c1721290574f3f089d007bdaad39251e384088a7acb99cd6e6a28f5da81706f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1721290574f3f089d007bdaad39251e384088a7acb99cd6e6a28f5da81706f->enter($__internal_6c1721290574f3f089d007bdaad39251e384088a7acb99cd6e6a28f5da81706f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        // line 9
        echo "    <div class=\"my-header-section\">
      <div class=\"cd-container\">
        ";
        // line 11
        $this->loadTemplate("my/navbar.html.twig", "my/my-teaching.html.twig", 11)->display($context);
        // line 12
        echo "      </div>
    </div>
  ";
        
        $__internal_6c1721290574f3f089d007bdaad39251e384088a7acb99cd6e6a28f5da81706f->leave($__internal_6c1721290574f3f089d007bdaad39251e384088a7acb99cd6e6a28f5da81706f_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_2f4fa8543173e9c9c829d0ea06f520fdaf9a43273656c103b94efd16689e3bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4fa8543173e9c9c829d0ea06f520fdaf9a43273656c103b94efd16689e3bc6->enter($__internal_2f4fa8543173e9c9c829d0ea06f520fdaf9a43273656c103b94efd16689e3bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "      ";
        
        $__internal_2f4fa8543173e9c9c829d0ea06f520fdaf9a43273656c103b94efd16689e3bc6->leave($__internal_2f4fa8543173e9c9c829d0ea06f520fdaf9a43273656c103b94efd16689e3bc6_prof);

    }

    // line 21
    public function block_main_mobile($context, array $blocks = array())
    {
        $__internal_f99e6963eee40b5590fde4e28d046f190139fbd7443d887b8524698900b9e56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99e6963eee40b5590fde4e28d046f190139fbd7443d887b8524698900b9e56e->enter($__internal_f99e6963eee40b5590fde4e28d046f190139fbd7443d887b8524698900b9e56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_mobile"));

        
        $__internal_f99e6963eee40b5590fde4e28d046f190139fbd7443d887b8524698900b9e56e->leave($__internal_f99e6963eee40b5590fde4e28d046f190139fbd7443d887b8524698900b9e56e_prof);

    }

    public function getTemplateName()
    {
        return "my/my-teaching.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 21,  116 => 19,  110 => 18,  101 => 12,  99 => 11,  95 => 9,  89 => 8,  80 => 22,  78 => 21,  75 => 20,  73 => 18,  69 => 17,  65 => 15,  62 => 8,  56 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'v2/layout.html.twig' %}

{% block title %}
  {{ 'my.teaching.menu_heading'|trans }} - {{ parent() }}
{% endblock %}

{% block full_content %}
  {% block top_content %}
    <div class=\"my-header-section\">
      <div class=\"cd-container\">
        {% include 'my/navbar.html.twig' %}
      </div>
    </div>
  {% endblock %}
  <div class=\"cd-container\">
    <div class=\"cd-content my-teaching-body\">
      {{ render(controller('AppBundle:My/User:avatarAlert')) }}
      {% block main %}
      {% endblock %}

      {% block main_mobile %}{% endblock %}
    </div>
  </div>
{% endblock %}", "my/my-teaching.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\my-teaching.html.twig");
    }
}
