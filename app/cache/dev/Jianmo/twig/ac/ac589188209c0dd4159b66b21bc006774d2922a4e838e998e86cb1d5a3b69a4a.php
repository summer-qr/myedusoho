<?php

/* layout.html.twig */
class __TwigTemplate_a68e4d62dfff763469c459fd7a56f685308b0656153ca61267f0e3765ce31c3f extends Twig_Template
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
        $__internal_7f2457b1d80a07e93aef693f05825059a9cc409a84476b44ab04afc7256e7299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2457b1d80a07e93aef693f05825059a9cc409a84476b44ab04afc7256e7299->enter($__internal_7f2457b1d80a07e93aef693f05825059a9cc409a84476b44ab04afc7256e7299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        $context["lang"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method");
        // line 13
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 14
        echo "
";
        // line 15
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 16
        $context["themeConfig"] = (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method"), false)) : (false))) ? ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "config", array())) : ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "confirmConfig", array())));
        // line 17
        $context["maincolor"] = (($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "maincolor", array()), "default")) : ("default"));
        // line 18
        $context["navigationcolor"] = (($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "navigationcolor", array()), "default")) : ("default"));
        // line 19
        echo "
<html lang=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")) == "en")) {
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
        
        $__internal_7f2457b1d80a07e93aef693f05825059a9cc409a84476b44ab04afc7256e7299->leave($__internal_7f2457b1d80a07e93aef693f05825059a9cc409a84476b44ab04afc7256e7299_prof);

    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        $__internal_a394da199f12f893b2d187764b09468468e537a47b3f3550989286e7bfcf62b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a394da199f12f893b2d187764b09468468e537a47b3f3550989286e7bfcf62b9->enter($__internal_a394da199f12f893b2d187764b09468468e537a47b3f3550989286e7bfcf62b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
        
        $__internal_a394da199f12f893b2d187764b09468468e537a47b3f3550989286e7bfcf62b9->leave($__internal_a394da199f12f893b2d187764b09468468e537a47b3f3550989286e7bfcf62b9_prof);

    }

    // line 33
    public function block_meta($context, array $blocks = array())
    {
        $__internal_958080e9125e39309d74908a43e2dd5221c38c3974d53203d10d52064676f8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958080e9125e39309d74908a43e2dd5221c38c3974d53203d10d52064676f8ea->enter($__internal_958080e9125e39309d74908a43e2dd5221c38c3974d53203d10d52064676f8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

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
        
        $__internal_958080e9125e39309d74908a43e2dd5221c38c3974d53203d10d52064676f8ea->leave($__internal_958080e9125e39309d74908a43e2dd5221c38c3974d53203d10d52064676f8ea_prof);

    }

    // line 36
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_ab4fde45382132bdbdd9aad69b6ae58f7a1ee721609317f288f8ef176977ff6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4fde45382132bdbdd9aad69b6ae58f7a1ee721609317f288f8ef176977ff6b->enter($__internal_ab4fde45382132bdbdd9aad69b6ae58f7a1ee721609317f288f8ef176977ff6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_ab4fde45382132bdbdd9aad69b6ae58f7a1ee721609317f288f8ef176977ff6b->leave($__internal_ab4fde45382132bdbdd9aad69b6ae58f7a1ee721609317f288f8ef176977ff6b_prof);

    }

    // line 38
    public function block_description($context, array $blocks = array())
    {
        $__internal_f9a1ce9d351cd78cca14821cbfaa1cf7e5929b445a153e255a1e89e661c8029b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a1ce9d351cd78cca14821cbfaa1cf7e5929b445a153e255a1e89e661c8029b->enter($__internal_f9a1ce9d351cd78cca14821cbfaa1cf7e5929b445a153e255a1e89e661c8029b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_f9a1ce9d351cd78cca14821cbfaa1cf7e5929b445a153e255a1e89e661c8029b->leave($__internal_f9a1ce9d351cd78cca14821cbfaa1cf7e5929b445a153e255a1e89e661c8029b_prof);

    }

    // line 40
    public function block_format_detection($context, array $blocks = array())
    {
        $__internal_182857f68d723b8e053044beef8d1dba881230327efe784d155a57ffc6cdcbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182857f68d723b8e053044beef8d1dba881230327efe784d155a57ffc6cdcbec->enter($__internal_182857f68d723b8e053044beef8d1dba881230327efe784d155a57ffc6cdcbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "format_detection"));

        
        $__internal_182857f68d723b8e053044beef8d1dba881230327efe784d155a57ffc6cdcbec->leave($__internal_182857f68d723b8e053044beef8d1dba881230327efe784d155a57ffc6cdcbec_prof);

    }

    // line 59
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3eb55ac6cb7f5cb139564686e22f7df3f450b756473de070a0c9a457c2a2c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eb55ac6cb7f5cb139564686e22f7df3f450b756473de070a0c9a457c2a2c55->enter($__internal_f3eb55ac6cb7f5cb139564686e22f7df3f450b756473de070a0c9a457c2a2c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 60
        echo "    ";
        $this->loadTemplate("css_loader.html.twig", "layout.html.twig", 60)->display($context);
        // line 61
        echo "    ";
        $this->loadTemplate("default/stylesheet-webpack.html.twig", "layout.html.twig", 61)->display($context);
        // line 62
        echo "  ";
        
        $__internal_f3eb55ac6cb7f5cb139564686e22f7df3f450b756473de070a0c9a457c2a2c55->leave($__internal_f3eb55ac6cb7f5cb139564686e22f7df3f450b756473de070a0c9a457c2a2c55_prof);

    }

    // line 64
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_61c07d1ad709114ced35214f4e9026b7cdc42cf94ed53c85723e0f10c351c3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c07d1ad709114ced35214f4e9026b7cdc42cf94ed53c85723e0f10c351c3e2->enter($__internal_61c07d1ad709114ced35214f4e9026b7cdc42cf94ed53c85723e0f10c351c3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        
        $__internal_61c07d1ad709114ced35214f4e9026b7cdc42cf94ed53c85723e0f10c351c3e2->leave($__internal_61c07d1ad709114ced35214f4e9026b7cdc42cf94ed53c85723e0f10c351c3e2_prof);

    }

    // line 68
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_437d4ab80c15417d6c73dbf81237025841e47a16587ef94b3d9dc69a08d8b5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437d4ab80c15417d6c73dbf81237025841e47a16587ef94b3d9dc69a08d8b5c7->enter($__internal_437d4ab80c15417d6c73dbf81237025841e47a16587ef94b3d9dc69a08d8b5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo twig_escape_filter($this->env, ("es-main-" . (isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ("es-nav-" . (isset($context["navigationcolor"]) ? $context["navigationcolor"] : $this->getContext($context, "navigationcolor"))), "html", null, true);
        echo " ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
        }
        
        $__internal_437d4ab80c15417d6c73dbf81237025841e47a16587ef94b3d9dc69a08d8b5c7->leave($__internal_437d4ab80c15417d6c73dbf81237025841e47a16587ef94b3d9dc69a08d8b5c7_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_436379b8ac370a79a4c8674415a26f24ef982e65f48129da3cbadf4cc8bcbc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436379b8ac370a79a4c8674415a26f24ef982e65f48129da3cbadf4cc8bcbc07->enter($__internal_436379b8ac370a79a4c8674415a26f24ef982e65f48129da3cbadf4cc8bcbc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if ((isset($context["reward_notify"]) ? $context["reward_notify"] : $this->getContext($context, "reward_notify"))) {
            // line 132
            echo "    <div class=\"hidden\" id=\"rewardPointNotify\">
      ";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["reward_notify"]) ? $context["reward_notify"] : $this->getContext($context, "reward_notify")), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 136
        echo "
";
        
        $__internal_436379b8ac370a79a4c8674415a26f24ef982e65f48129da3cbadf4cc8bcbc07->leave($__internal_436379b8ac370a79a4c8674415a26f24ef982e65f48129da3cbadf4cc8bcbc07_prof);

    }

    // line 78
    public function block_header($context, array $blocks = array())
    {
        $__internal_41e0c3645c83e66aa37348b3ef92d06f8e8d816791abca49390c0616ccd1ee6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e0c3645c83e66aa37348b3ef92d06f8e8d816791abca49390c0616ccd1ee6c->enter($__internal_41e0c3645c83e66aa37348b3ef92d06f8e8d816791abca49390c0616ccd1ee6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_41e0c3645c83e66aa37348b3ef92d06f8e8d816791abca49390c0616ccd1ee6c->leave($__internal_41e0c3645c83e66aa37348b3ef92d06f8e8d816791abca49390c0616ccd1ee6c_prof);

    }

    // line 84
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_ad9d4c572a9a30c5cce14b66f463b64063c26e0335eed6bcea75847fafe7d893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9d4c572a9a30c5cce14b66f463b64063c26e0335eed6bcea75847fafe7d893->enter($__internal_ad9d4c572a9a30c5cce14b66f463b64063c26e0335eed6bcea75847fafe7d893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

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
        
        $__internal_ad9d4c572a9a30c5cce14b66f463b64063c26e0335eed6bcea75847fafe7d893->leave($__internal_ad9d4c572a9a30c5cce14b66f463b64063c26e0335eed6bcea75847fafe7d893_prof);

    }

    // line 85
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_7f58c5c48f89d19cc7477d3f094d571f68f0b38f4dee8deed85e7abfa2a18b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f58c5c48f89d19cc7477d3f094d571f68f0b38f4dee8deed85e7abfa2a18b2c->enter($__internal_7f58c5c48f89d19cc7477d3f094d571f68f0b38f4dee8deed85e7abfa2a18b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        
        $__internal_7f58c5c48f89d19cc7477d3f094d571f68f0b38f4dee8deed85e7abfa2a18b2c->leave($__internal_7f58c5c48f89d19cc7477d3f094d571f68f0b38f4dee8deed85e7abfa2a18b2c_prof);

    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca1f44d3cc296a510fa0c567dd119465500a402c0965e4271f6be2ac33786b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1f44d3cc296a510fa0c567dd119465500a402c0965e4271f6be2ac33786b63->enter($__internal_ca1f44d3cc296a510fa0c567dd119465500a402c0965e4271f6be2ac33786b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ca1f44d3cc296a510fa0c567dd119465500a402c0965e4271f6be2ac33786b63->leave($__internal_ca1f44d3cc296a510fa0c567dd119465500a402c0965e4271f6be2ac33786b63_prof);

    }

    // line 91
    public function block_bottom_content($context, array $blocks = array())
    {
        $__internal_cc438a5fcb0c3564fbbd45963fd9409a0cc69c41f8fff294fae499d26674029a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc438a5fcb0c3564fbbd45963fd9409a0cc69c41f8fff294fae499d26674029a->enter($__internal_cc438a5fcb0c3564fbbd45963fd9409a0cc69c41f8fff294fae499d26674029a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom_content"));

        
        $__internal_cc438a5fcb0c3564fbbd45963fd9409a0cc69c41f8fff294fae499d26674029a->leave($__internal_cc438a5fcb0c3564fbbd45963fd9409a0cc69c41f8fff294fae499d26674029a_prof);

    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4054b85d19ba4dd02bbd7e2049236359edae5e5b1433fd42e5e86433758ff9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4054b85d19ba4dd02bbd7e2049236359edae5e5b1433fd42e5e86433758ff9b2->enter($__internal_4054b85d19ba4dd02bbd7e2049236359edae5e5b1433fd42e5e86433758ff9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 96
        echo "      ";
        $this->loadTemplate("default/footer.html.twig", "layout.html.twig", 96)->display($context);
        // line 97
        echo "    ";
        
        $__internal_4054b85d19ba4dd02bbd7e2049236359edae5e5b1433fd42e5e86433758ff9b2->leave($__internal_4054b85d19ba4dd02bbd7e2049236359edae5e5b1433fd42e5e86433758ff9b2_prof);

    }

    // line 100
    public function block_footer_mobile($context, array $blocks = array())
    {
        $__internal_b668647ec5caea850c81890b5fb7214c6d8ce938789fb353b31a3cd4343afb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b668647ec5caea850c81890b5fb7214c6d8ce938789fb353b31a3cd4343afb45->enter($__internal_b668647ec5caea850c81890b5fb7214c6d8ce938789fb353b31a3cd4343afb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_mobile"));

        // line 101
        echo "    ";
        
        $__internal_b668647ec5caea850c81890b5fb7214c6d8ce938789fb353b31a3cd4343afb45->leave($__internal_b668647ec5caea850c81890b5fb7214c6d8ce938789fb353b31a3cd4343afb45_prof);

    }

    // line 103
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_48ff9584140d17e5ced07956cebbbe225ed70bbd959727f2b56571138cac8e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ff9584140d17e5ced07956cebbbe225ed70bbd959727f2b56571138cac8e04->enter($__internal_48ff9584140d17e5ced07956cebbbe225ed70bbd959727f2b56571138cac8e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        
        $__internal_48ff9584140d17e5ced07956cebbbe225ed70bbd959727f2b56571138cac8e04->leave($__internal_48ff9584140d17e5ced07956cebbbe225ed70bbd959727f2b56571138cac8e04_prof);

    }

    // line 106
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_37e8a438afe98f077190c24d8c2bdfdc5683cb7d77127589506e087bd8e8e1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e8a438afe98f077190c24d8c2bdfdc5683cb7d77127589506e087bd8e8e1c7->enter($__internal_37e8a438afe98f077190c24d8c2bdfdc5683cb7d77127589506e087bd8e8e1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

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
        
        $__internal_37e8a438afe98f077190c24d8c2bdfdc5683cb7d77127589506e087bd8e8e1c7->leave($__internal_37e8a438afe98f077190c24d8c2bdfdc5683cb7d77127589506e087bd8e8e1c7_prof);

    }

    // line 112
    public function block_floatConsult($context, array $blocks = array())
    {
        $__internal_191f1ca3d2f3c9083836022f807153b65bf3098b64e1db8632a19272ac347fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191f1ca3d2f3c9083836022f807153b65bf3098b64e1db8632a19272ac347fd4->enter($__internal_191f1ca3d2f3c9083836022f807153b65bf3098b64e1db8632a19272ac347fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "floatConsult"));

        // line 113
        echo "  
    ";
        // line 114
        $context["cloudConsultPath"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudConsultPath();
        // line 115
        echo "    ";
        if (((array_key_exists("cloudConsultPath", $context)) ? (_twig_default_filter((isset($context["cloudConsultPath"]) ? $context["cloudConsultPath"] : $this->getContext($context, "cloudConsultPath")))) : (""))) {
            // line 116
            echo "      ";
            echo (isset($context["cloudConsultPath"]) ? $context["cloudConsultPath"] : $this->getContext($context, "cloudConsultPath"));
            echo "
    ";
        }
        // line 118
        echo "
    ";
        // line 119
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : $this->getContext($context, "consultDisplay")), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")))) : ("")) == "/")))) {
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
        
        $__internal_191f1ca3d2f3c9083836022f807153b65bf3098b64e1db8632a19272ac347fd4->leave($__internal_191f1ca3d2f3c9083836022f807153b65bf3098b64e1db8632a19272ac347fd4_prof);

    }

    // line 139
    public function block_footer_script($context, array $blocks = array())
    {
        $__internal_a4f4a4951bd7a4bd43e9a6c53fc313d0be730292a10d2e9e0230566ac4f34402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f4a4951bd7a4bd43e9a6c53fc313d0be730292a10d2e9e0230566ac4f34402->enter($__internal_a4f4a4951bd7a4bd43e9a6c53fc313d0be730292a10d2e9e0230566ac4f34402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_script"));

        // line 140
        echo "  ";
        $this->loadTemplate("default/script-webpack.html.twig", "layout.html.twig", 140)->display($context);
        // line 141
        echo "  ";
        $this->loadTemplate("script_boot.html.twig", "layout.html.twig", 141)->display($context);
        
        $__internal_a4f4a4951bd7a4bd43e9a6c53fc313d0be730292a10d2e9e0230566ac4f34402->leave($__internal_a4f4a4951bd7a4bd43e9a6c53fc313d0be730292a10d2e9e0230566ac4f34402_prof);

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
        return array (  603 => 141,  600 => 140,  594 => 139,  587 => 124,  584 => 123,  581 => 122,  578 => 121,  575 => 120,  573 => 119,  570 => 118,  564 => 116,  561 => 115,  559 => 114,  556 => 113,  550 => 112,  543 => 110,  540 => 109,  537 => 108,  534 => 107,  528 => 106,  517 => 103,  510 => 101,  504 => 100,  497 => 97,  494 => 96,  488 => 95,  477 => 91,  466 => 88,  455 => 85,  448 => 92,  446 => 91,  442 => 89,  440 => 88,  436 => 86,  433 => 85,  427 => 84,  420 => 82,  417 => 81,  414 => 80,  411 => 79,  405 => 78,  397 => 136,  391 => 133,  388 => 132,  385 => 131,  383 => 130,  376 => 126,  373 => 125,  371 => 112,  368 => 111,  366 => 106,  362 => 104,  360 => 103,  357 => 102,  355 => 100,  351 => 98,  349 => 95,  345 => 93,  343 => 84,  340 => 83,  338 => 78,  334 => 76,  328 => 75,  310 => 68,  299 => 64,  292 => 62,  289 => 61,  286 => 60,  280 => 59,  269 => 40,  257 => 38,  245 => 36,  236 => 43,  232 => 42,  228 => 41,  222 => 40,  215 => 38,  208 => 36,  204 => 34,  198 => 33,  184 => 30,  178 => 29,  169 => 143,  167 => 139,  164 => 138,  162 => 75,  158 => 73,  156 => 72,  152 => 71,  146 => 68,  141 => 65,  139 => 64,  136 => 63,  134 => 59,  128 => 56,  124 => 55,  120 => 54,  116 => 52,  111 => 50,  106 => 49,  104 => 48,  100 => 47,  96 => 45,  94 => 33,  91 => 32,  89 => 29,  74 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  60 => 14,  58 => 13,  56 => 12,  44 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macro.html.twig\" as web_macro %}
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->

{% set lang = app.request.getLocale() %}
{% set mobile = is_show_mobile_page() %}

{% set currentTheme = current_theme() %}
{% set themeConfig = app.request.get('themeEditing')|default(false) ? currentTheme.config  : currentTheme.confirmConfig %}
{% set maincolor = themeConfig.maincolor|default('default') %}
{% set navigationcolor = themeConfig.navigationcolor|default('default') %}

<html lang=\"{{ lang }}\" class=\"{% if lang == 'en' %}es-en{% endif %}\">
<head>

  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>
    {%- block title -%}
      {{ setting('site.name', 'EduSoho') }}{% if setting('site.slogan') %} - {{ setting('site.slogan') }}{% endif %}{% if  setting('copyright.owned','0') != '1' or setting('copyright.thirdCopyright')|default(0) == 2 %} - Powered By EduSoho{% endif %}
    {%- endblock -%}
  </title>
  {% block meta %}
    <meta name=\"keywords\"
          content=\"
{% spaceless %}{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}{% endspaceless %}\"/>
    <meta name=\"description\"
          content=\"{% spaceless %}{% block description %}{{ setting('site.seo_description') }}{% endblock %}{% endspaceless %}\"/>
    <meta name=\"format-detection\"
          content=\"{% spaceless %}{% block format_detection %}{% endblock %}{% endspaceless %}\"/>
    <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\"/>
    <meta content=\"{{ app.user.isLogin()|default(0) }}\" name=\"is-login\"/>
    <meta content=\"{{ wechat_login_bind_enabled()|default(0) }}\" name=\"wechat_login_bind\"/>
  {% endblock %}


  {{ setting('login_bind.verify_code', '')|raw }}
  {% if setting('site.favicon') %}
    <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" media=\"screen\"/>
  {% endif %}

  <!--[if lt IE 9]>
  <script src=\"{{ asset('static-dist/libs/html5shiv.js') }}\"></script>
  <script src=\"{{ asset('static-dist/es5-shim/es5-shim.js') }}\"></script>
  <script src=\"{{ asset('static-dist/es5-shim/es5-sham.js') }}\"></script>
  <![endif]-->

  {% block stylesheets %}
    {% include 'css_loader.html.twig' %}
    {% include 'default/stylesheet-webpack.html.twig' %}
  {% endblock %}

  {% block head_scripts %}{% endblock %}

  
</head>
<body class=\"{% block bodyClass %}{{ 'es-main-' ~ maincolor }} {{ 'es-nav-' ~ navigationcolor }} {% if bodyClass|default('') %}{{ bodyClass }}{% endif %}{% endblock %}\">

<!--[if lt IE 9]>
<script src=\"{{ asset('static-dist/libs/fix-ie.js') }}\"></script>
{% include 'default/ie8-alert.html.twig' %}
<![endif]-->

{% block body %}
  <div class=\"es-wrap\">

    {% block header %}
      {% include 'site-hint.html.twig' %}
      {% include 'default/header.html.twig' %}
      {% include 'default/exception.html.twig' %}
    {% endblock %}

    {% block full_content %}
      {% block top_content %}{% endblock %}

      <div id=\"content-container\" class=\"container\">
        {% block content %}{% endblock %}
      </div>

      {% block bottom_content %}{% endblock %}
    {% endblock %}
    
  
    {% block footer %}
      {% include 'default/footer.html.twig' %}
    {% endblock %}
  

    {% block footer_mobile %}
    {% endblock %}

    {% block bottom %}{% endblock %}
  </div>

  {% block esBar %}
    {% if setting('esBar.enabled', 0) %}
      {% include 'es-bar/index.html.twig' %}
    {% endif %}
  {% endblock %}

  {% block floatConsult %}
  
    {% set cloudConsultPath = cloudConsultPath() %}
    {% if cloudConsultPath|default() %}
      {{ cloudConsultPath | raw }}
    {% endif %}

    {% if setting('consult.enabled', 0) and (consultDisplay|default(false) or siteNav|default() == '/' ) %}
      {% if not setting('esBar.enabled',0) %}
        {% include 'float-consult.html.twig' %}
      {% endif %}
    {% endif %}
  {% endblock %}

  <div id=\"login-modal\" class=\"modal\" data-url=\"{{ path('login_ajax') }}\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>

  {% set reward_notify = pop_reward_point_notify() %}
  {% if reward_notify %}
    <div class=\"hidden\" id=\"rewardPointNotify\">
      {{ reward_notify }}
    </div>
  {% endif %}

{% endblock %}

{% block footer_script %}
  {% include 'default/script-webpack.html.twig' %}
  {% include 'script_boot.html.twig' %}
{% endblock %}

</body>
</html>", "layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\layout.html.twig");
    }
}
