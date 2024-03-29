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

/* factor/edit.html.twig */
class __TwigTemplate_ec178faafc9cad691617ee3c8dcba9bd58afe9310489bd4ef25f4d826970d2a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "factor/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "factor/edit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:43:32 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>FixedPlus - Bootstrap Admin Dashboard Template</title>

    <!-- Common Plugins -->
    <link href=\"../../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Css-->
    <link href=\"../../assets/scss/style.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<!-- ============================================================== -->
<!-- \t\t\t\t\t\tTopbar Start \t\t\t\t\t\t\t-->
<!-- ============================================================== -->
<div class=\"top-bar primary-top-bar\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <a class=\"admin-logo\" href=\"index.html\">
                    <h1>
                        <img alt=\"\" src=\"../../assets/img/icon.png\" class=\"logo-icon margin-r-10\">
                        <img alt=\"\" src=\"../../assets/img/logo-dark.png\" class=\"toggle-none hidden-xs\">
                    </h1>
                </a>
                <div class=\"left-nav-toggle\" >
                    <a  href=\"#\" class=\"nav-collapse\"><i class=\"fa fa-bars\"></i></a>
                </div>
                <div class=\"left-nav-collapsed\" >
                    <a  href=\"#\" class=\"nav-collapsed\"><i class=\"fa fa-bars\"></i></a>
                </div>
                <div class=\"search-form hidden-xs\">
                    <form>
                        <input class=\"form-control\" placeholder=\"Search for...\" type=\"text\"> <button class=\"btn-search\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </div>
            </div>
            <div class=\"col\">
                <ul class=\"list-inline top-right-nav\">
                    <li class=\"dropdown icons-dropdown d-none-m\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-envelope\"></i> <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div></a>
                        <ul class=\"dropdown-menu top-dropdown lg-dropdown notification-dropdown\">
                            <li>
                                <div class=\"dropdown-header\">
                                    <a class=\"float-right\" href=\"#\"><small>View All</small></a> Messages
                                </div>

                                <div class=\"scrollDiv\">
                                    <div class=\"notification-list\">
                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tJohn Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-3.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tGovindo Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-4.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMegan Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-5.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tHritik Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown icons-dropdown d-none-m\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-bell\"></i> <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div></a>
                        <ul class=\"dropdown-menu top-dropdown lg-dropdown notification-dropdown\">
                            <li>
                                <div class=\"dropdown-header\">
                                    <a class=\"float-right\" href=\"#\"><small>View All</small></a> Notifications
                                </div>
                                <div class=\"scrollDiv\">
                                    <div class=\"notification-list\">

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">Upload Complete</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-info text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">Storage Space low</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">Project Task Complete</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" icon-graph text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">CPU Usage</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown d-none-m\">
                        <a class=\"right-sidebar-toggle\" href=\"javascript:%20void(0);\"><i class=\"fa fa-align-right\"></i></a>
                    </li>
                    <li class=\"dropdown avtar-dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"30\">
                            John Doe
                        </a>
                        <ul class=\"dropdown-menu top-dropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-bell\"></i> Activities</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-user\"></i> Profile</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-settings\"></i> Settings</a>
                            </li>
                            <li class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-logout\"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!--                        Topbar End                              -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!--                        Right Side Start                        -->
<!-- ============================================================== -->
<nav class=\"toggle-sidebar\" id=\"right-sidebar-toggle\">
    <div class=\"nano\">
        <div class=\"nano-content\">
            <div>
                <ul class=\"list-inline nav-tab-card clearfix\" role=\"tablist\">

                    <li class=\"active\" role=\"presentation\">
                        <a aria-controls=\"friends\" data-toggle=\"tab\" href=\"#friends\" role=\"tab\">Friends</a>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"friends\" role=\"tabcard\">
                        <ul class=\"list-unstyled sidebar-contact-list\">
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>John Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-1.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Govinda Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-danger circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-3.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Megan Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-4.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Hritik Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-5.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Bianca Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-6.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>John Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-1.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Govinda Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-danger circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Megan Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li>
                                <div class=\" text-center\">
                                    <a class=\"btn btn-teal\" href=\"javascript:void(0);\" title=\"See more contacts\">Load more..</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- ============================================================== -->
