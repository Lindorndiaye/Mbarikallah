<?php

/* KEURGUIimmoBundle::accueil.html.twig */
class __TwigTemplate_9a646e192b314f3705dd5c35fe5ba7d2b4cfc2c71d6f04431e6dcb1cbbda55cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'catalogue' => array($this, 'block_catalogue'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_453556f029434d54d27acf0b7742601d1dd56eb1c049f214932454a3779e4a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453556f029434d54d27acf0b7742601d1dd56eb1c049f214932454a3779e4a7f->enter($__internal_453556f029434d54d27acf0b7742601d1dd56eb1c049f214932454a3779e4a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::accueil.html.twig"));

        $__internal_ad9301f9c0a85028c1de4f7d9ce9a267158586c394c14ab07ddde76c44bcf772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9301f9c0a85028c1de4f7d9ce9a267158586c394c14ab07ddde76c44bcf772->enter($__internal_ad9301f9c0a85028c1de4f7d9ce9a267158586c394c14ab07ddde76c44bcf772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::accueil.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 119
        echo "

";
        // line 121
        $this->displayBlock('content', $context, $blocks);
        // line 361
        $this->displayBlock('footer', $context, $blocks);
        // line 457
        $this->displayBlock('javascript', $context, $blocks);
        // line 464
        $this->displayBlock('style', $context, $blocks);
        
        $__internal_453556f029434d54d27acf0b7742601d1dd56eb1c049f214932454a3779e4a7f->leave($__internal_453556f029434d54d27acf0b7742601d1dd56eb1c049f214932454a3779e4a7f_prof);

        
        $__internal_ad9301f9c0a85028c1de4f7d9ce9a267158586c394c14ab07ddde76c44bcf772->leave($__internal_ad9301f9c0a85028c1de4f7d9ce9a267158586c394c14ab07ddde76c44bcf772_prof);

    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        $__internal_41e718d8ee8dea0fe663a4249ab77182955983fcca1f010adbff49dfcb3be76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e718d8ee8dea0fe663a4249ab77182955983fcca1f010adbff49dfcb3be76e->enter($__internal_41e718d8ee8dea0fe663a4249ab77182955983fcca1f010adbff49dfcb3be76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fbd3765d642b9e822ab960cd7b24cbfa7948f8301df885fe19d8430b0acacfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd3765d642b9e822ab960cd7b24cbfa7948f8301df885fe19d8430b0acacfd7->enter($__internal_fbd3765d642b9e822ab960cd7b24cbfa7948f8301df885fe19d8430b0acacfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Mbarrikallah-immo</title>
<meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("width=device-width, initial-scale=1.0"), "html", null, true);
        echo "\"/>

 \t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
 
  \t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/style.css"), "html", null, true);
        echo "\" />
  
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/custom.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\"/>

 <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Plugins css-->
   <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/tagsinput/jquery.tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/toggles/toggles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/timepicker/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/colorpicker/colorpicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/jquery-multi-select/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />


<!-- Owl stylesheet -->
<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- Owl stylesheet -->
   <!-- DataTables -->
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets1/plugins/datatables/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


<!-- slitslider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/custom.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
<!-- slitslider -->
  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://code.jquery.com/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/script.js"), "html", null, true);
        echo "\"></script>

</head>

<body>


<!-- Header Starts -->
<div class=\"navbar-wrapper\">

        <div class=\"navbar-inverse\" role=\"navigation\">
          <div class=\"container\">
            <div class=\"navbar-header\">


              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class=\"navbar-collapse  collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
               <li class=\"active\"><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Acuueil</a></li>
                <li><a href=\"about.php\">A propos</a></li>
                <li><a href=\"agents.php\">Agents</a></li>         
                <li><a href=\"blog.php\">Blog</a></li>
                <li><a href=\"contact.php\">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class=\"container\">

<!-- Header Starts -->
<div class=\"header\">
<a href=\"index.php\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/imageedit__5471324689.png"), "html", null, true);
        echo "\" alt=\"Realestate\"></a>

              <ul class=\"pull-right\">
                <li><a href=\"buysalerent.php\">Piscine</a></li>
                <li><a href=\"buysalerent.php\">Jacousie</a></li> 
               <li><a href=\"buysalerent.php\">Salle de Conference</a></li>         
        
              </ul>
</div>
<!-- #Header Starts -->
</div>
";
        
        $__internal_fbd3765d642b9e822ab960cd7b24cbfa7948f8301df885fe19d8430b0acacfd7->leave($__internal_fbd3765d642b9e822ab960cd7b24cbfa7948f8301df885fe19d8430b0acacfd7_prof);

        
        $__internal_41e718d8ee8dea0fe663a4249ab77182955983fcca1f010adbff49dfcb3be76e->leave($__internal_41e718d8ee8dea0fe663a4249ab77182955983fcca1f010adbff49dfcb3be76e_prof);

    }

    // line 121
    public function block_content($context, array $blocks = array())
    {
        $__internal_1be8d839d2acdcd66cbe0c4a2e4f1e72bedd6bfac775f267bc6ad39939b0281e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be8d839d2acdcd66cbe0c4a2e4f1e72bedd6bfac775f267bc6ad39939b0281e->enter($__internal_1be8d839d2acdcd66cbe0c4a2e4f1e72bedd6bfac775f267bc6ad39939b0281e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a04ed7fa4878b64631f0152eb2a670aa82bbbf3150a9a8d08dcebc477a069b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04ed7fa4878b64631f0152eb2a670aa82bbbf3150a9a8d08dcebc477a069b8c->enter($__internal_a04ed7fa4878b64631f0152eb2a670aa82bbbf3150a9a8d08dcebc477a069b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 122
        echo "<div class=\"\">

    

            <div id=\"slider\" class=\"sl-slider-wrapper\">

        <div class=\"sl-slider\">
        
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"-25\" data-slice2-rotation=\"-25\" data-slice1-scale=\"2\" data-slice2-scale=\"2\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-1\"></div>
             
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span>Sud Saint-Louis, Senegal</p>

<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>      <cite>200.000frcfa</cite>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"vertical\" data-slice1-rotation=\"10\" data-slice2-rotation=\"-15\" data-slice1-scale=\"1.5\" data-slice2-scale=\"1.5\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-2\"></div>
              <h2><a href=\"#\">
2 chambres à coucher et 1 appartement salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span>Nord Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>             
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"3\" data-slice2-rotation=\"3\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-3\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> Goxumbacc Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>             
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"vertical\" data-slice1-rotation=\"-5\" data-slice2-rotation=\"25\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-4\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> Guet-Ndar Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>              
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"-5\" data-slice2-rotation=\"10\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-5\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> santiaba Saint-louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>              
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id=\"nav-dots\" class=\"nav-dots\">
          <span class=\"nav-dot-current\"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>
<div class=\"banner-search\">
  <div class=\"container\"> 
    <!-- banner -->
    <h3>Recherchez en fonction de vos critaires</h3>
    <div class=\"searchbar\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-sm-6\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search of Properties\">
          <div class=\"row\">
          ";
        // line 213
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 213, $this->getSourceContext()); })()), 'form_start');
        echo "
           <div class=\"col-lg-3 col-sm-3 \">
            ";
        // line 215
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 215, $this->getSourceContext()); })()), "types", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 215, $this->getSourceContext()); })()), "types", array()), 'widget', array("attr" => array("class" => "task_field")));
        echo "
            </div>
            <div class=\"col-lg-3 col-sm-3 \">
            ";
        // line 218
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 218, $this->getSourceContext()); })()), "localites", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 218, $this->getSourceContext()); })()), "localites", array()), 'widget', array("attr" => array("class" => "task_field")));
        echo "
            </div>
            
            <div class=\"col-lg-3 col-sm-4\">
           ";
        // line 222
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 222, $this->getSourceContext()); })()), "prix", array()), 'label');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 222, $this->getSourceContext()); })()), "prix", array()), 'widget');
        echo "
              </div>
              <div class=\"col-lg-3 col-sm-4\">
              btn btn-success
         ";
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 226, $this->getSourceContext()); })()), "chercher", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "

              </div>
               ";
        // line 229
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 229, $this->getSourceContext()); })()), 'form_end');
        echo "
          </div>
          
          
        </div>
        <div class=\"col-lg-5 col-lg-offset-1 col-sm-6 \">
          <p>
