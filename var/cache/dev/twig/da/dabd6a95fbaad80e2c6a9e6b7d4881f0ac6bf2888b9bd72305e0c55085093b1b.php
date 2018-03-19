<?php

/* KEURGUIimmoBundle:front:proprietaire.html.twig */
class __TwigTemplate_3d7c6d044be6b901bbda99878a13704856e222a7ae9e1fff0f22d3201e5f467e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8740fd7362f599b729865cac6416901c288ae4077642af49b72cf204e8c14905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8740fd7362f599b729865cac6416901c288ae4077642af49b72cf204e8c14905->enter($__internal_8740fd7362f599b729865cac6416901c288ae4077642af49b72cf204e8c14905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:proprietaire.html.twig"));

        $__internal_10bbad25f781c5341ddc7454364b6b94aed66a161ce81eb4fca99f0fe919d9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bbad25f781c5341ddc7454364b6b94aed66a161ce81eb4fca99f0fe919d9f7->enter($__internal_10bbad25f781c5341ddc7454364b6b94aed66a161ce81eb4fca99f0fe919d9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:proprietaire.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
  <head>
        <meta charset=\"utf-8\" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
         <!-- DataTables -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Plugins css-->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/tagsinput/jquery.tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/toggles/toggles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/timepicker/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/colorpicker/colorpicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/jquery-multi-select/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <link rel=\"shortcut icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/images/favicon_1.ico"), "html", null, true);
        echo "\">

        <!-- Dropzone css -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>
                  <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">
       


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>



    <body class=\"fixed-left\">
        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">John Doe <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul>
                            <li>
                                <a href=\"index.html\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                    <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                    <li><a href=\"mail-read.html\">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-panels.html\">Panels</a></li>
                                    <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-notification.html\">Notification</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"components-grid.html\">Grid</a></li>
                                    <li><a href=\"components-portlets.html\">Portlets</a></li>
                                    <li><a href=\"components-widgets.html\">Widgets</a></li>
                                    <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                    <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                    <li><a href=\"components-gallery.html\">Gallery </a></li>
                                    <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-elements.html\">General Elements</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>
                                    <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                    <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                    <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                    <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                    <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                    <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                    <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                    <li><a href=\"charts-other.html\">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-profile.html\">Profile</a></li>
                                    <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                    <li><a href=\"pages-email-template.html\">Email template</a></li>
                                    <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                    <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                    <li><a href=\"pages-404.html\">404 Error</a></li>
                                    <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                    <li><a href=\"pages-500.html\">500 Error</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul>
                                    <li class=\"has_sub\">
                                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul style=\"\">
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\"></h4>


                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li><a href=\"#\">Forms</a></li>
                                    <li class=\"active\">File Upload</li>
                                </ol>
                            </div>
                        </div>

                      
                             <div class=\"panel panel-default formAjoutBien\">
                            <div class=\"panel-heading\"><h3 class=\"panel-title\">Proprietaire</h3></div>

                            <div class=\"panel-body\">
                                <form action=\"#\" class=\"form-horizontal\" method=\"post\" id=\"addP\">
                                <h4>information proprietaire </h4>
                                 <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Numero de piece</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"numPiece\" type=\"text\" id=\"numPiece\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Nom Complet</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"nomComplet\" type=\"text\" id=\"nomComplet\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Adesse</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"adresse\" type=\"text\" id=\"adresse\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Numero de telephone</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"tel\" type=\"number\" id=\"tel\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">E mail</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"email\" type=\"email\" id=\"email\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                    
                                    
                                    
                                    
                                   <h4>informations du bien</h4>
                                   <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">libelet</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"nom\" type=\"text\" id=\"nom\" class=\"select2 form-control\"/>
                                            
                                        </div>
                                    </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Prix</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"prix\" type=\"text\" id=\"prix\" class=\"select2 form-control\"/>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Localites</label>
                                        <div class=\"col-sm-9\">
                                            <select class=\"select2 form-control sL\" data-placeholder=\"Choose a Country...\" id='localite' name=\"localite\">
                                              <option value=\"#\">&nbsp;</option>
                                             
                                            
                             
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Types</label>
                                        <div class=\"col-sm-9\">
                                            <select class=\"select2 form-control sT\" data-placeholder=\"Choose a Country...\" id='type' name=\"type\">
                                              <option value=\"#\">&nbsp;</option>
                                             
                                            
                                            
                                            </select>
                                            
                                        </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Photos</label>
                                        <div class=\"col-sm-9\">
                                           
                                      <label class=\"btn btn-default btn-file\">
                                         ajouter 4 photos du bien <input name=\"files[]\" type=\"file\" id=\"files\" multiple=\"multiple\"/>
                                     </label>
                                            
                                        </div>
                                    </div>
                                      <div class=\"form-group\">
                                                    <label for=\"ccomment\" class=\"col-sm-3 control-label\">Description</label>
                                                    <div class=\"col-sm-9\">
                                                        <textarea class=\"form-control\" id=\"des\" name=\"description\" required=\"\" aria-required=\"true\"></textarea>
                                                    </div>
                                                </div>
                       
                                                     <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-3 col-lg-10\">
                                                        <input class=\"btn btn-success \" id=\"submit1\" type=\"submit\" value=\"enregistrer\" />
                                                        <button class=\"btn btn-default waves-effect\" type=\"reset\">Annuler</button>
                                                    </div>
                                                </div>
                                            </form>
                             
                                

                        <!-- end row -->


            </div> <!-- container -->
                               
                </div> <!-- content -->
 
                                      

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

       
        <script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/toggles/toggles.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/colorpicker/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/jquery-multi-select/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/jquery-multi-select/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>


        <!-- Datatable init js -->
        <script src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

       <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
       <script src=\"jquery.multifile.js\"></script>

