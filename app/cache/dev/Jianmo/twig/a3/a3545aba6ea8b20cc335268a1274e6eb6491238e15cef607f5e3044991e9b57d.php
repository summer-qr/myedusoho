<?php

/* admin/announcement/index.html.twig */
class __TwigTemplate_757006cee4d0c8f9b63335c1ea94882cd8f115fd0eea2c8e74c7f212cf81c63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/announcement/index.html.twig", 1);
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
        $__internal_e637858700a8b89efd4fc8a9566418023cc048c2431954b040f11b91e7caf086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e637858700a8b89efd4fc8a9566418023cc048c2431954b040f11b91e7caf086->enter($__internal_e637858700a8b89efd4fc8a9566418023cc048c2431954b040f11b91e7caf086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/announcement/index.html.twig"));

        // line 3
        $context["script_controller"] = "announcement/index";
        // line 5
        $context["menu"] = "admin_announcement_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e637858700a8b89efd4fc8a9566418023cc048c2431954b040f11b91e7caf086->leave($__internal_e637858700a8b89efd4fc8a9566418023cc048c2431954b040f11b91e7caf086_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_9f076cb19f3770d28da0a0046ef3516517318a9b1ba48634b4b576ee2addc892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f076cb19f3770d28da0a0046ef3516517318a9b1ba48634b4b576ee2addc892->enter($__internal_9f076cb19f3770d28da0a0046ef3516517318a9b1ba48634b4b576ee2addc892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 9
            echo "  <form id=\"announcement-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
            // line 10
            $this->loadTemplate("org/org-tree-select.html.twig", "admin/announcement/index.html.twig", 10)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
            // line 11
            echo "    <button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
            echo "</button>
  </form>
";
        }
        // line 14
        echo "
  <table id=\"announcement-table\" class=\"table table-striped\">
    <thead>
    <tr>
      ";
        // line 18
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 19
            echo "        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      ";
        }
        // line 21
        echo "      <th width=\"25%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.content_th"), "html", null, true);
        echo "</th>
      ";
        // line 22
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/announcement/index.html.twig", 22)->display($context);
        // line 23
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.createTime_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.endTime_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.status_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.nickname_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.operation_th"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 31
        if ((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements"))) {
            // line 32
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 33
                echo "        <tr id =\"announcement-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "id", array()), "html", null, true);
                echo "\">
          ";
                // line 34
                $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/announcement/index.html.twig", 34)->display($context);
                // line 35
                echo "          <td><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "url", array()), "html", null, true);
                echo "\" target=\"_content\">";
                echo $this->getAttribute($context["announcement"], "content", array());
                echo "</td>
          ";
                // line 36
                $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/announcement/index.html.twig", 36)->display(array_merge($context, array("orgCode" => $this->getAttribute($context["announcement"], "orgCode", array()))));
                // line 37
                echo "          <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "startTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
          <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "endTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
          <td>
            ";
                // line 40
                if (((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) < $this->getAttribute($context["announcement"], "startTime", array()))) {
                    // line 41
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.status.readyStart"), "html", null, true);
                    echo "
            ";
                } elseif ((                // line 42
(isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) > $this->getAttribute($context["announcement"], "endTime", array()))) {
                    // line 43
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.status.finished"), "html", null, true);
                    echo "
            ";
                } else {
                    // line 45
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.status.display"), "html", null, true);
                    echo "
            ";
                }
                // line 47
                echo "          </td>
          <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["announcement"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</td>
          <td>
            <div class=\"btn-group\">
              <a data-url=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_announcement_edit", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\"
                 data-toggle=\"modal\" data-target=\"#modal\">";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.edit_btn"), "html", null, true);
                echo "</a>
              <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </a>
              <ul class=\"dropdown-menu\">
                <li>
                  <a href=\"javascript:;\" data-url=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_announcement_delete", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\"
                       class=\"delete-btn\"><span class=\"glyphicon glyphicon-trash\"></span> ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_announcement.delete_btn"), "html", null, true);
                echo "</a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "    ";
        }
        // line 67
        echo "    </tbody>
  </table>
  ";
        // line 69
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/announcement/index.html.twig", 69)->display(array_merge($context, array("module" => "announcement", "formId" => "announcement-table")));
        // line 70
        echo "  ";
        if ( !(isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements"))) {
            // line 71
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div>
  ";
        }
        // line 73
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_9f076cb19f3770d28da0a0046ef3516517318a9b1ba48634b4b576ee2addc892->leave($__internal_9f076cb19f3770d28da0a0046ef3516517318a9b1ba48634b4b576ee2addc892_prof);

    }

    public function getTemplateName()
    {
        return "admin/announcement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 73,  228 => 71,  225 => 70,  223 => 69,  219 => 67,  216 => 66,  195 => 59,  191 => 58,  182 => 52,  178 => 51,  172 => 48,  169 => 47,  163 => 45,  157 => 43,  155 => 42,  150 => 41,  148 => 40,  143 => 38,  138 => 37,  136 => 36,  129 => 35,  127 => 34,  122 => 33,  104 => 32,  102 => 31,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  78 => 23,  76 => 22,  71 => 21,  67 => 19,  65 => 18,  59 => 14,  52 => 11,  50 => 10,  47 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set script_controller = 'announcement/index' %}

{% set menu = 'admin_announcement_manage' %}

{% block main %}
{% if setting('magic.enable_org','0') %}
  <form id=\"announcement-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    {% include 'org/org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}
    <button class=\"btn btn-primary\">{{'form.btn.search'|trans}}</button>
  </form>
{% endif %}

  <table id=\"announcement-table\" class=\"table table-striped\">
    <thead>
    <tr>
      {% if setting('magic.enable_org','0') %}
        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      {% endif %}
      <th width=\"25%\">{{'admin.operation_announcement.content_th'|trans}}</th>
      {% include 'org/parts/table-thead-tr.html.twig' %}
      <th>{{'admin.operation_announcement.createTime_th'|trans}}</th>
      <th>{{'admin.operation_announcement.endTime_th'|trans}}</th>
      <th>{{'admin.operation_announcement.status_th'|trans}}</th>
      <th>{{'admin.operation_announcement.nickname_th'|trans}}</th>
      <th>{{'admin.operation_announcement.operation_th'|trans}}</th>
    </tr>
    </thead>
    <tbody>
    {% if announcements %}
      {% for announcement in announcements %}
        <tr id =\"announcement-tr-{{ announcement.id }}\">
          {% include 'org/parts/table-body-checkbox.html.twig' %}
          <td><a href=\"{{ announcement.url }}\" target=\"_content\">{{ announcement.content|raw }}</td>
          {% include 'org/parts/table-body-td.html.twig' with {orgCode: announcement.orgCode}%}
          <td>{{ announcement.startTime|date('Y-m-d H:i') }}</td>
          <td>{{ announcement.endTime|date('Y-m-d H:i') }}</td>
          <td>
            {% if now < announcement.startTime %}
              {{'admin.operation_announcement.status.readyStart'|trans}}
            {% elseif now > announcement.endTime %}
              {{'admin.operation_announcement.status.finished'|trans}}
            {% else %}
              {{'admin.operation_announcement.status.display'|trans}}
            {% endif %}
          </td>
          <td>{{ users[announcement.userId].nickname }}</td>
          <td>
            <div class=\"btn-group\">
              <a data-url=\"{{ path('admin_announcement_edit',{id:announcement.id}) }}\" class=\"btn btn-default btn-sm\"
                 data-toggle=\"modal\" data-target=\"#modal\">{{'admin.operation_announcement.edit_btn'|trans}}</a>
              <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </a>
              <ul class=\"dropdown-menu\">
                <li>
                  <a href=\"javascript:;\" data-url=\"{{ path('admin_announcement_delete',{id:announcement.id}) }}\"
                       class=\"delete-btn\"><span class=\"glyphicon glyphicon-trash\"></span> {{'admin.operation_announcement.delete_btn'|trans}}</a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
      {% endfor %}
    {% endif %}
    </tbody>
  </table>
  {% include 'org/batch-update-org-btn.html.twig' with {module:'announcement', formId:'announcement-table'} %}
  {% if not announcements %}
    <div class=\"empty\">{{'site.datagrid.empty'|trans}}</div>
  {% endif %}
  {{ admin_macro.paginator(paginator) }}
{% endblock %}", "admin/announcement/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\announcement\\index.html.twig");
    }
}
