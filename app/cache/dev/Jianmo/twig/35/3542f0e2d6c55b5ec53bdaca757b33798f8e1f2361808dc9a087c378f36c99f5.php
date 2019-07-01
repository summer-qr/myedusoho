<?php

/* admin/system/consult-setting.html.twig */
class __TwigTemplate_8d9c6ddd0ae7f7228d79ce8b63b5a38cf00d7419f9966c01a29730fc1023c05a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/consult-setting.html.twig", 1);
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
        $__internal_6b15a879998642aa944017deac8b34fc1534239d77356cd47b2ee010d26d8e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b15a879998642aa944017deac8b34fc1534239d77356cd47b2ee010d26d8e2e->enter($__internal_6b15a879998642aa944017deac8b34fc1534239d77356cd47b2ee010d26d8e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/consult-setting.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_consult_setting";
        // line 5
        $context["script_controller"] = "setting/consult-setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b15a879998642aa944017deac8b34fc1534239d77356cd47b2ee010d26d8e2e->leave($__internal_6b15a879998642aa944017deac8b34fc1534239d77356cd47b2ee010d26d8e2e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_ed1a2b5e54c71b5ceb4647a7aed7e069c73aa87a9fa85894dd52d8ba4cc7e63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1a2b5e54c71b5ceb4647a7aed7e069c73aa87a9fa85894dd52d8ba4cc7e63a->enter($__internal_ed1a2b5e54c71b5ceb4647a7aed7e069c73aa87a9fa85894dd52d8ba4cc7e63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" method=\"post\" id=\"consult-setting-form\" novalidate>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.customer_service_function"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status.open"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.navigation.status.closed")), $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "enabled", array()));
        echo "
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.floating_bar"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 25
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("color", array("default" => "<span class=\"btn btn-lg\" style=\"background:#37b97d\"></span>", "warning" => "<span class=\"btn btn-lg\" style=\"background:#e67e22\"></span>", "danger" => "<span class=\"btn btn-lg\" style=\"background:#e74c3c\"></span>"), $this->getAttribute(        // line 29
(isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color", array()));
        echo "
      </div>
    </div>
    <div data-role=\"template\" style=\"display:none\">
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                  title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
        echo "\">×
          </button>
          </input>
        </div>
      </div>
    </div>

    <div data-role=\"phone-template\" style=\"display:none\">
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
          <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\"
                  title=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
        echo "\">×
          </button>
          </input>
        </div>
      </div>
    </div>

    <div data-role=\"qqGroupTemplate\" style=\"display:none\">
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                  title=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
        echo "\">×
          </button>
          </input>
        </div>
      </div>
    </div>

    <fieldset>
      <legend>QQ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.customer_service_settings"), "html", null, true);
        echo "
        <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-property-tips\"
              data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
        <div id=\"qq-property-tips-html\" style=\"display:none;\">
          <div style=\"width:250px;\">
            <span style=\"color:blue;\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.get_online_service_link.tips"), "html", null, true);
        echo "</span><br>
            ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.customer_service_settings.tips", array("%http%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getScheme", array(), "method")));
        echo "
            <br>
          </div>
        </div>
      </legend>
      <div id=\"consult-qq\">
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            // line 97
            echo "          <div class=\"row form-group has-feedback\">
            <div class=\"controls col-md-2 col-md-offset-2\">
              <input type=\"text\" name=\"qq[";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_customer_service_name.placeholer"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-2\">
              <input type=\"text\" name=\"qq[";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_number.placeholer"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-4\">
              <input type=\"text\" name=\"qq[";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), "")) : ("")), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.enter_link_addr.placeholer"), "html", null, true);
            echo "\">
              ";
            // line 109
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 110
                echo "                <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                        title=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
                echo "\">×
                </button>
              ";
            }
            // line 114
            echo "            </div>
          </div>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "      </div>
      <div class=\"row form-group\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <span class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-qq'
                data-length='";
        // line 121
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.add_btn"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </fieldset>


    <fieldset>
      <legend>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_group_setting"), "html", null, true);
        echo "
        <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-group-property-tips\"
              data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
        <div id=\"qq-group-property-tips-html\" style=\"display:none;\">
          <div style=\"width:250px;\">
            <span style=\"color:blue;\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.get_online_service_link.tips"), "html", null, true);
        echo "</span><br>
            ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_group_setting.tips");
        echo "
          </div>
        </div>
      </legend>
      <div id=\"consult-qqgroup\">
        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            // line 140
            echo "          <div class=\"row form-group has-feedback\">
            <div class=\"controls col-md-2 col-md-offset-2\">
              <input type=\"text\" name=\"qqgroup[";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_group_name.placeholer"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-2\">
              <input type=\"text\" name=\"qqgroup[";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\"
                     value=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.QQ_group_number.placeholer"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-4\">
              <input type=\"text\" name=\"qqgroup[";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\"
                     value=\"";
            // line 151
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.code_join_to_QQ_group.placeholer"), "html", null, true);
            echo "\">
              ";
            // line 152
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 153
                echo "                <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                        title=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
                echo "\">×
                </button>
              ";
            }
            // line 157
            echo "            </div>
          </div>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "      </div>
      <div class=\"row form-group\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <span class=\"btn-link\" data-parentId='consult-qqgroup'
                data-length='";
        // line 164
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.add_btn"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.phone_setting"), "html", null, true);
        echo "</legend>
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"worktime\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.work_time"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"worktime\" name=\"worktime\" class=\"form-control\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "worktime", array()), "html", null, true);
        echo "\">
        </div>
      </div>


      <div id=\"consult-phone\">
        ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 183
            echo "          <div class=\"row form-group has-feedback\">
            <div class=\"controls col-md-4 col-md-offset-2\">
              <input type=\"text\" name=\"phone[";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.Contact"), "html", null, true);
            echo "\">
            </div>
            <div class=\"controls col-md-4\">
              <input type=\"text\" name=\"phone[";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.phone"), "html", null, true);
            echo "\">
              ";
            // line 191
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 192
                echo "                <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\"
                        title=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
                echo "\">×
                </button>
              ";
            }
            // line 196
            echo "            </div>
          </div>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "      </div>
      <div class=\"row form-group\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <span class=\"btn-link\" data-role=\"phone-item-add\" data-parentId='consult-phone'
                data-length='";
        // line 203
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.add_btn"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.other_setting"), "html", null, true);
        echo "</legend>
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label>";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.WeChat_QR_code"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <div id=\"consult-container\">";
        // line 215
        if ($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array())), "html", null, true);
            echo "\">";
        }
        // line 216
        echo "          </div>
          <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" id=\"consult-upload\"
             data-upload-token=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" type=\"button\"
             data-goto-url=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_consult_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
        echo "</a>
          <button class=\"btn btn-default btn-sm\" id=\"consult-webchat-del\" type=\"button\"
                  data-url=\"";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_consult_webchat_delete");
        echo "\"
                  ";
        // line 222
        if ( !$this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.delete_btn"), "html", null, true);
        echo "</button>
          <p class=\"help-block\">";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.other_setting.help_block"), "html", null, true);
        echo "</p>
          <input type=\"hidden\" name=\"webchatURI\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array()), "html", null, true);
        echo "\">
        </div>
      </div>


      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"email\">";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.consult.work_email"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array()), "html", null, true);
        echo "\">
        </div>
      </div>
    </fieldset>

    ";
        // line 240
        echo "    ";
        // line 241
        echo "    ";
        // line 242
        echo "    ";
        // line 243
        echo "    ";
        // line 244
        echo "    ";
        // line 245
        echo "    ";
        // line 246
        echo "    ";
        // line 247
        echo "    ";
        // line 248
        echo "    ";
        // line 249
        echo "    ";
        // line 250
        echo "    ";
        // line 251
        echo "
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
        
        $__internal_ed1a2b5e54c71b5ceb4647a7aed7e069c73aa87a9fa85894dd52d8ba4cc7e63a->leave($__internal_ed1a2b5e54c71b5ceb4647a7aed7e069c73aa87a9fa85894dd52d8ba4cc7e63a_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/consult-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 259,  593 => 255,  587 => 251,  585 => 250,  583 => 249,  581 => 248,  579 => 247,  577 => 246,  575 => 245,  573 => 244,  571 => 243,  569 => 242,  567 => 241,  565 => 240,  557 => 234,  551 => 231,  541 => 224,  537 => 223,  529 => 222,  525 => 221,  518 => 219,  514 => 218,  510 => 216,  504 => 215,  498 => 212,  492 => 209,  481 => 203,  475 => 199,  459 => 196,  453 => 193,  450 => 192,  448 => 191,  444 => 190,  438 => 189,  432 => 186,  426 => 185,  422 => 183,  405 => 182,  396 => 176,  390 => 173,  384 => 170,  373 => 164,  367 => 160,  351 => 157,  345 => 154,  342 => 153,  340 => 152,  334 => 151,  330 => 150,  322 => 147,  318 => 146,  312 => 143,  306 => 142,  302 => 140,  285 => 139,  277 => 134,  273 => 133,  265 => 128,  253 => 121,  247 => 117,  231 => 114,  225 => 111,  222 => 110,  220 => 109,  216 => 108,  210 => 107,  204 => 104,  198 => 103,  192 => 100,  186 => 99,  182 => 97,  165 => 96,  156 => 90,  152 => 89,  144 => 84,  133 => 76,  112 => 58,  94 => 43,  77 => 29,  76 => 25,  70 => 22,  62 => 17,  56 => 14,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_setting_consult_setting' %}

{% set script_controller = 'setting/consult-setting' %}

{% block main %}

  {{ web_macro.flash_messages() }}

  <form class=\"form-horizontal\" method=\"post\" id=\"consult-setting-form\" novalidate>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{ 'admin.setting.consult.customer_service_function'|trans }}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('enabled', {1:'admin.setting.navigation.status.open'|trans, 0:'admin.setting.navigation.status.closed'|trans}, consult.enabled) }}
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{ 'admin.setting.consult.floating_bar'|trans }}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('color',
        {'default':'<span class=\"btn btn-lg\" style=\"background:#37b97d\"></span>',
          'warning':'<span class=\"btn btn-lg\" style=\"background:#e67e22\"></span>',
          'danger':'<span class=\"btn btn-lg\" style=\"background:#e74c3c\"></span>'},
        consult.color) }}
      </div>
    </div>
    <div data-role=\"template\" style=\"display:none\">
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                  title=\"{{ 'admin.setting.consult.delete_btn'|trans }}\">×
          </button>
          </input>
        </div>
      </div>
    </div>

    <div data-role=\"phone-template\" style=\"display:none\">
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
          <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\"
                  title=\"{{ 'admin.setting.consult.delete_btn'|trans }}\">×
          </button>
          </input>
        </div>
      </div>
    </div>

    <div data-role=\"qqGroupTemplate\" style=\"display:none\">
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                  title=\"{{ 'admin.setting.consult.delete_btn'|trans }}\">×
          </button>
          </input>
        </div>
      </div>
    </div>

    <fieldset>
      <legend>QQ{{ 'admin.setting.consult.customer_service_settings'|trans }}
        <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-property-tips\"
              data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
        <div id=\"qq-property-tips-html\" style=\"display:none;\">
          <div style=\"width:250px;\">
            <span style=\"color:blue;\">{{ 'admin.setting.consult.get_online_service_link.tips'|trans }}</span><br>
            {{ 'admin.setting.consult.customer_service_settings.tips'|trans({'%http%':app.request.getScheme() })|raw }}
            <br>
          </div>
        </div>
      </legend>
      <div id=\"consult-qq\">
        {% for qq in consult.qq %}
          <div class=\"row form-group has-feedback\">
            <div class=\"controls col-md-2 col-md-offset-2\">
              <input type=\"text\" name=\"qq[{{ loop.index0 }}][name]\" class=\"form-control\" value=\"{{ qq.name }}\"
                     placeholder=\"{{ 'admin.setting.consult.QQ_customer_service_name.placeholer'|trans }}\">
            </div>
            <div class=\"controls col-md-2\">
              <input type=\"text\" name=\"qq[{{ loop.index0 }}][number]\" class=\"form-control\" value=\"{{ qq.number }}\"
                     placeholder=\"{{ 'admin.setting.consult.QQ_number.placeholer'|trans }}\">
            </div>
            <div class=\"controls col-md-4\">
              <input type=\"text\" name=\"qq[{{ loop.index0 }}][url]\" class=\"form-control\" value=\"{{ qq.url|default('') }}\"
                     placeholder=\"{{ 'admin.setting.consult.enter_link_addr.placeholer'|trans }}\">
              {% if loop.index0 > 0 %}
                <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                        title=\"{{ 'admin.setting.consult.delete_btn'|trans }}\">×
                </button>
              {% endif %}
            </div>
          </div>
        {% endfor %}
      </div>
      <div class=\"row form-group\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <span class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-qq'
                data-length='{{ consult.qq | length }}'>{{ 'admin.setting.consult.add_btn'|trans }}</span>
        </div>
      </div>
    </fieldset>


    <fieldset>
      <legend>{{ 'admin.setting.consult.QQ_group_setting'|trans }}
        <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-group-property-tips\"
              data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
        <div id=\"qq-group-property-tips-html\" style=\"display:none;\">
          <div style=\"width:250px;\">
            <span style=\"color:blue;\">{{ 'admin.setting.consult.get_online_service_link.tips'|trans }}</span><br>
            {{ 'admin.setting.consult.QQ_group_setting.tips'|trans|raw }}
          </div>
        </div>
      </legend>
      <div id=\"consult-qqgroup\">
        {% for qqgroup in consult.qqgroup %}
          <div class=\"row form-group has-feedback\">
            <div class=\"controls col-md-2 col-md-offset-2\">
              <input type=\"text\" name=\"qqgroup[{{ loop.index0 }}][name]\" class=\"form-control\" value=\"{{ qqgroup.name }}\"
                     placeholder=\"{{ 'admin.setting.consult.QQ_group_name.placeholer'|trans }}\">
            </div>
            <div class=\"controls col-md-2\">
              <input type=\"text\" name=\"qqgroup[{{ loop.index0 }}][number]\" class=\"form-control\"
                     value=\"{{ qqgroup.number }}\" placeholder=\"{{ 'admin.setting.consult.QQ_group_number.placeholer'|trans }}\">
            </div>
            <div class=\"controls col-md-4\">
              <input type=\"text\" name=\"qqgroup[{{ loop.index0 }}][url]\" class=\"form-control\"
                     value=\"{{ qqgroup.url|default('') }}\" placeholder=\"{{ 'admin.setting.consult.code_join_to_QQ_group.placeholer'|trans }}\">
              {% if loop.index0 > 0 %}
                <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\"
                        title=\"{{ 'admin.setting.consult.delete_btn'|trans }}\">×
                </button>
              {% endif %}
            </div>
          </div>
        {% endfor %}
      </div>
      <div class=\"row form-group\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <span class=\"btn-link\" data-parentId='consult-qqgroup'
                data-length='{{ consult.qqgroup | length }}'>{{ 'admin.setting.consult.add_btn'|trans }}</span>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>{{ 'admin.setting.consult.phone_setting'|trans }}</legend>
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"worktime\">{{ 'admin.setting.consult.work_time'|trans }}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"worktime\" name=\"worktime\" class=\"form-control\" value=\"{{ consult.worktime }}\">
        </div>
      </div>


      <div id=\"consult-phone\">
        {% for phone in consult.phone %}
          <div class=\"row form-group has-feedback\">
            <div class=\"controls col-md-4 col-md-offset-2\">
              <input type=\"text\" name=\"phone[{{ loop.index0 }}][name]\" class=\"form-control\" value=\"{{ phone.name }}\"
                     placeholder=\"{{ 'admin.setting.consult.Contact'|trans }}\">
            </div>
            <div class=\"controls col-md-4\">
              <input type=\"text\" name=\"phone[{{ loop.index0 }}][number]\" class=\"form-control\" value=\"{{ phone.number }}\"
                     placeholder=\"{{ 'admin.setting.consult.phone'|trans }}\">
              {% if loop.index0 > 0 %}
                <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\"
                        title=\"{{ 'admin.setting.consult.delete_btn'|trans }}\">×
                </button>
              {% endif %}
            </div>
          </div>
        {% endfor %}
      </div>
      <div class=\"row form-group\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <span class=\"btn-link\" data-role=\"phone-item-add\" data-parentId='consult-phone'
                data-length='{{ consult.phone | length }}'>{{ 'admin.setting.consult.add_btn'|trans }}</span>
        </div>
      </div>
    </fieldset>

    <fieldset>
      <legend>{{ 'admin.setting.consult.other_setting'|trans }}</legend>
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label>{{ 'admin.setting.consult.WeChat_QR_code'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          <div id=\"consult-container\">{% if consult.webchatURI %}<img src=\"{{ asset(consult.webchatURI) }}\">{% endif %}
          </div>
          <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" id=\"consult-upload\"
             data-upload-token=\"{{ upload_token('system', 'image') }}\" type=\"button\"
             data-goto-url=\"{{ path('admin_setting_consult_upload') }}\">{{ 'form.btn.upload'|trans }}</a>
          <button class=\"btn btn-default btn-sm\" id=\"consult-webchat-del\" type=\"button\"
                  data-url=\"{{ path('admin_setting_consult_webchat_delete') }}\"
                  {% if not consult.webchatURI %}style=\"display:none;\"{% endif %}>{{ 'admin.setting.consult.delete_btn'|trans }}</button>
          <p class=\"help-block\">{{ 'admin.setting.consult.other_setting.help_block'|trans }}</p>
          <input type=\"hidden\" name=\"webchatURI\" value=\"{{ consult.webchatURI }}\">
        </div>
      </div>


      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"email\">{{ 'admin.setting.consult.work_email'|trans }}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"{{ consult.email }}\">
        </div>
      </div>
    </fieldset>

    {#<fieldset>#}
    {#<legend>{{'第三方客服设置'|trans}}</legend>#}
    {#<div class=\"form-group\">#}
    {#<div class=\"col-md-2 control-label\">#}
    {#<label>{{'客服系统代码'|trans}}</label>#}
    {#</div>#}
    {#<div class=\"controls col-md-8\">#}
    {#<textarea name=\"supplier\" rows=\"8\" class=\"form-control\">{{consult.supplier}}</textarea>#}
    {#<div class=\"help-block\">{{'客服系统代码由第三方客服系统提供, 支持乐语、百度商桥、53客服等客服系统,客服会出现在首页、班级详情、会员展示、课程详情页面。'|trans}}</div>#}
    {#</div>#}
    {#</div>#}
    {#</fieldset>#}

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">{{ 'form.btn.submit'|trans }}</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
  </form>

{% endblock %}", "admin/system/consult-setting.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\consult-setting.html.twig");
    }
}