<!--                        Right Side End                          -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- \t\t\t\t\t\tNavigation Start \t\t\t\t\t\t-->
<!-- ============================================================== -->
<div class=\"main-sidebar-nav default-navigation\">
    <div class=\"nano\">
        <div class=\"nano-content sidebar-nav\">

            <div class=\"card-body border-bottom text-center nav-profile\">
                <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
                <img alt=\"profile\" class=\"margin-b-10  \" src=\"../../assets/img/avtar-2.png\" width=\"80\">
                <p class=\"lead margin-b-0 toggle-none\">John Doe</p>
                <p class=\"text-muted mv-0 toggle-none\">Welcome</p>
            </div>

            <ul class=\"metisMenu nav flex-column\" id=\"menu\">
                <li class=\"nav-heading\"><span>MAIN</span></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"toggle-none\">Dashboard <span class=\"badge badge-pill badge-danger float-right mr-2\">1.0</span></span></a></li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-th-large\"></i> <span class=\"toggle-none\">Widgets <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column \" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"widgets-apps.html\">Widgets Apps</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"widgets-data.html\">Widgets Data</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-codepen\"></i> <span class=\"toggle-none\">Apps <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-calendar.html\">Calendar</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-chat.html\">Chat App</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-ticket.html\">Support Ticket</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-contact.html\">Contact Grid</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-contact-detail.html\">Contact Detail</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-envelope-open\"></i> <span class=\"toggle-none\">Inbox<span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-index.html\">Inbox</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-view.html\">Inbox view</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-compose.html\">Compose</a></li>
                    </ul>
                </li>
                <li class=\"nav-heading\"><span>FORMS, TABLE & LAYOUTS</span></li>

                <li class=\"nav-item\">
                    <a  class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-cogs\"></i> <span class=\"toggle-none\">UI elements <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-jquery-elements.html\">Jquery UI</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-bootstrap-elements.html\">Bootstrap UI</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-typography.html\">Typography</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-icons.html\">Icons</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-buttons.html\">Buttons</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-cards.html\">Cards</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-tabs.html\">Tabs</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-card-master.html\">Card Master</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-tip-pop.html\">Tooltip & Popovers</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-sweetalerts.html\">Sweet Alters</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-alertify.html\">Alertify Alters</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-modals.html\">Modals</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-notification.html\">Notification</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-progress.html\">Progress</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-grid.html\">Grid System</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-carousel.html\">Carousel</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-range-slider.html\">Range Slider</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-nestable.html\">Nestable</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-treeview.html\">Tree View</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-draggable-cards.html\">Draggable Cards</a></li>
                    </ul>
                </li>
                <li class=\"nav-item  active\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-file\"></i> <span class=\"toggle-none\">Forms <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-basic.html\">Basic Elements</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-validations.html\">Form Validations</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-masks.html\">Form Masks</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-picker.html\">Form Picker</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-editor.html\">Text Editor</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-file-upload.html\">File upload</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-wizard.html\">Form Wizard</a></li>
                    </ul>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-table\"></i> <span class=\"toggle-none\">Tables <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"table-basic.html\">Basic Tables</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"table-data.html\">Data Tables</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"table-js-grid.html\">JsGrid Tables</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"table-foo.html\">Foo Tables</a></li>
                    </ul>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-bar-chart\"></i> <span class=\"toggle-none\">Charts <span class=\"fa arrow\"></span>  <span class=\"badge badge-pill badge-success float-right mr-2\">7</span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-flot.html\">Flot</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-morris.html\">Morris</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-radial.html\">Radial</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-c3.html\">C3</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-sparkline.html\">Sparkline</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-rickshaw.html\">Rickshaw</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-chartjs.html\">ChartJs</a></li>
                    </ul>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-map-marker\"></i> <span class=\"toggle-none\">Maps <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"map-vector.html\">Vector map</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"map-google.html\">Google map</a></li>
                    </ul>
                </li>

                <li class=\"nav-heading\"><span>EXAMPLES</span></li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"toggle-none\">E-Commerce <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-add.html\">Add Product</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-products.html\">All Products</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-orders.html\">Orders</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-briefcase\"></i> <span class=\"toggle-none\">Corporate <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"corporate-add.html\">Add Pages</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"corporate-pages.html\">All Pages</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-fire\"></i> <span class=\"toggle-none\">Ajax & Php<span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"examples-add-and-update.html\">Add and Update With Php</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"examples-delete.html\">Delete With Php</a></li>
                    </ul>
                </li>

                <li class=\"nav-heading\"><span>OTHERS</span></li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-folder\"></i> <span class=\"toggle-none\">Sample Pages <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-blank.html\">Blank Page</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-login.html\">Login</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-register.html\">Register</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-forget-password.html\">Forget Password</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-lockscreen.html\">Lock-screen</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-404.html\">404</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-gallery.html\">Gallery</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-timeline.html\">Timeline</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-invoice.html\">Invoice</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-profile.html\">Profile</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-faqs.html\">Faqs</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-pricing.html\">Pricing</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-folder-open\"></i> <span class=\"toggle-none\">Multi Level<span class=\"fa arrow \"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 1</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\"href=\"javascript: void(0);\" aria-expanded=\"false\">Level 2 <span class=\"fa arrow\"></span></a>
                            <ul class=\"nav-third-level nav flex-column sub-menu\" aria-expanded=\"false\">
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 2</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- \t\t\t\t\t\tNavigation End\t \t\t\t\t\t\t-->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- \t\t\t\t\t\tContent Start\t \t\t\t\t\t\t-->
<!-- ============================================================== -->

