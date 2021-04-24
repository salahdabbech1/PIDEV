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

/* theatre/show.html.twig */
class __TwigTemplate_be1dcae060559b64d23a8537235c96d354618740c56f00a002e41a8e77c3768b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theatre/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theatre/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\" prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#\">

<!-- Mirrored from pelicula.qodeinteractive.com/portfolio-item/hueco-mundo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 14:44:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=yes\">
<link rel=\"profile\" href=\"https://gmpg.org/xfn/11\">
<title>Hueco Mundo &#8211; Pelicula</title>
<script data-cfasync=\"false\" data-pagespeed-no-defer>//<![CDATA[
var gtm4wp_datalayer_name = \"dataLayer\";
var dataLayer = dataLayer || [];
//]]>
</script>
<link rel='dns-prefetch' href='http://export.qodethemes.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Feed\" href=\"../../feed/index.html\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Comments Feed\" href=\"../../comments/feed/index.html\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Hueco Mundo Comments Feed\" href=\"feed/index.html\" />
<script type=\"text/javascript\">
window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/12.0.0-1\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/12.0.0-1\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=5.4.1\"}};
/*! This file is auto-generated */
!function(e,a,t){var r,n,o,i,p=a.createElement(\"canvas\"),s=p.getContext&&p.getContext(\"2d\");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline=\"top\",s.font=\"600 32px Arial\",e){case\"flag\":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case\"emoji\":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement(\"script\");t.src=e,t.defer=t.type=\"text/javascript\",a.getElementsByTagName(\"head\")[0].appendChild(t)}for(i=Array(\"flag\",\"emoji\"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],\"flag\"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener(\"DOMContentLoaded\",n,!1),e.addEventListener(\"load\",n,!1)):(e.attachEvent(\"onload\",n),a.attachEvent(\"onreadystatechange\",function(){\"complete\"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type=\"text/css\">
img.wp-smiley,
img.emoji {
display: inline !important;
border: none !important;
box-shadow: none !important;
height: 1em !important;
width: 1em !important;
margin: 0 .07em !important;
vertical-align: -0.1em !important;
background: none !important;
padding: 0 !important;
}
</style>
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/91ce8.css\" media=\"all\" />
<link rel='stylesheet' id='material-icons-css' href='https://fonts.googleapis.com/icon?family=Material+Icons&amp;ver=5.4.1' type='text/css' media='all' />
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/52993.css\" media=\"all\" />
<link rel='stylesheet' id='rabbit_css-css' href='../../../export.qodethemes.com/_toolbar/assets/css/rbt-modulesc225.css?ver=5.4.1' type='text/css' media='all' />
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/edd85.css\" media=\"all\" />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/a2923.css\" media=\"all\" />
<link rel='stylesheet' id='pelicula-google-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C500%2C600%7CBebas+Neue%3A300%2C400%2C500%2C600&amp;subset=latin-ext&amp;ver=1.0.0' type='text/css' media='all' />
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/d5104.css\" media=\"all\" />
<style id='pelicula-style-inline-css' type='text/css'>
#qodef-page-outer { margin-top: -100px;}#qodef-page-footer-top-area { background-color: #000000;}#qodef-page-footer-bottom-area { background-color: #000000;border-top-color: rgba(255,255,255,0.1);border-top-width: 2px;}#qodef-page-inner { padding: 0 0 95px;}@media only screen and (max-width: 1024px) { #qodef-page-inner { padding: 0 0 95px;}}#qodef-page-spinner .qodef-m-inner { background-color: #000000;color: #ffffff;}.qodef-page-title { height: 250px;background-image: url(../../wp-content/uploads/2020/03/title-image-1.jpg);}.qodef-page-title .qodef-m-content { padding-top: 100px;}a, p a { letter-spacing: 0px;}.qodef-header--standard #qodef-page-header { background-color: rgba(255,255,255,0);}@media only screen and (max-width: 1024px){h1 { font-size: 62px;line-height: 62px;}h2 { font-size: 60px;line-height: 60px;}h4 { font-size: 27px;line-height: 27px;}}@media only screen and (max-width: 768px){h1 { font-size: 58px;line-height: 58px;}h5 { font-size: 22px;line-height: 23px;}}@media only screen and (max-width: 680px){h1 { font-size: 52px;line-height: 50px;}h2 { font-size: 45px;line-height: 43px;}h3 { font-size: 32px;line-height: 34px;}h4 { font-size: 30px;line-height: 28px;}}
</style>
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/0d4ce.css\" media=\"all\" />
<script src=\"../../wp-content/cache/minify/a4d4c.js\"></script>
<link rel='https://api.w.org/' href='../../wp-json/index.html' />
<link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"../../xmlrpc0db0.html?rsd\" />
<link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"../../wp-includes/wlwmanifest.xml\" />
<link rel='prev' title='What Lies Beyond' href='../what-lies-beyond/index.html' />
<link rel='next' title='Hueco Mundo' href='../hueco-mundo-2/index.html' />
<meta name=\"generator\" content=\"WordPress 5.4.1\" />
<meta name=\"generator\" content=\"WooCommerce 4.1.0\" />
<link rel=\"canonical\" href=\"index.html\" />
<link rel='shortlink' href='../../indexd246.html?p=1289' />
<link rel=\"alternate\" type=\"application/json+oembed\" href=\"../../wp-json/oembed/1.0/embed539d.json?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fportfolio-item%2Fhueco-mundo%2F\" />
<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"../../wp-json/oembed/1.0/embed7e7a?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fportfolio-item%2Fhueco-mundo%2F&amp;format=xml\" />


<meta property='og:site_name' content='Pelicula' />
<meta property='og:url' content='https://pelicula.qodeinteractive.com' />
<meta property='og:locale' content='en_US' />
<meta property='og:description' content='Pelicula is a modern theme specifically designed for movie, film, and all types of video production websites. ' />
<meta property='og:title' content='Pelicula - Video Production and Movie Theme' />
<meta property='og:type' content='website' />
<meta property='og:image' content='https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/1200x630.jpg' />
<meta property='og:image:width' content='1200' />
<meta property='og:image:height' content='630' />
<meta name='twitter:card' content='summary' />
<meta name='twitter:title' content='Pelicula - Video Production and Movie Theme' />
<meta name='twitter:image' content='https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/1200x630.jpg' />
<meta name='twitter:description' content='Pelicula is a modern theme specifically designed for movie, film, and all types of video production websites. ' />

<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<script data-cfasync=\"false\" data-pagespeed-no-defer>//<![CDATA[
var dataLayer_content = {\"pagePostType\":\"portfolio-item\",\"pagePostType2\":\"single-portfolio-item\",\"pagePostAuthor\":\"admin\"};
dataLayer.push( dataLayer_content );//]]>
</script>
<script data-cfasync=\"false\">//<![CDATA[
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5T772QJ');//]]>
</script>

<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<meta name=\"generator\" content=\"Powered by Slider Revolution 6.2.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.\" />
<link rel=\"icon\" href=\"../../wp-content/uploads/2020/05/cropped-favicon-pelicula-32x32.png\" sizes=\"32x32\" />
<link rel=\"icon\" href=\"../../wp-content/uploads/2020/05/cropped-favicon-pelicula-192x192.png\" sizes=\"192x192\" />
<link rel=\"apple-touch-icon\" href=\"../../wp-content/uploads/2020/05/cropped-favicon-pelicula-180x180.png\" />
<meta name=\"msapplication-TileImage\" content=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/cropped-favicon-pelicula-270x270.png\" />
<script type=\"text/javascript\">function setREVStartSize(e){
//window.requestAnimationFrame(function() {
window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
try {
var pw = document.getElementById(e.c).parentNode.offsetWidth,
newh;
pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
e.mh = e.mh===undefined || e.mh==\"\" || e.mh===\"auto\" ? 0 : parseInt(e.mh,0);
if(e.layout===\"fullscreen\" || e.l===\"fullscreen\")
newh = Math.max(e.mh,window.RSIH);
else{
e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
e.gh = e.el===undefined || e.el===\"\" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

var nl = new Array(e.rl.length),
ix = 0,
sl;
e.tabw = e.tabhide>=pw ? 0 : e.tabw;
e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
e.tabh = e.tabhide>=pw ? 0 : e.tabh;
e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
sl = nl[0];
for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
}
if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement(\"style\"));
document.getElementById(e.c).height = newh+\"px\";
window.rs_init_css.innerHTML += \"#\"+e.c+\"_wrapper { height: \"+newh+\"px }\";
} catch(e){
console.log(\"Failure at Presize of Slider:\" + e)
}
//});
};</script>
<style type=\"text/css\" id=\"wp-custom-css\">
.page-id-1544 .qodef-inner-homes-slider .qodef-e-media-image {
transform: scale(1) !important;
}

.page-id-1893 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-1895 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-1903 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-1907 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-2370 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-1652 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

@media only screen and (min-width: 1025px) and (max-width: 1440px) {
.page-id-1544 .elementor-1544 .elementor-element.elementor-element-5cb2047 > .elementor-widget-container {
padding: 12% 0 0 0;
}
}

@media only screen and (min-width: 769px) and (max-width: 1024px) {
.page-id-1544 .elementor-1544 .elementor-element.elementor-element-242eb3f > .elementor-widget-container,
.page-id-1544 .elementor-1544 .elementor-element.elementor-element-ea6686e > .elementor-widget-container {
padding: 13% 0 0 0;
}
}

.page-id-1544 .qodef-fullscreen-menu-opener {
display:none;
}\t\t</style>
</head>
<body class=\"portfolio-item-template-default single single-portfolio-item postid-1289 theme-pelicula qode-framework-1.1.2 woocommerce-no-js qodef-age-verification--opened qodef-back-to-top--enabled  qodef-content-grid-1300 qodef-header--light qodef-header--standard qodef-header-appearance--sticky qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--default qodef-layout--custom-full-width qodef-follow-portfolio-info pelicula-core-1.0 pelicula-1.0 qodef-header-standard--center qodef-search--fullscreen elementor-default elementor-kit-9 elementor-page elementor-page-1289\" itemscope itemtype=\"https://schema.org/WebPage\">
<div id=\"qodef-page-wrapper\" class=\"\">
<div class=\"qodef-content-lines-holder qodef-skin--dark\"><div class=\"qodef-content-line qodef--left\"></div><div class=\"qodef-content-line qodef--center\"></div><div class=\"qodef-content-line qodef--right\"></div></div><header id=\"qodef-page-header\">
<div id=\"qodef-page-header-inner\">
<a itemprop=\"url\" class=\"qodef-header-logo-link qodef-height--not-set qodef-textual-logo qodef--line-through\" href=\"../../index.html\" style=\";;\" rel=\"home\">
<span class=\"qodef-logo-text\">
<span class=\"qodef-logo-text-inner\">P</span>
</span>
</a> <nav class=\"qodef-header-navigation\" role=\"navigation\" aria-label=\"Top Menu\">
<ul id=\"menu-main-menu-1\" class=\"menu\"><li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-51 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-346\"><a href=\"../../index.html\"><span class=\"qodef-menu-item-text\">Main Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-580\"><a href=\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("theatre_index");
        echo "\"><span class=\"qodef-menu-item-text\">Theatre</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-687\"><a href=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tactor_index");
        echo "\"><span class=\"qodef-menu-item-text\">Actors</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-570\"><a href=\"../../video-production-studio/index.html\"><span class=\"qodef-menu-item-text\">Video Production Studio</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2651\"><a href=\"../../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-748\"><a href=\"../../interactive-title-showcase/index.html\"><span class=\"qodef-menu-item-text\">Interactive Title Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-806\"><a href=\"../../director-home/index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-822\"><a href=\"../../fullscreen-showcase/index.html\"><span class=\"qodef-menu-item-text\">Fullscreen Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-895\"><a href=\"../../film-gallery/index.html\"><span class=\"qodef-menu-item-text\">Film Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2211\"><a href=\"../../film-showcase/index.html\"><span class=\"qodef-menu-item-text\">Film Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-874\"><a href=\"../../video-home/index.html\"><span class=\"qodef-menu-item-text\">Video Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-905\"><a href=\"../../coming-soon/index.html\"><span class=\"qodef-menu-item-text\">Coming Soon</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-933\"><a href=\"../../interactive-links/index.html\"><span class=\"qodef-menu-item-text\">Interactive Links</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1798\"><a href=\"../../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-52 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Pages</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1104\"><a href=\"../../about-us/index.html\"><span class=\"qodef-menu-item-text\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1451\"><a href=\"../../what-we-do/index.html\"><span class=\"qodef-menu-item-text\">What We Do</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1242\"><a href=\"../../our-process/index.html\"><span class=\"qodef-menu-item-text\">Our Process</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1383\"><a href=\"../../our-team/index.html\"><span class=\"qodef-menu-item-text\">Our Team</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1149\"><a href=\"../../contact-us/index.html\"><span class=\"qodef-menu-item-text\">Contact Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1243\"><a href=\"../../faq-page/index.html\"><span class=\"qodef-menu-item-text\">FAQ Page</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1777\"><a href=\"../../404.html\"><span class=\"qodef-menu-item-text\">404 Error Page</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-55 qodef-menu-item--wide\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner qodef-content-grid\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1882 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1881\"><a href=\"../../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2777\"><a href=\"../../portfolio/gallery-list/index.html\"><span class=\"qodef-menu-item-text\">Gallery List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1880\"><a href=\"../../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2430\"><a href=\"../../portfolio/highlight-slider/index.html\"><span class=\"qodef-menu-item-text\">HighLight Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2429\"><a href=\"../../portfolio/overlay-slider/index.html\"><span class=\"qodef-menu-item-text\">Overlay Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2428\"><a href=\"../../portfolio/carousel/index.html\"><span class=\"qodef-menu-item-text\">Carousel</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1883 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1918\"><a href=\"../../portfolio/two-columns/index.html\"><span class=\"qodef-menu-item-text\">Two Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1917\"><a href=\"../../portfolio/three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1916\"><a href=\"../../portfolio/three-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Three Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1915\"><a href=\"../../portfolio/four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1914\"><a href=\"../../portfolio/four-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Four Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1913\"><a href=\"../../portfolio/five-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Five Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2379\"><a href=\"../../portfolio/six-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Six Columns Wide</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-362 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2461\"><a href=\"../the-eternal-void/index.html\"><span class=\"qodef-menu-item-text\">Big Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-369\"><a href=\"../see-the-light/index.html\"><span class=\"qodef-menu-item-text\">Small Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-368\"><a href=\"../finding-art/index.html\"><span class=\"qodef-menu-item-text\">Big Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-367\"><a href=\"../fresh-start/index.html\"><span class=\"qodef-menu-item-text\">Small Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-365\"><a href=\"../our-future/index.html\"><span class=\"qodef-menu-item-text\">Big Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-364\"><a href=\"../not-impossible/index.html\"><span class=\"qodef-menu-item-text\">Small Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-366\"><a href=\"../studio-lightening/index.html\"><span class=\"qodef-menu-item-text\">Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1271\"><a href=\"../what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item current-menu-item menu-item-1310\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Pelicula Light</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2131 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Hover Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2456\"><a href=\"../../portfolio/info-bottom-left/index.html\"><span class=\"qodef-menu-item-text\">Info Bottom Left</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2453\"><a href=\"../../portfolio/fade-in-hover/index.html\"><span class=\"qodef-menu-item-text\">Fade In Hover</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2454\"><a href=\"../../portfolio/info-follow/index.html\"><span class=\"qodef-menu-item-text\">Info Follow</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2455\"><a href=\"../../portfolio/direction-aware/index.html\"><span class=\"qodef-menu-item-text\">Direction Aware</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-236\"><a href=\"../../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-239\"><a href=\"../../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-238\"><a href=\"../../left-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Left Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-237\"><a href=\"../../no-sidebar/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-159\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-164\"><a href=\"../../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-161\"><a href=\"../../out-of-sight/index.html\"><span class=\"qodef-menu-item-text\">Gallery Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-163\"><a href=\"../../old-cameras/index.html\"><span class=\"qodef-menu-item-text\">Video Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2543\"><a href=\"../../new-soundtrack/index.html\"><span class=\"qodef-menu-item-text\">Audio Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-162\"><a href=\"../../blade-runner/index.html\"><span class=\"qodef-menu-item-text\">Quote Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-160\"><a href=\"../../bliss-bone/index.html\"><span class=\"qodef-menu-item-text\">Link Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2544\"><a href=\"../../sky-valley/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar Post</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-137\"><a href=\"../../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-139\"><a href=\"../../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Product Single</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-189\"><a href=\"../../three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1055\"><a href=\"../../four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1049\"><a href=\"../../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-138\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop Pages</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-134\"><a href=\"../../my-account/index.html\"><span class=\"qodef-menu-item-text\">My Account</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-136\"><a href=\"../../cart/index.html\"><span class=\"qodef-menu-item-text\">Cart</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-135\"><a href=\"../../checkout/index.html\"><span class=\"qodef-menu-item-text\">Checkout</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
</ul> </nav>
<div class=\"qodef-widget-holder\">
<div id=\"pelicula_core_side_area_opener-2\" class=\"widget widget_pelicula_core_side_area_opener qodef-header-widget-area-one\" data-area=\"header-widget-one\"><a href=\"javascript:void(0)\" class=\"qodef-opener-icon qodef-m qodef-source--predefined qodef-side-area-opener\" style=\"margin: 0 8px 0 0\">
<span class=\"qodef-m-icon qodef--open\">
<span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
</a></div> </div>
</div>
<div class=\"qodef-header-sticky\">
<div class=\"qodef-header-sticky-inner \">
<a itemprop=\"url\" class=\"qodef-header-logo-link qodef-height--not-set qodef-textual-logo qodef--line-through\" href=\"../../index.html\" style=\";;\" rel=\"home\">
<span class=\"qodef-logo-text\">
<span class=\"qodef-logo-text-inner\" style=\"color:#000000\">P</span>
</span>
</a> <nav class=\"qodef-header-navigation\" role=\"navigation\" aria-label=\"Top Menu\">
<ul id=\"menu-main-menu-2\" class=\"menu\"><li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-51 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-346\"><a href=\"../../index.html\"><span class=\"qodef-menu-item-text\">Main Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-580\"><a href=\"../../film-festival/index.html\"><span class=\"qodef-menu-item-text\">Film Festival</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-687\"><a href=\"../../parallax-showcase/index.html\"><span class=\"qodef-menu-item-text\">Parallax Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-570\"><a href=\"../../video-production-studio/index.html\"><span class=\"qodef-menu-item-text\">Video Production Studio</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2651\"><a href=\"../../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-748\"><a href=\"../../interactive-title-showcase/index.html\"><span class=\"qodef-menu-item-text\">Interactive Title Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-806\"><a href=\"../../director-home/index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-822\"><a href=\"../../fullscreen-showcase/index.html\"><span class=\"qodef-menu-item-text\">Fullscreen Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-895\"><a href=\"../../film-gallery/index.html\"><span class=\"qodef-menu-item-text\">Film Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2211\"><a href=\"../../film-showcase/index.html\"><span class=\"qodef-menu-item-text\">Film Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-874\"><a href=\"../../video-home/index.html\"><span class=\"qodef-menu-item-text\">Video Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-905\"><a href=\"../../coming-soon/index.html\"><span class=\"qodef-menu-item-text\">Coming Soon</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-933\"><a href=\"../../interactive-links/index.html\"><span class=\"qodef-menu-item-text\">Interactive Links</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1798\"><a href=\"../../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-52 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Pages</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1104\"><a href=\"../../about-us/index.html\"><span class=\"qodef-menu-item-text\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1451\"><a href=\"../../what-we-do/index.html\"><span class=\"qodef-menu-item-text\">What We Do</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1242\"><a href=\"../../our-process/index.html\"><span class=\"qodef-menu-item-text\">Our Process</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1383\"><a href=\"../../our-team/index.html\"><span class=\"qodef-menu-item-text\">Our Team</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1149\"><a href=\"../../contact-us/index.html\"><span class=\"qodef-menu-item-text\">Contact Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1243\"><a href=\"../../faq-page/index.html\"><span class=\"qodef-menu-item-text\">FAQ Page</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1777\"><a href=\"../../404.html\"><span class=\"qodef-menu-item-text\">404 Error Page</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-55 qodef-menu-item--wide\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner qodef-content-grid\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1882 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1881\"><a href=\"../../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2777\"><a href=\"../../portfolio/gallery-list/index.html\"><span class=\"qodef-menu-item-text\">Gallery List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1880\"><a href=\"../../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2430\"><a href=\"../../portfolio/highlight-slider/index.html\"><span class=\"qodef-menu-item-text\">HighLight Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2429\"><a href=\"../../portfolio/overlay-slider/index.html\"><span class=\"qodef-menu-item-text\">Overlay Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2428\"><a href=\"../../portfolio/carousel/index.html\"><span class=\"qodef-menu-item-text\">Carousel</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1883 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1918\"><a href=\"../../portfolio/two-columns/index.html\"><span class=\"qodef-menu-item-text\">Two Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1917\"><a href=\"../../portfolio/three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1916\"><a href=\"../../portfolio/three-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Three Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1915\"><a href=\"../../portfolio/four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1914\"><a href=\"../../portfolio/four-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Four Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1913\"><a href=\"../../portfolio/five-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Five Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2379\"><a href=\"../../portfolio/six-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Six Columns Wide</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-362 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2461\"><a href=\"../the-eternal-void/index.html\"><span class=\"qodef-menu-item-text\">Big Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-369\"><a href=\"../see-the-light/index.html\"><span class=\"qodef-menu-item-text\">Small Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-368\"><a href=\"../finding-art/index.html\"><span class=\"qodef-menu-item-text\">Big Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-367\"><a href=\"../fresh-start/index.html\"><span class=\"qodef-menu-item-text\">Small Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-365\"><a href=\"../our-future/index.html\"><span class=\"qodef-menu-item-text\">Big Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-364\"><a href=\"../not-impossible/index.html\"><span class=\"qodef-menu-item-text\">Small Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-366\"><a href=\"../studio-lightening/index.html\"><span class=\"qodef-menu-item-text\">Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1271\"><a href=\"../what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item current-menu-item menu-item-1310\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Pelicula Light</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2131 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Hover Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2456\"><a href=\"../../portfolio/info-bottom-left/index.html\"><span class=\"qodef-menu-item-text\">Info Bottom Left</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2453\"><a href=\"../../portfolio/fade-in-hover/index.html\"><span class=\"qodef-menu-item-text\">Fade In Hover</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2454\"><a href=\"../../portfolio/info-follow/index.html\"><span class=\"qodef-menu-item-text\">Info Follow</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2455\"><a href=\"../../portfolio/direction-aware/index.html\"><span class=\"qodef-menu-item-text\">Direction Aware</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-236\"><a href=\"../../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-239\"><a href=\"../../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-238\"><a href=\"../../left-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Left Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-237\"><a href=\"../../no-sidebar/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-159\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-164\"><a href=\"../../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-161\"><a href=\"../../out-of-sight/index.html\"><span class=\"qodef-menu-item-text\">Gallery Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-163\"><a href=\"../../old-cameras/index.html\"><span class=\"qodef-menu-item-text\">Video Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2543\"><a href=\"../../new-soundtrack/index.html\"><span class=\"qodef-menu-item-text\">Audio Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-162\"><a href=\"../../blade-runner/index.html\"><span class=\"qodef-menu-item-text\">Quote Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-160\"><a href=\"../../bliss-bone/index.html\"><span class=\"qodef-menu-item-text\">Link Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2544\"><a href=\"../../sky-valley/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar Post</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-137\"><a href=\"../../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-139\"><a href=\"../../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Product Single</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-189\"><a href=\"../../three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1055\"><a href=\"../../four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1049\"><a href=\"../../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-138\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop Pages</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-134\"><a href=\"../../my-account/index.html\"><span class=\"qodef-menu-item-text\">My Account</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-136\"><a href=\"../../cart/index.html\"><span class=\"qodef-menu-item-text\">Cart</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-135\"><a href=\"../../checkout/index.html\"><span class=\"qodef-menu-item-text\">Checkout</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
</ul> </nav>
<div class=\"qodef-widget-holder\">
<div id=\"pelicula_core_side_area_opener-4\" class=\"widget widget_pelicula_core_side_area_opener qodef-sticky-right\"><a href=\"javascript:void(0)\" class=\"qodef-opener-icon qodef-m qodef-source--predefined qodef-side-area-opener\" style=\"color: #111111;;margin: 0 0 0 28px\">
<span class=\"qodef-m-icon qodef--open\">
<span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
</a></div> </div>
</div>
</div></header><header id=\"qodef-page-mobile-header\">
<div id=\"qodef-page-mobile-header-inner\">
<a itemprop=\"url\" class=\"qodef-mobile-header-logo-link qodef-textual-logo qodef--line-through\" href=\"../../index.html\" style=\"height:50px;\" rel=\"home\">
<span class=\"qodef-logo-text\">
<span class=\"qodef-logo-text-inner\">P</span>
</span>
<img width=\"52\" height=\"91\" src=\"../../wp-content/uploads/2020/03/logo-light.png\" class=\"qodef-header-logo-image qodef--dark\" alt=\"logo dark\" /><img width=\"52\" height=\"91\" src=\"../../wp-content/uploads/2020/03/logo-light.png\" class=\"qodef-header-logo-image qodef--light\" alt=\"logo light\" /></a><a class=\"qodef-mobile-header-opener\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"39px\" height=\"11px\">
<path fill-rule=\"evenodd\" fill=\"rgb(17, 17, 17)\" d=\"M8.000,3.000 L8.000,-0.000 L39.000,-0.000 L39.000,3.000 L8.000,3.000 ZM31.000,11.000 L-0.000,11.000 L-0.000,8.000 L31.000,8.000 L31.000,11.000 Z\" />
</svg></a> <nav class=\"qodef-mobile-header-navigation\" role=\"navigation\" aria-label=\"Mobile Menu\">
<ul id=\"menu-main-menu-4\" class=\"qodef-content-grid\"><li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-51 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-346\"><a href=\"../../index.html\"><span class=\"qodef-menu-item-text\">Main Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-580\"><a href=\"../../film-festival/index.html\"><span class=\"qodef-menu-item-text\">Film Festival</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-687\"><a href=\"../../parallax-showcase/index.html\"><span class=\"qodef-menu-item-text\">Parallax Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-570\"><a href=\"../../video-production-studio/index.html\"><span class=\"qodef-menu-item-text\">Video Production Studio</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2651\"><a href=\"../../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-748\"><a href=\"../../interactive-title-showcase/index.html\"><span class=\"qodef-menu-item-text\">Interactive Title Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-806\"><a href=\"../../director-home/index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-822\"><a href=\"../../fullscreen-showcase/index.html\"><span class=\"qodef-menu-item-text\">Fullscreen Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-895\"><a href=\"../../film-gallery/index.html\"><span class=\"qodef-menu-item-text\">Film Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2211\"><a href=\"../../film-showcase/index.html\"><span class=\"qodef-menu-item-text\">Film Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-874\"><a href=\"../../video-home/index.html\"><span class=\"qodef-menu-item-text\">Video Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-905\"><a href=\"../../coming-soon/index.html\"><span class=\"qodef-menu-item-text\">Coming Soon</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-933\"><a href=\"../../interactive-links/index.html\"><span class=\"qodef-menu-item-text\">Interactive Links</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1798\"><a href=\"../../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-52 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Pages</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1104\"><a href=\"../../about-us/index.html\"><span class=\"qodef-menu-item-text\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1451\"><a href=\"../../what-we-do/index.html\"><span class=\"qodef-menu-item-text\">What We Do</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1242\"><a href=\"../../our-process/index.html\"><span class=\"qodef-menu-item-text\">Our Process</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1383\"><a href=\"../../our-team/index.html\"><span class=\"qodef-menu-item-text\">Our Team</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1149\"><a href=\"../../contact-us/index.html\"><span class=\"qodef-menu-item-text\">Contact Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1243\"><a href=\"../../faq-page/index.html\"><span class=\"qodef-menu-item-text\">FAQ Page</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1777\"><a href=\"../../404.html\"><span class=\"qodef-menu-item-text\">404 Error Page</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-55 qodef-menu-item--wide\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner qodef-content-grid\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1882 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1881\"><a href=\"../../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2777\"><a href=\"../../portfolio/gallery-list/index.html\"><span class=\"qodef-menu-item-text\">Gallery List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1880\"><a href=\"../../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2430\"><a href=\"../../portfolio/highlight-slider/index.html\"><span class=\"qodef-menu-item-text\">HighLight Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2429\"><a href=\"../../portfolio/overlay-slider/index.html\"><span class=\"qodef-menu-item-text\">Overlay Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2428\"><a href=\"../../portfolio/carousel/index.html\"><span class=\"qodef-menu-item-text\">Carousel</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1883 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1918\"><a href=\"../../portfolio/two-columns/index.html\"><span class=\"qodef-menu-item-text\">Two Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1917\"><a href=\"../../portfolio/three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1916\"><a href=\"../../portfolio/three-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Three Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1915\"><a href=\"../../portfolio/four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1914\"><a href=\"../../portfolio/four-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Four Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1913\"><a href=\"../../portfolio/five-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Five Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2379\"><a href=\"../../portfolio/six-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Six Columns Wide</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-362 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2461\"><a href=\"../the-eternal-void/index.html\"><span class=\"qodef-menu-item-text\">Big Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-369\"><a href=\"../see-the-light/index.html\"><span class=\"qodef-menu-item-text\">Small Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-368\"><a href=\"../finding-art/index.html\"><span class=\"qodef-menu-item-text\">Big Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-367\"><a href=\"../fresh-start/index.html\"><span class=\"qodef-menu-item-text\">Small Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-365\"><a href=\"../our-future/index.html\"><span class=\"qodef-menu-item-text\">Big Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-364\"><a href=\"../not-impossible/index.html\"><span class=\"qodef-menu-item-text\">Small Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-366\"><a href=\"../studio-lightening/index.html\"><span class=\"qodef-menu-item-text\">Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1271\"><a href=\"../what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item current-menu-item menu-item-1310\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Pelicula Light</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2131 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Hover Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2456\"><a href=\"../../portfolio/info-bottom-left/index.html\"><span class=\"qodef-menu-item-text\">Info Bottom Left</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2453\"><a href=\"../../portfolio/fade-in-hover/index.html\"><span class=\"qodef-menu-item-text\">Fade In Hover</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2454\"><a href=\"../../portfolio/info-follow/index.html\"><span class=\"qodef-menu-item-text\">Info Follow</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2455\"><a href=\"../../portfolio/direction-aware/index.html\"><span class=\"qodef-menu-item-text\">Direction Aware</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-236\"><a href=\"../../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-239\"><a href=\"../../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-238\"><a href=\"../../left-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Left Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-237\"><a href=\"../../no-sidebar/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-159\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-164\"><a href=\"../../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-161\"><a href=\"../../out-of-sight/index.html\"><span class=\"qodef-menu-item-text\">Gallery Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-163\"><a href=\"../../old-cameras/index.html\"><span class=\"qodef-menu-item-text\">Video Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2543\"><a href=\"../../new-soundtrack/index.html\"><span class=\"qodef-menu-item-text\">Audio Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-162\"><a href=\"../../blade-runner/index.html\"><span class=\"qodef-menu-item-text\">Quote Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-160\"><a href=\"../../bliss-bone/index.html\"><span class=\"qodef-menu-item-text\">Link Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2544\"><a href=\"../../sky-valley/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar Post</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-137\"><a href=\"../../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-139\"><a href=\"../../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Product Single</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-189\"><a href=\"../../three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1055\"><a href=\"../../four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1049\"><a href=\"../../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-138\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop Pages</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-134\"><a href=\"../../my-account/index.html\"><span class=\"qodef-menu-item-text\">My Account</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-136\"><a href=\"../../cart/index.html\"><span class=\"qodef-menu-item-text\">Cart</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-135\"><a href=\"../../checkout/index.html\"><span class=\"qodef-menu-item-text\">Checkout</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
</ul> </nav>
</div>

</header> <div id=\"qodef-page-outer\">
<div id=\"qodef-page-inner\" class=\"qodef-content-full-width\"><main id=\"qodef-page-content\" class=\"qodef-grid qodef-layout--template \">
<div class=\"qodef-grid-inner clear\">
<div class=\"qodef-grid-item qodef-page-content-section qodef-col--12\">
<div class=\"qodef-portfolio qodef-m qodef-portfolio-single qodef-layout--custom-full-width\">
<article class=\"qodef-portfolio-single-item qodef-e post-1289 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-camera\">
<div class=\"qodef-e-inner\">
<div class=\"qodef-e-content\">
<div class=\"qodef-grid-inner\">
<div class=\"qodef-grid-item\">
<div class=\"qodef-e qodef-portfolio-content\">
<div data-elementor-type=\"wp-post\" data-elementor-id=\"1289\" class=\"elementor elementor-1289\" data-elementor-settings=\"[]\">
<div class=\"elementor-inner\">
<div class=\"elementor-section-wrap\">
<style>
#eae {
background-image: url(../../wp-content";
        // line 597
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 597, $this->source); })()), "poster", [], "any", false, false, false, 597), "html", null, true);
        echo ");
