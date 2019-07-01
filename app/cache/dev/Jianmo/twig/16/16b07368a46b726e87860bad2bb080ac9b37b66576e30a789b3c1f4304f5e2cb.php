<?php

/* course/widgets/classroom-course-price.html.twig */
class __TwigTemplate_9657c349cce8d1309eb07676c5c03ce4bd25e2013781f912088ac299df04b33d extends Twig_Template
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
        $__internal_8fb910a40a7034237141eee1532af78bfa609f463d9fbf77724914bfa706c988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb910a40a7034237141eee1532af78bfa609f463d9fbf77724914bfa706c988->enter($__internal_8fb910a40a7034237141eee1532af78bfa609f463d9fbf77724914bfa706c988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/classroom-course-price.html.twig"));

        // line 1
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 2
            echo "  ";
            if (((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) > 0)) {
                // line 3
                echo "     ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.widgets.classroom_price.price"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                echo "
  ";
            } else {
                // line 5
                echo "    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.widgets.classroom_price.free"), "html", null, true);
                echo "
  ";
            }
        } else {
            // line 8
            echo "  ";
            if (((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) > 0)) {
                // line 9
                echo "     ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.widgets.classroom_price.not_free", array("%price%" => (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price"))));
                echo "
  ";
            } else {
                // line 11
                echo "    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.widgets.classroom_price.free"), "html", null, true);
                echo "
  ";
            }
        }
        
        $__internal_8fb910a40a7034237141eee1532af78bfa609f463d9fbf77724914bfa706c988->leave($__internal_8fb910a40a7034237141eee1532af78bfa609f463d9fbf77724914bfa706c988_prof);

    }

    public function getTemplateName()
    {
        return "course/widgets/classroom-course-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 9,  43 => 8,  36 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
  {% if price > 0 %}
     {{'course.widgets.classroom_price.price'|trans}} {{ price * setting('coin.cash_rate')}}{{setting('coin.coin_name')}}
  {% else %}
    {{'course.widgets.classroom_price.free'|trans}}
  {% endif %}
{% else %}
  {% if price > 0 %}
     {{'course.widgets.classroom_price.not_free'|trans({'%price%': price })|raw}}
  {% else %}
    {{'course.widgets.classroom_price.free'|trans}}
  {% endif %}
{% endif %}", "course/widgets/classroom-course-price.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\widgets\\classroom-course-price.html.twig");
    }
}