<div class=\"row page-header\">
    <div class=\"col-lg-6 align-self-center \">
        <h2>Basic elements</h2>
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Form</a></li>
            <li class=\"breadcrumb-item active\">Basic elements</li>
        </ol>
    </div>
</div>

<section class=\"main-content\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"card\">
                ";
        // line 478
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 478, $this->source); })()), 'form_start');
        echo "
                <div class=\"card-header card-default\">
                    Edit Actor ";
        // line 480
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 480, $this->source); })()), "name", [], "any", false, false, false, 480), "vars", [], "any", false, false, false, 480), "value", [], "any", false, false, false, 480), "html", null, true);
        echo "
                </div>


                <div class=\"card-body\">




                    <div class=\"form-group col-md-6\">
                        ";
        // line 490
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 490, $this->source); })()), "name", [], "any", false, false, false, 490), 'errors');
        echo "
                        ";
        // line 491
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 491, $this->source); })()), "name", [], "any", false, false, false, 491), 'label');
        echo "
                        ";
        // line 492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 492, $this->source); })()), "name", [], "any", false, false, false, 492), 'widget', ["attr" => ["class" => ""]]);
        echo "
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label>Birthday</label>
                        <div class=\"input-group m-b\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i></span>
                            <div>
                                ";
        // line 499
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 499, $this->source); })()), "born", [], "any", false, false, false, 499), 'widget');
        echo "

                                ";
        // line 537
        echo "                                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 537, $this->source); })()), "born", [], "any", false, false, false, 537), "setRendered", [], "any", false, false, false, 537);
        // line 538
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group col-md-7\">
                        <label>Description</label>
                        <textarea type=\"text\" class=\"form-control\" style=\"margin-top: 0px; margin-bottom: 0px; height: 253px;\" id=\"";
        // line 544
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "description", [], "any", false, false, false, 544), "vars", [], "any", false, false, false, 544), "id", [], "any", false, false, false, 544), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "description", [], "any", false, false, false, 544), "vars", [], "any", false, false, false, 544), "full_name", [], "any", false, false, false, 544), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "description", [], "any", false, false, false, 544), "vars", [], "any", false, false, false, 544), "value", [], "any", false, false, false, 544), "html", null, true);
        echo " </textarea>
                        ";
        // line 545
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 545, $this->source); })()), "description", [], "any", false, false, false, 545), "setRendered", [], "any", false, false, false, 545);
        // line 546
        echo "                    </div>


                    <div class=\"form-group col-md-6\">


                        <label for=\"";
        // line 552
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 552, $this->source); })()), "image", [], "any", false, false, false, 552), "vars", [], "any", false, false, false, 552), "id", [], "any", false, false, false, 552), "html", null, true);
        echo "\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 552, $this->source); })()), "image", [], "any", false, false, false, 552), 'label');
        echo "</label>




                        <div class=\"fileinput-new\" data-provides=\"fileinput\">
                            <div class=\"fileinput-preview\" data-trigger=\"fileinput\" style=\"width: 200px; height:150px;\"></div>
                            <span class=\"btn btn-primary  btn-file\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileinput-new\">Select</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileinput-exists\">Change</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" id=\"";
        // line 562
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "image", [], "any", false, false, false, 562), "vars", [], "any", false, false, false, 562), "id", [], "any", false, false, false, 562), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "image", [], "any", false, false, false, 562), "vars", [], "any", false, false, false, 562), "full_name", [], "any", false, false, false, 562), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "image", [], "any", false, false, false, 562), "vars", [], "any", false, false, false, 562), "value", [], "any", false, false, false, 562), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</span>
                            <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                            ";
        // line 565
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 565, $this->source); })()), "imageb", [], "any", false, false, false, 565), 'errors');
        echo "
                            ";
        // line 566
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "image", [], "any", false, false, false, 566), "setRendered", [], "any", false, false, false, 566);
        // line 567
        echo "                        </div>
                    </div>

                    <div class=\"form-group col-md-6\">


                        <label for=\"";
        // line 573
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 573, $this->source); })()), "imageb", [], "any", false, false, false, 573), "vars", [], "any", false, false, false, 573), "id", [], "any", false, false, false, 573), "html", null, true);
        echo "\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 573, $this->source); })()), "imageb", [], "any", false, false, false, 573), 'label');
        echo "</label>
                        <div class=\"fileinput-new\" data-provides=\"fileinput\">
                            <div class=\"fileinput-preview\" data-trigger=\"fileinput\" style=\"width: 200px; height:150px;\"></div>
                            <span class=\"btn btn-primary  btn-file\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileinput-new\">Select</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileinput-exists\">Change</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" id=\"";
        // line 579
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 579, $this->source); })()), "imageb", [], "any", false, false, false, 579), "vars", [], "any", false, false, false, 579), "id", [], "any", false, false, false, 579), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 579, $this->source); })()), "imageb", [], "any", false, false, false, 579), "vars", [], "any", false, false, false, 579), "full_name", [], "any", false, false, false, 579), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 579, $this->source); })()), "imageb", [], "any", false, false, false, 579), "vars", [], "any", false, false, false, 579), "value", [], "any", false, false, false, 579), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</span>
                            <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                            ";
        // line 582
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 582, $this->source); })()), "imageb", [], "any", false, false, false, 582), 'errors');
        echo "
                            ";
        // line 583
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 583, $this->source); })()), "imageb", [], "any", false, false, false, 583), "setRendered", [], "any", false, false, false, 583);
        // line 584
        echo "                        </div>
                    </div>


                    <div class=\"d-flex w-100 justify-content-end mr-2\" >
                        <button class=\"btn btn-success btn-rounded box-shadow ml-5\">Update</button>
                    </div>
                    ";
        // line 591
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 591, $this->source); })()), 'form_end');
        echo "


                </div>
            </div>
        </div>
    </div>







    </div>
    </div>


    <footer class=\"footer\">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


