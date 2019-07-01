<?php

/* admin/course-set/tr.html.twig */
class __TwigTemplate_c624e6acf2d3c442e70b3e1e548490158d77713012ec66bee50c649ec9e2f572 extends Twig_Template
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
        $__internal_58384cb28f2e3d9ab2c7bc29ef80aa693af125b70dc48504c51011eaaa1789db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58384cb28f2e3d9ab2c7bc29ef80aa693af125b70dc48504c51011eaaa1789db->enter($__internal_58384cb28f2e3d9ab2c7bc29ef80aa693af125b70dc48504c51011eaaa1789db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/course-set/tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/course-set/tr.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "admin/course-set/tr.html.twig", 3);
        // line 4
        $context["target"] = (("" . (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter"))) . "_index");
        // line 5
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 6
        $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/course-set/tr.html.twig", 6)->display($context);
        // line 7
        echo "  <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
        echo "\"
       target=\"_blank\"><strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
        echo "</strong></a>
    ";
        // line 11
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
            // line 12
            echo "      ";
            $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), array(), "array"), null)) : (null));
            // line 13
            echo "      ";
            if ( !(isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom"))) {
                // line 14
                echo "        <span class=\"label label-danger live-label mls\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.classroom_course_removed"), "html", null, true);
                echo "</span>
      ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "type", array()) == "live")) {
            // line 18
            echo "      <span class=\"label label-success live-label mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.live_course"), "html", null, true);
            echo "</span>
    ";
        }
        // line 20
        echo "    <br>
    <span class=\"text-muted text-sm\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.category"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 22
        if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "recommended", array())) {
            // line 23
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.recommend", array("%recommendedTime%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "recommendedTime", array()), "Y-m-d"), "%recommendedSeq%" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "recommendedSeq", array()))), "html", null, true);
            echo "</span>
    ";
        }
        // line 25
        echo "  </td>
  <td>
    ";
        // line 27
        if ((((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array()), 0)) : (0)) == 0) || ((($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array()), 0)) : (0)) == (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "minCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "minCoursePrice", array()), 0)) : (0))))) {
            // line 28
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array()), 0)) : (0)), "html", null, true);
            echo "
    ";
        } else {
            // line 30
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "minCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "minCoursePrice", array()))) : ("")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array()))) : ("")), "html", null, true);
            echo "
    ";
        }
        // line 32
        echo "  </td>

  ";
        // line 34
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal")) {
            // line 35
            echo "    <td><a class=\"pvs phs\" href=\"javascript:void(0);\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_list", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["coursesCount"]) ? $context["coursesCount"] : null), $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), array(), "array", false, true), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["coursesCount"]) ? $context["coursesCount"] : null), $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), array(), "array", false, true), "courseNum", array()), 0)) : (0)), "html", null, true);
            echo "</a></td>
  ";
        }
        // line 37
        echo "  <td>
    ";
        // line 38
        if ((((array_key_exists("tag", $context)) ? (_twig_default_filter((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")))) : ("")) && (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "displayTag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "displayTag", array()), "")) : ("")))) {
            // line 39
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 41
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "displayTag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "displayTag", array()), "--")) : ("--")), "html", null, true);
            echo "
    ";
        }
        // line 43
        echo "    ";
        if (($this->env->getExtension('AppBundle\Twig\AppExtension')->count($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "tags", array())) > 1)) {
            // line 44
            echo "      <i class=\"es-icon es-icon-more ft-xsm\" data-toggle=\"popover\" data-container=\"body\" data-trigger=\"hover\"
         data-placement=\"top\" data-content=\"";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "displayTagNames", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "displayTagNames", array()))) : ("")), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 47
        echo "  </td>
  ";
        // line 48
        $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/course-set/tr.html.twig", 48)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "orgCode", array()))));
        // line 49
        echo "  ";
        if ((((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) != "open") && ((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) != "liveOpen"))) {
            // line 50
            echo "    ";
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
                // line 51
                echo "      <td>
        ";
                // line 52
                $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), array(), "array"), null)) : (null));
                // line 53
                echo "        ";
                if ((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom"))) {
                    // line 54
                    echo "          <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classroomId", array()))), "html", null, true);
                    echo "\"
             target=\"_blank\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classroomTitle", array()), "html", null, true);
                    echo "</a>
        ";
                }
                // line 57
                echo "      </td>
    ";
            } else {
                // line 59
                echo "      <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "studentNum", array()), "html", null, true);
                echo "</td>
    ";
            }
            // line 61
            echo "    ";
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "vip")) {
                // line 62
                echo "      ";
                $context["levels"] = $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "levels", array(), "array");
                // line 63
                echo "      ";
                $context["length"] = twig_length_filter($this->env, (isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels")));
                // line 64
                echo "      ";
                if (((isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")) == 0)) {
                    // line 65
                    echo "        <td>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_grade_removed"), "html", null, true);
                    echo "</td>
      ";
                } else {
                    // line 67
                    echo "        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels"))), "name", array()), "html", null, true);
                    echo "
          ";
                    // line 68
                    if (((isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")) > 1)) {
                        // line 69
                        echo "            <br>
            <span class=\"text-muted text-sm\">";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_grade_count", array("%count%" => (isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")))), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 72
                    echo "        </td>
      ";
                }
                // line 74
                echo "    ";
            }
            // line 75
            echo "  ";
        }
        // line 76
        echo "  
  <td>
    ";
        // line 78
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>";
        // line 82
        echo $context["dict_macro"]->getcourseStatus($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()));
        echo "<br>
    ";
        // line 83
        if ((((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) != "open") && ((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) != "liveOpen"))) {
            // line 84
            echo "      <span class=\"text-muted text-sm\">";
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("courseSerializeMode", $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "serializeMode", array()));
            echo "</span>
    ";
        }
        // line 86
        echo "  </td>
  <td>
    <div class=\"btn-group\">

      ";
        // line 90
        if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage")) {
            // line 91
            echo "        <a class=\"btn btn-default btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
            echo "\"
           target=\"_blank\">";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.manage_btn"), "html", null, true);
            echo "</a>
      ";
        }
        // line 94
        echo "      ";
        $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/course-set/tr.html.twig", 94)->display(array_merge($context, array("parentCode" => "admin_course_manage", "group" => "groupButton", "courseSet" => (isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")))));
        // line 95
        echo "    </div>
  </td>