Inscrivez-vous maintenant et soyez mis à jour avec toutes les offres immobilières.</p>
          <button class=\"btn btn-info\"   data-toggle=\"modal\" data-target=\"#loginpop\">Login</button>        </div>
      </div>
    </div>
  </div>
</div>

<!-- banner -->
<div class=\"container\">
  <div class=\"properties-listing spacer\"> <a href=\"buysalerent.php\" class=\"pull-right viewall\">View All Listing</a>
   
    ";
        // line 247
        $this->displayBlock('catalogue', $context, $blocks);
        // line 299
        echo "  </div>
  <div class=\"spacer\">
    <div class=\"row\">
      <div class=\"col-lg-6 col-sm-9 recent-view\">
        <h3>A propos de nous </h3>
        <p>Mbarrikallah immo est ....<br><a href=\"about.php\">Lire plus</a></p>
      
      </div>
      <div class=\"col-lg-5 col-lg-offset-1 col-sm-3 recommended\">
        <h3>Propriete recommande</h3>
        <div id=\"myCarousel\" class=\"carousel slide\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
          </ol>
          <!-- Carousel items -->
          <div class=\"carousel-inner\">
            <div class=\"item active\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_a04ed7fa4878b64631f0152eb2a670aa82bbbf3150a9a8d08dcebc477a069b8c->leave($__internal_a04ed7fa4878b64631f0152eb2a670aa82bbbf3150a9a8d08dcebc477a069b8c_prof);

        
        $__internal_1be8d839d2acdcd66cbe0c4a2e4f1e72bedd6bfac775f267bc6ad39939b0281e->leave($__internal_1be8d839d2acdcd66cbe0c4a2e4f1e72bedd6bfac775f267bc6ad39939b0281e_prof);

    }

    // line 247
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_ea50ddf1c3e55eb9d8f57af8835c60d2cfc40b36d03d7cc0e2f7b1978ff8a582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea50ddf1c3e55eb9d8f57af8835c60d2cfc40b36d03d7cc0e2f7b1978ff8a582->enter($__internal_ea50ddf1c3e55eb9d8f57af8835c60d2cfc40b36d03d7cc0e2f7b1978ff8a582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_35d9e2a4c23dd2e4a529c3ef0fd80dd55e8711b587986227c85b571454c6d112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d9e2a4c23dd2e4a529c3ef0fd80dd55e8711b587986227c85b571454c6d112->enter($__internal_35d9e2a4c23dd2e4a529c3ef0fd80dd55e8711b587986227c85b571454c6d112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 248
        if ( !array_key_exists("x", $context)) {
            // line 249
            echo "       <h2> Propriétés en vedette</h2>
   
    <div id=\"owl-example\" class=\"owl-carousel\">
    ";
            // line 252
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 252, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
                // line 253
                echo "      <div class=\"properties\">
       ";
                // line 254
                $context["c"] = 0;
                echo " 
       ";
                // line 255
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 256
                    echo "         ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 256, $this->getSourceContext()); })()) == 0)) {
                        // line 257
                        echo "        <div class=\"image-holder\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/properties/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-responsive\" alt=\"properties\"/>
          
            ";
                        // line 259
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 259, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 261
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
  <div class=\"status sold\">Sold</div>
        </div>
        <h4><a href=\"property-detail.php\">";
                // line 264
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "nom", array()), "html", null, true);
                echo "</a></h4>
        <p class=\"price\">Prix: ";
                // line 265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix", array()), "html", null, true);
                echo "frcfa</p>
        <div class=\"listing-detail\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>
        <a class=\"btn btn-primary\" href=\"";
                // line 267
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
                echo "\">Voir Details</a>
      </div>
     
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo " 
        ";
        }
        // line 272
        echo "     ";
        if (array_key_exists("x", $context)) {
            // line 273
            echo "      <h2> Propriétés en vedette</h2>
   
    <div id=\"owl-example\" class=\"owl-carousel\">
    ";
            // line 276
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["bien"]);
            foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
                // line 277
                echo "      <div class=\"properties\">
       ";
                // line 278
                $context["c"] = 0;
                echo " 
       ";
                // line 279
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "image", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 280
                    echo "         ";
                    if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 280, $this->getSourceContext()); })()) == 0)) {
                        // line 281
                        echo "        <div class=\"image-holder\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/properties/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                        echo "\" class=\"img-responsive\" alt=\"properties\"/>
          
            ";
                        // line 283
                        $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 283, $this->getSourceContext()); })()) + 1);
                        echo " 
         ";
                    }
                    // line 285
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
  <div class=\"status sold\">Sold</div>
        </div>
        <h4><a href=\"property-detail.php\">";
                // line 288
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "nom", array()), "html", null, true);
                echo "</a></h4>
        <p class=\"price\">Prix: ";
                // line 289
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix", array()), "html", null, true);
                echo "frcfa</p>
        <div class=\"listing-detail\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>
        <a class=\"btn btn-primary\" href=\"";
                // line 291
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
                echo "\">Voir Details</a>
      </div>
     
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo " 

     
     ";
        }
        // line 298
        echo "    ";
        
        $__internal_35d9e2a4c23dd2e4a529c3ef0fd80dd55e8711b587986227c85b571454c6d112->leave($__internal_35d9e2a4c23dd2e4a529c3ef0fd80dd55e8711b587986227c85b571454c6d112_prof);

        
        $__internal_ea50ddf1c3e55eb9d8f57af8835c60d2cfc40b36d03d7cc0e2f7b1978ff8a582->leave($__internal_ea50ddf1c3e55eb9d8f57af8835c60d2cfc40b36d03d7cc0e2f7b1978ff8a582_prof);

    }

    // line 361
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7ae482efa30c8da6fad1936d8ae544f6f2c227e7e369bcde15db6ad7c050c9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae482efa30c8da6fad1936d8ae544f6f2c227e7e369bcde15db6ad7c050c9df->enter($__internal_7ae482efa30c8da6fad1936d8ae544f6f2c227e7e369bcde15db6ad7c050c9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1c995a59a6f1e68d68a91120ff343cf5fe8234889a4daf57a39e938d96d54ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c995a59a6f1e68d68a91120ff343cf5fe8234889a4daf57a39e938d96d54ed0->enter($__internal_1c995a59a6f1e68d68a91120ff343cf5fe8234889a4daf57a39e938d96d54ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 362
        echo "
<div class=\"footer\">

<div class=\"container\">



<div class=\"row\">
            <div class=\"col-lg-3 col-sm-3\">
                   <h4>Informations</h4>
                   <ul class=\"row\">
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"about.php\">A propos</a></li>
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"agents.php\">Agents</a></li>         
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"blog.php\">Blog</a></li>
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"contact.php\">Contact</a></li>
              </ul>
            </div>
            
            <div class=\"col-lg-3 col-sm-3\">
                    <h4>Notifications</h4>
                    <p>
Recevez des notifications sur les dernières propriétés sur notre place de marché.</p>
                    <form class=\"form-inline\" role=\"form\">
                            <input type=\"text\" placeholder=\"Enter Your email address\" class=\"form-control\">
                                <button class=\"btn btn-success\" type=\"button\">Notify Me!</button></form>
            </div>
            
            <div class=\"col-lg-3 col-sm-3\">
                    <h4>Suivez nous</h4>
                    <a href=\"#\"><img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\"></a>
                    <a href=\"#\"><img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\"></a>
                    <a href=\"#\"><img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/linkedin.png"), "html", null, true);
        echo "\" alt=\"linkedin\"></a>
                    <a href=\"#\"><img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/instagram.png"), "html", null, true);
        echo "\" alt=\"instagram\"></a>
            </div>

             <div class=\"col-lg-3 col-sm-3\">
                    <h4>Contacter nous</h4>
                    <p><b>Mbarrikallah-immo.</b><br>
