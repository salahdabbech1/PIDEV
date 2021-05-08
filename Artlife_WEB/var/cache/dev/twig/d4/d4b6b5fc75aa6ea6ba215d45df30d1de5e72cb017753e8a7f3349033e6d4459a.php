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

/* factor/indexAdmin.html.twig */
class __TwigTemplate_9f74456a5e4cf4e6b4377cb7f3e699e06e816c1b4b078bcf7625fa7b6900330e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "factor/indexAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "factor/indexAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/table-foo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:42:12 GMT -->
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>FixedPlus - Bootstrap Admin Dashboard Template</title>

\t<!-- Common Plugins -->
\t<link href=\"../../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

\t<!-- Foo Table -->
\t<link href=\"../../assets/lib/footable/footable.core.css\" rel=\"stylesheet\">

\t<!-- Custom Css-->
\t<link href=\"../../assets/scss/style.css\" rel=\"stylesheet\">

\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->
</head>
<body>

<!-- ============================================================== -->
<!-- \t\t\t\t\t\tTopbar Start \t\t\t\t\t\t\t-->
<!-- ============================================================== -->
<div class=\"top-bar primary-top-bar\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<a class=\"admin-logo\" href=\"index.html\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t<img alt=\"\" src=\"../../assets/img/icon.png\" class=\"logo-icon margin-r-10\">
\t\t\t\t\t\t<img alt=\"\" src=\"../../assets/img/logo-dark.png\" class=\"toggle-none hidden-xs\">
\t\t\t\t\t</h1>
\t\t\t\t</a>
\t\t\t\t<div class=\"left-nav-toggle\" >
\t\t\t\t\t<a  href=\"#\" class=\"nav-collapse\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"left-nav-collapsed\" >
\t\t\t\t\t<a  href=\"#\" class=\"nav-collapsed\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-form hidden-xs\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Search for...\" type=\"text\"> <button class=\"btn-search\" type=\"button\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<ul class=\"list-inline top-right-nav\">
\t\t\t\t\t<li class=\"dropdown icons-dropdown d-none-m\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-envelope\"></i> <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu top-dropdown lg-dropdown notification-dropdown\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<a class=\"float-right\" href=\"#\"><small>View All</small></a> Messages
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"scrollDiv\">
\t\t\t\t\t\t\t\t\t<div class=\"notification-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tJohn Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-3.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tGovindo Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-4.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMegan Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-5.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tHritik Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown icons-dropdown d-none-m\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-bell\"></i> <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu top-dropdown lg-dropdown notification-dropdown\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<a class=\"float-right\" href=\"#\"><small>View All</small></a> Notifications
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"scrollDiv\">
\t\t\t\t\t\t\t\t\t<div class=\"notification-list\">

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">Upload Complete</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-info text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">Storage Space low</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">Project Task Complete</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" icon-graph text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">CPU Usage</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown d-none-m\">
\t\t\t\t\t\t<a class=\"right-sidebar-toggle\" href=\"javascript:%20void(0);\"><i class=\"fa fa-align-right\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown avtar-dropdown\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"30\">
\t\t\t\t\t\t\tJohn Doe
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu top-dropdown\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-bell\"></i> Activities</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-user\"></i> Profile</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-settings\"></i> Settings</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-logout\"></i> Logout</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- ============================================================== -->
<!--                        Topbar End                              -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!--                        Right Side Start                        -->
<!-- ============================================================== -->
<nav class=\"toggle-sidebar\" id=\"right-sidebar-toggle\">
\t<div class=\"nano\">
\t\t<div class=\"nano-content\">
\t\t\t<div>
\t\t\t\t<ul class=\"list-inline nav-tab-card clearfix\" role=\"tablist\">

\t\t\t\t\t<li class=\"active\" role=\"presentation\">
\t\t\t\t\t\t<a aria-controls=\"friends\" data-toggle=\"tab\" href=\"#friends\" role=\"tab\">Friends</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"friends\" role=\"tabcard\">
\t\t\t\t\t\t<ul class=\"list-unstyled sidebar-contact-list\">
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>John Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-1.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Govinda Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-danger circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-3.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Megan Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-4.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Hritik Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-5.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Bianca Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-6.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>John Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-1.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Govinda Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-danger circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Megan Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\" text-center\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-teal\" href=\"javascript:void(0);\" title=\"See more contacts\">Load more..</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>
<!-- ============================================================== -->
<!--                        Right Side End                          -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- \t\t\t\t\t\tNavigation Start \t\t\t\t\t\t-->
<!-- ============================================================== -->
<div class=\"main-sidebar-nav default-navigation\">
\t<div class=\"nano\">
\t\t<div class=\"nano-content sidebar-nav\">

