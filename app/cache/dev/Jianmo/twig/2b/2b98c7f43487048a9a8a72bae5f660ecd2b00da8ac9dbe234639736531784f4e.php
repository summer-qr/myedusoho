<?php

/* open-course-manage/open/create-show.html.twig */
class __TwigTemplate_458aaaa3c9d37371dee557d0fcbfd9015635a8bed1bca4130dbb951244ca9a59 extends Twig_Template
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
        $__internal_ab0769dcd6f841f546850afe49cd36998702b9b54a62ce6ccc6326188b1dbf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0769dcd6f841f546850afe49cd36998702b9b54a62ce6ccc6326188b1dbf48->enter($__internal_ab0769dcd6f841f546850afe49cd36998702b9b54a62ce6ccc6326188b1dbf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "open-course-manage/open/create-show.html.twig"));

        // line 1
        echo "<div class=\"course-select js-courseSetType\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\">
  <i class=\"es-icon es-icon-lubogongkaike\"></i>
  <div class=\"course-type\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.record_open_course"), "html", null, true);
        echo "</div>
  <div class=\"course-intro\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.record_open_course.tips"), "html", null, true);
        echo "</div>
</div>";
        
        $__internal_ab0769dcd6f841f546850afe49cd36998702b9b54a62ce6ccc6326188b1dbf48->leave($__internal_ab0769dcd6f841f546850afe49cd36998702b9b54a62ce6ccc6326188b1dbf48_prof);

    }

    public function getTemplateName()
    {
        return "open-course-manage/open/create-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"course-select js-courseSetType\" data-type=\"{{ type }}\">
  <i class=\"es-icon es-icon-lubogongkaike\"></i>
  <div class=\"course-type\">{{ 'my.teaching.course_set.select_type.record_open_course'|trans }}</div>
  <div class=\"course-intro\">{{ 'my.teaching.course_set.select_type.record_open_course.tips'|trans }}</div>
</div>", "open-course-manage/open/create-show.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\open-course-manage\\open\\create-show.html.twig");
    }
}
