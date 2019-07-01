<?php

/* course/widgets/teachers.html.twig */
class __TwigTemplate_dd520992273f7aa53667f8296e6bf3b73e18397fb5e0c779e2a5f6a1797b8bb6 extends Twig_Template
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
        $__internal_923c9ca32b442448ec0ac8dffc7388b441330b74d17efd6d02694f2e02218540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923c9ca32b442448ec0ac8dffc7388b441330b74d17efd6d02694f2e02218540->enter($__internal_923c9ca32b442448ec0ac8dffc7388b441330b74d17efd6d02694f2e02218540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/teachers.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")))) {
            // line 2
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teacher.content_title"), "html", null, true);
            echo "</h3>
    </div>
    <div class=\"panel-body\">
      ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 8
                echo "        <div class=\"media media-default\">
          <div class=\"media-left\">
            <a class=\"js-user-card\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                echo "\"
               data-card-url=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                echo "\"
               data-user-id=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "id", array()), "html", null, true);
                echo "\"
               data-original-title=\"\" title=\"\">
              <img class=\"avatar-md\" src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["teacher"], "mediumAvatar", array()), "avatar.png"), "html", null, true);
                echo "\"></a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"link-dark link-dark\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "nickname", array()), "html", null, true);
                echo "</a>
            </div>
            <div class=\"content\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "title", array()), "html", null, true);
                echo "</div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
  </div>
";
        }
        
        $__internal_923c9ca32b442448ec0ac8dffc7388b441330b74d17efd6d02694f2e02218540->leave($__internal_923c9ca32b442448ec0ac8dffc7388b441330b74d17efd6d02694f2e02218540_prof);

    }

    public function getTemplateName()
    {
        return "course/widgets/teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  69 => 20,  62 => 18,  55 => 14,  50 => 12,  46 => 11,  42 => 10,  38 => 8,  34 => 7,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not teachers is empty %}
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">{{ 'course.teacher.content_title'|trans }}</h3>
    </div>
    <div class=\"panel-body\">
      {% for teacher in teachers %}
        <div class=\"media media-default\">
          <div class=\"media-left\">
            <a class=\"js-user-card\" href=\"{{ path('user_show', {'id': teacher.id}) }}\"
               data-card-url=\"{{ path('user_card_show', {'userId': teacher.id}) }}\"
               data-user-id=\"{{ teacher.id }}\"
               data-original-title=\"\" title=\"\">
              <img class=\"avatar-md\" src=\"{{ filepath(teacher.mediumAvatar, 'avatar.png') }}\"></a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"link-dark link-dark\" href=\"{{ path('user_show', {'id': teacher.id}) }}\">{{ teacher.nickname }}</a>
            </div>
            <div class=\"content\">{{ teacher.title }}</div>
          </div>
        </div>
      {% endfor %}
    </div>
  </div>
{% endif %}
", "course/widgets/teachers.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\widgets\\teachers.html.twig");
    }
}
