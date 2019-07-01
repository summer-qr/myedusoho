<?php

/* admin/article/setting.html.twig */
class __TwigTemplate_4f6357b921a77a2c985831bb413d0f94c66cdf5c4ec07e07b14d6cf9a314cc17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/article/setting.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72242310b9e3c4527af90de18d69ccfd8d4682b5f15098767547913496876b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72242310b9e3c4527af90de18d69ccfd8d4682b5f15098767547913496876b3a->enter($__internal_72242310b9e3c4527af90de18d69ccfd8d4682b5f15098767547913496876b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/article/setting.html.twig"));

        // line 3
        $context["menu"] = "admin_article_setting";
        // line 4
        $context["script_controller"] = "article/setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72242310b9e3c4527af90de18d69ccfd8d4682b5f15098767547913496876b3a->leave($__internal_72242310b9e3c4527af90de18d69ccfd8d4682b5f15098767547913496876b3a_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_4281f71668b594ac61e4c3b1a68ceb7b9244c49b8e05c87329b403955b8e8a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4281f71668b594ac61e4c3b1a68ceb7b9244c49b8e05c87329b403955b8e8a46->enter($__internal_4281f71668b594ac61e4c3b1a68ceb7b9244c49b8e05c87329b403955b8e8a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" id=\"article-form\" method=\"post\">
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.article_setting.name"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleSetting"]) ? $context["articleSetting"] : $this->getContext($context, "articleSetting")), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"pageNums\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.article_setting.pageNum"), "html", null, true);
        echo "</label> 
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"pageNums\" name=\"pageNums\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleSetting"]) ? $context["articleSetting"] : $this->getContext($context, "articleSetting")), "pageNums", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>  
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
        
        $__internal_4281f71668b594ac61e4c3b1a68ceb7b9244c49b8e05c87329b403955b8e8a46->leave($__internal_4281f71668b594ac61e4c3b1a68ceb7b9244c49b8e05c87329b403955b8e8a46_prof);

    }

    public function getTemplateName()
    {
        return "admin/article/setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 38,  89 => 34,  79 => 27,  73 => 24,  64 => 18,  58 => 15,  49 => 9,  45 => 7,  39 => 6,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% set menu = 'admin_article_setting' %}
{% set script_controller = 'article/setting' %}

{% block main %}


{{ web_macro.flash_messages() }}

  <form class=\"form-horizontal\" id=\"article-form\" method=\"post\">
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">{{'admin.article_setting.name'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"{{ articleSetting.name }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"pageNums\">{{'admin.article_setting.pageNum'|trans}}</label> 
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"pageNums\" name=\"pageNums\" class=\"form-control\" value=\"{{ articleSetting.pageNums }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>  
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
  </form>

{% endblock %}", "admin/article/setting.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\article\\setting.html.twig");
    }
}
