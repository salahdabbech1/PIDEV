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

/* film/indexAdmin.html.twig */
class __TwigTemplate_ce31de733245991384482e890f4596d1be6b213723979fdf3ee52af8e52297ca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/indexAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/indexAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/table-foo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:42:12 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>FixedPlus - Bootstrap Admin Dashboard Template</title>

    <!-- Common Plugins -->
    <link href=\"../../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Foo Table -->
    <link href=\"../../assets/lib/footable/footable.core.css\" rel=\"stylesheet\">

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
                <li class=\"nav-item\">
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

                <li class=\"nav-item  active\">
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

<div class=\"row page-header\"><div class=\"col-lg-6 align-self-center \">
        <h2>Film Tables</h2>
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Tables</a></li>
            <li class=\"breadcrumb-item active\">Film Tables</li>
        </ol></div></div>

<section class=\"main-content\">

    <div class=\"row\">

        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-default\">
                    Films
                </div>
                <a href=\"admin/new\" class=\"btn btn-primary btn-rounded box-shadow col-md-3\" style=\"
\t\t\t\t\tposition: relative;
\t\t\t\t\tleft: 900px;
\t\t\t\t\">Add Film</a>
                <div class=\"card-body\">
                    <input type=\"text\" class=\"form-control margin-b-10 input-sm col-md-4\" id=\"filter\"
                           placeholder=\"Search in table\">

                    <table class=\"footable table table-hover\" data-page-size=\"12\" data-filter=#filter>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th data-hide=\"phone,tablet\">Trailer</th>
                            <th data-hide=\"phone,tablet\">Genre</th>
                            <th data-hide=\"phone,tablet\">Release Date</th>
                            <th data-hide=\"phone,tablet\">Director</th>
                            <th data-hide=\"phone,tablet\">Description</th>
                            <th data-hide=\"phone,tablet\">Background</th>
                            <th data-hide=\"phone,tablet\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 506
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 506, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 507
            echo "                            <tr>
                                <td>";
            // line 508
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 508), "html", null, true);
            echo "</td>
                                <td>
                                    <img alt=\"user\" width=\"50\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content";
            // line 510
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "image", [], "any", false, false, false, 510), "html", null, true);
            echo "\" style=\"max-height: 50px;\" width=\"30\">
                                    ";
            // line 511
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "name", [], "any", false, false, false, 511), "html", null, true);
            echo "
                                </td>
                                <td>";
            // line 513
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "trailer", [], "any", false, false, false, 513), "html", null, true);
            echo "</td>
                                <td>";
            // line 514
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "genre", [], "any", false, false, false, 514), "html", null, true);
            echo "</td>
                                <td>";
            // line 515
            ((twig_get_attribute($this->env, $this->source, $context["film"], "rdate", [], "any", false, false, false, 515)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "rdate", [], "any", false, false, false, 515), "Y/M/d"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 516
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "director", [], "any", false, false, false, 516), "html", null, true);
            echo "</td>
                                <td>";
            // line 517
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "description", [], "any", false, false, false, 517), "html", null, true);
            echo "</td>

                                <td>
                                    <img alt=\"user\" width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content";
            // line 520
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "imageb", [], "any", false, false, false, 520), "html", null, true);
            echo "\" style=\"max-height: 75px;\" width=\"30\">
                                </td>
                                <td class=\"text-center\">
                                    <a href=\"";
            // line 523
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 523)]), "html", null, true);
            echo " \" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                                    ";
            // line 524
            echo twig_include($this->env, $context, "film/_delete_form.html.twig");
            echo "
                                </td>
                            </tr>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 528
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan=\"5\">
                                <ul class=\"pagination float-right\"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>



    <footer class=\"footer\">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


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
    \$(document).ready(function() {
        \$('.footable').footable();
        \$('.footable2').footable();
    });
</script>
</body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/table-foo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:42:38 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "film/indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 528,  616 => 524,  612 => 523,  606 => 520,  600 => 517,  596 => 516,  592 => 515,  588 => 514,  584 => 513,  579 => 511,  575 => 510,  570 => 508,  567 => 507,  550 => 506,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/table-foo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:42:12 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>FixedPlus - Bootstrap Admin Dashboard Template</title>

    <!-- Common Plugins -->
    <link href=\"../../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Foo Table -->
    <link href=\"../../assets/lib/footable/footable.core.css\" rel=\"stylesheet\">

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
                <li class=\"nav-item\">
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

                <li class=\"nav-item  active\">
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

<div class=\"row page-header\"><div class=\"col-lg-6 align-self-center \">
        <h2>Film Tables</h2>
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Tables</a></li>
            <li class=\"breadcrumb-item active\">Film Tables</li>
        </ol></div></div>

<section class=\"main-content\">

    <div class=\"row\">

        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header card-default\">
                    Films
                </div>
                <a href=\"admin/new\" class=\"btn btn-primary btn-rounded box-shadow col-md-3\" style=\"
\t\t\t\t\tposition: relative;
\t\t\t\t\tleft: 900px;
\t\t\t\t\">Add Film</a>
                <div class=\"card-body\">
                    <input type=\"text\" class=\"form-control margin-b-10 input-sm col-md-4\" id=\"filter\"
                           placeholder=\"Search in table\">

                    <table class=\"footable table table-hover\" data-page-size=\"12\" data-filter=#filter>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th data-hide=\"phone,tablet\">Trailer</th>
                            <th data-hide=\"phone,tablet\">Genre</th>
                            <th data-hide=\"phone,tablet\">Release Date</th>
                            <th data-hide=\"phone,tablet\">Director</th>
                            <th data-hide=\"phone,tablet\">Description</th>
                            <th data-hide=\"phone,tablet\">Background</th>
                            <th data-hide=\"phone,tablet\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for film in films %}
                            <tr>
                                <td>{{ film.id }}</td>
                                <td>
                                    <img alt=\"user\" width=\"50\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content{{ film.image }}\" style=\"max-height: 50px;\" width=\"30\">
                                    {{ film.name }}
                                </td>
                                <td>{{ film.trailer }}</td>
                                <td>{{ film.genre }}</td>
                                <td>{{ film.rdate ? film.rdate|date('Y/M/d') : '' }}</td>
                                <td>{{ film.director }}</td>
                                <td>{{ film.description }}</td>

                                <td>
                                    <img alt=\"user\" width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content{{ film.imageb }}\" style=\"max-height: 75px;\" width=\"30\">
                                </td>
                                <td class=\"text-center\">
                                    <a href=\"{{ path('film_edit', {'id': film.id}) }} \" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                                    {{ include('film/_delete_form.html.twig') }}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan=\"5\">
                                <ul class=\"pagination float-right\"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>



    <footer class=\"footer\">
        <span>Copyright &copy; 2018 FixedPlus</span>
    </footer>


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
    \$(document).ready(function() {
        \$('.footable').footable();
        \$('.footable2').footable();
    });
</script>
</body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-5/table-foo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Apr 2021 17:42:38 GMT -->
</html>", "film/indexAdmin.html.twig", "C:\\Users\\ahmed\\Downloads\\ArtLife\\templates\\film\\indexAdmin.html.twig");
    }
}
