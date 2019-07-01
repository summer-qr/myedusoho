<?php

/* admin/system/pay/alipay.html.twig */
class __TwigTemplate_1f15cf4fe5f452062096cbc8150c2ed804c794c749f7a4e450da05e4e9f5f3af extends Twig_Template
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
        $__internal_28f658a2d8c7ca85da07e34efba981c353c90cdb1993c8935599a82250e061d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f658a2d8c7ca85da07e34efba981c353c90cdb1993c8935599a82250e061d7->enter($__internal_28f658a2d8c7ca85da07e34efba981c353c90cdb1993c8935599a82250e061d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/pay/alipay.html.twig"));

        // line 1
        echo "<fieldset>
  <legend>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.alipay"), "html", null, true);
        echo "</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.api_status"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 8
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("alipay_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.radio_btn.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.radio_btn.close")), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_enabled", array()));
        echo "
    </div>
  </div>
  <div data-sub=\"alipay\" ";
        // line 11
        if ( !$this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_enabled", array())) {
            echo " class=\"hidden\" ";
        }
        echo ">
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.alipay_api_type.direct"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <p class=\"form-control-static\">
          ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.alipay_api_type.direct.hint", array("%aliApiHelpUrl%" => "http://www.qiqiuyu.com/faq/258/detail"));
        echo "
        </p>
      </div>
    </div>
     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.alipay_api_type.mobile"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <p class=\"form-control-static\">
          ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.alipay_api_type.mobile.hint", array("%aliApiHelpUrl%" => "http://www.qiqiuyu.com/faq/543/detail"));
        echo "
        </p>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_key\" name=\"alipay_key\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_key", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_secret\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.alipay_secret"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_secret\" name=\"alipay_secret\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_secret", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">
          ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.alipay_hint", array("%alipayUrl%" => "https://b.alipay.com/index.htm"));
        echo "
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_account\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.alipay_account"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_account\" name=\"alipay_account\" class=\"form-control\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_account", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.alipay_mobile_payment_hint"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </div>
</fieldset>";
        
        $__internal_28f658a2d8c7ca85da07e34efba981c353c90cdb1993c8935599a82250e061d7->leave($__internal_28f658a2d8c7ca85da07e34efba981c353c90cdb1993c8935599a82250e061d7_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/pay/alipay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 57,  120 => 56,  114 => 53,  105 => 47,  100 => 45,  94 => 42,  86 => 37,  74 => 28,  67 => 24,  58 => 18,  51 => 14,  43 => 11,  37 => 8,  31 => 5,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<fieldset>
  <legend>{{ 'admin.payment_setting.alipay'|trans }}</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>{{ 'admin.payment_setting.api_status'|trans }}</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('alipay_enabled', {1:'form.radio_btn.open'|trans, 0:'form.radio_btn.close'|trans}, payment.alipay_enabled) }}
    </div>
  </div>
  <div data-sub=\"alipay\" {% if not payment.alipay_enabled %} class=\"hidden\" {% endif %}>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{ 'admin.payment_setting.alipay_api_type.direct' | trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <p class=\"form-control-static\">
          {{ 'admin.payment_setting.alipay_api_type.direct.hint' | trans({'%aliApiHelpUrl%': 'http://www.qiqiuyu.com/faq/258/detail'})|raw }}
        </p>
      </div>
    </div>
     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{ 'admin.payment_setting.alipay_api_type.mobile' | trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <p class=\"form-control-static\">
          {{ 'admin.payment_setting.alipay_api_type.mobile.hint' | trans({'%aliApiHelpUrl%': 'http://www.qiqiuyu.com/faq/543/detail'})|raw }}
        </p>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_key\" name=\"alipay_key\" class=\"form-control\" value=\"{{payment.alipay_key}}\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_secret\">{{ 'admin.payment_setting.alipay_secret'|trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_secret\" name=\"alipay_secret\" class=\"form-control\" value=\"{{payment.alipay_secret}}\">
        <div class=\"help-block\">
          {{ 'admin.payment_setting.alipay_hint'|trans({'%alipayUrl%': 'https://b.alipay.com/index.htm'})|raw }}
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_account\">{{ 'admin.payment_setting.alipay_account'|trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_account\" name=\"alipay_account\" class=\"form-control\" value=\"{{payment.alipay_account}}\">
        <div class=\"help-block\">{{ 'admin.payment_setting.alipay_mobile_payment_hint'|trans }}</div>
      </div>
    </div>
  </div>
</fieldset>", "admin/system/pay/alipay.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\pay\\alipay.html.twig");
    }
}
