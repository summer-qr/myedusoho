<?php

/* export/export-btn.html.twig */
class __TwigTemplate_67567ae0e5f22dfd7070fe6819ce9cb5e9e670ce797d73134bddc17ddf0c201e extends Twig_Template
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
        $__internal_22cfe1c318c85f1ecbb407c196375713f56ac057b3d55f11e8c91680f49483d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cfe1c318c85f1ecbb407c196375713f56ac057b3d55f11e8c91680f49483d1->enter($__internal_22cfe1c318c85f1ecbb407c196375713f56ac057b3d55f11e8c91680f49483d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "export/export-btn.html.twig"));

        // line 1
        echo "<a class=\"";
        if ( !((array_key_exists("showDownLoadText", $context)) ? (_twig_default_filter((isset($context["showDownLoadText"]) ? $context["showDownLoadText"] : $this->getContext($context, "showDownLoadText")), 1)) : (1))) {
            echo "color-primary";
        } else {
            echo " cd-btn ";
        }
        echo " mhs ";
        echo twig_escape_filter($this->env, ((array_key_exists("exportClass", $context)) ? (_twig_default_filter((isset($context["exportClass"]) ? $context["exportClass"] : $this->getContext($context, "exportClass")), "cd-btn-primary")) : ("cd-btn-primary")), "html", null, true);
        echo " js-export-btn\"
   href=\"javascript:;\"
   data-try-url=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("try_export", array("name" => (isset($context["exportFileName"]) ? $context["exportFileName"] : $this->getContext($context, "exportFileName")), "limit" => ((array_key_exists("exportLimit", $context)) ? (_twig_default_filter((isset($context["exportLimit"]) ? $context["exportLimit"] : $this->getContext($context, "exportLimit")), "")) : ("")))), "html", null, true);
        echo "\"
   data-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export", array("name" => (isset($context["exportFileName"]) ? $context["exportFileName"] : $this->getContext($context, "exportFileName")))), "html", null, true);
        echo "\"
   data-pre-url=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pre_export", array("name" => (isset($context["exportFileName"]) ? $context["exportFileName"] : $this->getContext($context, "exportFileName")))), "html", null, true);
        echo "\"
   data-loading-text=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.export.submiting"), "html", null, true);
        echo "\"
   data-target-form=\"#";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["targetFormId"]) ? $context["targetFormId"] : $this->getContext($context, "targetFormId")), "html", null, true);
        echo "\"
>
    <i class=\"es-icon es-icon-filedownload cd-text-sm\"></i>
    ";
        // line 10
        if (((array_key_exists("showDownLoadText", $context)) ? (_twig_default_filter((isset($context["showDownLoadText"]) ? $context["showDownLoadText"] : $this->getContext($context, "showDownLoadText")), 1)) : (1))) {
            // line 11
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "form.btn.export")) : ("form.btn.export"))), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "</a>

<div id=\"export-modal\" class=\"hide\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 class=\"modal-title\" data-success=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file.download.finish"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file.download.start"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"progress progress-striped active\">
                    <div  id=\"progress-bar\" class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 31
        if (((array_key_exists("exportWebpack", $context)) ? (_twig_default_filter((isset($context["exportWebpack"]) ? $context["exportWebpack"] : $this->getContext($context, "exportWebpack")))) : (""))) {
            // line 32
            echo "    ";
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/exporter/index.js"));
        } else {
            // line 34
            echo "    ";
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiaadminbundle/controller/export/export.js");
        }
        // line 36
        echo "
";
        
        $__internal_22cfe1c318c85f1ecbb407c196375713f56ac057b3d55f11e8c91680f49483d1->leave($__internal_22cfe1c318c85f1ecbb407c196375713f56ac057b3d55f11e8c91680f49483d1_prof);

    }

    public function getTemplateName()
    {
        return "export/export-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  95 => 34,  91 => 32,  89 => 31,  73 => 20,  64 => 13,  58 => 11,  56 => 10,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"{% if not showDownLoadText|default(1)  %}color-primary{% else %} cd-btn {% endif %} mhs {{ exportClass|default('cd-btn-primary') }} js-export-btn\"
   href=\"javascript:;\"
   data-try-url=\"{{ path('try_export', {'name':exportFileName, 'limit': exportLimit|default('')}) }}\"
   data-url=\"{{ path('export',{'name':exportFileName}) }}\"
   data-pre-url=\"{{ path('pre_export',{'name':exportFileName}) }}\"
   data-loading-text=\"{{'form.btn.export.submiting'|trans}}\"
   data-target-form=\"#{{ targetFormId }}\"
>
    <i class=\"es-icon es-icon-filedownload cd-text-sm\"></i>
    {% if showDownLoadText|default(1) %}
      {{ text|default('form.btn.export')|trans }}
    {% endif %}
</a>

<div id=\"export-modal\" class=\"hide\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 class=\"modal-title\" data-success=\"{{ 'file.download.finish'|trans }}\">{{ 'file.download.start'|trans }}</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"progress progress-striped active\">
                    <div  id=\"progress-bar\" class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

{% if exportWebpack|default() %}
    {% do script(['app/js/exporter/index.js']) %}
{% else %}
    {% do load_script('topxiaadminbundle/controller/export/export.js') %}
{% endif %}

", "export/export-btn.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\export\\export-btn.html.twig");
    }
}
