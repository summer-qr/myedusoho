<?php

/* @root\src\AppBundle\Extensions\NotificationTemplate\role.tpl.html.twig */
class __TwigTemplate_cfb7be1f4eba5912f607c82bb73e6802ab1e08fd5f6dfb12d400d0c96579275b extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("macro.html.twig", "@root\\src\\AppBundle\\Extensions\\NotificationTemplate\\role.tpl.html.twig", 1);
        // line 2
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
      ";
        // line 8
        $context["data"] = $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "content", array());
        // line 9
        echo "      ";
        $context["who"] = $context["macro"]->getlink($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userName", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userId", array()))));
        // line 10
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notification.role", array("%role%" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "role", array()), "%who%" => (isset($context["who"]) ? $context["who"] : null)));
        echo "
    </div>
    <div class=\"notification-footer\">
      ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "createdTime", array())), "html", null, true);
        echo "
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@root\\src\\AppBundle\\Extensions\\NotificationTemplate\\role.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  34 => 10,  31 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root\\src\\AppBundle\\Extensions\\NotificationTemplate\\role.tpl.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\src\\AppBundle\\Extensions\\NotificationTemplate\\role.tpl.html.twig");
    }
}
