<?php

/* admin/system/pay/llpay.html.twig */
class __TwigTemplate_26ce1e0f85619dc7d86df0f046c289cb77833419311a49db8bcd40286a12568b extends Twig_Template
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
        $__internal_9d0849410bfd6693fbf8723c6efdd4a09040d10ead90505dc18874f2b3aae814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0849410bfd6693fbf8723c6efdd4a09040d10ead90505dc18874f2b3aae814->enter($__internal_9d0849410bfd6693fbf8723c6efdd4a09040d10ead90505dc18874f2b3aae814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/pay/llpay.html.twig"));

        // line 1
        echo "<fieldset>
  <legend>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.llpay"), "html", null, true);
        echo "</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.api_status"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      ";
        // line 8
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("llpay_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.radio_btn.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.radio_btn.close")), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "llpay_enabled", array()));
        echo "
    </div>
  </div>

  <div data-sub=\"llpay\" ";
        // line 12
        if ( !$this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "llpay_enabled", array())) {
            echo " class=\"hidden\" ";
        }
        echo ">
    <div class=\"form-group\" style=\"margin-top: -15px;\">
      <div class=\"col-md-3 help-block\">
      </div>
      <div class=\"col-md-9 help-block\">
        <div class=\"alert alert-info text-left\" role=\"alert\">
          ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.llpay_application_tips", array("%qiqiuyuUrl%" => "http://www.qiqiuyu.com/article/894"));
        echo "
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"llpay_key\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.llpay_key"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"llpay_key\" name=\"llpay_key\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "llpay_key", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"llpay_accessKey\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.llpay_public_key"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea name=\"llpay_accessKey\" id=\"llpay_accessKey\" rows=\"5\" class=\"form-control\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "llpay_accessKey", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"llpay_secretKey\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.llpay_private_key"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea name=\"llpay_secretKey\" id=\"llpay_secretKey\" rows=\"5\" class=\"form-control\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "llpay_secretKey", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>
  </div>
</fieldset>";
        
        $__internal_9d0849410bfd6693fbf8723c6efdd4a09040d10ead90505dc18874f2b3aae814->leave($__internal_9d0849410bfd6693fbf8723c6efdd4a09040d10ead90505dc18874f2b3aae814_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/pay/llpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 44,  93 => 41,  85 => 36,  79 => 33,  71 => 28,  65 => 25,  55 => 18,  44 => 12,  37 => 8,  31 => 5,  25 => 2,  22 => 1,);
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
  <legend>{{ 'admin.payment_setting.llpay'|trans }}</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>{{ 'admin.payment_setting.api_status'|trans }}</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      {{ radios('llpay_enabled', {1:'form.radio_btn.open'|trans, 0:'form.radio_btn.close'|trans}, payment.llpay_enabled) }}
    </div>
  </div>

  <div data-sub=\"llpay\" {% if not payment.llpay_enabled %} class=\"hidden\" {% endif %}>
    <div class=\"form-group\" style=\"margin-top: -15px;\">
      <div class=\"col-md-3 help-block\">
      </div>
      <div class=\"col-md-9 help-block\">
        <div class=\"alert alert-info text-left\" role=\"alert\">
          {{ 'admin.payment_setting.llpay_application_tips'|trans({'%qiqiuyuUrl%': 'http://www.qiqiuyu.com/article/894'})|raw }}
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"llpay_key\">{{ 'admin.payment_setting.llpay_key'|trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"llpay_key\" name=\"llpay_key\" class=\"form-control\" value=\"{{payment.llpay_key}}\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"llpay_accessKey\">{{ 'admin.payment_setting.llpay_public_key'|trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea name=\"llpay_accessKey\" id=\"llpay_accessKey\" rows=\"5\" class=\"form-control\">{{payment.llpay_accessKey}}</textarea>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"llpay_secretKey\">{{ 'admin.payment_setting.llpay_private_key'|trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea name=\"llpay_secretKey\" id=\"llpay_secretKey\" rows=\"5\" class=\"form-control\">{{payment.llpay_secretKey}}</textarea>
      </div>
    </div>
  </div>
</fieldset>", "admin/system/pay/llpay.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\pay\\llpay.html.twig");
    }
}
