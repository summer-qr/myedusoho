<?php

/* classroom-manage/index.html.twig */
class __TwigTemplate_3094ffcefe4d29ffaf5dcd398c35b1d836758aa8cb1f4400d8bab5ec4439e935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("classroom-manage/layout.html.twig", "classroom-manage/index.html.twig", 1);
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
        $__internal_912e24104687ea71f38bac96132cde3024c292de9a355edbda417d9a00b906b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912e24104687ea71f38bac96132cde3024c292de9a355edbda417d9a00b906b0->enter($__internal_912e24104687ea71f38bac96132cde3024c292de9a355edbda417d9a00b906b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classroom-manage/index.html.twig"));

        // line 5
        $context["side_nav"] = "main";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_912e24104687ea71f38bac96132cde3024c292de9a355edbda417d9a00b906b0->leave($__internal_912e24104687ea71f38bac96132cde3024c292de9a355edbda417d9a00b906b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ec0e98d70d8297a4b40b9e4d0aab1ea32658be41e803a970085a5164de4c5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec0e98d70d8297a4b40b9e4d0aab1ea32658be41e803a970085a5164de4c5b2->enter($__internal_9ec0e98d70d8297a4b40b9e4d0aab1ea32658be41e803a970085a5164de4c5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.manage"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_9ec0e98d70d8297a4b40b9e4d0aab1ea32658be41e803a970085a5164de4c5b2->leave($__internal_9ec0e98d70d8297a4b40b9e4d0aab1ea32658be41e803a970085a5164de4c5b2_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_c42b9716f47c2019c4259ed1fa3d9afa774ce065e6c55292ddf42f20d246b33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42b9716f47c2019c4259ed1fa3d9afa774ce065e6c55292ddf42f20d246b33f->enter($__internal_c42b9716f47c2019c4259ed1fa3d9afa774ce065e6c55292ddf42f20d246b33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        $context["unsetted"] = "";
        // line 9
        echo "<div class=\"panel panel-default\" role=\"classroom-manage-index\">
  <div class=\"panel-body\">
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.set"), "html", null, true);
        echo "</h4>
          <table class=\"table\">
            <tr>
              <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.about"), "html", null, true);
        echo "</td>
              ";
        // line 19
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array())) {
            // line 20
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.unset"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 25
            $context["unsetted"] = (((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.about"));
            // line 26
            echo "              ";
        } else {
            // line 27
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right color-success\"></i>
                </td>
              ";
        }
        // line 31
        echo "            </tr>
            <tr>
              <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.small_picture"), "html", null, true);
        echo "</td>
              ";
        // line 34
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array())) {
            // line 35
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.unset"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 40
            $context["unsetted"] = (((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.small_picture"));
            // line 41
            echo "              ";
        } else {
            // line 42
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right color-success\"></i>
                </td>
              ";
        }
        // line 46
        echo "            </tr>
            <tr>
              <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.price"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn btn-info btn-xs pull-right\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 51
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 52
            echo "                    ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
            echo "
                    ";
            // line 53
            if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")) == 0)) {
                // line 54
                echo "                      ";
                $context["unsetted"] = (((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.price"));
                // line 55
                echo "                    ";
            }
            // line 56
            echo "                  ";
        } else {
            // line 57
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.currency.CNY"), "html", null, true);
            echo "
                    ";
            // line 58
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) == 0)) {
                // line 59
                echo "                      ";
                $context["unsetted"] = (((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.price"));
                // line 60
                echo "                    ";
            }
            // line 61
            echo "                  ";
        }
        // line 62
        echo "                  <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course"), "html", null, true);
        echo "</h4>
          <table class=\"table\">
            <tr>
              <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course_num"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn btn-";
        // line 76
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "courseNum", array()) > 0)) {
            echo "info";
        } else {
            echo "danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 77
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), 0)) : (0)), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
              ";
        // line 80
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "courseNum", array()) == 0)) {
            // line 81
            echo "                ";
            $context["unsetted"] = (((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.course"));
            // line 82
            echo "              ";
        }
        // line 83
        echo "            </tr>
            <tr>
              <td>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.tash_num", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "</td>
              <td><span class=\"label label-default pull-right\">";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "lessonNum", array()), "html", null, true);
        echo "</span></td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.student"), "html", null, true);
        echo "</h4>
          <table class=\"table\">
            <tr>
              <td>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.student_num"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn ";
        // line 98
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "studentNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "studentNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.auditor_num"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn ";
        // line 106
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "auditorNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_aduitor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "auditorNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    ";
        // line 115
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 116
            echo "      <hr>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <h4>";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.study_status", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</h4>
          <table class=\"table\">
            <thead>
              <th></th>
              <th>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.yesterday"), "html", null, true);
            echo "</th>
              <th>";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.today"), "html", null, true);
            echo "</th>
            </thead>
            <tr>
              <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.total_student_num"), "html", null, true);
            echo "</td>
              <td>";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["yestodayAllCount"]) ? $context["yestodayAllCount"] : $this->getContext($context, "yestodayAllCount")), "html", null, true);
            echo "</td>
              <td>";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : $this->getContext($context, "allCount")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.formal_student_num"), "html", null, true);
            echo "</td>
              <td>";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["yestodayStudentCount"]) ? $context["yestodayStudentCount"] : $this->getContext($context, "yestodayStudentCount")), "html", null, true);
            echo "</td>
              <td>";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["studentCount"]) ? $context["studentCount"] : $this->getContext($context, "studentCount")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.task_finish_num", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
            echo "</td>
              <td>";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["yesterdayFinishedTaskNum"]) ? $context["yesterdayFinishedTaskNum"] : $this->getContext($context, "yesterdayFinishedTaskNum")), "html", null, true);
            echo "</td>
              <td>";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["todayFinishedTaskNum"]) ? $context["todayFinishedTaskNum"] : $this->getContext($context, "todayFinishedTaskNum")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.add_thread_num"), "html", null, true);
            echo "</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["yesterdayThreadCount"]) ? $context["yesterdayThreadCount"] : $this->getContext($context, "yesterdayThreadCount")), "html", null, true);
            echo "</td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["todayThreadCount"]) ? $context["todayThreadCount"] : $this->getContext($context, "todayThreadCount")), "html", null, true);
            echo "</td>
            </tr>
          </table>
        </div>

        <div class=\"col-md-6 reviews\">
          <h4>";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.latest_review"), "html", null, true);
            echo "</h4>
          <br>
          ";
            // line 152
            if ((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews"))) {
                // line 153
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 154
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index", array()) <= 4)) {
                        // line 155
                        echo "                <div class=\"media\">
                  <div class=\"pull-left\">
                    <span class=\"class-name\">";
                        // line 157
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reviewUsers"]) ? $context["reviewUsers"] : $this->getContext($context, "reviewUsers")), $this->getAttribute($context["review"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                        echo "</span>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"stars-";
                        // line 160
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["review"], "rating", array())), "html", null, true);
                        echo "\"></div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<time>";
                        // line 161
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["review"], "createdTime", array())), "html", null, true);
                        echo "</time>
                    <button class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        // line 162
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute($this->getAttribute((isset($context["reviewUsers"]) ? $context["reviewUsers"] : $this->getContext($context, "reviewUsers")), $this->getAttribute($context["review"], "userId", array()), array(), "array"), "id", array()))), "html", null, true);
                        echo "\" style=\"float:right;\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message"), "html", null, true);
                        echo "</button>
                  </div>
                  <p>";
                        // line 164
                        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 40);
                        echo "</p>
                </div>
              ";
                    }
                    // line 167
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "          ";
            } else {
                // line 169
                echo "            <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom.reviews_empty", array("%name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
                echo "</div>
          ";
            }
            // line 171
            echo "        </div>
      </div>
      <hr>
    ";
        }
        // line 175
        echo "  </div>
