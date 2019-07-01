<?php

/* bootstrap-modal-layout.html.twig */
class __TwigTemplate_2cf445ec4dc3c1c4e6017d87234cfd6c474c387637a25580984c9c336d27d09a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'modal_content' => array($this, 'block_modal_content'),
            'modal_header' => array($this, 'block_modal_header'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a341b66f0b68b189481fb3f850af7cafd6161ea1b27a44d7c1131f85c0f6ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a341b66f0b68b189481fb3f850af7cafd6161ea1b27a44d7c1131f85c0f6ea7->enter($__internal_0a341b66f0b68b189481fb3f850af7cafd6161ea1b27a44d7c1131f85c0f6ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap-modal-layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "bootstrap-modal-layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "bootstrap-modal-layout.html.twig", 2);
        // line 3
        $this->loadTemplate("css_loader.html.twig", "bootstrap-modal-layout.html.twig", 3)->display($context);
        // line 4
        echo "
<div class=\"modal-dialog ";
        // line 5
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter((isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "")) : (""))) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "html", null, true);
        }
        echo "\" data-clear=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("closeClear", $context)) ? (_twig_default_filter((isset($context["closeClear"]) ? $context["closeClear"] : $this->getContext($context, "closeClear")), 0)) : (0)), "html", null, true);
        echo "\">
  ";
        // line 6
        $this->displayBlock('modal_content', $context, $blocks);
        // line 22
        echo "  ";
        $this->loadTemplate("js_loader_async.html.twig", "bootstrap-modal-layout.html.twig", 22)->display($context);
        // line 23
        echo "</div>";
        
        $__internal_0a341b66f0b68b189481fb3f850af7cafd6161ea1b27a44d7c1131f85c0f6ea7->leave($__internal_0a341b66f0b68b189481fb3f850af7cafd6161ea1b27a44d7c1131f85c0f6ea7_prof);

    }

    // line 6
    public function block_modal_content($context, array $blocks = array())
    {
        $__internal_07817d88f3f823943c9ece870d5737b67766f4f135deb254407fa9c45089c382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07817d88f3f823943c9ece870d5737b67766f4f135deb254407fa9c45089c382->enter($__internal_07817d88f3f823943c9ece870d5737b67766f4f135deb254407fa9c45089c382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_content"));

        // line 7
        echo "    <div class=\"modal-content\">
      ";
        // line 8
        $this->displayBlock('modal_header', $context, $blocks);
        // line 16
        echo "      <div class=\"modal-body\">";
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
      ";
        // line 17
        if ( !((array_key_exists("hide_footer", $context)) ? (_twig_default_filter((isset($context["hide_footer"]) ? $context["hide_footer"] : $this->getContext($context, "hide_footer")), false)) : (false))) {
            // line 18
            echo "        <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
      ";
        }
        // line 20
        echo "    </div>
  ";
        
        $__internal_07817d88f3f823943c9ece870d5737b67766f4f135deb254407fa9c45089c382->leave($__internal_07817d88f3f823943c9ece870d5737b67766f4f135deb254407fa9c45089c382_prof);

    }

    // line 8
    public function block_modal_header($context, array $blocks = array())
    {
        $__internal_5ee77514a34cc52b8e445ba95013f3864905de48db70a5863b25e985676ce427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee77514a34cc52b8e445ba95013f3864905de48db70a5863b25e985676ce427->enter($__internal_5ee77514a34cc52b8e445ba95013f3864905de48db70a5863b25e985676ce427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_header"));

        // line 9
        echo "        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
            <i class=\"cd-icon cd-icon-close\"></i>
          </button>
          <h4 class=\"modal-title\">";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
        </div>
      ";
        
        $__internal_5ee77514a34cc52b8e445ba95013f3864905de48db70a5863b25e985676ce427->leave($__internal_5ee77514a34cc52b8e445ba95013f3864905de48db70a5863b25e985676ce427_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_f0c277b810e61d6628b3963aa078aa20ec01994c51159d0d3f658bec354d1433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c277b810e61d6628b3963aa078aa20ec01994c51159d0d3f658bec354d1433->enter($__internal_f0c277b810e61d6628b3963aa078aa20ec01994c51159d0d3f658bec354d1433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f0c277b810e61d6628b3963aa078aa20ec01994c51159d0d3f658bec354d1433->leave($__internal_f0c277b810e61d6628b3963aa078aa20ec01994c51159d0d3f658bec354d1433_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0c57ea2ca62817d1ff7fb61c6ac842e73da394f872cf432274f38cb83c4c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0c57ea2ca62817d1ff7fb61c6ac842e73da394f872cf432274f38cb83c4c54->enter($__internal_bf0c57ea2ca62817d1ff7fb61c6ac842e73da394f872cf432274f38cb83c4c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf0c57ea2ca62817d1ff7fb61c6ac842e73da394f872cf432274f38cb83c4c54->leave($__internal_bf0c57ea2ca62817d1ff7fb61c6ac842e73da394f872cf432274f38cb83c4c54_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2ff32c5cd421d8144bea9511ae62d7bef7b4f316702d6d8860064ccd2bcf4a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff32c5cd421d8144bea9511ae62d7bef7b4f316702d6d8860064ccd2bcf4a49->enter($__internal_2ff32c5cd421d8144bea9511ae62d7bef7b4f316702d6d8860064ccd2bcf4a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_2ff32c5cd421d8144bea9511ae62d7bef7b4f316702d6d8860064ccd2bcf4a49->leave($__internal_2ff32c5cd421d8144bea9511ae62d7bef7b4f316702d6d8860064ccd2bcf4a49_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 18,  121 => 16,  101 => 13,  95 => 9,  89 => 8,  81 => 20,  75 => 18,  73 => 17,  68 => 16,  66 => 8,  63 => 7,  57 => 6,  50 => 23,  47 => 22,  45 => 6,  36 => 5,  33 => 4,  31 => 3,  29 => 2,  27 => 1,);
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
{% import \"admin/macro.html.twig\" as admin_macro %}
{% include 'css_loader.html.twig' %}

<div class=\"modal-dialog {% if modal_class|default('') %} {{ modal_class }}{% endif %}\" data-clear=\"{{ closeClear|default(0) }}\">
  {% block modal_content %}
    <div class=\"modal-content\">
      {% block modal_header %}
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
            <i class=\"cd-icon cd-icon-close\"></i>
          </button>
          <h4 class=\"modal-title\">{% block title %}{% endblock %}</h4>
        </div>
      {% endblock %}
      <div class=\"modal-body\">{% block body %}{% endblock %}</div>
      {% if not hide_footer|default(false) %}
        <div class=\"modal-footer\">{% block footer %}{% endblock %}</div>
      {% endif %}
    </div>
  {% endblock %}
  {% include 'js_loader_async.html.twig' %}
</div>", "bootstrap-modal-layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\bootstrap-modal-layout.html.twig");
    }
}