</section>
<!-- ============================================================== -->
<!-- \t\t\t\t\t\tContent End\t\t \t\t\t\t\t\t-->
<!-- ============================================================== -->

<!--Common plugins-->
<script src=\"../../assets/lib/jquery/dist/jquery.min.js\"></script>
<script src=\"../../assets/lib/bootstrap/js/popper.min.js\"></script>
<script src=\"../../assets/lib/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"../../assets/lib/pace/pace.min.js\"></script>
<script src=\"../../assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js\"></script>
<script src=\"../../assets/lib/slimscroll/jquery.slimscroll.min.js\"></script>
<script src=\"../../assets/lib/nano-scroll/jquery.nanoscroller.min.js\"></script>
<script src=\"../../assets/lib/metisMenu/metisMenu.min.js\"></script>
<script src=\"../../assets/js/custom.js\"></script>
</body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:43:32 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "factor/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  667 => 591,  658 => 584,  656 => 583,  652 => 582,  642 => 579,  631 => 573,  623 => 567,  621 => 566,  617 => 565,  607 => 562,  592 => 552,  584 => 546,  582 => 545,  574 => 544,  566 => 538,  563 => 537,  558 => 499,  548 => 492,  544 => 491,  540 => 490,  527 => 480,  522 => 478,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:43:32 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>FixedPlus - Bootstrap Admin Dashboard Template</title>

    <!-- Common Plugins -->
    <link href=\"../../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Css-->
    <link href=\"../../assets/scss/style.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<!-- ============================================================== -->
