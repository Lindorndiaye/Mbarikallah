<?php

/* KEURGUIimmoBundle:front:contratBail.html.twig */
class __TwigTemplate_1d1253fac453c42e193d0d2e527b3834048ba95d8c3a6aae941465e468f48f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c27ebc90749a4c0326e228650b133c56b8e49e4bdcf83558492ac13b743d4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c27ebc90749a4c0326e228650b133c56b8e49e4bdcf83558492ac13b743d4ed->enter($__internal_7c27ebc90749a4c0326e228650b133c56b8e49e4bdcf83558492ac13b743d4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:contratBail.html.twig"));

        $__internal_d673f496b7a0c834355d860686028def16c5678eb917780ae96eb11c38580602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d673f496b7a0c834355d860686028def16c5678eb917780ae96eb11c38580602->enter($__internal_d673f496b7a0c834355d860686028def16c5678eb917780ae96eb11c38580602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:contratBail.html.twig"));

        // line 1
        echo "<html>

<head>
<title>Mbarrikallah-immo</title>
<meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("width=device-width, initial-scale=1.0"), "html", null, true);
        echo "\"/>

 \t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
 
  \t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/style.css"), "html", null, true);
        echo "\" />
  
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/custom.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\"/>
  <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://code.jquery.com/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/script.js"), "html", null, true);
        echo "\"></script>



<!-- Owl stylesheet -->
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/css/custom.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
<!-- slitslider -->

</head>
    <style>
      /* On commence par définir les propriétés de la page : les marges en haut
       * et en bas permettront d'insérer un en-tête et un pied de page */
      @page {
        margin: 50px 0 25px 0;
      }
      img{
        width:100px;
        margin-top:5px;
        margin-left:-90px;
      }
      #ct{
        margin-left:60px;
      }
      /* La position fixed permet de placer les éléments sur toutes les pages
       * du document pdf, le reste n'est que décoration */
      #header, #footer {
        position: fixed; 
        left: 0px;
        right: 0px;
        color: white;
        background-color: #000;
      }
      #header {
        top: -50px;
        height: 50px;
        text-align:center;
      }
      #footer {
        bottom: -25px;
        height: 25px;
      }
      /* Pour améliorer un peu la lisibilité on ajoute une marge au corps de
       * texte. Ca aurait pu être fait en agrandissant les marges au niveau
       * de la page mais je trouve qu'utiliser un div dédié pour le contenu
       * est cohérent */
      #content { 
        margin: 25px;
      }
      /* On teste quelques d'options css différentes */
      h1 { text-transform: uppercase; text-align: center; font-weight: bold}
      h2 {font-style: italic; font-weight: bold; border: solid 1px #ccc; }
      /* On met même en place un système de colonnes pour tester les float */
      .col-25, .col-75 { float: left; }
      .col-25 { width: 25%; }
      .col-75 { width: 75%; }
      .row { clear: both; }
    </style>
  </head>
  <body>
    <!-- On commence par ajouter le header et le footer pour qu'ils soient 
      visibles sur toutes les pages. Si on les ajoute après avoir rempli plus
      d'une page, ils ne seront insérés qu'après le saut de page -->
    <div id=\"header\">
      <!-- Grâce aux options définies dans le contrôleur on peut insérer des 
        images à partir de leur url absolue -->
             <img src=\"images/imageedit__5471324689.png\" alt=\"Realestate\">

      CONTRAT DE LOCATION
    </div>
    <div id=\"footer\"></div>
    <!-- Maintenant on rempli le document -->        
    <div id=\"content\">
 
 <pre>L'Agence\t\t\t\t                                  Le Proprietaire</pre>



    </div>       
  </body>
</html>
";
        // line 107
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_7c27ebc90749a4c0326e228650b133c56b8e49e4bdcf83558492ac13b743d4ed->leave($__internal_7c27ebc90749a4c0326e228650b133c56b8e49e4bdcf83558492ac13b743d4ed_prof);

        
        $__internal_d673f496b7a0c834355d860686028def16c5678eb917780ae96eb11c38580602->leave($__internal_d673f496b7a0c834355d860686028def16c5678eb917780ae96eb11c38580602_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4005093abeb6d506ebfc81f527741a6a619bf1b91eb65f3dfb4ad5d9af953a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4005093abeb6d506ebfc81f527741a6a619bf1b91eb65f3dfb4ad5d9af953a80->enter($__internal_4005093abeb6d506ebfc81f527741a6a619bf1b91eb65f3dfb4ad5d9af953a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_7a1efc19b0e37651c47bceb89c91ac20d51cf94c82a898c259366414509eff9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1efc19b0e37651c47bceb89c91ac20d51cf94c82a898c259366414509eff9c->enter($__internal_7a1efc19b0e37651c47bceb89c91ac20d51cf94c82a898c259366414509eff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 108
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/script.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_7a1efc19b0e37651c47bceb89c91ac20d51cf94c82a898c259366414509eff9c->leave($__internal_7a1efc19b0e37651c47bceb89c91ac20d51cf94c82a898c259366414509eff9c_prof);

        
        $__internal_4005093abeb6d506ebfc81f527741a6a619bf1b91eb65f3dfb4ad5d9af953a80->leave($__internal_4005093abeb6d506ebfc81f527741a6a619bf1b91eb65f3dfb4ad5d9af953a80_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:contratBail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 111,  209 => 110,  205 => 109,  200 => 108,  182 => 107,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  80 => 23,  76 => 22,  72 => 21,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  43 => 10,  38 => 8,  33 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>

<head>
<title>Mbarrikallah-immo</title>
<meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"{{asset('width=device-width, initial-scale=1.0')}}\"/>

 \t<link rel=\"stylesheet\" href=\"{{asset('assets/bootstrap/css/bootstrap.css')}}\" />
 
  \t<link rel=\"stylesheet\" href=\"{{asset('assets/slitslider/css/style.css')}}\" />
  
<link rel=\"stylesheet\" href=\"{{asset('assets/slitslider/css/custom.css')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('assets/style.css')}}\"/>
  <script src=\"{{asset('http://code.jquery.com/jquery-1.9.1.min.js')}}\"></script>
\t<script src=\"{{asset('assets/bootstrap/js/bootstrap.js')}}\"></script>
  <script src=\"{{asset('assets/script.js')}}\"></script>



<!-- Owl stylesheet -->
<link rel=\"stylesheet\" href=\"{{asset('assets/owl-carousel/owl.carousel.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('assets/owl-carousel/owl.theme.css')}}\">
<script src=\"{{asset('assets/owl-carousel/owl.carousel.js')}}\"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/slitslider/css/style.css')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/slitslider/css/custom.css')}}\" />
    <script type=\"text/javascript\" src=\"{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/slitslider/js/jquery.slitslider.js')}}\"></script>
<!-- slitslider -->

</head>
    <style>
      /* On commence par définir les propriétés de la page : les marges en haut
       * et en bas permettront d'insérer un en-tête et un pied de page */
      @page {
        margin: 50px 0 25px 0;
      }
      img{
        width:100px;
        margin-top:5px;
        margin-left:-90px;
      }
      #ct{
        margin-left:60px;
      }
      /* La position fixed permet de placer les éléments sur toutes les pages
       * du document pdf, le reste n'est que décoration */
      #header, #footer {
        position: fixed; 
        left: 0px;
        right: 0px;
        color: white;
        background-color: #000;
      }
      #header {
        top: -50px;
        height: 50px;
        text-align:center;
      }
      #footer {
        bottom: -25px;
        height: 25px;
      }
      /* Pour améliorer un peu la lisibilité on ajoute une marge au corps de
       * texte. Ca aurait pu être fait en agrandissant les marges au niveau
       * de la page mais je trouve qu'utiliser un div dédié pour le contenu
       * est cohérent */
      #content { 
        margin: 25px;
      }
      /* On teste quelques d'options css différentes */
      h1 { text-transform: uppercase; text-align: center; font-weight: bold}
      h2 {font-style: italic; font-weight: bold; border: solid 1px #ccc; }
      /* On met même en place un système de colonnes pour tester les float */
      .col-25, .col-75 { float: left; }
      .col-25 { width: 25%; }
      .col-75 { width: 75%; }
      .row { clear: both; }
    </style>
  </head>
  <body>
    <!-- On commence par ajouter le header et le footer pour qu'ils soient 
      visibles sur toutes les pages. Si on les ajoute après avoir rempli plus
      d'une page, ils ne seront insérés qu'après le saut de page -->
    <div id=\"header\">
      <!-- Grâce aux options définies dans le contrôleur on peut insérer des 
        images à partir de leur url absolue -->
             <img src=\"images/imageedit__5471324689.png\" alt=\"Realestate\">

      CONTRAT DE LOCATION
    </div>
    <div id=\"footer\"></div>
    <!-- Maintenant on rempli le document -->        
    <div id=\"content\">
 
 <pre>L'Agence\t\t\t\t                                  Le Proprietaire</pre>



    </div>       
  </body>
</html>
{% block javascript %}
 <script src=\"{{asset('assets/script.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.slitslider.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}\"></script>

{% endblock %}", "KEURGUIimmoBundle:front:contratBail.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/contratBail.html.twig");
    }
}
