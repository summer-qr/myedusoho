<?php

/* course/course-show.html.twig */
class __TwigTemplate_50f0b1d3dc63adf76c24fd56448df26f2d83980cf4f47aa181166e72db2657cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "course/course-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'format_detection' => array($this, 'block_format_detection'),
            'full_content' => array($this, 'block_full_content'),
            'detail_content' => array($this, 'block_detail_content'),
            'member_expired' => array($this, 'block_member_expired'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5e1e937484f916ce4b37e95b2224f345cf7e07f50728686653c1103e2bb1900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e1e937484f916ce4b37e95b2224f345cf7e07f50728686653c1103e2bb1900->enter($__internal_a5e1e937484f916ce4b37e95b2224f345cf7e07f50728686653c1103e2bb1900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/course-show.html.twig"));

        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/easy-pie-chart/dist/jquery.easypiechart.js", 1 => "libs/excanvas-compiled.js", 2 => "libs/jquery-countdown.js", 3 => "app/js/courseset/show/index.js"));
        // line 5
        $context["course_set"] = twig_array_merge($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSet", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))), array("tags" => "tags"));
        // line 6
        $context["bodyClass"] = "course-dashboard-page";
        // line 7
        $context["description"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "summary", array())) ? ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "summary", array())) : ($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : $this->getContext($context, "course_set")), "summary", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e1e937484f916ce4b37e95b2224f345cf7e07f50728686653c1103e2bb1900->leave($__internal_a5e1e937484f916ce4b37e95b2224f345cf7e07f50728686653c1103e2bb1900_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_01fc30c22d09456e782b5ecc96d0c4548c99b48af4a0c53ee6b975dcf4539af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fc30c22d09456e782b5ecc96d0c4548c99b48af4a0c53ee6b975dcf4539af2->enter($__internal_01fc30c22d09456e782b5ecc96d0c4548c99b48af4a0c53ee6b975dcf4539af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : $this->getContext($context, "course_set")), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_01fc30c22d09456e782b5ecc96d0c4548c99b48af4a0c53ee6b975dcf4539af2->leave($__internal_01fc30c22d09456e782b5ecc96d0c4548c99b48af4a0c53ee6b975dcf4539af2_prof);

    }

    // line 11
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_21c61332d881754f4ecdc59f177be62c2f300c768dbb12c10e5c68f677b36264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c61332d881754f4ecdc59f177be62c2f300c768dbb12c10e5c68f677b36264->enter($__internal_21c61332d881754f4ecdc59f177be62c2f300c768dbb12c10e5c68f677b36264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 12
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : $this->getContext($context, "course_set")), "tags", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            $this->displayParentBlock("keywords", $context, $blocks);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_21c61332d881754f4ecdc59f177be62c2f300c768dbb12c10e5c68f677b36264->leave($__internal_21c61332d881754f4ecdc59f177be62c2f300c768dbb12c10e5c68f677b36264_prof);

    }

    // line 15
    public function block_description($context, array $blocks = array())
    {
        $__internal_2aae91b694148d1640ac0db6644cec9f211d5bbb96067f61a972add9383838e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aae91b694148d1640ac0db6644cec9f211d5bbb96067f61a972add9383838e1->enter($__internal_2aae91b694148d1640ac0db6644cec9f211d5bbb96067f61a972add9383838e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml((isset($context["description"]) ? $context["description"] : $this->getContext($context, "description"))), ""), 100);
        
        $__internal_2aae91b694148d1640ac0db6644cec9f211d5bbb96067f61a972add9383838e1->leave($__internal_2aae91b694148d1640ac0db6644cec9f211d5bbb96067f61a972add9383838e1_prof);

    }

    // line 16
    public function block_format_detection($context, array $blocks = array())
    {
        $__internal_44c1fe8374283bae7fd5b50e0e6ecd56268302e7a69a742e6f6374dd31ad1134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c1fe8374283bae7fd5b50e0e6ecd56268302e7a69a742e6f6374dd31ad1134->enter($__internal_44c1fe8374283bae7fd5b50e0e6ecd56268302e7a69a742e6f6374dd31ad1134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "format_detection"));

        echo "telephone=no";
        
        $__internal_44c1fe8374283bae7fd5b50e0e6ecd56268302e7a69a742e6f6374dd31ad1134->leave($__internal_44c1fe8374283bae7fd5b50e0e6ecd56268302e7a69a742e6f6374dd31ad1134_prof);

    }

    // line 17
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_284a6e84a2edf141864a1135d23e1accfe20a105c9b69d7c3b5a501d8532554c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284a6e84a2edf141864a1135d23e1accfe20a105c9b69d7c3b5a501d8532554c->enter($__internal_284a6e84a2edf141864a1135d23e1accfe20a105c9b69d7c3b5a501d8532554c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 18
        echo "    ";
        $context["eventReportParams"] = array("user-id" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0)));
        // line 19
        echo "    ";
        $this->loadTemplate("event_report.html.twig", "course/course-show.html.twig", 19)->display(array_merge($context, array("eventName" => "course.view", "subjectType" => "course", "subjectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "eventReportParams" => (isset($context["eventReportParams"]) ? $context["eventReportParams"] : $this->getContext($context, "eventReportParams")))));
        // line 20
        echo "
  ";
        // line 21
        $context["previewAs"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "previewAs"), "method");
        // line 22
        echo "  ";
        $context["defaultMetas"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->getCourseShowMetas(((((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), null)) : (null))) ? ("member") : ("guest")));
        // line 23
        echo "  ";
        $context["metas"] = ((array_key_exists("metas", $context)) ? (_twig_default_filter((isset($context["metas"]) ? $context["metas"] : $this->getContext($context, "metas")), (isset($context["defaultMetas"]) ? $context["defaultMetas"] : $this->getContext($context, "defaultMetas")))) : ((isset($context["defaultMetas"]) ? $context["defaultMetas"] : $this->getContext($context, "defaultMetas"))));
        // line 24
        echo "  ";
        $context["route_params"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
        // line 25
        echo "
  ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute((isset($context["metas"]) ? $context["metas"] : $this->getContext($context, "metas")), "header", array()), array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), null)) : (null)))));
        echo "

  ";
        // line 28
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("marketing.tool", array("type" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())));
        echo "

  <div class=\"container cd-container\">
    <div class=\"row cd-row\">
      <div class=\"col-lg-9 col-md-8 course-detail-content\">
        ";
        // line 33
        $this->loadTemplate("course/announcement/block.html.twig", "course/course-show.html.twig", 33)->display(array_merge($context, array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))));
        // line 34
        echo "
        ";
        // line 35
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.show.content.section", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))));
        echo "

        <section class=\"es-section\">
          <div class=\"nav-btn-tab\">

