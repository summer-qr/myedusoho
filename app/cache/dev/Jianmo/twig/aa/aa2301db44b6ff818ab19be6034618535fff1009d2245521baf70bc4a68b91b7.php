<?php

/* course/task-list/default-task-list.html.twig */
class __TwigTemplate_2c8785a9d67ae4a85411a16c36237c06df4a727e58da07ea4e7b5b1f2aa4c34d extends Twig_Template
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
        $__internal_7e212fccab695dc4812e531f35ee1e0943cdc5bc35327ead10e12016a479102e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e212fccab695dc4812e531f35ee1e0943cdc5bc35327ead10e12016a479102e->enter($__internal_7e212fccab695dc4812e531f35ee1e0943cdc5bc35327ead10e12016a479102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/task-list/default-task-list.html.twig"));

        // line 1
        echo "<div class=\"course-detail-content js-course-detail-content\">
  
  ";
        // line 3
        $this->loadTemplate("course/task-list/parts/task-list-template.html.twig", "course/task-list/default-task-list.html.twig", 3)->display($context);
        // line 4
        echo "
  <ul class=\"task-list task-list-md task-list-hover infinite-container\"></ul>

  <div class=\"js-down-loading-more\" style=\"min-height: 1px\"></div>
</div>
";
        
        $__internal_7e212fccab695dc4812e531f35ee1e0943cdc5bc35327ead10e12016a479102e->leave($__internal_7e212fccab695dc4812e531f35ee1e0943cdc5bc35327ead10e12016a479102e_prof);

    }

    public function getTemplateName()
    {
        return "course/task-list/default-task-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"course-detail-content js-course-detail-content\">
  
  {% include 'course/task-list/parts/task-list-template.html.twig' %}

  <ul class=\"task-list task-list-md task-list-hover infinite-container\"></ul>

  <div class=\"js-down-loading-more\" style=\"min-height: 1px\"></div>
</div>
", "course/task-list/default-task-list.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\task-list\\default-task-list.html.twig");
    }
}
