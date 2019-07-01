<?php

/* admin/classroom/table-tr.html.twig */
class __TwigTemplate_541afde533c5e58861618efdce02df6d2a4e89e2c50f0bf2872fddcd5275b684 extends Twig_Template
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
        $__internal_6bacd61bedee1cda9b3a9047315fcc19372cf6eda53888d9f6c3351eeb41966d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bacd61bedee1cda9b3a9047315fcc19372cf6eda53888d9f6c3351eeb41966d->enter($__internal_6bacd61bedee1cda9b3a9047315fcc19372cf6eda53888d9f6c3351eeb41966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/classroom/table-tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/classroom/table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"classroom-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 3
        $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/classroom/table-tr.html.twig", 3)->display($context);
        // line 4
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "html", null, true);
        echo "</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "</a>
    </strong>
    <br>
    <span class=\"text-muted text-sm\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.category"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 12
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommended", array())) {
            // line 13
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.recommend", array("%recommendedTime%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommendedTime", array()), "Y-m-d"), "%recommendedSeq%" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommendedSeq", array()))), "html", null, true);
            echo "</span>
    ";
        }
        // line 15
        echo "    </td>
    ";
        // line 16
        $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/classroom/table-tr.html.twig", 16)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "orgCode", array()))));
        // line 17
        echo "    <td>
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : $this->getContext($context, "classroomCoursesNum")), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), array(), "array"), "html", null, true);
        echo "

    ";
        // line 20
        if (($this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : $this->getContext($context, "classroomCoursesNum")), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), array(), "array") > 0)) {
            // line 21
            echo "    <strong>  
      <a target=\"_blank\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.course_detail"), "html", null, true);
            echo "</a>
    </strong>
    ";
        }
        // line 25
        echo "    </td>

    <td>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "studentNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    <span style=\"color: #F40; \">
            ";
        // line 33
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 34
            echo "              ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
            echo "
            ";
        } else {
            // line 36
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.price", array("%price%" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()))), "html", null, true);
            echo "
            ";
        }
        // line 38
        echo "     </span>
    &nbsp;


    <span style=\"font-size: 13px;color: #666;\">
      ";
        // line 43
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 44
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.coin_price", array("%coinPriceAll%" => $this->getAttribute((isset($context["coinPriceAll"]) ? $context["coinPriceAll"] : $this->getContext($context, "coinPriceAll")), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"), "%coinname%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"))), "html", null, true);
            echo "
      ";
        } else {
            // line 46
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.origin_price", array("%priceAll%" => $this->getAttribute((isset($context["priceAll"]) ? $context["priceAll"] : $this->getContext($context, "priceAll")), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"))), "html", null, true);
            echo "
      ";
        }
        // line 48
        echo "    </span>


    </td>

    <td>
    ";
        // line 54
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 55
            echo "    <span class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.published"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 56
(isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "closed")) {
            // line 57
            echo "    
    <span class=\"text-danger\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.closed"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 60
            echo "     ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.unpublished"), "html", null, true);
            echo "
    ";
        }
        // line 62
        echo "    </td>

    <td>

  <div class=\"btn-group\">
      ";
        // line 67
        if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_classroom_content_manage")) {
            // line 68
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-default btn-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.classroom_manage.manage.manage_btn"), "html", null, true);
            echo "</a>
      ";
        }
        // line 70
        echo "
      ";
        // line 71
        $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/classroom/table-tr.html.twig", 71)->display(array_merge($context, array("parentCode" => "admin_classroom_manage", "group" => "groupButton", "classroom" => (isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")))));
        // line 72
        echo "  </div>
 </td>
