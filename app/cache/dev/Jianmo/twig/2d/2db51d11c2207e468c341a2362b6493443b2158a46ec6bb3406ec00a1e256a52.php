<?php

/* admin/role/templates/side-bar.html.twig */
class __TwigTemplate_a0b18f444b127f75d7a17e0e480effdfd789459d640e9f2eb64f4dd1adf0a5a8 extends Twig_Template
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
        $__internal_4d316225520d677737aa0f6578e01a085daa7ba5d10aa0e8a319e55d25370609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d316225520d677737aa0f6578e01a085daa7ba5d10aa0e8a319e55d25370609->enter($__internal_4d316225520d677737aa0f6578e01a085daa7ba5d10aa0e8a319e55d25370609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/role/templates/side-bar.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->groupedPermissions((($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array())), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array())), "code", array()), null)) : (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["groupedPermissions"]) {
            // line 2
            echo "  <div class=\"list-group left-navbar\">

    ";
            // line 5
            echo "    ";
            $context["groupedPermissions"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arraysKeyConvert($context["groupedPermissions"], "visable", "visible");
            // line 6
            echo "    ";
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupedPermissions"]);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visible", array(), "any", true, true) || ($this->getAttribute($context["m"], "visible", array(), "any", true, true) && $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visible", array()))))) {
                    // line 9
                    echo "      ";
                    $context["menuClass"] = ((($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array()), null)) : (null)))) ? ("list-group-item active") : ("list-group-item"));
                    // line 10
                    echo "
      ";
                    // line 11
                    $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]);
                    // line 12
                    echo "      ";
                    if (((($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array()), "")) : ("")) == "capsules")) {
                        // line 13
                        echo "        ";
                        $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild((isset($context["tabMenu"]) ? $context["tabMenu"] : $this->getContext($context, "tabMenu")));
                        // line 14
                        echo "      ";
                    }
                    // line 15
                    echo "
      <a
          id=\"menu_";
                    // line 17
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "code", array()))) : ("")), "html", null, true);
                    echo "\"
          title=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                    echo "\"
          class=\"";
                    // line 19
                    echo twig_escape_filter($this->env, (isset($context["menuClass"]) ? $context["menuClass"] : $this->getContext($context, "menuClass")), "html", null, true);
                    echo "\"
          href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["tabMenu"]) ? $context["tabMenu"] : $this->getContext($context, "tabMenu"))), "html", null, true);
                    echo "\"
      >
        ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                    echo "
      </a>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupedPermissions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4d316225520d677737aa0f6578e01a085daa7ba5d10aa0e8a319e55d25370609->leave($__internal_4d316225520d677737aa0f6578e01a085daa7ba5d10aa0e8a319e55d25370609_prof);

    }

    public function getTemplateName()
    {
        return "admin/role/templates/side-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  81 => 22,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  46 => 10,  43 => 9,  38 => 8,  35 => 7,  33 => 6,  30 => 5,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for groupedPermissions in grouped_permissions(menu|parent_permission.code|parent_permission.code|default(null)) %}
  <div class=\"list-group left-navbar\">

    {# 兼容菜单配置中单词错误拼写：visable 正确为：visible  等插件全部更新完毕删除此代码 #}
    {% set groupedPermissions = arrays_key_convert(groupedPermissions, 'visable', 'visible') %}
    {# 兼容代码结束 #}

    {% for m in groupedPermissions if not m.visible is defined or (m.visible is defined and eval_expression(m.visible)) %}
      {% set menuClass = (m.code == menu|parent_permission.code|default(null) ? 'list-group-item active' : 'list-group-item') %}

      {% set tabMenu = first_child_permission(m) %}
      {% if tabMenu.mode|default('') == 'capsules' %}
        {% set tabMenu = first_child_permission(tabMenu) %}
      {% endif %}

      <a
          id=\"menu_{{ m.code|default() }}\"
          title=\"{{ m.name|trans({}, 'menu') }}\"
          class=\"{{ menuClass }}\"
          href=\"{{ permission_path(tabMenu) }}\"
      >
        {{ m.name|trans({}, 'menu') }}
      </a>
    {% endfor %}
  </div>
{% endfor %}", "admin/role/templates/side-bar.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\role\\templates\\side-bar.html.twig");
    }
}
