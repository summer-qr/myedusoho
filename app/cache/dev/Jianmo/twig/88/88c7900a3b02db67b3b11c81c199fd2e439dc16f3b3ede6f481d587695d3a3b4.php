<?php

/* default/header/part/user-role-manage.html.twig */
class __TwigTemplate_eb8414df7eb9a1b08b5ef945050792d17f7f90c1fb0dce30d6d2aae5fc40749c extends Twig_Template
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
        $__internal_94e26c3c728dddfa1e0d1e99fcff21d2e0fdc31fc1b424ac6f7544ea161f0363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e26c3c728dddfa1e0d1e99fcff21d2e0fdc31fc1b424ac6f7544ea161f0363->enter($__internal_94e26c3c728dddfa1e0d1e99fcff21d2e0fdc31fc1b424ac6f7544ea161f0363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header/part/user-role-manage.html.twig"));

        // line 1
        if (($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin") || twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())))) {
            // line 2
            echo "  <li class=\"user-manage-li cd-dropdown cd-dropdown-right visible-lg cd-ml24\"  data-toggle=\"cd-dropdown\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"javascript:;\">";
            // line 3
            if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.admin_menu"), "html", null, true);
            } elseif (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_course"), "html", null, true);
            }
            echo "<i class=\"cd-icon cd-icon-arrow-down cd-text-sm\"></i></a>
    <ul class=\"dropdown-menu user-manage-dropdown\" role=\"menu\">
      ";
            // line 5
            if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin")) {
                // line 6
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.admin_menu"), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 8
            echo "
      ";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isTeacher", array(), "method")) {
                // line 10
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_course"), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 12
            echo "      <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning"), "html", null, true);
            echo "</a></li>
    </ul>
  </li>
";
        } else {
            // line 16
            echo "  <li class=\"user-manage-li visible-lg cd-ml24\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning"), "html", null, true);
            echo "</a>
  </li>
";
        }
        // line 20
        echo "

";
        
        $__internal_94e26c3c728dddfa1e0d1e99fcff21d2e0fdc31fc1b424ac6f7544ea161f0363->leave($__internal_94e26c3c728dddfa1e0d1e99fcff21d2e0fdc31fc1b424ac6f7544ea161f0363_prof);

    }

    public function getTemplateName()
    {
        return "default/header/part/user-role-manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  72 => 17,  69 => 16,  59 => 12,  51 => 10,  49 => 9,  46 => 8,  38 => 6,  36 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if has_permission('admin') or 'ROLE_TEACHER' in app.user.roles %}
  <li class=\"user-manage-li cd-dropdown cd-dropdown-right visible-lg cd-ml24\"  data-toggle=\"cd-dropdown\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"javascript:;\">{% if has_permission('admin') %}{{'homepage.header.admin_menu'|trans}}{% elseif 'ROLE_TEACHER' in app.user.roles %}{{ 'homepage.header.my_course'|trans }}{% endif %}<i class=\"cd-icon cd-icon-arrow-down cd-text-sm\"></i></a>
    <ul class=\"dropdown-menu user-manage-dropdown\" role=\"menu\">
      {% if has_permission('admin') %}
        <li><a href=\"{{ path('admin') }}\">{{'homepage.header.admin_menu'|trans}}</a></li>
      {% endif %}

      {% if app.user.isTeacher() %}
        <li><a href=\"{{ path('my') }}\">{{ 'homepage.header.my_course'|trans }}</a></li>
      {% endif %}
      <li><a href=\"{{ path('my_courses_learning') }}\">{{ 'homepage.header.my_learning'|trans }}</a></li>
    </ul>
  </li>
{% else %}
  <li class=\"user-manage-li visible-lg cd-ml24\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"{{ path('my_courses_learning') }}\">{{ 'homepage.header.my_learning'|trans }}</a>
  </li>
{% endif %}


", "default/header/part/user-role-manage.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\default\\header\\part\\user-role-manage.html.twig");
    }
}
