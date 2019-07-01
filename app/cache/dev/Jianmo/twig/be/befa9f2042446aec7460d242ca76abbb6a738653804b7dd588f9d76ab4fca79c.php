<?php

/* admin/app/center.html.twig */
class __TwigTemplate_b54993aa2fac92a253d7ecc35819a7792aced79c769ae948276e01611f791f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/app/center.html.twig", 1);
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
        $__internal_8474105c87adf7e145401c083879ab6be96c1ba1e20cc49d45d9465f18a4ded7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8474105c87adf7e145401c083879ab6be96c1ba1e20cc49d45d9465f18a4ded7->enter($__internal_8474105c87adf7e145401c083879ab6be96c1ba1e20cc49d45d9465f18a4ded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/app/center.html.twig"));

        // line 3
        $context["menu"] = "admin_app_center";
        // line 5
        $context["script_controller"] = "app/center";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8474105c87adf7e145401c083879ab6be96c1ba1e20cc49d45d9465f18a4ded7->leave($__internal_8474105c87adf7e145401c083879ab6be96c1ba1e20cc49d45d9465f18a4ded7_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_fefe585a14a667adc82c274f4a206a4c544b62f2b52a3c872763d03f85dd3223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefe585a14a667adc82c274f4a206a4c544b62f2b52a3c872763d03f85dd3223->enter($__internal_fefe585a14a667adc82c274f4a206a4c544b62f2b52a3c872763d03f85dd3223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "  <div class=\"mbl btn-group\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_app_center", array("postStatus" => "all"));
        echo "\" type=\"button\"
       class=\"btn btn-default btn-sm ";
        // line 10
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            echo " btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.type.all"), "html", null, true);
        echo "</a>
    <a href=\" ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_app_center", array("postStatus" => "theme"));
        echo "\" type=\"button\"
       class=\"btn btn-default btn-sm ";
        // line 12
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "theme")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.type.theme"), "html", null, true);
        echo "</a>
    <a href=\" ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_app_center", array("postStatus" => "app"));
        echo "\" type=\"button\"
       class=\"btn btn-default btn-sm ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "app")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.type.app"), "html", null, true);
        echo "</a>
  </div>

  <div class=\"checkbox-group appTypeChoices\" RepeatDirection=\"Horizontal\" id=\"appTypeChoices\" name=\"appTypeChoices\"
       style=\"float:right;margin-top:-45px;\">
    <div class=\"sortedCourses\">
      <input type=\"checkbox\" name=\"appTypeChoices\" id=\"installedApps\"
             value=\"installedApps\" ";
        // line 21
        if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : $this->getContext($context, "appTypeChoices")), null)) : (null)) == "installedApps")) {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "showType" => "unhidden")), "html", null, true);
            echo "\"  checked ";
        } else {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "showType" => "hidden")), "html", null, true);
            echo "\" ";
        }
        echo ">
      ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.buyed_app_hidden"), "html", null, true);
        echo "
      <input type=\"hidden\" name=\"type\" value='";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "' id=\"type\">
    </div>
  </div>

  ";
        // line 27
        if ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), null)) : (null)) == "error")) {
            // line 28
            echo "    <div class=\"alert alert-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.error_tips", array("%cloudSettingUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud")));
            echo "</div>
  ";
        } elseif ((((        // line 29
array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), null)) : (null)) == "unlink")) {
            // line 30
            echo "    <p class=\"alert alert-danger\">
      ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.edu_cloud.connect_failed_tips", array("%EduSoho%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->removeCopyright("EduSoho"))), "html", null, true);
            echo "
    </p>
  ";
        } else {
            // line 34
            echo "    <table class=\"table table-striped table-hover\" id=\"app-table-container\">
      <thead>

      </thead>
      <tbody>

      ";
            // line 40
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
                // line 41
                echo "        ";
                $context["apps"] = (isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps"));
                // line 42
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "theme")) {
                // line 43
                echo "        ";
                $context["apps"] = (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme"));
                // line 44
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "app")) {
                // line 45
                echo "        ";
                $context["apps"] = (isset($context["allApp"]) ? $context["allApp"] : $this->getContext($context, "allApp"));
                // line 46
                echo "      ";
            }
            // line 47
            echo "
      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 49
                echo "        ";
                $context["installedApp"] = (($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array"), null)) : (null));
                // line 50
                echo "
        ";
                // line 51
                if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : $this->getContext($context, "appTypeChoices")), null)) : (null)) == "installedApps")) {
                    // line 52
                    echo "
          ";
                    // line 53
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : $this->getContext($context, "installedApp")))) {
                        // line 54
                        echo "
            ";
                        // line 55
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : $this->getContext($context, "installedApp"))) {
                            // line 56
                            echo "            ";
                        } else {
                            // line 57
                            echo "              <tr>
                <td>
                  ";
                            // line 59
                            $this->loadTemplate("admin/app/app-detail.html.twig", "admin/app/center.html.twig", 59)->display($context);
                            // line 60
                            echo "                  <div class=\"right-info pull-right\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                       data-url=\"";
                            // line 62
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\"
                       class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                            // line 63
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.package_update_btn"), "html", null, true);
                            echo "</a>
                  </div>
                </td>
              </tr>
            ";
                        }
                        // line 68
                        echo "          ";
                    } else {
                        // line 69
                        echo "            <tr>
              <td>
                ";
                        // line 71
                        $this->loadTemplate("admin/app/app-detail.html.twig", "admin/app/center.html.twig", 71)->display($context);
                        // line 72
                        echo "
                <div class=\"right-info pull-right\">
                  ";
                        // line 74
                        if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                            // line 75
                            echo "                    <a href=\"http://open.edusoho.com\" class=\"user-access\" target=_blank>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.user_access"), "html", null, true);
                            echo "</a>
                  ";
                        } else {
                            // line 77
                            echo "                    ";
                            if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                // line 78
                                echo "                      <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                         data-url=\"";
                                // line 79
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\"
                         class=\"btn btn-primary app-btn\" data-keyboard=\"false\"
                         data-backdrop=\"static\">";
                                // line 81
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.package_update_btn"), "html", null, true);
                                echo "</a>
                    ";
                            } else {
                                // line 83
                                echo "                      <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\"
                         target=\"_blank\">";
                                // line 84
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.buy_btn"), "html", null, true);
                                echo "</a>
                    ";
                            }
                            // line 86
                            echo "                    <p class=\"mtm\"><span class=\"text-muted\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.price"), "html", null, true);
                            echo "</span><span
                          class=\"price\"> ¥ ";
                            // line 87
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.free"), "html", null, true);
                            }
                            echo "</span>
                    </p>
                  ";
                        }
                        // line 90
                        echo "                </div>
              </td>
            </tr>
          ";
                    }
                    // line 94
                    echo "
        ";
                } else {
                    // line 96
                    echo "          <tr>
            <td>
              ";
                    // line 98
                    $this->loadTemplate("admin/app/app-detail.html.twig", "admin/app/center.html.twig", 98)->display($context);
                    // line 99
                    echo "              <div class=\"right-info pull-right\">

                ";
                    // line 101
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : $this->getContext($context, "installedApp")))) {
                        // line 102
                        echo "
                  ";
                        // line 103
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : $this->getContext($context, "installedApp"))) {
                            // line 104
                            echo "                    ";
                            if (((($this->getAttribute($context["app"], "ontrial", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "ontrial", array()), false)) : (false)) && ((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) != "ok"))) {
                                // line 105
                                echo "                      <p><a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.expired_btn"), "html", null, true);
                                echo "</a></p>
                      <p><a href=\"http://open.edusoho.com/app/";
                                // line 106
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\"
                            target=\"_blank\">";
                                // line 107
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.buy_btn"), "html", null, true);
                                echo "</a></p>
                    ";
                            } elseif (((($this->getAttribute(                            // line 108
$context["app"], "ontrial", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "ontrial", array()), false)) : (false)) && ((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == false))) {
                                // line 109
                                echo "                      <p><a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.ontrial_btn"), "html", null, true);
                                echo "</a></p>
                      <p><a href=\"http://open.edusoho.com/app/";
                                // line 110
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\"
                            target=\"_blank\">";
                                // line 111
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.buy_btn"), "html", null, true);
                                echo "</a></p>
                    ";
                            } else {
                                // line 113
                                echo "                      <a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.buyed_btn"), "html", null, true);
                                echo "</a>
                    ";
                            }
                            // line 115
                            echo "                  ";
                        } else {
                            // line 116
                            echo "                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                       data-url=\"";
                            // line 117
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\"
                       class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                            // line 118
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.package_update_btn"), "html", null, true);
                            echo "</a>
                  ";
                        }
                        // line 120
                        echo "
                  <p class=\"mtm\"><span class=\"text-muted\">";
                        // line 121
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.price"), "html", null, true);
                        echo "</span><span
                        class=\"price\"> ¥ ";
                        // line 122
                        if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.free"), "html", null, true);
                        }
                        echo "</span>
                  </p>
                ";
                    } else {
                        // line 125
                        echo "
                  ";
                        // line 126
                        if ($this->getAttribute($context["app"], "buyable", array(), "any", true, true)) {
                            // line 127
                            echo "                    ";
                            $context["triable"] = (($this->getAttribute($context["app"], "triable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "triable", array()), false)) : (false));
                            // line 128
                            echo "                    ";
                            if ((isset($context["triable"]) ? $context["triable"] : $this->getContext($context, "triable"))) {
                                // line 129
                                echo "                      <p><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                            data-url=\"";
                                // line 130
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\"
                            class=\"btn btn-primary app-btn\" data-keyboard=\"false\"
                            data-backdrop=\"static\">";
                                // line 132
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.tria_btn"), "html", null, true);
                                echo "</a></p>
                    ";
                            }
                            // line 134
                            echo "                    ";
                            if ($this->getAttribute($context["app"], "buyable", array())) {
                                // line 135
                                echo "                      <p><a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\"
                            target=\"_blank\">";
                                // line 136
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.buy_btn"), "html", null, true);
                                echo "</a></p>
                    ";
                            } else {
                                // line 138
                                echo "                      <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\"
                         target=\"_blank\">";
                                // line 139
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.show_detail_btn"), "html", null, true);
                                echo "</a>
                    ";
                            }
                            // line 141
                            echo "                    <p class=\"mtm\"><span class=\"text-muted\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.price"), "html", null, true);
                            echo "</span><span
                          class=\"price\"> ¥ ";
                            // line 142
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.free"), "html", null, true);
                            }
                            echo "</span>
                    </p>
                  ";
                        } else {
                            // line 145
                            echo "                    ";
                            if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                                // line 146
                                echo "                      <a href=\"http://www.edusoho.com/product/system\" class=\"user-access\"
                         target=_blank>";
                                // line 147
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.user_access"), "html", null, true);
                                echo "</a>
                    ";
                            } else {
                                // line 149
                                echo "                      ";
                                if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                    // line 150
                                    echo "                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                           data-url=\"";
                                    // line 151
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                    echo "\"
                           class=\"btn btn-primary app-btn\" data-keyboard=\"false\"
                           data-backdrop=\"static\">";
                                    // line 153
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.package_update_btn"), "html", null, true);
                                    echo "</a>
                      ";
                                } else {
                                    // line 155
                                    echo "                        <a href=\"http://open.edusoho.com/app/";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                    echo "\" class=\"btn btn-warning app-btn\"
                           target=\"_blank\">";
                                    // line 156
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.buy_btn"), "html", null, true);
                                    echo "</a>
                      ";
                                }
                                // line 158
                                echo "                      <p class=\"mtm\"><span class=\"text-muted\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.price"), "html", null, true);
                                echo "</span><span
                            class=\"price\"> ¥ ";
                                // line 159
                                if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                                } else {
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.app_center.free"), "html", null, true);
                                }
                                echo "</span>
                      </p>
                    ";
                            }
                            // line 162
                            echo "                  ";
                        }
                        // line 163
                        echo "                ";
                    }
                    // line 164
                    echo "
              </div>
            </td>
          </tr>
        ";
                }
                // line 169
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "      </tbody>
    </table>
  ";
        }
        
        $__internal_fefe585a14a667adc82c274f4a206a4c544b62f2b52a3c872763d03f85dd3223->leave($__internal_fefe585a14a667adc82c274f4a206a4c544b62f2b52a3c872763d03f85dd3223_prof);

    }

    public function getTemplateName()
    {
        return "admin/app/center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 170,  508 => 169,  501 => 164,  498 => 163,  495 => 162,  485 => 159,  480 => 158,  475 => 156,  470 => 155,  465 => 153,  460 => 151,  457 => 150,  454 => 149,  449 => 147,  446 => 146,  443 => 145,  433 => 142,  428 => 141,  423 => 139,  418 => 138,  413 => 136,  408 => 135,  405 => 134,  400 => 132,  395 => 130,  392 => 129,  389 => 128,  386 => 127,  384 => 126,  381 => 125,  371 => 122,  367 => 121,  364 => 120,  359 => 118,  355 => 117,  352 => 116,  349 => 115,  343 => 113,  338 => 111,  334 => 110,  329 => 109,  327 => 108,  323 => 107,  319 => 106,  314 => 105,  311 => 104,  309 => 103,  306 => 102,  304 => 101,  300 => 99,  298 => 98,  294 => 96,  290 => 94,  284 => 90,  274 => 87,  269 => 86,  264 => 84,  259 => 83,  254 => 81,  249 => 79,  246 => 78,  243 => 77,  237 => 75,  235 => 74,  231 => 72,  229 => 71,  225 => 69,  222 => 68,  214 => 63,  210 => 62,  206 => 60,  204 => 59,  200 => 57,  197 => 56,  195 => 55,  192 => 54,  190 => 53,  187 => 52,  185 => 51,  182 => 50,  179 => 49,  162 => 48,  159 => 47,  156 => 46,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  141 => 41,  139 => 40,  131 => 34,  125 => 31,  122 => 30,  120 => 29,  115 => 28,  113 => 27,  106 => 23,  102 => 22,  90 => 21,  76 => 14,  72 => 13,  64 => 12,  60 => 11,  52 => 10,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_app_center' %}

{% set script_controller = 'app/center' %}

{% block main %}
  <div class=\"mbl btn-group\">
    <a href=\"{{ url('admin_app_center', {postStatus: 'all' }) }}\" type=\"button\"
       class=\"btn btn-default btn-sm {% if type == 'all' %} btn-primary{% endif %}\">{{ 'admin.app_center.type.all'|trans }}</a>
    <a href=\" {{ url('admin_app_center', {postStatus: 'theme' }) }}\" type=\"button\"
       class=\"btn btn-default btn-sm {% if type == 'theme' %}btn-primary{% endif %}\">{{ 'admin.app_center.type.theme'|trans }}</a>
    <a href=\" {{ url('admin_app_center', {postStatus: 'app' }) }}\" type=\"button\"
       class=\"btn btn-default btn-sm {% if type == 'app' %}btn-primary{% endif %}\">{{ 'admin.app_center.type.app'|trans }}</a>
  </div>

  <div class=\"checkbox-group appTypeChoices\" RepeatDirection=\"Horizontal\" id=\"appTypeChoices\" name=\"appTypeChoices\"
       style=\"float:right;margin-top:-45px;\">
    <div class=\"sortedCourses\">
      <input type=\"checkbox\" name=\"appTypeChoices\" id=\"installedApps\"
             value=\"installedApps\" {% if appTypeChoices|default(null)  == 'installedApps' %} data-url=\"{{ path('admin_app_center',{postStatus: type,showType:'unhidden'}) }}\"  checked {% else %} data-url=\"{{ path('admin_app_center',{postStatus: type,showType:'hidden'}) }}\" {% endif %}>
      {{ 'admin.app_center.buyed_app_hidden'|trans }}
      <input type=\"hidden\" name=\"type\" value='{{ type }}' id=\"type\">
    </div>
  </div>

  {% if status|default(null) == 'error' %}
    <div class=\"alert alert-danger\">{{ 'admin.app_center.error_tips'|trans({'%cloudSettingUrl%': path('admin_setting_cloud')})|raw }}</div>
  {% elseif  status|default(null) == 'unlink' %}
    <p class=\"alert alert-danger\">
      {{'admin.edu_cloud.connect_failed_tips'|trans({'%EduSoho%': 'EduSoho'|copyright_less })}}
    </p>
  {% else %}
    <table class=\"table table-striped table-hover\" id=\"app-table-container\">
      <thead>

      </thead>
      <tbody>

      {% if type == 'all' %}
        {% set apps = apps %}
      {% elseif type == 'theme' %}
        {% set apps = theme %}
      {% elseif type == 'app' %}
        {% set apps = allApp %}
      {% endif %}

      {% for app in apps %}
        {% set installedApp = installedApps[app.code]|default(null) %}

        {% if appTypeChoices|default(null)  == 'installedApps' %}

          {% if app.purchased|default(false) == true or installedApp %}

            {% if installedApp %}
            {% else %}
              <tr>
                <td>
                  {% include 'admin/app/app-detail.html.twig' %}
                  <div class=\"right-info pull-right\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                       data-url=\"{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'}) }}\"
                       class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">{{ 'admin.app_center.package_update_btn'|trans }}</a>
                  </div>
                </td>
              </tr>
            {% endif %}
          {% else %}
            <tr>
              <td>
                {% include 'admin/app/app-detail.html.twig' %}

                <div class=\"right-info pull-right\">
                  {% if app.userAccess|default(null) == \"impossible\" %}
                    <a href=\"http://open.edusoho.com\" class=\"user-access\" target=_blank>{{ 'admin.app_center.user_access'|trans }}</a>
                  {% else %}
                    {% if app.price == 0 %}
                      <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                         data-url=\"{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'}) }}\"
                         class=\"btn btn-primary app-btn\" data-keyboard=\"false\"
                         data-backdrop=\"static\">{{ 'admin.app_center.package_update_btn'|trans }}</a>
                    {% else %}
                      <a href=\"http://open.edusoho.com/app/{{ app.code }}\" class=\"btn btn-warning app-btn\"
                         target=\"_blank\">{{ 'admin.app_center.buy_btn'|trans }}</a>
                    {% endif %}
                    <p class=\"mtm\"><span class=\"text-muted\">{{ 'admin.app_center.price'|trans }}</span><span
                          class=\"price\"> ¥ {% if app.price > 0 %}{{ app.price }}{% else %}{{ 'admin.app_center.free'|trans }}{% endif %}</span>
                    </p>
                  {% endif %}
                </div>
              </td>
            </tr>
          {% endif %}

        {% else %}
          <tr>
            <td>
              {% include 'admin/app/app-detail.html.twig' %}
              <div class=\"right-info pull-right\">

                {% if app.purchased|default(false) == true or installedApp %}

                  {% if installedApp %}
                    {% if (app.ontrial|default(false)) and (app.userAccess|default(null) != 'ok') %}
                      <p><a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">{{ 'admin.app_center.expired_btn'|trans }}</a></p>
                      <p><a href=\"http://open.edusoho.com/app/{{ app.code }}\" class=\"btn btn-warning app-btn\"
                            target=\"_blank\">{{ 'admin.app_center.buy_btn'|trans }}</a></p>
                    {% elseif (app.ontrial|default(false)) and app.purchased|default(false) == false %}
                      <p><a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">{{ 'admin.app_center.ontrial_btn'|trans }}</a></p>
                      <p><a href=\"http://open.edusoho.com/app/{{ app.code }}\" class=\"btn btn-warning app-btn\"
                            target=\"_blank\">{{ 'admin.app_center.buy_btn'|trans }}</a></p>
                    {% else %}
                      <a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">{{ 'admin.app_center.buyed_btn'|trans }}</a>
                    {% endif %}
                  {% else %}
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                       data-url=\"{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'}) }}\"
                       class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">{{ 'admin.app_center.package_update_btn'|trans }}</a>
                  {% endif %}

                  <p class=\"mtm\"><span class=\"text-muted\">{{ 'admin.app_center.price'|trans }}</span><span
                        class=\"price\"> ¥ {% if app.price > 0 %}{{ app.price }}{% else %}{{ 'admin.app_center.free'|trans }}{% endif %}</span>
                  </p>
                {% else %}

                  {% if app.buyable is defined %}
                    {% set triable = app.triable|default(false) %}
                    {% if triable %}
                      <p><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                            data-url=\"{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'}) }}\"
                            class=\"btn btn-primary app-btn\" data-keyboard=\"false\"
                            data-backdrop=\"static\">{{ 'admin.app_center.tria_btn'|trans }}</a></p>
                    {% endif %}
                    {% if app.buyable %}
                      <p><a href=\"http://open.edusoho.com/app/{{ app.code }}\" class=\"btn btn-warning app-btn\"
                            target=\"_blank\">{{ 'admin.app_center.buy_btn'|trans }}</a></p>
                    {% else %}
                      <a href=\"http://open.edusoho.com/app/{{ app.code }}\" class=\"btn btn-warning app-btn\"
                         target=\"_blank\">{{ 'admin.app_center.show_detail_btn'|trans }}</a>
                    {% endif %}
                    <p class=\"mtm\"><span class=\"text-muted\">{{ 'admin.app_center.price'|trans }}</span><span
                          class=\"price\"> ¥ {% if app.price > 0 %}{{ app.price }}{% else %}{{ 'admin.app_center.free'|trans }}{% endif %}</span>
                    </p>
                  {% else %}
                    {% if app.userAccess|default(null) == \"impossible\" %}
                      <a href=\"http://www.edusoho.com/product/system\" class=\"user-access\"
                         target=_blank>{{ 'admin.app_center.user_access'|trans }}</a>
                    {% else %}
                      {% if app.price == 0 %}
                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\"
                           data-url=\"{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'}) }}\"
                           class=\"btn btn-primary app-btn\" data-keyboard=\"false\"
                           data-backdrop=\"static\">{{ 'admin.app_center.package_update_btn'|trans }}</a>
                      {% else %}
                        <a href=\"http://open.edusoho.com/app/{{ app.code }}\" class=\"btn btn-warning app-btn\"
                           target=\"_blank\">{{ 'admin.app_center.buy_btn'|trans }}</a>
                      {% endif %}
                      <p class=\"mtm\"><span class=\"text-muted\">{{ 'admin.app_center.price'|trans }}</span><span
                            class=\"price\"> ¥ {% if app.price > 0 %}{{ app.price }}{% else %}{{ 'admin.app_center.free'|trans }}{% endif %}</span>
                      </p>
                    {% endif %}
                  {% endif %}
                {% endif %}

              </div>
            </td>
          </tr>
        {% endif %}
      {% endfor %}
      </tbody>
    </table>
  {% endif %}
{% endblock %}", "admin/app/center.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\app\\center.html.twig");
    }
}
