<?php

/* common/price.html.twig */
class __TwigTemplate_2da9718c3bdfe817255a360e560a9d9df13f62b8a282b1a04759abfa034f1a65 extends Twig_Template
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
        $__internal_476a35e93a35eaabe4ca38ddfbf061965f9c50057c7a558bb52dc19d7639c7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476a35e93a35eaabe4ca38ddfbf061965f9c50057c7a558bb52dc19d7639c7ad->enter($__internal_476a35e93a35eaabe4ca38ddfbf061965f9c50057c7a558bb52dc19d7639c7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "common/price.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (twig_test_empty(((array_key_exists("currentCoinSetting", $context)) ? (_twig_default_filter((isset($context["currentCoinSetting"]) ? $context["currentCoinSetting"] : $this->getContext($context, "currentCoinSetting")))) : ("")))) {
            // line 4
            echo "    ";
            $context["currentCoinSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin");
            // line 5
            echo "    ";
            $context["coinEnabled"] = ((($this->getAttribute((isset($context["currentCoinSetting"]) ? $context["currentCoinSetting"] : null), "coin_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentCoinSetting"]) ? $context["currentCoinSetting"] : null), "coin_enabled", array()), false)) : (false)) && ($this->getAttribute((isset($context["currentCoinSetting"]) ? $context["currentCoinSetting"] : $this->getContext($context, "currentCoinSetting")), "price_type", array()) == "Coin"));
        }
        // line 7
        echo "
";
        // line 8
        if ((isset($context["coinEnabled"]) ? $context["coinEnabled"] : $this->getContext($context, "coinEnabled"))) {
            // line 9
            echo "    <span class=\"coin\">
      ";
            // line 10
            echo twig_escape_filter($this->env, ((isset($context["productPrice"]) ? $context["productPrice"] : $this->getContext($context, "productPrice")) * $this->getAttribute((isset($context["currentCoinSetting"]) ? $context["currentCoinSetting"] : $this->getContext($context, "currentCoinSetting")), "cash_rate", array())), "html", null, true);
            echo "
      <span class=\"cd-text-sm\">";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["currentCoinSetting"]) ? $context["currentCoinSetting"] : null), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentCoinSetting"]) ? $context["currentCoinSetting"] : null), "coin_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finance.coin"))), "html", null, true);
            echo "</span>
    </span>
";
        } else {
            // line 14
            echo "    <span class=\"money-symbol cd-text-sm\">¥</span><span class=\"pure-price\">";
            echo twig_escape_filter($this->env, (isset($context["productPrice"]) ? $context["productPrice"] : $this->getContext($context, "productPrice")), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_476a35e93a35eaabe4ca38ddfbf061965f9c50057c7a558bb52dc19d7639c7ad->leave($__internal_476a35e93a35eaabe4ca38ddfbf061965f9c50057c7a558bb52dc19d7639c7ad_prof);

    }

    public function getTemplateName()
    {
        return "common/price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  34 => 7,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# 必须传递参数 productPrice， 如  {% include 'common/price.html.twig' with {'productPrice': course.price} %} #}

{% if currentCoinSetting|default() is empty %}
    {% set currentCoinSetting = setting('coin') %}
    {% set coinEnabled = currentCoinSetting.coin_enabled|default(false) and currentCoinSetting.price_type == 'Coin'  %}
{% endif %}

{% if coinEnabled %}
    <span class=\"coin\">
      {{ productPrice * currentCoinSetting.cash_rate }}
      <span class=\"cd-text-sm\">{{ currentCoinSetting.coin_name|default('finance.coin'|trans) }}</span>
    </span>
{% else %}
    <span class=\"money-symbol cd-text-sm\">¥</span><span class=\"pure-price\">{{ productPrice }}</span>
{% endif %}", "common/price.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\common\\price.html.twig");
    }
}
