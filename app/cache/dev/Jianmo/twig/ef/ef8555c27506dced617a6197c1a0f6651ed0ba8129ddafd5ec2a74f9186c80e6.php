<?php

/* admin/system/default-share-content.html.twig */
class __TwigTemplate_7197ffba2c59908e121a69390800ce0a36aaf67350b50da6eed13225fc7508ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17658402e05bba1da56ec4018d18d30767edc11f2e080259bc94ae13f1edc237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17658402e05bba1da56ec4018d18d30767edc11f2e080259bc94ae13f1edc237->enter($__internal_17658402e05bba1da56ec4018d18d30767edc11f2e080259bc94ae13f1edc237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/default-share-content.html.twig"));

        // line 1
        echo "<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
  <div >
    <fieldset>
";
        // line 20
        echo "      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"article_share_content\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.article_share_content"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"articleShareContent\" class=\"form-control\" rows=\"5\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "articleShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.Variables.tips"), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 29
        echo "{{articletitle}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.as_article_title.tips"), "html", null, true);
        echo "</li>
              <li>";
        // line 30
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.as_online_school_name.tips"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.course_share_content"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"courseShareContent\" class=\"form-control\" rows=\"5\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "courseShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.Variables.tips"), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 45
        echo "{{course}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.as_course_name"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.group_share_content"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"groupShareContent\" name=\"groupShareContent\" class=\"form-control\" rows=\"5\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "groupShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.Variables.tips"), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 60
        echo "{{groupname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.as_group_name"), "html", null, true);
        echo "</li>
              <li>";
        // line 61
        echo "{{threadname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.as_thread_name"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.classroom_share_content"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"classroomShareContent\" name=\"classroomShareContent\" class=\"form-control\" rows=\"5\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "classroomShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.Variables.tips"), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 76
        echo "{{classroom}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.share.as_classroom_name"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>

    </fieldset>
  </div>
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
        
        $__internal_17658402e05bba1da56ec4018d18d30767edc11f2e080259bc94ae13f1edc237->leave($__internal_17658402e05bba1da56ec4018d18d30767edc11f2e080259bc94ae13f1edc237_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/default-share-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 89,  161 => 86,  146 => 76,  141 => 74,  136 => 72,  130 => 69,  117 => 61,  111 => 60,  106 => 58,  101 => 56,  95 => 53,  82 => 45,  77 => 43,  72 => 41,  66 => 38,  53 => 30,  47 => 29,  42 => 27,  37 => 25,  31 => 22,  27 => 20,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
  <div >
    <fieldset>
{#
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"article_share_content\">{{'邀请分享内容'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"inviteShareContent\" name=\"inviteShareContent\" class=\"form-control\" rows=\"5\">{{ defaultSetting.inviteShareContent }}</textarea>
          <div class=\"help-block\">
            <div>{{'变量说明：'|trans}}</div>
            <ul>
              <li>{% verbatim %}{{sitename}}{% endverbatim %} {{'为网校名称'|trans}}</li>
            </ul>
          </div>
        </div>
      </div>
#}
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"article_share_content\">{{'admin.setting.share.article_share_content'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"articleShareContent\" class=\"form-control\" rows=\"5\">{{ defaultSetting.articleShareContent }}</textarea>
          <div class=\"help-block\">
            <div>{{'admin.setting.share.Variables.tips'|trans}}</div>
            <ul>
              <li>{% verbatim %}{{articletitle}}{% endverbatim %} {{'admin.setting.share.as_article_title.tips'|trans}}</li>
              <li>{% verbatim %}{{sitename}}{% endverbatim %} {{'admin.setting.share.as_online_school_name.tips'|trans}}</li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">{{'admin.setting.share.course_share_content'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"courseShareContent\" class=\"form-control\" rows=\"5\">{{ defaultSetting.courseShareContent }}</textarea>
          <div class=\"help-block\">
            <div>{{'admin.setting.share.Variables.tips'|trans}}</div>
            <ul>
              <li>{% verbatim %}{{course}}{% endverbatim %} {{'admin.setting.share.as_course_name'|trans}}</li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">{{'admin.setting.share.group_share_content'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"groupShareContent\" name=\"groupShareContent\" class=\"form-control\" rows=\"5\">{{ defaultSetting.groupShareContent }}</textarea>
          <div class=\"help-block\">
            <div>{{'admin.setting.share.Variables.tips'|trans}}</div>
            <ul>
              <li>{% verbatim %}{{groupname}}{% endverbatim %} {{'admin.setting.share.as_group_name'|trans}}</li>
              <li>{% verbatim %}{{threadname}}{% endverbatim %} {{'admin.setting.share.as_thread_name'|trans}}</li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">{{'admin.setting.share.classroom_share_content'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"classroomShareContent\" name=\"classroomShareContent\" class=\"form-control\" rows=\"5\">{{ defaultSetting.classroomShareContent }}</textarea>
          <div class=\"help-block\">
            <div>{{'admin.setting.share.Variables.tips'|trans}}</div>
            <ul>
              <li>{% verbatim %}{{classroom}}{% endverbatim %} {{'admin.setting.share.as_classroom_name'|trans}}</li>
            </ul>
          </div>
        </div>
      </div>

    </fieldset>
  </div>
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'form.btn.submit'|trans}}</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
</form>", "admin/system/default-share-content.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\default-share-content.html.twig");
    }
}
