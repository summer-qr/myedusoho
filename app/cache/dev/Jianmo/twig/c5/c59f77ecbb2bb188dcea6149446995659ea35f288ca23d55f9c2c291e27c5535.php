<?php

/* default/top-navigation.html.twig */
class __TwigTemplate_2e8263d27e40ed4ce7ae1427da05d4803c1bc964e0d56f929d0e46afb229fdc2 extends Twig_Template
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
        $__internal_95fb709c74a18ff365a6ff8df6af63566fce2abd917b7c8372659da68ea08348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fb709c74a18ff365a6ff8df6af63566fce2abd917b7c8372659da68ea08348->enter($__internal_95fb709c74a18ff365a6ff8df6af63566fce2abd917b7c8372659da68ea08348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/top-navigation.html.twig"));

        // line 1
        $context["topNavNum"] = (($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "navigation", array(), "any", false, true), "topNavNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "navigation", array(), "any", false, true), "topNavNum", array()), 5)) : (5));
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            if ($this->getAttribute($context["nav"], "isOpen", array())) {
                // line 4
                echo "  ";
                $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                // line 5
                echo "  ";
                if ((($this->getAttribute($context["loop"], "index", array()) == ((isset($context["topNavNum"]) ? $context["topNavNum"] : $this->getContext($context, "topNavNum")) + 1)) &&  !((array_key_exists("isMobile", $context)) ? (_twig_default_filter((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")), false)) : (false)))) {
                    // line 6
                    echo "    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        ";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")), (isset($context["topNavNum"]) ? $context["topNavNum"] : $this->getContext($context, "topNavNum")), null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
                        if ($this->getAttribute($context["nav"], "isOpen", array())) {
                            // line 12
                            echo "          ";
                            $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                            // line 13
                            echo "
          ";
                            // line 14
                            $this->loadTemplate("default/navigation-li.html.twig", "default/top-navigation.html.twig", 14)->display($context);
                            // line 15
                            echo "        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "      </ul>
    </li>
  ";
                }
                // line 19
                echo "
  ";
                // line 20
                if ((($this->getAttribute($context["loop"], "index", array()) <= (isset($context["topNavNum"]) ? $context["topNavNum"] : $this->getContext($context, "topNavNum"))) || ((array_key_exists("isMobile", $context)) ? (_twig_default_filter((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")), false)) : (false)))) {
                    // line 21
                    echo "    ";
                    $this->loadTemplate("default/navigation-li.html.twig", "default/top-navigation.html.twig", 21)->display($context);
                    // line 22
                    echo "  ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_95fb709c74a18ff365a6ff8df6af63566fce2abd917b7c8372659da68ea08348->leave($__internal_95fb709c74a18ff365a6ff8df6af63566fce2abd917b7c8372659da68ea08348_prof);

    }

    public function getTemplateName()
    {
        return "default/top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  90 => 21,  88 => 20,  85 => 19,  80 => 16,  70 => 15,  68 => 14,  65 => 13,  62 => 12,  51 => 11,  44 => 6,  41 => 5,  38 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set topNavNum = themeConfig.navigation.topNavNum|default(5) %}

{% for nav in navigations if nav.isOpen %}
  {% set subNavs = nav.children|default([]) %}
  {% if (loop.index == (topNavNum + 1)) and not isMobile|default(false) %}
    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        {% for nav in navigations[topNavNum:]  if nav.isOpen %}
          {% set subNavs = nav.children|default([]) %}

          {% include 'default/navigation-li.html.twig' %}
        {% endfor %}
      </ul>
    </li>
  {% endif %}

  {% if loop.index <= topNavNum or isMobile|default(false) %}
    {% include 'default/navigation-li.html.twig' %}
  {% endif %}
{% endfor %}
", "default/top-navigation.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\top-navigation.html.twig");
    }
}
