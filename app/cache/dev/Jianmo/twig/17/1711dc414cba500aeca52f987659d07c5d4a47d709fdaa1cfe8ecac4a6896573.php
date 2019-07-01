<?php

/* common/upload-image.html.twig */
class __TwigTemplate_ce1ffac4fc55f953c181591801bb380ac0a29581d1e5d560038a40faa6bfea39 extends Twig_Template
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
        $__internal_a15857c8baef0fe929191661dbd1cadb2f99deeca20da35361d4421549194a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15857c8baef0fe929191661dbd1cadb2f99deeca20da35361d4421549194a5d->enter($__internal_a15857c8baef0fe929191661dbd1cadb2f99deeca20da35361d4421549194a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "common/upload-image.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/upload-image/index.js"));
        // line 2
        echo "
<div class=\"cd-image-upload\">
  <img class=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["imageClass"]) ? $context["imageClass"] : $this->getContext($context, "imageClass")), "html", null, true);
        echo " js-upload-cover\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["targetImg"]) ? $context["targetImg"] : $this->getContext($context, "targetImg")), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) ? $context["imageSrc"] : $this->getContext($context, "imageSrc")), "html", null, true);
        echo "\">
  <div class=\"image-upload-mask\">
    <div class=\"image-upload-content\">
      <i class=\"cd-icon cd-icon-camera\"></i>
      ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["imageText"]) ? $context["imageText"] : $this->getContext($context, "imageText")), "html", null, true);
        echo "
    </div>
  </div>
  <label class=\"image-upload-label\">
    <input type=\"file\" name=\"file\" class=\"js-upload-input hidden\" accept=\"image/bmp,image/jpeg,image/png, image/jpg\"
    data-token=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken(((array_key_exists("uploadToken", $context)) ? (_twig_default_filter((isset($context["uploadToken"]) ? $context["uploadToken"] : $this->getContext($context, "uploadToken")), "default")) : ("default")), "image"), "html", null, true);
        echo "\" 
    data-file-upload=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "\" 
    data-crop=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "\"
    data-save-url=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["saveUrl"]) ? $context["saveUrl"] : $this->getContext($context, "saveUrl")), "html", null, true);
        echo "\"
    data-target-img=\"#";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["targetImg"]) ? $context["targetImg"] : $this->getContext($context, "targetImg")), "html", null, true);
        echo "\"
    data-crop-width=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["cropWidth"]) ? $context["cropWidth"] : $this->getContext($context, "cropWidth")), "html", null, true);
        echo "\"
    data-crop-height=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["cropHeight"]) ? $context["cropHeight"] : $this->getContext($context, "cropHeight")), "html", null, true);
        echo "\" />
  </label>
</div>";
        
        $__internal_a15857c8baef0fe929191661dbd1cadb2f99deeca20da35361d4421549194a5d->leave($__internal_a15857c8baef0fe929191661dbd1cadb2f99deeca20da35361d4421549194a5d_prof);

    }

    public function getTemplateName()
    {
        return "common/upload-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  39 => 8,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do script(['app/js/upload-image/index.js']) %}

<div class=\"cd-image-upload\">
  <img class=\"{{ imageClass }} js-upload-cover\" id=\"{{ targetImg }}\" src=\"{{ imageSrc }}\">
  <div class=\"image-upload-mask\">
    <div class=\"image-upload-content\">
      <i class=\"cd-icon cd-icon-camera\"></i>
      {{ imageText }}
    </div>
  </div>
  <label class=\"image-upload-label\">
    <input type=\"file\" name=\"file\" class=\"js-upload-input hidden\" accept=\"image/bmp,image/jpeg,image/png, image/jpg\"
    data-token=\"{{ upload_token( uploadToken|default('default'), 'image') }}\" 
    data-file-upload=\"{{path('file_upload')}}\" 
    data-crop=\"{{ path('file_img_crop') }}\"
    data-save-url=\"{{ saveUrl }}\"
    data-target-img=\"#{{ targetImg }}\"
    data-crop-width=\"{{ cropWidth }}\"
    data-crop-height=\"{{ cropHeight }}\" />
  </label>
</div>", "common/upload-image.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\common\\upload-image.html.twig");
    }
}
