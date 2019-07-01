<?php

/* common/weixin-share.html.twig */
class __TwigTemplate_9537ef6ba4afeb367dc7f05ddb8f905d98ef07030ba6b8d9099a5812d1699965 extends Twig_Template
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
        $__internal_f80e0e31cab6f55eccfdbf44be897bcda095d8020bf84ccf2237ed5c36baefe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80e0e31cab6f55eccfdbf44be897bcda095d8020bf84ccf2237ed5c36baefe0->enter($__internal_f80e0e31cab6f55eccfdbf44be897bcda095d8020bf84ccf2237ed5c36baefe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "common/weixin-share.html.twig"));

        // line 1
        $context["wxconfig"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->weixinConfig();
        // line 2
        if (((array_key_exists("wxconfig", $context)) ? (_twig_default_filter((isset($context["wxconfig"]) ? $context["wxconfig"] : $this->getContext($context, "wxconfig")), null)) : (null))) {
            // line 3
            echo "  ";
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/weixin-share/index.js"));
            // line 4
            echo "  <div class=\"hidden jweixin-data\" 
    data-config=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["wxconfig"]) ? $context["wxconfig"] : $this->getContext($context, "wxconfig")), "html", null, true);
            echo "\"
    data-title=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "\" 
    data-desc='";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")), "html", null, true);
            echo "'
    data-link=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
            echo "\" 
    data-img-url=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["imgUrl"]) ? $context["imgUrl"] : $this->getContext($context, "imgUrl")), "html", null, true);
            echo "\" 
    data-type=\"";
            // line 10
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "")) : ("")), "html", null, true);
            echo "\" 
    data-data-url=\"";
            // line 11
            echo twig_escape_filter($this->env, ((array_key_exists("dataUrl", $context)) ? (_twig_default_filter((isset($context["dataUrl"]) ? $context["dataUrl"] : $this->getContext($context, "dataUrl")), "")) : ("")), "html", null, true);
            echo "\">
  </div>
";
        }
        // line 14
        echo "
";
        
        $__internal_f80e0e31cab6f55eccfdbf44be897bcda095d8020bf84ccf2237ed5c36baefe0->leave($__internal_f80e0e31cab6f55eccfdbf44be897bcda095d8020bf84ccf2237ed5c36baefe0_prof);

    }

    public function getTemplateName()
    {
        return "common/weixin-share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set wxconfig = wx_js_sdk_config() %}
{% if wxconfig|default(null) %}
  {% do script(['app/js/weixin-share/index.js']) %}
  <div class=\"hidden jweixin-data\" 
    data-config=\"{{wxconfig}}\"
    data-title=\"{{title}}\" 
    data-desc='{{desc}}'
    data-link=\"{{link}}\" 
    data-img-url=\"{{imgUrl}}\" 
    data-type=\"{{type|default('')}}\" 
    data-data-url=\"{{dataUrl|default('')}}\">
  </div>
{% endif %}

{# \t
\ttitle: '', // 分享标题
\tdesc: '', // 分享描述
\tlink: '', // 分享链接
\timgUrl: '', // 分享图标
\ttype: 'link', // 分享类型,music、video或link，不填默认为link
\tdataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空 
#}", "common/weixin-share.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\common\\weixin-share.html.twig");
    }
}
