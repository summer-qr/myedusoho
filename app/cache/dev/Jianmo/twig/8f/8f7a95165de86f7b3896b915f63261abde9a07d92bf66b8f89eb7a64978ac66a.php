<?php

/* admin/edu-cloud/overview/not-access.html.twig */
class __TwigTemplate_6cae61730839008e08f92cb1a932ed50f2680d13896d78180816d701cd81e50c extends Twig_Template
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
        $__internal_e75dcc0b9d17a5bcd560e3a66de74e442cf769f436e27256727ae0fa6f366881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75dcc0b9d17a5bcd560e3a66de74e442cf769f436e27256727ae0fa6f366881->enter($__internal_e75dcc0b9d17a5bcd560e3a66de74e442cf769f436e27256727ae0fa6f366881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edu-cloud/overview/not-access.html.twig"));

        // line 1
        echo "<!-- 未接入 -->
<div class=\"cloud-banner-top\">
  <img src=\"/assets/v2/img/educloud/banner_nouse.jpg\">
  <a href=\"http://open.edusoho.com/cloud/access\" target=\"_blank\" class=\"access-btn\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.immediate_access"), "html", null, true);
        echo "</a>
</div>
<div class=\"cloud-banner banner-bg-blue clearfix\">
  <div class=\"banner-content pull-left\">
    <div class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.cloud_video"), "html", null, true);
        echo "</div>
    <div class=\"subtitle\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.create_online_video_tips");
        echo "</div>
    <div class=\"features text-sm text-muted ptm pbl\">
      ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.experience_tips");
        echo "
    </div>
    <a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\" class=\"text-sm text-underline\"><u>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.further_understand_cloud_video"), "html", null, true);
        echo "</u></a>
  </div>
  <img src=\"/assets/v2/img/educloud/banner_video.png\" class=\"pull-right\">
</div>
<div class=\"cloud-banner banner-bg-gray clearfix\">
  <img src=\"/assets/v2/img/educloud/banner_live.png\" class=\"pull-left\">
  <div class=\"banner-content pull-right\">
    <div class=\"title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.cloud_live"), "html", null, true);
        echo "</div>
    <div class=\"subtitle\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.live_course_tips");
        echo "</span></div>
    <div class=\"features text-sm text-muted ptm pbl\">
      ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.live_open_course_tips");
        echo "
    </div>
    <a href=\"http://open.edusoho.com/show/cloud/live\" target=\"_blank\" class=\"text-sm text-underline\"><u>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.further_understand_cloud_live");
        echo "</u></a>
  </div>
</div>
<div class=\"cloud-banner banner-bg-blue clearfix\">
  <div class=\"banner-content pull-left\">
    <div class=\"title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.cloud_sms"), "html", null, true);
        echo "</div>
    <div class=\"subtitle\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.teach_info_fast_arrival_one_tips");
        echo "</div>
    <div class=\"features text-sm text-muted ptm pbl\">
      ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.teach_info_fast_arrival_two_tips");
        echo "
    </div>
    <a href=\"http://open.edusoho.com/show/cloud/sms\" target=\"_blank\" class=\"text-sm text-underline\"><u>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.further_understand_cloud_sms");
        echo "</u></a>
  </div>
  <img src=\"/assets/v2/img/educloud/banner_video.png\" class=\"pull-right\">
</div>
<div class=\"cloud-banner banner-bg-gray clearfix\">
  <img src=\"/assets/v2/img/educloud/banner_video.png\" class=\"pull-left\">
  <div class=\"banner-content pull-right\">
    <div class=\"title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.cloud_search"), "html", null, true);
        echo "</div>
    <div class=\"subtitle\">";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.search_teach_resources_tips");
        echo "</div>
    <div class=\"features text-sm text-muted ptm pbl\">
      ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.search_more_tips");
        echo "
    </div>
    <a href=\"http://open.edusoho.com/show/cloud/search\" target=\"_blank\" class=\"text-sm text-underline\"><u>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.overview.further_understand_cloud_search"), "html", null, true);
        echo "</u></a>
  </div>
