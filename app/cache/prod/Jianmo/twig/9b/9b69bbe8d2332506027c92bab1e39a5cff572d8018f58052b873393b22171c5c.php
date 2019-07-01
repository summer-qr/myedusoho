<?php

/* course/widgets/course-set-price.html.twig */
class __TwigTemplate_2098aa2750ee6b662a10a78facb29acf414fac09c9a50c66969b1af41994bee8 extends Twig_Template
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
        // line 1
        $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->wrap((isset($context["courseSet"]) ? $context["courseSet"] : null), "courseSet.price");
        // line 2
        echo "
<span class=\"course-price-widget\">
      <span class=\"
            ";
        // line 5
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "maxCoursePrice", array()) == 0)) {
            // line 6
            echo "                  free
            ";
        } else {
            // line 8
            echo "                  price
            ";
        }
        // line 9
        echo "\">
          ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "priceWrapper", array()), "priceText", array()), "html", null, true);
        echo "
      </span>
</span>";
    }

    public function getTemplateName()
    {
        return "course/widgets/course-set-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  36 => 9,  32 => 8,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/widgets/course-set-price.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\widgets\\course-set-price.html.twig");
    }
}
