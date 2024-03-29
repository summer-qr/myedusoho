<?php

/* default/stylesheet-webpack.html.twig */
class __TwigTemplate_dbc5543156b292e6ccb99fc96b66db03faedb5f417209f39dc03ab0c464fe562 extends Twig_Template
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
        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main-v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
        // line 5
        if ((isset($context["mobile"]) ? $context["mobile"] : null)) {
            // line 6
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/mobile.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 8
        if ((((isset($context["maincolor"]) ? $context["maincolor"] : null) != "default") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("theme.code", "jianmo") == "jianmo"))) {
            // line 9
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("static-dist/app/css/main-" . (isset($context["maincolor"]) ? $context["maincolor"] : null)) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 11
        if ((((isset($context["navigationcolor"]) ? $context["navigationcolor"] : null) != "default") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("theme.code", "jianmo") == "jianmo"))) {
            // line 12
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("static-dist/app/css/header-" . (isset($context["navigationcolor"]) ? $context["navigationcolor"] : null)) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 14
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("stylesheet.webpack.extension", array("maincolor" => (isset($context["maincolor"]) ? $context["maincolor"] : null)));
        echo "

";
        // line 16
        $this->loadTemplate("stylesheet/stylesheet-custom.html.twig", "default/stylesheet-webpack.html.twig", 16)->display(array_merge($context, array("config" =>         // line 17
(isset($context["currentTheme"]) ? $context["currentTheme"] : null), "mobile" =>         // line 18
(isset($context["mobile"]) ? $context["mobile"] : null), "maincolor" =>         // line 19
(isset($context["maincolor"]) ? $context["maincolor"] : null), "navigationcolor" =>         // line 20
(isset($context["navigationcolor"]) ? $context["navigationcolor"] : null))));
    }

    public function getTemplateName()
    {
        return "default/stylesheet-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  65 => 19,  64 => 18,  63 => 17,  62 => 16,  57 => 14,  51 => 12,  49 => 11,  43 => 9,  41 => 8,  35 => 6,  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/stylesheet-webpack.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\stylesheet-webpack.html.twig");
    }
}
