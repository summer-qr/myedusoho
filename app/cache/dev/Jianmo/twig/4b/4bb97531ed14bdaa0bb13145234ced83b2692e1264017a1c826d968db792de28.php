<?php

/* admin/system/pay/wxpay.html.twig */
class __TwigTemplate_b5a3e9e4ea32e5c2f82f855dea91f821c808a59a9388bfc65af11d47ef8fbfc0 extends Twig_Template
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
        $__internal_1eb61c0fc1c0e8824c77cb1ff0199ceb8ad512944a1fd74ba9247cd2b2a4d551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb61c0fc1c0e8824c77cb1ff0199ceb8ad512944a1fd74ba9247cd2b2a4d551->enter($__internal_1eb61c0fc1c0e8824c77cb1ff0199ceb8ad512944a1fd74ba9247cd2b2a4d551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/pay/wxpay.html.twig"));

        // line 1
        echo "<fieldset>
  <legend>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay"), "html", null, true);
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
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("wxpay_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.radio_btn.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.radio_btn.close")), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_enabled", array()));
        echo "
    </div>
    <div class=\"controls col-md-4 radios\">
      <a target=\"_blank\" href=\"http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_application"), "html", null, true);
        echo "</a>
    </div>
  </div>
  <div data-sub=\"wxpay\" ";
        // line 14
        if ( !$this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_enabled", array())) {
            echo " class=\"hidden\" ";
        }
        echo ">
    <div class=\"form-group\" style=\"margin-top: -15px;\">
      <div class=\"col-md-3 help-block\">
      </div>
      <div class=\"col-md-9 help-block\">
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_application_hint", array("%wxpayUrl%" => "http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html"));
        echo "
        <div class=\"alert alert-info text-left\" role=\"alert\">
          ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_application_tips", array("%qiqiuyuUrl%" => "http://www.qiqiuyu.com/article/892"));
        echo "
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_appid\">AppID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_appid\" name=\"wxpay_appid\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_appid", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_appid_word", array("%wxpayUrl%" => "https://mp.weixin.qq.com/"));
        echo "</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_secret\">AppSecret</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_secret\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_secret", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">
          <div class=\"help-block\">";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_secret_word", array("%wxpayUrl%" => "https://mp.weixin.qq.com/"));
        echo "</div>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_secret\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_secret"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_mp_secret\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_mp_secret", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_mp_secret", array()))) : ("")), "html", null, true);
        echo "\">
        <div class=\"help-block\">
          <div class=\"help-block\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_mp_secret_hint", array("%wxpMPHelpUrl%" => "http://www.qiqiuyu.com/faq/269/detail"));
        echo "</div>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_account\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_account"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_account\" name=\"wxpay_account\" class=\"form-control\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_account", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_account_hint", array("%wxpayUrl%" => "https://mp.weixin.qq.com/"));
        echo "</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_key\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_key"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_key\" name=\"wxpay_key\" class=\"form-control\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_key", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">
          ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.payment_setting.wxpay_key_hint", array("%wxpayUrl%" => "https://pay.weixin.qq.com/service_provider/index.shtml"));
        echo "
        </div>
      </div>
    </div>
  </div>

</fieldset>
";
        
        $__internal_1eb61c0fc1c0e8824c77cb1ff0199ceb8ad512944a1fd74ba9247cd2b2a4d551->leave($__internal_1eb61c0fc1c0e8824c77cb1ff0199ceb8ad512944a1fd74ba9247cd2b2a4d551_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/pay/wxpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 73,  150 => 71,  144 => 68,  136 => 63,  132 => 62,  126 => 59,  117 => 53,  112 => 51,  106 => 48,  97 => 42,  92 => 40,  81 => 32,  77 => 31,  64 => 21,  59 => 19,  49 => 14,  43 => 11,  37 => 8,  31 => 5,  25 => 2,  22 => 1,);
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
  <legend>{{ 'admin.payment_setting.wxpay'|trans }}</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>{{ 'admin.payment_setting.api_status'|trans }}</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      {{ radios('wxpay_enabled', {1:'form.radio_btn.open'|trans, 0:'form.radio_btn.close'|trans}, payment.wxpay_enabled) }}
    </div>
    <div class=\"controls col-md-4 radios\">
      <a target=\"_blank\" href=\"http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html\">{{ 'admin.payment_setting.wxpay_application'|trans }}</a>
    </div>
  </div>
  <div data-sub=\"wxpay\" {% if not payment.wxpay_enabled %} class=\"hidden\" {% endif %}>
    <div class=\"form-group\" style=\"margin-top: -15px;\">
      <div class=\"col-md-3 help-block\">
      </div>
      <div class=\"col-md-9 help-block\">
        {{ 'admin.payment_setting.wxpay_application_hint'|trans({'%wxpayUrl%': 'http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html'})|raw }}
        <div class=\"alert alert-info text-left\" role=\"alert\">
          {{ 'admin.payment_setting.wxpay_application_tips'|trans({'%qiqiuyuUrl%': 'http://www.qiqiuyu.com/article/892'})|raw }}
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_appid\">AppID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_appid\" name=\"wxpay_appid\" class=\"form-control\" value=\"{{payment.wxpay_appid}}\">
        <div class=\"help-block\">{{ 'admin.payment_setting.wxpay_appid_word'|trans({'%wxpayUrl%': 'https://mp.weixin.qq.com/'})|raw }}</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_secret\">AppSecret</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_secret\" class=\"form-control\" value=\"{{payment.wxpay_secret}}\">
        <div class=\"help-block\">
          <div class=\"help-block\">{{ 'admin.payment_setting.wxpay_secret_word'|trans({'%wxpayUrl%': 'https://mp.weixin.qq.com/'})|raw }}</div>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_secret\">{{ 'admin.payment_setting.wxpay_secret'|trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_mp_secret\" class=\"form-control\" value=\"{{payment.wxpay_mp_secret|default()}}\">
        <div class=\"help-block\">
          <div class=\"help-block\">{{ 'admin.payment_setting.wxpay_mp_secret_hint'|trans({'%wxpMPHelpUrl%': 'http://www.qiqiuyu.com/faq/269/detail'})|raw }}</div>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_account\">{{ 'admin.payment_setting.wxpay_account'|trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_account\" name=\"wxpay_account\" class=\"form-control\" value=\"{{payment.wxpay_account}}\">
        <div class=\"help-block\">{{ 'admin.payment_setting.wxpay_account_hint'|trans({'%wxpayUrl%': 'https://mp.weixin.qq.com/'})|raw }}</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_key\">{{ 'admin.payment_setting.wxpay_key'|trans }}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_key\" name=\"wxpay_key\" class=\"form-control\" value=\"{{payment.wxpay_key}}\">
        <div class=\"help-block\">
          {{ 'admin.payment_setting.wxpay_key_hint'|trans({'%wxpayUrl%': 'https://pay.weixin.qq.com/service_provider/index.shtml'})|raw }}
        </div>
      </div>
    </div>
  </div>

</fieldset>
", "admin/system/pay/wxpay.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\pay\\wxpay.html.twig");
    }
}
