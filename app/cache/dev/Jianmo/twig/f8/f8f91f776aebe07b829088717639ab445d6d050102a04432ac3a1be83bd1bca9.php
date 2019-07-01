<?php

/* admin/role/index.html.twig */
class __TwigTemplate_94f4618844c19fdd25054c72b55f629e1b4a494e8b58c6add9f7dd9370f6b467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/role/index.html.twig", 1);
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
        $__internal_c0baac9dd5ef1222376001fa7f16e1582dbc8d4559ccbd14e2283660607a3e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0baac9dd5ef1222376001fa7f16e1582dbc8d4559ccbd14e2283660607a3e00->enter($__internal_c0baac9dd5ef1222376001fa7f16e1582dbc8d4559ccbd14e2283660607a3e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/role/index.html.twig"));

        // line 3
        $context["menu"] = "admin_role_manage";
        // line 5
        $context["script_controller"] = "topxiaadminbundle/controller/role/index";
        // line 6
        $context["notUpdateRoles"] = array(0 => "ROLE_SUPER_ADMIN", 1 => "ROLE_ADMIN", 2 => "ROLE_TEACHER", 3 => "ROLE_USER");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0baac9dd5ef1222376001fa7f16e1582dbc8d4559ccbd14e2283660607a3e00->leave($__internal_c0baac9dd5ef1222376001fa7f16e1582dbc8d4559ccbd14e2283660607a3e00_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_98e109e44ae5d96594fde6d1627461a867eb4dc1df30e09469913e36485b8f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e109e44ae5d96594fde6d1627461a867eb4dc1df30e09469913e36485b8f75->enter($__internal_98e109e44ae5d96594fde6d1627461a867eb4dc1df30e09469913e36485b8f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select id=\"keywordType\" class=\"form-control\" name=\"keywordType\">
          ";
        // line 15
        $context["options"] = array("" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.keyword_type"), "nameLike" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.nameLike"), "codeLike" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.codeLike"));
        // line 16
        echo "          ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
    </select>
  </div>
  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.keyword.placeholer"), "html", null, true);
        echo "\">
  </div>

  <button class=\"btn btn-primary\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"25%\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.nameLike"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.codeLike"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.createdTime"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.nickname"), "html", null, true);
        echo "</th>
      <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.operation"), "html", null, true);
        echo "</th>
    </tr>   
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 36
            echo "      <tr>
        <td>
          ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "
        <td>
          ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "code", array()), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["role"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "        </td>
        <td>
          ";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["role"], "createdUserId", array()), array(), "array", false, true), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["role"], "createdUserId", array()), array(), "array", false, true), "nickname", array()), "--")) : ("--")), "html", null, true);
            echo "
        </td>
        <td>
          <div class=\"btn-group\">
            <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_show", array("id" => $this->getAttribute($context["role"], "id", array()))), "html", null, true);
            echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.view"), "html", null, true);
            echo "</a>
            ";
            // line 50
            if (!twig_in_filter($this->getAttribute($context["role"], "code", array()), (isset($context["notUpdateRoles"]) ? $context["notUpdateRoles"] : $this->getContext($context, "notUpdateRoles")))) {
                // line 51
                echo "              ";
                $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/role/index.html.twig", 51)->display(array_merge($context, array("parentCode" => "admin_role_manage", "group" => "groupBtn", "role" => $context["role"])));
                // line 52
                echo "            ";
            }
            // line 53
            echo "          </div>
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
            // line 57
            echo "      <tr><td class=\"empty\" colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.role.empty"), "html", null, true);
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </table>

  <div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.role_manage.help_block");
        echo "
  </div>


  ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_98e109e44ae5d96594fde6d1627461a867eb4dc1df30e09469913e36485b8f75->leave($__internal_98e109e44ae5d96594fde6d1627461a867eb4dc1df30e09469913e36485b8f75_prof);

    }

    public function getTemplateName()
    {
        return "admin/role/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 66,  196 => 62,  191 => 59,  182 => 57,  166 => 53,  163 => 52,  160 => 51,  158 => 50,  152 => 49,  145 => 45,  140 => 43,  134 => 40,  129 => 38,  125 => 36,  107 => 35,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  77 => 23,  69 => 20,  61 => 16,  59 => 15,  50 => 9,  47 => 8,  41 => 7,  34 => 1,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_role_manage' %}

{% set script_controller = 'topxiaadminbundle/controller/role/index' %}
{% set notUpdateRoles = ['ROLE_SUPER_ADMIN', 'ROLE_ADMIN', 'ROLE_TEACHER', 'ROLE_USER'] %}
{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select id=\"keywordType\" class=\"form-control\" name=\"keywordType\">
          {% set options = {'':'admin.role_manage.keyword_type'|trans,'nameLike':'admin.role_manage.nameLike'|trans,'codeLike':'admin.role_manage.codeLike'|trans} %}
          {{ select_options(options, app.request.get('keywordType')) }}
    </select>
  </div>
  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"{{ app.request.query.get('keyword') }}\" placeholder=\"{{ 'admin.role_manage.keyword.placeholer'|trans }}\">
  </div>

  <button class=\"btn btn-primary\">{{ 'form.btn.search'|trans }}</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"25%\">{{ 'admin.role_manage.nameLike'|trans }}</th>
      <th width=\"25%\">{{ 'admin.role_manage.codeLike'|trans }}</th>
      <th width=\"20%\">{{ 'admin.role_manage.createdTime'|trans }}</th>
      <th width=\"20%\">{{ 'admin.role_manage.nickname'|trans }}</th>
      <th>{{ 'admin.role_manage.operation'|trans }}</th>
    </tr>   
    {% for role in roles %}
      <tr>
        <td>
          {{ role.name }}
        <td>
          {{ role.code }}
        </td>
        <td>
          {{ role.createdTime|date('Y-m-d H:i:s') }}        </td>
        <td>
          {{ users[role.createdUserId].nickname|default('--') }}
        </td>
        <td>
          <div class=\"btn-group\">
            <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_role_show', {id:role.id}) }}\" data-url=\"\" class=\"btn btn-default btn-sm\">{{ 'form.btn.view'|trans }}</a>
            {% if role.code not in notUpdateRoles %}
              {% include 'admin/role/templates/group-button.html.twig' with {parentCode: 'admin_role_manage', group:'groupBtn', role: role} %}
            {% endif %}
          </div>
        </td>
      </tr>
    {% else %}
      <tr><td class=\"empty\" colspan=\"20\">{{ 'admin.role_manage.role.empty'|trans }}</tr>
    {% endfor %}
  </table>

  <div class=\"alert alert-info\" role=\"alert\">
    {{ 'admin.role_manage.help_block'|trans|raw }}
  </div>


  {{ admin_macro.paginator(paginator) }}

{% endblock %}", "admin/role/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\role\\index.html.twig");
    }
}
