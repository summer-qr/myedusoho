<?php

/* status/status-block.html.twig */
class __TwigTemplate_b38575f15695fe35e779654e050798fe5921e8636b310774bed94c3b0402e2a4 extends Twig_Template
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
        $__internal_18a7a6017edc62f3fa4a8f22f8cbce63e3d34f1d023d6f577f45bfdefebc7a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a7a6017edc62f3fa4a8f22f8cbce63e3d34f1d023d6f577f45bfdefebc7a97->enter($__internal_18a7a6017edc62f3fa4a8f22f8cbce63e3d34f1d023d6f577f45bfdefebc7a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "status/status-block.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "status/status-block.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default\">

  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-recentactors\"></i>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.students_dynamic.content_title"), "html", null, true);
        echo "</h3>
  </div>

  <div class=\"panel-body\">
  ";
        // line 9
        if ((isset($context["learns"]) ? $context["learns"] : $this->getContext($context, "learns"))) {
            // line 10
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["learns"]) ? $context["learns"] : $this->getContext($context, "learns")));
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
            foreach ($context['_seq'] as $context["key"] => $context["learn"]) {
                // line 11
                echo "        ";
                if (($this->getAttribute($context["loop"], "index", array()) < 7)) {
                    // line 12
                    echo "          <div class=\"media media-number-o color-gray text-overflow\">
            ";
                    // line 13
                    echo $context["web_macro"]->getuser_link($this->getAttribute($context["learn"], "user", array()));
                    echo "
            ";
                    // line 14
                    echo $this->getAttribute($context["learn"], "message", array());
                    echo "
          </div>
         ";
                }
                // line 17
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
    ";
        } else {
            // line 20
            echo "     <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.students_dynamic.empty"), "html", null, true);
            echo "</div>
    ";
        }
        // line 22
        echo "  </div>

</div>
";
        
        $__internal_18a7a6017edc62f3fa4a8f22f8cbce63e3d34f1d023d6f577f45bfdefebc7a97->leave($__internal_18a7a6017edc62f3fa4a8f22f8cbce63e3d34f1d023d6f577f45bfdefebc7a97_prof);

    }

    public function getTemplateName()
    {
        return "status/status-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  90 => 20,  86 => 18,  72 => 17,  66 => 14,  62 => 13,  59 => 12,  56 => 11,  38 => 10,  36 => 9,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macro.html.twig\" as web_macro %}
<div class=\"panel panel-default\">

  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-recentactors\"></i>{{'course.students_dynamic.content_title'|trans}}</h3>
  </div>

  <div class=\"panel-body\">
  {% if learns %}
      {% for key,learn in learns %}
        {% if loop.index < 7 %}
          <div class=\"media media-number-o color-gray text-overflow\">
            {{ web_macro.user_link(learn.user) }}
            {{ learn.message|raw }}
          </div>
         {% endif %}
      {% endfor %}

    {% else %}
     <div class=\"empty\">{{'course.students_dynamic.empty'|trans}}</div>
    {% endif %}
  </div>

</div>
", "status/status-block.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\status\\status-block.html.twig");
    }
}
