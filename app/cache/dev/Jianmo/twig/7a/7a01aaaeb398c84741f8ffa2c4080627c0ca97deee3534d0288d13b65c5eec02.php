<?php

/* course/header/header-for-guest.html.twig */
class __TwigTemplate_4f14c1312c292fc115961842d6737d7c9537101e50d9270758f2821145e01c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course/header/header-layout.html.twig", "course/header/header-for-guest.html.twig", 1);
        $this->blocks = array(
            'course_header_subtitle' => array($this, 'block_course_header_subtitle'),
            'course_header_people_num' => array($this, 'block_course_header_people_num'),
            'course_member_count' => array($this, 'block_course_member_count'),
            'course_heard_content' => array($this, 'block_course_heard_content'),
            'course_member_exit' => array($this, 'block_course_member_exit'),
            'course_header_top' => array($this, 'block_course_header_top'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course/header/header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19788af2699370d7f08e3b8f1d8b8cb7dda9f6adaae1d4414b0b786b97e7277f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19788af2699370d7f08e3b8f1d8b8cb7dda9f6adaae1d4414b0b786b97e7277f->enter($__internal_19788af2699370d7f08e3b8f1d8b8cb7dda9f6adaae1d4414b0b786b97e7277f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/header/header-for-guest.html.twig"));

        // line 3
        if (((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")) == "guest")) {
            // line 4
            $context["member"] = null;
            // line 5
            $context["courses"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CoursesByCourseSetId", array("courseSetId" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array())));
        }
        // line 8
        $context["page_type"] = "guest";
        // line 11
        $context["showCourses"] = ((array_key_exists("showCourses", $context)) ? (_twig_default_filter((isset($context["showCourses"]) ? $context["showCourses"] : $this->getContext($context, "showCourses")), 1)) : (1));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19788af2699370d7f08e3b8f1d8b8cb7dda9f6adaae1d4414b0b786b97e7277f->leave($__internal_19788af2699370d7f08e3b8f1d8b8cb7dda9f6adaae1d4414b0b786b97e7277f_prof);

    }

    // line 12
    public function block_course_header_subtitle($context, array $blocks = array())
    {
        $__internal_a19e4f0fe08f42af6dcc99542ab27d288689ecdc68682354f13fa27948e3a033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19e4f0fe08f42af6dcc99542ab27d288689ecdc68682354f13fa27948e3a033->enter($__internal_a19e4f0fe08f42af6dcc99542ab27d288689ecdc68682354f13fa27948e3a033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header_subtitle"));

        
        $__internal_a19e4f0fe08f42af6dcc99542ab27d288689ecdc68682354f13fa27948e3a033->leave($__internal_a19e4f0fe08f42af6dcc99542ab27d288689ecdc68682354f13fa27948e3a033_prof);

    }

    // line 14
    public function block_course_header_people_num($context, array $blocks = array())
    {
        $__internal_a67874ad962821e5e1dc3d29929f0fc4085c0133b78662d4159123c992c026f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67874ad962821e5e1dc3d29929f0fc4085c0133b78662d4159123c992c026f0->enter($__internal_a67874ad962821e5e1dc3d29929f0fc4085c0133b78662d4159123c992c026f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header_people_num"));

        
        $__internal_a67874ad962821e5e1dc3d29929f0fc4085c0133b78662d4159123c992c026f0->leave($__internal_a67874ad962821e5e1dc3d29929f0fc4085c0133b78662d4159123c992c026f0_prof);

    }

    // line 16
    public function block_course_member_count($context, array $blocks = array())
    {
        $__internal_d9c7e709cbbf4bdc48eb8452a7c232049658265a202c377666c5fd59af16260e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c7e709cbbf4bdc48eb8452a7c232049658265a202c377666c5fd59af16260e->enter($__internal_d9c7e709cbbf4bdc48eb8452a7c232049658265a202c377666c5fd59af16260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_member_count"));

        // line 17
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_member_count", array("%studentsNum%" => $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "studentNum", array()))), "html", null, true);
        echo "
";
        
        $__internal_d9c7e709cbbf4bdc48eb8452a7c232049658265a202c377666c5fd59af16260e->leave($__internal_d9c7e709cbbf4bdc48eb8452a7c232049658265a202c377666c5fd59af16260e_prof);

    }

    // line 20
    public function block_course_heard_content($context, array $blocks = array())
    {
        $__internal_31a54c1a8d8d528aa7dc8032f53df59da664da1066e69f4ba1271805bb6a5525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a54c1a8d8d528aa7dc8032f53df59da664da1066e69f4ba1271805bb6a5525->enter($__internal_31a54c1a8d8d528aa7dc8032f53df59da664da1066e69f4ba1271805bb6a5525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_heard_content"));

        // line 21
        echo "  <div class=\"course-detail-bottom\">
    <div class=\"course-detail-img\">
      <span class=\"tags mrm\">
        ";
        // line 24
        if (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "serializeMode", array()) == "serialized")) {
            // line 25
            echo "          <span class=\"tag-serialing\"></span>
        ";
        } elseif (($this->getAttribute(        // line 26
(isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "serializeMode", array()) == "finished")) {
            // line 27
            echo "          <span class=\"tag-finished\"></span>
        ";
        }
        // line 29
        echo "      </span>
      <img class=\"img-responsive\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "large"), "courseSet.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo " \">
      <div class=\"image-overlay\"></div>
\t\t\t";
        // line 32
        if (((array_key_exists("previewTask", $context)) ? (_twig_default_filter((isset($context["previewTask"]) ? $context["previewTask"] : $this->getContext($context, "previewTask")), null)) : (null))) {
            // line 33
            echo "        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => $this->getAttribute((isset($context["previewTask"]) ? $context["previewTask"] : $this->getContext($context, "previewTask")), "id", array()))), "html", null, true);
            echo "\" class=\"course-img-cover\">
          <i class=\"es-icon es-icon-playcircleoutline\"></i>
        </a>
\t\t\t";
        }
        // line 37
        echo "      
      <div class=\"course-detail-remask\">
\t\t\t\t";
        // line 39
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 40
            echo "          <i class=\"es-icon es-icon-people\"></i>
\t\t\t\t\t";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.students_count", array("%studentsNum%" => (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "studentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "studentNum", array()), 0)) : (0))));
            echo "
\t\t\t\t";
        }
        // line 43
        echo "        <div class=\"score pull-right mb0\">
\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "star", array(0 => (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "rating", array()), 0)) : (0))), "method"), "html", null, true);
        echo "
          <span class=\"vertical-middle\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.mask.rating_num", array("%ratingNum%" => (($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "ratingNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : null), "ratingNum", array()), 0)) : (0)))), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
    <div class=\"course-detail-info\">
      <div class=\"course-detail-info__text js-course-detail-info\">
        ";
        // line 51
        $context["onDiscount"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->isDiscount((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")));
        // line 52
        echo "        <div class=\"course-detail-info__title\">
          ";
        // line 53
        if ((isset($context["marketingPage"]) ? $context["marketingPage"] : $this->getContext($context, "marketingPage"))) {
            // line 54
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "title", array()), "html", null, true);
            echo "
          ";
        } else {
            // line 56
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 58
        echo "        </div>
        ";
        // line 59
        $context["canManage"] = (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage"));
        // line 60
        echo "        ";
        if ((isset($context["canManage"]) ? $context["canManage"] : $this->getContext($context, "canManage"))) {
            // line 61
            echo "          <a class=\"btn btn-default btn-xs course-detail-info__manage\" href=\"";
            if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter((isset($context["page_type"]) ? $context["page_type"] : $this->getContext($context, "page_type")), "guest")) : ("guest")) == "member")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))), "html", null, true);
            }
            echo "\">
            <i class=\"es-icon es-icon-setting\"></i>&nbsp;";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.manage"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 65
        echo "        ";
        if ($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "subtitle", array())) {
            // line 66
            echo "          <p class=\"course-detail-info__subtitle text-overflow subtitle cd-text-sm cd-mb16\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\"
            data-trigger=\"hover\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "subtitle", array()), "html", null, true);
            echo "\">
            <span >";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "subtitle", array()), "html", null, true);
            echo "</span>
          </p>
        ";
        }
        // line 71
        echo "        <div class=\"";
        if ((isset($context["onDiscount"]) ? $context["onDiscount"] : $this->getContext($context, "onDiscount"))) {
            echo " mb10  ";
        } else {
            echo " cd-mb16 ";
        }
        echo "\">
          ";
        // line 72
        $this->loadTemplate("course/header/header-for-price.html.twig", "course/header/header-for-guest.html.twig", 72)->display($context);
        // line 73
        echo "        </div>
        
        ";
        // line 75
        if ((isset($context["onDiscount"]) ? $context["onDiscount"] : $this->getContext($context, "onDiscount"))) {
            // line 76
            echo "          <div class=\"cd-mb8\">
            <span class=\"course-detail__label\">";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.acitivity"), "html", null, true);
            echo "</span>
            <span class=\"text-12 color-warning\">
              <b class=\"hidden-xs course-detail-activity-title\">";
            // line 79
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()), "name", array()), 10);
            echo "</b><span class=\"cd-text-medium cd-ml16\" id=\"discount-endtime-countdown\" data-remaintime=";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()), "endTime", array()) - $this->env->getExtension('AppBundle\Twig\WebExtension')->timestamp()), "html", null, true);
            echo "></span><i class=\"es-icon es-icon-accesstime text-14 mls cd-text-medium\"></i>
            <span>
          </div>
        ";
        }
        // line 83
        echo "        <div class=\"course-detail-gray course-detail-gray--market ";
        if ( !(isset($context["onDiscount"]) ? $context["onDiscount"] : $this->getContext($context, "onDiscount"))) {
            echo " not-activity ";
        }
        echo "\">
          ";
        // line 84
        if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
            // line 85
            echo "            ";
            $context["hasMulCoursePlans"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()));
            // line 86
            echo "          ";
        } else {
            // line 87
            echo "            ";
            $context["hasMulCoursePlans"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute((isset($context["courseSet"]) ? $context["courseSet"] : $this->getContext($context, "courseSet")), "id", array()), 1);
            // line 88
            echo "          ";
        }
        // line 89
        echo "          ";
        if (((isset($context["showCourses"]) ? $context["showCourses"] : $this->getContext($context, "showCourses")) && (isset($context["hasMulCoursePlans"]) ? $context["hasMulCoursePlans"] : $this->getContext($context, "hasMulCoursePlans")))) {
            // line 90
            echo "            <div class=\"course-detail-content\">
              <span class=\"course-detail-title vertical-middle\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan"), "html", null, true);
            echo "</span>
              <ul class=\"nav nav-pills nav-pills-sm nav-pills-transparent course-detail-nav\">
                ";
            // line 93
            $context["current_course"] = (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"));
            // line 94
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                if ((($this->getAttribute($context["course"], "status", array()) == "published") || (isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")))) {
                    // line 95
                    echo "                  <li class=\"mb5 mrs ";
                    if (($this->getAttribute((isset($context["current_course"]) ? $context["current_course"] : $this->getContext($context, "current_course")), "id", array()) == $this->getAttribute($context["course"], "id", array()))) {
                        echo " active ";
                    }
                    echo "\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" data-container=\"body\" title=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                    echo "\"
                  data-trigger=\"hover\" href=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()), "previewAs" => (isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["course"], "title", array()), 10), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unname_title")), "html", null, true);
                    echo "
                    </a>
                    <i class=\"es-icon es-icon-done done-icon\"></i>
                  </li>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "              </ul>
            </div>
          ";
        }
        // line 105
        echo "
          <div class=\"hidden-xs common-line-height\">
            <span class=\"course-detail-title\">";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date"), "html", null, true);
        echo "</span>
            ";
        // line 108
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryMode", array()) == "days")) {
            // line 109
            echo "              <span class=\"gray-dark course-detail-expiry\">
                ";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.days_mode", array("%expiryDays%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryDays", array())));
            echo "
              </span>
            ";
        } elseif (($this->getAttribute(        // line 112
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryMode", array()) == "end_date")) {
            // line 113
            echo "              <span class=\"gray-dark course-detail-expiry\">
                ";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.end_date_mode", array("%expiryEndDate%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryEndDate", array()), "Y-m-d ")));
            echo "
              </span>
            ";
        } elseif (($this->getAttribute(        // line 116
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryMode", array()) == "date")) {
            // line 117
            echo "              <span class=\"gray-dark course-detail-expiry\">
                ";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.date_mode", array("%expiryStartDate%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryStartDate", array()), "Y-m-d "), "%expiryEndDate%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryEndDate", array()), "Y-m-d ")));
            echo "
              </span>
            ";
        } elseif (($this->getAttribute(        // line 120
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryMode", array()) == "forever")) {
            // line 121
            echo "              <span class=\"gray-dark course-detail-expiry mrl\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.forever_mode"), "html", null, true);
            echo "</span>
            ";
        }
        // line 123
        echo "          </div>
          
          ";
        // line 125
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyable", array()) != 0) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyExpiryTime", array()) != 0))) {
            // line 126
            echo "            <div class=\"mtl hidden-xs common-line-height\">
              ";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.buy_expiry_date.buy_expiry_time", array("%buyExpiryTime%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyExpiryTime", array()), "Y-m-d ")));
            echo "
            </div>
          ";
        }
        // line 130
        echo "          
          ";
        // line 131
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "showServices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "showServices", array()), 1)) : (1))) {
            // line 132
            echo "            <div class=\"course-detail-service cd-mt16\">
              ";
            // line 133
            $context["serviceTags"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->buildServiceTags((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "services", array()), array())) : (array())));
            // line 134
            echo "              <span class=\"course-detail-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.showServices"), "html", null, true);
            echo "</span>
              ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["serviceTags"]) ? $context["serviceTags"] : $this->getContext($context, "serviceTags")));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 136
                echo "                ";
                if ($this->getAttribute($context["tag"], "active", array())) {
                    // line 137
                    echo "                  <span
                      class=\"lump-sm color-lump bg-primary mr5 hidden-xs\"
                      data-container=\"body\"
                      data-trigger=\"hover\"
                      data-placement=\"top\"
                      data-toggle=\"tooltip\"
                      title=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "fullName", array()), "html", null, true);
                    echo "\"
                      data-content=\"";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "summary", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 145
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "shortName", array()), "html", null, true);
                    echo "
                  </span>
                ";
                }
                // line 148
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "            </div>
          ";
        }
        // line 151
        echo "          
          ";
        // line 152
        if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled"), false) && $this->env->getExtension('AppBundle\Twig\CourseExtension')->isSupportEnableAudio((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "enableAudio", array()), 0)) : (0)))) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal"))) {
            // line 153
            echo "            <div class=\"course-detail-listening\">
              <span class=\"course-detail-title\">";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.enable_label"), "html", null, true);
            echo "</span>
              ";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.click.listen"), "html", null, true);
            echo "
              <a href=\"";
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"__blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.try"), "html", null, true);
            echo "</a>
            </div>
          ";
        }
        // line 159
        echo "        </div>

        <div class=\"course-detail-section-responsive visible-xs visible-sm clearfix\">
          <ul class=\"clearfix\">
            <!--营销页显示-->
            ";
        // line 164
        if ((isset($context["marketingPage"]) ? $context["marketingPage"] : $this->getContext($context, "marketingPage"))) {
            // line 165
            echo "              <li class=\"js-unfavorite-btn ";
            if ( !(isset($context["isUserFavorite"]) ? $context["isUserFavorite"] : $this->getContext($context, "isUserFavorite"))) {
                echo "hidden";
            }
            echo "\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))), "html", null, true);
            echo "\">
                <a class=\"color-primary\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-favorite color-primary\"></i>
                  <br/>
                  ";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "
                </a>
              </li>
              <li class=\"js-favorite-btn ";
            // line 173
            if ((isset($context["isUserFavorite"]) ? $context["isUserFavorite"] : $this->getContext($context, "isUserFavorite"))) {
                echo "hidden";
            }
            echo "\" id=\"favorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))), "html", null, true);
            echo "\">
                <a class=\"\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-favoriteoutline\"></i>
                  <br/>
                  ";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "
                </a>
              </li>
            ";
        }
        // line 182
        echo "            
            <li class=\"es-share top\">
              <a class=\" dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "\">
                <i class=\"es-icon es-icon-share\"></i>
                <br/>
                ";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "
              </a>
              ";
        // line 189
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-for-guest.html.twig", 189)->display(array_merge($context, array("type" => "courseSet")));
        // line 190
        echo "            </li>

            ";
        // line 192
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "mobile" => true));
        echo "

          </ul>
        </div>
      </div>

      <div class=\"course-detail-info__btn js-course-header-operation\">
        <ul class=\"course-operation course-operation--market hidden-xs hidden-sm clearfix mb0\">
          <li class=\"es-qrcode top hidden-xs mrl\" data-url=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_qrcode", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
            <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-saoyisao course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.qrcode_tips"), "html", null, true);
        echo "</span></a>
            <span class=\"qrcode-popover\">
              <img class=\"mb0\" src=\"\" alt=\"\">";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.tips.scan_qrcode_tips"), "html", null, true);
        echo "
            </span>
          </li>

          ";
        // line 208
        echo "          <li class=\"es-share es-share-item top mrl\">
            <a class=\"dropdown-toggle cd-link-assist\" href=\"javascript:;\" data-toggle=\"dropdown\">
              <i class=\"es-icon es-icon-share course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "</span>
            </a>
            ";
        // line 212
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-for-guest.html.twig", 212)->display(array_merge($context, array("type" => "courseSet")));
        // line 213
        echo "          </li>
          <!--营销页显示-->
          ";
        // line 216
        echo "          ";
        if ((isset($context["marketingPage"]) ? $context["marketingPage"] : $this->getContext($context, "marketingPage"))) {
            // line 217
            echo "            <li class=\"js-unfavorite-btn mrl ";
            if ( !(isset($context["isUserFavorite"]) ? $context["isUserFavorite"] : $this->getContext($context, "isUserFavorite"))) {
                echo "hidden ";
            }
            echo "\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))), "html", null, true);
            echo "\">
              <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-favorite color-danger course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li class=\"js-favorite-btn mrl ";
            // line 221
            if ((isset($context["isUserFavorite"]) ? $context["isUserFavorite"] : $this->getContext($context, "isUserFavorite"))) {
                echo "hidden";
            }
            echo "\" id=\"favorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseSetId", array()))), "html", null, true);
            echo "\">
              <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-favoriteoutline course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "</span>
              </a>
            </li>
          ";
        }
        // line 226
        echo "

          ";
        // line 228
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))));
        echo "
          ";
        // line 230
        echo "         
          ";
        // line 231
        $this->displayBlock('course_member_exit', $context, $blocks);
        // line 232
        echo "        </ul>
        <div class=\"text-right buy-btn-group course-operation-btn ";
        // line 233
        if (((array_key_exists("classroom", $context)) ? (_twig_default_filter((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), null)) : (null))) {
            echo " course-classroom-tip";
        }
        echo "\">
          ";
        // line 234
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), false)) : (false))) {
            // line 235
            echo "            ";
            if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryMode", array()) == "date") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryStartDate", array()) >= $this->env->getExtension('AppBundle\Twig\WebExtension')->timestamp()))) {
                // line 236
                echo "              ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.expiryStartDate", array("%expiryStartDate%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryStartDate", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date.format"))));
                echo "
            ";
            } else {
                // line 238
                echo "              <a class=\"cd-btn cd-btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.learn"), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 242
            echo "          ";
        } else {
            // line 243
            echo "            ";
            if (((array_key_exists("classroom", $context)) ? (_twig_default_filter((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), null)) : (null))) {
                // line 244
                echo "              ";
                $this->loadTemplate("course/header/header-for-classroom-info.html.twig", "course/header/header-for-guest.html.twig", 244)->display($context);
                // line 245
                echo "            ";
            } else {
                // line 246
                echo "              ";
                $this->loadTemplate("course/header/header-for-guest-buy-btn.html.twig", "course/header/header-for-guest.html.twig", 246)->display($context);
                // line 247
                echo "            ";
            }
            // line 248
            echo "          ";
        }
        // line 249
        echo "        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_31a54c1a8d8d528aa7dc8032f53df59da664da1066e69f4ba1271805bb6a5525->leave($__internal_31a54c1a8d8d528aa7dc8032f53df59da664da1066e69f4ba1271805bb6a5525_prof);

    }

    // line 231
    public function block_course_member_exit($context, array $blocks = array())
    {
        $__internal_bf406dd0aac232e7b40d64979e57795b2a774a94e6a3e4669afc577bc72e4104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf406dd0aac232e7b40d64979e57795b2a774a94e6a3e4669afc577bc72e4104->enter($__internal_bf406dd0aac232e7b40d64979e57795b2a774a94e6a3e4669afc577bc72e4104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_member_exit"));

        
        $__internal_bf406dd0aac232e7b40d64979e57795b2a774a94e6a3e4669afc577bc72e4104->leave($__internal_bf406dd0aac232e7b40d64979e57795b2a774a94e6a3e4669afc577bc72e4104_prof);

    }

    // line 255
    public function block_course_header_top($context, array $blocks = array())
    {
        $__internal_439c9da89f1523b9df4f372ccf15204775609ab5189cf2cb549f1228e87b6d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439c9da89f1523b9df4f372ccf15204775609ab5189cf2cb549f1228e87b6d0c->enter($__internal_439c9da89f1523b9df4f372ccf15204775609ab5189cf2cb549f1228e87b6d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "course_header_top"));

        
        $__internal_439c9da89f1523b9df4f372ccf15204775609ab5189cf2cb549f1228e87b6d0c->leave($__internal_439c9da89f1523b9df4f372ccf15204775609ab5189cf2cb549f1228e87b6d0c_prof);

    }

    public function getTemplateName()
    {
        return "course/header/header-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 255,  689 => 231,  678 => 249,  675 => 248,  672 => 247,  669 => 246,  666 => 245,  663 => 244,  660 => 243,  657 => 242,  651 => 239,  646 => 238,  640 => 236,  637 => 235,  635 => 234,  629 => 233,  626 => 232,  624 => 231,  621 => 230,  617 => 228,  613 => 226,  606 => 222,  598 => 221,  592 => 218,  583 => 217,  580 => 216,  576 => 213,  574 => 212,  569 => 210,  565 => 208,  558 => 203,  553 => 201,  549 => 200,  538 => 192,  534 => 190,  532 => 189,  527 => 187,  521 => 184,  517 => 182,  510 => 178,  503 => 174,  495 => 173,  489 => 170,  482 => 166,  473 => 165,  471 => 164,  464 => 159,  456 => 156,  452 => 155,  448 => 154,  445 => 153,  443 => 152,  440 => 151,  436 => 149,  430 => 148,  424 => 145,  420 => 144,  416 => 143,  408 => 137,  405 => 136,  401 => 135,  396 => 134,  394 => 133,  391 => 132,  389 => 131,  386 => 130,  380 => 127,  377 => 126,  375 => 125,  371 => 123,  365 => 121,  363 => 120,  358 => 118,  355 => 117,  353 => 116,  348 => 114,  345 => 113,  343 => 112,  338 => 110,  335 => 109,  333 => 108,  329 => 107,  325 => 105,  320 => 102,  304 => 97,  300 => 96,  293 => 95,  287 => 94,  285 => 93,  280 => 91,  277 => 90,  274 => 89,  271 => 88,  268 => 87,  265 => 86,  262 => 85,  260 => 84,  253 => 83,  244 => 79,  239 => 77,  236 => 76,  234 => 75,  230 => 73,  228 => 72,  219 => 71,  213 => 68,  209 => 67,  206 => 66,  203 => 65,  197 => 62,  188 => 61,  185 => 60,  183 => 59,  180 => 58,  174 => 56,  168 => 54,  166 => 53,  163 => 52,  161 => 51,  152 => 45,  148 => 44,  145 => 43,  140 => 41,  137 => 40,  135 => 39,  131 => 37,  123 => 33,  121 => 32,  114 => 30,  111 => 29,  107 => 27,  105 => 26,  102 => 25,  100 => 24,  95 => 21,  89 => 20,  79 => 17,  73 => 16,  62 => 14,  51 => 12,  44 => 1,  42 => 11,  40 => 8,  37 => 5,  35 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'course/header/header-layout.html.twig' %}

{% if previewAs == 'guest' %}
\t{% set member = null %}
\t{% set courses = data('CoursesByCourseSetId', {courseSetId: courseSet.id}) %}
{% endif %}

{% set page_type = 'guest' %}

{# showCourses 该参数直播课及插件约排课不展示计划 #}
{% set showCourses = showCourses|default(1) %}
{% block course_header_subtitle %}{% endblock %}

{% block course_header_people_num %}{% endblock %}

{% block course_member_count %}
\t{{ 'course.course_member_count'|trans({'%studentsNum%':courseSet.studentNum}) }}
{% endblock %}

{% block course_heard_content %}
  <div class=\"course-detail-bottom\">
    <div class=\"course-detail-img\">
      <span class=\"tags mrm\">
        {% if courseSet.serializeMode == 'serialized' %}
          <span class=\"tag-serialing\"></span>
        {% elseif courseSet.serializeMode == 'finished' %}
          <span class=\"tag-finished\"></span>
        {% endif %}
      </span>
      <img class=\"img-responsive\" src=\"{{ filepath(course_set_cover(courseSet, 'large'), 'courseSet.png') }}\" alt=\"{{ course.title }} \">
      <div class=\"image-overlay\"></div>
\t\t\t{% if previewTask | default(null) %}
        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('course_task_preview',{courseId:course.id, id:previewTask.id}) }}\" class=\"course-img-cover\">
          <i class=\"es-icon es-icon-playcircleoutline\"></i>
        </a>
