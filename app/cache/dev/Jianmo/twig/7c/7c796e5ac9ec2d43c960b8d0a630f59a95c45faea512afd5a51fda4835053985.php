<?php

/* courseset-manage/create.html.twig */
class __TwigTemplate_96bd8324c763b14c052d8e508003046c1ad43ead852bb282de9591b63d27c3c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "courseset-manage/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d04e510c3f63b35e3777d29d7f20b8603a6d288369c8b3f4724a94db28eb9375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04e510c3f63b35e3777d29d7f20b8603a6d288369c8b3f4724a94db28eb9375->enter($__internal_d04e510c3f63b35e3777d29d7f20b8603a6d288369c8b3f4724a94db28eb9375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/create.html.twig"));

        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/courseset/create/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d04e510c3f63b35e3777d29d7f20b8603a6d288369c8b3f4724a94db28eb9375->leave($__internal_d04e510c3f63b35e3777d29d7f20b8603a6d288369c8b3f4724a94db28eb9375_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_221da312437677686c85422fa1ed9d004cc95fa5249b85b7505c40a1b6a80d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221da312437677686c85422fa1ed9d004cc95fa5249b85b7505c40a1b6a80d1f->enter($__internal_221da312437677686c85422fa1ed9d004cc95fa5249b85b7505c40a1b6a80d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create_btn"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_221da312437677686c85422fa1ed9d004cc95fa5249b85b7505c40a1b6a80d1f->leave($__internal_221da312437677686c85422fa1ed9d004cc95fa5249b85b7505c40a1b6a80d1f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_7afd428ee82535b47eabca070bd15bc2a32bd81483314890ea45f1184c1e544d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afd428ee82535b47eabca070bd15bc2a32bd81483314890ea45f1184c1e544d->enter($__internal_7afd428ee82535b47eabca070bd15bc2a32bd81483314890ea45f1184c1e544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "  <div class=\"row\">
    <div class=\"panel panel-default panel-page panel-create-course\">
      <div class=\"panel-heading\">
        <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create_btn"), "html", null, true);
        echo "</h2>
      </div>
      ";
        // line 13
        if ((( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "largeAvatar", array()) ||  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "title", array())) ||  !$this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : $this->getContext($context, "userProfile")), "about", array()))) {
            // line 14
            echo "        ";
            $this->loadTemplate("settings/user-profile.html.twig", "courseset-manage/create.html.twig", 14)->display($context);
            // line 15
            echo "      ";
        } else {
            // line 16
            echo "        <form id=\"courseset-create-form\" class=\"form-horizontal\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
            echo "\"
              method=\"post\">
          ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "
          <div class=\"course-piece\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type"), "html", null, true);
            echo "</div>
          <div class=\"form-group cd-row mb0\">
            ";
            // line 21
            $context["typeCount"] = twig_length_filter($this->env, (isset($context["courseTypes"]) ? $context["courseTypes"] : $this->getContext($context, "courseTypes")));
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courseTypes"]) ? $context["courseTypes"] : $this->getContext($context, "courseTypes")));
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
            foreach ($context['_seq'] as $context["key"] => $context["type"]) {
                // line 23
                echo "              <div class=\"";
                if (((isset($context["typeCount"]) ? $context["typeCount"] : $this->getContext($context, "typeCount")) <= 4)) {
                    echo "col-md-3 ";
                } else {
                    echo "col-md-2 course-five-types ";
                }
                echo "\">
                ";
                // line 24
                $this->loadTemplate($this->getAttribute($context["type"], "template", array()), "courseset-manage/create.html.twig", 24)->display(array_merge($context, array("type" => $context["key"])));
                // line 25
                echo "              </div>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "          </div>
          
            ";
            // line 29
            $this->loadTemplate("org/course-create-org-tree-select.html.twig", "courseset-manage/create.html.twig", 29)->display($context);
            // line 30
            echo "            <div class=\"course-title form-group\">
              <div class=\"mlm pull-left controls-label text-lg\">
                <div class=\"course-piece title\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.course_title"), "html", null, true);
            echo "</div>
              </div>
              <div class=\"col-md-10 controls course-title-input\">
                <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\"
                       data-widget-cid=\"widget-1\" data-explain=\"\">
              </div>
            </div>
            <div class=\"text-center\">
              ";
            // line 40
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
                // line 41
                echo "                <span class=\"mrm\">
              <a href=\"http://www.qiqiuyu.com/course/22\" class=\"color-gray\" target=\"_blank\">";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.how_do_create"), "html", null, true);
                echo "</a>
            </span>
              ";
            }
            // line 45
            echo "              <button id=\"courseset-create-btn\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create.submiting"), "html", null, true);
            echo "\"
                     class=\"cd-btn cd-btn-primary\" type=\"submit\">";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create"), "html", null, true);
            echo "</button>
              <a class=\"btn btn-fat btn-link link-gray course-cancel-btn\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "Referer"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
            echo "</a>
            </div>
            <input type=\"hidden\" name=\"type\" value=\"normal\"/>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\"></div>
        </div>
      </form>
      ";
        }
        // line 54
        echo "    </div>
  </div>
