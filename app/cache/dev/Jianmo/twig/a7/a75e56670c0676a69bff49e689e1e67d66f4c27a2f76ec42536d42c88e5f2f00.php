<?php

/* courseset-manage/base-info/info.html.twig */
class __TwigTemplate_7886d324b11b5ddb1b0f34d41511102635b2b192c5e82ba2f03f96f14c36faca extends Twig_Template
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
        $__internal_fc6dd780f6f43df6554788446125c222da9600d008e60090a997e7a131b807f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6dd780f6f43df6554788446125c222da9600d008e60090a997e7a131b807f3->enter($__internal_fc6dd780f6f43df6554788446125c222da9600d008e60090a997e7a131b807f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/base-info/info.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
  <div class=\"col-md-2 control-label courseset-manage-body__lable\">
    <label class=\"control-label-required\" for=\"title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.title"), "html", null, true);
        echo "</label>
  </div>
  <div class=\"col-md-8\">
    <input type=\"text\" id=\"title\" name=\"title\" required=\"required\" class=\"form-control js-courseset-title\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"subtitle\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.sub_title"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8\">
    <textarea id=\"subtitle\" name=\"subtitle\" class=\"form-control js-courseset-subtitle\">";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"tags\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 controls\">
    <input type=\"text\" id=\"tags\" name=\"tags\" class=\"width-full select2-offscreen\"tabindex=\"-1\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_join_filter(((array_key_exists("tags", $context)) ? (_twig_default_filter((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), "")) : ("")), ","), "html", null, true);
        echo "\"
      data-url=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match");
        echo "\"
      data-explain=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag_tips"), "html", null, true);
        echo "\">
    <div class=\"help-block courseset-manage-body__tip\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag_tips"), "html", null, true);
        echo "</div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"categoryId\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.category"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 controls\">
    <select id=\"categoryId\" name=\"categoryId\" class=\"form-control width-input width-input-large\">
      ";
        // line 33
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "categoryId", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.category"));
        echo "
    </select>
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>
";
        // line 38
        $this->loadTemplate("org/org-tree-select-webpack.html.twig", "courseset-manage/base-info/info.html.twig", 38)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 39
        echo "
<div class=\"form-group\">
  <label class=\"col-md-2 control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 cd-radio-group\">
    ";
        // line 43
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("serializeMode", array("none" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.none"), "serialized" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.serialized"), "finished" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.finished")), (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "serializeMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "serializeMode", array()), "none")) : ("none")));
        echo "
  </div>
</div>

