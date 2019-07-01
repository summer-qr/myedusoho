<?php

/* css_loader.html.twig */
class __TwigTemplate_065514770adfae22f1da7d277a1796089206e0c1ff010699c982951974a2c345 extends Twig_Template
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
        $__internal_1842fece0874cb7a554e4f6460b32dfd1a5bba8217906260f20115c5375350f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1842fece0874cb7a554e4f6460b32dfd1a5bba8217906260f20115c5375350f0->enter($__internal_1842fece0874cb7a554e4f6460b32dfd1a5bba8217906260f20115c5375350f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css_loader.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_add8831a964dc2421366f4f494078a827466e0e647a85e1b6c844842bb6fec4d = $context["path"]) && is_string($__internal_a0d834b354585b433aa34e7eff69611acb6a8b8155aaededea5a1b048387f50b = "http://") && ('' === $__internal_a0d834b354585b433aa34e7eff69611acb6a8b8155aaededea5a1b048387f50b || 0 === strpos($__internal_add8831a964dc2421366f4f494078a827466e0e647a85e1b6c844842bb6fec4d, $__internal_a0d834b354585b433aa34e7eff69611acb6a8b8155aaededea5a1b048387f50b)))) {
                // line 3
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 5
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1842fece0874cb7a554e4f6460b32dfd1a5bba8217906260f20115c5375350f0->leave($__internal_1842fece0874cb7a554e4f6460b32dfd1a5bba8217906260f20115c5375350f0_prof);

    }

    public function getTemplateName()
    {
        return "css_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for path in css() %}
  {% if path starts with 'http://' %}
    <link href=\"{{ path }}\" rel=\"stylesheet\" />
  {% else %}
    <link href=\"{{ asset('static-dist/' ~ path) }}\" rel=\"stylesheet\" />
  {% endif %}
{% endfor %}", "css_loader.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\css_loader.html.twig");
    }
}
