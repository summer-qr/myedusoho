<?php

/* admin/system/site.html.twig */
class __TwigTemplate_69fca409a7651de0d777ddf8e1f2a6f74379fdadda230f8f2241789875c2c06e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/site.html.twig", 1);
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
        $__internal_9fc51d9c8b5a343fd4dd9d2331292d458590342ab26fa93ef5c966da45777d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc51d9c8b5a343fd4dd9d2331292d458590342ab26fa93ef5c966da45777d48->enter($__internal_9fc51d9c8b5a343fd4dd9d2331292d458590342ab26fa93ef5c966da45777d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/site.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_message";
        // line 5
        $context["script_controller"] = "setting/site";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fc51d9c8b5a343fd4dd9d2331292d458590342ab26fa93ef5c966da45777d48->leave($__internal_9fc51d9c8b5a343fd4dd9d2331292d458590342ab26fa93ef5c966da45777d48_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_3572f309c90777a4489aab10f12e555b3f816e75a15ce3b4d362239521c921e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3572f309c90777a4489aab10f12e555b3f816e75a15ce3b4d362239521c921e5->enter($__internal_3572f309c90777a4489aab10f12e555b3f816e75a15ce3b4d362239521c921e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\" data-save-url=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_site_save");
        echo "\">

  <fieldset>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.name"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.slogan"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "slogan", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"url\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.url"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "url", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.url.help_block", array("%http%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getScheme", array(), "method"))), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.logo"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">";
        // line 48
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" id=\"site-logo-upload\"
        data-upload-token=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_logo_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_logo_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.logo.help_block");
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.logo.view_btn"), "html", null, true);
        echo "</a></p>
        <input type=\"hidden\" name=\"logo\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "logo", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.favicon"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">";
        // line 63
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "favicon", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "favicon", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\"
        id=\"site-favicon-upload\"
        data-upload-token=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_favicon_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\"
        id=\"site-favicon-remove\"
        type=\"button\" data-url=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_favicon_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "favicon", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.favicon.help_block");
        echo "</p>
        <input type=\"hidden\" name=\"favicon\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "favicon", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.seo_keywords"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "seo_keywords", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.seo_keywords.help_block"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.seo_description"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "seo_description", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.copyright"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "copyright", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.copyright.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.icp"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "icp", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_statistics_analysis"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.analytics"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "analytics", array()), "html", null, true);
        echo "</textarea>
        ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.analytics.help_block");
        echo "
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 140
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("status", array("open" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status.open"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status.closed")), $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "status", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.closed_note"), "html", null, true);
        echo "</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "closed_note", array()), "html", null, true);
        echo "</textarea>
        <p class=\"help-block\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.closed_note.help_block"), "html", null, true);
        echo "。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"button\" class=\"btn btn-primary\" id=\"save-site\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
        
        $__internal_3572f309c90777a4489aab10f12e555b3f816e75a15ce3b4d362239521c921e5->leave($__internal_3572f309c90777a4489aab10f12e555b3f816e75a15ce3b4d362239521c921e5_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 161,  353 => 157,  343 => 150,  339 => 149,  333 => 146,  324 => 140,  318 => 137,  311 => 133,  302 => 127,  298 => 126,  291 => 122,  285 => 119,  273 => 110,  267 => 107,  258 => 101,  254 => 100,  248 => 97,  239 => 91,  233 => 88,  224 => 82,  220 => 81,  214 => 78,  205 => 72,  201 => 71,  191 => 70,  183 => 67,  179 => 66,  169 => 63,  163 => 60,  154 => 54,  146 => 53,  136 => 52,  130 => 51,  126 => 50,  117 => 48,  111 => 45,  102 => 39,  98 => 38,  92 => 35,  83 => 29,  77 => 26,  68 => 20,  62 => 17,  53 => 11,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_setting_message' %}

{% set script_controller = 'setting/site' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\" data-save-url=\"{{ path('admin_setting_site_save') }}\">

  <fieldset>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">{{'admin.setting.site.name'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"{{site.name}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">{{'admin.setting.site.slogan'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"{{site.slogan}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"url\">{{'admin.setting.site.url'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"{{site.url}}\">
        <p class=\"help-block\">{{'admin.setting.site.url.help_block'|trans({'%http%':app.request.getScheme()})}}</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">{{'admin.setting.site.logo'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">{% if site.logo %}<img src=\"{{ asset(site.logo) }}\">{% endif %}</div>
        <a class=\"btn btn-default\" id=\"site-logo-upload\"
        data-upload-token=\"{{ upload_token('system', 'image') }}\"
        data-goto-url=\"{{ path('admin_setting_logo_upload') }}\">{{'form.btn.upload'|trans}}</a>
        <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\" data-url=\"{{ path('admin_setting_logo_remove') }}\" {% if not site.logo %}style=\"display:none;\"{% endif %}>{{'form.btn.delete'|trans}}</button>
        <p class=\"help-block\">{{'admin.setting.site.logo.help_block'|trans|raw}}<a href=\"{{ path('homepage') }}\" target=\"_blank\">{{ 'admin.setting.site.logo.view_btn'|trans }}</a></p>
        <input type=\"hidden\" name=\"logo\" value=\"{{ site.logo }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">{{'admin.setting.site.favicon'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">{% if site.favicon %}<img src=\"{{ asset(site.favicon) }}\">{% endif %}</div>
        <a class=\"btn btn-default\"
        id=\"site-favicon-upload\"
        data-upload-token=\"{{ upload_token('system', 'image') }}\"
        data-goto-url=\"{{ path('admin_setting_favicon_upload') }}\">{{'form.btn.upload'|trans}}</a>
        <button class=\"btn btn-default\"
        id=\"site-favicon-remove\"
        type=\"button\" data-url=\"{{ path('admin_setting_favicon_remove') }}\" {% if not site.favicon %}style=\"display:none;\"{% endif %}>{{'form.btn.delete'|trans}}</button>
        <p class=\"help-block\">{{'admin.setting.site.favicon.help_block'|trans|raw}}</p>
        <input type=\"hidden\" name=\"favicon\" value=\"{{ site.favicon }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">{{'admin.setting.site.seo_keywords'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"{{site.seo_keywords}}\">
        <p class=\"help-block\">{{'admin.setting.site.seo_keywords.help_block'|trans}}</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">{{'admin.setting.site.seo_description'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"{{site.seo_description}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">{{'admin.setting.site.copyright'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"{{site.copyright}}\">
        <div class=\"help-block\">{{'admin.setting.site.copyright.help_block'|trans}}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">{{'admin.setting.site.icp'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"{{site.icp}}\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>{{'admin.setting.site.website_statistics_analysis'|trans}}</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">{{'admin.setting.site.analytics'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">{{site.analytics}}</textarea>
        {{'admin.setting.site.analytics.help_block'|trans|raw}}
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>{{'admin.setting.site.website_status'|trans}}</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >{{'admin.setting.site.website_status'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        {{ radios('status', {open:'admin.setting.site.website_status.open'|trans, closed:'admin.setting.site.website_status.closed'|trans}, site.status) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>{{'admin.setting.site.closed_note'|trans}}</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">{{site.closed_note}}</textarea>
        <p class=\"help-block\">{{'admin.setting.site.closed_note.help_block'|trans}}。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"button\" class=\"btn btn-primary\" id=\"save-site\">{{'form.btn.submit'|trans}}</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

</form>

{% endblock %}
", "admin/system/site.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\site.html.twig");
    }
}
