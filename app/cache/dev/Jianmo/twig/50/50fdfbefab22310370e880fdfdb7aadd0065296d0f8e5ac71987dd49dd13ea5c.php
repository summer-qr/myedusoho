<?php

/* admin/system/log/logs.html.twig */
class __TwigTemplate_4f8d9aa7ff407d49fc1bf77687d4f6cbfc3225816f48683def3f4cb08e7bd619 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/log/logs.html.twig", 2);
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
        $__internal_7e829530817e07ab8d1a6edc0462eac32f088ad4e3190260eec318bd77720845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e829530817e07ab8d1a6edc0462eac32f088ad4e3190260eec318bd77720845->enter($__internal_7e829530817e07ab8d1a6edc0462eac32f088ad4e3190260eec318bd77720845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/log/logs.html.twig"));

        // line 1
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "admin/system/log/logs.html.twig", 1);
        // line 4
        $context["menu"] = "admin_logs_query";
        // line 6
        $context["script_controller"] = "log/list";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e829530817e07ab8d1a6edc0462eac32f088ad4e3190260eec318bd77720845->leave($__internal_7e829530817e07ab8d1a6edc0462eac32f088ad4e3190260eec318bd77720845_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_63e9f2cea4da74076b8bc335d63886fe52fa0625d0c57762a4adc0486e40f2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e9f2cea4da74076b8bc335d63886fe52fa0625d0c57762a4adc0486e40f2cc->enter($__internal_63e9f2cea4da74076b8bc335d63886fe52fa0625d0c57762a4adc0486e40f2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\" id=\"search-form\">

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"level\">
        ";
        // line 16
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("logLevel"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "level"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.all_log_level_option"));
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"startDateTime\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" name=\"startDateTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.start_time_placeholder"), "html", null, true);
        echo "\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"endDateTime\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" name=\"endDateTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.end_time_placeholder"), "html", null, true);
        echo "\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"hidden\" id=\"hasSystemOperation\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "hasSystemOperation"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "hasSystemOperation"), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"hasSystemOperation\" class=\"form-control\" >
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"module\" id=\"log-module\">
        <option value=\"\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.all_module_option"), "html", null, true);
        echo "</option>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 36
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["module"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "module"), "method") == $context["module"])) {
                echo " selected=\"";
                echo twig_escape_filter($this->env, $context["module"], "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("log.module." . $context["module"])), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </select>
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"action\" id=\"log-action\" data-url=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logs_action_dicts");
        echo "\">
       ";
        // line 43
        if (((array_key_exists("actions", $context)) ? (_twig_default_filter((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), null)) : (null))) {
            // line 44
            echo "          <option value=\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.all_operation_option"), "html", null, true);
            echo "</option>
          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 46
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method") == $context["action"])) {
                    echo "selected=\"";
                    echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                    echo "\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((("log.action." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "module"), "method")) . ".") . $context["action"])), "html", null, true);
                echo "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
        } else {
            // line 49
            echo "          <option value=\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.all_operation_option"), "html", null, true);
            echo "</option>
      ";
        }
        // line 51
        echo "    </select>
  ";
        // line 53
        echo "  </div>

  <div class=\"form-group\">
    ";
        // line 56
        $context["url"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logs_username_match") . "?nickname={{query}}");
        // line 57
        echo "    <input class=\"form-control quicksearch width-input-medium-important\" id=\"nickname\" name=\"nickname\" data-role=\"item-input\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.username_placeholder"), "html", null, true);
        echo "\" data-url='";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "' value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\">
  </div>

  <button class=\"btn btn-primary\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>

  <div class=\"text-muted admin-common-switch mtl\">

    ";
        // line 65
        echo "    ";
        // line 66
        echo "      ";
        // line 67
        echo "    ";
        // line 68
        echo "    ";
        // line 69
        echo "      ";
        // line 70
        echo "    ";
        // line 71
        echo "
    <label class=\"mrl\">
      <a class=\"mts pull-left\" href='";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logs_old");
        echo "' target=\"_blank\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("log.show.old.logs"), "html", null, true);
        echo "</a>
      ";
        // line 74
        $this->loadTemplate("admin/widget/tooltip-widget.html.twig", "admin/system/log/logs.html.twig", 74)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("log.show.old.logs.tips"), "placement" => "right")));
        // line 75
        echo "    </label>
  </div>