\t
\t</body>
</html>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                loc('";
        // line 669
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("selectLocalite");
        echo "',\"sL\")
                 loc('";
        // line 670
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("selectType");
        echo "',\"sT\")
                \$('.LocaliteEtType').hide()
                   \$(\".registerType\").hide()
                    \$(\".registerLocalite\").hide()
                      \$(\".retour\").hide()
                   
                    \$(\"#addlocalite\").hide()
                       \$(\"#addtype\").hide()
                \$(\".add\").on(\"click\",function(){
                    \$(\".formAjoutBien\").hide()
                       \$('.LocaliteEtType').show()
                    \$(this).hide()
                       \$(\".retour\").show()
                   
                })
                function loc(path,clas){
                 \$.ajax({
                      type: 'POST',
                        url: path,
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(data) {
                   
                            \$.each(data,function(){
                             \$(\".\"+clas).append(\"<option value=\"+this.id+\">\"+this.nom+\"</option>\")
                            \$(\"#\"+clas).append(\"<tr><td>\"+this.id+\"</td><td>\"+this.nom+\"</td></tr>\")

                            })
                        }
        }) 
        }
   
     
  

                 \$(\".retour\").on(\"click\",function(){
                       \$(this).hide()
                         \$(\".formAjoutBien\").show()
                             \$('.LocaliteEtType').hide()
                              \$(\".add\").show()
             
  })
           
\$(\".addType\").on(\"click\",function(){
    \$(this).hide()
    \$(\".registerType\").show()
      \$(\"#addtype\").show()
})

    \$(\".addLocalite\").on(\"click\",function(){
    \$(this).hide()
    \$(\".registerLocalite\").show()
      \$(\"#addlocalite\").show()
})  

    \$(\".registerLocalite\").on(\"click\",function(e){

         var formData = \$(\"#inlocalite\").val()

        e.preventDefault();
 
        \$.ajax({
           type: \"POST\",
            url: \"";
        // line 733
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formLocalite");
        echo "\",
            data:{\"nom\":formData},
            dataType:\"Json\"
        })
        .done(function (data) {
             \$.ajax({
                      type: 'POST',
                        url: '";
        // line 740
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("selectLocalite");
        echo "',
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(data) {
                   
                            \$.each(data,function(){
                                      \$(\".sL\").html(\"<option value=\"+this.id+\">\"+this.nom+\"</option>\")
                            })
                        }
        }) 
        })
  

           })
              \$(\".registerType\").on(\"click\",function(e){

         var formData = \$(\"#intype\").val()

        e.preventDefault();
 
        \$.ajax({
           type: \"POST\",
            url: \"";
        // line 762
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formType");
        echo "\",
            data:{\"nom\":formData},
            dataType:\"Json\"
        })
        .done(function (data) {
             \$.ajax({
                      type: 'POST',
                        url: '";
        // line 769
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("selectType");
        echo "',
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(data) {
                   
                            \$.each(data,function(){
                                      \$(\".sT\").html(\"<option value=\"+this.id+\">\"+this.nom+\"</option>\")
                            })
                        }
        }) 
        })
  

           })



\$(\"#addP\").on(\"submit\",function(e){
   var files=  \$('#files')[0].files;
         var formData = new FormData(\$(this)[0]);

        e.preventDefault();
 
        \$.ajax({
           type: \"POST\",
            url: \"";
        // line 794
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addP");
        echo "\",
            data: formData,
      
            mimeTypes:\"multipart/form-data\",
            contentType: false,
            cache: false,
            processData: false,
        })
        .done(function (data) {
            window.location.href = '";
        // line 803
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validArchive");
        echo "'
            if (typeof data.message !== 'undefined') {
                alert(data.message);
            }


        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (typeof jqXHR.responseJSON !== 'undefined') {
                if (jqXHR.responseJSON.hasOwnProperty('form')) {
                    \$('#form_body').html(jqXHR.responseJSON.form);
                }
 
                \$('.form_error').html(jqXHR.responseJSON.message);
 
            } else {
                alert(errorThrown);
            }
 
        });
    

     

  

   
  

           })   
           \$('input').on(\"keypress\", function(e) {
          if (e.keyCode == 13) {
                /* FOCUS ELEMENT */
                var inputs = \$(this).parents(\"form\").eq(0).find(\":input\");
                var idx = inputs.index(this);

                if (idx == inputs.length - 1) {
                    inputs[0].select()
                } else {
                    inputs[idx + 1].focus(); //  handles submit buttons
                    inputs[idx + 1].select();
                }
                return false;
            }
        });   
             
         
            })
              jQuery(document).ready(function() {

                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});

                // Form Toggles
                jQuery('.toggle').toggles({on: true});

                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
                //colorpicker start

                \$('.colorpicker-default').colorpicker({
                    format: 'hex'
                });
                \$('.colorpicker-rgba').colorpicker();


                //multiselect start

                \$('#my_multi_select1').multiSelect();
                \$('#my_multi_select2').multiSelect({
                    selectableOptgroup: true
                });

                \$('#my_multi_select3').multiSelect({
                    selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
                    selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
                    afterInit: function (ms) {
                        var that = this,
                            \$selectableSearch = that.\$selectableUl.prev(),
                            \$selectionSearch = that.\$selectionUl.prev(),
                            selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.\$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.\$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });



                // Select2
                jQuery(\".select2\").select2({
                    width: '100%'
                });

                //Bootstrap-TouchSpin
                \$(\".vertical-spin\").TouchSpin({
                    verticalbuttons: true,
                    verticalupclass: 'ion-plus-round',
                    verticaldownclass: 'ion-minus-round'
                });
                var vspinTrue = \$(\".vertical-spin\").TouchSpin({
                    verticalbuttons: true
                });
                if (vspinTrue) {
                    \$('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                }

                \$(\"input[name='demo1']\").TouchSpin({
                    min: 0,
                    max: 100,
                    step: 0.1,
                    decimals: 2,
                    boostat: 5,
                    maxboostedstep: 10,
                    postfix: '%'
                });
                \$(\"input[name='demo2']\").TouchSpin({
                    min: -1000000000,
                    max: 1000000000,
                    stepinterval: 50,
                    maxboostedstep: 10000000,
                    prefix: '\$'
                });
                \$(\"input[name='demo3']\").TouchSpin();
                \$(\"input[name='demo3_21']\").TouchSpin({
                    initval: 40
                });
                \$(\"input[name='demo3_22']\").TouchSpin({
                    initval: 40
                });

                \$(\"input[name='demo0']\").TouchSpin({});
            });
         
        </script>
        <style>
        .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
        </style>";
        
        $__internal_8740fd7362f599b729865cac6416901c288ae4077642af49b72cf204e8c14905->leave($__internal_8740fd7362f599b729865cac6416901c288ae4077642af49b72cf204e8c14905_prof);

        
        $__internal_10bbad25f781c5341ddc7454364b6b94aed66a161ce81eb4fca99f0fe919d9f7->leave($__internal_10bbad25f781c5341ddc7454364b6b94aed66a161ce81eb4fca99f0fe919d9f7_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:proprietaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1036 => 803,  1024 => 794,  996 => 769,  986 => 762,  961 => 740,  951 => 733,  885 => 670,  881 => 669,  868 => 659,  861 => 655,  855 => 652,  851 => 651,  847 => 650,  843 => 649,  839 => 648,  835 => 647,  831 => 646,  827 => 645,  823 => 644,  818 => 642,  814 => 641,  810 => 640,  806 => 639,  802 => 638,  798 => 637,  794 => 636,  790 => 635,  786 => 634,  782 => 633,  778 => 632,  774 => 631,  770 => 630,  766 => 629,  762 => 628,  758 => 627,  752 => 624,  748 => 623,  744 => 622,  740 => 621,  736 => 620,  732 => 619,  728 => 618,  724 => 617,  720 => 616,  716 => 615,  139 => 41,  135 => 40,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  101 => 30,  95 => 27,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
  <head>
        <meta charset=\"utf-8\" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
         <!-- DataTables -->
        <link href=\"{{asset('assets1/plugins/datatables/jquery.dataTables.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('assets1/plugins/datatables/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('assets1/plugins/datatables/fixedHeader.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('assets1/plugins/datatables/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('assets1/plugins/datatables/scroller.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Plugins css-->
        <link href=\"{{asset('assets1/plugins/tagsinput/jquery.tagsinput.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets1/plugins/toggles/toggles.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets1/plugins/timepicker/bootstrap-timepicker.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets1/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets1/plugins/colorpicker/colorpicker.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/plugins/jquery-multi-select/multi-select.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/plugins/select2/dist/css/select2.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/plugins/select2/dist/css/select2-bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}\" rel=\"stylesheet\" />

        <link rel=\"shortcut icon\" href=\"{{asset('assets1/images/favicon_1.ico')}}\">

        <!-- Dropzone css -->
        <link href=\"{{asset('assets1/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        
        <link href=\"{{asset('assets1/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets1/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"{{asset('assets1/js/modernizr.min.js')}}\"></script>
                <script src=\"{{asset('assets1/plugins/dropzone/dist/dropzone.js')}}\"></script>
                  <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">
       


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>



    <body class=\"fixed-left\">
        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">John Doe <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul>
                            <li>
                                <a href=\"index.html\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                    <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                    <li><a href=\"mail-read.html\">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-panels.html\">Panels</a></li>
                                    <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-notification.html\">Notification</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"components-grid.html\">Grid</a></li>
                                    <li><a href=\"components-portlets.html\">Portlets</a></li>
                                    <li><a href=\"components-widgets.html\">Widgets</a></li>
                                    <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                    <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                    <li><a href=\"components-gallery.html\">Gallery </a></li>
                                    <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-elements.html\">General Elements</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>
                                    <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                    <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                    <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                    <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                    <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                    <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                    <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                    <li><a href=\"charts-other.html\">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-profile.html\">Profile</a></li>
                                    <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                    <li><a href=\"pages-email-template.html\">Email template</a></li>
                                    <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                    <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                    <li><a href=\"pages-404.html\">404 Error</a></li>
                                    <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                    <li><a href=\"pages-500.html\">500 Error</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul>
                                    <li class=\"has_sub\">
                                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul style=\"\">
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\"></h4>


                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li><a href=\"#\">Forms</a></li>
                                    <li class=\"active\">File Upload</li>
                                </ol>
                            </div>
                        </div>

                      
                             <div class=\"panel panel-default formAjoutBien\">
                            <div class=\"panel-heading\"><h3 class=\"panel-title\">Proprietaire</h3></div>

                            <div class=\"panel-body\">
                                <form action=\"#\" class=\"form-horizontal\" method=\"post\" id=\"addP\">
                                <h4>information proprietaire </h4>
                                 <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Numero de piece</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"numPiece\" type=\"text\" id=\"numPiece\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Nom Complet</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"nomComplet\" type=\"text\" id=\"nomComplet\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Adesse</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"adresse\" type=\"text\" id=\"adresse\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Numero de telephone</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"tel\" type=\"number\" id=\"tel\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">E mail</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"email\" type=\"email\" id=\"email\" class=\"select2 form-control\"/>
                                               
                                     </div>
                                    </div>
                                    
                                    
                                    
                                    
                                   <h4>informations du bien</h4>
                                   <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">libelet</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"nom\" type=\"text\" id=\"nom\" class=\"select2 form-control\"/>
                                            
                                        </div>
                                    </div>
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Prix</label>
                                        <div class=\"col-sm-9\">
                                     <input name=\"prix\" type=\"text\" id=\"prix\" class=\"select2 form-control\"/>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Localites</label>
                                        <div class=\"col-sm-9\">
                                            <select class=\"select2 form-control sL\" data-placeholder=\"Choose a Country...\" id='localite' name=\"localite\">
                                              <option value=\"#\">&nbsp;</option>
                                             
                                            
                             
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Types</label>
                                        <div class=\"col-sm-9\">
                                            <select class=\"select2 form-control sT\" data-placeholder=\"Choose a Country...\" id='type' name=\"type\">
                                              <option value=\"#\">&nbsp;</option>
                                             
                                            
                                            
                                            </select>
                                            
                                        </div>
                                    </div>
                                     <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\">Photos</label>
                                        <div class=\"col-sm-9\">
                                           
                                      <label class=\"btn btn-default btn-file\">
                                         ajouter 4 photos du bien <input name=\"files[]\" type=\"file\" id=\"files\" multiple=\"multiple\"/>
                                     </label>
                                            
                                        </div>
                                    </div>
                                      <div class=\"form-group\">
                                                    <label for=\"ccomment\" class=\"col-sm-3 control-label\">Description</label>
                                                    <div class=\"col-sm-9\">
                                                        <textarea class=\"form-control\" id=\"des\" name=\"description\" required=\"\" aria-required=\"true\"></textarea>
                                                    </div>
                                                </div>
                       
                                                     <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-3 col-lg-10\">
                                                        <input class=\"btn btn-success \" id=\"submit1\" type=\"submit\" value=\"enregistrer\" />
                                                        <button class=\"btn btn-default waves-effect\" type=\"reset\">Annuler</button>
                                                    </div>
                                                </div>
                                            </form>
                             
                                

                        <!-- end row -->


            </div> <!-- container -->
                               
                </div> <!-- content -->
 
                                      

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"{{asset('assets1/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('assets1/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets1/js/detect.js')}}\"></script>
        <script src=\"{{asset('assets1/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('assets1/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('assets1/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('assets1/js/waves.js')}}\"></script>
        <script src=\"{{asset('assets1/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('assets1/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('assets1/js/jquery.scrollTo.min.js')}}\"></script>

       
        <script src=\"{{asset('assets1/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/dataTables.buttons.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/buttons.bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/jszip.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/pdfmake.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/vfs_fonts.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/buttons.html5.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/buttons.print.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/dataTables.fixedHeader.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/dataTables.keyTable.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/dataTables.responsive.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/responsive.bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/datatables/dataTables.scroller.min.js')}}\"></script>
        <script src=\"{{asset('assets1/js/jquery.app.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/select2/dist/js/select2.min.js')}}\" type=\"text/javascript\"></script>

        <script src=\"{{asset('assets1/plugins/tagsinput/jquery.tagsinput.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/toggles/toggles.min.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/timepicker/bootstrap-timepicker.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets1/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets1/plugins/colorpicker/bootstrap-colorpicker.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets1/plugins/jquery-multi-select/jquery.multi-select.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets1/plugins/jquery-multi-select/jquery.quicksearch.js')}}\"></script>
        <script src=\"{{asset('assets1/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('assets1/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}\" type=\"text/javascript\"></script>

        <!-- Page Specific JS Libraries -->
        <script src=\"{{asset('assets1/plugins/dropzone/dist/dropzone.js')}}\"></script>


        <!-- Datatable init js -->
        <script src=\"{{asset('assets1/pages/datatables.init.js')}}\"></script>

       <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
       <script src=\"jquery.multifile.js\"></script>

\t
\t</body>
</html>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                loc('{{ path('selectLocalite') }}',\"sL\")
                 loc('{{ path('selectType') }}',\"sT\")
                \$('.LocaliteEtType').hide()
                   \$(\".registerType\").hide()
                    \$(\".registerLocalite\").hide()
                      \$(\".retour\").hide()
                   
                    \$(\"#addlocalite\").hide()
                       \$(\"#addtype\").hide()
                \$(\".add\").on(\"click\",function(){
                    \$(\".formAjoutBien\").hide()
                       \$('.LocaliteEtType').show()
                    \$(this).hide()
                       \$(\".retour\").show()
                   
                })
                function loc(path,clas){
                 \$.ajax({
                      type: 'POST',
                        url: path,
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(data) {
                   
                            \$.each(data,function(){
                             \$(\".\"+clas).append(\"<option value=\"+this.id+\">\"+this.nom+\"</option>\")
                            \$(\"#\"+clas).append(\"<tr><td>\"+this.id+\"</td><td>\"+this.nom+\"</td></tr>\")

                            })
                        }
        }) 
        }
   
     
  

                 \$(\".retour\").on(\"click\",function(){
                       \$(this).hide()
                         \$(\".formAjoutBien\").show()
                             \$('.LocaliteEtType').hide()
                              \$(\".add\").show()
             
  })
           
\$(\".addType\").on(\"click\",function(){
    \$(this).hide()
    \$(\".registerType\").show()
      \$(\"#addtype\").show()
})

    \$(\".addLocalite\").on(\"click\",function(){
    \$(this).hide()
    \$(\".registerLocalite\").show()
      \$(\"#addlocalite\").show()
})  

    \$(\".registerLocalite\").on(\"click\",function(e){

         var formData = \$(\"#inlocalite\").val()

        e.preventDefault();
 
        \$.ajax({
           type: \"POST\",
            url: \"{{path('formLocalite')}}\",
            data:{\"nom\":formData},
            dataType:\"Json\"
        })
        .done(function (data) {
             \$.ajax({
                      type: 'POST',
                        url: '{{ path('selectLocalite') }}',
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(data) {
                   
                            \$.each(data,function(){
                                      \$(\".sL\").html(\"<option value=\"+this.id+\">\"+this.nom+\"</option>\")
                            })
                        }
        }) 
        })
  

           })
              \$(\".registerType\").on(\"click\",function(e){

         var formData = \$(\"#intype\").val()

        e.preventDefault();
 
        \$.ajax({
           type: \"POST\",
            url: \"{{path('formType')}}\",
            data:{\"nom\":formData},
            dataType:\"Json\"
        })
        .done(function (data) {
             \$.ajax({
                      type: 'POST',
                        url: '{{ path('selectType') }}',
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(data) {
                   
                            \$.each(data,function(){
                                      \$(\".sT\").html(\"<option value=\"+this.id+\">\"+this.nom+\"</option>\")
                            })
                        }
        }) 
        })
  

           })



\$(\"#addP\").on(\"submit\",function(e){
   var files=  \$('#files')[0].files;
         var formData = new FormData(\$(this)[0]);

        e.preventDefault();
 
        \$.ajax({
           type: \"POST\",
            url: \"{{path('addP')}}\",
            data: formData,
      
            mimeTypes:\"multipart/form-data\",
            contentType: false,
            cache: false,
            processData: false,
        })
        .done(function (data) {
            window.location.href = '{{path(\"validArchive\")}}'
            if (typeof data.message !== 'undefined') {
                alert(data.message);
            }


        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (typeof jqXHR.responseJSON !== 'undefined') {
                if (jqXHR.responseJSON.hasOwnProperty('form')) {
                    \$('#form_body').html(jqXHR.responseJSON.form);
                }
 
                \$('.form_error').html(jqXHR.responseJSON.message);
 
            } else {
                alert(errorThrown);
            }
 
        });
    

     

  

   
  

           })   
           \$('input').on(\"keypress\", function(e) {
          if (e.keyCode == 13) {
                /* FOCUS ELEMENT */
                var inputs = \$(this).parents(\"form\").eq(0).find(\":input\");
                var idx = inputs.index(this);

                if (idx == inputs.length - 1) {
                    inputs[0].select()
                } else {
                    inputs[idx + 1].focus(); //  handles submit buttons
                    inputs[idx + 1].select();
                }
                return false;
            }
        });   
             
         
            })
              jQuery(document).ready(function() {

                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});

                // Form Toggles
                jQuery('.toggle').toggles({on: true});

                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
                //colorpicker start

                \$('.colorpicker-default').colorpicker({
                    format: 'hex'
                });
                \$('.colorpicker-rgba').colorpicker();


                //multiselect start

                \$('#my_multi_select1').multiSelect();
                \$('#my_multi_select2').multiSelect({
                    selectableOptgroup: true
                });

                \$('#my_multi_select3').multiSelect({
                    selectableHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
                    selectionHeader: \"<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>\",
                    afterInit: function (ms) {
                        var that = this,
                            \$selectableSearch = that.\$selectableUl.prev(),
                            \$selectionSearch = that.\$selectionUl.prev(),
                            selectableSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.\$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = \$selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.\$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = \$selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.\$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });



                // Select2
                jQuery(\".select2\").select2({
                    width: '100%'
                });

                //Bootstrap-TouchSpin
                \$(\".vertical-spin\").TouchSpin({
                    verticalbuttons: true,
                    verticalupclass: 'ion-plus-round',
                    verticaldownclass: 'ion-minus-round'
                });
                var vspinTrue = \$(\".vertical-spin\").TouchSpin({
                    verticalbuttons: true
                });
                if (vspinTrue) {
                    \$('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                }

                \$(\"input[name='demo1']\").TouchSpin({
                    min: 0,
                    max: 100,
                    step: 0.1,
                    decimals: 2,
                    boostat: 5,
                    maxboostedstep: 10,
                    postfix: '%'
                });
                \$(\"input[name='demo2']\").TouchSpin({
                    min: -1000000000,
                    max: 1000000000,
                    stepinterval: 50,
                    maxboostedstep: 10000000,
                    prefix: '\$'
                });
                \$(\"input[name='demo3']\").TouchSpin();
                \$(\"input[name='demo3_21']\").TouchSpin({
                    initval: 40
                });
                \$(\"input[name='demo3_22']\").TouchSpin({
                    initval: 40
                });

                \$(\"input[name='demo0']\").TouchSpin({});
            });
         
        </script>
        <style>
        .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
        </style>", "KEURGUIimmoBundle:front:proprietaire.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/proprietaire.html.twig");
    }
}