<!-- \t\t\t\t\t\tTopbar Start \t\t\t\t\t\t\t-->
<!-- ============================================================== -->
<div class=\"top-bar primary-top-bar\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <a class=\"admin-logo\" href=\"index.html\">
                    <h1>
                        <img alt=\"\" src=\"../../assets/img/icon.png\" class=\"logo-icon margin-r-10\">
                        <img alt=\"\" src=\"../../assets/img/logo-dark.png\" class=\"toggle-none hidden-xs\">
                    </h1>
                </a>
                <div class=\"left-nav-toggle\" >
                    <a  href=\"#\" class=\"nav-collapse\"><i class=\"fa fa-bars\"></i></a>
                </div>
                <div class=\"left-nav-collapsed\" >
                    <a  href=\"#\" class=\"nav-collapsed\"><i class=\"fa fa-bars\"></i></a>
                </div>
                <div class=\"search-form hidden-xs\">
                    <form>
                        <input class=\"form-control\" placeholder=\"Search for...\" type=\"text\"> <button class=\"btn-search\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </div>
            </div>
            <div class=\"col\">
                <ul class=\"list-inline top-right-nav\">
                    <li class=\"dropdown icons-dropdown d-none-m\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-envelope\"></i> <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div></a>
                        <ul class=\"dropdown-menu top-dropdown lg-dropdown notification-dropdown\">
                            <li>
                                <div class=\"dropdown-header\">
                                    <a class=\"float-right\" href=\"#\"><small>View All</small></a> Messages
                                </div>

                                <div class=\"scrollDiv\">
                                    <div class=\"notification-list\">
                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tJohn Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-3.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tGovindo Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-4.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMegan Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-5.png\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\tHritik Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning float-right\">Support</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown icons-dropdown d-none-m\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-bell\"></i> <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div></a>
                        <ul class=\"dropdown-menu top-dropdown lg-dropdown notification-dropdown\">
                            <li>
                                <div class=\"dropdown-header\">
                                    <a class=\"float-right\" href=\"#\"><small>View All</small></a> Notifications
                                </div>
                                <div class=\"scrollDiv\">
                                    <div class=\"notification-list\">

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">Upload Complete</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-info text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">Storage Space low</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">Project Task Complete</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                        <a class=\"clearfix\" href=\"javascript:%20void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" icon-graph text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"notification-title\">CPU Usage</span>
                                            <span class=\"notification-description\">Lorem Ipsum is simply dummy text of the printing.</span>
                                            <span class=\"notification-time\">15 minutes ago</span>
                                        </a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown d-none-m\">
                        <a class=\"right-sidebar-toggle\" href=\"javascript:%20void(0);\"><i class=\"fa fa-align-right\"></i></a>
                    </li>
                    <li class=\"dropdown avtar-dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"30\">
                            John Doe
                        </a>
                        <ul class=\"dropdown-menu top-dropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-bell\"></i> Activities</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-user\"></i> Profile</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-settings\"></i> Settings</a>
                            </li>
                            <li class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"javascript:%20void(0);\"><i class=\"icon-logout\"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!--                        Topbar End                              -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!--                        Right Side Start                        -->
<!-- ============================================================== -->
<nav class=\"toggle-sidebar\" id=\"right-sidebar-toggle\">
    <div class=\"nano\">
        <div class=\"nano-content\">
            <div>
                <ul class=\"list-inline nav-tab-card clearfix\" role=\"tablist\">

                    <li class=\"active\" role=\"presentation\">
                        <a aria-controls=\"friends\" data-toggle=\"tab\" href=\"#friends\" role=\"tab\">Friends</a>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"friends\" role=\"tabcard\">
                        <ul class=\"list-unstyled sidebar-contact-list\">
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>John Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-1.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Govinda Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-danger circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-3.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Megan Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-4.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Hritik Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-5.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Bianca Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-6.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>John Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-success circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-1.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Govinda Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li class=\"clearfix\">
                                <a class=\"media-box\" href=\"#\"><span class=\"float-right\"><span class=\"circle circle-danger circle-lg\"></span></span> <span class=\"float-left\">
\t\t\t\t\t\t\t\t\t\t <img alt=\"user\" class=\"media-box-object rounded-circle\" src=\"../../assets/img/avtar-2.png\" width=\"50\"></span>
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Megan Doe</strong><br>
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Designer</small></span></span></a>
                            </li>
                            <li>
                                <div class=\" text-center\">
                                    <a class=\"btn btn-teal\" href=\"javascript:void(0);\" title=\"See more contacts\">Load more..</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- ============================================================== -->
