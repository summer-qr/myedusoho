<?php

/* admin/open-course/tr.html.twig */
class __TwigTemplate_90df6bc4e58b004ca6e3d7c77392529c1e7cf3b59506997f8332cab86358378f extends Twig_Template
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
        $__internal_95a47b46fbe426a2f18dfc18aaed707455384f390daa403c1eab894259edc1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a47b46fbe426a2f18dfc18aaed707455384f390daa403c1eab894259edc1db->enter($__internal_95a47b46fbe426a2f18dfc18aaed707455384f390daa403c1eab894259edc1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/open-course/tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/open-course/tr.html.twig", 1);
        // line 2
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "admin/open-course/tr.html.twig", 2);
        // line 3
        $context["target"] = (("" . (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter"))) . "_index");
        // line 4
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 5
        $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/open-course/tr.html.twig", 5)->display($context);
        // line 6
        echo "  <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</strong></a>
    
    ";
        // line 10
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "liveOpen")) {
            // line 11
            echo "      <span class=\"label label-success live-label mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.live_course"), "html", null, true);
            echo "</span>
    ";
        }
        // line 13
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.category", array("%categoryName%" => (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")))), "html", null, true);
        echo "</span> 
    ";
        // line 16
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())) {
            // line 17
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.recommend", array("%recommendedTime%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedTime", array()), "Y-m-d"), "%recommendedSeq%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedSeq", array()))), "html", null, true);
            echo "</span>
    ";
        }
        // line 19
        echo "  </td>
    
  <td>";
        // line 21
        echo $context["dict_macro"]->getcourseStatus($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()));
        echo "</td>
  ";
        // line 22
        $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/open-course/tr.html.twig", 22)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "orgCode", array()))));
        // line 23
        echo "  <td>
    ";
        // line 24
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "createdTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.manage_btn"), "html", null, true);
        echo "</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
    
        ";
        // line 37
        if ( !$this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())) {
            // line 38
            echo "          <li><a class=\"recommend-course\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_course_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "ref" => "courseList", "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.recommend_course_btn"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 40
        echo "
        ";
        // line 41
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())) {
            // line 42
            echo "          <li><a class=\"cancel-recommend-course\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_course_cancel_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "target" => (isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-right\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.cancel_recommend_btn"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "published")) {
            // line 46
            echo "          <li class=\"divider\"></li>
          <li><a class=\"close-course\" href=\"javascript:\" data-url=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_course_close", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.student"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.student"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.closed_course_btn"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 49
        echo "
        ";
        // line 50
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published")) {
            // line 51
            echo "          <li class=\"divider\"></li>
          <li><a class=\"publish-course\" href=\"javascript:\" data-url=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_course_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.publish_course_btn"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 54
        echo "
        ";
        // line 55
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isSuperAdmin", array(), "method"))) {
            // line 56
            echo "          <li class=\"divider\"></li>
          <li><a class=\"delete-course\" href=\"javascript:;\" data-url=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "", "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
            echo "\"  data-chapter=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.chapter"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.chapter"))), "html", null, true);
            echo "\" data-part=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.section"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.section"))), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.student"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.student"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.manage.delete_course_btn"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 59
        echo "      </ul>
    </div>
  </td>
</tr>
";
        
        $__internal_95a47b46fbe426a2f18dfc18aaed707455384f390daa403c1eab894259edc1db->leave($__internal_95a47b46fbe426a2f18dfc18aaed707455384f390daa403c1eab894259edc1db_prof);

    }

    public function getTemplateName()
    {
        return "admin/open-course/tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 59,  172 => 57,  169 => 56,  167 => 55,  164 => 54,  157 => 52,  154 => 51,  152 => 50,  149 => 49,  140 => 47,  137 => 46,  135 => 45,  132 => 44,  124 => 42,  122 => 41,  119 => 40,  111 => 38,  109 => 37,  97 => 30,  90 => 26,  85 => 24,  82 => 23,  80 => 22,  76 => 21,  72 => 19,  66 => 17,  64 => 16,  60 => 15,  56 => 13,  50 => 11,  48 => 10,  41 => 8,  35 => 6,  33 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"admin/macro.html.twig\" as admin_macro %}
{% import \"common/data-dict-macro.html.twig\" as dict_macro %}
{% set target = ''~filter~'_index' %}
<tr id=\"course-tr-{{ course.id }}\">
  {% include 'org/parts/table-body-checkbox.html.twig' %}
  <td>{{ course.id }}</td>
  <td>
    <a href=\"{{ path('open_course_show', {courseId:course.id}) }}\" target=\"_blank\"><strong>{{ course.title }}</strong></a>
    
    {% if course.type == 'liveOpen' %}
      <span class=\"label label-success live-label mls\">{{ 'admin.open_manage.manage.live_course'|trans }}</span>
    {% endif %}

    <br>
    <span class=\"text-muted text-sm\">{{ 'admin.open_manage.category'|trans({'%categoryName%': category.name|default('--')}) }}</span> 
    {% if course.recommended %}
      <span class=\"label label-default\">{{ 'admin.open_manage.manage.recommend'|trans({'%recommendedTime%': course.recommendedTime|date('Y-m-d'), '%recommendedSeq%': course.recommendedSeq}) }}</span>
    {% endif %}
  </td>
    
  <td>{{ dict_macro.courseStatus(course.status) }}</td>
  {% include 'org/parts/table-body-td.html.twig' with {orgCode: course.orgCode} %}
  <td>
    {{ admin_macro.user_link(user) }}
    <br>
    <span class=\"text-muted text-sm\">{{ course.createdTime|date('Y-m-d H:i') }}</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"{{ path('open_course_manage', {id:course.id,filter:filter}) }}\" target=\"_blank\">{{ 'admin.open_manage.manage.manage_btn'|trans }}</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
    
        {% if not course.recommended %}
          <li><a class=\"recommend-course\" href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_open_course_recommend', {id:course.id, ref:'courseList', filter:filter}) }}\"><span class=\"glyphicon glyphicon-hand-up\"></span> {{ 'admin.open_manage.manage.recommend_course_btn'|trans }}</a></li>
        {% endif %}

        {% if course.recommended %}
          <li><a class=\"cancel-recommend-course\" href=\"javascript:\" data-url=\"{{ path('admin_open_course_cancel_recommend', {id:course.id, filter:filter,target:target}) }}\"><span class=\"glyphicon glyphicon-hand-right\"></span> {{ 'admin.open_manage.cancel_recommend_btn'|trans }}</a></li>
        {% endif %}

        {% if course.status == 'published' %}
          <li class=\"divider\"></li>
          <li><a class=\"close-course\" href=\"javascript:\" data-url=\"{{ path('admin_open_course_close', {id:course.id, filter:filter}) }}\" data-user=\"{{default.user_name|default('admin.open_manage.manage.student'|trans)}}\"><span class=\"glyphicon glyphicon-ban-circle\"></span> {{ 'admin.open_manage.manage.closed_course_btn'|trans }}</a></li>
        {% endif %}

        {% if course.status != 'published' %}
          <li class=\"divider\"></li>
          <li><a class=\"publish-course\" href=\"javascript:\" data-url=\"{{ path('admin_open_course_publish', {id:course.id, filter:filter}) }}\"><span class=\"glyphicon glyphicon-ok-circle\"></span> {{ 'admin.open_manage.manage.publish_course_btn'|trans }}</a></li>
        {% endif %}

        {% if course.status != 'published' and app.user.isSuperAdmin() %}
          <li class=\"divider\"></li>
          <li><a class=\"delete-course\" href=\"javascript:;\" data-url=\"{{ path('admin_open_course_delete', {courseId:course.id,type:'',filter:filter}) }}\"  data-chapter=\"{{default.chapter_name|default('admin.open_manage.chapter'|trans)}}\" data-part=\"{{default.part_name|default('admin.open_manage.section'|trans)}}\" data-user=\"{{default.user_name|default('admin.open_manage.student'|trans)}}\"><span class=\"glyphicon glyphicon-trash\"></span> {{ 'admin.open_manage.manage.delete_course_btn'|trans }}</a></li>
        {% endif %}
      </ul>
    </div>
  </td>
</tr>
", "admin/open-course/tr.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\open-course\\tr.html.twig");
    }
}
