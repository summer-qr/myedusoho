<?php

/* admin/system/mobile.html.twig */
class __TwigTemplate_ba063a6d01624fb6bc923c81224bd8e8b494d9aa328bbf0f679b9d1040490baf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/mobile.html.twig", 1);
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
        $__internal_c402dce74bf88e76ff427d1639255e52e28c46bce9c4d2c3497b4e0231f21a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c402dce74bf88e76ff427d1639255e52e28c46bce9c4d2c3497b4e0231f21a1f->enter($__internal_c402dce74bf88e76ff427d1639255e52e28c46bce9c4d2c3497b4e0231f21a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/mobile.html.twig"));

        // line 3
        $context["menu"] = "admin_operation_mobile_banner_manage";
        // line 5
        $context["script_controller"] = "operation/mobile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c402dce74bf88e76ff427d1639255e52e28c46bce9c4d2c3497b4e0231f21a1f->leave($__internal_c402dce74bf88e76ff427d1639255e52e28c46bce9c4d2c3497b4e0231f21a1f_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_a172d795834ffecdd26092c459fa78972b455982f85680b2ce485ffb31b54424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a172d795834ffecdd26092c459fa78972b455982f85680b2ce485ffb31b54424->enter($__internal_a172d795834ffecdd26092c459fa78972b455982f85680b2ce485ffb31b54424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "<style>

#mobile-banner1-container img ,
#mobile-banner2-container img ,
#mobile-banner3-container img ,
#mobile-banner4-container img ,
#mobile-banner5-container img
{max-width: 80%; margin-bottom: 10px;}

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.banner-course .course-grid {
  margin: 0 0 0 0;
  margin-left: 10px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  overflow: hidden;
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}


</style>
";
        // line 74
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled") == 1)) {
            // line 75
            echo "
";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <fieldset>
    <div class=\"help-block\">";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.head_tips");
            echo "</div>
    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                echo "      ";
                $context["banner"] = ("banner" . $context["i"]);
                // line 84
                echo "      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.banner_label") . $context["i"]), "html", null, true);
                echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          ";
                // line 89
                $context["moobileId"] = ("mobile-banner" . $context["i"]);
                // line 90
                echo "          <div id=\"";
                echo twig_escape_filter($this->env, (isset($context["moobileId"]) ? $context["moobileId"] : $this->getContext($context, "moobileId")), "html", null, true);
                echo "-container\">
              ";
                // line 91
                if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), array(), "array")) {
                    // line 92
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), array(), "array")), "html", null, true);
                    echo "\">
              ";
                }
                // line 94
                echo "          </div>

          <a class=\"btn btn-default btn-sm\" id=\"";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["moobileId"]) ? $context["moobileId"] : $this->getContext($context, "moobileId")), "html", null, true);
                echo "-upload\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_upload", array("type" => (isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")))), "html", null, true);
                echo "\" data-upload-token=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.upload_btn"), "html", null, true);
                echo "</a>
          <button class=\"btn btn-default btn-sm\" id=\"";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["moobileId"]) ? $context["moobileId"] : $this->getContext($context, "moobileId")), "html", null, true);
                echo "-remove\" type=\"button\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_remove", array("type" => (isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")))), "html", null, true);
                echo "\" ";
                if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), array(), "array")) {
                    echo "style=\"display:none;\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.delete_btn"), "html", null, true);
                echo "</button>

          <p class=\"help-block\">";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.img_tips"), "html", null, true);
                echo "</p>
            ";
                // line 100
                $context["bannerClick"] = ("bannerClick" . $context["i"]);
                // line 101
                echo "          <div class=\"banner-setting\" role=\"";
                echo twig_escape_filter($this->env, (("banner" . $context["i"]) . "-setting"), "html", null, true);
                echo "\" ";
                if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), array(), "array")) {
                    echo "style=\"display:none;\"";
                }
                echo ">
            <input type=\"radio\" role=\"";
                // line 102
                echo twig_escape_filter($this->env, (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), "html", null, true);
                echo "\" ";
                if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), array(), "array")) {
                    echo "checked=\"checked\"";
                }
                echo " value=\"0\"/>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.default_click_radio"), "html", null, true);
                echo "
            <input type=\"radio\" role=\"";
                // line 103
                echo twig_escape_filter($this->env, (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), "html", null, true);
                echo "\" value=\"1\" ";
                if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), array(), "array") == "1")) {
                    echo "checked=\"checked\"";
                }
                echo "/>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.goto_link_radio"), "html", null, true);
                echo "
            <input type=\"radio\" role=\"";
                // line 104
                echo twig_escape_filter($this->env, (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), "html", null, true);
                echo "\" value=\"2\" ";
                if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), array(), "array") == "2")) {
                    echo "checked=\"checked\"";
                }
                echo "/>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.goto_inside_course_radio"), "html", null, true);
                echo "

            <div class=\"row\">
              <div class=\"col-xs-11\">
                  ";
                // line 108
                $context["bannerUrl"] = ("bannerUrl" . $context["i"]);
                // line 109
                echo "                <input type=\"text\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["bannerUrl"]) ? $context["bannerUrl"] : $this->getContext($context, "bannerUrl")), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["bannerUrl"]) ? $context["bannerUrl"] : $this->getContext($context, "bannerUrl")), "html", null, true);
                echo "\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["bannerUrl"]) ? $context["bannerUrl"] : $this->getContext($context, "bannerUrl")), array(), "array"), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.link_url_placeholder"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), array(), "array") != "1")) {
                    echo "style=\"display:none\"";
                }
                echo "/>
              </div>
            </div>

            <div class=\"row\" id=\"";
                // line 113
                echo twig_escape_filter($this->env, ("selectBannerCourse" . $context["i"]), "html", null, true);
                echo "\" data-role=\"selectBannerCourse\" ";
                if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["bannerClick"]) ? $context["bannerClick"] : $this->getContext($context, "bannerClick")), array(), "array") != "2")) {
                    echo "style=\"display:none\"";
                }
                echo ">
              <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 114
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_search_to_fill_banner");
                echo "\" >
                  ";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.selete_course_btn"), "html", null, true);
                echo "
              </a>
              <div name=\"";
                // line 117
                echo twig_escape_filter($this->env, ("bannerCourseShow" . $context["i"]), "html", null, true);
                echo "\">
                <ul class=\"banner-course\" role=\"bannerCourse\">
                    ";
                // line 119
                $this->loadTemplate("admin/course/course-item.html.twig", "admin/system/mobile.html.twig", 119)->display(array_merge($context, array("course" => $this->getAttribute((isset($context["bannerCourses"]) ? $context["bannerCourses"] : $this->getContext($context, "bannerCourses")), $context["i"], array(), "array"))));
                // line 120
                echo "                </ul>
              </div>
              ";
                // line 122
                $context["bannerJumpToCourseId"] = ("bannerJumpToCourseId" . $context["i"]);
                // line 123
                echo "              <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["bannerJumpToCourseId"]) ? $context["bannerJumpToCourseId"] : $this->getContext($context, "bannerJumpToCourseId")), "html", null, true);
                echo "\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["bannerJumpToCourseId"]) ? $context["bannerJumpToCourseId"] : $this->getContext($context, "bannerJumpToCourseId")), array(), "array"), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.inside_course_id_placeholder"), "html", null, true);
                echo "\" style=\"display:none;\"/>
            </div>
          </div>


          <input type=\"hidden\" name=\"";
                // line 128
                echo twig_escape_filter($this->env, (isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), (isset($context["banner"]) ? $context["banner"] : $this->getContext($context, "banner")), array(), "array"), "html", null, true);
                echo "\">
        </div>
      </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "
  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
            echo "</button>
    </div>
  </div>

