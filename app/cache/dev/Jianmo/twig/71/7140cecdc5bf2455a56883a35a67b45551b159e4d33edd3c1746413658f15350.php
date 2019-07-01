<?php

/* course/header/nav-tab-for-guest.html.twig */
class __TwigTemplate_9bc3421098ad0df89278e156b1163ca377157876bd463b985f40d5a57af0bfb6 extends Twig_Template
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
        $__internal_b3887614af01e90f4ca3203b2881163e9332f0abc1fe52631d3bd33e01dc82db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3887614af01e90f4ca3203b2881163e9332f0abc1fe52631d3bd33e01dc82db->enter($__internal_b3887614af01e90f4ca3203b2881163e9332f0abc1fe52631d3bd33e01dc82db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/header/nav-tab-for-guest.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-tabs ";
        if ((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile"))) {
            echo " es-mobile-nav ";
        }
        echo "\" role=\"tablist\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["metas"]) ? $context["metas"] : $this->getContext($context, "metas")), "tabs", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            if ((!twig_in_filter($context["key"], array(0 => "material", 1 => "threads")) || ((array_key_exists("navMember", $context)) ? (_twig_default_filter((isset($context["navMember"]) ? $context["navMember"] : $this->getContext($context, "navMember")), null)) : (null)))) {
                // line 3
                echo "\t\t";
                if ((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile"))) {
                    // line 4
                    echo "\t\t\t";
                    if (( !((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), null)) : (null)) && ($this->getAttribute($context["loop"], "index", array()) <= 3))) {
                        // line 5
                        echo "\t\t\t\t<li role=\"presentation\" id=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\"
\t\t\t\t    class=\"";
                        // line 6
                        if ((((($this->getAttribute((isset($context["route_params"]) ? $context["route_params"] : null), "tab", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route_params"]) ? $context["route_params"] : null), "tab", array()), "")) : ("")) == $context["key"]) || (((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "")) : ("")) == $context["key"]))) {
                            echo "active";
                        }
                        echo "\">
\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                        // line 8
                        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), false)) : (false))) {
                            // line 9
                            echo "\t\t\t\t\t\t\t\thref=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "tab" => $context["key"], "previewAs" => (isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t";
                        } else {
                            // line 11
                            echo "\t\t\t\t\t\t\t\thref=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "tab" => $context["key"], "previewAs" => (isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t";
                        }
                        // line 13
                        echo "\t\t\t\t\t>
\t\t\t\t\t\t";
                        // line 14
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tab"], "name", array())), "html", null, true);
                        echo "
\t\t\t\t\t\t";
                        // line 15
                        if ((($context["key"] == "tasks") && ((array_key_exists("categoryTag", $context)) ? (_twig_default_filter((isset($context["categoryTag"]) ? $context["categoryTag"] : $this->getContext($context, "categoryTag")), null)) : (null)))) {
                            // line 16
                            echo "\t\t\t\t\t\t\t<span class=\"badge badge-primary\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["categoryTag"]) ? $context["categoryTag"] : $this->getContext($context, "categoryTag"))), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t";
                        }
                        // line 18
                        echo "\t\t\t\t\t\t";
                        if ((($this->getAttribute($context["tab"], "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "number", array()), false)) : (false))) {
                            // line 19
                            echo "\t\t\t\t\t\t\t";
                            if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), false)) : (false))) {
                                // line 20
                                echo "\t\t\t\t\t\t\t\t<small>(";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                                echo ")</small>
\t\t\t\t\t\t\t";
                            } else {
                                // line 22
                                echo "\t\t\t\t\t\t\t\t<small>(";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                                echo ")</small>
\t\t\t\t\t\t\t";
                            }
                            // line 24
                            echo "\t\t\t\t\t\t";
                        }
                        // line 25
                        echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                    } elseif (($this->getAttribute(                    // line 27
$context["loop"], "index", array()) == 1)) {
                        // line 28
                        echo "\t\t\t\t<li role=\"presentation\" id=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\"
\t\t\t\t    class=\"navs ";
                        // line 29
                        if ((((($this->getAttribute((isset($context["route_params"]) ? $context["route_params"] : null), "tab", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route_params"]) ? $context["route_params"] : null), "tab", array()), "")) : ("")) == $context["key"]) || (((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "")) : ("")) == $context["key"]))) {
                            echo "active";
                        }
                        echo "\">
\t\t\t\t\t<a
\t\t\t\t\t\t\t";
                        // line 31
                        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), false)) : (false))) {
                            // line 32
                            echo "\t\t\t\t\t\t\t\thref=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "tab" => $context["key"], "previewAs" => (isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t";
                        } else {
                            // line 34
                            echo "\t\t\t\t\t\t\t\thref=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "tab" => $context["key"], "previewAs" => (isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t";
                        }
                        // line 36
                        echo "\t\t\t\t\t>
\t\t\t\t\t\t";
                        // line 37
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tab"], "name", array())), "html", null, true);
                        echo "
\t\t\t\t\t\t";
                        // line 38
                        if ((($context["key"] == "tasks") && ((array_key_exists("categoryTag", $context)) ? (_twig_default_filter((isset($context["categoryTag"]) ? $context["categoryTag"] : $this->getContext($context, "categoryTag")), null)) : (null)))) {
                            // line 39
                            echo "\t\t\t\t\t\t\t<span class=\"badge badge-primary\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["categoryTag"]) ? $context["categoryTag"] : $this->getContext($context, "categoryTag"))), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t";
                        }
                        // line 41
                        echo "\t\t\t\t\t\t";
                        if ((($this->getAttribute($context["tab"], "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "number", array()), false)) : (false))) {
                            // line 42
                            echo "\t\t\t\t\t\t\t";
                            if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), false)) : (false))) {
                                // line 43
                                echo "\t\t\t\t\t\t\t\t<small>(";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                                echo ")</small>
\t\t\t\t\t\t\t";
                            } else {
                                // line 45
                                echo "\t\t\t\t\t\t\t\t<small>(";
                                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                                echo ")</small>
\t\t\t\t\t\t\t";
                            }
                            // line 47
                            echo "\t\t\t\t\t\t";
                        }
                        // line 48
                        echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                    }
                    // line 51
                    echo "\t\t";
                } else {
                    // line 52
                    echo "\t\t\t<li role=\"presentation\" id=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
\t\t\t    class=\"";
                    // line 53
                    if ((((($this->getAttribute((isset($context["route_params"]) ? $context["route_params"] : null), "tab", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route_params"]) ? $context["route_params"] : null), "tab", array()), "")) : ("")) == $context["key"]) || (((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "")) : ("")) == $context["key"]))) {
                        echo "active";
                    }
                    echo "\">
\t\t\t\t<a
\t\t\t\t\t\t";
                    // line 55
                    if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), false)) : (false))) {
                        // line 56
                        echo "\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "tab" => $context["key"], "previewAs" => (isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t";
                    } else {
                        // line 58
                        echo "\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "tab" => $context["key"], "previewAs" => (isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs")))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t\t>