";
        
        $__internal_7afd428ee82535b47eabca070bd15bc2a32bd81483314890ea45f1184c1e544d->leave($__internal_7afd428ee82535b47eabca070bd15bc2a32bd81483314890ea45f1184c1e544d_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 54,  186 => 50,  178 => 47,  174 => 46,  169 => 45,  163 => 42,  160 => 41,  158 => 40,  147 => 32,  143 => 30,  141 => 29,  137 => 27,  122 => 25,  120 => 24,  111 => 23,  93 => 22,  91 => 21,  86 => 19,  82 => 18,  76 => 16,  73 => 15,  70 => 14,  68 => 13,  63 => 11,  58 => 8,  52 => 7,  38 => 3,  31 => 1,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}{{ 'my.teaching.course_set.create_btn'|trans }} - {{ parent() }}{% endblock %}

{% do script(['libs/jquery-validation.js','app/js/courseset/create/index.js']) %}

{% block content %}
  <div class=\"row\">
    <div class=\"panel panel-default panel-page panel-create-course\">
      <div class=\"panel-heading\">
        <h2>{{ 'my.teaching.course_set.create_btn'|trans }}</h2>
      </div>
      {% if not app.user.largeAvatar or not app.user.title or not userProfile.about %}
        {% include 'settings/user-profile.html.twig' %}
      {% else %}
        <form id=\"courseset-create-form\" class=\"form-horizontal\" action=\"{{ path('course_set_manage_create') }}\"
              method=\"post\">
          {{ web_macro.flash_messages() }}
          <div class=\"course-piece\">{{ 'my.teaching.course_set.select_type'|trans }}</div>
          <div class=\"form-group cd-row mb0\">
            {% set typeCount = courseTypes|length %}
            {% for key,type in courseTypes %}
              <div class=\"{% if typeCount <= 4 %}col-md-3 {% else %}col-md-2 course-five-types {% endif %}\">
                {% include type.template with {type: key} %}
              </div>
            {% endfor %}
          </div>
          
            {% include 'org/course-create-org-tree-select.html.twig' %}
            <div class=\"course-title form-group\">
              <div class=\"mlm pull-left controls-label text-lg\">
                <div class=\"course-piece title\">{{ 'my.teaching.course_set.select_type.course_title'|trans }}</div>
              </div>
              <div class=\"col-md-10 controls course-title-input\">
                <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\"
                       data-widget-cid=\"widget-1\" data-explain=\"\">
              </div>
            </div>
            <div class=\"text-center\">
              {% if not setting('copyright.owned') %}
                <span class=\"mrm\">
              <a href=\"http://www.qiqiuyu.com/course/22\" class=\"color-gray\" target=\"_blank\">{{ 'my.teaching.course_set.select_type.how_do_create'|trans }}</a>
            </span>
              {% endif %}
              <button id=\"courseset-create-btn\" data-loading-text=\"{{ 'form.btn.create.submiting'|trans }}\"
                     class=\"cd-btn cd-btn-primary\" type=\"submit\">{{ 'form.btn.create'|trans }}</button>
              <a class=\"btn btn-fat btn-link link-gray course-cancel-btn\" href=\"{{ app.request.headers.get('Referer') }}\">{{ 'form.btn.cancel'|trans }}</a>
            </div>
            <input type=\"hidden\" name=\"type\" value=\"normal\"/>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\"></div>
        </div>
      </form>
      {% endif %}
    </div>
  </div>
{% endblock %}
", "courseset-manage/create.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\create.html.twig");
    }
}
