<?php

/* admin/role/templates/macro.html.twig */
class __TwigTemplate_4b1aa4c89b0556706e1eecce1565921f18c5fa2f95fa4b8c24c0dcded545d0a3 extends Twig_Template
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
        $__internal_8fb525e9833c73e4f87a823f42d1a232e9a9bfd13fb7ecd2d01adf1b987fb26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb525e9833c73e4f87a823f42d1a232e9a9bfd13fb7ecd2d01adf1b987fb26b->enter($__internal_8fb525e9833c73e4f87a823f42d1a232e9a9bfd13fb7ecd2d01adf1b987fb26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/role/templates/macro.html.twig"));

        // line 1
        echo "
";
        
        $__internal_8fb525e9833c73e4f87a823f42d1a232e9a9bfd13fb7ecd2d01adf1b987fb26b->leave($__internal_8fb525e9833c73e4f87a823f42d1a232e9a9bfd13fb7ecd2d01adf1b987fb26b_prof);

    }

    // line 2
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5b8e0a77d9093dd1ec2ec2b9ba69f63ccb80c791c879f523059bada194ced3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5b8e0a77d9093dd1ec2ec2b9ba69f63ccb80c791c879f523059bada194ced3cc->enter($__internal_5b8e0a77d9093dd1ec2ec2b9ba69f63ccb80c791c879f523059bada194ced3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_link_html"));

            // line 3
            echo "  <a 
    title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array()), array(), "menu"), "html", null, true);
            echo "\"
  ";
            // line 5
            if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                // line 6
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"
  ";
            }
            // line 8
            echo "
  ";
            // line 9
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 10
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
    href=\"#modal\"
  ";
            } elseif (((($this->getAttribute(            // line 14
(isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "none")) {
                // line 15
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    href=\"javascript:;\"
  ";
            } else {
                // line 18
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
  ";
            }
            // line 20
            echo "  
  ";
            // line 21
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 22
                echo "    target=\"_blank\"
  ";
            }
            // line 24
            echo "  >
  ";
            // line 25
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array()), false)) : (false))) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "icon", array()), "html", null, true);
                echo "\"></span>";
            }
            echo " 
    ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array()), array(), "menu"), "html", null, true);
            echo "
  </a>
";
            
            $__internal_5b8e0a77d9093dd1ec2ec2b9ba69f63ccb80c791c879f523059bada194ced3cc->leave($__internal_5b8e0a77d9093dd1ec2ec2b9ba69f63ccb80c791c879f523059bada194ced3cc_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/role/templates/macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  102 => 25,  99 => 24,  95 => 22,  93 => 21,  90 => 20,  84 => 18,  77 => 15,  75 => 14,  67 => 10,  65 => 9,  62 => 8,  56 => 6,  54 => 5,  50 => 4,  47 => 3,  30 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% macro menu_link_html(_context, menu, class) %}
  <a 
    title=\"{{menu.name|trans({}, 'menu')}}\"
  {% if class %}
    class=\"{{ class }}\"
  {% endif %}

  {% if menu.mode|default(null) == 'modal' %}
    data-url=\"{{ permission_path(menu) }}\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
    href=\"#modal\"
  {% elseif menu.mode|default(null) == 'none' %}
    data-url=\"{{ permission_path(menu) }}\"
    href=\"javascript:;\"
  {% else %}
    href=\"{{ permission_path(menu) }}\"
  {% endif %}
  
  {% if menu.blank|default(false) %}
    target=\"_blank\"
  {% endif %}
  >
  {% if menu.icon|default(false) %}<span class=\"{{menu.icon}}\"></span>{% endif %} 
    {{ menu.name|trans({}, 'menu') }}
  </a>
{% endmacro %}", "admin/role/templates/macro.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\role\\templates\\macro.html.twig");
    }
}