\t          ";
        // line 40
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), null)) : (null))) {
            // line 41
            echo "\t\t          ";
            $this->loadTemplate("course/header/nav-tab-for-member.html.twig", "course/course-show.html.twig", 41)->display($context);
            // line 42
            echo "\t          ";
        } else {
            // line 43
            echo "\t\t          ";
            $this->loadTemplate("course/header/nav-tab-for-guest.html.twig", "course/course-show.html.twig", 43)->display($context);
            // line 44
            echo "\t          ";
        }
        // line 45
        echo "
            ";
        // line 46
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((array_key_exists("isCourseTeacher", $context)) ? (_twig_default_filter((isset($context["isCourseTeacher"]) ? $context["isCourseTeacher"] : $this->getContext($context, "isCourseTeacher")), false)) : (false)))) {
            // line 47
            echo "              <div class=\"btnbar hidden-xs\">
                <a href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\"
                  class=\"btn btn-link\">
                  <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
                  ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.announcement"), "html", null, true);
            echo "
                </a>
              </div>
            ";
        }
        // line 56
        echo "
          </div>
          ";
        // line 58
        $this->displayBlock('detail_content', $context, $blocks);
        // line 61
        echo "        </section>

        ";
        // line 63
        $this->loadTemplate("course/block/related-courses.html.twig", "course/course-show.html.twig", 63)->display(array_merge($context, array("courseSetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))));
        // line 64
        echo "
      </div>

      <div class=\"col-lg-3 col-md-4 course-sidebar\">

        ";
        // line 69
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.show.sidebar", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))));
        echo "

        ";
        // line 72
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["metas"]) ? $context["metas"] : $this->getContext($context, "metas")), "widgets", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["widget"]) {
            // line 73
            echo "          ";
            if ((((((($this->getAttribute($context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "classroom") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "parentId", array()) > 0)) || (((($this->getAttribute(            // line 74
$context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "course") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "parentId", array()) == 0))) || ((($this->getAttribute(            // line 75
$context["widget"], "showMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget"], "showMode", array()), "all")) : ("all")) == "all"))) {
                // line 76
                echo "            ";
                if (($this->getAttribute($context["widget"], "renderType", array()) == "render")) {
                    // line 77
                    echo "              ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute($context["widget"], "uri", array()), array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), array())) : (array())))));
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 78
$context["widget"], "renderType", array()) == "include")) {
                    // line 79
                    echo "              ";
                    $this->loadTemplate($this->getAttribute($context["widget"], "uri", array()), "course/course-show.html.twig", 79)->display(array_merge($context, array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")))));
                    // line 80
                    echo "            ";
                }
                // line 81
                echo "          ";
            }
            // line 82
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "      </div>

    </div>
  </div>

  ";
        // line 88
        $this->displayBlock('member_expired', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->loadTemplate("common/weixin-share.html.twig", "course/course-show.html.twig", 96)->display(array_merge($context, array("title" => $this->getAttribute(        // line 97
(isset($context["course_set"]) ? $context["course_set"] : $this->getContext($context, "course_set")), "title", array()), "desc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getPurifyAndTrimHtml(strip_tags($this->getAttribute(        // line 98
(isset($context["course_set"]) ? $context["course_set"] : $this->getContext($context, "course_set")), "summary", array()))), "link" => $this->getAttribute($this->getAttribute(        // line 99
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "imgUrl" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFurl((($this->getAttribute($this->getAttribute(        // line 100
(isset($context["course_set"]) ? $context["course_set"] : null), "cover", array(), "any", false, true), "large", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), "cover", array(), "any", false, true), "large", array()))) : ("")), "course.png"))));
        // line 102
        echo "
  ";
        // line 103
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.bottom.extension", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))));
        echo "
