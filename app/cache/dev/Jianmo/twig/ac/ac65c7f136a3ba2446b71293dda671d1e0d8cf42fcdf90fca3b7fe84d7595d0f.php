<?php

/* admin/open-course/recommend-list.html.twig */
class __TwigTemplate_4cb4cf2f57244ff411ed52c84deeeb3aaa1419ea176f12233e874ce868dcdbbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/open-course/recommend-list.html.twig", 1);
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
        $__internal_3c76c1688b57df7184bedc532dbfe7ded123e65542029ad6a91b739ff413f558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c76c1688b57df7184bedc532dbfe7ded123e65542029ad6a91b739ff413f558->enter($__internal_3c76c1688b57df7184bedc532dbfe7ded123e65542029ad6a91b739ff413f558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/open-course/recommend-list.html.twig"));

        // line 3
        $context["script_controller"] = "course/recommend-list";
        // line 5
        $context["menu"] = "admin_open_course_recommend_list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c76c1688b57df7184bedc532dbfe7ded123e65542029ad6a91b739ff413f558->leave($__internal_3c76c1688b57df7184bedc532dbfe7ded123e65542029ad6a91b739ff413f558_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_f3b0c7fc8644c6c7ff22e750f2782ccba48dce0d95ab6a70378a9a83d37c1266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b0c7fc8644c6c7ff22e750f2782ccba48dce0d95ab6a70378a9a83d37c1266->enter($__internal_f3b0c7fc8644c6c7ff22e750f2782ccba48dce0d95ab6a70378a9a83d37c1266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "  
  ";
        // line 9
        $this->loadTemplate("admin/open-course/course-search-form.html.twig", "admin/open-course/recommend-list.html.twig", 9)->display(array_merge($context, array("actionUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_course_recommend_list"))));
        // line 10
        echo "  
  <table class=\"table table-striped table-hover mtl\" id=\"course-recommend-table\">
    <thead>
    <tr>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.recommend.seq_th"), "html", null, true);
        echo "</th>
      <th width=\"50%\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.recommend.name_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.recommend.creator_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.recommend.time_th"), "html", null, true);
        echo "</th>
      <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.recommend.operater_th"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 23
            echo "        ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 24
            echo "        ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 25
            echo "          ";
            $this->loadTemplate("admin/course/course-recommend-tr.html.twig", "admin/open-course/recommend-list.html.twig", 25)->display($context);
            // line 26
            echo "      ";
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
            // line 27
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.open_manage.recommend.empty"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
  </table>

  ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_f3b0c7fc8644c6c7ff22e750f2782ccba48dce0d95ab6a70378a9a83d37c1266->leave($__internal_f3b0c7fc8644c6c7ff22e750f2782ccba48dce0d95ab6a70378a9a83d37c1266_prof);

    }

    public function getTemplateName()
    {
        return "admin/open-course/recommend-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  128 => 29,  119 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  79 => 22,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  50 => 10,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set script_controller = 'course/recommend-list' %}

{% set menu = 'admin_open_course_recommend_list' %}

{% block main %}
  
  {% include 'admin/open-course/course-search-form.html.twig' with {actionUrl:path('admin_open_course_recommend_list')} %}
  
  <table class=\"table table-striped table-hover mtl\" id=\"course-recommend-table\">
    <thead>
    <tr>
      <th>{{ 'admin.open_manage.recommend.seq_th'|trans }}</th>
      <th width=\"50%\">{{ 'admin.open_manage.recommend.name_th'|trans }}</th>
      <th>{{ 'admin.open_manage.recommend.creator_th'|trans }}</th>
      <th>{{ 'admin.open_manage.recommend.time_th'|trans }}</th>
      <th>{{ 'admin.open_manage.recommend.operater_th'|trans }}</th>
    </tr>
    </thead>
    <tbody>
      {% for course in courses %}
        {% set user = users[course.userId]|default(null) %}
        {% set category = categories[course.categoryId]|default(null) %}
          {% include 'admin/course/course-recommend-tr.html.twig' %}
      {% else %}
        <tr><td colspan=\"20\"><div class=\"empty\">{{ 'admin.open_manage.recommend.empty'|trans }}</div></td></tr>
      {% endfor %}
    </tbody>
  </table>

  {{ admin_macro.paginator(paginator) }}

{% endblock %}", "admin/open-course/recommend-list.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\open-course\\recommend-list.html.twig");
    }
}
