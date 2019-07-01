<?php

/* common/share-dropdown.html.twig */
class __TwigTemplate_0c9d9df5767b93f24720923ab258ec9ba9355dfaff6ec89e8487cafc96894a28 extends Twig_Template
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
        $__internal_59eb5080573ce882c3ac56a3008a8e46d717d30ed9085eef5aa3976d8115fbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59eb5080573ce882c3ac56a3008a8e46d717d30ed9085eef5aa3976d8115fbe4->enter($__internal_59eb5080573ce882c3ac56a3008a8e46d717d30ed9085eef5aa3976d8115fbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "common/share-dropdown.html.twig"));

        // line 1
        if ((((array_key_exists("useSeajs", $context)) ? (_twig_default_filter((isset($context["useSeajs"]) ? $context["useSeajs"] : $this->getContext($context, "useSeajs")), false)) : (false)) == true)) {
            // line 2
            echo "  ";
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("common/share-dropdown.js");
            // line 3
            echo "  ";
            $this->loadTemplate("seajs_loader_compatible.html.twig", "common/share-dropdown.html.twig", 3)->display(array_merge($context, array("topxiawebbundle" => true)));
        } else {
            // line 5
            echo "  ";
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/share/index.js"));
        }
        // line 7
        echo "
";
        // line 8
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "courseSet")) {
            // line 9
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array());
            // line 10
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "summary", array()), 50);
            // line 11
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.courseShareContent"), array("{{" => "《%", "}}" => "%》")), "share.course_set_message"), array("%course%" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array())));
            // line 12
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("course_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array())));
            // line 13
            echo "  ";
            $context["picture"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl((($this->getAttribute($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "cover", array(), "any", false, true), "large", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "cover", array(), "any", false, true), "large", array()), null)) : (null)), "course.png");
            // line 14
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array());
        } elseif ((        // line 15
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "classroom")) {
            // line 16
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array());
            // line 17
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "description", array()), 50);
            // line 18
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.classroomShareContent"), array("{{" => "「%", "}}" => "%」")), "share.classroom_message"), array("%classroom%" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array())));
            // line 19
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array())));
            // line 20
            echo "  ";
            $context["picture"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "largePicture", array()), "classroom.png");
            // line 21
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array());
        } elseif ((        // line 22
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "article")) {
            // line 23
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array());
            // line 24
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "body", array()), 50);
            // line 25
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.articleShareContent"), array("{{" => "「%", "}}" => "%」")), "share.article_message"), array("%articletitle%" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "%sitename%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name")));
            // line 26
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array())));
            // line 27
            echo "  ";
            $context["picture"] = "";
            // line 28
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array());
        } elseif ((        // line 29
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "group_thread")) {
            // line 30
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "title", array());
            // line 31
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "content", array()), 50);
            // line 32
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.groupShareContent"), array("{{" => "「%", "}}" => "%」")), "share.group_thread_message"), array("%groupname%" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title", array()), "%threadname%" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "title", array())));
            // line 33
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("group_thread_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array())));
            // line 34
            echo "  ";
            $context["picture"] = "";
            // line 35
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array());
        } elseif ((        // line 36
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "open_course")) {
            // line 37
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array());
            // line 38
            echo "  ";
            $context["summary"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "summary", array()), "")) : ("")), 50);
            // line 39
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.courseShareContent"), array("{{" => "《%", "}}" => "%》")), "share.open_course_message"), array("%course%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array())));
            // line 40
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())));
            // line 41
            echo "  ";
            $context["picture"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "largePicture", array()), "course.png");
            // line 42
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array());
        } elseif ((        // line 43
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "task")) {
            // line 44
            echo "  ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("course_task_show", array("courseId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "courseId", array()), "id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array())));
            // line 45
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "title", array());
            // line 46
            echo "  ";
            $context["summary"] = "";
            // line 47
            echo "  ";
            $context["message"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(_twig_default_filter(twig_replace_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("default.courseShareContent"), array("{{" => "《%", "}}" => "%》")), "share.task_message"), array("%course%" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "title", array())));
            // line 48
            echo "  ";
            $context["picture"] = "";
            // line 49
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array());
        }
        // line 51
        echo "
<div class=\"dropdown-menu ";
        // line 52
        if (((array_key_exists("right", $context)) ? (_twig_default_filter((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), false)) : (false))) {
            echo "pull-right";
        }
        echo " js-social-share-params\" data-title=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\" data-summary=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("summary", $context)) ? (_twig_default_filter((isset($context["summary"]) ? $context["summary"] : $this->getContext($context, "summary")), "")) : ("")), "html", null, true);
        echo "\" data-message=\"";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" data-picture=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("picture", $context)) ? (_twig_default_filter((isset($context["picture"]) ? $context["picture"] : $this->getContext($context, "picture")), "")) : ("")), "html", null, true);
        echo "\">
  ";
        // line 53
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Point")) {
            // line 54
            echo "   ";
            // line 55
            echo "  ";
        }
        // line 56
        echo "
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"weixin\" title=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share.weixin_share"), "html", null, true);
        echo "\" data-share=\"weixin\" data-qrcode-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("common_qrcode", array("text" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "html", null, true);
        echo "\"><i class=\"es-icon es-icon-weixin\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"tsina\" title=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share.tsina_share"), "html", null, true);
        echo "\" data-share=\"weibo\"><i class=\"es-icon es-icon-weibo\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qq\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share.qq_share"), "html", null, true);
        echo "\" data-share=\"qq\"><i class=\"es-icon es-icon-qq\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qzone\" title=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share.qzone_share"), "html", null, true);
        echo "\" data-share=\"qzone\"><i class=\"es-icon es-icon-qzone\"></i></a>

