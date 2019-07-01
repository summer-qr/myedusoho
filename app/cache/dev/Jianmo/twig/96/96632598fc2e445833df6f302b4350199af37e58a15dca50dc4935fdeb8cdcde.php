<?php

/* my/learning/course/nav-pill.html.twig */
class __TwigTemplate_76821f38a61d36f2179de24d1dd418af2f2649ef5589cea801c7be09df5243ab extends Twig_Template
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
        $__internal_13b2a51d7213e95e60c55ab27dce0d42ae681e8ebc2a8b704fe79e269bb42162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b2a51d7213e95e60c55ab27dce0d42ae681e8ebc2a8b704fe79e269bb42162->enter($__internal_13b2a51d7213e95e60c55ab27dce0d42ae681e8ebc2a8b704fe79e269bb42162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "my/learning/course/nav-pill.html.twig"));

        // line 1
        echo "<ul class=\"cd-tabs\">
\t<li";
        // line 2
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "learning")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.learning"), "html", null, true);
        echo "</a></li>
\t<li";
        // line 3
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "learned")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learned");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.learned"), "html", null, true);
        echo "</a></li>
\t<li";
        // line 4
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "favorited")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_sets_favorite");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.favorite"), "html", null, true);
        echo "</a></li>
</ul>";
        
        $__internal_13b2a51d7213e95e60c55ab27dce0d42ae681e8ebc2a8b704fe79e269bb42162->leave($__internal_13b2a51d7213e95e60c55ab27dce0d42ae681e8ebc2a8b704fe79e269bb42162_prof);

    }

    public function getTemplateName()
    {
        return "my/learning/course/nav-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  35 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"cd-tabs\">
\t<li{% if tab_nav == 'learning' %} class=\"active\"{% endif %}><a href=\"{{ path('my_courses_learning') }}\">{{'my.learning.course.learning'|trans}}</a></li>
\t<li{% if tab_nav == 'learned' %} class=\"active\"{% endif %}><a href=\"{{ path('my_courses_learned') }}\">{{'my.learning.course.learned'|trans}}</a></li>
\t<li{% if tab_nav == 'favorited' %} class=\"active\"{% endif %}><a href=\"{{ path('my_course_sets_favorite') }}\">{{'my.learning.course.favorite'|trans}}</a></li>
</ul>", "my/learning/course/nav-pill.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\my\\learning\\course\\nav-pill.html.twig");
    }
}
