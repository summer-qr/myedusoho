<?php

/* classroom-manage/courses.html.twig */
class __TwigTemplate_4d4ee1ba478b1638b13431733dd2c89aa51e82cc89f8b98a48042e90c63f914e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("classroom-manage/layout.html.twig", "classroom-manage/courses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "classroom-manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f996edb0acd977b6e021c12a137124779b260bc72f25b62586c988095b3dd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f996edb0acd977b6e021c12a137124779b260bc72f25b62586c988095b3dd78->enter($__internal_3f996edb0acd977b6e021c12a137124779b260bc72f25b62586c988095b3dd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classroom-manage/courses.html.twig"));

        // line 3
        $context["side_nav"] = "courses";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/classroom-manage/course-manage/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f996edb0acd977b6e021c12a137124779b260bc72f25b62586c988095b3dd78->leave($__internal_3f996edb0acd977b6e021c12a137124779b260bc72f25b62586c988095b3dd78_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_688d1dd419c2b833efc32131ba2c64d7b52c4f2a1c1cf9d32bda86a08af6b8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688d1dd419c2b833efc32131ba2c64d7b52c4f2a1c1cf9d32bda86a08af6b8df->enter($__internal_688d1dd419c2b833efc32131ba2c64d7b52c4f2a1c1cf9d32bda86a08af6b8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course_manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_688d1dd419c2b833efc32131ba2c64d7b52c4f2a1c1cf9d32bda86a08af6b8df->leave($__internal_688d1dd419c2b833efc32131ba2c64d7b52c4f2a1c1cf9d32bda86a08af6b8df_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_7b91f18b80f242df5e177e3a0038b9ca75f9b6de426f72e10efb5cfaa31f1368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b91f18b80f242df5e177e3a0038b9ca75f9b6de426f72e10efb5cfaa31f1368->enter($__internal_7b91f18b80f242df5e177e3a0038b9ca75f9b6de426f72e10efb5cfaa31f1368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "<style>
.sort{
    padding-top: 50px;
    padding-right: 20px;
    padding-left: 20px;
}
</style>

";
        // line 15
        $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses_select", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array())));
        // line 16
        echo "
<div class=\"panel panel-default\" role=\"classroom-manage-course-manage\">
  <div class=\"panel-heading\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course_manage"), "html", null, true);
        echo "
    <button class=\"btn btn-primary btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses_pick", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.create_course_btn"), "html", null, true);
        echo "</button>
  </div>
  <div class=\"panel-body\">
      <form id=\"courses-form\" class=\"form-horizontal\" method=\"post\">
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group\" id=\"courses-form-group\">
          <div class=\"col-md-12 controls\">
            <ul class=\"course-list-group sortable-list course-wide-list courses-selected\" id=\"course-list-group\" data-role=\"list\" >

              ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 29
            echo "
              <li class=\"course-item item-";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo " clearfix\" data-role=\"item\" >
              <input type=\"hidden\" name=\"courseIds[]\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" />
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle sort\"></span>
              <a class=\"course-picture-link\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseCover($context["course"], "middle"), "courseSet.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\">
              </a>
              <button class=\"close delete-btn pull-right mrl mts mll\" data-role=\"item-delete\" type=\"button\" title=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.delete_btn"), "html", null, true);
            echo "\" style=\"font-size:35px;\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_course_remove", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">× </button>
                  <div class=\"course-body\">
                   <div class=\"color-gray mrm mls pull-right\">
                      ";
            // line 39
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                // line 40
                echo "                          <span class=\"course-price course-price-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" style=\"display:inline\" data-price=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["course"], "originPrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                echo "\">
                            ";
                // line 41
                if (($this->getAttribute($context["course"], "originPrice", array()) > 0)) {
                    // line 42
                    echo "                              ";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["course"], "originPrice", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo "
                              ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 45
                    echo "                              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.free_course"), "html", null, true);
                    echo "
                            ";
                }
                // line 47
                echo "                          </span>

                      ";
            } else {
                // line 50
                echo "                        <span class=\"course-price course-price-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "originPrice", array()), "html", null, true);
                echo "\">
                          ";
                // line 51
                if (($this->getAttribute($context["course"], "originPrice", array()) > 0)) {
                    // line 52
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "originPrice", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.currency.CNY"), "html", null, true);
                    echo "
                          ";
                } else {
                    // line 54
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.free_course"), "html", null, true);
                    echo "
                          ";
                }
                // line 56
                echo "                        </span>
                      ";
            }
            // line 58
            echo "                    </div>

                    <h4 class=\"course-title text-overflow mb0\">
                      ";
            // line 61
            if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialized")) {
                // line 62
                echo "                        <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.serialized"), "html", null, true);
                echo "</span>
                      ";
            } elseif (($this->getAttribute(            // line 63
$context["course"], "serializeMode", array()) == "finished")) {
                // line 64
                echo "                        <span class=\"label label-warning \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.finished"), "html", null, true);
                echo "</span>
                      ";
            }
            // line 66
            echo "                      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course"], "courseSet", array()), "title", array()), "html", null, true);
            echo "</a>
                      <div class=\"course-title__plan\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.teach_plan"), "html", null, true);
            echo "：";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["course"], "title", array()), 20);
            echo "</div>

                      ";
            // line 69
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 70
                echo "                        ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                // line 71
                echo "                        ";
                if ((((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime", array())))) {
                    // line 72
                    echo "                          <span class=\"label label-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.live_course_playing"), "html", null, true);
                    echo "</span>
                        ";
                } else {
                    // line 74
                    echo "                          <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.live"), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 76
                echo "                    ";
            }
            // line 77
            echo "                    </h4>

                    ";
            // line 79
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 80
                echo "                      ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array()), null)) : (null));
                // line 81
                echo "                      ";
                if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
                    // line 82
                    echo "                        <div class=\"live-course-lesson mbm\">
                          <span class=\"color-success fsm mrm\">";
                    // line 83
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()), "m-d H:i"), "html", null, true);
                    echo " ~ ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime", array()), "H:i"), "html", null, true);
                    echo "</span>
                          <span class=\"color-gray fsm mrm\">";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.task_num", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "%number%" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number", array()))), "html", null, true);
                    echo "</span>
                        </div>
                      ";
                }
                // line 87
                echo "                    ";
            } else {
                // line 88
                echo "                      <div class=\"pull-right cd-mr40\"><a class=\"cd-btn cd-btn-ghost-primary cd-btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_sync", array("id" => $this->getAttribute($this->getAttribute($context["course"], "courseSet", array()), "id", array()), "sideNav" => "info")), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.manage_btn"), "html", null, true);
                echo "</a></div>
                    ";
            }
            // line 90
            echo "
                    <div class=\"course-footer cd-mt32 clearfix\">
                      ";
            // line 92
            $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
            // line 93
            echo "                      ";
            if ((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher"))) {
                // line 94
                echo "                        <div class=\"teacher\">
                          <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"teacher-avatar\"></a>
                          <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname", array()), "html", null, true);
                echo "</a>
                          <span class=\"teacher-title ellipsis\">";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title", array()), "html", null, true);
                echo "</span>
                        </div>
                      ";
            }
            // line 100
            echo "
                      <div class=\"course-metas\">  

                        ";
            // line 103
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 104
                echo "                        <span class=\"color-gray text-sm\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"), "html", null, true);
                echo "</span>
                        <span class=\"divider\"></span>
                        ";
            }
            // line 106
            echo "  

                          <span class=\"color-gray text-sm\">
                              ";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.total_task_count", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")), "%taskNum%" => $this->getAttribute($context["course"], "taskNum", array()))), "html", null, true);
            echo "
                          </span>
                          <span class=\"divider\"></span>
                          <span class=\"color-gray text-sm\">
                              ";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.expiry_mode"), "html", null, true);
            echo "：
                              ";
            // line 114
            if (((($this->getAttribute($context["course"], "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "expiryMode", array()), null)) : (null)) == "date")) {
                // line 115
                echo "                                ";
                echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, $this->getAttribute($context["course"], "expiryStartDate", array()), "Y-m-d H:i") . "~") . twig_date_format_filter($this->env, $this->getAttribute($context["course"], "expiryEndDate", array()), "Y-m-d H:i")), "html", null, true);
                echo "
                              ";
            } else {
                // line 117
                echo "                                ";
                if ($this->getAttribute($context["course"], "expiryDays", array())) {
                    // line 118
                    echo "                                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "expiryDays", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date.day"), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 120
                    echo "                                  ";
                    if (((($this->getAttribute($context["course"], "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "expiryMode", array()), null)) : (null)) == "end_date")) {
                        // line 121
                        echo "                                    ";
                        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.end_date") . "-") . twig_date_format_filter($this->env, $this->getAttribute($context["course"], "expiryEndDate", array()), "Y-m-d")), "html", null, true);
                        echo "
                                  ";
                    } else {
                        // line 123
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.forever"), "html", null, true);
                        echo "
                                  ";
                    }
                    // line 125
                    echo "                                ";
                }
                // line 126
                echo "                              ";
            }
            // line 127
            echo "                          </span>
                      </div>

                    </div>

                  </div>
              </li>

              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
            </ul>
          </div>  
        </div>

        ";
        // line 141
        if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
            // line 142
            echo "        <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course_tips", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</div>
        <div class=\"form-group\">
          <div class=\"col-md-offset-9 col-md-3 controls\">
            <div class=\"mbl pull-right\">";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.total_price"), "html", null, true);
            echo "： &nbsp; &nbsp;
                ";
            // line 146
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                // line 147
                echo "                  <span class=\"price\" style=\"display:inline\">
                      <span  id=\"price\">";
                // line 148
                echo twig_escape_filter($this->env, (isset($context["coinPrice"]) ? $context["coinPrice"] : $this->getContext($context, "coinPrice")), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                echo "
                  </span>

                ";
            } else {
                // line 152
                echo "                  <span class=\"price\">
                      <span id=\"price\">";
                // line 153
                echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.currency.CNY"), "html", null, true);
                echo "
                  </span>
                ";
            }
            // line 156
            echo "
            </div>

          </div>  
        </div>
        ";
        } else {
            // line 162
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course_empty"), "html", null, true);
            echo "</div>
        ";
        }
        // line 164
        echo "
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>

  </div>
</div>

";
        
        $__internal_7b91f18b80f242df5e177e3a0038b9ca75f9b6de426f72e10efb5cfaa31f1368->leave($__internal_7b91f18b80f242df5e177e3a0038b9ca75f9b6de426f72e10efb5cfaa31f1368_prof);

    }

    public function getTemplateName()
    {
        return "classroom-manage/courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 165,  462 => 164,  456 => 162,  448 => 156,  440 => 153,  437 => 152,  428 => 148,  425 => 147,  423 => 146,  419 => 145,  412 => 142,  410 => 141,  403 => 136,  389 => 127,  386 => 126,  383 => 125,  377 => 123,  371 => 121,  368 => 120,  361 => 118,  358 => 117,  352 => 115,  350 => 114,  346 => 113,  339 => 109,  334 => 106,  325 => 104,  323 => 103,  318 => 100,  312 => 97,  306 => 96,  300 => 95,  297 => 94,  294 => 93,  292 => 92,  288 => 90,  280 => 88,  277 => 87,  271 => 84,  265 => 83,  262 => 82,  259 => 81,  256 => 80,  254 => 79,  250 => 77,  247 => 76,  241 => 74,  235 => 72,  232 => 71,  229 => 70,  227 => 69,  220 => 67,  213 => 66,  207 => 64,  205 => 63,  200 => 62,  198 => 61,  193 => 58,  189 => 56,  183 => 54,  175 => 52,  173 => 51,  166 => 50,  161 => 47,  155 => 45,  150 => 43,  145 => 42,  143 => 41,  136 => 40,  134 => 39,  124 => 36,  117 => 34,  113 => 33,  108 => 31,  104 => 30,  101 => 29,  97 => 28,  89 => 23,  80 => 19,  76 => 18,  72 => 16,  70 => 15,  60 => 7,  54 => 6,  40 => 2,  33 => 1,  31 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'classroom-manage/layout.html.twig' %}
{% block title %}{{'classroom.course_manage'|trans}} - {{ parent() }}{% endblock %}
{% set side_nav = 'courses' %}
{% do script(['app/js/classroom-manage/course-manage/index.js']) %}

{% block main %}
<style>
.sort{
    padding-top: 50px;
    padding-right: 20px;
    padding-left: 20px;
}
</style>

{% set url = path('classroom_courses_select',{id:classroom.id}) %}

<div class=\"panel panel-default\" role=\"classroom-manage-course-manage\">
  <div class=\"panel-heading\">{{'classroom.course_manage'|trans}}
    <button class=\"btn btn-primary btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('classroom_courses_pick',{classroomId:classroom.id})}}\">{{'classroom.create_course_btn'|trans}}</button>
  </div>
  <div class=\"panel-body\">
      <form id=\"courses-form\" class=\"form-horizontal\" method=\"post\">
        {{ web_macro.flash_messages() }}
        <div class=\"form-group\" id=\"courses-form-group\">
          <div class=\"col-md-12 controls\">
            <ul class=\"course-list-group sortable-list course-wide-list courses-selected\" id=\"course-list-group\" data-role=\"list\" >

              {% for course in courses %}

              <li class=\"course-item item-{{course.id}} clearfix\" data-role=\"item\" >
              <input type=\"hidden\" name=\"courseIds[]\" value=\"{{course.id}}\" />
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle sort\"></span>
              <a class=\"course-picture-link\" href=\"{{ path('course_show', {id:course.id}) }}\" target=\"_blank\">
                <img class=\"course-picture\" src=\"{{ filepath(course_cover(course, 'middle'), 'courseSet.png') }}\" alt=\"{{ course.title }}\">
              </a>
              <button class=\"close delete-btn pull-right mrl mts mll\" data-role=\"item-delete\" type=\"button\" title=\"{{'classroom.delete_btn'|trans}}\" style=\"font-size:35px;\" data-id=\"{{course.id}}\" data-url=\"{{path('classroom_manage_course_remove', {id: classroom.id, courseId: course.id})}}\">× </button>
                  <div class=\"course-body\">
                   <div class=\"color-gray mrm mls pull-right\">
                      {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
                          <span class=\"course-price course-price-{{course.id}}\" style=\"display:inline\" data-price=\"{{ course.originPrice * setting('coin.cash_rate')}}\">
                            {% if course.originPrice > 0 %}
                              {{ course.originPrice * setting('coin.cash_rate')}}
                              {{setting('coin.coin_name')}}
                            {% else %}
                              {{'classroom.free_course'|trans}}
                            {% endif %}
                          </span>

                      {% else %}
                        <span class=\"course-price course-price-{{course.id}}\" data-price=\"{{ course.originPrice }}\">
                          {% if course.originPrice > 0 %}
                            {{ course.originPrice }} {{'site.currency.CNY'|trans}}
                          {% else %}
                            {{'classroom.free_course'|trans}}
                          {% endif %}
                        </span>
                      {% endif %}
                    </div>

                    <h4 class=\"course-title text-overflow mb0\">
                      {% if course.serializeMode=='serialized' %}
                        <span class=\"label label-success \">{{'course.status.serialized'|trans}}</span>
                      {% elseif course.serializeMode=='finished' %}
                        <span class=\"label label-warning \">{{'course.status.finished'|trans}}</span>
                      {% endif %}
                      <a href=\"{{ path('course_show', {id:course.id}) }}\" target=\"_blank\">{{ course.courseSet.title }}</a>
                      <div class=\"course-title__plan\">{{'classroom.teach_plan'|trans}}：{{course.title|sub_text(20)}}</div>

                      {% if course.type == 'live' %}
                        {% set lesson = course['lesson']|default(null) %}
                        {% if lesson and \"now\"|date(\"U\") >= lesson.startTime and \"now\"|date(\"U\") <= lesson.endTime %}
                          <span class=\"label label-warning\">{{'classroom.live_course_playing'|trans}}</span>
                        {% else %}
                          <span class=\"label label-success\">{{'classroom.live'|trans}}</span>
                        {% endif %}
                    {% endif %}
                    </h4>

                    {% if course.type == 'live' %}
                      {% set lesson = course.lesson|default(null) %}
                      {% if lesson %}
                        <div class=\"live-course-lesson mbm\">
                          <span class=\"color-success fsm mrm\">{{ lesson.startTime|date('m-d H:i') }} ~ {{ lesson.endTime|date('H:i') }}</span>
                          <span class=\"color-gray fsm mrm\">{{'classroom.task_num'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans),'%number%':lesson.number})}}</span>
                        </div>
                      {% endif %}
                    {% else %}
                      <div class=\"pull-right cd-mr40\"><a class=\"cd-btn cd-btn-ghost-primary cd-btn-sm\" href=\"{{ path('course_set_manage_sync', {id: course.courseSet.id, sideNav: 'info'}) }}\" target=\"_blank\">{{ 'course.manage_btn'|trans }}</a></div>
                    {% endif %}

                    <div class=\"course-footer cd-mt32 clearfix\">
                      {% set teacher = users[course.teacherIds|first]|default(null) %}
                      {% if teacher %}
                        <div class=\"teacher\">
                          <a href=\"{{ path('user_show', {id:teacher.id}) }}\" target=\"_blank\"><img src=\"{{ filepath(teacher.smallAvatar, 'avatar.png') }}\" class=\"teacher-avatar\"></a>
                          <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"{{ path('user_show', {id:teacher.id}) }}\">{{ teacher.nickname }}</a>
                          <span class=\"teacher-title ellipsis\">{{ teacher.title }}</span>
                        </div>
                      {% endif %}

                      <div class=\"course-metas\">  

                        {% if setting('course.show_student_num_enabled', '1') == 1  %}
                        <span class=\"color-gray text-sm\">{{ course.studentNum }} {{'site.default.student'|trans}}</span>
                        <span class=\"divider\"></span>
                        {% endif %}  

                          <span class=\"color-gray text-sm\">
                              {{'classroom.total_task_count'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans),'%taskNum%':course.taskNum})}}
                          </span>
                          <span class=\"divider\"></span>
                          <span class=\"color-gray text-sm\">
                              {{'classroom.expiry_mode'|trans}}：
                              {% if course.expiryMode|default(null) == 'date' %}
                                {{course.expiryStartDate|date('Y-m-d H:i') ~ '~' ~ course.expiryEndDate|date('Y-m-d H:i')}}
                              {% else %}
                                {% if course.expiryDays %}
                                  {{course.expiryDays}}{{'site.date.day'|trans}}
                                {% else %}
                                  {% if course.expiryMode|default(null) == 'end_date' %}
                                    {{ 'classroom.end_date'|trans ~ '-' ~ course.expiryEndDate|date('Y-m-d') }}
                                  {% else %}
                                    {{'classroom.forever'|trans}}
                                  {% endif %}
                                {% endif %}
                              {% endif %}
                          </span>
                      </div>

                    </div>

                  </div>
              </li>

              {% endfor %}

            </ul>
          </div>  
        </div>

        {% if courses %}
        <div class=\"alert alert-warning\">{{'classroom.course_tips'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</div>
        <div class=\"form-group\">
          <div class=\"col-md-offset-9 col-md-3 controls\">
            <div class=\"mbl pull-right\">{{'classroom.total_price'|trans}}： &nbsp; &nbsp;
                {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
                  <span class=\"price\" style=\"display:inline\">
                      <span  id=\"price\">{{ coinPrice }}</span>{{setting('coin.coin_name')}}
                  </span>

                {% else %}
                  <span class=\"price\">
                      <span id=\"price\">{{ price }}</span>{{'site.currency.CNY'|trans}}
                  </span>
                {% endif %}

            </div>

          </div>  
        </div>
        {% else %}
        <div class=\"empty\">{{'classroom.course_empty'|trans}}</div>
        {% endif %}

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

      </form>

  </div>
</div>

{% endblock %}", "classroom-manage/courses.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\classroom-manage\\courses.html.twig");
    }
}
