<?php

/* org/course-create-org-tree-select.html.twig */
class __TwigTemplate_037caf46b51810eae16470a59cc12007e6b5559ee7c016587eb6989afc03fc9e extends Twig_Template
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
        $__internal_06aeefaf941f30e0972c6fa2546f4f61dbb64bb4740d7881f914dd7eb9e56591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06aeefaf941f30e0972c6fa2546f4f61dbb64bb4740d7881f914dd7eb9e56591->enter($__internal_06aeefaf941f30e0972c6fa2546f4f61dbb64bb4740d7881f914dd7eb9e56591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "org/course-create-org-tree-select.html.twig"));

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
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter((isset($context["orgCode"]) ? $context["orgCode"] : $this->getContext($context, "orgCode")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "orgCode", array())));
            // line 6
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) ? (null) : ((isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : $this->getContext($context, "currentOrgCode"))))));
            // line 7
            echo "  <div class=\"course-title form-group\">
    <div class=\"mlm course-org-title controls-label text-lg\">
      <div class=\"course-piece title\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org"), "html", null, true);
            echo "
      </div>
    </div>
    <div class=\"col-md-10 course-title-input\">
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control js-org-tree-select\">
        <option value=";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")), 0, array()), "orgCode", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")), 0, array()), "name", array()), "html", null, true);
            echo "</option>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 17
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
            // line 19
            echo "      </select>
    </div>
  </div>
 ";
        }
        
        $__internal_06aeefaf941f30e0972c6fa2546f4f61dbb64bb4740d7881f914dd7eb9e56591->leave($__internal_06aeefaf941f30e0972c6fa2546f4f61dbb64bb4740d7881f914dd7eb9e56591_prof);

    }

    public function getTemplateName()
    {
        return "org/course-create-org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  60 => 17,  56 => 16,  50 => 15,  42 => 10,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
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

  {% set currentOrgCode = orgCode|default(app.user.orgCode) %}
  {% set currentOrgTree = data('OrgTree',{orgCode: ('ROLE_SUPER_ADMIN' in app.user.roles) ? null : currentOrgCode }) %}
  <div class=\"course-title form-group\">
    <div class=\"mlm course-org-title controls-label text-lg\">
      <div class=\"course-piece title\">
        {{'site.org'|trans}}
      </div>
    </div>
    <div class=\"col-md-10 course-title-input\">
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control js-org-tree-select\">
        <option value={{ currentOrgTree.0.orgCode }}>{{ currentOrgTree.0.name }}</option>
        {% for org in currentOrgTree %}
          <option value={{ org.orgCode }} {% if org.orgCode == currentOrgCode  %}selected{% endif %}>{% for i in 1..(org.depth-1) if org.depth > 1 %}　{% endfor %}{{ org.name }}</option>
        {% endfor %}
      </select>
    </div>
  </div>
 {% endif %}
", "org/course-create-org-tree-select.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\org\\course-create-org-tree-select.html.twig");
    }
}
