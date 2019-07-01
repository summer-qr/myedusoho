<?php

/* org/org-tree-select.html.twig */
class __TwigTemplate_cfe98ff4d2609909e5ade5d5849e11dc4b3fbbbfaa04efaeaa2c9daabf144f1d extends Twig_Template
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
        $__internal_70fb2222027738561966811357cef245a72d117bab917d18716d0e4571458738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fb2222027738561966811357cef245a72d117bab917d18716d0e4571458738->enter($__internal_70fb2222027738561966811357cef245a72d117bab917d18716d0e4571458738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/org-tree-select.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "  ";
            $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")), null)) : (null));
            // line 3
            echo "
  ";
            // line 4
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) == "modal")) {
                // line 5
                echo "    <script>app.load('topxiaadminbundle/controller/widget/category-select')</script>
  ";
            } else {
                // line 7
                echo "    ";
                $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiaadminbundle/controller/widget/category-select");
                // line 8
                echo "  ";
            }
            // line 9
            echo "
  <style>
    .tree-select {
      min-width: 120px;
    }
  </style>

  ";
            // line 16
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter((isset($context["colmd"]) ? $context["colmd"] : $this->getContext($context, "colmd")), 8)) : (8));
            // line 17
            echo "  ";
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter((isset($context["lablecolmd"]) ? $context["lablecolmd"] : $this->getContext($context, "lablecolmd")), 2)) : (2));
            // line 18
            echo "  ";
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter((isset($context["nocolmd"]) ? $context["nocolmd"] : $this->getContext($context, "nocolmd")), false)) : (false));
            // line 19
            echo "  ";
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter((isset($context["inputClass"]) ? $context["inputClass"] : $this->getContext($context, "inputClass")), "")) : (""));
            // line 20
            echo "
  ";
            // line 21
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter((isset($context["orgCode"]) ? $context["orgCode"] : $this->getContext($context, "orgCode")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "orgCode", array())));
            // line 22
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) ? (null) : ((isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : $this->getContext($context, "currentOrgCode"))))));
            // line 23
            echo "
    <div class=\"form-group ";
            // line 24
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) == "list")) {
                echo "controls";
            }
            echo "\">
      ";
            // line 25
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) != "list")) {
                // line 26
                echo "      <label class=\"";
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : $this->getContext($context, "nocolmd"))) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["lablecolmd"]) ? $context["lablecolmd"] : $this->getContext($context, "lablecolmd")), "html", null, true);
                }
                echo " control-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org"), "html", null, true);
                echo "</label>
      <div class=\"";
                // line 27
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : $this->getContext($context, "nocolmd"))) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["colmd"]) ? $context["colmd"] : $this->getContext($context, "colmd")), "html", null, true);
                    echo " ";
                }
                echo "  controls\">
      ";
            }
            // line 29
            echo "
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["inputClass"]) ? $context["inputClass"] : $this->getContext($context, "inputClass")), "html", null, true);
            echo "\">
        <option value=";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")), 0, array()), "orgCode", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")), 0, array()), "name", array()), "html", null, true);
            echo "</option>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 33
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
            // line 35
            echo "      </select>

      ";
            // line 37
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) != "list")) {
                // line 38
                echo "      </div>
      ";
            }
            // line 40
            echo "    </div>
 ";
        }
        
        $__internal_70fb2222027738561966811357cef245a72d117bab917d18716d0e4571458738->leave($__internal_70fb2222027738561966811357cef245a72d117bab917d18716d0e4571458738_prof);

    }

    public function getTemplateName()
    {
        return "org/org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 40,  148 => 38,  146 => 37,  142 => 35,  117 => 33,  113 => 32,  107 => 31,  103 => 30,  100 => 29,  91 => 27,  81 => 26,  79 => 25,  73 => 24,  70 => 23,  67 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  51 => 16,  42 => 9,  39 => 8,  36 => 7,  32 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
  {% set modal = modal|default(null) %}

  {% if modal == 'modal' %}
    <script>app.load('topxiaadminbundle/controller/widget/category-select')</script>
  {% else %}
    {% do load_script('topxiaadminbundle/controller/widget/category-select') %}
  {% endif %}

  <style>
    .tree-select {
      min-width: 120px;
    }
  </style>

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

      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select {{inputClass}}\">
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
", "org/org-tree-select.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\org\\org-tree-select.html.twig");
    }
}