</form>

";
        } else {
            // line 146
            echo "<div class=\"well\" style=\"text-align:center;\">

";
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.mobile_manage.open_tips", array("%openUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile")));
            echo "
</div>
";
        }
        // line 151
        echo "
";
        
        $__internal_a172d795834ffecdd26092c459fa78972b455982f85680b2ce485ffb31b54424->leave($__internal_a172d795834ffecdd26092c459fa78972b455982f85680b2ce485ffb31b54424_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 151,  366 => 148,  362 => 146,  352 => 139,  345 => 135,  340 => 132,  320 => 128,  307 => 123,  305 => 122,  301 => 120,  299 => 119,  294 => 117,  289 => 115,  285 => 114,  277 => 113,  259 => 109,  257 => 108,  242 => 104,  230 => 103,  218 => 102,  209 => 101,  207 => 100,  203 => 99,  190 => 97,  180 => 96,  176 => 94,  170 => 92,  168 => 91,  163 => 90,  161 => 89,  153 => 86,  149 => 84,  146 => 83,  129 => 82,  125 => 81,  117 => 76,  114 => 75,  112 => 74,  45 => 9,  39 => 8,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_operation_mobile_banner_manage' %}

{% set script_controller = 'operation/mobile' %}


{% block main %}
<style>

#mobile-banner1-container img ,
#mobile-banner2-container img ,
#mobile-banner3-container img ,
#mobile-banner4-container img ,
#mobile-banner5-container img
{max-width: 80%; margin-bottom: 10px;}

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.banner-course .course-grid {
  margin: 0 0 0 0;
  margin-left: 10px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  overflow: hidden;
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}


</style>
{% if setting(\"mobile.enabled\") == 1 %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <fieldset>
    <div class=\"help-block\">{{'admin.mobile_manage.head_tips'|trans|raw}}</div>
    {% for i in 1..5 %}
      {% set banner = 'banner'~ i %}
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"{{ banner }}\">{{'admin.mobile_manage.banner_label'|trans~i}}</label>
        </div>
        <div class=\"col-md-8 controls\">
          {% set moobileId = 'mobile-banner' ~ i %}
          <div id=\"{{ moobileId }}-container\">
              {% if mobile[banner] %}
                <img src=\"{{ asset(mobile[banner]) }}\">
              {% endif %}
          </div>

          <a class=\"btn btn-default btn-sm\" id=\"{{ moobileId }}-upload\" data-url=\"{{ path('admin_operation_mobile_picture_upload', {type:banner}) }}\" data-upload-token=\"{{ upload_token('system', 'image') }}\">{{'admin.mobile_manage.upload_btn'|trans}}</a>
          <button class=\"btn btn-default btn-sm\" id=\"{{ moobileId }}-remove\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_remove', {type:banner}) }}\" {% if not mobile[banner] %}style=\"display:none;\"{% endif %}>{{'admin.mobile_manage.delete_btn'|trans}}</button>

          <p class=\"help-block\">{{'admin.mobile_manage.img_tips'|trans}}</p>
            {% set bannerClick  = 'bannerClick' ~ i%}
          <div class=\"banner-setting\" role=\"{{ 'banner'~i~'-setting' }}\" {% if not mobile[banner] %}style=\"display:none;\"{% endif %}>
            <input type=\"radio\" role=\"{{ bannerClick }}\" name=\"{{ bannerClick }}\" {% if not mobile[bannerClick] %}checked=\"checked\"{% endif %} value=\"0\"/>{{'admin.mobile_manage.default_click_radio'|trans}}
            <input type=\"radio\" role=\"{{ bannerClick }}\" name=\"{{ bannerClick }}\" value=\"1\" {% if mobile[bannerClick] == \"1\" %}checked=\"checked\"{% endif %}/>{{'admin.mobile_manage.goto_link_radio'|trans}}
            <input type=\"radio\" role=\"{{ bannerClick }}\" name=\"{{ bannerClick }}\" value=\"2\" {% if mobile[bannerClick] == \"2\" %}checked=\"checked\"{% endif %}/>{{'admin.mobile_manage.goto_inside_course_radio'|trans}}

            <div class=\"row\">
              <div class=\"col-xs-11\">
                  {% set bannerUrl  = 'bannerUrl' ~ i%}
                <input type=\"text\" id=\"{{ bannerUrl }}\" name=\"{{ bannerUrl }}\" class=\"form-control\" value=\"{{mobile[bannerUrl]}}\" placeholder=\"{{'admin.mobile_manage.link_url_placeholder'|trans}}\" {% if mobile[bannerClick] != \"1\" %}style=\"display:none\"{% endif %}/>
              </div>
            </div>

            <div class=\"row\" id=\"{{ 'selectBannerCourse' ~ i}}\" data-role=\"selectBannerCourse\" {% if mobile[bannerClick] != \"2\" %}style=\"display:none\"{% endif %}>
              <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('admin_course_search_to_fill_banner')}}\" >
                  {{'admin.mobile_manage.selete_course_btn'|trans}}
              </a>
              <div name=\"{{ 'bannerCourseShow' ~ i}}\">
                <ul class=\"banner-course\" role=\"bannerCourse\">
                    {% include 'admin/course/course-item.html.twig' with {course:bannerCourses[i]} %}
                </ul>
              </div>
              {% set bannerJumpToCourseId  = 'bannerJumpToCourseId' ~ i%}
              <input type=\"text\" name=\"{{ bannerJumpToCourseId }}\" class=\"form-control\" value=\"{{mobile[bannerJumpToCourseId]}}\" placeholder=\"{{'admin.mobile_manage.inside_course_id_placeholder'|trans}}\" style=\"display:none;\"/>
            </div>
          </div>


          <input type=\"hidden\" name=\"{{banner}}\" value=\"{{ mobile[banner] }}\">
        </div>
      </div>
    {% endfor %}

  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>
    </div>
  </div>

</form>

{% else %}
<div class=\"well\" style=\"text-align:center;\">

{{ 'admin.mobile_manage.open_tips'|trans({'%openUrl%': path('admin_setting_mobile')})|raw }}
</div>
{% endif %}

{% endblock %}
", "admin/system/mobile.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\mobile.html.twig");
    }
}
