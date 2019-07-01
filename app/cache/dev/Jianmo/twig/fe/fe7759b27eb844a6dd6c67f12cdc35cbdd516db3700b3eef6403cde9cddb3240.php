<?php

/* course/header/header-layout.html.twig */
class __TwigTemplate_b126498f223fc4187adf3ec36dbf7a279cd23a373cf4bd4e3211bac8c34857f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'course_header_info' => array($this, 'block_course_header_info'),
            'course_header_top' => array($this, 'block_course_header_top'),
            'course_header_qrcode' => array($this, 'block_course_header_qrcode'),
            'course_header_subtitle' => array($this, 'block_course_header_subtitle'),
            'course_header_people_num' => array($this, 'block_course_header_people_num'),
            'course_member_count' => array($this, 'block_course_member_count'),
            'course_member_exit' => array($this, 'block_course_member_exit'),
            'course_heard_content' => array($this, 'block_course_heard_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d0da820e695ffa42bc4f0bd51c0be6941c4f235c8aea818be3f8bd3670cf283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0da820e695ffa42bc4f0bd51c0be6941c4f235c8aea818be3f8bd3670cf283->enter($__internal_1d0da820e695ffa42bc4f0bd51c0be6941c4f235c8aea818be3f8bd3670cf283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/header/header-layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "course/header/header-layout.html.twig", 1);
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script("app/js/course/header-top/index.js");
        // line 3
        echo "
<!-- 3、加入后：任务式学习 -->
<div class=\"container cd-container\">
  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
        echo "</a></li>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("breadcrumbs", $context)) ? (_twig_default_filter((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")))) : ("")));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter((isset($context["page_type"]) ? $context["page_type"] : $this->getContext($context, "page_type")), "guest")) : ("guest")) == "member")) {
            // line 12
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
            echo " </a></li>
    ";
        } else {
            // line 14
            echo "      <li class=\"active\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
            echo " </li>
    ";
        }
        // line 16
        echo "  </ol>

  ";
        // line 18
        $this->displayBlock('course_header_info', $context, $blocks);
        // line 19
        echo "  <div class=\"es-section course-detail-section ";
        if ( !(isset($context["marketingPage"]) ? $context["marketingPage"] : $this->getContext($context, "marketingPage"))) {
            echo "course-detail-section--normal ";
        }
        echo " clearfix\">
    ";
        // line 20
        $this->displayBlock('course_header_top', $context, $blocks);
        // line 113
        echo "    ";
        $this->displayBlock('course_heard_content', $context, $blocks);
        // line 114
        echo "  </div>
