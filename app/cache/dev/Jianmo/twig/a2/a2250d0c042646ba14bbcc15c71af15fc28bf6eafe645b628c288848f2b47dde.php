<?php

/* admin/faq/sdk.html.twig */
class __TwigTemplate_2c24019d32f3c82ae09bf4a6e75c9a71d392b6c7355ba131644476e93acfea3e extends Twig_Template
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
        $__internal_2620e31f949440d37426542d7eec2b7feaf59260591b1cb765bb2f5aa9cb440b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2620e31f949440d37426542d7eec2b7feaf59260591b1cb765bb2f5aa9cb440b->enter($__internal_2620e31f949440d37426542d7eec2b7feaf59260591b1cb765bb2f5aa9cb440b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/faq/sdk.html.twig"));

        // line 1
        if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) != 1)) {
            // line 2
            echo "  <script aysnc=\"aysnc\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("faq"), "html", null, true);
            echo "\"></script>
  <script aysnc=\"aysnc\">
    ";
            // line 4
            $context["faqApiServer"] = ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.faq_api_server", "") != "")) ? ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.faq_api_server")) : (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getScheme", array(), "method") . "://www.qiqiuyu.com")));
            // line 5
            echo "    try {
      new FaqSDK({
        id: 'faq-sdk',
        apiUrl: '";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["faqApiServer"]) ? $context["faqApiServer"] : $this->getContext($context, "faqApiServer")), "html", null, true);
            echo "/faq/api/hotlist?version=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("/"), "html", null, true);
            echo "&host=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getHost", array(), "method"), "html", null, true);
            echo "&url=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getRequestUri", array(), "method"), "html", null, true);
            echo "',
        color: '#43bc60',
      });
    }
    catch(err){
      console.log(err);
    }
  </script>
";
        }
        
        $__internal_2620e31f949440d37426542d7eec2b7feaf59260591b1cb765bb2f5aa9cb440b->leave($__internal_2620e31f949440d37426542d7eec2b7feaf59260591b1cb765bb2f5aa9cb440b_prof);

    }

    public function getTemplateName()
    {
        return "admin/faq/sdk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  32 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting('copyright.thirdCopyright')|default(0) != 1 %}
  <script aysnc=\"aysnc\" src=\"{{ cloud_sdk_url('faq') }}\"></script>
  <script aysnc=\"aysnc\">
    {% set faqApiServer = setting(\"magic.faq_api_server\", '') != '' ? setting(\"magic.faq_api_server\") : app.request.getScheme() ~ '://www.qiqiuyu.com' %}
    try {
      new FaqSDK({
        id: 'faq-sdk',
        apiUrl: '{{ faqApiServer }}/faq/api/hotlist?version={{ asset_version('/') }}&host={{ app.request.getHost() }}&url={{ app.request.getRequestUri() }}',
        color: '#43bc60',
      });
    }
    catch(err){
      console.log(err);
    }
  </script>
{% endif %}", "admin/faq/sdk.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\faq\\sdk.html.twig");
    }
}
