webpackJsonp(["app/js/auth/password-reset/index"],{0:function(e,t){e.exports=jQuery},"2d54b0801acfe6b5b5d9":function(e,t,a){e.exports={default:a("7ef299c1fdb884750de8"),__esModule:!0}},"5a1b42cd4752706663d8":function(e,t,a){"use strict";var r=a("30373b8543ac2ca8f199"),n=a("4373c1ac6d15a5b2dd1f");e.exports=function(e,t,a){t in e?r.f(e,t,n(0,a)):e[t]=a}},"7a079e57c8ffba47bbed":function(e,t,a){"use strict";t.__esModule=!0;var r=a("2d54b0801acfe6b5b5d9"),n=function(e){return e&&e.__esModule?e:{default:e}}(r);t.default=function(e){if(Array.isArray(e)){for(var t=0,a=Array(e.length);t<e.length;t++)a[t]=e[t];return a}return(0,n.default)(e)}},"7ef299c1fdb884750de8":function(e,t,a){a("9f5e733705cd16698cdf"),a("dfa37eb698c113f70efb"),e.exports=a("99ec8b6ce9e8b820539a").Array.from},"8fe9b6e117bbb964d58b":function(e,t,a){"use strict";function r(e){return e&&e.__esModule?e:{default:e}}var n=a("7ab4a89ebadbfdecc2bf"),s=r(n),o=a("4602c3f5fe7ad9e3e91d"),d=r(o),i=a("0282bb17fb83bfbfed9b"),c=(r(i),a("bbc0ef257199acca9fed")),u=r(c),f=a("5eb223de522186da1dd9"),l=r(f),h=a("b334fd7e4c5a19234db2"),g=r(h),m=a("971935e6d9dafc951b13");a("9415ea13985847610e60"),new(function(){function e(){(0,s.default)(this,e),this.event(),this.dragHtml=$(".js-drag-box").html(),$(".js-drag-box").remove(),$("#password-reset-form").prepend(this.dragHtml),this.drag=new u.default($("#drag-btn"),$(".js-jigsaw"),{limitType:"reset_password"}),this.smsEvent(),this.validator(),this.smsToken=""}return(0,d.default)(e,[{key:"event",value:function(){var e=this;$(".js-find-password li").click(function(){var t=$(this);if(!t.hasClass("active")){t.addClass("active").siblings().removeClass("active");var a=$(t.data("target"));a.length>0&&($("form").hide(),e.drag.unbindEvent(),$(".js-drag").remove(),a.prepend(e.dragHtml),e.drag=new u.default($("#drag-btn"),$(".js-jigsaw"),{limitType:"reset_password"}),a.show())}})}},{key:"smsEvent",value:function(){var e=this,t=$(".js-sms-send"),a=this;t.click(function(){if(e.mobileValidator.element($('[name="dragCaptchaToken"]'))){if(t.hasClass("disabled"))return;t.addClass("disabled"),l.default.resetPasswordSms.get({params:{mobile:$("#mobile").val()},data:{dragCaptchaToken:$('[name="dragCaptchaToken"]').val()}}).then(function(e){(0,g.default)("success",Translator.trans("notify.sms_send_success.message")),t.removeClass("disabled"),(0,m.countDown)($(".js-sms-send"),$("#js-fetch-btn-text"),120),a.smsToken=e.smsToken}).catch(function(){t.removeClass("disabled"),a.drag.initDragCaptcha()})}})}},{key:"validator",value:function(){var e=this;$("#password-reset-form").validate({rules:{email:{required:!0,email:!0},dragCaptchaToken:{required:!0}},messages:{dragCaptchaToken:{required:Translator.trans("site.captcha_code.required")}},submitHandler:function(t){var a=$("#password-reset-form").find('[name="email"]').val();l.default.resetPasswordEmail.patch({params:{email:a},data:{dragCaptchaToken:$('[name="dragCaptchaToken"]').val()}}).then(function(e){(0,g.default)("success",Translator.trans("notify.password_reset_email_send_success.message")),window.location.href=$("#password-reset-form").data("success")+"?email="+a}).catch(function(t){4040104==(t.responseJSON.error.code||0)&&e.drag.initDragCaptcha()})}}),$.validator.addMethod("passwordSms",function(t,a){var r=!1;return l.default.resetPasswordSms.validate({params:{mobile:$("#mobile").val(),smsCode:$("#sms-code").val()},data:{smsToken:e.smsToken},async:!1,promise:!1}).success(function(e){r="sms.code.success"==e}),r},$.validator.format(Translator.trans("validate.sms_code.message"))),this.mobileValidator=$("#password-reset-by-mobile-form").validate({rules:{mobile:{required:!0,phone:!0,es_remote:{type:"get",callback:function(e){e?$(".js-sms-send").removeClass("disabled"):$(".js-sms-send").addClass("disabled")}}},sms_code:{required:!0,unsigned_integer:!0,rangelength:[6,6],passwordSms:!0},dragCaptchaToken:{required:!0},reset_password:{required:!0,minlength:5,maxlength:20}},messages:{sms_code:{required:Translator.trans("auth.password_reset.sms_code_required_hint"),rangelength:Translator.trans("auth.password_reset.sms_code_validate_hint")},dragCaptchaToken:{required:Translator.trans("site.captcha_code.required")}},submitHandler:function(t){l.default.resetPasswordMobile.patch({params:{mobile:$("#mobile").val()},data:{smsToken:e.smsToken,smsCode:$("#sms-code").val(),encrypt_password:window.XXTEA.encryptToBase64($("#reset_password").val(),window.location.host),dragCaptchaToken:$('[name="dragCaptchaToken"]').val()}}).then(function(e){(0,g.default)("success",Translator.trans("notify.password_reset_success.message")),window.location.href=$("#password-reset-form").data("success")+"?mobile="+$("#mobile").val()})}})}}]),e}())},"9415ea13985847610e60":function(e,t,a){"use strict";!function(e){function t(e,t){var a=e.length,r=a<<2;if(t){var n=e[a-1];if(r-=4,n<r-3||n>r)return null;r=n}for(var s=0;s<a;s++)e[s]=String.fromCharCode(255&e[s],e[s]>>>8&255,e[s]>>>16&255,e[s]>>>24&255);var o=e.join("");return t?o.substring(0,r):o}function a(e,t){var a=e.length,r=a>>2;0!=(3&a)&&++r;var n;t?(n=new Array(r+1),n[r]=a):n=new Array(r);for(var s=0;s<a;++s)n[s>>2]|=e.charCodeAt(s)<<((3&s)<<3);return n}function r(e){return 4294967295&e}function n(e,t,a,r,n,s){return(a>>>5^t<<2)+(t>>>3^a<<4)^(e^t)+(s[3&r^n]^a)}function s(e){return e.length<4&&(e.length=4),e}function o(e,t){var a,s,o,d,i,c,u=e.length,f=u-1;for(s=e[f],o=0,c=0|Math.floor(6+52/u);c>0;--c){for(o=r(o+v),d=o>>>2&3,i=0;i<f;++i)a=e[i+1],s=e[i]=r(e[i]+n(o,a,s,i,d,t));a=e[0],s=e[f]=r(e[f]+n(o,a,s,f,d,t))}return e}function d(e,t){var a,s,o,d,i,c,u=e.length,f=u-1;for(a=e[0],c=Math.floor(6+52/u),o=r(c*v);0!==o;o=r(o-v)){for(d=o>>>2&3,i=f;i>0;--i)s=e[i-1],a=e[i]=r(e[i]-n(o,a,s,i,d,t));s=e[f],a=e[0]=r(e[0]-n(o,a,s,0,d,t))}return e}function i(e){if(/^[\x00-\x7f]*$/.test(e))return e;for(var t=[],a=e.length,r=0,n=0;r<a;++r,++n){var s=e.charCodeAt(r);if(s<128)t[n]=e.charAt(r);else if(s<2048)t[n]=String.fromCharCode(192|s>>6,128|63&s);else{if(!(s<55296||s>57343)){if(r+1<a){var o=e.charCodeAt(r+1);if(s<56320&&56320<=o&&o<=57343){var d=65536+((1023&s)<<10|1023&o);t[n]=String.fromCharCode(240|d>>18&63,128|d>>12&63,128|d>>6&63,128|63&d),++r;continue}}throw new Error("Malformed string")}t[n]=String.fromCharCode(224|s>>12,128|s>>6&63,128|63&s)}}return t.join("")}function c(e,t){for(var a=new Array(t),r=0,n=0,s=e.length;r<t&&n<s;r++){var o=e.charCodeAt(n++);switch(o>>4){case 0:case 1:case 2:case 3:case 4:case 5:case 6:case 7:a[r]=o;break;case 12:case 13:if(!(n<s))throw new Error("Unfinished UTF-8 octet sequence");a[r]=(31&o)<<6|63&e.charCodeAt(n++);break;case 14:if(!(n+1<s))throw new Error("Unfinished UTF-8 octet sequence");a[r]=(15&o)<<12|(63&e.charCodeAt(n++))<<6|63&e.charCodeAt(n++);break;case 15:if(!(n+2<s))throw new Error("Unfinished UTF-8 octet sequence");var d=((7&o)<<18|(63&e.charCodeAt(n++))<<12|(63&e.charCodeAt(n++))<<6|63&e.charCodeAt(n++))-65536;if(!(0<=d&&d<=1048575))throw new Error("Character outside valid Unicode range: 0x"+d.toString(16));a[r++]=d>>10&1023|55296,a[r]=1023&d|56320;break;default:throw new Error("Bad UTF-8 encoding 0x"+o.toString(16))}}return r<t&&(a.length=r),String.fromCharCode.apply(String,a)}function u(e,t){for(var a=[],r=new Array(32768),n=0,s=0,o=e.length;n<t&&s<o;n++){var d=e.charCodeAt(s++);switch(d>>4){case 0:case 1:case 2:case 3:case 4:case 5:case 6:case 7:r[n]=d;break;case 12:case 13:if(!(s<o))throw new Error("Unfinished UTF-8 octet sequence");r[n]=(31&d)<<6|63&e.charCodeAt(s++);break;case 14:if(!(s+1<o))throw new Error("Unfinished UTF-8 octet sequence");r[n]=(15&d)<<12|(63&e.charCodeAt(s++))<<6|63&e.charCodeAt(s++);break;case 15:if(!(s+2<o))throw new Error("Unfinished UTF-8 octet sequence");var i=((7&d)<<18|(63&e.charCodeAt(s++))<<12|(63&e.charCodeAt(s++))<<6|63&e.charCodeAt(s++))-65536;if(!(0<=i&&i<=1048575))throw new Error("Character outside valid Unicode range: 0x"+i.toString(16));r[n++]=i>>10&1023|55296,r[n]=1023&i|56320;break;default:throw new Error("Bad UTF-8 encoding 0x"+d.toString(16))}if(n>=32766){var c=n+1;r.length=c,a[a.length]=String.fromCharCode.apply(String,r),t-=c,n=-1}}return n>0&&(r.length=n,a[a.length]=String.fromCharCode.apply(String,r)),a.join("")}function f(e,t){return(void 0===t||null===t||t<0)&&(t=e.length),0===t?"":/^[\x00-\x7f]*$/.test(e)||!/^[\x00-\xff]*$/.test(e)?t===e.length?e:e.substr(0,t):t<65535?c(e,t):u(e,t)}function l(e,r){return void 0===e||null===e||0===e.length?e:(e=i(e),r=i(r),t(o(a(e,!0),s(a(r,!1))),!1))}function h(t,a){return e.btoa(l(t,a))}function g(e,r){return void 0===e||null===e||0===e.length?e:(r=i(r),f(t(d(a(e,!1),s(a(r,!1))),!0)))}function m(t,a){return void 0===t||null===t||0===t.length?t:g(e.atob(t),a)}void 0===e.btoa&&(e.btoa=function(){var e="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".split("");return function(t){var a,r,n,s,o,d,i;for(r=n=0,s=t.length,o=s%3,s-=o,d=s/3<<2,o>0&&(d+=4),a=new Array(d);r<s;)i=t.charCodeAt(r++)<<16|t.charCodeAt(r++)<<8|t.charCodeAt(r++),a[n++]=e[i>>18]+e[i>>12&63]+e[i>>6&63]+e[63&i];return 1==o?(i=t.charCodeAt(r++),a[n++]=e[i>>2]+e[(3&i)<<4]+"=="):2==o&&(i=t.charCodeAt(r++)<<8|t.charCodeAt(r++),a[n++]=e[i>>10]+e[i>>4&63]+e[(15&i)<<2]+"="),a.join("")}}()),void 0===e.atob&&(e.atob=function(){var e=[-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,62,-1,-1,-1,63,52,53,54,55,56,57,58,59,60,61,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,-1,-1,-1,-1,-1,-1,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,-1,-1,-1,-1,-1];return function(t){var a,r,n,s,o,d,i,c,u,f;if((i=t.length)%4!=0)return"";if(/[^ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\+\/\=]/.test(t))return"";for(c="="==t.charAt(i-2)?1:"="==t.charAt(i-1)?2:0,u=i,c>0&&(u-=4),u=3*(u>>2)+c,f=new Array(u),o=d=0;o<i&&-1!=(a=e[t.charCodeAt(o++)])&&-1!=(r=e[t.charCodeAt(o++)])&&(f[d++]=String.fromCharCode(a<<2|(48&r)>>4),-1!=(n=e[t.charCodeAt(o++)]))&&(f[d++]=String.fromCharCode((15&r)<<4|(60&n)>>2),-1!=(s=e[t.charCodeAt(o++)]));)f[d++]=String.fromCharCode((3&n)<<6|s);return f.join("")}}());var v=2654435769;e.XXTEA={utf8Encode:i,utf8Decode:f,encrypt:l,encryptToBase64:h,decrypt:g,decryptFromBase64:m}}(window)},"971935e6d9dafc951b13":function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.countDown=function e(t,a,r){var n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:function(){};if(t.addClass("disabled").attr("disabled",!0),a.data("count-down-text")||a.data("count-down-text",a.text()),a.text(r+" 秒后重新获取"),--r<0)return t.removeClass("disabled").attr("disabled",!1),a.text(a.data("count-down-text")),void n();setTimeout(function(){e(t,a,r,n)},1e3)}},bbc0ef257199acca9fed:function(e,t,a){"use strict";function r(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var n=a("7a079e57c8ffba47bbed"),s=r(n),o=a("6415c664294d747ee392"),d=r(o),i=a("adc6e7d88332518aa1ec"),c=r(i),u=a("cd078759ac479d74803f"),f=r(u),l=a("7ab4a89ebadbfdecc2bf"),h=r(l),g=a("4602c3f5fe7ad9e3e91d"),m=r(g),v=a("1ff717687cc04d94af8f"),b=r(v),p=a("3b1883fc74dc0f9509af"),C=r(p),w=a("5eb223de522186da1dd9"),k=r(w),y=a("9181c6995ae8c5c94b7a"),T=a("17c25dd7d9d2615bc1d9"),_=r(T),A=function(e){function t(e,a,r){(0,h.default)(this,t);var n=(0,b.default)(this,(t.__proto__||(0,f.default)(t)).call(this));return n.$element=e,n.$target=a,n.params={top:0,left:0,currentX:0,currentY:0,flag:!1,currentLeft:0,currentTop:0},n.data=(0,c.default)({times:2},r),n.dragCaptchaToken=null,n.init(),n}return(0,C.default)(t,e),(0,m.default)(t,[{key:"init",value:function(){this.initDragCaptcha(),this.getLocation(this.$element[0])}},{key:"initDragCaptcha",value:function(){var e=this,t=this;k.default.dragCaptcha.get({before:function(){$(".js-drag-img-mask").removeClass("hidden"),$(".js-jigsaw-bg").remove(),$(".js-jigsaw").attr("src",""),t.setCss(t.$element[0],"cursor","pointer"),t.resetLocation(t.$element[0],t.$target[0]),$('[name="dragCaptchaToken"]').val(""),t.initEvent()},data:this.data}).then(function(t){e.loadingImg(t.url,t.jigsaw),e.dragCaptchaToken=t.token})}},{key:"loadingImg",value:function(e,t){var a=new Image;a.src=e,a.className="js-jigsaw-bg drag-img__bg",a.onload=function(){$(".js-jigsaw-bg").length>0||($(a).prependTo(".js-drag-img"),$(".js-drag-img-mask").addClass("hidden"),$(".js-jigsaw").attr("src",t))}}},{key:"initEvent",value:function(){var e=this;this.unbindEvent();var t=$(document);this.$element.on("mousedown.drag.captcha touchstart.drag.captcha",function(t){e.startDrag(t)}),t.on("mouseup.drag.captcha touchend.drag.captcha",function(t){e.stopDrag(t)}),t.on("mousemove.drag.captcha touchmove.drag.captcha",function(t){e.dragMove(t)})}},{key:"unbindEvent",value:function(){this.$element.unbind("mousedown.drag.captcha touchstart.drag.captcha"),$(document).unbind("mousemove.drag.captcha touchmove.drag.captcha mouseup.drag.captcha touchend.drag.captcha")}},{key:"startDrag",value:function(e){e.preventDefault();var t=this.params;t.flag=!0;var a=e.clientX?e.clientX.toFixed(2):e.originalEvent.targetTouches[0].pageX.toFixed(2);t.currentX=a}},{key:"stopDrag",value:function(e){var t=this,a=this.$element,r=(this.$target,this.params);if(r.flag&&(r.flag=!1,this.getLocation(a[0]),r.currentLeft)){var n=$(".js-jigsaw-bg"),s=this.calPositionX(n),o=this._getToken(this.dragCaptchaToken,s),d={token:o};k.default.dragCaptcha.validate({params:d}).then(function(e){t.validateSuccess(a[0],o)}).catch(function(){t.initDragCaptcha(),t.emit("error")})}}},{key:"dragMove",value:function(e){var t=this.$element,a=this.$target,r=this.params;if(r.flag){e.preventDefault();var n=e.clientX?e.clientX.toFixed(2):e.originalEvent.targetTouches[0].pageX.toFixed(2),s=n-r.currentX,o=t.parent().width()-t.width(),d=parseInt(r.left)+s;d<=0&&(d=0),d>=o&&(d=o),r.currentLeft=d;var i=d+"px";this.setCss(t[0],"left",i),this.setCss(a[0],"left",i),this.setCss(t[0],"cursor","move"),$(".js-drag-bar-tip").addClass("hidden");var c=d+20+"px";$(".js-drag-bar-mask").css("width",c)}}},{key:"calPositionX",value:function(e){var t=(e[0].naturalWidth/e.width()).toFixed(2);return(this.params.currentLeft.toFixed(2)*t).toFixed(2)}},{key:"validateSuccess",value:function(e,t){cd.message({type:"success",message:Translator.trans("validate.success")});var a=$('[name="dragCaptchaToken"]');a.val(t);var r=a.closest(".form-group");r.removeClass("has-error"),r.find(".jq-validate-error").remove(),this.unbindEvent(),this.setCss(e,"cursor","not-allowed"),this.emit("success",{token:t})}},{key:"getLocation",value:function(e){"auto"!==this.getCss(e,"left")&&(this.params.left=this.getCss(e,"left"))}},{key:"resetLocation",value:function(e,t){this.setCss(e,"left","0px"),this.setCss(t,"left","0px"),this.getLocation(e),$(".js-drag-bar-mask").css("width","0px"),$(".js-drag-bar-tip").removeClass("hidden")}},{key:"getCss",value:function(e,t){return e.currentStyle?e.currentStyle[t]:document.defaultView.getComputedStyle(e,!1)[t]}},{key:"setCss",value:function(e,t,a){e.style[t]=a}},{key:"_getToken",value:function(e,t){var a={token:e,captcha:t};return e=(0,d.default)(a),[].concat((0,s.default)((0,y.strToBase64)(e))).reverse().join("")}}]),t}(_.default);t.default=A},dfa37eb698c113f70efb:function(e,t,a){"use strict";var r=a("a0ce7130a92293994282"),n=a("d30516674aade65150d3"),s=a("68be1979658d3a49fbce"),o=a("be5ff68e5fc2b36ab3fd"),d=a("7bbcd029dba3160182ef"),i=a("10f5bc3e6ad5971b57b0"),c=a("5a1b42cd4752706663d8"),u=a("a5b03ec781f71e8d0bed");n(n.S+n.F*!a("9192d99c20a30ab204d7")(function(e){Array.from(e)}),"Array",{from:function(e){var t,a,n,f,l=s(e),h="function"==typeof this?this:Array,g=arguments.length,m=g>1?arguments[1]:void 0,v=void 0!==m,b=0,p=u(l);if(v&&(m=r(m,g>2?arguments[2]:void 0,2)),void 0==p||h==Array&&d(p))for(t=i(l.length),a=new h(t);t>b;b++)c(a,b,v?m(l[b],b):l[b]);else for(f=p.call(l),a=new h;!(n=f.next()).done;b++)c(a,b,v?o(f,m,[n.value,b],!0):n.value);return a.length=b,a}})}},["8fe9b6e117bbb964d58b"]);