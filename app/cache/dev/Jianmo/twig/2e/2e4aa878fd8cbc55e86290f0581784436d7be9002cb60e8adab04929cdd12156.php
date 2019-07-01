<?php

/* admin/order/list.html.twig */
class __TwigTemplate_f02c36426ba0588fce6efb4c9ff18b29b4d8eeebc27ef446d6cacaab6e0b9004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/order/list.html.twig", 1);
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
        $__internal_f1180665e4799f4dc7b6e70831442526709e9541bea34c33451a0f43796f0a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1180665e4799f4dc7b6e70831442526709e9541bea34c33451a0f43796f0a17->enter($__internal_f1180665e4799f4dc7b6e70831442526709e9541bea34c33451a0f43796f0a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/order/list.html.twig"));

        // line 3
        $context["menu"] = "admin_order_manage";
        // line 5
        $context["script_controller"] = "manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1180665e4799f4dc7b6e70831442526709e9541bea34c33451a0f43796f0a17->leave($__internal_f1180665e4799f4dc7b6e70831442526709e9541bea34c33451a0f43796f0a17_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_7c0b75a884f9c6c12b81dc828e822d7d40c55e9a7e6b90bcc8847e51b8005b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0b75a884f9c6c12b81dc828e822d7d40c55e9a7e6b90bcc8847e51b8005b28->enter($__internal_7c0b75a884f9c6c12b81dc828e822d7d40c55e9a7e6b90bcc8847e51b8005b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
      <div class=\"form-group\">
        <label class=\"ptm\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.created_time"), "html", null, true);
        echo ":</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\"
          placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.placeholder.start_date"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control mrm\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\"
          placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.placeholder.end_date"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <label class=\"ptm\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.screen_condition"), "html", null, true);
        echo "</label>
        <select class=\"form-control\" name=\"orderItemType\">
          ";
        // line 22
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("orderItemType"), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "orderItemType"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.product_type"));
        echo "
        </select>

        <select class=\"form-control\" name=\"displayStatus\">
          ";
        // line 26
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("orderDisplayStatus"), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "displayStatus"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.status"));
        echo "
        </select>

        <select class=\"form-control\" name=\"payment\">
          ";
        // line 30
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("paymentSelect"), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "payment"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.payment_pattern"));
        echo "
        </select>
        <select class=\"form-control\" name=\"source\">
          ";
        // line 33
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("source"), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "source"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.source"));
        echo "
        </select>
      </div>
      <div class=\"form-group\" style=\"display:none;\">
        <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\" , placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.paid_time_range.input_placeholder"), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"mbm\">
      <div class=\"form-group\">
        <label class=\"ptm\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.keyword"), "html", null, true);
        echo "</label>
        <select class=\"form-control\" name=\"keywordType\">
          ";
        // line 44
        $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.id"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.buyer"), "title_like" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.title"));
        // line 49
        echo "          ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "keywordType"), "method"));
        echo "
        </select>

        <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.placeholder.keyword"), "html", null, true);
        echo "\">
      </div>

      <button class=\"btn btn-primary\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
      ";
        // line 56
        $this->loadTemplate("export/export-btn.html.twig", "admin/order/list.html.twig", 56)->display(array_merge($context, array("exportFileName" => "order", "targetFormId" => "user-search-form")));
        // line 60
        echo "    </div>
  </form>
  ";
        // line 62
        $this->loadTemplate("admin/order/order-table.html.twig", "admin/order/list.html.twig", 62)->display($context);
        
        $__internal_7c0b75a884f9c6c12b81dc828e822d7d40c55e9a7e6b90bcc8847e51b8005b28->leave($__internal_7c0b75a884f9c6c12b81dc828e822d7d40c55e9a7e6b90bcc8847e51b8005b28_prof);

    }

    public function getTemplateName()
    {
        return "admin/order/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 62,  142 => 60,  140 => 56,  136 => 55,  128 => 52,  121 => 49,  119 => 44,  114 => 42,  106 => 37,  99 => 33,  93 => 30,  86 => 26,  79 => 22,  74 => 20,  68 => 17,  64 => 16,  59 => 14,  55 => 13,  51 => 12,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_order_manage' %}

{% set script_controller = 'manage/list' %}

{% block main %}

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
      <div class=\"form-group\">
        <label class=\"ptm\">{{ 'order.created_time'|trans }}:</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"{{ request.get('startDateTime') }}\"
          placeholder=\"{{ 'form.placeholder.start_date'|trans }}\">
        -
        <input class=\"form-control mrm\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"{{ request.get('endDateTime') }}\"
          placeholder=\"{{ 'form.placeholder.end_date'|trans }}\">
      </div>
      <div class=\"form-group\">
        <label class=\"ptm\">{{ 'admin.order.screen_condition'|trans }}</label>
        <select class=\"form-control\" name=\"orderItemType\">
          {{ select_options(dict('orderItemType'), request.get('orderItemType'), 'order.product_type'|trans) }}
        </select>

        <select class=\"form-control\" name=\"displayStatus\">
          {{ select_options(dict('orderDisplayStatus'), request.get('displayStatus'), 'order.status'|trans) }}
        </select>

        <select class=\"form-control\" name=\"payment\">
          {{ select_options(dict('paymentSelect'), request.get('payment'), 'order.payment_pattern'|trans) }}
        </select>
        <select class=\"form-control\" name=\"source\">
          {{ select_options(dict('source'), request.get('source'), 'order.source'|trans) }}
        </select>
      </div>
      <div class=\"form-group\" style=\"display:none;\">
        <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\" , placeholder=\"{{ 'admin.order.paid_time_range.input_placeholder'|trans }}\">
      </div>
    </div>
    <div class=\"mbm\">
      <div class=\"form-group\">
        <label class=\"ptm\">{{ 'admin.order.keyword'|trans }}</label>
        <select class=\"form-control\" name=\"keywordType\">
          {% set options = {
            sn: 'order.id'|trans,
            buyer:'admin.order.buyer'|trans,
            title_like: 'admin.order.title'|trans}
          %}
          {{ select_options(options, request.get('keywordType')) }}
        </select>

        <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"{{ request.get('keyword') }}\" placeholder=\"{{ 'form.placeholder.keyword'|trans }}\">
      </div>

      <button class=\"btn btn-primary\">{{ 'form.btn.search'|trans }}</button>
      {% include 'export/export-btn.html.twig' with 
      { 'exportFileName': 'order', 
        'targetFormId': 'user-search-form'}  
      %}
    </div>
  </form>
  {% include 'admin/order/order-table.html.twig' %}
{% endblock %}
", "admin/order/list.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\order\\list.html.twig");
    }
}
