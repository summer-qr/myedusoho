<?php

/* js_loader.html.twig */
class __TwigTemplate_d43a90d6004eb26b0d0937605ab101f7417bbd404a4416ab0fd255192ef86d84 extends Twig_Template
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
        $__internal_ef9aa564974f95aca06316be3417ffe7b42406c4b9a85dfe17371cf24f236904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9aa564974f95aca06316be3417ffe7b42406c4b9a85dfe17371cf24f236904->enter($__internal_ef9aa564974f95aca06316be3417ffe7b42406c4b9a85dfe17371cf24f236904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js_loader.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if (twig_in_filter("//", $context["path"])) {
                // line 3
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, (($context["path"] . "?") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("")), "html", null, true);
                echo "\"></script>
  ";
            } else {
                // line 5
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ef9aa564974f95aca06316be3417ffe7b42406c4b9a85dfe17371cf24f236904->leave($__internal_ef9aa564974f95aca06316be3417ffe7b42406c4b9a85dfe17371cf24f236904_prof);

    }

    public function getTemplateName()
    {
        return "js_loader.html.twig";
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
        return new Twig_Source("{% for path in script()  %}
  {% if '//' in path %}
    <script src=\"{{ path ~ '?' ~ asset_version('')}}\"></script>
  {% else %}
    <script src=\"{{ asset('static-dist/' ~ path) }}\"></script>
  {% endif %}
{% endfor %}", "js_loader.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\js_loader.html.twig");
    }
}
