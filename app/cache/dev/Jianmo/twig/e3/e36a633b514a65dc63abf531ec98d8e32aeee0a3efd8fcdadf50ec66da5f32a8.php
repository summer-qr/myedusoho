<?php

/* courseset-manage/header.html.twig */
class __TwigTemplate_b787debb595e4a6a438a18a0e5f6d56a2d7ef1f6ac8d04dff33fb58d253e52e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'unfold' => array($this, 'block_unfold'),
            'coursesetImg' => array($this, 'block_coursesetImg'),
            'coursesetTitle' => array($this, 'block_coursesetTitle'),
            'courseType' => array($this, 'block_courseType'),
            'btn' => array($this, 'block_btn'),
            'courseTitle' => array($this, 'block_courseTitle'),
            'fold' => array($this, 'block_fold'),
            'close' => array($this, 'block_close'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb91b65b2acde2701dc8cf1dd0f681de9e88fd5cc3ea5989d3daa99dbd849f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb91b65b2acde2701dc8cf1dd0f681de9e88fd5cc3ea5989d3daa99dbd849f7c->enter($__internal_fb91b65b2acde2701dc8cf1dd0f681de9e88fd5cc3ea5989d3daa99dbd849f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseset-manage/header.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "courseset-manage/header.html.twig", 1);
        // line 2
        $this->displayBlock('js', $context, $blocks);
        // line 5
        $context["basepath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array())));
        // line 6
        echo "
<div class=\"courseset-manage-header ";
        // line 7
        if (((((array_key_exists("couserNum", $context)) ? (_twig_default_filter((isset($context["couserNum"]) ? $context["couserNum"] : $this->getContext($context, "couserNum")), 0)) : (0)) > 1) && (((array_key_exists("foldType", $context)) ? (_twig_default_filter((isset($context["foldType"]) ? $context["foldType"] : $this->getContext($context, "foldType")), 0)) : (0)) == 1))) {
            echo "courseset-manage-header--hide ";
        }
        echo "js-origin-header clearfix\">
  ";
        // line 8
        $this->displayBlock('unfold', $context, $blocks);
        // line 13
        echo "  <div class=\"clearfix js-origin-header-content ";
        if (((((array_key_exists("couserNum", $context)) ? (_twig_default_filter((isset($context["couserNum"]) ? $context["couserNum"] : $this->getContext($context, "couserNum")), 0)) : (0)) > 1) && (((array_key_exists("foldType", $context)) ? (_twig_default_filter((isset($context["foldType"]) ? $context["foldType"] : $this->getContext($context, "foldType")), 0)) : (0)) == 1))) {
            echo "courseset-manage-opacity ";
        }
        echo "\">
    ";
        // line 15
        echo "    ";
        $this->displayBlock('coursesetImg', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $context["publishUrl"] = ((array_key_exists("publishUrl", $context)) ? (_twig_default_filter((isset($context["publishUrl"]) ? $context["publishUrl"] : $this->getContext($context, "publishUrl")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_publish", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_publish", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array())))));
        // line 20
        echo "
    ";
        // line 22
        echo "    ";
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) == "closed")) {
            // line 23
            echo "      <span class=\"course-publish-status course-publish-status--closed\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.closed"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 24
(isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) == "draft")) {
            // line 25
            echo "      <span class=\"course-publish-status course-publish-status--unpublished\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.unpublished"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 26
(isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) == "published")) {
            // line 27
            echo "      ";
            if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "serializeMode", array()) == "serialized")) {
                // line 28
                echo "        <span class=\"course-publish-status course-publish-status--published\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.serialized"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 29
(isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "serializeMode", array()) == "finished")) {
                // line 30
                echo "        <span class=\"course-publish-status course-publish-status--unpublished\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.finished"), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 32
                echo "        <span class=\"course-publish-status course-publish-status--published\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.published"), "html", null, true);
                echo "</span>
      ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    <div class=\"courseset-manage-header-info\">
      <div class=\"courseset-manage-header-info__title text-overflow\" ";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array())) > 21)) {
            echo "data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
            echo "\" data-container=\"body\" ";
        }
        echo ">
        ";
        // line 38
        $this->displayBlock('coursesetTitle', $context, $blocks);
        // line 41
        echo "      </div>
      ";
        // line 42
        $this->displayBlock('courseType', $context, $blocks);
        // line 47
        echo "      <div class=\"courseset-manage-header-info__price color-danger\">
        ";
        // line 48
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "minCoursePrice", array()) == $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "maxCoursePrice", array()))) {
            // line 49
            echo "          ";
            $this->loadTemplate("common/price.html.twig", "courseset-manage/header.html.twig", 49)->display(array_merge($context, array("productPrice" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "minCoursePrice", array()))));
            // line 50
            echo "        ";
        } else {
            // line 51
            echo "          ";
            $this->loadTemplate("common/price.html.twig", "courseset-manage/header.html.twig", 51)->display(array_merge($context, array("productPrice" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "minCoursePrice", array()))));
            // line 52
            echo "          <span class=\"cd-text-sm\">～</span>
          ";
            // line 53
            $this->loadTemplate("common/price.html.twig", "courseset-manage/header.html.twig", 53)->display(array_merge($context, array("productPrice" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "maxCoursePrice", array()))));
            // line 54
            echo "        ";
        }
        // line 55
        echo "      </div>
    </div>

    <div class=\"courseset-manage-header-btn\">
      ";
        // line 59
        $this->displayBlock('btn', $context, $blocks);
        // line 69
        echo "
    </div>

    <div class=\"courseset-manage-header-data hidden-xs\">
      <span class=\"cd-text-medium\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.student_member"), "html", null, true);
        echo "</span>
      <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "studentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "studentNum", array()))) : ("")), "html", null, true);
        echo " </span></div>
    </div>

    ";
        // line 77
        if ( !$this->env->getExtension('AppBundle\Twig\CourseExtension')->isUnMultiCourseSet($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))) {
            // line 78
            echo "      <div class=\"courseset-manage-header-data hidden-xs\">
        <span class=\"cd-text-medium\">";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan"), "html", null, true);
            echo "</span>
        <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">";
            // line 80
            $this->displayBlock('courseTitle', $context, $blocks);
            echo "</span></div>
      </div>
    ";
        }
        // line 83
        echo "  </div>
