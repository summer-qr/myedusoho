<?php

/* open-course-manage/header.html.twig */
class __TwigTemplate_fe4f2632b00fd2dc1fc45be0667c311b7559f52188085f72fa18f28d2fcdfd36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'coursesetImg' => array($this, 'block_coursesetImg'),
            'coursesetTitle' => array($this, 'block_coursesetTitle'),
            'liveTag' => array($this, 'block_liveTag'),
            'btn' => array($this, 'block_btn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5b6d98ca53a552201d7d399de06288daf74ee30faaf3bae3f53e86c969388ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b6d98ca53a552201d7d399de06288daf74ee30faaf3bae3f53e86c969388ed->enter($__internal_a5b6d98ca53a552201d7d399de06288daf74ee30faaf3bae3f53e86c969388ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "open-course-manage/header.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "open-course-manage/header.html.twig", 1);
        // line 2
        $this->displayBlock('js', $context, $blocks);
        // line 5
        echo "
<div class=\"courseset-manage-header cd-mb32 clearfix\">
  ";
        // line 7
        $this->displayBlock('coursesetImg', $context, $blocks);
        // line 10
        echo "
  ";
        // line 11
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "closed")) {
            // line 12
            echo "    <span class=\"course-publish-status course-publish-status--closed\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.closed"), "html", null, true);
            echo "</span>
  ";
        } elseif (($this->getAttribute(        // line 13
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "draft")) {
            // line 14
            echo "    <span class=\"course-publish-status course-publish-status--unpublished\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.unpublished"), "html", null, true);
            echo "</span>
  ";
        } elseif (($this->getAttribute(        // line 15
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "published")) {
            // line 16
            echo "    <span class=\"course-publish-status course-publish-status--published\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.published"), "html", null, true);
            echo "</span>
  ";
        }
        // line 18
        echo "
  <div class=\"courseset-manage-header-info\">
    <div class=\"courseset-manage-header-info__title text-overflow\" ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array())) > 21)) {
            echo "data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
            echo "\" data-container=\"body\" ";
        }
        echo ">
    ";
        // line 21
        $this->displayBlock('coursesetTitle', $context, $blocks);
        // line 24
        echo "    </div>
    ";
        // line 25
        $this->displayBlock('liveTag', $context, $blocks);
        // line 28
        echo "  </div>

  <div class=\"courseset-manage-header-btn\">
    ";
        // line 31
        $this->displayBlock('btn', $context, $blocks);
        // line 40
        echo "  </div>

  <div class=\"courseset-manage-header-data hidden-xs\">
    <span class=\"cd-text-medium\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.open_course.hit_num"), "html", null, true);
        echo "</span>
    <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "hitNum", array()), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.times"), "html", null, true);
        echo "</div>
  </div>
