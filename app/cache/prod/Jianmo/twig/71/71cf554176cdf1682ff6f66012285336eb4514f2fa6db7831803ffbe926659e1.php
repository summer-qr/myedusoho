<?php

/* ApiBundle:newNotification:user-inform-notification.html.twig */
class __TwigTemplate_b2d5a990f9b46fb7f1d555696be50a19b4ae36b2697f244382e3fa0b7d7c0e29 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 2
            echo "  ";
            $context["notification"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->renderNotification($context["notification"]);
            // line 3
            echo "  <div class=\"inform-dropdown-body__item inform-notification-item js-inform-notification\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification", array("id" => $this->getAttribute($context["notification"], "id", array()))), "html", null, true);
            echo "\">
  ";
            // line 4
            echo $this->getAttribute($context["notification"], "message", array());
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ApiBundle:newNotification:user-inform-notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ApiBundle:newNotification:user-inform-notification.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\src\\ApiBundle/Resources/views/newNotification/user-inform-notification.html.twig");
    }
}
