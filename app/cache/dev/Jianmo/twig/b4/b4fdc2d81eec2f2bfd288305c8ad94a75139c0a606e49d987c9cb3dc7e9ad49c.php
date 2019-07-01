<?php

/* js_loader_async.html.twig */
class __TwigTemplate_67b6880f6a4e07ec59f09d23882413107919754dd9222a384d545a2b71fb9cca extends Twig_Template
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
        $__internal_eb45cca9aaa52abaa0a1f38a48a6e8db9127b1687b6d8b58d0c193c6f8e0f71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb45cca9aaa52abaa0a1f38a48a6e8db9127b1687b6d8b58d0c193c6f8e0f71d->enter($__internal_eb45cca9aaa52abaa0a1f38a48a6e8db9127b1687b6d8b58d0c193c6f8e0f71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js_loader_async.html.twig"));

        // line 1
        echo "<script id=\"script-loader-async\" type=\"text/javascript\">
  \"use strict\";
  (function() {
    var paths = [
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 6
            echo "        ";
            if (twig_in_filter("//", $context["path"])) {
                // line 7
                echo "          \"";
                echo twig_escape_filter($this->env, (($context["path"] . "?") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("")), "html", null, true);
                echo "\",
        ";
            } else {
                // line 9
                echo "          \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\",
        ";
            }
            // line 11
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ];

    esScript(paths, function() {
      var node = document.getElementById('script-loader-async');
      if(node) {
        node.parentNode.removeChild(node);
      }
    }, document.getElementById('modal'));
  })();
</script>";
        
        $__internal_eb45cca9aaa52abaa0a1f38a48a6e8db9127b1687b6d8b58d0c193c6f8e0f71d->leave($__internal_eb45cca9aaa52abaa0a1f38a48a6e8db9127b1687b6d8b58d0c193c6f8e0f71d_prof);

    }

    public function getTemplateName()
    {
        return "js_loader_async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  47 => 11,  41 => 9,  35 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script id=\"script-loader-async\" type=\"text/javascript\">
  \"use strict\";
  (function() {
    var paths = [
      {% for path in script() %}
        {% if '//' in path %}
          \"{{ path ~ '?' ~ asset_version('')}}\",
        {% else %}
          \"{{ asset('static-dist/' ~ path) }}\",
        {% endif %}
      {% endfor %}
    ];

    esScript(paths, function() {
      var node = document.getElementById('script-loader-async');
      if(node) {
        node.parentNode.removeChild(node);
      }
    }, document.getElementById('modal'));
  })();
</script>", "js_loader_async.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\js_loader_async.html.twig");
    }
}
