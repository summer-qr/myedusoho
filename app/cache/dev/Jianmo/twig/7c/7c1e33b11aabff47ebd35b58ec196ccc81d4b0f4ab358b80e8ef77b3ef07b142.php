<?php

/* course-manage/base-info/marketing.html.twig */
class __TwigTemplate_adfba26a0966f85060570ac0f65f87f67ccb10f1bf8fe4ecbc11213074ef25c8 extends Twig_Template
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
        $__internal_41eed8f75c16f8b485c473f0391fd937de2b2093925f35c60ec2841bae1c9f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41eed8f75c16f8b485c473f0391fd937de2b2093925f35c60ec2841bae1c9f6d->enter($__internal_41eed8f75c16f8b485c473f0391fd937de2b2093925f35c60ec2841bae1c9f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course-manage/base-info/marketing.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
  <div class=\"col-sm-2 control-label\">
    <label class=\"control-label-required\" for=\"course_price\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.price"), "html", null, true);
        echo "</label>
  </div>
  <div class=\"col-sm-8\">
    <input class=\"form-control course-mangae-info__input mrs\" id=\"course_price\" type=\"text\" name=\"originPrice\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), 0)) : (0)), "html", null, true);
        echo "\" aria-required=\"true\" aria-describedby=\"course_price-error\" aria-invalid=\"true\">
    <span class=\"ml5\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.currency.CNY"), "html", null, true);
        echo "</span>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label mb5\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.setup.can_join"), "html", null, true);
        echo "
    <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.setup.can_join.tips"), "html", null, true);
        echo "\"></a>
  </label>
  <div class=\"col-sm-8 cd-radio-group mb0\">
    ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("buyable", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.setup.can_join"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.setup.can_not_join")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)));
        echo "
  </div>
</div>

<div class=\"js-course-add-open-show ";
        // line 21
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)) == 0)) {
            echo " hidden ";
        }
        echo "\">
  <div class=\"form-group\">
    <div class=\"col-sm-2 control-label\">
      <label class=\"control-label-required\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.expiry_date"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-sm-8 cd-radio-group course-mangae-info__group mb0\">
      ";
        // line 27
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("enableBuyExpiryTime", array("0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.expiry_date.anytime"), "1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.expiry_date.custom")), ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()), 0)) : (0)) > 0)) ? (1) : (0)));
        echo "
      <input type=\"text\" class=\"form-control course-mangae-info__input mlm ";
        // line 28
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyExpiryTime", array()) == 0)) {
            echo " hidden ";
        }
        echo "\" id=\"buyExpiryTime\" name=\"buyExpiryTime\"
              value=\"";
        // line 29
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyExpiryTime", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->dateformatFilter($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "buyExpiryTime", array()), "Y-m-d"), "html", null, true);
        }
        echo "\">
    </div>
  </div>
  ";
        // line 33
        echo "  ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.buy_before_approval")) {
            // line 34
            echo "    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.approval"), "html", null, true);
            echo "
        <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\"
            data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\"
            data-placement=\"top\" data-content=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.marketing_setup.approval_tips"), "html", null, true);
            echo "\"></a></label>
      <div class=\"col-sm-8 cd-radio-group\">
        ";
            // line 41
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("approval", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.radios.yes"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.radios.no")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()), 0)) : (0)));
            echo "
      </div>
    </div>
  ";
        }
        // line 45
        echo "</div>

";
        // line 47
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.marketing.setting", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))));
        echo "
";
        
        $__internal_41eed8f75c16f8b485c473f0391fd937de2b2093925f35c60ec2841bae1c9f6d->leave($__internal_41eed8f75c16f8b485c473f0391fd937de2b2093925f35c60ec2841bae1c9f6d_prof);

    }

    public function getTemplateName()
    {
        return "course-manage/base-info/marketing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  119 => 45,  112 => 41,  107 => 39,  101 => 36,  97 => 34,  94 => 33,  86 => 29,  80 => 28,  76 => 27,  70 => 24,  62 => 21,  55 => 17,  49 => 14,  45 => 13,  36 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-group\">
  <div class=\"col-sm-2 control-label\">
    <label class=\"control-label-required\" for=\"course_price\">{{ 'site.price'|trans }}</label>
  </div>
  <div class=\"col-sm-8\">
    <input class=\"form-control course-mangae-info__input mrs\" id=\"course_price\" type=\"text\" name=\"originPrice\" value=\"{{ course.originPrice|default(0) }}\" aria-required=\"true\" aria-describedby=\"course_price-error\" aria-invalid=\"true\">
    <span class=\"ml5\">{{ 'site.currency.CNY'|trans }}</span>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-sm-2 control-label mb5\">
    {{ 'course.marketing_setup.setup.can_join'|trans }}
    <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ 'course.marketing_setup.setup.can_join.tips'|trans }}\"></a>
  </label>
  <div class=\"col-sm-8 cd-radio-group mb0\">
    {{ cd_radios('buyable', { '1': 'course.marketing_setup.setup.can_join'|trans, '0': 'course.marketing_setup.setup.can_not_join'|trans }, course.buyable|default(1)) }}
  </div>
</div>

<div class=\"js-course-add-open-show {% if course.buyable|default(1) == 0 %} hidden {% endif %}\">
  <div class=\"form-group\">
    <div class=\"col-sm-2 control-label\">
      <label class=\"control-label-required\">{{ 'course.marketing_setup.expiry_date'|trans }}</label>
    </div>
    <div class=\"col-sm-8 cd-radio-group course-mangae-info__group mb0\">
      {{ cd_radios('enableBuyExpiryTime', {'0': 'course.marketing_setup.expiry_date.anytime'|trans, '1': 'course.marketing_setup.expiry_date.custom'|trans,}, course.buyExpiryTime|default(0) > 0 ? 1 : 0 ) }}
      <input type=\"text\" class=\"form-control course-mangae-info__input mlm {% if course.buyExpiryTime == 0 %} hidden {% endif %}\" id=\"buyExpiryTime\" name=\"buyExpiryTime\"
              value=\"{% if course.buyExpiryTime > 0 %}{{ course.buyExpiryTime|date_format('Y-m-d') }}{% endif %}\">
    </div>
  </div>
  {#缺少学员数限制#}
  {% if setting('magic.buy_before_approval') %}
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">
        {{ 'course.marketing_setup.approval'|trans }}
        <a class=\"es-icon es-icon-help text-normal course-mangae-info__help\"
            data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\"
            data-placement=\"top\" data-content=\"{{ 'course.marketing_setup.approval_tips'|trans }}\"></a></label>
      <div class=\"col-sm-8 cd-radio-group\">
        {{ cd_radios('approval', { '1': 'site.datagrid.radios.yes'|trans, '0': 'site.datagrid.radios.no'|trans }, course.approval|default(0)) }}
      </div>
    </div>
  {% endif %}
</div>

{{ slot('course.marketing.setting', {'course':course}) }}
", "course-manage/base-info/marketing.html.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\edusoho\\app\\Resources\\views\\course-manage\\base-info\\marketing.html.twig");
    }
}
