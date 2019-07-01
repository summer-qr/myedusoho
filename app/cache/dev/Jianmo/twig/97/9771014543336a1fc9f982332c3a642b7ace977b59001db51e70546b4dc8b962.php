<?php

/* course/header/header-for-price.html.twig */
class __TwigTemplate_1c3ef1d77e07707befa180ca24c7480468306ba147de411a827aee4d1b210400 extends Twig_Template
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
        $__internal_097055fb2c95d4a3eb48b94cb400d8a93274524f509706cc43f4a2cec376fdc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097055fb2c95d4a3eb48b94cb400d8a93274524f509706cc43f4a2cec376fdc8->enter($__internal_097055fb2c95d4a3eb48b94cb400d8a93274524f509706cc43f4a2cec376fdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/header/header-for-price.html.twig"));

        // line 1
        $context["coinSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin");
        // line 2
        $context["coinEnabled"] = ((($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_enabled", array()), false)) : (false)) && ($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : $this->getContext($context, "coinSetting")), "price_type", array()) == "Coin"));
        // line 3
        $context["onDiscount"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->isDiscount((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")));
        // line 4
        $context["showPrice"] = ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "parentId", array()) == 0)) ? ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array())) : ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array())));
        // line 5
        echo "<span class=\"course-detail__label vertical-sub\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price"), "html", null, true);
        echo "</span>
<span class=\"course-detail-price-money vertical-sub mrm\">
  ";
        // line 7
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) == 0) && ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "discountId", array()) <= 0))) {
            // line 8
            echo "    <b class=\"pirce-num color-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price.free"), "html", null, true);
            echo "</b>
  ";
        } else {
            // line 10
            echo "    ";
            if ((isset($context["coinEnabled"]) ? $context["coinEnabled"] : $this->getContext($context, "coinEnabled"))) {
                // line 11
                echo "      <b class=\"pirce-num\">";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) * $this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : $this->getContext($context, "coinSetting")), "cash_rate", array())), "html", null, true);
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))), "html", null, true);
                echo "</b>
    ";
            } else {
                // line 13
                echo "      <b class=\"pirce-num\"><span class=\"cd-text-lg\">¥&nbsp;</span>";
                echo twig_escape_filter($this->env, (isset($context["showPrice"]) ? $context["showPrice"] : $this->getContext($context, "showPrice")), "html", null, true);
                echo "</b>
    ";
            }
            // line 15
            echo "  ";
        }
        // line 16
        echo "</span>

";
        // line 18
        if ((isset($context["onDiscount"]) ? $context["onDiscount"] : $this->getContext($context, "onDiscount"))) {
            // line 19
            echo "  <span class=\"original-price\">
    ";
            // line 20
            if ((isset($context["coinEnabled"]) ? $context["coinEnabled"] : $this->getContext($context, "coinEnabled"))) {
                // line 21
                echo "      <span class=\"price\">
        ";
                // line 22
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) * $this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : $this->getContext($context, "coinSetting")), "cash_rate", array())), "html", null, true);
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))), "html", null, true);
                echo "
      </span>
    ";
            } else {
                // line 25
                echo "      ¥<span class=\"price\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()), "html", null, true);
                echo "</span>
    ";
            }
            // line 27
            echo "  </span>
  ";
            // line 28
            if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "discount", array()) != 0)) {
                // line 29
                echo "    <span class=\"tag-discount\">
        <span class=\"discount-font\">
          ";
                // line 31
                if (((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "discount", array()) * 10) % 10) > 0)) {
                    // line 32
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price.discount", array("%discount%" => sprintf("%.1f", $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "discount", array())))), "html", null, true);
                    echo "
          ";
                } else {
                    // line 34
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price.discount", array("%discount%" => sprintf("%d", $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "discount", array())))), "html", null, true);
                    echo "
          ";
                }
                // line 36
                echo "        </span>
    </span>
  ";
            }
        }
        
        $__internal_097055fb2c95d4a3eb48b94cb400d8a93274524f509706cc43f4a2cec376fdc8->leave($__internal_097055fb2c95d4a3eb48b94cb400d8a93274524f509706cc43f4a2cec376fdc8_prof);

    }

    public function getTemplateName()
    {
        return "course/header/header-for-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  107 => 34,  101 => 32,  99 => 31,  95 => 29,  93 => 28,  90 => 27,  84 => 25,  77 => 22,  74 => 21,  72 => 20,  69 => 19,  67 => 18,  63 => 16,  60 => 15,  54 => 13,  47 => 11,  44 => 10,  38 => 8,  36 => 7,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set coinSetting = setting('coin') %}
{% set coinEnabled = coinSetting.coin_enabled|default(false) and coinSetting.price_type == 'Coin'  %}
{% set onDiscount =  is_discount(course) %}
{% set showPrice =  course.parentId == 0 ? course.price : course.originPrice %}
<span class=\"course-detail__label vertical-sub\">{{'course.price'|trans}}</span>
<span class=\"course-detail-price-money vertical-sub mrm\">
  {% if course.price == 0 and courseSet.discountId <= 0 %}
    <b class=\"pirce-num color-success\">{{'course.price.free'|trans}}</b>
  {% else %}
    {% if coinEnabled %}
      <b class=\"pirce-num\">{{ course.price * coinSetting.cash_rate }}{{ coinSetting.coin_name|default('finance.coin'|trans) }}</b>
    {% else %}
      <b class=\"pirce-num\"><span class=\"cd-text-lg\">¥&nbsp;</span>{{ showPrice }}</b>
    {% endif %}
  {% endif %}
</span>

{% if onDiscount %}
  <span class=\"original-price\">
    {% if coinEnabled %}
      <span class=\"price\">
        {{ course.originPrice * coinSetting.cash_rate }}{{ coinSetting.coin_name|default('finance.coin'|trans) }}
      </span>
    {% else %}
      ¥<span class=\"price\">{{ course.originPrice }}</span>
    {% endif %}
  </span>
  {% if courseSet.discount != 0 %}
    <span class=\"tag-discount\">
        <span class=\"discount-font\">
          {% if courseSet.discount*10%10 > 0 %}
            {{'course.price.discount'|trans({'%discount%':\"%.1f\"|format(courseSet.discount)})}}
          {% else %}
            {{'course.price.discount'|trans({'%discount%':\"%d\"|format(courseSet.discount)})}}
          {% endif %}
        </span>
    </span>
  {% endif %}
{% endif %}", "course/header/header-for-price.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\header\\header-for-price.html.twig");
    }
}
