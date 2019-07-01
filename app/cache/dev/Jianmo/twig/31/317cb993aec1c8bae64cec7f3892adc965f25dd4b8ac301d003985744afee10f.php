<?php

/* default/friend-link.html.twig */
class __TwigTemplate_69d51b465f724da29ab89975bc2225a37ba978281d85fe7cd450dddebc0933b3 extends Twig_Template
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
        $__internal_bc41755b90774ae577beef02fe1adc3ddc0d4233b6a37e6d53e981bc08c96702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc41755b90774ae577beef02fe1adc3ddc0d4233b6a37e6d53e981bc08c96702->enter($__internal_bc41755b90774ae577beef02fe1adc3ddc0d4233b6a37e6d53e981bc08c96702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/friend-link.html.twig"));

        // line 1
        if ((isset($context["friendlyLinks"]) ? $context["friendlyLinks"] : $this->getContext($context, "friendlyLinks"))) {
            // line 2
            echo "<div class=\"es-friend-link\">
  <div class=\"container\">
    <div class=\"title\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.friend-link.content_title"), "html", null, true);
            echo "</div>
    <ul>
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friendlyLinks"]) ? $context["friendlyLinks"] : $this->getContext($context, "friendlyLinks")));
            foreach ($context['_seq'] as $context["_key"] => $context["friendLink"]) {
                // line 7
                echo "      <li><a class=\"link-dark text-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friendLink"], "url", array()), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["friendLink"], "isNewWin", array())) {
                    echo "target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friendLink"], "name", array()), "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friendLink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </ul>
  </div>
</div>
";
        }
        
        $__internal_bc41755b90774ae577beef02fe1adc3ddc0d4233b6a37e6d53e981bc08c96702->leave($__internal_bc41755b90774ae577beef02fe1adc3ddc0d4233b6a37e6d53e981bc08c96702_prof);

    }

    public function getTemplateName()
    {
        return "default/friend-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  37 => 7,  33 => 6,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if friendlyLinks %}
<div class=\"es-friend-link\">
  <div class=\"container\">
    <div class=\"title\">{{'homepage.friend-link.content_title'|trans}}</div>
    <ul>
      {% for friendLink in friendlyLinks %}
      <li><a class=\"link-dark text-sm\" href=\"{{ friendLink.url }}\" {% if friendLink.isNewWin%}target=\"_blank\"{% endif %}>{{friendLink.name}}</a></li>
      {% endfor %}
    </ul>
  </div>
</div>
{% endif %}
", "default/friend-link.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\friend-link.html.twig");
    }
}
