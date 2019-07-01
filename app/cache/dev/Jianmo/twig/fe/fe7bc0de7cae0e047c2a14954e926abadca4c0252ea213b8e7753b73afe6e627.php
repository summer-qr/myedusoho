<?php

/* admin/role/templates/tabs.html.twig */
class __TwigTemplate_4777d45ba2cdebd2da9827c56093b22e483a7e9b552d6355bbb783466ea1e055 extends Twig_Template
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
        $__internal_4a56ed3862449a99c43388e20490292515f9fce71a5812acf98de3cc2c81ea70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a56ed3862449a99c43388e20490292515f9fce71a5812acf98de3cc2c81ea70->enter($__internal_4a56ed3862449a99c43388e20490292515f9fce71a5812acf98de3cc2c81ea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/role/templates/tabs.html.twig"));

        // line 1
        $context["tabMenus"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions((($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array()), null)) : (null)));
        // line 2
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter((isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus")), null)) : (null)) && (twig_length_filter($this->env, (isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus"))) > 1))) {
            // line 3
            echo "  <ul class=\"nav nav-tabs mbm\">
    ";
            // line 5
            echo "    ";
            $context["tabMenus"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arraysKeyConvert((isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus")), "visable", "visible");
            // line 6
            echo "    ";
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visible", array(), "any", true, true) || ($this->getAttribute($context["m"], "visible", array(), "any", true, true) && $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visible", array()))))) {
                    // line 9
                    echo "
      ";
                    // line 10
                    if (( !(($this->getAttribute($context["m"], "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "mode", array()), "")) : ("")) == "capsules")) {
                        // line 11
                        echo "        ";
                        $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $context["m"]);
                        // line 12
                        echo "      ";
                    } else {
                        // line 13
                        echo "        ";
                        $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]));
                        // line 14
                        echo "      ";
                    }
                    // line 15
                    echo "
      <li ";
                    // line 16
                    if (($this->getAttribute($context["m"], "code", array()) == ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
        <a
            title=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                    echo "\"
            class=\"";
                    // line 19
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")), "html", null, true);
                    echo "\"
            href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
                    echo "\"
        >
          ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                    echo "
        </a>
      </li>

    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "  </ul>
";
        }
        
        $__internal_4a56ed3862449a99c43388e20490292515f9fce71a5812acf98de3cc2c81ea70->leave($__internal_4a56ed3862449a99c43388e20490292515f9fce71a5812acf98de3cc2c81ea70_prof);

    }

    public function getTemplateName()
    {
        return "admin/role/templates/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  82 => 22,  77 => 20,  73 => 19,  69 => 18,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  45 => 10,  42 => 9,  37 => 8,  34 => 7,  32 => 6,  29 => 5,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tabMenus = sub_permissions(menu|parent_permission.code|default(null)) %}
{% if tabMenus|default(null) and tabMenus|length > 1 %}
  <ul class=\"nav nav-tabs mbm\">
    {# 兼容菜单配置中单词错误拼写：visable 正确为：visible  等插件全部更新完毕删除此代码 #}
    {% set tabMenus = arrays_key_convert(tabMenus, 'visable', 'visible') %}
    {# 兼容代码结束 #}

    {% for m in tabMenus if not m.visible is defined or (m.visible is defined and eval_expression(m.visible)) %}

      {% if not m.mode|default('') == 'capsules' %}
        {% set path = permission_path(m) %}
      {% else %}
        {% set path = permission_path(first_child_permission(m)) %}
      {% endif %}

      <li {% if m.code == menu|default(null) %}class=\"active\"{% endif %}>
        <a
            title=\"{{ m.name|trans({}, 'menu') }}\"
            class=\"{{ m.class|default('') }}\"
            href=\"{{ path }}\"
        >
          {{ m.name|trans({}, 'menu') }}
        </a>
      </li>

    {% endfor %}
  </ul>
{% endif %}", "admin/role/templates/tabs.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\role\\templates\\tabs.html.twig");
    }
}
