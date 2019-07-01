<?php

/* admin/navigation/tbody.html.twig */
class __TwigTemplate_c361b901da7a0e0f3035b5d0c82bc57a562317b6c17a0b4c996f9d02d9e3ef97 extends Twig_Template
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
        $__internal_a53f63301d777eaca94fea0e75febe58d5e42a024b710d3c50200a4bd0b6770a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53f63301d777eaca94fea0e75febe58d5e42a024b710d3c50200a4bd0b6770a->enter($__internal_a53f63301d777eaca94fea0e75febe58d5e42a024b710d3c50200a4bd0b6770a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/navigation/tbody.html.twig"));

        // line 1
        echo "<tbody data-update-seqs-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_seqs_update");
        echo "\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["navigation"]) {
            // line 3
            echo "\t\t<tr class=\"treegrid-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["navigation"], "parentId", array()) != 0)) {
                echo "treegrid-parent-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "parentId", array()), "html", null, true);
            }
            echo " ";
            if (($this->getAttribute($context["navigation"], "parentId", array()) == 0)) {
                echo "has-subItems";
            } else {
                echo " child";
            }
            echo "\" id=\"navigations-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\" data-parent-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "parentId", array()), "html", null, true);
            echo "\">
\t\t  <td class=\"sort-handle\" style=\"vertical-align: middle; ";
            // line 4
            if (($this->getAttribute($context["navigation"], "parentId", array()) != 0)) {
                echo "padding-left: 30px";
            }
            echo "\">
        ";
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->navigationUrlFilter($this->getAttribute($context["navigation"], "url", array())), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "name", array()), "html", null, true);
            echo " </a>
      </td>
\t\t  <td>
\t\t\t\t";
            // line 11
            if (($this->getAttribute($context["navigation"], "isNewWin", array()) == 0)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.isNewWin.no"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.isNewWin.yes"), "html", null, true);
            }
            // line 12
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 14
            if (($this->getAttribute($context["navigation"], "isOpen", array()) == 1)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status.open"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status.closed"), "html", null, true);
            }
            // line 15
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 17
            if ((($this->getAttribute($context["navigation"], "type", array()) == "top") && ($this->getAttribute($context["navigation"], "parentId", array()) == 0))) {
                // line 18
                echo "\t        <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_create", array("type" => $this->getAttribute($context["navigation"], "type", array()), "parentId" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.add_child_menu_btn"), "html", null, true);
                echo "</button>
        ";
            }
            // line 20
            echo "          <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_update", array("id" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.edit_btn"), "html", null, true);
            echo "</button>
\t        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_delete", array("id" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
            echo "</button>
\t\t   </td>
\t\t </tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
</tbody>";
        
        $__internal_a53f63301d777eaca94fea0e75febe58d5e42a024b710d3c50200a4bd0b6770a->leave($__internal_a53f63301d777eaca94fea0e75febe58d5e42a024b710d3c50200a4bd0b6770a_prof);

    }

    public function getTemplateName()
    {
        return "admin/navigation/tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 27,  119 => 25,  106 => 21,  99 => 20,  91 => 18,  89 => 17,  85 => 15,  79 => 14,  75 => 12,  69 => 11,  60 => 8,  54 => 4,  32 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tbody data-update-seqs-url=\"{{ path('admin_navigation_seqs_update') }}\">
  {% for navigation in navigations %}
\t\t<tr class=\"treegrid-{{ navigation.id }} {% if navigation.parentId != 0 %}treegrid-parent-{{ navigation.parentId }}{% endif %} {% if navigation.parentId == 0 %}has-subItems{% else %} child{% endif %}\" id=\"navigations-tr-{{ navigation.id }}\" data-id=\"{{ navigation.id }}\" data-parent-id=\"{{ navigation.parentId }}\">
\t\t  <td class=\"sort-handle\" style=\"vertical-align: middle; {% if navigation.parentId != 0 %}padding-left: 30px{% endif %}\">
        {# {% if navigation.parentId == 0 %}
          <span class=\"glyphicon glyphicon-resize-vertical\"></span>
        {% endif %} #}
        <a href=\"{{navigation.url|navigation_url}}\" target=\"_blank\"> {{navigation.name}} </a>
      </td>
\t\t  <td>
\t\t\t\t{% if navigation.isNewWin == 0 %}{{'admin.setting.navigation.isNewWin.no'|trans}}{% else %}{{'admin.setting.navigation.isNewWin.yes'|trans}}{% endif %}
  \t\t</td>
\t\t  <td>
        {% if navigation.isOpen == 1 %}{{'admin.setting.navigation.status.open'|trans}}{% else %}{{'admin.setting.navigation.status.closed'|trans}}{% endif %}
  \t\t</td>
\t\t  <td>
        {% if navigation.type == 'top' and navigation.parentId == 0 %}
\t        <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"{{ path('admin_navigation_create', {type: navigation.type, parentId: navigation.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\">{{'admin.setting.navigation.add_child_menu_btn'|trans}}</button>
        {% endif %}
          <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"{{ path('admin_navigation_update', {id:navigation.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\">{{'admin.setting.navigation.edit_btn'|trans}}</button>
\t        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"{{ path('admin_navigation_delete', {id:navigation.id}) }}\" data-target=\"{{ navigation.id }}\">{{'form.btn.delete'|trans}}</button>
\t\t   </td>
\t\t </tr>
\t{% else %}
\t  <tr><td colspan=\"20\"><div class=\"empty\">{{'site.datagrid.empty'|trans}}</div></td></tr>
  {% endfor %}

</tbody>", "admin/navigation/tbody.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\navigation\\tbody.html.twig");
    }
}
