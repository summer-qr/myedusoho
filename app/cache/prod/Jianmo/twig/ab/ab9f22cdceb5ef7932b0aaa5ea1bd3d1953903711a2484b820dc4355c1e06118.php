<?php

/* layout.html.twig */
class __TwigTemplate_97b9156ce71d824fedf3ce64816cca578a1e4ee38f3a95a50c6967241aa68f4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'format_detection' => array($this, 'block_format_detection'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'footer_mobile' => array($this, 'block_footer_mobile'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
            'footer_script' => array($this, 'block_footer_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->

";
        // line 12
        $context["lang"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getLocale", array(), "method");
        // line 13
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 14
        echo "
";
        // line 15
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 16
        $context["themeConfig"] = (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method"), false)) : (false))) ? ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "config", array())) : ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "confirmConfig", array())));
        // line 17
        $context["maincolor"] = (($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "maincolor", array()), "default")) : ("default"));
        // line 18
        $context["navigationcolor"] = (($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "navigationcolor", array()), "default")) : ("default"));
        // line 19
        echo "
<html lang=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["lang"]) ? $context["lang"] : null) == "en")) {
            echo "es-en";
        }
        echo "\">
<head>

  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        // line 32
        echo "</title>
  ";
        // line 33
        $this->displayBlock('meta', $context, $blocks);
        // line 45
        echo "

  ";
        // line 47
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 48
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 49
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 52
        echo "
  <!--[if lt IE 9]>
  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-shim.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-sham.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 59
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 63
        echo "
  ";
        // line 64
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 65
        echo "
  
</head>
<body class=\"";
        // line 68
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">

<!--[if lt IE 9]>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/fix-ie.js"), "html", null, true);
        echo "\"></script>
";
        // line 72
        $this->loadTemplate("default/ie8-alert.html.twig", "layout.html.twig", 72)->display($context);
        // line 73
        echo "<![endif]-->

";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('footer_script', $context, $blocks);
        // line 143
        echo "
