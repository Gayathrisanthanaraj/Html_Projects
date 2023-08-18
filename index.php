
<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skoscore#  xsd: http://www.w3.org/2001/XMLSchema# ">
  <head>
    <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"NRJS-918b6ca4fcad0775dcc",applicationID:"828233294"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(){}function i(t,e,n,r){return function(){return s.recordSupportability("API/"+e+"/called"),o(t+e,[u.now()].concat(c(arguments)),n?null:this,r),n?void 0:this}}var o=t("handle"),a=t(10),c=t(11),f=t("ee").get("tracer"),u=t("loader"),s=t(4),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",v=l+"ixn-";a(p,function(t,e){d[e]=i(l,e,!0,"api")}),d.addPageAction=i(l,"addPageAction",!0),d.setCurrentRouteName=i(l,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(v+"tracer",[u.now(),t,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw f.emit("fn-err",[arguments,this,t],n),t}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(v,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),s.recordSupportability("API/noticeError/called"),o("err",[t,u.now(),!1,e])}},{}],2:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],3:[function(t,e,n){var r=!1;try{var i=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,i),window.removeEventListener("testPassive",null,i)}catch(o){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],4:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return o("storeMetric",n,null,"api"),n}function i(t,e){var n=[c,t,{name:t},e];return o("storeEventMetrics",n,null,"api"),n}var o=t("handle"),a="sm",c="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:c},recordSupportability:r,recordCustom:i}},{}],5:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(12);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],6:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],7:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?l("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&l("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(u&&u<r.startTime)return;var i=[r],o=a({});o&&i.push(o),l("lcp",i)}}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||l("cls",[t])})}function a(t){var e=navigator.connection||navigator.mozConnection||navigator.webkitConnection;if(e)return e.type&&(t["net-type"]=e.type),e.effectiveType&&(t["net-etype"]=e.effectiveType),e.rtt&&(t["net-rtt"]=e.rtt),e.downlink&&(t["net-dlink"]=e.downlink),t}function c(t){if(t instanceof y&&!w){var e=Math.round(t.timeStamp),n={type:t.type};a(n),e<=v.now()?n.fid=v.now()-e:e>v.offset&&e<=Date.now()?(e-=v.offset,n.fid=v.now()-e):e=v.now(),w=!0,l("timing",["fi",e,n])}}function f(t){"hidden"===t&&(u=v.now(),l("pageHide",[u]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var u,s,d,p,l=t("handle"),v=t("loader"),m=t(9),g=t(3),y=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(h){}d=new PerformanceObserver(i);try{d.observe({entryTypes:["largest-contentful-paint"]})}catch(h){}p=new PerformanceObserver(o);try{p.observe({type:"layout-shift",buffered:!0})}catch(h){}}if("addEventListener"in document){var w=!1,b=["click","keydown","mousedown","pointerdown","touchstart"];b.forEach(function(t){document.addEventListener(t,c,g(!1))})}m(f)}},{}],8:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}e.exports={agent:i,version:o,match:r}},{}],9:[function(t,e,n){function r(t){function e(){t(c&&document[c]?document[c]:document[o]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,i(!1))}var i=t(3);e.exports=r;var o,a,c;"undefined"!=typeof document.hidden?(o="hidden",a="visibilitychange",c="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",a="webkitvisibilitychange",c="webkitVisibilityState")},{}],10:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],11:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],12:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?u(t,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),f=m(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[w[n]];return p&&p.push([b,n,r,c]),c}}function o(t,e){h[t]=m(t).concat(e)}function v(t,e){var n=h[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return h[t]||[]}function g(t){return p[t]=p[t]||i(n)}function y(t,e){l.aborted||s(t,function(t,n){e=e||"feature",w[n]=e,e in d||(d[e]=[])})}var h={},w={},b={on:o,addEventListener:o,removeEventListener:v,emit:n,get:g,listeners:m,context:e,buffer:y,abort:c,aborted:!1};return b}function o(t){return u(t,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=t("gos"),s=t(10),d={},p={},l=e.exports=i();e.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!P++){var t=M.info=NREUM.info,e=g.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(O,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+M.offset],null,"api"),c("timing",["load",n]);var r=g.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=v+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===g.readyState&&o()}function o(){c("mark",["domContent",a()+M.offset],null,"api")}var a=t(5),c=t("handle"),f=t(10),u=t("ee"),s=t(8),d=t(6),p=t(2),l=t(3),v=p.getConfiguration("ssl")===!1?"http":"https",m=window,g=m.document,y="addEventListener",h="attachEvent",w=m.XMLHttpRequest,b=w&&w.prototype,E=!d(m.location);NREUM.o={ST:setTimeout,SI:m.setImmediate,CT:clearTimeout,XHR:w,REQ:m.Request,EV:m.Event,PR:m.Promise,MO:m.MutationObserver};var x=""+location,O={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1215.min.js"},T=w&&b&&b[y]&&!/CriOS/.test(navigator.userAgent),M=e.exports={offset:a.getLastTimestamp(),now:a,origin:x,features:{},xhrWrappable:T,userAgent:s,disabled:E};if(!E){t(1),t(7),g[y]?(g[y]("DOMContentLoaded",o,l(!1)),m[y]("load",r,l(!1))):(g[h]("onreadystatechange",i),m[h]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var P=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],t)}c(n+"start",[o,a,f],s,u);try{return p=e.apply(a,o)}catch(v){throw c(n+"err",[o,a,v],s,u),v}finally{c(n+"end",[o,a,p],s,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<e.length;u++)f=e[u],c=t[f],a(c)||(t[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!v||e){var c=v;v=!0;try{t.emit(n,r,o,e,a)}catch(f){i([f,n,r,o],t)}v=c}}return t||(t=s),n.inPlace=r,n.flag=p,n}function i(t,e){e||(e=s);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function c(t,e){var n=e(t);return n[p]=t,o(t,n,s),n}function f(t,e,n){var r=t[e];t[e]=c(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var s=t("ee"),d=t(11),p="nr@original",l=Object.prototype.hasOwnProperty,v=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=f,e.exports.argsToArray=u},{}]},{},["loader"]);</script>
<script src="https://cdn.cookielaw.org/consent/df287db6-4630-4290-b0bf-a9fb72d40742/OtAutoBlock.js"></script>
<script>function OptanonWrapper() { }</script>
<style>.async-hide { opacity: 0 !important}</style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;})(window,document.documentElement,'async-hide','dataLayer',4000,
{'OPT-5N322JK':true});</script>
<link rel="canonical" href="https://alumni.creighton.edu/">
<link rel="shortlink" href="https://alumni.creighton.edu/">
<meta name="description" content="At Creighton, we're defining our future while embracing a tradition more than 140 years in the making. Our Jesuit mission shapes our vision. But our alumni and friends &mdash; our one-of-a-kind community &mdash; YOU make that vision a reality. You ensure our students&rsquo; success.">
<meta name="facebook-domain-verification" content="1ijix2in4vful4ganbc2nqbdg82x7n">
<meta name="google-site-verification" content="N4WnmF3bwD9c17FrjqHKUl7w_lTHTxXuzU5blHxsjxY">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@CreightonAlumni">
<meta name="twitter:title" content="Homepage">
<meta name="twitter:site:id" content="38503308">
<meta name="twitter:url" content="https://alumni.creighton.edu/homepage">
<meta name="twitter:image" content="https://alumni.creighton.edusites/default/files/johns.jpg">
<meta name="Generator" content="Drupal 8 (https://www.drupal.org)">
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="application/ld+json">{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "CollegeOrUniversity",
            "name": "Creighton University",
            "url": "https://www.creighton.edu",
            "logo": {
                "@type": "ImageObject",
                "url": "https://alumni.creighton.edu/themes/custom/cu2019_grad/img/logo-creighton-grad.png"
            }
        },
        {
            "@type": "WebSite",
            "name": "Alumni and Friends",
            "url": "https://alumni.creighton.edu/"
        }
    ]
}</script>
<link rel="shortcut icon" href="themes/custom/cu2017/images/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="revision" href="https://alumni.creighton.edu/homepage">
<script src="sites/default/files/google_tag/google_tag.script.js?r9yz6q"></script>

    <title>Alumni and Friends</title>
    <link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/ajax-progress.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/align.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/autocomplete-loading.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/fieldgroup.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/container-inline.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/clearfix.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/details.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/hidden.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/item-list.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/js.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/nowrap.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/position-container.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/progress.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/reset-appearance.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/resize.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/sticky-header.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/system-status-counter.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/system-status-report-counters.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/system-status-report-general-info.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/tabledrag.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/tablesort.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/system/components/tree-child.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="modules/contrib/responsive_table_filter/css/responsive-table-filter.css?r9yz6q">
<link rel="stylesheet" media="all" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" media="all" href="modules/contrib/video_embed_field/css/video_embed_field.responsive-video.css?r9yz6q">
<link rel="stylesheet" media="all" href="corethemes/stable/css/views/views.module.css?r9yz6q">
<link rel="stylesheet" media="all" href="modules/contrib/anchor_link/css/anchor_link.css?r9yz6q">
<link rel="stylesheet" media="all" href="modules/contrib/ckeditor_indentblock/css/plugins/indentblock/ckeditor.indentblock.css?r9yz6q">
<link rel="stylesheet" media="all" href="modules/contrib/extlink/extlink.css?r9yz6q">
<link rel="stylesheet" media="all" href="modules/contrib/social_media_links/css/social_media_links.theme.css?r9yz6q">
<link rel="stylesheet" media="all" href="modules/contrib/paragraphs/css/paragraphs.unpublished.css?r9yz6q">
<link rel="stylesheet" media="all" href="//use.typekit.net/xlc7ymi.css">
<link rel="stylesheet" media="all" href="themes/custom/university_relations/assets/js/dist/app.css?r9yz6q">
<link rel="stylesheet" media="all" href="themes/custom/university_relations/assets/css/theme.css?r9yz6q">

    
<!--[if lte IE 8]>
<script src="core/assets/vendor/html5shiv/html5shiv.min.js?v=3.7.3"></script>
<![endif]-->
<script src="themes/custom/university_relations/assets/js/dist/modernizr.js?v=3.3.1"></script>
<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="df287db6-4630-4290-b0bf-a9fb72d40742"></script>
<script src="https://cuwebteam.blob.core.windows.net/cuwebteam-relative-links-dev/relative-links.js" type="text/javascript"></script>
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-5N322JK"></script>

  </head>
  <body id="body">
    <div class="skip-link" role="navigation">
      <a href="#main-menu" class="element-invisible element-focusable">Skip to main site navigation</a>
      <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
    </div>
    <noscript aria-hidden="true"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGCXHD" height="0" width="0" title="Google Tag Manager"></iframe></noscript>
      <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
    




<div class="page page--landing-page">
    <div class="views-element-container" id="block-views-block-header-alert-danger" role="complementary" aria-label="Creighton danger alert" data-block-plugin-id="views_block:header_alert-block_1">
  
    
      <div><div class="view view-header-alert view-id-header_alert view-display-id-block_1 js-view-dom-id-d166c9df6a79e15e2513a5bb1dbb9f0fae82ee5eae52f545732807f996d6ca2d">
  
    
              </div>
</div>

  </div>
<div class="views-element-container" id="block-views-block-header-alert-info" role="complementary" aria-label="Creighton information alert" data-block-plugin-id="views_block:header_alert-block_4">
  
    
      <div><div class="view view-header-alert view-id-header_alert view-display-id-block_4 js-view-dom-id-b8e3aae19c97bae64e7694465506e112e81af35e0fb17e1f7f6ebba43c793563">
  
    
              </div>
</div>

  </div>
<div class="views-element-container" id="block-views-block-header-alert-nodanger" role="complementary" aria-label="Creighton standard alert" data-block-plugin-id="views_block:header_alert-block_2">
  
    
      <div><div class="view view-header-alert view-id-header_alert view-display-id-block_2 js-view-dom-id-b453f9a4b50da0420735c708afc90ad278b7463808393a9c4de20f2f5567c80b">
  
    
              </div>
</div>

  </div>
<div class="views-element-container" id="block-views-block-header-alert-weather" role="complementary" aria-label="Creighton weather alert" data-block-plugin-id="views_block:header_alert-block_3">
  
    
      <div><div class="view view-header-alert view-id-header_alert view-display-id-block_3 js-view-dom-id-744b355d094bf07eda1a62ba86bc7809356d9c3657ad3ee4bd62b33bddab25e1">
  
    
              </div>