\t\t\t{% endif %}
      
      <div class=\"course-detail-remask\">
\t\t\t\t{% if setting('course.show_student_num_enabled', '1') == 1 %}
          <i class=\"es-icon es-icon-people\"></i>
\t\t\t\t\t{{ 'course.students_count'|trans({'%studentsNum%':courseSet.studentNum|default(0)})|raw }}
\t\t\t\t{% endif %}
        <div class=\"score pull-right mb0\">
\t\t\t\t\t{{ web_macro.star(courseSet.rating|default(0)) }}
          <span class=\"vertical-middle\">{{'course.mask.rating_num'|trans({'%ratingNum%':courseSet.ratingNum|default(0)})}}</span>
        </div>
      </div>
    </div>
    <div class=\"course-detail-info\">
      <div class=\"course-detail-info__text js-course-detail-info\">
        {% set onDiscount =  is_discount(course) %}
        <div class=\"course-detail-info__title\">
          {% if marketingPage %}
            {{ courseSet.title }}
          {% else %}
            {{ course.title }}
          {% endif %}
        </div>
        {% set canManage =  member.role|default('') == 'teacher' or has_permission('admin_course_content_manage') %}
        {% if canManage %}
          <a class=\"btn btn-default btn-xs course-detail-info__manage\" href=\"{% if page_type|default('guest') == 'member' %}{{ path('course_set_manage_course_tasks', {courseSetId: course.courseSetId, courseId: course.id }) }}{% else %}{{ path('course_set_manage_base', {id: course.courseSetId}) }}{% endif %}\">
            <i class=\"es-icon es-icon-setting\"></i>&nbsp;{{ 'site.default.manage'|trans }}
          </a>
        {% endif %}
        {% if courseSet.subtitle %}
          <p class=\"course-detail-info__subtitle text-overflow subtitle cd-text-sm cd-mb16\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\"
            data-trigger=\"hover\" title=\"{{courseSet.subtitle}}\">
            <span >{{ courseSet.subtitle }}</span>
          </p>
        {% endif %}
        <div class=\"{% if onDiscount %} mb10  {% else %} cd-mb16 {% endif %}\">
          {% include 'course/header/header-for-price.html.twig' %}
        </div>
        
        {% if onDiscount %}
          <div class=\"cd-mb8\">
            <span class=\"course-detail__label\">{{ 'plugin.acitivity'|trans }}</span>
            <span class=\"text-12 color-warning\">
              <b class=\"hidden-xs course-detail-activity-title\">{{ course.discount.name|sub_text(10) }}</b><span class=\"cd-text-medium cd-ml16\" id=\"discount-endtime-countdown\" data-remaintime={{ course.discount.endTime - timestamp() }}></span><i class=\"es-icon es-icon-accesstime text-14 mls cd-text-medium\"></i>
            <span>
          </div>
        {% endif %}
        <div class=\"course-detail-gray course-detail-gray--market {% if not onDiscount %} not-activity {% endif %}\">
          {% if previewAs %}
            {% set hasMulCoursePlans = has_mul_courses(courseSet.id) %}
          {% else %}
            {% set hasMulCoursePlans = has_mul_courses(courseSet.id, 1) %}
          {% endif %}
          {% if showCourses and hasMulCoursePlans %}
            <div class=\"course-detail-content\">
              <span class=\"course-detail-title vertical-middle\">{{ 'course.teaching_plan'|trans }}</span>
              <ul class=\"nav nav-pills nav-pills-sm nav-pills-transparent course-detail-nav\">
                {% set current_course = course %}
                {% for course in courses if course.status == 'published' or previewAs %}
                  <li class=\"mb5 mrs {% if current_course.id == course.id %} active {% endif %}\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" data-container=\"body\" title=\"{{ course.subtitle }}\"
                  data-trigger=\"hover\" href=\"{{ path('course_show',{id: course.id, previewAs: previewAs}) }}\" title=\"{{ course.title }}\">{{ course.title|sub_text(10)|default('course.unname_title'|trans) }}
                    </a>
                    <i class=\"es-icon es-icon-done done-icon\"></i>
                  </li>
                {% endfor %}
              </ul>
            </div>
          {% endif %}

          <div class=\"hidden-xs common-line-height\">
            <span class=\"course-detail-title\">{{ 'course.expiry_date'|trans }}</span>
            {% if course.expiryMode == 'days'  %}
              <span class=\"gray-dark course-detail-expiry\">
                {{ 'course.expiry_date.days_mode'|trans({'%expiryDays%':course.expiryDays})|raw }}
              </span>
            {% elseif course.expiryMode == 'end_date' %}
              <span class=\"gray-dark course-detail-expiry\">
                {{ 'course.expiry_date.end_date_mode'|trans({'%expiryEndDate%':course.expiryEndDate|date('Y-m-d ')})|raw }}
              </span>
            {% elseif course.expiryMode == 'date' %}
              <span class=\"gray-dark course-detail-expiry\">
                {{ 'course.expiry_date.date_mode'|trans({'%expiryStartDate%':course.expiryStartDate|date('Y-m-d '), '%expiryEndDate%':course.expiryEndDate|date('Y-m-d ')})|raw }}
              </span>
            {% elseif course.expiryMode == 'forever' %}
              <span class=\"gray-dark course-detail-expiry mrl\">{{ 'course.expiry_date.forever_mode'|trans }}</span>
            {% endif %}
          </div>
          
          {% if course.buyable != 0  and course.buyExpiryTime != 0 %}
            <div class=\"mtl hidden-xs common-line-height\">
              {{ 'course.buy_expiry_date.buy_expiry_time'|trans({'%buyExpiryTime%':course.buyExpiryTime|date('Y-m-d ')})|raw }}
            </div>
          {% endif %}
          
          {% if course.showServices | default(1) %}
            <div class=\"course-detail-service cd-mt16\">
              {% set serviceTags = services(course.services|default([])) %}
              <span class=\"course-detail-title\">{{ 'course.showServices'|trans }}</span>
              {% for tag in serviceTags %}
                {% if tag.active %}
                  <span
                      class=\"lump-sm color-lump bg-primary mr5 hidden-xs\"
                      data-container=\"body\"
                      data-trigger=\"hover\"
                      data-placement=\"top\"
                      data-toggle=\"tooltip\"
                      title=\"{{ tag.fullName }}\"
                      data-content=\"{{ tag.summary }}\">
                    {{ tag.shortName }}
                  </span>
                {% endif %}
              {% endfor %}
            </div>
          {% endif %}
          
          {% if setting('mobile.enabled')|default(false) and is_support_enable_audio(course.enableAudio|default(0)) and course.type == 'normal' %}
            <div class=\"course-detail-listening\">
              <span class=\"course-detail-title\">{{ 'course.info.video.convert.audio.enable_label'|trans }}</span>
              {{ 'course.video.convert.client.click.listen'|trans }}
              <a href=\"{{ path('mobile') }}\" target=\"__blank\">{{ 'course.video.convert.client.try'|trans }}</a>
            </div>
          {% endif %}
        </div>

        <div class=\"course-detail-section-responsive visible-xs visible-sm clearfix\">
          <ul class=\"clearfix\">
            <!--营销页显示-->
            {% if marketingPage %}
              <li class=\"js-unfavorite-btn {% if not isUserFavorite %}hidden{% endif %}\" id=\"unfavorite-btn\" data-url=\"{{ path('course_set_unfavorite', {id: course.courseSetId }) }}\">
                <a class=\"color-primary\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'course.status.followed'|trans }}\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-favorite color-primary\"></i>
                  <br/>
                  {{ 'course.status.followed'|trans }}
                </a>
              </li>
              <li class=\"js-favorite-btn {% if isUserFavorite %}hidden{% endif %}\" id=\"favorite-btn\" data-url=\"{{ path('course_set_favorite', {id: course.courseSetId }) }}\">
                <a class=\"\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'course.status.follow'|trans }}\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-favoriteoutline\"></i>
                  <br/>
                  {{ 'course.status.follow'|trans }}
                </a>
              </li>
            {% endif %}
            
            <li class=\"es-share top\">
              <a class=\" dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"{{ 'course.share'|trans }}\">
                <i class=\"es-icon es-icon-share\"></i>
                <br/>
                {{ 'course.share'|trans }}
              </a>
              {% include 'common/share-dropdown.html.twig' with {type:'courseSet'} %}
            </li>

            {{ slot('course.header-marketing-btn.extension', {'course': course, 'mobile': true}) }}

          </ul>
        </div>
      </div>

      <div class=\"course-detail-info__btn js-course-header-operation\">
        <ul class=\"course-operation course-operation--market hidden-xs hidden-sm clearfix mb0\">
          <li class=\"es-qrcode top hidden-xs mrl\" data-url=\"{{ path('course_qrcode', { id: course.id }) }}\">
            <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-saoyisao course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">{{ 'site.qrcode_tips'|trans }}</span></a>
            <span class=\"qrcode-popover\">
              <img class=\"mb0\" src=\"\" alt=\"\">{{ 'site.tips.scan_qrcode_tips'|trans }}
            </span>
          </li>

          {# 分享图标功能设置 #}
          <li class=\"es-share es-share-item top mrl\">
            <a class=\"dropdown-toggle cd-link-assist\" href=\"javascript:;\" data-toggle=\"dropdown\">
              <i class=\"es-icon es-icon-share course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">{{ 'course.share'|trans }}</span>
            </a>
            {% include 'common/share-dropdown.html.twig' with {type:'courseSet'} %}
          </li>
          <!--营销页显示-->
          {# 收藏图标设置 #}
          {% if marketingPage %}
            <li class=\"js-unfavorite-btn mrl {% if not isUserFavorite %}hidden {% endif %}\" id=\"unfavorite-btn\" data-url=\"{{ path('course_set_unfavorite', {id: course.courseSetId }) }}\">
              <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-favorite color-danger course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">{{ 'course.status.followed'|trans }}</span>
              </a>
            </li>
            <li class=\"js-favorite-btn mrl {% if isUserFavorite %}hidden{% endif %}\" id=\"favorite-btn\" data-url=\"{{ path('course_set_favorite', {id: course.courseSetId }) }}\">
              <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-favoriteoutline course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">{{ 'course.status.follow'|trans }}</span>
              </a>
            </li>
          {% endif %}


          {{ slot('course.header-marketing-btn.extension', {'course': course}) }}
          {# 课程管理图标功能 #}
         
          {% block course_member_exit %}{% endblock %}
        </ul>
        <div class=\"text-right buy-btn-group course-operation-btn {% if classroom|default(null) %} course-classroom-tip{% endif %}\">
          {% if member | default(false) %}
            {% if course.expiryMode == 'date' and course.expiryStartDate >= timestamp() %}
              {{ 'course.expiry_date.expiryStartDate'|trans({'%expiryStartDate%':course.expiryStartDate|date('date.format'|trans)})|raw }}
            {% else %}
              <a class=\"cd-btn cd-btn-primary\" href=\"{{ path('my_course_show', {id: course.id}) }}\">
                {{ 'course.btn.learn'|trans }}
              </a>
            {% endif %}
          {% else %}
            {% if classroom|default(null) %}
              {% include 'course/header/header-for-classroom-info.html.twig' %}
            {% else %}
              {% include 'course/header/header-for-guest-buy-btn.html.twig' %}
            {% endif %}
          {% endif %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block course_header_top %}
{% endblock %}", "course/header/header-for-guest.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\header\\header-for-guest.html.twig");
    }
}
