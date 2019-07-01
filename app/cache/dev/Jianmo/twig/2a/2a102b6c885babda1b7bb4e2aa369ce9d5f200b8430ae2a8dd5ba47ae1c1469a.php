<?php

/* courseset-manage/normal/create-show.html.twig */
class __TwigTemplate_4a412c0cfff270752afba073752d2c4cca5a4abad31ddac31380baa78d206729 extends Twig_Template
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
        $__internal_788cb010a23a31e44be7d44293993ebccedf9499621d227e27620a0bf95c75f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788cb010a23a31e44be7d44293993ebccedf9499621d227e27620a0bf95c75f5->enter($__internal_788cb010a23a31e44be7d44293993ebccedf9499621d227e27620a0bf95c75f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/normal/create-show.html.twig"));

        // line 1
        echo "<div class=\"course-select js-courseSetType active\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\">
  <i class=\"es-icon es-icon-putongkecheng \"></i>
  <div class=\"course-type\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.course"), "html", null, true);
        echo "</div>
  <div class=\"course-intro\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.course.tips"), "html", null, true);
        echo "</div>
</div>";
        
        $__internal_788cb010a23a31e44be7d44293993ebccedf9499621d227e27620a0bf95c75f5->leave($__internal_788cb010a23a31e44be7d44293993ebccedf9499621d227e27620a0bf95c75f5_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/normal/create-show.html.twig";
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
        return new Twig_Source("<div class=\"course-select js-courseSetType active\" data-type=\"{{ type }}\">
  <i class=\"es-icon es-icon-putongkecheng \"></i>
  <div class=\"course-type\">{{ 'my.teaching.course_set.select_type.course'|trans }}</div>
  <div class=\"course-intro\">{{ 'my.teaching.course_set.select_type.course.tips'|trans }}</div>
</div>", "courseset-manage/normal/create-show.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\normal\\create-show.html.twig");
    }
}
