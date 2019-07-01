<?php

/* admin/default/index.html.twig */
class __TwigTemplate_35b262832772c3d6f9e3c38fd368c03be1435d0b7222aad048d39d16f6813c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b17275375ac541d0336498c75e20a7657c397ca595f8959174010713ad0f9684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17275375ac541d0336498c75e20a7657c397ca595f8959174010713ad0f9684->enter($__internal_b17275375ac541d0336498c75e20a7657c397ca595f8959174010713ad0f9684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/index.html.twig"));

        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b17275375ac541d0336498c75e20a7657c397ca595f8959174010713ad0f9684->leave($__internal_b17275375ac541d0336498c75e20a7657c397ca595f8959174010713ad0f9684_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5c172e80b364e0816bf9f92c53f8c7a1577a2169aca22cbba7a572bf34e579d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c172e80b364e0816bf9f92c53f8c7a1577a2169aca22cbba7a572bf34e579d->enter($__internal_d5c172e80b364e0816bf9f92c53f8c7a1577a2169aca22cbba7a572bf34e579d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.hompage.html_head_title"), "html", null, true);
        
        $__internal_d5c172e80b364e0816bf9f92c53f8c7a1577a2169aca22cbba7a572bf34e579d->leave($__internal_d5c172e80b364e0816bf9f92c53f8c7a1577a2169aca22cbba7a572bf34e579d_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_d99ef6db1e9dc639456e1c3a29a917639cb023f8854741ee72efdfc1f69e6473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99ef6db1e9dc639456e1c3a29a917639cb023f8854741ee72efdfc1f69e6473->enter($__internal_d99ef6db1e9dc639456e1c3a29a917639cb023f8854741ee72efdfc1f69e6473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "  ";
        // line 7
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:validateDomain"));
        echo "
  <div class=\"row\">
    ";
        // line 9
        if ( !(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 10
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:getCloudNotices"));
            echo "
    ";
        }
        // line 12
        echo "
    <div class=\"
      ";
        // line 14
        if ( !(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 15
            echo "        col-md-6
      ";
        } else {
            // line 17
            echo "        col-md-12
      ";
        }
        // line 19
        echo "      \">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.content_title"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\" id=\"system-status\" data-url=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_system_status");
        echo "\">
          <div class=\"empty\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.loadig_data_tips"), "html", null, true);
        echo "</div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"panel panel-default\">
    <div class=\"panel-heading clearfix\">
      <h3 class=\"panel-title\">
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data_title"), "html", null, true);
        echo "
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-today-data-popover\"></span>
        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.tooltips");
        echo "
      </h3>

    </div>
    <div class=\"panel-body \" id=\"site-overview-table\" data-url=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_analysis");
        echo "\">
      <div class=\"empty\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.loadig_data_tips"), "html", null, true);
        echo "</div>
    </div>
  </div>

  ";
        // line 47
        echo "  ";
        // line 48
        echo "    ";
        // line 49
        echo "      ";
        // line 50
        echo "        ";
        // line 51
        echo "        ";
        // line 52
        echo "          ";
        // line 53
        echo "                  ";
        // line 54
        echo "                  ";
        // line 55
        echo "          ";
        // line 56
        echo "          ";
        // line 57
        echo "                  ";
        // line 58
        echo "                  ";
        // line 59
        echo "          ";
        // line 60
        echo "        ";
        // line 61
        echo "      ";
        // line 62
        echo "      ";
        // line 63
        echo "        ";
        // line 64
        echo "        ";
        // line 65
        echo "          ";
        // line 66
        echo "            ";
        // line 67
        echo "            ";
        // line 68
        echo "          ";
        // line 69
        echo "          ";
        // line 70
        echo "            ";
        // line 71
        echo "            ";
        // line 72
        echo "          ";
        // line 73
        echo "        ";
        // line 74
        echo "      ";
        // line 75
        echo "    ";
        // line 76
        echo "    ";
        // line 77
        echo "         ";
        // line 78
        echo "      ";
        // line 79
        echo "    ";
        // line 80
        echo "  ";
        // line 81
        echo "  ";
        // line 82
        echo "
 
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-study-switch-button\"
                      data-time=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "
              </button>
              <button type=\"button\" class=\"btn btn-default js-study-switch-button\"
                      data-time=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.month"), "html", null, true);
        echo "
              </button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.order_statistic_title"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.order_statistic.tips");
        echo "
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-count-statistic\"
             data-url=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
   
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-order-switch-button\"
                      data-time=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-order-switch-button\"
                      data-time=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.month"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.pay_order_statistic_title"), "html", null, true);
        echo "</h3>
        </div>
        
        <div class=\"panel-body js-statistic-areas\" id=\"pay-order-statistic\"
             data-url=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
        
      </div>
    </div>
  </div>


  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-task-switch-button\"
                      data-time=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_task_learn_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-task-switch-button\"
                      data-time=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_task_learn_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.month"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.task_finish_statistic_title", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"content\">
                  ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.task_finish_statistic.tips", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
                </div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-task-count-statistic\"
             data-url=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_task_learn_statistic", array("period" => "week"));
        echo "\" style=\"height:360px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-course-switch-button\"
                      data-time=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default  js-course-switch-button\"
                      data-time=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.month"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.course_ranking_title"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"course-explore-list\"
             data-url=\"";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-4\">

      <div class=\"panel panel-default panel-420 js-course-question-list\">
        <div class=\"panel-heading\">
          <a class=\"pull-right\" href=\"";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
          >";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.more_btn"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question_title"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:unsolvedQuestionsBlock"));
        echo "
        </div>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <a href=\"";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_review");
        echo "\" class=\"pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.more_btn"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">
            ";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_review_title"), "html", null, true);
        echo "
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:courseReview"));
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default search-panel panel-420\">
        <div class=\"panel-heading\">
          ";
        // line 229
        echo "          <h3 class=\"panel-title\">
            ";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.top_search_title"), "html", null, true);
        echo "
            <small>";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.statistic.week"), "html", null, true);
        echo "</small>
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 235
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_search.search_enabled")) {
            // line 236
            echo "            <div class=\"empty\">
              <a target=\"_blank\" href=\"";
            // line 237
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_search");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.free_access_edu_cloud_search_btn"), "html", null, true);
            echo "</a>
            </div>
          ";
        } else {
            // line 240
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Admin/Default:cloudSearchRanking"));
            echo "
          ";
        }
        // line 242
        echo "        </div>
      </div>
    </div>
  </div>
  <div  id=\"cloud-ad\" class=\"admin-cloud-ad modal fade text-center\" aria-hidden=\"true\" data-backdrop=\"static\"  tabindex=\"-1\" role=\"dialog\" data-url =\"";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_ad");
        echo "\">
    <div class=\"modal-dialog\">
        <a href=\"\" target=\"_blank\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
        </a>
    </div>
  </div>