</div>
";
        
        $__internal_59eb5080573ce882c3ac56a3008a8e46d717d30ed9085eef5aa3976d8115fbe4->leave($__internal_59eb5080573ce882c3ac56a3008a8e46d717d30ed9085eef5aa3976d8115fbe4_prof);

    }

    public function getTemplateName()
    {
        return "common/share-dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 60,  198 => 59,  194 => 58,  188 => 57,  185 => 56,  182 => 55,  180 => 54,  178 => 53,  162 => 52,  159 => 51,  155 => 49,  152 => 48,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  138 => 43,  135 => 42,  132 => 41,  129 => 40,  126 => 39,  123 => 38,  120 => 37,  118 => 36,  115 => 35,  112 => 34,  109 => 33,  106 => 32,  103 => 31,  100 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  80 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  38 => 8,  35 => 7,  31 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if useSeajs|default(false) == true %}
  {% do load_script('common/share-dropdown.js') %}
  {% include 'seajs_loader_compatible.html.twig' with {topxiawebbundle: true} %}
{% else %}
  {% do script(['app/js/share/index.js']) %}
{% endif %}

{% if type == 'courseSet' %}
  {% set title = courseSet.title %}
  {% set summary = courseSet.summary|plain_text(50) %}
  {% set message = setting('default.courseShareContent')|replace({'{{':'《%','}}':'%》'})|default('share.course_set_message')|trans({'%course%':courseSet.title}) %}
  {% set url = url('course_show', {id:courseSet.defaultCourseId}) %}
  {% set picture = fileurl(courseSet.cover.large|default(null), 'course.png') %}
  {% set id = courseSet.id%}
{% elseif type == 'classroom' %}
  {% set title = classroom.title %}
  {% set summary = classroom.description|plain_text(50) %}
  {% set message = setting('default.classroomShareContent')|replace({'{{':'「%','}}':'%」'})|default('share.classroom_message')|trans({'%classroom%':classroom.title}) %}
  {% set url = url('classroom_show', {id:classroom.id}) %}
  {% set picture = fileurl(classroom.largePicture, 'classroom.png') %}
  {% set id = classroom.id%}
{% elseif type ==  'article' %}
  {% set title = article.title %}
  {% set summary = article.body|plain_text(50) %}
  {% set message = setting('default.articleShareContent')|replace({'{{':'「%','}}':'%」'})|default('share.article_message')|trans({'%articletitle%':article.title,'%sitename%':setting('site.name')}) %}
  {% set url = url('article_detail', {id:article.id}) %}
  {% set picture = '' %}
  {% set id = article.id%}
{% elseif type == 'group_thread' %}
  {% set title = thread.title %}
  {% set summary = thread.content|plain_text(50) %}
  {% set message = setting('default.groupShareContent')|replace({'{{':'「%','}}':'%」'})|default('share.group_thread_message')|trans({'%groupname%':group.title,'%threadname%':thread.title}) %}
  {% set url = url('group_thread_show', {id:group.id, threadId:thread.id}) %}
  {% set picture = '' %}
  {% set id = group.id%}
{% elseif type == 'open_course' %}
  {% set title = course.title %}
  {% set summary = course.summary|default('')|plain_text(50) %}
  {% set message = setting('default.courseShareContent')|replace({'{{':'《%','}}':'%》'})|default('share.open_course_message')|trans({'%course%':course.title}) %}
  {% set url = url('open_course_show', {courseId:course.id}) %}
  {% set picture = fileurl(course.largePicture, 'course.png') %}
  {% set id = course.id%}
{% elseif type == 'task' %}
  {% set url = url('course_task_show', {courseId: task.courseId, id: task.id}) %}
  {% set title = task.title %}
  {% set summary = '' %}
  {% set message = setting('default.courseShareContent')|replace({'{{':'《%','}}':'%》'})|default('share.task_message')|trans({'%course%': task.title}) %}
  {% set picture = '' %}
  {% set id = task.id%}
{% endif %}

<div class=\"dropdown-menu {% if right|default(false) %}pull-right{% endif %} js-social-share-params\" data-title=\"{{ title }}\" data-summary=\"{{ summary|default('') }}\" data-message=\"{{ message }}\" data-url=\"{{ url }}\" data-picture=\"{{ picture|default('') }}\">
  {% if is_plugin_installed('Point') %}
   {#  <input type=\"hidden\" class=\"point-share-url\" value=\"{{ path('share_point',{ id:id, title:title, type:type}) }}\"> #}
  {% endif %}

  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"weixin\" title=\"{{'share.weixin_share'|trans}}\" data-share=\"weixin\" data-qrcode-url=\"{{ path('common_qrcode',{text:url}) }}\"><i class=\"es-icon es-icon-weixin\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"tsina\" title=\"{{'share.tsina_share'|trans}}\" data-share=\"weibo\"><i class=\"es-icon es-icon-weibo\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qq\" title=\"{{'share.qq_share'|trans}}\" data-share=\"qq\"><i class=\"es-icon es-icon-qq\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qzone\" title=\"{{'share.qzone_share'|trans}}\" data-share=\"qzone\"><i class=\"es-icon es-icon-qzone\"></i></a>

</div>
", "common/share-dropdown.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\common\\share-dropdown.html.twig");
    }
}
