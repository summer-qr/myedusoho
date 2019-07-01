<?php

/* mobile/footer-tool-bar.html.twig */
class __TwigTemplate_6428cfedaf1fcd83f0c12c9088fc70dc0ea75b15d41de56051d8586c011f5388 extends Twig_Template
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
        $__internal_4af5ab8dbfd50b40f248ff087886db99a6704dbb338a2183780c0affe238305a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af5ab8dbfd50b40f248ff087886db99a6704dbb338a2183780c0affe238305a->enter($__internal_4af5ab8dbfd50b40f248ff087886db99a6704dbb338a2183780c0affe238305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mobile/footer-tool-bar.html.twig"));

        // line 1
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 2
        if ((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile"))) {
            // line 3
            echo "<div class=\"footer-tool-bar\">
  <div class=\"";
            // line 4
            if (((isset($context["mobile_tool_bar"]) ? $context["mobile_tool_bar"] : $this->getContext($context, "mobile_tool_bar")) == "index")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
      <i class=\"es-icon es-icon-home1\"></i><br>
      ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
            echo "
    </a>
  </div>
  <div class=\"";
            // line 10
            if (((isset($context["mobile_tool_bar"]) ? $context["mobile_tool_bar"] : $this->getContext($context, "mobile_tool_bar")) == "course")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
            echo "\">
      <i class=\"es-icon es-icon-newshot\"></i><br>
      ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course"), "html", null, true);
            echo "
    </a>
  </div>
  <div class=\"";
            // line 16
            if (((isset($context["mobile_tool_bar"]) ? $context["mobile_tool_bar"] : $this->getContext($context, "mobile_tool_bar")) == "learning")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
            echo "\">
      <i class=\"es-icon es-icon-write\"></i><br>
      ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.learning"), "html", null, true);
            echo "
    </a>
  </div>
</div>
";
        }
        
        $__internal_4af5ab8dbfd50b40f248ff087886db99a6704dbb338a2183780c0affe238305a->leave($__internal_4af5ab8dbfd50b40f248ff087886db99a6704dbb338a2183780c0affe238305a_prof);

    }

    public function getTemplateName()
    {
        return "mobile/footer-tool-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  69 => 17,  63 => 16,  57 => 13,  52 => 11,  46 => 10,  40 => 7,  35 => 5,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set mobile = is_show_mobile_page() %}
{% if mobile %}
<div class=\"footer-tool-bar\">
  <div class=\"{% if mobile_tool_bar == 'index' %}active{% endif %}\">
    <a href=\"{{ path('homepage') }}\">
      <i class=\"es-icon es-icon-home1\"></i><br>
      {{ 'homepage'|trans }}
    </a>
  </div>
  <div class=\"{% if mobile_tool_bar == 'course' %}active{% endif %}\">
    <a href=\"{{ path('course_set_explore') }}\">
      <i class=\"es-icon es-icon-newshot\"></i><br>
      {{ 'course'|trans }}
    </a>
  </div>
  <div class=\"{% if mobile_tool_bar == 'learning' %}active{% endif %}\">
    <a href=\"{{ path('my_courses_learning') }}\">
      <i class=\"es-icon es-icon-write\"></i><br>
      {{ 'homepage.footer.learning'|trans }}
    </a>
  </div>
</div>
{% endif %}
", "mobile/footer-tool-bar.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\mobile\\footer-tool-bar.html.twig");
    }
}