background-size: 100% 1200px;
}
</style>
<section id=\"eae\" class=\"elementor-element elementor-element-9abf6e0 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"9abf6e0\" data-element_type=\"section\" {
background-image: url(../../wp-content";
        // line 602
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 602, $this->source); })()), "poster", [], "any", false, false, false, 602), "html", null, true);
        echo ");
}>
<div class=\"elementor-container elementor-column-gap-default\">
<div class=\"elementor-row\">
<div class=\"elementor-element elementor-element-a463735 elementor-column elementor-col-100 elementor-top-column\" data-id=\"a463735\" data-element_type=\"column\">
<div class=\"elementor-column-wrap  elementor-element-populated\">
<div class=\"elementor-widget-wrap\">
<div class=\"elementor-element elementor-element-7afb144 elementor-widget elementor-widget-pelicula_core_section_title\" data-id=\"7afb144\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_section_title.default\">
<div class=\"elementor-widget-container\">
<div style=\"position: relative; left: 158px; top: 400px;\" class=\"qodef-shortcode qodef-m  qodef-section-title qodef-alignment--center \" data-holder-options=\"{&quot;line-breaks&quot;:&quot;&quot;}\">
<h6  style=\"color: #A6A6A6\">
";
        // line 613
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 613, $this->source); })()), "genre", [], "any", false, false, false, 613), "html", null, true);
        echo "\t</h6>
