<?php

/* admin/system/course-setting.html.twig */
class __TwigTemplate_5dc0b7823ea8ea61e354b50266667853685aaed6ce95d429d658aab1edc3a152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/course-setting.html.twig", 1);
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
        $__internal_d6cae766519ec87d5f63acf05cd90a00f2eee0628e5ba78d9d7be040edaa7ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cae766519ec87d5f63acf05cd90a00f2eee0628e5ba78d9d7be040edaa7ab5->enter($__internal_d6cae766519ec87d5f63acf05cd90a00f2eee0628e5ba78d9d7be040edaa7ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/course-setting.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_course";
        // line 4
        $context["script_controller"] = "setting/course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6cae766519ec87d5f63acf05cd90a00f2eee0628e5ba78d9d7be040edaa7ab5->leave($__internal_d6cae766519ec87d5f63acf05cd90a00f2eee0628e5ba78d9d7be040edaa7ab5_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_8ee7793514777fa693124efd5c707023d330b4272efe7f1e7ce6a78500fef12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee7793514777fa693124efd5c707023d330b4272efe7f1e7ce6a78500fef12f->enter($__internal_8ee7793514777fa693124efd5c707023d330b4272efe7f1e7ce6a78500fef12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <legend>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_rule"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >
          ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.send_welcome_messages"), "html", null, true);
        echo "
        </label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 22
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("welcome_message_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "welcome_message_enabled", array()));
        echo "
      <p class=\"help-block\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_rule.help_block"), "html", null, true);
        echo "
      </p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.welcome_messages_content"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "welcome_message_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">

          <div>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.welcome_messages_content.Variables"), "html", null, true);
        echo "</div>
          <ul>
            <li>";
        // line 39
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.welcome_messages_content.as_recipient_user_name"), "html", null, true);
        echo "</li>
            <li>";
        // line 40
        echo "{{course}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.welcome_messages_content.as_course_name"), "html", null, true);
        echo "</li>
          </ul>

        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_detail_show_relevant_course"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 52
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("relatedCourses", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "relatedCourses", array()));
        echo "
        <div class=\"help-block\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_detail_show_relevant_course.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.authority_and_copyright"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow_teacher_manage_course_marketing"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 65
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("teacher_manage_marketing", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.yes"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.no")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_manage_marketing", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow_teacher_search_course_order"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 74
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("teacher_search_order", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.yes"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.no")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_search_order", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow_teacher_add_or_remove"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.student"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 83
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("teacher_manage_student", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.yes"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.no")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_manage_student", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow_teacher_export_material"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 92
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("teacher_export_student", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.yes"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.no")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_export_student", array()));
        echo "
      </div>
    </div>
    ";
        // line 95
        $context["smsSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms");
        // line 96
        echo "    ";
        if (((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_enabled", array()), 0)) : (0)) && (((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_normal_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_normal_lesson_publish", array()), "off")) : ("off")) == "on") || ((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_live_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_live_lesson_publish", array()), "off")) : ("off")) == "on")))) {
            // line 97
            echo "    ";
        }
        // line 98
        echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_list_page_seq"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 103
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("explore_default_orderBy", array("latest" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.latest"), "hotSeq" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.hotest"), "recommendedSeq" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.recommended")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "explore_default_orderBy", array()));
        echo "
        <p class=\"help-block\"><a target=\"_blank\" href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_list_page.help_block"), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_list_page_seq.help_block"), "html", null, true);
        echo "</p>
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.Prevent_copying_rich_text_doc"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 113
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("copy_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "copy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.Prevent_copying_test_paper"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 123
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("testpaperCopy_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "testpaperCopy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_operation_mode"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_operation_mode.free_try_view"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 138
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("allowAnonymousPreview", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.allow"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.not_allow")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "allowAnonymousPreview", array()));
        echo "
        <div class=\"help-block\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_operation_mode.free_try_view.help_block"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.course_operation_mode.allow_show_user_count"), "html", null, true);
        echo "</label>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 146
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("show_student_num_enabled", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.open"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.closed")), (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array()), "1")) : ("1")));
        echo "
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.customer_chapter_section_name"), "html", null, true);
        echo "</legend>
    ";
        // line 155
        echo "    <input type=\"hidden\" name=\"custom_chapter_enabled\" value=\"1\">
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
          <label for=\"chapter_name\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task_chapter_name"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-4\">
        <input  type=\"text\" id=\"chapter_name\" name=\"chapter_name\" class=\"form-control\" data-before-value=\"";
        // line 161
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "chapter_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.chapter"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.chapter"))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "chapter_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.chapter"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.chapter"))), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
          <label for=\"part_name\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task_section_name"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-4\">
        <input  type=\"text\" id=\"part_name\" name=\"part_name\" class=\"form-control\" data-before-value=\"";
        // line 170
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "part_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.section"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.section"))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "part_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.section"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.section"))), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"alert alert-info deduction text-center\">
    <p><strong>
    ";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.customer_chapter_section_name.tips"), "html", null, true);
        echo "
    </strong></p>
    </div>

  </fieldset>

  ";
        // line 182
        echo "    ";
        // line 183
        echo "    ";
        // line 184
        echo "      ";
        // line 185
        echo "        ";
        // line 186
        echo "      ";
        // line 187
        echo "      ";
        // line 188
        echo "        ";
        // line 189
        echo "      ";
        // line 190
        echo "    ";
        // line 191
        echo "    ";
        // line 192
        echo "      ";
        // line 193
        echo "          ";
        // line 194
        echo "        ";
        // line 195
        echo "    ";
        // line 196
        echo "  ";
        // line 197
        echo "
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
        
        $__internal_8ee7793514777fa693124efd5c707023d330b4272efe7f1e7ce6a78500fef12f->leave($__internal_8ee7793514777fa693124efd5c707023d330b4272efe7f1e7ce6a78500fef12f_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 203,  400 => 200,  395 => 197,  393 => 196,  391 => 195,  389 => 194,  387 => 193,  385 => 192,  383 => 191,  381 => 190,  379 => 189,  377 => 188,  375 => 187,  373 => 186,  371 => 185,  369 => 184,  367 => 183,  365 => 182,  356 => 175,  346 => 170,  340 => 167,  329 => 161,  323 => 158,  318 => 155,  314 => 153,  304 => 146,  299 => 144,  291 => 139,  287 => 138,  281 => 135,  274 => 131,  263 => 123,  257 => 120,  247 => 113,  241 => 110,  228 => 104,  224 => 103,  218 => 100,  214 => 98,  211 => 97,  208 => 96,  206 => 95,  200 => 92,  194 => 89,  185 => 83,  178 => 80,  169 => 74,  163 => 71,  154 => 65,  148 => 62,  142 => 59,  133 => 53,  129 => 52,  123 => 49,  109 => 40,  103 => 39,  98 => 37,  92 => 34,  86 => 31,  76 => 24,  71 => 22,  64 => 18,  57 => 14,  49 => 9,  45 => 7,  39 => 6,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_setting_course' %}
{% set script_controller = 'setting/course' %}

{% block main %}


{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <legend>{{ 'admin.setting_course.course_rule'|trans }}</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >
          {{ 'admin.setting_course.send_welcome_messages'|trans }}
        </label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('welcome_message_enabled', {1:'admin.setting_course.open'|trans, 0:'admin.setting_course.closed'|trans}, courseSetting.welcome_message_enabled) }}
      <p class=\"help-block\">
        {{ 'admin.setting_course.course_rule.help_block'|trans }}
      </p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">{{'admin.setting_course.welcome_messages_content'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">{{ courseSetting.welcome_message_body }}</textarea>
        <div class=\"help-block\">

          <div>{{'admin.setting_course.welcome_messages_content.Variables'|trans}}</div>
          <ul>
            <li>{% verbatim %}{{nickname}}{% endverbatim %} {{'admin.setting_course.welcome_messages_content.as_recipient_user_name'|trans}}</li>
            <li>{% verbatim %}{{course}}{% endverbatim %} {{'admin.setting_course.welcome_messages_content.as_course_name'|trans}}</li>
          </ul>

        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{'admin.setting_course.course_detail_show_relevant_course'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('relatedCourses', {1:'admin.setting_course.open'|trans, 0:'admin.setting_course.closed'|trans}, courseSetting.relatedCourses) }}
        <div class=\"help-block\">{{'admin.setting_course.course_detail_show_relevant_course.help_block'|trans}}</div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>{{ 'admin.setting_course.authority_and_copyright'|trans }}</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'admin.setting_course.allow_teacher_manage_course_marketing'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('teacher_manage_marketing', {1:'admin.setting_course.yes'|trans, 0:'admin.setting_course.no'|trans}, courseSetting.teacher_manage_marketing) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'admin.setting_course.allow_teacher_search_course_order'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('teacher_search_order', {1:'admin.setting_course.yes'|trans, 0:'admin.setting_course.no'|trans}, courseSetting.teacher_search_order) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'admin.setting_course.allow_teacher_add_or_remove'|trans}}{{'site.default.student'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('teacher_manage_student', {1:'admin.setting_course.yes'|trans, 0:'admin.setting_course.no'|trans}, courseSetting.teacher_manage_student) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{ 'admin.setting_course.allow_teacher_export_material'|trans }}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('teacher_export_student', {1:'admin.setting_course.yes'|trans, 0:'admin.setting_course.no'|trans}, courseSetting.teacher_export_student) }}
      </div>
    </div>
    {% set smsSetting = setting('cloud_sms') %}
    {% if smsSetting.sms_enabled|default(0) and (smsSetting.sms_normal_lesson_publish|default('off') == 'on' or smsSetting.sms_live_lesson_publish|default('off') == 'on')%}
    {% endif %}
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'admin.setting_course.course_list_page_seq'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('explore_default_orderBy', {latest:'site.datagrid.filter.latest'|trans, hotSeq:'site.datagrid.filter.hotest'|trans,recommendedSeq:'site.datagrid.filter.recommended'|trans}, courseSetting.explore_default_orderBy) }}
        <p class=\"help-block\"><a target=\"_blank\" href=\"{{ path('course_set_explore') }}\">{{ 'admin.setting_course.course_list_page.help_block'|trans }}</a>{{ 'admin.setting_course.course_list_page_seq.help_block'|trans }}</p>
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{'admin.setting_course.Prevent_copying_rich_text_doc'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('copy_enabled', {1:'admin.setting_course.open'|trans, 0:'admin.setting_course.closed'|trans}, courseSetting.copy_enabled) }}
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{'admin.setting_course.Prevent_copying_test_paper'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('testpaperCopy_enabled', {1:'admin.setting_course.open'|trans, 0:'admin.setting_course.closed'|trans}, courseSetting.testpaperCopy_enabled) }}
        <div class=\"help-block\"></div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>{{ 'admin.setting_course.course_operation_mode'|trans }}</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{ 'admin.setting_course.course_operation_mode.free_try_view'|trans }}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('allowAnonymousPreview', {1:'admin.setting_course.allow'|trans, 0:'admin.setting_course.not_allow'|trans}, courseSetting.allowAnonymousPreview) }}
        <div class=\"help-block\">{{ 'admin.setting_course.course_operation_mode.free_try_view.help_block'|trans }}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">{{ 'admin.setting_course.course_operation_mode.allow_show_user_count'|trans }}</label>
      <div class=\"col-md-8 controls radios\">
        {{ radios('show_student_num_enabled', {'1':'admin.setting_course.open'|trans, '0':'admin.setting_course.closed'|trans}, courseSetting.show_student_num_enabled|default('1') ) }}
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>{{ 'admin.setting_course.customer_chapter_section_name'|trans }}</legend>
    {# 默认章节为自定义 #}
    <input type=\"hidden\" name=\"custom_chapter_enabled\" value=\"1\">
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
          <label for=\"chapter_name\">{{'admin.setting_course.task_chapter_name'|trans}}</label>
      </div>
      <div class=\"controls col-md-4\">
        <input  type=\"text\" id=\"chapter_name\" name=\"chapter_name\" class=\"form-control\" data-before-value=\"{{ defaultSetting.chapter_name|default('admin.setting_course.chapter'|trans) }}\" value=\"{{ defaultSetting.chapter_name|default('admin.setting_course.chapter'|trans) }}\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
          <label for=\"part_name\">{{'admin.setting_course.task_section_name'|trans}}</label>
      </div>
      <div class=\"controls col-md-4\">
        <input  type=\"text\" id=\"part_name\" name=\"part_name\" class=\"form-control\" data-before-value=\"{{ defaultSetting.part_name|default('admin.setting_course.section'|trans) }}\" value=\"{{ defaultSetting.part_name|default('admin.setting_course.section'|trans) }}\">
      </div>
    </div>
    <div class=\"alert alert-info deduction text-center\">
    <p><strong>
    {{'admin.setting_course.customer_chapter_section_name.tips'|trans}}
    </strong></p>
    </div>

  </fieldset>

  {#<fieldset>#}
    {#<legend>{{ 'admin.setting_course.customer_task_name'|trans }}</legend>#}
    {#<div class=\"row form-group\">#}
      {#<div class=\"col-md-3 control-label\">#}
        {#<label for=\"part_name\">{{'admin.setting_course.task_name'|trans}}</label>#}
      {#</div>#}
      {#<div class=\"controls col-md-4\">#}
        {#<input type=\"text\" id=\"task_name\" name=\"task_name\" class=\"form-control\" data-before-value=\"{{ defaultSetting.task_name|default('admin.setting_course.task'|trans) }}\" value=\"{{ defaultSetting.task_name|default('admin.setting_course.task'|trans) }}\">#}
      {#</div>#}
    {#</div>#}
    {#<div class=\"alert alert-info deduction text-center\">#}
      {#<p><strong>#}
          {#{{'admin.setting_course.customer_task_name.tips'|trans}}#}
        {#</strong></p>#}
    {#</div>#}
  {#</fieldset>#}

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
</form>

{% endblock %}
", "admin/system/course-setting.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\course-setting.html.twig");
    }
}