\t\t\t\t\t";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tab"], "name", array())), "html", null, true);
                    echo "
\t\t\t\t\t";
                    // line 62
                    if ((($context["key"] == "tasks") && ((array_key_exists("categoryTag", $context)) ? (_twig_default_filter((isset($context["categoryTag"]) ? $context["categoryTag"] : $this->getContext($context, "categoryTag")), null)) : (null)))) {
                        // line 63
                        echo "\t\t\t\t\t\t<span class=\"badge badge-primary\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["categoryTag"]) ? $context["categoryTag"] : $this->getContext($context, "categoryTag"))), "html", null, true);
                        echo "</span>
\t\t\t\t\t";
                    }
                    // line 65
                    echo "\t\t\t\t\t";
                    if ((($this->getAttribute($context["tab"], "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab"], "number", array()), false)) : (false))) {
                        // line 66
                        echo "\t\t\t\t\t\t";
                        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), false)) : (false))) {
                            // line 67
                            echo "\t\t\t\t\t\t\t<small>(";
                            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                            echo ")</small>
\t\t\t\t\t\t";
                        } else {
                            // line 69
                            echo "\t\t\t\t\t\t\t<small>(";
                            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course_set"]) ? $context["course_set"] : null), $this->getAttribute($context["tab"], "number", array()), array(), "array"), 0)) : (0)), "html", null, true);
                            echo ")</small>
\t\t\t\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t</a>
\t\t\t</li>
\t\t";
                }
                // line 75
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</ul>";
        
        $__internal_b3887614af01e90f4ca3203b2881163e9332f0abc1fe52631d3bd33e01dc82db->leave($__internal_b3887614af01e90f4ca3203b2881163e9332f0abc1fe52631d3bd33e01dc82db_prof);

    }

    public function getTemplateName()
    {
        return "course/header/nav-tab-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 76,  251 => 75,  246 => 72,  243 => 71,  237 => 69,  231 => 67,  228 => 66,  225 => 65,  219 => 63,  217 => 62,  213 => 61,  210 => 60,  204 => 58,  198 => 56,  196 => 55,  189 => 53,  184 => 52,  181 => 51,  176 => 48,  173 => 47,  167 => 45,  161 => 43,  158 => 42,  155 => 41,  149 => 39,  147 => 38,  143 => 37,  140 => 36,  134 => 34,  128 => 32,  126 => 31,  119 => 29,  114 => 28,  112 => 27,  108 => 25,  105 => 24,  99 => 22,  93 => 20,  90 => 19,  87 => 18,  81 => 16,  79 => 15,  75 => 14,  72 => 13,  66 => 11,  60 => 9,  58 => 8,  51 => 6,  46 => 5,  43 => 4,  40 => 3,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-tabs {% if mobile %} es-mobile-nav {% endif %}\" role=\"tablist\">
\t{% for key, tab in metas.tabs if( key not in ['material', 'threads']  or navMember|default(null))  %}
\t\t{% if mobile %}
\t\t\t{% if not  member|default(null)  and loop.index <= 3 %}
\t\t\t\t<li role=\"presentation\" id=\"{{ key }}\"
\t\t\t\t    class=\"{% if route_params.tab|default('') == key  or nav|default('') == key %}active{% endif %}\">
\t\t\t\t\t<a
\t\t\t\t\t\t\t{% if member|default(false) %}
\t\t\t\t\t\t\t\thref=\"{{ path('my_course_show', {'id': course.id, 'tab': key, previewAs:previewAs}) }}\"
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\thref=\"{{ path('course_show', {'id': course.id, 'tab': key, previewAs:previewAs}) }}\"
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t>
\t\t\t\t\t\t{{ tab.name|trans }}
\t\t\t\t\t\t{% if key == 'tasks' and categoryTag|default(null) %}
\t\t\t\t\t\t\t<span class=\"badge badge-primary\">{{ categoryTag|trans }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if tab.number|default(false) %}
\t\t\t\t\t\t\t{% if member|default(false) %}
\t\t\t\t\t\t\t\t<small>({{ course[tab.number]|default(0) }})</small>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<small>({{ course_set[tab.number]|default(0) }})</small>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% elseif loop.index == 1 %}
\t\t\t\t<li role=\"presentation\" id=\"{{ key }}\"
\t\t\t\t    class=\"navs {% if route_params.tab|default('') == key  or nav|default('') == key %}active{% endif %}\">
\t\t\t\t\t<a
\t\t\t\t\t\t\t{% if member|default(false) %}
\t\t\t\t\t\t\t\thref=\"{{ path('my_course_show', {'id': course.id, 'tab': key, previewAs:previewAs}) }}\"
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\thref=\"{{ path('course_show', {'id': course.id, 'tab': key, previewAs:previewAs}) }}\"
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t>
\t\t\t\t\t\t{{ tab.name|trans }}
\t\t\t\t\t\t{% if key == 'tasks' and categoryTag|default(null) %}
\t\t\t\t\t\t\t<span class=\"badge badge-primary\">{{ categoryTag|trans }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if tab.number|default(false) %}
\t\t\t\t\t\t\t{% if member|default(false) %}
\t\t\t\t\t\t\t\t<small>({{ course[tab.number]|default(0) }})</small>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<small>({{ course_set[tab.number]|default(0) }})</small>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t{% else %}
\t\t\t<li role=\"presentation\" id=\"{{ key }}\"
\t\t\t    class=\"{% if route_params.tab|default('') == key  or nav|default('') == key %}active{% endif %}\">
\t\t\t\t<a
\t\t\t\t\t\t{% if member|default(false) %}
\t\t\t\t\t\t\thref=\"{{ path('my_course_show', {'id': course.id, 'tab': key, previewAs:previewAs}) }}\"
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\thref=\"{{ path('course_show', {'id': course.id, 'tab': key, previewAs:previewAs}) }}\"
\t\t\t\t\t\t{% endif %}
\t\t\t\t>
\t\t\t\t\t{{ tab.name|trans }}
\t\t\t\t\t{% if key == 'tasks' and categoryTag|default(null) %}
\t\t\t\t\t\t<span class=\"badge badge-primary\">{{ categoryTag|trans }}</span>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if tab.number|default(false) %}
\t\t\t\t\t\t{% if member|default(false) %}
\t\t\t\t\t\t\t<small>({{ course[tab.number]|default(0) }})</small>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<small>({{ course_set[tab.number]|default(0) }})</small>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t</a>
\t\t\t</li>
\t\t{% endif %}
\t{% endfor %}
</ul>", "course/header/nav-tab-for-guest.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course\\header\\nav-tab-for-guest.html.twig");
    }
}
