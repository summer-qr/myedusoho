<?php

/* admin/system/payment.html.twig */
class __TwigTemplate_8e4f5e0fdfc3cb3b66b44bb61f0e6b7c791afee3c0f2c3a6f6608083631e1539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/payment.html.twig", 1);
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
        $__internal_e4e79fb10b95a304e6d72acf86ec0c5bdd820917809a2fdde7a88a4f3f385518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e79fb10b95a304e6d72acf86ec0c5bdd820917809a2fdde7a88a4f3f385518->enter($__internal_e4e79fb10b95a304e6d72acf86ec0c5bdd820917809a2fdde7a88a4f3f385518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/payment.html.twig"));

        // line 3
        $context["script_controller"] = "system/payment";
        // line 5
        $context["menu"] = "admin_payment";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e79fb10b95a304e6d72acf86ec0c5bdd820917809a2fdde7a88a4f3f385518->leave($__internal_e4e79fb10b95a304e6d72acf86ec0c5bdd820917809a2fdde7a88a4f3f385518_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_c2157b9da409588472403b5122e24e06909b30c63251e111b60e77737a93d3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2157b9da409588472403b5122e24e06909b30c63251e111b60e77737a93d3fb->enter($__internal_c2157b9da409588472403b5122e24e06909b30c63251e111b60e77737a93d3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.payment"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.radio_btn.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.radio_btn.close")), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "enabled", array()));
        echo "

      <div class=\"text-muted payment-close ";
        // line 19
        if ($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "enabled", array())) {
            echo " hidden ";
        }
        echo "\">
          ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.close_help.tips"), "html", null, true);
        echo "
      </div>
      <div class=\"text-muted payment-open ";
        // line 22
        if ( !$this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "enabled", array())) {
            echo " hidden ";
        }
        echo "\">
          ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.open_help.tips"), "html", null, true);
        echo "
      </div>
    </div>
  </div>


    <div class=\"form-group payment-close ";
        // line 29
        if ($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "enabled", array())) {
            echo " hidden ";
        }
        echo "\">
      <div class=\"col-md-3 control-label\">
        <label for=\"disabled_message\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.pay_disabled_tips"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "disabled_message", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>

    <div class=\"payment-open ";
        // line 38
        if ( !$this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "enabled", array())) {
            echo " hidden ";
        }
        echo "\">
      ";
        // line 39
        $this->loadTemplate("admin/system/pay/alipay.html.twig", "admin/system/payment.html.twig", 39)->display($context);
        // line 40
        echo "      ";
        $this->loadTemplate("admin/system/pay/wxpay.html.twig", "admin/system/payment.html.twig", 40)->display($context);
        // line 41
        echo "      ";
        // line 43
        echo "      ";
        $this->loadTemplate("admin/system/pay/llpay.html.twig", "admin/system/payment.html.twig", 43)->display($context);
        // line 44
        echo "    </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" id=\"payment-btn\" class=\"btn btn-primary\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
    
  </div>
  <div class=\"form-group submit-error hidden\"> 
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
       <div class=\"help-block\"><span class=\"text-danger\"> ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.submit_error.tips"), "html", null, true);
        echo "</span></div>
    </div>
  </div>
  
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
        
        $__internal_c2157b9da409588472403b5122e24e06909b30c63251e111b60e77737a93d3fb->leave($__internal_c2157b9da409588472403b5122e24e06909b30c63251e111b60e77737a93d3fb_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 60,  146 => 56,  136 => 49,  129 => 44,  126 => 43,  124 => 41,  121 => 40,  119 => 39,  113 => 38,  106 => 34,  100 => 31,  93 => 29,  84 => 23,  78 => 22,  73 => 20,  67 => 19,  62 => 17,  56 => 14,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set script_controller = 'system/payment' %}

{% set menu = 'admin_payment' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >{{'admin.payment_setting.payment'|trans}}</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('enabled', {1:'form.radio_btn.open'|trans, 0:'form.radio_btn.close'|trans}, payment.enabled) }}

      <div class=\"text-muted payment-close {% if payment.enabled %} hidden {% endif %}\">
          {{ 'admin.payment_setting.close_help.tips'|trans }}
      </div>
      <div class=\"text-muted payment-open {% if not payment.enabled %} hidden {% endif %}\">
          {{ 'admin.payment_setting.open_help.tips'|trans }}
      </div>
    </div>
  </div>


    <div class=\"form-group payment-close {% if payment.enabled %} hidden {% endif %}\">
      <div class=\"col-md-3 control-label\">
        <label for=\"disabled_message\">{{'admin.payment_setting.pay_disabled_tips'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">{{payment.disabled_message}}</textarea>
      </div>
    </div>

    <div class=\"payment-open {% if not payment.enabled %} hidden {% endif %}\">
      {% include 'admin/system/pay/alipay.html.twig'%}
      {% include 'admin/system/pay/wxpay.html.twig'%}
      {# {% include 'admin/system/pay/heepay.html.twig'%}
      {% include 'admin/system/pay/quickly.html.twig'%} #}
      {% include 'admin/system/pay/llpay.html.twig'%}
    </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" id=\"payment-btn\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>
    </div>
    
  </div>
  <div class=\"form-group submit-error hidden\"> 
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
       <div class=\"help-block\"><span class=\"text-danger\"> {{ 'admin.payment_setting.submit_error.tips'|trans }}</span></div>
    </div>
  </div>
  
  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
</form>
{% endblock %}", "admin/system/payment.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\payment.html.twig");
    }
}
