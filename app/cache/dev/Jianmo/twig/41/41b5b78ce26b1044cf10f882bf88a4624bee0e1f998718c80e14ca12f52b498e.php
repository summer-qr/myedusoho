<?php

/* courseset-manage/live/create-show.html.twig */
class __TwigTemplate_c435e8a015a065d3aac7f1747f2fd4bda95936f1af101664af4b458d6160f354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("courseset-manage/live/base-live-create-show.html.twig", "courseset-manage/live/create-show.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "courseset-manage/live/base-live-create-show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_387d837bf17acccfc498918f249d61aad5666847265cd87b3516a5b6c59c3de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387d837bf17acccfc498918f249d61aad5666847265cd87b3516a5b6c59c3de6->enter($__internal_387d837bf17acccfc498918f249d61aad5666847265cd87b3516a5b6c59c3de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/live/create-show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_387d837bf17acccfc498918f249d61aad5666847265cd87b3516a5b6c59c3de6->leave($__internal_387d837bf17acccfc498918f249d61aad5666847265cd87b3516a5b6c59c3de6_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/live/create-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'courseset-manage/live/base-live-create-show.html.twig' %}", "courseset-manage/live/create-show.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\live\\create-show.html.twig");
    }
}
