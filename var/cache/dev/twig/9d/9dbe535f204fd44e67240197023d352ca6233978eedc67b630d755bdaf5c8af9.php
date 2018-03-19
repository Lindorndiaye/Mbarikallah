<?php

/* KEURGUIimmoBundle:front:pdf.html.twig */
class __TwigTemplate_77be0377ea0136004b02a573503f5c882f26d88e6c0e66f01ebe8cdf12080d6b extends Twig_Template
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
        $__internal_2753bdd0182c9e3e529eac0a007e0560f4f65d2ebb24a1d28e93e552c7df0d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2753bdd0182c9e3e529eac0a007e0560f4f65d2ebb24a1d28e93e552c7df0d19->enter($__internal_2753bdd0182c9e3e529eac0a007e0560f4f65d2ebb24a1d28e93e552c7df0d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:pdf.html.twig"));

        $__internal_045752aaf1aa4892439fe38918a973bece4966757bd808287ceca323add03363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045752aaf1aa4892439fe38918a973bece4966757bd808287ceca323add03363->enter($__internal_045752aaf1aa4892439fe38918a973bece4966757bd808287ceca323add03363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:pdf.html.twig"));

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
    <p>
      Entre les soussignés :</p>

<p>
<p>
L'agence Mbarrikallah-immo, propriétaire du
ci-après dénommé(e) \"Le Bailleur\"</p>

et
<p>
M. ou Mme ";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 109, $this->getSourceContext()); })()), "html", null, true);
        echo " demeurant (adresse) 
ci-après dénommé(e)(s) \"Le Locataire\"</p>

<p>IL A ETE CONVENU ET ARRETE CE QUI SUIT :</p>
<p>
Le Bailleur donne en location les locaux et équipements ci-après désignés au Locataire qui les accepte :
- Les locaux et équipements privatifs suivants :  ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 115, $this->getSourceContext()); })()), "html", null, true);
        echo "

situé (e) à l'adresse suivante :  ";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new Twig_Error_Runtime('Variable "localite" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
        echo " 
ainsi que, le cas échéant, les équipements désignés sur une liste annexée aux présentes.

</p>1. Durée du contrat
Le présent contrat est conclu pour une durée de un an. Il prendra effet à compter du
Le présent bail se renouvellera cependant par tacite reconduction par période de ";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new Twig_Error_Runtime('Variable "date" does not exist.', 122, $this->getSourceContext()); })()), "html", null, true);
        echo " faute de préavis contraire donné par l'une des parties à l'autre sous forme de lettre recommandée trois mois avant l'expiration de la période en cours.
</p>
<p>
2. Résiliation 
Il pourra être résilié par lettre recommandée avec avis de réception ou par acte d'huissier :
-par Le Locataire, à tout moment, sous réserve de prévenir Le Bailleur trois mois à l'avance. 
-par Le Bailleur, au terme du contrat, en cas de motif sérieux et légitime résultant notamment de l'inexécution par Le Locataire de l'une des obligations lui incombant.
</p>
<p>
3. Destination des lieux
Les lieux loués, objet du présent contrat, sont destinés à l'usage exclusif d'habitation. Le Locataire ne peut, en conséquence, y exercer une quelconque profession qu'elle soit artisanale, commerciale ou libérale, sauf à solliciter et à obtenir l'autorisation expresse et écrite du Bailleur.
</p>
<p>
4. Montant de la location
La présente location est consentie et acceptée moyennant paiement d'un loyer mensuel librement fixé entre les parties.
Le montant de la présente location s'établit comme suit :

TOTAL MENSUEL\t\t\t";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["mensuel"]) || array_key_exists("mensuel", $context) ? $context["mensuel"] : (function () { throw new Twig_Error_Runtime('Variable "mensuel" does not exist.', 139, $this->getSourceContext()); })()), "html", null, true);
        echo " dirhams\t\t
La somme, ci-dessus mentionnée, sera payable au plus tard le ... de chaque mois.
Le présent loyer pourra être révisé à la demande de l'une ou l'autre des parties tous les 1ans.
Dans le cas où le présent loyer sera réglementé par des textes législatifs, les variations prévues par ces textes seront applicables de plein droit.
</p>
<p>
5. Dépôt de garantie
Aux fins de garantir la bonne exécution de ses obligations, Le Locataire versera un dépôt de garantie. Le locataire verse ainsi ce jour au Bailleur, qui le reconnaît et lui en donne quittance, la somme de  ";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["caution"]) || array_key_exists("caution", $context) ? $context["caution"] : (function () { throw new Twig_Error_Runtime('Variable "caution" does not exist.', 146, $this->getSourceContext()); })()), "html", null, true);
        echo ".
