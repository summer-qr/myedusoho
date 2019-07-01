<?php

/* admin/role/templates/group-button.html.twig */
class __TwigTemplate_a409ad3b4661fb23ef0d47065869bd9fb9a99bcb0515caad05368691b1a58fb6 extends Twig_Template
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
        $__internal_7c8821de08baa5689a241dcc75453172e94839a626472aa1ab9c71bf0ca73957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8821de08baa5689a241dcc75453172e94839a626472aa1ab9c71bf0ca73957->enter($__internal_7c8821de08baa5689a241dcc75453172e94839a626472aa1ab9c71bf0ca73957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/role/templates/group-button.html.twig"));

        // line 1
        $context["self_macro"] = $this->loadTemplate("admin/role/templates/macro.html.twig", "admin/role/templates/group-button.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions((isset($context["parentCode"]) ? $context["parentCode"] : $this->getContext($context, "parentCode")), ((array_key_exists("group", $context)) ? (_twig_default_filter((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), null)) : (null)));
        // line 4
        echo "
";
        // line 5
        $context["dropdownMenusShow"] = false;
        // line 6
        echo "
";
        // line 8
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arraysKeyConvert((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "visable", "visible");
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 12
            echo "    ";
            if ($this->getAttribute($context["permission"], "visible", array(), "any", true, true)) {
                // line 13
                echo "      ";
                if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["permission"], "visible", array()))) {
                    // line 14
                    echo "        ";
                    $context["dropdownMenusShow"] = true;
                    // line 15
                    echo "      ";
                }
                // line 16
                echo "    ";
            } else {
                // line 17
                echo "      ";
                $context["dropdownMenusShow"] = true;
                // line 18
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        if (((isset($context["dropdownMenusShow"]) ? $context["dropdownMenusShow"] : $this->getContext($context, "dropdownMenusShow")) && ((array_key_exists("permissions", $context)) ? (_twig_default_filter((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), null)) : (null)))) {
            // line 22
            echo "<a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
  <span class=\"caret\"></span> 
</a>
<ul class=\"dropdown-menu\">
  ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 27
                echo "    <li>
      ";
                // line 28
                if ($this->getAttribute($context["permission"], "visible", array(), "any", true, true)) {
                    // line 29
                    echo "        ";
                    if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["permission"], "visible", array()))) {
                        // line 30
                        echo "          ";
                        echo $context["self_macro"]->getmenu_link_html($context, $context["permission"], (($this->getAttribute($context["permission"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["permission"], "class", array()), "")) : ("")));
                        echo "
        ";
                    }
                    // line 32
                    echo "      ";
                } else {
                    // line 33
                    echo "        ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["permission"], (($this->getAttribute($context["permission"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["permission"], "class", array()), "")) : ("")));
                    echo "
      ";
                }
                // line 35
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
</ul>
";
        }
        
        $__internal_7c8821de08baa5689a241dcc75453172e94839a626472aa1ab9c71bf0ca73957->leave($__internal_7c8821de08baa5689a241dcc75453172e94839a626472aa1ab9c71bf0ca73957_prof);

    }

    public function getTemplateName()
    {
        return "admin/role/templates/group-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  109 => 35,  103 => 33,  100 => 32,  94 => 30,  91 => 29,  89 => 28,  86 => 27,  82 => 26,  76 => 22,  74 => 21,  71 => 20,  64 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  49 => 13,  46 => 12,  42 => 11,  39 => 10,  37 => 8,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"admin/role/templates/macro.html.twig\" as self_macro %}

{% set permissions = sub_permissions(parentCode, group|default(null)) %}

{% set dropdownMenusShow = false %}

{# 兼容菜单配置中单词错误拼写：visable 正确为：visible  等插件全部更新完毕删除此代码 #}
{% set permissions = arrays_key_convert(permissions, 'visable', 'visible') %}
{# 兼容代码结束 #}

{% for permission in permissions %}
    {% if permission.visible is defined  %}
      {% if eval_expression(permission.visible) %}
        {% set dropdownMenusShow = true %}
      {% endif %}
    {% else %}
      {% set dropdownMenusShow = true %}
    {% endif %}
{% endfor %}

{% if dropdownMenusShow and permissions|default(null) %}
<a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
  <span class=\"caret\"></span> 
</a>
<ul class=\"dropdown-menu\">
  {% for permission in permissions %}
    <li>
      {% if permission.visible is defined %}
        {% if eval_expression(permission.visible) %}
          {{ self_macro.menu_link_html(_context, permission, permission.class|default('')) }}
        {% endif %}
      {% else %}
        {{ self_macro.menu_link_html(_context, permission, permission.class|default('')) }}
      {% endif %}
    </li>
  {% endfor %}

</ul>
{% endif %}
", "admin/role/templates/group-button.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\role\\templates\\group-button.html.twig");
    }
}
