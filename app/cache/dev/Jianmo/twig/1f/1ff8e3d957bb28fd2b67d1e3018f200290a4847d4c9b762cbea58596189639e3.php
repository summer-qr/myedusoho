<?php

/* classroom-manage/header.html.twig */
class __TwigTemplate_b1f0a27081fd6b7c32c7a798dc53354a386f8b7c5cc1ed8c3c540ddfa3a66785 extends Twig_Template
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
        $__internal_12b8e948054393c4d79e89346f84636c61e5048b11ca0e22f4f32e302491af2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b8e948054393c4d79e89346f84636c61e5048b11ca0e22f4f32e302491af2b->enter($__internal_12b8e948054393c4d79e89346f84636c61e5048b11ca0e22f4f32e302491af2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classroom-manage/header.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/classroom-manage/publish/index.js"));
        // line 2
        echo "
";
        // line 3
        $context["unsetted"] = "";
        // line 4
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array())) {
            // line 5
            $context["unsetted"] = (((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.about"));
        }
        // line 7
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array())) {
            // line 8
            $context["unsetted"] = (((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.small_picture"));
        }
        // line 10
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) == 0)) {
            // line 11
            echo "  ";
            $context["unsetted"] = (((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.price"));
        }
        // line 13
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "courseNum", array()) == 0)) {
            // line 14
            $context["unsetted"] = (((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course"));
        }
        // line 16
        echo "

<div class=\"es-section classroom-manage-header clearfix\">
  <img class=\"picture\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array()), "classroom.png"), "html", null, true);
        echo "\">
  <h1 class=\"title\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 21
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "draft")) {
            // line 22
            echo "    <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.unpublish"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "closed")) {
            // line 24
            echo "    <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.closed"), "html", null, true);
            echo "</span>
    ";
        }
        // line 26
        echo "    ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 27
            echo "    <span class=\"label label-success\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.published"), "html", null, true);
            echo "</span>
    ";
        }
        // line 29
        echo "  </h1>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 32
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 33
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle btn-sm\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.go_back_classroom_homepage", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 37
        echo "    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-sm\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.preview"), "html", null, true);
        echo " <span class=\"caret\"></span>
      </button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.as_guest"), "html", null, true);
        echo "</a></li>
        ";
        // line 43
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "showable", array())) {
            // line 44
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => "auditor")), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.as_auditor"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 46
        echo "        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.as_member"), "html", null, true);
        echo "</a></li>
      </ul>
    </div>


    ";
        // line 51
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) != "published")) {
            // line 52
            echo "      <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">
          ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.publish"), "html", null, true);
            echo "
        </button>
      </div>

      <div id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
              <h4 class=\"modal-title\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.publish_name", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
            // line 67
            if ((twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted"))) > 0)) {
                // line 68
                echo "                ";
                $context["unsetted"] = twig_split_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->subStr((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")), 1, (twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted"))) - 1)), ",");
                // line 69
                echo "                <span class=\"color-danger\">
                    ";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.unsetted", array("%unsetted%" => twig_join_filter((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")), "，"))), "html", null, true);
                echo "
                </span>
                ";
            }
            // line 73
            echo "                &nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.whether_confirm_publish"), "html", null, true);
            echo "
              </p>
            </div>
            <div class=\"modal-footer\">
              <a data-dismiss=\"modal\" href=\"\">";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
            echo "</a>&nbsp;
              <button type=\"button\" class=\"btn btn-success\" id=\"publishSure\" data-url=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_publish", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.confirm"), "html", null, true);
            echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 84
        echo "
  </div>
