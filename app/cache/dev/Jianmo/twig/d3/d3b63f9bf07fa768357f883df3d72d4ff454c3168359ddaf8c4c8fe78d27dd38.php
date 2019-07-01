<?php

/* admin/article/index.html.twig */
class __TwigTemplate_eb0e48a6fd6e6106c9719db18bcbd6a2eee1c771769791c8534351bc9d440246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/article/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c4cf989f69aa68f49342aef2a2328edb58d0da7808f1bd49bcc58befce43428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4cf989f69aa68f49342aef2a2328edb58d0da7808f1bd49bcc58befce43428->enter($__internal_1c4cf989f69aa68f49342aef2a2328edb58d0da7808f1bd49bcc58befce43428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/article/index.html.twig"));

        // line 2
        $context["script_controller"] = "article/list";
        // line 3
        $context["menu"] = "admin_operation_article_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c4cf989f69aa68f49342aef2a2328edb58d0da7808f1bd49bcc58befce43428->leave($__internal_1c4cf989f69aa68f49342aef2a2328edb58d0da7808f1bd49bcc58befce43428_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_03cab48454d8d1043733f29b69058e9dd040fe0730ec65b512262c05cd8e0389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cab48454d8d1043733f29b69058e9dd040fe0730ec65b512262c05cd8e0389->enter($__internal_03cab48454d8d1043733f29b69058e9dd040fe0730ec65b512262c05cd8e0389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<form class=\"well well-sm form-inline\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article");
        echo "\">
  ";
        // line 7
        $this->loadTemplate("org/org-tree-select.html.twig", "admin/article/index.html.twig", 7)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 8
        echo "  <div class=\"form-group\">
    <select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\">
      <option value=\"0\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.category_option"), "html", null, true);
        echo "</option>
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : $this->getContext($context, "categoryTree")));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 12
            echo "        <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["tree"], "id", array()) == (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")))) {
                echo "selected";
            }
            echo ">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["tree"], "depth", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["tree"], "depth", array()) > 1)) {
                    echo "　";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "name", array()), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </select>
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.keywords.placeholer"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"property\">
      ";
        // line 21
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("articleProperty"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "property"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.property_option"));
        echo "
    </select>
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"status\">
      ";
        // line 26
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("articleStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.status_option"));
        echo "
    </select>
  </div>
  <button class=\"btn btn-primary\" type=\"submit\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
</form>

<div id=\"aticle-table-container\">

  <table class=\"table table-hover table-striped\" id=\"article-table\">
    <thead>
      <tr>
        <th><input type=\"checkbox\"  data-role=\"batch-select\" id=\"batch-select\"> ID</th>
        <th width=\"25%\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.article_title_th"), "html", null, true);
        echo "</th>
        ";
        // line 39
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/article/index.html.twig", 39)->display($context);
        // line 40
        echo "        <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.category_th"), "html", null, true);
        echo "</th>
        <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.updatedTime_th"), "html", null, true);
        echo "</th>
        <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.property_th"), "html", null, true);
        echo "
          <a class=\"glyphicon glyphicon-question-sign text-muted pull-center \" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\"></a>
          <div id=\"article-property-tips-html\" style=\"display:none;\">
          \t";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.article_property_tooltip");
        echo "
          </div>
        </th>
        <th>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.status_th"), "html", null, true);
        echo "</th>
        <th width=\"10%\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.operation_th"), "html", null, true);
        echo "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 53
        if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
            // line 54
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 55
                echo "          ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 56
                echo "          ";
                $this->loadTemplate("admin/article/article-tr.html.twig", "admin/article/index.html.twig", 56)->display($context);
                // line 57
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "      ";
        } else {
            // line 59
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        // line 61
        echo "    </tbody>
  </table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.select_all"), "html", null, true);
        echo "</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_article.article_title"), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_delete");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
        echo "</button>
    ";
        // line 66
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/article/index.html.twig", 66)->display(array_merge($context, array("module" => "article", "formId" => "article-table", "generate" => "no-generate")));
        // line 67
        echo "  </div>
</div>

