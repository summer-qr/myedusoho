<?php

/* course/widgets/newest-students.html.twig */
class __TwigTemplate_89d2a3e322824f69a79a78d20e07a35b5e77551280e19b2786604e36cc8375a7 extends Twig_Template
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
        $__internal_98d10ebfe8c64590809afd4fc02cea7c573e410d1706659507e6c6c60336211f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d10ebfe8c64590809afd4fc02cea7c573e410d1706659507e6c6c60336211f->enter($__internal_98d10ebfe8c64590809afd4fc02cea7c573e410d1706659507e6c6c60336211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/newest-students.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")))) {
            // line 2
            echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.newest_students.content_title"), "html", null, true);
            echo "</h3>
  </div>
  <div class=\"panel-body\">
    <ul class=\"user-avatar-list clearfix\">
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 9
                echo "        <li>
          <a class=\" js-user-card\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\"
            data-user-id=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                echo "\" data-original-title=\"\" title=\"\">
            <img class=\"avatar-sm\" src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["student"], "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\">
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
  </div>
</div>
";
        }
        
        $__internal_98d10ebfe8c64590809afd4fc02cea7c573e410d1706659507e6c6c60336211f->leave($__internal_98d10ebfe8c64590809afd4fc02cea7c573e410d1706659507e6c6c60336211f_prof);

    }

    public function getTemplateName()
    {
        return "course/widgets/newest-students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  52 => 12,  48 => 11,  42 => 10,  39 => 9,  35 => 8,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not students is empty %}
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">{{ 'course.newest_students.content_title'|trans }}</h3>
  </div>
  <div class=\"panel-body\">
    <ul class=\"user-avatar-list clearfix\">
      {% for student in students %}
        <li>
          <a class=\" js-user-card\" href=\"{{ path('user_show', {'id': student.id}) }}\" data-card-url=\"{{ path('user_card_show', {userId: student.id}) }}\"
            data-user-id=\"{{ student.id }}\" data-original-title=\"\" title=\"\">
            <img class=\"avatar-sm\" src=\"{{ filepath(student.smallAvatar, 'avatar.png') }}\">
          </a>
        </li>
      {% endfor %}
    </ul>
  </div>
</div>
{% endif %}
", "course/widgets/newest-students.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\widgets\\newest-students.html.twig");
    }
}