</div>

  </div>


  <header class="site-header">
    <div class="sticky-container">
      <div class="grid-container">
        <a class="site-header__logo" href="/">
          <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 24.1.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" class="creighton-alumni-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 277.5 55.7" style="enable-background:new 0 0 277.5 55.7;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#004999;}
	.st1{display:none;fill:#004999;}
	.st2{fill:none;stroke:#004999;stroke-miterlimit:10;}
</style>
<g class="alumni-and-friends">
	<path class="st0" d="M168,30.2h-4.2L163,32h-1.4l3.4-8.7h1.6l3.4,8.7h-1.4L168,30.2z M164.1,29.1h3.5l-1.8-4.6L164.1,29.1z"></path>
	<path class="st0" d="M171.1,23.4h1.2V32h-1.2V23.4z"></path>
	<path class="st0" d="M178.4,31.2c-0.5,0.5-1.3,1-2.2,1c-1.3,0-2-0.7-2-2v-4.4h1.2v4c0,1,0.5,1.4,1.3,1.4c0.7,0,1.4-0.4,1.7-0.9
		v-4.5h1.2V32h-1.2V31.2z"></path>
	<path class="st0" d="M189,27.9c0-0.7-0.3-1.2-1.1-1.2c-0.6,0-1.3,0.4-1.6,0.9V32h-1.2v-4.2c0-0.7-0.3-1.2-1.1-1.2
		c-0.6,0-1.2,0.5-1.5,0.9V32h-1.2v-6.3h1.2v0.9c0.3-0.4,1.1-1,2-1c0.9,0,1.5,0.5,1.7,1.2c0.4-0.6,1.2-1.2,2.1-1.2
		c1.2,0,1.8,0.6,1.8,1.9V32H189L189,27.9L189,27.9z"></path>
	<path class="st0" d="M196.3,28c0-1-0.5-1.4-1.3-1.4c-0.7,0-1.4,0.4-1.7,0.9V32h-1.2v-6.3h1.2v0.9c0.4-0.5,1.2-1,2.2-1
		c1.3,0,2,0.7,2,2V32h-1.2L196.3,28L196.3,28z"></path>
	<path class="st0" d="M199.1,24c0-0.4,0.4-0.7,0.8-0.7c0.4,0,0.8,0.3,0.8,0.7s-0.3,0.8-0.8,0.8C199.5,24.8,199.1,24.4,199.1,24z
		 M199.3,25.8h1.2V32h-1.2V25.8z"></path>
	<path class="st0" d="M209.6,31.4c-0.5,0.5-1.2,0.9-2.1,0.9c-1,0-2.2-0.7-2.2-2.1c0-1.4,1.1-2,2.2-2c0.9,0,1.6,0.3,2.1,0.8v-1
		c0-0.8-0.6-1.2-1.5-1.2c-0.7,0-1.3,0.3-1.9,0.8l-0.5-0.8c0.7-0.7,1.6-1,2.6-1c1.4,0,2.5,0.6,2.5,2.2V32h-1.2L209.6,31.4L209.6,31.4
		z M209.6,29.6c-0.4-0.5-1-0.7-1.6-0.7c-0.8,0-1.4,0.5-1.4,1.2s0.6,1.2,1.4,1.2c0.6,0,1.3-0.2,1.6-0.7V29.6z"></path>
	<path class="st0" d="M216.9,28c0-1-0.5-1.4-1.3-1.4c-0.7,0-1.4,0.4-1.7,0.9V32h-1.2v-6.3h1.2v0.9c0.4-0.5,1.2-1,2.2-1
		c1.3,0,2,0.7,2,2V32h-1.2L216.9,28L216.9,28z"></path>
	<path class="st0" d="M224.4,31.1c-0.5,0.6-1.2,1-2.1,1c-1.6,0-2.8-1.2-2.8-3.3c0-2,1.2-3.3,2.8-3.3c0.8,0,1.6,0.4,2.1,1.1v-3.3h1.2
		V32h-1.2V31.1z M224.4,27.6c-0.3-0.5-1-0.9-1.7-0.9c-1.2,0-1.9,1-1.9,2.3c0,1.3,0.7,2.2,1.9,2.2c0.7,0,1.4-0.4,1.7-0.9V27.6z"></path>
	<path class="st0" d="M230.8,23.4h5.8v1.1h-4.5V27h4.4v1.1h-4.4V32h-1.3V23.4z"></path>
	<path class="st0" d="M238,25.8h1.2v1c0.5-0.6,1.2-1.1,2.1-1.1v1.2c-0.1,0-0.2,0-0.4,0c-0.6,0-1.4,0.4-1.6,0.9V32H238L238,25.8
		L238,25.8z"></path>
	<path class="st0" d="M242.5,24c0-0.4,0.4-0.7,0.8-0.7c0.4,0,0.8,0.3,0.8,0.7s-0.3,0.8-0.8,0.8C242.8,24.8,242.5,24.4,242.5,24z
		 M242.6,25.8h1.2V32h-1.2V25.8z"></path>
	<path class="st0" d="M248.4,25.6c1.9,0,3.1,1.5,3.1,3.4v0.3h-5c0.1,1.1,0.9,2,2.1,2c0.7,0,1.4-0.3,1.9-0.7l0.6,0.8
		c-0.6,0.6-1.5,0.9-2.5,0.9c-1.9,0-3.2-1.3-3.2-3.3C245.3,27.1,246.6,25.6,248.4,25.6z M246.5,28.4h3.8c0-0.8-0.6-1.9-1.9-1.9
		C247.2,26.6,246.6,27.6,246.5,28.4z"></path>
	<path class="st0" d="M257.2,28c0-1-0.5-1.4-1.3-1.4c-0.7,0-1.4,0.4-1.7,0.9V32H253v-6.3h1.2v0.9c0.4-0.5,1.2-1,2.2-1
		c1.3,0,2,0.7,2,2V32h-1.2L257.2,28L257.2,28z"></path>
	<path class="st0" d="M264.7,31.1c-0.5,0.6-1.2,1-2,1c-1.6,0-2.8-1.2-2.8-3.3c0-2,1.2-3.3,2.8-3.3c0.8,0,1.5,0.4,2,1.1v-3.3h1.2V32
		h-1.2V31.1z M264.7,27.6c-0.3-0.5-1-0.9-1.7-0.9c-1.2,0-1.9,1-1.9,2.3c0,1.3,0.7,2.2,1.9,2.2c0.7,0,1.4-0.4,1.7-0.9V27.6z"></path>
	<path class="st0" d="M267.8,30.4c0.4,0.5,1.3,0.9,2.1,0.9c0.9,0,1.4-0.4,1.4-0.9c0-0.6-0.7-0.8-1.5-1c-1.1-0.2-2.3-0.5-2.3-1.9
		c0-1,0.9-1.9,2.4-1.9c1.1,0,1.9,0.4,2.4,0.9l-0.5,0.8c-0.4-0.4-1.1-0.8-1.9-0.8c-0.8,0-1.3,0.3-1.3,0.8c0,0.5,0.7,0.7,1.5,0.9
		c1.1,0.2,2.4,0.5,2.4,2c0,1.1-0.9,1.9-2.5,1.9c-1,0-2-0.3-2.6-1L267.8,30.4z"></path>
</g>
<g class="creighton-unniversity">
	<path class="st0" d="M14.4,5.9c2.4,0,4.6,0.8,5,1.3c0.2,0.3,0.4,1.6,0.4,3.9c0,0.2-0.1,0.5-0.3,0.5c-0.5,0-0.4-0.9-1.1-2
		c-1-1.8-2.3-2.7-4.3-2.7c-3.9,0-7,4.2-7,11.2c0,6.5,3.2,11.1,7,11.1c2.3,0,3.7-1.4,4.7-4.1c0.4-1,0.4-1.7,0.8-1.7
		c0.2,0,0.4,0.2,0.4,0.6c0,2.4,0,3.7-0.3,4.1c-0.6,0.9-2.7,2.1-5.6,2.1c-5.6,0-9.8-5.2-9.8-12.2C4.3,11.1,8.8,5.9,14.4,5.9z"></path>
	<path class="st0" d="M26.2,15.8c0,0.1,0.1,0.3,0.1,0.3c0,0,0.1,0,0.3-0.2l0.7-0.9c1-1.4,2.1-2.1,3.2-2.1c1.2,0,1.9,0.7,1.9,1.7
		c0,0.9-0.6,1.6-1.2,1.6c-1,0-1.4-1.4-2.5-1.4c-1.1,0-2.4,1.7-2.4,5.8v6c0,1.2,0.1,1.7,0.8,2c1.2,0.5,2,0,2,0.7
		c0,0.3-0.2,0.4-0.6,0.4c-0.6,0-1.8-0.2-3.3-0.2c-1,0-1.8,0.1-2.4,0.1c-0.4,0-0.5,0-0.5-0.4c0-0.5,0.4-0.3,1.2-0.6
		c0.6-0.2,0.7-0.8,0.7-2v-9.7c0-1.8-1.5-0.8-1.5-1.4c0-0.4,0.6-0.5,1.2-0.9c1.1-0.8,1.6-1.7,1.9-1.7c0.2,0,0.2,0.3,0.2,0.9
		L26.2,15.8L26.2,15.8z"></path>
	<path class="st0" d="M36.1,19.3c-0.6,0-0.7,0.3-0.7,1.5c0,4.9,2.4,7.7,5.7,7.7c3,0,4.1-2.3,4.4-2.3c0.2,0,0.2,0.1,0.2,0.3
		c0,1.1-2.2,3.8-5.8,3.8c-4,0-6.8-3.4-6.8-8.7c0-5.4,3.3-8.7,7.2-8.7c3.4,0,5.5,2.7,5.5,5.7c0,0.5-0.3,0.8-1.1,0.8H36.1z M43.5,16.8
		c0-1.6-1.5-3.3-3.4-3.3c-2.4,0-4.4,2.6-4.4,4.6c0,0.1,0.2,0.3,0.4,0.3h3C42.2,18.4,43.5,18.2,43.5,16.8z"></path>
	<path class="st0" d="M51.7,27.3c0,2,2,1.1,2,1.9c0,0.4-0.2,0.4-0.5,0.4c-0.3,0-1.2-0.1-2.5-0.1c-1.1,0-2,0.1-2.5,0.1
		c-0.4,0-0.6,0-0.6-0.4c0-0.8,2.2,0.1,2.2-1.9v-10c0-0.9-0.3-1.4-1.1-1.4c-0.4,0-0.7-0.1-0.7-0.4c0-0.5,0.7-0.6,1.3-1.1
		c1.4-0.8,2-1.5,2.3-1.5c0.3,0,0.3,0.2,0.3,0.7L51.7,27.3L51.7,27.3z M51.9,8.4c0,0.9-0.6,1.8-1.3,1.8c-0.7,0-1.3-0.8-1.3-1.8
		c0-1,0.6-1.8,1.3-1.8C51.3,6.6,51.9,7.4,51.9,8.4z"></path>
	<path class="st0" d="M67.4,14.2c0.1,0,0.3,0,0.5,0c0.6,0,0.7,0.2,0.7,1c0,0.4-0.1,0.5-0.6,0.5h-0.2L66,15.6c0.5,1.1,0.8,2,0.8,3.1
		c0,3.3-2.1,5.5-5.4,5.8c-2.6,0.2-3.4,1-3.4,1.5c0,0.4,0.6,1.2,2,1.2c0.7,0,1.4-0.1,2.2-0.1c4.1,0,6.1,1.5,6.1,4.4
		c0,3.3-3.3,6.1-7.8,6.1c-4,0-6.1-1.6-6.1-4c0-2.6,3.4-3.8,3.4-4.5c0-0.1-0.2-0.3-0.3-0.5l-1.3-1.6c-0.4-0.4-0.5-0.8-0.5-0.8
		c0-0.2,0.3-0.4,0.8-0.6l2.2-1.1c0.2-0.1,0.3-0.2,0.3-0.3c0-0.3-3.2-1.7-3.2-5.5c0-3.3,2.3-5.9,5.4-5.9c2.3,0,3.6,1.5,5,1.5
		c0.3,0,0.4,0,0.5,0L67.4,14.2z M58.1,29.9c-0.8,0.6-1.6,1.9-1.6,3c0,2.1,1.7,3.9,4.5,3.9c3.3,0,5.4-1.7,5.4-4.1
		c0-2.2-1.6-3.5-4.6-3.5C59.9,29.2,58.6,29.5,58.1,29.9z M57.9,18.7c0,3.1,1.4,5,3.4,5c2,0,3.3-2,3.3-5c0-3.1-1.3-5.1-3.3-5.1
		C59.4,13.6,57.9,15.5,57.9,18.7z"></path>
	<path class="st0" d="M73.6,15.4c0,0.3,0,0.4,0.1,0.4c0.2,0,0.6-0.8,1.5-1.7c1-0.9,1.9-1.3,3.2-1.3c2.7,0,4.6,2.2,4.6,5.4v9.1
		c0,2,1.9,1.1,1.9,1.9c0,0.3-0.1,0.4-0.6,0.4c-0.3,0-1.1-0.1-2.4-0.1c-1,0-1.8,0.1-2.3,0.1c-0.4,0-0.6,0-0.6-0.4
		c0-0.8,1.9,0.1,1.9-1.9V20c0-3.8-0.9-5.7-3.5-5.7c-2.8,0-3.9,2.2-3.9,6.3v6.7c0,2,1.9,1.1,1.9,1.9c0,0.3-0.1,0.4-0.5,0.4
		c-0.3,0-1.1-0.1-2.4-0.1c-1,0-1.8,0.1-2.3,0.1c-0.4,0-0.6,0-0.6-0.4c0-0.8,1.9,0.1,1.9-1.9V8c0-1.1-0.4-1.6-1.1-1.6
		c0,0-0.2,0-0.4,0c-0.1,0-0.3-0.2-0.3-0.3c0-0.5,0.7-0.5,1.5-0.7c1.2-0.4,1.9-1,2.1-1s0.2,0.3,0.2,0.8L73.6,15.4L73.6,15.4z"></path>
	<path class="st0" d="M90.2,12.9c0,0.5,0.1,0.6,0.5,0.6h2.7c0.4,0,0.5,0.1,0.5,0.5v0.1c0,0.4-0.1,0.6-0.5,0.6h-2.7
		c-0.4,0-0.5,0.1-0.5,0.6V26c0,1.9,0.6,2.8,1.7,2.8c1.2,0,2.2-1.4,2.4-1.4c0.1,0,0.2,0.1,0.2,0.3c0,0.5-1.6,2.5-3.5,2.5
		c-1.9,0-3-1.5-3-4.4v-1.7l0.1-8.7c0-0.5-0.1-0.6-0.5-0.6h-0.5c-0.4,0-0.6-0.1-0.6-0.3c0-0.4,0.9-0.8,1.9-2.1
		c1.1-1.3,1.3-2.3,1.6-2.3c0.1,0,0.2,0.2,0.2,0.4V11V12.9z"></path>
	<path class="st0" d="M110.4,21.5c0,5.2-2.8,8.8-7.5,8.8c-4.2,0-7-3.5-7-8.7c0-5.3,3-8.7,7.2-8.7C107.7,12.8,110.4,16.3,110.4,21.5z
		 M98.2,21.3c0,5.1,2.1,8.2,4.9,8.2c3.1,0,5-2.7,5-7.7c0-5.3-1.9-8.4-4.9-8.4C100.1,13.5,98.2,16.2,98.2,21.3z"></path>
	<path class="st0" d="M115.9,15.4c0,0.3,0.1,0.4,0.1,0.4c0.2,0,0.6-0.9,1.5-1.7c1-0.9,1.9-1.3,3.1-1.3c2.7,0,4.5,2.2,4.5,5.5v8.9
		c0,2,1.9,1.1,1.9,1.9c0,0.3-0.2,0.4-0.6,0.4c-0.3,0-1.1-0.1-2.4-0.1c-1,0-1.8,0.1-2.3,0.1c-0.4,0-0.6,0-0.6-0.4
		c0-0.8,1.9,0.1,1.9-1.9V20c0-3.8-0.8-5.7-3.3-5.7c-2.6,0-3.7,2.2-3.7,6.3v6.7c0,2,1.9,1.1,1.9,1.9c0,0.3-0.1,0.4-0.6,0.4
		c-0.3,0-1.1-0.1-2.4-0.1c-0.9,0-1.7,0.1-2.4,0.1c-0.4,0-0.5,0-0.5-0.4c0-0.8,1.9,0,1.9-1.9V16.8c0-1.4-1.5-0.6-1.5-1.2
		c0-0.4,0.6-0.5,1.2-0.9c1.2-0.9,1.8-1.8,2-1.8c0.2,0,0.2,0.3,0.2,0.9L115.9,15.4L115.9,15.4z"></path>
	<path class="st0" d="M7,46.2c0,2.1,0.4,3.1,2.2,3.1c0.9,0,1.6-0.3,2.1-0.9c0.4-0.6,0.4-1.4,0.4-2.6v-3.6c0-1.4,0-2.2-0.3-2.5
		c-0.2-0.2-0.8,0-0.8-0.4c0-0.2,0.1-0.2,0.2-0.2c0.1,0,0.5,0,1,0c0.6,0,0.9,0,1,0c0.2,0,0.3,0.1,0.3,0.2c0,0.2-0.1,0.2-0.4,0.2
		c-0.6,0-0.6,0.7-0.6,2.4v3.8c0,1.1,0,2-0.4,2.7c-0.4,0.8-1.3,1.2-2.6,1.2c-1.4,0-2.3-0.4-2.8-1.2c-0.4-0.6-0.4-1.4-0.4-2.4v-5.8
		c0-0.5,0-0.7-0.4-0.8c-0.4-0.1-0.8,0-0.8-0.3c0-0.1,0.1-0.2,0.2-0.2c0.2,0,0.7,0.1,1.4,0.1c0.8,0,1.3-0.1,1.5-0.1
		c0.1,0,0.2,0.1,0.2,0.2c0,0.3-0.3,0.2-0.7,0.3C7,39.7,7,39.9,7,40.4L7,46.2L7,46.2z"></path>
	<path class="st0" d="M9.2,49.9c-1.5,0-2.4-0.4-2.9-1.3c-0.4-0.7-0.4-1.5-0.4-2.4v-5.8c0-0.5,0-0.6-0.3-0.6c-0.1,0-0.3,0-0.4,0
		c-0.2,0-0.5,0-0.5-0.4C4.7,39.1,4.8,39,5,39c0.1,0,0.2,0,0.4,0c0.2,0,0.6,0.1,1,0.1c0.5,0,0.9-0.1,1.2-0.1c0.1,0,0.2,0,0.3,0
		c0.2,0,0.4,0.2,0.4,0.4c0,0.3-0.3,0.3-0.5,0.4c-0.1,0-0.2,0-0.3,0c-0.3,0.1-0.3,0.1-0.3,0.7v5.8c0,2,0.3,3,2.1,3
		c0.9,0,1.6-0.3,1.9-0.8c0.4-0.6,0.4-1.3,0.4-2.5v-3.6c0-1.3,0-2.2-0.2-2.4c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.5,0-0.5-0.4
		c0-0.2,0.1-0.4,0.4-0.4c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.8,0c0.4,0,0.7,0,0.9,0c0.1,0,0.1,0,0.1,0c0.3,0,0.4,0.1,0.4,0.4
		c0,0.4-0.4,0.4-0.6,0.4c-0.5,0-0.5,0.5-0.5,2.3v3.8c0,1,0,2-0.4,2.8C11.4,49.5,10.4,49.9,9.2,49.9z M5,39.2c-0.1,0-0.1,0-0.1,0.1
		s0,0.1,0.2,0.1c0.1,0,0.3,0,0.4,0.1C6,39.7,6,39.9,6,40.4v5.8c0,0.9,0,1.7,0.4,2.3c0.5,0.8,1.4,1.1,2.7,1.1c1.2,0,2-0.4,2.5-1.2
		c0.4-0.7,0.4-1.5,0.4-2.7V42c0-1.7,0-2.5,0.8-2.5c0.3,0,0.3,0,0.3-0.1c0,0,0-0.1-0.2-0.1c0,0-0.1,0-0.1,0c-0.2,0-0.4,0-0.9,0
		c-0.3,0-0.6,0-0.8,0c-0.3,0-0.3,0-0.3,0.1c0,0.1,0,0.1,0.3,0.1c0.2,0,0.3,0,0.5,0.2c0.3,0.3,0.3,1,0.3,2.6v3.6c0,1.2,0,2-0.5,2.7
		c-0.4,0.6-1.2,1-2.2,1c-2,0-2.4-1.2-2.4-3.3v-5.8c0-0.5,0-0.8,0.5-0.9c0.1,0,0.3,0,0.3,0c0.3,0,0.3,0,0.3-0.1
		c0-0.1-0.1-0.1-0.4-0.1c-0.3,0-0.7,0.1-1.2,0.1c-0.5,0-0.8-0.1-1.1-0.1C5.2,39.2,5.1,39.2,5,39.2z"></path>
	<path class="st0" d="M21.4,39.1c0.2,0,0.3,0,0.4,0.2l4.4,7.3c0.1,0.1,0.1,0.2,0.2,0.2c0,0,0.1-0.1,0.1-0.2v-4.4
		c0-1.5,0-2.3-0.3-2.5c-0.3-0.2-0.8,0-0.8-0.3c0-0.2,0.1-0.2,0.4-0.2s0.5,0,0.9,0c0.4,0,0.8,0,1,0c0.2,0,0.4,0.1,0.4,0.2
		c0,0.2-0.1,0.2-0.3,0.2h-0.2c-0.6,0-0.7,0.6-0.7,2.2v7.8c0,0.1,0,0.1-0.1,0.1c0,0-0.1,0-0.1-0.1l-5.3-8.9c0-0.1-0.1-0.1-0.2-0.1
		c0,0-0.1,0.1-0.1,0.3v5.8c0,1.7,0,2.4,0.6,2.4c0,0,0.2,0,0.3,0c0.1,0,0.2,0.1,0.2,0.3c0,0.1-0.1,0.2-0.4,0.2
		c-0.3,0-0.6-0.1-0.9-0.1c-0.4,0-0.7,0.1-1,0.1s-0.4-0.1-0.4-0.3c0-0.2,0.1-0.2,0.2-0.2c0.1,0,0.2,0,0.3,0c0.6,0,0.6-0.6,0.6-2.4
		v-6.2c0-0.5,0-0.7-0.3-0.8c-0.4-0.1-0.7,0-0.7-0.3c0-0.1,0.1-0.2,0.2-0.2L21.4,39.1L21.4,39.1z"></path>
	<path class="st0" d="M26.7,49.8c-0.1,0-0.2-0.1-0.2-0.2l-5.3-8.9c0,0,0,0,0,0.1v5.8c0,1.7,0,2.2,0.5,2.2c0,0,0,0,0.1,0
		c0.1,0,0.1,0,0.2,0c0.2,0,0.3,0.2,0.3,0.4c0,0.2-0.2,0.4-0.5,0.4c-0.1,0-0.3,0-0.4,0c-0.4,0-0.8,0-1.1,0c-0.1,0-0.3,0-0.4,0
		c-0.3,0-0.5-0.2-0.5-0.4c0-0.2,0.1-0.4,0.4-0.4c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0.5,0,0.5-0.5,0.5-2.2v-6.2c0-0.5,0-0.6-0.2-0.6
		c-0.1,0-0.2,0-0.4-0.1c-0.2,0-0.4,0-0.4-0.4c0-0.2,0.1-0.4,0.3-0.4h1.5c0.2,0,0.4,0,0.5,0.3l4.4,7.3c0,0,0,0,0,0v0v-4.4
		c0-1.4,0-2.2-0.2-2.4c-0.1-0.1-0.2-0.1-0.4-0.1c-0.2,0-0.5,0-0.5-0.3c0-0.2,0.2-0.4,0.5-0.4c0.1,0,0.2,0,0.4,0c0.2,0,0.4,0,0.6,0
		c0.3,0,0.5,0,0.7,0c0.1,0,0.2,0,0.3,0c0.4,0,0.5,0.2,0.5,0.4c0,0.3-0.3,0.3-0.4,0.3h-0.2c-0.5,0-0.5,0.4-0.5,2.1v7.8
		C26.9,49.6,26.8,49.8,26.7,49.8z M21.2,40.4c0.1,0,0.2,0.1,0.3,0.2l5.2,8.8v-7.6c0-1.5,0-2.3,0.8-2.3h0.2c0.2,0,0.2,0,0.2-0.1
		s-0.1-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0c-0.2,0-0.4,0-0.7,0c-0.2,0-0.4,0-0.6,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.2,0.1
		c0,0.1,0,0.1,0.2,0.1c0.2,0,0.4,0,0.5,0.2c0.3,0.3,0.3,1,0.3,2.6v4.4c0,0.3-0.1,0.4-0.2,0.4c-0.1,0-0.2-0.1-0.3-0.2l-4.4-7.3
		c-0.1-0.2-0.1-0.2-0.3-0.2h-1.5c0,0-0.1,0-0.1,0.1c0,0.1,0,0.1,0.2,0.1c0.1,0,0.3,0,0.4,0.1c0.4,0.1,0.4,0.4,0.4,0.9v6.2
		c0,1.7,0,2.5-0.7,2.5c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c-0.1,0-0.1,0-0.1,0.1c0,0,0,0.2,0.2,0.2c0.1,0,0.2,0,0.4,0
		c0.2,0,0.4,0,0.6,0c0.2,0,0.3,0,0.5,0c0.1,0,0.3,0,0.4,0c0.2,0,0.3,0,0.3-0.1c0-0.1,0-0.1-0.1-0.1c-0.1,0-0.2,0-0.2,0
		c0,0-0.1,0-0.1,0c-0.7,0-0.7-0.8-0.7-2.5v-5.8C21,40.6,21,40.4,21.2,40.4z"></path>
	<path class="st0" d="M36.6,47.9c0,0.7,0,0.9,0.6,1c0.3,0.1,0.7,0,0.7,0.3c0,0.1-0.1,0.2-0.4,0.2c-0.2,0-0.7-0.1-1.4-0.1
		c-0.7,0-1.2,0.1-1.4,0.1c-0.2,0-0.4-0.1-0.4-0.3c0-0.3,0.3-0.2,0.7-0.3c0.5-0.1,0.6-0.3,0.6-1v-7.5c0-0.5,0-0.7-0.3-0.8
		c-0.4-0.1-0.8,0-0.8-0.3c0-0.1,0.1-0.2,0.2-0.2c0.2,0,0.7,0.1,1.4,0.1c0.8,0,1.3-0.1,1.5-0.1c0.2,0,0.2,0.1,0.2,0.2
		c0,0.3-0.3,0.2-0.7,0.3s-0.4,0.2-0.4,0.8L36.6,47.9L36.6,47.9z"></path>
	<path class="st0" d="M37.5,49.6c-0.1,0-0.2,0-0.4,0c-0.2,0-0.6-0.1-1-0.1c-0.4,0-0.8,0-1,0.1c-0.2,0-0.3,0-0.4,0
		c-0.4,0-0.5-0.2-0.5-0.4c0-0.3,0.3-0.3,0.5-0.4c0.1,0,0.2,0,0.3,0c0.5-0.1,0.5-0.2,0.5-0.9v-7.5c0-0.5,0-0.6-0.3-0.6
		c-0.1,0-0.3,0-0.4,0c-0.2,0-0.5,0-0.5-0.4c0-0.2,0.2-0.4,0.4-0.4c0.1,0,0.2,0,0.4,0c0.2,0,0.6,0.1,1,0.1c0.5,0,0.9-0.1,1.2-0.1
		c0.2,0,0.2,0,0.3,0c0.2,0,0.4,0.2,0.4,0.4c0,0.3-0.3,0.3-0.5,0.4c-0.1,0-0.2,0-0.3,0c-0.3,0.1-0.3,0.1-0.3,0.7v7.5
		c0,0.7,0,0.8,0.5,0.9c0.1,0,0.2,0,0.3,0c0.2,0,0.5,0,0.5,0.4C37.9,49.4,37.8,49.6,37.5,49.6z M36,49.3c0.5,0,0.8,0,1.1,0.1
		c0.2,0,0.3,0,0.3,0c0.2,0,0.2,0,0.2-0.1c0-0.1,0-0.1-0.3-0.2c-0.1,0-0.2,0-0.3,0c-0.7-0.1-0.7-0.4-0.7-1.1v-7.5
		c0-0.5,0-0.8,0.5-0.9c0.1,0,0.2,0,0.3,0c0.3,0,0.3,0,0.3-0.1c0-0.1-0.1-0.1-0.4-0.1c-0.3,0-0.7,0.1-1.2,0.1c-0.5,0-0.8-0.1-1.1-0.1
		c-0.3,0-0.4-0.1-0.4,0.1c0,0.1,0,0.1,0.3,0.1c0.1,0,0.3,0,0.4,0.1c0.4,0.1,0.5,0.4,0.5,0.9v7.5c0,0.7,0,1-0.7,1.1
		c-0.1,0-0.2,0-0.3,0c-0.3,0-0.3,0-0.3,0.1c0,0.1,0.2,0.1,0.2,0.1c0.1,0,0.2,0,0.4,0C35.2,49.3,35.6,49.3,36,49.3z"></path>
	<path class="st0" d="M48,49c-0.2,0.5-0.3,0.8-0.3,0.8c-0.1,0-0.2-0.5-0.5-1.5l-2.1-6.4c-0.4-1.2-0.6-1.9-0.9-2.1
		c-0.3-0.2-0.8-0.1-0.8-0.4c0-0.1,0.1-0.2,0.3-0.2c0.4,0,0.9,0.1,1.6,0.1c0.5,0,0.8-0.1,1-0.1c0.2,0,0.2,0.1,0.2,0.2
		c0,0.5-0.8,0-0.8,0.8c0,0.2,0.1,0.3,0.2,0.6l2,6.3c0.1,0.2,0.1,0.3,0.2,0.3c0,0,0.1-0.1,0.1-0.3l1.7-5.8c0.2-0.5,0.2-0.9,0.2-1.1
		c0-0.8-0.9-0.3-0.9-0.8c0-0.1,0.1-0.2,0.3-0.2c0.2,0,0.5,0.1,1,0.1c0.6,0,1-0.1,1.1-0.1c0.2,0,0.3,0.1,0.3,0.2
		c0,0.4-0.5,0.1-0.9,0.5c-0.2,0.2-0.3,0.7-0.6,1.5L48,49z"></path>
	<path class="st0" d="M47.7,49.9c-0.2,0-0.2-0.2-0.4-0.7c-0.1-0.2-0.1-0.5-0.2-0.8L45,41.9c-0.3-1-0.6-1.8-0.9-2.1
		c-0.1-0.1-0.2-0.1-0.4-0.1c-0.2,0-0.5-0.1-0.5-0.3c0-0.2,0.2-0.4,0.4-0.4c0.2,0,0.4,0,0.6,0.1c0.3,0,0.6,0.1,1,0.1
		c0.3,0,0.5,0,0.7-0.1c0.1,0,0.2,0,0.3,0c0.1,0,0.3,0,0.3,0.4c0,0.3-0.3,0.3-0.4,0.4c-0.2,0-0.3,0-0.3,0.4c0,0.1,0,0.3,0.1,0.6
		l2,6.3c0,0,0,0.1,0,0.1c0,0,0-0.1,0-0.1l1.7-5.8c0.2-0.5,0.2-0.9,0.2-1c0-0.3-0.2-0.4-0.5-0.4c-0.2,0-0.5-0.1-0.5-0.4
		c0-0.2,0.1-0.3,0.4-0.3c0.1,0,0.2,0,0.2,0c0.2,0,0.4,0.1,0.8,0.1c0.4,0,0.7,0,0.9-0.1c0.1,0,0.2,0,0.2,0c0.4,0,0.4,0.2,0.4,0.3
		c0,0.3-0.2,0.3-0.4,0.4c-0.2,0-0.3,0.1-0.5,0.2c-0.2,0.2-0.3,0.8-0.6,1.5l-2.4,7.6C47.9,49.7,47.8,49.9,47.7,49.9z M43.7,39.2
		c-0.1,0-0.2,0.1-0.2,0.1c0,0,0,0.1,0.2,0.1c0.2,0,0.4,0,0.5,0.2c0.3,0.3,0.5,0.9,0.9,2.2l2.1,6.4c0.1,0.3,0.2,0.6,0.2,0.9
		c0,0.2,0.1,0.3,0.1,0.4c0.1-0.2,0.2-0.4,0.2-0.6l2.4-7.6c0.3-0.9,0.4-1.3,0.6-1.6c0.2-0.3,0.5-0.3,0.6-0.3c0.2,0,0.2,0,0.2-0.1
		c0,0,0-0.1-0.2-0.1c0,0-0.1,0-0.2,0c-0.2,0-0.5,0.1-0.9,0.1c-0.3,0-0.6,0-0.8-0.1c-0.4-0.1-0.4,0-0.4,0.1c0,0.1,0,0.1,0.3,0.1
		c0.3,0,0.7,0.1,0.7,0.7c0,0.2-0.1,0.6-0.2,1.1L48.2,47c-0.1,0.3-0.1,0.4-0.2,0.4c-0.2,0-0.2-0.2-0.3-0.3l-2-6.3
		c-0.1-0.3-0.2-0.5-0.2-0.6c0-0.6,0.3-0.6,0.6-0.6c0.2,0,0.2,0,0.2-0.1c0-0.1,0-0.1-0.1-0.1c0,0-0.1,0-0.2,0c-0.2,0-0.4,0.1-0.7,0.1
		c-0.4,0-0.7,0-1-0.1C44,39.3,43.9,39.2,43.7,39.2z"></path>
	<path class="st0" d="M63.1,39.1c0.6,0,0.7,0,0.7,0.6v1.4c0,0.3,0,0.4-0.2,0.4c-0.3,0-0.2-0.6-0.6-1.1c-0.4-0.5-1-0.8-1.8-0.8
		c-1.2,0-1.5,0.2-1.5,1.1v2.7c0,0.2,0,0.2,0.3,0.2h0.8c0.6,0,1-0.1,1.2-0.3c0.4-0.5,0.2-1,0.5-1c0.1,0,0.2,0.1,0.2,0.3
		c0,0.2-0.1,0.7-0.1,1.5c0,1,0,1.5,0,1.6c0,0.2-0.1,0.3-0.2,0.3c-0.3,0-0.1-0.5-0.5-1.3c-0.2-0.4-0.6-0.6-1.2-0.6H60
		c-0.2,0-0.2,0.1-0.2,0.3v3.5c0,0.8,0.4,1.1,1.5,1.1c1,0,1.6-0.2,2.1-0.9c0.4-0.6,0.4-1.2,0.6-1.2c0.1,0,0.2,0.1,0.2,0.1
		c0,0,0,0.1,0,0.3l-0.2,1.5c0,0.5-0.1,0.6-0.5,0.6c-0.3,0-1.4-0.2-3.2-0.2c-1.4,0-2.2,0.1-2.4,0.1c-0.2,0-0.3-0.1-0.3-0.3
		c0-0.3,0.3-0.2,0.6-0.3c0.5-0.1,0.5-0.3,0.5-1v-7.5c0-0.5,0-0.7-0.4-0.8c-0.4-0.1-0.8,0-0.8-0.3c0-0.2,0.1-0.2,0.3-0.2h1.7
		L63.1,39.1L63.1,39.1z"></path>
	<path class="st0" d="M63.5,49.7c-0.1,0-0.2,0-0.5,0c-0.5,0-1.5-0.1-2.8-0.1c-1,0-1.7,0-2.1,0.1c-0.1,0-0.2,0-0.3,0
		c-0.3,0-0.5-0.2-0.5-0.4c0-0.3,0.3-0.3,0.5-0.4c0.1,0,0.2,0,0.3,0c0.4-0.1,0.4-0.2,0.4-0.9v-7.5c0-0.5,0-0.6-0.3-0.6
		c-0.1,0-0.2,0-0.4,0c-0.2,0-0.5,0-0.5-0.4c0-0.1,0-0.4,0.4-0.4h5.3c0.7,0,0.8,0,0.8,0.7v1.4c0,0.2,0,0.5-0.3,0.5
		c-0.2,0-0.3-0.2-0.4-0.5c-0.1-0.2-0.2-0.5-0.3-0.7c-0.4-0.5-0.9-0.8-1.7-0.8c-1.2,0-1.4,0.2-1.4,1v2.7c0,0,0,0.1,0,0.1
		c0,0,0.1,0,0.2,0H61c0.7,0,1-0.2,1.2-0.3c0.2-0.2,0.2-0.4,0.3-0.6c0-0.2,0.1-0.4,0.3-0.4c0.2,0,0.3,0.1,0.3,0.4c0,0.1,0,0.2,0,0.3
		c0,0.3,0,0.7,0,1.2c0,0.8,0,1.2,0,1.4c0,0.1,0,0.1,0,0.1c0,0.3-0.2,0.4-0.3,0.4c-0.2,0-0.3-0.2-0.3-0.5c0-0.2-0.1-0.5-0.3-0.9
		c-0.2-0.4-0.7-0.5-1.1-0.5H60c-0.1,0-0.1,0-0.1,0.2v3.5c0,0.6,0.2,1,1.3,1c1,0,1.5-0.2,2-0.8c0.2-0.3,0.3-0.5,0.3-0.7
		c0.1-0.3,0.2-0.5,0.4-0.5c0.1,0,0.3,0.1,0.3,0.2c0,0,0,0.1,0,0.3L64.1,49C64,49.5,63.9,49.7,63.5,49.7z M60.2,49.2L60.2,49.2
		c1.3,0,2.2,0.1,2.8,0.1c0.2,0,0.4,0,0.4,0c0.3,0,0.3,0,0.3-0.5l0.2-1.5c0-0.1,0-0.2,0-0.3c0,0,0,0,0,0c0,0-0.1,0.1-0.2,0.3
		c-0.1,0.2-0.2,0.5-0.4,0.8c-0.5,0.7-1.1,0.9-2.2,0.9c-1.1,0-1.6-0.4-1.6-1.2v-3.5c0-0.2,0-0.4,0.4-0.4h0.9c0.7,0,1.1,0.2,1.4,0.6
		c0.2,0.4,0.3,0.8,0.3,1c0,0.1,0,0.2,0.1,0.2c0,0,0,0,0-0.2c0,0,0-0.1,0-0.1c0-0.2,0-0.7,0-1.5c0-0.5,0-1,0-1.2c0-0.1,0-0.2,0-0.3
		c0-0.2,0-0.2,0-0.2c0,0,0,0-0.1,0.2s-0.1,0.5-0.3,0.7c-0.2,0.2-0.7,0.4-1.3,0.4h-0.8c-0.3,0-0.5,0-0.5-0.3v-2.7
		c0-1,0.4-1.2,1.6-1.2c0.8,0,1.4,0.3,1.9,0.8c0.2,0.3,0.3,0.5,0.4,0.8c0,0.2,0.1,0.3,0.2,0.3c0,0,0,0,0-0.3v-1.4
		c0-0.4,0-0.4-0.6-0.4h-5.3c-0.2,0-0.2,0-0.2,0.1c0,0.1,0,0.1,0.3,0.1c0.1,0,0.3,0,0.4,0.1c0.4,0.1,0.5,0.3,0.5,0.9v7.5
		c0,0.7,0,1-0.6,1.1c-0.1,0-0.2,0-0.3,0c-0.2,0-0.2,0-0.2,0.1c0,0.1,0.1,0.1,0.2,0.1c0,0,0.1,0,0.2,0C58.5,49.3,59.2,49.2,60.2,49.2
		z"></path>
	<path class="st0" d="M75.9,45.7l0.7,1.7c0.4,0.9,0.6,1.4,0.8,1.5c0.4,0.2,0.7,0.1,0.7,0.4c0,0.1-0.1,0.2-0.2,0.2
		c-0.1,0-0.2,0-0.4,0c-0.3,0-0.6,0-0.8,0c-0.4,0-0.4-0.2-0.6-0.5l-1.4-3.3c-0.4-0.9-0.5-1.2-1.3-1.2h-0.2c-0.2,0-0.2,0.1-0.2,0.3
		v3.3c0,0.7,0,0.8,0.3,1c0.4,0.2,0.7,0,0.7,0.4c0,0.1-0.1,0.2-0.3,0.2c-0.2,0-0.6-0.1-1.3-0.1c-0.7,0-1.1,0.1-1.3,0.1
		c-0.2,0-0.3-0.1-0.3-0.3c0-0.2,0.1-0.2,0.4-0.2c0.5,0,0.6-0.3,0.6-0.7c0,0,0-0.2,0-0.3v-7.5c0-0.5,0-0.7-0.3-0.8
		c-0.3-0.1-0.7,0-0.7-0.3c0-0.2,0.1-0.2,0.3-0.2c0.2,0,0.7,0,1.3,0c0.4,0,0.8,0,1.4,0c2.1,0,3.2,0.7,3.2,2.5c0,1.4-0.8,2.3-2.2,2.5
		C75.4,44.4,75.6,45,75.9,45.7z M75.9,41.8c0-1.4-0.7-2.3-1.8-2.3c-1.1,0-1.2,0.2-1.2,0.8v3.3c0,0.2,0,0.3,0.2,0.3h0.3
		C75.1,44,75.9,43.2,75.9,41.8z"></path>
	<path class="st0" d="M77.9,49.6c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.2,0c-0.2,0-0.4,0-0.5,0c-0.1,0-0.2,0-0.3,0
		c-0.4,0-0.6-0.2-0.7-0.6l-1.5-3.4c-0.3-0.8-0.4-1-1.2-1h-0.2c-0.1,0-0.1,0-0.1,0s0,0,0,0.2v3.3c0,0.7,0,0.7,0.3,0.8
		c0.1,0.1,0.3,0.1,0.4,0.1c0.2,0,0.4,0,0.4,0.4c0,0.2-0.2,0.3-0.4,0.3c-0.1,0-0.2,0-0.3,0c-0.2,0-0.6-0.1-1-0.1c-0.5,0-0.8,0-1,0.1
		c-0.1,0-0.2,0-0.3,0c-0.3,0-0.4-0.2-0.4-0.4c0-0.4,0.4-0.4,0.5-0.4c0.4,0,0.5-0.2,0.5-0.6c0,0,0,0,0-0.1c0,0,0-0.1,0-0.3v-7.5
		c0-0.5,0-0.6-0.2-0.6c-0.1,0-0.2,0-0.3,0c-0.2,0-0.4,0-0.4-0.4c0-0.1,0-0.4,0.4-0.4c0.1,0,0.2,0,0.3,0c0.3,0,0.8,0,1.6,0
		c0.2,0,0.5,0,0.8,0c2.2,0,3.3,0.9,3.3,2.6c0,1.3-0.7,2.3-2,2.6c0.4,0.3,0.6,0.7,0.8,1.3l0.9,2.3c0.2,0.5,0.4,1,0.5,1
		c0.1,0,0.2,0.1,0.3,0.1c0.2,0.1,0.4,0.1,0.4,0.4C78.2,49.5,78.1,49.6,77.9,49.6z M77.5,49.3c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.2,0
		s0,0,0,0c0-0.1,0-0.1-0.3-0.2c-0.1,0-0.2-0.1-0.3-0.1c-0.2-0.1-0.4-0.4-0.7-1.2l-0.9-2.3c-0.3-0.7-0.5-1.2-1-1.3l-0.4-0.2l0.4-0.1
		c1.4-0.2,2.1-1.1,2.1-2.4c0-1.7-0.9-2.4-3-2.4c-0.3,0-0.6,0-0.8,0c-0.7,0-1.2,0-1.6,0c-0.1,0-0.2,0-0.3,0c-0.2,0-0.2,0.1-0.2,0.1
		c0,0.1,0,0.1,0.2,0.1c0.1,0,0.2,0,0.4,0.1c0.4,0.1,0.4,0.4,0.4,0.9v7.5c0,0.1,0,0.2,0,0.3c0,0,0,0,0,0c0,0.4-0.1,0.8-0.8,0.8
		c-0.3,0-0.3,0.1-0.3,0.1c0,0.1,0.1,0.1,0.2,0.1c0.1,0,0.1,0,0.2,0c0.2,0,0.6-0.1,1.1-0.1c0.5,0,0.8,0,1,0.1c0.1,0,0.2,0,0.3,0
		c0.1,0,0.2,0,0.2-0.1c0-0.1,0-0.1-0.2-0.2c-0.1,0-0.3,0-0.4-0.1c-0.4-0.2-0.4-0.4-0.4-1.1v-3.3c0-0.2,0-0.4,0.3-0.4h0.2
		c0.9,0,1,0.3,1.4,1.2l0,0.1l1.4,3.3c0.2,0.4,0.2,0.5,0.5,0.5c0.1,0,0.2,0,0.3,0C77.1,49.3,77.3,49.3,77.5,49.3z M73.5,44.1h-0.3
		c-0.3,0-0.3-0.2-0.3-0.4v-3.3c0-0.8,0.2-1,1.3-1c1.2,0,1.9,0.9,1.9,2.4C76.1,43.3,75.2,44.1,73.5,44.1z M73.1,43.8
		C73.1,43.8,73.1,43.8,73.1,43.8l0.4,0c1.6,0,2.3-0.7,2.3-2c0-1.3-0.7-2.1-1.7-2.1c-1.1,0-1.1,0.2-1.1,0.7v3.3
		C73,43.8,73.1,43.8,73.1,43.8L73.1,43.8z"></path>
	<path class="st0" d="M87.1,38.8c0.9,0,1.8,0.3,1.9,0.5c0.1,0.1,0.1,0.7,0.1,1.6c0,0.2-0.1,0.3-0.2,0.3c-0.2,0-0.2-0.3-0.4-0.8
		c-0.3-0.8-0.8-1.2-1.6-1.2c-1.1,0-1.8,0.7-1.8,1.7c0,1,0.7,1.6,2.1,2.3c1.5,0.8,2.3,1.6,2.3,3.2c0,2-1.4,3.3-3.2,3.3
		c-0.9,0-1.7-0.3-2-0.6c-0.3-0.2-0.3-0.5-0.3-1c0-0.5,0-0.8,0-1.1c0-0.4,0.1-0.6,0.2-0.6c0.3,0,0.1,0.7,0.4,1.5
		c0.3,0.8,1,1.2,1.8,1.2c1.2,0,2-0.9,2-2.1c0-1.4-0.8-2-2.2-2.8c-1.4-0.7-2.1-1.3-2.1-2.8C84.4,40,85.5,38.8,87.1,38.8z"></path>
	<path class="st0" d="M86.4,49.9c-0.9,0-1.7-0.3-2-0.6c-0.3-0.3-0.3-0.6-0.3-1c0-0.3,0-0.5,0-0.7c0-0.1,0-0.2,0-0.3
		c0-0.2,0-0.7,0.3-0.7c0.3,0,0.3,0.3,0.3,0.6c0,0.3,0.1,0.6,0.2,1c0.3,0.7,0.9,1.2,1.7,1.2c1.1,0,1.9-0.8,1.9-2
		c0-1.4-0.7-1.9-2.1-2.7c-1.5-0.8-2.2-1.4-2.2-2.9c0-1.8,1.2-3,2.9-3c0.9,0,1.8,0.3,2,0.6c0,0,0.2,0.2,0.2,1.7
		c0,0.3-0.2,0.5-0.3,0.5c-0.2,0-0.3-0.2-0.3-0.5c0-0.1-0.1-0.3-0.2-0.5c-0.3-0.8-0.8-1.2-1.5-1.2c-1,0-1.7,0.6-1.7,1.6
		c0,1,0.6,1.5,2,2.2c1.5,0.8,2.4,1.6,2.4,3.3C89.7,48.4,88.3,49.9,86.4,49.9z M84.4,46.7c-0.1,0-0.1,0.3-0.1,0.4c0,0.1,0,0.2,0,0.3
		c0,0.2,0,0.4,0,0.7c0,0.5,0,0.7,0.2,0.9c0.3,0.3,1.1,0.6,1.9,0.6c1.7,0,3.1-1.4,3.1-3.2c0-1.5-0.8-2.3-2.3-3
		c-1.4-0.8-2.1-1.3-2.1-2.4c0-1.1,0.7-1.8,1.9-1.8c0.8,0,1.3,0.4,1.7,1.3c0.1,0.2,0.1,0.4,0.2,0.5c0.1,0.2,0.1,0.3,0.1,0.3
		c0,0,0.1-0.1,0.1-0.2c0-1.3-0.1-1.5-0.1-1.6c-0.1-0.1-0.9-0.5-1.8-0.5c-1.6,0-2.6,1.1-2.6,2.7c0,1.3,0.6,1.9,2,2.7
		c1.4,0.8,2.2,1.3,2.2,2.9c0,1.3-0.9,2.2-2.1,2.2c-0.9,0-1.6-0.5-2-1.3c-0.2-0.4-0.2-0.8-0.2-1C84.5,46.9,84.5,46.8,84.4,46.7z"></path>
	<path class="st0" d="M98.6,47.9c0,0.7,0,0.9,0.6,1c0.3,0.1,0.7,0,0.7,0.3c0,0.1-0.1,0.2-0.4,0.2c-0.2,0-0.7-0.1-1.4-0.1
		c-0.7,0-1.2,0.1-1.4,0.1c-0.2,0-0.4-0.1-0.4-0.3c0-0.3,0.3-0.2,0.7-0.3c0.5-0.1,0.6-0.3,0.6-1v-7.5c0-0.5,0-0.7-0.4-0.8
		c-0.4-0.1-0.8,0-0.8-0.3c0-0.1,0.1-0.2,0.2-0.2c0.2,0,0.7,0.1,1.4,0.1c0.8,0,1.3-0.1,1.5-0.1c0.2,0,0.2,0.1,0.2,0.2
		c0,0.3-0.3,0.2-0.7,0.3c-0.4,0.1-0.4,0.2-0.4,0.8L98.6,47.9L98.6,47.9z"></path>
	<path class="st0" d="M99.5,49.6c-0.1,0-0.2,0-0.4,0c-0.2,0-0.6-0.1-1-0.1c-0.4,0-0.8,0-1,0.1c-0.2,0-0.3,0-0.4,0
		c-0.4,0-0.5-0.2-0.5-0.4c0-0.3,0.3-0.3,0.5-0.4c0.1,0,0.2,0,0.3,0c0.5-0.1,0.5-0.2,0.5-0.9v-7.5c0-0.5,0-0.6-0.3-0.6
		c-0.1,0-0.3,0-0.4,0c-0.2,0-0.5,0-0.5-0.4c0-0.2,0.2-0.4,0.4-0.4c0.1,0,0.2,0,0.4,0c0.2,0,0.6,0.1,1.1,0.1c0.5,0,0.9-0.1,1.2-0.1
		c0.1,0,0.2,0,0.3,0c0.2,0,0.4,0.2,0.4,0.4c0,0.3-0.3,0.3-0.5,0.4c-0.1,0-0.2,0-0.3,0c-0.3,0.1-0.3,0.1-0.3,0.7v7.5
		c0,0.7,0,0.8,0.5,0.9c0.1,0,0.2,0,0.3,0c0.2,0,0.5,0,0.5,0.4C99.9,49.4,99.8,49.6,99.5,49.6z M98,49.3c0.4,0,0.8,0,1.1,0.1
		c0.2,0,0.3,0,0.3,0c0.2,0,0.2,0,0.2-0.1c0-0.1,0-0.1-0.3-0.2c-0.1,0-0.2,0-0.3,0c-0.7-0.1-0.7-0.4-0.7-1.1v-7.5
		c0-0.5,0-0.8,0.5-0.9c0.1,0,0.2,0,0.3,0c0.3,0,0.3,0,0.3-0.1c0-0.1-0.1-0.1-0.4-0.1c-0.3,0-0.7,0.1-1.2,0.1c-0.5,0-0.8-0.1-1.1-0.1
		c-0.3,0-0.4-0.1-0.4,0.1c0,0.1,0,0.1,0.2,0.1c0.1,0,0.3,0,0.4,0.1c0.4,0.1,0.5,0.3,0.5,0.9v7.5c0,0.8,0,1-0.7,1.1
		c-0.1,0-0.2,0-0.3,0c-0.2,0-0.2,0-0.2,0.1c0,0.1,0.2,0.1,0.2,0.1c0.1,0,0.2,0,0.4,0C97.2,49.3,97.6,49.3,98,49.3z"></path>
	<path class="st0" d="M113.3,41.1c0,0.2,0,0.3-0.2,0.3c-0.3,0-0.2-0.4-0.4-1c-0.2-0.6-0.6-0.8-1.8-0.8h-0.4c-0.2,0-0.2,0.2-0.2,0.4
		v8.2c0,0.6,0,0.8,0.6,0.9c0.3,0.1,0.7,0,0.7,0.3c0,0.1-0.1,0.2-0.4,0.2c-0.2,0-0.7-0.1-1.4-0.1s-1.2,0.1-1.4,0.1
		c-0.2,0-0.4-0.1-0.4-0.3c0-0.3,0.3-0.2,0.7-0.3c0.5-0.1,0.5-0.3,0.5-1v-8.1c0-0.2,0-0.4-0.2-0.4h-0.6c-0.5,0-1.2,0.4-1.6,1
		c-0.4,0.6-0.4,1-0.6,1c-0.1,0-0.1-0.1-0.1-0.2c0-0.1,0-0.2,0.1-0.3l0.5-2.1c0.1-0.2,0.1-0.3,0.2-0.3c0.1,0,0.2,0,0.2,0.2v0.2
		c0,0.3,0.2,0.3,0.9,0.3h2c0.8,0,1.5,0,2,0c0.6,0,1,0,1.1-0.1c0.2-0.2,0.1-0.5,0.3-0.5c0.1,0,0.2,0.1,0.2,0.3v0L113.3,41.1z"></path>
	<path class="st0" d="M111.2,49.6c-0.1,0-0.2,0-0.4,0c-0.3,0-0.6-0.1-1.1-0.1c-0.4,0-0.8,0-1,0.1c-0.2,0-0.3,0-0.4,0
		c-0.3,0-0.5-0.2-0.5-0.4c0-0.3,0.3-0.3,0.5-0.4c0.1,0,0.2,0,0.3,0c0.4-0.1,0.4-0.2,0.4-0.9v-8.1c0-0.2,0-0.2-0.1-0.2h-0.6
		c-0.5,0-1.1,0.4-1.4,0.9c-0.2,0.2-0.2,0.4-0.3,0.6c-0.1,0.2-0.2,0.5-0.4,0.5c-0.2,0-0.3-0.2-0.3-0.4c0-0.1,0-0.2,0.1-0.3l0,0
		l0.5-2.2c0-0.2,0.1-0.3,0.3-0.3c0.3,0,0.3,0.2,0.3,0.3v0.2c0,0.1,0.1,0.2,0.8,0.2h2c0.5,0,0.9,0,1.3,0c0.3,0,0.5,0,0.7,0
		c0.3,0,0.9,0,1-0.1c0.1-0.1,0.1-0.1,0.1-0.2c0-0.1,0.1-0.3,0.3-0.3c0.2,0,0.3,0.1,0.3,0.4v0l-0.1,2.3c0,0.1,0,0.4-0.3,0.4
		c-0.3,0-0.3-0.2-0.4-0.5c0-0.2-0.1-0.4-0.2-0.6c-0.2-0.5-0.5-0.8-1.6-0.8h-0.4c-0.1,0-0.1,0-0.1,0.2v8.2c0,0.6,0,0.7,0.4,0.8
		c0.1,0,0.2,0,0.3,0c0.2,0,0.5,0,0.5,0.4C111.7,49.4,111.5,49.6,111.2,49.6z M109.7,49.3c0.4,0,0.8,0,1.1,0.1c0.2,0,0.3,0,0.4,0
		c0.2,0,0.2,0,0.2-0.1c0-0.1,0-0.1-0.3-0.2c-0.1,0-0.2,0-0.3,0c-0.6-0.1-0.6-0.4-0.6-1v-8.2c0-0.2,0-0.5,0.3-0.5h0.4
		c1.1,0,1.6,0.2,1.9,0.9c0.1,0.3,0.2,0.5,0.2,0.7c0.1,0.3,0.1,0.3,0.1,0.3c0,0,0,0,0-0.1l0.1-2.3c0-0.1,0-0.2-0.1-0.2
		c0,0,0,0-0.1,0.1c0,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.4,0.2-1.2,0.2c-0.2,0-0.5,0-0.7,0c-0.4,0-0.8,0-1.2,0h-2c-0.6,0-1,0-1-0.4v-0.2
		c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0.2l0,0l-0.5,2.2c0,0.1,0,0.2,0,0.2s0,0.1,0,0.1c0,0,0.1-0.2,0.2-0.3
		c0.1-0.2,0.2-0.4,0.3-0.6c0.4-0.6,1.1-1,1.7-1h0.6c0.3,0,0.3,0.3,0.3,0.5v8.1c0,0.7,0,1-0.6,1.1c-0.1,0-0.2,0-0.3,0
		c-0.3,0-0.3,0-0.3,0.1c0,0.1,0.2,0.1,0.2,0.1c0.1,0,0.2,0,0.4,0C108.9,49.3,109.3,49.3,109.7,49.3z"></path>
	<path class="st0" d="M123.3,44c0,0.1,0.1,0.1,0.1,0.1c0,0,0.1-0.1,0.1-0.1l1.6-2.9c0.3-0.6,0.5-1,0.5-1.1c0-0.6-0.9-0.2-0.9-0.7
		c0-0.1,0.1-0.2,0.3-0.2c0.2,0,0.5,0.1,1.2,0.1c0.5,0,0.8-0.1,0.9-0.1c0.1,0,0.2,0.1,0.2,0.2c0,0.3-0.2,0.2-0.6,0.3
		c-0.4,0.1-0.5,0.4-0.7,0.7l-2.4,4.4V48c0,0.6,0,0.7,0.4,0.9c0.4,0.1,0.7,0,0.7,0.3c0,0.1-0.1,0.2-0.4,0.2s-0.7-0.1-1.4-0.1
		c-0.7,0-1.1,0.1-1.4,0.1c-0.2,0-0.3-0.1-0.3-0.3c0-0.2,0.1-0.2,0.2-0.2c0.9,0,0.9-0.3,0.9-1.1v-3l-2.4-4.6
		c-0.2-0.4-0.5-0.7-0.7-0.8c-0.2-0.1-0.5,0-0.5-0.2c0-0.2,0.1-0.3,0.3-0.3c0.2,0,0.7,0.1,1.7,0.1c0.5,0,0.8,0,0.9,0
		c0.1,0,0.2,0.1,0.2,0.2c0,0.4-0.8,0.2-0.8,0.6c0,0.1,0.1,0.4,0.3,0.8L123.3,44z"></path>
	<path class="st0" d="M124.4,49.6c-0.1,0-0.2,0-0.4,0c-0.2,0-0.6-0.1-1-0.1s-0.8,0-1,0.1c-0.2,0-0.3,0-0.4,0c-0.3,0-0.5-0.2-0.5-0.4
		c0-0.2,0.1-0.4,0.3-0.4c0.8,0,0.8-0.2,0.8-0.9V45l-2.4-4.6c-0.3-0.5-0.5-0.7-0.6-0.7c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0-0.4-0.3
		c0-0.2,0.2-0.4,0.4-0.4c0,0,0.1,0,0.2,0c0.3,0,0.8,0.1,1.5,0.1c0.4,0,0.6,0,0.8,0c0.1,0,0.1,0,0.1,0c0.2,0,0.3,0.1,0.3,0.3
		c0,0.3-0.3,0.4-0.5,0.4c-0.2,0-0.3,0.1-0.3,0.2c0,0.1,0.1,0.4,0.2,0.7l1.8,3.3v0c0,0,0,0,0,0L125,41c0.3-0.6,0.4-1,0.4-1.1
		c0-0.2-0.1-0.2-0.4-0.2c-0.2,0-0.5-0.1-0.5-0.4c0-0.1,0-0.3,0.4-0.3c0.1,0,0.2,0,0.3,0c0.2,0,0.5,0.1,0.9,0.1c0.3,0,0.6,0,0.7-0.1
		c0.1,0,0.2,0,0.2,0c0.2,0,0.3,0.1,0.3,0.3c0,0.3-0.2,0.4-0.4,0.4c-0.1,0-0.1,0-0.2,0c-0.3,0.1-0.4,0.3-0.5,0.5l-2.4,4.5V48
		c0,0.6,0,0.7,0.3,0.8c0.1,0,0.2,0,0.3,0.1c0.2,0,0.5,0,0.5,0.4C124.9,49.4,124.8,49.6,124.4,49.6z M123.1,49.3c0.4,0,0.8,0,1,0.1
		c0.1,0,0.3,0,0.3,0c0.1,0,0.2,0,0.2-0.1c0-0.1,0-0.1-0.2-0.2c-0.1,0-0.3,0-0.4-0.1c-0.5-0.2-0.5-0.4-0.5-1v-3.2l0,0l2.5-4.5
		c0.2-0.3,0.3-0.6,0.7-0.7c0.1,0,0.2,0,0.2,0c0.2,0,0.2,0,0.2-0.2s0-0.1-0.2-0.1c-0.2,0-0.4,0.1-0.8,0.1c-0.4,0-0.7,0-0.9-0.1
		c-0.3,0-0.4,0-0.4,0c0,0.1,0.1,0.1,0.3,0.2c0.2,0,0.6,0.1,0.6,0.5c0,0.1-0.2,0.6-0.5,1.2l-1.6,2.9c0,0.1-0.1,0.2-0.2,0.2
		c-0.1,0-0.2-0.1-0.2-0.2l-1.8-3.3c-0.2-0.3-0.3-0.7-0.3-0.8c0-0.3,0.3-0.4,0.5-0.5c0.2,0,0.3-0.1,0.3-0.2c0-0.1,0-0.1-0.1-0.1
		c0,0,0,0-0.1,0c-0.1,0-0.4,0-0.8,0c-0.8,0-1.3,0-1.5-0.1c-0.1,0-0.2,0-0.2,0c0,0-0.2,0-0.2,0.1c0,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
		c0.2,0.1,0.5,0.4,0.7,0.8l2.5,4.7v3c0,0.8,0,1.2-1.1,1.2c-0.1,0-0.1,0-0.1,0.1c0,0.1,0.2,0.1,0.2,0.1c0.1,0,0.2,0,0.3,0
		C122.3,49.3,122.6,49.3,123.1,49.3z"></path>
	<rect x="69.6" y="33.5" class="st0" width="58" height="1"></rect>
	<rect x="4.6" y="33.5" class="st0" width="48.2" height="1"></rect>
</g>
<rect x="144.6" y="4.1" class="st1" width="0.9" height="46.8"></rect>
<line class="st2" x1="145.1" y1="4.1" x2="145.1" y2="50.9"></line>
</svg>
        </a>
        <button class="mobile-menu-button" data-button-open-text="Open the main menu" data-button-close-text="Close the main menu" data-button-enable-at="0" data-button-disable-at="1025" data-button-open-class="mobile-menu-open">
          <span class="show-for-sr"></span>
          <div class="hamburger-menu"></div>
        </button>
        <div class="site-header__main">
          <div class="site-header__top">
              <nav role="navigation" aria-labelledby="block-headerutilitymenu-menu" id="block-headerutilitymenu" aria-label="Administrative links" data-block-plugin-id="menu_block:header-utility-menu">
            
  <h2 class="visually-hidden" id="block-headerutilitymenu-menu">Header Utility Menu</h2>
  

        

        <nav id="utility-menu" class="utility-menu">
              <ul data-region="secondary_menu" class="menu">
                    <li class="li--level-one">
          <a href="/forward-blue/staff-directory" class="utility-menu__speech-bubble" data-drupal-link-system-path="node/120">Contact Us</a>
                  </li>
              <li class="li--level-one">
          <a href="/alumni-community" class="utility-menu__info" data-drupal-link-system-path="node/6">Get Involved</a>
                  </li>
              <li class="li--level-one">
          <a href="https://securelb.imodules.com/s/1250/20-giving/form.aspx?sid=1250&amp;gid=1&amp;pgid=4389&amp;cid=8450" target="_blank" class="utility-menu__gift" rel="noopener">Make a Gift</a>
                  </li>
            </ul>
    </nav>
  


  </nav>


            <div class="site-search">
              <button class="site-search__toggle" data-button-open-text="Open the search panel" data-button-close-text="Close the search panel" data-button-enable-at="1024" data-button-open-class="search-panel-open">
                <span class="show-for-sr"></span>
              </button>
              <form id="search-block-form" class="search-form search-block-form" action="//search.creighton.edu/s/search.html" method="get" accept-charset="UTF-8">
                <input type="hidden" name="collection" value="creighton-search">
                <input type="hidden" name="profile" value="alumni">
                <div class="js-form-item form-item js-form-type-search form-type-search js-form-item-keys form-item-keys form-no-label">
                  <label for="edit-keys" class="visually-hidden">Search</label>
                  <input id="edit-keys" class="form-search" placeholder="Enter search term or keyword..." title="Enter the terms you wish to search for." data-drupal-selector="edit-keys" type="search" name="query" value="" size="15" maxlength="128">
                </div>
                <div data-drupal-selector="search-action" class="form-actions js-form-wrapper form-wrapper" id="search-action">
                  <button id="edit-submit" class="button js-form-submit form-submit" data-drupal-selector="edit-submit">Search</button>
                </div>
              </form>
            </div>
          </div>
          <div class="site-header__bottom">
              <nav id="main-menu" class="main-menu accessible-menu" data-item-open-text="Open the %s menu" data-item-close-text="Close the %s menu">
      
              <ul data-region="primary_menu" class="menu">
              <li class="menu-item--expanded li--level-one">
        <a href="/forward-blue" data-drupal-link-system-path="node/232">Forward Blue</a>
                                <ul class="menu">
              <li class="li--level-two">
        <a href="/forward-blue/scholarships" data-drupal-link-system-path="node/235">Scholarships</a>
              </li>
          <li class="li--level-two">
        <a href="/forward-blue/school-college" data-drupal-link-system-path="node/236">School/College Funds</a>
              </li>
          <li class="li--level-two">
        <a href="/forward-blue/mission-academics-and-programs" data-drupal-link-system-path="node/237">Mission, Academics and Programs</a>
              </li>
          <li class="li--level-two">
        <a href="/forward-blue/campus-improvements" data-drupal-link-system-path="node/238">Campus Improvements</a>
              </li>
          <li class="li--level-two">
        <a href="/forward-blue/health-sciences" data-drupal-link-system-path="node/239">Health Sciences</a>
              </li>
          <li class="li--level-two">
        <a href="/forward-blue/staff-directory" data-drupal-link-system-path="node/120">Staff Directory</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-item--expanded li--level-one">
        <a href="/alumni-community" data-drupal-link-system-path="node/6">Alumni Community</a>
                                <ul class="menu">
              <li class="li--level-two">
        <a href="/alumni-community/alumni-relations-faq" data-drupal-link-system-path="node/224">Alumni Relations FAQ</a>
              </li>
          <li class="menu-item--collapsed li--level-two">
        <a href="/alumni-community/your-school-or-college" data-drupal-link-system-path="node/53">Your School or College</a>
              </li>
          <li class="li--level-two">
        <a href="/alumni-community/stay-connected" data-drupal-link-system-path="node/57">Stay Connected</a>
              </li>
          <li class="menu-item--collapsed li--level-two">
        <a href="/alumni-community/find-groups-associations" data-drupal-link-system-path="node/80">Find Groups and Associations</a>
              </li>
          <li class="menu-item--collapsed li--level-two">
        <a href="/alumni-community/alumni-benefits-and-resources" data-drupal-link-system-path="node/65">Alumni Benefits and Resources</a>
              </li>
          <li class="li--level-two">
        <a href="/alumni-community/national-black-alumni-advisory-board" data-drupal-link-system-path="node/256">National Black Alumni Advisory Board</a>
              </li>
          <li class="li--level-two">
        <a href="/alumni-community/women-creighton" data-drupal-link-system-path="node/244">Women of Creighton</a>
              </li>
          <li class="li--level-two">
        <a href="/alumni-community/mission-and-ministry" data-drupal-link-system-path="node/94">Mission and Ministry</a>
              </li>
          <li class="li--level-two">
        <a href="/alumni-community/history-and-tradition" data-drupal-link-system-path="node/64">History and Tradition</a>
              </li>
          <li class="menu-item--collapsed li--level-two">
        <a href="/alumni-community/become-resource-students" data-drupal-link-system-path="node/95">Become a Resource for Students</a>
              </li>
          <li class="li--level-two">
        <a href="/alumni-community/alumni-outcomes" data-drupal-link-system-path="node/97">Alumni Outcomes</a>
              </li>
          <li class="menu-item--collapsed li--level-two">
        <a href="/alumni-community/awards-and-honors" data-drupal-link-system-path="node/100">Awards and Honors</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-item--expanded li--level-one">
        <a href="news-events.php" data-drupal-link-system-path="node/102">News and Events</a>
                                <ul class="menu">
              <li class="li--level-two">
        <a href="news.php" data-drupal-link-system-path="node/9">Latest News</a>
              </li>
          <li class="li--level-two">
        <a href="/news-events/events" data-drupal-link-system-path="node/29">Events Calendar</a>
              </li>
          <li class="li--level-two">
        <a href="/news-and-events/creighton-days" data-drupal-link-system-path="node/104">Creighton Days</a>
              </li>
          <li class="li--level-two">
        <a href="/news-events/giving-day" data-drupal-link-system-path="node/112">Giving Day</a>
              </li>
          <li class="li--level-two">
        <a href="/news-and-events/evening-honors" data-drupal-link-system-path="node/113">Evening of Honors</a>
              </li>
          <li class="li--level-two">
        <a href="/news-events/athletic-events" data-drupal-link-system-path="node/114">Athletic Events</a>
              </li>
          <li class="li--level-two">
        <a href="/news-and-events/alumwire" data-drupal-link-system-path="node/221">AlumWire</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-item--expanded li--level-one">
        <a href="/giving-opportunities" data-drupal-link-system-path="node/116">Giving Opportunities</a>
                                <ul class="menu">
              <li class="menu-item--collapsed li--level-two">
        <a href="/giving-opportunities/find-your-giving-opportunity" data-drupal-link-system-path="node/5">Find your giving opportunity</a>
              </li>
          <li class="li--level-two">
        <a href="/giving-opportunities/get-involved" data-drupal-link-system-path="node/119">Volunteer</a>
              </li>
          <li class="li--level-two">
        <a href="/giving-opportunities/creighton-society" data-drupal-link-system-path="node/123">The Creighton Society</a>
              </li>
          <li class="menu-item--collapsed li--level-two">
        <a href="/giving-opportunities/ways-give" data-drupal-link-system-path="node/121">Ways to Give</a>
              </li>
          <li class="li--level-two">
        <a href="/giving-opportunities/parent-fund" data-drupal-link-system-path="node/125">Parent Fund</a>
              </li>
          <li class="li--level-two">
        <a href="/giving-opportunities/corporations-and-foundations" data-drupal-link-system-path="node/122">Corporations and Foundations</a>
              </li>
          <li class="li--level-two">
        <a href="/giving-opportunities/diversity-and-inclusion-scholarships" data-drupal-link-system-path="node/220">Diversity and Inclusion Scholarships</a>
              </li>
          <li class="li--level-two">
        <a href="/giving-opportunities/health-sciences-phoenix" data-drupal-link-system-path="node/67">Health Sciences Phoenix</a>
              </li>
          <li class="li--level-two">
        <a href="/giving-opportunities/athletics" data-drupal-link-system-path="node/126">Athletics</a>
              </li>
          <li class="li--level-two">
        <a href="/giving-opportunities/how-funding-works" data-drupal-link-system-path="node/124">How Funding Works</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-item--expanded li--level-one">
        <a href="/impact-giving" data-drupal-link-system-path="node/117">Your Impact</a>
                                <ul class="menu">
              <li class="li--level-two">
        <a href="/impact-giving/stories" data-drupal-link-system-path="node/26">Stories of Giving</a>
              </li>
          <li class="li--level-two">
        <a href="/impact-giving/donor-recognition" data-drupal-link-system-path="node/118">Donor Recognition</a>
              </li>
        </ul>
  
              </li>
        </ul>
  


  </nav>

          </div>
        </div>
      </div>
    </div>
  </header>
  
  <div class="page-wrapper">
    <main id="main-content" class="main-content">
      
        <div data-drupal-messages-fallback class="hidden"></div> 

  <h1 class="show-for-sr"> <span>Homepage</span>
 </h1>
       
      <section style="--scroll-tracker:0;" class="hero section--global-spacing hero--img hero--video hero--home hero--large oho-animate oho-animate-single">
      <div class="card card--hero">
        <div class="card__media">
          <div class="hero__overlay"></div>
          <article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/johns.jpg?itok=BB22fp3j 320w, sites/default/files/styles/ur_640_scale_width/public/johns.jpg?itok=imPFBh_t 640w, sites/default/files/styles/ur_768_scale_width/public/johns.jpg?itok=c71aQPhH 768w, sites/default/files/styles/ur_1024_scale_width/public/johns.jpg?itok=ElLSQymM 1024w, sites/default/files/styles/ur_1300_scale_width/public/johns.jpg?itok=RAxfsJ4f 1300w, sites/default/files/styles/ur_1600_scale_width/public/johns.jpg?itok=GwEbftTJ 1600w" sizes="100vw" src="sites/default/files/styles/ur_320_scale_width/public/johns.jpg?itok=BB22fp3j" alt="St. John and Creighton Hall, aerial view." typeof="foaf:Image">



  </article>

          <div class="video-feature">
                          <video class="autoplay-video" id="hero" loop="" muted="" autoplay="true" preload="true">
                <source src="https://player.vimeo.com/external/439267198.hd.mp4?s=8adb372e8e3f9a6a206150c28235b9d077d40c0d&amp;profile_id=174" type="video/mp4">
              </source></video>
                      </div>
        </div>
        <div class="card__content-outer">
          <div class="card__content--top">
                          <span class="h3">A new day at Creighton</span>
                        <h2 class="global-spacing--medium hero--large__title">MEETING THE MOMENT, TOGETHER</h2>
                                      
                          <div class="line-divider"></div>
          </div>
                    <div class="card__content card__content--bottom">
        <div class="card__content__inner progress-meter__header">
            <img src="sites/default/files/forwardblue_mark_horiz_tagline_rgb.png" width="650" height="83" alt="Forward Blue logo" typeof="foaf:Image">


                      <p class="intro-text global-spacing--small"></p><p class="global-spacing--small intro-text">At Creighton, our Jesuit mission shapes our vision. But our alumni and friends &mdash; our one-of-a-kind community &mdash; <em>you</em> make that vision a reality.&nbsp;You can help us forge a bold new chapter in Creighton&rsquo;s extraordinary story. Learn how you can support&nbsp;<strong>Forward Blue </strong>&mdash; the largest and most comprehensive fundraising campaign in&nbsp;Creighton's history.</p>
                                <div class="global-spacing--medium grid-container grid-container--progress-meter">
              <div style="--percent-to-goal:82" class="progress-meter oho-animate oho-animate-single">
                                  <div class="progress-meter__upper">
                    <div class="progress-meter__upper__percent">
                      <span data-animation-duration="2200" class="number oho-animate-count">82%</span><span class="goal">to Goal of</span><span class="number">$650,000,000</span>
                    </div>
                    <div aria-hidden class="progress-meter__upper__bar">
                    </div>
                    <div class="progress-meter__upper__dollars">
                      <span data-animation-duration="2200" class="number oho-animate-count">$533,000,000</span><span class="goal">Raised</span>
                    </div>
                  </div>
                  <div class="progress-meter__middle dotted-accent">
                  </div>
                                                  <div class="progress-meter__lower">
                    <div class="grid-x--progess-meter">
                                <div class="progress-meter__stat-item">
        <h3 class="eyebrow">Participants</h3>
        <span class="stat oho-animate-count">38,588<br>
<br>
</span>
      </div>
              <div class="progress-meter__stat-item">
        <h3 class="eyebrow">Raised</h3>
        <span class="stat oho-animate-count">$533M</span>
      </div>
              <div class="progress-meter__stat-item">
        <h3 class="eyebrow">To goal</h3>
        <span class="stat oho-animate-count">82%</span>
      </div>
    
                    </div>
                  </div>
                              </div>
            </div>
                  </div>
        <div class="hero--home__button">
                                  <a href="/forward-blue" target="_self" rel="noopener">Learn more about Forward Blue</a>
      
                  </div>
      </div>
    
        </div>
      </div>
    </section>
  

    <div class="inner-page-content inner-page-content--homepage">
                                       
      <section class="campaign-priorities global-spacing global-spacing--xlarge">
      <div class="campaign-priorities__inner">
        <div class="section-heading section-heading--line-accent">
          <div class="grid-container">
            <div class="grid-x">
              <div class="cell initial-12 medium-9">
                <h2 class="section-heading__heading oho-animate oho-animate-single">Fundraising priorities</h2>
              </div>
              <div class="cell initial-12 medium-auto">
                <span class="slide-counter"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-container--campaign-priorities global-spacing--default">
          <div class="campaign-priorities__slider">
            
      

  <div class="card card--campaign-priority">
          <div class="card__media">
        <article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/homepage_campriorities_scholarships_hero_1.jpg?itok=Q_Tjf9A6 320w, sites/default/files/styles/ur_640_scale_width/public/homepage_campriorities_scholarships_hero_1.jpg?itok=nlaXROmq 640w, sites/default/files/styles/ur_768_scale_width/public/homepage_campriorities_scholarships_hero_1.jpg?itok=ct2lS_ru 768w, sites/default/files/styles/ur_1024_scale_width/public/homepage_campriorities_scholarships_hero_1.jpg?itok=6GFRs56x 1024w, sites/default/files/styles/ur_1300_scale_width/public/homepage_campriorities_scholarships_hero_1.jpg?itok=Rg-71Bu9 1300w, sites/default/files/styles/ur_1600_scale_width/public/homepage_campriorities_scholarships_hero_1.jpg?itok=ACgZH0fC 1600w" sizes="100vw" src="sites/default/files/styles/ur_320_scale_width/public/homepage_campriorities_scholarships_hero_1.jpg?itok=Q_Tjf9A6" alt="Female student conducting research in a lab." typeof="foaf:Image">



  </article>

      </div>
        <div class="card__content">
      <div class="card__content__inner">
          <h3 class="h2">Scholarships</h3>
  <p>Now more than ever, scholarships are vital. They continue Creighton's legacy of offering life-changing experiences to any student who wants to make a difference in the world.</p>
  <div class="global-spacing--xsmall">
                <a class="ief btn btn--reversed" href="/forward-blue/scholarships"><span>Learn more about Scholarships</span></a>
    
  </div>

      </div>
    </div>
  </div>
  
      

  <div class="card card--campaign-priority">
          <div class="card__media">
        <article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/academicsslider.jpg?itok=mJYrpCDB 320w, sites/default/files/styles/ur_640_scale_width/public/academicsslider.jpg?itok=2HwFOq3I 640w, sites/default/files/styles/ur_768_scale_width/public/academicsslider.jpg?itok=X-Us3bC4 768w, sites/default/files/styles/ur_1024_scale_width/public/academicsslider.jpg?itok=wUpzFzh9 1024w, sites/default/files/styles/ur_1300_scale_width/public/academicsslider.jpg?itok=EkhE1bXb 1300w, sites/default/files/styles/ur_1600_scale_width/public/academicsslider.jpg?itok=JQe8oxsR 1600w" sizes="100vw" src="sites/default/files/styles/ur_320_scale_width/public/academicsslider.jpg?itok=mJYrpCDB" alt="Ed Horwitz teaches class" typeof="foaf:Image">



  </article>

      </div>
        <div class="card__content">
      <div class="card__content__inner">
          <h3 class="h2">Mission, Academics &amp; Programming</h3>
  <p>Our Jesuit approach to teaching, research and innovative programming is the cornerstone of a Creighton education, allowing us to form women and men for and with others. </p>
  <div class="global-spacing--xsmall">
                <a class="ief btn btn--reversed" href="/forward-blue/mission-academics-and-programs"><span>Learn more about Mission, Academics &amp; Programming</span></a>
    
  </div>

      </div>
    </div>
  </div>
  
      

  <div class="card card--campaign-priority">
          <div class="card__media">
        <article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/homepage_campriorities_studentexp_hero_3_0.jpg?itok=C_XDOq67 320w, sites/default/files/styles/ur_640_scale_width/public/homepage_campriorities_studentexp_hero_3_0.jpg?itok=AFbRwqxw 640w, sites/default/files/styles/ur_768_scale_width/public/homepage_campriorities_studentexp_hero_3_0.jpg?itok=r7wNMfpZ 768w, sites/default/files/styles/ur_1024_scale_width/public/homepage_campriorities_studentexp_hero_3_0.jpg?itok=ii_m4E76 1024w, sites/default/files/styles/ur_1300_scale_width/public/homepage_campriorities_studentexp_hero_3_0.jpg?itok=al6RC8rb 1300w, sites/default/files/styles/ur_1600_scale_width/public/homepage_campriorities_studentexp_hero_3_0.jpg?itok=4AwWVuQu 1600w" sizes="100vw" src="sites/default/files/styles/ur_320_scale_width/public/homepage_campriorities_studentexp_hero_3_0.jpg?itok=C_XDOq67" alt="Students touch the beak of the Billy Billy statue on campus." typeof="foaf:Image">



  </article>

      </div>
        <div class="card__content">
      <div class="card__content__inner">
          <h3 class="h2">Campus Improvements</h3>
  <p>Capital projects are more than new buildings. They&rsquo;re spaces to inspire hearts and minds, ensuring that our students get the best education and reach their full potential.  </p>
  <div class="global-spacing--xsmall">
                <a class="ief btn btn--reversed" href="/forward-blue/campus-improvements"><span>Learn more about Campus Improvements</span></a>
    
  </div>

      </div>
    </div>
  </div>
  
          </div>
        </div>
      </div>
    </section>
  
                                 

    
<section class="paragraph paragraph--type--featured-set paragraph--view-mode--default section feat-set feat-set--events global-spacing--xlarge global-padding--xlarge">
      <div class="triangle-graphic-background">
      
<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 24.1.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg style="--accent-color: #fff; --triangle-color: #907257;" data-animation-delay="50" class="triangle-graphic oho-animate-sequence" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1440 1222" xml:space="preserve">
  <g class="triangle-graphic__inner">
    <rect class="color-underlay" width="1440" height="1222"></rect>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect x="524.6" y="47.7" width="194.9" height="302.1"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1440,244.5 1196.2,0.7 622.5,574.3 1440,574.3 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect x="720.5" y="47.7" width="194.9" height="302.1"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="274,321.2 547,47.7 1,47.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect y="47.7" width="24.5" height="302.1"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="274.5,252.8 479.7,47.7 69.4,47.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="269,424.7 342,351.7 196,351.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="706,454.7 706,351.7 603,351.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="706,454.7 809,351.7 706,351.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1172,431.7 1252,351.7 1092,351.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1172.2,375.7 898,649.7 1411,649.7 1411,614.3 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect y="349.7" width="24.5" height="224.5"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="274.4,32.3 0,307.2 0,574.3 815.4,574.3 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect x="524.6" y="349.7" width="194.9" height="224.5"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="915.4,353.8 695,574.3 1135.9,574.3 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect x="720.5" y="349.7" width="194.9" height="224.5"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect x="524.6" y="574.5" width="194.9" height="302.1"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect x="720.5" y="574.5" width="194.9" height="302.1"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect x="524.6" y="876.6" width="194.9" height="224.5"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><rect x="720.5" y="876.6" width="194.9" height="224.5"></rect></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1440,315.1 1196.4,71.1 694,574.3 1440,574.3 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="274,122.2 502.1,349.7 45.9,349.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="274.5,224.2 400.1,349.7 149,349.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1172,500.7 1321,649.7 1023,649.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="0,818 243.9,574.3 817.8,1147.8 0,1147.8 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="268.1,1005.3 188.1,925.3 348.1,925.3 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="267.9,949.3 542.2,1223.3 29,1223.3 29,1187.8 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="524.8,927.4 745.3,1147.8 304.2,1147.8 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="0,888.6 243.7,644.7 746.3,1147.8 0,1147.8 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="268.1,1074.3 119,1223.3 417.2,1223.3 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1247,726.7 1171,650.7 1323,650.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="274.5,622.2 2,349.7 547,349.7 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1164.6,923 892.3,649.5 1437,649.5 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1164.1,854.7 959.5,649.5 1368.8,649.5 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1169.6,1026.6 1096.8,953.6 1242.5,953.6 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1164.2,634.2 1438,909.1 1438,1176.1 624.6,1176.1 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1164.6,724 937.1,951.6 1392.2,951.6 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1164.1,826.1 1038.9,951.6 1289.3,951.6 "></polygon></g></g>
    <g class="oho-animate scale-in"><g class="triangle-graphic__triangle"><polygon points="1164.1,1224.1 1435.9,951.6 892.3,951.6 "></polygon></g></g>
    <polygon class="bottom-strip" points="1440,576.3 1196,576.3 1104.3,484.4 1012.6,576.3 506,576.3 414.3,484.4
      322.6,576.3 0,576.3 0,624.3 1440,624.3 "></polygon>

</g></svg>
    </div>
    



<div class="section-heading section-heading--line-accent">
  <div class="grid-container">
          <div class="grid-x">
        <h2 class="section-heading__heading oho-animate oho-animate-single">Alumni events</h2>
      </div>
      </div>
</div>
    <div class="grid-container grid-container--events">
      <div class="grid-x grid-margin-x oho-animate-sequence" data-animation-delay="200">
        <div class="views-element-container"><div class="view view-news-blog-event-featured-set view-id-news_blog_event_featured_set view-display-id-events_featured_set js-view-dom-id-84d4cbaaaa85248a685e86285af2cb904a9bfc2e883d04c85a4e1e550e411e09">
  
    
              
    <div class="views-row">  <div class="oho-animate fade-in-down">
    
  
  





  <div class="card card--event">
          <div class="card__media">
          
<div class="date-block ">
  <time datetime="2022-Apr-Thu">
    <span class="month">Apr</span>
    <span class="day-number">21</span>
    <span class="day-name">Thu</span>
  </time>
</div>
      </div>
        <div class="card__content">
      <div class="card__content__inner">
          <div class="card--event__inner__left">
              <h3><a href="/news-events/events/phxnetworking22" hreflang="und">Creighton Alumni Networking Reception</a></h3>
              <div class="card--event__info icon-meta">
                  <time class="card--event__info--item time-icon">05:00pm</time>
                          <address class="card--event__info--item location-icon">Arizona</address>
              </div>
                      </div>
  
      </div>
    </div>
  </div>
  </div>
</div>
    <div class="views-row">  <div class="oho-animate fade-in-down">
    
  
  





  <div class="card card--event">
          <div class="card__media">
          
<div class="date-block ">
  <time datetime="2022-Apr-Sat">
    <span class="month">Apr</span>
    <span class="day-number">23</span>
    <span class="day-name">Sat</span>
  </time>
</div>
      </div>
        <div class="card__content">
      <div class="card__content__inner">
          <div class="card--event__inner__left">
              <h3><a href="/news-events/events/get-blue-22" hreflang="und">SPAHP Get Blue: A Day at the Ballpark</a></h3>
              <div class="card--event__info icon-meta">
                  <time class="card--event__info--item time-icon">12:00pm</time>
                          <address class="card--event__info--item location-icon">Nebraska</address>
              </div>
                      </div>
  
      </div>
    </div>
  </div>
  </div>
</div>
    <div class="views-row">  <div class="oho-animate fade-in-down">
    
  
  





  <div class="card card--event">
          <div class="card__media">
          
<div class="date-block ">
  <time datetime="2022-Apr-Sat">
    <span class="month">Apr</span>
    <span class="day-number">23</span>
    <span class="day-name">Sat</span>
  </time>
</div>
      </div>
        <div class="card__content">
      <div class="card__content__inner">
          <div class="card--event__inner__left">
              <h3><a href="/news-events/events/SOD-Albuquerque" hreflang="und">School of Dentistry Alumni Meetup</a></h3>
              <div class="card--event__info icon-meta">
                  <time class="card--event__info--item time-icon">05:30pm</time>
                      </div>
                      </div>
  
      </div>
    </div>
  </div>
  </div>
</div>


      </div>
</div>

      </div>
    </div>
    <div class="grid-container global-spacing--medium">
      <a class="btn" href="/news-events/events?topic=289">View All Events</a>
    </div>
  </section>

                                 
      <section class="global-spacing global-spacing--xlarge--alt news-feature">
      



<div class="section-heading section-heading--line-accent">
  <div class="grid-container">
          <div class="grid-x">
        <h2 class="section-heading__heading oho-animate oho-animate-single">Creighton News and Features</h2>
      </div>
      </div>
</div>
      <div class="grid-container--news-feature">
        <div class="news-feature__inner">
          <div class="grid-x grid-margin-x">
            <div class="initial-12 medium-7 cell">
              
  




  <div class="card card--news card--medium card--news-feature card--news-feature--large">
          <div class="card__media">
              <a href="/news-events/news/batman-creighton-william-dozier"><img src="sites/default/files/externals/b778552347dd5977b91e40902c371a0c.jpg" width="640" height="460" alt="Batman (1966), William Dozier and Batman (2022)" title="" typeof="foaf:Image">
</a>
  
      </div>
        <div class="card__content">
      <div class="card__content__inner">
        
  
  
      <h3><a href="/news-events/news/batman-creighton-william-dozier" hreflang="und"></a><a href="/news-events/news/batman-creighton-william-dozier" hreflang="und">The Creighton alum who saved Batman</a></h3>
  
      <div class="global-spacing--xxsmall card--news__date-school">
              <span class="date">Mar 01, 2022</span>
      
                        </div>
  

      <p>Alumnus William Dozier, Law&rsquo;31, PhB&rsquo;32, thought he wanted to be a Jesuit. Instead, he saved Batman and changed American pop culture forever. </p>
  
  
  
      
  
      </div>
    </div>
  </div>

            </div>
            <div class="initial-12 medium-auto news-featur]e__small-col cell">
              <div class="news-feature__small-col__inner">
                
  




  <div class="card card--news card--medium card--news-feature card--news-feature--small">
          <div class="card__media">
              <a href="/news-events/news/creighton-couples-2022"><img src="sites/default/files/externals/d4cd576bb3154909093aef8be1c5d24b.jpg" width="640" height="460" alt="Images of Creighton couples." title="" typeof="foaf:Image">
</a>
  
      </div>
        <div class="card__content">
      <div class="card__content__inner">
        
  
  
      <h3><a href="/news-events/news/creighton-couples-2022" hreflang="und"></a><a href="/news-events/news/creighton-couples-2022" hreflang="und">12 Creighton love stories</a></h3>
  
      <div class="global-spacing--xxsmall card--news__date-school">
              <span class="date">Feb 07, 2022</span>
      
                        </div>
  

  
  
  
      
  
      </div>
    </div>
  </div>

  




  <div class="card card--news card--medium card--news-feature card--news-feature--small">
          <div class="card__media">
              <a href="/news-events/news/creighton-days-2022"><img src="sites/default/files/externals/09dbc067bd65fb0da5dd24a039bb5030.jpg" width="640" height="460" alt="CREIGHTON DAYS image of old Creighton reunion" title="" typeof="foaf:Image">
</a>
  
      </div>
        <div class="card__content">
      <div class="card__content__inner">
        
  
  
      <h3><a href="/news-events/news/creighton-days-2022" hreflang="und"></a><a href="/news-events/news/creighton-days-2022" hreflang="und">New name, new date for Creighton reunion</a></h3>
  
      <div class="global-spacing--xxsmall card--news__date-school">
              <span class="date">Feb 10, 2022</span>
      
                        </div>
  

  
  
  
      
  
      </div>
    </div>
  </div>

              </div>
              <div class="news-feature__small-col__inner--actions global-spacing--medium">
                

<div id="" class="accordion accordion--select" data-accordion-open-text="Click to Open" data-accordion-close-text="Click to Close">
  <button class="accordion__button btn">
    <span class="show-for-sr"></span>
    <span class="accordion__button-text">View News by School or College</span>
    <i class="accordion__icon icon icon--down-arrow" aria-hidden="true"></i>
  </button>
  <div class="accordion__content">
          <a href="/news-events/news?affinity=12">Arts &amp; Sciences</a>
      <a href="/news-events/news?affinity=13">Business</a>
      <a href="/news-events/news?affinity=14">College of Professional Studies</a>
      <a href="/news-events/news?affinity=15">Dentistry</a>
      <a href="/news-events/news?affinity=17">Graduate School</a>
      <a href="/news-events/news?affinity=19">Law</a>
      <a href="/news-events/news?affinity=20">Medicine</a>
      <a href="/news-events/news?affinity=21">Nursing</a>
      <a href="/news-events/news?affinity=22">Occupational Therapy</a>
      <a href="/news-events/news?affinity=23">Pharmacy</a>
      <a href="/news-events/news?affinity=24">Physical Therapy</a>
      <a href="/news-events/news?affinity=282">SPAHP</a>
  
  </div>
</div>
                <div class="global-spacing--xsmall">
                  <a href="/news-events/news" class="btn">All News</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
                                       <section class="alumni-ctas global-spacing global-spacing--large global-padding global-padding--xlarge blue--dark hover-motion-container">
      <div class="alumni-ctas__inner hover-motion-target">
        <div class="alumni-ctas__img-container hover-motion-item">
                      <article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/stjohnsalumnicta_1.jpg?itok=j_jdr7Us 320w, sites/default/files/styles/ur_640_scale_width/public/stjohnsalumnicta_1.jpg?itok=lN2RDCZZ 640w, sites/default/files/styles/ur_768_scale_width/public/stjohnsalumnicta_1.jpg?itok=hgwUCwSP 768w, sites/default/files/styles/ur_1024_scale_width/public/stjohnsalumnicta_1.jpg?itok=U5BxsQIm 1024w, sites/default/files/styles/ur_1300_scale_width/public/stjohnsalumnicta_1.jpg?itok=hrfIdbFv 1300w, sites/default/files/styles/ur_1600_scale_width/public/stjohnsalumnicta_1.jpg?itok=LvRXX3kd 1600w" sizes="100vw" src="sites/default/files/styles/ur_320_scale_width/public/stjohnsalumnicta_1.jpg?itok=j_jdr7Us" alt="St. John's church in spring" typeof="foaf:Image">



  </article>

                  </div>
        <div class="grid-container">
          <div class="grid-x grid-padding-x">
            <div class="initial-12 medium-4 cell">
              <h2>Stay Connected</h2>
                              <div class="global-spacing--xsmall">
                  <p></p><p><span><span><span><span>There are dozens of ways for alumni to continue their lifelong connection to Creighton! Stay connected with former classmates, faculty,&nbsp;staff&nbsp;and the Jesuit community through alumni events, programs and more. Also, don&rsquo;t forget to take advantage of your alumni benefits!</span></span></span></span></p>
                </div>
                          </div>
            <div class="initial-12 medium-8 cell">
                    <ul class="grid-x grid-padding-x">
              <li class="initial-12 medium-6 cell">
                <a class="ief btn btn--reversed" href="/alumni-community/your-school-or-college"><span>Your school or college</span></a>
          </li>
              <li class="initial-12 medium-6 cell">
                <a class="ief btn btn--reversed" href="/alumni-community/stay-connected"><span>Ways to connect</span></a>
          </li>
              <li class="initial-12 medium-6 cell">
                <a class="ief btn btn--reversed" href="/news-events/events"><span>Attend an event</span></a>
          </li>
              <li class="initial-12 medium-6 cell">
                <a class="ief btn btn--reversed" href="/alumni-community/alumni-benefits-and-resources"><span>Explore alumni benefits</span></a>
          </li>
              <li class="initial-12 medium-6 cell">
                <a class="ief btn btn--reversed" href="/giving-opportunities/find-your-giving-opportunity"><span>Find a giving opportunity</span></a>
          </li>
              <li class="initial-12 medium-6 cell">
                <a class="ief btn btn--reversed" href="/alumni-community/mission-and-ministry"><span>Mission and Ministry</span></a>
          </li>
          </ul>
  
            </div>
          </div>
        </div>
      </div>
    </section>

  
                                 
            <section class="checkerboard global-spacing global-spacing--xxlarge hover-motion-container global-padding">
        <div class="checkerboards hover-motion-target">
          <div class="checkerboards hover-motion-item">
            


      

  <div class="card card--checkerboard right oho-animate oho-animate-single">
          <div class="card__media">
          <figure><article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/gallychecker.jpg?itok=rVzueVoN 320w, sites/default/files/styles/ur_405_scale_width/public/gallychecker.jpg?itok=u2ddwnIH 405w, sites/default/files/styles/ur_640_scale_width/public/gallychecker.jpg?itok=KVyjjxAF 640w, sites/default/files/styles/ur_650_scale_width/public/gallychecker.jpg?itok=j4jWF2bi 650w, sites/default/files/styles/ur_800_scale_width/public/gallychecker.jpg?itok=zf6mbp56 800w" sizes="(max-width: 320px) 320px,(max-width: 640px) 640px,(max-width: 1024px) 405px,(max-width: 1200px) 650px,(min-width: 1201px) 800px" src="sites/default/files/styles/ur_320_scale_width/public/gallychecker.jpg?itok=rVzueVoN" alt="Gallagher Hall" typeof="foaf:Image">



  </article>

      </figure>

      </div>
        <div class="card__content">
      <div class="card__content__inner">
              <h2>From the Creighton archives</h2>
        <p></p><p>From time to time, we cull the Creighton archives for interesting features and photos that celebrate the University's rich history.&nbsp;If you're looking to feed your Creighton nostalgia, there are few better places to start.&nbsp;Our latest features:</p>

        <div class="global-spacing--xsmall">
                <ul>
              <li>          <a href="/gallagher-hall" target="_blank" rel="noopener">A tribute to Gallagher Hall</a>
      </li>
              <li>          <a href="/photos-christmas-creighton-through-years" target="_blank" rel="noopener">Photos: Christmas at Creighton through the years</a>
      </li>
          </ul>
  

    </div>
              <a class="ief btn" href="/creighton-archive-stories" target="_blank" rel="noopener"><span>See all Creighton archive stories</span></a>
    
      </div>
    </div>
  </div>
  
          </div>
        </div>
      </section>
      
                                 
            <section class="checkerboard global-spacing global-spacing--xxlarge hover-motion-container global-padding">
        <div class="checkerboards hover-motion-target">
          <div class="checkerboards hover-motion-item">
            


      

  <div class="card card--checkerboard left oho-animate oho-animate-single">
          <div class="card__media">
          <figure><article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/wernerchecker_0.jpg?itok=Bs-SLyAt 320w, sites/default/files/styles/ur_405_scale_width/public/wernerchecker_0.jpg?itok=_QqAUlfx 405w, sites/default/files/styles/ur_640_scale_width/public/wernerchecker_0.jpg?itok=y_1-vZL2 640w, sites/default/files/styles/ur_650_scale_width/public/wernerchecker_0.jpg?itok=1TH7evOu 650w, sites/default/files/styles/ur_800_scale_width/public/wernerchecker_0.jpg?itok=AJzbKlFu 800w" sizes="(max-width: 320px) 320px,(max-width: 640px) 640px,(max-width: 1024px) 405px,(max-width: 1200px) 650px,(min-width: 1201px) 800px" src="sites/default/files/styles/ur_320_scale_width/public/wernerchecker_0.jpg?itok=Bs-SLyAt" alt="Werner Center rendering" typeof="foaf:Image">



  </article>

      </figure>

      </div>
        <div class="card__content">
      <div class="card__content__inner">
              <h2>Building connections</h2>
        <p></p><p>&ldquo;<a href="https://alumni.creighton.edu/news-events/news/werner-center-groundbreaking-ceremony-2021" target="_blank" rel="noopener">The CL Werner Center</a> is a beacon of our commitment to the health sciences and interprofessional model we use to teach them,&rdquo; Creighton President the Rev. Daniel S. Hendrickson, SJ, PhD, said of the new facility slated to open in fall 2023.</p>

<p>&ldquo;It is one of multiple areas in which we are showing growth and progress in Creighton&rsquo;s health sciences enterprise, as we continue to form leaders in the Jesuit tradition across all fields of health care."</p>

        <div class="global-spacing--xsmall">
                <ul>
              <li>          <a href="https://alumni.creighton.edu/news-events/news/building-connections-werner-center" target="_blank" rel="noopener">Learn more about the CL Werner Center</a>
      </li>
              <li>          <a href="/creightons-future" target="_blank" rel="noopener">A vision for Creighton's future</a>
      </li>
              <li>          <a href="/creightons-future/fundraising-priorities" target="_blank" rel="noopener">Support Creighton's fundraising priorities</a>
      </li>
          </ul>
  

    </div>
          
      </div>
    </div>
  </div>
  
          </div>
        </div>
      </section>
      
                                 
<section class="global-spacing global-spacing--xlarge--alt impact-stories">
  



<div class="section-heading section-heading--line-accent">
  <div class="grid-container">
          <div class="grid-x">
        <div class="cell initial-12 medium-9">
          <h2 class="section-heading__heading oho-animate oho-animate-single">IMPACT STORIES</h2>
        </div>
        <div class="cell initial-12 medium-auto">
                      <a class="btn btn--small" href="/impact-giving/stories">All Stories</a>
                  </div>
      </div>
      </div>
</div>
  <div class="grid-container--impact-stories">
    <div class="mobile-slider grid-x grid-padding-x oho-animate-sequence">
      <div class="mobile-slider__slide oho-animate fade-in-up">
  
  




  <div class="card card--news card--impact-story">
          <div class="card__media">
              <a href="/impact-giving/stories/the-gratitude-in-giving"><img src="sites/default/files/externals/9f97b70592e2cbf722c9c6a10b301bbb.png" width="640" height="460" alt="Robbie Bishop Monroe" title="" typeof="foaf:Image">
</a>
  
      </div>
        <div class="card__content">
      <div class="card__content__inner">
        
  
  
      <h3><a href="/impact-giving/stories/the-gratitude-in-giving" hreflang="und"></a><a href="/impact-giving/stories/the-gratitude-in-giving" hreflang="und">Her journey for others</a></h3>
  
  

      <p>When the timing was right the life-long learner and education advocate began writing the next chapter of her life.</p>
  
      



  <div class="card card--subject-info">
        <div class="card__content">
      <div class="card__content__inner">
          <span class="h5 name"><strong></strong></span>
      <span class="large-text"></span>
      
      </div>
    </div>
  </div>
  
  
      
  
      </div>
    </div>
  </div>
</div>

      
<div class="mobile-slider__slide oho-animate fade-in-up">
  
  




  <div class="card card--news card--impact-story">
          <div class="card__media">
              <a href="/impact-giving/stories/the-gift-of-scholarships"><img src="sites/default/files/externals/0f8b59880a1eaae9b5424d15c37eefa5.jpg" width="640" height="460" alt="scholarship recipient scholar pin " title="" typeof="foaf:Image">
</a>
  
      </div>
        <div class="card__content">
      <div class="card__content__inner">
        
  
  
      <h3><a href="/impact-giving/stories/the-gift-of-scholarships" hreflang="und"></a><a href="/impact-giving/stories/the-gift-of-scholarships" hreflang="und">The Impact of Scholarships </a></h3>
  
  

      <p>In the School of Pharmacy and Health Professions, generous donors inspire confidence, create access to opportunities and honor a legacy. Meet three students impacted by the gift of scholarship.</p>
  
      



  <div class="card card--subject-info">
        <div class="card__content">
      <div class="card__content__inner">
          <span class="h5 name"><strong>Ben Thompson, DPT&rsquo;21</strong></span>
      <span class="large-text">Scholarship recipient</span>
      
      </div>
    </div>
  </div>
  
  
      
  
      </div>
    </div>
  </div>
</div>
<div class="mobile-slider__slide oho-animate fade-in-up">
  
  




  <div class="card card--news card--impact-story">
          <div class="card__media">
              <a href="/impact-giving/stories/women-in-philanthropy"><img src="sites/default/files/externals/ace681dc6325013c84d52d777b6b6640.jpg" width="640" height="460" alt="Mary Lucretia" title="" typeof="foaf:Image">
</a>
  
      </div>
        <div class="card__content">
      <div class="card__content__inner">
        
  
  
      <h3><a href="/impact-giving/stories/women-in-philanthropy" hreflang="und"></a><a href="/impact-giving/stories/women-in-philanthropy" hreflang="und"> The faith, vision, and generosity of Creighton women</a></h3>
  
  

      <p>&ldquo;I&rsquo;ve been known to tell students and fellow alumni that because neither Creighton couple had children who survived past the age of five, we are the descendants of the Creightons and must help live out their legacy." Katie Wadas-Thalken, EdD, Assistant Dean for Academic Affairs</p>
  
      



  <div class="card card--subject-info">
        <div class="card__content">
      <div class="card__content__inner">
          <span class="h5 name"><strong></strong></span>
      <span class="large-text"></span>
      
      </div>
    </div>
  </div>
  
  
      
  
      </div>
    </div>
  </div>
</div>
<div class="mobile-slider__slide oho-animate fade-in-up">
  
  




  <div class="card card--news card--impact-story">
          <div class="card__media">
              <a href="/impact-giving/stories/developing-confident-leaders-UP-scholars"><img src="sites/default/files/externals/1bc5e71eab8eb8ffc138c56ecc75b727.jpg" width="640" height="460" alt="UP Scholars " title="" typeof="foaf:Image">
</a>
  
      </div>
        <div class="card__content">
      <div class="card__content__inner">
        
  
  
      <h3><a href="/impact-giving/stories/developing-confident-leaders-UP-scholars" hreflang="und"></a><a href="/impact-giving/stories/developing-confident-leaders-UP-scholars" hreflang="und">Developing confident leaders </a></h3>
  
  

      <p>Last fall, in a new partnership between Creighton University and Union Pacific Railroad, the first eight Union Pacific Scholars arrived on campus.</p>
  
      



  <div class="card card--subject-info">
        <div class="card__content">
      <div class="card__content__inner">
          <span class="h5 name"><strong></strong></span>
      <span class="large-text"></span>
      
      </div>
    </div>
  </div>
  
  
      
  
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</section>
                                 
            <section class="checkerboard global-spacing global-spacing--xxlarge hover-motion-container global-padding">
        <div class="checkerboards hover-motion-target">
          <div class="checkerboards hover-motion-item">
            


      

  <div class="card card--checkerboard right oho-animate oho-animate-single">
          <div class="card__media">
          <figure><article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/20190729_cc_6099_0.jpg?itok=gLQ6hg4i 320w, sites/default/files/styles/ur_405_scale_width/public/20190729_cc_6099_0.jpg?itok=rKBD3XZq 405w, sites/default/files/styles/ur_640_scale_width/public/20190729_cc_6099_0.jpg?itok=zJJJZTKx 640w, sites/default/files/styles/ur_650_scale_width/public/20190729_cc_6099_0.jpg?itok=mgFhLj09 650w, sites/default/files/styles/ur_800_scale_width/public/20190729_cc_6099_0.jpg?itok=4Fp8tNF0 800w" sizes="(max-width: 320px) 320px,(max-width: 640px) 640px,(max-width: 1024px) 405px,(max-width: 1200px) 650px,(min-width: 1201px) 800px" src="sites/default/files/styles/ur_320_scale_width/public/20190729_cc_6099_0.jpg?itok=gLQ6hg4i" alt="Creighton campus, the Mall." typeof="foaf:Image">



  </article>

      </figure>

      </div>
        <div class="card__content">
      <div class="card__content__inner">
              <h2>You can support the Creighton community!</h2>
        <p></p><p>Support our students and help Creighton lead the way! Make a gift to scholarships, programs, research or any area meaningful to you. Gift by gift, you fuel the future of Creighton University.</p>
<style type="text/css">
<!--/*--><![CDATA[/* ><!--*/

<!--/*--><![CDATA[/* ><!--*/
@media screen and (min-width: 48.0625em) {.alumni-ctas {margin-bottom:55px;}.cta-banner{margin-top:55px;}}

/*--><!]]]]><![CDATA[>*/

/*--><!]]>*/
</style>

                <a class="ief btn" href="/giving-opportunities/find-your-giving-opportunity"><span>Find your giving opportunity</span></a>
    
      </div>
    </div>
  </div>
  


      

  <div class="card card--checkerboard left oho-animate oho-animate-single">
          <div class="card__media">
          <figure><article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/inspiredchckerboad.jpg?itok=diBnskbc 320w, sites/default/files/styles/ur_405_scale_width/public/inspiredchckerboad.jpg?itok=vzU2WAnb 405w, sites/default/files/styles/ur_640_scale_width/public/inspiredchckerboad.jpg?itok=zDeQVxUG 640w, sites/default/files/styles/ur_650_scale_width/public/inspiredchckerboad.jpg?itok=gxszyyc8 650w, sites/default/files/styles/ur_800_scale_width/public/inspiredchckerboad.jpg?itok=osuyDhiN 800w" sizes="(max-width: 320px) 320px,(max-width: 640px) 640px,(max-width: 1024px) 405px,(max-width: 1200px) 650px,(min-width: 1201px) 800px" src="sites/default/files/styles/ur_320_scale_width/public/inspiredchckerboad.jpg?itok=diBnskbc" alt="Donor impact magazine" typeof="foaf:Image">



  </article>

      </figure>

      </div>
        <div class="card__content">
      <div class="card__content__inner">
              <h2>Donor Impact</h2>
        <p></p><p>Creighton's generous donors empower our students through academic excellence, unwavering faith and service to others. In this year&rsquo;s Donor Impact magazine, you will find inspirational stories of philanthropy and of the transformational power of higher education.</p>

                <a class="ief btn" href="https://secure.viewer.zmags.com/publication/47e2ca6d?utm_source=newsletter&amp;utm_medium=email&amp;utm_content=Read%20the%20Donor%20Magazine&amp;utm_campaign=UR22_EOH_E1#/47e2ca6d/1" target="_blank" rel="noopener"><span>Read the magazine</span></a>
    
      </div>
    </div>
  </div>
  
          </div>
        </div>
      </section>
      
                                 
            <section class="checkerboard global-spacing global-spacing--xxlarge hover-motion-container global-padding">
        <div class="checkerboards hover-motion-target">
          <div class="checkerboards hover-motion-item">
            


      

  <div class="card card--checkerboard right oho-animate oho-animate-single">
          <div class="card__media">
          <figure><article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/ignatiuschecker.jpg?itok=6EOzmngz 320w, sites/default/files/styles/ur_405_scale_width/public/ignatiuschecker.jpg?itok=k9MFEKUY 405w, sites/default/files/styles/ur_640_scale_width/public/ignatiuschecker.jpg?itok=nIB2Pf5C 640w, sites/default/files/styles/ur_650_scale_width/public/ignatiuschecker.jpg?itok=aHn2F6mx 650w, sites/default/files/styles/ur_800_scale_width/public/ignatiuschecker.jpg?itok=TJ_ZrcsP 800w" sizes="(max-width: 320px) 320px,(max-width: 640px) 640px,(max-width: 1024px) 405px,(max-width: 1200px) 650px,(min-width: 1201px) 800px" src="sites/default/files/styles/ur_320_scale_width/public/ignatiuschecker.jpg?itok=6EOzmngz" alt="Ignatius statue" typeof="foaf:Image">



  </article>

      </figure>

      </div>
        <div class="card__content">
      <div class="card__content__inner">
              <h2>The gift of Creighton</h2>
        <p></p><p>Creighton is a world-class academic institution recognized for excellence and enriched by a centuries-long tradition of Jesuit, Catholic education.</p>

<p>Since 1878, Creighton has built upon a foundation of faith, service and generosity. Every brick and block of limestone stands as testament to the enduring power of our mission and the people who live it. Now, a dynamic vision guides our path forward. And we call on our alumni and friends to help us lead the way.</p>

        <div class="global-spacing--xsmall">
                <ul>
              <li>          <a href="/forward-blue" target="_self" rel="noopener">Learn more about the Forward Blue campaign for Creighton</a>
      </li>
          </ul>
  

    </div>
    
      </div>
    </div>
  </div>
  
          </div>
        </div>
      </section>
      
                  </div>
  

      
    </main>
  </div>
  
  
    <section class="cta-banner cta-banner--checkerboard global-padding global-padding--xlarge blue--dark">
    <div class="cta-banner__background" style="--scroll-tracker:0;"></div>
    <div class="grid-container">
      


      

  <div class="card card--checkerboard right oho-animate oho-animate-single">
          <div class="card__media">
          <figure><article>
  
          <img srcset="sites/default/files/styles/ur_320_scale_width/public/video-footer-cta-checkerboard.jpg?itok=OJqILUBP 320w, sites/default/files/styles/ur_405_scale_width/public/video-footer-cta-checkerboard.jpg?itok=rxpgUXAA 405w, sites/default/files/styles/ur_640_scale_width/public/video-footer-cta-checkerboard.jpg?itok=ij7-CYP9 640w, sites/default/files/styles/ur_650_scale_width/public/video-footer-cta-checkerboard.jpg?itok=RrfVC06q 650w, sites/default/files/styles/ur_800_scale_width/public/video-footer-cta-checkerboard.jpg?itok=Fsk9LCAt 768w" sizes="(max-width: 320px) 320px,(max-width: 640px) 640px,(max-width: 1024px) 405px,(max-width: 1200px) 650px,(min-width: 1201px) 800px" src="sites/default/files/styles/ur_320_scale_width/public/video-footer-cta-checkerboard.jpg?itok=OJqILUBP" alt="Video Creighton Sky View" typeof="foaf:Image">



  </article>

          <a data-fancybox="" href="https://www.youtube.com/watch?v=JW9cxr0S3f8" target="_blank" rel="noopener">
        <span class="show-for-sr">Watch Video</span>
        <svg class="play-button" width="496" height="496" viewbox="0 0 496 496" xmlns="http://www.w3.org/2000/svg">
  <path d="M248 0c137 0 248 111 248 248S385 496 248 496 0 385 0 248 111 0 248 0zm-27.5 379.5l123-123c4.7-4.7 4.7-12.3 0-17l-123-123c-7.6-7.6-20.5-2.2-20.5 8.5v246c0 10.7 12.9 16.1 20.5 8.5z" fill="#FFF" fill-rule="nonzero"></path>
</svg>
      </a>
      </figure>

      </div>
        <div class="card__content">
      <div class="card__content__inner">
              <h2>Leading the Way</h2>
        <p></p><p>Creighton is a world-class academic institution recognized for excellence in teaching, learning and research, and enriched by a centuries-long tradition of Jesuit, Catholic education.</p>

                <a class="ief btn" href="/giving-opportunities/find-your-giving-opportunity"><span>Find your giving opportunity</span></a>
    
      </div>
    </div>
  </div>
  
    </div>
  </section>

  <footer class="site-footer global-padding global-padding--xlarge blue--dark">
        <div class="grid-container">
      <div class="grid-x grid-margin-x">
        <div class="cell initial-12 large-order-1">
          <a class="site-footer__logo" href="/forward-blue">
            <article>
  
        <img src="sites/default/files/forwardblue_mark_stacked_white.png" width="1224" height="432" alt="Forward Blue footer logo" typeof="foaf:Image">


  </article>

          </a>
        </div>
        <div class="cell initial-12 large-auto global-spacing--xsmall large-order-3">
          <nav id="footer-menu" class="site-footer__menu">
                                <ul class="ul-class">
              <li class="li-class">
                <a class="ief link-class" href="https://www.creighton.edu"><span>Creighton University</span></a>
          </li>
              <li class="li-class">
                <a class="ief link-class" href="http://careers.creighton.edu/"><span>HR</span></a>
          </li>
              <li class="li-class">
                <a class="ief link-class" href="http://www.creighton.edu/safety"><span>Compliance</span></a>
          </li>
              <li class="li-class">
                <a class="ief link-class" href="https://www.creighton.edusites/www.creighton.edu/files/web_privacy_policy.pdf" target="_blank" rel="noopener"><span>Privacy</span></a>
          </li>
              <li class="li-class">
                <a class="ief link-class" href="http://www.creighton.edu/generalcounsel/officeofequityandinclusion/policyinformation/nondiscriminationstatement/" target="_blank" rel="noopener"><span>Non-Discrimination</span></a>
          </li>
          </ul>
  
                      </nav>
          <div class="site-footer__address">2500 California Plaza
Omaha, NE 68178 &bull; 402.280.2700</div>
          <div class="site-footer__social-media global-spacing--xxsmall"><div id="block-sociallinks" role="complementary" aria-label="Social Media Links" data-block-plugin-id="social_media_links_block" class="block-social-media-links">
  
    
      

<ul class="social-media-links--platforms platforms inline horizontal">
      <li>
      <a href="https://www.facebook.com/CreightonUniversityAlumni" target="_self" aria-label="Follow Creighton on Facebook" title="Follow Creighton on Facebook" rel="noopener">
        <span class="fa fa-facebook fa-3x"></span>
      </a>

          </li>
      <li>
      <a href="https://www.twitter.com/creightonalumni" target="_self" aria-label="Follow Creighton on Twitter" title="Follow Creighton on Twitter" rel="noopener">
        <span class="fa fa-twitter fa-3x"></span>
      </a>

          </li>
      <li>
      <a href="https://www.youtube.com/CreightonUniversity" target="_self" aria-label="Follow Creighton on YouTube" title="Follow Creighton on YouTube" rel="noopener">
        <span class="fa fa-youtube fa-3x"></span>
      </a>

          </li>
      <li>
      <a href="https://www.linkedin.com/groups/3066367/profile" target="_self" aria-label="Follow Creighton on LinkedIn" title="Follow Creighton on LinkedIn" rel="noopener">
        <span class="fa fa-linkedin fa-3x"></span>
      </a>

          </li>
  </ul>

  </div>
</div>
        </div>

        <div class="cell initial-12 large-auto global-spacing--xsmall large-order-2">
          <div class="site-footer__copyright">
            &copy; 2021 Creighton University
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

  </div>

    
    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/4","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"en"},"pluralDelimiter":"\u0003","data":{"extlink":{"extTarget":false,"extTargetNoOverride":false,"extNofollow":false,"extNoreferrer":false,"extFollowNoOverride":false,"extClass":"ext","extLabel":"(link is external)","extImgClass":false,"extSubdomains":true,"extExclude":"","extInclude":"","extCssExclude":"","extCssExplicit":".wysiwyg","extAlert":false,"extAlertText":"This link will take you to an external web site. We are not responsible for their content.","mailtoClass":"0","mailtoLabel":"(link sends email)","extUseFontAwesome":false,"extIconPlacement":"append","extFaLinkClasses":"fa fa-external-link","extFaMailtoClasses":"fa fa-envelope-o","whitelistedDomains":[]}},"ajax":[],"user":{"uid":0,"permissionsHash":"5213e078dae16625d1f67e29163fa3afedf6e0681d482d488ad3de49bf57b7e8"}}</script>
