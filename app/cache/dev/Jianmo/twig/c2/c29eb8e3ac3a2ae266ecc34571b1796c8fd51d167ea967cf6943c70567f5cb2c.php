<?php

/* open-course-manage/base-info.html.twig */
class __TwigTemplate_28a088e755b9176e2c9e98b18845cda49ebd227771c9320914931f4222d381dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("open-course-manage/layout.html.twig", "open-course-manage/base-info.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'paddingClass' => array($this, 'block_paddingClass'),
            'main_heading_class' => array($this, 'block_main_heading_class'),
            'page_title' => array($this, 'block_page_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "open-course-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7570131be5fe77b8bca3ec044625d283562bc3ff3bd4bebcea802764a00f58c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7570131be5fe77b8bca3ec044625d283562bc3ff3bd4bebcea802764a00f58c0->enter($__internal_7570131be5fe77b8bca3ec044625d283562bc3ff3bd4bebcea802764a00f58c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "open-course-manage/base-info.html.twig"));

        // line 5
        $context["side_nav"] = "base";
        // line 6
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match"));
        // line 10
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/bootstrap-datetimepicker.js", 2 => "libs/jquery-validation.js", 3 => "libs/select2.js", 4 => "libs/bootstrap-datetimepicker.js", 5 => "app/js/open-course-manage/base/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7570131be5fe77b8bca3ec044625d283562bc3ff3bd4bebcea802764a00f58c0->leave($__internal_7570131be5fe77b8bca3ec044625d283562bc3ff3bd4bebcea802764a00f58c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_635b0723ee716393d9280c432d5363521559d291b75e9f2107ab9198ee45ab00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635b0723ee716393d9280c432d5363521559d291b75e9f2107ab9198ee45ab00->enter($__internal_635b0723ee716393d9280c432d5363521559d291b75e9f2107ab9198ee45ab00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_635b0723ee716393d9280c432d5363521559d291b75e9f2107ab9198ee45ab00->leave($__internal_635b0723ee716393d9280c432d5363521559d291b75e9f2107ab9198ee45ab00_prof);

    }

    // line 11
    public function block_paddingClass($context, array $blocks = array())
    {
        $__internal_8f0d0f65b49d2ade56bfe62d100400f9c05fafb45679b3a53279ecde0564275c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0d0f65b49d2ade56bfe62d100400f9c05fafb45679b3a53279ecde0564275c->enter($__internal_8f0d0f65b49d2ade56bfe62d100400f9c05fafb45679b3a53279ecde0564275c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paddingClass"));

        echo "course-manage-body course-manage-info";
        
        $__internal_8f0d0f65b49d2ade56bfe62d100400f9c05fafb45679b3a53279ecde0564275c->leave($__internal_8f0d0f65b49d2ade56bfe62d100400f9c05fafb45679b3a53279ecde0564275c_prof);

    }

    // line 12
    public function block_main_heading_class($context, array $blocks = array())
    {
        $__internal_ddda65d1021ae043d24d8aa19df11e9a94de07024802272fb640a1e6f5685290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddda65d1021ae043d24d8aa19df11e9a94de07024802272fb640a1e6f5685290->enter($__internal_ddda65d1021ae043d24d8aa19df11e9a94de07024802272fb640a1e6f5685290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_heading_class"));

        echo " course-manage-info__title ";
        
        $__internal_ddda65d1021ae043d24d8aa19df11e9a94de07024802272fb640a1e6f5685290->leave($__internal_ddda65d1021ae043d24d8aa19df11e9a94de07024802272fb640a1e6f5685290_prof);

    }

    // line 14
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0eb360bbf8ec873db14a24d3a15bcf7deecd6dc9d540317554e9e7226f3eea0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb360bbf8ec873db14a24d3a15bcf7deecd6dc9d540317554e9e7226f3eea0c->enter($__internal_0eb360bbf8ec873db14a24d3a15bcf7deecd6dc9d540317554e9e7226f3eea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 15
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info"), "html", null, true);
        echo "
";
        
        $__internal_0eb360bbf8ec873db14a24d3a15bcf7deecd6dc9d540317554e9e7226f3eea0c->leave($__internal_0eb360bbf8ec873db14a24d3a15bcf7deecd6dc9d540317554e9e7226f3eea0c_prof);

    }

    // line 18
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_32936c05f2137fd878f9921b726a3eb73b08c31bcaf6cfa4df07759301a25a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32936c05f2137fd878f9921b726a3eb73b08c31bcaf6cfa4df07759301a25a46->enter($__internal_32936c05f2137fd878f9921b726a3eb73b08c31bcaf6cfa4df07759301a25a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 19
        echo "  <div class=\"course-manage-subltitle cd-mb40\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info"), "html", null, true);
        echo "</div>
  <form class=\"form-horizontal\" id=\"course-form\" method=\"post\" data-update = \"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["canUpdateStartTime"]) ? $context["canUpdateStartTime"] : $this->getContext($context, "canUpdateStartTime")), "html", null, true);
        echo "\">

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"><label class=\"control-label-required\" for=\"course_title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info.title"), "html", null, true);
        echo "</label></div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"course_title\" name=\"title\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"help-block cd-text-sm\" style=\"display:none;\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info.category"), "html", null, true);
        echo "</label>
      <div class=\"col-md-8 controls\">
        <select id=\"course_categoryId\" name=\"categoryId\" class=\"form-control width-input width-input-large\">
          ";
        // line 34
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "categoryId", array()), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info.category")));
        echo "
        </select>
        <div class=\"help-block cd-text-sm\" style=\"display:none;\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info.tags"), "html", null, true);
        echo "</label>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"course_tags\" name=\"tags\" class=\"width-full select2-offscreen\" tabindex=\"-1\"
          value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), ","), "html", null, true);
        echo "\" data-explain=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info.tags.explain"), "html", null, true);
        echo "\">
        <div class=\"help-block cd-text-sm\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info.tags.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <!-- 封面图片 -->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"cover\"><b>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.content_title"), "html", null, true);
        echo "</b></label>
      <div class=\"col-md-8 controls\">
        ";
        // line 53
        $this->loadTemplate("common/upload-image.html.twig", "open-course-manage/base-info.html.twig", 53)->display(array_merge($context, array("saveUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_picture_crop", array("id" => $this->getAttribute(        // line 54
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "targetImg" => "picture", "cropWidth" => "480", "cropHeight" => "270", "uploadToken" => "tmp", "imageClass" => "course-manage-cover", "imageText" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover.change"), "imageSrc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(        // line 61
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "largePicture", array()), "course.png"))));
        // line 63
        echo "        <div class=\"courseset-manage-body__tip\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.upload_tips");
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"><label>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info.about"), "html", null, true);
        echo "</label></div>
      <div class=\"col-md-8 controls\">
        <textarea name=\"about\" rows=\"10\" id=\"course-about-field\" class=\"form-control\"
          data-image-upload-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "about", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block cd-text-sm\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.Basic_Info.about.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    ";
        // line 76
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "liveOpen")) {
            // line 77
            echo "    <div class=\"course-manage-subltitle cd-mb40\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.liveTimeSet.title"), "html", null, true);
            echo "</div>

      <div class=\"form-group cd-mb8\">
        <label class=\"col-md-2 control-label\" for=\"live-startTime\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.liveTimeSet.start_time"), "html", null, true);
            echo "</label>
        <div class=\"col-md-8 controls\" style=\"z-index:2000;\">
          <input type=\"text\" id=\"live-startTime\"  name=\"startTime\" class=\"form-control width-input width-input-large\" value=\"";
            // line 82
            if ((isset($context["openLiveLesson"]) ? $context["openLiveLesson"] : $this->getContext($context, "openLiveLesson"))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["openLiveLesson"]) ? $context["openLiveLesson"] : $this->getContext($context, "openLiveLesson")), "startTime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "\" data-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_time_check");
            echo "\">
          <div class=\"help-block cd-text-sm js-time-help-tip\">
            ";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.liveTimeSet.start_time.help_block"), "html", null, true);
            echo "
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\" for=\"live-length-field\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.liveTimeSet.live_length"), "html", null, true);
            echo "</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" name=\"timeLength\" id=\"live-length-field\" class=\"form-control width-input width-input-large\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["openLiveLesson"]) ? $context["openLiveLesson"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["openLiveLesson"]) ? $context["openLiveLesson"] : null), "length", array()), 60)) : (60)), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.liveTimeSet.live_length.placeholer"), "html", null, true);
            echo "\" data-calculate-left-capacity-url=\"\" data-max-Student-Num = \"\"  data-url=\"
          ";
            // line 93
            ob_start();
            // line 94
            echo "            ";
            if (((array_key_exists("openLiveLesson", $context)) ? (_twig_default_filter((isset($context["openLiveLesson"]) ? $context["openLiveLesson"] : $this->getContext($context, "openLiveLesson")), null)) : (null))) {
                // line 95
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_open_lesson_time_check", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["openLiveLesson"]) ? $context["openLiveLesson"] : $this->getContext($context, "openLiveLesson")), "id", array()))), "html", null, true);
                echo "
            ";
            } else {
                // line 97
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_open_lesson_time_check", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "
            ";
            }
            // line 99
            echo "          ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "\">
          <span class=\"cd-dark-minor cd-ml8 cd-text-medium\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.liveTimeSet.live_length.minute"), "html", null, true);
            echo "</span>
          <div class=\"help-block cd-text-sm js-time-help-tip\"></div>
        </div>

        <input type=\"hidden\" id=\"live_lesson_time_check\" data-url=\"";
            // line 104
            if (((array_key_exists("openLiveLesson", $context)) ? (_twig_default_filter((isset($context["openLiveLesson"]) ? $context["openLiveLesson"] : $this->getContext($context, "openLiveLesson")), null)) : (null))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_open_lesson_time_check", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["openLiveLesson"]) ? $context["openLiveLesson"] : $this->getContext($context, "openLiveLesson")), "id", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_open_lesson_time_check", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            }
            echo "\" />
      </div>
    ";
        }
        // line 107
        echo "

    <div class=\"form-group\">
      <div class=\"col-md-offset-2 col-md-8 controls\">
        <button class=\"cd-btn cd-btn-primary\" id=\"course-create-btn\" type=\"button\" data-loading-text=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>
