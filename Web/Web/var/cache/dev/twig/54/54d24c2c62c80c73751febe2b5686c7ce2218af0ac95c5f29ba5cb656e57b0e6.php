<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tactor/show.html.twig */
class __TwigTemplate_6945d546d40222f8a83e8ba510cdf6e675c45e286b1ed91b29a36c96904e2bb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tactor/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tactor/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\" prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#\">
<!-- Mirrored from pelicula.qodeinteractive.com/director-home/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 14:42:01 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<!-- /Added by HTTrack -->
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=yes\">
\t<link rel=\"profile\" href=\"https://gmpg.org/xfn/11\">
\t<title>Director Home &#8211; Pelicula</title>
\t<script data-cfasync=\"false\" data-pagespeed-no-defer>//<![CDATA[
\t\tvar gtm4wp_datalayer_name = \"dataLayer\";
\t\tvar dataLayer = dataLayer || [];
\t\t//]]>
\t</script>
\t<link rel='dns-prefetch' href='http://export.qodethemes.com/' />
\t<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
\t<link rel='dns-prefetch' href='http://s.w.org/' />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Feed\" href=\"../feed/index.html\" />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Comments Feed\" href=\"../comments/feed/index.html\" />
\t<script type=\"text/javascript\">
\t\twindow._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/12.0.0-1\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/12.0.0-1\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=5.4.1\"}};
\t\t/*! This file is auto-generated */
\t\t!function(e,a,t){var r,n,o,i,p=a.createElement(\"canvas\"),s=p.getContext&&p.getContext(\"2d\");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline=\"top\",s.font=\"600 32px Arial\",e){case\"flag\":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case\"emoji\":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement(\"script\");t.src=e,t.defer=t.type=\"text/javascript\",a.getElementsByTagName(\"head\")[0].appendChild(t)}for(i=Array(\"flag\",\"emoji\"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],\"flag\"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener(\"DOMContentLoaded\",n,!1),e.addEventListener(\"load\",n,!1)):(e.attachEvent(\"onload\",n),a.attachEvent(\"onreadystatechange\",function(){\"complete\"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
\t</script>
\t<style type=\"text/css\">
\t\timg.wp-smiley,
\t\timg.emoji {
\t\t\tdisplay: inline !important;
\t\t\tborder: none !important;
\t\t\tbox-shadow: none !important;
\t\t\theight: 1em !important;
\t\t\twidth: 1em !important;
\t\t\tmargin: 0 .07em !important;
\t\t\tvertical-align: -0.1em !important;
\t\t\tbackground: none !important;
\t\t\tpadding: 0 !important;
\t\t}
\t</style>
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/91ce8.css\" media=\"all\" />
\t<link rel='stylesheet' id='material-icons-css' href='https://fonts.googleapis.com/icon?family=Material+Icons&amp;ver=5.4.1' type='text/css' media='all' />
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/52993.css\" media=\"all\" />
\t<link rel='stylesheet' id='rabbit_css-css' href='../../export.qodethemes.com/_toolbar/assets/css/rbt-modulesc225.css?ver=5.4.1' type='text/css' media='all' />
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/edd85.css\" media=\"all\" />
\t<style id='rs-plugin-settings-inline-css' type='text/css'>
\t\t#rs-demo-id {}
\t</style>
\t<style id='woocommerce-inline-inline-css' type='text/css'>
\t\t.woocommerce form .form-row .required { visibility: visible; }
\t</style>
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/a2923.css\" media=\"all\" />
\t<link rel='stylesheet' id='pelicula-google-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C500%2C600%7CBebas+Neue%3A300%2C400%2C500%2C600&amp;subset=latin-ext&amp;ver=1.0.0' type='text/css' media='all' />
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/d5104.css\" media=\"all\" />
\t<style id='pelicula-style-inline-css' type='text/css'>
\t\t#qodef-page-outer { margin-top: -100px;}@media only screen and (max-width: 1024px) { #qodef-page-outer { margin-top: -70px;}}#qodef-page-footer-top-area { background-color: #000000;}#qodef-page-footer-bottom-area { background-color: #000000;border-top-color: rgba(255,255,255,0.1);border-top-width: 2px;}#qodef-page-inner { padding: 0 0;}#qodef-page-spinner .qodef-m-inner { background-color: #000000;color: #ffffff;}.qodef-page-title { height: 250px;background-image: url(../wp-content/uploads/2020/03/title-image-1.jpg);}.qodef-page-title .qodef-m-content { padding-top: 100px;}@media only screen and (max-width: 1024px) { .qodef-page-title .qodef-m-content { padding-top: 70px;}}a, p a { letter-spacing: 0px;}.qodef-header--minimal #qodef-page-header { background-color: rgba(255,255,255,0);}@media only screen and (max-width: 1024px){h1 { font-size: 62px;line-height: 62px;}h2 { font-size: 60px;line-height: 60px;}h4 { font-size: 27px;line-height: 27px;}}@media only screen and (max-width: 768px){h1 { font-size: 58px;line-height: 58px;}h5 { font-size: 22px;line-height: 23px;}}@media only screen and (max-width: 680px){h1 { font-size: 52px;line-height: 50px;}h2 { font-size: 45px;line-height: 43px;}h3 { font-size: 32px;line-height: 34px;}h4 { font-size: 30px;line-height: 28px;}}
\t</style>
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/e7d1d.css\" media=\"all\" />
\t<script src=\"../wp-content/cache/minify/a4d4c.js\"></script>
\t<link rel='https://api.w.org/' href='../wp-json/index.html' />
\t<link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"../xmlrpc0db0.html?rsd\" />
\t<link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"../wp-includes/wlwmanifest.xml\" />
\t<meta name=\"generator\" content=\"WordPress 5.4.1\" />
\t<meta name=\"generator\" content=\"WooCommerce 4.1.0\" />
\t<link rel=\"canonical\" href=\"index.html\" />
\t<link rel='shortlink' href='../indexd4c3.html?p=758' />
\t<link rel=\"alternate\" type=\"application/json+oembed\" href=\"../wp-json/oembed/1.0/embed0abf.json?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fdirector-home%2F\" />
\t<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"../wp-json/oembed/1.0/embed82f1?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fdirector-home%2F&amp;format=xml\" />
\t<meta property='og:site_name' content='Pelicula' />
\t<meta property='og:url' content='https://pelicula.qodeinteractive.com' />
\t<meta property='og:locale' content='en_US' />
\t<meta property='og:description' content='Pelicula is a modern theme specifically designed for movie, film, and all types of video production websites. ' />
\t<meta property='og:title' content='Pelicula - Video Production and Movie Theme' />
\t<meta property='og:type' content='website' />
\t<meta property='og:image' content='https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/1200x630.jpg' />
\t<meta property='og:image:width' content='1200' />
\t<meta property='og:image:height' content='630' />
\t<meta name='twitter:card' content='summary' />
\t<meta name='twitter:title' content='Pelicula - Video Production and Movie Theme' />
\t<meta name='twitter:image' content='https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/1200x630.jpg' />
\t<meta name='twitter:description' content='Pelicula is a modern theme specifically designed for movie, film, and all types of video production websites. ' />
\t<script data-cfasync=\"false\" data-pagespeed-no-defer>//<![CDATA[
\t\tvar dataLayer_content = {\"pagePostType\":\"page\",\"pagePostType2\":\"single-page\",\"pagePostAuthor\":\"admin\"};
\t\tdataLayer.push( dataLayer_content );//]]>
\t</script>
\t<script data-cfasync=\"false\">//<![CDATA[
\t\t(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
\t\t\t\t\tnew Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
\t\t\t\tj=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
\t\t\t\t'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
\t\t})(window,document,'script','dataLayer','GTM-5T772QJ');//]]>
\t</script>
\t<noscript>
\t\t<style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
\t</noscript>
\t<meta name=\"generator\" content=\"Powered by Slider Revolution 6.2.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.\" />
\t<link rel=\"icon\" href=\"../wp-content/uploads/2020/05/cropped-favicon-pelicula-32x32.png\" sizes=\"32x32\" />
\t<link rel=\"icon\" href=\"../wp-content/uploads/2020/05/cropped-favicon-pelicula-192x192.png\" sizes=\"192x192\" />
\t<link rel=\"apple-touch-icon\" href=\"../wp-content/uploads/2020/05/cropped-favicon-pelicula-180x180.png\" />
\t<meta name=\"msapplication-TileImage\" content=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/cropped-favicon-pelicula-270x270.png\" />
\t<script type=\"text/javascript\">function setREVStartSize(e){
\t\t\t//window.requestAnimationFrame(function() {
\t\t\twindow.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
\t\t\twindow.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
\t\t\ttry {
\t\t\t\tvar pw = document.getElementById(e.c).parentNode.offsetWidth,
\t\t\t\t\t\tnewh;
\t\t\t\tpw = pw===0 || isNaN(pw) ? window.RSIW : pw;
\t\t\t\te.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
\t\t\t\te.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
\t\t\t\te.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
\t\t\t\te.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
\t\t\t\te.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
\t\t\t\te.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
\t\t\t\te.mh = e.mh===undefined || e.mh==\"\" || e.mh===\"auto\" ? 0 : parseInt(e.mh,0);
\t\t\t\tif(e.layout===\"fullscreen\" || e.l===\"fullscreen\")
\t\t\t\t\tnewh = Math.max(e.mh,window.RSIH);
\t\t\t\telse{
\t\t\t\t\te.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
\t\t\t\t\tfor (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
\t\t\t\t\te.gh = e.el===undefined || e.el===\"\" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
\t\t\t\t\te.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
\t\t\t\t\tfor (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

\t\t\t\t\tvar nl = new Array(e.rl.length),
\t\t\t\t\t\t\tix = 0,
\t\t\t\t\t\t\tsl;
\t\t\t\t\te.tabw = e.tabhide>=pw ? 0 : e.tabw;
\t\t\t\t\te.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
\t\t\t\t\te.tabh = e.tabhide>=pw ? 0 : e.tabh;
\t\t\t\t\te.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
\t\t\t\t\tfor (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
\t\t\t\t\tsl = nl[0];
\t\t\t\t\tfor (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
\t\t\t\t\tvar m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
\t\t\t\t\tnewh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
\t\t\t\t}
\t\t\t\tif(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement(\"style\"));
\t\t\t\tdocument.getElementById(e.c).height = newh+\"px\";
\t\t\t\twindow.rs_init_css.innerHTML += \"#\"+e.c+\"_wrapper { height: \"+newh+\"px }\";
\t\t\t} catch(e){
\t\t\t\tconsole.log(\"Failure at Presize of Slider:\" + e)
\t\t\t}
\t\t\t//});
\t\t};
\t</script>
\t<style type=\"text/css\" id=\"wp-custom-css\">
\t\t.page-id-1544 .qodef-inner-homes-slider .qodef-e-media-image {
\t\t\ttransform: scale(1) !important;
\t\t}
\t\t.page-id-1893 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-1895 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-1903 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-1907 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-2370 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-1652 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t@media only screen and (min-width: 1025px) and (max-width: 1440px) {
\t\t\t.page-id-1544 .elementor-1544 .elementor-element.elementor-element-5cb2047 > .elementor-widget-container {
\t\t\t\tpadding: 12% 0 0 0;
\t\t\t}
\t\t}
\t\t@media only screen and (min-width: 769px) and (max-width: 1024px) {
\t\t\t.page-id-1544 .elementor-1544 .elementor-element.elementor-element-242eb3f > .elementor-widget-container,
\t\t\t.page-id-1544 .elementor-1544 .elementor-element.elementor-element-ea6686e > .elementor-widget-container {
\t\t\t\tpadding: 13% 0 0 0;
\t\t\t}
\t\t}
\t\t.page-id-1544 .qodef-fullscreen-menu-opener {
\t\t\tdisplay:none;
\t\t}
\t</style>
</head>
<body class=\"page-template page-template-page-full-width page-template-page-full-width-php page page-id-758 theme-pelicula qode-framework-1.1.2 woocommerce-no-js qodef-age-verification--opened qodef-back-to-top--enabled  qodef-content-grid-1300 qodef-content-behind-header qodef-header--light qodef-header--minimal qodef-header-appearance--none qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--default pelicula-core-1.0 pelicula-1.0 qodef-search--fullscreen elementor-default elementor-kit-9 elementor-page elementor-page-758\" itemscope itemtype=\"https://schema.org/WebPage\">
<div id=\"qodef-page-wrapper\" class=\"\">
\t<div class=\"qodef-content-lines-holder qodef-skin--light\">
\t\t<div class=\"qodef-content-line qodef--left\"></div>
\t\t<div class=\"qodef-content-line qodef--center\"></div>
\t\t<div class=\"qodef-content-line qodef--right\"></div>
\t</div>
\t<header id=\"qodef-page-header\">
\t\t<div id=\"qodef-page-header-inner\">
\t\t\t<a itemprop=\"url\" class=\"qodef-header-logo-link qodef-height--not-set qodef-textual-logo qodef--line-through\" href=\"../index.html\" style=\";;\" rel=\"home\">
               <span class=\"qodef-logo-text\">
               <span class=\"qodef-logo-text-inner\">P</span>
               </span>
\t\t\t</a>
\t\t\t<div class=\"qodef-widget-holder\"></div>
\t\t\t<a href=\"javascript:void(0)\" class=\"qodef-opener-icon qodef-m qodef-source--predefined qodef-fullscreen-menu-opener\">
               <span class=\"qodef-m-icon qodef--open\">
               <span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
\t\t\t\t<span class=\"qodef-m-icon qodef--close\">
               <span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
\t\t\t</a>
\t\t</div>
\t</header>
\t<header id=\"qodef-page-mobile-header\">
\t\t<div id=\"qodef-page-mobile-header-inner\">
\t\t\t<a itemprop=\"url\" class=\"qodef-mobile-header-logo-link qodef-textual-logo qodef--line-through\" href=\"../index.html\" style=\"height:50px;\" rel=\"home\">
               <span class=\"qodef-logo-text\">
               <span class=\"qodef-logo-text-inner\">P</span>
               </span>
\t\t\t\t<img width=\"52\" height=\"91\" src=\"../wp-content/uploads/2020/03/logo-light.png\" class=\"qodef-header-logo-image qodef--dark\" alt=\"logo dark\" /><img width=\"52\" height=\"91\" src=\"../wp-content/uploads/2020/03/logo-light.png\" class=\"qodef-header-logo-image qodef--light\" alt=\"logo light\" /></a>
\t\t\t<a class=\"qodef-mobile-header-opener\" href=\"#\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"39px\" height=\"11px\">
\t\t\t\t\t<path fill-rule=\"evenodd\" fill=\"rgb(17, 17, 17)\" d=\"M8.000,3.000 L8.000,-0.000 L39.000,-0.000 L39.000,3.000 L8.000,3.000 ZM31.000,11.000 L-0.000,11.000 L-0.000,8.000 L31.000,8.000 L31.000,11.000 Z\" />
\t\t\t\t</svg>
\t\t\t</a>
\t\t\t<nav class=\"qodef-mobile-header-navigation\" role=\"navigation\" aria-label=\"Mobile Menu\">
\t\t\t\t<ul id=\"menu-main-menu-2\" class=\"qodef-content-grid\">
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-51 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-346\"><a href=\"../index.html\"><span class=\"qodef-menu-item-text\">Main Home</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-580\"><a href=\"../film-festival/index.html\"><span class=\"qodef-menu-item-text\">Film Festival</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-687\"><a href=\"../parallax-showcase/index.html\"><span class=\"qodef-menu-item-text\">Parallax Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-570\"><a href=\"../video-production-studio/index.html\"><span class=\"qodef-menu-item-text\">Video Production Studio</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2651\"><a href=\"../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-748\"><a href=\"../interactive-title-showcase/index.html\"><span class=\"qodef-menu-item-text\">Interactive Title Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-758 current_page_item menu-item-806\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-822\"><a href=\"../fullscreen-showcase/index.html\"><span class=\"qodef-menu-item-text\">Fullscreen Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-895\"><a href=\"../film-gallery/index.html\"><span class=\"qodef-menu-item-text\">Film Gallery</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2211\"><a href=\"../film-showcase/index.html\"><span class=\"qodef-menu-item-text\">Film Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-874\"><a href=\"../video-home/index.html\"><span class=\"qodef-menu-item-text\">Video Home</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-905\"><a href=\"../coming-soon/index.html\"><span class=\"qodef-menu-item-text\">Coming Soon</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-933\"><a href=\"../interactive-links/index.html\"><span class=\"qodef-menu-item-text\">Interactive Links</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1798\"><a href=\"../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-52 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Pages</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1104\"><a href=\"../about-us/index.html\"><span class=\"qodef-menu-item-text\">About Us</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1451\"><a href=\"../what-we-do/index.html\"><span class=\"qodef-menu-item-text\">What We Do</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1242\"><a href=\"../our-process/index.html\"><span class=\"qodef-menu-item-text\">Our Process</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1383\"><a href=\"../our-team/index.html\"><span class=\"qodef-menu-item-text\">Our Team</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1149\"><a href=\"../contact-us/index.html\"><span class=\"qodef-menu-item-text\">Contact Us</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1243\"><a href=\"../faq-page/index.html\"><span class=\"qodef-menu-item-text\">FAQ Page</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1777\"><a href=\"../404.html\"><span class=\"qodef-menu-item-text\">404 Error Page</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-55 qodef-menu-item--wide\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner qodef-content-grid\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1882 qodef--hide-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Types</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1881\"><a href=\"../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2777\"><a href=\"../portfolio/gallery-list/index.html\"><span class=\"qodef-menu-item-text\">Gallery List</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1880\"><a href=\"../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2430\"><a href=\"../portfolio/highlight-slider/index.html\"><span class=\"qodef-menu-item-text\">HighLight Slider</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2429\"><a href=\"../portfolio/overlay-slider/index.html\"><span class=\"qodef-menu-item-text\">Overlay Slider</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2428\"><a href=\"../portfolio/carousel/index.html\"><span class=\"qodef-menu-item-text\">Carousel</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1883 qodef--hide-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Layouts</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1918\"><a href=\"../portfolio/two-columns/index.html\"><span class=\"qodef-menu-item-text\">Two Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1917\"><a href=\"../portfolio/three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1916\"><a href=\"../portfolio/three-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Three Columns Wide</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1915\"><a href=\"../portfolio/four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1914\"><a href=\"../portfolio/four-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Four Columns Wide</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1913\"><a href=\"../portfolio/five-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Five Columns Wide</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2379\"><a href=\"../portfolio/six-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Six Columns Wide</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-362 qodef--hide-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2461\"><a href=\"../portfolio-item/the-eternal-void/index.html\"><span class=\"qodef-menu-item-text\">Big Images</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-369\"><a href=\"../portfolio-item/see-the-light/index.html\"><span class=\"qodef-menu-item-text\">Small Images</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-368\"><a href=\"../portfolio-item/finding-art/index.html\"><span class=\"qodef-menu-item-text\">Big Gallery</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-367\"><a href=\"../portfolio-item/fresh-start/index.html\"><span class=\"qodef-menu-item-text\">Small Gallery</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-365\"><a href=\"../portfolio-item/our-future/index.html\"><span class=\"qodef-menu-item-text\">Big Masonry</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-364\"><a href=\"../portfolio-item/not-impossible/index.html\"><span class=\"qodef-menu-item-text\">Small Masonry</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-366\"><a href=\"../portfolio-item/studio-lightening/index.html\"><span class=\"qodef-menu-item-text\">Slider</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1271\"><a href=\"../portfolio-item/what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1310\"><a href=\"../portfolio-item/hueco-mundo/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Light</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2131 qodef--hide-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Hover Types</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2456\"><a href=\"../portfolio/info-bottom-left/index.html\"><span class=\"qodef-menu-item-text\">Info Bottom Left</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2453\"><a href=\"../portfolio/fade-in-hover/index.html\"><span class=\"qodef-menu-item-text\">Fade In Hover</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2454\"><a href=\"../portfolio/info-follow/index.html\"><span class=\"qodef-menu-item-text\">Info Follow</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2455\"><a href=\"../portfolio/direction-aware/index.html\"><span class=\"qodef-menu-item-text\">Direction Aware</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-236\"><a href=\"../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-239\"><a href=\"../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-238\"><a href=\"../left-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Left Sidebar</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-237\"><a href=\"../no-sidebar/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-159\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-164\"><a href=\"../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-161\"><a href=\"../out-of-sight/index.html\"><span class=\"qodef-menu-item-text\">Gallery Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-163\"><a href=\"../old-cameras/index.html\"><span class=\"qodef-menu-item-text\">Video Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2543\"><a href=\"../new-soundtrack/index.html\"><span class=\"qodef-menu-item-text\">Audio Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-162\"><a href=\"../blade-runner/index.html\"><span class=\"qodef-menu-item-text\">Quote Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-160\"><a href=\"../bliss-bone/index.html\"><span class=\"qodef-menu-item-text\">Link Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2544\"><a href=\"../sky-valley/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-137\"><a href=\"../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-139\"><a href=\"../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Product Single</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Layouts</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-189\"><a href=\"../three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1055\"><a href=\"../four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1049\"><a href=\"../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-138\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Shop Pages</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-134\"><a href=\"../my-account/index.html\"><span class=\"qodef-menu-item-text\">My Account</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-136\"><a href=\"../cart/index.html\"><span class=\"qodef-menu-item-text\">Cart</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-135\"><a href=\"../checkout/index.html\"><span class=\"qodef-menu-item-text\">Checkout</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</header>
\t<div id=\"qodef-page-outer\">
\t\t<div id=\"qodef-page-inner\" class=\"qodef-content-full-width\">
\t\t\t<main id=\"qodef-page-content\" class=\"qodef-grid qodef-layout--template \">
\t\t\t\t<div class=\"qodef-grid-inner clear\">
\t\t\t\t\t<div class=\"qodef-grid-item qodef-page-content-section qodef-col--12\">
\t\t\t\t\t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"758\" class=\"elementor elementor-758\" data-elementor-settings=\"[]\">
\t\t\t\t\t\t\t<div class=\"elementor-inner\">
\t\t\t\t\t\t\t\t<div class=\"elementor-section-wrap\">
\t\t\t\t\t\t\t\t\t<section class=\"elementor-element elementor-element-c372683 elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"c372683\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3a8a6f1 elementor-column elementor-col-100 elementor-top-column\" data-id=\"3a8a6f1\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-7d0b350 elementor-widget elementor-widget-slider_revolution\" data-id=\"7d0b350\" data-element_type=\"widget\" data-widget_type=\"slider_revolution.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wp-block-themepunch-revslider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rs-p-wp-fix\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-module-wrap id=\"rev_slider_5_1_wrapper\" data-source=\"gallery\" style=\"background:transparent;padding:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-module id=\"rev_slider_5_1\" style=\"\" data-version=\"6.2.6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trs-slides {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvisibility: visible;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmax-height: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\toverflow: hidden;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-slides id=\"actorim\" style=\"element.style {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t overflow: hidden;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t height: 50%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t width: 50%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t z-index: 20;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t opacity: 1;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t visibility: inherit;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t }\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-slide id=\"actorim\" style=\"element.style {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\toverflow: hidden;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvisibility: inherit;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../wp-content";
        // line 414
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tactor"]) || array_key_exists("tactor", $context) ? $context["tactor"] : (function () { throw new RuntimeError('Variable "tactor" does not exist.', 414, $this->source); })()), "image", [], "any", false, false, false, 414), "html", null, true);
        echo "\" alt=\"a\" title=\"h7-slider-img-1\" width=\"1920\" height=\"900\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-0\" data-type=\"text\" data-tsh=\"c:rgba(0,0,0,0.2);h:3px;v:4px;b:10px;\" data-xy=\"y:m;\" data-text=\"w:normal;s:190,190,130,70;l:180,180,120,60;\" data-dim=\"w:616px,616px,616px,333px;\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-frame_999=\"o:0;st:w;\" style=\"z-index:5;font-family:Bebas Neue;\">";
        // line 415
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tactor"]) || array_key_exists("tactor", $context) ? $context["tactor"] : (function () { throw new RuntimeError('Variable "tactor" does not exist.', 415, $this->source); })()), "name", [], "any", false, false, false, 415), "html", null, true);
        echo "</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-1\" data-type=\"text\" data-xy=\"y:m;yo:205px,205px,155px,95px;\" data-text=\"w:normal;s:18;l:26;ls:4px;\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-frame_999=\"o:0;st:w;\" style=\"z-index:6;font-family:Bebas Neue;\">Born in ";
        // line 416
        ((twig_get_attribute($this->env, $this->source, (isset($context["tactor"]) || array_key_exists("tactor", $context) ? $context["tactor"] : (function () { throw new RuntimeError('Variable "tactor" does not exist.', 416, $this->source); })()), "born", [], "any", false, false, false, 416)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tactor"]) || array_key_exists("tactor", $context) ? $context["tactor"] : (function () { throw new RuntimeError('Variable "tactor" does not exist.', 416, $this->source); })()), "born", [], "any", false, false, false, 416), "Y/m/d"), "html", null, true))) : (print ("")));
        echo "</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-10\" data-type=\"shape\" data-xy=\"xo:450px,450px,299px,161px;y:m;yo:-96px,-96px,-62px,-32px;\" data-text=\"w:normal;\" data-dim=\"w:80px,80px,65px,35px;h:15px,15px,12px,8px;\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-frame_0=\"x:-100%;\" data-frame_0_mask=\"u:t;\" data-frame_1=\"sp:1000;\" data-frame_1_mask=\"u:t;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:7;background-color:#ffffff;\"></rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-slide>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-slides>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-static-layers>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-6\" class=\"rs-layer-static\" data-type=\"text\" data-xy=\"xo:43px,43px,43px,23px;y:m,m,b,b;yo:60px,60px,40px,20px;\" data-text=\"w:normal;s:14;l:14;\" data-basealign=\"slide\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-btrans=\"rZ:-90;\" data-onslides=\"s:1;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:14;font-family:Roboto;\"><span class=\"qodef-shortcode qodef-m  qodef-icon-holder qodef-size--default qodef-layout--normal\">
                                                                        <a itemprop=\"url\" href=\"https://www.youtube.com/QodeInteractiveVideos\" target=\"_blank\">
                                                                        <span class=\"qodef-icon-elegant-icons social_youtube qodef-icon qodef-e\" style=\"color: #FFFFFF\"></span> </a>
                                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-7\" class=\"rs-layer-static\" data-type=\"text\" data-xy=\"xo:43px,43px,43px,23px;y:m,m,b,b;yo:20px,20px,80px,60px;\" data-text=\"w:normal;s:14;l:14;\" data-basealign=\"slide\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-btrans=\"rZ:-90;\" data-onslides=\"s:1;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:15;font-family:Roboto;\"><span class=\"qodef-shortcode qodef-m  qodef-icon-holder qodef-size--default qodef-layout--normal\">
                                                                        <a itemprop=\"url\" href=\"https://www.instagram.com/qodeinteractive/\" target=\"_blank\">
                                                                        <span class=\"qodef-icon-elegant-icons social_instagram qodef-icon qodef-e\" style=\"color: #FFFFFF\"></span> </a>
                                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-8\" class=\"rs-layer-static\" data-type=\"text\" data-xy=\"xo:43px,43px,43px,23px;y:m,m,b,b;yo:-20px,-20px,120px,100px;\" data-text=\"w:normal;s:14;l:14;\" data-basealign=\"slide\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-btrans=\"rZ:-90;\" data-onslides=\"s:1;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:7;font-family:Roboto;\"><span class=\"qodef-shortcode qodef-m  qodef-icon-holder qodef-size--default qodef-layout--normal\">
                                                                        <a itemprop=\"url\" href=\"https://twitter.com/QodeInteractive\" target=\"_blank\">
                                                                        <span class=\"qodef-icon-elegant-icons social_twitter qodef-icon qodef-e\" style=\"color: #FFFFFF\"></span> </a>
                                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-9\" class=\"rs-layer-static\" data-type=\"text\" data-xy=\"xo:43px,43px,43px,23px;y:m,m,b,b;yo:-60px,-60px,160px,140px;\" data-text=\"w:normal;s:14;l:14;\" data-basealign=\"slide\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-btrans=\"rZ:-90;\" data-onslides=\"s:1;\" data-frame_1=\"e:power4.inOut;sp:1500;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:17;font-family:Roboto;\"><span class=\"qodef-shortcode qodef-m  qodef-icon-holder qodef-size--default qodef-layout--normal\">
                                                                        <a itemprop=\"url\" href=\"https://www.facebook.com/QodeInteractive/\" target=\"_blank\">
                                                                        <span class=\"qodef-icon-elegant-icons social_facebook qodef-icon qodef-e\" style=\"color: #FFFFFF\"></span> </a>
                                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-static-layers>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-progress class=\"rs-bottom\" style=\"visibility: hidden !important;\"></rs-progress>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-module>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetREVStartSize({c: 'rev_slider_5_1',rl:[1920,1700,1025,700],el:[700,600,600,500],gw:[1300,1100,600,300],gh:[700,600,600,500],type:'standard',justify:'',layout:'fullscreen',offsetContainer:'',offset:'',mh:\"0\"});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar\trevapi5,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttpj;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tjQuery(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttpj = jQuery;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trevapi5 = tpj(\"#rev_slider_5_1\")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(revapi5==undefined || revapi5.revolution == undefined){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trevslider_showDoubleJqueryError(\"rev_slider_5_1\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trevapi5.revolution({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsliderLayout:\"fullscreen\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tduration:\"4000ms\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvisibilityLevels:\"1920,1700,1025,700\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tgridwidth:\"1300,1100,600,300\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tgridheight:\"700,600,600,500\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tperspective:600,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tperspectiveType:\"local\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\teditorheight:\"700,600,600,500\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tresponsiveLevels:\"1920,1700,1025,700\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdisableProgressBar:\"on\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnavigation: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonHoverStop:false
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfallbacks: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tallowHTML5AutoPlayOnAndroid:true
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-module-wrap>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<section class=\"qodef-parallax--custom elementor-element elementor-element-e83a0d1 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"e83a0d1\" data-element_type=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-ac1ed30 elementor-column elementor-col-100 elementor-top-column\" data-id=\"ac1ed30\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"elementor-element elementor-element-ad1f19d elementor-section-boxed elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-inner-section\" data-id=\"ad1f19d\" data-element_type=\"section\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-76edc2e elementor-column elementor-col-50 elementor-inner-column\" style=\"width: 200%\" data-id=\"76edc2e\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5a1c547 elementor-widget elementor-widget-pelicula_core_section_title\" data-id=\"5a1c547\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_section_title.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left \" data-holder-options=\"{&quot;line-breaks&quot;:&quot;&quot;}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"qodef-m-title\" style=\"color: #FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 502
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tactor"]) || array_key_exists("tactor", $context) ? $context["tactor"] : (function () { throw new RuntimeError('Variable "tactor" does not exist.', 502, $this->source); })()), "description", [], "any", false, false, false, 502), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-048095b elementor-column elementor-col-50 elementor-inner-column\" data-id=\"048095b\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-aad955a elementor-widget elementor-widget-image\" data-id=\"aad955a\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"112\" height=\"61\" src=\"../wp-content/uploads/2020/03/h4-signature-img.png\" class=\"attachment-large size-large\" alt=\"a\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-de9cc9d elementor-section-full_width qodef-in-focus elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"de9cc9d\" data-element_type=\"section\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-60d2309 elementor-column elementor-col-50 elementor-top-column\" data-id=\"60d2309\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-f6e80c5 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"f6e80c5\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1100\" height=\"620\" src=\"../wp-content/uploads/2020/03/h4-image-1.jpg\" class=\"attachment-full size-full\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1.jpg 1100w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1-800x451.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1-1024x577.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1-768x433.jpg 768w\" sizes=\"(max-width: 1100px) 100vw, 1100px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"https://vimeo.com/90049558\" data-type=\"iframe\">
                                                      <span class=\"qodef-m-play-inner\">
                                                      <span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-cc2d0ae elementor-column elementor-col-50 elementor-top-column\" data-id=\"cc2d0ae\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-e5aea33 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"e5aea33\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1100\" height=\"620\" src=\"../wp-content/uploads/2020/03/h4-image-2.jpg\" class=\"attachment-full size-full\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2.jpg 1100w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2-800x451.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2-1024x577.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2-768x433.jpg 768w\" sizes=\"(max-width: 1100px) 100vw, 1100px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"https://vimeo.com/165267113\" data-type=\"iframe\">
                                                      <span class=\"qodef-m-play-inner\">
                                                      <span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-379d39d elementor-section-full_width qodef-in-focus elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"379d39d\" data-element_type=\"section\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-756b968 elementor-column elementor-col-50 elementor-top-column\" data-id=\"756b968\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-f165f16 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"f165f16\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1100\" height=\"620\" src=\"../wp-content/uploads/2020/03/h4-image-3.jpg\" class=\"attachment-full size-full\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3.jpg 1100w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3-800x451.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3-1024x577.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3-768x433.jpg 768w\" sizes=\"(max-width: 1100px) 100vw, 1100px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"https://vimeo.com/36334134\" data-type=\"iframe\">
                                                      <span class=\"qodef-m-play-inner\">
                                                      <span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-b08c266 elementor-column elementor-col-50 elementor-top-column\" data-id=\"b08c266\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-62637a4 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"62637a4\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1100\" height=\"620\" src=\"../wp-content/uploads/2020/03/h4-image-4.jpg\" class=\"attachment-full size-full\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4.jpg 1100w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4-800x451.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4-1024x577.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4-768x433.jpg 768w\" sizes=\"(max-width: 1100px) 100vw, 1100px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"https://vimeo.com/15595024\" data-type=\"iframe\">
                                                      <span class=\"qodef-m-play-inner\">
                                                      <span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"qodef-parallax--custom elementor-element elementor-element-aeaf554 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"aeaf554\" data-element_type=\"section\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-6479aaa elementor-column elementor-col-100 elementor-top-column\" data-id=\"6479aaa\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<section class=\"elementor-element elementor-element-98564ea elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-inner-section\" data-id=\"98564ea\" data-element_type=\"section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-d127745 elementor-column elementor-col-50 elementor-inner-column\" data-id=\"d127745\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-6427565 elementor-widget elementor-widget-heading\" data-id=\"6427565\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">Education</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-8ed2527 elementor-widget elementor-widget-spacer\" data-id=\"8ed2527\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-94bb44f elementor-widget elementor-widget-pelicula_core_movies_list\" data-id=\"94bb44f\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_movies_list.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-movies-list qodef-skin--light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2006-2010</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">BA Degree</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Photography &amp;film</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Australian Film, Television and Radio School”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2010-2012</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">Ma Degree</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Direction &amp; Production</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Busan Asian Film School”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2012-2014</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">BA Degree</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Direction &amp; Writing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Centro Sperimentale di Cinematografia”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-78d30ac elementor-widget elementor-widget-spacer\" data-id=\"78d30ac\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5a74b96 elementor-column elementor-col-50 elementor-inner-column\" data-id=\"5a74b96\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5240dee elementor-widget elementor-widget-heading\" data-id=\"5240dee\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">Awards</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-f45925f elementor-widget elementor-widget-spacer\" data-id=\"f45925f\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-cc1bbcd elementor-widget elementor-widget-pelicula_core_movies_list\" data-id=\"cc1bbcd\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_movies_list.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-movies-list qodef-skin--light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2012</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">&quot;Secret&quot;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Best Film Winner</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Sundance Festival”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2014</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Himmel”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Best Screenplay</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Golden Globes, USA”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2016</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Guilt”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Best film nominee</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Academy Awards, USA”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2019</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Hueco”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Best Foreign Film</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“BAFTA Awards”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-faba6f8 elementor-widget elementor-widget-spacer\" data-id=\"faba6f8\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-3d486e5 elementor-section-full_width qodef-in-focus elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"3d486e5\" data-element_type=\"section\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-094f636 elementor-column elementor-col-100 elementor-top-column\" data-id=\"094f636\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-ae971f3 elementor-widget elementor-widget-pelicula_core_blog_list\" data-id=\"ae971f3\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_blog_list.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-blog  qodef-item-layout--metro  qodef-grid qodef-layout--columns   qodef-gutter--no qodef-col-num--2 qodef-item-layout--metro qodef--no-bottom-space qodef-pagination--off qodef-responsive--custom qodef-col-num--1440--2 qodef-col-num--1366--2 qodef-col-num--1024--2 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1\" data-options=\"{&quot;plugin&quot;:&quot;pelicula_core&quot;,&quot;module&quot;:&quot;blog\\/shortcodes&quot;,&quot;shortcode&quot;:&quot;blog-list&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:2,&quot;behavior&quot;:&quot;columns&quot;,&quot;custom_proportions&quot;:&quot;no&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;2&quot;,&quot;columns_responsive&quot;:&quot;custom&quot;,&quot;columns_1440&quot;:&quot;2&quot;,&quot;columns_1366&quot;:&quot;2&quot;,&quot;columns_1024&quot;:&quot;2&quot;,&quot;columns_768&quot;:&quot;1&quot;,&quot;columns_680&quot;:&quot;1&quot;,&quot;columns_480&quot;:&quot;1&quot;,&quot;space&quot;:&quot;no&quot;,&quot;posts_per_page&quot;:&quot;4&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;category&quot;,&quot;tax_slug&quot;:&quot;festival&quot;,&quot;layout&quot;:&quot;metro&quot;,&quot;title_tag&quot;:&quot;h3&quot;,&quot;title_custom_style&quot;:&quot;no&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;enable_button&quot;:&quot;yes&quot;,&quot;enable_comments&quot;:&quot;yes&quot;,&quot;enable_social_share&quot;:&quot;yes&quot;,&quot;object_class_name&quot;:&quot;PeliculaCoreBlogListShortcode&quot;,&quot;taxonomy_filter&quot;:&quot;category&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;category&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;festival&quot;}]}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-grid-inner clear\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"qodef-e qodef-grid-item qodef-item--full post-968 post type-post status-publish format-standard has-post-thumbnail hentry category-festival tag-documentary tag-drama tag-video\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-post-link\" href=\"../filming-for-spleen-officially-started-on-monday-21-03-19/index.html\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-media-image qodef--background\" style=\"background-image: url( ../wp-content/uploads/2020/03/h7-blog-image-1.jpg)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1300\" height=\"730\" src=\"../wp-content/uploads/2020/03/h7-blog-image-1.jpg\" class=\"attachment-full size-full wp-post-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1.jpg 1300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1-300x168.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1-800x449.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1-1024x575.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1-768x431.jpg 768w\" sizes=\"(max-width: 1300px) 100vw, 1300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div itemprop=\"dateCreated\" class=\"qodef-e-info-item qodef-e-info-date entry-date published updated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" href=\"../2020/03/index.html\">27/03/2020</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"interactionCount\" content=\"UserComments: 2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-author-label\">by</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"author\" class=\"qodef-e-info-author-link\" href=\"../author/mark-smith/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark Smith\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../category/festival/index.html\" rel=\"category tag\">Festival</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 itemprop=\"name\" class=\"qodef-e-title entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-title-link\" href=\"../filming-for-spleen-officially-started-on-monday-21-03-19/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFilming for “spleen” officially started on monday 21/03/19\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-full\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-read-more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link\" href=\"../filming-for-spleen-officially-started-on-monday-21-03-19/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Read More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-info-comments-link\" href=\"../filming-for-spleen-officially-started-on-monday-21-03-19/index.html#comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-comments-icon fa fa-comment\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 comments </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-social-share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-social-share-dropdown-opener\" href=\"javascript:void(0)\"> <i class=\"qodef-social-share-icon fa fa-share-alt\"></i> <span class=\"qodef-social-title\">share</span> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-social-share-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-shortcode-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-facebook-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fpelicula.qodeinteractive.com%2Ffilming-for-spleen-officially-started-on-monday-21-03-19%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);\"> <span class=\"qodef-icon-elegant-icons social_facebook qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-twitter-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut++via+%40QodeInteractivehttps://pelicula.qodeinteractive.com/filming-for-spleen-officially-started-on-monday-21-03-19/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);\"> <span class=\"qodef-icon-elegant-icons social_twitter qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-linkedin-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Ffilming-for-spleen-officially-started-on-monday-21-03-19%2F&amp;title=Filming+for+%E2%80%9Cspleen%E2%80%9D+officially++started+on+monday+21%2F03%2F19&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_linkedin qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-pinterest-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Ffilming-for-spleen-officially-started-on-monday-21-03-19%2F&amp;description=Filming+for+%E2%80%9Cspleen%E2%80%9D+officially++started+on+monday+21%2F03%2F19&amp;media=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F03%2Fh7-blog-image-1.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_pinterest qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"qodef-e qodef-grid-item qodef-item--full post-965 post type-post status-publish format-standard has-post-thumbnail hentry category-festival tag-drama tag-film tag-review tag-video\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-post-link\" href=\"../cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/index.html\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-media-image qodef--background\" style=\"background-image: url( ../wp-content/uploads/2020/03/h7-blog-image-2.jpg)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1300\" height=\"730\" src=\"../wp-content/uploads/2020/03/h7-blog-image-2.jpg\" class=\"attachment-full size-full wp-post-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2.jpg 1300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2-300x168.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2-800x449.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2-1024x575.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2-768x431.jpg 768w\" sizes=\"(max-width: 1300px) 100vw, 1300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div itemprop=\"dateCreated\" class=\"qodef-e-info-item qodef-e-info-date entry-date published updated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" href=\"../2020/03/index.html\">27/03/2020</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"interactionCount\" content=\"UserComments: 2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-author-label\">by</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"author\" class=\"qodef-e-info-author-link\" href=\"../author/mark-smith/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark Smith\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../category/festival/index.html\" rel=\"category tag\">Festival</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 itemprop=\"name\" class=\"qodef-e-title entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-title-link\" href=\"../cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCadenze rios picked for the upcoming “RENICIMIENTO”\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-full\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-read-more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link\" href=\"../cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Read More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-info-comments-link\" href=\"../cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/index.html#comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-comments-icon fa fa-comment\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 comments </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-social-share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-social-share-dropdown-opener\" href=\"javascript:void(0)\"> <i class=\"qodef-social-share-icon fa fa-share-alt\"></i> <span class=\"qodef-social-title\">share</span> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-social-share-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-shortcode-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-facebook-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fcadenze-rios-picked-for-the-upcoming-picture-renicimiento-4%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);\"> <span class=\"qodef-icon-elegant-icons social_facebook qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-twitter-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut++via+%40QodeInteractivehttps://pelicula.qodeinteractive.com/cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);\"> <span class=\"qodef-icon-elegant-icons social_twitter qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-linkedin-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fcadenze-rios-picked-for-the-upcoming-picture-renicimiento-4%2F&amp;title=Cadenze+rios+picked+for+the+upcoming+%E2%80%9CRENICIMIENTO%E2%80%9D&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_linkedin qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-pinterest-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fcadenze-rios-picked-for-the-upcoming-picture-renicimiento-4%2F&amp;description=Cadenze+rios+picked+for+the+upcoming+%E2%80%9CRENICIMIENTO%E2%80%9D&amp;media=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F03%2Fh7-blog-image-2.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_pinterest qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"qodef-e qodef-grid-item qodef-item--full post-962 post type-post status-publish format-standard has-post-thumbnail hentry category-festival tag-documentary tag-drama tag-film\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-post-link\" href=\"../adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/index.html\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-media-image qodef--background\" style=\"background-image: url( ../wp-content/uploads/2020/03/h7-blog-image-3.jpg)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1300\" height=\"730\" src=\"../wp-content/uploads/2020/03/h7-blog-image-3.jpg\" class=\"attachment-full size-full wp-post-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3.jpg 1300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3-300x168.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3-800x449.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3-1024x575.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3-768x431.jpg 768w\" sizes=\"(max-width: 1300px) 100vw, 1300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div itemprop=\"dateCreated\" class=\"qodef-e-info-item qodef-e-info-date entry-date published updated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" href=\"../2020/03/index.html\">27/03/2020</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"interactionCount\" content=\"UserComments: 2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-author-label\">by</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"author\" class=\"qodef-e-info-author-link\" href=\"../author/mark-smith/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark Smith\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../category/festival/index.html\" rel=\"category tag\">Festival</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 itemprop=\"name\" class=\"qodef-e-title entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-title-link\" href=\"../adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdaptation of a desert-scene’s rising to cult status\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-full\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-read-more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link\" href=\"../adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Read More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-info-comments-link\" href=\"../adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/index.html#comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-comments-icon fa fa-comment\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 comments </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-social-share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-social-share-dropdown-opener\" href=\"javascript:void(0)\"> <i class=\"qodef-social-share-icon fa fa-share-alt\"></i> <span class=\"qodef-social-title\">share</span> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-social-share-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-shortcode-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-facebook-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fadaptation-of-a-desert-scenes-band-uprising-to-cult-status-3%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);\"> <span class=\"qodef-icon-elegant-icons social_facebook qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-twitter-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut++via+%40QodeInteractivehttps://pelicula.qodeinteractive.com/adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);\"> <span class=\"qodef-icon-elegant-icons social_twitter qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-linkedin-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fadaptation-of-a-desert-scenes-band-uprising-to-cult-status-3%2F&amp;title=Adaptation+of+a+desert-scene%E2%80%99s+rising+to+cult+status&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_linkedin qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-pinterest-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fadaptation-of-a-desert-scenes-band-uprising-to-cult-status-3%2F&amp;description=Adaptation+of+a+desert-scene%E2%80%99s+rising+to+cult+status&amp;media=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F03%2Fh7-blog-image-3.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_pinterest qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"qodef-e qodef-grid-item qodef-item--full post-957 post type-post status-publish format-standard has-post-thumbnail hentry category-festival tag-documentary tag-drama tag-film\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-post-link\" href=\"../shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/index.html\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-media-image qodef--background\" style=\"background-image: url( ../wp-content/uploads/2020/03/h7-blog-image-4.jpg)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1300\" height=\"730\" src=\"../wp-content/uploads/2020/03/h7-blog-image-4.jpg\" class=\"attachment-full size-full wp-post-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4.jpg 1300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4-300x168.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4-800x449.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4-1024x575.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4-768x431.jpg 768w\" sizes=\"(max-width: 1300px) 100vw, 1300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div itemprop=\"dateCreated\" class=\"qodef-e-info-item qodef-e-info-date entry-date published updated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" href=\"../2020/03/index.html\">27/03/2020</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"interactionCount\" content=\"UserComments: 2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-author-label\">by</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"author\" class=\"qodef-e-info-author-link\" href=\"../author/mark-smith/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark Smith\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../category/festival/index.html\" rel=\"category tag\">Festival</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 itemprop=\"name\" class=\"qodef-e-title entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-title-link\" href=\"../shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tShooting The Bridge Sequence Was Hard Work\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-full\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-read-more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link\" href=\"../shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Read More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-info-comments-link\" href=\"../shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/index.html#comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-comments-icon fa fa-comment\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 comments </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-social-share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-social-share-dropdown-opener\" href=\"javascript:void(0)\"> <i class=\"qodef-social-share-icon fa fa-share-alt\"></i> <span class=\"qodef-social-title\">share</span> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-social-share-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-shortcode-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-facebook-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fshooting-the-bridge-sequence-was-hard-work-despite-its-simplicity%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);\"> <span class=\"qodef-icon-elegant-icons social_facebook qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-twitter-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut++via+%40QodeInteractivehttps://pelicula.qodeinteractive.com/shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);\"> <span class=\"qodef-icon-elegant-icons social_twitter qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-linkedin-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fshooting-the-bridge-sequence-was-hard-work-despite-its-simplicity%2F&amp;title=Shooting+The+Bridge+Sequence+Was+Hard+Work&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_linkedin qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-pinterest-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fshooting-the-bridge-sequence-was-hard-work-despite-its-simplicity%2F&amp;description=Shooting+The+Bridge+Sequence+Was+Hard+Work&amp;media=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F03%2Fh7-blog-image-4.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_pinterest qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-a4597fa elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"a4597fa\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-394a5d7 elementor-column elementor-col-100 elementor-top-column\" data-id=\"394a5d7\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-bd99810 elementor-widget elementor-widget-pelicula_core_horizontal_timeline\" data-id=\"bd99810\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_horizontal_timeline.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-horizontal-timeline qodef-skin--light qodef-autoplay--enabled\" data-distance=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-ht-nav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-ht-nav-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-ht-nav-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/1980\">1980<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/1987\">1987<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/1995\">1995<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/2004\">2004<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/2006\">2006<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/2018\">2018<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/2022\">2022<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-m-ht-nav-filling-line\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-m-ht-nav-navigation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"ion-md-arrow-dropleft qodef-prev qodef-inactive\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"ion-md-arrow-dropright qodef-next\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-ht-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ol class=\"qodef-m-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/1980\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-1.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-1.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-1-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-1-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t“phantamogoria”
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/what-lies-beyond/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/1987\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-2.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-2.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-2-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-2-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t“outcast”
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/the-eternal-void/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/1995\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-3.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-3.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-3-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-3-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;Rework&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/hueco-mundo/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/2004\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-4.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-4.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-4-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-4-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;Dark Tunnel&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/see-the-light/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/2006\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-5.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-5.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-5-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-5-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;Proactive&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/finding-art/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/2018\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-6.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-6.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-6-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-6-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;The Return&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/our-future/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/2022\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-7.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-7.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-7-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-7-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;Stolen Wind&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/fresh-start/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-afb0469 elementor-section-full_width qodef-in-focus elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"afb0469\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-57aa2d3 elementor-column elementor-col-100 elementor-top-column\" data-id=\"57aa2d3\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2a7a59a elementor-widget elementor-widget-pelicula_core_section_title\" data-id=\"2a7a59a\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_section_title.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-section-title qodef-alignment--center qodef-title-break--disabled\" data-holder-options=\"{&quot;line-breaks&quot;:&quot;11&quot;}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"qodef-m-title\" style=\"color: #FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t“And i feel like i have a lot of work to<br /> do. Still, i'm a <span class=\"qodef-custom-styles\">student</span> of the <span class=\"qodef-custom-styles\">film”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3f2c20f elementor-widget elementor-widget-spacer\" data-id=\"3f2c20f\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-a4c36cf elementor-widget__width-auto elementor-widget elementor-widget-pelicula_core_button\" data-id=\"a4c36cf\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--filled  qodef-html--link\" href=\"../contact-us/index.html\" target=\"_self\" data-hover-color=\"#FFFFFF\" data-background-color=\"#FFFFFF\" style=\"color: #111111;background-color: #FFFFFF;border-color: #FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-m-text\">Contact Me</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t</div>
\t</div>
</div>
</div>
</div>
</main>
</div>
</div>
<footer id=\"qodef-page-footer\">
\t<div id=\"qodef-page-footer-top-area\">
\t\t<div id=\"qodef-page-footer-top-area-inner\" class=\"qodef-content-full-width\">
\t\t\t<div class=\"qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--2 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1\">
\t\t\t\t<div class=\"qodef-grid-inner clear\">
\t\t\t\t\t<div class=\"qodef-grid-item\">
\t\t\t\t\t\t<div id=\"pelicula_core_separator-14\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_1\">
\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
\t\t\t\t\t\t\t\t<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"media_image-4\" class=\"widget widget_media_image\" data-area=\"footer_top_area_column_1\"><a href=\"../index.html\"><img width=\"129\" height=\"32\" src=\"../wp-content/uploads/2020/03/footer-logo.png\" class=\"image wp-image-119  attachment-full size-full\" alt=\"x\" style=\"max-width: 100%; height: auto;\" /></a></div>
\t\t\t\t\t\t<div id=\"pelicula_core_separator-10\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_1\">
\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
\t\t\t\t\t\t\t\t<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"qodef-grid-item\">
\t\t\t\t\t\t<div id=\"pelicula_core_separator-13\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_2\">
\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
\t\t\t\t\t\t\t\t<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"nav_menu-2\" class=\"widget widget_nav_menu\" data-area=\"footer_top_area_column_2\">
\t\t\t\t\t\t\t<div class=\"menu-footer-menu-container\">
\t\t\t\t\t\t\t\t<ul id=\"menu-footer-menu\" class=\"menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2279\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2279\"><a href=\"../index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2280\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2280\"><a href=\"../about-us/index.html\">About Us</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2281\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2281\"><a href=\"../shop/index.html\">Shop</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2282\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2282\"><a href=\"../right-sidebar/index.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2283\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2283\"><a href=\"../contact-us/index.html\">Contact Us</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"qodef-page-footer-bottom-area\">
\t\t<div id=\"qodef-page-footer-bottom-area-inner\" class=\"qodef-content-full-width\">
\t\t\t<div class=\"qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--1\">
\t\t\t\t<div class=\"qodef-grid-inner clear\">
\t\t\t\t\t<div class=\"qodef-grid-item\">
\t\t\t\t\t\t<div id=\"text-3\" class=\"widget widget_text\" data-area=\"footer_bottom_area_column_1\">
\t\t\t\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t\t\t\t<p style=\"text-align: center;\"><a href=\"https://qodeinteractive.com/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: #4d4d4d;\">© <span style=\"color: #a6a6a6;\">QodeInteractive</span> 2020</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<a id=\"qodef-back-to-top\" href=\"#\">
      <span class=\"qodef-back-to-top-icon\">
      <span class=\"qodef-icon-elegant-icons arrow_carrot-up\"></span> </span>
\t<span class=\"qodef-btn-bg-holder \"></span>
</a>
<div id=\"qodef-side-area\">
\t<a href=\"javascript:void(0)\" id=\"qodef-side-area-close\" class=\"qodef-opener-icon qodef-m qodef-source--predefined\">
         <span class=\"qodef-m-icon qodef--open\">
         <span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
\t</a>
\t<div id=\"qodef-side-area-inner\">
\t\t<div id=\"pelicula_core_custom_font-2\" class=\"widget widget_pelicula_core_custom_font\" data-area=\"side-area\">
\t\t\t<p class=\"qodef-shortcode qodef-m qodef-side-area-custom-font qodef-custom-font qodef-custom-font-3895 qodef-layout--simple\" style=\"color: #ffffff;font-family: Bebas Neue;font-size: 80px;line-height: 52px;letter-spacing: 0px\">Pelicula</p>
\t\t</div>
\t\t<div id=\"text-2\" class=\"widget widget_text\" data-area=\"side-area\">
\t\t\t<div class=\"textwidget\">
\t\t\t\t<h6 style=\"color: #6d6d6d;\">A modern theme for the film industry &#038; video production</h6>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"pelicula_core_instagram_list-3\" class=\"widget widget_pelicula_core_instagram_list\" data-area=\"side-area\">
\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-instagram-list qodef-gutter--tiny qodef-col-num--3\">
\t\t\t\t<div id=\"sb_instagram\" class=\"sbi sbi_col_3  sbi_width_resp\" style=\"padding-bottom: 10px;width: 100%;\" data-feedid=\"sbi_peliculatheme1#12\" data-res=\"auto\" data-cols=\"3\" data-num=\"12\" data-shortcode-atts=\"{&quot;0&quot;:&quot;12&quot;,&quot;1&quot;:&quot;3&quot;,&quot;2&quot;:&quot;5&quot;,&quot;3&quot;:&quot;px&quot;,&quot;4&quot;:&quot;auto&quot;,&quot;num&quot;:&quot;12&quot;,&quot;cols&quot;:&quot;3&quot;,&quot;imagepadding&quot;:&quot;5&quot;,&quot;imagepaddingunit&quot;:&quot;px&quot;,&quot;showheader&quot;:&quot;&quot;,&quot;showfollow&quot;:&quot;&quot;,&quot;showbutton&quot;:&quot;&quot;,&quot;imageres&quot;:&quot;auto&quot;}\">
\t\t\t\t\t<div id=\"sbi_images\" style=\"padding: 5px;\">
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18138102073025935\" data-date=\"1586851637\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DiiRANSN/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=3JdnuYJlWcMAX9fIeuN&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=e918229eac509b0aaf5feb4ed85a7a02&#038;oe=6091FF39\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3JdnuYJlWcMAX9fIeuN&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e918229eac509b0aaf5feb4ed85a7a02&amp;oe=6091FF39&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DiiRANSN\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DiiRANSN\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3JdnuYJlWcMAX9fIeuN&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e918229eac509b0aaf5feb4ed85a7a02&amp;oe=6091FF39&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18138102073025935</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18138102073025935\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17906466691441614\" data-date=\"1586851627\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DhTOgYuI/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=5sVtNDsD4SkAX9IOb62&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=9166f0d7ea15d6192d381179d5b63fef&#038;oe=6093B83F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5sVtNDsD4SkAX9IOb62&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9166f0d7ea15d6192d381179d5b63fef&amp;oe=6093B83F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DhTOgYuI\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DhTOgYuI\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5sVtNDsD4SkAX9IOb62&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9166f0d7ea15d6192d381179d5b63fef&amp;oe=6093B83F&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17906466691441614</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17906466691441614\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17898697330466487\" data-date=\"1586851616\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Df-rg6e5/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=3P6jk0nNZP0AX8SwvLX&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=69dd6460806d0f2b2f475df717de614b&#038;oe=60925FCE\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3P6jk0nNZP0AX8SwvLX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=69dd6460806d0f2b2f475df717de614b&amp;oe=60925FCE&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Df-rg6e5\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Df-rg6e5\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3P6jk0nNZP0AX8SwvLX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=69dd6460806d0f2b2f475df717de614b&amp;oe=60925FCE&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17898697330466487</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17898697330466487\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18125079958074232\" data-date=\"1586851604\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Dei1Amvy/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=tK3bzNiQcYMAX-JHGBY&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=73c109aacb26ce74c62ba68f6baf74d6&#038;oe=6093C443\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tK3bzNiQcYMAX-JHGBY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=73c109aacb26ce74c62ba68f6baf74d6&amp;oe=6093C443&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Dei1Amvy\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Dei1Amvy\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tK3bzNiQcYMAX-JHGBY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=73c109aacb26ce74c62ba68f6baf74d6&amp;oe=6093C443&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18125079958074232</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18125079958074232\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17870200891684227\" data-date=\"1586851583\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Db6ZgyR5/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&#038;oe=60923C58\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&amp;oe=60923C58&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Db6ZgyR5\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Db6ZgyR5\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&amp;oe=60923C58&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17870200891684227</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17870200891684227\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17871653737665234\" data-date=\"1586851569\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DaNaAJvX/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=HY7upozXK5wAX-6wAXY&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=9bbda17989b87b9ead5c076854790299&#038;oe=60915813\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=HY7upozXK5wAX-6wAXY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9bbda17989b87b9ead5c076854790299&amp;oe=60915813&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DaNaAJvX\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DaNaAJvX\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=HY7upozXK5wAX-6wAXY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9bbda17989b87b9ead5c076854790299&amp;oe=60915813&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17871653737665234</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17871653737665234\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17849562971021220\" data-date=\"1586851554\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DYXGAE-7/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=t1dET4bro9EAX_w7kBw&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=be215b06f065bc96396ddf752e88ca5e&#038;oe=6091456F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=t1dET4bro9EAX_w7kBw&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=be215b06f065bc96396ddf752e88ca5e&amp;oe=6091456F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DYXGAE-7\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DYXGAE-7\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=t1dET4bro9EAX_w7kBw&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=be215b06f065bc96396ddf752e88ca5e&amp;oe=6091456F&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17849562971021220</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17849562971021220\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18102022654184100\" data-date=\"1586851542\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DW7ugvvo/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=5ce7ac7c1580d891b30afeed802d1ff3&#038;oe=609071B5\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=5ce7ac7c1580d891b30afeed802d1ff3&amp;oe=609071B5&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DW7ugvvo\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DW7ugvvo\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=5ce7ac7c1580d891b30afeed802d1ff3&amp;oe=609071B5&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18102022654184100</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18102022654184100\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18139713682016553\" data-date=\"1586851531\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DVlLgwX7/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=d3TdEZK8wg0AX8_tMa7&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=e8b806f688c454ff3e2c718d4c6f0b35&#038;oe=60920A9F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=d3TdEZK8wg0AX8_tMa7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e8b806f688c454ff3e2c718d4c6f0b35&amp;oe=60920A9F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DVlLgwX7\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DVlLgwX7\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=d3TdEZK8wg0AX8_tMa7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e8b806f688c454ff3e2c718d4c6f0b35&amp;oe=60920A9F&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18139713682016553</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18139713682016553\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18101124766092345\" data-date=\"1586851521\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DUWmg2Cp/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=ZE997216zdEAX8gc4KW&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=1ad5a196c1b061917048ad733a9a01b4&#038;oe=6091C71E\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=ZE997216zdEAX8gc4KW&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=1ad5a196c1b061917048ad733a9a01b4&amp;oe=6091C71E&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DUWmg2Cp\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DUWmg2Cp\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=ZE997216zdEAX8gc4KW&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=1ad5a196c1b061917048ad733a9a01b4&amp;oe=6091C71E&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18101124766092345</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18101124766092345\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18126467887079409\" data-date=\"1586851507\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DSoaAiXH/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=EZhO2Al58P8AX_kNM4y&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=b9df531347c7317be0faa53d158414c3&#038;oe=6091BF98\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=EZhO2Al58P8AX_kNM4y&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=b9df531347c7317be0faa53d158414c3&amp;oe=6091BF98&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DSoaAiXH\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DSoaAiXH\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=EZhO2Al58P8AX_kNM4y&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=b9df531347c7317be0faa53d158414c3&amp;oe=6091BF98&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18126467887079409</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18126467887079409\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17884982272542098\" data-date=\"1586851348\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9C_SWA1xc/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=NE0owxVbQcMAX_gtAjX&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=24363c2ba1f8852245b0ca82072190a9&#038;oe=6090279A\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NE0owxVbQcMAX_gtAjX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=24363c2ba1f8852245b0ca82072190a9&amp;oe=6090279A&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9C_SWA1xc\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9C_SWA1xc\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NE0owxVbQcMAX_gtAjX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=24363c2ba1f8852245b0ca82072190a9&amp;oe=6090279A&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17884982272542098</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17884982272542098\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"sbi_load\"></div>
\t\t\t\t\t<span class=\"sbi_resized_image_data\" data-feed-id=\"sbi_peliculatheme1#12\" data-resized=\"{&quot;18138102073025935&quot;:{&quot;id&quot;:&quot;93372921_356332725321480_8400426497354550408_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17906466691441614&quot;:{&quot;id&quot;:&quot;93633716_2290256834604316_20547262508728217_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17898697330466487&quot;:{&quot;id&quot;:&quot;93761785_882467185534538_8390250542312319543_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18125079958074232&quot;:{&quot;id&quot;:&quot;92953080_544504953146159_3085776284173196940_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17870200891684227&quot;:{&quot;id&quot;:&quot;93073088_126589828961784_2711754838664723206_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17871653737665234&quot;:{&quot;id&quot;:&quot;93356452_233476107860764_3114943981963002995_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17849562971021220&quot;:{&quot;id&quot;:&quot;93336300_901096336971148_7200873235174889129_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18102022654184100&quot;:{&quot;id&quot;:&quot;92912065_602127913707429_2938335729196611886_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18139713682016553&quot;:{&quot;id&quot;:&quot;92851453_150864709694370_6229453079127953440_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18101124766092345&quot;:{&quot;id&quot;:&quot;92948509_657182158348998_6400887218958287180_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18126467887079409&quot;:{&quot;id&quot;:&quot;92912065_667301397419051_1608122363815943220_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17884982272542098&quot;:{&quot;id&quot;:&quot;92823966_216717206280503_4604162183304081575_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}}}\">
                     </span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div id=\"qodef-fullscreen-area\">
\t<div class=\"qodef-content-grid\">
\t\t<div id=\"qodef-fullscreen-area-inner\">
\t\t\t<nav class=\"qodef-fullscreen-menu\">
\t\t\t\t<ul id=\"menu-fullscreen-menu\" class=\"menu\">
\t\t\t\t\t<li id=\"menu-item-691\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-691 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-1945\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1945\"><a href=\"../parallax-showcase/index.html\"><span class=\"qodef-menu-item-text\">Parallax Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2652\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2652\"><a href=\"../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-1943\" class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-758 current_page_item menu-item-1943\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li id=\"menu-item-2286\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2286 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"../portfolio/index.html\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2288\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2288\"><a href=\"../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2287\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2287\"><a href=\"../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2837\" class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2837\"><a href=\"../portfolio-item/what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li id=\"menu-item-2289\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2289 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-689\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-689\"><a href=\"../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2290\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2290\"><a href=\"../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2839\" class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2839\"><a href=\"../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li id=\"menu-item-2291\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2291 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-690\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-690\"><a href=\"../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2292\" class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-2292\"><a href=\"../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Single Product</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2840\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2840\"><a href=\"../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li id=\"menu-item-2293\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2293\"><a href=\"../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
</div>
</div>
<div class=\"rbt-toolbar\" data-theme=\"Pelicula\" data-featured=\"\" data-button-position=\"70%\" data-button-horizontal=\"right\" data-button-alt=\"no\"></div>
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5T772QJ\"
\t\t\t\t  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script type=\"text/javascript\">
\tvar sbiajaxurl = \"../wp-admin/admin-ajax.html\";
</script>
<link href=\"https://fonts.googleapis.com/css?family=Bebas+Neue:400%7CRoboto:400\" rel=\"stylesheet\" property=\"stylesheet\" media=\"all\" type=\"text/css\">
<script type=\"text/javascript\">
\tvar c = document.body.className;
\tc = c.replace(/woocommerce-no-js/, 'woocommerce-js');
\tdocument.body.className = c;
</script>
<script type=\"text/javascript\">
\tif(typeof revslider_showDoubleJqueryError === \"undefined\") {
\t\tfunction revslider_showDoubleJqueryError(sliderID) {
\t\t\tvar err = \"<div class='rs_error_message_box'>\";
\t\t\terr += \"<div class='rs_error_message_oops'>Oops...</div>\";
\t\t\terr += \"<div class='rs_error_message_content'>\";
\t\t\terr += \"You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>\";
\t\t\terr += \"To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on\";
\t\t\terr += \"<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it\";
\t\t\terr += \"</div>\";
\t\t\terr += \"</div>\";
\t\t\tvar slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = \"block\";
\t\t}
\t}
</script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar wpcf7 = {\"apiSettings\":{\"root\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-json\\/contact-form-7\\/v1\",\"namespace\":\"contact-form-7\\/v1\"},\"cached\":\"1\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/0fef6.js\"></script>
<script type='text/javascript' src='../../export.qodethemes.com/_toolbar/assets/js/rbt-modulesc225.js?ver=5.4.1'></script>
<script src=\"../wp-content/cache/minify/6d18f.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar wc_add_to_cart_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\",\"i18n_view_cart\":\"View cart\",\"cart_url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/cart\\/\",\"is_cart\":\"\",\"cart_redirect_after_add\":\"no\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/dc06c.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar woocommerce_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/63a69.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar wc_cart_fragments_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\",\"cart_hash_key\":\"wc_cart_hash_76474210e59261afa8ad9dbca9115745\",\"fragment_name\":\"wc_fragments_76474210e59261afa8ad9dbca9115745\",\"request_timeout\":\"5000\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/e58f1.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar qodefGlobal = {\"vars\":{\"adminBarHeight\":0,\"topAreaHeight\":0,\"restUrl\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-json\\/\",\"restNonce\":\"f3284dd249\",\"paginationRestRoute\":\"pelicula\\/v1\\/get-posts\",\"headerHeight\":100,\"mobileHeaderHeight\":70}};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/a2757.js\"></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?key=AIzaSyA9R7XKAZB9BRsfn4l-uAg3RJQq5eA7OMY&amp;ver=5.4.1'></script>
<script src=\"../wp-content/cache/minify/89d5d.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar qodefMapsVariables = {\"global\":{\"mapStyle\":\"\",\"mapZoom\":12,\"mapScrollable\":false,\"mapDraggable\":true,\"streetViewControl\":true,\"zoomControl\":true,\"mapTypeControl\":true,\"fullscreenControl\":true},\"multiple\":[]};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/74c80.js\"></script>
<script type='text/javascript'>
\tvar mejsL10n = {\"language\":\"en\",\"strings\":{\"mejs.download-file\":\"Download File\",\"mejs.install-flash\":\"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\\/\\/get.adobe.com\\/flashplayer\\/\",\"mejs.fullscreen\":\"Fullscreen\",\"mejs.play\":\"Play\",\"mejs.pause\":\"Pause\",\"mejs.time-slider\":\"Time Slider\",\"mejs.time-help-text\":\"Use Left\\/Right Arrow keys to advance one second, Up\\/Down arrows to advance ten seconds.\",\"mejs.live-broadcast\":\"Live Broadcast\",\"mejs.volume-help-text\":\"Use Up\\/Down Arrow keys to increase or decrease volume.\",\"mejs.unmute\":\"Unmute\",\"mejs.mute\":\"Mute\",\"mejs.volume-slider\":\"Volume Slider\",\"mejs.video-player\":\"Video Player\",\"mejs.audio-player\":\"Audio Player\",\"mejs.captions-subtitles\":\"Captions\\/Subtitles\",\"mejs.captions-chapters\":\"Chapters\",\"mejs.none\":\"None\",\"mejs.afrikaans\":\"Afrikaans\",\"mejs.albanian\":\"Albanian\",\"mejs.arabic\":\"Arabic\",\"mejs.belarusian\":\"Belarusian\",\"mejs.bulgarian\":\"Bulgarian\",\"mejs.catalan\":\"Catalan\",\"mejs.chinese\":\"Chinese\",\"mejs.chinese-simplified\":\"Chinese (Simplified)\",\"mejs.chinese-traditional\":\"Chinese (Traditional)\",\"mejs.croatian\":\"Croatian\",\"mejs.czech\":\"Czech\",\"mejs.danish\":\"Danish\",\"mejs.dutch\":\"Dutch\",\"mejs.english\":\"English\",\"mejs.estonian\":\"Estonian\",\"mejs.filipino\":\"Filipino\",\"mejs.finnish\":\"Finnish\",\"mejs.french\":\"French\",\"mejs.galician\":\"Galician\",\"mejs.german\":\"German\",\"mejs.greek\":\"Greek\",\"mejs.haitian-creole\":\"Haitian Creole\",\"mejs.hebrew\":\"Hebrew\",\"mejs.hindi\":\"Hindi\",\"mejs.hungarian\":\"Hungarian\",\"mejs.icelandic\":\"Icelandic\",\"mejs.indonesian\":\"Indonesian\",\"mejs.irish\":\"Irish\",\"mejs.italian\":\"Italian\",\"mejs.japanese\":\"Japanese\",\"mejs.korean\":\"Korean\",\"mejs.latvian\":\"Latvian\",\"mejs.lithuanian\":\"Lithuanian\",\"mejs.macedonian\":\"Macedonian\",\"mejs.malay\":\"Malay\",\"mejs.maltese\":\"Maltese\",\"mejs.norwegian\":\"Norwegian\",\"mejs.persian\":\"Persian\",\"mejs.polish\":\"Polish\",\"mejs.portuguese\":\"Portuguese\",\"mejs.romanian\":\"Romanian\",\"mejs.russian\":\"Russian\",\"mejs.serbian\":\"Serbian\",\"mejs.slovak\":\"Slovak\",\"mejs.slovenian\":\"Slovenian\",\"mejs.spanish\":\"Spanish\",\"mejs.swahili\":\"Swahili\",\"mejs.swedish\":\"Swedish\",\"mejs.tagalog\":\"Tagalog\",\"mejs.thai\":\"Thai\",\"mejs.turkish\":\"Turkish\",\"mejs.ukrainian\":\"Ukrainian\",\"mejs.vietnamese\":\"Vietnamese\",\"mejs.welsh\":\"Welsh\",\"mejs.yiddish\":\"Yiddish\"}};
</script>
<script src=\"../wp-content/cache/minify/864c2.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar _wpmejsSettings = {\"pluginPath\":\"\\/wp-includes\\/js\\/mediaelement\\/\",\"classPrefix\":\"mejs-\",\"stretching\":\"responsive\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/b0646.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar sb_instagram_js_options = {\"font_method\":\"svg\",\"resized_url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/sb-instagram-feed-images\\/\",\"placeholder\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/plugins\\/instagram-feed\\/img\\/placeholder.png\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/c7165.js\"></script>
<script type='text/javascript'>
\tvar elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"downloadImage\":\"Download image\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"version\":\"2.9.8\",\"urls\":{\"assets\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"settings\":{\"page\":[],\"general\":{\"elementor_lightbox_enable_counter\":\"yes\",\"elementor_lightbox_enable_fullscreen\":\"yes\",\"elementor_lightbox_enable_zoom\":\"yes\",\"elementor_lightbox_enable_share\":\"yes\",\"elementor_lightbox_title_src\":\"title\",\"elementor_lightbox_description_src\":\"description\"},\"editorPreferences\":[]},\"post\":{\"id\":758,\"title\":\"Director%20Home%20%E2%80%93%20Pelicula\",\"excerpt\":\"\",\"featuredImage\":false}};
</script>
<script src=\"../wp-content/cache/minify/9f110.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar qodefElementorGlobal = {\"vars\":{\"elementorSectionHandler\":{\"e83a0d1\":[{\"url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/2020\\/04\\/h7-background-img-1.jpg\",\"id\":1502},\"\"],\"aeaf554\":[{\"url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/2020\\/04\\/h7-background-img-2.jpg\",\"id\":1504},\"\"]}}};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/92b64.js\"></script>
</body>
<!-- Mirrored from pelicula.qodeinteractive.com/director-home/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 14:42:09 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tactor/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 502,  466 => 416,  462 => 415,  458 => 414,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\" prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#\">
<!-- Mirrored from pelicula.qodeinteractive.com/director-home/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 14:42:01 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<!-- /Added by HTTrack -->
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=yes\">
\t<link rel=\"profile\" href=\"https://gmpg.org/xfn/11\">
\t<title>Director Home &#8211; Pelicula</title>
\t<script data-cfasync=\"false\" data-pagespeed-no-defer>//<![CDATA[
\t\tvar gtm4wp_datalayer_name = \"dataLayer\";
\t\tvar dataLayer = dataLayer || [];
\t\t//]]>
\t</script>
\t<link rel='dns-prefetch' href='http://export.qodethemes.com/' />
\t<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
\t<link rel='dns-prefetch' href='http://s.w.org/' />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Feed\" href=\"../feed/index.html\" />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Comments Feed\" href=\"../comments/feed/index.html\" />
\t<script type=\"text/javascript\">
\t\twindow._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/12.0.0-1\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/12.0.0-1\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=5.4.1\"}};
\t\t/*! This file is auto-generated */
\t\t!function(e,a,t){var r,n,o,i,p=a.createElement(\"canvas\"),s=p.getContext&&p.getContext(\"2d\");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline=\"top\",s.font=\"600 32px Arial\",e){case\"flag\":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case\"emoji\":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement(\"script\");t.src=e,t.defer=t.type=\"text/javascript\",a.getElementsByTagName(\"head\")[0].appendChild(t)}for(i=Array(\"flag\",\"emoji\"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],\"flag\"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener(\"DOMContentLoaded\",n,!1),e.addEventListener(\"load\",n,!1)):(e.attachEvent(\"onload\",n),a.attachEvent(\"onreadystatechange\",function(){\"complete\"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
\t</script>
\t<style type=\"text/css\">
\t\timg.wp-smiley,
\t\timg.emoji {
\t\t\tdisplay: inline !important;
\t\t\tborder: none !important;
\t\t\tbox-shadow: none !important;
\t\t\theight: 1em !important;
\t\t\twidth: 1em !important;
\t\t\tmargin: 0 .07em !important;
\t\t\tvertical-align: -0.1em !important;
\t\t\tbackground: none !important;
\t\t\tpadding: 0 !important;
\t\t}
\t</style>
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/91ce8.css\" media=\"all\" />
\t<link rel='stylesheet' id='material-icons-css' href='https://fonts.googleapis.com/icon?family=Material+Icons&amp;ver=5.4.1' type='text/css' media='all' />
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/52993.css\" media=\"all\" />
\t<link rel='stylesheet' id='rabbit_css-css' href='../../export.qodethemes.com/_toolbar/assets/css/rbt-modulesc225.css?ver=5.4.1' type='text/css' media='all' />
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/edd85.css\" media=\"all\" />
\t<style id='rs-plugin-settings-inline-css' type='text/css'>
\t\t#rs-demo-id {}
\t</style>
\t<style id='woocommerce-inline-inline-css' type='text/css'>
\t\t.woocommerce form .form-row .required { visibility: visible; }
\t</style>
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/a2923.css\" media=\"all\" />
\t<link rel='stylesheet' id='pelicula-google-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C500%2C600%7CBebas+Neue%3A300%2C400%2C500%2C600&amp;subset=latin-ext&amp;ver=1.0.0' type='text/css' media='all' />
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/d5104.css\" media=\"all\" />
\t<style id='pelicula-style-inline-css' type='text/css'>
\t\t#qodef-page-outer { margin-top: -100px;}@media only screen and (max-width: 1024px) { #qodef-page-outer { margin-top: -70px;}}#qodef-page-footer-top-area { background-color: #000000;}#qodef-page-footer-bottom-area { background-color: #000000;border-top-color: rgba(255,255,255,0.1);border-top-width: 2px;}#qodef-page-inner { padding: 0 0;}#qodef-page-spinner .qodef-m-inner { background-color: #000000;color: #ffffff;}.qodef-page-title { height: 250px;background-image: url(../wp-content/uploads/2020/03/title-image-1.jpg);}.qodef-page-title .qodef-m-content { padding-top: 100px;}@media only screen and (max-width: 1024px) { .qodef-page-title .qodef-m-content { padding-top: 70px;}}a, p a { letter-spacing: 0px;}.qodef-header--minimal #qodef-page-header { background-color: rgba(255,255,255,0);}@media only screen and (max-width: 1024px){h1 { font-size: 62px;line-height: 62px;}h2 { font-size: 60px;line-height: 60px;}h4 { font-size: 27px;line-height: 27px;}}@media only screen and (max-width: 768px){h1 { font-size: 58px;line-height: 58px;}h5 { font-size: 22px;line-height: 23px;}}@media only screen and (max-width: 680px){h1 { font-size: 52px;line-height: 50px;}h2 { font-size: 45px;line-height: 43px;}h3 { font-size: 32px;line-height: 34px;}h4 { font-size: 30px;line-height: 28px;}}
\t</style>
\t<link rel=\"stylesheet\" href=\"../wp-content/cache/minify/e7d1d.css\" media=\"all\" />
\t<script src=\"../wp-content/cache/minify/a4d4c.js\"></script>
\t<link rel='https://api.w.org/' href='../wp-json/index.html' />
\t<link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"../xmlrpc0db0.html?rsd\" />
\t<link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"../wp-includes/wlwmanifest.xml\" />
\t<meta name=\"generator\" content=\"WordPress 5.4.1\" />
\t<meta name=\"generator\" content=\"WooCommerce 4.1.0\" />
\t<link rel=\"canonical\" href=\"index.html\" />
\t<link rel='shortlink' href='../indexd4c3.html?p=758' />
\t<link rel=\"alternate\" type=\"application/json+oembed\" href=\"../wp-json/oembed/1.0/embed0abf.json?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fdirector-home%2F\" />
\t<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"../wp-json/oembed/1.0/embed82f1?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fdirector-home%2F&amp;format=xml\" />
\t<meta property='og:site_name' content='Pelicula' />
\t<meta property='og:url' content='https://pelicula.qodeinteractive.com' />
\t<meta property='og:locale' content='en_US' />
\t<meta property='og:description' content='Pelicula is a modern theme specifically designed for movie, film, and all types of video production websites. ' />
\t<meta property='og:title' content='Pelicula - Video Production and Movie Theme' />
\t<meta property='og:type' content='website' />
\t<meta property='og:image' content='https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/1200x630.jpg' />
\t<meta property='og:image:width' content='1200' />
\t<meta property='og:image:height' content='630' />
\t<meta name='twitter:card' content='summary' />
\t<meta name='twitter:title' content='Pelicula - Video Production and Movie Theme' />
\t<meta name='twitter:image' content='https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/1200x630.jpg' />
\t<meta name='twitter:description' content='Pelicula is a modern theme specifically designed for movie, film, and all types of video production websites. ' />
\t<script data-cfasync=\"false\" data-pagespeed-no-defer>//<![CDATA[
\t\tvar dataLayer_content = {\"pagePostType\":\"page\",\"pagePostType2\":\"single-page\",\"pagePostAuthor\":\"admin\"};
\t\tdataLayer.push( dataLayer_content );//]]>
\t</script>
\t<script data-cfasync=\"false\">//<![CDATA[
\t\t(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
\t\t\t\t\tnew Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
\t\t\t\tj=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
\t\t\t\t'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
\t\t})(window,document,'script','dataLayer','GTM-5T772QJ');//]]>
\t</script>
\t<noscript>
\t\t<style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
\t</noscript>
\t<meta name=\"generator\" content=\"Powered by Slider Revolution 6.2.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.\" />
\t<link rel=\"icon\" href=\"../wp-content/uploads/2020/05/cropped-favicon-pelicula-32x32.png\" sizes=\"32x32\" />
\t<link rel=\"icon\" href=\"../wp-content/uploads/2020/05/cropped-favicon-pelicula-192x192.png\" sizes=\"192x192\" />
\t<link rel=\"apple-touch-icon\" href=\"../wp-content/uploads/2020/05/cropped-favicon-pelicula-180x180.png\" />
\t<meta name=\"msapplication-TileImage\" content=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/cropped-favicon-pelicula-270x270.png\" />
\t<script type=\"text/javascript\">function setREVStartSize(e){
\t\t\t//window.requestAnimationFrame(function() {
\t\t\twindow.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
\t\t\twindow.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
\t\t\ttry {
\t\t\t\tvar pw = document.getElementById(e.c).parentNode.offsetWidth,
\t\t\t\t\t\tnewh;
\t\t\t\tpw = pw===0 || isNaN(pw) ? window.RSIW : pw;
\t\t\t\te.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
\t\t\t\te.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
\t\t\t\te.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
\t\t\t\te.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
\t\t\t\te.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
\t\t\t\te.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
\t\t\t\te.mh = e.mh===undefined || e.mh==\"\" || e.mh===\"auto\" ? 0 : parseInt(e.mh,0);
\t\t\t\tif(e.layout===\"fullscreen\" || e.l===\"fullscreen\")
\t\t\t\t\tnewh = Math.max(e.mh,window.RSIH);
\t\t\t\telse{
\t\t\t\t\te.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
\t\t\t\t\tfor (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
\t\t\t\t\te.gh = e.el===undefined || e.el===\"\" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
\t\t\t\t\te.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
\t\t\t\t\tfor (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

\t\t\t\t\tvar nl = new Array(e.rl.length),
\t\t\t\t\t\t\tix = 0,
\t\t\t\t\t\t\tsl;
\t\t\t\t\te.tabw = e.tabhide>=pw ? 0 : e.tabw;
\t\t\t\t\te.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
\t\t\t\t\te.tabh = e.tabhide>=pw ? 0 : e.tabh;
\t\t\t\t\te.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
\t\t\t\t\tfor (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
\t\t\t\t\tsl = nl[0];
\t\t\t\t\tfor (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
\t\t\t\t\tvar m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
\t\t\t\t\tnewh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
\t\t\t\t}
\t\t\t\tif(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement(\"style\"));
\t\t\t\tdocument.getElementById(e.c).height = newh+\"px\";
\t\t\t\twindow.rs_init_css.innerHTML += \"#\"+e.c+\"_wrapper { height: \"+newh+\"px }\";
\t\t\t} catch(e){
\t\t\t\tconsole.log(\"Failure at Presize of Slider:\" + e)
\t\t\t}
\t\t\t//});
\t\t};
\t</script>
\t<style type=\"text/css\" id=\"wp-custom-css\">
\t\t.page-id-1544 .qodef-inner-homes-slider .qodef-e-media-image {
\t\t\ttransform: scale(1) !important;
\t\t}
\t\t.page-id-1893 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-1895 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-1903 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-1907 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-2370 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t.page-id-1652 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
\t\t\tjustify-content: flex-start;
\t\t}
\t\t@media only screen and (min-width: 1025px) and (max-width: 1440px) {
\t\t\t.page-id-1544 .elementor-1544 .elementor-element.elementor-element-5cb2047 > .elementor-widget-container {
\t\t\t\tpadding: 12% 0 0 0;
\t\t\t}
\t\t}
\t\t@media only screen and (min-width: 769px) and (max-width: 1024px) {
\t\t\t.page-id-1544 .elementor-1544 .elementor-element.elementor-element-242eb3f > .elementor-widget-container,
\t\t\t.page-id-1544 .elementor-1544 .elementor-element.elementor-element-ea6686e > .elementor-widget-container {
\t\t\t\tpadding: 13% 0 0 0;
\t\t\t}
\t\t}
\t\t.page-id-1544 .qodef-fullscreen-menu-opener {
\t\t\tdisplay:none;
\t\t}
\t</style>
</head>
<body class=\"page-template page-template-page-full-width page-template-page-full-width-php page page-id-758 theme-pelicula qode-framework-1.1.2 woocommerce-no-js qodef-age-verification--opened qodef-back-to-top--enabled  qodef-content-grid-1300 qodef-content-behind-header qodef-header--light qodef-header--minimal qodef-header-appearance--none qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--default pelicula-core-1.0 pelicula-1.0 qodef-search--fullscreen elementor-default elementor-kit-9 elementor-page elementor-page-758\" itemscope itemtype=\"https://schema.org/WebPage\">
<div id=\"qodef-page-wrapper\" class=\"\">
\t<div class=\"qodef-content-lines-holder qodef-skin--light\">
\t\t<div class=\"qodef-content-line qodef--left\"></div>
\t\t<div class=\"qodef-content-line qodef--center\"></div>
\t\t<div class=\"qodef-content-line qodef--right\"></div>
\t</div>
\t<header id=\"qodef-page-header\">
\t\t<div id=\"qodef-page-header-inner\">
\t\t\t<a itemprop=\"url\" class=\"qodef-header-logo-link qodef-height--not-set qodef-textual-logo qodef--line-through\" href=\"../index.html\" style=\";;\" rel=\"home\">
               <span class=\"qodef-logo-text\">
               <span class=\"qodef-logo-text-inner\">P</span>
               </span>
\t\t\t</a>
\t\t\t<div class=\"qodef-widget-holder\"></div>
\t\t\t<a href=\"javascript:void(0)\" class=\"qodef-opener-icon qodef-m qodef-source--predefined qodef-fullscreen-menu-opener\">
               <span class=\"qodef-m-icon qodef--open\">
               <span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
\t\t\t\t<span class=\"qodef-m-icon qodef--close\">
               <span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
\t\t\t</a>
\t\t</div>
\t</header>
\t<header id=\"qodef-page-mobile-header\">
\t\t<div id=\"qodef-page-mobile-header-inner\">
\t\t\t<a itemprop=\"url\" class=\"qodef-mobile-header-logo-link qodef-textual-logo qodef--line-through\" href=\"../index.html\" style=\"height:50px;\" rel=\"home\">
               <span class=\"qodef-logo-text\">
               <span class=\"qodef-logo-text-inner\">P</span>
               </span>
\t\t\t\t<img width=\"52\" height=\"91\" src=\"../wp-content/uploads/2020/03/logo-light.png\" class=\"qodef-header-logo-image qodef--dark\" alt=\"logo dark\" /><img width=\"52\" height=\"91\" src=\"../wp-content/uploads/2020/03/logo-light.png\" class=\"qodef-header-logo-image qodef--light\" alt=\"logo light\" /></a>
\t\t\t<a class=\"qodef-mobile-header-opener\" href=\"#\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"39px\" height=\"11px\">
\t\t\t\t\t<path fill-rule=\"evenodd\" fill=\"rgb(17, 17, 17)\" d=\"M8.000,3.000 L8.000,-0.000 L39.000,-0.000 L39.000,3.000 L8.000,3.000 ZM31.000,11.000 L-0.000,11.000 L-0.000,8.000 L31.000,8.000 L31.000,11.000 Z\" />
\t\t\t\t</svg>
\t\t\t</a>
\t\t\t<nav class=\"qodef-mobile-header-navigation\" role=\"navigation\" aria-label=\"Mobile Menu\">
\t\t\t\t<ul id=\"menu-main-menu-2\" class=\"qodef-content-grid\">
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-51 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-346\"><a href=\"../index.html\"><span class=\"qodef-menu-item-text\">Main Home</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-580\"><a href=\"../film-festival/index.html\"><span class=\"qodef-menu-item-text\">Film Festival</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-687\"><a href=\"../parallax-showcase/index.html\"><span class=\"qodef-menu-item-text\">Parallax Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-570\"><a href=\"../video-production-studio/index.html\"><span class=\"qodef-menu-item-text\">Video Production Studio</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2651\"><a href=\"../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-748\"><a href=\"../interactive-title-showcase/index.html\"><span class=\"qodef-menu-item-text\">Interactive Title Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-758 current_page_item menu-item-806\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-822\"><a href=\"../fullscreen-showcase/index.html\"><span class=\"qodef-menu-item-text\">Fullscreen Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-895\"><a href=\"../film-gallery/index.html\"><span class=\"qodef-menu-item-text\">Film Gallery</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2211\"><a href=\"../film-showcase/index.html\"><span class=\"qodef-menu-item-text\">Film Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-874\"><a href=\"../video-home/index.html\"><span class=\"qodef-menu-item-text\">Video Home</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-905\"><a href=\"../coming-soon/index.html\"><span class=\"qodef-menu-item-text\">Coming Soon</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-933\"><a href=\"../interactive-links/index.html\"><span class=\"qodef-menu-item-text\">Interactive Links</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1798\"><a href=\"../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-52 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Pages</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1104\"><a href=\"../about-us/index.html\"><span class=\"qodef-menu-item-text\">About Us</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1451\"><a href=\"../what-we-do/index.html\"><span class=\"qodef-menu-item-text\">What We Do</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1242\"><a href=\"../our-process/index.html\"><span class=\"qodef-menu-item-text\">Our Process</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1383\"><a href=\"../our-team/index.html\"><span class=\"qodef-menu-item-text\">Our Team</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1149\"><a href=\"../contact-us/index.html\"><span class=\"qodef-menu-item-text\">Contact Us</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1243\"><a href=\"../faq-page/index.html\"><span class=\"qodef-menu-item-text\">FAQ Page</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1777\"><a href=\"../404.html\"><span class=\"qodef-menu-item-text\">404 Error Page</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-55 qodef-menu-item--wide\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner qodef-content-grid\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1882 qodef--hide-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Types</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1881\"><a href=\"../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2777\"><a href=\"../portfolio/gallery-list/index.html\"><span class=\"qodef-menu-item-text\">Gallery List</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1880\"><a href=\"../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2430\"><a href=\"../portfolio/highlight-slider/index.html\"><span class=\"qodef-menu-item-text\">HighLight Slider</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2429\"><a href=\"../portfolio/overlay-slider/index.html\"><span class=\"qodef-menu-item-text\">Overlay Slider</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2428\"><a href=\"../portfolio/carousel/index.html\"><span class=\"qodef-menu-item-text\">Carousel</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1883 qodef--hide-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Layouts</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1918\"><a href=\"../portfolio/two-columns/index.html\"><span class=\"qodef-menu-item-text\">Two Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1917\"><a href=\"../portfolio/three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1916\"><a href=\"../portfolio/three-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Three Columns Wide</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1915\"><a href=\"../portfolio/four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1914\"><a href=\"../portfolio/four-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Four Columns Wide</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1913\"><a href=\"../portfolio/five-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Five Columns Wide</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2379\"><a href=\"../portfolio/six-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Six Columns Wide</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-362 qodef--hide-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2461\"><a href=\"../portfolio-item/the-eternal-void/index.html\"><span class=\"qodef-menu-item-text\">Big Images</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-369\"><a href=\"../portfolio-item/see-the-light/index.html\"><span class=\"qodef-menu-item-text\">Small Images</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-368\"><a href=\"../portfolio-item/finding-art/index.html\"><span class=\"qodef-menu-item-text\">Big Gallery</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-367\"><a href=\"../portfolio-item/fresh-start/index.html\"><span class=\"qodef-menu-item-text\">Small Gallery</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-365\"><a href=\"../portfolio-item/our-future/index.html\"><span class=\"qodef-menu-item-text\">Big Masonry</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-364\"><a href=\"../portfolio-item/not-impossible/index.html\"><span class=\"qodef-menu-item-text\">Small Masonry</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-366\"><a href=\"../portfolio-item/studio-lightening/index.html\"><span class=\"qodef-menu-item-text\">Slider</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1271\"><a href=\"../portfolio-item/what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1310\"><a href=\"../portfolio-item/hueco-mundo/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Light</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2131 qodef--hide-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Hover Types</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2456\"><a href=\"../portfolio/info-bottom-left/index.html\"><span class=\"qodef-menu-item-text\">Info Bottom Left</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2453\"><a href=\"../portfolio/fade-in-hover/index.html\"><span class=\"qodef-menu-item-text\">Fade In Hover</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2454\"><a href=\"../portfolio/info-follow/index.html\"><span class=\"qodef-menu-item-text\">Info Follow</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2455\"><a href=\"../portfolio/direction-aware/index.html\"><span class=\"qodef-menu-item-text\">Direction Aware</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-236\"><a href=\"../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-239\"><a href=\"../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-238\"><a href=\"../left-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Left Sidebar</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-237\"><a href=\"../no-sidebar/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-159\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-164\"><a href=\"../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-161\"><a href=\"../out-of-sight/index.html\"><span class=\"qodef-menu-item-text\">Gallery Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-163\"><a href=\"../old-cameras/index.html\"><span class=\"qodef-menu-item-text\">Video Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2543\"><a href=\"../new-soundtrack/index.html\"><span class=\"qodef-menu-item-text\">Audio Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-162\"><a href=\"../blade-runner/index.html\"><span class=\"qodef-menu-item-text\">Quote Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-160\"><a href=\"../bliss-bone/index.html\"><span class=\"qodef-menu-item-text\">Link Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2544\"><a href=\"../sky-valley/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar Post</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-137\"><a href=\"../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-139\"><a href=\"../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Product Single</span></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Layouts</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-189\"><a href=\"../three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1055\"><a href=\"../four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1049\"><a href=\"../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-138\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Shop Pages</span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-134\"><a href=\"../my-account/index.html\"><span class=\"qodef-menu-item-text\">My Account</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-136\"><a href=\"../cart/index.html\"><span class=\"qodef-menu-item-text\">Cart</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-135\"><a href=\"../checkout/index.html\"><span class=\"qodef-menu-item-text\">Checkout</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</header>
\t<div id=\"qodef-page-outer\">
\t\t<div id=\"qodef-page-inner\" class=\"qodef-content-full-width\">
\t\t\t<main id=\"qodef-page-content\" class=\"qodef-grid qodef-layout--template \">
\t\t\t\t<div class=\"qodef-grid-inner clear\">
\t\t\t\t\t<div class=\"qodef-grid-item qodef-page-content-section qodef-col--12\">
\t\t\t\t\t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"758\" class=\"elementor elementor-758\" data-elementor-settings=\"[]\">
\t\t\t\t\t\t\t<div class=\"elementor-inner\">
\t\t\t\t\t\t\t\t<div class=\"elementor-section-wrap\">
\t\t\t\t\t\t\t\t\t<section class=\"elementor-element elementor-element-c372683 elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"c372683\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3a8a6f1 elementor-column elementor-col-100 elementor-top-column\" data-id=\"3a8a6f1\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-7d0b350 elementor-widget elementor-widget-slider_revolution\" data-id=\"7d0b350\" data-element_type=\"widget\" data-widget_type=\"slider_revolution.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wp-block-themepunch-revslider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"rs-p-wp-fix\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-module-wrap id=\"rev_slider_5_1_wrapper\" data-source=\"gallery\" style=\"background:transparent;padding:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-module id=\"rev_slider_5_1\" style=\"\" data-version=\"6.2.6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trs-slides {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvisibility: visible;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmax-height: none;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\toverflow: hidden;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-slides id=\"actorim\" style=\"element.style {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t overflow: hidden;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t height: 50%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t width: 50%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t z-index: 20;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t opacity: 1;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t visibility: inherit;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t }\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-slide id=\"actorim\" style=\"element.style {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\toverflow: hidden;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvisibility: inherit;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../wp-content{{ tactor.image }}\" alt=\"a\" title=\"h7-slider-img-1\" width=\"1920\" height=\"900\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-0\" data-type=\"text\" data-tsh=\"c:rgba(0,0,0,0.2);h:3px;v:4px;b:10px;\" data-xy=\"y:m;\" data-text=\"w:normal;s:190,190,130,70;l:180,180,120,60;\" data-dim=\"w:616px,616px,616px,333px;\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-frame_999=\"o:0;st:w;\" style=\"z-index:5;font-family:Bebas Neue;\">{{ tactor.name }}</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-1\" data-type=\"text\" data-xy=\"y:m;yo:205px,205px,155px,95px;\" data-text=\"w:normal;s:18;l:26;ls:4px;\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-frame_999=\"o:0;st:w;\" style=\"z-index:6;font-family:Bebas Neue;\">Born in {{ tactor.born ? tactor.born|date('Y/m/d') : '' }}</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-10\" data-type=\"shape\" data-xy=\"xo:450px,450px,299px,161px;y:m;yo:-96px,-96px,-62px,-32px;\" data-text=\"w:normal;\" data-dim=\"w:80px,80px,65px,35px;h:15px,15px,12px,8px;\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-frame_0=\"x:-100%;\" data-frame_0_mask=\"u:t;\" data-frame_1=\"sp:1000;\" data-frame_1_mask=\"u:t;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:7;background-color:#ffffff;\"></rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-slide>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-slides>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-static-layers>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-6\" class=\"rs-layer-static\" data-type=\"text\" data-xy=\"xo:43px,43px,43px,23px;y:m,m,b,b;yo:60px,60px,40px,20px;\" data-text=\"w:normal;s:14;l:14;\" data-basealign=\"slide\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-btrans=\"rZ:-90;\" data-onslides=\"s:1;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:14;font-family:Roboto;\"><span class=\"qodef-shortcode qodef-m  qodef-icon-holder qodef-size--default qodef-layout--normal\">
                                                                        <a itemprop=\"url\" href=\"https://www.youtube.com/QodeInteractiveVideos\" target=\"_blank\">
                                                                        <span class=\"qodef-icon-elegant-icons social_youtube qodef-icon qodef-e\" style=\"color: #FFFFFF\"></span> </a>
                                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-7\" class=\"rs-layer-static\" data-type=\"text\" data-xy=\"xo:43px,43px,43px,23px;y:m,m,b,b;yo:20px,20px,80px,60px;\" data-text=\"w:normal;s:14;l:14;\" data-basealign=\"slide\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-btrans=\"rZ:-90;\" data-onslides=\"s:1;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:15;font-family:Roboto;\"><span class=\"qodef-shortcode qodef-m  qodef-icon-holder qodef-size--default qodef-layout--normal\">
                                                                        <a itemprop=\"url\" href=\"https://www.instagram.com/qodeinteractive/\" target=\"_blank\">
                                                                        <span class=\"qodef-icon-elegant-icons social_instagram qodef-icon qodef-e\" style=\"color: #FFFFFF\"></span> </a>
                                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-8\" class=\"rs-layer-static\" data-type=\"text\" data-xy=\"xo:43px,43px,43px,23px;y:m,m,b,b;yo:-20px,-20px,120px,100px;\" data-text=\"w:normal;s:14;l:14;\" data-basealign=\"slide\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-btrans=\"rZ:-90;\" data-onslides=\"s:1;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:7;font-family:Roboto;\"><span class=\"qodef-shortcode qodef-m  qodef-icon-holder qodef-size--default qodef-layout--normal\">
                                                                        <a itemprop=\"url\" href=\"https://twitter.com/QodeInteractive\" target=\"_blank\">
                                                                        <span class=\"qodef-icon-elegant-icons social_twitter qodef-icon qodef-e\" style=\"color: #FFFFFF\"></span> </a>
                                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-layer id=\"slider-5-slide-5-layer-9\" class=\"rs-layer-static\" data-type=\"text\" data-xy=\"xo:43px,43px,43px,23px;y:m,m,b,b;yo:-60px,-60px,160px,140px;\" data-text=\"w:normal;s:14;l:14;\" data-basealign=\"slide\" data-rsp_o=\"off\" data-rsp_bd=\"off\" data-btrans=\"rZ:-90;\" data-onslides=\"s:1;\" data-frame_1=\"e:power4.inOut;sp:1500;\" data-frame_999=\"o:0;st:w;\" style=\"z-index:17;font-family:Roboto;\"><span class=\"qodef-shortcode qodef-m  qodef-icon-holder qodef-size--default qodef-layout--normal\">
                                                                        <a itemprop=\"url\" href=\"https://www.facebook.com/QodeInteractive/\" target=\"_blank\">
                                                                        <span class=\"qodef-icon-elegant-icons social_facebook qodef-icon qodef-e\" style=\"color: #FFFFFF\"></span> </a>
                                                                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-layer>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-static-layers>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rs-progress class=\"rs-bottom\" style=\"visibility: hidden !important;\"></rs-progress>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-module>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsetREVStartSize({c: 'rev_slider_5_1',rl:[1920,1700,1025,700],el:[700,600,600,500],gw:[1300,1100,600,300],gh:[700,600,600,500],type:'standard',justify:'',layout:'fullscreen',offsetContainer:'',offset:'',mh:\"0\"});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar\trevapi5,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttpj;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tjQuery(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttpj = jQuery;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trevapi5 = tpj(\"#rev_slider_5_1\")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(revapi5==undefined || revapi5.revolution == undefined){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trevslider_showDoubleJqueryError(\"rev_slider_5_1\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trevapi5.revolution({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsliderLayout:\"fullscreen\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tduration:\"4000ms\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvisibilityLevels:\"1920,1700,1025,700\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tgridwidth:\"1300,1100,600,300\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tgridheight:\"700,600,600,500\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tperspective:600,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tperspectiveType:\"local\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\teditorheight:\"700,600,600,500\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tresponsiveLevels:\"1920,1700,1025,700\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdisableProgressBar:\"on\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnavigation: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tonHoverStop:false
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfallbacks: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tallowHTML5AutoPlayOnAndroid:true
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</rs-module-wrap>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<section class=\"qodef-parallax--custom elementor-element elementor-element-e83a0d1 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"e83a0d1\" data-element_type=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-ac1ed30 elementor-column elementor-col-100 elementor-top-column\" data-id=\"ac1ed30\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"elementor-element elementor-element-ad1f19d elementor-section-boxed elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-inner-section\" data-id=\"ad1f19d\" data-element_type=\"section\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-76edc2e elementor-column elementor-col-50 elementor-inner-column\" style=\"width: 200%\" data-id=\"76edc2e\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5a1c547 elementor-widget elementor-widget-pelicula_core_section_title\" data-id=\"5a1c547\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_section_title.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left \" data-holder-options=\"{&quot;line-breaks&quot;:&quot;&quot;}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"qodef-m-title\" style=\"color: #FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ tactor.description }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-048095b elementor-column elementor-col-50 elementor-inner-column\" data-id=\"048095b\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-aad955a elementor-widget elementor-widget-image\" data-id=\"aad955a\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"112\" height=\"61\" src=\"../wp-content/uploads/2020/03/h4-signature-img.png\" class=\"attachment-large size-large\" alt=\"a\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-de9cc9d elementor-section-full_width qodef-in-focus elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"de9cc9d\" data-element_type=\"section\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-60d2309 elementor-column elementor-col-50 elementor-top-column\" data-id=\"60d2309\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-f6e80c5 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"f6e80c5\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1100\" height=\"620\" src=\"../wp-content/uploads/2020/03/h4-image-1.jpg\" class=\"attachment-full size-full\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1.jpg 1100w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1-800x451.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1-1024x577.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-1-768x433.jpg 768w\" sizes=\"(max-width: 1100px) 100vw, 1100px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"https://vimeo.com/90049558\" data-type=\"iframe\">
                                                      <span class=\"qodef-m-play-inner\">
                                                      <span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-cc2d0ae elementor-column elementor-col-50 elementor-top-column\" data-id=\"cc2d0ae\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-e5aea33 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"e5aea33\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1100\" height=\"620\" src=\"../wp-content/uploads/2020/03/h4-image-2.jpg\" class=\"attachment-full size-full\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2.jpg 1100w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2-800x451.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2-1024x577.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-2-768x433.jpg 768w\" sizes=\"(max-width: 1100px) 100vw, 1100px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"https://vimeo.com/165267113\" data-type=\"iframe\">
                                                      <span class=\"qodef-m-play-inner\">
                                                      <span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-379d39d elementor-section-full_width qodef-in-focus elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"379d39d\" data-element_type=\"section\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-756b968 elementor-column elementor-col-50 elementor-top-column\" data-id=\"756b968\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-f165f16 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"f165f16\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1100\" height=\"620\" src=\"../wp-content/uploads/2020/03/h4-image-3.jpg\" class=\"attachment-full size-full\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3.jpg 1100w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3-800x451.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3-1024x577.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-3-768x433.jpg 768w\" sizes=\"(max-width: 1100px) 100vw, 1100px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"https://vimeo.com/36334134\" data-type=\"iframe\">
                                                      <span class=\"qodef-m-play-inner\">
                                                      <span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-b08c266 elementor-column elementor-col-50 elementor-top-column\" data-id=\"b08c266\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-62637a4 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"62637a4\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1100\" height=\"620\" src=\"../wp-content/uploads/2020/03/h4-image-4.jpg\" class=\"attachment-full size-full\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4.jpg 1100w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4-800x451.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4-1024x577.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h4-image-4-768x433.jpg 768w\" sizes=\"(max-width: 1100px) 100vw, 1100px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"https://vimeo.com/15595024\" data-type=\"iframe\">
                                                      <span class=\"qodef-m-play-inner\">
                                                      <span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"qodef-parallax--custom elementor-element elementor-element-aeaf554 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"aeaf554\" data-element_type=\"section\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-6479aaa elementor-column elementor-col-100 elementor-top-column\" data-id=\"6479aaa\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<section class=\"elementor-element elementor-element-98564ea elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-inner-section\" data-id=\"98564ea\" data-element_type=\"section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-d127745 elementor-column elementor-col-50 elementor-inner-column\" data-id=\"d127745\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-6427565 elementor-widget elementor-widget-heading\" data-id=\"6427565\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">Education</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-8ed2527 elementor-widget elementor-widget-spacer\" data-id=\"8ed2527\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-94bb44f elementor-widget elementor-widget-pelicula_core_movies_list\" data-id=\"94bb44f\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_movies_list.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-movies-list qodef-skin--light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2006-2010</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">BA Degree</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Photography &amp;film</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Australian Film, Television and Radio School”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2010-2012</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">Ma Degree</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Direction &amp; Production</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Busan Asian Film School”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2012-2014</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">BA Degree</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Direction &amp; Writing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Centro Sperimentale di Cinematografia”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-78d30ac elementor-widget elementor-widget-spacer\" data-id=\"78d30ac\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5a74b96 elementor-column elementor-col-50 elementor-inner-column\" data-id=\"5a74b96\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5240dee elementor-widget elementor-widget-heading\" data-id=\"5240dee\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">Awards</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-f45925f elementor-widget elementor-widget-spacer\" data-id=\"f45925f\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-cc1bbcd elementor-widget elementor-widget-pelicula_core_movies_list\" data-id=\"cc1bbcd\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_movies_list.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-movies-list qodef-skin--light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2012</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">&quot;Secret&quot;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Best Film Winner</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Sundance Festival”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2014</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Himmel”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Best Screenplay</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Golden Globes, USA”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2016</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Guilt”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Best film nominee</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Academy Awards, USA”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-item qodef-e\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-year\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-year\">2019</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“Hueco”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-movies\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-movies\">Best Foreign Film</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-item-description\">“BAFTA Awards”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-faba6f8 elementor-widget elementor-widget-spacer\" data-id=\"faba6f8\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-3d486e5 elementor-section-full_width qodef-in-focus elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"3d486e5\" data-element_type=\"section\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-094f636 elementor-column elementor-col-100 elementor-top-column\" data-id=\"094f636\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-ae971f3 elementor-widget elementor-widget-pelicula_core_blog_list\" data-id=\"ae971f3\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_blog_list.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-blog  qodef-item-layout--metro  qodef-grid qodef-layout--columns   qodef-gutter--no qodef-col-num--2 qodef-item-layout--metro qodef--no-bottom-space qodef-pagination--off qodef-responsive--custom qodef-col-num--1440--2 qodef-col-num--1366--2 qodef-col-num--1024--2 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1\" data-options=\"{&quot;plugin&quot;:&quot;pelicula_core&quot;,&quot;module&quot;:&quot;blog\\/shortcodes&quot;,&quot;shortcode&quot;:&quot;blog-list&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:2,&quot;behavior&quot;:&quot;columns&quot;,&quot;custom_proportions&quot;:&quot;no&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;2&quot;,&quot;columns_responsive&quot;:&quot;custom&quot;,&quot;columns_1440&quot;:&quot;2&quot;,&quot;columns_1366&quot;:&quot;2&quot;,&quot;columns_1024&quot;:&quot;2&quot;,&quot;columns_768&quot;:&quot;1&quot;,&quot;columns_680&quot;:&quot;1&quot;,&quot;columns_480&quot;:&quot;1&quot;,&quot;space&quot;:&quot;no&quot;,&quot;posts_per_page&quot;:&quot;4&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;category&quot;,&quot;tax_slug&quot;:&quot;festival&quot;,&quot;layout&quot;:&quot;metro&quot;,&quot;title_tag&quot;:&quot;h3&quot;,&quot;title_custom_style&quot;:&quot;no&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;enable_button&quot;:&quot;yes&quot;,&quot;enable_comments&quot;:&quot;yes&quot;,&quot;enable_social_share&quot;:&quot;yes&quot;,&quot;object_class_name&quot;:&quot;PeliculaCoreBlogListShortcode&quot;,&quot;taxonomy_filter&quot;:&quot;category&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;category&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;festival&quot;}]}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-grid-inner clear\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"qodef-e qodef-grid-item qodef-item--full post-968 post type-post status-publish format-standard has-post-thumbnail hentry category-festival tag-documentary tag-drama tag-video\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-post-link\" href=\"../filming-for-spleen-officially-started-on-monday-21-03-19/index.html\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-media-image qodef--background\" style=\"background-image: url( ../wp-content/uploads/2020/03/h7-blog-image-1.jpg)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1300\" height=\"730\" src=\"../wp-content/uploads/2020/03/h7-blog-image-1.jpg\" class=\"attachment-full size-full wp-post-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1.jpg 1300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1-300x168.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1-800x449.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1-1024x575.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-1-768x431.jpg 768w\" sizes=\"(max-width: 1300px) 100vw, 1300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div itemprop=\"dateCreated\" class=\"qodef-e-info-item qodef-e-info-date entry-date published updated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" href=\"../2020/03/index.html\">27/03/2020</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"interactionCount\" content=\"UserComments: 2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-author-label\">by</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"author\" class=\"qodef-e-info-author-link\" href=\"../author/mark-smith/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark Smith\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../category/festival/index.html\" rel=\"category tag\">Festival</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 itemprop=\"name\" class=\"qodef-e-title entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-title-link\" href=\"../filming-for-spleen-officially-started-on-monday-21-03-19/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFilming for “spleen” officially started on monday 21/03/19\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-full\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-read-more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link\" href=\"../filming-for-spleen-officially-started-on-monday-21-03-19/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Read More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-info-comments-link\" href=\"../filming-for-spleen-officially-started-on-monday-21-03-19/index.html#comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-comments-icon fa fa-comment\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 comments </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-social-share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-social-share-dropdown-opener\" href=\"javascript:void(0)\"> <i class=\"qodef-social-share-icon fa fa-share-alt\"></i> <span class=\"qodef-social-title\">share</span> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-social-share-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-shortcode-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-facebook-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fpelicula.qodeinteractive.com%2Ffilming-for-spleen-officially-started-on-monday-21-03-19%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);\"> <span class=\"qodef-icon-elegant-icons social_facebook qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-twitter-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut++via+%40QodeInteractivehttps://pelicula.qodeinteractive.com/filming-for-spleen-officially-started-on-monday-21-03-19/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);\"> <span class=\"qodef-icon-elegant-icons social_twitter qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-linkedin-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Ffilming-for-spleen-officially-started-on-monday-21-03-19%2F&amp;title=Filming+for+%E2%80%9Cspleen%E2%80%9D+officially++started+on+monday+21%2F03%2F19&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_linkedin qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-pinterest-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Ffilming-for-spleen-officially-started-on-monday-21-03-19%2F&amp;description=Filming+for+%E2%80%9Cspleen%E2%80%9D+officially++started+on+monday+21%2F03%2F19&amp;media=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F03%2Fh7-blog-image-1.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_pinterest qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"qodef-e qodef-grid-item qodef-item--full post-965 post type-post status-publish format-standard has-post-thumbnail hentry category-festival tag-drama tag-film tag-review tag-video\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-post-link\" href=\"../cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/index.html\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-media-image qodef--background\" style=\"background-image: url( ../wp-content/uploads/2020/03/h7-blog-image-2.jpg)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1300\" height=\"730\" src=\"../wp-content/uploads/2020/03/h7-blog-image-2.jpg\" class=\"attachment-full size-full wp-post-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2.jpg 1300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2-300x168.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2-800x449.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2-1024x575.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-2-768x431.jpg 768w\" sizes=\"(max-width: 1300px) 100vw, 1300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div itemprop=\"dateCreated\" class=\"qodef-e-info-item qodef-e-info-date entry-date published updated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" href=\"../2020/03/index.html\">27/03/2020</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"interactionCount\" content=\"UserComments: 2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-author-label\">by</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"author\" class=\"qodef-e-info-author-link\" href=\"../author/mark-smith/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark Smith\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../category/festival/index.html\" rel=\"category tag\">Festival</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 itemprop=\"name\" class=\"qodef-e-title entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-title-link\" href=\"../cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCadenze rios picked for the upcoming “RENICIMIENTO”\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-full\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-read-more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link\" href=\"../cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Read More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-info-comments-link\" href=\"../cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/index.html#comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-comments-icon fa fa-comment\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 comments </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-social-share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-social-share-dropdown-opener\" href=\"javascript:void(0)\"> <i class=\"qodef-social-share-icon fa fa-share-alt\"></i> <span class=\"qodef-social-title\">share</span> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-social-share-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-shortcode-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-facebook-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fcadenze-rios-picked-for-the-upcoming-picture-renicimiento-4%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);\"> <span class=\"qodef-icon-elegant-icons social_facebook qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-twitter-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut++via+%40QodeInteractivehttps://pelicula.qodeinteractive.com/cadenze-rios-picked-for-the-upcoming-picture-renicimiento-4/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);\"> <span class=\"qodef-icon-elegant-icons social_twitter qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-linkedin-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fcadenze-rios-picked-for-the-upcoming-picture-renicimiento-4%2F&amp;title=Cadenze+rios+picked+for+the+upcoming+%E2%80%9CRENICIMIENTO%E2%80%9D&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_linkedin qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-pinterest-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fcadenze-rios-picked-for-the-upcoming-picture-renicimiento-4%2F&amp;description=Cadenze+rios+picked+for+the+upcoming+%E2%80%9CRENICIMIENTO%E2%80%9D&amp;media=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F03%2Fh7-blog-image-2.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_pinterest qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"qodef-e qodef-grid-item qodef-item--full post-962 post type-post status-publish format-standard has-post-thumbnail hentry category-festival tag-documentary tag-drama tag-film\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-post-link\" href=\"../adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/index.html\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-media-image qodef--background\" style=\"background-image: url( ../wp-content/uploads/2020/03/h7-blog-image-3.jpg)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1300\" height=\"730\" src=\"../wp-content/uploads/2020/03/h7-blog-image-3.jpg\" class=\"attachment-full size-full wp-post-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3.jpg 1300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3-300x168.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3-800x449.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3-1024x575.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-3-768x431.jpg 768w\" sizes=\"(max-width: 1300px) 100vw, 1300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div itemprop=\"dateCreated\" class=\"qodef-e-info-item qodef-e-info-date entry-date published updated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" href=\"../2020/03/index.html\">27/03/2020</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"interactionCount\" content=\"UserComments: 2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-author-label\">by</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"author\" class=\"qodef-e-info-author-link\" href=\"../author/mark-smith/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark Smith\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../category/festival/index.html\" rel=\"category tag\">Festival</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 itemprop=\"name\" class=\"qodef-e-title entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-title-link\" href=\"../adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdaptation of a desert-scene’s rising to cult status\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-full\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-read-more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link\" href=\"../adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Read More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-info-comments-link\" href=\"../adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/index.html#comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-comments-icon fa fa-comment\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 comments </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-social-share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-social-share-dropdown-opener\" href=\"javascript:void(0)\"> <i class=\"qodef-social-share-icon fa fa-share-alt\"></i> <span class=\"qodef-social-title\">share</span> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-social-share-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-shortcode-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-facebook-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fadaptation-of-a-desert-scenes-band-uprising-to-cult-status-3%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);\"> <span class=\"qodef-icon-elegant-icons social_facebook qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-twitter-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut++via+%40QodeInteractivehttps://pelicula.qodeinteractive.com/adaptation-of-a-desert-scenes-band-uprising-to-cult-status-3/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);\"> <span class=\"qodef-icon-elegant-icons social_twitter qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-linkedin-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fadaptation-of-a-desert-scenes-band-uprising-to-cult-status-3%2F&amp;title=Adaptation+of+a+desert-scene%E2%80%99s+rising+to+cult+status&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_linkedin qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-pinterest-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fadaptation-of-a-desert-scenes-band-uprising-to-cult-status-3%2F&amp;description=Adaptation+of+a+desert-scene%E2%80%99s+rising+to+cult+status&amp;media=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F03%2Fh7-blog-image-3.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_pinterest qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<article class=\"qodef-e qodef-grid-item qodef-item--full post-957 post type-post status-publish format-standard has-post-thumbnail hentry category-festival tag-documentary tag-drama tag-film\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-post-link\" href=\"../shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/index.html\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-media-image qodef--background\" style=\"background-image: url( ../wp-content/uploads/2020/03/h7-blog-image-4.jpg)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"1300\" height=\"730\" src=\"../wp-content/uploads/2020/03/h7-blog-image-4.jpg\" class=\"attachment-full size-full wp-post-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4.jpg 1300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4-300x168.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4-800x449.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4-1024x575.jpg 1024w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/03/h7-blog-image-4-768x431.jpg 768w\" sizes=\"(max-width: 1300px) 100vw, 1300px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div itemprop=\"dateCreated\" class=\"qodef-e-info-item qodef-e-info-date entry-date published updated\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" href=\"../2020/03/index.html\">27/03/2020</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"interactionCount\" content=\"UserComments: 2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-author-label\">by</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"author\" class=\"qodef-e-info-author-link\" href=\"../author/mark-smith/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark Smith\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../category/festival/index.html\" rel=\"category tag\">Festival</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 itemprop=\"name\" class=\"qodef-e-title entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-title-link\" href=\"../shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/index.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tShooting The Bridge Sequence Was Hard Work\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info qodef-info--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-full\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-read-more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link\" href=\"../shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Read More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a itemprop=\"url\" class=\"qodef-e-info-comments-link\" href=\"../shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/index.html#comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-e-info-comments-icon fa fa-comment\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 comments </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-info-item qodef-e-info-social-share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-social-share-dropdown-opener\" href=\"javascript:void(0)\"> <i class=\"qodef-social-share-icon fa fa-share-alt\"></i> <span class=\"qodef-social-title\">share</span> </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-social-share-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-shortcode-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-facebook-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fshooting-the-bridge-sequence-was-hard-work-despite-its-simplicity%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);\"> <span class=\"qodef-icon-elegant-icons social_facebook qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-twitter-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut++via+%40QodeInteractivehttps://pelicula.qodeinteractive.com/shooting-the-bridge-sequence-was-hard-work-despite-its-simplicity/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);\"> <span class=\"qodef-icon-elegant-icons social_twitter qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-linkedin-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fshooting-the-bridge-sequence-was-hard-work-despite-its-simplicity%2F&amp;title=Shooting+The+Bridge+Sequence+Was+Hard+Work&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_linkedin qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-pinterest-share\"> <a itemprop=\"url\" class=\"qodef-share-link\" href=\"#\" onclick=\"popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fshooting-the-bridge-sequence-was-hard-work-despite-its-simplicity%2F&amp;description=Shooting+The+Bridge+Sequence+Was+Hard+Work&amp;media=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F03%2Fh7-blog-image-4.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;\"> <span class=\"qodef-icon-elegant-icons social_pinterest qodef-social-network-icon\"></span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-a4597fa elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"a4597fa\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-394a5d7 elementor-column elementor-col-100 elementor-top-column\" data-id=\"394a5d7\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-bd99810 elementor-widget elementor-widget-pelicula_core_horizontal_timeline\" data-id=\"bd99810\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_horizontal_timeline.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-horizontal-timeline qodef-skin--light qodef-autoplay--enabled\" data-distance=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-ht-nav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-ht-nav-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-ht-nav-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/1980\">1980<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/1987\">1987<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/1995\">1995<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/2004\">2004<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/2006\">2006<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/2018\">2018<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-date=\"01/01/2022\">2022<span class=\"qodef-m-ht-nav-line-through\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-m-ht-nav-filling-line\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"qodef-m-ht-nav-navigation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"ion-md-arrow-dropleft qodef-prev qodef-inactive\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"ion-md-arrow-dropright qodef-next\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-m-ht-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ol class=\"qodef-m-items\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/1980\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-1.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-1.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-1-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-1-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t“phantamogoria”
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/what-lies-beyond/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/1987\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-2.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-2.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-2-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-2-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t“outcast”
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/the-eternal-void/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/1995\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-3.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-3.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-3-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-3-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;Rework&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/hueco-mundo/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/2004\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-4.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-4.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-4-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-4-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;Dark Tunnel&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/see-the-light/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/2006\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-5.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-5.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-5-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-5-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;Proactive&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/finding-art/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/2018\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-6.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-6.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-6-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-6-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;The Return&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/our-future/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"qodef-m-item qodef-e\" data-date=\"01/01/2022\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-inner qodef-timeline-has-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"800\" height=\"450\" src=\"../wp-content/uploads/2020/04/timeline-img-7.jpg\" class=\"qodef-m-image\" alt=\"a\" srcset=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-7.jpg 800w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-7-300x169.jpg 300w, https://pelicula.qodeinteractive.com/wp-content/uploads/2020/04/timeline-img-7-768x432.jpg 768w\" sizes=\"(max-width: 800px) 100vw, 800px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-e-hti-content-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"qodef-e-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&quot;Stolen Wind&quot;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"qodef-e-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m qodef-e-button qodef-button qodef-layout--textual qodef-size--normal qodef-html--link\" href=\"../portfolio-item/fresh-start/index.html\" target=\"_self\"> <span class=\"qodef-m-text\">Learn More</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section class=\"elementor-element elementor-element-afb0469 elementor-section-full_width qodef-in-focus elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section\" data-id=\"afb0469\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-no\">
\t\t\t\t\t\t<div class=\"elementor-row\">
\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-57aa2d3 elementor-column elementor-col-100 elementor-top-column\" data-id=\"57aa2d3\" data-element_type=\"column\">
\t\t\t\t\t\t\t\t<div class=\"elementor-column-wrap  elementor-element-populated\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2a7a59a elementor-widget elementor-widget-pelicula_core_section_title\" data-id=\"2a7a59a\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_section_title.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-section-title qodef-alignment--center qodef-title-break--disabled\" data-holder-options=\"{&quot;line-breaks&quot;:&quot;11&quot;}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"qodef-m-title\" style=\"color: #FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t“And i feel like i have a lot of work to<br /> do. Still, i'm a <span class=\"qodef-custom-styles\">student</span> of the <span class=\"qodef-custom-styles\">film”</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3f2c20f elementor-widget elementor-widget-spacer\" data-id=\"3f2c20f\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-a4c36cf elementor-widget__width-auto elementor-widget elementor-widget-pelicula_core_button\" data-id=\"a4c36cf\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_button.default\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"qodef-shortcode qodef-m  qodef-button qodef-layout--filled  qodef-html--link\" href=\"../contact-us/index.html\" target=\"_self\" data-hover-color=\"#FFFFFF\" data-background-color=\"#FFFFFF\" style=\"color: #111111;background-color: #FFFFFF;border-color: #FFFFFF\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qodef-m-text\">Contact Me</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t</div>
\t</div>
</div>
</div>
</div>
</main>
</div>
</div>
<footer id=\"qodef-page-footer\">
\t<div id=\"qodef-page-footer-top-area\">
\t\t<div id=\"qodef-page-footer-top-area-inner\" class=\"qodef-content-full-width\">
\t\t\t<div class=\"qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--2 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1\">
\t\t\t\t<div class=\"qodef-grid-inner clear\">
\t\t\t\t\t<div class=\"qodef-grid-item\">
\t\t\t\t\t\t<div id=\"pelicula_core_separator-14\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_1\">
\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
\t\t\t\t\t\t\t\t<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"media_image-4\" class=\"widget widget_media_image\" data-area=\"footer_top_area_column_1\"><a href=\"../index.html\"><img width=\"129\" height=\"32\" src=\"../wp-content/uploads/2020/03/footer-logo.png\" class=\"image wp-image-119  attachment-full size-full\" alt=\"x\" style=\"max-width: 100%; height: auto;\" /></a></div>
\t\t\t\t\t\t<div id=\"pelicula_core_separator-10\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_1\">
\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
\t\t\t\t\t\t\t\t<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"qodef-grid-item\">
\t\t\t\t\t\t<div id=\"pelicula_core_separator-13\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_2\">
\t\t\t\t\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
\t\t\t\t\t\t\t\t<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"nav_menu-2\" class=\"widget widget_nav_menu\" data-area=\"footer_top_area_column_2\">
\t\t\t\t\t\t\t<div class=\"menu-footer-menu-container\">
\t\t\t\t\t\t\t\t<ul id=\"menu-footer-menu\" class=\"menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2279\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2279\"><a href=\"../index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2280\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2280\"><a href=\"../about-us/index.html\">About Us</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2281\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2281\"><a href=\"../shop/index.html\">Shop</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2282\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2282\"><a href=\"../right-sidebar/index.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2283\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2283\"><a href=\"../contact-us/index.html\">Contact Us</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"qodef-page-footer-bottom-area\">
\t\t<div id=\"qodef-page-footer-bottom-area-inner\" class=\"qodef-content-full-width\">
\t\t\t<div class=\"qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--1\">
\t\t\t\t<div class=\"qodef-grid-inner clear\">
\t\t\t\t\t<div class=\"qodef-grid-item\">
\t\t\t\t\t\t<div id=\"text-3\" class=\"widget widget_text\" data-area=\"footer_bottom_area_column_1\">
\t\t\t\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t\t\t\t<p style=\"text-align: center;\"><a href=\"https://qodeinteractive.com/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: #4d4d4d;\">© <span style=\"color: #a6a6a6;\">QodeInteractive</span> 2020</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<a id=\"qodef-back-to-top\" href=\"#\">
      <span class=\"qodef-back-to-top-icon\">
      <span class=\"qodef-icon-elegant-icons arrow_carrot-up\"></span> </span>
\t<span class=\"qodef-btn-bg-holder \"></span>
</a>
<div id=\"qodef-side-area\">
\t<a href=\"javascript:void(0)\" id=\"qodef-side-area-close\" class=\"qodef-opener-icon qodef-m qodef-source--predefined\">
         <span class=\"qodef-m-icon qodef--open\">
         <span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
\t</a>
\t<div id=\"qodef-side-area-inner\">
\t\t<div id=\"pelicula_core_custom_font-2\" class=\"widget widget_pelicula_core_custom_font\" data-area=\"side-area\">
\t\t\t<p class=\"qodef-shortcode qodef-m qodef-side-area-custom-font qodef-custom-font qodef-custom-font-3895 qodef-layout--simple\" style=\"color: #ffffff;font-family: Bebas Neue;font-size: 80px;line-height: 52px;letter-spacing: 0px\">Pelicula</p>
\t\t</div>
\t\t<div id=\"text-2\" class=\"widget widget_text\" data-area=\"side-area\">
\t\t\t<div class=\"textwidget\">
\t\t\t\t<h6 style=\"color: #6d6d6d;\">A modern theme for the film industry &#038; video production</h6>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"pelicula_core_instagram_list-3\" class=\"widget widget_pelicula_core_instagram_list\" data-area=\"side-area\">
\t\t\t<div class=\"qodef-shortcode qodef-m  qodef-instagram-list qodef-gutter--tiny qodef-col-num--3\">
\t\t\t\t<div id=\"sb_instagram\" class=\"sbi sbi_col_3  sbi_width_resp\" style=\"padding-bottom: 10px;width: 100%;\" data-feedid=\"sbi_peliculatheme1#12\" data-res=\"auto\" data-cols=\"3\" data-num=\"12\" data-shortcode-atts=\"{&quot;0&quot;:&quot;12&quot;,&quot;1&quot;:&quot;3&quot;,&quot;2&quot;:&quot;5&quot;,&quot;3&quot;:&quot;px&quot;,&quot;4&quot;:&quot;auto&quot;,&quot;num&quot;:&quot;12&quot;,&quot;cols&quot;:&quot;3&quot;,&quot;imagepadding&quot;:&quot;5&quot;,&quot;imagepaddingunit&quot;:&quot;px&quot;,&quot;showheader&quot;:&quot;&quot;,&quot;showfollow&quot;:&quot;&quot;,&quot;showbutton&quot;:&quot;&quot;,&quot;imageres&quot;:&quot;auto&quot;}\">
\t\t\t\t\t<div id=\"sbi_images\" style=\"padding: 5px;\">
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18138102073025935\" data-date=\"1586851637\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DiiRANSN/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=3JdnuYJlWcMAX9fIeuN&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=e918229eac509b0aaf5feb4ed85a7a02&#038;oe=6091FF39\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3JdnuYJlWcMAX9fIeuN&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e918229eac509b0aaf5feb4ed85a7a02&amp;oe=6091FF39&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DiiRANSN\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DiiRANSN\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3JdnuYJlWcMAX9fIeuN&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e918229eac509b0aaf5feb4ed85a7a02&amp;oe=6091FF39&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18138102073025935</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18138102073025935\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17906466691441614\" data-date=\"1586851627\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DhTOgYuI/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=5sVtNDsD4SkAX9IOb62&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=9166f0d7ea15d6192d381179d5b63fef&#038;oe=6093B83F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5sVtNDsD4SkAX9IOb62&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9166f0d7ea15d6192d381179d5b63fef&amp;oe=6093B83F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DhTOgYuI\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DhTOgYuI\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5sVtNDsD4SkAX9IOb62&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9166f0d7ea15d6192d381179d5b63fef&amp;oe=6093B83F&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17906466691441614</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17906466691441614\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17898697330466487\" data-date=\"1586851616\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Df-rg6e5/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=3P6jk0nNZP0AX8SwvLX&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=69dd6460806d0f2b2f475df717de614b&#038;oe=60925FCE\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3P6jk0nNZP0AX8SwvLX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=69dd6460806d0f2b2f475df717de614b&amp;oe=60925FCE&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Df-rg6e5\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Df-rg6e5\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3P6jk0nNZP0AX8SwvLX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=69dd6460806d0f2b2f475df717de614b&amp;oe=60925FCE&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17898697330466487</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17898697330466487\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18125079958074232\" data-date=\"1586851604\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Dei1Amvy/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=tK3bzNiQcYMAX-JHGBY&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=73c109aacb26ce74c62ba68f6baf74d6&#038;oe=6093C443\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tK3bzNiQcYMAX-JHGBY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=73c109aacb26ce74c62ba68f6baf74d6&amp;oe=6093C443&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Dei1Amvy\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Dei1Amvy\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tK3bzNiQcYMAX-JHGBY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=73c109aacb26ce74c62ba68f6baf74d6&amp;oe=6093C443&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18125079958074232</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18125079958074232\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17870200891684227\" data-date=\"1586851583\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Db6ZgyR5/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&#038;oe=60923C58\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&amp;oe=60923C58&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Db6ZgyR5\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Db6ZgyR5\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&amp;oe=60923C58&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17870200891684227</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17870200891684227\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17871653737665234\" data-date=\"1586851569\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DaNaAJvX/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=HY7upozXK5wAX-6wAXY&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=9bbda17989b87b9ead5c076854790299&#038;oe=60915813\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=HY7upozXK5wAX-6wAXY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9bbda17989b87b9ead5c076854790299&amp;oe=60915813&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DaNaAJvX\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DaNaAJvX\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=HY7upozXK5wAX-6wAXY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9bbda17989b87b9ead5c076854790299&amp;oe=60915813&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17871653737665234</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17871653737665234\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17849562971021220\" data-date=\"1586851554\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DYXGAE-7/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=t1dET4bro9EAX_w7kBw&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=be215b06f065bc96396ddf752e88ca5e&#038;oe=6091456F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=t1dET4bro9EAX_w7kBw&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=be215b06f065bc96396ddf752e88ca5e&amp;oe=6091456F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DYXGAE-7\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DYXGAE-7\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=t1dET4bro9EAX_w7kBw&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=be215b06f065bc96396ddf752e88ca5e&amp;oe=6091456F&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17849562971021220</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17849562971021220\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18102022654184100\" data-date=\"1586851542\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DW7ugvvo/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=5ce7ac7c1580d891b30afeed802d1ff3&#038;oe=609071B5\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=5ce7ac7c1580d891b30afeed802d1ff3&amp;oe=609071B5&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DW7ugvvo\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DW7ugvvo\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=5ce7ac7c1580d891b30afeed802d1ff3&amp;oe=609071B5&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18102022654184100</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18102022654184100\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18139713682016553\" data-date=\"1586851531\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DVlLgwX7/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=d3TdEZK8wg0AX8_tMa7&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=e8b806f688c454ff3e2c718d4c6f0b35&#038;oe=60920A9F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=d3TdEZK8wg0AX8_tMa7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e8b806f688c454ff3e2c718d4c6f0b35&amp;oe=60920A9F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DVlLgwX7\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DVlLgwX7\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=d3TdEZK8wg0AX8_tMa7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e8b806f688c454ff3e2c718d4c6f0b35&amp;oe=60920A9F&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18139713682016553</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18139713682016553\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18101124766092345\" data-date=\"1586851521\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DUWmg2Cp/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=ZE997216zdEAX8gc4KW&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=1ad5a196c1b061917048ad733a9a01b4&#038;oe=6091C71E\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=ZE997216zdEAX8gc4KW&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=1ad5a196c1b061917048ad733a9a01b4&amp;oe=6091C71E&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DUWmg2Cp\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DUWmg2Cp\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=ZE997216zdEAX8gc4KW&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=1ad5a196c1b061917048ad733a9a01b4&amp;oe=6091C71E&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18101124766092345</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18101124766092345\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18126467887079409\" data-date=\"1586851507\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DSoaAiXH/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=EZhO2Al58P8AX_kNM4y&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=b9df531347c7317be0faa53d158414c3&#038;oe=6091BF98\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=EZhO2Al58P8AX_kNM4y&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=b9df531347c7317be0faa53d158414c3&amp;oe=6091BF98&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DSoaAiXH\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DSoaAiXH\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=EZhO2Al58P8AX_kNM4y&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=b9df531347c7317be0faa53d158414c3&amp;oe=6091BF98&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 18126467887079409</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18126467887079409\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17884982272542098\" data-date=\"1586851348\">
\t\t\t\t\t\t\t<div class=\"sbi_photo_wrap\">
\t\t\t\t\t\t\t\t<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9C_SWA1xc/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=NE0owxVbQcMAX_gtAjX&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=24363c2ba1f8852245b0ca82072190a9&#038;oe=6090279A\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NE0owxVbQcMAX_gtAjX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=24363c2ba1f8852245b0ca82072190a9&amp;oe=6090279A&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9C_SWA1xc\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9C_SWA1xc\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NE0owxVbQcMAX_gtAjX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=24363c2ba1f8852245b0ca82072190a9&amp;oe=6090279A&quot;}\">
\t\t\t\t\t\t\t\t\t<span class=\"sbi-screenreader\">Instagram post 17884982272542098</span>
\t\t\t\t\t\t\t\t\t<img src=\"../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17884982272542098\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"sbi_load\"></div>
\t\t\t\t\t<span class=\"sbi_resized_image_data\" data-feed-id=\"sbi_peliculatheme1#12\" data-resized=\"{&quot;18138102073025935&quot;:{&quot;id&quot;:&quot;93372921_356332725321480_8400426497354550408_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17906466691441614&quot;:{&quot;id&quot;:&quot;93633716_2290256834604316_20547262508728217_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17898697330466487&quot;:{&quot;id&quot;:&quot;93761785_882467185534538_8390250542312319543_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18125079958074232&quot;:{&quot;id&quot;:&quot;92953080_544504953146159_3085776284173196940_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17870200891684227&quot;:{&quot;id&quot;:&quot;93073088_126589828961784_2711754838664723206_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17871653737665234&quot;:{&quot;id&quot;:&quot;93356452_233476107860764_3114943981963002995_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17849562971021220&quot;:{&quot;id&quot;:&quot;93336300_901096336971148_7200873235174889129_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18102022654184100&quot;:{&quot;id&quot;:&quot;92912065_602127913707429_2938335729196611886_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18139713682016553&quot;:{&quot;id&quot;:&quot;92851453_150864709694370_6229453079127953440_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18101124766092345&quot;:{&quot;id&quot;:&quot;92948509_657182158348998_6400887218958287180_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18126467887079409&quot;:{&quot;id&quot;:&quot;92912065_667301397419051_1608122363815943220_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17884982272542098&quot;:{&quot;id&quot;:&quot;92823966_216717206280503_4604162183304081575_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}}}\">
                     </span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div id=\"qodef-fullscreen-area\">
\t<div class=\"qodef-content-grid\">
\t\t<div id=\"qodef-fullscreen-area-inner\">
\t\t\t<nav class=\"qodef-fullscreen-menu\">
\t\t\t\t<ul id=\"menu-fullscreen-menu\" class=\"menu\">
\t\t\t\t\t<li id=\"menu-item-691\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-691 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-1945\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1945\"><a href=\"../parallax-showcase/index.html\"><span class=\"qodef-menu-item-text\">Parallax Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2652\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2652\"><a href=\"../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-1943\" class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-758 current_page_item menu-item-1943\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li id=\"menu-item-2286\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2286 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"../portfolio/index.html\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2288\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2288\"><a href=\"../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2287\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2287\"><a href=\"../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2837\" class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2837\"><a href=\"../portfolio-item/what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li id=\"menu-item-2289\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2289 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-689\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-689\"><a href=\"../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2290\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2290\"><a href=\"../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2839\" class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2839\"><a href=\"../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li id=\"menu-item-2291\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2291 qodef-menu-item--narrow\">
\t\t\t\t\t\t<a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
\t\t\t\t\t\t<div class=\"qodef-drop-down-second\">
\t\t\t\t\t\t\t<div class=\"qodef-drop-down-second-inner\">
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-690\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-690\"><a href=\"../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2292\" class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-2292\"><a href=\"../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Single Product</span></a></li>
\t\t\t\t\t\t\t\t\t<li id=\"menu-item-2840\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2840\"><a href=\"../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li id=\"menu-item-2293\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2293\"><a href=\"../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
</div>
</div>
<div class=\"rbt-toolbar\" data-theme=\"Pelicula\" data-featured=\"\" data-button-position=\"70%\" data-button-horizontal=\"right\" data-button-alt=\"no\"></div>
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5T772QJ\"
\t\t\t\t  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script type=\"text/javascript\">
\tvar sbiajaxurl = \"../wp-admin/admin-ajax.html\";
</script>
<link href=\"https://fonts.googleapis.com/css?family=Bebas+Neue:400%7CRoboto:400\" rel=\"stylesheet\" property=\"stylesheet\" media=\"all\" type=\"text/css\">
<script type=\"text/javascript\">
\tvar c = document.body.className;
\tc = c.replace(/woocommerce-no-js/, 'woocommerce-js');
\tdocument.body.className = c;
</script>
<script type=\"text/javascript\">
\tif(typeof revslider_showDoubleJqueryError === \"undefined\") {
\t\tfunction revslider_showDoubleJqueryError(sliderID) {
\t\t\tvar err = \"<div class='rs_error_message_box'>\";
\t\t\terr += \"<div class='rs_error_message_oops'>Oops...</div>\";
\t\t\terr += \"<div class='rs_error_message_content'>\";
\t\t\terr += \"You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>\";
\t\t\terr += \"To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on\";
\t\t\terr += \"<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it\";
\t\t\terr += \"</div>\";
\t\t\terr += \"</div>\";
\t\t\tvar slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = \"block\";
\t\t}
\t}
</script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar wpcf7 = {\"apiSettings\":{\"root\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-json\\/contact-form-7\\/v1\",\"namespace\":\"contact-form-7\\/v1\"},\"cached\":\"1\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/0fef6.js\"></script>
<script type='text/javascript' src='../../export.qodethemes.com/_toolbar/assets/js/rbt-modulesc225.js?ver=5.4.1'></script>
<script src=\"../wp-content/cache/minify/6d18f.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar wc_add_to_cart_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\",\"i18n_view_cart\":\"View cart\",\"cart_url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/cart\\/\",\"is_cart\":\"\",\"cart_redirect_after_add\":\"no\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/dc06c.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar woocommerce_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/63a69.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar wc_cart_fragments_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\",\"cart_hash_key\":\"wc_cart_hash_76474210e59261afa8ad9dbca9115745\",\"fragment_name\":\"wc_fragments_76474210e59261afa8ad9dbca9115745\",\"request_timeout\":\"5000\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/e58f1.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar qodefGlobal = {\"vars\":{\"adminBarHeight\":0,\"topAreaHeight\":0,\"restUrl\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-json\\/\",\"restNonce\":\"f3284dd249\",\"paginationRestRoute\":\"pelicula\\/v1\\/get-posts\",\"headerHeight\":100,\"mobileHeaderHeight\":70}};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/a2757.js\"></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?key=AIzaSyA9R7XKAZB9BRsfn4l-uAg3RJQq5eA7OMY&amp;ver=5.4.1'></script>
<script src=\"../wp-content/cache/minify/89d5d.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar qodefMapsVariables = {\"global\":{\"mapStyle\":\"\",\"mapZoom\":12,\"mapScrollable\":false,\"mapDraggable\":true,\"streetViewControl\":true,\"zoomControl\":true,\"mapTypeControl\":true,\"fullscreenControl\":true},\"multiple\":[]};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/74c80.js\"></script>
<script type='text/javascript'>
\tvar mejsL10n = {\"language\":\"en\",\"strings\":{\"mejs.download-file\":\"Download File\",\"mejs.install-flash\":\"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\\/\\/get.adobe.com\\/flashplayer\\/\",\"mejs.fullscreen\":\"Fullscreen\",\"mejs.play\":\"Play\",\"mejs.pause\":\"Pause\",\"mejs.time-slider\":\"Time Slider\",\"mejs.time-help-text\":\"Use Left\\/Right Arrow keys to advance one second, Up\\/Down arrows to advance ten seconds.\",\"mejs.live-broadcast\":\"Live Broadcast\",\"mejs.volume-help-text\":\"Use Up\\/Down Arrow keys to increase or decrease volume.\",\"mejs.unmute\":\"Unmute\",\"mejs.mute\":\"Mute\",\"mejs.volume-slider\":\"Volume Slider\",\"mejs.video-player\":\"Video Player\",\"mejs.audio-player\":\"Audio Player\",\"mejs.captions-subtitles\":\"Captions\\/Subtitles\",\"mejs.captions-chapters\":\"Chapters\",\"mejs.none\":\"None\",\"mejs.afrikaans\":\"Afrikaans\",\"mejs.albanian\":\"Albanian\",\"mejs.arabic\":\"Arabic\",\"mejs.belarusian\":\"Belarusian\",\"mejs.bulgarian\":\"Bulgarian\",\"mejs.catalan\":\"Catalan\",\"mejs.chinese\":\"Chinese\",\"mejs.chinese-simplified\":\"Chinese (Simplified)\",\"mejs.chinese-traditional\":\"Chinese (Traditional)\",\"mejs.croatian\":\"Croatian\",\"mejs.czech\":\"Czech\",\"mejs.danish\":\"Danish\",\"mejs.dutch\":\"Dutch\",\"mejs.english\":\"English\",\"mejs.estonian\":\"Estonian\",\"mejs.filipino\":\"Filipino\",\"mejs.finnish\":\"Finnish\",\"mejs.french\":\"French\",\"mejs.galician\":\"Galician\",\"mejs.german\":\"German\",\"mejs.greek\":\"Greek\",\"mejs.haitian-creole\":\"Haitian Creole\",\"mejs.hebrew\":\"Hebrew\",\"mejs.hindi\":\"Hindi\",\"mejs.hungarian\":\"Hungarian\",\"mejs.icelandic\":\"Icelandic\",\"mejs.indonesian\":\"Indonesian\",\"mejs.irish\":\"Irish\",\"mejs.italian\":\"Italian\",\"mejs.japanese\":\"Japanese\",\"mejs.korean\":\"Korean\",\"mejs.latvian\":\"Latvian\",\"mejs.lithuanian\":\"Lithuanian\",\"mejs.macedonian\":\"Macedonian\",\"mejs.malay\":\"Malay\",\"mejs.maltese\":\"Maltese\",\"mejs.norwegian\":\"Norwegian\",\"mejs.persian\":\"Persian\",\"mejs.polish\":\"Polish\",\"mejs.portuguese\":\"Portuguese\",\"mejs.romanian\":\"Romanian\",\"mejs.russian\":\"Russian\",\"mejs.serbian\":\"Serbian\",\"mejs.slovak\":\"Slovak\",\"mejs.slovenian\":\"Slovenian\",\"mejs.spanish\":\"Spanish\",\"mejs.swahili\":\"Swahili\",\"mejs.swedish\":\"Swedish\",\"mejs.tagalog\":\"Tagalog\",\"mejs.thai\":\"Thai\",\"mejs.turkish\":\"Turkish\",\"mejs.ukrainian\":\"Ukrainian\",\"mejs.vietnamese\":\"Vietnamese\",\"mejs.welsh\":\"Welsh\",\"mejs.yiddish\":\"Yiddish\"}};
</script>
<script src=\"../wp-content/cache/minify/864c2.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar _wpmejsSettings = {\"pluginPath\":\"\\/wp-includes\\/js\\/mediaelement\\/\",\"classPrefix\":\"mejs-\",\"stretching\":\"responsive\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/b0646.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar sb_instagram_js_options = {\"font_method\":\"svg\",\"resized_url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/sb-instagram-feed-images\\/\",\"placeholder\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/plugins\\/instagram-feed\\/img\\/placeholder.png\"};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/c7165.js\"></script>
<script type='text/javascript'>
\tvar elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"downloadImage\":\"Download image\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"version\":\"2.9.8\",\"urls\":{\"assets\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"settings\":{\"page\":[],\"general\":{\"elementor_lightbox_enable_counter\":\"yes\",\"elementor_lightbox_enable_fullscreen\":\"yes\",\"elementor_lightbox_enable_zoom\":\"yes\",\"elementor_lightbox_enable_share\":\"yes\",\"elementor_lightbox_title_src\":\"title\",\"elementor_lightbox_description_src\":\"description\"},\"editorPreferences\":[]},\"post\":{\"id\":758,\"title\":\"Director%20Home%20%E2%80%93%20Pelicula\",\"excerpt\":\"\",\"featuredImage\":false}};
</script>
<script src=\"../wp-content/cache/minify/9f110.js\"></script>
<script type='text/javascript'>
\t/* <![CDATA[ */
\tvar qodefElementorGlobal = {\"vars\":{\"elementorSectionHandler\":{\"e83a0d1\":[{\"url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/2020\\/04\\/h7-background-img-1.jpg\",\"id\":1502},\"\"],\"aeaf554\":[{\"url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/2020\\/04\\/h7-background-img-2.jpg\",\"id\":1504},\"\"]}}};
\t/* ]]> */
</script>
<script src=\"../wp-content/cache/minify/92b64.js\"></script>
</body>
<!-- Mirrored from pelicula.qodeinteractive.com/director-home/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 14:42:09 GMT -->
</html>", "tactor/show.html.twig", "C:\\Users\\ahmed\\Downloads\\ArtLife\\templates\\tactor\\show.html.twig");
    }
}
