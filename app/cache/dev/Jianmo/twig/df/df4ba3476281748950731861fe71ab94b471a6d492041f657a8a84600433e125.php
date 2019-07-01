<?php

/* common/data-dict-macro.html.twig */
class __TwigTemplate_7f3cc7a21f016f8de0a1bd6eec13107ad372ad6df55382d23401b9f963a5c544 extends Twig_Template
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
        $__internal_5ec860c8a03a95abd7219b7b8324f4412d096740dbb3c574cd52c4a2ff5227c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec860c8a03a95abd7219b7b8324f4412d096740dbb3c574cd52c4a2ff5227c6->enter($__internal_5ec860c8a03a95abd7219b7b8324f4412d096740dbb3c574cd52c4a2ff5227c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "common/data-dict-macro.html.twig"));

        // line 10
        echo "
";
        // line 24
        echo "
";
        // line 38
        echo "
";
        // line 50
        echo "
";
        // line 60
        echo "
";
        // line 70
        echo "
";
        // line 80
        echo "
";
        // line 90
        echo "
";
        
        $__internal_5ec860c8a03a95abd7219b7b8324f4412d096740dbb3c574cd52c4a2ff5227c6->leave($__internal_5ec860c8a03a95abd7219b7b8324f4412d096740dbb3c574cd52c4a2ff5227c6_prof);

    }

    // line 1
    public function getcourseStatus($__status__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e5f08b98af7e34ebf7bce46e6bba0ddda5dbc873b7bd9ff701ec3ba1844f49c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e5f08b98af7e34ebf7bce46e6bba0ddda5dbc873b7bd9ff701ec3ba1844f49c5->enter($__internal_e5f08b98af7e34ebf7bce46e6bba0ddda5dbc873b7bd9ff701ec3ba1844f49c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "courseStatus"));

            // line 2
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "draft")) {
                // line 3
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.courseStatus.draft"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 4
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "published")) {
                // line 5
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.courseStatus.published"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 6
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "closed")) {
                // line 7
                echo "        <span class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.courseStatus.closed"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_e5f08b98af7e34ebf7bce46e6bba0ddda5dbc873b7bd9ff701ec3ba1844f49c5->leave($__internal_e5f08b98af7e34ebf7bce46e6bba0ddda5dbc873b7bd9ff701ec3ba1844f49c5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function getfileType($__type__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_182d8b4e81cccf6397167267917c249e420dd516522018ca6838ca2146f0594a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_182d8b4e81cccf6397167267917c249e420dd516522018ca6838ca2146f0594a->enter($__internal_182d8b4e81cccf6397167267917c249e420dd516522018ca6838ca2146f0594a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fileType"));

            // line 12
            echo "    ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "video")) {
                // line 13
                echo "        <span class=\"glyphicon glyphicon-facetime-video color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.fileType.video"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 14
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "audio")) {
                // line 15
                echo "        <span class=\"glyphicon glyphicon-music color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.fileType.audio"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 16
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "document")) {
                // line 17
                echo "        <span class=\"glyphicon glyphicon-briefcase color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.fileType.document"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 18
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "image")) {
                // line 19
                echo "        <span class=\"glyphicon glyphicon-picture color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.fileType.image"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 20
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "other")) {
                // line 21
                echo "        <span class=\"glyphicon glyphicon-question-sign color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.fileType.other"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_182d8b4e81cccf6397167267917c249e420dd516522018ca6838ca2146f0594a->leave($__internal_182d8b4e81cccf6397167267917c249e420dd516522018ca6838ca2146f0594a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getrefundStatus($__status__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6e435f11e0f0f6da3c0036dfc5f5e412bea10f39ac7eadf300a4bc4717c124ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6e435f11e0f0f6da3c0036dfc5f5e412bea10f39ac7eadf300a4bc4717c124ab->enter($__internal_6e435f11e0f0f6da3c0036dfc5f5e412bea10f39ac7eadf300a4bc4717c124ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "refundStatus"));

            // line 26
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "created")) {
                // line 27
                echo "        <span class=\"cd-status cd-status-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.orderStatus.created"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 28
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "paid")) {
                // line 29
                echo "        <span class=\"cd-status cd-status-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.orderStatus.paid"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 30
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "refunding")) {
                // line 31
                echo "        <span class=\"cd-status cd-status-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.orderStatus.refunding"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 32
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "refunded")) {
                // line 33
                echo "        <span class=\"cd-status cd-status-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.orderStatus.refunded"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 34
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "cancelled")) {
                // line 35
                echo "        <span class=\"cd-status cd-status-disabled\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.orderStatus.cancelled"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_6e435f11e0f0f6da3c0036dfc5f5e412bea10f39ac7eadf300a4bc4717c124ab->leave($__internal_6e435f11e0f0f6da3c0036dfc5f5e412bea10f39ac7eadf300a4bc4717c124ab_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getadminRefundStatus($__status__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_67cea844fe3db3a0509a18d50ff77abe2fa5da9062fa46d926dda692dd423274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_67cea844fe3db3a0509a18d50ff77abe2fa5da9062fa46d926dda692dd423274->enter($__internal_67cea844fe3db3a0509a18d50ff77abe2fa5da9062fa46d926dda692dd423274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "adminRefundStatus"));

            // line 40
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "auditing")) {
                // line 41
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.refundStatus.created"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 42
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "refunded")) {
                // line 43
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.refundStatus.success"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 44
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "refused")) {
                // line 45
                echo "        <span class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.refundStatus.failed"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 46
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "cancel")) {
                // line 47
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.refundStatus.cancelled"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_67cea844fe3db3a0509a18d50ff77abe2fa5da9062fa46d926dda692dd423274->leave($__internal_67cea844fe3db3a0509a18d50ff77abe2fa5da9062fa46d926dda692dd423274_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getlogLevel($__level__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "level" => $__level__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0e60e35baa86ed638492bb496b5af5dd67d5a45d54305951d890e870ff348f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0e60e35baa86ed638492bb496b5af5dd67d5a45d54305951d890e870ff348f7e->enter($__internal_0e60e35baa86ed638492bb496b5af5dd67d5a45d54305951d890e870ff348f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "logLevel"));

            // line 52
            echo "    ";
            if (((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) == "info")) {
                // line 53
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.logLevel.info"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 54
(isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) == "warning")) {
                // line 55
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.logLevel.warning"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 56
(isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) == "error")) {
                // line 57
                echo "        <span class=\"color-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.logLevel.error"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_0e60e35baa86ed638492bb496b5af5dd67d5a45d54305951d890e870ff348f7e->leave($__internal_0e60e35baa86ed638492bb496b5af5dd67d5a45d54305951d890e870ff348f7e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 61
    public function getcontentStatus($__status__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d72f3b38404fc63274b5c91cade8d30d8b84657b40262296d7b18dd83233491a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d72f3b38404fc63274b5c91cade8d30d8b84657b40262296d7b18dd83233491a->enter($__internal_d72f3b38404fc63274b5c91cade8d30d8b84657b40262296d7b18dd83233491a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "contentStatus"));

            // line 62
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "published")) {
                // line 63
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.contentStatus.published"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 64
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "unpublished")) {
                // line 65
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.contentStatus.unpublished"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 66
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "trash")) {
                // line 67
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.contentStatus.trash"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_d72f3b38404fc63274b5c91cade8d30d8b84657b40262296d7b18dd83233491a->leave($__internal_d72f3b38404fc63274b5c91cade8d30d8b84657b40262296d7b18dd83233491a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getarticleStatus($__status__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_46033f9c2abaeaa7bf9df007c264ab933983cbf6fd891039dfb84a14d18cc00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_46033f9c2abaeaa7bf9df007c264ab933983cbf6fd891039dfb84a14d18cc00a->enter($__internal_46033f9c2abaeaa7bf9df007c264ab933983cbf6fd891039dfb84a14d18cc00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "articleStatus"));

            // line 72
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "published")) {
                // line 73
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.articleStatus.published"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 74
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "unpublished")) {
                // line 75
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.articleStatus.unpublished"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 76
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "trash")) {
                // line 77
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.articleStatus.trash"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_46033f9c2abaeaa7bf9df007c264ab933983cbf6fd891039dfb84a14d18cc00a->leave($__internal_46033f9c2abaeaa7bf9df007c264ab933983cbf6fd891039dfb84a14d18cc00a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getdiscountStatus($__status__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_aee6beb977a876f518df51f119fc82803c733fd0dbd103452ce434d72476105e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_aee6beb977a876f518df51f119fc82803c733fd0dbd103452ce434d72476105e->enter($__internal_aee6beb977a876f518df51f119fc82803c733fd0dbd103452ce434d72476105e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "discountStatus"));

            // line 82
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "unstart")) {
                // line 83
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.discountStatus.unstart"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 84
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "running")) {
                // line 85
                echo "        <span class=\"color-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.discountStatus.running"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 86
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "finished")) {
                // line 87
                echo "        <span class=\"color-gray\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.discountStatus.finished"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_aee6beb977a876f518df51f119fc82803c733fd0dbd103452ce434d72476105e->leave($__internal_aee6beb977a876f518df51f119fc82803c733fd0dbd103452ce434d72476105e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 91
    public function getvideo_quality($__option__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "option" => $__option__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_261da5442d9578f61d5d8e1b4acd80785d9ff2af7f0a87643d30be4cea3ca381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_261da5442d9578f61d5d8e1b4acd80785d9ff2af7f0a87643d30be4cea3ca381->enter($__internal_261da5442d9578f61d5d8e1b4acd80785d9ff2af7f0a87643d30be4cea3ca381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "video_quality"));

            // line 92
            echo "     ";
            if (((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")) == "low")) {
                // line 93
                echo "       ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.video_quality.low"), "html", null, true);
                echo " <span class=\"color-gray\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.video_quality.low.tips"), "html", null, true);
                echo ")</span>
    ";
            } elseif ((            // line 94
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")) == "normal")) {
                // line 95
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.video_quality.normal"), "html", null, true);
                echo " <span class=\"color-gray\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.video_quality.normal.tips"), "html", null, true);
                echo ")</span>
    ";
            } elseif ((            // line 96
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")) == "high")) {
                // line 97
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.video_quality.high"), "html", null, true);
                echo " <span class=\"color-gray\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.video_quality.high.tips"), "html", null, true);
                echo ")</span>
    ";
            }
            
            $__internal_261da5442d9578f61d5d8e1b4acd80785d9ff2af7f0a87643d30be4cea3ca381->leave($__internal_261da5442d9578f61d5d8e1b4acd80785d9ff2af7f0a87643d30be4cea3ca381_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "common/data-dict-macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 97,  552 => 96,  545 => 95,  543 => 94,  536 => 93,  533 => 92,  518 => 91,  496 => 87,  494 => 86,  489 => 85,  487 => 84,  482 => 83,  479 => 82,  464 => 81,  442 => 77,  440 => 76,  435 => 75,  433 => 74,  428 => 73,  425 => 72,  410 => 71,  388 => 67,  386 => 66,  381 => 65,  379 => 64,  374 => 63,  371 => 62,  356 => 61,  334 => 57,  332 => 56,  327 => 55,  325 => 54,  320 => 53,  317 => 52,  302 => 51,  280 => 47,  278 => 46,  273 => 45,  271 => 44,  266 => 43,  264 => 42,  259 => 41,  256 => 40,  241 => 39,  219 => 35,  217 => 34,  212 => 33,  210 => 32,  205 => 31,  203 => 30,  198 => 29,  196 => 28,  191 => 27,  188 => 26,  173 => 25,  151 => 21,  149 => 20,  144 => 19,  142 => 18,  137 => 17,  135 => 16,  130 => 15,  128 => 14,  123 => 13,  120 => 12,  105 => 11,  83 => 7,  81 => 6,  76 => 5,  74 => 4,  69 => 3,  66 => 2,  51 => 1,  43 => 90,  40 => 80,  37 => 70,  34 => 60,  31 => 50,  28 => 38,  25 => 24,  22 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro courseStatus(status) %}
    {% if status == 'draft' %}
        <span class=\"color-gray\">{{ 'common.courseStatus.draft'|trans }}</span>
    {% elseif  status == 'published' %}
        <span class=\"color-success\">{{ 'common.courseStatus.published'|trans }}</span>
    {% elseif status == 'closed' %}
        <span class=\"color-danger\">{{ 'common.courseStatus.closed'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro fileType(type) %}
    {% if type == 'video' %}
        <span class=\"glyphicon glyphicon-facetime-video color-success\">{{ 'common.fileType.video'|trans }}</span>
    {% elseif type == 'audio' %}
        <span class=\"glyphicon glyphicon-music color-success\">{{ 'common.fileType.audio'|trans }}</span>
    {% elseif type == 'document' %}
        <span class=\"glyphicon glyphicon-briefcase color-success\">{{ 'common.fileType.document'|trans }}</span>
    {% elseif type == 'image' %}
        <span class=\"glyphicon glyphicon-picture color-success\">{{ 'common.fileType.image'|trans }}</span>
    {% elseif type == 'other' %}
        <span class=\"glyphicon glyphicon-question-sign color-success\">{{ 'common.fileType.other'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro refundStatus(status) %}
    {% if status == 'created' %}
        <span class=\"cd-status cd-status-info\">{{ 'common.orderStatus.created'|trans }}</span>
    {% elseif status == 'paid' %}
        <span class=\"cd-status cd-status-success\">{{ 'common.orderStatus.paid'|trans }}</span>
    {% elseif status == 'refunding' %}
        <span class=\"cd-status cd-status-warning\">{{ 'common.orderStatus.refunding'|trans }}</span>
    {% elseif status == 'refunded' %}
        <span class=\"cd-status cd-status-danger\">{{ 'common.orderStatus.refunded'|trans }}</span>
    {% elseif status == 'cancelled' %}
        <span class=\"cd-status cd-status-disabled\">{{ 'common.orderStatus.cancelled'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro adminRefundStatus(status) %}
    {% if status == 'auditing' %}
        <span class=\"text-warning\">{{ 'common.refundStatus.created'|trans }}</span>
    {% elseif status == 'refunded' %}
        <span class=\"color-success\">{{ 'common.refundStatus.success'|trans }}</span>
    {% elseif status == 'refused' %}
        <span class=\"color-danger\">{{ 'common.refundStatus.failed'|trans }}</span>
    {% elseif status == 'cancel' %}
        <span class=\"color-gray\">{{ 'common.refundStatus.cancelled'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro logLevel(level) %}
    {% if level == 'info' %}
        <span class=\"color-success\">{{ 'common.logLevel.info'|trans }}</span>
    {% elseif level == 'warning' %}
        <span class=\"text-warning\">{{ 'common.logLevel.warning'|trans }}</span>
    {% elseif level == 'error' %}
        <span class=\"color-danger\">{{ 'common.logLevel.error'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro contentStatus(status) %}
    {% if status == 'published' %}
        <span class=\"color-success\">{{ 'common.contentStatus.published'|trans }}</span>
    {% elseif status == 'unpublished' %}
        <span class=\"color-gray\">{{ 'common.contentStatus.unpublished'|trans }}</span>
    {% elseif status == 'trash' %}
        <span class=\"text-warning\">{{ 'common.contentStatus.trash'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro articleStatus(status) %}
    {% if status == 'published' %}
        <span class=\"color-success\">{{ 'common.articleStatus.published'|trans }}</span>
    {% elseif status == 'unpublished' %}
        <span class=\"color-gray\">{{ 'common.articleStatus.unpublished'|trans }}</span>
    {% elseif status == 'trash' %}
        <span class=\"text-warning\">{{ 'common.articleStatus.trash'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro discountStatus(status) %}
    {% if status == 'unstart' %}
        <span class=\"color-gray\">{{ 'common.discountStatus.unstart'|trans }}</span>
    {% elseif status == 'running' %}
        <span class=\"color-success\">{{ 'common.discountStatus.running'|trans }}</span>
    {% elseif status == 'finished' %}
        <span class=\"color-gray\">{{ 'common.discountStatus.finished'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro  video_quality(option) %}
     {% if option == 'low' %}
       {{'common.video_quality.low'|trans}} <span class=\"color-gray\">({{'common.video_quality.low.tips'|trans}})</span>
    {% elseif option == 'normal' %}
      {{'common.video_quality.normal'|trans}} <span class=\"color-gray\">({{'common.video_quality.normal.tips'|trans}})</span>
    {% elseif option == 'high' %}
      {{'common.video_quality.high'|trans}} <span class=\"color-gray\">({{'common.video_quality.high.tips'|trans}})</span>
    {% endif %}
{% endmacro %}", "common/data-dict-macro.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\common\\data-dict-macro.html.twig");
    }
}