</div>";
        
        $__internal_12b8e948054393c4d79e89346f84636c61e5048b11ca0e22f4f32e302491af2b->leave($__internal_12b8e948054393c4d79e89346f84636c61e5048b11ca0e22f4f32e302491af2b_prof);

    }

    public function getTemplateName()
    {
        return "classroom-manage/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 84,  195 => 78,  191 => 77,  183 => 73,  177 => 70,  174 => 69,  171 => 68,  169 => 67,  162 => 63,  150 => 54,  146 => 52,  144 => 51,  133 => 46,  125 => 44,  123 => 43,  117 => 42,  111 => 39,  107 => 37,  99 => 34,  96 => 33,  94 => 32,  89 => 29,  83 => 27,  80 => 26,  74 => 24,  72 => 23,  67 => 22,  65 => 21,  59 => 20,  55 => 19,  50 => 16,  47 => 14,  45 => 13,  41 => 11,  39 => 10,  36 => 8,  34 => 7,  31 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do script(['app/js/classroom-manage/publish/index.js']) %}

{% set unsetted = \"\" %}
{% if not classroom.about %}
{% set unsetted = unsetted ~ ',' ~ 'classroom.about'|trans %}
{% endif %}
{% if not classroom.smallPicture %}
{% set unsetted = unsetted ~ ',' ~ 'classroom.small_picture'|trans %}
{% endif %}
{% if classroom.price == 0 %}
  {% set unsetted = unsetted ~ ',' ~ 'classroom.price'|trans %}
{% endif %}
{% if classroom.courseNum == 0 %}
{% set unsetted = unsetted ~ ',' ~ 'classroom.course'|trans %}
{% endif %}


<div class=\"es-section classroom-manage-header clearfix\">
  <img class=\"picture\" src=\"{{ filepath(classroom.smallPicture, 'classroom.png') }}\">
  <h1 class=\"title\"><a href=\"{{path('classroom_show',{id:classroom.id})}}\">{{classroom.title}}</a>
    {% if classroom.status == \"draft\" %}
    <span class=\"label label-warning \">{{'classroom.unpublish'|trans}}</span>
    {% elseif classroom.status == \"closed\" %}
    <span class=\"label label-danger \">{{'classroom.closed'|trans}}</span>
    {% endif %}
    {% if classroom.status == \"published\" %}
    <span class=\"label label-success\"> {{'classroom.published'|trans}}</span>
    {% endif %}
  </h1>

  <div class=\"toolbar hidden-xs\">
    {% if classroom.status == 'published' %}
      <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle btn-sm\" href=\"{{ path('classroom_show', {id:classroom.id}) }}\">{{'classroom.go_back_classroom_homepage'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</a>
      </div>
    {% endif %}
    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-sm\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        {{'classroom.preview'|trans}} <span class=\"caret\"></span>
      </button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"{{path('classroom_courses',{classroomId:classroom.id,previewAs:'guest'})}}\" target=\"_blank\">{{'classroom.as_guest'|trans}}</a></li>
        {% if  classroom.showable %}
          <li><a href=\"{{path('classroom_courses',{classroomId:classroom.id,previewAs:'auditor'})}}\" target=\"_blank\">{{'classroom.as_auditor'|trans}}</a></li>
        {% endif %}
        <li><a href=\"{{path('classroom_courses',{classroomId:classroom.id,previewAs:'member'})}}\" target=\"_blank\">{{'classroom.as_member'|trans}}</a></li>
      </ul>
    </div>


    {% if classroom.status != 'published' %}
      <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">
          {{'classroom.publish'|trans}}
        </button>
      </div>

      <div id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
              <h4 class=\"modal-title\">{{'classroom.publish_name'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</h4>
            </div>
            <div class=\"modal-body\">
              <p>
                {% if unsetted|length > 0 %}
                {% set unsetted = sub_str(unsetted, 1, unsetted|length - 1 )|split(',')  %}
                <span class=\"color-danger\">
                    {{'classroom.unsetted'|trans({'%unsetted%':unsetted|join(\"，\")})}}
                </span>
                {% endif %}
                &nbsp;{{'classroom.whether_confirm_publish'|trans}}
              </p>
            </div>
            <div class=\"modal-footer\">
              <a data-dismiss=\"modal\" href=\"\">{{'form.btn.cancel'|trans}}</a>&nbsp;
              <button type=\"button\" class=\"btn btn-success\" id=\"publishSure\" data-url=\"{{path('classroom_manage_publish',{id:classroom.id})}}\">{{'form.btn.confirm'|trans}}</button>
            </div>
          </div>
        </div>
      </div>
    {% endif %}

  </div>
</div>", "classroom-manage/header.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\classroom-manage\\header.html.twig");
    }
}