<script src="core/assets/vendor/domready/ready.min.js?v=1.0.8"></script>
<script src="core/assets/vendor/jquery/jquery.min.js?v=3.2.1"></script>
<script src="core/assets/vendor/jquery/jquery-extend-3.4.0.js?v=3.2.1"></script>
<script src="core/assets/vendor/jquery/jquery-htmlprefilter-3.5.0.js?v=3.2.1"></script>
<script src="core/assets/vendor/jquery-once/jquery.once.min.js?v=2.2.0"></script>
<script src="core/misc/drupalSettingsLoader.js?v=8.7.14"></script>
<script src="core/misc/drupal.js?v=8.7.14"></script>
<script src="core/misc/drupal.init.js?v=8.7.14"></script>
<script src="core/assets/vendor/picturefill/picturefill.min.js?v=3.0.1"></script>
<script src="modules/contrib/extlink/extlink.js?v=8.7.14"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="themes/custom/university_relations/assets/js/dist/app.js?v=1.x"></script>
<script src="core/assets/vendor/matchMedia/matchMedia.min.js?v=0.2.0"></script>

  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"NRJS-918b6ca4fcad0775dcc","applicationID":"828233294","transactionName":"ZlMBYkRUDRUDBRZYDV8ZIlVCXAwITSIQRBJQWj9YWVEGOiEJDEUQXloPU0RpLQkGAzRYB0Z1DFhCRwwKDgMQHFxHXwZB","queueTime":0,"applicationTime":2826,"atts":"ShQCFAxOHhs=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
