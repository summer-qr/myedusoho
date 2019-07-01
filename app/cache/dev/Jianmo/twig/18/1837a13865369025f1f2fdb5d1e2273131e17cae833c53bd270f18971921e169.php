<?php

/* admin/system/report/status.html.twig */
class __TwigTemplate_adc0e7719ca3bfd607dfd889a968457ee343d4516f14613efea188d4855892b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/system/report/status.html.twig", 1);
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
        $__internal_248109e024c5c374585fba70837b8f1fc9f762d26386e8b4bb46809673a5410d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248109e024c5c374585fba70837b8f1fc9f762d26386e8b4bb46809673a5410d->enter($__internal_248109e024c5c374585fba70837b8f1fc9f762d26386e8b4bb46809673a5410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/system/report/status.html.twig"));

        // line 3
        $context["menu"] = "admin_report_status_list";
        // line 4
        $context["script_controller"] = "system/report-status";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248109e024c5c374585fba70837b8f1fc9f762d26386e8b4bb46809673a5410d->leave($__internal_248109e024c5c374585fba70837b8f1fc9f762d26386e8b4bb46809673a5410d_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_8b8f8d3598b81bbc4c4196051817698099f2ed5a8a62aab75392a015cfdb6b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8f8d3598b81bbc4c4196051817698099f2ed5a8a62aab75392a015cfdb6b9c->enter($__internal_8b8f8d3598b81bbc4c4196051817698099f2ed5a8a62aab75392a015cfdb6b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "  <table class=\"table table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"40%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.environmental_detection"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.recommend_config"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.current_status"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.min_require"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>

    <tr>
      <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.operate_system"), "html", null, true);
        echo "</td>
      <td>Linux</td>
      <td>
        <span class=\"text-success\">√ ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "os", array()), "html", null, true);
        echo "</span>
      </td>
      <td>--</td>
    </tr>

    <tr>
      <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php_version"), "html", null, true);
        echo " （<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_php");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.more_info"), "html", null, true);
        echo "</a>）</td>
      <td>5.5.x</td>
      <td>
        ";
        // line 31
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "phpVersionOk", array())) {
            // line 32
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "phpVersion", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 34
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "phpVersion", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 36
        echo "      </td>
      <td>5.3.3</td>
    </tr>

    <tr>
      <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php_run_user"), "html", null, true);
        echo "</td>
      <td>-</td>
      <td>
        <span class=\"text-success\">√ ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "user", array()), "html", null, true);
        echo "</span>
      </td>
      <td>-</td>
    </tr>

    <tr>
      <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.safe_mode"), "html", null, true);
        echo "</td>
      <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.closed"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 53
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "safemode", array()) == "Off")) {
            // line 54
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.open"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 56
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.closed"), "html", null, true);
            echo "</span>
        ";
        }
        // line 58
        echo "      </td>
      <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.closed"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>PDO_MySQL</td>
      <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.must"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 66
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "pdoMysqlOk", array())) {
            // line 67
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.alerday_install"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 69
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.no_install_mysql_pdo"), "html", null, true);
            echo "</span>
        ";
        }
        // line 71
        echo "      </td>
      <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.must"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.upload_file_size"), "html", null, true);
        echo "
        <div class=\"text-muted\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.upload_file_size_tips"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.upload_file_size_greater_than_200m"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 82
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "uploadMaxFilesizeOk", array())) {
            // line 83
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "uploadMaxFilesize", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 85
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "uploadMaxFilesize", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 87
        echo "      </td>
      <td>2M</td>
    </tr>

    <tr>
      <td>
        ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.form_data_size"), "html", null, true);
        echo "
        <div class=\"text-muted\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.form_data_size_tips"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.upload_file_size_greater_than_200m"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 98
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "postMaxsizeOk", array())) {
            // line 99
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "postMaxsize", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 101
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "postMaxsize", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 103
        echo "      </td>
      <td>8M</td>
    </tr>

    <tr>
      <td>
        ";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php_max_run_time"), "html", null, true);
        echo "
        <div class=\"text-muted\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php_max_run_time_tips"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.upload_file_size_greater_than_300m"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 114
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "maxExecutionTimeOk", array())) {
            // line 115
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php_max_execution_time", array("%maxExecutionTime%" => $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "maxExecutionTime", array()))), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 117
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php_max_execution_time", array("%maxExecutionTime%" => $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "maxExecutionTime", array()))), "html", null, true);
            echo "</span>
        ";
        }
        // line 119
        echo "      </td>
      <td>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.upload_file_execution_time_30s"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php_extend"), "html", null, true);
        echo "：mbstring
        <div class=\"text-muted\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php__mbstring_extend_tips"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.must"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 130
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "mbstringOk", array())) {
            // line 131
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.alerday_install"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 133
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.no_install"), "html", null, true);
            echo "</span>
        ";
        }
        // line 135
        echo "      </td>
      <td>";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.must"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php_extend"), "html", null, true);
        echo "：curl
        <div class=\"text-muted\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php__curl_extend_tips"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.must"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 146
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "curlOk", array())) {
            // line 147
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.alerday_install"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 149
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.no_install"), "html", null, true);
            echo "</span>
        ";
        }
        // line 151
        echo "      </td>
      <td>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.must"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php_extend"), "html", null, true);
        echo "：GD
        <div class=\"text-muted\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.php__gd_extend_tips"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.must"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 162
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "gdOk", array())) {
            // line 163
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.alerday_install"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 165
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.no_install"), "html", null, true);
            echo "</span>
        ";
        }
        // line 167
        echo "      </td>
      <td>";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.must"), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
  </table>

  <table class=\"table table-hover table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"60%\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_communication"), "html", null, true);
        echo "</th>
      <th width=\"40%\">";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_status"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_communication_with_discuz"), "html", null, true);
        echo "</td>
      <td><span class=\"text-muted js-ucenter-check\" data-url=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_ucenter");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_checking"), "html", null, true);
        echo "</span></td>
    </tr>
    ";
        // line 185
        if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_email.status"), "disable") == "disable")) {
            // line 186
            echo "      <tr>
        <td>";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_email_send"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-info-sign text-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_email_send_tips"), "html", null, true);
            echo "\"></i></td>
        <td><span class=\"text-muted js-email-send-check\" data-url=\"";
            // line 188
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_email_send");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_checking"), "html", null, true);
            echo "</span>
        </td>
      </tr>
    ";
        }
        // line 192
        echo "    </tbody>
  </table>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_directory");
        echo "\">
      <thead>
      <tr>
        <th width=\"60%\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_file_and_catalog_authority"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.current_status"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.need_status"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_scanning_file"), "html", null, true);
        echo "</td>
      </tr>
      </tbody>
    </table>
  </div>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_directory");
        echo "\">
      <thead>
      <tr>
        <th width=\"30%\">";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_space_occupancy"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_available_space"), "html", null, true);
        echo "</th>
        <th width=\"25%\">";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_total_space"), "html", null, true);
        echo "</th>
        <th width=\"25%\">";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.reports_status.system_surplus_space"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["systemDiskUsage"]) ? $context["systemDiskUsage"] : $this->getContext($context, "systemDiskUsage")));
        foreach ($context['_seq'] as $context["_key"] => $context["diskUsage"]) {
            // line 226
            echo "          <tr>
            <td>
              ";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "name", array()), "html", null, true);
            echo "
              <a class=\"glyphicon glyphicon-question-sign text-muted pull-center\" data-toggle=\"popover\"
                 data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "title", array()), "html", null, true);
            echo "\">
              </a>
            </td>
            <td> ";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "free", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "total", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "rate", array()), "html", null, true);
            echo " </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diskUsage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "      </tbody>
    </table>
  </div>