<!-- 封面图片 -->
<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"cover\"><b>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.content_title"), "html", null, true);
        echo "</b></label>
  <div class=\"col-md-8 controls\">
    ";
        // line 51
        $this->loadTemplate("common/upload-image.html.twig", "courseset-manage/base-info/info.html.twig", 51)->display(array_merge($context, array("saveUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_cover_crop", array("id" => $this->getAttribute(        // line 52
(isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "targetImg" => "course-cover", "cropWidth" => "480", "cropHeight" => "270", "uploadToken" => "tmp", "imageClass" => "course-manage-cover", "imageText" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover.change"), "imageSrc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(        // line 59
(isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "large"), "courseSet.png"))));
        // line 62
        echo "    <div class=\"courseset-manage-body__tip\">
      ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.upload_tips");
        echo "
    </div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.detail.summary"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 controls\">
    <textarea name=\"summary\" rows=\"10\" data-form=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "html", null, true);
        echo "\" data-button=\"";
        echo twig_escape_filter($this->env, (isset($context["button"]) ? $context["button"] : $this->getContext($context, "button")), "html", null, true);
        echo "\" id=\"courseset-summary-field\" class=\"form-control\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->fieldValue((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "summary");
        echo "</textarea>
  </div>
</div>";
        
        $__internal_fc6dd780f6f43df6554788446125c222da9600d008e60090a997e7a131b807f3->leave($__internal_fc6dd780f6f43df6554788446125c222da9600d008e60090a997e7a131b807f3_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/base-info/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 71,  135 => 69,  126 => 63,  123 => 62,  121 => 59,  120 => 52,  119 => 51,  114 => 49,  105 => 43,  100 => 41,  96 => 39,  94 => 38,  86 => 33,  80 => 30,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  55 => 20,  46 => 14,  41 => 12,  32 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-group\">
  <div class=\"col-md-2 control-label courseset-manage-body__lable\">
    <label class=\"control-label-required\" for=\"title\">{{ 'course.base.title'|trans }}</label>
  </div>
  <div class=\"col-md-8\">
    <input type=\"text\" id=\"title\" name=\"title\" required=\"required\" class=\"form-control js-courseset-title\" value=\"{{ courseSet.title|default('') }}\">
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"subtitle\">{{ 'course.base.sub_title'|trans }}</label>
  <div class=\"col-md-8\">
    <textarea id=\"subtitle\" name=\"subtitle\" class=\"form-control js-courseset-subtitle\">{{ courseSet.subtitle|default('') }}</textarea>
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"tags\">{{ 'course.base.tag'|trans }}</label>
  <div class=\"col-md-8 controls\">
    <input type=\"text\" id=\"tags\" name=\"tags\" class=\"width-full select2-offscreen\"tabindex=\"-1\" value=\"{{tags|default('')|join(',')}}\"
      data-url=\"{{ path('tag_match') }}\"
      data-explain=\"{{ 'course.base.tag_tips'|trans }}\">
    <div class=\"help-block courseset-manage-body__tip\">{{ 'course.base.tag_tips'|trans }}</div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"categoryId\">{{ 'course.base.category'|trans }}</label>
  <div class=\"col-md-8 controls\">
    <select id=\"categoryId\" name=\"categoryId\" class=\"form-control width-input width-input-large\">
      {{ select_options(category_choices('course'), courseSet.categoryId, 'course.base.category'|trans) }}
    </select>
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>
{% include 'org/org-tree-select-webpack.html.twig' with {orgCode: courseSet.orgCode, inputClass: 'width-input width-input-large' } %}

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\">{{ 'course.base.serialize_mode'|trans }}</label>
  <div class=\"col-md-8 cd-radio-group\">
    {{ cd_radios('serializeMode', {'none':'course.base.serialize_mode.none'|trans, 'serialized':'course.base.serialize_mode.serialized'|trans, 'finished':'course.base.serialize_mode.finished'|trans}, courseSet.serializeMode|default('none') ) }}
  </div>
</div>

<!-- 封面图片 -->
<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"cover\"><b>{{'course.cover_image.content_title'|trans}}</b></label>
  <div class=\"col-md-8 controls\">
    {% include 'common/upload-image.html.twig' with {
      saveUrl: path('course_set_manage_cover_crop', {id: courseSet.id}),
      targetImg: 'course-cover',
        cropWidth: '480',
        cropHeight: '270',
        uploadToken: 'tmp',
        imageClass: 'course-manage-cover',
        imageText: 'course.cover.change'|trans,
        imageSrc: filepath(course_set_cover(courseSet, 'large'), 'courseSet.png'),
      } 
    %}
    <div class=\"courseset-manage-body__tip\">
      {{ 'course.cover_image.upload_tips'|trans|raw }}
    </div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\">{{'course.detail.summary'|trans}}</label>
  <div class=\"col-md-8 controls\">
    <textarea name=\"summary\" rows=\"10\" data-form=\"{{ form }}\" data-button=\"{{ button }}\" id=\"courseset-summary-field\" class=\"form-control\" data-image-upload-url=\"{{ path('editor_upload', {token:upload_token('course')}) }}\">{{ field_value(courseSet, 'summary') }}</textarea>
  </div>
</div>", "courseset-manage/base-info/info.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\base-info\\info.html.twig");
    }
}
