<?php

/* admin/theme/tab-panel/components.html.twig */
class __TwigTemplate_178cfa8afc7779dec11537abf2ba7525dda55b373eba2161953a9bd3d6191b97 extends Twig_Template
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
        $__internal_bc4be1436c0f99634c2adde845e56baa06bd87093978bca7802bffcbd1159566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4be1436c0f99634c2adde845e56baa06bd87093978bca7802bffcbd1159566->enter($__internal_bc4be1436c0f99634c2adde845e56baa06bd87093978bca7802bffcbd1159566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/theme/tab-panel/components.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["orginAllConfig"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arrayIndex((isset($context["allBlockConfig"]) ? $context["allBlockConfig"] : $this->getContext($context, "allBlockConfig")), "id");
        // line 4
        $context["blockConfig"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arrayIndex((isset($context["blockConfig"]) ? $context["blockConfig"] : $this->getContext($context, "blockConfig")), "id");
        // line 5
        $context["allBlockConfig"] = twig_array_merge((isset($context["orginAllConfig"]) ? $context["orginAllConfig"] : $this->getContext($context, "orginAllConfig")), (isset($context["blockConfig"]) ? $context["blockConfig"] : $this->getContext($context, "blockConfig")));
        // line 6
        echo "
<div class=\"hide js-componet-setting\" data-key=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["configKey"]) ? $context["configKey"] : $this->getContext($context, "configKey")), "html", null, true);
        echo "\">
  ";
        // line 8
        echo twig_jsonencode_filter((isset($context["allBlockConfig"]) ? $context["allBlockConfig"] : $this->getContext($context, "allBlockConfig")));
        echo "
</div>

<div class=\"tab-pane ";
        // line 11
        if (((array_key_exists("isActive", $context)) ? (_twig_default_filter((isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive")))) : (""))) {
            echo " active ";
        }
        echo " js-theme-component\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["configKey"]) ? $context["configKey"] : $this->getContext($context, "configKey")), "html", null, true);
        echo "\">
    <div class=\"panel panel-default\">
      <!-- Default panel contents -->
      <div class=\"panel-heading clearfix\">
        <div class=\"col-md-4 \">
          ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.component_name"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-4\">
          ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.custom_name"), "html", null, true);
        echo "
        </div>
      </div>
      <!-- List group -->
      <ul class=\"list-group module-item-list theme-edit-block theme-custom-left-block\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockConfig"]) ? $context["blockConfig"] : $this->getContext($context, "blockConfig")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["pendant"]) {
            // line 25
            echo "          ";
            if ((($this->getAttribute((isset($context["orginAllConfig"]) ? $context["orginAllConfig"] : null), $context["key"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["orginAllConfig"]) ? $context["orginAllConfig"] : null), $context["key"], array(), "array"))) : (""))) {
                // line 26
                echo "            ";
                $this->loadTemplate("admin/theme/theme-edit-config-li.html.twig", "admin/theme/tab-panel/components.html.twig", 26)->display(array_merge($context, array("isChoiced" => true)));
                // line 27
                echo "          ";
            }
            // line 28
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['pendant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allBlockConfig"]) ? $context["allBlockConfig"] : $this->getContext($context, "allBlockConfig")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["pendant"]) {
            // line 31
            echo "          ";
            if ( !(($this->getAttribute((isset($context["blockConfig"]) ? $context["blockConfig"] : null), $context["key"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["blockConfig"]) ? $context["blockConfig"] : null), $context["key"], array(), "array"))) : (""))) {
                // line 32
                echo "            ";
                $this->loadTemplate("admin/theme/theme-edit-config-li.html.twig", "admin/theme/tab-panel/components.html.twig", 32)->display(array_merge($context, array("isChoiced" => false)));
                // line 33
                echo "          ";
            }
            // line 34
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['pendant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      </ul>
    </div>
</div>
";
        // line 38
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiaadminbundle/controller/theme/theme-setting/components.js");
        
        $__internal_bc4be1436c0f99634c2adde845e56baa06bd87093978bca7802bffcbd1159566->leave($__internal_bc4be1436c0f99634c2adde845e56baa06bd87093978bca7802bffcbd1159566_prof);

    }

    public function getTemplateName()
    {
        return "admin/theme/tab-panel/components.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 38,  153 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  113 => 30,  110 => 29,  96 => 28,  93 => 27,  90 => 26,  87 => 25,  70 => 24,  62 => 19,  56 => 16,  44 => 11,  38 => 8,  34 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# 主题管理-分类挂件管理 #}

{% set orginAllConfig = array_index(allBlockConfig, 'id') %}
{% set blockConfig = array_index(blockConfig, 'id')  %}
{% set allBlockConfig = orginAllConfig|merge(blockConfig) %}

<div class=\"hide js-componet-setting\" data-key=\"{{ configKey }}\">
  {{ allBlockConfig|json_encode|raw }}
</div>

<div class=\"tab-pane {% if isActive|default() %} active {% endif %} js-theme-component\" id=\"{{ configKey }}\">
    <div class=\"panel panel-default\">
      <!-- Default panel contents -->
      <div class=\"panel-heading clearfix\">
        <div class=\"col-md-4 \">
          {{'admin.setting.theme.manage.component_name'|trans}}
        </div>
        <div class=\"col-md-4\">
          {{'admin.setting.theme.manage.custom_name'|trans}}
        </div>
      </div>
      <!-- List group -->
      <ul class=\"list-group module-item-list theme-edit-block theme-custom-left-block\">
        {% for key, pendant in blockConfig %}
          {% if orginAllConfig[key]|default() %}
            {% include 'admin/theme/theme-edit-config-li.html.twig' with {isChoiced: true} %}
          {% endif %}
        {% endfor %}
        
        {% for key, pendant in allBlockConfig %}
          {% if not blockConfig[key]|default() %}
            {% include 'admin/theme/theme-edit-config-li.html.twig' with {isChoiced: false} %}
          {% endif %}
        {% endfor %}
      </ul>
    </div>
</div>
{% do load_script('topxiaadminbundle/controller/theme/theme-setting/components.js') %}", "admin/theme/tab-panel/components.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\theme\\tab-panel\\components.html.twig");
    }
}
