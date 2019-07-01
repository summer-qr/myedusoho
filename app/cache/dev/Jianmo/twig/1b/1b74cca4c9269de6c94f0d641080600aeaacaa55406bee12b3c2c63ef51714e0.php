<?php

/* admin/theme/tab-panel/maincolor.html.twig */
class __TwigTemplate_cd6d76d732e00f3f901cac87ae6a6a861cc8d372aa02fc75fcb7de87e410276e extends Twig_Template
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
        $__internal_6108ac0f7c4460ae4c731ff6dc2b250f8cdaa6b5fe13dc70688fbf1a2f738bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6108ac0f7c4460ae4c731ff6dc2b250f8cdaa6b5fe13dc70688fbf1a2f738bda->enter($__internal_6108ac0f7c4460ae4c731ff6dc2b250f8cdaa6b5fe13dc70688fbf1a2f738bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/theme/tab-panel/maincolor.html.twig"));

        // line 1
        $context["themeMainColors"] = array("default" => "#46c37b", "green-light" => "#81d867", "purple" => "#773cec", "purple-light" => "#9e9abd", "orange" => "#ff7200", "orange-light" => "#f9b469", "blue" => "#0081e6", "blue-light" => "#4bbbfa", "red" => "#cf010e", "red-light" => "#fd5f56");
        // line 14
        echo "
";
        // line 15
        $context["navigationColors"] = array("default" => "#212121", "white" => "#fff", "green" => "#46c37b", "green-light" => "#81d867", "purple" => "#773cec", "purple-light" => "#9e9abd", "orange" => "#ff7200", "orange-light" => "#f9b469", "blue" => "#0081e6", "blue-light" => "#4bbbfa", "red" => "#cf010e", "red-light" => "#fd5f56");
        // line 30
        echo "<div class=\"tab-pane\" id=\"maincolor\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.main_color"), "html", null, true);
        echo "
    </div>
    <form class=\"panel-body form-inline radios theme-custom-color-block\">
      <div class=\"form-group\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themeMainColors"]) ? $context["themeMainColors"] : $this->getContext($context, "themeMainColors")));
        foreach ($context['_seq'] as $context["key"] => $context["color"]) {
            // line 38
            echo "          <div class=\"col-lg-3\">
            <label class=\"input-group check-box\">
              <span class=\"input-group-addon\">
                <input type=\"radio\" ";
            // line 41
            if (($context["key"] == (isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor")))) {
                echo "checked=\"checked\" ";
            }
            echo "name=\"maincolor\" value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
              </span>
              <div class=\"mod-cpanel-basic-color\" style=\"background:";
            // line 43
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "; display:table-cell;height:35px\"></div>
            </label>
          </div>        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      </div>
    </form>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.theme.manage.navigation_color_scheme"), "html", null, true);
        echo "</div>
    <form class=\"panel-body form-inline radios theme-custom-navigationcolor-block\">
      <div class=\"form-group\">
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigationColors"]) ? $context["navigationColors"] : $this->getContext($context, "navigationColors")));
        foreach ($context['_seq'] as $context["key"] => $context["color"]) {
            // line 56
            echo "          <div class=\"col-lg-3\">
            <label class=\"input-group check-box\">
              <span class=\"input-group-addon\">
                <input type=\"radio\" ";
            // line 59
            if (($context["key"] == (isset($context["navigationcolor"]) ? $context["navigationcolor"] : $this->getContext($context, "navigationcolor")))) {
                echo "checked=\"checked\" ";
            }
            echo " name=\"navigationcolor\" value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
              </span>
              <div class=\"mod-cpanel-basic-color\" style=\"background:";
            // line 61
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "; display:table-cell;height:35px\"></div>
            </label>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "      </div>
    </form>
  </div>
</div>

";
        // line 70
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiaadminbundle/controller/theme/theme-setting/color.js");
        
        $__internal_6108ac0f7c4460ae4c731ff6dc2b250f8cdaa6b5fe13dc70688fbf1a2f738bda->leave($__internal_6108ac0f7c4460ae4c731ff6dc2b250f8cdaa6b5fe13dc70688fbf1a2f738bda_prof);

    }

    public function getTemplateName()
    {
        return "admin/theme/tab-panel/maincolor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 70,  110 => 65,  100 => 61,  91 => 59,  86 => 56,  82 => 55,  76 => 52,  69 => 47,  59 => 43,  50 => 41,  45 => 38,  41 => 37,  34 => 33,  29 => 30,  27 => 15,  24 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set themeMainColors = {
  'default': '#46c37b', 
  'green-light': '#81d867',
  'purple': '#773cec',
  'purple-light': '#9e9abd',
  'orange': '#ff7200',
  'orange-light': '#f9b469',
  'blue': '#0081e6',
  'blue-light': '#4bbbfa',
  'red': '#cf010e',
  'red-light': '#fd5f56',
  } 
%}

{% set navigationColors = {
  'default': '#212121', 
  'white': '#fff',
  'green': '#46c37b',
  'green-light': '#81d867',
  'purple': '#773cec',
  'purple-light': '#9e9abd',
  'orange': '#ff7200',
  'orange-light': '#f9b469',
  'blue': '#0081e6',
  'blue-light': '#4bbbfa',
  'red': '#cf010e',
  'red-light': '#fd5f56',
  } 
%}
<div class=\"tab-pane\" id=\"maincolor\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
    {{'admin.setting.theme.manage.main_color'|trans}}
    </div>
    <form class=\"panel-body form-inline radios theme-custom-color-block\">
      <div class=\"form-group\">
        {% for key, color in themeMainColors %}
          <div class=\"col-lg-3\">
            <label class=\"input-group check-box\">
              <span class=\"input-group-addon\">
                <input type=\"radio\" {% if key == maincolor %}checked=\"checked\" {% endif %}name=\"maincolor\" value=\"{{ key }}\">
              </span>
              <div class=\"mod-cpanel-basic-color\" style=\"background:{{ color }}; display:table-cell;height:35px\"></div>
            </label>
          </div>        
        {% endfor %}
      </div>
    </form>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">{{'admin.setting.theme.manage.navigation_color_scheme'|trans}}</div>
    <form class=\"panel-body form-inline radios theme-custom-navigationcolor-block\">
      <div class=\"form-group\">
        {% for key, color in navigationColors %}
          <div class=\"col-lg-3\">
            <label class=\"input-group check-box\">
              <span class=\"input-group-addon\">
                <input type=\"radio\" {% if key == navigationcolor %}checked=\"checked\" {% endif %} name=\"navigationcolor\" value=\"{{ key }}\">
              </span>
              <div class=\"mod-cpanel-basic-color\" style=\"background:{{ color }}; display:table-cell;height:35px\"></div>
            </label>
          </div>
        {% endfor %}
      </div>
    </form>
  </div>
</div>

{% do load_script('topxiaadminbundle/controller/theme/theme-setting/color.js') %}", "admin/theme/tab-panel/maincolor.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\theme\\tab-panel\\maincolor.html.twig");
    }
}