<!--                        Right Side End                          -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- \t\t\t\t\t\tNavigation Start \t\t\t\t\t\t-->
<!-- ============================================================== -->
<div class=\"main-sidebar-nav default-navigation\">
    <div class=\"nano\">
        <div class=\"nano-content sidebar-nav\">

            <div class=\"card-body border-bottom text-center nav-profile\">
                <div class=\"notify setpos\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
                <img alt=\"profile\" class=\"margin-b-10  \" src=\"../../assets/img/avtar-2.png\" width=\"80\">
                <p class=\"lead margin-b-0 toggle-none\">John Doe</p>
                <p class=\"text-muted mv-0 toggle-none\">Welcome</p>
            </div>

            <ul class=\"metisMenu nav flex-column\" id=\"menu\">
                <li class=\"nav-heading\"><span>MAIN</span></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"index.html\"><i class=\"fa fa-home\"></i> <span class=\"toggle-none\">Dashboard <span class=\"badge badge-pill badge-danger float-right mr-2\">1.0</span></span></a></li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-th-large\"></i> <span class=\"toggle-none\">Widgets <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column \" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"widgets-apps.html\">Widgets Apps</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"widgets-data.html\">Widgets Data</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-codepen\"></i> <span class=\"toggle-none\">Apps <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-calendar.html\">Calendar</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-chat.html\">Chat App</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-ticket.html\">Support Ticket</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-contact.html\">Contact Grid</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"app-contact-detail.html\">Contact Detail</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-envelope-open\"></i> <span class=\"toggle-none\">Inbox<span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-index.html\">Inbox</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-view.html\">Inbox view</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"mail-compose.html\">Compose</a></li>
                    </ul>
                </li>
                <li class=\"nav-heading\"><span>FORMS, TABLE & LAYOUTS</span></li>

                <li class=\"nav-item\">
                    <a  class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-cogs\"></i> <span class=\"toggle-none\">UI elements <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-jquery-elements.html\">Jquery UI</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-bootstrap-elements.html\">Bootstrap UI</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-typography.html\">Typography</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-icons.html\">Icons</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-buttons.html\">Buttons</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-cards.html\">Cards</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-tabs.html\">Tabs</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-card-master.html\">Card Master</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-tip-pop.html\">Tooltip & Popovers</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-sweetalerts.html\">Sweet Alters</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-alertify.html\">Alertify Alters</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-modals.html\">Modals</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-notification.html\">Notification</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-progress.html\">Progress</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-grid.html\">Grid System</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-carousel.html\">Carousel</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-range-slider.html\">Range Slider</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-nestable.html\">Nestable</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-treeview.html\">Tree View</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ui-draggable-cards.html\">Draggable Cards</a></li>
                    </ul>
                </li>
                <li class=\"nav-item  active\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-file\"></i> <span class=\"toggle-none\">Forms <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-basic.html\">Basic Elements</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-validations.html\">Form Validations</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-masks.html\">Form Masks</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-picker.html\">Form Picker</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-editor.html\">Text Editor</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-file-upload.html\">File upload</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"form-wizard.html\">Form Wizard</a></li>
                    </ul>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-table\"></i> <span class=\"toggle-none\">Tables <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"table-basic.html\">Basic Tables</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"table-data.html\">Data Tables</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"table-js-grid.html\">JsGrid Tables</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"table-foo.html\">Foo Tables</a></li>
                    </ul>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-bar-chart\"></i> <span class=\"toggle-none\">Charts <span class=\"fa arrow\"></span>  <span class=\"badge badge-pill badge-success float-right mr-2\">7</span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-flot.html\">Flot</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-morris.html\">Morris</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-radial.html\">Radial</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-c3.html\">C3</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-sparkline.html\">Sparkline</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-rickshaw.html\">Rickshaw</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"chart-chartjs.html\">ChartJs</a></li>
                    </ul>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-map-marker\"></i> <span class=\"toggle-none\">Maps <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"map-vector.html\">Vector map</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"map-google.html\">Google map</a></li>
                    </ul>
                </li>

                <li class=\"nav-heading\"><span>EXAMPLES</span></li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"toggle-none\">E-Commerce <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-add.html\">Add Product</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-products.html\">All Products</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"ecommerce-orders.html\">Orders</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-briefcase\"></i> <span class=\"toggle-none\">Corporate <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"corporate-add.html\">Add Pages</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"corporate-pages.html\">All Pages</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\"  href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-fire\"></i> <span class=\"toggle-none\">Ajax & Php<span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"examples-add-and-update.html\">Add and Update With Php</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"examples-delete.html\">Delete With Php</a></li>
                    </ul>
                </li>

                <li class=\"nav-heading\"><span>OTHERS</span></li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-folder\"></i> <span class=\"toggle-none\">Sample Pages <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-blank.html\">Blank Page</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-login.html\">Login</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-register.html\">Register</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-forget-password.html\">Forget Password</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-lockscreen.html\">Lock-screen</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-404.html\">404</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-gallery.html\">Gallery</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-timeline.html\">Timeline</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-invoice.html\">Invoice</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-profile.html\">Profile</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-faqs.html\">Faqs</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"page-pricing.html\">Pricing</a></li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-folder-open\"></i> <span class=\"toggle-none\">Multi Level<span class=\"fa arrow \"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 1</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\"href=\"javascript: void(0);\" aria-expanded=\"false\">Level 2 <span class=\"fa arrow\"></span></a>
                            <ul class=\"nav-third-level nav flex-column sub-menu\" aria-expanded=\"false\">
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 2</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"javascript: void(0);\">Level 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- \t\t\t\t\t\tNavigation End\t \t\t\t\t\t\t-->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- \t\t\t\t\t\tContent Start\t \t\t\t\t\t\t-->
<!-- ============================================================== -->