</form>

  <p>
    <span class=\"mrl\">
      ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.log_num", array("%itemCount%" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "itemCount", array())));
        echo "
    </span>
  </p>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"10%\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.log_lenvel"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.username"), "html", null, true);
        echo "</th>
      <th width=\"39%\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.operation"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.module"), "html", null, true);
        echo "</th>
      <th width=\"16%\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.time"), "html", null, true);
        echo "</th>
      <th width=\"15%\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.ip"), "html", null, true);
        echo "</th>
    </tr>
    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 96
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array"), null)) : (null));
            // line 97
            echo "      <tr>
        <td class=\"vertical-middle\">";
            // line 98
            echo $context["dict_macro"]->getlogLevel($this->getAttribute($context["log"], "level", array()));
            echo "</td>
        <td class=\"vertical-middle\">
          ";
            // line 100
            if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) && ($this->getAttribute($context["log"], "module", array()) != "crontab"))) {
                // line 101
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))), "method"), "html", null, true);
                echo "
          ";
            } else {
                // line 103
                echo "            --
          ";
            }
            // line 105
            echo "        <td class=\"vertical-middle\">
          <div style=\"word-break: break-all;word-wrap: break-word;\">

            ";
            // line 108
            $context["module"] = $this->getAttribute($context["log"], "module", array());
            // line 109
            echo "              ";
            $this->loadTemplate("admin/system/log/template.html.twig", "admin/system/log/logs.html.twig", 109)->display($context);
            // line 110
            echo "          </div>
        </td>
        <td class=\"vertical-middle\">
            ";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("log.module." . $this->getAttribute($context["log"], "module", array()))), "html", null, true);
            echo "
        </td>
        <td class=\"vertical-middle\">
          <span class=\"\">";
            // line 116
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
        </td>
        <td class=\"vertical-middle\">
          <a  class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getConvertIP($this->getAttribute($context["log"], "ip", array())), "html", null, true);
            echo "</a>
          <br>
          ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "
        </td>
      </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 125
            echo "      <tr><td class=\"empty\" colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.system_log.empty"), "html", null, true);
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "  </table>

  ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "


";
        
        $__internal_63e9f2cea4da74076b8bc335d63886fe52fa0625d0c57762a4adc0486e40f2cc->leave($__internal_63e9f2cea4da74076b8bc335d63886fe52fa0625d0c57762a4adc0486e40f2cc_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/log/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 129,  361 => 127,  352 => 125,  335 => 121,  328 => 119,  322 => 116,  316 => 113,  311 => 110,  308 => 109,  306 => 108,  301 => 105,  297 => 103,  291 => 101,  289 => 100,  284 => 98,  281 => 97,  278 => 96,  260 => 95,  255 => 93,  251 => 92,  247 => 91,  243 => 90,  239 => 89,  235 => 88,  226 => 82,  217 => 75,  215 => 74,  209 => 73,  205 => 71,  203 => 70,  201 => 69,  199 => 68,  197 => 67,  195 => 66,  193 => 65,  186 => 60,  175 => 57,  173 => 56,  168 => 53,  165 => 51,  159 => 49,  156 => 48,  139 => 46,  135 => 45,  130 => 44,  128 => 43,  124 => 42,  118 => 38,  101 => 36,  97 => 35,  93 => 34,  85 => 29,  76 => 25,  67 => 21,  59 => 16,  50 => 10,  47 => 9,  41 => 8,  34 => 2,  32 => 6,  30 => 4,  28 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"common/data-dict-macro.html.twig\" as dict_macro %}
{% extends 'admin/layout.html.twig' %}

{% set menu = 'admin_logs_query' %}

{% set script_controller = 'log/list' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"well well-sm form-inline\" id=\"search-form\">

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"level\">
        {{ select_options(dict('logLevel'), app.request.query.get('level'), 'admin.system_log.all_log_level_option'|trans) }}
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"startDateTime\" value=\"{{app.request.query.get('startDateTime')}}\" name=\"startDateTime\" class=\"form-control\" placeholder=\"{{'admin.system_log.start_time_placeholder'|trans}}\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"endDateTime\" value=\"{{app.request.query.get('endDateTime')}}\" name=\"endDateTime\" class=\"form-control\" placeholder=\"{{'admin.system_log.end_time_placeholder'|trans}}\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"hidden\" id=\"hasSystemOperation\" value=\"{{app.request.query.get('hasSystemOperation')|default(0)}}\" name=\"hasSystemOperation\" class=\"form-control\" >
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"module\" id=\"log-module\">
        <option value=\"\">{{'admin.system_log.all_module_option'|trans}}</option>
        {% for module in modules %}
          <option value=\"{{ module }}\" {% if app.request.query.get('module') == module %} selected=\"{{ module }}\" {% endif %}>{{ ('log.module.' ~ module)|trans }}</option>
        {% endfor %}
    </select>
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"action\" id=\"log-action\" data-url=\"{{path('admin_logs_action_dicts')}}\">
       {% if actions|default(null) %}
          <option value=\"\">{{'admin.system_log.all_operation_option'|trans}}</option>
          {% for action in actions %}
            <option value=\"{{ action }}\" {% if app.request.query.get('action') == action %}selected=\"{{ action }}\" {% endif %}>{{ ('log.action.' ~ app.request.query.get('module') ~ '.' ~ action)|trans }}</option>
          {% endfor %}
        {% else %}
          <option value=\"\">{{'admin.system_log.all_operation_option'|trans}}</option>
      {% endif %}
    </select>
  {#   <input type=\"text\" id=\"action\" name=\"action\" value=\"{{app.request.query.get('action')}}\" class=\"form-control\" placeholder=\"操作名\" style=\"width:100px;\"> #}
  </div>

  <div class=\"form-group\">
    {% set url = path('admin_logs_username_match') ~ '?nickname={{query}}' %}
    <input class=\"form-control quicksearch width-input-medium-important\" id=\"nickname\" name=\"nickname\" data-role=\"item-input\" placeholder=\"{{'admin.system_log.username_placeholder'|trans}}\" data-url='{{url}}' value=\"{{app.request.query.get('nickname')}}\">
  </div>

  <button class=\"btn btn-primary\">{{'form.btn.search'|trans}}</button>

  <div class=\"text-muted admin-common-switch mtl\">

    {#是否显示系统用户操作按钮 8.3.4隐藏#}
    {#<span class=\"mrl\">#}
      {#{{ 'admin.system_log.show_system_user'|trans}}#}
    {#</span>#}
    {#<label for=\"switch-operation\" class=\"switch{% if hasSystemOperation == 1 %} checked{% endif %}\">#}
      {#<input type=\"checkbox\" name=\"operation\" value=\"\" id=\"switch-operation\">#}
    {#</label>#}

    <label class=\"mrl\">
      <a class=\"mts pull-left\" href='{{path(\"admin_logs_old\")}}' target=\"_blank\" >{{'log.show.old.logs'|trans}}</a>
      {% include 'admin/widget/tooltip-widget.html.twig' with { icon: 'glyphicon-question-sign', content: 'log.show.old.logs.tips'|trans, placement: 'right'} %}
    </label>
  </div>

</form>

  <p>
    <span class=\"mrl\">
      {{ 'admin.system_log.log_num'|trans({'%itemCount%':paginator.itemCount})|raw }}
    </span>
  </p>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"10%\">{{'admin.system_log.log_lenvel'|trans}}</th>
      <th width=\"10%\">{{'admin.system_log.username'|trans}}</th>
      <th width=\"39%\">{{'admin.system_log.operation'|trans}}</th>
      <th width=\"10%\">{{'admin.system_log.module'|trans}}</th>
      <th width=\"16%\">{{'admin.system_log.time'|trans}}</th>
      <th width=\"15%\">{{'admin.system_log.ip'|trans}}</th>
    </tr>
    {% for log in logs %}
      {% set user = users[log.userId]|default(null) %}
      <tr>
        <td class=\"vertical-middle\">{{ dict_macro.logLevel(log.level)}}</td>
        <td class=\"vertical-middle\">
          {% if user and log.module != 'crontab'%}
            {{ admin_macro.user_link(user) }}
          {% else %}
            --
          {% endif %}
        <td class=\"vertical-middle\">
          <div style=\"word-break: break-all;word-wrap: break-word;\">

            {% set module = log.module %}
              {% include 'admin/system/log/template.html.twig' %}
          </div>
        </td>
        <td class=\"vertical-middle\">
            {{ ('log.module.' ~ log.module)|trans }}
        </td>
        <td class=\"vertical-middle\">
          <span class=\"\">{{ log.createdTime|date(\"Y-m-d H:i:s\") }}</span>
        </td>
        <td class=\"vertical-middle\">
          <a  class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd={{ log.ip }}\" target=\"_blank\">{{ convert_ip(log.ip) }}</a>
          <br>
          {{ log.ip }}
        </td>
      </tr>
    {% else %}
      <tr><td class=\"empty\" colspan=\"20\">{{'admin.system_log.empty'|trans}}</tr>
    {% endfor %}
  </table>

  {{ admin_macro.paginator(paginator) }}


{% endblock %}", "admin/system/log/logs.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\log\\logs.html.twig");
    }
}
