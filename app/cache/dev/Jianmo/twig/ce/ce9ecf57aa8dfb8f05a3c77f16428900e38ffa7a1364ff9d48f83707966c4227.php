<?php

/* admin/notification/index.html.twig */
class __TwigTemplate_b254a0e1ff86fa7fe47766b34ed10efb84b4cc27001a5b5ddbf81365dd782ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/notification/index.html.twig", 1);
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
        $__internal_3cb2ca10d8a044b15b422abdcacd8e42d710ac25df3d975db842deb921c24197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb2ca10d8a044b15b422abdcacd8e42d710ac25df3d975db842deb921c24197->enter($__internal_3cb2ca10d8a044b15b422abdcacd8e42d710ac25df3d975db842deb921c24197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/notification/index.html.twig"));

        // line 3
        $context["menu"] = "admin_batch_notification";
        // line 5
        $context["script_controller"] = "batchnotification/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb2ca10d8a044b15b422abdcacd8e42d710ac25df3d975db842deb921c24197->leave($__internal_3cb2ca10d8a044b15b422abdcacd8e42d710ac25df3d975db842deb921c24197_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_fe1156af628231efee47681fbe5a5019f25a2ac87e3bb6e81133c84df01eab97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1156af628231efee47681fbe5a5019f25a2ac87e3bb6e81133c84df01eab97->enter($__internal_fe1156af628231efee47681fbe5a5019f25a2ac87e3bb6e81133c84df01eab97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "<table id=\"batchnotification-table\" class=\"table table-striped\">
    <thead>
        <tr>
            <th width=\"40%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.title"), "html", null, true);
        echo "</th>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.sendedTime"), "html", null, true);
        echo "</th>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.createdTime"), "html", null, true);
        echo "</th>
            <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.nickname"), "html", null, true);
        echo "</th>
            <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.status"), "html", null, true);
        echo "</th>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.operation"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        if ((isset($context["batchnotifications"]) ? $context["batchnotifications"] : $this->getContext($context, "batchnotifications"))) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["batchnotifications"]) ? $context["batchnotifications"] : $this->getContext($context, "batchnotifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["batchnotification"]) {
                // line 22
                echo "                <tr>
                    <td><a href=\"javascript:;\" data-url=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_notification_show", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                echo "\"data-toggle=\"modal\" data-target=\"#modal\">";
                echo $this->getAttribute($context["batchnotification"], "title", array());
                echo "</a></td>
                    ";
                // line 24
                if (($this->getAttribute($context["batchnotification"], "sendedTime", array()) == 0)) {
                    // line 25
                    echo "                    <td>--</td>
                    ";
                } else {
                    // line 27
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["batchnotification"], "sendedTime", array()), "Y-m-d H:i"), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 29
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["batchnotification"], "createdTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["batchnotification"], "fromId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</td>
                    ";
                // line 31
                if ($this->getAttribute($context["batchnotification"], "published", array())) {
                    echo "<td class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.status.published"), "html", null, true);
                    echo "</td>";
                } else {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.status.unpublished"), "html", null, true);
                    echo "</td>";
                }
                // line 32
                echo "                    <td>
                        <div class=\"btn-group\">
                            ";
                // line 34
                if ($this->getAttribute($context["batchnotification"], "published", array())) {
                    // line 35
                    echo "                                <a  href=\"javascript:\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_batch_notification_delete", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\" data-role=\"delete-item\" class=\"btn btn-default btn-sm\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.delete_btn"), "html", null, true);
                    echo "</a>
                            ";
                } else {
                    // line 37
                    echo "                                <a  href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_batch_notification_edit", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default btn-sm\" >";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.edit_btn"), "html", null, true);
                    echo "</a>
                                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_batch_notification_send", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.publish_btn"), "html", null, true);
                    echo "</a></li>
                                    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_batch_notification_delete", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.delete_btn"), "html", null, true);
                    echo "</a></li>
                                </ul>
                            ";
                }
                // line 46
                echo "                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batchnotification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "          ";
        }
        // line 51
        echo "    </tbody>
