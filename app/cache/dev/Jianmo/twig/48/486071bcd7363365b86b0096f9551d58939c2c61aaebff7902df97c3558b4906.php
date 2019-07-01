<?php

/* admin/role/templates/navigation.html.twig */
class __TwigTemplate_ec52954c0d7ca33fa24fdcc5d6e3bcaaa0a5768e0105575ac8576b55591a9965 extends Twig_Template
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
        $__internal_78b559040cf9a6790c594c557ac13e2a450d9d457772f11d9bd41110d4cc9c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b559040cf9a6790c594c557ac13e2a450d9d457772f11d9bd41110d4cc9c07->enter($__internal_78b559040cf9a6790c594c557ac13e2a450d9d457772f11d9bd41110d4cc9c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/role/templates/navigation.html.twig"));

        // line 1
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions((isset($context["parentCode"]) ? $context["parentCode"] : $this->getContext($context, "parentCode")));
        // line 2
        echo "
";
        // line 3
        if (((array_key_exists("permissions", $context)) ? (_twig_default_filter((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), null)) : (null))) {
            // line 4
            echo "  ";
            if (((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), null)) : (null))) {
                // line 5
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array()));
                // line 6
                echo "  ";
            } else {
                // line 7
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode("admin");
                // line 8
                echo "  ";
            }
            // line 9
            echo "
  ";
            // line 11
            echo "  ";
            $context["permissions"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arraysKeyConvert((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "visable", "visible");
            // line 12
            echo "  ";
            // line 13
            echo "
  <ul class=\"nav navbar-nav\">
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visible", array(), "any", true, true) || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visible", array())))) {
                    // line 16
                    echo "      ";
                    // line 17
                    echo "      ";
                    if (($this->getAttribute($context["m"], "code", array()) != "admin_homepage")) {
                        // line 18
                        echo "        <li ";
                        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) && ($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["rootMenu"]) ? $context["rootMenu"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["rootMenu"]) ? $context["rootMenu"] : null), "code", array()), null)) : (null))))) {
                            echo "class=\"active\"";
                        }
                        echo " id=\"menu_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "code", array()), "html", null, true);
                        echo "\">
          ";
                        // line 19
                        $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]));
                        // line 20
                        echo "          ";
                        if (((($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array()), "")) : ("")) == "capsules")) {
                            // line 21
                            echo "            ";
                            $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild((isset($context["tabMenu"]) ? $context["tabMenu"] : $this->getContext($context, "tabMenu")));
                            // line 22
                            echo "          ";
                        }
                        // line 23
                        echo "          <a
              title=\"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                        echo "\"
              href=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["tabMenu"]) ? $context["tabMenu"] : $this->getContext($context, "tabMenu"))), "html", null, true);
                        echo "\"
              ";
                        // line 26
                        if ((($this->getAttribute($context["m"], "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "blank", array()), false)) : (false))) {
                            // line 27
                            echo "                target=\"_blank\"
              ";
                        }
                        // line 29
                        echo "          >
            ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                        echo "
          </a>

        ";
                        // line 34
                        echo "      </li>
      ";
                    }
                    // line 36
                    echo "      ";
                    // line 37
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "  </ul>
";
        }
        
        $__internal_78b559040cf9a6790c594c557ac13e2a450d9d457772f11d9bd41110d4cc9c07->leave($__internal_78b559040cf9a6790c594c557ac13e2a450d9d457772f11d9bd41110d4cc9c07_prof);

    }

    public function getTemplateName()
    {
        return "admin/role/templates/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  118 => 37,  116 => 36,  112 => 34,  106 => 30,  103 => 29,  99 => 27,  97 => 26,  93 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  75 => 19,  66 => 18,  63 => 17,  61 => 16,  56 => 15,  52 => 13,  50 => 12,  47 => 11,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set permissions = sub_permissions(parentCode) %}

{% if permissions|default(null) %}
  {% if menu|default(null) %}
    {% set rootMenu = menu|parent_permission.code|parent_permission %}
  {% else %}
    {% set rootMenu = permission('admin') %}
  {% endif %}

  {# 兼容菜单配置中单词错误拼写：visable 正确为：visible  等插件全部更新完毕删除此代码 #}
  {% set permissions = arrays_key_convert(permissions, 'visable', 'visible') %}
  {# 兼容代码结束 #}

  <ul class=\"nav navbar-nav\">
    {% for m in permissions if not m.visible is defined or eval_expression(m.visible) %}
      {# {% if not (m.code == 'admin_app' and (setting('copyright.thirdCopyright') == 1 or is_without_network())) %} #}
      {% if m.code != 'admin_homepage' %}
        <li {% if menu and  m.code == rootMenu.code|default(null) %}class=\"active\"{% endif %} id=\"menu_{{ m.code }}\">
          {% set tabMenu = first_child_permission(first_child_permission(m)) %}
          {% if tabMenu.mode|default('') == 'capsules' %}
            {% set tabMenu = first_child_permission(tabMenu) %}
          {% endif %}
          <a
              title=\"{{ m.name|trans({}, 'menu') }}\"
              href=\"{{ permission_path(tabMenu) }}\"
              {% if m.blank|default(false)%}
                target=\"_blank\"
              {% endif %}
          >
            {{ m.name|trans({}, 'menu') }}
          </a>

        {# {{ self_macro.menu_link_html(_context, currentMenu) }} #}
      </li>
      {% endif %}
      {# {% endif %} #}
    {% endfor %}
  </ul>
{% endif %}", "admin/role/templates/navigation.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\role\\templates\\navigation.html.twig");
    }
}