</body>
</html>";
    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
    }

    // line 33
    public function block_meta($context, array $blocks = array())
    {
        // line 34
        echo "    <meta name=\"keywords\"
          content=\"
";
        // line 36
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta name=\"description\"
          content=\"";
        // line 38
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta name=\"format-detection\"
          content=\"";
        // line 40
        ob_start();
        $this->displayBlock('format_detection', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta content=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\"/>
    <meta content=\"";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\"/>
    <meta content=\"";
        // line 43
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->isWechatLoginBind(), 0), "html", null, true);
        echo "\" name=\"wechat_login_bind\"/>
  ";
    }

    // line 36
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 38
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 40
    public function block_format_detection($context, array $blocks = array())
    {
    }

    // line 59
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        $this->loadTemplate("css_loader.html.twig", "layout.html.twig", 60)->display($context);
        // line 61
        echo "    ";
        $this->loadTemplate("default/stylesheet-webpack.html.twig", "layout.html.twig", 61)->display($context);
        // line 62
        echo "  ";
    }

    // line 64
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 68
    public function block_bodyClass($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("es-main-" . (isset($context["maincolor"]) ? $context["maincolor"] : null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ("es-nav-" . (isset($context["navigationcolor"]) ? $context["navigationcolor"] : null)), "html", null, true);
        echo " ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : null), "")) : (""))) {
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
        }
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        // line 76
        echo "  <div class=\"es-wrap\">

    ";
        // line 78
        $this->displayBlock('header', $context, $blocks);
        // line 83
        echo "
    ";
        // line 84
        $this->displayBlock('full_content', $context, $blocks);
        // line 93
        echo "    
  
    ";
        // line 95
        $this->displayBlock('footer', $context, $blocks);
        // line 98
        echo "  

    ";
        // line 100
        $this->displayBlock('footer_mobile', $context, $blocks);
        // line 102
        echo "
    ";
        // line 103
        $this->displayBlock('bottom', $context, $blocks);
        // line 104
        echo "  </div>

  ";
        // line 106
        $this->displayBlock('esBar', $context, $blocks);
        // line 111
        echo "
  ";
        // line 112
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 125
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>

  ";
        // line 130
        $context["reward_notify"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->popRewardPointNotify();
        // line 131
        echo "  ";
        if ((isset($context["reward_notify"]) ? $context["reward_notify"] : null)) {
            // line 132
            echo "    <div class=\"hidden\" id=\"rewardPointNotify\">
      ";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["reward_notify"]) ? $context["reward_notify"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 136
        echo "
";
    }

    // line 78
    public function block_header($context, array $blocks = array())
    {
        // line 79
        echo "      ";
        $this->loadTemplate("site-hint.html.twig", "layout.html.twig", 79)->display($context);
        // line 80
        echo "      ";
        $this->loadTemplate("default/header.html.twig", "layout.html.twig", 80)->display($context);
        // line 81
        echo "      ";
        $this->loadTemplate("default/exception.html.twig", "layout.html.twig", 81)->display($context);
        // line 82
        echo "    ";
    }

    // line 84
    public function block_full_content($context, array $blocks = array())
    {
        // line 85
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 86
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "      </div>

      ";
        // line 91
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 92
        echo "    ";
    }

    // line 85
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
    }

    // line 91
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        // line 96
        echo "      ";
        $this->loadTemplate("default/footer.html.twig", "layout.html.twig", 96)->display($context);
        // line 97
        echo "    ";
    }

    // line 100
    public function block_footer_mobile($context, array $blocks = array())
    {
        // line 101
        echo "    ";
    }

    // line 103
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 106
    public function block_esBar($context, array $blocks = array())
    {
        // line 107
        echo "    ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
            // line 108
            echo "      ";
            $this->loadTemplate("es-bar/index.html.twig", "layout.html.twig", 108)->display($context);
            // line 109
            echo "    ";
        }
        // line 110
        echo "  ";
    }

    // line 112
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 113
        echo "  
    ";
        // line 114
        $context["cloudConsultPath"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudConsultPath();
        // line 115
        echo "    ";
        if (((array_key_exists("cloudConsultPath", $context)) ? (_twig_default_filter((isset($context["cloudConsultPath"]) ? $context["cloudConsultPath"] : null))) : (""))) {
            // line 116
            echo "      ";
            echo (isset($context["cloudConsultPath"]) ? $context["cloudConsultPath"] : null);
            echo "
    ";
        }
        // line 118
        echo "
    ";
        // line 119
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null))) : ("")) == "/")))) {
            // line 120
            echo "      ";
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 121
                echo "        ";
                $this->loadTemplate("float-consult.html.twig", "layout.html.twig", 121)->display($context);
                // line 122
                echo "      ";
            }
            // line 123
            echo "    ";
        }
        // line 124
        echo "  ";
    }

    // line 139
    public function block_footer_script($context, array $blocks = array())
    {
        // line 140
        echo "  ";
        $this->loadTemplate("default/script-webpack.html.twig", "layout.html.twig", 140)->display($context);
        // line 141
        echo "  ";
        $this->loadTemplate("script_boot.html.twig", "layout.html.twig", 141)->display($context);
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 141,  477 => 140,  474 => 139,  470 => 124,  467 => 123,  464 => 122,  461 => 121,  458 => 120,  456 => 119,  453 => 118,  447 => 116,  444 => 115,  442 => 114,  439 => 113,  436 => 112,  432 => 110,  429 => 109,  426 => 108,  423 => 107,  420 => 106,  415 => 103,  411 => 101,  408 => 100,  404 => 97,  401 => 96,  398 => 95,  393 => 91,  388 => 88,  383 => 85,  379 => 92,  377 => 91,  373 => 89,  371 => 88,  367 => 86,  364 => 85,  361 => 84,  357 => 82,  354 => 81,  351 => 80,  348 => 79,  345 => 78,  340 => 136,  334 => 133,  331 => 132,  328 => 131,  326 => 130,  319 => 126,  316 => 125,  314 => 112,  311 => 111,  309 => 106,  305 => 104,  303 => 103,  300 => 102,  298 => 100,  294 => 98,  292 => 95,  288 => 93,  286 => 84,  283 => 83,  281 => 78,  277 => 76,  274 => 75,  262 => 68,  257 => 64,  253 => 62,  250 => 61,  247 => 60,  244 => 59,  239 => 40,  233 => 38,  227 => 36,  221 => 43,  217 => 42,  213 => 41,  207 => 40,  200 => 38,  193 => 36,  189 => 34,  186 => 33,  175 => 30,  172 => 29,  166 => 143,  164 => 139,  161 => 138,  159 => 75,  155 => 73,  153 => 72,  149 => 71,  143 => 68,  138 => 65,  136 => 64,  133 => 63,  131 => 59,  125 => 56,  121 => 55,  117 => 54,  113 => 52,  108 => 50,  103 => 49,  101 => 48,  97 => 47,  93 => 45,  91 => 33,  88 => 32,  86 => 29,  71 => 20,  68 => 19,  66 => 18,  64 => 17,  62 => 16,  60 => 15,  57 => 14,  55 => 13,  53 => 12,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\layout.html.twig");
    }
}