";
        
        $__internal_32936c05f2137fd878f9921b726a3eb73b08c31bcaf6cfa4df07759301a25a46->leave($__internal_32936c05f2137fd878f9921b726a3eb73b08c31bcaf6cfa4df07759301a25a46_prof);

    }

    public function getTemplateName()
    {
        return "open-course-manage/base-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 115,  292 => 111,  286 => 107,  276 => 104,  269 => 100,  264 => 99,  258 => 97,  252 => 95,  249 => 94,  247 => 93,  241 => 92,  236 => 90,  227 => 84,  218 => 82,  213 => 80,  206 => 77,  204 => 76,  197 => 72,  191 => 71,  185 => 68,  176 => 63,  174 => 61,  173 => 54,  172 => 53,  167 => 51,  158 => 45,  152 => 44,  146 => 41,  136 => 34,  130 => 31,  121 => 25,  116 => 23,  110 => 20,  105 => 19,  99 => 18,  89 => 15,  83 => 14,  71 => 12,  59 => 11,  45 => 3,  38 => 1,  36 => 10,  34 => 6,  32 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'open-course-manage/layout.html.twig' %}

{% block title %}{{ 'my.teaching.open_course.Basic_Info'|trans }} - {{ parent() }}{% endblock %}

{% set side_nav = 'base' %}
{% set script_arguments = {
categoryUrl: path('category_all'),
tagMatchUrl: path('tag_match')
} %}
{% do script(['libs/es-ckeditor/ckeditor.js','libs/bootstrap-datetimepicker.js','libs/jquery-validation.js', 'libs/select2.js','libs/bootstrap-datetimepicker.js', 'app/js/open-course-manage/base/index.js'])%}
{% block paddingClass %}course-manage-body course-manage-info{% endblock %}
{% block main_heading_class %} course-manage-info__title {% endblock %}

{% block page_title %}
  {{ 'my.teaching.open_course.Basic_Info'|trans }}
{% endblock %}

{% block main_body %}
  <div class=\"course-manage-subltitle cd-mb40\">{{ 'my.teaching.open_course.Basic_Info'|trans }}</div>
  <form class=\"form-horizontal\" id=\"course-form\" method=\"post\" data-update = \"{{ canUpdateStartTime }}\">

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"><label class=\"control-label-required\" for=\"course_title\">{{ 'my.teaching.open_course.Basic_Info.title'|trans }}</label></div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"course_title\" name=\"title\" class=\"form-control\" value=\"{{ course.title|default('') }}\">
        <div class=\"help-block cd-text-sm\" style=\"display:none;\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\">{{ 'my.teaching.open_course.Basic_Info.category'|trans }}</label>
      <div class=\"col-md-8 controls\">
        <select id=\"course_categoryId\" name=\"categoryId\" class=\"form-control width-input width-input-large\">
          {{ select_options(category_choices('course'), course.categoryId, {0:'my.teaching.open_course.Basic_Info.category'|trans}) }}
        </select>
        <div class=\"help-block cd-text-sm\" style=\"display:none;\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\">{{ 'my.teaching.open_course.Basic_Info.tags'|trans }}</label>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"course_tags\" name=\"tags\" class=\"width-full select2-offscreen\" tabindex=\"-1\"
          value=\"{{ tags|join(',') }}\" data-explain=\"{{ 'my.teaching.open_course.Basic_Info.tags.explain'|trans }}\">
        <div class=\"help-block cd-text-sm\">{{ 'my.teaching.open_course.Basic_Info.tags.help_block'|trans }}</div>
      </div>
    </div>

    <!-- 封面图片 -->
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"cover\"><b>{{'course.cover_image.content_title'|trans}}</b></label>
      <div class=\"col-md-8 controls\">
        {% include 'common/upload-image.html.twig' with {
        saveUrl: path('open_course_manage_picture_crop', {id: course.id}),
        targetImg: 'picture',
        cropWidth: '480',
        cropHeight: '270',
        uploadToken: 'tmp',
        imageClass: 'course-manage-cover',
        imageText: 'course.cover.change'|trans,
        imageSrc: filepath(course.largePicture, 'course.png'),
        } %}
        <div class=\"courseset-manage-body__tip\">{{ 'course.cover_image.upload_tips'|trans|raw }}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"><label>{{ 'my.teaching.open_course.Basic_Info.about'|trans }}</label></div>
      <div class=\"col-md-8 controls\">
        <textarea name=\"about\" rows=\"10\" id=\"course-about-field\" class=\"form-control\"
          data-image-upload-url=\"{{ path('editor_upload', {token:upload_token('course')}) }}\">{{ course.about }}</textarea>
        <div class=\"help-block cd-text-sm\">{{ 'my.teaching.open_course.Basic_Info.about.help_block'|trans }}</div>
      </div>
    </div>

    {% if course.type == 'liveOpen' %}
    <div class=\"course-manage-subltitle cd-mb40\">{{ 'my.teaching.open_course.liveTimeSet.title'|trans }}</div>

      <div class=\"form-group cd-mb8\">
        <label class=\"col-md-2 control-label\" for=\"live-startTime\">{{'my.teaching.open_course.liveTimeSet.start_time'|trans}}</label>
        <div class=\"col-md-8 controls\" style=\"z-index:2000;\">
          <input type=\"text\" id=\"live-startTime\"  name=\"startTime\" class=\"form-control width-input width-input-large\" value=\"{% if openLiveLesson %}{{ openLiveLesson.startTime|date('Y-m-d H:i:s') }}{% endif %}\" data-url=\"{{ path('client_time_check') }}\">
          <div class=\"help-block cd-text-sm js-time-help-tip\">
            {{'my.teaching.open_course.liveTimeSet.start_time.help_block'|trans}}
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\" for=\"live-length-field\">{{'my.teaching.open_course.liveTimeSet.live_length'|trans}}</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" name=\"timeLength\" id=\"live-length-field\" class=\"form-control width-input width-input-large\" value=\"{{ openLiveLesson.length|default(60) }}\" placeholder=\"{{'my.teaching.open_course.liveTimeSet.live_length.placeholer'|trans}}\" data-calculate-left-capacity-url=\"\" data-max-Student-Num = \"\"  data-url=\"
          {% spaceless %}
            {% if openLiveLesson|default(null) %}
              {{path('live_open_lesson_time_check',{courseId:course.id,lessonId:openLiveLesson.id}) }}
            {% else %}
              {{path('live_open_lesson_time_check',{courseId:course.id})}}
            {% endif %}
          {% endspaceless %}\">
          <span class=\"cd-dark-minor cd-ml8 cd-text-medium\">{{'my.teaching.open_course.liveTimeSet.live_length.minute'|trans}}</span>
          <div class=\"help-block cd-text-sm js-time-help-tip\"></div>
        </div>

        <input type=\"hidden\" id=\"live_lesson_time_check\" data-url=\"{% if openLiveLesson|default(null) %}{{path('live_open_lesson_time_check',{courseId:course.id,lessonId:openLiveLesson.id}) }}{% else %}{{path('live_open_lesson_time_check',{courseId:course.id})}}{% endif %}\" />
      </div>
    {% endif %}


    <div class=\"form-group\">
      <div class=\"col-md-offset-2 col-md-8 controls\">
        <button class=\"cd-btn cd-btn-primary\" id=\"course-create-btn\" type=\"button\" data-loading-text=\"{{ 'form.btn.save.submiting'|trans }}\">{{ 'form.btn.save'|trans }}</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

  </form>
{% endblock %}




", "open-course-manage/base-info.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\open-course-manage\\base-info.html.twig");
    }
}
