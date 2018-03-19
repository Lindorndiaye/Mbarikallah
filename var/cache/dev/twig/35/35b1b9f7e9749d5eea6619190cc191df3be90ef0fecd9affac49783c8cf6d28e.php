<?php

/* KEURGUIimmoBundle::admin.html.twig */
class __TwigTemplate_ff31e000e0726ce3b95ec8703eaf550e705ca79bd1817968784e92692f88f29d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panelleft' => array($this, 'block_panelleft'),
            'panelright' => array($this, 'block_panelright'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8f6ac7659dd5e17a0c4d2f70b10a70f934352537160683a8fbdec5ba80a95ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f6ac7659dd5e17a0c4d2f70b10a70f934352537160683a8fbdec5ba80a95ba->enter($__internal_f8f6ac7659dd5e17a0c4d2f70b10a70f934352537160683a8fbdec5ba80a95ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::admin.html.twig"));

        $__internal_414347edb982938e59977ec51b65802f01d7e5d23be45b0ecaae2f08d961b94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414347edb982938e59977ec51b65802f01d7e5d23be45b0ecaae2f08d961b94f->enter($__internal_414347edb982938e59977ec51b65802f01d7e5d23be45b0ecaae2f08d961b94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::admin.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Admin</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/cs-skin-elastic.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"assetss/css/bootstrap-select.less\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/scss/style.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/lib/vector-map/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>
<body>


        <!-- Left Panel -->
        ";
        // line 35
        $this->displayBlock('panelleft', $context, $blocks);
        // line 127
        echo "
    <!-- Left Panel -->

";
        // line 130
        $this->displayBlock('panelright', $context, $blocks);
        // line 243
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 648
        echo "
    <!-- Right Panel -->
";
        // line 650
        $this->displayBlock('javascripts', $context, $blocks);
        // line 712
        echo "
</body>
</html>
";
        
        $__internal_f8f6ac7659dd5e17a0c4d2f70b10a70f934352537160683a8fbdec5ba80a95ba->leave($__internal_f8f6ac7659dd5e17a0c4d2f70b10a70f934352537160683a8fbdec5ba80a95ba_prof);

        
        $__internal_414347edb982938e59977ec51b65802f01d7e5d23be45b0ecaae2f08d961b94f->leave($__internal_414347edb982938e59977ec51b65802f01d7e5d23be45b0ecaae2f08d961b94f_prof);

    }

    // line 35
    public function block_panelleft($context, array $blocks = array())
    {
        $__internal_6b02f87b1381db208a55181661983c44c98fa0a5ae2e21675b29d05d9de7e910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b02f87b1381db208a55181661983c44c98fa0a5ae2e21675b29d05d9de7e910->enter($__internal_6b02f87b1381db208a55181661983c44c98fa0a5ae2e21675b29d05d9de7e910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelleft"));

        $__internal_252cc80401810185a0aee08fd1173b4ce188920cf30a9ac16b6e6a037d53f04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252cc80401810185a0aee08fd1173b4ce188920cf30a9ac16b6e6a037d53f04e->enter($__internal_252cc80401810185a0aee08fd1173b4ce188920cf30a9ac16b6e6a037d53f04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelleft"));

        // line 36
        echo "
    <aside id=\"left-panel\" class=\"left-panel\">
        <nav class=\"navbar navbar-expand-sm navbar-default\">

            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand2\" href=\"./\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/imageedit__5471324689.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
                <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/imageedit__5471324689.png44"), "html", null, true);
        echo "\" alt=\"\"></a>
            </div>

            <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"index.html\"> <i class=\"menu-icon fa fa-dashboard\"></i>Tableau de bord </a>
                    </li>
                    <h3 class=\"menu-title \">Equipe</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Admin</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"ui-buttons.html\">Buttons</a></li>
                            <li><i class=\"fa fa-id-badge\"></i><a href=\"ui-badges.html\">Badges</a></li>
                            <li><i class=\"fa fa-bars\"></i><a href=\"ui-tabs.html\">Tabs</a></li>
                            <li><i class=\"fa fa-share-square-o\"></i><a href=\"ui-social-buttons.html\">Social Buttons</a></li>
                            <li><i class=\"fa fa-id-card-o\"></i><a href=\"ui-cards.html\">Cards</a></li>
                            <li><i class=\"fa fa-exclamation-triangle\"></i><a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><i class=\"fa fa-spinner\"></i><a href=\"ui-progressbar.html\">Progress Bars</a></li>
                            <li><i class=\"fa fa-fire\"></i><a href=\"ui-modals.html\">Modals</a></li>
                            <li><i class=\"fa fa-book\"></i><a href=\"ui-switches.html\">Switches</a></li>
                            <li><i class=\"fa fa-th\"></i><a href=\"ui-grids.html\">Grids</a></li>
                            <li><i class=\"fa fa-file-word-o\"></i><a href=\"ui-typgraphy.html\">Typography</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Agents</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-basic.html\">Basic Table</a></li>
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-data.html\">Data Table</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-th\"></i>Proprietaires</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-basic.html\">Basic Form</a></li>
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-advanced.html\">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class=\"menu-title \">Biens</h3><!-- /.menu-title -->

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle bien\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-tasks\"></i>Biens</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li class=\"localite\" ><i class=\"menu-icon fa fa-fort-awesome localite\"></i><a href=\"#\">Localites</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"font-themify.html\">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"localite\" > <i class=\"menu-icon ti-email\"></i>Nouveau</a>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-bar-chart\"></i>Reservations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-line-chart\"></i><a href=\"charts-chartjs.html\">Chart JS</a></li>
                            <li><i class=\"menu-icon fa fa-area-chart\"></i><a href=\"charts-flot.html\">Flot Chart</a></li>
                            <li><i class=\"menu-icon fa fa-pie-chart\"></i><a href=\"charts-peity.html\">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-area-chart\"></i>Maps</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-map-o\"></i><a href=\"maps-gmap.html\">Google Maps</a></li>
                            <li><i class=\"menu-icon fa fa-street-view\"></i><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class=\"menu-title\">Extras</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-glass\"></i>Pages</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-login.html\">Login</a></li>
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-register.html\">Register</a></li>
                            <li><i class=\"menu-icon fa fa-paper-plane\"></i><a href=\"pages-forget.html\">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    ";
        
        $__internal_252cc80401810185a0aee08fd1173b4ce188920cf30a9ac16b6e6a037d53f04e->leave($__internal_252cc80401810185a0aee08fd1173b4ce188920cf30a9ac16b6e6a037d53f04e_prof);

        
        $__internal_6b02f87b1381db208a55181661983c44c98fa0a5ae2e21675b29d05d9de7e910->leave($__internal_6b02f87b1381db208a55181661983c44c98fa0a5ae2e21675b29d05d9de7e910_prof);

    }

    // line 130
    public function block_panelright($context, array $blocks = array())
    {
        $__internal_deadbedd2d1a839d9f5bc05718ff51afc6593941adcb6dd5372e740db2e46901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deadbedd2d1a839d9f5bc05718ff51afc6593941adcb6dd5372e740db2e46901->enter($__internal_deadbedd2d1a839d9f5bc05718ff51afc6593941adcb6dd5372e740db2e46901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelright"));

        $__internal_5b9f14d98e95d1c6b3023b98cac98a39df03e65dfbd6d72b04cef5bd533e95bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9f14d98e95d1c6b3023b98cac98a39df03e65dfbd6d72b04cef5bd533e95bd->enter($__internal_5b9f14d98e95d1c6b3023b98cac98a39df03e65dfbd6d72b04cef5bd533e95bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelright"));

        // line 131
        echo "    <!-- Right Panel -->

    <div id=\"right-panel\" class=\"right-panel\">

        <!-- Header-->
        <header id=\"header\" class=\"header\">

            <div class=\"header-menu\">

                <div class=\"col-sm-7\">
                    <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                    <div class=\"header-left\">
                        <button class=\"search-trigger\"><i class=\"fa fa-search\"></i></button>
                        <div class=\"form-inline\">
                            <form class=\"search-form\">
                                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search ...\" aria-label=\"Search\">
                                <button class=\"search-close\" type=\"submit\"><i class=\"fa fa-close\"></i></button>
                            </form>
                        </div>

                        <div class=\"dropdown for-notification\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"notification\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-bell\"></i>
                            <span class=\"count bg-danger\">3</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"notification\">
                            <p class=\"red\">You have 3 Notification</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <i class=\"fa fa-check\"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <i class=\"fa fa-info\"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <i class=\"fa fa-warning\"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class=\"dropdown for-message\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                id=\"message\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ti-email\"></i>
                            <span class=\"count bg-primary\">";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["nmsg"]) || array_key_exists("nmsg", $context) ? $context["nmsg"] : (function () { throw new Twig_Error_Runtime('Variable "nmsg" does not exist.', 178, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                            <p class=\"red\">Vous avez ";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["nmsg"]) || array_key_exists("nmsg", $context) ? $context["nmsg"] : (function () { throw new Twig_Error_Runtime('Variable "nmsg" does not exist.', 181, $this->getSourceContext()); })()), "html", null, true);
        echo " messages</p>
                            ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["msg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 183
            echo "                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/1.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["msg"], "nomComplet", array()), "html", null, true);
            echo "</span>
                                    <span class=\"time float-right\">dembe</span>
                                        <p>";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["msg"], "message", array()), "html", null, true);
            echo "</p>
                                </span>
                            </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                        
                          
                      
                          </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-5\">
                    <div class=\"user-area dropdown float-right\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                        </a>

                        <div class=\"user-menu dropdown-menu\">
                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>Notifications <span class=\"count\">13</span></a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                        </div>
                    </div>

                    <div class=\"language-select dropdown\" id=\"language-select\">
                        <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                            <div class=\"dropdown-item\">
                                <span class=\"flag-icon flag-icon-fr\"></span>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-es\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-us\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-it\"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
            ";
        
        $__internal_5b9f14d98e95d1c6b3023b98cac98a39df03e65dfbd6d72b04cef5bd533e95bd->leave($__internal_5b9f14d98e95d1c6b3023b98cac98a39df03e65dfbd6d72b04cef5bd533e95bd_prof);

        
        $__internal_deadbedd2d1a839d9f5bc05718ff51afc6593941adcb6dd5372e740db2e46901->leave($__internal_deadbedd2d1a839d9f5bc05718ff51afc6593941adcb6dd5372e740db2e46901_prof);

    }

    // line 243
    public function block_content($context, array $blocks = array())
    {
        $__internal_aac01092508afc36d697b4231890e110f9f21d2895d5bfa4cb51f7aafebcc35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac01092508afc36d697b4231890e110f9f21d2895d5bfa4cb51f7aafebcc35f->enter($__internal_aac01092508afc36d697b4231890e110f9f21d2895d5bfa4cb51f7aafebcc35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a3e893534b491a33355c2408c6d19f07348ad83e598f94925a9d186eaac2defc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e893534b491a33355c2408c6d19f07348ad83e598f94925a9d186eaac2defc->enter($__internal_a3e893534b491a33355c2408c6d19f07348ad83e598f94925a9d186eaac2defc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 244
        echo "
        <div class=\"breadcrumbs\">
            <div class=\"col-sm-4\">
                <div class=\"page-header float-left\">
                    <div class=\"page-title\">
                        <h1>Tableau de bord</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"page-header float-right\">
                    <div class=\"page-title\">
                        <ol class=\"breadcrumb text-right\">
                            <li class=\"active\">tableau de bord</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"content mt-3\">

            <div class=\"col-sm-12\">
                <div class=\"alert  alert-success alert-dismissible fade show\" role=\"alert\">
                  <span class=\"badge badge-pill badge-success\">Success</span> You successfully read this important alert message.
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            </div>


           <div class=\"col-sm-6 col-lg-3\">
                <div class=\"card text-white bg-flat-color-1\">
                    <div class=\"card-body pb-0\">
                        <div class=\"dropdown float-right\">
                            <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-cog\"></i>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <div class=\"dropdown-menu-content\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class=\"mb-0\">
                            <span class=\"count\">10</span>
                        </h4>
                        <p class=\"text-light\">Biens Disponibles</p>

                        <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"/>
                            <canvas id=\"widgetChart1\"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class=\"col-sm-6 col-lg-3\">
                <div class=\"card text-white bg-flat-color-2\">
                    <div class=\"card-body pb-0\">
                        <div class=\"dropdown float-right\">
                            <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-cog\"></i>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <div class=\"dropdown-menu-content\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class=\"mb-0\">
                            <span class=\"count\">3</span>
                        </h4>
                        <p class=\"text-light\">Biens Reserves</p>

                        <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"/>
                            <canvas id=\"widgetChart2\"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class=\"col-sm-6 col-lg-3\">
                <div class=\"card text-white bg-flat-color-3\">
                    <div class=\"card-body pb-0\">
                        <div class=\"dropdown float-right\">
                            <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-cog\"></i>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <div class=\"dropdown-menu-content\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class=\"mb-0\">
                            <span class=\"count\">6</span>
                        </h4>
                        <p class=\"text-light\">Contrat en cour</p>

                    </div>

                        <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"/>
                            <canvas id=\"widgetChart3\"></canvas>
                        </div>
                </div>
            </div>
            <!--/.col-->

            <div class=\"col-sm-6 col-lg-3\">
                <div class=\"card text-white bg-flat-color-4\">
                    <div class=\"card-body pb-0\">
                        <div class=\"dropdown float-right\">
                            <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-cog\"></i>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <div class=\"dropdown-menu-content\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class=\"mb-0\">
                            <span class=\"count\">5</span>
                        </h4>
                        <p class=\"text-light\">Contrats en terme</p>

                        <div class=\"chart-wrapper px-3\" style=\"height:70px;\" height=\"70\"/>
                            <canvas id=\"widgetChart4\"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class=\"col-lg-3 col-md-6\">
                <div class=\"social-box facebook\">
                    <i class=\"fa fa-facebook\"></i>
                    <ul>
                        <li>
                            <sctrong><span class=\"count\">40</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <sctrong><span class=\"count\">450</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class=\"col-lg-3 col-md-6\">
                <div class=\"social-box twitter\">
                    <i class=\"fa fa-twitter\"></i>
                    <ul>
                        <li>
                            <sctrong><span class=\"count\">30</span> k</strong>
                            <span>Amis</span>
                        </li>
                        <li>
                            <sctrong><span class=\"count\">450</span></strong>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class=\"col-lg-3 col-md-6\">
                <div class=\"social-box linkedin\">
                    <i class=\"fa fa-linkedin\"></i>
                    <ul>
                        <li>
                            <sctrong><span class=\"count\">40</span> +</strong>
                            <span>contacts</span>
                        </li>
                        <li>
                            <sctrong><span class=\"count\">250</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class=\"col-lg-3 col-md-6\">
                <div class=\"social-box google-plus\">
                    <i class=\"fa fa-google-plus\"></i>
                    <ul>
                        <li>
                            <sctrong><span class=\"count\">94</span> k</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <sctrong><span class=\"count\">92</span></strong>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->

            <div class=\"col-xl-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <h4 class=\"card-title mb-0\">Traffic</h4>
                                <div class=\"small text-muted\" >fevrier 2017</div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-sm-8 hidden-sm-down\">
                                <button type=\"button\" class=\"btn btn-primary float-right bg-flat-color-1\"><i class=\"fa fa-cloud-download\"></i></button>
                                <div class=\"btn-toolbar float-right\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                                    <div class=\"btn-group mr-3\" data-toggle=\"buttons\" aria-label=\"First group\">
                                        <label class=\"btn btn-outline-secondary\">
                                            <input type=\"radio\" name=\"options\" id=\"option1\"> Day
                                        </label>
                                        <label class=\"btn btn-outline-secondary active\">
                                            <input type=\"radio\" name=\"options\" id=\"option2\" checked=\"\"> Month
                                        </label>
                                        <label class=\"btn btn-outline-secondary\">
                                            <input type=\"radio\" name=\"options\" id=\"option3\"> Year
                                        </label>
                                    </div>
                                </div>
                            </div><!--/.col-->


                        </div><!--/.row-->
                        <div class=\"chart-wrapper mt-4\" />
                            <canvas id=\"trafficChart\" style=\"height:200px;\" height=\"200\"></canvas>
                        </div>

                    </div>
                    <div class=\"card-footer\">
                        <ul>
                            <li>
                                <div class=\"text-muted\">Visits</div>
                                <strong>29.703 Users (40%)</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 40%;\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                            <li class=\"hidden-sm-down\">
                                <div class=\"text-muted\">Unique</div>
                                <strong>24.093 Users (20%)</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 20%;\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                            <li>
                                <div class=\"text-muted\">Pageviews</div>
                                <strong>78.706 Views (60%)</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 60%;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                            <li class=\"hidden-sm-down\">
                                <div class=\"text-muted\">New Users</div>
                                <strong>22.123 Users (80%)</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                            <li class=\"hidden-sm-down\">
                                <div class=\"text-muted\">Bounce Rate</div>
                                <strong>40.15%</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%;\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

           <div class=\"col-xl-3 col-lg-6\">
                <section class=\"card\">
                    <div class=\"twt-feed blue-bg\">
                        <div class=\"corner-ribon black-ribon\">
                            <i class=\"fa fa-twitter\"></i>
                        </div>
                        <div class=\"fa fa-twitter wtt-mark\"></div>

                        <div class=\"media\">
                            <a href=\"#\">
                                <img class=\"align-self-center rounded-circle mr-3\" style=\"width:85px; height:85px;\" alt=\"\" src=\"images/admin.jpg\">
                            </a>
                            <div class=\"media-body\">
                                <h2 class=\"text-white display-6\">Jim Doe</h2>
                                <p class=\"text-light\">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"weather-category twt-category\">
                        <ul>
                            <li class=\"active\">
                                <h5>750</h5>
                                Tweets
                            </li>
                            <li>
                                <h5>865</h5>
                                Following
                            </li>
                            <li>
                                <h5>3645</h5>
                                Followers
                            </li>
                        </ul>
                    </div>
                    <div class=\"twt-write col-sm-12\">
                        <textarea placeholder=\"Write your Tweet and Enter\" rows=\"1\" class=\"form-control t-text-area\"></textarea>
                    </div>
                    <footer class=\"twt-footer\">
                        <a href=\"#\"><i class=\"fa fa-camera\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-map-marker\"></i></a>
                        New Castle, UK
                        <span class=\"pull-right\">
                            32
                        </span>
                    </footer>
                </section>
            </div>


            <div class=\"col-xl-3 col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"stat-widget-one\">
                            <div class=\"stat-icon dib\"><i class=\"ti-money text-success border-success\"></i></div>
                            <div class=\"stat-content dib\">
                                <div class=\"stat-text\">Total Profit</div>
                                <div class=\"stat-digit\">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"col-xl-3 col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"stat-widget-one\">
                            <div class=\"stat-icon dib\"><i class=\"ti-user text-primary border-primary\"></i></div>
                            <div class=\"stat-content dib\">
                                <div class=\"stat-text\">New Customer</div>
                                <div class=\"stat-digit\">961</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"stat-widget-one\">
                            <div class=\"stat-icon dib\"><i class=\"ti-layout-grid2 text-warning border-warning\"></i></div>
                            <div class=\"stat-content dib\">
                                <div class=\"stat-text\">Active Projects</div>
                                <div class=\"stat-digit\">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"card\" >
                    <div class=\"card-header\">
                        <h4>World</h4>
                    </div>
                    <div class=\"Vector-map-js\">
                        <div id=\"vmap\" class=\"vmap\" style=\"height: 265px;\"></div>
                    </div>
                </div>
                <!-- /# card -->
             
            </div>


        </div> <!-- .content -->
     
    </div><!-- /#right-panel -->      ";
        
        $__internal_a3e893534b491a33355c2408c6d19f07348ad83e598f94925a9d186eaac2defc->leave($__internal_a3e893534b491a33355c2408c6d19f07348ad83e598f94925a9d186eaac2defc_prof);

        
        $__internal_aac01092508afc36d697b4231890e110f9f21d2895d5bfa4cb51f7aafebcc35f->leave($__internal_aac01092508afc36d697b4231890e110f9f21d2895d5bfa4cb51f7aafebcc35f_prof);

    }

    // line 650
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ec392a3b6f7f590efa4855421f80f09a5ea43095007ced1692e9f2ab175d373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec392a3b6f7f590efa4855421f80f09a5ea43095007ced1692e9f2ab175d373->enter($__internal_2ec392a3b6f7f590efa4855421f80f09a5ea43095007ced1692e9f2ab175d373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_51b8fb7b8f9f565f30bcf4d454b7cc31499109de499346677a519db56723a159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b8fb7b8f9f565f30bcf4d454b7cc31499109de499346677a519db56723a159->enter($__internal_51b8fb7b8f9f565f30bcf4d454b7cc31499109de499346677a519db56723a159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 651
        echo " 

<script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/main.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/vendor/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
   

    <script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.print.min.js"), "html", null, true);
        echo "'\"></script>
    <script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables-init.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/vendor/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/main.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/chart-js/Chart.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/widgets.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/country/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.2.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>

            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
          
    <script>
        ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
             \$('.bien').on(\"click\",function(){
  \$('#div').load('";
        // line 707
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "')
     })
   
    </script>
    ";
        
        $__internal_51b8fb7b8f9f565f30bcf4d454b7cc31499109de499346677a519db56723a159->leave($__internal_51b8fb7b8f9f565f30bcf4d454b7cc31499109de499346677a519db56723a159_prof);

        
        $__internal_2ec392a3b6f7f590efa4855421f80f09a5ea43095007ced1692e9f2ab175d373->leave($__internal_2ec392a3b6f7f590efa4855421f80f09a5ea43095007ced1692e9f2ab175d373_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  951 => 707,  923 => 682,  919 => 681,  915 => 680,  911 => 679,  907 => 678,  903 => 677,  899 => 676,  893 => 673,  889 => 672,  885 => 671,  881 => 670,  877 => 669,  873 => 668,  869 => 667,  865 => 666,  861 => 665,  857 => 664,  853 => 663,  849 => 662,  845 => 661,  841 => 660,  835 => 657,  830 => 655,  826 => 654,  822 => 653,  818 => 651,  809 => 650,  396 => 244,  387 => 243,  327 => 192,  317 => 188,  312 => 186,  307 => 183,  303 => 182,  299 => 181,  293 => 178,  244 => 131,  235 => 130,  143 => 45,  139 => 44,  129 => 36,  120 => 35,  107 => 712,  105 => 650,  101 => 648,  98 => 243,  96 => 130,  91 => 127,  89 => 35,  75 => 24,  71 => 23,  66 => 21,  62 => 20,  58 => 19,  54 => 18,  50 => 17,  46 => 16,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Admin</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/normalize.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/font-awesome.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/themify-icons.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/flag-icon.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/cs-skin-elastic.css')}}\">
    <!-- <link rel=\"stylesheet\" href=\"assetss/css/bootstrap-select.less\"> -->
    <link rel=\"stylesheet\" href=\"{{asset('assetss/scss/style.css')}}\">
    <link href=\"{{asset('assetss/css/lib/vector-map/jqvmap.min.css')}}\" rel=\"stylesheet\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>
<body>


        <!-- Left Panel -->
        {% block panelleft %}

    <aside id=\"left-panel\" class=\"left-panel\">
        <nav class=\"navbar navbar-expand-sm navbar-default\">

            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand2\" href=\"./\"><img src=\"{{asset('images/imageedit__5471324689.png')}}\" alt=\"Logo\"></a>
                <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"{{asset('images/imageedit__5471324689.png44')}}\" alt=\"\"></a>
            </div>

            <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"index.html\"> <i class=\"menu-icon fa fa-dashboard\"></i>Tableau de bord </a>
                    </li>
                    <h3 class=\"menu-title \">Equipe</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Admin</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"ui-buttons.html\">Buttons</a></li>
                            <li><i class=\"fa fa-id-badge\"></i><a href=\"ui-badges.html\">Badges</a></li>
                            <li><i class=\"fa fa-bars\"></i><a href=\"ui-tabs.html\">Tabs</a></li>
                            <li><i class=\"fa fa-share-square-o\"></i><a href=\"ui-social-buttons.html\">Social Buttons</a></li>
                            <li><i class=\"fa fa-id-card-o\"></i><a href=\"ui-cards.html\">Cards</a></li>
                            <li><i class=\"fa fa-exclamation-triangle\"></i><a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><i class=\"fa fa-spinner\"></i><a href=\"ui-progressbar.html\">Progress Bars</a></li>
                            <li><i class=\"fa fa-fire\"></i><a href=\"ui-modals.html\">Modals</a></li>
                            <li><i class=\"fa fa-book\"></i><a href=\"ui-switches.html\">Switches</a></li>
                            <li><i class=\"fa fa-th\"></i><a href=\"ui-grids.html\">Grids</a></li>
                            <li><i class=\"fa fa-file-word-o\"></i><a href=\"ui-typgraphy.html\">Typography</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Agents</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-basic.html\">Basic Table</a></li>
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-data.html\">Data Table</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-th\"></i>Proprietaires</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-basic.html\">Basic Form</a></li>
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-advanced.html\">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class=\"menu-title \">Biens</h3><!-- /.menu-title -->

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle bien\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-tasks\"></i>Biens</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li class=\"localite\" ><i class=\"menu-icon fa fa-fort-awesome localite\"></i><a href=\"#\">Localites</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"font-themify.html\">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"localite\" > <i class=\"menu-icon ti-email\"></i>Nouveau</a>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-bar-chart\"></i>Reservations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-line-chart\"></i><a href=\"charts-chartjs.html\">Chart JS</a></li>
                            <li><i class=\"menu-icon fa fa-area-chart\"></i><a href=\"charts-flot.html\">Flot Chart</a></li>
                            <li><i class=\"menu-icon fa fa-pie-chart\"></i><a href=\"charts-peity.html\">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-area-chart\"></i>Maps</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-map-o\"></i><a href=\"maps-gmap.html\">Google Maps</a></li>
                            <li><i class=\"menu-icon fa fa-street-view\"></i><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class=\"menu-title\">Extras</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-glass\"></i>Pages</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-login.html\">Login</a></li>
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-register.html\">Register</a></li>
                            <li><i class=\"menu-icon fa fa-paper-plane\"></i><a href=\"pages-forget.html\">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    {% endblock %}

    <!-- Left Panel -->

{% block panelright %}
    <!-- Right Panel -->

    <div id=\"right-panel\" class=\"right-panel\">

        <!-- Header-->
        <header id=\"header\" class=\"header\">

            <div class=\"header-menu\">

                <div class=\"col-sm-7\">
                    <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                    <div class=\"header-left\">
                        <button class=\"search-trigger\"><i class=\"fa fa-search\"></i></button>
                        <div class=\"form-inline\">
                            <form class=\"search-form\">
                                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search ...\" aria-label=\"Search\">
                                <button class=\"search-close\" type=\"submit\"><i class=\"fa fa-close\"></i></button>
                            </form>
                        </div>

                        <div class=\"dropdown for-notification\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"notification\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-bell\"></i>
                            <span class=\"count bg-danger\">3</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"notification\">
                            <p class=\"red\">You have 3 Notification</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <i class=\"fa fa-check\"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <i class=\"fa fa-info\"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <i class=\"fa fa-warning\"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class=\"dropdown for-message\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                id=\"message\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ti-email\"></i>
                            <span class=\"count bg-primary\">{{nmsg}}</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                            <p class=\"red\">Vous avez {{nmsg}} messages</p>
                            {% for msg in msg %}
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/1.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">{{msg.nomComplet}}</span>
                                    <span class=\"time float-right\">dembe</span>
                                        <p>{{msg.message}}</p>
                                </span>
                            </a>
                            {% endfor %}
                        
                          
                      
                          </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-5\">
                    <div class=\"user-area dropdown float-right\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                        </a>

                        <div class=\"user-menu dropdown-menu\">
                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>Notifications <span class=\"count\">13</span></a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                        </div>
                    </div>

                    <div class=\"language-select dropdown\" id=\"language-select\">
                        <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                            <div class=\"dropdown-item\">
                                <span class=\"flag-icon flag-icon-fr\"></span>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-es\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-us\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-it\"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
            {% endblock %}
          {% block content %}

        <div class=\"breadcrumbs\">
            <div class=\"col-sm-4\">
                <div class=\"page-header float-left\">
                    <div class=\"page-title\">
                        <h1>Tableau de bord</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"page-header float-right\">
                    <div class=\"page-title\">
                        <ol class=\"breadcrumb text-right\">
                            <li class=\"active\">tableau de bord</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"content mt-3\">

            <div class=\"col-sm-12\">
                <div class=\"alert  alert-success alert-dismissible fade show\" role=\"alert\">
                  <span class=\"badge badge-pill badge-success\">Success</span> You successfully read this important alert message.
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            </div>


           <div class=\"col-sm-6 col-lg-3\">
                <div class=\"card text-white bg-flat-color-1\">
                    <div class=\"card-body pb-0\">
                        <div class=\"dropdown float-right\">
                            <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-cog\"></i>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <div class=\"dropdown-menu-content\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class=\"mb-0\">
                            <span class=\"count\">10</span>
                        </h4>
                        <p class=\"text-light\">Biens Disponibles</p>

                        <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"/>
                            <canvas id=\"widgetChart1\"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class=\"col-sm-6 col-lg-3\">
                <div class=\"card text-white bg-flat-color-2\">
                    <div class=\"card-body pb-0\">
                        <div class=\"dropdown float-right\">
                            <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-cog\"></i>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <div class=\"dropdown-menu-content\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class=\"mb-0\">
                            <span class=\"count\">3</span>
                        </h4>
                        <p class=\"text-light\">Biens Reserves</p>

                        <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"/>
                            <canvas id=\"widgetChart2\"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class=\"col-sm-6 col-lg-3\">
                <div class=\"card text-white bg-flat-color-3\">
                    <div class=\"card-body pb-0\">
                        <div class=\"dropdown float-right\">
                            <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-cog\"></i>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <div class=\"dropdown-menu-content\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class=\"mb-0\">
                            <span class=\"count\">6</span>
                        </h4>
                        <p class=\"text-light\">Contrat en cour</p>

                    </div>

                        <div class=\"chart-wrapper px-0\" style=\"height:70px;\" height=\"70\"/>
                            <canvas id=\"widgetChart3\"></canvas>
                        </div>
                </div>
            </div>
            <!--/.col-->

            <div class=\"col-sm-6 col-lg-3\">
                <div class=\"card text-white bg-flat-color-4\">
                    <div class=\"card-body pb-0\">
                        <div class=\"dropdown float-right\">
                            <button class=\"btn bg-transparent dropdown-toggle theme-toggle text-light\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-cog\"></i>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <div class=\"dropdown-menu-content\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class=\"mb-0\">
                            <span class=\"count\">5</span>
                        </h4>
                        <p class=\"text-light\">Contrats en terme</p>

                        <div class=\"chart-wrapper px-3\" style=\"height:70px;\" height=\"70\"/>
                            <canvas id=\"widgetChart4\"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class=\"col-lg-3 col-md-6\">
                <div class=\"social-box facebook\">
                    <i class=\"fa fa-facebook\"></i>
                    <ul>
                        <li>
                            <sctrong><span class=\"count\">40</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <sctrong><span class=\"count\">450</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class=\"col-lg-3 col-md-6\">
                <div class=\"social-box twitter\">
                    <i class=\"fa fa-twitter\"></i>
                    <ul>
                        <li>
                            <sctrong><span class=\"count\">30</span> k</strong>
                            <span>Amis</span>
                        </li>
                        <li>
                            <sctrong><span class=\"count\">450</span></strong>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class=\"col-lg-3 col-md-6\">
                <div class=\"social-box linkedin\">
                    <i class=\"fa fa-linkedin\"></i>
                    <ul>
                        <li>
                            <sctrong><span class=\"count\">40</span> +</strong>
                            <span>contacts</span>
                        </li>
                        <li>
                            <sctrong><span class=\"count\">250</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class=\"col-lg-3 col-md-6\">
                <div class=\"social-box google-plus\">
                    <i class=\"fa fa-google-plus\"></i>
                    <ul>
                        <li>
                            <sctrong><span class=\"count\">94</span> k</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <sctrong><span class=\"count\">92</span></strong>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->

            <div class=\"col-xl-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <h4 class=\"card-title mb-0\">Traffic</h4>
                                <div class=\"small text-muted\" >fevrier 2017</div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-sm-8 hidden-sm-down\">
                                <button type=\"button\" class=\"btn btn-primary float-right bg-flat-color-1\"><i class=\"fa fa-cloud-download\"></i></button>
                                <div class=\"btn-toolbar float-right\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                                    <div class=\"btn-group mr-3\" data-toggle=\"buttons\" aria-label=\"First group\">
                                        <label class=\"btn btn-outline-secondary\">
                                            <input type=\"radio\" name=\"options\" id=\"option1\"> Day
                                        </label>
                                        <label class=\"btn btn-outline-secondary active\">
                                            <input type=\"radio\" name=\"options\" id=\"option2\" checked=\"\"> Month
                                        </label>
                                        <label class=\"btn btn-outline-secondary\">
                                            <input type=\"radio\" name=\"options\" id=\"option3\"> Year
                                        </label>
                                    </div>
                                </div>
                            </div><!--/.col-->


                        </div><!--/.row-->
                        <div class=\"chart-wrapper mt-4\" />
                            <canvas id=\"trafficChart\" style=\"height:200px;\" height=\"200\"></canvas>
                        </div>

                    </div>
                    <div class=\"card-footer\">
                        <ul>
                            <li>
                                <div class=\"text-muted\">Visits</div>
                                <strong>29.703 Users (40%)</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 40%;\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                            <li class=\"hidden-sm-down\">
                                <div class=\"text-muted\">Unique</div>
                                <strong>24.093 Users (20%)</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 20%;\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                            <li>
                                <div class=\"text-muted\">Pageviews</div>
                                <strong>78.706 Views (60%)</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 60%;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                            <li class=\"hidden-sm-down\">
                                <div class=\"text-muted\">New Users</div>
                                <strong>22.123 Users (80%)</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                            <li class=\"hidden-sm-down\">
                                <div class=\"text-muted\">Bounce Rate</div>
                                <strong>40.15%</strong>
                                <div class=\"progress progress-xs mt-2\" style=\"height: 5px;\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%;\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

           <div class=\"col-xl-3 col-lg-6\">
                <section class=\"card\">
                    <div class=\"twt-feed blue-bg\">
                        <div class=\"corner-ribon black-ribon\">
                            <i class=\"fa fa-twitter\"></i>
                        </div>
                        <div class=\"fa fa-twitter wtt-mark\"></div>

                        <div class=\"media\">
                            <a href=\"#\">
                                <img class=\"align-self-center rounded-circle mr-3\" style=\"width:85px; height:85px;\" alt=\"\" src=\"images/admin.jpg\">
                            </a>
                            <div class=\"media-body\">
                                <h2 class=\"text-white display-6\">Jim Doe</h2>
                                <p class=\"text-light\">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"weather-category twt-category\">
                        <ul>
                            <li class=\"active\">
                                <h5>750</h5>
                                Tweets
                            </li>
                            <li>
                                <h5>865</h5>
                                Following
                            </li>
                            <li>
                                <h5>3645</h5>
                                Followers
                            </li>
                        </ul>
                    </div>
                    <div class=\"twt-write col-sm-12\">
                        <textarea placeholder=\"Write your Tweet and Enter\" rows=\"1\" class=\"form-control t-text-area\"></textarea>
                    </div>
                    <footer class=\"twt-footer\">
                        <a href=\"#\"><i class=\"fa fa-camera\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-map-marker\"></i></a>
                        New Castle, UK
                        <span class=\"pull-right\">
                            32
                        </span>
                    </footer>
                </section>
            </div>


            <div class=\"col-xl-3 col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"stat-widget-one\">
                            <div class=\"stat-icon dib\"><i class=\"ti-money text-success border-success\"></i></div>
                            <div class=\"stat-content dib\">
                                <div class=\"stat-text\">Total Profit</div>
                                <div class=\"stat-digit\">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"col-xl-3 col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"stat-widget-one\">
                            <div class=\"stat-icon dib\"><i class=\"ti-user text-primary border-primary\"></i></div>
                            <div class=\"stat-content dib\">
                                <div class=\"stat-text\">New Customer</div>
                                <div class=\"stat-digit\">961</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"stat-widget-one\">
                            <div class=\"stat-icon dib\"><i class=\"ti-layout-grid2 text-warning border-warning\"></i></div>
                            <div class=\"stat-content dib\">
                                <div class=\"stat-text\">Active Projects</div>
                                <div class=\"stat-digit\">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-6\">
                <div class=\"card\" >
                    <div class=\"card-header\">
                        <h4>World</h4>
                    </div>
                    <div class=\"Vector-map-js\">
                        <div id=\"vmap\" class=\"vmap\" style=\"height: 265px;\"></div>
                    </div>
                </div>
                <!-- /# card -->
             
            </div>


        </div> <!-- .content -->
     
    </div><!-- /#right-panel -->      {% endblock %}

    <!-- Right Panel -->
{% block javascripts %}
 

<script src=\"{{asset('assetss/js/popper.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/plugins.js')}}\"></script>
    <script src=\"{{asset('assetss/js/main.js')}}\"></script>

    <script src=\"{{asset('assetss/js/vendor/jquery-2.1.4.min.js')}}\"></script>
   

    <script src=\"{{asset('assetss/js/lib/data-table/datatables.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/dataTables.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/dataTables.buttons.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/jszip.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/pdfmake.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/vfs_fonts.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.html5.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.print.min.js')}}'\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.colVis.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/datatables-init.js')}}\"></script>
        <script src=\"{{asset('assetss/js/vendor/jquery-2.1.4.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/plugins.js')}}\"></script>
    <script src=\"{{asset('assetss/js/main.js')}}\"></script>


    <script src=\"{{asset('assetss/js/lib/chart-js/Chart.bundle.js')}}\"></script>
    <script src=\"{{asset('assetss/js/dashboard.js')}}\"></script>
    <script src=\"{{asset('assetss/js/widgets.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/jquery.vmap.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/jquery.vmap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/jquery.vmap.sampledata.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/country/jquery.vmap.world.js')}}\"></script>
     <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.2.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>

            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
          
    <script>
        ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
             \$('.bien').on(\"click\",function(){
  \$('#div').load('{{path(\"admin\")}}')
     })
   
    </script>
    {% endblock %}

</body>
</html>
", "KEURGUIimmoBundle::admin.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/admin.html.twig");
    }
}
