/**handles:social_warfare_script**/
var socialWarfarePlugin=socialWarfarePlugin||{};!function(t,e){var o,i=t.socialWarfarePlugin;i.throttle=o=function(t,o,a,n){function s(){function i(){l=+new Date,a.apply(c,p)}function s(){r=e}var c=this,d=+new Date-l,p=arguments;n&&!r&&i(),r&&clearTimeout(r),n===e&&d>t?i():!0!==o&&(r=setTimeout(n?s:i,n===e?t-d:t))}var r,l=0;return"boolean"!=typeof o&&(n=a,a=o,o=e),i.guid&&(s.guid=a.guid=a.guid||i.guid++),s},i.debounce=function(t,i,a){return a===e?o(t,i,!1):o(t,a,!1!==i)}}(this),function(t,e,o){"use strict";function i(t){return parseInt(t,10)}function a(o){var i=e.Event(o);e(t).trigger(i)}function n(){e(".nc_socialPanel:not(.nc_socialPanelSide) .nc_tweetContainer:not(.swp_nohover) .iconFiller").removeAttr("style"),e(".nc_socialPanel:not(.nc_socialPanelSide) .nc_tweetContainer:not(.swp_nohover)").removeAttr("style")}function s(){e(".nc_wrapper").length&&e(".nc_wrapper").remove();var t=e(".nc_socialPanel").not('[data-float="float_ignore"]').first(),o=(e(".nc_socialPanel").index(t),t.attr("data-float")),i=t.attr("data-align");if(o){var a=e(".nc_socialPanel").attr("data-floatColor");e('<div class="nc_wrapper" style="background-color:'+a+'"></div>').appendTo("body");var n=t.attr("data-float");t.clone().appendTo(".nc_wrapper"),e(".nc_wrapper").hide().addClass("floatLeft"==n?"floatBottom":n);var s=t.outerWidth(!0),r=t.offset();e(".nc_socialPanel").last().addClass("nc_floater").css({width:s,left:"center"==i?0:r.left}),e(".nc_socialPanel .swp_count").css({transition:"padding .1s linear"}),e(".nc_socialPanel").eq(0).addClass("swp_one"),e(".nc_socialPanel").eq(2).addClass("swp_two"),e(".nc_socialPanel").eq(1).addClass("swp_three")}}function r(){var o=e(".nc_socialPanel"),i=o.not('[data-float="float_ignore"]').eq(0).attr("data-float"),n=e(t),s=n.height(),r=e(".nc_wrapper"),l=e(".nc_socialPanelSide").filter(":not(.mobile)"),c=(e(".nc_socialPanel").attr("data-position"),l.attr("data-screen-width")),d=o.eq(0).offset(),p=n.scrollTop();e(t).scrollTop(),void 0===t.swpOffsets&&(t.swpOffsets={});var f=!1;if("floatLeft"==i){var h=e(".nc_socialPanelSide").attr("data-mobileFloat");e(".nc_socialPanel").not(".nc_socialPanelSide").length?(e(".nc_socialPanel").not(".nc_socialPanelSide, .nc_floater").each(function(){var t=e(this).offset(),o=e(this).height();t.top+o>p&&t.top<p+s&&(f=!0)}),d.left<100||e(t).width()<c?(f=!0,"bottom"==h&&(i="floatBottom")):f||(f=!1)):e(t).width()>c?f=!1:(f=!0,"bottom"==h&&(i="floatBottom"));var u=l.attr("data-transition");"slide"==u?1==f?l.css({left:"-100px"},200):l.css({left:"5px"}):"fade"==u&&(1==f?l.fadeOut(200):l.fadeIn(200))}if("floatBottom"==i||"floatTop"==i)if(f=!1,e(".nc_socialPanel").not(".nc_socialPanelSide, .nc_floater").each(function(){var t=e(this).offset(),o=e(this).height();t.top+o>p&&t.top<p+s&&(f=!0)}),f)r.hide(),"floatBottom"==i?e("body").animate({"padding-bottom":t.bodyPaddingBottom+"px"},0):"floatTop"==i&&e("body").animate({"padding-top":t.bodyPaddingTop+"px"},0);else{var _,b;r.show(),a("floating_bar_revealed"),"floatBottom"==i?(_=t.bodyPaddingBottom+50,e("body").animate({"padding-bottom":_+"px"},0)):"floatTop"==i&&(b=e(".nc_socialPanel").not(".nc_socialPanelSide, .nc_wrapper .nc_socialPanel").first().offset(),b.top>p+s&&(_=t.bodyPaddingTop+50,e("body").animate({"padding-top":_+"px"},0)))}}function l(){0!==e(".nc_socialPanel").length&&(s(),p.activateHoverStates(),d(),e(t).scrollTop(),e(t).scroll(p.throttle(50,function(){r()})),e(t).trigger("scroll"),e(".nc_socialPanel").css({opacity:1}))}function c(){var o={wrap:'<div class="sw-pinit" />',pageURL:document.URL},i=e.extend(o,i);e(".swp-content-locator").parent().find("img").each(function(){var o=e(this);if(!(o.outerHeight()<swpPinIt.minHeight||o.outerWidth()<swpPinIt.minWidth)){var a=!1;if(o.data("media")?a=o.data("media"):e(this).attr("data-lazy-src")?a=e(this).attr("data-lazy-src"):o[0].src&&(a=o[0].src),!1!==a&&!o.hasClass("no_pin")){var n="";o.attr("title")?n=o.attr("title"):o.attr("alt")&&(n=o.attr("alt"));var s="http://pinterest.com/pin/create/bookmarklet/?media="+encodeURI(a)+"&url="+encodeURI(i.pageURL)+"&is_video=false&description="+encodeURIComponent(n),r=o.attr("class"),l=o.attr("style");o.removeClass().attr("style","").wrap(i.wrap),o.after('<a href="'+s+'" class="sw-pinit-button sw-pinit-'+swpPinIt.vLocation+" sw-pinit-"+swpPinIt.hLocation+'">Save</a>'),o.parent(".sw-pinit").addClass(r).attr("style",l),e(".sw-pinit .sw-pinit-button").on("click",function(){return t.open(e(this).attr("href"),"Pinterest","width=632,height=253,status=0,toolbar=0,menubar=0,location=1,scrollbars=1"),"function"==typeof ga&&!0===swpClickTracking&&(console.log("pin_image Button Clicked"),ga("send","event","social_media","swp_pin_image_share")),!1})}}})}function d(){e(".nc_tweet, a.swp_CTT").off("click"),e(".nc_tweet, a.swp_CTT").on("click",function(o){if(e(this).hasClass("noPop"))return!1;if(console.log(e(this)),e(this).attr("data-link")){o.preventDefault?o.preventDefault():o.returnValue=!1;var i=e(this).attr("data-link");console.log(i);var a,n;if(i=i.replace("’","'"),e(this).hasClass("pinterest")||e(this).hasClass("buffer_link")||e(this).hasClass("flipboard")?(a=550,n=775):(a=270,n=500),t.open(i,"_blank","height="+a+",width="+n),"function"==typeof ga&&!0===swpClickTracking){if(e(this).hasClass("nc_tweet"))var s=e(this).parents(".nc_tweetContainer").attr("data-network");else if(e(this).hasClass("swp_CTT"))var s="ctt";console.log(s+" Button Clicked"),ga("send","event","social_media","swp_"+s+"_share")}return!1}})}var p=t.socialWarfarePlugin,f={};socialWarfarePlugin.fetchShares=function(){e.when(e.get("https://graph.facebook.com/?id="+swp_post_url),e.get("https://graph.facebook.com/?id="+swp_post_url+"&fields=og_object{likes.summary(true),comments.summary(true)}"),swp_post_recovery_url?e.get("https://graph.facebook.com/?id="+swp_post_recovery_url):"",swp_post_recovery_url?e.get("https://graph.facebook.com/?id="+swp_post_recovery_url+"&fields=og_object{likes.summary(true),comments.summary(true)}"):"").then(function(t,o,a,n){if(void 0!==t[0].share&&void 0!==o[0].og_object){var s=i(t[0].share.share_count),r=i(o[0].og_object.likes.summary.total_count),l=i(o[0].og_object.comments.summary.total_count),c=s+r+l;if(swp_post_recovery_url){if(void 0!==a[0].share)var d=i(a[0].share.share_count);else var d=0;if(void 0!==n[0].og_object)var p=i(n[0].og_object.likes.summary.total_count),h=i(n[0].og_object.comments.summary.total_count);else var p=0,h=0;var u=d+p+h;c!==u&&(c+=u)}f={action:"swp_facebook_shares_update",post_id:swp_post_id,activity:c},e.post(swp_admin_ajax,f,function(t){console.log("Facebook Shares Response: "+t)})}})},p.activateHoverStates=function(){a("pre_activate_buttons"),e(".nc_socialPanel:not(.nc_socialPanelSide) .nc_tweetContainer:not(.swp_nohover)").on("mouseenter",function(){n();var t=e(this).find(".swp_share").outerWidth(),o=e(this).find("i.sw").outerWidth(),i=e(this).width(),a=1+(t+35)/i;e(this).find(".iconFiller").width(t+o+25+"px"),e(this).css({flex:a+" 1 0%"})}),e(".nc_socialPanel:not(.nc_socialPanelSide)").on("mouseleave",function(){n()})},e(t).on("load",function(){"undefined"!=typeof swpPinIt&&swpPinIt.enabled&&c()}),e(document).ready(function(){d(),l(),t.bodyPaddingTop=i(e("body").css("padding-top").replace("px","")),t.bodyPaddingBottom=i(e("body").css("padding-bottom").replace("px",""));var o=!1;if(e(".nc_socialPanel").hover(function(){o=!0},function(){o=!1}),e(t).resize(p.debounce(250,function(){e(".nc_socialPanel").length&&!1!==o||(t.swpAdjust=1,l())})),e(document.body).on("post-load",function(){l()}),0!==e(".nc_socialPanelSide").length){var a=e(".nc_socialPanelSide").height(),n=e(t).height(),s=i(n/2-a/2);setTimeout(function(){e(".nc_socialPanelSide").animate({top:s},0)},105)}swp_isMobile.phone&&e(".swp_whatsapp").addClass("mobile"),1===e(".swp-content-locator").parent().children().length&&e(".swp-content-locator").parent().hide()})}(this,jQuery),function(t){var e=/(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,o=/(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i,i=/(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i,a=new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)","i"),n=function(t,e){return t.test(e)},s=function(t){var s=t||navigator.userAgent,r=s.split("[FBAN");if(void 0!==r[1]&&(s=r[0]),r=s.split("Twitter"),void 0!==r[1]&&(s=r[0]),this.apple={phone:n(/iPhone/i,s),ipod:n(/iPod/i,s),tablet:!n(/iPhone/i,s)&&n(/iPad/i,s),device:n(/iPhone/i,s)||n(/iPod/i,s)||n(/iPad/i,s)},this.amazon={phone:n(o,s),tablet:!n(o,s)&&n(i,s),device:n(o,s)||n(i,s)},this.android={phone:n(o,s)||n(e,s),tablet:!n(o,s)&&!n(e,s)&&(n(i,s)||n(/Android/i,s)),device:n(o,s)||n(i,s)||n(e,s)||n(/Android/i,s)},this.windows={phone:n(/Windows Phone/i,s),tablet:n(/(?=.*\bWindows\b)(?=.*\bARM\b)/i,s),device:n(/Windows Phone/i,s)||n(/(?=.*\bWindows\b)(?=.*\bARM\b)/i,s)},this.other={blackberry:n(/BlackBerry/i,s),blackberry10:n(/BB10/i,s),opera:n(/Opera Mini/i,s),firefox:n(/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,s),chrome:n(/(CriOS|Chrome)(?=.*\bMobile\b)/i,s),device:n(/BlackBerry/i,s)||n(/BB10/i,s)||n(/Opera Mini/i,s)||n(/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,s)||n(/(CriOS|Chrome)(?=.*\bMobile\b)/i,s)},this.seven_inch=n(a,s),this.any=this.apple.device||this.android.device||this.windows.device||this.other.device||this.seven_inch,this.phone=this.apple.phone||this.android.phone||this.windows.phone,this.tablet=this.apple.tablet||this.android.tablet||this.windows.tablet,"undefined"==typeof window)return this},r=function(){var t=new s;return t.Class=s,t};"undefined"!=typeof module&&module.exports&&"undefined"==typeof window?module.exports=s:"undefined"!=typeof module&&module.exports&&"undefined"!=typeof window?module.exports=r():"function"==typeof define&&define.amd?define("swp_isMobile",[],t.swp_isMobile=r()):t.swp_isMobile=r()}(this);