Le dépôt ainsi versé sera restitué au Locataire le jour de la restitution des clés, déduction faite, le cas échéant, des sommes restant dues au Bailleur.
</p>
<p>
7. Obligations du Bailleur
Le Bailleur est tenu des obligations principales suivantes :
. délivrer au Locataire les lieux loués en bon état d'usage et de réparations, ainsi que les équipements existants en bon état de fonctionnement ;
. assurer au Locataire la jouissance paisible des lieux loués et de le garantir des vices ou défauts de nature à y faire obstacle ;
. entretenir les locaux en état de servir à l'usage prévu par le présent contrat et y faire toutes les réparations, autres que locatives, nécessaires au maintien en état et à l'entretien normal des lieux loués ;
. ne pas s'opposer aux aménagements réalisés par Le Locataire, sous réserve qu'ils ne constituent pas une transformation de la chose louée.
</p>
<p>
8. Obligations du Locataire
Le Locataire est tenu des obligations principales suivantes :
. payer le loyer et toute autre somme due aux termes convenus ;
. user paisiblement des lieux loués suivant la destination qui leur a été donnée par le présent contrat ;
. répondre des dégradations et pertes qui surviendraient pendant la durée du contrat dans les lieux loués dont il a la jouissance exclusive, à moins qu'il ne prouve qu'elles ont eu lieu par cas de faute majeure, par la faute du Bailleur ou par le fait d'un tiers qu'il n'a pas introduit dans les lieux loués ;
. prendre à sa charge l'entretien courant des lieux loués ;
. ne pas transformer les lieux loués sans l'accord écrit du Bailleur ; à défaut d'accord, Le Bailleur pourra exiger du Locataire, lors de son départ, la remise en état des lieux loués ou conserver à son bénéfice les transformations effectuées sans que le locataire puisse réclamer une quelconque indemnité ; Le Bailleur pourra toutefois exiger la remise immédiate des lieux en l'état, aux frais du Locataire, lorsque les transformations effectuées mettront en péril le bon fonctionnement des équipements ou la sécurité des lieux loués ;
. Ne pas consentir des sous-locations totales ou partielles. Il est également interdit de céder tout ou partie de ses droits locatifs;
</p>
<p>
9. Election de domicile
Les parties signataires font élection de domicile : Le Bailleur en son domicile et Le Locataire dans les lieux loués.   
</p>
<p> 
Fait à dakar, le ";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new Twig_Error_Runtime('Variable "date" does not exist.', 172, $this->getSourceContext()); })()), "html", null, true);
        echo "

</p>
 <pre>LE BAILLEUR\t\t\t\t\t                                  LE LOCATAIRE</pre>



    </div>       
  </body>
