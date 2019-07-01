<?php

/* admin/course-set/index.html.twig */
class __TwigTemplate_7136e3d60b21cf2297a6dddc13ac42a8456879ae46873f1f846e99ceeba69e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/course-set/index.html.twig", 1);
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
        $__internal_00cc963a57fc60c233ec7b9cb0eef012e99e4ebaeae8bb82b80d32bc7761fbc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00cc963a57fc60c233ec7b9cb0eef012e99e4ebaeae8bb82b80d32bc7761fbc1->enter($__internal_00cc963a57fc60c233ec7b9cb0eef012e99e4ebaeae8bb82b80d32bc7761fbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/course-set/index.html.twig"));

        // line 3
        $context["menu"] = "admin_course_manage";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00cc963a57fc60c233ec7b9cb0eef012e99e4ebaeae8bb82b80d32bc7761fbc1->leave($__internal_00cc963a57fc60c233ec7b9cb0eef012e99e4ebaeae8bb82b80d32bc7761fbc1_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_2a1899f950702e4d361462e5fd5bdf5b8afb151326b7ba4dc68de07ec4b844f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1899f950702e4d361462e5fd5bdf5b8afb151326b7ba4dc68de07ec4b844f0->enter($__internal_2a1899f950702e4d361462e5fd5bdf5b8afb151326b7ba4dc68de07ec4b844f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "  ";
        $this->loadTemplate("admin/course-set/tab.html.twig", "admin/course-set/index.html.twig", 8)->display($context);
        // line 9
        echo "  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      <div class=\"mbm\">
        ";
        // line 13
        $this->loadTemplate("org/org-tree-select.html.twig", "admin/course-set/index.html.twig", 13)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 14
        echo "
        <div class=\"form-group\">
          <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
            ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.category_placeholder"));
        echo "
          </select>
        </div>
        <div class=\"form-group \">
          <div class=\"controls\">
            <input class=\"form-control\" style=\"width: 200px\" id=\"tag\" type=\"text\" data-tag-value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("tag", $context)) ? (_twig_default_filter((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "")) : (""))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()), "")) : ("")), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_tag_match");
        echo "\">
            <input class=\"form-control hidden\" name=\"tagId\" type=\"text\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()), "")) : ("")), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"status\">
            ";
        // line 28
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.status_placeholder"));
        echo "
          </select>
        </div>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"type\">
            ";
        // line 33
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("nonOpenCourseCateogry"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "type"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("type"));
        echo "
          </select>
        </div>

        <div class=\"form-group\">
          <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.title_placeholder"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
        </div>
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.creator_placeholer"), "html", null, true);
        echo "\" name=\"creatorName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "creatorName"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>

      ";
        // line 46
        $this->loadTemplate("admin/widget/tooltip-widget.html.twig", "admin/course-set/index.html.twig", 46)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.course_tips"), "placement" => "left")));
        // line 47
        echo "    </form>
  </div>
  
  <p class=\"text-muted\">
    <span class=\"mrl\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.count", array("%courseNum%" => $this->getAttribute((isset($context["courseSetStatusNum"]) ? $context["courseSetStatusNum"] : $this->getContext($context, "courseSetStatusNum")), "total", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.published_count", array("%publishedNum%" => $this->getAttribute((isset($context["courseSetStatusNum"]) ? $context["courseSetStatusNum"] : $this->getContext($context, "courseSetStatusNum")), "published", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.closed_count", array("%closedNum%" => $this->getAttribute((isset($context["courseSetStatusNum"]) ? $context["courseSetStatusNum"] : $this->getContext($context, "courseSetStatusNum")), "closed", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.unpublish_count", array("%unPublishedNum%" => $this->getAttribute((isset($context["courseSetStatusNum"]) ? $context["courseSetStatusNum"] : $this->getContext($context, "courseSetStatusNum")), "draft", array())));
        echo "</span>
  </p>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      ";
        // line 60
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 61
            echo "        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      ";
        }
        // line 63
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_set_manage.manage.number"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.name"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.price"), "html", null, true);
        echo "</th>
      ";
        // line 66
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal")) {
            // line 67
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.course_num"), "html", null, true);
            echo "</th>
      ";
        }
        // line 69
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.tags"), "html", null, true);
        echo "</th>
      ";
        // line 70
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/course-set/index.html.twig", 70)->display($context);
        // line 71
        echo "      
      ";
        // line 72
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
            // line 73
            echo "        <th width=\"15%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.classroom_course_location", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</th>
      ";
        } else {
            // line 75
            echo "        <th>
          ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.student_number"), "html", null, true);
            echo "
        </th>
      ";
        }
        // line 79
        echo "
      ";
        // line 80
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "course")) {
            // line 81
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.income_RMB"), "html", null, true);
            echo "</th>
      ";
        }
        // line 83
        echo "
      ";
        // line 84
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "vip")) {
            // line 85
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_grade"), "html", null, true);
            echo "</th>
      ";
        }
        // line 87
        echo "
      
      <th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.creator"), "html", null, true);
        echo "</th>
      <th>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.status"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.operater"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseSets"]) ? $context["courseSets"] : $this->getContext($context, "courseSets")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 96
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array"), null)) : (null));
            // line 97
            echo "      ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["courseSet"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["courseSet"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 98
            echo "      ";
            $this->loadTemplate("admin/course-set/tr.html.twig", "admin/course-set/index.html.twig", 98)->display($context);
            // line 99
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 100
            echo "      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.empty"), "html", null, true);
            echo "</div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "    </tbody>
  </table>
  ";
        // line 108
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/course-set/index.html.twig", 108)->display(array_merge($context, array("module" => "courseSet", "formId" => "course-table")));
        // line 109
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_2a1899f950702e4d361462e5fd5bdf5b8afb151326b7ba4dc68de07ec4b844f0->leave($__internal_2a1899f950702e4d361462e5fd5bdf5b8afb151326b7ba4dc68de07ec4b844f0_prof);

    }

    public function getTemplateName()
    {
        return "admin/course-set/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 109,  304 => 108,  300 => 106,  290 => 102,  286 => 100,  273 => 99,  270 => 98,  267 => 97,  264 => 96,  246 => 95,  239 => 91,  235 => 90,  231 => 89,  227 => 87,  221 => 85,  219 => 84,  216 => 83,  210 => 81,  208 => 80,  205 => 79,  199 => 76,  196 => 75,  190 => 73,  188 => 72,  185 => 71,  183 => 70,  178 => 69,  172 => 67,  170 => 66,  166 => 65,  162 => 64,  157 => 63,  153 => 61,  151 => 60,  142 => 54,  138 => 53,  134 => 52,  130 => 51,  124 => 47,  122 => 46,  117 => 44,  110 => 42,  101 => 38,  93 => 33,  85 => 28,  77 => 23,  69 => 22,  61 => 17,  56 => 14,  54 => 13,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_course_manage' %}

{% set script_controller = 'course/manage' %}

{% block main %}
  {% include 'admin/course-set/tab.html.twig' %}
  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      <div class=\"mbm\">
        {% include 'org/org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}

        <div class=\"form-group\">
          <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
            {{ select_options(category_choices('course'), app.request.query.get('categoryId'), 'admin.course_manage.category_placeholder'|trans) }}
          </select>
        </div>
        <div class=\"form-group \">
          <div class=\"controls\">
            <input class=\"form-control\" style=\"width: 200px\" id=\"tag\" type=\"text\" data-tag-value=\"{{ tag|default('')|json_encode }}\" value=\"{{ tag.name|default('') }}\" data-url=\"{{ path('admin_course_tag_match') }}\">
            <input class=\"form-control hidden\" name=\"tagId\" type=\"text\" value=\"{{ tag.id|default('') }}\">
          </div>
        </div>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"status\">
            {{ select_options(dict('courseStatus'), app.request.query.get('status'), 'admin.course_manage.manage.status_placeholder'|trans) }}
          </select>
        </div>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"type\">
            {{ select_options(dict('nonOpenCourseCateogry'), app.request.query.get('type'), 'type'|trans) }}
          </select>
        </div>

        <div class=\"form-group\">
          <input class=\"form-control\" type=\"text\" placeholder=\"{{ 'admin.course_manage.title_placeholder'|trans }}\" name=\"title\" value=\"{{ app.request.get('title') }}\">
        </div>
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"{{ 'admin.course_manage.creator_placeholer'|trans }}\" name=\"creatorName\" value=\"{{ app.request.get('creatorName') }}\">
      </div>
      <button class=\"btn btn-primary\">{{ 'form.btn.search'|trans }}</button>

      {% include 'admin/widget/tooltip-widget.html.twig' with { icon: 'glyphicon-question-sign', content: 'admin.course_manage.manage.course_tips'|trans|raw, placement: 'left'} %}
    </form>
  </div>
  
  <p class=\"text-muted\">
    <span class=\"mrl\">{{ 'admin.course_manage.manage.count'|trans({'%courseNum%':courseSetStatusNum.total})|raw }}</span>
    <span class=\"mrl\">{{ 'admin.course_manage.manage.published_count'|trans({'%publishedNum%':courseSetStatusNum.published})|raw }}</span>
    <span class=\"mrl\">{{ 'admin.course_manage.manage.closed_count'|trans({'%closedNum%':courseSetStatusNum.closed})|raw }}</span>
    <span class=\"mrl\">{{ 'admin.course_manage.manage.unpublish_count'|trans({'%unPublishedNum%':courseSetStatusNum.draft})|raw }}</span>
  </p>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      {% if setting('magic.enable_org','0') %}
        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      {% endif %}
      <th>{{ 'admin.course_set_manage.manage.number'|trans }}</th>
      <th width=\"20%\">{{ 'admin.course_manage.manage.name'|trans }}</th>
      <th width=\"10%\">{{ 'admin.course_manage.manage.price'|trans }}</th>
      {% if filter == 'normal' %}
        <th>{{ 'admin.course_manage.manage.course_num'|trans }}</th>
      {% endif %}
      <th>{{ 'admin.course_manage.manage.tags'|trans }}</th>
      {% include 'org/parts/table-thead-tr.html.twig' %}
      
      {% if filter == 'classroom' %}
        <th width=\"15%\">{{ 'admin.course_manage.manage.classroom_course_location'|trans({'%classroom%':setting(\"classroom.name\")|default('classroom'|trans)}) }}</th>
      {% else %}
        <th>
          {{ 'admin.course_manage.manage.student_number'|trans }}
        </th>
      {% endif %}

      {% if filter == 'course' %}
        <th>{{ 'admin.course_manage.manage.income_RMB'|trans }}</th>
      {% endif %}

      {% if filter == 'vip' %}
        <th>{{ 'admin.course_manage.manage.vip_grade'|trans }}</th>
      {% endif %}

      
      <th>{{ 'admin.course_manage.manage.creator'|trans }}</th>
      <th>{{ 'admin.course_manage.manage.status'|trans }}</th>
      <th width=\"10%\">{{'admin.course_manage.operater'|trans}}</th>
    </tr>
    </thead>
    <tbody>
    {% for courseSet in courseSets %}
      {% set user = users[courseSet.creator]|default(null) %}
      {% set category = categories[courseSet.categoryId]|default(null) %}
      {% include 'admin/course-set/tr.html.twig' %}
    {% else %}
      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">{{'admin.course_manage.manage.empty'|trans}}</div>
        </td>
      </tr>
    {% endfor %}
    </tbody>
  </table>
  {% include 'org/batch-update-org-btn.html.twig' with {module:'courseSet', formId:'course-table'} %}
  {{ admin_macro.paginator(paginator) }}

{% endblock %}", "admin/course-set/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\course-set\\index.html.twig");
    }
}
