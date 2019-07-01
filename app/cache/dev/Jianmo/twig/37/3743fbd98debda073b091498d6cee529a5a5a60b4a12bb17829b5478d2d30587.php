<?php

/* float-consult.html.twig */
class __TwigTemplate_648a16228284e2ede04e18482781e75b767b46ed28e59f20053873c337732384 extends Twig_Template
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
        $__internal_6140e64a9b31b2f8e32be9c710ea9359d83c96d7cb3d9e3e25c15951b6ab97a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6140e64a9b31b2f8e32be9c710ea9359d83c96d7cb3d9e3e25c15951b6ab97a1->enter($__internal_6140e64a9b31b2f8e32be9c710ea9359d83c96d7cb3d9e3e25c15951b6ab97a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "float-consult.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/float-consult/index.js"));
        // line 2
        echo "
";
        // line 3
        $context["consult"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult");
        // line 4
        echo "<div id=\"float-consult\" class=\"float-consult hidden-xs\">
  <div class=\"btn-group-vertical\">

    ";
        // line 7
        $context["break"] = 0;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            if ((( !twig_test_empty($this->getAttribute($context["qq"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qq"], "number", array()))) && ((isset($context["break"]) ? $context["break"] : $this->getContext($context, "break")) == 0))) {
                // line 9
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color", array()), "html", null, true);
                echo " float-consult-qq-btn\" data-container=\".float-consult-qq-btn\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.qq_customer_service"), "html", null, true);
                echo "\" data-content-element=\"#consult-qq-content\"><span class=\"es-icon es-icon-qq\"></span></span>
      ";
                // line 10
                $context["break"] = 1;
                // line 11
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $context["break"] = 0;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            if ((( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qqgroup"], "number", array()))) && ((isset($context["break"]) ? $context["break"] : $this->getContext($context, "break")) == 0))) {
                // line 15
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color", array()), "html", null, true);
                echo " float-consult-qqgroup-btn\" data-container=\".float-consult-qqgroup-btn\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.qq_group"), "html", null, true);
                echo "\" data-content-element=\"#consult-qqgroup-content\"><span class=\"es-icon es-icon-friends\"></span></span>
      ";
                // line 16
                $context["break"] = 1;
                // line 17
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    ";
        // line 19
        $context["break"] = 0;
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            if (( !twig_test_empty($this->getAttribute($context["phone"], "name", array())) && ((isset($context["break"]) ? $context["break"] : $this->getContext($context, "break")) == 0))) {
                // line 21
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color", array()), "html", null, true);
                echo " float-consult-phone-btn\" data-container=\".float-consult-phone-btn\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.mobile_group"), "html", null, true);
                echo "\" data-content-element=\"#consult-phone-content\"><span class=\"es-icon es-icon-phone\"></span></span>
      ";
                // line 22
                $context["break"] = 1;
                // line 23
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array()))) {
            // line 26
            echo "      <span class=\"btn btn-consult-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color", array()), "html", null, true);
            echo " float-consult-weixin-btn\" data-container=\".float-consult-weixin-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.weixin-content"), "html", null, true);
            echo "\" data-content-element=\"#consult-weixin-content\"><span class=\"es-icon es-icon-weixin\"></span></span>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array()))) {
            // line 30
            echo "      <span class=\"btn btn-consult-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color", array()), "html", null, true);
            echo " float-consult-email-btn\" data-container=\".float-consult-email-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.email"), "html", null, true);
            echo "\" data-content-element=\"#consult-email-content\"><span class=\"es-icon es-icon-mail\"></span></span>
    ";
        }
        // line 32
        echo "  </div>

  <div class=\"consult-contents\">
    <div id=\"consult-qq-content\">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            if (( !twig_test_empty($this->getAttribute($context["qq"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qq"], "number", array())))) {
                // line 37
                echo "        ";
                if ( !(($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), false)) : (false))) {
                    // line 38
                    echo "        <p>

          <a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                    echo "&site=qq&menu=yes\" >
            <img class=\"mrs\" src=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                    echo "\" alt=\"\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.send_message"), "html", null, true);
                    echo "\" alt=\"\">

            ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "
          </a>
        </p>
        ";
                } else {
                    // line 47
                    echo "          <p>
            <a href=\"";
                    // line 48
                    echo $this->getAttribute($context["qq"], "url", array());
                    echo "\" target=\"_blank\">
            <img class=\"mrs\" src=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                    echo "\" alt=\"\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.send_message"), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "
            </a>
          </p>
        ";
                }
                // line 54
                echo "      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </div>

    <div id=\"consult-qqgroup-content\">
      ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            if (( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qqgroup"], "number", array())))) {
                // line 59
                echo "        <p>
          <span class=\"icon icon-qqgroup color-gray\" style=\"font-size:14px;\"></span>
          ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                echo "
           <br> ";
                // line 63
                echo "
            ";
                // line 64
                if ((($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), "")) : (""))) {
                    // line 65
                    echo "              <p class=\"text-overflow\">
                ";
                    // line 66
                    echo $this->getAttribute($context["qqgroup"], "url", array());
                    echo "
              </p>
            ";
                } else {
                    // line 69
                    echo "              <p class=\"text-overflow\">
                ";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                    echo "
              </p>
            ";
                }
                // line 73
                echo "
        </p>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </div>
    <div id=\"consult-phone-content\">
      <p>
        <strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.time"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "worktime", array()), "html", null, true);
        echo "
      </p>

      ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            if ( !twig_test_empty($this->getAttribute($context["phone"], "name", array()))) {
                // line 83
                echo "        <p>
          ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
                echo "： ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                echo "
        </p>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </div>


    <div id=\"consult-weixin-content\">
      <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array())), "html", null, true);
        echo "\" class=\"qrcode center-block\">
    </div>
    <div id=\"consult-email-content\">
      <a href=\"mailto:";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array()), "html", null, true);
        echo "</a>
    </div>
  </div>