</div>
";
        
        $__internal_1d0da820e695ffa42bc4f0bd51c0be6941c4f235c8aea818be3f8bd3670cf283->leave($__internal_1d0da820e695ffa42bc4f0bd51c0be6941c4f235c8aea818be3f8bd3670cf283_prof);

    }

    // line 18
    public function block_course_header_info($context, array $blocks = array())
    {
        $__internal_e2048600a28b82ffc228de87f356df8ffb3efb2d328a52680530d5d8c66d0d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2048600a28b82ffc228de87f356df8ffb3efb2d328a52680530d5d8c66d0d61->enter($__internal_e2048600a28b82ffc228de87f356df8ffb3efb2d328a52680530d5d8c66d0d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header_info"));

        
        $__internal_e2048600a28b82ffc228de87f356df8ffb3efb2d328a52680530d5d8c66d0d61->leave($__internal_e2048600a28b82ffc228de87f356df8ffb3efb2d328a52680530d5d8c66d0d61_prof);

    }

    // line 20
    public function block_course_header_top($context, array $blocks = array())
    {
        $__internal_e0ea731e350351a59aa20ae7de7e9232429d05f70b6272ff69aef7789d239263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ea731e350351a59aa20ae7de7e9232429d05f70b6272ff69aef7789d239263->enter($__internal_e0ea731e350351a59aa20ae7de7e9232429d05f70b6272ff69aef7789d239263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header_top"));

        // line 21
        echo "      <div class=\"course-detail-top clearfix\">
        ";
        // line 23
        echo "        <span class=\"tags mrm\">
          ";
        // line 24
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "serializeMode", array()) == "serialized")) {
            // line 25
            echo "            <span class=\"tag-serialing\"></span>
          ";
        } elseif (($this->getAttribute(        // line 26
(isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "serializeMode", array()) == "finished")) {
            // line 27
            echo "            <span class=\"tag-finished\"></span>
          ";
        }
        // line 29
        echo "        </span>
        <span class=\"course-detail-heading\">
          ";
        // line 31
        if ((isset($context["marketingPage"]) ? $context["marketingPage"] : $this->getContext($context, "marketingPage"))) {
            // line 32
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 34
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 36
        echo "          ";
        // line 37
        echo "          ";
        $this->displayBlock('course_header_qrcode', $context, $blocks);
        // line 46
        echo "        </span>
        ";
        // line 48
        echo "        ";
        $this->displayBlock('course_header_subtitle', $context, $blocks);
        // line 49
        echo "        ";
        // line 50
        echo "        <ul class=\"course-operation ";
        if ( !(isset($context["marketingPage"]) ? $context["marketingPage"] : $this->getContext($context, "marketingPage"))) {
            echo " course-operation--normal  ";
        }
        echo " hidden-xs hidden-sm clearfix\">
          <!--非营销页显示-->
          ";
        // line 52
        $this->displayBlock('course_header_people_num', $context, $blocks);
        // line 62
        echo "
          <!--营销页显示-->
          ";
        // line 64
        if ((isset($context["marketingPage"]) ? $context["marketingPage"] : $this->getContext($context, "marketingPage"))) {
            // line 65
            echo "            <li class=\"js-unfavorite-btn\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))), "html", null, true);
            echo "\"
                ";
            // line 66
            if ( !(isset($context["isUserFavorite"]) ? $context["isUserFavorite"] : $this->getContext($context, "isUserFavorite"))) {
                echo "style=\"display: none\" ";
            }
            echo ">
              <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "\"
                data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmark color-primary\"></i>
              </a>
            </li>
            <li class=\"js-favorite-btn\" id=\"favorite-btn\" data-url=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))), "html", null, true);
            echo "\"
                ";
            // line 72
            if ((isset($context["isUserFavorite"]) ? $context["isUserFavorite"] : $this->getContext($context, "isUserFavorite"))) {
                echo "style=\"display: none\"";
            }
            echo ">
              <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "\"
                data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmarkoutline\"></i>
              </a>
            </li>
          ";
        }
        // line 78
        echo "
          <li class=\"es-share top\">
            <a class=\"btn btn-default btn-xs dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-share\"></i>
            </a>
            ";
        // line 83
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-layout.html.twig", 83)->display(array_merge($context, array("type" => "courseSet")));
        // line 84
        echo "          </li>

          ";
        // line 86
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))));
        echo "

          ";
        // line 88
        $context["canManage"] = (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage"));
        // line 89
        echo "          ";
        if ((isset($context["canManage"]) ? $context["canManage"] : $this->getContext($context, "canManage"))) {
            // line 90
            echo "            <li>
              ";
            // line 91
            if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter((isset($context["page_type"]) ? $context["page_type"] : $this->getContext($context, "page_type")), "guest")) : ("guest")) == "member")) {
                // line 92
                echo "                <a class=\"btn btn-default btn-xs \"
                  href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"
                  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_manage"), "html", null, true);
                echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-setting\"></i>
                </a>
              ";
            } else {
                // line 99
                echo "                <a class=\"btn btn-default btn-xs \"
                  href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))), "html", null, true);
                echo "\"
                  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_manage"), "html", null, true);
                echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-setting\"></i>
                </a>
              ";
            }
            // line 106
            echo "            </li>
          ";
        }
        // line 108
        echo "          ";
        $this->displayBlock('course_member_exit', $context, $blocks);
        // line 109
        echo "        </ul>

      </div>
    ";
        
        $__internal_e0ea731e350351a59aa20ae7de7e9232429d05f70b6272ff69aef7789d239263->leave($__internal_e0ea731e350351a59aa20ae7de7e9232429d05f70b6272ff69aef7789d239263_prof);

    }

    // line 37
    public function block_course_header_qrcode($context, array $blocks = array())
    {
        $__internal_93d14f3c831c03a58f56f338574f5ff95ff6ef81c1c95a6771ba85f502c0a105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d14f3c831c03a58f56f338574f5ff95ff6ef81c1c95a6771ba85f502c0a105->enter($__internal_93d14f3c831c03a58f56f338574f5ff95ff6ef81c1c95a6771ba85f502c0a105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header_qrcode"));

        // line 38
        echo "            <span class=\"es-qrcode top pt5 hidden-xs\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_qrcode", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.tips.scan_qrcode_tips"), "html", null, true);
        echo "
              </span>
            </span>
          ";
        
        $__internal_93d14f3c831c03a58f56f338574f5ff95ff6ef81c1c95a6771ba85f502c0a105->leave($__internal_93d14f3c831c03a58f56f338574f5ff95ff6ef81c1c95a6771ba85f502c0a105_prof);

    }

    // line 48
    public function block_course_header_subtitle($context, array $blocks = array())
    {
        $__internal_980055565eed2d23cec7cf1d8333c7bec8d02134b2ba5cf2ecbdc3dd2019a065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980055565eed2d23cec7cf1d8333c7bec8d02134b2ba5cf2ecbdc3dd2019a065->enter($__internal_980055565eed2d23cec7cf1d8333c7bec8d02134b2ba5cf2ecbdc3dd2019a065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header_subtitle"));

        
        $__internal_980055565eed2d23cec7cf1d8333c7bec8d02134b2ba5cf2ecbdc3dd2019a065->leave($__internal_980055565eed2d23cec7cf1d8333c7bec8d02134b2ba5cf2ecbdc3dd2019a065_prof);

    }

    // line 52
    public function block_course_header_people_num($context, array $blocks = array())
    {
        $__internal_e5e1a20af7e77475dbf663923cc18df6eaadf2f408048993f5d5f251e10d8e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e1a20af7e77475dbf663923cc18df6eaadf2f408048993f5d5f251e10d8e82->enter($__internal_e5e1a20af7e77475dbf663923cc18df6eaadf2f408048993f5d5f251e10d8e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header_people_num"));

        // line 53
        echo "            ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 54
            echo "              <li>
                <span class=\"btn btn-xs cursor-default\">
                  <i class=\"es-icon es-icon-people text-16\"></i>
                  <span class=\"mls\">";
            // line 57
            $this->displayBlock('course_member_count', $context, $blocks);
            echo "</span>
                </span>
              </li>
            ";
        }
        // line 61
        echo "          ";
        
        $__internal_e5e1a20af7e77475dbf663923cc18df6eaadf2f408048993f5d5f251e10d8e82->leave($__internal_e5e1a20af7e77475dbf663923cc18df6eaadf2f408048993f5d5f251e10d8e82_prof);

    }

    // line 57
    public function block_course_member_count($context, array $blocks = array())
    {
        $__internal_55508d3923de9afcc04fee8034f97ae4a684bdbbcd655c329b0869de6d381f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55508d3923de9afcc04fee8034f97ae4a684bdbbcd655c329b0869de6d381f48->enter($__internal_55508d3923de9afcc04fee8034f97ae4a684bdbbcd655c329b0869de6d381f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_member_count"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_member_count", array("%studentsNum%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum", array()))), "html", null, true);
        echo " ";
        
        $__internal_55508d3923de9afcc04fee8034f97ae4a684bdbbcd655c329b0869de6d381f48->leave($__internal_55508d3923de9afcc04fee8034f97ae4a684bdbbcd655c329b0869de6d381f48_prof);

    }

    // line 108
    public function block_course_member_exit($context, array $blocks = array())
    {
        $__internal_c1aea0cc6d207667c31e6b8c40f6638a12a6517699baf4610ddfec7c659d7f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1aea0cc6d207667c31e6b8c40f6638a12a6517699baf4610ddfec7c659d7f1c->enter($__internal_c1aea0cc6d207667c31e6b8c40f6638a12a6517699baf4610ddfec7c659d7f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_member_exit"));

        
        $__internal_c1aea0cc6d207667c31e6b8c40f6638a12a6517699baf4610ddfec7c659d7f1c->leave($__internal_c1aea0cc6d207667c31e6b8c40f6638a12a6517699baf4610ddfec7c659d7f1c_prof);

    }

    // line 113
    public function block_course_heard_content($context, array $blocks = array())
    {
        $__internal_ee949114263d103bc65e80ddc95e5d159e6d67dff8390576f4c1bcf39c00f5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee949114263d103bc65e80ddc95e5d159e6d67dff8390576f4c1bcf39c00f5c5->enter($__internal_ee949114263d103bc65e80ddc95e5d159e6d67dff8390576f4c1bcf39c00f5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_heard_content"));

        
        $__internal_ee949114263d103bc65e80ddc95e5d159e6d67dff8390576f4c1bcf39c00f5c5->leave($__internal_ee949114263d103bc65e80ddc95e5d159e6d67dff8390576f4c1bcf39c00f5c5_prof);

    }

    public function getTemplateName()
    {
        return "course/header/header-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 113,  377 => 108,  364 => 57,  357 => 61,  350 => 57,  345 => 54,  342 => 53,  336 => 52,  325 => 48,  314 => 42,  306 => 38,  300 => 37,  290 => 109,  287 => 108,  283 => 106,  275 => 101,  271 => 100,  268 => 99,  260 => 94,  256 => 93,  253 => 92,  251 => 91,  248 => 90,  245 => 89,  243 => 88,  238 => 86,  234 => 84,  232 => 83,  226 => 80,  222 => 78,  214 => 73,  208 => 72,  204 => 71,  197 => 67,  191 => 66,  186 => 65,  184 => 64,  180 => 62,  178 => 52,  170 => 50,  168 => 49,  165 => 48,  162 => 46,  159 => 37,  157 => 36,  151 => 34,  145 => 32,  143 => 31,  139 => 29,  135 => 27,  133 => 26,  130 => 25,  128 => 24,  125 => 23,  122 => 21,  116 => 20,  105 => 18,  96 => 114,  93 => 113,  91 => 20,  84 => 19,  82 => 18,  78 => 16,  72 => 14,  64 => 12,  61 => 11,  50 => 9,  46 => 8,  40 => 7,  34 => 3,  32 => 2,  30 => 1,);
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
{% do script('app/js/course/header-top/index.js') %}

<!-- 3、加入后：任务式学习 -->
<div class=\"container cd-container\">
  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"{{ path('homepage') }}\">{{'homepage'|trans}}</a></li>
    {% for breadcrumb in breadcrumbs|default() %}
      <li><a href=\"{{ path('course_set_explore',{'category':breadcrumb.code}) }}\">{{ breadcrumb.name }}</a></li>
    {% endfor %}
    {% if page_type|default('guest') == 'member' %}
      <li><a href=\"{{ path('course_show', {id: courseSet.defaultCourseId}) }}\">{{ courseSet.title }} </a></li>
    {% else %}
      <li class=\"active\">{{ courseSet.title }} </li>
    {% endif %}
  </ol>

  {% block course_header_info %}{% endblock %}
  <div class=\"es-section course-detail-section {% if not marketingPage %}course-detail-section--normal {% endif %} clearfix\">
    {% block course_header_top %}
      <div class=\"course-detail-top clearfix\">
        {# 已完成，更新中标志 tags #}
        <span class=\"tags mrm\">
          {% if courseSet.serializeMode == 'serialized' %}
            <span class=\"tag-serialing\"></span>
          {% elseif courseSet.serializeMode == 'finished' %}
            <span class=\"tag-finished\"></span>
          {% endif %}
        </span>
        <span class=\"course-detail-heading\">
          {% if marketingPage %}
            {{ courseSet.title }}
            {% else %}
            {{ course.title }}
          {% endif %}
          {# 二维码标志 #}
          {% block course_header_qrcode %}
            <span class=\"es-qrcode top pt5 hidden-xs\" data-url=\"{{ path('course_qrcode', { id: course.id }) }}\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                {{ 'site.tips.scan_qrcode_tips'|trans }}
              </span>
            </span>
          {% endblock %}
        </span>
        {# 副标题显示 #}
        {% block course_header_subtitle %}{% endblock %}
        {# 图标操作栏 #}
        <ul class=\"course-operation {% if not marketingPage %} course-operation--normal  {% endif %} hidden-xs hidden-sm clearfix\">
          <!--非营销页显示-->
          {% block course_header_people_num %}
            {% if setting('course.show_student_num_enabled', '1') == 1 %}
              <li>
                <span class=\"btn btn-xs cursor-default\">
                  <i class=\"es-icon es-icon-people text-16\"></i>
                  <span class=\"mls\">{% block course_member_count %}{{ 'course.course_member_count'|trans({'%studentsNum%':course.studentNum}) }} {% endblock %}</span>
                </span>
              </li>
            {% endif %}
          {% endblock %}

          <!--营销页显示-->
          {% if marketingPage %}
            <li class=\"js-unfavorite-btn\" id=\"unfavorite-btn\" data-url=\"{{ path('course_set_unfavorite', {id: course.courseSetId }) }}\"
                {% if not isUserFavorite %}style=\"display: none\" {% endif %}>
              <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'course.status.followed'|trans }}\"
                data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmark color-primary\"></i>
              </a>
            </li>
            <li class=\"js-favorite-btn\" id=\"favorite-btn\" data-url=\"{{ path('course_set_favorite', {id: course.courseSetId }) }}\"
                {% if isUserFavorite %}style=\"display: none\"{% endif %}>
              <a class=\"btn btn-default btn-xs\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'course.status.follow'|trans }}\"
                data-trigger=\"hover\"> <i class=\"es-icon es-icon-bookmarkoutline\"></i>
              </a>
            </li>
          {% endif %}

          <li class=\"es-share top\">
            <a class=\"btn btn-default btn-xs dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"{{ 'course.share'|trans }}\">
              <i class=\"es-icon es-icon-share\"></i>
            </a>
            {% include 'common/share-dropdown.html.twig' with {type:'courseSet'} %}
          </li>

          {{ slot('course.header-marketing-btn.extension', {'course': course}) }}

          {% set canManage =  member.role|default('') == 'teacher' or has_permission('admin_course_content_manage') %}
          {% if canManage %}
            <li>
              {% if page_type|default('guest') == 'member' %}
                <a class=\"btn btn-default btn-xs \"
                  href=\"{{ path('course_set_manage_course_tasks', {courseSetId: course.courseSetId, courseId: course.id }) }}\"
                  data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'course.course_manage'|trans }}\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-setting\"></i>
                </a>
              {% else %}
                <a class=\"btn btn-default btn-xs \"
                  href=\"{{ path('course_set_manage_base', {id: course.courseSetId}) }}\"
                  data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'course.course_manage'|trans }}\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-setting\"></i>
                </a>
              {% endif %}
            </li>
          {% endif %}
          {% block course_member_exit %}{% endblock %}
        </ul>

      </div>
    {% endblock %}
    {% block course_heard_content %}{% endblock %}
  </div>
</div>
", "course/header/header-layout.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\header\\header-layout.html.twig");
    }
}