";
        
        $__internal_8b8f8d3598b81bbc4c4196051817698099f2ed5a8a62aab75392a015cfdb6b9c->leave($__internal_8b8f8d3598b81bbc4c4196051817698099f2ed5a8a62aab75392a015cfdb6b9c_prof);

    }

    public function getTemplateName()
    {
        return "admin/system/report/status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 238,  562 => 235,  558 => 234,  554 => 233,  548 => 230,  543 => 228,  539 => 226,  535 => 225,  528 => 221,  524 => 220,  520 => 219,  516 => 218,  510 => 215,  499 => 207,  491 => 202,  487 => 201,  483 => 200,  477 => 197,  470 => 192,  461 => 188,  455 => 187,  452 => 186,  450 => 185,  443 => 183,  439 => 182,  431 => 177,  427 => 176,  416 => 168,  413 => 167,  407 => 165,  401 => 163,  399 => 162,  394 => 160,  389 => 158,  385 => 157,  377 => 152,  374 => 151,  368 => 149,  362 => 147,  360 => 146,  355 => 144,  350 => 142,  346 => 141,  338 => 136,  335 => 135,  329 => 133,  323 => 131,  321 => 130,  316 => 128,  311 => 126,  307 => 125,  299 => 120,  296 => 119,  290 => 117,  284 => 115,  282 => 114,  277 => 112,  272 => 110,  268 => 109,  260 => 103,  254 => 101,  248 => 99,  246 => 98,  241 => 96,  236 => 94,  232 => 93,  224 => 87,  218 => 85,  212 => 83,  210 => 82,  205 => 80,  200 => 78,  196 => 77,  188 => 72,  185 => 71,  179 => 69,  173 => 67,  171 => 66,  166 => 64,  158 => 59,  155 => 58,  149 => 56,  143 => 54,  141 => 53,  136 => 51,  132 => 50,  123 => 44,  117 => 41,  110 => 36,  104 => 34,  98 => 32,  96 => 31,  86 => 28,  77 => 22,  71 => 19,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  45 => 7,  39 => 6,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
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

{% set menu = 'admin_report_status_list' %}
{% set script_controller = 'system/report-status' %}

{% block main %}
  <table class=\"table table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"40%\">{{ 'admin.reports_status.environmental_detection'|trans }}</th>
      <th width=\"20%\">{{ 'admin.reports_status.recommend_config'|trans }}</th>
      <th width=\"20%\">{{ 'admin.reports_status.current_status'|trans }}</th>
      <th width=\"20%\">{{ 'admin.reports_status.min_require'|trans }}</th>
    </tr>
    </thead>
    <tbody>

    <tr>
      <td>{{ 'admin.reports_status.operate_system'|trans }}</td>
      <td>Linux</td>
      <td>
        <span class=\"text-success\">√ {{ env.os }}</span>
      </td>
      <td>--</td>
    </tr>

    <tr>
      <td>{{ 'admin.reports_status.php_version'|trans }} （<a href=\"{{ path('admin_report_status_php') }}\">{{ 'admin.reports_status.more_info'|trans }}</a>）</td>
      <td>5.5.x</td>
      <td>
        {% if env.phpVersionOk %}
          <span class=\"text-success\">√ {{ env.phpVersion }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ env.phpVersion }}</span>
        {% endif %}
      </td>
      <td>5.3.3</td>
    </tr>

    <tr>
      <td>{{ 'admin.reports_status.php_run_user'|trans }}</td>
      <td>-</td>
      <td>
        <span class=\"text-success\">√ {{ env.user }}</span>
      </td>
      <td>-</td>
    </tr>

    <tr>
      <td>{{ 'admin.reports_status.safe_mode'|trans }}</td>
      <td>{{ 'admin.reports_status.closed'|trans }}</td>
      <td>
        {% if env.safemode == 'Off' %}
          <span class=\"text-danger\">X {{ 'admin.reports_status.open'|trans }}</span>
        {% else %}
          <span class=\"text-success\">√ {{ 'admin.reports_status.closed'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ 'admin.reports_status.closed'|trans }}</td>
    </tr>

    <tr>
      <td>PDO_MySQL</td>
      <td>{{ 'admin.reports_status.must'|trans }}</td>
      <td>
        {% if env.pdoMysqlOk %}
          <span class=\"text-success\">√ {{ 'admin.reports_status.alerday_install'|trans }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ 'admin.reports_status.no_install_mysql_pdo'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ 'admin.reports_status.must'|trans }}</td>
    </tr>

    <tr>
      <td>
        {{ 'admin.reports_status.upload_file_size'|trans }}
        <div class=\"text-muted\">{{ 'admin.reports_status.upload_file_size_tips'|trans }}</div>
      </td>
      <td>{{ 'admin.reports_status.upload_file_size_greater_than_200m'|trans }}</td>
      <td>
        {% if env.uploadMaxFilesizeOk %}
          <span class=\"text-success\">√ {{ env.uploadMaxFilesize }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ env.uploadMaxFilesize }}</span>
        {% endif %}
      </td>
      <td>2M</td>
    </tr>

    <tr>
      <td>
        {{ 'admin.reports_status.form_data_size'|trans }}
        <div class=\"text-muted\">{{ 'admin.reports_status.form_data_size_tips'|trans }}</div>
      </td>
      <td>{{ 'admin.reports_status.upload_file_size_greater_than_200m'|trans }}</td>
      <td>
        {% if env.postMaxsizeOk %}
          <span class=\"text-success\">√ {{ env.postMaxsize }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ env.postMaxsize }}</span>
        {% endif %}
      </td>
      <td>8M</td>
    </tr>

    <tr>
      <td>
        {{ 'admin.reports_status.php_max_run_time'|trans }}
        <div class=\"text-muted\">{{ 'admin.reports_status.php_max_run_time_tips'|trans }}</div>
      </td>
      <td>{{ 'admin.reports_status.upload_file_size_greater_than_300m'|trans }}</td>
      <td>
        {% if env.maxExecutionTimeOk %}
          <span class=\"text-success\">√ {{'admin.reports_status.php_max_execution_time'|trans({'%maxExecutionTime%': env.maxExecutionTime})}}</span>
        {% else %}
          <span class=\"text-danger\">X {{'admin.reports_status.php_max_execution_time'|trans({'%maxExecutionTime%': env.maxExecutionTime})}}</span>
        {% endif %}
      </td>
      <td>{{ 'admin.reports_status.upload_file_execution_time_30s'|trans }}</td>
    </tr>

    <tr>
      <td>
        {{ 'admin.reports_status.php_extend'|trans }}：mbstring
        <div class=\"text-muted\">{{ 'admin.reports_status.php__mbstring_extend_tips'|trans }}</div>
      </td>
      <td>{{ 'admin.reports_status.must'|trans }}</td>
      <td>
        {% if env.mbstringOk %}
          <span class=\"text-success\">√ {{ 'admin.reports_status.alerday_install'|trans }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ 'admin.reports_status.no_install'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ 'admin.reports_status.must'|trans }}</td>
    </tr>

    <tr>
      <td>
        {{ 'admin.reports_status.php_extend'|trans }}：curl
        <div class=\"text-muted\">{{ 'admin.reports_status.php__curl_extend_tips'|trans }}</div>
      </td>
      <td>{{ 'site.default.must'|trans }}</td>
      <td>
        {% if env.curlOk %}
          <span class=\"text-success\">√ {{ 'admin.reports_status.alerday_install'|trans }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ 'admin.reports_status.no_install'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ 'admin.reports_status.must'|trans }}</td>
    </tr>

    <tr>
      <td>
        {{ 'admin.reports_status.php_extend'|trans }}：GD
        <div class=\"text-muted\">{{ 'admin.reports_status.php__gd_extend_tips'|trans }}</div>
      </td>
      <td>{{ 'site.default.must'|trans }}</td>
      <td>
        {% if env.gdOk %}
          <span class=\"text-success\">√ {{ 'admin.reports_status.alerday_install'|trans }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ 'admin.reports_status.no_install'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ 'admin.reports_status.must'|trans }}</td>
    </tr>
    </tbody>
  </table>

  <table class=\"table table-hover table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"60%\">{{ 'admin.reports_status.system_communication'|trans }}</th>
      <th width=\"40%\">{{ 'admin.reports_status.system_status'|trans }}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>{{ 'admin.reports_status.system_communication_with_discuz'|trans }}</td>
      <td><span class=\"text-muted js-ucenter-check\" data-url=\"{{ path('admin_report_status_ucenter') }}\">{{ 'admin.reports_status.system_checking'|trans }}</span></td>
    </tr>
    {% if setting(\"cloud_email.status\")|default(\"disable\") == \"disable\" %}
      <tr>
        <td>{{ 'admin.reports_status.system_email_send'|trans }} <i class=\"glyphicon glyphicon-info-sign text-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'admin.reports_status.system_email_send_tips'|trans }}\"></i></td>
        <td><span class=\"text-muted js-email-send-check\" data-url=\"{{ path('admin_report_status_email_send') }}\">{{ 'admin.reports_status.system_checking'|trans }}</span>
        </td>
      </tr>
    {% endif %}
    </tbody>
  </table>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"{{ path('admin_report_status_directory') }}\">
      <thead>
      <tr>
        <th width=\"60%\">{{ 'admin.reports_status.system_file_and_catalog_authority'|trans }}</th>
        <th width=\"20%\">{{ 'admin.reports_status.current_status'|trans }}</th>
        <th width=\"20%\">{{ 'admin.reports_status.need_status'|trans }}</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">{{ 'admin.reports_status.system_scanning_file'|trans }}</td>
      </tr>
      </tbody>
    </table>
  </div>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"{{ path('admin_report_status_directory') }}\">
      <thead>
      <tr>
        <th width=\"30%\">{{ 'admin.reports_status.system_space_occupancy'|trans }}</th>
        <th width=\"20%\">{{ 'admin.reports_status.system_available_space'|trans }}</th>
        <th width=\"25%\">{{ 'admin.reports_status.system_total_space'|trans }}</th>
        <th width=\"25%\">{{ 'admin.reports_status.system_surplus_space'|trans }}</th>
      </tr>
      </thead>
      <tbody>
        {% for diskUsage in systemDiskUsage %}
          <tr>
            <td>
              {{ diskUsage.name }}
              <a class=\"glyphicon glyphicon-question-sign text-muted pull-center\" data-toggle=\"popover\"
                 data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ diskUsage.title }}\">
              </a>
            </td>
            <td> {{ diskUsage.free }} </td>
            <td> {{ diskUsage.total }} </td>
            <td> {{ diskUsage.rate }} </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>


{% endblock %}
", "admin/system/report/status.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\admin\\system\\report\\status.html.twig");
    }
}