<h2  style=\"color: #FFFFFF\">
";
        // line 615
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 615, $this->source); })()), "name", [], "any", false, false, false, 615), "html", null, true);
        echo " </h2>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"elementor-element elementor-element-fba7e10 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"fba7e10\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
<div class=\"elementor-container elementor-column-gap-no\">
<div class=\"elementor-row\">
<div class=\"elementor-element elementor-element-c560a2e elementor-column elementor-col-100 elementor-top-column\" data-id=\"c560a2e\" data-element_type=\"column\">
<div class=\"elementor-column-wrap  elementor-element-populated\">
<div class=\"elementor-widget-wrap\">
<div class=\"elementor-element elementor-element-4409897 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"4409897\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
<div class=\"elementor-widget-container\">
<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
<div class=\"qodef-m-image\">
<img width=\"600\" height=\"200\" src=\"../../wp-content";
        // line 635
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 635, $this->source); })()), "image", [], "any", false, false, false, 635), "html", null, true);
        echo "\" class=\"attachment-full size-full\" alt=\"a\" </div>
<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"";
        // line 636
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 636, $this->source); })()), "trailer", [], "any", false, false, false, 636), "html", null, true);
        echo "\" data-type=\"iframe\">
<span class=\"qodef-m-play-inner\">
<span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
</a>
</div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"elementor-element elementor-element-5a82f44 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"5a82f44\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
<div class=\"elementor-container elementor-column-gap-no\">
<div class=\"elementor-row\">
<div class=\"elementor-element elementor-element-de6597d elementor-column elementor-col-16 elementor-top-column\" data-id=\"de6597d\" data-element_type=\"column\">
<div class=\"elementor-column-wrap\">
<div class=\"elementor-widget-wrap\">
</div>
</div>
</div>
<div class=\"elementor-element elementor-element-881e5a1 elementor-column elementor-col-66 elementor-top-column\" data-id=\"881e5a1\" data-element_type=\"column\">
<div class=\"elementor-column-wrap  elementor-element-populated\">
<div class=\"elementor-widget-wrap\">

<div class=\"elementor-element elementor-element-ad73930 elementor-widget elementor-widget-text-editor\" data-id=\"ad73930\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
<div class=\"elementor-widget-container\">
<div class=\"elementor-text-editor elementor-clearfix\"><p style=\"margin: 0px; line-height: 26px;\">";
        // line 663
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 663, $this->source); })()), "description", [], "any", false, false, false, 663), "html", null, true);
        echo "</p></div>
</div>
</div>
<div class=\"elementor-element elementor-element-ae216c9 elementor-widget elementor-widget-pelicula_core_portfolio_info\" data-id=\"ae216c9\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_portfolio_info.default\">
<div class=\"elementor-widget-container\">
<div class=\"qodef-shortcode qodef-m  qodef-portfolio-info \">
<div class=\"qodef-e qodef-info--date\">
<h5 class=\"qodef-e-title\">Date: </h5>
<p itemprop=\"dateCreated\" class=\"entry-date updated\">";
        // line 671
        ((twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 671, $this->source); })()), "rdate", [], "any", false, false, false, 671)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 671, $this->source); })()), "rdate", [], "any", false, false, false, 671), "Y/M/d"), "html", null, true))) : (print ("")));
        echo "</p>
<meta itemprop=\"interactionCount\" content=\"UserComments: 0\" />
</div>

<div class=\"qodef-e qodef-info--info-items\">
<h5 class=\"qodef-e-title\">Genre: </h5>
<span class=\"qodef-e-info-item\">
";
        // line 678
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theatre"]) || array_key_exists("theatre", $context) ? $context["theatre"] : (function () { throw new RuntimeError('Variable "theatre" does not exist.', 678, $this->source); })()), "genre", [], "any", false, false, false, 678), "html", null, true);
        echo " </span>
</div>
<div class=\"qodef-e qodef-info--info-items\">
<h5 class=\"qodef-e-title\"> </h5>
</div>
<div class=\"qodef-e qodef-info--info-items\">
<h5 class=\"qodef-e-title\"> </h5>
</div>
<div class=\"qodef-e qodef-info--info-items\">
<h5 class=\"qodef-e-title\">Starring: </h5>
</div>
</div> </div>
</div>
</div>
</div>
</div>
<div class=\"elementor-element elementor-element-fbce935 elementor-column elementor-col-16 elementor-top-column\" data-id=\"fbce935\" data-element_type=\"column\">
<div class=\"elementor-column-wrap\">
<div class=\"elementor-widget-wrap\">
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"elementor-element elementor-element-061da5e elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"061da5e\" data-element_type=\"section\">
<div class=\"elementor-container elementor-column-gap-no\">
<div class=\"elementor-row\">
<div class=\"elementor-element elementor-element-9b8c54b elementor-column elementor-col-100 elementor-top-column\" data-id=\"9b8c54b\" data-element_type=\"column\">
<div class=\"elementor-column-wrap  elementor-element-populated\">
<div class=\"elementor-widget-wrap\">
<div class=\"elementor-element elementor-element-54c4859 elementor-widget elementor-widget-pelicula_core_image_gallery\" data-id=\"54c4859\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_image_gallery.default\">
<div class=\"elementor-widget-container\">
<div class=\"qodef-shortcode qodef-m  qodef-image-gallery qodef-magnific-popup qodef-popup-gallery qodef-grid qodef-layout--columns   qodef-gutter--small qodef-col-num--3  qodef-responsive--predefined\">
<div class=\"row\">
<style>
.HEEEE{
height:270px;
}

</style>
";
        // line 719
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 719, $this->source); })()), "description", [], "any", false, false, false, 719), "setRendered", [], "any", false, false, false, 719);
        // line 720
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 720, $this->source); })()), "trailer", [], "any", false, false, false, 720), "setRendered", [], "any", false, false, false, 720);
        // line 721
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 721, $this->source); })()), "name", [], "any", false, false, false, 721), "setRendered", [], "any", false, false, false, 721);
        // line 722
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 722, $this->source); })()), "genre", [], "any", false, false, false, 722), "setRendered", [], "any", false, false, false, 722);
        // line 723
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 723, $this->source); })()), "image", [], "any", false, false, false, 723), "setRendered", [], "any", false, false, false, 723);
        // line 724
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 724, $this->source); })()), "poster", [], "any", false, false, false, 724), "setRendered", [], "any", false, false, false, 724);
        // line 725
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 725, $this->source); })()), "rdate", [], "any", false, false, false, 725), "setRendered", [], "any", false, false, false, 725);
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 726, $this->source); })()), "vars", [], "any", false, false, false, 726), "data", [], "any", false, false, false, 726), "theatreActors", [], "any", false, false, false, 726));
        foreach ($context['_seq'] as $context["_key"] => $context["choices"]) {
            // line 727
            echo "<div id=\"tactortas\"  class=\"HEEEE col-2 mb-2\">
<a href=\"../../tactor/";
            // line 728
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choices"], "id", [], "any", false, false, false, 728), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choices"], "name", [], "any", false, false, false, 728), "html", null, true);
            echo "\">
<img style=\"height: 100%;width: 100%;\" src=\"../../wp-content/";
            // line 729
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choices"], "image", [], "any", false, false, false, 729), "html", null, true);
            echo "\"   alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choices"], "name", [], "any", false, false, false, 729), "html", null, true);
            echo "\" />
</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choices'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        echo "
";
        // line 734
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 734, $this->source); })()), "theatreActors", [], "any", false, false, false, 734), "setRendered", [], "any", false, false, false, 734);
        // line 735
        echo "