</tr>";
        
        $__internal_6bacd61bedee1cda9b3a9047315fcc19372cf6eda53888d9f6c3351eeb41966d->leave($__internal_6bacd61bedee1cda9b3a9047315fcc19372cf6eda53888d9f6c3351eeb41966d_prof);

    }

    public function getTemplateName()
    {
        return "admin/classroom/table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 72,  188 => 71,  185 => 70,  177 => 68,  175 => 67,  168 => 62,  162 => 60,  157 => 58,  154 => 57,  152 => 56,  147 => 55,  145 => 54,  137 => 48,  131 => 46,  125 => 44,  123 => 43,  116 => 38,  110 => 36,  102 => 34,  100 => 33,  92 => 28,  87 => 25,  79 => 22,  76 => 21,  74 => 20,  69 => 18,  66 => 17,  64 => 16,  61 => 15,  55 => 13,  53 => 12,  47 => 11,  39 => 8,  31 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'admin/macro.html.twig' as admin_macro %}
<tr id=\"classroom-table-tr-{{ classroom.id }}\">
    {% include 'org/parts/table-body-checkbox.html.twig' %}
    <td>{{ classroom.id }}</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"{{ path('classroom_manage', {id:classroom.id}) }}\">{{ classroom.title}}</a>
    </strong>
    <br>
    <span class=\"text-muted text-sm\">{{'admin.classroom_manage.manage.category'|trans}}：{{ category.name|default('--') }}</span>
    {% if classroom.recommended %}
      <span class=\"label label-default\">{{ 'admin.classroom_manage.manage.recommend'|trans({'%recommendedTime%': classroom.recommendedTime|date('Y-m-d'), '%recommendedSeq%': classroom.recommendedSeq}) }}</span>
    {% endif %}
    </td>
    {% include 'org/parts/table-body-td.html.twig' with {orgCode: classroom.orgCode}%}
    <td>
    {{ classroomCoursesNum[classroom.id] }}

    {% if classroomCoursesNum[classroom.id] > 0 %}
    <strong>  
      <a target=\"_blank\" href=\"{{ path('classroom_manage_courses', {id:classroom.id}) }}\">{{'admin.classroom_manage.manage.course_detail'|trans}}</a>
    </strong>
    {% endif %}
    </td>

    <td>
    {{ classroom.studentNum }}
    </td>

    <td>
    <span style=\"color: #F40; \">
            {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
              {{classroom.price * setting('coin.cash_rate') }} {{setting('coin.coin_name')}}
            {% else %}
              {{ 'admin.classroom_manage.manage.price'|trans({'%price%': classroom.price})}}
            {% endif %}
     </span>
    &nbsp;


    <span style=\"font-size: 13px;color: #666;\">
      {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
        {{'admin.classroom_manage.manage.coin_price'|trans({'%coinPriceAll%':coinPriceAll[classroom.id|default(0)],'%coinname%':setting('coin.coin_name')})}}
      {% else %}
        {{'admin.classroom_manage.manage.origin_price'|trans({'%priceAll%':priceAll[classroom.id|default(0)]})}}
      {% endif %}
    </span>


    </td>

    <td>
    {% if classroom.status=='published' %}
    <span class=\"text-success\">{{'admin.classroom_manage.manage.published'|trans}}</span>
    {% elseif classroom.status=='closed'%}
    
    <span class=\"text-danger\">{{'admin.classroom_manage.manage.closed'|trans}}</span>
    {% else %}
     {{'admin.classroom_manage.manage.unpublished'|trans}}
    {% endif %}
    </td>

    <td>

  <div class=\"btn-group\">
      {% if has_permission('admin_classroom_content_manage') %}
        <a href=\"{{ path('classroom_manage', {id:classroom.id}) }}\" target=\"_blank\" class=\"btn btn-default btn-sm\">{{ 'admin.classroom_manage.manage.manage_btn'|trans }}</a>
      {% endif %}

      {% include 'admin/role/templates/group-button.html.twig' with {parentCode: 'admin_classroom_manage', group:'groupButton', classroom: classroom} %}
  </div>
 </td>
</tr>", "admin/classroom/table-tr.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\classroom\\table-tr.html.twig");
    }
}