\t\t\t<div class=\"card-body border-bottom text-center nav-profile\">
\t\t\t\t<div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
\t\t\t\t<img alt=\"profile\" class=\"margin-b-10  \" src=\"../../assets/img/avtar-2.png\" width=\"80\">
\t\t\t\t<p class=\"lead margin-b-0 toggle-none\">John Doe</p>
\t\t\t\t<p class=\"text-muted mv-0 toggle-none\">Welcome</p>
\t\t\t</div>

\t\t\t<ul class=\"metisMenu nav flex-column\" id=\"menu\">
\t\t\t\t<li class=\"nav-heading\"><span>MAIN</span></li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"toggle-none\">Dashboard <span class=\"badge badge-pill badge-danger float-right mr-2\">1.0</span></span></a></li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-th-large\"></i> <span class=\"toggle-none\">Widgets <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column \" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"widgets-apps.html\">Widgets Apps</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"widgets-data.html\">Widgets Data</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-codepen\"></i> <span class=\"toggle-none\">Apps <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-calendar.html\">Calendar</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-chat.html\">Chat App</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-ticket.html\">Support Ticket</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-contact.html\">Contact Grid</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-contact-detail.html\">Contact Detail</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-envelope-open\"></i> <span class=\"toggle-none\">Inbox<span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-index.html\">Inbox</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-view.html\">Inbox view</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-compose.html\">Compose</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-heading\"><span>FORMS, TABLE & LAYOUTS</span></li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a  class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-cogs\"></i> <span class=\"toggle-none\">UI elements <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-jquery-elements.html\">Jquery UI</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-bootstrap-elements.html\">Bootstrap UI</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-typography.html\">Typography</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-icons.html\">Icons</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-buttons.html\">Buttons</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-cards.html\">Cards</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-tabs.html\">Tabs</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-card-master.html\">Card Master</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-tip-pop.html\">Tooltip & Popovers</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-sweetalerts.html\">Sweet Alters</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-alertify.html\">Alertify Alters</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-modals.html\">Modals</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-notification.html\">Notification</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-progress.html\">Progress</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-grid.html\">Grid System</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-carousel.html\">Carousel</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-range-slider.html\">Range Slider</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-nestable.html\">Nestable</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-treeview.html\">Tree View</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-draggable-cards.html\">Draggable Cards</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-file\"></i> <span class=\"toggle-none\">Forms <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-basic.html\">Basic Elements</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-validations.html\">Form Validations</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-masks.html\">Form Masks</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-picker.html\">Form Picker</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-editor.html\">Text Editor</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-file-upload.html\">File upload</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-wizard.html\">Form Wizard</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item  active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-table\"></i> <span class=\"toggle-none\">Tables <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"table-basic.html\">Basic Tables</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"table-data.html\">Data Tables</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"table-js-grid.html\">JsGrid Tables</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"table-foo.html\">Foo Tables</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-bar-chart\"></i> <span class=\"toggle-none\">Charts <span class=\"fa arrow\"></span>  <span class=\"badge badge-pill badge-success float-right mr-2\">7</span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-flot.html\">Flot</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-morris.html\">Morris</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-radial.html\">Radial</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-c3.html\">C3</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-sparkline.html\">Sparkline</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-rickshaw.html\">Rickshaw</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-chartjs.html\">ChartJs</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-map-marker\"></i> <span class=\"toggle-none\">Maps <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"map-vector.html\">Vector map</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"map-google.html\">Google map</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-heading\"><span>EXAMPLES</span></li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"toggle-none\">E-Commerce <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-add.html\">Add Product</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-products.html\">All Products</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-orders.html\">Orders</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-briefcase\"></i> <span class=\"toggle-none\">Corporate <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"corporate-add.html\">Add Pages</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"corporate-pages.html\">All Pages</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-fire\"></i> <span class=\"toggle-none\">Ajax & Php<span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"examples-add-and-update.html\">Add and Update With Php</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"examples-delete.html\">Delete With Php</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-heading\"><span>OTHERS</span></li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-folder\"></i> <span class=\"toggle-none\">Sample Pages <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-blank.html\">Blank Page</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-login.html\">Login</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-register.html\">Register</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-forget-password.html\">Forget Password</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-lockscreen.html\">Lock-screen</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-404.html\">404</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-gallery.html\">Gallery</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-timeline.html\">Timeline</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-invoice.html\">Invoice</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-profile.html\">Profile</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-faqs.html\">Faqs</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-pricing.html\">Pricing</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-folder-open\"></i> <span class=\"toggle-none\">Multi Level<span class=\"fa arrow \"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 1</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\"href=\"javascript: void(0);\" aria-expanded=\"false\">Level 2 <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t<ul class=\"nav-third-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 2</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 2</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
<!-- ============================================================== -->
<!-- \t\t\t\t\t\tNavigation End\t \t\t\t\t\t\t-->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- \t\t\t\t\t\tContent Start\t \t\t\t\t\t\t-->
<!-- ============================================================== -->