";
        
        $__internal_284a6e84a2edf141864a1135d23e1accfe20a105c9b69d7c3b5a501d8532554c->leave($__internal_284a6e84a2edf141864a1135d23e1accfe20a105c9b69d7c3b5a501d8532554c_prof);

    }

    // line 58
    public function block_detail_content($context, array $blocks = array())
    {
        $__internal_6a5f6c9b5002660ce0affc62c238e3ecfcc2ac7fc9f5d617343a9bb45fb7e2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5f6c9b5002660ce0affc62c238e3ecfcc2ac7fc9f5d617343a9bb45fb7e2f2->enter($__internal_6a5f6c9b5002660ce0affc62c238e3ecfcc2ac7fc9f5d617343a9bb45fb7e2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "detail_content"));

        // line 59
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["metas"]) ? $context["metas"] : $this->getContext($context, "metas")), "tabs", array()), (isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), array(), "array"), "content", array()), array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "member" => ((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), null)) : (null)))));
        echo "
          ";
        
        $__internal_6a5f6c9b5002660ce0affc62c238e3ecfcc2ac7fc9f5d617343a9bb45fb7e2f2->leave($__internal_6a5f6c9b5002660ce0affc62c238e3ecfcc2ac7fc9f5d617343a9bb45fb7e2f2_prof);

    }

    // line 88
    public function block_member_expired($context, array $blocks = array())
    {
        $__internal_330f5b006ee9c486598f7b48225d55faf72d3a2756d57932e26fabef7ada33b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330f5b006ee9c486598f7b48225d55faf72d3a2756d57932e26fabef7ada33b5->enter($__internal_330f5b006ee9c486598f7b48225d55faf72d3a2756d57932e26fabef7ada33b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "member_expired"));

        // line 89
        echo "    ";
        if ($this->env->getExtension('AppBundle\Twig\CourseExtension')->isMemberExpired(((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), null)) : (null)), ((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), null)) : (null)))) {
            // line 90
            echo "      <div class=\"member-expire\">
        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_member_expired", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\"></a>
      </div>
    ";
        }
        // line 94
        echo "  ";
        
        $__internal_330f5b006ee9c486598f7b48225d55faf72d3a2756d57932e26fabef7ada33b5->leave($__internal_330f5b006ee9c486598f7b48225d55faf72d3a2756d57932e26fabef7ada33b5_prof);

    }

    public function getTemplateName()
    {
        return "course/course-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 94,  366 => 91,  363 => 90,  360 => 89,  354 => 88,  344 => 59,  338 => 58,  329 => 103,  326 => 102,  324 => 100,  323 => 99,  322 => 98,  321 => 97,  320 => 96,  317 => 95,  315 => 88,  308 => 83,  294 => 82,  291 => 81,  288 => 80,  285 => 79,  283 => 78,  278 => 77,  275 => 76,  273 => 75,  272 => 74,  270 => 73,  252 => 72,  247 => 69,  240 => 64,  238 => 63,  234 => 61,  232 => 58,  228 => 56,  221 => 52,  215 => 49,  211 => 47,  209 => 46,  206 => 45,  203 => 44,  200 => 43,  197 => 42,  194 => 41,  192 => 40,  184 => 35,  181 => 34,  179 => 33,  171 => 28,  166 => 26,  163 => 25,  160 => 24,  157 => 23,  154 => 22,  152 => 21,  149 => 20,  146 => 19,  143 => 18,  137 => 17,  125 => 16,  113 => 15,  69 => 12,  63 => 11,  49 => 9,  42 => 1,  40 => 7,  38 => 6,  36 => 5,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% do script(['libs/easy-pie-chart/dist/jquery.easypiechart.js','libs/excanvas-compiled.js','libs/jquery-countdown.js',
'app/js/courseset/show/index.js']) %}

