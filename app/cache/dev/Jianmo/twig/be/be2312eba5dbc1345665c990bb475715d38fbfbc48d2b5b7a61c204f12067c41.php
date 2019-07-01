<?php

/* admin/order/order-table.html.twig */
class __TwigTemplate_83c926a84a5d2c431128d2cede4d4c17c6af850e17a32a4060893c2ef70f50b5 extends Twig_Template
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
        $__internal_354f0160f1a9ec7f820ce3a8a13d50ad9ad04e2cccae4c165666340e22fd3008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354f0160f1a9ec7f820ce3a8a13d50ad9ad04e2cccae4c165666340e22fd3008->enter($__internal_354f0160f1a9ec7f820ce3a8a13d50ad9ad04e2cccae4c165666340e22fd3008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/order/order-table.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "admin/order/order-table.html.twig", 1);
        // line 2
        echo "<table class=\"table table-striped table-hover\" id=\"order-table\">
  <thead>
  <tr>
    <th width=\"30%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.product_name"), "html", null, true);
        echo "</th>
    <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.status"), "html", null, true);
        echo "</th>
    <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.product_price"), "html", null, true);
        echo " </th>
    <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.discount_amount"), "html", null, true);
        echo "</th>
    <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.price"), "html", null, true);
        echo "</th>
    <th width=\"10%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.buyers"), "html", null, true);
        echo "</th>
    <th>
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.payment_pattern"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.source"), "html", null, true);
        echo " 
      <span class=\"glyphicon glyphicon-question-sign color-gray text-sm\" data-toggle=\"tooltip\" data-placement=\"top\"  title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.order.tips"), "html", null, true);
        echo "\"></span>
    </th>
    <th width='60'>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.operation"), "html", null, true);
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 23
            echo "    ";
            $context["buyer"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "user_id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "user_id", array()), array(), "array"), null)) : (null));
            // line 24
            echo "    <tr id=\"order-table-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "\" style=\"word-break: break-all;word-wrap: break-word;\">
      <td>
        ";
            // line 26
            if (((($this->getAttribute($this->getAttribute($context["order"], "item", array(), "any", false, true), "target_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["order"], "item", array(), "any", false, true), "target_type", array()), "")) : ("")) == "course")) {
                // line 27
                echo "          <a  class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
        ";
            } elseif (((($this->getAttribute($this->getAttribute(            // line 28
$context["order"], "item", array(), "any", false, true), "target_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["order"], "item", array(), "any", false, true), "target_type", array()), "")) : ("")) == "vip")) {
                // line 29
                echo "          <a class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip", array("id" => $this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
        ";
            } elseif (((($this->getAttribute($this->getAttribute(            // line 30
$context["order"], "item", array(), "any", false, true), "target_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["order"], "item", array(), "any", false, true), "target_type", array()), "")) : ("")) == "classroom")) {
                // line 31
                echo "          <a class=\"link-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($this->getAttribute($context["order"], "item", array()), "target_id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
        ";
            } else {
                // line 33
                echo "          <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong>
        ";
            }
            // line 35
            echo "        <br/>
        <span class=\"color-gray text-sm\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.orders.order_id", array("%sn%" => $this->getAttribute($context["order"], "sn", array()))), "html", null, true);
            echo "</span>
        <br/>
        <span class=\"color-gray text-sm\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.created_time"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "created_time", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
      </td>
      <td>";
            // line 40
            echo $this->env->getExtension('AppBundle\Twig\OrderExtension')->displayOrderStatus($this->getAttribute($context["order"], "status", array()), 1);
            echo "</td>
      <td><span class=\"color-warning\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\OrderExtension')->toCash($this->getAttribute($context["order"], "price_amount", array()), 0), "html", null, true);
            echo "</span></td>
      <td><span class=\"color-warning\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\OrderExtension')->toCash(($this->getAttribute($context["order"], "price_amount", array()) - $this->getAttribute($context["order"], "pay_amount", array())), 0), "html", null, true);
            echo "</span></td>
      <td><span class=\"color-warning\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\OrderExtension')->toCash($this->getAttribute($context["order"], "pay_amount", array()), 0), "html", null, true);
            echo "</span></td>
      ";
            // line 44
            if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_user_manage")) {
                // line 45
                echo "        <td>
          <a href=\"javascript:\" class=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : $this->getContext($context, "buyer")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "nickname", array()), "--")) : ("--")), "html", null, true);
                echo "</a>
        </td>
      ";
            } else {
                // line 49
                echo "        <td>
          <span><a target=\"_blank\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : $this->getContext($context, "buyer")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "nickname", array()), "--")) : ("--")), "html", null, true);
                echo "</a></span>
        </td>
      ";
            }
            // line 53
            echo "      <td>";
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("payment", $this->getAttribute($context["order"], "payment", array()));
            echo "</td>
      <td>";
            // line 54
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("source", $this->getAttribute($context["order"], "source", array()));
            echo "</td>
      <td>
        <a href=\"javascript:\" class=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.detail"), "html", null, true);
            echo "</a>

        ";
            // line 58
            if ((($this->getAttribute($context["order"], "status", array()) == "created") || ($this->getAttribute($context["order"], "status", array()) == "paying"))) {
                // line 59
                echo "          <a href=\"javascript:\" class=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_adjust_price", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order.adjust_price_btn"), "html", null, true);
                echo "</a>
        ";
            }
            // line 61
            echo "
      </td>
    </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "    <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "  </tbody>
</table>
<div class=\"paginator\">
  ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
</div>
";
        
        $__internal_354f0160f1a9ec7f820ce3a8a13d50ad9ad04e2cccae4c165666340e22fd3008->leave($__internal_354f0160f1a9ec7f820ce3a8a13d50ad9ad04e2cccae4c165666340e22fd3008_prof);

    }

    public function getTemplateName()
    {
        return "admin/order/order-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 70,  223 => 67,  214 => 65,  206 => 61,  198 => 59,  196 => 58,  189 => 56,  184 => 54,  179 => 53,  171 => 50,  168 => 49,  160 => 46,  157 => 45,  155 => 44,  151 => 43,  147 => 42,  143 => 41,  139 => 40,  132 => 38,  127 => 36,  124 => 35,  118 => 33,  110 => 31,  108 => 30,  101 => 29,  99 => 28,  92 => 27,  90 => 26,  84 => 24,  81 => 23,  76 => 22,  69 => 18,  64 => 16,  60 => 15,  54 => 12,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 2,  22 => 1,);
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
<table class=\"table table-striped table-hover\" id=\"order-table\">
  <thead>
  <tr>
    <th width=\"30%\">{{ 'order.product_name'|trans }}</th>
    <th>{{ 'order.status'|trans }}</th>
    <th>{{ 'order.product_price'|trans }} </th>
    <th>{{ 'order.discount_amount'|trans }}</th>
    <th>{{ 'order.price'|trans }}</th>
    <th width=\"10%\">{{'order.buyers'|trans }}</th>
    <th>
      {{ 'order.payment_pattern'|trans }}
    </th>
    <th>
      {{'order.source'|trans}} 
      <span class=\"glyphicon glyphicon-question-sign color-gray text-sm\" data-toggle=\"tooltip\" data-placement=\"top\"  title=\"{{ 'admin.order.tips'|trans }}\"></span>
    </th>
    <th width='60'>{{'user.orders.operation'|trans}}</th>
  </tr>
  </thead>
  <tbody>
  {% for order in orders %}
    {% set buyer = users[order.user_id]|default(null) %}
    <tr id=\"order-table-{{order.id}}\" style=\"word-break: break-all;word-wrap: break-word;\">
      <td>
        {% if order.item.target_type|default('') == 'course' %}
          <a  class=\"link-primary\" href=\"{{ path('course_show', {id:order.item.target_id}) }}\" target=\"_blank\"><strong>{{order.title}}</strong></a>
        {% elseif order.item.target_type|default('') == 'vip' %}
          <a class=\"link-primary\" href=\"{{ path('vip', {id:order.item.target_id}) }}\" target=\"_blank\"><strong>{{order.title}}</strong></a>
        {% elseif order.item.target_type|default('') == 'classroom' %}
          <a class=\"link-primary\" href=\"{{ path('classroom_show', {id:order.item.target_id}) }}\" target=\"_blank\"><strong>{{order.title}}</strong></a>
        {% else %}
          <strong>{{order.title}}</strong>
        {% endif %}
        <br/>
        <span class=\"color-gray text-sm\">{{'user.orders.order_id'|trans({'%sn%':order.sn})}}</span>
        <br/>
        <span class=\"color-gray text-sm\">{{ 'order.created_time'|trans }}: {{ order.created_time|date('Y-n-d H:i:s') }}</span>
      </td>
      <td>{{ display_order_status(order.status, 1) }}</td>
      <td><span class=\"color-warning\">{{ order.price_amount|to_cash(0) }}</span></td>
      <td><span class=\"color-warning\">{{ (order.price_amount - order.pay_amount)|to_cash(0) }}</span></td>
      <td><span class=\"color-warning\">{{order.pay_amount|to_cash(0) }}</span></td>
      {% if has_permission('admin_user_manage') %}
        <td>
          <a href=\"javascript:\" class=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_user_show', {id:buyer.id}) }}\">{{ buyer.nickname|default('--') }}</a>
        </td>
      {% else %}
        <td>
          <span><a target=\"_blank\" href=\"{{ path('user_show', {id: buyer.id}) }}\">{{ buyer.nickname|default('--') }}</a></span>
        </td>
      {% endif %}
      <td>{{ dict_text('payment',order.payment) }}</td>
      <td>{{ dict_text('source', order.source) }}</td>
      <td>
        <a href=\"javascript:\" class=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_order_detail', {id:order.id}) }}\">{{'form.btn.detail'|trans}}</a>

        {% if order.status == 'created' or order.status == 'paying' %}
          <a href=\"javascript:\" class=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_order_adjust_price', {id:order.id}) }}\">{{ 'order.adjust_price_btn'|trans }}</a>
        {% endif %}

      </td>
    </tr>
  {% else %}
    <tr><td colspan=\"20\"><div class=\"empty\">{{'site.datagrid.empty'|trans}}</div></td></tr>
  {% endfor %}
  </tbody>
</table>
<div class=\"paginator\">
  {{ admin_macro.paginator(paginator) }}
</div>
", "admin/order/order-table.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\order\\order-table.html.twig");
    }
}
