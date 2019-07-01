<?php

/* admin/layout.html.twig */
class __TwigTemplate_ec4ec61c704857c5775fcad76926b45bcf763bbebb47ee2d7c2c4e35796aad60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_flash_message' => array($this, 'block_page_flash_message'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'tabs' => array($this, 'block_tabs'),
            'capsule' => array($this, 'block_capsule'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'scriptBoot' => array($this, 'block_scriptBoot'),
            'faqSDK' => array($this, 'block_faqSDK'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_208d402ebefdea0510a1b72efa2f1f24eaa71eecd195af556c9dd5c3517200f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208d402ebefdea0510a1b72efa2f1f24eaa71eecd195af556c9dd5c3517200f8->enter($__internal_208d402ebefdea0510a1b72efa2f1f24eaa71eecd195af556c9dd5c3517200f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "admin/layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
";
        // line 5
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        // line 7
        $context["cloudSmsInfo"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\DataExtension')->getOldSmsUserStatus(), false);
        // line 8
        $context["lang"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method");
        // line 9
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
";
        // line 15
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")) == "en")) {
            echo "es-en-admin";
        }
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>

    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "    ";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 28
        echo "  </title>

  ";
        // line 30
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 31
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 34
        echo "  
  ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
  ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 177
        echo "</html>

";
        
        $__internal_208d402ebefdea0510a1b72efa2f1f24eaa71eecd195af556c9dd5c3517200f8->leave($__internal_208d402ebefdea0510a1b72efa2f1f24eaa71eecd195af556c9dd5c3517200f8_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_23ff811cd8ece2ac81d4e9945a168c56f84a91c94dcbca634d467f36c317c223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ff811cd8ece2ac81d4e9945a168c56f84a91c94dcbca634d467f36c317c223->enter($__internal_23ff811cd8ece2ac81d4e9945a168c56f84a91c94dcbca634d467f36c317c223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 25
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : $this->getContext($context, "currentMenu")), "name", array()), array(), "menu"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "name", array()), array(), "menu"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array())), "name", array()), array(), "menu"), "html", null, true);
        echo "
    ";
        
        $__internal_23ff811cd8ece2ac81d4e9945a168c56f84a91c94dcbca634d467f36c317c223->leave($__internal_23ff811cd8ece2ac81d4e9945a168c56f84a91c94dcbca634d467f36c317c223_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38c86cd0b3de0a0a73d6b1b62899b4f09120e520fbb85022f3b7c8e3f18660db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c86cd0b3de0a0a73d6b1b62899b4f09120e520fbb85022f3b7c8e3f18660db->enter($__internal_38c86cd0b3de0a0a73d6b1b62899b4f09120e520fbb85022f3b7c8e3f18660db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 36
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        
        $__internal_38c86cd0b3de0a0a73d6b1b62899b4f09120e520fbb85022f3b7c8e3f18660db->leave($__internal_38c86cd0b3de0a0a73d6b1b62899b4f09120e520fbb85022f3b7c8e3f18660db_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e28846487a6bec00d117ff594829407fd55365cfc572c6d418a9b3ea7b3f32a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28846487a6bec00d117ff594829407fd55365cfc572c6d418a9b3ea7b3f32a7->enter($__internal_e28846487a6bec00d117ff594829407fd55365cfc572c6d418a9b3ea7b3f32a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e28846487a6bec00d117ff594829407fd55365cfc572c6d418a9b3ea7b3f32a7->leave($__internal_e28846487a6bec00d117ff594829407fd55365cfc572c6d418a9b3ea7b3f32a7_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc242b83e8c4743ae5ef1a0510d946f66a10a91f4185cdb74de1cf21353ce749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc242b83e8c4743ae5ef1a0510d946f66a10a91f4185cdb74de1cf21353ce749->enter($__internal_dc242b83e8c4743ae5ef1a0510d946f66a10a91f4185cdb74de1cf21353ce749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "  <body ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
            echo "\"";
        }
        echo ">
    <!--[if lt IE 9]>
      ";
        // line 49
        $this->loadTemplate("default/ie8-alert.html.twig", "admin/layout.html.twig", 49)->display($context);
        // line 50
        echo "    <![endif]-->

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
    ";
        // line 53
        if ((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : $this->getContext($context, "cloudSmsInfo"))) {
            // line 54
            echo "      <div class=\"alert alert-danger es-admin-alert\" role=\"alert\"><div class=\"text-center\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.new_layout.cloudSmsInfo.tips", array("%remainCount%" => (($this->getAttribute((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null), "remainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null), "remainCount", array()), 0)) : (0)))), "html", null, true);
            echo "</strong></div></div>
    ";
        }
        // line 56
        echo "      <div class=\"phl\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.console_btn"), "html", null, true);
        echo "</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          ";
        // line 66
        $this->loadTemplate("admin/role/templates/navigation.html.twig", "admin/layout.html.twig", 66)->display(array_merge($context, array("parentCode" => "admin")));
        // line 67
        echo "
          <ul class=\"nav navbar-nav navbar-right\">
            <li data-url=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_admin");
        echo "\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.often_used_btn"), "html", null, true);
        echo "</a>
              <ul class=\"dropdown-menu shortcuts\">
                ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/CommonAdmin:commonAdmin"));
        echo "
              </ul>
            </li>
            <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.home_btn"), "html", null, true);
        echo "</a></li>
            <li class=\"dropdown\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
              <ul class=\"dropdown-menu main-list\">
                ";
        // line 79
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
            // line 80
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\"><i class=\"es-icon es-icon-event mrs\" style=\"vertical-align: middle;\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_course"), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 82
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\"><i class=\"es-icon es-icon-book mrs\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.dropdown_menu.exit_btn"), "html", null, true);
        echo "</a></li>
              </ul>
            </li>
          </ul>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class=\"container ";
        // line 92
        if ((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : $this->getContext($context, "cloudSmsInfo"))) {
            echo "es-admin-container-down";
        }
        echo "\">

      ";
        // line 94
        $this->loadTemplate("admin/plugin-upgrade-notify-modal.html.twig", "admin/layout.html.twig", 94)->display($context);
        // line 95
        echo "
      ";
        // line 96
        $this->displayBlock('container', $context, $blocks);
        // line 145
        echo "
    </div>

    ";
        // line 148
        $this->displayBlock('footer', $context, $blocks);
        // line 155
        echo "
    ";
        // line 156
        $this->displayBlock('scriptBoot', $context, $blocks);
        // line 160
        echo "    
    <div id=\"modal\" class=\"modal\" ></div>
    <div id=\"attachment-modal\" class=\"modal\" ></div>
    ";
        // line 163
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 164
            echo "      <div class=\"fixed-bar\">
        <a href=\"";
            // line 165
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
          <i class=\"es-icon es-icon-help\"></i>
          <span>";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.fixed_bar.product_feedback");
            echo "</span>
        </a>
      </div>
    ";
        }
        // line 171
        echo "
    ";
        // line 172
        $this->displayBlock('faqSDK', $context, $blocks);
        // line 175
        echo "  </body>
