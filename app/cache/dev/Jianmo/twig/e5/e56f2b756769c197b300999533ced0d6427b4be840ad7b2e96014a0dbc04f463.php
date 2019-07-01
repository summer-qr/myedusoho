<?php

/* course/header/header-for-guest-buy-btn.html.twig */
class __TwigTemplate_9cec75b48ce04f3fb103658ea9f918e2608f456b81d8d194b05b5c44cb3b8356 extends Twig_Template
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
        $__internal_39563397843ee15e26563677ffdc711469a7161b857462d6c6af33a57b2e7c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39563397843ee15e26563677ffdc711469a7161b857462d6c6af33a57b2e7c24->enter($__internal_39563397843ee15e26563677ffdc711469a7161b857462d6c6af33a57b2e7c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/header/header-for-guest-buy-btn.html.twig"));

        // line 1
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), true)) : (true)) == false) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "vipLevelId", array()) == 0)))) {
            // line 2
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_limited_tips"), "html", null, true);
            echo "
";
        } elseif ((($this->getAttribute(        // line 3
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published") || ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) != "published"))) {
            // line 4
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unbuyable.unpublished_tips"), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute(        // line 5
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyExpiryTime", array()) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyExpiryTime", array()) < twig_date_format_filter($this->env, "now", "U")))) {
            // line 6
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unbuyable.over_buy_expiry_time_tips"), "html", null, true);
            echo "
";
        } elseif ((twig_in_filter($this->getAttribute(        // line 7
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryMode", array()), array(0 => "end_date", 1 => "date")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryEndDate", array()) < twig_date_format_filter($this->env, "now", "U")))) {
            // line 8
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unbuyable.over_expiry_end_date_tips"), "html", null, true);
            echo "
";
        } else {
            // line 10
            echo "  ";
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.purchase.extension", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))));
            echo "


  ";
            // line 13
            $context["noVipText"] = 1;
            // line 14
            echo "  ";
            if (twig_trim_filter($this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.buy-btn.extension", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")))))) {
                // line 15
                echo "    ";
                $context["btnText"] = $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.buy-btn.extension", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))));
                // line 16
                echo "    ";
                $context["noVipText"] = 0;
                // line 17
                echo "  ";
            } elseif ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) == 0) || $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "isFree", array()))) {
                // line 18
                echo "    ";
                $context["btnText"] = "course.btn.join";
                // line 19
                echo "  ";
            } else {
                // line 20
                echo "    ";
                $context["btnText"] = "course.btn.buy";
                // line 21
                echo "  ";
            }
            // line 22
            echo "
  ";
            // line 24
            echo "  ";
            if (((((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), true)) : (true)) == false) && ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "vipLevelId", array()) > 0))) && (isset($context["noVipText"]) ? $context["noVipText"] : $this->getContext($context, "noVipText")))) {
                // line 25
                echo "  ";
            } else {
                // line 26
                echo "    <a class=\"cd-btn cd-btn-primary js-buy-btn ";
                if (((array_key_exists("previewAs", $context)) ? (_twig_default_filter((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")))) : (""))) {
                    echo "disabled";
                }
                echo "\" href=\"javascript:\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\">
      ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btnText"]) ? $context["btnText"] : $this->getContext($context, "btnText"))), "html", null, true);
                echo "
    </a>
  ";
            }
            // line 30
            echo "

";
        }
        
        $__internal_39563397843ee15e26563677ffdc711469a7161b857462d6c6af33a57b2e7c24->leave($__internal_39563397843ee15e26563677ffdc711469a7161b857462d6c6af33a57b2e7c24_prof);

    }

    public function getTemplateName()
    {
        return "course/header/header-for-guest-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  102 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  58 => 13,  51 => 10,  45 => 8,  43 => 7,  38 => 6,  36 => 5,  31 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if course.buyable|default(true) == false and ( is_plugin_installed('Vip') and  course.vipLevelId == 0) %}
  {{ 'course.course_limited_tips'|trans }}
{% elseif course.status != 'published' or courseSet.status != 'published' %}
  {{ 'course.unbuyable.unpublished_tips'|trans }}
{% elseif course.buyExpiryTime and course.buyExpiryTime < 'now'|date('U') %}
  {{ 'course.unbuyable.over_buy_expiry_time_tips'|trans }}
{% elseif (course.expiryMode in ['end_date', 'date'] and course.expiryEndDate < 'now'|date('U')) %}
  {{ 'course.unbuyable.over_expiry_end_date_tips'|trans }}
{% else %}
  {{ slot('course.purchase.extension', {'course':course}) }}


  {% set noVipText = 1  %}
  {% if slot('course.buy-btn.extension', {'course': course})|trim %}
    {% set btnText = slot('course.buy-btn.extension', {'course': course}) %}
    {% set noVipText = 0 %}
  {% elseif course.originPrice == 0 or course.isFree %}
    {% set btnText = 'course.btn.join' %}
  {% else  %}
    {% set btnText = 'course.btn.buy' %}
  {% endif %}

  {# 特殊业务逻辑 #}
  {% if course.buyable|default(true) == false and ( is_plugin_installed('Vip') and  course.vipLevelId > 0) and noVipText %}
  {% else %}
    <a class=\"cd-btn cd-btn-primary js-buy-btn {% if previewAs|default() %}disabled{% endif %}\" href=\"javascript:\" data-url=\"{{ path('course_buy', {id:course.id}) }}\">
      {{ btnText|trans }}
    </a>
  {% endif %}


{% endif %}
", "course/header/header-for-guest-buy-btn.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\header\\header-for-guest-buy-btn.html.twig");
    }
}
