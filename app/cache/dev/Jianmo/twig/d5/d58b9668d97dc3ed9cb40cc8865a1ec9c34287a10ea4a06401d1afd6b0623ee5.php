<?php

/* course/widgets/characteristic.html.twig */
class __TwigTemplate_3dd80c17d2056aa169c4e57cf1c4a6637425f38da491744988328e9c8696b792 extends Twig_Template
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
        $__internal_26956f0cd788196c3ff219f79677f925770f4ecbca5f083946153da00ad136ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26956f0cd788196c3ff219f79677f925770f4ecbca5f083946153da00ad136ea->enter($__internal_26956f0cd788196c3ff219f79677f925770f4ecbca5f083946153da00ad136ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/characteristic.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["characteristicData"]) ? $context["characteristicData"] : $this->getContext($context, "characteristicData")))) {
            // line 2
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.characteristic.content_title"), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"panel-body pt0\">
      <div class=\"course-features pl0\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["characteristicData"]) ? $context["characteristicData"] : $this->getContext($context, "characteristicData")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 9
                echo "          ";
                if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 1)) {
                    // line 10
                    echo "            <div class=\"course-features-item clearfix\">
          ";
                }
                // line 12
                echo "          <div class=\"media\">
            <div class=\"media-left prm\">
                <span class=\"color-lump bg-primary\"> <i class=\"es-icon ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "icon", array()), "html", null, true);
                echo " media-logo\"></i>
                </span>
            </div>
            <div class=\"media-body media-middle\">";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["data"], "name", array())), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "num", array()), "html", null, true);
                echo ")</div>
          </div>
          ";
                // line 19
                if (((($this->getAttribute($context["loop"], "index", array()) % 2) == 0) || ($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, (isset($context["characteristicData"]) ? $context["characteristicData"] : $this->getContext($context, "characteristicData")))))) {
                    // line 20
                    echo "            </div>
          ";
                }
                // line 22
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </div>
    </div>
  </div>
";
        }
        
        $__internal_26956f0cd788196c3ff219f79677f925770f4ecbca5f083946153da00ad136ea->leave($__internal_26956f0cd788196c3ff219f79677f925770f4ecbca5f083946153da00ad136ea_prof);

    }

    public function getTemplateName()
    {
        return "course/widgets/characteristic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  82 => 22,  78 => 20,  76 => 19,  69 => 17,  63 => 14,  59 => 12,  55 => 10,  52 => 9,  35 => 8,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not characteristicData is empty %}
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">{{ 'course.characteristic.content_title'|trans }}</h3>
    </div>
    <div class=\"panel-body pt0\">
      <div class=\"course-features pl0\">
        {% for data in characteristicData %}
          {% if loop.index % 2 == 1 %}
            <div class=\"course-features-item clearfix\">
          {% endif %}
          <div class=\"media\">
            <div class=\"media-left prm\">
                <span class=\"color-lump bg-primary\"> <i class=\"es-icon {{ data.icon }} media-logo\"></i>
                </span>
            </div>
            <div class=\"media-body media-middle\">{{ data.name|trans }}({{ data.num }})</div>
          </div>
          {% if loop.index % 2 == 0 or loop.index == characteristicData|length %}
            </div>
          {% endif %}
        {% endfor %}
      </div>
    </div>
  </div>
{% endif %}
", "course/widgets/characteristic.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\widgets\\characteristic.html.twig");
    }
}