";
        
        $__internal_dc242b83e8c4743ae5ef1a0510d946f66a10a91f4185cdb74de1cf21353ce749->leave($__internal_dc242b83e8c4743ae5ef1a0510d946f66a10a91f4185cdb74de1cf21353ce749_prof);

    }

    // line 96
    public function block_container($context, array $blocks = array())
    {
        $__internal_5f5ce13a5097e199c55f3b3c92117d1479e984d26108a0acb39baf664602eb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5ce13a5097e199c55f3b3c92117d1479e984d26108a0acb39baf664602eb65->enter($__internal_5f5ce13a5097e199c55f3b3c92117d1479e984d26108a0acb39baf664602eb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 97
        echo "        <div class=\"row\">
          ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 143
        echo "        </div>
      ";
        
        $__internal_5f5ce13a5097e199c55f3b3c92117d1479e984d26108a0acb39baf664602eb65->leave($__internal_5f5ce13a5097e199c55f3b3c92117d1479e984d26108a0acb39baf664602eb65_prof);

    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        $__internal_d71f01eb681a1e713c61e3fd92fc7915be732dd0c074505db93bab40c1a05eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71f01eb681a1e713c61e3fd92fc7915be732dd0c074505db93bab40c1a05eba->enter($__internal_d71f01eb681a1e713c61e3fd92fc7915be732dd0c074505db93bab40c1a05eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 99
        echo "            <div class=\"col-md-2\">
              ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 103
        echo "            </div>

            <div class=\"col-md-10\">
              <div class=\"page-header clearfix\">
                ";
        // line 107
        $this->displayBlock('page_flash_message', $context, $blocks);
        // line 110
        echo "                <h1 class=\"pull-left\">
                  ";
        // line 111
        $this->displayBlock('page_title', $context, $blocks);
        // line 114
        echo "                </h1>
                <div class=\"pull-right\">

                  ";
        // line 117
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 129
        echo "
                </div>
              </div>

              ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 134
        echo "
              ";
        // line 135
        $this->displayBlock('tabs', $context, $blocks);
        // line 136
        echo "
              ";
        // line 137
        $this->displayBlock('capsule', $context, $blocks);
        // line 138
        echo "
              ";
        // line 139
        $this->displayBlock('main', $context, $blocks);
        // line 140
        echo "            </div>

          ";
        
        $__internal_d71f01eb681a1e713c61e3fd92fc7915be732dd0c074505db93bab40c1a05eba->leave($__internal_d71f01eb681a1e713c61e3fd92fc7915be732dd0c074505db93bab40c1a05eba_prof);

    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_eb34941cfee67170ebb15786ba2d3975f0eaa4149bb73cb8bc330b138deedb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb34941cfee67170ebb15786ba2d3975f0eaa4149bb73cb8bc330b138deedb7e->enter($__internal_eb34941cfee67170ebb15786ba2d3975f0eaa4149bb73cb8bc330b138deedb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 101
        echo "                ";
        $this->loadTemplate("admin/role/templates/side-bar.html.twig", "admin/layout.html.twig", 101)->display($context);
        // line 102
        echo "              ";
        
        $__internal_eb34941cfee67170ebb15786ba2d3975f0eaa4149bb73cb8bc330b138deedb7e->leave($__internal_eb34941cfee67170ebb15786ba2d3975f0eaa4149bb73cb8bc330b138deedb7e_prof);

    }

    // line 107
    public function block_page_flash_message($context, array $blocks = array())
    {
        $__internal_a18a6948422a70dbf151fae269a5166272600fbbfc9a5096252a41e3a5930f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18a6948422a70dbf151fae269a5166272600fbbfc9a5096252a41e3a5930f61->enter($__internal_a18a6948422a70dbf151fae269a5166272600fbbfc9a5096252a41e3a5930f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_flash_message"));

        // line 108
        echo "
                ";
        
        $__internal_a18a6948422a70dbf151fae269a5166272600fbbfc9a5096252a41e3a5930f61->leave($__internal_a18a6948422a70dbf151fae269a5166272600fbbfc9a5096252a41e3a5930f61_prof);

    }

    // line 111
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f9cb0ee303153883a120cbe99554cd033a29081c6f1e38a88e741b932cb66499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9cb0ee303153883a120cbe99554cd033a29081c6f1e38a88e741b932cb66499->enter($__internal_f9cb0ee303153883a120cbe99554cd033a29081c6f1e38a88e741b932cb66499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 112
        echo "                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : $this->getContext($context, "currentMenu")), "code", array())), "name", array()), array(), "menu"), "html", null, true);
        echo "
                  ";
        
        $__internal_f9cb0ee303153883a120cbe99554cd033a29081c6f1e38a88e741b932cb66499->leave($__internal_f9cb0ee303153883a120cbe99554cd033a29081c6f1e38a88e741b932cb66499_prof);

    }

    // line 117
    public function block_page_buttons($context, array $blocks = array())
    {
        $__internal_c43163aa50299a07a5f5c849ed9c30497c4feaa5c432634aecd8842d276d644c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43163aa50299a07a5f5c849ed9c30497c4feaa5c432634aecd8842d276d644c->enter($__internal_c43163aa50299a07a5f5c849ed9c30497c4feaa5c432634aecd8842d276d644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_buttons"));

        // line 118
        echo "
                    ";
        // line 119
        if ((((($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array()), "")) : ("")) == "capsules") && ((array_key_exists("capsule", $context)) ? (_twig_default_filter((isset($context["capsule"]) ? $context["capsule"] : $this->getContext($context, "capsule")), false)) : (false)))) {
            // line 120
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode((isset($context["capsule"]) ? $context["capsule"] : $this->getContext($context, "capsule"))), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 121
                echo "                        ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                    ";
        } else {
            // line 124
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : $this->getContext($context, "currentMenu")), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 125
                echo "                        ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                    ";
        }
        // line 128
        echo "                  ";
        
        $__internal_c43163aa50299a07a5f5c849ed9c30497c4feaa5c432634aecd8842d276d644c->leave($__internal_c43163aa50299a07a5f5c849ed9c30497c4feaa5c432634aecd8842d276d644c_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_060ead77c2dfcabd5ab269772532bc0b04c454d9adbff4a5242a064e529436d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060ead77c2dfcabd5ab269772532bc0b04c454d9adbff4a5242a064e529436d4->enter($__internal_060ead77c2dfcabd5ab269772532bc0b04c454d9adbff4a5242a064e529436d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_060ead77c2dfcabd5ab269772532bc0b04c454d9adbff4a5242a064e529436d4->leave($__internal_060ead77c2dfcabd5ab269772532bc0b04c454d9adbff4a5242a064e529436d4_prof);

    }

    // line 135
    public function block_tabs($context, array $blocks = array())
    {
        $__internal_f7ff16028c656bd30ba55b03b76e4e5cee8a08706464304bb88826bc547c3762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ff16028c656bd30ba55b03b76e4e5cee8a08706464304bb88826bc547c3762->enter($__internal_f7ff16028c656bd30ba55b03b76e4e5cee8a08706464304bb88826bc547c3762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs"));

        $this->loadTemplate("admin/role/templates/tabs.html.twig", "admin/layout.html.twig", 135)->display($context);
        
        $__internal_f7ff16028c656bd30ba55b03b76e4e5cee8a08706464304bb88826bc547c3762->leave($__internal_f7ff16028c656bd30ba55b03b76e4e5cee8a08706464304bb88826bc547c3762_prof);

    }

    // line 137
    public function block_capsule($context, array $blocks = array())
    {
        $__internal_771f316da0ed4be45a94c14a8243c8814ddf9a8835170ec3d3526ae3db96ddc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771f316da0ed4be45a94c14a8243c8814ddf9a8835170ec3d3526ae3db96ddc5->enter($__internal_771f316da0ed4be45a94c14a8243c8814ddf9a8835170ec3d3526ae3db96ddc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capsule"));

        
        $__internal_771f316da0ed4be45a94c14a8243c8814ddf9a8835170ec3d3526ae3db96ddc5->leave($__internal_771f316da0ed4be45a94c14a8243c8814ddf9a8835170ec3d3526ae3db96ddc5_prof);

    }

    // line 139
    public function block_main($context, array $blocks = array())
    {
        $__internal_ae77ea4af732608187ca9c1b24b630a2202fb872d60aeae8965fdb091623447d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae77ea4af732608187ca9c1b24b630a2202fb872d60aeae8965fdb091623447d->enter($__internal_ae77ea4af732608187ca9c1b24b630a2202fb872d60aeae8965fdb091623447d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ae77ea4af732608187ca9c1b24b630a2202fb872d60aeae8965fdb091623447d->leave($__internal_ae77ea4af732608187ca9c1b24b630a2202fb872d60aeae8965fdb091623447d_prof);

    }

    // line 148
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ec6eaf3eb9de8682a613fee07125ebabf0923f072f533074e588e7544d585b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6eaf3eb9de8682a613fee07125ebabf0923f072f533074e588e7544d585b7c->enter($__internal_ec6eaf3eb9de8682a613fee07125ebabf0923f072f533074e588e7544d585b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 149
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo "

      ";
        // line 151
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.enabled"), false)) {
            // line 152
            echo "        ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.script");
            echo "
      ";
        }
        // line 154
        echo "    ";
        
        $__internal_ec6eaf3eb9de8682a613fee07125ebabf0923f072f533074e588e7544d585b7c->leave($__internal_ec6eaf3eb9de8682a613fee07125ebabf0923f072f533074e588e7544d585b7c_prof);

    }

    // line 156
    public function block_scriptBoot($context, array $blocks = array())
    {
        $__internal_721ddd537ced71a2b357b13cdfc8a574f832719de979559eba4e48dc61e526c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721ddd537ced71a2b357b13cdfc8a574f832719de979559eba4e48dc61e526c3->enter($__internal_721ddd537ced71a2b357b13cdfc8a574f832719de979559eba4e48dc61e526c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scriptBoot"));

        // line 157
        echo "      ";
        $this->loadTemplate("old-script_boot.html.twig", "admin/layout.html.twig", 157)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 158
        echo "      ";
        $this->loadTemplate("admin/default/script-webpack.html.twig", "admin/layout.html.twig", 158)->display($context);
        // line 159
        echo "    ";
        
        $__internal_721ddd537ced71a2b357b13cdfc8a574f832719de979559eba4e48dc61e526c3->leave($__internal_721ddd537ced71a2b357b13cdfc8a574f832719de979559eba4e48dc61e526c3_prof);

    }

    // line 172
    public function block_faqSDK($context, array $blocks = array())
    {
        $__internal_55b5dc61ccdaae1697f3ab2e3903a52ba7dac1f18d296641a9e9b8afd531e374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b5dc61ccdaae1697f3ab2e3903a52ba7dac1f18d296641a9e9b8afd531e374->enter($__internal_55b5dc61ccdaae1697f3ab2e3903a52ba7dac1f18d296641a9e9b8afd531e374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "faqSDK"));

        // line 173
        echo "      ";
        $this->loadTemplate("admin/faq/sdk.html.twig", "admin/layout.html.twig", 173)->display($context);
        // line 174
        echo "    ";
        
        $__internal_55b5dc61ccdaae1697f3ab2e3903a52ba7dac1f18d296641a9e9b8afd531e374->leave($__internal_55b5dc61ccdaae1697f3ab2e3903a52ba7dac1f18d296641a9e9b8afd531e374_prof);

    }

    // line 179
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e5f1e238129869821a88b19ee4262a9b6f7547b12630beb4dcd6e324373ca40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e5f1e238129869821a88b19ee4262a9b6f7547b12630beb4dcd6e324373ca40c->enter($__internal_e5f1e238129869821a88b19ee4262a9b6f7547b12630beb4dcd6e324373ca40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_link_html"));

            // line 180
            echo "  <a 
  ";
            // line 181
            if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                // line 182
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"
  ";
            }
            // line 184
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 185
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 189
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
  ";
            }
            // line 191
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 192
                echo "    target=\"blank\"
  ";
            }
            // line 194
            echo "  >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array()), array(), "menu"), "html", null, true);
            echo "</a>
";
            
            $__internal_e5f1e238129869821a88b19ee4262a9b6f7547b12630beb4dcd6e324373ca40c->leave($__internal_e5f1e238129869821a88b19ee4262a9b6f7547b12630beb4dcd6e324373ca40c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 194,  702 => 192,  699 => 191,  693 => 189,  685 => 185,  682 => 184,  676 => 182,  674 => 181,  671 => 180,  654 => 179,  647 => 174,  644 => 173,  638 => 172,  631 => 159,  628 => 158,  625 => 157,  619 => 156,  612 => 154,  606 => 152,  604 => 151,  598 => 149,  592 => 148,  581 => 139,  570 => 137,  558 => 135,  547 => 133,  540 => 128,  537 => 127,  528 => 125,  523 => 124,  520 => 123,  511 => 121,  506 => 120,  504 => 119,  501 => 118,  495 => 117,  485 => 112,  479 => 111,  471 => 108,  465 => 107,  458 => 102,  455 => 101,  449 => 100,  440 => 140,  438 => 139,  435 => 138,  433 => 137,  430 => 136,  428 => 135,  425 => 134,  423 => 133,  417 => 129,  415 => 117,  410 => 114,  408 => 111,  405 => 110,  403 => 107,  397 => 103,  395 => 100,  392 => 99,  386 => 98,  378 => 143,  376 => 98,  373 => 97,  367 => 96,  359 => 175,  357 => 172,  354 => 171,  347 => 167,  342 => 165,  339 => 164,  337 => 163,  332 => 160,  330 => 156,  327 => 155,  325 => 148,  320 => 145,  318 => 96,  315 => 95,  313 => 94,  306 => 92,  292 => 83,  285 => 82,  277 => 80,  275 => 79,  270 => 77,  263 => 75,  257 => 72,  252 => 70,  248 => 69,  244 => 67,  242 => 66,  231 => 63,  222 => 56,  216 => 54,  214 => 53,  209 => 50,  207 => 49,  197 => 47,  191 => 46,  180 => 40,  171 => 37,  166 => 36,  160 => 35,  146 => 25,  140 => 24,  131 => 177,  129 => 46,  123 => 43,  119 => 42,  116 => 41,  114 => 40,  111 => 39,  109 => 35,  106 => 34,  101 => 32,  96 => 31,  94 => 30,  90 => 28,  85 => 27,  83 => 24,  77 => 21,  63 => 15,  56 => 9,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
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
{% import \"admin/macro.html.twig\" as admin_macro %}
{% import _self as self_macro %}

{% set menu = menu|default(null) %}
{% set currentMenu = permission(menu) %}
{% set cloudSmsInfo = isOldSmsUser()|default(false) %}
{% set lang = app.request.getLocale() %}
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
{# returns app.request.locale if available and app.request.defaultLocale if app.request.locale is not set#}
<html lang=\"{{ lang }}\" class=\"{% if lang == 'en' %}es-en-admin{% endif %}\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\" />
  <title>

    {% block title %}
      {{ currentMenu.name|trans({}, 'menu') }} - {{ menu|parent_permission.name|trans({}, 'menu') }} - {{ menu|parent_permission.code|parent_permission.name|trans({}, 'menu')  }}
    {% endblock %}
    {% if not setting('copyright.owned') %} | EduSoho{% endif %}
  </title>

  {% if setting('site.favicon') %}
    <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" />
    <link href=\"{{ asset(setting('site.favicon')) }}\" rel=\"shortcut icon\" />
  {% endif %}
  
  {% block stylesheets %}
  <link href=\"{{ asset('assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('static-dist/app/css/admin.css') }}\" rel=\"stylesheet\" />
  {% endblock %}

  {% block javascripts %}{% endblock %}
  <!--[if lt IE 9]>
    <script src=\"{{ asset('assets/libs/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('assets/libs/respond.min.js') }}\"></script>
  <![endif]-->
</head>
{% block body %}
  <body {% if bodyClass|default('') %}class=\"{{ bodyClass }}\"{% endif %}>
    <!--[if lt IE 9]>
      {% include 'default/ie8-alert.html.twig' %}
    <![endif]-->

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
    {% if cloudSmsInfo %}
      <div class=\"alert alert-danger es-admin-alert\" role=\"alert\"><div class=\"text-center\"><strong>{{ 'admin.new_layout.cloudSmsInfo.tips'|trans({'%remainCount%':cloudSmsInfo.remainCount|default(0)}) }}</strong></div></div>
    {% endif %}
      <div class=\"phl\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"{{ url('admin') }}\">{% if not setting('copyright.owned') %}EduSoho{% endif %}{{'admin.navbar.header.console_btn'|trans}}</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          {% include 'admin/role/templates/navigation.html.twig' with {parentCode:'admin'} %}

          <ul class=\"nav navbar-nav navbar-right\">
            <li data-url=\"{{path('admin_common_admin')}}\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> {{'admin.navbar.header.often_used_btn'|trans}}</a>
              <ul class=\"dropdown-menu shortcuts\">
                {{ render(controller('AppBundle:Admin/CommonAdmin:commonAdmin')) }}
              </ul>
            </li>
            <li><a href=\"{{ path('homepage') }}\"><i class=\"glyphicon glyphicon-home\"></i> {{'admin.navbar.header.home_btn'|trans}}</a></li>
            <li class=\"dropdown\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> {{ app.user.nickname }} <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
              <ul class=\"dropdown-menu main-list\">
                {% if 'ROLE_TEACHER' in app.user.roles %}
                  <li><a href=\"{{ path('my') }}\"><i class=\"es-icon es-icon-event mrs\" style=\"vertical-align: middle;\"></i>{{ 'homepage.header.my_course'|trans }}</a></li>
                {% endif %}
                <li><a href=\"{{ path('my_courses_learning') }}\"><i class=\"es-icon es-icon-book mrs\"></i>{{ 'homepage.header.my_learning'|trans }}</a></li>
                <li><a href=\"{{ path('logout') }}\"><i class=\"glyphicon glyphicon-off\"></i> {{'admin.navbar.header.dropdown_menu.exit_btn'|trans}}</a></li>
              </ul>
            </li>
          </ul>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class=\"container {% if cloudSmsInfo %}es-admin-container-down{% endif %}\">

      {% include 'admin/plugin-upgrade-notify-modal.html.twig' %}

      {% block container %}
        <div class=\"row\">
          {% block content %}
            <div class=\"col-md-2\">
              {% block sidebar %}
                {% include 'admin/role/templates/side-bar.html.twig' %}
              {% endblock %}
            </div>

            <div class=\"col-md-10\">
              <div class=\"page-header clearfix\">
                {% block page_flash_message %}

                {% endblock %}
                <h1 class=\"pull-left\">
                  {% block page_title %}
                    {{ currentMenu.code|parent_permission.name|trans({}, 'menu') }}
                  {% endblock %}
                </h1>
                <div class=\"pull-right\">

                  {% block page_buttons %}

                    {% if currentMenu.mode|default('') == 'capsules' and capsule|default(false) %}
                      {% for m in sub_permissions(permission(capsule).code,'topBtn') %}
                        {{ self_macro.menu_link_html(_context, m, 'btn btn-success btn-sm') }}
                      {% endfor %}
                    {% else %}
                      {% for m in sub_permissions(currentMenu.code,'topBtn') %}
                        {{ self_macro.menu_link_html(_context, m, 'btn btn-success btn-sm') }}
                      {% endfor %}
                    {% endif %}
                  {% endblock %}

                </div>
              </div>

              {% block content_header %}{% endblock %}

              {% block tabs %}{% include 'admin/role/templates/tabs.html.twig' %}{% endblock %}

              {% block capsule %}{% endblock %}

              {% block main %}{% endblock %}
            </div>

          {% endblock %}
        </div>
      {% endblock %}

    </div>

    {% block footer %}
      {{ setting('site.analytics')|raw }}

      {% if setting('siteTrace.enabled')|default(false) %}
        {{ setting('siteTrace.script')|raw }}
      {% endif %}
    {% endblock %}

    {% block scriptBoot %}
      {% include 'old-script_boot.html.twig' with {script_main: asset('bundles/topxiaadmin/js/admin-app.js')} %}
      {% include 'admin/default/script-webpack.html.twig' %}
    {% endblock %}
    
    <div id=\"modal\" class=\"modal\" ></div>
    <div id=\"attachment-modal\" class=\"modal\" ></div>
    {% if setting('copyright.thirdCopyright') != 1 %}
      <div class=\"fixed-bar\">
        <a href=\"{{path('admin_feedback')}}\"  target='_blank' class=\"icon-question-text feedback\">
          <i class=\"es-icon es-icon-help\"></i>
          <span>{{ 'admin.fixed_bar.product_feedback'|trans|raw }}</span>
        </a>
      </div>
    {% endif %}

    {% block faqSDK %}
      {% include 'admin/faq/sdk.html.twig' %}
    {% endblock %}
  </body>
{% endblock %}
</html>

{% macro menu_link_html(_context, menu, class) %}
  <a 
  {% if class %}
    class=\"{{ class }}\"
  {% endif %}
  {% if menu.mode|default(null) == 'modal' %}
    data-url=\"{{ permission_path(menu) }}\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  {% else %}
    href=\"{{ permission_path(menu) }}\"
  {% endif %}
  {% if menu.blank|default(false) %}
    target=\"blank\"
  {% endif %}
  >{{ menu.name|trans({}, 'menu') }}</a>
{% endmacro %}", "admin/layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\layout.html.twig");
    }
}