</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div> </div>
</div>
</div>
</div>
</article>
<div id=\"qodef-single-portfolio-navigation\" class=\"qodef-m\">
<div class=\"qodef-m-inner qodef-content-grid\">
<a itemprop=\"url\" class=\"qodef-m-nav qodef--prev\" href=\"../what-lies-beyond/index.html\">
<div class=\"qodef-post-image\">
<img src=\"../../wp-content/uploads/2020/03/port-4-img-1-144x80.jpg\" alt=\"w\" width=\"144\" height=\"80\" /> </div>
<div class=\"qodef-title-label\">
<h4 itemprop=\"url\" class=\"qodef-e-title-link\" title=\"What Lies Beyond\">
What Lies Beyond </h4>
<span class=\"qodef-m-nav-label\">Previous</span> </div>
</a>
<a itemprop=\"url\" class=\"qodef-m-nav qodef--back-link\" href=\"../../index.html\">
<span class=\"qodef-icon-elegant-icons icon_grid-2x2 qodef-m-nav-icon\"></span> </a>
<a itemprop=\"url\" class=\"qodef-m-nav qodef--next\" href=\"../hueco-mundo-2/index.html\">
<div class=\"qodef-post-image\">
<img src=\"../../wp-content/uploads/2020/04/port-gallery-featured-img-1-144x80.jpg\" alt=\"s\" width=\"144\" height=\"80\" /> </div>
<div class=\"qodef-title-label\">
<h4 itemprop=\"url\" class=\"qodef-e-title-link\" title=\"Hueco Mundo\">
Hueco Mundo </h4>
<span class=\"qodef-m-nav-label\">Next</span> </div>
</a>
</div>
</div>
</div>
</div> </div>
</main>
</div>
</div>
<footer id=\"qodef-page-footer\">
<div id=\"qodef-page-footer-top-area\">
<div id=\"qodef-page-footer-top-area-inner\" class=\"qodef-content-full-width\">
<div class=\"qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--2 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1\">
<div class=\"qodef-grid-inner clear\">
<div class=\"qodef-grid-item\">
<div id=\"pelicula_core_separator-14\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_1\"><div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
</div></div><div id=\"media_image-4\" class=\"widget widget_media_image\" data-area=\"footer_top_area_column_1\"><a href=\"../../index.html\"><img width=\"129\" height=\"32\" src=\"../../wp-content/uploads/2020/03/footer-logo.png\" class=\"image wp-image-119  attachment-full size-full\" alt=\"x\" style=\"max-width: 100%; height: auto;\" /></a></div><div id=\"pelicula_core_separator-10\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_1\"><div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
</div></div> </div>
<div class=\"qodef-grid-item\">
<div id=\"pelicula_core_separator-13\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_2\"><div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
</div></div><div id=\"nav_menu-2\" class=\"widget widget_nav_menu\" data-area=\"footer_top_area_column_2\"><div class=\"menu-footer-menu-container\"><ul id=\"menu-footer-menu\" class=\"menu\"><li id=\"menu-item-2279\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2279\"><a href=\"../../index.html\">Home</a></li>
<li id=\"menu-item-2280\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2280\"><a href=\"../../about-us/index.html\">About Us</a></li>
<li id=\"menu-item-2281\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2281\"><a href=\"../../shop/index.html\">Shop</a></li>
<li id=\"menu-item-2282\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2282\"><a href=\"../../right-sidebar/index.html\">Blog</a></li>
<li id=\"menu-item-2283\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2283\"><a href=\"../../contact-us/index.html\">Contact Us</a></li>
</ul></div></div> </div>
</div>
</div>
</div>
</div>
<div id=\"qodef-page-footer-bottom-area\">
<div id=\"qodef-page-footer-bottom-area-inner\" class=\"qodef-content-full-width\">
<div class=\"qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--1\">
<div class=\"qodef-grid-inner clear\">
<div class=\"qodef-grid-item\">
<div id=\"text-3\" class=\"widget widget_text\" data-area=\"footer_bottom_area_column_1\"> <div class=\"textwidget\"><p style=\"text-align: center;\"><a href=\"https://qodeinteractive.com/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: #4d4d4d;\">© <span style=\"color: #a6a6a6;\">QodeInteractive</span> 2020</a></p>
</div>
</div> </div>
</div>
</div>
</div>
</div>
</footer><a id=\"qodef-back-to-top\" href=\"#\">
<span class=\"qodef-back-to-top-icon\">
<span class=\"qodef-icon-elegant-icons arrow_carrot-up\"></span> </span>
<span class=\"qodef-btn-bg-holder \"></span>
</a> <div id=\"qodef-side-area\">
<a href=\"javascript:void(0)\" id=\"qodef-side-area-close\" class=\"qodef-opener-icon qodef-m qodef-source--predefined\">
<span class=\"qodef-m-icon qodef--open\">
<span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
</a> <div id=\"qodef-side-area-inner\">
<div id=\"pelicula_core_custom_font-2\" class=\"widget widget_pelicula_core_custom_font\" data-area=\"side-area\"><p class=\"qodef-shortcode qodef-m qodef-side-area-custom-font qodef-custom-font qodef-custom-font-7522 qodef-layout--simple\" style=\"color: #ffffff;font-family: Bebas Neue;font-size: 80px;line-height: 52px;letter-spacing: 0px\">Pelicula</p></div><div id=\"text-2\" class=\"widget widget_text\" data-area=\"side-area\"> <div class=\"textwidget\"><h6 style=\"color: #6d6d6d;\">A modern theme for the theatre industry &#038; video production</h6>
</div>
</div><div id=\"pelicula_core_instagram_list-3\" class=\"widget widget_pelicula_core_instagram_list\" data-area=\"side-area\"><div class=\"qodef-shortcode qodef-m  qodef-instagram-list qodef-gutter--tiny qodef-col-num--3\">
<div id=\"sb_instagram\" class=\"sbi sbi_col_3  sbi_width_resp\" style=\"padding-bottom: 10px;width: 100%;\" data-feedid=\"sbi_peliculatheme1#12\" data-res=\"auto\" data-cols=\"3\" data-num=\"12\" data-shortcode-atts=\"{&quot;0&quot;:&quot;12&quot;,&quot;1&quot;:&quot;3&quot;,&quot;2&quot;:&quot;5&quot;,&quot;3&quot;:&quot;px&quot;,&quot;4&quot;:&quot;auto&quot;,&quot;num&quot;:&quot;12&quot;,&quot;cols&quot;:&quot;3&quot;,&quot;imagepadding&quot;:&quot;5&quot;,&quot;imagepaddingunit&quot;:&quot;px&quot;,&quot;showheader&quot;:&quot;&quot;,&quot;showfollow&quot;:&quot;&quot;,&quot;showbutton&quot;:&quot;&quot;,&quot;imageres&quot;:&quot;auto&quot;}\">
<div id=\"sbi_images\" style=\"padding: 5px;\">
<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18138102073025935\" data-date=\"1586851637\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DiiRANSN/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=3JdnuYJlWcMAX9fIeuN&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=e918229eac509b0aaf5feb4ed85a7a02&#038;oe=6091FF39\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3JdnuYJlWcMAX9fIeuN&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e918229eac509b0aaf5feb4ed85a7a02&amp;oe=6091FF39&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DiiRANSN\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DiiRANSN\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3JdnuYJlWcMAX9fIeuN&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e918229eac509b0aaf5feb4ed85a7a02&amp;oe=6091FF39&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18138102073025935</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18138102073025935\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17906466691441614\" data-date=\"1586851627\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DhTOgYuI/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=5sVtNDsD4SkAX9IOb62&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=9166f0d7ea15d6192d381179d5b63fef&#038;oe=6093B83F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5sVtNDsD4SkAX9IOb62&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9166f0d7ea15d6192d381179d5b63fef&amp;oe=6093B83F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DhTOgYuI\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DhTOgYuI\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5sVtNDsD4SkAX9IOb62&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9166f0d7ea15d6192d381179d5b63fef&amp;oe=6093B83F&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17906466691441614</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17906466691441614\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17898697330466487\" data-date=\"1586851616\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Df-rg6e5/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=3P6jk0nNZP0AX8SwvLX&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=69dd6460806d0f2b2f475df717de614b&#038;oe=60925FCE\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3P6jk0nNZP0AX8SwvLX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=69dd6460806d0f2b2f475df717de614b&amp;oe=60925FCE&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Df-rg6e5\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Df-rg6e5\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3P6jk0nNZP0AX8SwvLX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=69dd6460806d0f2b2f475df717de614b&amp;oe=60925FCE&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17898697330466487</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17898697330466487\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18125079958074232\" data-date=\"1586851604\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Dei1Amvy/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=tK3bzNiQcYMAX-JHGBY&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=73c109aacb26ce74c62ba68f6baf74d6&#038;oe=6093C443\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tK3bzNiQcYMAX-JHGBY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=73c109aacb26ce74c62ba68f6baf74d6&amp;oe=6093C443&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Dei1Amvy\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Dei1Amvy\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tK3bzNiQcYMAX-JHGBY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=73c109aacb26ce74c62ba68f6baf74d6&amp;oe=6093C443&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18125079958074232</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18125079958074232\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17870200891684227\" data-date=\"1586851583\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Db6ZgyR5/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&#038;oe=60923C58\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&amp;oe=60923C58&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Db6ZgyR5\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Db6ZgyR5\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&amp;oe=60923C58&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17870200891684227</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17870200891684227\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17871653737665234\" data-date=\"1586851569\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DaNaAJvX/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=HY7upozXK5wAX-6wAXY&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=9bbda17989b87b9ead5c076854790299&#038;oe=60915813\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=HY7upozXK5wAX-6wAXY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9bbda17989b87b9ead5c076854790299&amp;oe=60915813&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DaNaAJvX\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DaNaAJvX\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=HY7upozXK5wAX-6wAXY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9bbda17989b87b9ead5c076854790299&amp;oe=60915813&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17871653737665234</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17871653737665234\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17849562971021220\" data-date=\"1586851554\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DYXGAE-7/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=t1dET4bro9EAX_w7kBw&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=be215b06f065bc96396ddf752e88ca5e&#038;oe=6091456F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=t1dET4bro9EAX_w7kBw&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=be215b06f065bc96396ddf752e88ca5e&amp;oe=6091456F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DYXGAE-7\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DYXGAE-7\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=t1dET4bro9EAX_w7kBw&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=be215b06f065bc96396ddf752e88ca5e&amp;oe=6091456F&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17849562971021220</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17849562971021220\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18102022654184100\" data-date=\"1586851542\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DW7ugvvo/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=5ce7ac7c1580d891b30afeed802d1ff3&#038;oe=609071B5\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=5ce7ac7c1580d891b30afeed802d1ff3&amp;oe=609071B5&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DW7ugvvo\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DW7ugvvo\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=5ce7ac7c1580d891b30afeed802d1ff3&amp;oe=609071B5&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18102022654184100</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18102022654184100\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18139713682016553\" data-date=\"1586851531\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DVlLgwX7/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=d3TdEZK8wg0AX8_tMa7&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=e8b806f688c454ff3e2c718d4c6f0b35&#038;oe=60920A9F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=d3TdEZK8wg0AX8_tMa7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e8b806f688c454ff3e2c718d4c6f0b35&amp;oe=60920A9F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DVlLgwX7\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DVlLgwX7\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=d3TdEZK8wg0AX8_tMa7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e8b806f688c454ff3e2c718d4c6f0b35&amp;oe=60920A9F&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18139713682016553</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18139713682016553\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18101124766092345\" data-date=\"1586851521\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DUWmg2Cp/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=ZE997216zdEAX8gc4KW&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=1ad5a196c1b061917048ad733a9a01b4&#038;oe=6091C71E\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=ZE997216zdEAX8gc4KW&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=1ad5a196c1b061917048ad733a9a01b4&amp;oe=6091C71E&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DUWmg2Cp\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DUWmg2Cp\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=ZE997216zdEAX8gc4KW&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=1ad5a196c1b061917048ad733a9a01b4&amp;oe=6091C71E&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18101124766092345</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18101124766092345\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18126467887079409\" data-date=\"1586851507\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DSoaAiXH/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=EZhO2Al58P8AX_kNM4y&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=b9df531347c7317be0faa53d158414c3&#038;oe=6091BF98\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=EZhO2Al58P8AX_kNM4y&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=b9df531347c7317be0faa53d158414c3&amp;oe=6091BF98&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DSoaAiXH\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DSoaAiXH\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=EZhO2Al58P8AX_kNM4y&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=b9df531347c7317be0faa53d158414c3&amp;oe=6091BF98&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18126467887079409</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18126467887079409\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17884982272542098\" data-date=\"1586851348\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9C_SWA1xc/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=NE0owxVbQcMAX_gtAjX&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=24363c2ba1f8852245b0ca82072190a9&#038;oe=6090279A\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NE0owxVbQcMAX_gtAjX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=24363c2ba1f8852245b0ca82072190a9&amp;oe=6090279A&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9C_SWA1xc\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9C_SWA1xc\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NE0owxVbQcMAX_gtAjX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=24363c2ba1f8852245b0ca82072190a9&amp;oe=6090279A&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17884982272542098</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17884982272542098\">
</a>
</div>
</div> </div>
<div id=\"sbi_load\">
</div>
<span class=\"sbi_resized_image_data\" data-feed-id=\"sbi_peliculatheme1#12\" data-resized=\"{&quot;18138102073025935&quot;:{&quot;id&quot;:&quot;93372921_356332725321480_8400426497354550408_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17906466691441614&quot;:{&quot;id&quot;:&quot;93633716_2290256834604316_20547262508728217_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17898697330466487&quot;:{&quot;id&quot;:&quot;93761785_882467185534538_8390250542312319543_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18125079958074232&quot;:{&quot;id&quot;:&quot;92953080_544504953146159_3085776284173196940_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17870200891684227&quot;:{&quot;id&quot;:&quot;93073088_126589828961784_2711754838664723206_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17871653737665234&quot;:{&quot;id&quot;:&quot;93356452_233476107860764_3114943981963002995_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17849562971021220&quot;:{&quot;id&quot;:&quot;93336300_901096336971148_7200873235174889129_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18102022654184100&quot;:{&quot;id&quot;:&quot;92912065_602127913707429_2938335729196611886_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18139713682016553&quot;:{&quot;id&quot;:&quot;92851453_150864709694370_6229453079127953440_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18101124766092345&quot;:{&quot;id&quot;:&quot;92948509_657182158348998_6400887218958287180_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18126467887079409&quot;:{&quot;id&quot;:&quot;92912065_667301397419051_1608122363815943220_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17884982272542098&quot;:{&quot;id&quot;:&quot;92823966_216717206280503_4604162183304081575_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}}}\">
</span>
</div>
</div></div> </div>
</div>
</div>
<div class=\"rbt-toolbar\" data-theme=\"Pelicula\" data-featured=\"\" data-button-position=\"70%\" data-button-horizontal=\"right\" data-button-alt=\"no\"></div>

<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5T772QJ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>