</table>
  ";
        // line 53
        if ( !(isset($context["batchnotifications"]) ? $context["batchnotifications"] : $this->getContext($context, "batchnotifications"))) {
            // line 54
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div>
  ";
        }
        // line 56
        echo "  <div class=\"alert alert-info text-center\">
    ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.batch_notification.empty_tips"), "html", null, true);
        echo "
  </div>

  ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_fe1156af628231efee47681fbe5a5019f25a2ac87e3bb6e81133c84df01eab97->leave($__internal_fe1156af628231efee47681fbe5a5019f25a2ac87e3bb6e81133c84df01eab97_prof);

    }

    public function getTemplateName()
    {
        return "admin/notification/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 60,  190 => 57,  187 => 56,  181 => 54,  179 => 53,  175 => 51,  172 => 50,  163 => 46,  155 => 43,  149 => 42,  138 => 37,  130 => 35,  128 => 34,  124 => 32,  114 => 31,  110 => 30,  105 => 29,  99 => 27,  95 => 25,  93 => 24,  87 => 23,  84 => 22,  79 => 21,  77 => 20,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_batch_notification' %}

{% set script_controller = 'batchnotification/list' %}

{% block main %}
<table id=\"batchnotification-table\" class=\"table table-striped\">
    <thead>
        <tr>
            <th width=\"40%\">{{'admin.batch_notification.title'|trans}}</th>
            <th>{{'admin.batch_notification.sendedTime'|trans}}</th>
            <th>{{'admin.batch_notification.createdTime'|trans}}</th>
            <th>{{'admin.batch_notification.nickname'|trans}}</th>
            <th>{{'admin.batch_notification.status'|trans}}</th>
            <th>{{'admin.batch_notification.operation'|trans}}</th>
        </tr>
    </thead>
    <tbody>
        {% if batchnotifications %}
            {% for batchnotification in batchnotifications %}
                <tr>
                    <td><a href=\"javascript:;\" data-url=\"{{ path('batch_notification_show',{ id:batchnotification.id }) }}\"data-toggle=\"modal\" data-target=\"#modal\">{{batchnotification.title|raw}}</a></td>
                    {% if batchnotification.sendedTime == 0 %}
                    <td>--</td>
                    {% else %}
                    <td>{{batchnotification.sendedTime|date('Y-m-d H:i')}}</td>
                    {% endif %}
                    <td>{{batchnotification.createdTime|date('Y-m-d H:i')}}</td>
                    <td>{{users[batchnotification.fromId].nickname}}</td>
                    {% if batchnotification.published %}<td class=\"text-success\">{{'admin.batch_notification.status.published'|trans}}</td>{% else %}<td>{{'admin.batch_notification.status.unpublished'|trans}}</td>{% endif %}
                    <td>
                        <div class=\"btn-group\">
                            {% if batchnotification.published %}
                                <a  href=\"javascript:\" data-url=\"{{ path('admin_batch_notification_delete',{id:batchnotification.id}) }}\" data-role=\"delete-item\" class=\"btn btn-default btn-sm\" >{{'admin.batch_notification.delete_btn'|trans}}</a>
                            {% else %}
                                <a  href=\"{{ path('admin_batch_notification_edit',{id:batchnotification.id}) }}\" class=\"btn btn-default btn-sm\" >{{'admin.batch_notification.edit_btn'|trans}}</a>
                                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"{{ path('admin_batch_notification_send', {id:batchnotification.id}) }}\">{{'admin.batch_notification.publish_btn'|trans}}</a></li>
                                    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"{{ path('admin_batch_notification_delete', {id:batchnotification.id}) }}\">{{'admin.batch_notification.delete_btn'|trans}}</a></li>
                                </ul>
                            {% endif %}
                        </div>
                    </td>
                </tr>
            {% endfor %}
          {% endif %}
    </tbody>
</table>
  {% if not batchnotifications %}
    <div class=\"empty\">{{'site.datagrid.empty'|trans}}</div>
  {% endif %}
  <div class=\"alert alert-info text-center\">
    {{ 'admin.batch_notification.empty_tips'|trans }}
  </div>

  {{ admin_macro.paginator(paginator) }}
{% endblock %}
", "admin/notification/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\notification\\index.html.twig");
    }
}