<span class=\"glyphicon glyphicon-map-marker\"></span> Goxumbacc Saint-louis, Senegal <br>
<span class=\"glyphicon glyphicon-envelope\"></span> kheuchebambiste@gmail.com<br>
<span class=\"glyphicon glyphicon-earphone\"></span> (221) 774262278</p>
            </div>
        </div>
<p class=\"copyright\">Copyright 2018. Tout droit reserve.\t</p>


</div></div>




<!-- Modal -->
<div id=\"loginpop\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"row\">
        <div class=\"col-sm-6 login\">
        <h4>Login</h4>
          <form class=\"\" role=\"form\">
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
          <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Enter email\">
        </div>
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
          <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\">
        </div>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\"> Remember me
          </label>
        </div>
        <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
      </form>          
        </div>
        <div class=\"col-sm-6\">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type=\"submit\" class=\"btn btn-info\"  onclick=\"window.location.href='register.php'\">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>
</html>



";
        
        $__internal_1c995a59a6f1e68d68a91120ff343cf5fe8234889a4daf57a39e938d96d54ed0->leave($__internal_1c995a59a6f1e68d68a91120ff343cf5fe8234889a4daf57a39e938d96d54ed0_prof);

        
        $__internal_7ae482efa30c8da6fad1936d8ae544f6f2c227e7e369bcde15db6ad7c050c9df->leave($__internal_7ae482efa30c8da6fad1936d8ae544f6f2c227e7e369bcde15db6ad7c050c9df_prof);

    }

    // line 457
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6ead6ed039a4554636fd1496f7aac5cd2ef2a695ede08f16a892f25ae22c495b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ead6ed039a4554636fd1496f7aac5cd2ef2a695ede08f16a892f25ae22c495b->enter($__internal_6ead6ed039a4554636fd1496f7aac5cd2ef2a695ede08f16a892f25ae22c495b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_48dfad7503149bba062f0879cfbfc7fa4e1ec27d29740c646ebf2ff7c136e246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dfad7503149bba062f0879cfbfc7fa4e1ec27d29740c646ebf2ff7c136e246->enter($__internal_48dfad7503149bba062f0879cfbfc7fa4e1ec27d29740c646ebf2ff7c136e246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 458
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/script.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script>
       
";
        
        $__internal_48dfad7503149bba062f0879cfbfc7fa4e1ec27d29740c646ebf2ff7c136e246->leave($__internal_48dfad7503149bba062f0879cfbfc7fa4e1ec27d29740c646ebf2ff7c136e246_prof);

        
        $__internal_6ead6ed039a4554636fd1496f7aac5cd2ef2a695ede08f16a892f25ae22c495b->leave($__internal_6ead6ed039a4554636fd1496f7aac5cd2ef2a695ede08f16a892f25ae22c495b_prof);

    }

    // line 464
    public function block_style($context, array $blocks = array())
    {
        $__internal_6615e4b9bab7f3617a4746fd184ad64981032e5e277ad1fef75433b1161eb9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6615e4b9bab7f3617a4746fd184ad64981032e5e277ad1fef75433b1161eb9c6->enter($__internal_6615e4b9bab7f3617a4746fd184ad64981032e5e277ad1fef75433b1161eb9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_f374773a866a456cb67988af14b576eaeec05b0b9b1444c0de6c8640dd37ff9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f374773a866a456cb67988af14b576eaeec05b0b9b1444c0de6c8640dd37ff9b->enter($__internal_f374773a866a456cb67988af14b576eaeec05b0b9b1444c0de6c8640dd37ff9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 465
        echo "
";
        
        $__internal_f374773a866a456cb67988af14b576eaeec05b0b9b1444c0de6c8640dd37ff9b->leave($__internal_f374773a866a456cb67988af14b576eaeec05b0b9b1444c0de6c8640dd37ff9b_prof);

        
        $__internal_6615e4b9bab7f3617a4746fd184ad64981032e5e277ad1fef75433b1161eb9c6->leave($__internal_6615e4b9bab7f3617a4746fd184ad64981032e5e277ad1fef75433b1161eb9c6_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle::accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  870 => 465,  861 => 464,  848 => 461,  844 => 460,  840 => 459,  835 => 458,  826 => 457,  753 => 394,  749 => 393,  745 => 392,  741 => 391,  710 => 362,  701 => 361,  691 => 298,  685 => 294,  675 => 291,  670 => 289,  666 => 288,  656 => 285,  651 => 283,  645 => 281,  642 => 280,  638 => 279,  634 => 278,  631 => 277,  627 => 276,  622 => 273,  619 => 272,  615 => 270,  605 => 267,  600 => 265,  596 => 264,  586 => 261,  581 => 259,  575 => 257,  572 => 256,  568 => 255,  564 => 254,  561 => 253,  557 => 252,  552 => 249,  550 => 248,  541 => 247,  517 => 347,  505 => 338,  493 => 329,  481 => 320,  458 => 299,  456 => 247,  435 => 229,  429 => 226,  421 => 222,  413 => 218,  406 => 215,  401 => 213,  308 => 122,  299 => 121,  277 => 107,  251 => 84,  220 => 56,  216 => 55,  212 => 54,  207 => 52,  203 => 51,  199 => 50,  195 => 49,  191 => 48,  184 => 44,  180 => 43,  176 => 42,  172 => 41,  168 => 40,  162 => 37,  158 => 36,  154 => 35,  147 => 31,  143 => 30,  139 => 29,  135 => 28,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  109 => 20,  105 => 19,  101 => 18,  97 => 17,  93 => 16,  88 => 14,  84 => 13,  79 => 11,  74 => 9,  69 => 7,  62 => 2,  53 => 1,  43 => 464,  41 => 457,  39 => 361,  37 => 121,  33 => 119,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Mbarrikallah-immo</title>
<meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"{{asset('width=device-width, initial-scale=1.0')}}\"/>

 \t<link rel=\"stylesheet\" href=\"{{asset('assets/bootstrap/css/bootstrap.css')}}\" />
 
  \t<link rel=\"stylesheet\" href=\"{{asset('assets/slitslider/css/style.css')}}\" />
  
<link rel=\"stylesheet\" href=\"{{asset('assets/slitslider/css/custom.css')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('assets/style.css')}}\"/>

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


<!-- Owl stylesheet -->
<link rel=\"stylesheet\" href=\"{{asset('assets/owl-carousel/owl.carousel.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('assets/owl-carousel/owl.theme.css')}}\">
<script src=\"{{asset('assets/owl-carousel/owl.carousel.js')}}\"></script>
<!-- Owl stylesheet -->
   <!-- DataTables -->
        <link href=\"{{asset('assets1/plugins/datatables/jquery.dataTables.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('assets1/plugins/datatables/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('assets1/plugins/datatables/fixedHeader.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('assets1/plugins/datatables/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('assets1/plugins/datatables/scroller.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />


<!-- slitslider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/slitslider/css/style.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/slitslider/css/custom.css')}}\" />
    <script type=\"text/javascript\" src=\"{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/slitslider/js/jquery.slitslider.js')}}\"></script>
<!-- slitslider -->
  <script src=\"{{asset('http://code.jquery.com/jquery-1.9.1.min.js')}}\"></script>
\t<script src=\"{{asset('assets/bootstrap/js/bootstrap.js')}}\"></script>
  <script src=\"{{asset('assets/script.js')}}\"></script>

</head>

<body>


<!-- Header Starts -->
<div class=\"navbar-wrapper\">

        <div class=\"navbar-inverse\" role=\"navigation\">
          <div class=\"container\">
            <div class=\"navbar-header\">


              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class=\"navbar-collapse  collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
               <li class=\"active\"><a href=\"{{path('accueil')}}\">Acuueil</a></li>
                <li><a href=\"about.php\">A propos</a></li>
                <li><a href=\"agents.php\">Agents</a></li>         
                <li><a href=\"blog.php\">Blog</a></li>
                <li><a href=\"contact.php\">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class=\"container\">

<!-- Header Starts -->
<div class=\"header\">
<a href=\"index.php\"><img src=\"{{asset('images/imageedit__5471324689.png')}}\" alt=\"Realestate\"></a>

              <ul class=\"pull-right\">
                <li><a href=\"buysalerent.php\">Piscine</a></li>
                <li><a href=\"buysalerent.php\">Jacousie</a></li> 
               <li><a href=\"buysalerent.php\">Salle de Conference</a></li>         
        
              </ul>
</div>
<!-- #Header Starts -->
</div>
{% endblock %}


{% block content %}
<div class=\"\">

    

            <div id=\"slider\" class=\"sl-slider-wrapper\">

        <div class=\"sl-slider\">
        
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"-25\" data-slice2-rotation=\"-25\" data-slice1-scale=\"2\" data-slice2-scale=\"2\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-1\"></div>
             
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span>Sud Saint-Louis, Senegal</p>

<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>      <cite>200.000frcfa</cite>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"vertical\" data-slice1-rotation=\"10\" data-slice2-rotation=\"-15\" data-slice1-scale=\"1.5\" data-slice2-scale=\"1.5\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-2\"></div>
              <h2><a href=\"#\">
2 chambres à coucher et 1 appartement salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span>Nord Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>             
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"3\" data-slice2-rotation=\"3\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-3\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> Goxumbacc Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>             
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"vertical\" data-slice1-rotation=\"-5\" data-slice2-rotation=\"25\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-4\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> Guet-Ndar Saint-Louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>              
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
          
          <div class=\"sl-slide\" data-orientation=\"horizontal\" data-slice1-rotation=\"-5\" data-slice2-rotation=\"10\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
            <div class=\"sl-slide-inner\">
              <div class=\"bg-img bg-img-5\"></div>
              <h2><a href=\"#\">2 Chambre et 1 Aire de salle à manger en location</a></h2>
              <blockquote>              
              <p class=\"location\"><span class=\"glyphicon glyphicon-map-marker\"></span> santiaba Saint-louis, Senegal</p>
<p> Jusqu'à ce qu'il étende le cercle de sa compassion à tous les êtres vivants, l'homme ne trouvera pas lui-même la paix. </p>              
              <cite>200.000frcfa</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id=\"nav-dots\" class=\"nav-dots\">
          <span class=\"nav-dot-current\"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>
<div class=\"banner-search\">
  <div class=\"container\"> 
    <!-- banner -->
    <h3>Recherchez en fonction de vos critaires</h3>
    <div class=\"searchbar\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-sm-6\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search of Properties\">
          <div class=\"row\">
          {{ form_start(form) }}
           <div class=\"col-lg-3 col-sm-3 \">
            {{ form_label(form.types) }}{{ form_widget(form.types,{'attr': {'class': 'task_field'}}) }}
            </div>
            <div class=\"col-lg-3 col-sm-3 \">
            {{ form_label(form.localites) }}{{ form_widget(form.localites,{'attr': {'class': 'task_field'}}) }}
            </div>
            
            <div class=\"col-lg-3 col-sm-4\">
           {{ form_label(form.prix) }}{{ form_widget(form.prix) }}
              </div>
              <div class=\"col-lg-3 col-sm-4\">
              btn btn-success
         {{ form_widget(form.chercher,{'attr': {'class': 'btn btn-success'}}) }}

              </div>
               {{ form_end(form) }}
          </div>
          
          
        </div>
        <div class=\"col-lg-5 col-lg-offset-1 col-sm-6 \">
          <p>
Inscrivez-vous maintenant et soyez mis à jour avec toutes les offres immobilières.</p>
          <button class=\"btn btn-info\"   data-toggle=\"modal\" data-target=\"#loginpop\">Login</button>        </div>
      </div>
    </div>
  </div>
</div>

<!-- banner -->
<div class=\"container\">
  <div class=\"properties-listing spacer\"> <a href=\"buysalerent.php\" class=\"pull-right viewall\">View All Listing</a>
   
    {% block catalogue %}
{% if x is not defined %}
       <h2> Propriétés en vedette</h2>
   
    <div id=\"owl-example\" class=\"owl-carousel\">
    {% for bien in biens %}
      <div class=\"properties\">
       {% set c = 0 %} 
       {% for i in bien.image %}
         {% if c == 0 %}
        <div class=\"image-holder\"><img src=\"{{asset('images/properties/'~i.image)}}\" class=\"img-responsive\" alt=\"properties\"/>
          
            {% set c = c+ 1 %} 
         {% endif %}
  {% endfor %} 
  <div class=\"status sold\">Sold</div>
        </div>
        <h4><a href=\"property-detail.php\">{{bien.nom}}</a></h4>
        <p class=\"price\">Prix: {{bien.prix}}frcfa</p>
        <div class=\"listing-detail\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>
        <a class=\"btn btn-primary\" href=\"{{path('detail',{'id':bien.id})}}\">Voir Details</a>
      </div>
     
     {% endfor %} 
        {% endif %}
     {% if x is defined %}
      <h2> Propriétés en vedette</h2>
   
    <div id=\"owl-example\" class=\"owl-carousel\">
    {% for bien in bien %}
      <div class=\"properties\">
       {% set c = 0 %} 
       {% for i in bien.image %}
         {% if c == 0 %}
        <div class=\"image-holder\"><img src=\"{{asset('images/properties/'~i.image)}}\" class=\"img-responsive\" alt=\"properties\"/>
          
            {% set c = c+ 1 %} 
         {% endif %}
  {% endfor %} 
  <div class=\"status sold\">Sold</div>
        </div>
        <h4><a href=\"property-detail.php\">{{bien.nom}}</a></h4>
        <p class=\"price\">Prix: {{bien.prix}}frcfa</p>
        <div class=\"listing-detail\"><span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>
        <a class=\"btn btn-primary\" href=\"{{path('detail',{'id':bien.id})}}\">Voir Details</a>
      </div>
     
     {% endfor %} 

     
     {% endif %}
    {% endblock  %}
  </div>
  <div class=\"spacer\">
    <div class=\"row\">
      <div class=\"col-lg-6 col-sm-9 recent-view\">
        <h3>A propos de nous </h3>
        <p>Mbarrikallah immo est ....<br><a href=\"about.php\">Lire plus</a></p>
      
      </div>
      <div class=\"col-lg-5 col-lg-offset-1 col-sm-3 recommended\">
        <h3>Propriete recommande</h3>
        <div id=\"myCarousel\" class=\"carousel slide\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
          </ol>
          <!-- Carousel items -->
          <div class=\"carousel-inner\">
            <div class=\"item active\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"{{asset('images/properties/1.jpg')}}\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"{{asset('images/properties/2.jpg')}}\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"{{asset('images/properties/3.jpg')}}\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
            <div class=\"item\">
              <div class=\"row\">
                <div class=\"col-lg-4\"><img src=\"{{asset('images/properties/4.jpg')}}\" class=\"img-responsive\" alt=\"properties\"/></div>
                <div class=\"col-lg-8\">
                  <h5><a href=\"property-detail.php\">Integer sed porta quam</a></h5>
                  <p class=\"price\">\$300,000</p>
                  <a href=\"property-detail.php\" class=\"more\">Plus de details</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
{% block footer %}

<div class=\"footer\">

<div class=\"container\">



<div class=\"row\">
            <div class=\"col-lg-3 col-sm-3\">
                   <h4>Informations</h4>
                   <ul class=\"row\">
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"about.php\">A propos</a></li>
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"agents.php\">Agents</a></li>         
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"blog.php\">Blog</a></li>
                <li class=\"col-lg-12 col-sm-12 col-xs-3\"><a href=\"contact.php\">Contact</a></li>
              </ul>
            </div>
            
            <div class=\"col-lg-3 col-sm-3\">
                    <h4>Notifications</h4>
                    <p>
Recevez des notifications sur les dernières propriétés sur notre place de marché.</p>
                    <form class=\"form-inline\" role=\"form\">
                            <input type=\"text\" placeholder=\"Enter Your email address\" class=\"form-control\">
                                <button class=\"btn btn-success\" type=\"button\">Notify Me!</button></form>
            </div>
            
            <div class=\"col-lg-3 col-sm-3\">
                    <h4>Suivez nous</h4>
                    <a href=\"#\"><img src=\"{{asset('images/facebook.png')}}\" alt=\"facebook\"></a>
                    <a href=\"#\"><img src=\"{{asset('images/twitter.png')}}\" alt=\"twitter\"></a>
                    <a href=\"#\"><img src=\"{{asset('images/linkedin.png')}}\" alt=\"linkedin\"></a>
                    <a href=\"#\"><img src=\"{{asset('images/instagram.png')}}\" alt=\"instagram\"></a>
            </div>

             <div class=\"col-lg-3 col-sm-3\">
                    <h4>Contacter nous</h4>
                    <p><b>Mbarrikallah-immo.</b><br>
<span class=\"glyphicon glyphicon-map-marker\"></span> Goxumbacc Saint-louis, Senegal <br>
<span class=\"glyphicon glyphicon-envelope\"></span> kheuchebambiste@gmail.com<br>
<span class=\"glyphicon glyphicon-earphone\"></span> (221) 774262278</p>
            </div>
        </div>
<p class=\"copyright\">Copyright 2018. Tout droit reserve.\t</p>


</div></div>




<!-- Modal -->
<div id=\"loginpop\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"row\">
        <div class=\"col-sm-6 login\">
        <h4>Login</h4>
          <form class=\"\" role=\"form\">
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
          <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Enter email\">
        </div>
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
          <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\">
        </div>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\"> Remember me
          </label>
        </div>
        <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
      </form>          
        </div>
        <div class=\"col-sm-6\">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type=\"submit\" class=\"btn btn-info\"  onclick=\"window.location.href='register.php'\">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>
</html>



{% endblock %}
{% block javascript %}
 <script src=\"{{asset('assets/script.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.slitslider.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}\"></script>
       
{% endblock %}
{% block style %}

{% endblock %}", "KEURGUIimmoBundle::accueil.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/accueil.html.twig");
    }
}