</html>
";
        // line 182
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_2753bdd0182c9e3e529eac0a007e0560f4f65d2ebb24a1d28e93e552c7df0d19->leave($__internal_2753bdd0182c9e3e529eac0a007e0560f4f65d2ebb24a1d28e93e552c7df0d19_prof);

        
        $__internal_045752aaf1aa4892439fe38918a973bece4966757bd808287ceca323add03363->leave($__internal_045752aaf1aa4892439fe38918a973bece4966757bd808287ceca323add03363_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c1478d782349b65db742dafe027cff3e68f2e5aa31d60210aa1c96dae7f0dc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1478d782349b65db742dafe027cff3e68f2e5aa31d60210aa1c96dae7f0dc7b->enter($__internal_c1478d782349b65db742dafe027cff3e68f2e5aa31d60210aa1c96dae7f0dc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_c1d7c258c6fbd63ab1ab142923d39c9626410c0ef53194345054b65a7b15678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d7c258c6fbd63ab1ab142923d39c9626410c0ef53194345054b65a7b15678b->enter($__internal_c1d7c258c6fbd63ab1ab142923d39c9626410c0ef53194345054b65a7b15678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 183
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/script.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.slitslider.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/jquery.ba-cond.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/slitslider/js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_c1d7c258c6fbd63ab1ab142923d39c9626410c0ef53194345054b65a7b15678b->leave($__internal_c1d7c258c6fbd63ab1ab142923d39c9626410c0ef53194345054b65a7b15678b_prof);

        
        $__internal_c1478d782349b65db742dafe027cff3e68f2e5aa31d60210aa1c96dae7f0dc7b->leave($__internal_c1478d782349b65db742dafe027cff3e68f2e5aa31d60210aa1c96dae7f0dc7b_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 186,  305 => 185,  301 => 184,  296 => 183,  278 => 182,  265 => 172,  236 => 146,  226 => 139,  206 => 122,  198 => 117,  193 => 115,  184 => 109,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  80 => 23,  76 => 22,  72 => 21,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  43 => 10,  38 => 8,  33 => 6,  26 => 1,);
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
    <p>
      Entre les soussignés :</p>

<p>
<p>
L'agence Mbarrikallah-immo, propriétaire du
ci-après dénommé(e) \"Le Bailleur\"</p>

et
<p>
M. ou Mme {{client}} demeurant (adresse) 
ci-après dénommé(e)(s) \"Le Locataire\"</p>

<p>IL A ETE CONVENU ET ARRETE CE QUI SUIT :</p>
<p>
Le Bailleur donne en location les locaux et équipements ci-après désignés au Locataire qui les accepte :
- Les locaux et équipements privatifs suivants :  {{bien}}

situé (e) à l'adresse suivante :  {{localite}} 
ainsi que, le cas échéant, les équipements désignés sur une liste annexée aux présentes.

</p>1. Durée du contrat
Le présent contrat est conclu pour une durée de un an. Il prendra effet à compter du
Le présent bail se renouvellera cependant par tacite reconduction par période de {{date}} faute de préavis contraire donné par l'une des parties à l'autre sous forme de lettre recommandée trois mois avant l'expiration de la période en cours.
</p>
<p>
2. Résiliation 
Il pourra être résilié par lettre recommandée avec avis de réception ou par acte d'huissier :
-par Le Locataire, à tout moment, sous réserve de prévenir Le Bailleur trois mois à l'avance. 
-par Le Bailleur, au terme du contrat, en cas de motif sérieux et légitime résultant notamment de l'inexécution par Le Locataire de l'une des obligations lui incombant.
</p>
<p>
3. Destination des lieux
Les lieux loués, objet du présent contrat, sont destinés à l'usage exclusif d'habitation. Le Locataire ne peut, en conséquence, y exercer une quelconque profession qu'elle soit artisanale, commerciale ou libérale, sauf à solliciter et à obtenir l'autorisation expresse et écrite du Bailleur.
</p>
<p>
4. Montant de la location
La présente location est consentie et acceptée moyennant paiement d'un loyer mensuel librement fixé entre les parties.
Le montant de la présente location s'établit comme suit :

TOTAL MENSUEL\t\t\t{{mensuel}} dirhams\t\t
La somme, ci-dessus mentionnée, sera payable au plus tard le ... de chaque mois.
Le présent loyer pourra être révisé à la demande de l'une ou l'autre des parties tous les 1ans.
Dans le cas où le présent loyer sera réglementé par des textes législatifs, les variations prévues par ces textes seront applicables de plein droit.
</p>
<p>
5. Dépôt de garantie
Aux fins de garantir la bonne exécution de ses obligations, Le Locataire versera un dépôt de garantie. Le locataire verse ainsi ce jour au Bailleur, qui le reconnaît et lui en donne quittance, la somme de  {{caution}}.
Le dépôt ainsi versé sera restitué au Locataire le jour de la restitution des clés, déduction faite, le cas échéant, des sommes restant dues au Bailleur.
</p>
<p>
7. Obligations du Bailleur
Le Bailleur est tenu des obligations principales suivantes :
. délivrer au Locataire les lieux loués en bon état d'usage et de réparations, ainsi que les équipements existants en bon état de fonctionnement ;
. assurer au Locataire la jouissance paisible des lieux loués et de le garantir des vices ou défauts de nature à y faire obstacle ;
. entretenir les locaux en état de servir à l'usage prévu par le présent contrat et y faire toutes les réparations, autres que locatives, nécessaires au maintien en état et à l'entretien normal des lieux loués ;
. ne pas s'opposer aux aménagements réalisés par Le Locataire, sous réserve qu'ils ne constituent pas une transformation de la chose louée.
</p>
<p>
8. Obligations du Locataire
Le Locataire est tenu des obligations principales suivantes :
. payer le loyer et toute autre somme due aux termes convenus ;
. user paisiblement des lieux loués suivant la destination qui leur a été donnée par le présent contrat ;
. répondre des dégradations et pertes qui surviendraient pendant la durée du contrat dans les lieux loués dont il a la jouissance exclusive, à moins qu'il ne prouve qu'elles ont eu lieu par cas de faute majeure, par la faute du Bailleur ou par le fait d'un tiers qu'il n'a pas introduit dans les lieux loués ;
. prendre à sa charge l'entretien courant des lieux loués ;
. ne pas transformer les lieux loués sans l'accord écrit du Bailleur ; à défaut d'accord, Le Bailleur pourra exiger du Locataire, lors de son départ, la remise en état des lieux loués ou conserver à son bénéfice les transformations effectuées sans que le locataire puisse réclamer une quelconque indemnité ; Le Bailleur pourra toutefois exiger la remise immédiate des lieux en l'état, aux frais du Locataire, lorsque les transformations effectuées mettront en péril le bon fonctionnement des équipements ou la sécurité des lieux loués ;
. Ne pas consentir des sous-locations totales ou partielles. Il est également interdit de céder tout ou partie de ses droits locatifs;
</p>
<p>
9. Election de domicile
Les parties signataires font élection de domicile : Le Bailleur en son domicile et Le Locataire dans les lieux loués.   
</p>
<p> 
Fait à dakar, le {{date}}

</p>
 <pre>LE BAILLEUR\t\t\t\t\t                                  LE LOCATAIRE</pre>



    </div>       
  </body>
</html>
{% block javascript %}
 <script src=\"{{asset('assets/script.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.slitslider.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}\"></script>
  <script src=\"{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}\"></script>

{% endblock %}", "KEURGUIimmoBundle:front:pdf.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/pdf.html.twig");
    }
}