";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_03cab48454d8d1043733f29b69058e9dd040fe0730ec65b512262c05cd8e0389->leave($__internal_03cab48454d8d1043733f29b69058e9dd040fe0730ec65b512262c05cd8e0389_prof);

    }

    public function getTemplateName()
    {
        return "admin/article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 70,  235 => 67,  233 => 66,  225 => 65,  221 => 64,  216 => 61,  210 => 59,  207 => 58,  193 => 57,  190 => 56,  187 => 55,  169 => 54,  167 => 53,  160 => 49,  156 => 48,  150 => 45,  144 => 42,  140 => 41,  135 => 40,  133 => 39,  129 => 38,  117 => 29,  111 => 26,  103 => 21,  94 => 17,  89 => 14,  64 => 12,  60 => 11,  56 => 10,  52 => 8,  50 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}
{% set script_controller = 'article/list' %}
{% set menu = 'admin_operation_article_manage' %}

{% block main %}
<form class=\"well well-sm form-inline\" action=\"{{ path('admin_article') }}\">
  {% include 'org/org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}
  <div class=\"form-group\">
    <select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\">
      <option value=\"0\">{{'admin.operation_article.category_option'|trans}}</option>
      {% for tree in categoryTree %}
        <option value={{ tree.id }} {% if tree.id == categoryId  %}selected{% endif%}>{% for i in 1..(tree.depth-1) if tree.depth > 1 %}　{% endfor %}{{ tree.name }}</option>
      {% endfor %}
    </select>
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"{{'admin.operation_article.keywords.placeholer'|trans}}\" value=\"{{ app.request.query.get('keywords') }}\">
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"property\">
      {{ select_options(dict('articleProperty'), app.request.query.get('property'), 'admin.operation_article.property_option'|trans) }}
    </select>
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"status\">
      {{ select_options(dict('articleStatus'), app.request.query.get('status'), 'admin.operation_article.status_option'|trans) }}
    </select>
  </div>
  <button class=\"btn btn-primary\" type=\"submit\">{{'form.btn.search'|trans}}</button>
</form>

<div id=\"aticle-table-container\">

  <table class=\"table table-hover table-striped\" id=\"article-table\">
    <thead>
      <tr>
        <th><input type=\"checkbox\"  data-role=\"batch-select\" id=\"batch-select\"> ID</th>
        <th width=\"25%\">{{'admin.operation_article.article_title_th'|trans}}</th>
        {% include 'org/parts/table-thead-tr.html.twig' %}
        <th>{{'admin.operation_article.category_th'|trans}}</th>
        <th>{{'admin.operation_article.updatedTime_th'|trans}}</th>
        <th>{{'admin.operation_article.property_th'|trans}}
          <a class=\"glyphicon glyphicon-question-sign text-muted pull-center \" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\"></a>
          <div id=\"article-property-tips-html\" style=\"display:none;\">
          \t{{ 'admin.operation_article.article_property_tooltip'|trans|raw }}
          </div>
        </th>
        <th>{{'admin.operation_article.status_th'|trans}}</th>
        <th width=\"10%\">{{'admin.operation_article.operation_th'|trans}}</th>
      </tr>
    </thead>
    <tbody>
      {% if articles %}
        {% for article in articles %}
          {% set category = categories[article.categoryId]|default(null) %}
          {% include 'admin/article/article-tr.html.twig' %}
        {% endfor %}
      {% else %}
        <tr><td colspan=\"20\"><div class=\"empty\">{{'site.datagrid.empty'|trans}}</div></td></tr>
      {% endif %}
    </tbody>
  </table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> {{'admin.operation_article.select_all'|trans}}</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"{{'admin.operation_article.article_title'|trans}}\" data-url=\"{{ path('admin_article_delete') }}\">{{'form.btn.delete'|trans}}</button>
    {% include 'org/batch-update-org-btn.html.twig' with {module:'article', formId:'article-table', generate:\"no-generate\"} %}
  </div>
</div>

{{ admin_macro.paginator(paginator) }}

{% endblock %}", "admin/article/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\article\\index.html.twig");
    }
}
