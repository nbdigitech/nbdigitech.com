var socialWarfarePlugin=socialWarfarePlugin||{};!function(a,b){var c,d=a.socialWarfarePlugin;d.throttle=c=function(a,c,e,f){function g(){function d(){i=+new Date,e.apply(j,l)}function g(){h=b}var j=this,k=+new Date-i,l=arguments;f&&!h&&d(),h&&clearTimeout(h),f===b&&k>a?d():!0!==c&&(h=setTimeout(f?g:d,f===b?a-k:a))}var h,i=0;return"boolean"!=typeof c&&(f=e,e=c,c=b),d.guid&&(g.guid=e.guid=e.guid||d.guid++),g},d.debounce=function(a,d,e){return e===b?c(a,d,!1):c(a,e,!1!==d)}}(this),function(a,b,c){"use strict";function d(a){return parseInt(a,10)}function e(c){var d=b.Event(c);b(a).trigger(d)}function f(){b(".nc_socialPanel:not(.nc_socialPanelSide) .nc_tweetContainer:not(.swp_nohover) .iconFiller").removeAttr("style"),b(".nc_socialPanel:not(.nc_socialPanelSide) .nc_tweetContainer:not(.swp_nohover)").removeAttr("style")}function g(){b(".nc_wrapper").length&&b(".nc_wrapper").remove();var a=b(".nc_socialPanel").not('[data-float="float_ignore"]').first(),c=(b(".nc_socialPanel").index(a),a.attr("data-float")),d=a.attr("data-align");if(c){var e=b(".nc_socialPanel").attr("data-floatColor");b('<div class="nc_wrapper" style="background-color:'+e+'"></div>').appendTo("body");var f=a.attr("data-float");a.clone().appendTo(".nc_wrapper"),b(".nc_wrapper").hide().addClass("floatLeft"==f?"floatBottom":f);var g=a.outerWidth(!0),h=a.offset();b(".nc_socialPanel").last().addClass("nc_floater").css({width:g,left:"center"==d?0:h.left}),b(".nc_socialPanel .swp_count").css({transition:"padding .1s linear"}),b(".nc_socialPanel").eq(0).addClass("swp_one"),b(".nc_socialPanel").eq(2).addClass("swp_two"),b(".nc_socialPanel").eq(1).addClass("swp_three")}}function h(){var c=b(".nc_socialPanel"),d=c.not('[data-float="float_ignore"]').eq(0).attr("data-float"),f=b(a),g=f.height(),h=b(".nc_wrapper"),i=b(".nc_socialPanelSide").filter(":not(.mobile)"),j=(b(".nc_socialPanel").attr("data-position"),i.attr("data-screen-width")),k=c.eq(0).offset(),l=f.scrollTop();b(a).scrollTop();void 0===a.swpOffsets&&(a.swpOffsets={});var m=!1;if("floatLeft"==d){var n=b(".nc_socialPanelSide").attr("data-mobileFloat");b(".nc_socialPanel").not(".nc_socialPanelSide").length?(b(".nc_socialPanel").not(".nc_socialPanelSide, .nc_floater").each(function(){var a=b(this).offset(),c=b(this).height();a.top+c>l&&a.top<l+g&&(m=!0)}),k.left<100||b(a).width()<j?(m=!0,"bottom"==n&&(d="floatBottom")):m||(m=!1)):b(a).width()>j?m=!1:(m=!0,"bottom"==n&&(d="floatBottom"));var o=i.attr("data-transition");"slide"==o?1==m?i.css({left:"-100px"},200):i.css({left:"5px"}):"fade"==o&&(1==m?i.fadeOut(200):i.fadeIn(200))}if("floatBottom"==d||"floatTop"==d)if(m=!1,b(".nc_socialPanel").not(".nc_socialPanelSide, .nc_floater").each(function(){var a=b(this).offset(),c=b(this).height();a.top+c>l&&a.top<l+g&&(m=!0)}),m)h.hide(),"floatBottom"==d?b("body").animate({"padding-bottom":a.bodyPaddingBottom+"px"},0):"floatTop"==d&&b("body").animate({"padding-top":a.bodyPaddingTop+"px"},0);else{var p,q;h.show(),e("floating_bar_revealed"),"floatBottom"==d?(p=a.bodyPaddingBottom+50,b("body").animate({"padding-bottom":p+"px"},0)):"floatTop"==d&&(q=b(".nc_socialPanel").not(".nc_socialPanelSide, .nc_wrapper .nc_socialPanel").first().offset(),q.top>l+g&&(p=a.bodyPaddingTop+50,b("body").animate({"padding-top":p+"px"},0)))}}function i(){0!==b(".nc_socialPanel").length&&(g(),l.activateHoverStates(),k(),b(a).scrollTop(),b(a).scroll(l.throttle(50,function(){h()})),b(a).trigger("scroll"),b(".nc_socialPanel").css({opacity:1}))}function j(){var c={wrap:'<div class="sw-pinit" />',pageURL:document.URL},d=b.extend(c,d);b(".swp-content-locator").parent().find("img").each(function(){var c=b(this);if(!(c.outerHeight()<swpPinIt.minHeight||c.outerWidth()<swpPinIt.minWidth)){var e=!1;if(c.data("media")?e=c.data("media"):b(this).attr("data-lazy-src")?e=b(this).attr("data-lazy-src"):c[0].src&&(e=c[0].src),!1!==e&&!c.hasClass("no_pin")){var f="";c.attr("title")?f=c.attr("title"):c.attr("alt")&&(f=c.attr("alt"));var g="http://pinterest.com/pin/create/bookmarklet/?media="+encodeURI(e)+"&url="+encodeURI(d.pageURL)+"&is_video=false&description="+encodeURIComponent(f),h=c.attr("class"),i=c.attr("style");c.removeClass().attr("style","").wrap(d.wrap),c.after('<a href="'+g+'" class="sw-pinit-button sw-pinit-'+swpPinIt.vLocation+" sw-pinit-"+swpPinIt.hLocation+'">Save</a>'),c.parent(".sw-pinit").addClass(h).attr("style",i),b(".sw-pinit .sw-pinit-button").on("click",function(){if(a.open(b(this).attr("href"),"Pinterest","width=632,height=253,status=0,toolbar=0,menubar=0,location=1,scrollbars=1"),"function"==typeof ga&&!0===swpClickTracking){console.log("pin_image Button Clicked"),ga("send","event","social_media","swp_pin_image_share")}return!1})}}})}function k(){b(".nc_tweet, a.swp_CTT").off("click"),b(".nc_tweet, a.swp_CTT").on("click",function(c){if(b(this).hasClass("noPop"))return!1;if(console.log(b(this)),b(this).attr("data-link")){c.preventDefault?c.preventDefault():c.returnValue=!1;var d=b(this).attr("data-link");console.log(d);var e,f;if(d=d.replace("’","'"),b(this).hasClass("pinterest")||b(this).hasClass("buffer_link")||b(this).hasClass("flipboard")?(e=550,f=775):(e=270,f=500),a.open(d,"_blank","height="+e+",width="+f),"function"==typeof ga&&!0===swpClickTracking){if(b(this).hasClass("nc_tweet"))var g=b(this).parents(".nc_tweetContainer").attr("data-network");else if(b(this).hasClass("swp_CTT"))var g="ctt";console.log(g+" Button Clicked"),ga("send","event","social_media","swp_"+g+"_share")}return!1}})}var l=a.socialWarfarePlugin,m={};socialWarfarePlugin.fetchShares=function(){b.when(b.get("https://graph.facebook.com/?id="+swp_post_url),b.get("https://graph.facebook.com/?id="+swp_post_url+"&fields=og_object{likes.summary(true),comments.summary(true)}"),swp_post_recovery_url?b.get("https://graph.facebook.com/?id="+swp_post_recovery_url):"",swp_post_recovery_url?b.get("https://graph.facebook.com/?id="+swp_post_recovery_url+"&fields=og_object{likes.summary(true),comments.summary(true)}"):"").then(function(a,c,e,f){if(void 0!==a[0].share&&void 0!==c[0].og_object){var g=d(a[0].share.share_count),h=d(c[0].og_object.likes.summary.total_count),i=d(c[0].og_object.comments.summary.total_count),j=g+h+i;if(swp_post_recovery_url){if(void 0!==e[0].share)var k=d(e[0].share.share_count);else var k=0;if(void 0!==f[0].og_object)var l=d(f[0].og_object.likes.summary.total_count),n=d(f[0].og_object.comments.summary.total_count);else var l=0,n=0;var o=k+l+n;j!==o&&(j+=o)}m={action:"swp_facebook_shares_update",post_id:swp_post_id,activity:j},b.post(swp_admin_ajax,m,function(a){console.log("Facebook Shares Response: "+a)})}})},l.activateHoverStates=function(){e("pre_activate_buttons"),b(".nc_socialPanel:not(.nc_socialPanelSide) .nc_tweetContainer:not(.swp_nohover)").on("mouseenter",function(){f();var a=b(this).find(".swp_share").outerWidth(),c=b(this).find("i.sw").outerWidth(),d=b(this).width(),e=1+(a+35)/d;b(this).find(".iconFiller").width(a+c+25+"px"),b(this).css({flex:e+" 1 0%"})}),b(".nc_socialPanel:not(.nc_socialPanelSide)").on("mouseleave",function(){f()})},b(a).on("load",function(){"undefined"!=typeof swpPinIt&&swpPinIt.enabled&&j()}),b(document).ready(function(){k(),i(),a.bodyPaddingTop=d(b("body").css("padding-top").replace("px","")),a.bodyPaddingBottom=d(b("body").css("padding-bottom").replace("px",""));var c=!1;if(b(".nc_socialPanel").hover(function(){c=!0},function(){c=!1}),b(a).resize(l.debounce(250,function(){b(".nc_socialPanel").length&&!1!==c||(a.swpAdjust=1,i())})),b(document.body).on("post-load",function(){i()}),0!==b(".nc_socialPanelSide").length){var e=b(".nc_socialPanelSide").height(),f=b(a).height(),g=d(f/2-e/2);setTimeout(function(){b(".nc_socialPanelSide").animate({top:g},0)},105)}swp_isMobile.phone&&b(".swp_whatsapp").addClass("mobile"),1===b(".swp-content-locator").parent().children().length&&b(".swp-content-locator").parent().hide()})}(this,jQuery),function(a){var b=/(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,c=/(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i,d=/(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i,e=new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)","i"),f=function(a,b){return a.test(b)},g=function(a){var g=a||navigator.userAgent,h=g.split("[FBAN");if(void 0!==h[1]&&(g=h[0]),h=g.split("Twitter"),void 0!==h[1]&&(g=h[0]),this.apple={phone:f(/iPhone/i,g),ipod:f(/iPod/i,g),tablet:!f(/iPhone/i,g)&&f(/iPad/i,g),device:f(/iPhone/i,g)||f(/iPod/i,g)||f(/iPad/i,g)},this.amazon={phone:f(c,g),tablet:!f(c,g)&&f(d,g),device:f(c,g)||f(d,g)},this.android={phone:f(c,g)||f(b,g),tablet:!f(c,g)&&!f(b,g)&&(f(d,g)||f(/Android/i,g)),device:f(c,g)||f(d,g)||f(b,g)||f(/Android/i,g)},this.windows={phone:f(/Windows Phone/i,g),tablet:f(/(?=.*\bWindows\b)(?=.*\bARM\b)/i,g),device:f(/Windows Phone/i,g)||f(/(?=.*\bWindows\b)(?=.*\bARM\b)/i,g)},this.other={blackberry:f(/BlackBerry/i,g),blackberry10:f(/BB10/i,g),opera:f(/Opera Mini/i,g),firefox:f(/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,g),chrome:f(/(CriOS|Chrome)(?=.*\bMobile\b)/i,g),device:f(/BlackBerry/i,g)||f(/BB10/i,g)||f(/Opera Mini/i,g)||f(/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,g)||f(/(CriOS|Chrome)(?=.*\bMobile\b)/i,g)},this.seven_inch=f(e,g),this.any=this.apple.device||this.android.device||this.windows.device||this.other.device||this.seven_inch,this.phone=this.apple.phone||this.android.phone||this.windows.phone,this.tablet=this.apple.tablet||this.android.tablet||this.windows.tablet,"undefined"==typeof window)return this},h=function(){var a=new g;return a.Class=g,a};"undefined"!=typeof module&&module.exports&&"undefined"==typeof window?module.exports=g:"undefined"!=typeof module&&module.exports&&"undefined"!=typeof window?module.exports=h():"function"==typeof define&&define.amd?define("swp_isMobile",[],a.swp_isMobile=h()):a.swp_isMobile=h()}(this);