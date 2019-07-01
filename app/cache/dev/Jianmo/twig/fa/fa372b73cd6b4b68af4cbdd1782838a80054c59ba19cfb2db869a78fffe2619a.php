<?php

/* courseset-manage/live/base-live-create-show.html.twig */
class __TwigTemplate_105734f7a3aad0437cea102ee372ac7d9f252e22b762aa8c388948632929516c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'type_icon' => array($this, 'block_type_icon'),
            'type_title' => array($this, 'block_type_title'),
            'type_intro' => array($this, 'block_type_intro'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73dda51c4f0f38c77d4b1c63997e81361fba0390c6c71762365cba3c8907445c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dda51c4f0f38c77d4b1c63997e81361fba0390c6c71762365cba3c8907445c->enter($__internal_73dda51c4f0f38c77d4b1c63997e81361fba0390c6c71762365cba3c8907445c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/live/base-live-create-show.html.twig"));

        // line 1
        $context["liveAccount"] = $this->env->getExtension('AppBundle\Twig\LiveExtension')->getLiveAccount();
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["liveAccount"]) ? $context["liveAccount"] : null), "error", array(), "any", true, true)) {
            // line 4
            echo "  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.not_purchase_live"), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\">
";
        } elseif ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("live-course.live_course_enabled")) {
            // line 6
            echo "  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.available_after_open"), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\">
";
        } elseif ($this->getAttribute(        // line 7
(isset($context["liveAccount"]) ? $context["liveAccount"] : $this->getContext($context, "liveAccount")), "isExpired", array())) {
            // line 8
            echo "  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_open_course.valid_service"), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\">
";
        } else {
            // line 10
            echo "  <div class=\"course-select js-courseSetType\" data-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\">
";
        }
        // line 12
        echo "    ";
        $this->displayBlock('type_icon', $context, $blocks);
        // line 15
        echo "    <div class=\"course-type\">
      ";
        // line 16
        $this->displayBlock('type_title', $context, $blocks);
        // line 19
        echo "    </div>
    <div class=\"course-intro\">
      ";
        // line 21
        $this->displayBlock('type_intro', $context, $blocks);
        // line 24
        echo "    </div>
  </div>
  ";
        
        $__internal_73dda51c4f0f38c77d4b1c63997e81361fba0390c6c71762365cba3c8907445c->leave($__internal_73dda51c4f0f38c77d4b1c63997e81361fba0390c6c71762365cba3c8907445c_prof);

    }

    // line 12
    public function block_type_icon($context, array $blocks = array())
    {
        $__internal_1d5e8f2734078da8514d4cb2812b1251a5a5fed91d819d2bb6190a9eee0e14ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5e8f2734078da8514d4cb2812b1251a5a5fed91d819d2bb6190a9eee0e14ec->enter($__internal_1d5e8f2734078da8514d4cb2812b1251a5a5fed91d819d2bb6190a9eee0e14ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "type_icon"));

        // line 13
        echo "      <i class=\"es-icon es-icon-zhibokecheng \"></i>
    ";
        
        $__internal_1d5e8f2734078da8514d4cb2812b1251a5a5fed91d819d2bb6190a9eee0e14ec->leave($__internal_1d5e8f2734078da8514d4cb2812b1251a5a5fed91d819d2bb6190a9eee0e14ec_prof);

    }

    // line 16
    public function block_type_title($context, array $blocks = array())
    {
        $__internal_50170a9b5b0025b6c1186135f19f18e6b8286d1a56fbdbb68a6464071d5f1f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50170a9b5b0025b6c1186135f19f18e6b8286d1a56fbdbb68a6464071d5f1f23->enter($__internal_50170a9b5b0025b6c1186135f19f18e6b8286d1a56fbdbb68a6464071d5f1f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "type_title"));

        // line 17
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_course"), "html", null, true);
        echo "
      ";
        
        $__internal_50170a9b5b0025b6c1186135f19f18e6b8286d1a56fbdbb68a6464071d5f1f23->leave($__internal_50170a9b5b0025b6c1186135f19f18e6b8286d1a56fbdbb68a6464071d5f1f23_prof);

    }

    // line 21
    public function block_type_intro($context, array $blocks = array())
    {
        $__internal_15524ef91558878c9b4c0724dda4647e8f9cdd8e69532e9ba183648d589d2fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15524ef91558878c9b4c0724dda4647e8f9cdd8e69532e9ba183648d589d2fe4->enter($__internal_15524ef91558878c9b4c0724dda4647e8f9cdd8e69532e9ba183648d589d2fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "type_intro"));

        // line 22
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.live_course.tips"), "html", null, true);
        echo "
      ";
        
        $__internal_15524ef91558878c9b4c0724dda4647e8f9cdd8e69532e9ba183648d589d2fe4->leave($__internal_15524ef91558878c9b4c0724dda4647e8f9cdd8e69532e9ba183648d589d2fe4_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/live/base-live-create-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 22,  116 => 21,  106 => 17,  100 => 16,  92 => 13,  86 => 12,  77 => 24,  75 => 21,  71 => 19,  69 => 16,  66 => 15,  63 => 12,  57 => 10,  49 => 8,  47 => 7,  40 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set liveAccount = get_live_account() %}

{% if liveAccount.error is defined %}
  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{'my.teaching.course_set.select_type.live_open_course.not_purchase_live'|trans}}\" data-type=\"{{ type }}\">
{% elseif not setting('live-course.live_course_enabled') %}
  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{'my.teaching.course_set.select_type.live_open_course.available_after_open'|trans}}\" data-type=\"{{ type }}\">
{% elseif liveAccount.isExpired %}
  <div class=\"course-select disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{'my.teaching.course_set.select_type.live_open_course.valid_service'|trans}}\" data-type=\"{{ type }}\">
{% else %}
  <div class=\"course-select js-courseSetType\" data-type=\"{{ type }}\">
{% endif %}
    {% block type_icon %}
      <i class=\"es-icon es-icon-zhibokecheng \"></i>
    {% endblock %}
    <div class=\"course-type\">
      {% block type_title %}
        {{ 'my.teaching.course_set.select_type.live_course'|trans }}
      {% endblock %}
    </div>
    <div class=\"course-intro\">
      {% block type_intro %}
        {{ 'my.teaching.course_set.select_type.live_course.tips'|trans }}
      {% endblock %}
    </div>
  </div>
  ", "courseset-manage/live/base-live-create-show.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\live\\base-live-create-show.html.twig");
    }
}