</div>


";
        // line 87
        $this->displayBlock('fold', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('close', $context, $blocks);
        
        $__internal_fb91b65b2acde2701dc8cf1dd0f681de9e88fd5cc3ea5989d3daa99dbd849f7c->leave($__internal_fb91b65b2acde2701dc8cf1dd0f681de9e88fd5cc3ea5989d3daa99dbd849f7c_prof);

    }

    // line 2
    public function block_js($context, array $blocks = array())
    {
        $__internal_0396cfd5b3ddc1a645a3fb719592d3f1a97213317d3233cd12269ef6c938bf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0396cfd5b3ddc1a645a3fb719592d3f1a97213317d3233cd12269ef6c938bf7e->enter($__internal_0396cfd5b3ddc1a645a3fb719592d3f1a97213317d3233cd12269ef6c938bf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 3
        echo "  ";
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/courseset-manage/header/index.js"));
        
        $__internal_0396cfd5b3ddc1a645a3fb719592d3f1a97213317d3233cd12269ef6c938bf7e->leave($__internal_0396cfd5b3ddc1a645a3fb719592d3f1a97213317d3233cd12269ef6c938bf7e_prof);

    }

    // line 8
    public function block_unfold($context, array $blocks = array())
    {
        $__internal_4ab3b66a59d9f12229892556473cf13130c6ad8b884327fc307a78b69259dd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab3b66a59d9f12229892556473cf13130c6ad8b884327fc307a78b69259dd84->enter($__internal_4ab3b66a59d9f12229892556473cf13130c6ad8b884327fc307a78b69259dd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "unfold"));

        // line 9
        echo "    ";
        if (((((array_key_exists("couserNum", $context)) ? (_twig_default_filter((isset($context["couserNum"]) ? $context["couserNum"] : $this->getContext($context, "couserNum")), 0)) : (0)) > 1) && (((array_key_exists("foldType", $context)) ? (_twig_default_filter((isset($context["foldType"]) ? $context["foldType"] : $this->getContext($context, "foldType")), 0)) : (0)) == 1))) {
            // line 10
            echo "      <div class=\"courseset-manage-hide js-new-header\"><a class=\"js-show-courseset cd-link-assist\" href=\"javascript:;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base"), "html", null, true);
            echo "<i class=\"es-icon es-icon-xiala\"></i></a></div>
    ";
        }
        // line 12
        echo "  ";
        
        $__internal_4ab3b66a59d9f12229892556473cf13130c6ad8b884327fc307a78b69259dd84->leave($__internal_4ab3b66a59d9f12229892556473cf13130c6ad8b884327fc307a78b69259dd84_prof);

    }

    // line 15
    public function block_coursesetImg($context, array $blocks = array())
    {
        $__internal_a1378b8b5e46404a80977560439770dce8999e95a881a9c5ed5c8f9c43c60d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1378b8b5e46404a80977560439770dce8999e95a881a9c5ed5c8f9c43c60d05->enter($__internal_a1378b8b5e46404a80977560439770dce8999e95a881a9c5ed5c8f9c43c60d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "coursesetImg"));

        // line 16
        echo "      <img class=\"courseset-manage-header__img\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "large"), "courseSet.png"), "html", null, true);
        echo "\" /> <!-- courseSet.largePicture -->
    ";
        
        $__internal_a1378b8b5e46404a80977560439770dce8999e95a881a9c5ed5c8f9c43c60d05->leave($__internal_a1378b8b5e46404a80977560439770dce8999e95a881a9c5ed5c8f9c43c60d05_prof);

    }

    // line 38
    public function block_coursesetTitle($context, array $blocks = array())
    {
        $__internal_32366d366fd32b7d78fd873e33f5a405429c9900ef994e8ad3be583887bcf7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32366d366fd32b7d78fd873e33f5a405429c9900ef994e8ad3be583887bcf7c8->enter($__internal_32366d366fd32b7d78fd873e33f5a405429c9900ef994e8ad3be583887bcf7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "coursesetTitle"));

        // line 39
        echo "          <span class=\"cd-dark-major\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
        echo "</span>
        ";
        
        $__internal_32366d366fd32b7d78fd873e33f5a405429c9900ef994e8ad3be583887bcf7c8->leave($__internal_32366d366fd32b7d78fd873e33f5a405429c9900ef994e8ad3be583887bcf7c8_prof);

    }

    // line 42
    public function block_courseType($context, array $blocks = array())
    {
        $__internal_e77cbd666d9e180dd35871308865fcb02aabddb64407f0e6e318384ce880c6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77cbd666d9e180dd35871308865fcb02aabddb64407f0e6e318384ce880c6a4->enter($__internal_e77cbd666d9e180dd35871308865fcb02aabddb64407f0e6e318384ce880c6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courseType"));

        // line 43
        echo "        ";
        if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isUnMultiCourseSet($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))) {
            // line 44
            echo "          <span class=\"cd-tag cd-tag-orange\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseType"), $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "type", array()), array(), "array"), "html", null, true);
            echo "</span>
        ";
        }
        // line 46
        echo "      ";
        
        $__internal_e77cbd666d9e180dd35871308865fcb02aabddb64407f0e6e318384ce880c6a4->leave($__internal_e77cbd666d9e180dd35871308865fcb02aabddb64407f0e6e318384ce880c6a4_prof);

    }

    // line 59
    public function block_btn($context, array $blocks = array())
    {
        $__internal_ad2f2771eefc436d1d3be299f67ef60a5dc0176d1bd8ef3aef210402841d14d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2f2771eefc436d1d3be299f67ef60a5dc0176d1bd8ef3aef210402841d14d6->enter($__internal_ad2f2771eefc436d1d3be299f67ef60a5dc0176d1bd8ef3aef210402841d14d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btn"));

        // line 60
        echo "        ";
        // line 61
        echo "        ";
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) == "published")) {
            // line 62
            echo "          <a class=\"cd-btn cd-btn-primary\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["basepath"]) ? $context["basepath"] : $this->getContext($context, "basepath")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.learning.course.watch"), "html", null, true);
            echo "</a>
        ";
        }
        // line 64
        echo "
        ";
        // line 65
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) != "published")) {
            // line 66
            echo "          <a class=\"cd-btn cd-btn-default\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "defaultCourseId", array()), "previewAs" => "guest")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.preview.course"), "html", null, true);
            echo "</a><button class=\"cd-btn cd-btn-primary cd-ml16 js-courseset-publish-btn\" id=\"step-4\"  data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_publish", array("id" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.publish"), "html", null, true);
            echo "</button>
        ";
        }
        // line 68
        echo "      ";
        
        $__internal_ad2f2771eefc436d1d3be299f67ef60a5dc0176d1bd8ef3aef210402841d14d6->leave($__internal_ad2f2771eefc436d1d3be299f67ef60a5dc0176d1bd8ef3aef210402841d14d6_prof);

    }

    // line 80
    public function block_courseTitle($context, array $blocks = array())
    {
        $__internal_38f41485c078938cf78d240864ec981b7d3546610771a2c030a5478bca1f839b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f41485c078938cf78d240864ec981b7d3546610771a2c030a5478bca1f839b->enter($__internal_38f41485c078938cf78d240864ec981b7d3546610771a2c030a5478bca1f839b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courseTitle"));

        echo twig_escape_filter($this->env, ((array_key_exists("couserNum", $context)) ? (_twig_default_filter((isset($context["couserNum"]) ? $context["couserNum"] : $this->getContext($context, "couserNum")), 0)) : (0)), "html", null, true);
        
        $__internal_38f41485c078938cf78d240864ec981b7d3546610771a2c030a5478bca1f839b->leave($__internal_38f41485c078938cf78d240864ec981b7d3546610771a2c030a5478bca1f839b_prof);

    }

    // line 87
    public function block_fold($context, array $blocks = array())
    {
        $__internal_60fd74d64e62acff57cf03cb6b819c6f4b27a91b4a85e55740dd6e8080bee1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fd74d64e62acff57cf03cb6b819c6f4b27a91b4a85e55740dd6e8080bee1c0->enter($__internal_60fd74d64e62acff57cf03cb6b819c6f4b27a91b4a85e55740dd6e8080bee1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fold"));

        // line 88
        echo "  ";
        if (((((array_key_exists("couserNum", $context)) ? (_twig_default_filter((isset($context["couserNum"]) ? $context["couserNum"] : $this->getContext($context, "couserNum")), 0)) : (0)) > 1) && (((array_key_exists("foldType", $context)) ? (_twig_default_filter((isset($context["foldType"]) ? $context["foldType"] : $this->getContext($context, "foldType")), 0)) : (0)) == 1))) {
            // line 89
            echo "    <div class=\"text-center cd-dark-assist courseset-manage-fold js-shrink-item cd-mv8\"><a class=\"js-shrink-courseset cd-link-assist hidden\" href=\"javascript:;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer_service.close_btn"), "html", null, true);
            echo "<i class=\"es-icon es-icon-xiala\"></i></a></div>
  ";
        }
        
        $__internal_60fd74d64e62acff57cf03cb6b819c6f4b27a91b4a85e55740dd6e8080bee1c0->leave($__internal_60fd74d64e62acff57cf03cb6b819c6f4b27a91b4a85e55740dd6e8080bee1c0_prof);

    }

    // line 93
    public function block_close($context, array $blocks = array())
    {
        $__internal_1a95352c9568c81b8031a57cb0782098061352a379ed6f8af874367883fb9c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a95352c9568c81b8031a57cb0782098061352a379ed6f8af874367883fb9c4e->enter($__internal_1a95352c9568c81b8031a57cb0782098061352a379ed6f8af874367883fb9c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "close"));

        // line 94
        echo "  ";
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "status", array()) == "closed")) {
            // line 95
            echo "    <div class=\"cd-alert cd-alert-warning cd-mt24\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.remove_students_tips"), "html", null, true);
            echo "</div>
  ";
        }
        
        $__internal_1a95352c9568c81b8031a57cb0782098061352a379ed6f8af874367883fb9c4e->leave($__internal_1a95352c9568c81b8031a57cb0782098061352a379ed6f8af874367883fb9c4e_prof);

    }

    public function getTemplateName()
    {
        return "courseset-manage/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 95,  377 => 94,  371 => 93,  360 => 89,  357 => 88,  351 => 87,  339 => 80,  332 => 68,  320 => 66,  318 => 65,  315 => 64,  307 => 62,  304 => 61,  302 => 60,  296 => 59,  289 => 46,  283 => 44,  280 => 43,  274 => 42,  264 => 39,  258 => 38,  248 => 16,  242 => 15,  235 => 12,  229 => 10,  226 => 9,  220 => 8,  212 => 3,  206 => 2,  199 => 93,  196 => 92,  194 => 87,  188 => 83,  182 => 80,  178 => 79,  175 => 78,  173 => 77,  167 => 74,  163 => 73,  157 => 69,  155 => 59,  149 => 55,  146 => 54,  144 => 53,  141 => 52,  138 => 51,  135 => 50,  132 => 49,  130 => 48,  127 => 47,  125 => 42,  122 => 41,  120 => 38,  112 => 37,  108 => 35,  105 => 34,  99 => 32,  93 => 30,  91 => 29,  86 => 28,  83 => 27,  81 => 26,  76 => 25,  74 => 24,  69 => 23,  66 => 22,  63 => 20,  61 => 19,  58 => 18,  55 => 15,  48 => 13,  46 => 8,  40 => 7,  37 => 6,  35 => 5,  33 => 2,  31 => 1,);
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
{% block js %}
  {% do script(['app/js/courseset-manage/header/index.js']) %}
{% endblock %}
{% set basepath = path('course_show', {id: courseSet.defaultCourseId}) %}

<div class=\"courseset-manage-header {% if couserNum|default(0) > 1 and foldType|default(0) == 1 %}courseset-manage-header--hide {% endif %}js-origin-header clearfix\">
  {% block unfold %}
    {% if couserNum|default(0) > 1 and foldType|default(0) == 1 %}
      <div class=\"courseset-manage-hide js-new-header\"><a class=\"js-show-courseset cd-link-assist\" href=\"javascript:;\">{{ 'course.base'|trans }}<i class=\"es-icon es-icon-xiala\"></i></a></div>
    {% endif %}
  {% endblock %}
  <div class=\"clearfix js-origin-header-content {% if couserNum|default(0) > 1 and foldType|default(0) == 1 %}courseset-manage-opacity {% endif %}\">
    {# 课程封面 #}
    {% block coursesetImg %}
      <img class=\"courseset-manage-header__img\" src=\"{{ filepath(course_set_cover(courseSet, 'large'), 'courseSet.png') }}\" /> <!-- courseSet.largePicture -->
    {% endblock %}

    {% set publishUrl = publishUrl|default(path('course_set_manage_publish', {id:courseSet.id})) %}

    {# 课程发布状态 #}
    {% if courseSet.status=='closed' %}
      <span class=\"course-publish-status course-publish-status--closed\">{{'course.status.closed'|trans}}</span>
    {% elseif courseSet.status=='draft' %}
      <span class=\"course-publish-status course-publish-status--unpublished\">{{'course.status.unpublished'|trans}}</span>
    {% elseif courseSet.status=='published' %}
      {% if courseSet.serializeMode=='serialized' %}
        <span class=\"course-publish-status course-publish-status--published\">{{'course.status.serialized'|trans}}</span>
      {% elseif courseSet.serializeMode=='finished' %}
        <span class=\"course-publish-status course-publish-status--unpublished\">{{'course.status.finished'|trans}}</span>
      {% else %}
        <span class=\"course-publish-status course-publish-status--published\">{{'course.status.published'|trans}}</span>
      {% endif %}
    {% endif %}

    <div class=\"courseset-manage-header-info\">
      <div class=\"courseset-manage-header-info__title text-overflow\" {% if courseSet.title|length > 21 %}data-toggle=\"tooltip\" title=\"{{ courseSet.title }}\" data-container=\"body\" {% endif %}>
        {% block coursesetTitle %}
          <span class=\"cd-dark-major\">{{ courseSet.title }}</span>
        {% endblock %}
      </div>
      {% block courseType %}
        {% if is_un_multi_courseset(courseSet.id) %}
          <span class=\"cd-tag cd-tag-orange\">{{ dict('courseType')[courseSet.type] }}</span>
        {% endif %}
      {% endblock %}
      <div class=\"courseset-manage-header-info__price color-danger\">
        {% if courseSet.minCoursePrice == courseSet.maxCoursePrice %}
          {% include 'common/price.html.twig' with {'productPrice': courseSet.minCoursePrice} %}
        {% else %}
          {% include 'common/price.html.twig' with {'productPrice': courseSet.minCoursePrice} %}
          <span class=\"cd-text-sm\">～</span>
          {% include 'common/price.html.twig' with {'productPrice': courseSet.maxCoursePrice} %}
        {% endif %}
      </div>
    </div>

    <div class=\"courseset-manage-header-btn\">
      {% block btn %}
        {# 课程发布按钮 #}
        {% if courseSet.status == 'published' %}
          <a class=\"cd-btn cd-btn-primary\" target=\"_blank\" href=\"{{ basepath }}\">{{'my.learning.course.watch'|trans}}</a>
        {% endif %}

        {% if courseSet.status != 'published' %}
          <a class=\"cd-btn cd-btn-default\" target=\"_blank\" href=\"{{ path('course_show', {id: courseSet.defaultCourseId, 'previewAs':'guest'}) }}\">{{ 'course.preview.course'|trans }}</a><button class=\"cd-btn cd-btn-primary cd-ml16 js-courseset-publish-btn\" id=\"step-4\"  data-url=\"{{ path('course_set_manage_publish', {id:courseSet.id}) }}\">{{'course.btn.publish'|trans}}</button>
        {% endif %}
      {% endblock %}

    </div>

    <div class=\"courseset-manage-header-data hidden-xs\">
      <span class=\"cd-text-medium\">{{ 'course.student_member'|trans }}</span>
      <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">{{ courseSet.studentNum|default() }} </span></div>
    </div>

    {% if not is_un_multi_courseset(courseSet.id) %}
      <div class=\"courseset-manage-header-data hidden-xs\">
        <span class=\"cd-text-medium\">{{ 'course.plan'|trans }}</span>
        <div class=\"cd-mt16 cd-dark-major\"><span class=\"courseset-manage-header-data__num\">{% block courseTitle %}{{ couserNum|default(0) }}{% endblock %}</span></div>
      </div>
    {% endif %}
  </div>
</div>


{% block fold %}
  {% if couserNum|default(0) > 1 and foldType|default(0) == 1 %}
    <div class=\"text-center cd-dark-assist courseset-manage-fold js-shrink-item cd-mv8\"><a class=\"js-shrink-courseset cd-link-assist hidden\" href=\"javascript:;\">{{ 'customer_service.close_btn'|trans }}<i class=\"es-icon es-icon-xiala\"></i></a></div>
  {% endif %}
{% endblock %}

{% block close %}
  {% if courseSet.status == 'closed' %}
    <div class=\"cd-alert cd-alert-warning cd-mt24\">{{'course.remove_students_tips'|trans}}</div>
  {% endif %}
{% endblock %}
", "courseset-manage/header.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\courseset-manage\\header.html.twig");
    }
}
