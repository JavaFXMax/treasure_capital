StackExchange.postValidation=function(){function e(e,t,n,i){var a=e.find('input[type="submit"]:visible'),r=a.length&&a.is(":enabled");r&&a.attr("disabled",!0),o(e,i),s(e,t,n,i),l(e),u(e),d(e);var f=function(){1!=t||e.find(E).length?(c(e,i),r&&a.attr("disabled",!1)):setTimeout(f,250)};f()}function t(t,i,o,s,c){e(t,i,s,o);var l,u=function(e){if(e.success)if(c)c(e);else{var n=window.location.href.split("#")[0],a=e.redirectTo.split("#")[0];0==a.indexOf("/")&&(a=window.location.protocol+"//"+window.location.hostname+a),l=!0,window.location=e.redirectTo,n.toLowerCase()==a.toLowerCase()&&window.location.reload(!0)}else e.captchaHtml?e.nocaptcha?StackExchange.nocaptcha.init(e.captchaHtml,u):StackExchange.captcha.init(e.captchaHtml,u):e.errors?(t.find("input[name=priorAttemptCount]").val(function(e,t){return(+t+1||0).toString()}),h(e.errors,t,i,o,e.warnings)):t.find('input[type="submit"]:visible').parent().showErrorMessage(e.message)};t.submit(function(){if(t.find("#answer-from-ask").is(":checked"))return!0;var e=t.find(C);if("[Edit removed during grace period]"==$.trim(e.val()))return m(e,["Comment reserved for system use. Please use an appropriate comment."],f()),!1;r(),StackExchange.navPrevention&&StackExchange.navPrevention.stop();var i=t.find('input[type="submit"]:visible');if(i.parent().addSpinner(),StackExchange.helpers.disableSubmitButton(t),StackExchange.options.site.enableNewTagCreationWarning){var s=t.find(E).parent().find("input#tagnames"),c=s.prop("defaultValue");if(s.val()!==c)return $.ajax({"type":"GET","url":"/posts/new-tags-warning","dataType":"json","data":{"tags":s.val()},"success":function(e){e.showWarning?i.loadPopup({"html":e.html,"dontShow":!0,"prepend":!0,"loaded":function(e){n(e,t,l,o,u)}}):a(t,o,l,u)}}),!1}return setTimeout(function(){a(t,o,l,u)},0),!1})}function n(e,t,n,r,o){e.bind("popupClose",function(){i(t,n)}),e.find(".submit-post").click(function(i){return StackExchange.helpers.closePopups(e),a(t,r,n,o),i.preventDefault(),!1}),e.show()}function i(e,t){StackExchange.helpers.removeSpinner(),t||StackExchange.helpers.enableSubmitButton(e)}function a(e,t,n,a){$.ajax({"type":"POST","dataType":"json","data":e.serialize(),"url":e.attr("action"),"success":a,"error":function(){var n;switch(t){case"question":n="An error occurred submitting the question.";break;case"answer":n="An error occurred submitting the answer.";break;case"edit":n="An error occurred submitting the edit.";break;case"tags":n="An error occurred submitting the tags.";break;case"post":default:n="An error occurred submitting the post."}e.find('input[type="submit"]:visible').parent().showErrorMessage(n)},"complete":function(){i(e,n)}})}function r(){for(var e=0;e<_.length;e++)clearTimeout(_[e]);_=[]}function o(e,t){var n=e.find(y);n.length&&n.blur(function(){_.push(setTimeout(function(){var i=n.val(),a=$.trim(i);if(0==a.length)return w(e,n),void 0;var r=n.data("min-length");if(r&&a.length<r)return m(n,[function(e){return 1==e.minLength?"Title must be at least "+e.minLength+" character.":"Title must be at least "+e.minLength+" characters."}({"minLength":r})],f()),void 0;var o=n.data("max-length");return o&&a.length>o?(m(n,[function(e){return 1==e.maxLength?"Title cannot be longer than "+e.maxLength+" character.":"Title cannot be longer than "+e.maxLength+" characters."}({"maxLength":o})],f()),void 0):($.ajax({"type":"POST","url":"/posts/validate-title","data":{"title":i},"success":function(i){i.success?w(e,n):m(n,i.errors.Title,f()),"edit"!=t&&g(e,n,i.warnings.Title)},"error":function(){w(e,n)}}),void 0)},q))})}function s(e,t,n,i){var a=e.find(S);a.length&&a.blur(function(){_.push(setTimeout(function(){var r=a.val(),o=$.trim(r);if(0==o.length)return w(e,a),void 0;if(5==t){var s=a.data("min-length");return s&&o.length<s?m(a,[function(e){return"Wiki Body must be at least "+e.minLength+" characters. You entered "+e.actual+"."}({"minLength":s,"actual":o.length})],f()):w(e,a),void 0}(1==t||2==t)&&$.ajax({"type":"POST","url":"/posts/validate-body","data":{"body":r,"oldBody":a.prop("defaultValue"),"isQuestion":1==t,"isSuggestedEdit":n},"success":function(t){t.success?w(e,a):m(a,t.errors.Body,f()),"edit"!=i&&g(e,a,t.warnings.Body)},"error":function(){w(e,a)}})},q))})}function c(e,t){var n=e.find(E);if(n.length){var i=n.parent().find("input#tagnames");i.blur(function(){_.push(setTimeout(function(){var a=i.val(),r=$.trim(a);return 0==r.length?(w(e,n),void 0):($.ajax({"type":"POST","url":"/posts/validate-tags","data":{"tags":a,"oldTags":i.prop("defaultValue")},"success":function(i){if(i.success?w(e,n):m(n,i.errors.Tags,f()),"edit"!=t&&(g(e,n,i.warnings.Tags),i.source&&i.source.Tags&&i.source.Tags.length)){var a=$("#post-form input[name='warntags']");a&&StackExchange.using("gps",function(){var e=a.val()||"";$.each(i.source.Tags,function(t,n){n&&!a.data("tag-"+n)&&(a.data("tag-"+n,n),e=e.length?e+" "+n:n,StackExchange.gps.track("tag_warning.show",{"tag":n},!0))}),a.val(e),StackExchange.gps.sendPending()})}},"error":function(){w(e,n)}}),void 0)},q))})}}function l(e){var t=e.find(C);t.length&&t.blur(function(){_.push(setTimeout(function(){var n=t.val(),i=$.trim(n);if(0==i.length)return w(e,t),void 0;var a=t.data("min-length");if(a&&i.length<a)return m(t,[function(e){return 1==e.minLength?"Your edit summary must be at least "+e.minLength+" character.":"Your edit summary must be at least "+e.minLength+" characters."}({"minLength":a})],f()),void 0;var r=t.data("max-length");return r&&i.length>r?(m(t,[function(e){return 1==e.maxLength?"Your edit summary cannot be longer than "+e.maxLength+" character.":"Your edit summary cannot be longer than "+e.maxLength+" characters."}({"maxLength":r})],f()),void 0):(w(e,t),void 0)},q))})}function u(e){var t=e.find(T);t.length&&t.blur(function(){_.push(setTimeout(function(){var n=t.val(),i=$.trim(n);if(0==i.length)return w(e,t),void 0;var a=t.data("min-length");if(a&&i.length<a)return m(t,[function(e){return"Wiki Excerpt must be at least "+e.minLength+" characters; you entered "+e.actual+"."}({"minLength":a,"actual":i.length})],f()),void 0;var r=t.data("max-length");return r&&i.length>r?(m(t,[function(e){return"Wiki Excerpt cannot be longer than "+e.maxLength+" characters; you entered "+e.actual+"."}({"maxLength":r,"actual":i.length})],f()),void 0):(w(e,t),void 0)},q))})}function d(e){var t=e.find(I);t.length&&t.blur(function(){_.push(setTimeout(function(){var n=t.val(),i=$.trim(n);return 0==i.length?(w(e,t),void 0):/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,20}$/i.test(n)?(w(e,t),void 0):(m(t,["This email does not appear to be valid."],p()),void 0)},q))})}function f(){var e=$("#sidebar, .sidebar").first().width()||270;return{"position":{"my":"left top","at":"right center"},"css":{"max-width":e,"min-width":e},"closeOthers":!1}}function p(){var e=$("#sidebar, .sidebar").first().width()||270;return{"position":{"my":"left top","at":"right center"},"css":{"min-width":e},"closeOthers":!1}}function h(e,t,n,i,a){if(e){var r=function(){var n=0,r=t.find(E),o=t.find(y),s=t.find(S);m(o,e.Title,f())?n++:w(t,o),a&&g(t,o,a.Title),m(s,e.Body,f())?n++:w(t,s),a&&g(t,s,a.Body),m(r,e.Tags,f())?n++:w(t,r),a&&g(t,r,a.Tags),m(t.find(C),e.EditComment,f())?n++:w(t,t.find(C)),m(t.find(T),e.Excerpt,f())?n++:w(t,t.find(T)),m(t.find(I),e.Email,p())?n++:w(t,t.find(I));var c=t.find(".general-error"),l=e.General&&e.General.length>0;if(l||n>0){if(!c.length){var u=t.find('input[type="submit"]:visible');u.before('<div class="general-error-container"><div class="general-error"></div><br class="cbt" /></div>'),c=t.find(".general-error")}if(l)m(c,e.General,{"position":"inline","css":{"float":"left","margin-bottom":"10px"},"closeOthers":!1,"dismissable":!1});else{w(t,c);var d;switch(i){case"question":d=function(e){return 1==e.specificErrorCount?"Your question couldn't be submitted. Please see the error above.":"Your question couldn't be submitted. Please see the errors above."}({"specificErrorCount":n});break;case"answer":d=function(e){return 1==e.specificErrorCount?"Your answer couldn't be submitted. Please see the error above.":"Your answer couldn't be submitted. Please see the errors above."}({"specificErrorCount":n});break;case"edit":d=function(e){return 1==e.specificErrorCount?"Your edit couldn't be submitted. Please see the error above.":"Your edit couldn't be submitted. Please see the errors above."}({"specificErrorCount":n});break;case"tags":d=function(e){return 1==e.specificErrorCount?"Your tags couldn't be submitted. Please see the error above.":"Your tags couldn't be submitted. Please see the errors above."}({"specificErrorCount":n});break;case"post":default:d=function(e){return 1==e.specificErrorCount?"Your post couldn't be submitted. Please see the error above.":"Your post couldn't be submitted. Please see the errors above."}({"specificErrorCount":n})}c.text(d)}}else t.find(".general-error-container").remove();var h;x()&&($("#sidebar").animate({"opacity":.4},500),h=setInterval(function(){x()||($("#sidebar").animate({"opacity":1},500),clearInterval(h))},500));var v;t.find(".validation-error").each(function(){var e=$(this).offset().top;(!v||v>e)&&(v=e)});var b=function(){for(var e=0;3>e;e++)t.find(".message").animate({"left":"+=5px"},100).animate({"left":"-=5px"},100)};if(v){var k=$(".review-bar").length;v=Math.max(0,v-(k?125:30)),$("html, body").animate({"scrollTop":v},b)}else b()},o=function(){1!=n||t.find(E).length?r():setTimeout(o,250)};o()}}function g(e,t,n){var i=f();if(i.type="warning",!n||0==n.length)return b(e,t),!1;var a=t.data("error-popup"),r=0;return a&&(r=a.height()+5),v(t,n,i,r)}function m(e,t,n){return n.type="error",v(e,t,n)}function v(e,t,n,i){var a,o=n.type;if(!(t&&0!=t.length&&e.length&&$("html").has(e).length))return!1;if(a=1==t.length?t[0]:"<ul><li>"+t.join("</li><li>")+"</li></ul>",a&&a.length>0){var s=e.data(o+"-popup");if(s&&s.is(":visible")){var c=e.data(o+"-message");if(c==a)return s.animateOffsetTop&&s.animateOffsetTop(i||0),!0;s.fadeOutAndRemove()}i>0&&(n.position.offsetTop=i);var l=StackExchange.helpers.showMessage(e,a,n);return l.find("a").attr("target","_blank"),l.click(r),e.addClass("validation-"+o).data(o+"-popup",l).data(o+"-message",a),!0}return!1}function b(e,t){k("warning",e,t)}function w(e,t){k("error",e,t)}function k(e,t,n){if(!n||0==n.length)return!1;var i=n.data(e+"-popup");return i&&i.is(":visible")&&i.fadeOutAndRemove(),n.removeClass("validation-"+e),n.removeData(e+"-popup"),n.removeData(e+"-message"),t.find(".validation-"+e).length||t.find(".general-"+e+"-container").remove(),!0}function x(){var e=!1,t=$("#sidebar, .sidebar").first();if(!t.length)return!1;var n=t.offset().left;return $(".message").each(function(){var t=$(this);return t.offset().left+t.outerWidth()>n?(e=!0,!1):void 0}),e}var y="input#title",S="textarea.wmd-input:first",E=".tag-editor",C="input[id^=edit-comment]",T="textarea#excerpt",I="input#m-address",_=[],q=250;return{"initOnBlur":e,"initOnBlurAndSubmit":t,"showErrorsAfterSubmission":h,"getSidebarPopupOptions":f}}();