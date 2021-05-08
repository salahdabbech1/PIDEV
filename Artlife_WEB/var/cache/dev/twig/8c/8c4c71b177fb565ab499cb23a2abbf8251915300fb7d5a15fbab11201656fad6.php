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
class __TwigTemplate_c232a2c09123861414f9b4566d96dab196ea488d66fdc4bbbb8d38a805a88b7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Aziz Allouche</strong><br>
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
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Aziz Allouche</strong><br>
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
                <img alt=\"profile\" class=\"margin-b-10  \" src=\"../../assets/img/myface.png\" width=\"80\">
                <p class=\"lead margin-b-0 toggle-none\">Aziz Allouche</p>
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
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"../musician/index.html.twig\"> Gestion des musicians</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"../concert/index.html.twig\">Gestion des concerts</a></li>

                    </ul>
                </li>

                <li class=\"nav-item  active\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-table\"></i> <span class=\"toggle-none\">Tables <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"../musician\"> Gestion des musicians</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"../concert\">Gestion des concerts</a></li>
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
";
        // line 294
        $this->displayBlock('body', $context, $blocks);
        // line 373
        echo "<!-- ============================================================== -->
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

    // line 294
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 295
        echo "<section class=\"main-content\">

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
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 327, $this->source); })()));
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
            // line 328
            echo "                            <tr>
                                <td>";
            // line 329
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 329), "html", null, true);
            echo "</td>
                                <td>
                                    <img alt=\"user\" width=\"50\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content";
            // line 331
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "image", [], "any", false, false, false, 331), "html", null, true);
            echo "\" style=\"max-height: 50px;\" width=\"30\">
                                    ";
            // line 332
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "name", [], "any", false, false, false, 332), "html", null, true);
            echo "
                                </td>
                                <td>";
            // line 334
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "trailer", [], "any", false, false, false, 334), "html", null, true);
            echo "</td>
                                <td>";
            // line 335
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "genre", [], "any", false, false, false, 335), "html", null, true);
            echo "</td>
                                <td>";
            // line 336
            ((twig_get_attribute($this->env, $this->source, $context["film"], "rdate", [], "any", false, false, false, 336)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "rdate", [], "any", false, false, false, 336), "Y/M/d"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 337
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "director", [], "any", false, false, false, 337), "html", null, true);
            echo "</td>
                                <td>";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "description", [], "any", false, false, false, 338), "html", null, true);
            echo "</td>

                                <td>
                                    <img alt=\"user\" width=\"100\" class=\"media-box-object rounded-circle mr-2\" src=\"../../wp-content";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "imageb", [], "any", false, false, false, 341), "html", null, true);
            echo "\" style=\"max-height: 75px;\" width=\"30\">
                                </td>
                                <td class=\"text-center\">
                                    <a href=\"";
            // line 344
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 344)]), "html", null, true);
            echo " \" class=\"btn btn-sm btn-success\"><i class=\"fa fa-pencil-square\"></i></a>
                                    ";
            // line 345
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
        // line 349
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "film/indexAdmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  507 => 349,  489 => 345,  485 => 344,  479 => 341,  473 => 338,  469 => 337,  465 => 336,  461 => 335,  457 => 334,  452 => 332,  448 => 331,  443 => 329,  440 => 328,  423 => 327,  389 => 295,  379 => 294,  341 => 373,  339 => 294,  44 => 1,);
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
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Aziz Allouche</strong><br>
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
                                    <span class=\"media-box-body\"><span class=\"media-box-heading\"><strong>Aziz Allouche</strong><br>
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
                <img alt=\"profile\" class=\"margin-b-10  \" src=\"../../assets/img/myface.png\" width=\"80\">
                <p class=\"lead margin-b-0 toggle-none\">Aziz Allouche</p>
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
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"../musician/index.html.twig\"> Gestion des musicians</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"../concert/index.html.twig\">Gestion des concerts</a></li>

                    </ul>
                </li>

                <li class=\"nav-item  active\">
                    <a class=\"nav-link\" href=\"javascript: void(0);\" aria-expanded=\"false\"><i class=\"fa fa-table\"></i> <span class=\"toggle-none\">Tables <span class=\"fa arrow\"></span></span></a>
                    <ul class=\"nav-second-level nav flex-column sub-menu\" aria-expanded=\"false\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"../musician\"> Gestion des musicians</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"../concert\">Gestion des concerts</a></li>
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
{% block body %}
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
{% endblock %}
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
</html>", "film/indexAdmin.html.twig", "C:\\Users\\HP\\Downloads\\ArtLife\\templates\\film\\indexAdmin.html.twig");
    }
}
