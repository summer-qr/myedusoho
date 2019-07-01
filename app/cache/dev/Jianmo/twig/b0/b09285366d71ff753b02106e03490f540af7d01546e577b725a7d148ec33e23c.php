<?php

/* default/footer.html.twig */
class __TwigTemplate_bd04087f3344f56397beff2d2cf12e1566b04bb984b5f20a7a26327c8aff0ff0 extends Twig_Template
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
        $__internal_a436379d7f562cabb09cf16f9c682161205bbc938d7a396ebfb3dfc5d823265d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a436379d7f562cabb09cf16f9c682161205bbc938d7a396ebfb3dfc5d823265d->enter($__internal_a436379d7f562cabb09cf16f9c682161205bbc938d7a396ebfb3dfc5d823265d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 3
            echo "  ";
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 4
            echo "  ";
            if (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == "footer-link")) {
                // line 5
                echo "    ";
                $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
                // line 6
                echo "    ";
                $this->loadTemplate((("default/" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))) . ".html.twig"), "default/footer.html.twig", 6)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))));
                // line 7
                echo "  ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<footer class=\"es-footer\">
  <div class=\"copyright\">
    <div class=\"container\">
      ";
        // line 13
        $this->loadTemplate("powered-by.html.twig", "default/footer.html.twig", 13)->display($context);
        // line 14
        echo "
      ";
        // line 15
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo "

      ";
        // line 17
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.enabled"), false)) {
            // line 18
            echo "        ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.script");
            echo "
      ";
        }
        // line 20
        echo "
      <a class=\"mlm\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_archive");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.archive"), "html", null, true);
        echo "</a>
      <div class=\"mts\">
        ";
        // line 23
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")) {
            // line 24
            echo "          ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.course_copyright", array("%copyRightUrl%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")));
            echo "
        ";
        }
        // line 26
        echo "        ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp")) {
            // line 27
            echo "          <a class=\"mlm\" href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 31
        echo "      </div>
    </div>
  </div>
</footer>
";
        
        $__internal_a436379d7f562cabb09cf16f9c682161205bbc938d7a396ebfb3dfc5d823265d->leave($__internal_a436379d7f562cabb09cf16f9c682161205bbc938d7a396ebfb3dfc5d823265d_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  117 => 28,  114 => 27,  111 => 26,  105 => 24,  103 => 23,  96 => 21,  93 => 20,  87 => 18,  85 => 17,  80 => 15,  77 => 14,  75 => 13,  69 => 9,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% for config in themeConfig.blocks.left|default([]) %}
  {% set code = config.code %}
  {% if code == 'footer-link' %}
    {% set category = config.categoryId|default(0) ? data('Category', {categoryId: config.categoryId})  : null %}
    {% include 'default/' ~ code ~ '.html.twig' with {config:config, category: category} %}
  {% endif %}
{% endfor %}

<footer class=\"es-footer\">
  <div class=\"copyright\">
    <div class=\"container\">
      {% include \"powered-by.html.twig\" %}

      {{ setting('site.analytics')|raw }}

      {% if setting('siteTrace.enabled')|default(false) %}
        {{ setting('siteTrace.script')|raw }}
      {% endif %}

      <a class=\"mlm\" href=\"{{ path('course_set_archive') }}\">{{'homepage.footer.archive'|trans}}</a>
      <div class=\"mts\">
        {% if setting('site.copyright') %}
          {{ 'homepage.footer.course_copyright'|trans({'%copyRightUrl%':setting('site.copyright')})|raw }}
        {% endif %}
        {% if setting('site.icp') %}
          <a class=\"mlm\" href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">
            {{ setting('site.icp') }}
          </a>
        {% endif %}
      </div>
    </div>
  </div>
</footer>
", "default/footer.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\footer.html.twig");
    }
}