{% set course_set = data('CourseSet', {id: course.courseSetId})|merge({'tags': 'tags'}) %}
{% set bodyClass = 'course-dashboard-page' %}
{% set description = course.summary ? course.summary : course_set.summary %}

{% block title %}{{ course_set.title }} - {{ parent() }}{% endblock %}

{% block keywords %}
  {% for tag in course_set.tags %}{{ tag.name }}{% if not loop.last %},{% endif %}{% else %}{{ parent() }}{% endfor %}
{% endblock %}

{% block description %}{{ description|purify_and_trim_html|default('')|plain_text(100) }}{% endblock %}
{% block format_detection %}{{ 'telephone=no' }}{% endblock %}
{% block full_content %}
    {% set eventReportParams = {'user-id': app.user.id|default(0)} %}
    {% include 'event_report.html.twig' with{ 'eventName':'course.view', 'subjectType':'course', 'subjectId': course.id, 'eventReportParams':eventReportParams} %}

  {% set previewAs = app.request.query.get('previewAs') %}
  {% set defaultMetas = course_show_metas(member|default(null) ? 'member' : 'guest') %}
  {% set metas = metas|default(defaultMetas) %}
  {% set route_params = app.request.attributes.get('_route_params') %}

  {{ render(controller(metas.header,{request:app.request, course: course, member: member|default(null)})) }}

  {{ slot('marketing.tool', {'type':'course','targetId':course.id}) }}

  <div class=\"container cd-container\">
    <div class=\"row cd-row\">
      <div class=\"col-lg-9 col-md-8 course-detail-content\">
        {% include 'course/announcement/block.html.twig' with { courseId:course.id } %}

        {{ slot('course.show.content.section', {'course':course}) }}

        <section class=\"es-section\">
          <div class=\"nav-btn-tab\">

\t          {% if member|default(null) %}
\t\t          {% include 'course/header/nav-tab-for-member.html.twig' %}
\t          {% else %}
\t\t          {% include 'course/header/nav-tab-for-guest.html.twig' %}
\t          {% endif %}

            {% if app.user.admin|default(false) or isCourseTeacher|default(false) %}
              <div class=\"btnbar hidden-xs\">
                <a href=\"#modal\" data-toggle=\"modal\"
                  data-url=\"{{ path('announcement_add',{targetType:'course',targetId:course.id}) }}\"
                  class=\"btn btn-link\">
                  <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
                  {{ 'course.btn.announcement'|trans }}
                </a>
              </div>
            {% endif %}

          </div>
          {% block detail_content %}
            {{ render(controller(metas.tabs[tab].content, {request: app.request, course: course, member: member|default(null)})) }}
          {% endblock %}
        </section>

        {% include 'course/block/related-courses.html.twig' with { courseSetId : course.courseSetId } %}

      </div>

      <div class=\"col-lg-3 col-md-4 course-sidebar\">

        {{ slot('course.show.sidebar', {'course':course}) }}

        {# 有些widget只有班级计划才显示 #}
        {% for key, widget in metas.widgets %}
          {% if (widget.showMode|default('all') == 'classroom' and course.parentId > 0)
          or (widget.showMode|default('all') == 'course' and course.parentId == 0)
          or widget.showMode|default('all') == 'all' %}
            {% if widget.renderType == 'render' %}
              {{ render(controller(widget.uri, {course: course, member: member|default({})})) }}
            {% elseif widget.renderType == 'include' %}
              {% include widget.uri with {course: course} %}
            {% endif %}
          {% endif %}
        {% endfor %}
      </div>

    </div>
  </div>

  {% block member_expired %}
    {% if is_member_expired(course|default(null), member|default(null)) %}
      <div class=\"member-expire\">
        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('course_member_expired', {id:course.id}) }}\"></a>
      </div>
    {% endif %}
  {% endblock %}

    {% include 'common/weixin-share.html.twig' with {
    'title': course_set.title,
    'desc': course_set.summary|striptags|purify_and_trim_html,
    'link': app.request.uri,
    'imgUrl': fileurl(course_set.cover.large|default(),'course.png'),
    }%}

  {{ slot('course.bottom.extension', {'course': course}) }}
{% endblock %}
", "course/course-show.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\course-show.html.twig");
    }
}