</div>
";
        
        $__internal_e75dcc0b9d17a5bcd560e3a66de74e442cf769f436e27256727ae0fa6f366881->leave($__internal_e75dcc0b9d17a5bcd560e3a66de74e442cf769f436e27256727ae0fa6f366881_prof);

    }

    public function getTemplateName()
    {
        return "admin/edu-cloud/overview/not-access.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  113 => 45,  108 => 43,  104 => 42,  94 => 35,  89 => 33,  84 => 31,  80 => 30,  72 => 25,  67 => 23,  62 => 21,  58 => 20,  48 => 13,  43 => 11,  38 => 9,  34 => 8,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- 未接入 -->
<div class=\"cloud-banner-top\">
  <img src=\"/assets/v2/img/educloud/banner_nouse.jpg\">
  <a href=\"http://open.edusoho.com/cloud/access\" target=\"_blank\" class=\"access-btn\">{{'admin.edu_cloud.overview.immediate_access'|trans}}</a>
</div>
<div class=\"cloud-banner banner-bg-blue clearfix\">
  <div class=\"banner-content pull-left\">
    <div class=\"title\">{{'admin.edu_cloud.overview.cloud_video'|trans}}</div>
    <div class=\"subtitle\">{{'admin.edu_cloud.overview.create_online_video_tips'|trans|raw}}</div>
    <div class=\"features text-sm text-muted ptm pbl\">
      {{'admin.edu_cloud.overview.experience_tips'|trans|raw}}
    </div>
    <a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\" class=\"text-sm text-underline\"><u>{{'admin.edu_cloud.overview.further_understand_cloud_video'|trans}}</u></a>
  </div>
  <img src=\"/assets/v2/img/educloud/banner_video.png\" class=\"pull-right\">
</div>
<div class=\"cloud-banner banner-bg-gray clearfix\">
  <img src=\"/assets/v2/img/educloud/banner_live.png\" class=\"pull-left\">
  <div class=\"banner-content pull-right\">
    <div class=\"title\">{{'admin.edu_cloud.overview.cloud_live'|trans}}</div>
    <div class=\"subtitle\">{{'admin.edu_cloud.overview.live_course_tips'|trans|raw}}</span></div>
    <div class=\"features text-sm text-muted ptm pbl\">
      {{'admin.edu_cloud.overview.live_open_course_tips'|trans|raw}}
    </div>
    <a href=\"http://open.edusoho.com/show/cloud/live\" target=\"_blank\" class=\"text-sm text-underline\"><u>{{'admin.edu_cloud.overview.further_understand_cloud_live'|trans|raw}}</u></a>
  </div>
</div>
<div class=\"cloud-banner banner-bg-blue clearfix\">
  <div class=\"banner-content pull-left\">
    <div class=\"title\">{{'admin.edu_cloud.overview.cloud_sms'|trans}}</div>
    <div class=\"subtitle\">{{'admin.edu_cloud.overview.teach_info_fast_arrival_one_tips'|trans|raw}}</div>
    <div class=\"features text-sm text-muted ptm pbl\">
      {{'admin.edu_cloud.overview.teach_info_fast_arrival_two_tips'|trans|raw}}
    </div>
    <a href=\"http://open.edusoho.com/show/cloud/sms\" target=\"_blank\" class=\"text-sm text-underline\"><u>{{'admin.edu_cloud.overview.further_understand_cloud_sms'|trans|raw}}</u></a>
  </div>
  <img src=\"/assets/v2/img/educloud/banner_video.png\" class=\"pull-right\">
</div>
<div class=\"cloud-banner banner-bg-gray clearfix\">
  <img src=\"/assets/v2/img/educloud/banner_video.png\" class=\"pull-left\">
  <div class=\"banner-content pull-right\">
    <div class=\"title\">{{'admin.edu_cloud.overview.cloud_search'|trans}}</div>
    <div class=\"subtitle\">{{'admin.edu_cloud.overview.search_teach_resources_tips'|trans|raw}}</div>
    <div class=\"features text-sm text-muted ptm pbl\">
      {{'admin.edu_cloud.overview.search_more_tips'|trans|raw}}
    </div>
    <a href=\"http://open.edusoho.com/show/cloud/search\" target=\"_blank\" class=\"text-sm text-underline\"><u>{{'admin.edu_cloud.overview.further_understand_cloud_search'|trans}}</u></a>
  </div>
</div>
", "admin/edu-cloud/overview/not-access.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\edu-cloud\\overview\\not-access.html.twig");
    }
}
