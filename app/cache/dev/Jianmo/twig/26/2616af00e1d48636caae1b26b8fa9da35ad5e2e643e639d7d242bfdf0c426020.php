<?php

/* powered-by.html.twig */
class __TwigTemplate_ae555b7ceebd58846dfa0e8839810670ae26fdcd7c6bee76bb78f13c7b24b5ec extends Twig_Template
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
        $__internal_4507e5cd19fd83ee158bdccc960809a8f3fa726dfde42bf640a30c64a0910c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4507e5cd19fd83ee158bdccc960809a8f3fa726dfde42bf640a30c64a0910c38->enter($__internal_4507e5cd19fd83ee158bdccc960809a8f3fa726dfde42bf640a30c64a0910c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "powered-by.html.twig"));

        // line 1
        if (((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned") && (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) != 2)) && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.licenseDomains")) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), twig_split_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.licenseDomains"), ";")))) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.name")) {
                // line 3
                echo "    Powered by <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.name"), "html", null, true);
                echo "</a>
  ";
            }
        } else {
            // line 6
            echo "  Powered by <a href=\"http://www.edusoho.com/\" target=\"_blank\">EduSoho v";
            echo twig_escape_filter($this->env, twig_constant("\\AppBundle\\System::VERSION"), "html", null, true);
            echo "</a>
  ©2014-";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, null, "Y"), "html", null, true);
            echo " ";
            if (( !_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2)) {
                echo "<a class=\"mlm\" href=\"http://www.howzhi.com/\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.power_by"), "html", null, true);
                echo "</a>";
            }
        }
        
        $__internal_4507e5cd19fd83ee158bdccc960809a8f3fa726dfde42bf640a30c64a0910c38->leave($__internal_4507e5cd19fd83ee158bdccc960809a8f3fa726dfde42bf640a30c64a0910c38_prof);

    }

    public function getTemplateName()
    {
        return "powered-by.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  36 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting('copyright.owned') and setting('copyright.thirdCopyright')|default(0) != 2 and setting('copyright.licenseDomains') and app.request.server.get('HTTP_HOST') in setting('copyright.licenseDomains')|split(';') %}
  {% if setting('copyright.name') %}
    Powered by <a href=\"{{ path('homepage') }}\" target=\"_blank\">{{ setting('copyright.name') }}</a>
  {% endif %}
{% else %}
  Powered by <a href=\"http://www.edusoho.com/\" target=\"_blank\">EduSoho v{{ constant('\\\\AppBundle\\\\System::VERSION') }}</a>
  ©2014-{{ null|date('Y') }} {% if not setting('copyright.thirdCopyright')|default(0) == 2 %}<a class=\"mlm\" href=\"http://www.howzhi.com/\" target=\"_blank\">{{'site.power_by'|trans}}</a>{% endif %}
{% endif %}
", "powered-by.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\powered-by.html.twig");
    }
}