<div class=\"row page-header\"><div class=\"col-lg-6 align-self-center \">
\t\t<h2>Foo Tables</h2>
\t\t<ol class=\"breadcrumb\">
\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\">Tables</a></li>
\t\t\t<li class=\"breadcrumb-item active\">Foo Tables</li>
\t\t</ol></div></div>

<section class=\"main-content\">

\t<div class=\"row\">

\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header card-default\">
\t\t\t\t\tSimple table with sorting, pagination and filter
\t\t\t\t</div>
\t\t\t\t<a href=\"admin/new\" class=\"btn btn-primary btn-rounded box-shadow col-md-3\" style=\"
\t\t\t\t\tposition: relative;
\t\t\t\t\tleft: 900px;
\t\t\t\t\">Add Actor</a>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<input type=\"text\" class=\"form-control margin-b-10 input-sm col-md-4\" id=\"filter\"
\t\t\t\t\t\t   placeholder=\"Search in table\">

\t\t\t\t\t<table class=\"footable table table-hover\" data-page-size=\"12\" data-filter=#filter>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th data-hide=\"phone,tablet\">BirthDay</th>
\t\t\t\t\t\t\t<th data-hide=\"phone,tablet\">Description</th>
\t\t\t\t\t\t\t<th data-hide=\"phone,tablet\">Background</th>
\t\t\t\t\t\t\t<th data-hide=\"phone,tablet\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factors"]) || array_key_exists("factors", $context) ? $context["factors"] : (function () { throw new RuntimeError('Variable "factors" does not exist.', 503, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["factor"]) {
            // line 504
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 505
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factor"], "id", [], "any", false, false, false, 505), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img alt=\"user\" width=\"50\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content";
            // line 507
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factor"], "image", [], "any", false, false, false, 507), "html", null, true);
            echo "\" width=\"30\">
\t\t\t\t\t\t\t\t\t";
            // line 508
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factor"], "name", [], "any", false, false, false, 508), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 510
            ((twig_get_attribute($this->env, $this->source, $context["factor"], "born", [], "any", false, false, false, 510)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factor"], "born", [], "any", false, false, false, 510), "Y/M/d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 511
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factor"], "description", [], "any", false, false, false, 511), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img alt=\"user\" width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content";
            // line 513
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factor"], "imageb", [], "any", false, false, false, 513), "html", null, true);
            echo "\" width=\"30\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 516
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("factor_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["factor"], "id", [], "any", false, false, false, 516)]), "html", null, true);
            echo " \" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
\t\t\t\t\t\t\t\t\t";
            // line 517
            echo twig_include($this->env, $context, "factor/_delete_form.html.twig");
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 521
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t\t<ul class=\"pagination float-right\"></ul>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>



\t<footer class=\"footer\">
\t\t<span>Copyright &copy; 2018 FixedPlus</span>
\t</footer>


</section>
<!-- ============================================================== -->
<!-- \t\t\t\t\t\tContent End\t \t\t\t\t\t\t\t-->
<!-- ============================================================== -->



<!-- Common Plugins -->
<script src=\"../../assets/lib/jquery/dist/jquery.min.js\"></script>
<script src=\"../../assets/lib/bootstrap/js/popper.min.js\"></script>
<script src=\"../../assets/lib/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"../../assets/lib/pace/pace.min.js\"></script>
<script src=\"../../assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js\"></script>
<script src=\"../../assets/lib/slimscroll/jquery.slimscroll.min.js\"></script>
<script src=\"../../assets/lib/nano-scroll/jquery.nanoscroller.min.js\"></script>
<script src=\"../../assets/lib/metisMenu/metisMenu.min.js\"></script>
<script src=\"../../assets/js/custom.js\"></script>

<!-- FooTable -->
<script src=\"../../assets/lib/footable/footable.all.min.js\"></script>
<script>
\t\$(document).ready(function() {
\t\t\$('.footable').footable();
\t\t\$('.footable2').footable();
\t});
</script>
</body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/table-foo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:42:38 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "factor/indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 521,  600 => 517,  596 => 516,  590 => 513,  585 => 511,  581 => 510,  576 => 508,  572 => 507,  567 => 505,  564 => 504,  547 => 503,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/table-foo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:42:12 GMT -->
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>FixedPlus - Bootstrap Admin Dashboard Template</title>

\t<!-- Common Plugins -->
\t<link href=\"../../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

\t<!-- Foo Table -->
\t<link href=\"../../assets/lib/footable/footable.core.css\" rel=\"stylesheet\">

\t<!-- Custom Css-->
\t<link href=\"../../assets/scss/style.css\" rel=\"stylesheet\">

\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->
</head>
<body>

<!-- ============================================================== -->
<!-- \t\t\t\t\t\tTopbar Start \t\t\t\t\t\t\t-->
<!-- ============================================================== -->
<div class=\"top-bar primary-top-bar\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<a class=\"admin-logo\" href=\"index.html\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t<img alt=\"\" src=\"../../assets/img/icon.png\" class=\"logo-icon margin-r-10\">
\t\t\t\t\t\t<img alt=\"\" src=\"../../assets/img/logo-dark.png\" class=\"toggle-none hidden-xs\">
\t\t\t\t\t</h1>
\t\t\t\t</a>
\t\t\t\t<div class=\"left-nav-toggle\" >
\t\t\t\t\t<a  href=\"#\" class=\"nav-collapse\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"left-nav-collapsed\" >
\t\t\t\t\t<a  href=\"#\" class=\"nav-collapsed\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-form hidden-xs\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"Search for...\" type=\"text\"> <button class=\"btn-search\" type=\"button\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<ul class=\"list-inline top-right-nav\">
\t\t\t\t\t<li class=\"dropdown icons-dropdown d-none-m\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-envelope\"></i> <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu top-dropdown lg-dropdown notification-dropdown\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<a class=\"float-right\" href=\"#\"><small>View All</small></a> Messages
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"scrollDiv\">
\t\t\t\t\t\t\t\t\t<div class=\"notification-list\">
\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tJohn Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-3.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tGovindo Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-4.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMegan Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-5.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tHritik Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown icons-dropdown d-none-m\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-bell\"></i> <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu top-dropdown lg-dropdown notification-dropdown\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<a class=\"float-right\" href=\"#\"><small>View All</small></a> Notifications
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"scrollDiv\">
\t\t\t\t\t\t\t\t\t<div class=\"notification-list\">

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">Upload Complete</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-info text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">Storage Space low</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">Project Task Complete</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" icon-graph text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-title\">CPU Usage</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">15 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown d-none-m\">
\t\t\t\t\t\t<a class=\"right-sidebar-toggle\" href=\"javascript:%20void(0);\"><i class=\"fa fa-align-right\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown avtar-dropdown\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"30\">
\t\t\t\t\t\t\tJohn Doe
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu top-dropdown\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-bell\"></i> Activities</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-user\"></i> Profile</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-settings\"></i> Settings</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-logout\"></i> Logout</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- ============================================================== -->
<!--                        Topbar End                              -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!--                        Right Side Start                        -->
<!-- ============================================================== -->
<nav class=\"toggle-sidebar\" id=\"right-sidebar-toggle\">
\t<div class=\"nano\">
\t\t<div class=\"nano-content\">
\t\t\t<div>
\t\t\t\t<ul class=\"list-inline nav-tab-card clearfix\" role=\"tablist\">

\t\t\t\t\t<li class=\"active\" role=\"presentation\">
\t\t\t\t\t\t<a aria-controls=\"friends\" data-toggle=\"tab\" href=\"#friends\" role=\"tab\">Friends</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"friends\" role=\"tabcard\">
\t\t\t\t\t\t<ul class=\"list-unstyled sidebar-contact-list\">
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>John Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-1.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Govinda Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-danger circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-3.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Megan Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-4.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Hritik Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-5.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Bianca Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-6.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>John Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-1.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Govinda Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t\t\t<a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-danger circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Megan Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\" text-center\">
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-teal\" href=\"javascript:void(0);\" title=\"See more contacts\">Load more..</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>
<!-- ============================================================== -->
<!--                        Right Side End                          -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- \t\t\t\t\t\tNavigation Start \t\t\t\t\t\t-->
<!-- ============================================================== -->
<div class=\"main-sidebar-nav default-navigation\">
\t<div class=\"nano\">
\t\t<div class=\"nano-content sidebar-nav\">

\t\t\t<div class=\"card-body border-bottom text-center nav-profile\">
\t\t\t\t<div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
\t\t\t\t<img alt=\"profile\" class=\"margin-b-10  \" src=\"../../assets/img/avtar-2.png\" width=\"80\">
\t\t\t\t<p class=\"lead margin-b-0 toggle-none\">John Doe</p>
\t\t\t\t<p class=\"text-muted mv-0 toggle-none\">Welcome</p>
\t\t\t</div>

\t\t\t<ul class=\"metisMenu nav flex-column\" id=\"menu\">
\t\t\t\t<li class=\"nav-heading\"><span>MAIN</span></li>
\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"toggle-none\">Dashboard <span class=\"badge badge-pill badge-danger float-right mr-2\">1.0</span></span></a></li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-th-large\"></i> <span class=\"toggle-none\">Widgets <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column \" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"widgets-apps.html\">Widgets Apps</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"widgets-data.html\">Widgets Data</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-codepen\"></i> <span class=\"toggle-none\">Apps <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-calendar.html\">Calendar</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-chat.html\">Chat App</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-ticket.html\">Support Ticket</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-contact.html\">Contact Grid</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"app-contact-detail.html\">Contact Detail</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-envelope-open\"></i> <span class=\"toggle-none\">Inbox<span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-index.html\">Inbox</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-view.html\">Inbox view</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-compose.html\">Compose</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-heading\"><span>FORMS, TABLE & LAYOUTS</span></li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a  class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-cogs\"></i> <span class=\"toggle-none\">UI elements <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-jquery-elements.html\">Jquery UI</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-bootstrap-elements.html\">Bootstrap UI</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-typography.html\">Typography</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-icons.html\">Icons</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-buttons.html\">Buttons</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-cards.html\">Cards</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-tabs.html\">Tabs</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-card-master.html\">Card Master</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-tip-pop.html\">Tooltip & Popovers</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-sweetalerts.html\">Sweet Alters</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-alertify.html\">Alertify Alters</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-modals.html\">Modals</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-notification.html\">Notification</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-progress.html\">Progress</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-grid.html\">Grid System</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-carousel.html\">Carousel</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-range-slider.html\">Range Slider</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-nestable.html\">Nestable</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-treeview.html\">Tree View</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-draggable-cards.html\">Draggable Cards</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-file\"></i> <span class=\"toggle-none\">Forms <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-basic.html\">Basic Elements</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-validations.html\">Form Validations</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-masks.html\">Form Masks</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-picker.html\">Form Picker</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-editor.html\">Text Editor</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-file-upload.html\">File upload</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"form-wizard.html\">Form Wizard</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item  active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-table\"></i> <span class=\"toggle-none\">Tables <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"table-basic.html\">Basic Tables</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"table-data.html\">Data Tables</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"table-js-grid.html\">JsGrid Tables</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"table-foo.html\">Foo Tables</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-bar-chart\"></i> <span class=\"toggle-none\">Charts <span class=\"fa arrow\"></span>  <span class=\"badge badge-pill badge-success float-right mr-2\">7</span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-flot.html\">Flot</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-morris.html\">Morris</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-radial.html\">Radial</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-c3.html\">C3</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-sparkline.html\">Sparkline</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-rickshaw.html\">Rickshaw</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-chartjs.html\">ChartJs</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-map-marker\"></i> <span class=\"toggle-none\">Maps <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"map-vector.html\">Vector map</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"map-google.html\">Google map</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-heading\"><span>EXAMPLES</span></li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"toggle-none\">E-Commerce <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-add.html\">Add Product</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-products.html\">All Products</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-orders.html\">Orders</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-briefcase\"></i> <span class=\"toggle-none\">Corporate <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"corporate-add.html\">Add Pages</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"corporate-pages.html\">All Pages</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-fire\"></i> <span class=\"toggle-none\">Ajax & Php<span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"examples-add-and-update.html\">Add and Update With Php</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"examples-delete.html\">Delete With Php</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-heading\"><span>OTHERS</span></li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-folder\"></i> <span class=\"toggle-none\">Sample Pages <span class=\"fa arrow\"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-blank.html\">Blank Page</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-login.html\">Login</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-register.html\">Register</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-forget-password.html\">Forget Password</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-lockscreen.html\">Lock-screen</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-404.html\">404</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-gallery.html\">Gallery</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-timeline.html\">Timeline</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-invoice.html\">Invoice</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-profile.html\">Profile</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-faqs.html\">Faqs</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"page-pricing.html\">Pricing</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-folder-open\"></i> <span class=\"toggle-none\">Multi Level<span class=\"fa arrow \"></span></span></a>
\t\t\t\t\t<ul class=\"nav-second-level nav flex-column\" aria-expanded=\"false\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 1</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\"href=\"javascript: void(0);\" aria-expanded=\"false\">Level 2 <span class=\"fa arrow\"></span></a>
\t\t\t\t\t\t\t<ul class=\"nav-third-level nav flex-column sub-menu\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 2</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 2</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
<!-- ============================================================== -->
<!-- \t\t\t\t\t\tNavigation End\t \t\t\t\t\t\t-->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- \t\t\t\t\t\tContent Start\t \t\t\t\t\t\t-->
<!-- ============================================================== -->

<div class=\"row page-header\"><div class=\"col-lg-6 align-self-center \">
\t\t<h2>Foo Tables</h2>
\t\t<ol class=\"breadcrumb\">
\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\">Tables</a></li>
\t\t\t<li class=\"breadcrumb-item active\">Foo Tables</li>
\t\t</ol></div></div>

<section class=\"main-content\">

\t<div class=\"row\">

\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header card-default\">
\t\t\t\t\tSimple table with sorting, pagination and filter
\t\t\t\t</div>
\t\t\t\t<a href=\"admin/new\" class=\"btn btn-primary btn-rounded box-shadow col-md-3\" style=\"
\t\t\t\t\tposition: relative;
\t\t\t\t\tleft: 900px;
\t\t\t\t\">Add Actor</a>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<input type=\"text\" class=\"form-control margin-b-10 input-sm col-md-4\" id=\"filter\"
\t\t\t\t\t\t   placeholder=\"Search in table\">

\t\t\t\t\t<table class=\"footable table table-hover\" data-page-size=\"12\" data-filter=#filter>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th data-hide=\"phone,tablet\">BirthDay</th>
\t\t\t\t\t\t\t<th data-hide=\"phone,tablet\">Description</th>
\t\t\t\t\t\t\t<th data-hide=\"phone,tablet\">Background</th>
\t\t\t\t\t\t\t<th data-hide=\"phone,tablet\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for factor in factors %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ factor.id }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img alt=\"user\" width=\"50\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content{{ factor.image }}\" width=\"30\">
\t\t\t\t\t\t\t\t\t{{ factor.name }}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{ factor.born ? factor.born|date('Y/M/d') : '' }}</td>
\t\t\t\t\t\t\t\t<td>{{ factor.description }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img alt=\"user\" width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content{{ factor.imageb }}\" width=\"30\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('factor_edit', {'id': factor.id}) }} \" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
\t\t\t\t\t\t\t\t\t{{ include('factor/_delete_form.html.twig') }}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"5\">
\t\t\t\t\t\t\t\t<ul class=\"pagination float-right\"></ul>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>



\t<footer class=\"footer\">
\t\t<span>Copyright &copy; 2018 FixedPlus</span>
\t</footer>


</section>
<!-- ============================================================== -->
<!-- \t\t\t\t\t\tContent End\t \t\t\t\t\t\t\t-->
<!-- ============================================================== -->



<!-- Common Plugins -->
<script src=\"../../assets/lib/jquery/dist/jquery.min.js\"></script>
<script src=\"../../assets/lib/bootstrap/js/popper.min.js\"></script>
<script src=\"../../assets/lib/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"../../assets/lib/pace/pace.min.js\"></script>
<script src=\"../../assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js\"></script>
<script src=\"../../assets/lib/slimscroll/jquery.slimscroll.min.js\"></script>
<script src=\"../../assets/lib/nano-scroll/jquery.nanoscroller.min.js\"></script>
<script src=\"../../assets/lib/metisMenu/metisMenu.min.js\"></script>
<script src=\"../../assets/js/custom.js\"></script>

<!-- FooTable -->
<script src=\"../../assets/lib/footable/footable.all.min.js\"></script>
<script>
\t\$(document).ready(function() {
\t\t\$('.footable').footable();
\t\t\$('.footable2').footable();
\t});
</script>
</body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/table-foo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:42:38 GMT -->
</html>", "factor/indexAdmin.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\templates\\factor\\indexAdmin.html.twig");
    }
}
