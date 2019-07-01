<?php

/* admin/default/parts/course-review-table.html.twig */
class __TwigTemplate_bdb0294e43618e0ab3c4a49450d308a8ed5dfeb9e21297fe148a5b5630e58808 extends Twig_Template
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
        $__internal_8853a26836acfc7b118ab223847f8ecab2e9950d7a321eaa63893860aa2361bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8853a26836acfc7b118ab223847f8ecab2e9950d7a321eaa63893860aa2361bf->enter($__internal_8853a26836acfc7b118ab223847f8ecab2e9950d7a321eaa63893860aa2361bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/parts/course-review-table.html.twig"));

        // line 1
        echo "<table class=\"table table-condensed table-noborder table-overflow\">
  <thead>
  <tr>
    <th width=\"63%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_review.review_content_th"), "html", null, true);
        echo "</th>
    <th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_review.review_rating_th"), "html", null, true);
        echo "</th>
    <th width=\"22%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_review.operation_th"), "html", null, true);
        echo "</th>
  </tr>
  </thead>
  <tbody>

  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 12
            echo "    ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
            // line 13
            echo "    ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), null)) : (null));
            // line 14
            echo "    <tr>
      <td>
        <a class=\"link-primary\" target=\"_blank\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["review"], "courseId", array()), "tab" => "reviews")), "html", null, true);
            echo "\">  ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 60);
            echo "</a>
      </td>
      <td class=\"pull-right prl\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_review.rating_start"), "html", null, true);
            echo "</td>
      <td>
        <a target=\"_blank\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["review"], "courseId", array()), "tab" => "reviews")), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_review.view_btn"), "html", null, true);
            echo "</a>
      </td>
    </tr>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "    <tr><td><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_review.empty"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </tbody>
</table>

";
        
        $__internal_8853a26836acfc7b118ab223847f8ecab2e9950d7a321eaa63893860aa2361bf->leave($__internal_8853a26836acfc7b118ab223847f8ecab2e9950d7a321eaa63893860aa2361bf_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/parts/course-review-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  82 => 24,  71 => 20,  65 => 18,  58 => 16,  54 => 14,  51 => 13,  48 => 12,  43 => 11,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-condensed table-noborder table-overflow\">
  <thead>
  <tr>
    <th width=\"63%\">{{ 'admin.homepage.latest_review.review_content_th'|trans }}</th>
    <th width=\"15%\">{{ 'admin.homepage.latest_review.review_rating_th'|trans }}</th>
    <th width=\"22%\">{{ 'admin.homepage.latest_review.operation_th'|trans }}</th>
  </tr>
  </thead>
  <tbody>

  {% for review in reviews %}
    {% set author = users[review.userId]|default(null) %}
    {% set course = courses[review.courseId]|default(null) %}
    <tr>
      <td>
        <a class=\"link-primary\" target=\"_blank\" href=\"{{ path('course_show',{id:review.courseId, tab: 'reviews'}) }}\">  {{ review.content|plain_text(60) }}</a>
      </td>
      <td class=\"pull-right prl\">{{ review.rating }}{{'admin.homepage.latest_review.rating_start'|trans}}</td>
      <td>
        <a target=\"_blank\" href=\"{{ path('course_show',{id:review.courseId, tab: 'reviews'}) }}\" class=\"btn btn-default btn-xs\">{{ 'admin.homepage.latest_review.view_btn'|trans }}</a>
      </td>
    </tr>
  {% else %}
    <tr><td><div class=\"empty\">{{'admin.homepage.latest_review.empty'|trans}}</div></td></tr>
  {% endfor %}
  </tbody>
</table>

", "admin/default/parts/course-review-table.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\default\\parts\\course-review-table.html.twig");
    }
}
