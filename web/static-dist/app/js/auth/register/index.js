webpackJsonp(["app/js/auth/register/index"],{0:function(e,a){e.exports=jQuery},"2d54b0801acfe6b5b5d9":function(e,a,t){e.exports={default:t("7ef299c1fdb884750de8"),__esModule:!0}},"5a1b42cd4752706663d8":function(e,a,t){"use strict";var i=t("30373b8543ac2ca8f199"),n=t("4373c1ac6d15a5b2dd1f");e.exports=function(e,a,t){a in e?i.f(e,a,n(0,t)):e[a]=t}},"6386db75dd507093b6de":function(e,a,t){"use strict";var i=t("9ffde76f31e1d8ca79f0");new(function(e){return e&&e.__esModule?e:{default:e}}(i).default)},"7a079e57c8ffba47bbed":function(e,a,t){"use strict";a.__esModule=!0;var i=t("2d54b0801acfe6b5b5d9"),n=function(e){return e&&e.__esModule?e:{default:e}}(i);a.default=function(e){if(Array.isArray(e)){for(var a=0,t=Array(e.length);a<e.length;a++)t[a]=e[a];return t}return(0,n.default)(e)}},"7ef299c1fdb884750de8":function(e,a,t){t("9f5e733705cd16698cdf"),t("dfa37eb698c113f70efb"),e.exports=t("99ec8b6ce9e8b820539a").Array.from},"9ffde76f31e1d8ca79f0":function(e,a,t){"use strict";function i(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(a,"__esModule",{value:!0});var n=t("7ab4a89ebadbfdecc2bf"),r=i(n),s=t("4602c3f5fe7ad9e3e91d"),d=i(s),o=t("0282bb17fb83bfbfed9b"),c=i(o),l=t("bbc0ef257199acca9fed"),u=i(l),f=function(){function e(){(0,r.default)(this,e),this.drag=$("#drag-btn").length?new u.default($("#drag-btn"),$(".js-jigsaw"),{limitType:"web_register"}):null,this.dragEvent(),this.initValidator(),this.inEventMobile(),this.initMobileMsgVeriCodeSendBtn(),this.initFieldVisitId()}return(0,d.default)(e,[{key:"dragEvent",value:function(){var e=this;this.drag&&this.drag.on("success",function(a){e._smsBtnable()})}},{key:"initValidator",value:function(){var e=this;$("#register-form").validate(this._validataRules()),$.validator.addMethod("email_or_mobile_check",function(a,t,i){var n=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/,r=/^1\d{10}$/,s=!1,d=n.test(a),o=r.test(a);return o?($(".email_mobile_msg").removeClass("hidden"),e.captchEnable||$(".js-drag-jigsaw").addClass("hidden")):($(".email_mobile_msg").addClass("hidden"),$(".js-drag-jigsaw").removeClass("hidden")),(d||o)&&(s=!0),$.validator.messages.email_or_mobile_check=Translator.trans("validate.mobile_or_email_message"),this.optional(t)||s},Translator.trans("validate.email_or_mobile_check.message"))}},{key:"inEventMobile",value:function(){var e=this;$("#register_emailOrMobile").blur(function(){var a=$("#register_emailOrMobile").val();e.emSmsCodeValidate(a)}),$("#register_mobile").blur(function(){var a=$("#register_mobile").val();e.emSmsCodeValidate(a)})}},{key:"initDragCaptchaCodeRule",value:function(){$(".js-drag-img").length&&$('[name="dragCaptchaToken"]').rules("add",{required:!0,messages:{required:Translator.trans("auth.register.drag_captcha_tips")}})}},{key:"_smsBtnDisable",value:function(){$(".js-sms-send-btn").addClass("disabled").attr("disabled",!0)}},{key:"_smsBtnable",value:function(){$(".js-sms-send-btn").removeClass("disabled").attr("disabled",!1)}},{key:"initSmsCodeRule",value:function(){$('[name="sms_code"]').rules("add",{required:!0,unsigned_integer:!0,rangelength:[6,6],es_remote:{type:"get"},messages:{rangelength:Translator.trans("validate.sms_code.message")}})}},{key:"initMobileMsgVeriCodeSendBtn",value:function(){var e=$(".js-sms-send-btn"),a=this;e.click(function(){a._smsBtnDisable();var t=$("[name='verifiedMobile']").length?"verifiedMobile":"emailOrMobile";new c.default({element:e,url:$(this).data("smsUrl"),smsType:"sms_registration",dataTo:t,captcha:!0,captchaValidated:!0,captchaNum:"dragCaptchaToken",preSmsSend:function(){return!0},error:function(e){a.drag.initDragCaptcha()},additionalAction:function(t){return"captchaRequired"==t&&(e.attr("disabled",!0),$(".js-drag-jigsaw").removeClass("hidden"),a.captchEnable=!0,a.drag&&a.drag.initDragCaptcha(),!0)}})})}},{key:"_validataRules",value:function(){var e=this;return{rules:{nickname:{required:!0,byte_minlength:4,byte_maxlength:18,nickname:!0,chinese_alphanumeric:!0,es_remote:{type:"get"}},password:{minlength:5,maxlength:20},email:{required:!0,email:!0,es_remote:{type:"get"}},invitedCode:{required:!1,reg_inviteCode:!0,es_remote:{type:"get"}},emailOrMobile:{required:!0,email_or_mobile_check:!0,es_remote:{type:"get",callback:function(a){a?e._smsBtnable():e._smsBtnDisable()}}},verifiedMobile:{required:!0,phone:!0,es_remote:{type:"get",callback:function(a){a?e._smsBtnable():e._smsBtnDisable()}}},dragCaptchaToken:{required:!0}},messages:{verifiedMobile:{required:Translator.trans("validate.phone.message")},emailOrMobile:{required:Translator.trans("validate.phone_and_email_input.message")},email:{required:Translator.trans("validate.valid_email_input.message")},dragCaptchaToken:{required:Translator.trans("auth.register.drag_captcha_tips")}}}}},{key:"emSmsCodeValidate",value:function(e){/^1\d{10}$/.test(e)?(this.initSmsCodeRule(),$('[name="dragCaptchaToken"]').rules("remove")):(this.initDragCaptchaCodeRule(),$('[name="sms_code"]').rules("remove"))}},{key:"initFieldVisitId",value:function(){$(document).ready(function(){"undefined"!==window._VISITOR_ID&&$('[name="registerVisitId"]').val(window._VISITOR_ID)})}}]),e}();a.default=f},bbc0ef257199acca9fed:function(e,a,t){"use strict";function i(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(a,"__esModule",{value:!0});var n=t("7a079e57c8ffba47bbed"),r=i(n),s=t("6415c664294d747ee392"),d=i(s),o=t("adc6e7d88332518aa1ec"),c=i(o),l=t("cd078759ac479d74803f"),u=i(l),f=t("7ab4a89ebadbfdecc2bf"),g=i(f),h=t("4602c3f5fe7ad9e3e91d"),m=i(h),b=t("1ff717687cc04d94af8f"),v=i(b),p=t("3b1883fc74dc0f9509af"),_=i(p),k=t("5eb223de522186da1dd9"),y=i(k),C=t("9181c6995ae8c5c94b7a"),j=t("17c25dd7d9d2615bc1d9"),w=i(j),T=function(e){function a(e,t,i){(0,g.default)(this,a);var n=(0,v.default)(this,(a.__proto__||(0,u.default)(a)).call(this));return n.$element=e,n.$target=t,n.params={top:0,left:0,currentX:0,currentY:0,flag:!1,currentLeft:0,currentTop:0},n.data=(0,c.default)({times:2},i),n.dragCaptchaToken=null,n.init(),n}return(0,_.default)(a,e),(0,m.default)(a,[{key:"init",value:function(){this.initDragCaptcha(),this.getLocation(this.$element[0])}},{key:"initDragCaptcha",value:function(){var e=this,a=this;y.default.dragCaptcha.get({before:function(){$(".js-drag-img-mask").removeClass("hidden"),$(".js-jigsaw-bg").remove(),$(".js-jigsaw").attr("src",""),a.setCss(a.$element[0],"cursor","pointer"),a.resetLocation(a.$element[0],a.$target[0]),$('[name="dragCaptchaToken"]').val(""),a.initEvent()},data:this.data}).then(function(a){e.loadingImg(a.url,a.jigsaw),e.dragCaptchaToken=a.token})}},{key:"loadingImg",value:function(e,a){var t=new Image;t.src=e,t.className="js-jigsaw-bg drag-img__bg",t.onload=function(){$(".js-jigsaw-bg").length>0||($(t).prependTo(".js-drag-img"),$(".js-drag-img-mask").addClass("hidden"),$(".js-jigsaw").attr("src",a))}}},{key:"initEvent",value:function(){var e=this;this.unbindEvent();var a=$(document);this.$element.on("mousedown.drag.captcha touchstart.drag.captcha",function(a){e.startDrag(a)}),a.on("mouseup.drag.captcha touchend.drag.captcha",function(a){e.stopDrag(a)}),a.on("mousemove.drag.captcha touchmove.drag.captcha",function(a){e.dragMove(a)})}},{key:"unbindEvent",value:function(){this.$element.unbind("mousedown.drag.captcha touchstart.drag.captcha"),$(document).unbind("mousemove.drag.captcha touchmove.drag.captcha mouseup.drag.captcha touchend.drag.captcha")}},{key:"startDrag",value:function(e){e.preventDefault();var a=this.params;a.flag=!0;var t=e.clientX?e.clientX.toFixed(2):e.originalEvent.targetTouches[0].pageX.toFixed(2);a.currentX=t}},{key:"stopDrag",value:function(e){var a=this,t=this.$element,i=(this.$target,this.params);if(i.flag&&(i.flag=!1,this.getLocation(t[0]),i.currentLeft)){var n=$(".js-jigsaw-bg"),r=this.calPositionX(n),s=this._getToken(this.dragCaptchaToken,r),d={token:s};y.default.dragCaptcha.validate({params:d}).then(function(e){a.validateSuccess(t[0],s)}).catch(function(){a.initDragCaptcha(),a.emit("error")})}}},{key:"dragMove",value:function(e){var a=this.$element,t=this.$target,i=this.params;if(i.flag){e.preventDefault();var n=e.clientX?e.clientX.toFixed(2):e.originalEvent.targetTouches[0].pageX.toFixed(2),r=n-i.currentX,s=a.parent().width()-a.width(),d=parseInt(i.left)+r;d<=0&&(d=0),d>=s&&(d=s),i.currentLeft=d;var o=d+"px";this.setCss(a[0],"left",o),this.setCss(t[0],"left",o),this.setCss(a[0],"cursor","move"),$(".js-drag-bar-tip").addClass("hidden");var c=d+20+"px";$(".js-drag-bar-mask").css("width",c)}}},{key:"calPositionX",value:function(e){var a=(e[0].naturalWidth/e.width()).toFixed(2);return(this.params.currentLeft.toFixed(2)*a).toFixed(2)}},{key:"validateSuccess",value:function(e,a){cd.message({type:"success",message:Translator.trans("validate.success")});var t=$('[name="dragCaptchaToken"]');t.val(a);var i=t.closest(".form-group");i.removeClass("has-error"),i.find(".jq-validate-error").remove(),this.unbindEvent(),this.setCss(e,"cursor","not-allowed"),this.emit("success",{token:a})}},{key:"getLocation",value:function(e){"auto"!==this.getCss(e,"left")&&(this.params.left=this.getCss(e,"left"))}},{key:"resetLocation",value:function(e,a){this.setCss(e,"left","0px"),this.setCss(a,"left","0px"),this.getLocation(e),$(".js-drag-bar-mask").css("width","0px"),$(".js-drag-bar-tip").removeClass("hidden")}},{key:"getCss",value:function(e,a){return e.currentStyle?e.currentStyle[a]:document.defaultView.getComputedStyle(e,!1)[a]}},{key:"setCss",value:function(e,a,t){e.style[a]=t}},{key:"_getToken",value:function(e,a){var t={token:e,captcha:a};return e=(0,d.default)(t),[].concat((0,r.default)((0,C.strToBase64)(e))).reverse().join("")}}]),a}(w.default);a.default=T},dfa37eb698c113f70efb:function(e,a,t){"use strict";var i=t("a0ce7130a92293994282"),n=t("d30516674aade65150d3"),r=t("68be1979658d3a49fbce"),s=t("be5ff68e5fc2b36ab3fd"),d=t("7bbcd029dba3160182ef"),o=t("10f5bc3e6ad5971b57b0"),c=t("5a1b42cd4752706663d8"),l=t("a5b03ec781f71e8d0bed");n(n.S+n.F*!t("9192d99c20a30ab204d7")(function(e){Array.from(e)}),"Array",{from:function(e){var a,t,n,u,f=r(e),g="function"==typeof this?this:Array,h=arguments.length,m=h>1?arguments[1]:void 0,b=void 0!==m,v=0,p=l(f);if(b&&(m=i(m,h>2?arguments[2]:void 0,2)),void 0==p||g==Array&&d(p))for(a=o(f.length),t=new g(a);a>v;v++)c(t,v,b?m(f[v],v):f[v]);else for(u=p.call(f),t=new g;!(n=u.next()).done;v++)c(t,v,b?s(u,m,[n.value,v],!0):n.value);return t.length=v,t}})}},["6386db75dd507093b6de"]);