</tr>";
        
        $__internal_58384cb28f2e3d9ab2c7bc29ef80aa693af125b70dc48504c51011eaaa1789db->leave($__internal_58384cb28f2e3d9ab2c7bc29ef80aa693af125b70dc48504c51011eaaa1789db_prof);

    }

    public function getTemplateName()
    {
        return "admin/course-set/tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 95,  283 => 94,  278 => 92,  273 => 91,  271 => 90,  265 => 86,  259 => 84,  257 => 83,  253 => 82,  248 => 80,  243 => 78,  239 => 76,  236 => 75,  233 => 74,  229 => 72,  224 => 70,  221 => 69,  219 => 68,  214 => 67,  208 => 65,  205 => 64,  202 => 63,  199 => 62,  196 => 61,  190 => 59,  186 => 57,  181 => 55,  176 => 54,  173 => 53,  171 => 52,  168 => 51,  165 => 50,  162 => 49,  160 => 48,  157 => 47,  152 => 45,  149 => 44,  146 => 43,  140 => 41,  134 => 39,  132 => 38,  129 => 37,  121 => 35,  119 => 34,  115 => 32,  107 => 30,  101 => 28,  99 => 27,  95 => 25,  89 => 23,  87 => 22,  81 => 21,  78 => 20,  72 => 18,  69 => 17,  66 => 16,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  48 => 10,  44 => 9,  38 => 7,  36 => 6,  31 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
<tr id=\"course-tr-{{ courseSet.id }}\">
  {% include 'org/parts/table-body-checkbox.html.twig' %}
  <td>{{ courseSet.id }}</td>
  <td>
    <a href=\"{{ path('course_set_show', {id: courseSet.id}) }}\"
       target=\"_blank\"><strong>{{ courseSet.title }}</strong></a>
    {% if filter == 'classroom' %}
      {% set classroom = classrooms[courseSet.id]|default(null) %}
      {% if not classroom %}
        <span class=\"label label-danger live-label mls\">{{ 'admin.course_manage.manage.classroom_course_removed'|trans }}</span>
      {% endif %}
    {% endif %}
    {% if courseSet.type == 'live' %}
      <span class=\"label label-success live-label mls\">{{ 'admin.course_manage.manage.live_course'|trans }}</span>
    {% endif %}
    <br>
    <span class=\"text-muted text-sm\">{{ 'admin.course_manage.manage.category'|trans }}：{{ category.name|default('--') }}</span>
    {% if courseSet.recommended %}
      <span class=\"label label-default\">{{ 'admin.course_manage.manage.recommend'|trans({'%recommendedTime%': courseSet.recommendedTime|date('Y-m-d'), '%recommendedSeq%': courseSet.recommendedSeq}) }}</span>
    {% endif %}
  </td>
  <td>
    {% if courseSet.maxCoursePrice|default(0) == 0 or courseSet.maxCoursePrice|default(0) == courseSet.minCoursePrice|default(0) %}
      {{ courseSet.maxCoursePrice|default(0) }}
    {% else %}
      {{ courseSet.minCoursePrice|default() }}-{{ courseSet.maxCoursePrice|default() }}
    {% endif %}
  </td>

  {% if filter == 'normal' %}
    <td><a class=\"pvs phs\" href=\"javascript:void(0);\" data-url=\"{{ path('admin_course_list', {id:courseSet.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\" target=\"_blank\">{{ coursesCount[courseSet.id].courseNum|default(0) }}</a></td>
  {% endif %}
  <td>
    {% if tag|default() and courseSet.displayTag|default('') %}
        {{ tag.name }}
      {% else %}
        {{ courseSet.displayTag|default('--') }}
    {% endif %}
    {% if count(courseSet.tags)>1 %}
      <i class=\"es-icon es-icon-more ft-xsm\" data-toggle=\"popover\" data-container=\"body\" data-trigger=\"hover\"
         data-placement=\"top\" data-content=\"{{ courseSet.displayTagNames|default() }}\"></i>
    {% endif %}
  </td>
  {% include 'org/parts/table-body-td.html.twig' with {orgCode: courseSet.orgCode} %}
  {% if filter != 'open' and filter != 'liveOpen' %}
    {% if filter == 'classroom' %}
      <td>
        {% set classroom = classrooms[courseSet.id]|default(null) %}
        {% if classroom %}
          <a href=\"{{ path('classroom_show',{id:classroom.classroomId}) }}\"
             target=\"_blank\">{{ classroom.classroomTitle }}</a>
        {% endif %}
      </td>
    {% else %}
      <td>{{ courseSet.studentNum }}</td>
    {% endif %}
    {% if filter == 'vip' %}
      {% set levels = courseSet['levels'] %}
      {% set length = levels|length %}
      {% if length == 0 %}
        <td>{{ 'admin.course_manage.manage.vip_grade_removed'|trans }}</td>
      {% else %}
        <td>{{ levels|first.name }}
          {% if length > 1 %}
            <br>
            <span class=\"text-muted text-sm\">{{ 'admin.course_manage.manage.vip_grade_count'|trans({'%count%': length}) }}</span>
          {% endif %}
        </td>
      {% endif %}
    {% endif %}
  {% endif %}
  
  <td>
    {{ admin_macro.user_link(user) }}
    <br>
    <span class=\"text-muted text-sm\">{{ courseSet.createdTime|date('Y-n-d H:i') }}</span>
  </td>
  <td>{{ dict_macro.courseStatus( courseSet.status) }}<br>
    {% if filter != 'open' and filter != 'liveOpen' %}
      <span class=\"text-muted text-sm\">{{ dict_text('courseSerializeMode',courseSet.serializeMode) }}</span>
    {% endif %}
  </td>
  <td>
    <div class=\"btn-group\">

      {% if has_permission('admin_course_content_manage') %}
        <a class=\"btn btn-default btn-sm\" href=\"{{ path('course_set_manage_base', {id:courseSet.id}) }}\"
           target=\"_blank\">{{ 'admin.course_manage.manage.manage_btn'|trans }}</a>
      {% endif %}
      {% include 'admin/role/templates/group-button.html.twig' with {parentCode: 'admin_course_manage', group:'groupButton', courseSet: courseSet} %}
    </div>
  </td>
</tr>", "admin/course-set/tr.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\course-set\\tr.html.twig");
    }
}
