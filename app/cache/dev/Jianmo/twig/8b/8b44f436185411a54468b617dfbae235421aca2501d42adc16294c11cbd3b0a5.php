<?php

/* admin/theme/theme-edit-config-li.html.twig */
class __TwigTemplate_08b1120a4cd238c07875a41085e1c136aeac0d5d811a3c898446ba9cfa59e253 extends Twig_Template
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
        $__internal_3d850138ff211616639614b022bf141c5afc479d37069dbeaa176b7e9d80c529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d850138ff211616639614b022bf141c5afc479d37069dbeaa176b7e9d80c529->enter($__internal_3d850138ff211616639614b022bf141c5afc479d37069dbeaa176b7e9d80c529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/theme/theme-edit-config-li.html.twig"));

        // line 1
        echo "<li class=\"list-group-item clearfix  ";
        if (($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : $this->getContext($context, "pendant")), "code", array()) != "footer-link")) {
            echo "theme-edit-item";
        }
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : $this->getContext($context, "pendant")), "id", array()), "html", null, true);
        echo "\">
  <div class=\"col-md-4 \">
    ";
        // line 3
        if (($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : $this->getContext($context, "pendant")), "code", array()) != "footer-link")) {
            // line 4
            echo "      <span class=\"glyphicon glyphicon-move edit-sort\"></span>
    ";
        } else {
            // line 6
            echo "      <span class=\"glyphicon glyphicon-lock  edit-sort\"></span>
    ";
        }
        // line 8
        echo "    <label>
      <input type=\"checkbox\" data-component-id=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : $this->getContext($context, "pendant")), "id", array()), "html", null, true);
        echo "\" class=\"check-block\" ";
        if (((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : $this->getContext($context, "isChoiced")), null)) : (null))) {
            echo "checked";
        }
        echo ">
      <span class=\"default-title\">";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["orginAllConfig"]) ? $context["orginAllConfig"] : null), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array", false, true), "defaultTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["orginAllConfig"]) ? $context["orginAllConfig"] : null), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array", false, true), "defaultTitle", array()), "")) : ("")), "html", null, true);
        echo "</span>
    </label>
  </div>
  <div class=\"col-md-5\">
    ";
        // line 14
        if ((($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "title", array()), null)) : (null))) {
            // line 15
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : $this->getContext($context, "pendant")), "title", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 17
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : $this->getContext($context, "pendant")), "defaultTitle", array()), "html", null, true);
            echo "
    ";
        }
        // line 19
        echo "  </div>
  <div class=\"col-md-3 text-right\">
    ";
        // line 21
        $context["blockPendant"] = array(0 => "middle-banner", 1 => "footer-link", 2 => "advertisement-banner");
        // line 22
        echo "    ";
        if (twig_in_filter($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : $this->getContext($context, "pendant")), "code", array()), (isset($context["blockPendant"]) ? $context["blockPendant"] : $this->getContext($context, "blockPendant")))) {
            // line 23
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block", array("category" => _twig_default_filter("theme", "all"))), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm item-set-btn\" ";
            if ( !((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : $this->getContext($context, "isChoiced")))) : (""))) {
                echo "style=\"display:none;\"";
            }
            echo ">
        <span class=\"glyphicon glyphicon-wrench\"></span> 
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.edit.setting_btn"), "html", null, true);
            echo "
      </a>
    ";
        } elseif (($this->getAttribute(        // line 27
(isset($context["pendant"]) ? $context["pendant"] : $this->getContext($context, "pendant")), "code", array()) == "friend-link")) {
            // line 28
            echo "      <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation", array("type" => "friendlyLink"));
            echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm item-set-btn\" ";
            if ( !((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : $this->getContext($context, "isChoiced")))) : (""))) {
                echo "style=\"display:none;\"";
            }
            echo ">
        <span class=\"glyphicon glyphicon-wrench\"></span> 
        ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.edit.setting_btn"), "html", null, true);
            echo "
      </a>
    ";
        } else {
            // line 33
            echo "      <button class=\"btn btn-primary btn-sm item-edit-btn\" ";
            if ( !((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : $this->getContext($context, "isChoiced")), null)) : (null))) {
                echo "style=\"display:none;\"";
            }
            echo " data-title=\"Edit\" data-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_config_edit");
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.edit_btn"), "html", null, true);
            echo "</button>
    ";
        }
        // line 35
        echo "  </div>
</li>";
        
        $__internal_3d850138ff211616639614b022bf141c5afc479d37069dbeaa176b7e9d80c529->leave($__internal_3d850138ff211616639614b022bf141c5afc479d37069dbeaa176b7e9d80c529_prof);

    }

    public function getTemplateName()
    {
        return "admin/theme/theme-edit-config-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  116 => 33,  110 => 30,  100 => 28,  98 => 27,  93 => 25,  83 => 23,  80 => 22,  78 => 21,  74 => 19,  68 => 17,  62 => 15,  60 => 14,  53 => 10,  45 => 9,  42 => 8,  38 => 6,  34 => 4,  32 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"list-group-item clearfix  {% if pendant.code != 'footer-link' %}theme-edit-item{% endif %}\" id=\"{{ pendant.id }}\">
  <div class=\"col-md-4 \">
    {% if pendant.code != 'footer-link' %}
      <span class=\"glyphicon glyphicon-move edit-sort\"></span>
    {% else %}
      <span class=\"glyphicon glyphicon-lock  edit-sort\"></span>
    {% endif %}
    <label>
      <input type=\"checkbox\" data-component-id=\"{{ pendant.id }}\" class=\"check-block\" {% if isChoiced|default(null) %}checked{% endif %}>
      <span class=\"default-title\">{{ orginAllConfig[key].defaultTitle|default('') }}</span>
    </label>
  </div>
  <div class=\"col-md-5\">
    {% if pendant.title|default(null) %}
      {{ pendant.title }}
    {% else %}
      {{ pendant.defaultTitle }}
    {% endif %}
  </div>
  <div class=\"col-md-3 text-right\">
    {% set blockPendant = ['middle-banner', 'footer-link', 'advertisement-banner'] %}
    {% if pendant.code in blockPendant %}
      <a href=\"{{path('admin_block', {category:'theme'|default('all')})}}\" target=\"_blank\" class=\"btn btn-primary btn-sm item-set-btn\" {% if not isChoiced|default() %}style=\"display:none;\"{% endif %}>
        <span class=\"glyphicon glyphicon-wrench\"></span> 
        {{ 'admin.setting.theme.manage.edit.setting_btn'|trans }}
      </a>
    {% elseif pendant.code == 'friend-link' %}
      <a href=\"{{path('admin_navigation', {type:'friendlyLink'})}}\" target=\"_blank\" class=\"btn btn-primary btn-sm item-set-btn\" {% if not isChoiced|default() %}style=\"display:none;\"{% endif %}>
        <span class=\"glyphicon glyphicon-wrench\"></span> 
        {{ 'admin.setting.theme.manage.edit.setting_btn'|trans }}
      </a>
    {% else  %}
      <button class=\"btn btn-primary btn-sm item-edit-btn\" {% if not isChoiced|default(null) %}style=\"display:none;\"{% endif %} data-title=\"Edit\" data-url=\"{{ path('admin_themes_config_edit') }}\"><span class=\"glyphicon glyphicon-pencil\"></span> {{ 'admin.setting.theme.manage.edit_btn'|trans }}</button>
    {% endif %}
  </div>
</li>", "admin/theme/theme-edit-config-li.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\theme\\theme-edit-config-li.html.twig");
    }
}