</div>";
        
        $__internal_a5b6d98ca53a552201d7d399de06288daf74ee30faaf3bae3f53e86c969388ed->leave($__internal_a5b6d98ca53a552201d7d399de06288daf74ee30faaf3bae3f53e86c969388ed_prof);

    }

    // line 2
    public function block_js($context, array $blocks = array())
    {
        $__internal_9ee19e0d5bba49c365802208c0d7b8cd50d4423e9540441bd97703aedb61843d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee19e0d5bba49c365802208c0d7b8cd50d4423e9540441bd97703aedb61843d->enter($__internal_9ee19e0d5bba49c365802208c0d7b8cd50d4423e9540441bd97703aedb61843d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 3
        echo "  ";
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/open-course-manage/header/index.js"));
        
        $__internal_9ee19e0d5bba49c365802208c0d7b8cd50d4423e9540441bd97703aedb61843d->leave($__internal_9ee19e0d5bba49c365802208c0d7b8cd50d4423e9540441bd97703aedb61843d_prof);

    }

    // line 7
    public function block_coursesetImg($context, array $blocks = array())
    {
        $__internal_67dd95c648737a74ccbd93f1698304f2eb08cc282703bfad198bd71b867a1eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67dd95c648737a74ccbd93f1698304f2eb08cc282703bfad198bd71b867a1eb7->enter($__internal_67dd95c648737a74ccbd93f1698304f2eb08cc282703bfad198bd71b867a1eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "coursesetImg"));

        // line 8
        echo "    <img class=\"courseset-manage-header__img\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
  ";
        
        $__internal_67dd95c648737a74ccbd93f1698304f2eb08cc282703bfad198bd71b867a1eb7->leave($__internal_67dd95c648737a74ccbd93f1698304f2eb08cc282703bfad198bd71b867a1eb7_prof);

    }

    // line 21
    public function block_coursesetTitle($context, array $blocks = array())
    {
        $__internal_42800a682afc91b53d0747f839b8df85521794866a3e6abd974b092e767f6cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42800a682afc91b53d0747f839b8df85521794866a3e6abd974b092e767f6cc1->enter($__internal_42800a682afc91b53d0747f839b8df85521794866a3e6abd974b092e767f6cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "coursesetTitle"));

        // line 22
        echo "      <span class=\"cd-dark-major\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</span>
    ";
        
        $__internal_42800a682afc91b53d0747f839b8df85521794866a3e6abd974b092e767f6cc1->leave($__internal_42800a682afc91b53d0747f839b8df85521794866a3e6abd974b092e767f6cc1_prof);

    }

    // line 25
    public function block_liveTag($context, array $blocks = array())
    {
        $__internal_7104cf1a283ff2b4c42078649c5ba62946a964fb53f1957117844f48e6dec6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7104cf1a283ff2b4c42078649c5ba62946a964fb53f1957117844f48e6dec6f4->enter($__internal_7104cf1a283ff2b4c42078649c5ba62946a964fb53f1957117844f48e6dec6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liveTag"));

        // line 26
        echo "      <span class=\"cd-tag cd-tag-orange\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseType"), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()), array(), "array"), "html", null, true);
        echo "</span>
    ";
        
        $__internal_7104cf1a283ff2b4c42078649c5ba62946a964fb53f1957117844f48e6dec6f4->leave($__internal_7104cf1a283ff2b4c42078649c5ba62946a964fb53f1957117844f48e6dec6f4_prof);

    }

    // line 31
    public function block_btn($context, array $blocks = array())
    {
        $__internal_57bcc59ed873871205fc4e6f143ad776eab6e1c627ab84052e06903b8363f92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bcc59ed873871205fc4e6f143ad776eab6e1c627ab84052e06903b8363f92e->enter($__internal_57bcc59ed873871205fc4e6f143ad776eab6e1c627ab84052e06903b8363f92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btn"));

        // line 32
        echo "      ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "published")) {
            // line 33
            echo "        <a class=\"cd-btn cd-btn-primary\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.watch"), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 35
            echo "        <button class=\"cd-btn cd-btn-primary js-course-publish-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_manage_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.publish"), "html", null, true);
            echo "</button>
      ";
        }
        // line 37
        echo "      <a class=\"cd-btn cd-btn-default cd-ml16 hidden-xs\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "as" => "preview")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("open_course.preview"), "html", null, true);
        echo "</a>
      <a class=\"cd-btn cd-btn-default cd-ml16 hidden-xs\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "as" => "preview", "previewType" => "wx")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("open_course.preview_in_wechat"), "html", null, true);
        echo "</a>
    ";
        
        $__internal_57bcc59ed873871205fc4e6f143ad776eab6e1c627ab84052e06903b8363f92e->leave($__internal_57bcc59ed873871205fc4e6f143ad776eab6e1c627ab84052e06903b8363f92e_prof);

    }

    public function getTemplateName()
    {
        return "open-course-manage/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 38,  196 => 37,  188 => 35,  180 => 33,  177 => 32,  171 => 31,  161 => 26,  155 => 25,  145 => 22,  139 => 21,  129 => 8,  123 => 7,  115 => 3,  109 => 2,  97 => 44,  93 => 43,  88 => 40,  86 => 31,  81 => 28,  79 => 25,  76 => 24,  74 => 21,  66 => 20,  62 => 18,  56 => 16,  54 => 15,  49 => 14,  47 => 13,  42 => 12,  40 => 11,  37 => 10,  35 => 7,  31 => 5,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macro.html.twig\" as web_macro %}
{% block js %}
  {% do script(['app/js/open-course-manage/header/index.js'])%}
{% endblock %}

<div class=\"courseset-manage-header cd-mb32 clearfix\">
  {% block coursesetImg %}
    <img class=\"courseset-manage-header__img\" src=\"{{ filepath(course.largePicture, 'course.png') }}\" />
  {% endblock %}

  {% if course.status =='closed' %}
    <span class=\"course-publish-status course-publish-status--closed\">{{'course.status.closed'|trans}}</span>
  {% elseif course.status =='draft' %}
    <span class=\"course-publish-status course-publish-status--unpublished\">{{'course.status.unpublished'|trans}}</span>
  {% elseif course.status =='published' %}
    <span class=\"course-publish-status course-publish-status--published\">{{'course.status.published'|trans }}</span>
  {% endif %}

  <div class=\"courseset-manage-header-info\">
    <div class=\"courseset-manage-header-info__title text-overflow\" {% if course.title|length > 21 %}data-toggle=\"tooltip\" title=\"{{ course.title }}\" data-container=\"body\" {% endif %}>
    {% block coursesetTitle %}
      <span class=\"cd-dark-major\">{{ course.title }}</span>
    {% endblock %}
    </div>
    {% block liveTag %}
      <span class=\"cd-tag cd-tag-orange\">{{ dict('courseType')[course.type] }}</span>
    {% endblock %}
  </div>

  <div class=\"courseset-manage-header-btn\">
    {% block btn %}
      {% if course.status == 'published' %}
        <a class=\"cd-btn cd-btn-primary\" target=\"_blank\" href=\"{{ path('open_course_show',{courseId:course.id}) }}\">{{'my.learning.course.watch'|trans}}</a>
      {% else %}
        <button class=\"cd-btn cd-btn-primary js-course-publish-btn\" data-url=\"{{ path('open_course_manage_publish', {id:course.id}) }}\">{{'course.btn.publish'|trans}}</button>
      {% endif %}
      <a class=\"cd-btn cd-btn-default cd-ml16 hidden-xs\" href=\"{{ path('open_course_show',{courseId:course.id,as:'preview'}) }}\" target=\"_blank\">{{ 'open_course.preview'|trans }}</a>
      <a class=\"cd-btn cd-btn-default cd-ml16 hidden-xs\" href=\"{{ path('open_course_show',{courseId:course.id,as:'preview', previewType: 'wx'}) }}\" target=\"_blank\">{{ 'open_course.preview_in_wechat'|trans }}</a>
    {% endblock %}
  </div>

  <div class=\"courseset-manage-header-data hidden-xs\">
    <span class=\"cd-text-medium\">{{ 'my.teaching.open_course.hit_num'|trans }}</span>
    <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">{{ course.hitNum }}</span>{{ 'site.default.times'|trans }}</div>
  </div>
</div>", "open-course-manage/header.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\open-course-manage\\header.html.twig");
    }
}