";
        
        $__internal_d99ef6db1e9dc639456e1c3a29a917639cb023f8854741ee72efdfc1f69e6473->leave($__internal_d99ef6db1e9dc639456e1c3a29a917639cb023f8854741ee72efdfc1f69e6473_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 246,  537 => 242,  531 => 240,  523 => 237,  520 => 236,  518 => 235,  511 => 231,  507 => 230,  504 => 229,  494 => 221,  487 => 217,  480 => 215,  469 => 207,  463 => 204,  459 => 203,  455 => 202,  440 => 190,  434 => 187,  426 => 184,  420 => 183,  413 => 181,  407 => 180,  393 => 169,  383 => 162,  374 => 156,  366 => 153,  360 => 152,  353 => 150,  347 => 149,  339 => 146,  322 => 132,  315 => 128,  307 => 125,  301 => 124,  294 => 122,  288 => 121,  280 => 118,  267 => 108,  260 => 104,  254 => 101,  245 => 97,  239 => 96,  231 => 93,  225 => 92,  217 => 89,  208 => 82,  206 => 81,  204 => 80,  202 => 79,  200 => 78,  198 => 77,  196 => 76,  194 => 75,  192 => 74,  190 => 73,  188 => 72,  186 => 71,  184 => 70,  182 => 69,  180 => 68,  178 => 67,  176 => 66,  174 => 65,  172 => 64,  170 => 63,  168 => 62,  166 => 61,  164 => 60,  162 => 59,  160 => 58,  158 => 57,  156 => 56,  154 => 55,  152 => 54,  150 => 53,  148 => 52,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  131 => 42,  127 => 41,  120 => 37,  115 => 35,  102 => 25,  98 => 24,  93 => 22,  88 => 19,  84 => 17,  80 => 15,  78 => 14,  74 => 12,  68 => 10,  66 => 9,  60 => 7,  58 => 6,  52 => 5,  40 => 2,  33 => 1,  31 => 4,  29 => 3,  11 => 1,);
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
{% block title %}{{ 'admin.hompage.html_head_title'|trans }}{% endblock %}
{% set panel = 'dashboard' %}
{% set script_controller = 'default/index' %}
{% block container %}
  {# 域名检查提示#}
  {{ render(controller('AppBundle:Admin/Default:validateDomain')) }}
  <div class=\"row\">
    {% if not (setting('copyright.thirdCopyright')|default(0) == 1) %}
      {{ render(controller('AppBundle:Admin/Default:getCloudNotices')) }}
    {% endif %}

    <div class=\"
      {% if not (setting('copyright.thirdCopyright')|default(0) == 1) %}
        col-md-6
      {% else %}
        col-md-12
      {% endif %}
      \">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">{{ 'admin.homepage.status_bar.content_title'|trans }}</h3>
        </div>
        <div class=\"panel-body\" id=\"system-status\" data-url=\"{{ path('admin_system_status') }}\">
          <div class=\"empty\">{{ 'admin.homepage.loadig_data_tips'|trans }}</div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"panel panel-default\">
    <div class=\"panel-heading clearfix\">
      <h3 class=\"panel-title\">
        {{ 'admin.homepage.todays_data_title'|trans }}
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-today-data-popover\"></span>
        {{ 'admin.homepage.todays_data.tooltips'|trans|raw }}
      </h3>

    </div>
    <div class=\"panel-body \" id=\"site-overview-table\" data-url=\"{{ path('admin_operation_analysis') }}\">
      <div class=\"empty\">{{ 'admin.homepage.loadig_data_tips'|trans }}</div>
    </div>
  </div>

  {##}
  {#<div class=\"panel panel-default panel-380\">#}
    {#<div class=\"panel-heading\">#}
      {#<div class=\"pull-right\">#}
        {#<span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}</span>#}
        {#<div class=\"btn-group btn-group-xs\">#}
          {#<button type=\"button\" class=\"btn btn-primary js-user-switch-button\"#}
                  {#data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"#}
                  {#data-url=\"{{ path('admin_user_statistic', {period: 'week'}) }}\">最近7天#}
          {#</button>#}
          {#<button type=\"button\" class=\"btn btn-default js-user-switch-button\"#}
                  {#data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"#}
                  {#data-url=\"{{ path('admin_user_statistic', {period: 'month'}) }}\">最近30天#}
          {#</button>#}
        {#</div>#}
      {#</div>#}
      {#<h3 class=\"panel-title\">{{ '用户统计'|trans }}#}
        {#<span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>#}
        {#<div class=\"popover-content hidden\">#}
          {#<div class=\"popover-item\">#}
            {#<div class=\"title\">{{ '活跃用户数'|trans }}</div>#}
            {#<div class=\"content\">{{ '在30天内登录过系统的用户即为活跃用户'|trans }}</div>#}
          {#</div>#}
          {#<div class=\"popover-item\">#}
            {#<div class=\"title\">{{ '流失用户数'|trans }}</div>#}
            {#<div class=\"content\">{{ '在30天内没有登录过系统的注册用户即为流失用户'|trans }}</div>#}
          {#</div>#}
        {#</div>#}
      {#</h3>#}
    {#</div>#}
    {#<div class=\"panel-body js-statistic-areas\" id=\"user-statistic\"#}
         {#data-url=\"{{ path('admin_user_statistic', {period: 'week'}) }}\" style=\"height:320px;\">#}
      {#<div class=\"empty\">{{ '正在载入数据，请稍等。'|trans }}</div>#}
    {#</div>#}
  {#</div>#}
  {##}

 
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }} </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-study-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_study_statistic', {period: 'week'}) }}\">{{ 'admin.homepage.statistic.week'|trans }}
              </button>
              <button type=\"button\" class=\"btn btn-default js-study-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_study_statistic', {period: 'month'}) }}\">{{ 'admin.homepage.statistic.month'|trans }}
              </button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ 'admin.homepage.order_statistic_title'|trans }}
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            {{ 'admin.homepage.order_statistic.tips'|trans|raw }}
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-count-statistic\"
             data-url=\"{{ path('admin_study_statistic', {period: 'week'}) }}\" style=\"height:320px;\">

        </div>
      </div>
    </div>
   
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }} </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-order-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_order_statistic', {period: 'week'}) }}\">{{ 'admin.homepage.statistic.week'|trans }}</button>
              <button type=\"button\" class=\"btn btn-default js-order-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_order_statistic',{period: 'month'}) }}\">{{ 'admin.homepage.statistic.month'|trans }}</button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ 'admin.homepage.pay_order_statistic_title'|trans }}</h3>
        </div>
        
        <div class=\"panel-body js-statistic-areas\" id=\"pay-order-statistic\"
             data-url=\"{{ path('admin_order_statistic', {period: 'week'}) }}\" style=\"height:320px;\">

        </div>
        
      </div>
    </div>
  </div>


  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }} </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-task-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_task_learn_statistic', {period: 'week'}) }}\">{{ 'admin.homepage.statistic.week'|trans }}</button>
              <button type=\"button\" class=\"btn btn-default js-task-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_task_learn_statistic', {period: 'month'}) }}\">{{ 'admin.homepage.statistic.month'|trans }}</button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ 'admin.homepage.task_finish_statistic_title'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans)}) }}
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"content\">
                  {{ 'admin.homepage.task_finish_statistic.tips'|trans({'%taskName%':setting('course.task_name')|default('admin.setting_course.task'|trans)}) }}
                </div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-task-count-statistic\"
             data-url=\"{{ path('admin_task_learn_statistic', {period: 'week'}) }}\" style=\"height:360px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-course-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_course_explore', {period: 'week'}) }}\">{{ 'admin.homepage.statistic.week'|trans }}</button>
              <button type=\"button\" class=\"btn btn-default  js-course-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_course_explore', {period: 'month'}) }}\">{{ 'admin.homepage.statistic.month'|trans }}</button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ 'admin.homepage.course_ranking_title'|trans }}</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"course-explore-list\"
             data-url=\"{{ path('admin_course_explore', {period: 'week'}) }}\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-4\">

      <div class=\"panel panel-default panel-420 js-course-question-list\">
        <div class=\"panel-heading\">
          <a class=\"pull-right\" href=\"{{ url('admin_question', {postStatus: 'unPosted'}) }}\"
          >{{ 'admin.homepage.more_btn'|trans }}</a>
          <h3 class=\"panel-title\">{{ 'admin.homepage.latest_question_title'|trans }}</h3>
        </div>
        <div class=\"panel-body\">
          {{ render(controller('AppBundle:Admin/Default:unsolvedQuestionsBlock')) }}
        </div>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <a href=\"{{ path('admin_review') }}\" class=\"pull-right\">{{ 'admin.homepage.more_btn'|trans }}</a>
          <h3 class=\"panel-title\">
            {{ 'admin.homepage.latest_review_title'|trans }}
          </h3>
        </div>
        <div class=\"panel-body\">
          {{ render(controller('AppBundle:Admin/Default:courseReview')) }}
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default search-panel panel-420\">
        <div class=\"panel-heading\">
          {# <a href=\"\" class=\"pull-right\">{{ '更多'|trans }}</a>#}
          <h3 class=\"panel-title\">
            {{ 'admin.homepage.top_search_title'|trans }}
            <small>{{ 'admin.homepage.statistic.week'|trans }}</small>
          </h3>
        </div>
        <div class=\"panel-body\">
          {% if not setting('cloud_search.search_enabled') %}
            <div class=\"empty\">
              <a target=\"_blank\" href=\"{{ path('admin_edu_cloud_search') }}\">{{ 'admin.homepage.free_access_edu_cloud_search_btn'|trans }}</a>
            </div>
          {% else %}
            {{ render(controller('AppBundle:Admin/Default:cloudSearchRanking')) }}
          {% endif %}
        </div>
      </div>
    </div>
  </div>
  <div  id=\"cloud-ad\" class=\"admin-cloud-ad modal fade text-center\" aria-hidden=\"true\" data-backdrop=\"static\"  tabindex=\"-1\" role=\"dialog\" data-url =\"{{ path('admin_cloud_ad') }}\">
    <div class=\"modal-dialog\">
        <a href=\"\" target=\"_blank\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
        </a>
    </div>
  </div>
{% endblock %}
", "admin/default/index.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\default\\index.html.twig");
    }
}
