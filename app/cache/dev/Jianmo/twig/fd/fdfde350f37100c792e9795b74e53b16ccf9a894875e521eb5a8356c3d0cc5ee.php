<?php

/* admin/system/ip-blacklist.html.twig */
class __TwigTemplate_48e639aec8fb1bd36c287643417f471a032843a01195d01dae300f5b1f8b0d41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/ip-blacklist.html.twig", 1);
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
        $__internal_2064451cd7c28b74e7915ee1ee2bcccd7b98ded0aaedd29812b9e1d53494e1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2064451cd7c28b74e7915ee1ee2bcccd7b98ded0aaedd29812b9e1d53494e1d5->enter($__internal_2064451cd7c28b74e7915ee1ee2bcccd7b98ded0aaedd29812b9e1d53494e1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/ip-blacklist.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_ip_blacklist_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2064451cd7c28b74e7915ee1ee2bcccd7b98ded0aaedd29812b9e1d53494e1d5->leave($__internal_2064451cd7c28b74e7915ee1ee2bcccd7b98ded0aaedd29812b9e1d53494e1d5_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_19f8b091d72f535f1a49c26b609ca7c0c5ba921bef8c7974fa848ff3ba806dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f8b091d72f535f1a49c26b609ca7c0c5ba921bef8c7974fa848ff3ba806dc1->enter($__internal_19f8b091d72f535f1a49c26b609ca7c0c5ba921bef8c7974fa848ff3ba806dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" method=\"post\">
    <fieldset>
      <div class=\"form-group\">

        <div class=\"col-md-2 control-label\">
          <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.ip_black_list.titile"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-10\">
          <textarea id=\"blackListIps\" name=\"blackListIps\" rows=\"8\" class=\"form-control\">";
        // line 17
        if ((isset($context["blackListIps"]) ? $context["blackListIps"] : $this->getContext($context, "blackListIps"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blackListIps"]) ? $context["blackListIps"] : $this->getContext($context, "blackListIps")), "ips", array()), "html", null, true);
        }
        echo "</textarea>
          <div class=\"help-block\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.ip_black_list.tips"), "html", null, true);
        echo "</div>
        </div>

        ";
        // line 30
        echo "
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-10\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        </div>
      </div>
    </fieldset>
  </form>

";
        
        $__internal_19f8b091d72f535f1a49c26b609ca7c0c5ba921bef8c7974fa848ff3ba806dc1->leave($__internal_19f8b091d72f535f1a49c26b609ca7c0c5ba921bef8c7974fa848ff3ba806dc1_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/ip-blacklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  79 => 33,  74 => 30,  68 => 18,  62 => 17,  56 => 14,  46 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_setting_ip_blacklist_manage' %}

{% block main %}

{{ web_macro.flash_messages() }}

  <form class=\"form-horizontal\" method=\"post\">
    <fieldset>
      <div class=\"form-group\">

        <div class=\"col-md-2 control-label\">
          <label >{{'admin.ip_black_list.titile'|trans}}</label>
        </div>
        <div class=\"controls col-md-10\">
          <textarea id=\"blackListIps\" name=\"blackListIps\" rows=\"8\" class=\"form-control\">{% if blackListIps  %}{{blackListIps.ips}}{% endif %}</textarea>
          <div class=\"help-block\">{{'admin.ip_black_list.tips'|trans}}</div>
        </div>

        {#<div class=\"col-md-2 control-label\">
              <label >{{'IP白名单'|trans}}</label>
            </div>
            <div class=\"controls col-md-10\">
              <textarea id=\"whiteListIps\" name=\"whiteListIps\" rows=\"8\" class=\"form-control\">{% if whiteListIps  %}{{whiteListIps.ips}}{% endif %}</textarea>
              <div class=\"help-block\">{{'一行一个IP，只有列表中的IP地址允许访问系统！可使用通配符，例如：202.101.20.*'|trans}}</div>
              <div class=\"alert alert-info\">{{'警告：如果设置了白名单，必须将本机IP包含在内，否则将导致管理员无法访问系统！'|trans}}</div>

            </div>#}

        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-10\">
          <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
        </div>
      </div>
    </fieldset>
  </form>

{% endblock %}", "admin/system/ip-blacklist.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\ip-blacklist.html.twig");
    }
}