<div class=\"row page-header\">
    <div class=\"col-lg-6 align-self-center \">
        <h2>Basic elements</h2>
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Form</a></li>
            <li class=\"breadcrumb-item active\">Basic elements</li>
        </ol>
    </div>
</div>

<section class=\"main-content\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"card\">
                {{ form_start(form) }}
                <div class=\"card-header card-default\">
                    Edit Actor {{ form.name.vars.value }}
                </div>


                <div class=\"card-body\">




                    <div class=\"form-group col-md-6\">
                        {{ form_errors(form.name) }}
                        {{ form_label(form.name) }}
                        {{ form_widget(form.name, {'attr': {'class': ''}}) }}
                    </div>
                    <div class=\"form-group col-md-6\">
                        <label>Birthday</label>
                        <div class=\"input-group m-b\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i></span>
                            <div>
                                {{ form_widget(form.born) }}

                                {#  <div>
                                    <div id=\"factor_born\" class=\"\">
                                        <select id=\"factor_born_month\" name=\"factor[born][month]\">
                                            <option value=\"1\"{% if(form.born.vars.value.day== 1 ) %} selected=\"selected\" {% endif %}>Jan</option>
                                            <option value=\"2\"{% if(form.born.vars.value.day== 2 ) %} selected=\"selected\" {% endif %}>Feb</option>
                                            <option value=\"3\"{% if(form.born.vars.value.day== 3 ) %} selected=\"selected\" {% endif %}>Mar</option>
                                            <option value=\"4\"{% if(form.born.vars.value.day== 4 ) %} selected=\"selected\" {% endif %}>Apr</option>
                                            <option value=\"5\"{% if(form.born.vars.value.day== 5 ) %} selected=\"selected\" {% endif %}>May</option>
                                            <option value=\"6\"{% if(form.born.vars.value.day== 6 ) %} selected=\"selected\" {% endif %}>Jun</option>
                                            <option value=\"7\"{% if(form.born.vars.value.day== 7 ) %} selected=\"selected\" {% endif %}>Jul</option>
                                            <option value=\"8\"{% if(form.born.vars.value.day== 8 ) %} selected=\"selected\" {% endif %}>Aug</option>
                                            <option value=\"9\"{% if(form.born.vars.value.day== 9 ) %} selected=\"selected\" {% endif %}>Sep</option>
                                            <option value=\"10\"{% if(form.born.vars.value.day== 10 ) %} selected=\"selected\" {% endif %}>Oct</option>
                                            <option value=\"11\"{% if(form.born.vars.value.day== 11 ) %} selected=\"selected\" {% endif %}>Nov</option>
                                            <option value=\"12\"{% if(form.born.vars.value.day== 12 ) %} selected=\"selected\" {% endif %}>Dec</option>
                                        </select>
                                        <select id=\"factor_born_day\" name=\"factor[born][day]\" value=\"{{ form.born.vars.value.day }}\">
                                            {% for i in 1..31 %}
                                                <option value=\"{{ i }}\" {% if(form.born.vars.value.day== i ) %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                            {% endfor %}
                                            </select>
                                        <select id=\"factor_born_year\" name=\"factor[born][year]\">
                                            {% for i in 1950..2010 %}
                                                <option value=\"{{ i }}\" {% if(form.born.vars.value.year== i ) %} selected=\"selected\" {% endif %}>{{ i }}</option>
                                            {% endfor %}

                                        </select>
                                    </div>
                                    <!--
                                       <input type=\"date\" id=\"factor_born\" name=\"form[born]\" />
                                        -->
                                </div>
                                <!--
                                <input type=\"date\" id=\"factor_born\" name=\"form[born]\" />
                                 -->
                                #}
                                {% do form.born.setRendered %}

                            </div>
                        </div>
                    </div>
                    <div class=\"form-group col-md-7\">
                        <label>Description</label>
                        <textarea type=\"text\" class=\"form-control\" style=\"margin-top: 0px; margin-bottom: 0px; height: 253px;\" id=\"{{ form.description.vars.id }}\" name=\"{{ form.description.vars.full_name }}\">{{ form.description.vars.value }} </textarea>
                        {% do form.description.setRendered %}
                    </div>


                    <div class=\"form-group col-md-6\">


                        <label for=\"{{ form.image.vars.id }}\">{{ form_label(form.image) }}</label>




                        <div class=\"fileinput-new\" data-provides=\"fileinput\">
                            <div class=\"fileinput-preview\" data-trigger=\"fileinput\" style=\"width: 200px; height:150px;\"></div>
                            <span class=\"btn btn-primary  btn-file\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileinput-new\">Select</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileinput-exists\">Change</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" id=\"{{ form.image.vars.id }}\" name=\"{{ form.image.vars.full_name }}\" value=\"{{ form.image.vars.value }}\">
\t\t\t\t\t\t\t\t\t\t\t</span>
                            <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                            {{ form_errors(form.imageb) }}
                            {% do form.image.setRendered %}
                        </div>
                    </div>

                    <div class=\"form-group col-md-6\">


                        <label for=\"{{ form.imageb.vars.id }}\">{{ form_label(form.imageb) }}</label>
                        <div class=\"fileinput-new\" data-provides=\"fileinput\">
                            <div class=\"fileinput-preview\" data-trigger=\"fileinput\" style=\"width: 200px; height:150px;\"></div>
                            <span class=\"btn btn-primary  btn-file\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileinput-new\">Select</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fileinput-exists\">Change</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" id=\"{{ form.imageb.vars.id }}\" name=\"{{ form.imageb.vars.full_name }}\" value=\"{{ form.imageb.vars.value }}\">
\t\t\t\t\t\t\t\t\t\t\t</span>
                            <a href=\"#\" class=\"btn btn-danger fileinput-exists\" data-dismiss=\"fileinput\">Remove</a>
                            {{ form_errors(form.imageb) }}
                            {% do form.imageb.setRendered %}
                        </div>
                    </div>


                    <div class=\"d-flex w-100 justify-content-end mr-2\" >
                        <button class=\"btn btn-success btn-rounded box-shadow ml-5\">Update</button>
                    </div>
                    {{ form_end(form) }}


                </div>
            </div>
        </div>
    </div>







    </div>
    </div>


    <footer class=\"footer\">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


</section>
<!-- ============================================================== -->
<!-- \t\t\t\t\t\tContent End\t\t \t\t\t\t\t\t-->
<!-- ============================================================== -->

<!--Common plugins-->
<script src=\"../../assets/lib/jquery/dist/jquery.min.js\"></script>
<script src=\"../../assets/lib/bootstrap/js/popper.min.js\"></script>
<script src=\"../../assets/lib/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"../../assets/lib/pace/pace.min.js\"></script>
<script src=\"../../assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js\"></script>
<script src=\"../../assets/lib/slimscroll/jquery.slimscroll.min.js\"></script>
<script src=\"../../assets/lib/nano-scroll/jquery.nanoscroller.min.js\"></script>
<script src=\"../../assets/lib/metisMenu/metisMenu.min.js\"></script>
<script src=\"../../assets/js/custom.js\"></script>
</body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:43:32 GMT -->
</html>", "factor/edit.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\templates\\factor\\edit.html.twig");
    }
}