</div>
";
        
        $__internal_6140e64a9b31b2f8e32be9c710ea9359d83c96d7cb3d9e3e25c15951b6ab97a1->leave($__internal_6140e64a9b31b2f8e32be9c710ea9359d83c96d7cb3d9e3e25c15951b6ab97a1_prof);

    }

    public function getTemplateName()
    {
        return "float-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 94,  290 => 91,  284 => 87,  272 => 84,  269 => 83,  264 => 82,  256 => 79,  251 => 76,  242 => 73,  236 => 70,  233 => 69,  227 => 66,  224 => 65,  222 => 64,  219 => 63,  215 => 61,  211 => 59,  206 => 58,  201 => 55,  194 => 54,  187 => 50,  181 => 49,  177 => 48,  174 => 47,  167 => 43,  160 => 41,  156 => 40,  152 => 38,  149 => 37,  144 => 36,  138 => 32,  130 => 30,  128 => 29,  125 => 28,  117 => 26,  115 => 25,  112 => 24,  105 => 23,  103 => 22,  96 => 21,  90 => 20,  88 => 19,  85 => 18,  78 => 17,  76 => 16,  69 => 15,  63 => 14,  61 => 13,  58 => 12,  51 => 11,  49 => 10,  42 => 9,  36 => 8,  34 => 7,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do script(['app/js/float-consult/index.js'])  %}

{% set consult = setting('consult') %}
<div id=\"float-consult\" class=\"float-consult hidden-xs\">
  <div class=\"btn-group-vertical\">

    {% set break = 0 %}
    {% for qq in consult.qq if qq.name is not empty and qq.number is not empty and break == 0 %}
      <span class=\"btn btn-consult-{{consult.color}} float-consult-qq-btn\" data-container=\".float-consult-qq-btn\" data-title=\"{{'customer_service.qq_customer_service'|trans}}\" data-content-element=\"#consult-qq-content\"><span class=\"es-icon es-icon-qq\"></span></span>
      {% set break = 1 %}
    {% endfor %}

    {% set break = 0 %}
    {% for qqgroup in consult.qqgroup if qqgroup.name is not empty and qqgroup.number is not empty and break == 0 %}
      <span class=\"btn btn-consult-{{consult.color}} float-consult-qqgroup-btn\" data-container=\".float-consult-qqgroup-btn\" data-title=\"{{'customer_service.qq_group'|trans}}\" data-content-element=\"#consult-qqgroup-content\"><span class=\"es-icon es-icon-friends\"></span></span>
      {% set break = 1 %}
    {% endfor %}

    {% set break = 0 %}
    {% for phone in consult.phone if phone.name is not empty and break == 0 %}
      <span class=\"btn btn-consult-{{consult.color}} float-consult-phone-btn\" data-container=\".float-consult-phone-btn\" data-title=\"{{'customer_service.mobile_group'|trans}}\" data-content-element=\"#consult-phone-content\"><span class=\"es-icon es-icon-phone\"></span></span>
      {% set break = 1 %}
    {% endfor %}

    {% if consult.webchatURI is not empty %}
      <span class=\"btn btn-consult-{{consult.color}} float-consult-weixin-btn\" data-container=\".float-consult-weixin-btn\" data-title=\"{{'customer_service.weixin-content'|trans}}\" data-content-element=\"#consult-weixin-content\"><span class=\"es-icon es-icon-weixin\"></span></span>
    {% endif %}

    {% if consult.email is not empty %}
      <span class=\"btn btn-consult-{{consult.color}} float-consult-email-btn\" data-container=\".float-consult-email-btn\" data-title=\"{{'customer_service.email'|trans}}\" data-content-element=\"#consult-email-content\"><span class=\"es-icon es-icon-mail\"></span></span>
    {% endif %}
  </div>

  <div class=\"consult-contents\">
    <div id=\"consult-qq-content\">
      {% for qq in consult.qq if qq.name is not empty and qq.number is not empty %}
        {% if not qq.url|default(false) %}
        <p>

          <a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin={{ qq.number }}&site=qq&menu=yes\" >
            <img class=\"mrs\" src=\"{{asset(\"assets/v2/img/bar_qq.png\")}}\" alt=\"\" title=\"{{'customer_service.send_message'|trans}}\" alt=\"\">

            {{ qq.name }}
          </a>
        </p>
        {% else %}
          <p>
            <a href=\"{{ qq.url|raw }}\" target=\"_blank\">
            <img class=\"mrs\" src=\"{{asset(\"assets/v2/img/bar_qq.png\")}}\" alt=\"\" title=\"{{'customer_service.send_message'|trans}}\" alt=\"\">
              {{ qq.name }}
            </a>
          </p>
        {% endif %}
      {% endfor %}
    </div>

    <div id=\"consult-qqgroup-content\">
      {% for qqgroup in consult.qqgroup if qqgroup.name is not empty and qqgroup.number is not empty %}
        <p>
          <span class=\"icon icon-qqgroup color-gray\" style=\"font-size:14px;\"></span>
          {{qqgroup.name}}
           <br> {# <span class=\"text-info\" style=\"margin-left:20px;\">{{qqgroup.number}}</span> #}

            {% if  qqgroup.url|default('') %}
              <p class=\"text-overflow\">
                {{ qqgroup.url|raw }}
              </p>
            {% else %}
              <p class=\"text-overflow\">
                {{ qqgroup.number }}
              </p>
            {% endif %}

        </p>
      {% endfor %}
    </div>
    <div id=\"consult-phone-content\">
      <p>
        <strong>{{'customer_service.time'|trans}}</strong> {{ consult.worktime }}
      </p>

      {% for phone in consult.phone if phone.name is not empty %}
        <p>
          {{ phone.name }}： {{ phone.number }}
        </p>
      {% endfor %}
    </div>


    <div id=\"consult-weixin-content\">
      <img src=\"{{ asset(consult.webchatURI) }}\" class=\"qrcode center-block\">
    </div>
    <div id=\"consult-email-content\">
      <a href=\"mailto:{{consult.email}}\">{{ consult.email }}</a>
    </div>
  </div>
</div>
", "float-consult.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\float-consult.html.twig");
    }
}
