<?php

/* org/org-tree-select-webpack.html.twig */
class __TwigTemplate_e307f6b35483e91a21a90a820ea1db94deae07dbb473dc3b3d57bbd5fe4efcb7 extends Twig_Template
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
        $__internal_ddcfd94dea560a8564941bb2d579ca866f60dff2a9624911b69d2c222aeefe97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcfd94dea560a8564941bb2d579ca866f60dff2a9624911b69d2c222aeefe97->enter($__internal_ddcfd94dea560a8564941bb2d579ca866f60dff2a9624911b69d2c222aeefe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/org-tree-select-webpack.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "
  ";
            // line 3
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/select2.js", 1 => "app/js/org/org-tree-select/index.js"));
            // line 4
            echo "  
  ";
            // line 5
            $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")), null)) : (null));
            // line 6
            echo "
  ";
            // line 7
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter((isset($context["colmd"]) ? $context["colmd"] : $this->getContext($context, "colmd")), 8)) : (8));
            // line 8
            echo "  ";
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter((isset($context["lablecolmd"]) ? $context["lablecolmd"] : $this->getContext($context, "lablecolmd")), 2)) : (2));
            // line 9
            echo "  ";
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter((isset($context["nocolmd"]) ? $context["nocolmd"] : $this->getContext($context, "nocolmd")), false)) : (false));
            // line 10
            echo "  ";
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter((isset($context["inputClass"]) ? $context["inputClass"] : $this->getContext($context, "inputClass")), "")) : (""));
            // line 11
            echo "
  ";
            // line 12
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter((isset($context["orgCode"]) ? $context["orgCode"] : $this->getContext($context, "orgCode")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "orgCode", array())));
            // line 13
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) ? (null) : ((isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : $this->getContext($context, "currentOrgCode"))))));
            // line 14
            echo "
    <div class=\"form-group ";
            // line 15
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) == "list")) {
                echo "controls";
            }
            echo "\">
      ";
            // line 16
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) != "list")) {
                // line 17
                echo "      <label class=\"";
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : $this->getContext($context, "nocolmd"))) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["lablecolmd"]) ? $context["lablecolmd"] : $this->getContext($context, "lablecolmd")), "html", null, true);
                }
                echo " control-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org"), "html", null, true);
                echo "</label>
      <div class=\"";
                // line 18
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : $this->getContext($context, "nocolmd"))) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["colmd"]) ? $context["colmd"] : $this->getContext($context, "colmd")), "html", null, true);
                    echo " ";
                }
                echo "  controls\">
      ";
            }
            // line 20
            echo "
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control js-org-tree-select ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["inputClass"]) ? $context["inputClass"] : $this->getContext($context, "inputClass")), "html", null, true);
            echo "\">
        <option value=";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")), 0, array()), "orgCode", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")), 0, array()), "name", array()), "html", null, true);
            echo "</option>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 24
                echo "          <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "orgCode", array()), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["org"], "orgCode", array()) == (isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : $this->getContext($context, "currentOrgCode")))) {
                    echo "selected";
                }
                echo ">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["org"], "depth", array()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($this->getAttribute($context["org"], "depth", array()) > 1)) {
                        echo "　";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "name", array()), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      </select>

      ";
            // line 28
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) != "list")) {
                // line 29
                echo "      </div>
      ";
            }
            // line 31
            echo "    </div>
 ";
        }
        
        $__internal_ddcfd94dea560a8564941bb2d579ca866f60dff2a9624911b69d2c222aeefe97->leave($__internal_ddcfd94dea560a8564941bb2d579ca866f60dff2a9624911b69d2c222aeefe97_prof);

    }

    public function getTemplateName()
    {
        return "org/org-tree-select-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 31,  134 => 29,  132 => 28,  128 => 26,  103 => 24,  99 => 23,  93 => 22,  89 => 21,  86 => 20,  77 => 18,  67 => 17,  65 => 16,  59 => 15,  56 => 14,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if setting('magic.enable_org', '0') %}

  {% do script(['libs/select2.js', 'app/js/org/org-tree-select/index.js']) %}
  
  {% set modal = modal|default(null) %}

  {% set colmd = colmd|default(8) %}
  {% set lablecolmd = lablecolmd|default(2) %}
  {% set nocolmd = nocolmd|default(false) %}
  {% set inputClass = inputClass|default('') %}

  {% set currentOrgCode = orgCode|default(app.user.orgCode) %}
  {% set currentOrgTree = data('OrgTree',{orgCode: ('ROLE_SUPER_ADMIN' in app.user.roles) ? null : currentOrgCode }) %}

    <div class=\"form-group {% if modal == 'list' %}controls{% endif %}\">
      {% if modal != 'list' %}
      <label class=\"{% if not nocolmd %} col-md-{{lablecolmd}}{% endif %} control-label\">{{'site.org'|trans}}</label>
      <div class=\"{% if not nocolmd %} col-md-{{colmd}} {% endif %}  controls\">
      {% endif %}

      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control js-org-tree-select {{inputClass}}\">
        <option value={{ currentOrgTree.0.orgCode }}>{{ currentOrgTree.0.name }}</option>
        {% for org in currentOrgTree %}
          <option value={{ org.orgCode }} {% if org.orgCode == currentOrgCode  %}selected{% endif %}>{% for i in 1..(org.depth-1) if org.depth > 1 %}　{% endfor %}{{ org.name }}</option>
        {% endfor %}
      </select>

      {% if modal != 'list' %}
      </div>
      {% endif %}
    </div>
 {% endif %}
", "org/org-tree-select-webpack.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\org\\org-tree-select-webpack.html.twig");
    }
}