</div>
";
        
        $__internal_c42b9716f47c2019c4259ed1fa3d9afa774ce065e6c55292ddf42f20d246b33f->leave($__internal_c42b9716f47c2019c4259ed1fa3d9afa774ce065e6c55292ddf42f20d246b33f_prof);

    }

    public function getTemplateName()
    {
        return "classroom-manage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 175,  476 => 171,  470 => 169,  467 => 168,  453 => 167,  447 => 164,  440 => 162,  436 => 161,  432 => 160,  426 => 157,  422 => 155,  419 => 154,  401 => 153,  399 => 152,  394 => 150,  385 => 144,  381 => 143,  377 => 142,  371 => 139,  367 => 138,  363 => 137,  357 => 134,  353 => 133,  349 => 132,  343 => 129,  339 => 128,  335 => 127,  329 => 124,  325 => 123,  318 => 119,  313 => 116,  311 => 115,  300 => 107,  290 => 106,  285 => 104,  277 => 99,  267 => 98,  262 => 96,  256 => 93,  246 => 86,  242 => 85,  238 => 83,  235 => 82,  232 => 81,  230 => 80,  224 => 77,  214 => 76,  209 => 74,  203 => 71,  192 => 62,  189 => 61,  186 => 60,  183 => 59,  181 => 58,  175 => 57,  172 => 56,  169 => 55,  166 => 54,  164 => 53,  157 => 52,  155 => 51,  151 => 50,  146 => 48,  142 => 46,  136 => 42,  133 => 41,  131 => 40,  125 => 37,  121 => 36,  118 => 35,  116 => 34,  112 => 33,  108 => 31,  102 => 27,  99 => 26,  97 => 25,  91 => 22,  87 => 21,  84 => 20,  82 => 19,  78 => 18,  72 => 15,  65 => 11,  61 => 9,  59 => 8,  53 => 7,  38 => 3,  31 => 1,  29 => 5,  11 => 1,);
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

{% block title %}{{ setting('classroom.name')|default(\"site.default.classroom\"|trans) }}{{'classroom.manage'|trans}} - {{ parent() }}{% endblock %}

{% set side_nav = 'main' %}

{% block main %}
{% set unsetted = \"\" %}
<div class=\"panel panel-default\" role=\"classroom-manage-index\">
  <div class=\"panel-body\">
    {{ web_macro.flash_messages() }}
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>{{'classroom.set'|trans}}</h4>
          <table class=\"table\">
            <tr>
              <td>{{'classroom.about'|trans}}</td>
              {% if not classroom.about %}
                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"{{path('classroom_manage_set_info',{id:classroom.id})}}\">
                    {{'classroom.unset'|trans}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                {% set unsetted = unsetted ~ ',' ~ 'classroom.about'|trans %}
              {% else %}
                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right color-success\"></i>
                </td>
              {% endif %}
            </tr>
            <tr>
              <td>{{'classroom.small_picture'|trans}}</td>
              {% if not classroom.smallPicture %}
                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"{{path('classroom_manage_set_picture',{id:classroom.id})}}\">
                    {{'classroom.unset'|trans}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                {% set unsetted = unsetted ~ ',' ~ 'classroom.small_picture'|trans %}
              {% else %}
                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right color-success\"></i>
                </td>
              {% endif %}
            </tr>
            <tr>
              <td>{{'classroom.price'|trans}}</td>
              <td>
                <a class=\"btn btn-info btn-xs pull-right\" href=\"{{path('classroom_manage_set_price',{id:classroom.id})}}\">
                  {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
                    {{classroom.price * setting('coin.cash_rate') }} {{setting('coin.coin_name')}}
                    {% if classroom.price * setting('coin.cash_rate')  == 0 %}
                      {% set unsetted = unsetted ~ ',' ~ 'classroom.price'|trans %}
                    {% endif %}
                  {% else %}
                    {{ classroom.price }}{{'site.currency.CNY'|trans}}
                    {% if classroom.price == 0 %}
                      {% set unsetted = unsetted ~ ',' ~ 'classroom.price'|trans %}
                    {% endif %}
                  {% endif %}
                  <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>{{'classroom.course'|trans}}</h4>
          <table class=\"table\">
            <tr>
              <td>{{'classroom.course_num'|trans}}</td>
              <td>
                <a class=\"btn btn-{% if classroom.courseNum > 0 %}info{% else %}danger{% endif %} btn-xs pull-right\" href=\"{{ path('classroom_manage_courses', {id:classroom.id}) }}\">
                  {{classroom.courseNum|default(0)}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
              {% if classroom.courseNum == 0 %}
                {% set unsetted = unsetted ~ ',' ~ 'classroom.course'|trans %}
              {% endif %}
            </tr>
            <tr>
              <td>{{'classroom.tash_num'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans)})}}</td>
              <td><span class=\"label label-default pull-right\">{{classroom.lessonNum}}</span></td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>{{'classroom.student'|trans}}</h4>
          <table class=\"table\">
            <tr>
              <td>{{'classroom.student_num'|trans}}</td>
              <td>
                <a class=\"btn {% if (classroom.studentNum) > 0 %}btn-info{% else %}btn-danger{% endif %} btn-xs pull-right\" href=\"{{ path('classroom_manage_students', {id:classroom.id}) }}\">
                  {{classroom.studentNum}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>{{'classroom.auditor_num'|trans}}</td>
              <td>
                <a class=\"btn {% if (classroom.auditorNum) > 0 %}btn-info{% else %}btn-danger{% endif %} btn-xs pull-right\" href=\"{{ path('classroom_manage_aduitor', {id:classroom.id}) }}\">
                  {{classroom.auditorNum}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    {% if classroom.status == \"published\" %}
      <hr>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <h4>{{'classroom.study_status'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</h4>
          <table class=\"table\">
            <thead>
              <th></th>
              <th>{{'classroom.yesterday'|trans}}</th>
              <th>{{'classroom.today'|trans}}</th>
            </thead>
            <tr>
              <td>{{'classroom.total_student_num'|trans}}</td>
              <td>{{yestodayAllCount}}</td>
              <td>{{allCount}}</td>
            </tr>
            <tr>
              <td>{{'classroom.formal_student_num'|trans}}</td>
              <td>{{yestodayStudentCount}}</td>
              <td>{{studentCount}}</td>
            </tr>
            <tr>
              <td>{{'classroom.task_finish_num'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans)})}}</td>
              <td>{{yesterdayFinishedTaskNum}}</td>
              <td>{{todayFinishedTaskNum}}</td>
            </tr>
            <tr>
                <td>{{'classroom.add_thread_num'|trans}}</td>
                <td>{{yesterdayThreadCount}}</td>
                <td>{{todayThreadCount}}</td>
            </tr>
          </table>
        </div>

        <div class=\"col-md-6 reviews\">
          <h4>{{'classroom.latest_review'|trans}}</h4>
          <br>
          {% if reviews%}
            {% for review in reviews %}
              {% if loop.index <= 4 %}
                <div class=\"media\">
                  <div class=\"pull-left\">
                    <span class=\"class-name\">{{reviewUsers[review.userId].nickname}}</span>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"stars-{{ (review.rating)|number_format }}\"></div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<time>{{review.createdTime|smart_time}}</time>
                    <button class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('message_create', {toId:reviewUsers[review.userId].id})}}\" style=\"float:right;\">{{'message'|trans}}</button>
                  </div>
                  <p>{{ review.content|plain_text(40) }}</p>
                </div>
              {% endif %}
            {% endfor %}
          {% else %}
            <div class=\"empty\">{{'classroom.reviews_empty'|trans({'%name%':setting('classroom.name')|default('classroom'|trans)})}}</div>
          {% endif %}
        </div>
      </div>
      <hr>
    {% endif %}
  </div>
</div>
{% endblock %}
", "classroom-manage/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\classroom-manage\\index.html.twig");
    }
}