<script type=\"text/javascript\">
var sbiajaxurl = \"../../wp-admin/admin-ajax.html\";
</script>
<script type=\"text/javascript\">
var c = document.body.className;
c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
document.body.className = c;
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {\"apiSettings\":{\"root\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-json\\/contact-form-7\\/v1\",\"namespace\":\"contact-form-7\\/v1\"},\"cached\":\"1\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/0fef6.js\"></script>
<script type='text/javascript' src='../../../export.qodethemes.com/_toolbar/assets/js/rbt-modulesc225.js?ver=5.4.1'></script>
<script src=\"../../wp-content/cache/minify/6d18f.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\",\"i18n_view_cart\":\"View cart\",\"cart_url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/cart\\/\",\"is_cart\":\"\",\"cart_redirect_after_add\":\"no\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/dc06c.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/63a69.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\",\"cart_hash_key\":\"wc_cart_hash_76474210e59261afa8ad9dbca9115745\",\"fragment_name\":\"wc_fragments_76474210e59261afa8ad9dbca9115745\",\"request_timeout\":\"5000\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/e58f1.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qodefGlobal = {\"vars\":{\"adminBarHeight\":0,\"qodefStickyHeaderScrollAmount\":800,\"topAreaHeight\":0,\"restUrl\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-json\\/\",\"restNonce\":\"f3284dd249\",\"paginationRestRoute\":\"pelicula\\/v1\\/get-posts\",\"headerHeight\":100,\"mobileHeaderHeight\":70}};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/a2757.js\"></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?key=AIzaSyA9R7XKAZB9BRsfn4l-uAg3RJQq5eA7OMY&amp;ver=5.4.1'></script>
<script src=\"../../wp-content/cache/minify/89d5d.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qodefMapsVariables = {\"global\":{\"mapStyle\":\"\",\"mapZoom\":12,\"mapScrollable\":false,\"mapDraggable\":true,\"streetViewControl\":true,\"zoomControl\":true,\"mapTypeControl\":true,\"fullscreenControl\":true},\"multiple\":[]};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/520c6.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var sb_instagram_js_options = {\"font_method\":\"svg\",\"resized_url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/sb-instagram-feed-images\\/\",\"placeholder\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/plugins\\/instagram-feed\\/img\\/placeholder.png\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/c7165.js\"></script>
<script type='text/javascript'>
var elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"downloadImage\":\"Download image\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"version\":\"2.9.8\",\"urls\":{\"assets\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"settings\":{\"page\":[],\"general\":{\"elementor_lightbox_enable_counter\":\"yes\",\"elementor_lightbox_enable_fullscreen\":\"yes\",\"elementor_lightbox_enable_zoom\":\"yes\",\"elementor_lightbox_enable_share\":\"yes\",\"elementor_lightbox_title_src\":\"title\",\"elementor_lightbox_description_src\":\"description\"},\"editorPreferences\":[]},\"post\":{\"id\":1289,\"title\":\"Hueco%20Mundo%20%E2%80%93%20Pelicula\",\"excerpt\":\"\",\"featuredImage\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/2020\\/03\\/port-4-img-2.jpg\"}};
</script>
<script src=\"../../wp-content/cache/minify/9f110.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qodefElementorGlobal = {\"vars\":{\"elementorSectionHandler\":[]}};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/92b64.js\"></script>
</body>

<!-- Mirrored from pelicula.qodeinteractive.com/portfolio-item/hueco-mundo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 14:44:52 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "theatre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  840 => 735,  838 => 734,  835 => 733,  823 => 729,  817 => 728,  814 => 727,  810 => 726,  808 => 725,  806 => 724,  804 => 723,  802 => 722,  800 => 721,  798 => 720,  796 => 719,  752 => 678,  742 => 671,  731 => 663,  701 => 636,  697 => 635,  674 => 615,  669 => 613,  655 => 602,  647 => 597,  257 => 210,  253 => 209,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\" prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#\">

<!-- Mirrored from pelicula.qodeinteractive.com/portfolio-item/hueco-mundo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 14:44:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=yes\">
<link rel=\"profile\" href=\"https://gmpg.org/xfn/11\">
<title>Hueco Mundo &#8211; Pelicula</title>
<script data-cfasync=\"false\" data-pagespeed-no-defer>//<![CDATA[
var gtm4wp_datalayer_name = \"dataLayer\";
var dataLayer = dataLayer || [];
//]]>
</script>
<link rel='dns-prefetch' href='http://export.qodethemes.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Feed\" href=\"../../feed/index.html\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Comments Feed\" href=\"../../comments/feed/index.html\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Pelicula &raquo; Hueco Mundo Comments Feed\" href=\"feed/index.html\" />
<script type=\"text/javascript\">
window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/12.0.0-1\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/12.0.0-1\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=5.4.1\"}};
/*! This file is auto-generated */
!function(e,a,t){var r,n,o,i,p=a.createElement(\"canvas\"),s=p.getContext&&p.getContext(\"2d\");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline=\"top\",s.font=\"600 32px Arial\",e){case\"flag\":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case\"emoji\":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement(\"script\");t.src=e,t.defer=t.type=\"text/javascript\",a.getElementsByTagName(\"head\")[0].appendChild(t)}for(i=Array(\"flag\",\"emoji\"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],\"flag\"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener(\"DOMContentLoaded\",n,!1),e.addEventListener(\"load\",n,!1)):(e.attachEvent(\"onload\",n),a.attachEvent(\"onreadystatechange\",function(){\"complete\"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type=\"text/css\">
img.wp-smiley,
img.emoji {
display: inline !important;
border: none !important;
box-shadow: none !important;
height: 1em !important;
width: 1em !important;
margin: 0 .07em !important;
vertical-align: -0.1em !important;
background: none !important;
padding: 0 !important;
}
</style>
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/91ce8.css\" media=\"all\" />
<link rel='stylesheet' id='material-icons-css' href='https://fonts.googleapis.com/icon?family=Material+Icons&amp;ver=5.4.1' type='text/css' media='all' />
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/52993.css\" media=\"all\" />
<link rel='stylesheet' id='rabbit_css-css' href='../../../export.qodethemes.com/_toolbar/assets/css/rbt-modulesc225.css?ver=5.4.1' type='text/css' media='all' />
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/edd85.css\" media=\"all\" />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/a2923.css\" media=\"all\" />
<link rel='stylesheet' id='pelicula-google-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C500%2C600%7CBebas+Neue%3A300%2C400%2C500%2C600&amp;subset=latin-ext&amp;ver=1.0.0' type='text/css' media='all' />
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/d5104.css\" media=\"all\" />
<style id='pelicula-style-inline-css' type='text/css'>
#qodef-page-outer { margin-top: -100px;}#qodef-page-footer-top-area { background-color: #000000;}#qodef-page-footer-bottom-area { background-color: #000000;border-top-color: rgba(255,255,255,0.1);border-top-width: 2px;}#qodef-page-inner { padding: 0 0 95px;}@media only screen and (max-width: 1024px) { #qodef-page-inner { padding: 0 0 95px;}}#qodef-page-spinner .qodef-m-inner { background-color: #000000;color: #ffffff;}.qodef-page-title { height: 250px;background-image: url(../../wp-content/uploads/2020/03/title-image-1.jpg);}.qodef-page-title .qodef-m-content { padding-top: 100px;}a, p a { letter-spacing: 0px;}.qodef-header--standard #qodef-page-header { background-color: rgba(255,255,255,0);}@media only screen and (max-width: 1024px){h1 { font-size: 62px;line-height: 62px;}h2 { font-size: 60px;line-height: 60px;}h4 { font-size: 27px;line-height: 27px;}}@media only screen and (max-width: 768px){h1 { font-size: 58px;line-height: 58px;}h5 { font-size: 22px;line-height: 23px;}}@media only screen and (max-width: 680px){h1 { font-size: 52px;line-height: 50px;}h2 { font-size: 45px;line-height: 43px;}h3 { font-size: 32px;line-height: 34px;}h4 { font-size: 30px;line-height: 28px;}}
</style>
<link rel=\"stylesheet\" href=\"../../wp-content/cache/minify/0d4ce.css\" media=\"all\" />
<script src=\"../../wp-content/cache/minify/a4d4c.js\"></script>
<link rel='https://api.w.org/' href='../../wp-json/index.html' />
<link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"../../xmlrpc0db0.html?rsd\" />
<link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"../../wp-includes/wlwmanifest.xml\" />
<link rel='prev' title='What Lies Beyond' href='../what-lies-beyond/index.html' />
<link rel='next' title='Hueco Mundo' href='../hueco-mundo-2/index.html' />
<meta name=\"generator\" content=\"WordPress 5.4.1\" />
<meta name=\"generator\" content=\"WooCommerce 4.1.0\" />
<link rel=\"canonical\" href=\"index.html\" />
<link rel='shortlink' href='../../indexd246.html?p=1289' />
<link rel=\"alternate\" type=\"application/json+oembed\" href=\"../../wp-json/oembed/1.0/embed539d.json?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fportfolio-item%2Fhueco-mundo%2F\" />
<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"../../wp-json/oembed/1.0/embed7e7a?url=https%3A%2F%2Fpelicula.qodeinteractive.com%2Fportfolio-item%2Fhueco-mundo%2F&amp;format=xml\" />


<meta property='og:site_name' content='Pelicula' />
<meta property='og:url' content='https://pelicula.qodeinteractive.com' />
<meta property='og:locale' content='en_US' />
<meta property='og:description' content='Pelicula is a modern theme specifically designed for movie, film, and all types of video production websites. ' />
<meta property='og:title' content='Pelicula - Video Production and Movie Theme' />
<meta property='og:type' content='website' />
<meta property='og:image' content='https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/1200x630.jpg' />
<meta property='og:image:width' content='1200' />
<meta property='og:image:height' content='630' />
<meta name='twitter:card' content='summary' />
<meta name='twitter:title' content='Pelicula - Video Production and Movie Theme' />
<meta name='twitter:image' content='https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/1200x630.jpg' />
<meta name='twitter:description' content='Pelicula is a modern theme specifically designed for movie, film, and all types of video production websites. ' />

<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<script data-cfasync=\"false\" data-pagespeed-no-defer>//<![CDATA[
var dataLayer_content = {\"pagePostType\":\"portfolio-item\",\"pagePostType2\":\"single-portfolio-item\",\"pagePostAuthor\":\"admin\"};
dataLayer.push( dataLayer_content );//]]>
</script>
<script data-cfasync=\"false\">//<![CDATA[
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5T772QJ');//]]>
</script>

<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<meta name=\"generator\" content=\"Powered by Slider Revolution 6.2.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.\" />
<link rel=\"icon\" href=\"../../wp-content/uploads/2020/05/cropped-favicon-pelicula-32x32.png\" sizes=\"32x32\" />
<link rel=\"icon\" href=\"../../wp-content/uploads/2020/05/cropped-favicon-pelicula-192x192.png\" sizes=\"192x192\" />
<link rel=\"apple-touch-icon\" href=\"../../wp-content/uploads/2020/05/cropped-favicon-pelicula-180x180.png\" />
<meta name=\"msapplication-TileImage\" content=\"https://pelicula.qodeinteractive.com/wp-content/uploads/2020/05/cropped-favicon-pelicula-270x270.png\" />
<script type=\"text/javascript\">function setREVStartSize(e){
//window.requestAnimationFrame(function() {
window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
try {
var pw = document.getElementById(e.c).parentNode.offsetWidth,
newh;
pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
e.mh = e.mh===undefined || e.mh==\"\" || e.mh===\"auto\" ? 0 : parseInt(e.mh,0);
if(e.layout===\"fullscreen\" || e.l===\"fullscreen\")
newh = Math.max(e.mh,window.RSIH);
else{
e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
e.gh = e.el===undefined || e.el===\"\" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

var nl = new Array(e.rl.length),
ix = 0,
sl;
e.tabw = e.tabhide>=pw ? 0 : e.tabw;
e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
e.tabh = e.tabhide>=pw ? 0 : e.tabh;
e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
sl = nl[0];
for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
}
if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement(\"style\"));
document.getElementById(e.c).height = newh+\"px\";
window.rs_init_css.innerHTML += \"#\"+e.c+\"_wrapper { height: \"+newh+\"px }\";
} catch(e){
console.log(\"Failure at Presize of Slider:\" + e)
}
//});
};</script>
<style type=\"text/css\" id=\"wp-custom-css\">
.page-id-1544 .qodef-inner-homes-slider .qodef-e-media-image {
transform: scale(1) !important;
}

.page-id-1893 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-1895 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-1903 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-1907 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-2370 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

.page-id-1652 #qodef-page-header .qodef-header-logo-link.qodef-textual-logo {
justify-content: flex-start;
}

@media only screen and (min-width: 1025px) and (max-width: 1440px) {
.page-id-1544 .elementor-1544 .elementor-element.elementor-element-5cb2047 > .elementor-widget-container {
padding: 12% 0 0 0;
}
}

@media only screen and (min-width: 769px) and (max-width: 1024px) {
.page-id-1544 .elementor-1544 .elementor-element.elementor-element-242eb3f > .elementor-widget-container,
.page-id-1544 .elementor-1544 .elementor-element.elementor-element-ea6686e > .elementor-widget-container {
padding: 13% 0 0 0;
}
}

.page-id-1544 .qodef-fullscreen-menu-opener {
display:none;
}\t\t</style>
</head>
<body class=\"portfolio-item-template-default single single-portfolio-item postid-1289 theme-pelicula qode-framework-1.1.2 woocommerce-no-js qodef-age-verification--opened qodef-back-to-top--enabled  qodef-content-grid-1300 qodef-header--light qodef-header--standard qodef-header-appearance--sticky qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--default qodef-layout--custom-full-width qodef-follow-portfolio-info pelicula-core-1.0 pelicula-1.0 qodef-header-standard--center qodef-search--fullscreen elementor-default elementor-kit-9 elementor-page elementor-page-1289\" itemscope itemtype=\"https://schema.org/WebPage\">
<div id=\"qodef-page-wrapper\" class=\"\">
<div class=\"qodef-content-lines-holder qodef-skin--dark\"><div class=\"qodef-content-line qodef--left\"></div><div class=\"qodef-content-line qodef--center\"></div><div class=\"qodef-content-line qodef--right\"></div></div><header id=\"qodef-page-header\">
<div id=\"qodef-page-header-inner\">
<a itemprop=\"url\" class=\"qodef-header-logo-link qodef-height--not-set qodef-textual-logo qodef--line-through\" href=\"../../index.html\" style=\";;\" rel=\"home\">
<span class=\"qodef-logo-text\">
<span class=\"qodef-logo-text-inner\">P</span>
</span>
</a> <nav class=\"qodef-header-navigation\" role=\"navigation\" aria-label=\"Top Menu\">
<ul id=\"menu-main-menu-1\" class=\"menu\"><li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-51 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-346\"><a href=\"../../index.html\"><span class=\"qodef-menu-item-text\">Main Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-580\"><a href=\"{{ path('theatre_index') }}\"><span class=\"qodef-menu-item-text\">Theatre</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-687\"><a href=\"{{ path('tactor_index') }}\"><span class=\"qodef-menu-item-text\">Actors</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-570\"><a href=\"../../video-production-studio/index.html\"><span class=\"qodef-menu-item-text\">Video Production Studio</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2651\"><a href=\"../../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-748\"><a href=\"../../interactive-title-showcase/index.html\"><span class=\"qodef-menu-item-text\">Interactive Title Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-806\"><a href=\"../../director-home/index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-822\"><a href=\"../../fullscreen-showcase/index.html\"><span class=\"qodef-menu-item-text\">Fullscreen Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-895\"><a href=\"../../film-gallery/index.html\"><span class=\"qodef-menu-item-text\">Film Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2211\"><a href=\"../../film-showcase/index.html\"><span class=\"qodef-menu-item-text\">Film Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-874\"><a href=\"../../video-home/index.html\"><span class=\"qodef-menu-item-text\">Video Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-905\"><a href=\"../../coming-soon/index.html\"><span class=\"qodef-menu-item-text\">Coming Soon</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-933\"><a href=\"../../interactive-links/index.html\"><span class=\"qodef-menu-item-text\">Interactive Links</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1798\"><a href=\"../../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-52 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Pages</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1104\"><a href=\"../../about-us/index.html\"><span class=\"qodef-menu-item-text\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1451\"><a href=\"../../what-we-do/index.html\"><span class=\"qodef-menu-item-text\">What We Do</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1242\"><a href=\"../../our-process/index.html\"><span class=\"qodef-menu-item-text\">Our Process</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1383\"><a href=\"../../our-team/index.html\"><span class=\"qodef-menu-item-text\">Our Team</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1149\"><a href=\"../../contact-us/index.html\"><span class=\"qodef-menu-item-text\">Contact Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1243\"><a href=\"../../faq-page/index.html\"><span class=\"qodef-menu-item-text\">FAQ Page</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1777\"><a href=\"../../404.html\"><span class=\"qodef-menu-item-text\">404 Error Page</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-55 qodef-menu-item--wide\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner qodef-content-grid\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1882 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1881\"><a href=\"../../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2777\"><a href=\"../../portfolio/gallery-list/index.html\"><span class=\"qodef-menu-item-text\">Gallery List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1880\"><a href=\"../../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2430\"><a href=\"../../portfolio/highlight-slider/index.html\"><span class=\"qodef-menu-item-text\">HighLight Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2429\"><a href=\"../../portfolio/overlay-slider/index.html\"><span class=\"qodef-menu-item-text\">Overlay Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2428\"><a href=\"../../portfolio/carousel/index.html\"><span class=\"qodef-menu-item-text\">Carousel</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1883 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1918\"><a href=\"../../portfolio/two-columns/index.html\"><span class=\"qodef-menu-item-text\">Two Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1917\"><a href=\"../../portfolio/three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1916\"><a href=\"../../portfolio/three-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Three Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1915\"><a href=\"../../portfolio/four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1914\"><a href=\"../../portfolio/four-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Four Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1913\"><a href=\"../../portfolio/five-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Five Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2379\"><a href=\"../../portfolio/six-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Six Columns Wide</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-362 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2461\"><a href=\"../the-eternal-void/index.html\"><span class=\"qodef-menu-item-text\">Big Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-369\"><a href=\"../see-the-light/index.html\"><span class=\"qodef-menu-item-text\">Small Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-368\"><a href=\"../finding-art/index.html\"><span class=\"qodef-menu-item-text\">Big Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-367\"><a href=\"../fresh-start/index.html\"><span class=\"qodef-menu-item-text\">Small Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-365\"><a href=\"../our-future/index.html\"><span class=\"qodef-menu-item-text\">Big Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-364\"><a href=\"../not-impossible/index.html\"><span class=\"qodef-menu-item-text\">Small Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-366\"><a href=\"../studio-lightening/index.html\"><span class=\"qodef-menu-item-text\">Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1271\"><a href=\"../what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item current-menu-item menu-item-1310\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Pelicula Light</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2131 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Hover Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2456\"><a href=\"../../portfolio/info-bottom-left/index.html\"><span class=\"qodef-menu-item-text\">Info Bottom Left</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2453\"><a href=\"../../portfolio/fade-in-hover/index.html\"><span class=\"qodef-menu-item-text\">Fade In Hover</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2454\"><a href=\"../../portfolio/info-follow/index.html\"><span class=\"qodef-menu-item-text\">Info Follow</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2455\"><a href=\"../../portfolio/direction-aware/index.html\"><span class=\"qodef-menu-item-text\">Direction Aware</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-236\"><a href=\"../../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-239\"><a href=\"../../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-238\"><a href=\"../../left-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Left Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-237\"><a href=\"../../no-sidebar/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-159\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-164\"><a href=\"../../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-161\"><a href=\"../../out-of-sight/index.html\"><span class=\"qodef-menu-item-text\">Gallery Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-163\"><a href=\"../../old-cameras/index.html\"><span class=\"qodef-menu-item-text\">Video Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2543\"><a href=\"../../new-soundtrack/index.html\"><span class=\"qodef-menu-item-text\">Audio Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-162\"><a href=\"../../blade-runner/index.html\"><span class=\"qodef-menu-item-text\">Quote Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-160\"><a href=\"../../bliss-bone/index.html\"><span class=\"qodef-menu-item-text\">Link Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2544\"><a href=\"../../sky-valley/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar Post</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-137\"><a href=\"../../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-139\"><a href=\"../../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Product Single</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-189\"><a href=\"../../three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1055\"><a href=\"../../four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1049\"><a href=\"../../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-138\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop Pages</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-134\"><a href=\"../../my-account/index.html\"><span class=\"qodef-menu-item-text\">My Account</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-136\"><a href=\"../../cart/index.html\"><span class=\"qodef-menu-item-text\">Cart</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-135\"><a href=\"../../checkout/index.html\"><span class=\"qodef-menu-item-text\">Checkout</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
</ul> </nav>
<div class=\"qodef-widget-holder\">
<div id=\"pelicula_core_side_area_opener-2\" class=\"widget widget_pelicula_core_side_area_opener qodef-header-widget-area-one\" data-area=\"header-widget-one\"><a href=\"javascript:void(0)\" class=\"qodef-opener-icon qodef-m qodef-source--predefined qodef-side-area-opener\" style=\"margin: 0 8px 0 0\">
<span class=\"qodef-m-icon qodef--open\">
<span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
</a></div> </div>
</div>
<div class=\"qodef-header-sticky\">
<div class=\"qodef-header-sticky-inner \">
<a itemprop=\"url\" class=\"qodef-header-logo-link qodef-height--not-set qodef-textual-logo qodef--line-through\" href=\"../../index.html\" style=\";;\" rel=\"home\">
<span class=\"qodef-logo-text\">
<span class=\"qodef-logo-text-inner\" style=\"color:#000000\">P</span>
</span>
</a> <nav class=\"qodef-header-navigation\" role=\"navigation\" aria-label=\"Top Menu\">
<ul id=\"menu-main-menu-2\" class=\"menu\"><li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-51 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-346\"><a href=\"../../index.html\"><span class=\"qodef-menu-item-text\">Main Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-580\"><a href=\"../../film-festival/index.html\"><span class=\"qodef-menu-item-text\">Film Festival</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-687\"><a href=\"../../parallax-showcase/index.html\"><span class=\"qodef-menu-item-text\">Parallax Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-570\"><a href=\"../../video-production-studio/index.html\"><span class=\"qodef-menu-item-text\">Video Production Studio</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2651\"><a href=\"../../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-748\"><a href=\"../../interactive-title-showcase/index.html\"><span class=\"qodef-menu-item-text\">Interactive Title Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-806\"><a href=\"../../director-home/index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-822\"><a href=\"../../fullscreen-showcase/index.html\"><span class=\"qodef-menu-item-text\">Fullscreen Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-895\"><a href=\"../../film-gallery/index.html\"><span class=\"qodef-menu-item-text\">Film Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2211\"><a href=\"../../film-showcase/index.html\"><span class=\"qodef-menu-item-text\">Film Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-874\"><a href=\"../../video-home/index.html\"><span class=\"qodef-menu-item-text\">Video Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-905\"><a href=\"../../coming-soon/index.html\"><span class=\"qodef-menu-item-text\">Coming Soon</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-933\"><a href=\"../../interactive-links/index.html\"><span class=\"qodef-menu-item-text\">Interactive Links</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1798\"><a href=\"../../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-52 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Pages</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1104\"><a href=\"../../about-us/index.html\"><span class=\"qodef-menu-item-text\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1451\"><a href=\"../../what-we-do/index.html\"><span class=\"qodef-menu-item-text\">What We Do</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1242\"><a href=\"../../our-process/index.html\"><span class=\"qodef-menu-item-text\">Our Process</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1383\"><a href=\"../../our-team/index.html\"><span class=\"qodef-menu-item-text\">Our Team</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1149\"><a href=\"../../contact-us/index.html\"><span class=\"qodef-menu-item-text\">Contact Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1243\"><a href=\"../../faq-page/index.html\"><span class=\"qodef-menu-item-text\">FAQ Page</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1777\"><a href=\"../../404.html\"><span class=\"qodef-menu-item-text\">404 Error Page</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-55 qodef-menu-item--wide\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner qodef-content-grid\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1882 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1881\"><a href=\"../../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2777\"><a href=\"../../portfolio/gallery-list/index.html\"><span class=\"qodef-menu-item-text\">Gallery List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1880\"><a href=\"../../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2430\"><a href=\"../../portfolio/highlight-slider/index.html\"><span class=\"qodef-menu-item-text\">HighLight Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2429\"><a href=\"../../portfolio/overlay-slider/index.html\"><span class=\"qodef-menu-item-text\">Overlay Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2428\"><a href=\"../../portfolio/carousel/index.html\"><span class=\"qodef-menu-item-text\">Carousel</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1883 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1918\"><a href=\"../../portfolio/two-columns/index.html\"><span class=\"qodef-menu-item-text\">Two Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1917\"><a href=\"../../portfolio/three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1916\"><a href=\"../../portfolio/three-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Three Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1915\"><a href=\"../../portfolio/four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1914\"><a href=\"../../portfolio/four-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Four Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1913\"><a href=\"../../portfolio/five-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Five Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2379\"><a href=\"../../portfolio/six-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Six Columns Wide</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-362 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2461\"><a href=\"../the-eternal-void/index.html\"><span class=\"qodef-menu-item-text\">Big Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-369\"><a href=\"../see-the-light/index.html\"><span class=\"qodef-menu-item-text\">Small Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-368\"><a href=\"../finding-art/index.html\"><span class=\"qodef-menu-item-text\">Big Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-367\"><a href=\"../fresh-start/index.html\"><span class=\"qodef-menu-item-text\">Small Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-365\"><a href=\"../our-future/index.html\"><span class=\"qodef-menu-item-text\">Big Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-364\"><a href=\"../not-impossible/index.html\"><span class=\"qodef-menu-item-text\">Small Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-366\"><a href=\"../studio-lightening/index.html\"><span class=\"qodef-menu-item-text\">Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1271\"><a href=\"../what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item current-menu-item menu-item-1310\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Pelicula Light</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2131 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Hover Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2456\"><a href=\"../../portfolio/info-bottom-left/index.html\"><span class=\"qodef-menu-item-text\">Info Bottom Left</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2453\"><a href=\"../../portfolio/fade-in-hover/index.html\"><span class=\"qodef-menu-item-text\">Fade In Hover</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2454\"><a href=\"../../portfolio/info-follow/index.html\"><span class=\"qodef-menu-item-text\">Info Follow</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2455\"><a href=\"../../portfolio/direction-aware/index.html\"><span class=\"qodef-menu-item-text\">Direction Aware</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-236\"><a href=\"../../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-239\"><a href=\"../../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-238\"><a href=\"../../left-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Left Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-237\"><a href=\"../../no-sidebar/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-159\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-164\"><a href=\"../../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-161\"><a href=\"../../out-of-sight/index.html\"><span class=\"qodef-menu-item-text\">Gallery Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-163\"><a href=\"../../old-cameras/index.html\"><span class=\"qodef-menu-item-text\">Video Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2543\"><a href=\"../../new-soundtrack/index.html\"><span class=\"qodef-menu-item-text\">Audio Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-162\"><a href=\"../../blade-runner/index.html\"><span class=\"qodef-menu-item-text\">Quote Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-160\"><a href=\"../../bliss-bone/index.html\"><span class=\"qodef-menu-item-text\">Link Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2544\"><a href=\"../../sky-valley/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar Post</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-137\"><a href=\"../../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-139\"><a href=\"../../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Product Single</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-189\"><a href=\"../../three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1055\"><a href=\"../../four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1049\"><a href=\"../../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-138\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop Pages</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-134\"><a href=\"../../my-account/index.html\"><span class=\"qodef-menu-item-text\">My Account</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-136\"><a href=\"../../cart/index.html\"><span class=\"qodef-menu-item-text\">Cart</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-135\"><a href=\"../../checkout/index.html\"><span class=\"qodef-menu-item-text\">Checkout</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
</ul> </nav>
<div class=\"qodef-widget-holder\">
<div id=\"pelicula_core_side_area_opener-4\" class=\"widget widget_pelicula_core_side_area_opener qodef-sticky-right\"><a href=\"javascript:void(0)\" class=\"qodef-opener-icon qodef-m qodef-source--predefined qodef-side-area-opener\" style=\"color: #111111;;margin: 0 0 0 28px\">
<span class=\"qodef-m-icon qodef--open\">
<span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
</a></div> </div>
</div>
</div></header><header id=\"qodef-page-mobile-header\">
<div id=\"qodef-page-mobile-header-inner\">
<a itemprop=\"url\" class=\"qodef-mobile-header-logo-link qodef-textual-logo qodef--line-through\" href=\"../../index.html\" style=\"height:50px;\" rel=\"home\">
<span class=\"qodef-logo-text\">
<span class=\"qodef-logo-text-inner\">P</span>
</span>
<img width=\"52\" height=\"91\" src=\"../../wp-content/uploads/2020/03/logo-light.png\" class=\"qodef-header-logo-image qodef--dark\" alt=\"logo dark\" /><img width=\"52\" height=\"91\" src=\"../../wp-content/uploads/2020/03/logo-light.png\" class=\"qodef-header-logo-image qodef--light\" alt=\"logo light\" /></a><a class=\"qodef-mobile-header-opener\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"39px\" height=\"11px\">
<path fill-rule=\"evenodd\" fill=\"rgb(17, 17, 17)\" d=\"M8.000,3.000 L8.000,-0.000 L39.000,-0.000 L39.000,3.000 L8.000,3.000 ZM31.000,11.000 L-0.000,11.000 L-0.000,8.000 L31.000,8.000 L31.000,11.000 Z\" />
</svg></a> <nav class=\"qodef-mobile-header-navigation\" role=\"navigation\" aria-label=\"Mobile Menu\">
<ul id=\"menu-main-menu-4\" class=\"qodef-content-grid\"><li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-51 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Home</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-346\"><a href=\"../../index.html\"><span class=\"qodef-menu-item-text\">Main Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-580\"><a href=\"../../film-festival/index.html\"><span class=\"qodef-menu-item-text\">Film Festival</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-687\"><a href=\"../../parallax-showcase/index.html\"><span class=\"qodef-menu-item-text\">Parallax Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-570\"><a href=\"../../video-production-studio/index.html\"><span class=\"qodef-menu-item-text\">Video Production Studio</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2651\"><a href=\"../../carousel-showcase/index.html\"><span class=\"qodef-menu-item-text\">Carousel Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-748\"><a href=\"../../interactive-title-showcase/index.html\"><span class=\"qodef-menu-item-text\">Interactive Title Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-806\"><a href=\"../../director-home/index.html\"><span class=\"qodef-menu-item-text\">Director Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-822\"><a href=\"../../fullscreen-showcase/index.html\"><span class=\"qodef-menu-item-text\">Fullscreen Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-895\"><a href=\"../../film-gallery/index.html\"><span class=\"qodef-menu-item-text\">Film Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2211\"><a href=\"../../film-showcase/index.html\"><span class=\"qodef-menu-item-text\">Film Showcase</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-874\"><a href=\"../../video-home/index.html\"><span class=\"qodef-menu-item-text\">Video Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-905\"><a href=\"../../coming-soon/index.html\"><span class=\"qodef-menu-item-text\">Coming Soon</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-933\"><a href=\"../../interactive-links/index.html\"><span class=\"qodef-menu-item-text\">Interactive Links</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1798\"><a href=\"../../landing/index.html\"><span class=\"qodef-menu-item-text\">Landing</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-52 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Pages</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1104\"><a href=\"../../about-us/index.html\"><span class=\"qodef-menu-item-text\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1451\"><a href=\"../../what-we-do/index.html\"><span class=\"qodef-menu-item-text\">What We Do</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1242\"><a href=\"../../our-process/index.html\"><span class=\"qodef-menu-item-text\">Our Process</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1383\"><a href=\"../../our-team/index.html\"><span class=\"qodef-menu-item-text\">Our Team</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1149\"><a href=\"../../contact-us/index.html\"><span class=\"qodef-menu-item-text\">Contact Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1243\"><a href=\"../../faq-page/index.html\"><span class=\"qodef-menu-item-text\">FAQ Page</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1777\"><a href=\"../../404.html\"><span class=\"qodef-menu-item-text\">404 Error Page</span></a></li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-55 qodef-menu-item--wide\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Portfolio</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner qodef-content-grid\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1882 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1881\"><a href=\"../../portfolio/standard-list/index.html\"><span class=\"qodef-menu-item-text\">Standard List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2777\"><a href=\"../../portfolio/gallery-list/index.html\"><span class=\"qodef-menu-item-text\">Gallery List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1880\"><a href=\"../../portfolio/masonry/index.html\"><span class=\"qodef-menu-item-text\">Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2430\"><a href=\"../../portfolio/highlight-slider/index.html\"><span class=\"qodef-menu-item-text\">HighLight Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2429\"><a href=\"../../portfolio/overlay-slider/index.html\"><span class=\"qodef-menu-item-text\">Overlay Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2428\"><a href=\"../../portfolio/carousel/index.html\"><span class=\"qodef-menu-item-text\">Carousel</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1883 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Portfolio Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1918\"><a href=\"../../portfolio/two-columns/index.html\"><span class=\"qodef-menu-item-text\">Two Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1917\"><a href=\"../../portfolio/three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1916\"><a href=\"../../portfolio/three-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Three Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1915\"><a href=\"../../portfolio/four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1914\"><a href=\"../../portfolio/four-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Four Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1913\"><a href=\"../../portfolio/five-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Five Columns Wide</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2379\"><a href=\"../../portfolio/six-columns-wide/index.html\"><span class=\"qodef-menu-item-text\">Six Columns Wide</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-362 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-2461\"><a href=\"../the-eternal-void/index.html\"><span class=\"qodef-menu-item-text\">Big Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-369\"><a href=\"../see-the-light/index.html\"><span class=\"qodef-menu-item-text\">Small Images</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-368\"><a href=\"../finding-art/index.html\"><span class=\"qodef-menu-item-text\">Big Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-367\"><a href=\"../fresh-start/index.html\"><span class=\"qodef-menu-item-text\">Small Gallery</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-365\"><a href=\"../our-future/index.html\"><span class=\"qodef-menu-item-text\">Big Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-364\"><a href=\"../not-impossible/index.html\"><span class=\"qodef-menu-item-text\">Small Masonry</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-366\"><a href=\"../studio-lightening/index.html\"><span class=\"qodef-menu-item-text\">Slider</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item menu-item-1271\"><a href=\"../what-lies-beyond/index.html\"><span class=\"qodef-menu-item-text\">Pelicula Dark</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-portfolio-item current-menu-item menu-item-1310\"><a href=\"index.html\"><span class=\"qodef-menu-item-text\">Pelicula Light</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2131 qodef--hide-link\"><a href=\"#\" onclick=\"JavaScript: return false;\"><span class=\"qodef-menu-item-text\">Hover Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2456\"><a href=\"../../portfolio/info-bottom-left/index.html\"><span class=\"qodef-menu-item-text\">Info Bottom Left</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2453\"><a href=\"../../portfolio/fade-in-hover/index.html\"><span class=\"qodef-menu-item-text\">Fade In Hover</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2454\"><a href=\"../../portfolio/info-follow/index.html\"><span class=\"qodef-menu-item-text\">Info Follow</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2455\"><a href=\"../../portfolio/direction-aware/index.html\"><span class=\"qodef-menu-item-text\">Direction Aware</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Blog</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-236\"><a href=\"../../metro-blog/index.html\"><span class=\"qodef-menu-item-text\">Metro Blog</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-239\"><a href=\"../../right-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Right Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-238\"><a href=\"../../left-sidebar/index.html\"><span class=\"qodef-menu-item-text\">Left Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-237\"><a href=\"../../no-sidebar/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-159\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Post Types</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-164\"><a href=\"../../welcome-to-sky-valley/index.html\"><span class=\"qodef-menu-item-text\">Standard Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-161\"><a href=\"../../out-of-sight/index.html\"><span class=\"qodef-menu-item-text\">Gallery Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-163\"><a href=\"../../old-cameras/index.html\"><span class=\"qodef-menu-item-text\">Video Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2543\"><a href=\"../../new-soundtrack/index.html\"><span class=\"qodef-menu-item-text\">Audio Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-162\"><a href=\"../../blade-runner/index.html\"><span class=\"qodef-menu-item-text\">Quote Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-160\"><a href=\"../../bliss-bone/index.html\"><span class=\"qodef-menu-item-text\">Link Post</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-2544\"><a href=\"../../sky-valley/index.html\"><span class=\"qodef-menu-item-text\">No Sidebar Post</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53 qodef-menu-item--narrow\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop</span></a>
<div class=\"qodef-drop-down-second\"><div class=\"qodef-drop-down-second-inner\"><ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-137\"><a href=\"../../shop/index.html\"><span class=\"qodef-menu-item-text\">Product List</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-139\"><a href=\"../../product/huecomundo/index.html\"><span class=\"qodef-menu-item-text\">Product Single</span></a></li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-140\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Layouts</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-189\"><a href=\"../../three-columns/index.html\"><span class=\"qodef-menu-item-text\">Three Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1055\"><a href=\"../../four-columns/index.html\"><span class=\"qodef-menu-item-text\">Four Columns</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1049\"><a href=\"../../full-width/index.html\"><span class=\"qodef-menu-item-text\">Full Width</span></a></li>
</ul>
</li>
<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-138\"><a href=\"#\"><span class=\"qodef-menu-item-text\">Shop Pages</span></a>
<ul class=\"sub-menu\">
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-134\"><a href=\"../../my-account/index.html\"><span class=\"qodef-menu-item-text\">My Account</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-136\"><a href=\"../../cart/index.html\"><span class=\"qodef-menu-item-text\">Cart</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-135\"><a href=\"../../checkout/index.html\"><span class=\"qodef-menu-item-text\">Checkout</span></a></li>
</ul>
</li>
</ul></div></div>
</li>
</ul> </nav>
</div>

</header> <div id=\"qodef-page-outer\">
<div id=\"qodef-page-inner\" class=\"qodef-content-full-width\"><main id=\"qodef-page-content\" class=\"qodef-grid qodef-layout--template \">
<div class=\"qodef-grid-inner clear\">
<div class=\"qodef-grid-item qodef-page-content-section qodef-col--12\">
<div class=\"qodef-portfolio qodef-m qodef-portfolio-single qodef-layout--custom-full-width\">
<article class=\"qodef-portfolio-single-item qodef-e post-1289 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-camera\">
<div class=\"qodef-e-inner\">
<div class=\"qodef-e-content\">
<div class=\"qodef-grid-inner\">
<div class=\"qodef-grid-item\">
<div class=\"qodef-e qodef-portfolio-content\">
<div data-elementor-type=\"wp-post\" data-elementor-id=\"1289\" class=\"elementor elementor-1289\" data-elementor-settings=\"[]\">
<div class=\"elementor-inner\">
<div class=\"elementor-section-wrap\">
<style>
#eae {
background-image: url(../../wp-content{{ theatre.poster }});
background-size: 100% 1200px;
}
</style>
<section id=\"eae\" class=\"elementor-element elementor-element-9abf6e0 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"9abf6e0\" data-element_type=\"section\" {
background-image: url(../../wp-content{{ theatre.poster }});
}>
<div class=\"elementor-container elementor-column-gap-default\">
<div class=\"elementor-row\">
<div class=\"elementor-element elementor-element-a463735 elementor-column elementor-col-100 elementor-top-column\" data-id=\"a463735\" data-element_type=\"column\">
<div class=\"elementor-column-wrap  elementor-element-populated\">
<div class=\"elementor-widget-wrap\">
<div class=\"elementor-element elementor-element-7afb144 elementor-widget elementor-widget-pelicula_core_section_title\" data-id=\"7afb144\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_section_title.default\">
<div class=\"elementor-widget-container\">
<div style=\"position: relative; left: 158px; top: 400px;\" class=\"qodef-shortcode qodef-m  qodef-section-title qodef-alignment--center \" data-holder-options=\"{&quot;line-breaks&quot;:&quot;&quot;}\">
<h6  style=\"color: #A6A6A6\">
{{ theatre.genre }}\t</h6>
<h2  style=\"color: #FFFFFF\">
{{ theatre.name }} </h2>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"elementor-element elementor-element-fba7e10 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"fba7e10\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
<div class=\"elementor-container elementor-column-gap-no\">
<div class=\"elementor-row\">
<div class=\"elementor-element elementor-element-c560a2e elementor-column elementor-col-100 elementor-top-column\" data-id=\"c560a2e\" data-element_type=\"column\">
<div class=\"elementor-column-wrap  elementor-element-populated\">
<div class=\"elementor-widget-wrap\">
<div class=\"elementor-element elementor-element-4409897 elementor-widget elementor-widget-pelicula_core_video_button\" data-id=\"4409897\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_video_button.default\">
<div class=\"elementor-widget-container\">
<div class=\"qodef-shortcode qodef-m  qodef-video-button qodef--has-img\">
<div class=\"qodef-m-image\">
<img width=\"600\" height=\"200\" src=\"../../wp-content{{ theatre.image }}\" class=\"attachment-full size-full\" alt=\"a\" </div>
<a itemprop=\"url\" class=\"qodef-m-play qodef-magnific-popup qodef-popup-item\" href=\"{{ theatre.trailer }}\" data-type=\"iframe\">
<span class=\"qodef-m-play-inner\">
<span class=\"qodef-icon-ionicons ion-md-play\"></span> </span>
</a>
</div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"elementor-element elementor-element-5a82f44 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"5a82f44\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
<div class=\"elementor-container elementor-column-gap-no\">
<div class=\"elementor-row\">
<div class=\"elementor-element elementor-element-de6597d elementor-column elementor-col-16 elementor-top-column\" data-id=\"de6597d\" data-element_type=\"column\">
<div class=\"elementor-column-wrap\">
<div class=\"elementor-widget-wrap\">
</div>
</div>
</div>
<div class=\"elementor-element elementor-element-881e5a1 elementor-column elementor-col-66 elementor-top-column\" data-id=\"881e5a1\" data-element_type=\"column\">
<div class=\"elementor-column-wrap  elementor-element-populated\">
<div class=\"elementor-widget-wrap\">

<div class=\"elementor-element elementor-element-ad73930 elementor-widget elementor-widget-text-editor\" data-id=\"ad73930\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
<div class=\"elementor-widget-container\">
<div class=\"elementor-text-editor elementor-clearfix\"><p style=\"margin: 0px; line-height: 26px;\">{{ theatre.description }}</p></div>
</div>
</div>
<div class=\"elementor-element elementor-element-ae216c9 elementor-widget elementor-widget-pelicula_core_portfolio_info\" data-id=\"ae216c9\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_portfolio_info.default\">
<div class=\"elementor-widget-container\">
<div class=\"qodef-shortcode qodef-m  qodef-portfolio-info \">
<div class=\"qodef-e qodef-info--date\">
<h5 class=\"qodef-e-title\">Date: </h5>
<p itemprop=\"dateCreated\" class=\"entry-date updated\">{{ theatre.rdate ? theatre.rdate|date('Y/M/d') : '' }}</p>
<meta itemprop=\"interactionCount\" content=\"UserComments: 0\" />
</div>

<div class=\"qodef-e qodef-info--info-items\">
<h5 class=\"qodef-e-title\">Genre: </h5>
<span class=\"qodef-e-info-item\">
{{ theatre.genre }} </span>
</div>
<div class=\"qodef-e qodef-info--info-items\">
<h5 class=\"qodef-e-title\"> </h5>
</div>
<div class=\"qodef-e qodef-info--info-items\">
<h5 class=\"qodef-e-title\"> </h5>
</div>
<div class=\"qodef-e qodef-info--info-items\">
<h5 class=\"qodef-e-title\">Starring: </h5>
</div>
</div> </div>
</div>
</div>
</div>
</div>
<div class=\"elementor-element elementor-element-fbce935 elementor-column elementor-col-16 elementor-top-column\" data-id=\"fbce935\" data-element_type=\"column\">
<div class=\"elementor-column-wrap\">
<div class=\"elementor-widget-wrap\">
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"elementor-element elementor-element-061da5e elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"061da5e\" data-element_type=\"section\">
<div class=\"elementor-container elementor-column-gap-no\">
<div class=\"elementor-row\">
<div class=\"elementor-element elementor-element-9b8c54b elementor-column elementor-col-100 elementor-top-column\" data-id=\"9b8c54b\" data-element_type=\"column\">
<div class=\"elementor-column-wrap  elementor-element-populated\">
<div class=\"elementor-widget-wrap\">
<div class=\"elementor-element elementor-element-54c4859 elementor-widget elementor-widget-pelicula_core_image_gallery\" data-id=\"54c4859\" data-element_type=\"widget\" data-widget_type=\"pelicula_core_image_gallery.default\">
<div class=\"elementor-widget-container\">
<div class=\"qodef-shortcode qodef-m  qodef-image-gallery qodef-magnific-popup qodef-popup-gallery qodef-grid qodef-layout--columns   qodef-gutter--small qodef-col-num--3  qodef-responsive--predefined\">
<div class=\"row\">
<style>
.HEEEE{
height:270px;
}

</style>
{% do form.description.setRendered %}
{% do form.trailer.setRendered %}
{% do form.name.setRendered %}
{% do form.genre.setRendered %}
{% do form.image.setRendered %}
{% do form.poster.setRendered %}
{% do form.rdate.setRendered %}
{% for choices in form.vars.data.theatreActors %}
<div id=\"tactortas\"  class=\"HEEEE col-2 mb-2\">
<a href=\"../../tactor/{{ choices.id }}\" title=\"{{ choices.name }}\">
<img style=\"height: 100%;width: 100%;\" src=\"../../wp-content/{{ choices.image }}\"   alt=\"{{ choices.name }}\" />
</a>
</div>
{% endfor %}

{% do form.theatreActors.setRendered %}



</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div> </div>
</div>
</div>
</div>
</article>
<div id=\"qodef-single-portfolio-navigation\" class=\"qodef-m\">
<div class=\"qodef-m-inner qodef-content-grid\">
<a itemprop=\"url\" class=\"qodef-m-nav qodef--prev\" href=\"../what-lies-beyond/index.html\">
<div class=\"qodef-post-image\">
<img src=\"../../wp-content/uploads/2020/03/port-4-img-1-144x80.jpg\" alt=\"w\" width=\"144\" height=\"80\" /> </div>
<div class=\"qodef-title-label\">
<h4 itemprop=\"url\" class=\"qodef-e-title-link\" title=\"What Lies Beyond\">
What Lies Beyond </h4>
<span class=\"qodef-m-nav-label\">Previous</span> </div>
</a>
<a itemprop=\"url\" class=\"qodef-m-nav qodef--back-link\" href=\"../../index.html\">
<span class=\"qodef-icon-elegant-icons icon_grid-2x2 qodef-m-nav-icon\"></span> </a>
<a itemprop=\"url\" class=\"qodef-m-nav qodef--next\" href=\"../hueco-mundo-2/index.html\">
<div class=\"qodef-post-image\">
<img src=\"../../wp-content/uploads/2020/04/port-gallery-featured-img-1-144x80.jpg\" alt=\"s\" width=\"144\" height=\"80\" /> </div>
<div class=\"qodef-title-label\">
<h4 itemprop=\"url\" class=\"qodef-e-title-link\" title=\"Hueco Mundo\">
Hueco Mundo </h4>
<span class=\"qodef-m-nav-label\">Next</span> </div>
</a>
</div>
</div>
</div>
</div> </div>
</main>
</div>
</div>
<footer id=\"qodef-page-footer\">
<div id=\"qodef-page-footer-top-area\">
<div id=\"qodef-page-footer-top-area-inner\" class=\"qodef-content-full-width\">
<div class=\"qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--2 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1\">
<div class=\"qodef-grid-inner clear\">
<div class=\"qodef-grid-item\">
<div id=\"pelicula_core_separator-14\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_1\"><div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
</div></div><div id=\"media_image-4\" class=\"widget widget_media_image\" data-area=\"footer_top_area_column_1\"><a href=\"../../index.html\"><img width=\"129\" height=\"32\" src=\"../../wp-content/uploads/2020/03/footer-logo.png\" class=\"image wp-image-119  attachment-full size-full\" alt=\"x\" style=\"max-width: 100%; height: auto;\" /></a></div><div id=\"pelicula_core_separator-10\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_1\"><div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
</div></div> </div>
<div class=\"qodef-grid-item\">
<div id=\"pelicula_core_separator-13\" class=\"widget widget_pelicula_core_separator\" data-area=\"footer_top_area_column_2\"><div class=\"qodef-shortcode qodef-m  qodef-separator clear \">
<div class=\"qodef-m-line\" style=\"width: 1px;border-bottom-width: 1px;margin-top: 15px;margin-bottom: 0px\"></div>
</div></div><div id=\"nav_menu-2\" class=\"widget widget_nav_menu\" data-area=\"footer_top_area_column_2\"><div class=\"menu-footer-menu-container\"><ul id=\"menu-footer-menu\" class=\"menu\"><li id=\"menu-item-2279\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2279\"><a href=\"../../index.html\">Home</a></li>
<li id=\"menu-item-2280\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2280\"><a href=\"../../about-us/index.html\">About Us</a></li>
<li id=\"menu-item-2281\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2281\"><a href=\"../../shop/index.html\">Shop</a></li>
<li id=\"menu-item-2282\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2282\"><a href=\"../../right-sidebar/index.html\">Blog</a></li>
<li id=\"menu-item-2283\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2283\"><a href=\"../../contact-us/index.html\">Contact Us</a></li>
</ul></div></div> </div>
</div>
</div>
</div>
</div>
<div id=\"qodef-page-footer-bottom-area\">
<div id=\"qodef-page-footer-bottom-area-inner\" class=\"qodef-content-full-width\">
<div class=\"qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--1\">
<div class=\"qodef-grid-inner clear\">
<div class=\"qodef-grid-item\">
<div id=\"text-3\" class=\"widget widget_text\" data-area=\"footer_bottom_area_column_1\"> <div class=\"textwidget\"><p style=\"text-align: center;\"><a href=\"https://qodeinteractive.com/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"color: #4d4d4d;\">© <span style=\"color: #a6a6a6;\">QodeInteractive</span> 2020</a></p>
</div>
</div> </div>
</div>
</div>
</div>
</div>
</footer><a id=\"qodef-back-to-top\" href=\"#\">
<span class=\"qodef-back-to-top-icon\">
<span class=\"qodef-icon-elegant-icons arrow_carrot-up\"></span> </span>
<span class=\"qodef-btn-bg-holder \"></span>
</a> <div id=\"qodef-side-area\">
<a href=\"javascript:void(0)\" id=\"qodef-side-area-close\" class=\"qodef-opener-icon qodef-m qodef-source--predefined\">
<span class=\"qodef-m-icon qodef--open\">
<span class=\"qodef-m-lines\"><span class=\"qodef-m-line qodef--1\"></span><span class=\"qodef-m-line qodef--2\"></span></span> </span>
</a> <div id=\"qodef-side-area-inner\">
<div id=\"pelicula_core_custom_font-2\" class=\"widget widget_pelicula_core_custom_font\" data-area=\"side-area\"><p class=\"qodef-shortcode qodef-m qodef-side-area-custom-font qodef-custom-font qodef-custom-font-7522 qodef-layout--simple\" style=\"color: #ffffff;font-family: Bebas Neue;font-size: 80px;line-height: 52px;letter-spacing: 0px\">Pelicula</p></div><div id=\"text-2\" class=\"widget widget_text\" data-area=\"side-area\"> <div class=\"textwidget\"><h6 style=\"color: #6d6d6d;\">A modern theme for the theatre industry &#038; video production</h6>
</div>
</div><div id=\"pelicula_core_instagram_list-3\" class=\"widget widget_pelicula_core_instagram_list\" data-area=\"side-area\"><div class=\"qodef-shortcode qodef-m  qodef-instagram-list qodef-gutter--tiny qodef-col-num--3\">
<div id=\"sb_instagram\" class=\"sbi sbi_col_3  sbi_width_resp\" style=\"padding-bottom: 10px;width: 100%;\" data-feedid=\"sbi_peliculatheme1#12\" data-res=\"auto\" data-cols=\"3\" data-num=\"12\" data-shortcode-atts=\"{&quot;0&quot;:&quot;12&quot;,&quot;1&quot;:&quot;3&quot;,&quot;2&quot;:&quot;5&quot;,&quot;3&quot;:&quot;px&quot;,&quot;4&quot;:&quot;auto&quot;,&quot;num&quot;:&quot;12&quot;,&quot;cols&quot;:&quot;3&quot;,&quot;imagepadding&quot;:&quot;5&quot;,&quot;imagepaddingunit&quot;:&quot;px&quot;,&quot;showheader&quot;:&quot;&quot;,&quot;showfollow&quot;:&quot;&quot;,&quot;showbutton&quot;:&quot;&quot;,&quot;imageres&quot;:&quot;auto&quot;}\">
<div id=\"sbi_images\" style=\"padding: 5px;\">
<div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18138102073025935\" data-date=\"1586851637\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DiiRANSN/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=3JdnuYJlWcMAX9fIeuN&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=e918229eac509b0aaf5feb4ed85a7a02&#038;oe=6091FF39\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3JdnuYJlWcMAX9fIeuN&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e918229eac509b0aaf5feb4ed85a7a02&amp;oe=6091FF39&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DiiRANSN\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DiiRANSN\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93372921_356332725321480_8400426497354550408_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3JdnuYJlWcMAX9fIeuN&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e918229eac509b0aaf5feb4ed85a7a02&amp;oe=6091FF39&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18138102073025935</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18138102073025935\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17906466691441614\" data-date=\"1586851627\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DhTOgYuI/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=5sVtNDsD4SkAX9IOb62&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=9166f0d7ea15d6192d381179d5b63fef&#038;oe=6093B83F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5sVtNDsD4SkAX9IOb62&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9166f0d7ea15d6192d381179d5b63fef&amp;oe=6093B83F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DhTOgYuI\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DhTOgYuI\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93633716_2290256834604316_20547262508728217_n.jpg?_nc_cat=103&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=5sVtNDsD4SkAX9IOb62&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9166f0d7ea15d6192d381179d5b63fef&amp;oe=6093B83F&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17906466691441614</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17906466691441614\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17898697330466487\" data-date=\"1586851616\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Df-rg6e5/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=3P6jk0nNZP0AX8SwvLX&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=69dd6460806d0f2b2f475df717de614b&#038;oe=60925FCE\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3P6jk0nNZP0AX8SwvLX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=69dd6460806d0f2b2f475df717de614b&amp;oe=60925FCE&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Df-rg6e5\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Df-rg6e5\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93761785_882467185534538_8390250542312319543_n.jpg?_nc_cat=104&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=3P6jk0nNZP0AX8SwvLX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=69dd6460806d0f2b2f475df717de614b&amp;oe=60925FCE&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17898697330466487</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17898697330466487\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18125079958074232\" data-date=\"1586851604\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Dei1Amvy/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=tK3bzNiQcYMAX-JHGBY&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=73c109aacb26ce74c62ba68f6baf74d6&#038;oe=6093C443\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tK3bzNiQcYMAX-JHGBY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=73c109aacb26ce74c62ba68f6baf74d6&amp;oe=6093C443&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Dei1Amvy\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Dei1Amvy\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92953080_544504953146159_3085776284173196940_n.jpg?_nc_cat=105&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=tK3bzNiQcYMAX-JHGBY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=73c109aacb26ce74c62ba68f6baf74d6&amp;oe=6093C443&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18125079958074232</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18125079958074232\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17870200891684227\" data-date=\"1586851583\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9Db6ZgyR5/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&#038;oe=60923C58\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&amp;oe=60923C58&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Db6ZgyR5\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9Db6ZgyR5\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93073088_126589828961784_2711754838664723206_n.jpg?_nc_cat=111&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Ut2M2iLahWIAX8Bg0bU&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=22a8bfbcc939c7b7a7bbbabe5f29b764&amp;oe=60923C58&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17870200891684227</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17870200891684227\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17871653737665234\" data-date=\"1586851569\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DaNaAJvX/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=HY7upozXK5wAX-6wAXY&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=9bbda17989b87b9ead5c076854790299&#038;oe=60915813\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=HY7upozXK5wAX-6wAXY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9bbda17989b87b9ead5c076854790299&amp;oe=60915813&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DaNaAJvX\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DaNaAJvX\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93356452_233476107860764_3114943981963002995_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=HY7upozXK5wAX-6wAXY&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=9bbda17989b87b9ead5c076854790299&amp;oe=60915813&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17871653737665234</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17871653737665234\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17849562971021220\" data-date=\"1586851554\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DYXGAE-7/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=t1dET4bro9EAX_w7kBw&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=be215b06f065bc96396ddf752e88ca5e&#038;oe=6091456F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=t1dET4bro9EAX_w7kBw&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=be215b06f065bc96396ddf752e88ca5e&amp;oe=6091456F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DYXGAE-7\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DYXGAE-7\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/93336300_901096336971148_7200873235174889129_n.jpg?_nc_cat=100&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=t1dET4bro9EAX_w7kBw&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=be215b06f065bc96396ddf752e88ca5e&amp;oe=6091456F&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17849562971021220</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17849562971021220\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18102022654184100\" data-date=\"1586851542\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DW7ugvvo/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=5ce7ac7c1580d891b30afeed802d1ff3&#038;oe=609071B5\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=5ce7ac7c1580d891b30afeed802d1ff3&amp;oe=609071B5&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DW7ugvvo\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DW7ugvvo\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_602127913707429_2938335729196611886_n.jpg?_nc_cat=102&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=Op3ZS_zAaKEAX_ZsU4d&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=5ce7ac7c1580d891b30afeed802d1ff3&amp;oe=609071B5&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18102022654184100</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18102022654184100\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18139713682016553\" data-date=\"1586851531\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DVlLgwX7/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=d3TdEZK8wg0AX8_tMa7&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=e8b806f688c454ff3e2c718d4c6f0b35&#038;oe=60920A9F\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=d3TdEZK8wg0AX8_tMa7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e8b806f688c454ff3e2c718d4c6f0b35&amp;oe=60920A9F&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DVlLgwX7\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DVlLgwX7\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92851453_150864709694370_6229453079127953440_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=d3TdEZK8wg0AX8_tMa7&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=e8b806f688c454ff3e2c718d4c6f0b35&amp;oe=60920A9F&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18139713682016553</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18139713682016553\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18101124766092345\" data-date=\"1586851521\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DUWmg2Cp/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=ZE997216zdEAX8gc4KW&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=1ad5a196c1b061917048ad733a9a01b4&#038;oe=6091C71E\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=ZE997216zdEAX8gc4KW&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=1ad5a196c1b061917048ad733a9a01b4&amp;oe=6091C71E&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DUWmg2Cp\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DUWmg2Cp\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92948509_657182158348998_6400887218958287180_n.jpg?_nc_cat=101&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=ZE997216zdEAX8gc4KW&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=1ad5a196c1b061917048ad733a9a01b4&amp;oe=6091C71E&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18101124766092345</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18101124766092345\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_18126467887079409\" data-date=\"1586851507\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9DSoaAiXH/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=EZhO2Al58P8AX_kNM4y&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=b9df531347c7317be0faa53d158414c3&#038;oe=6091BF98\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=EZhO2Al58P8AX_kNM4y&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=b9df531347c7317be0faa53d158414c3&amp;oe=6091BF98&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DSoaAiXH\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9DSoaAiXH\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92912065_667301397419051_1608122363815943220_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=EZhO2Al58P8AX_kNM4y&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=b9df531347c7317be0faa53d158414c3&amp;oe=6091BF98&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 18126467887079409</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 18126467887079409\">
</a>
</div>
</div><div class=\"sbi_item sbi_type_image sbi_new sbi_transition\" id=\"sbi_17884982272542098\" data-date=\"1586851348\">
<div class=\"sbi_photo_wrap\">
<a class=\"sbi_photo\" href=\"https://www.instagram.com/p/B-9C_SWA1xc/\" target=\"_blank\" rel=\"noopener nofollow\" data-full-res=\"https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&#038;ccb=1-3&#038;_nc_sid=8ae9d6&#038;_nc_ohc=NE0owxVbQcMAX_gtAjX&#038;_nc_ht=scontent-atl3-2.cdninstagram.com&#038;oh=24363c2ba1f8852245b0ca82072190a9&#038;oe=6090279A\" data-img-src-set=\"{&quot;d&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NE0owxVbQcMAX_gtAjX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=24363c2ba1f8852245b0ca82072190a9&amp;oe=6090279A&quot;,&quot;150&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9C_SWA1xc\\/media?size=t&quot;,&quot;320&quot;:&quot;https:\\/\\/www.instagram.com\\/p\\/B-9C_SWA1xc\\/media?size=m&quot;,&quot;640&quot;:&quot;https:\\/\\/scontent-atl3-2.cdninstagram.com\\/v\\/t51.2885-15\\/92823966_216717206280503_4604162183304081575_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=NE0owxVbQcMAX_gtAjX&amp;_nc_ht=scontent-atl3-2.cdninstagram.com&amp;oh=24363c2ba1f8852245b0ca82072190a9&amp;oe=6090279A&quot;}\">
<span class=\"sbi-screenreader\">Instagram post 17884982272542098</span>
<img src=\"../../wp-content/plugins/instagram-feed/img/placeholder.png\" alt=\"Instagram post 17884982272542098\">
</a>
</div>
</div> </div>
<div id=\"sbi_load\">
</div>
<span class=\"sbi_resized_image_data\" data-feed-id=\"sbi_peliculatheme1#12\" data-resized=\"{&quot;18138102073025935&quot;:{&quot;id&quot;:&quot;93372921_356332725321480_8400426497354550408_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17906466691441614&quot;:{&quot;id&quot;:&quot;93633716_2290256834604316_20547262508728217_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17898697330466487&quot;:{&quot;id&quot;:&quot;93761785_882467185534538_8390250542312319543_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18125079958074232&quot;:{&quot;id&quot;:&quot;92953080_544504953146159_3085776284173196940_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17870200891684227&quot;:{&quot;id&quot;:&quot;93073088_126589828961784_2711754838664723206_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17871653737665234&quot;:{&quot;id&quot;:&quot;93356452_233476107860764_3114943981963002995_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17849562971021220&quot;:{&quot;id&quot;:&quot;93336300_901096336971148_7200873235174889129_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18102022654184100&quot;:{&quot;id&quot;:&quot;92912065_602127913707429_2938335729196611886_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18139713682016553&quot;:{&quot;id&quot;:&quot;92851453_150864709694370_6229453079127953440_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18101124766092345&quot;:{&quot;id&quot;:&quot;92948509_657182158348998_6400887218958287180_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;18126467887079409&quot;:{&quot;id&quot;:&quot;92912065_667301397419051_1608122363815943220_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}},&quot;17884982272542098&quot;:{&quot;id&quot;:&quot;92823966_216717206280503_4604162183304081575_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320}}}\">
</span>
</div>
</div></div> </div>
</div>
</div>
<div class=\"rbt-toolbar\" data-theme=\"Pelicula\" data-featured=\"\" data-button-position=\"70%\" data-button-horizontal=\"right\" data-button-alt=\"no\"></div>

<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5T772QJ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>

<script type=\"text/javascript\">
var sbiajaxurl = \"../../wp-admin/admin-ajax.html\";
</script>
<script type=\"text/javascript\">
var c = document.body.className;
c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
document.body.className = c;
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {\"apiSettings\":{\"root\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-json\\/contact-form-7\\/v1\",\"namespace\":\"contact-form-7\\/v1\"},\"cached\":\"1\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/0fef6.js\"></script>
<script type='text/javascript' src='../../../export.qodethemes.com/_toolbar/assets/js/rbt-modulesc225.js?ver=5.4.1'></script>
<script src=\"../../wp-content/cache/minify/6d18f.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\",\"i18n_view_cart\":\"View cart\",\"cart_url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/cart\\/\",\"is_cart\":\"\",\"cart_redirect_after_add\":\"no\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/dc06c.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/63a69.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"\\/?wc-ajax=%%endpoint%%\",\"cart_hash_key\":\"wc_cart_hash_76474210e59261afa8ad9dbca9115745\",\"fragment_name\":\"wc_fragments_76474210e59261afa8ad9dbca9115745\",\"request_timeout\":\"5000\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/e58f1.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qodefGlobal = {\"vars\":{\"adminBarHeight\":0,\"qodefStickyHeaderScrollAmount\":800,\"topAreaHeight\":0,\"restUrl\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-json\\/\",\"restNonce\":\"f3284dd249\",\"paginationRestRoute\":\"pelicula\\/v1\\/get-posts\",\"headerHeight\":100,\"mobileHeaderHeight\":70}};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/a2757.js\"></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?key=AIzaSyA9R7XKAZB9BRsfn4l-uAg3RJQq5eA7OMY&amp;ver=5.4.1'></script>
<script src=\"../../wp-content/cache/minify/89d5d.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qodefMapsVariables = {\"global\":{\"mapStyle\":\"\",\"mapZoom\":12,\"mapScrollable\":false,\"mapDraggable\":true,\"streetViewControl\":true,\"zoomControl\":true,\"mapTypeControl\":true,\"fullscreenControl\":true},\"multiple\":[]};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/520c6.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var sb_instagram_js_options = {\"font_method\":\"svg\",\"resized_url\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/sb-instagram-feed-images\\/\",\"placeholder\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/plugins\\/instagram-feed\\/img\\/placeholder.png\"};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/c7165.js\"></script>
<script type='text/javascript'>
var elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"downloadImage\":\"Download image\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"version\":\"2.9.8\",\"urls\":{\"assets\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"settings\":{\"page\":[],\"general\":{\"elementor_lightbox_enable_counter\":\"yes\",\"elementor_lightbox_enable_fullscreen\":\"yes\",\"elementor_lightbox_enable_zoom\":\"yes\",\"elementor_lightbox_enable_share\":\"yes\",\"elementor_lightbox_title_src\":\"title\",\"elementor_lightbox_description_src\":\"description\"},\"editorPreferences\":[]},\"post\":{\"id\":1289,\"title\":\"Hueco%20Mundo%20%E2%80%93%20Pelicula\",\"excerpt\":\"\",\"featuredImage\":\"https:\\/\\/pelicula.qodeinteractive.com\\/wp-content\\/uploads\\/2020\\/03\\/port-4-img-2.jpg\"}};
</script>
<script src=\"../../wp-content/cache/minify/9f110.js\"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qodefElementorGlobal = {\"vars\":{\"elementorSectionHandler\":[]}};
/* ]]> */
</script>
<script src=\"../../wp-content/cache/minify/92b64.js\"></script>
</body>

<!-- Mirrored from pelicula.qodeinteractive.com/portfolio-item/hueco-mundo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 14:44:52 GMT -->
</html>
", "theatre/show.html.twig", "C:\\Users\\ahmed\\Downloads\\ArtLife\\templates\\theatre\\show.html.twig");
    }
}
