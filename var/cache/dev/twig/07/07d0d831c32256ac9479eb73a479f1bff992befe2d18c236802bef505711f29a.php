<?php

/* KEURGUIimmoBundle:front:details.html.twig */
class __TwigTemplate_b02c166d6356eff93d00ec50298f06b94116533c0259cd430b7f9c852f5f9636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/accueil.html.twig", "KEURGUIimmoBundle:front:details.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a19c8603b0263d0817e2fd452e4300746eafd57921b76bfb2313f7e5b02857f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19c8603b0263d0817e2fd452e4300746eafd57921b76bfb2313f7e5b02857f9->enter($__internal_a19c8603b0263d0817e2fd452e4300746eafd57921b76bfb2313f7e5b02857f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:details.html.twig"));

        $__internal_2c290567d36185336bc9cd859e84ab02d4f49a2b7b58fef3b0319bdbbfd74014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c290567d36185336bc9cd859e84ab02d4f49a2b7b58fef3b0319bdbbfd74014->enter($__internal_2c290567d36185336bc9cd859e84ab02d4f49a2b7b58fef3b0319bdbbfd74014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19c8603b0263d0817e2fd452e4300746eafd57921b76bfb2313f7e5b02857f9->leave($__internal_a19c8603b0263d0817e2fd452e4300746eafd57921b76bfb2313f7e5b02857f9_prof);

        
        $__internal_2c290567d36185336bc9cd859e84ab02d4f49a2b7b58fef3b0319bdbbfd74014->leave($__internal_2c290567d36185336bc9cd859e84ab02d4f49a2b7b58fef3b0319bdbbfd74014_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1e35cc013cac52365b193a310b46048dc59db23fb669fb9efe035f3c0edba9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e35cc013cac52365b193a310b46048dc59db23fb669fb9efe035f3c0edba9e->enter($__internal_f1e35cc013cac52365b193a310b46048dc59db23fb669fb9efe035f3c0edba9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fc0eb36cbddfa2997cc24b80eca80679c5c66523597090eb4f3a96572c49e041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0eb36cbddfa2997cc24b80eca80679c5c66523597090eb4f3a96572c49e041->enter($__internal_fc0eb36cbddfa2997cc24b80eca80679c5c66523597090eb4f3a96572c49e041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"inside-banner\">
  <div class=\"container\"> 
    <span class=\"pull-right\"><a  href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a> / Reserver</span>
    <h2>Reserver</h2>
</div>
</div>



<div class=\"container\">
<div class=\"properties-listing spacer\">

<div class=\"row\">
<div class=\"col-lg-3 col-sm-4 hidden-xs\">

<div class=\"hot-properties hidden-xs\">
<h4>Meilleurs offres du moment</h4>
<div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"properties\"/></div>
                <div class=\"col-lg-8 col-sm-7\">
                  <h5><a href=\"property-detail.php\">Villa Entiere</a></h5>
                  <p class=\"price\">300,000 frcfa</p> </div>
              </div>
<div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"properties\"/></div>
                <div class=\"col-lg-8 col-sm-7\">
                  <h5><a href=\"property-detail.php\">Villa Entiere</a></h5>
                  <p class=\"price\">300,000 frcfa</p> </div>
              </div>

<div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"properties\"/></div>
                <div class=\"col-lg-8 col-sm-7\">
                  <h5><a href=\"property-detail.php\">Villa Entiere</a></h5>
                  <p class=\"price\">300,000 frcfa</p> </div>
              </div>

<div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/properties/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-circle\" alt=\"properties\"/></div>
                <div class=\"col-lg-8 col-sm-7\">
                  <h5><a href=\"property-detail.php\">Villa Entiere</a></h5>
                  <p class=\"price\">300,000 frcfa</p> </div>
              </div>

</div>



<div class=\"advertisement\">
  <h4>Annonces</h4>
  <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/advertisements.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"advertisement\">

</div>

</div>

<div class=\"col-lg-9 col-sm-8 \">

<h2>
2 pièces et 1 appartement cuisine</h2>
<div class=\"row\">
  <div class=\"col-lg-8\">
  <div class=\"property-images\">
    <!-- Slider Starts -->
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
      <!-- Indicators -->
      <ol class=\"carousel-indicators hidden-xs\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
      </ol>
      <div class=\"carousel-inner\">
       

  
       
         <div class=\"item active\">
 <img style=\" width:600px;
    height:400px;\"src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/properties/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 84, $this->getSourceContext()); })()), "image", array()), 0, array(), "array"))), "html", null, true);
        echo "\" class=\"properties\" alt=\"properties\" />        </div>
    
 ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 86, $this->getSourceContext()); })()), "image", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 87
            echo "       <div class=\"item \">
   <img style=\" width:600px;
    height:400px;\"src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/properties/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
            echo "\" class=\"properties\" alt=\"properties\" />          
        </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        
    
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class=\"spacer\"><h4><span class=\"glyphicon glyphicon-th-list\"></span> Description du Propriete</h4>
  <p>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 106, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo " </p>
<div class=\"col-lg-12 col-sm-6 \">
<div class=\"enquiry\">
  <h6><span class=\"glyphicon glyphicon-ok\"></span>Reserver</h6>
  ";
        // line 110
        if (array_key_exists("message", $context)) {
            // line 111
            echo "<h2>";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 111, $this->getSourceContext()); })()), "html", null, true);
            echo "<h2>
   ";
        }
        // line 113
        echo "<div class=\"col-lg-6 col-sm-3 \">
<form action=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservers");
        echo "\" method=\"POST\" class=\"form-group\" role=\"form\">
   <input type=\"hidden\" name=\"form\" value=\"client\"  class=\"form-control\"><br />

   <input type=\"hidden\" name=\"idbien\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 117, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\"  class=\"form-control\"><br />

   <input type=\"text\" name=\"email\" value=\"\"  class=\"form-control\"><br />
   <input type=\"password\" name=\"password\" value=\"\"  class=\"form-control\"><br />
  
   <button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Reserver</button>
</form>
</div>
<div class=\"col-lg-6 col-sm-3 \">
<form action=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservers");
        echo "\" method=\"POST\" class=\"form-group\" role=\"form\" >
   <input type=\"hidden\" name=\"form\" value=\"inconnu\"  class=\"form-control\"><br />

   <input type=\"hidden\" name=\"idbien\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 129, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\"  class=\"form-control\"><br />
   <input type=\"text\" name=\"numpiece\" value=\"\"  class=\"form-control\"  placeholder=\"Votre numero de piece \" ><br />

   <input type=\"text\" name=\"nomComplet\" value=\"\"  class=\"form-control\"  placeholder=\"Votre nom complet \" ><br />
      <input type=\"text\" name=\"adresse\" value=\"\"  class=\"form-control\"  placeholder=\"Votre Adresse\" ><br />
      <input type=\"number\" name=\"tel\" value=\"\"  class=\"form-control\"  placeholder=\"Votre numero de telephone \" ><br />

      <input type=\"email\" name=\"email\" value=\"\"  class=\"form-control\"  placeholder=\"Votre E-mail \" ><br />

   <input type=\"password\" name=\"password\" value=\"\"  class=\"form-control\"><br />
  
   <button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Reserver</button>
</form>

</div>

 </div>         
</div> </p>
  </div>
  <div><h4><span class=\"glyphicon glyphicon-map-marker\"></span> Location</h4>
<div class=\"well\"><iframe width=\"100%\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed\"></iframe></div>
  </div>

  </div>
  <div class=\"col-lg-4\">
  <div class=\"col-lg-12  col-sm-6\">
<div class=\"property-info\">
<p class=\"price\">";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 156, $this->getSourceContext()); })()), "prix", array()), "html", null, true);
        echo " frcfa</p>
  <p class=\"area\"><span class=\"glyphicon glyphicon-map-marker\"></span>";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 157, $this->getSourceContext()); })()), "localite", array()), "nom", array()), "html", null, true);
        echo "</p>
  
  <div class=\"profile\">
  <span class=\"glyphicon glyphicon-user\"></span> Agent Details
  <p>Cheikh Gueye<br>77 426 22 78</p>
  </div>
</div>

    <h6><span class=\"glyphicon glyphicon-home\"></span> Disponibilité</h6>
    <div class=\"listing-detail\">
    <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>

</div>
<div class=\"col-lg-12 col-sm-6 \">
<div class=\"enquiry\">
  <h6><span class=\"glyphicon glyphicon-envelope\"></span> Post Enquiry</h6>
  <form role=\"form\"  action=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservers");
        echo "\"  method=\"POST\" class=\"form-group\">
                   <input type=\"hidden\" name=\"form\" value=\"message\"  class=\"form-control\"><br />
       <input type=\"hidden\" name=\"idbien\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 175, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\"  class=\"form-control\"><br />

                <input type=\"text\" name=\"NomComplet\" class=\"form-control\" placeholder=\"non complet\"/>
                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"kheuche@saintlouis.sn\"/>
                <input type=\"number\" name=\"Numero\" class=\"form-control\" placeholder=\"numero de call\"/>
                <textarea rows=\"6\" name=\"message\" class=\"form-control\" placeholder=\"ce que vous pensez?\"></textarea>
      <button type=\"submit\" class=\"btn btn-primary\" name=\"Submit\">Send Message</button>
      </form>
 </div>         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>
";
        
        $__internal_fc0eb36cbddfa2997cc24b80eca80679c5c66523597090eb4f3a96572c49e041->leave($__internal_fc0eb36cbddfa2997cc24b80eca80679c5c66523597090eb4f3a96572c49e041_prof);

        
        $__internal_f1e35cc013cac52365b193a310b46048dc59db23fb669fb9efe035f3c0edba9e->leave($__internal_f1e35cc013cac52365b193a310b46048dc59db23fb669fb9efe035f3c0edba9e_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 175,  281 => 173,  262 => 157,  258 => 156,  228 => 129,  222 => 126,  210 => 117,  204 => 114,  201 => 113,  195 => 111,  193 => 110,  186 => 106,  170 => 92,  161 => 89,  157 => 87,  153 => 86,  148 => 84,  116 => 55,  101 => 43,  91 => 36,  81 => 29,  72 => 23,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/accueil.html.twig\" %}


{% block content %}
<div class=\"inside-banner\">
  <div class=\"container\"> 
    <span class=\"pull-right\"><a  href=\"{{path('accueil')}}\">Accueil</a> / Reserver</span>
    <h2>Reserver</h2>
</div>
</div>



<div class=\"container\">
<div class=\"properties-listing spacer\">

<div class=\"row\">
<div class=\"col-lg-3 col-sm-4 hidden-xs\">

<div class=\"hot-properties hidden-xs\">
<h4>Meilleurs offres du moment</h4>
<div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\"><img src=\"{{asset('images/properties/4.jpg')}}\" class=\"img-responsive img-circle\" alt=\"properties\"/></div>
                <div class=\"col-lg-8 col-sm-7\">
                  <h5><a href=\"property-detail.php\">Villa Entiere</a></h5>
                  <p class=\"price\">300,000 frcfa</p> </div>
              </div>
<div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\"><img src=\"{{asset('images/properties/1.jpg')}}\" class=\"img-responsive img-circle\" alt=\"properties\"/></div>
                <div class=\"col-lg-8 col-sm-7\">
                  <h5><a href=\"property-detail.php\">Villa Entiere</a></h5>
                  <p class=\"price\">300,000 frcfa</p> </div>
              </div>

<div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\"><img src=\"{{asset('images/properties/3.jpg')}}\" class=\"img-responsive img-circle\" alt=\"properties\"/></div>
                <div class=\"col-lg-8 col-sm-7\">
                  <h5><a href=\"property-detail.php\">Villa Entiere</a></h5>
                  <p class=\"price\">300,000 frcfa</p> </div>
              </div>

<div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\"><img src=\"{{asset('images/properties/2.jpg')}}\" class=\"img-responsive img-circle\" alt=\"properties\"/></div>
                <div class=\"col-lg-8 col-sm-7\">
                  <h5><a href=\"property-detail.php\">Villa Entiere</a></h5>
                  <p class=\"price\">300,000 frcfa</p> </div>
              </div>

</div>



<div class=\"advertisement\">
  <h4>Annonces</h4>
  <img src=\"{{asset('images/advertisements.jpg')}}\" class=\"img-responsive\" alt=\"advertisement\">

</div>

</div>

<div class=\"col-lg-9 col-sm-8 \">

<h2>
2 pièces et 1 appartement cuisine</h2>
<div class=\"row\">
  <div class=\"col-lg-8\">
  <div class=\"property-images\">
    <!-- Slider Starts -->
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
      <!-- Indicators -->
      <ol class=\"carousel-indicators hidden-xs\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
      </ol>
      <div class=\"carousel-inner\">
       

  
       
         <div class=\"item active\">
 <img style=\" width:600px;
    height:400px;\"src=\"{{asset('images/properties/'~biens.image[0])}}\" class=\"properties\" alt=\"properties\" />        </div>
    
 {% for i in biens.image %}
       <div class=\"item \">
   <img style=\" width:600px;
    height:400px;\"src=\"{{asset('images/properties/'~i.image)}}\" class=\"properties\" alt=\"properties\" />          
        </div>
   {% endfor %}
        
    
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class=\"spacer\"><h4><span class=\"glyphicon glyphicon-th-list\"></span> Description du Propriete</h4>
  <p>{{biens.description}} </p>
<div class=\"col-lg-12 col-sm-6 \">
<div class=\"enquiry\">
  <h6><span class=\"glyphicon glyphicon-ok\"></span>Reserver</h6>
  {% if message is defined %}
<h2>{{message}}<h2>
   {% endif %}
<div class=\"col-lg-6 col-sm-3 \">
<form action=\"{{ path('reservers') }}\" method=\"POST\" class=\"form-group\" role=\"form\">
   <input type=\"hidden\" name=\"form\" value=\"client\"  class=\"form-control\"><br />

   <input type=\"hidden\" name=\"idbien\" value=\"{{biens.id}}\"  class=\"form-control\"><br />

   <input type=\"text\" name=\"email\" value=\"\"  class=\"form-control\"><br />
   <input type=\"password\" name=\"password\" value=\"\"  class=\"form-control\"><br />
  
   <button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Reserver</button>
</form>
</div>
<div class=\"col-lg-6 col-sm-3 \">
<form action=\"{{ path('reservers') }}\" method=\"POST\" class=\"form-group\" role=\"form\" >
   <input type=\"hidden\" name=\"form\" value=\"inconnu\"  class=\"form-control\"><br />

   <input type=\"hidden\" name=\"idbien\" value=\"{{biens.id}}\"  class=\"form-control\"><br />
   <input type=\"text\" name=\"numpiece\" value=\"\"  class=\"form-control\"  placeholder=\"Votre numero de piece \" ><br />

   <input type=\"text\" name=\"nomComplet\" value=\"\"  class=\"form-control\"  placeholder=\"Votre nom complet \" ><br />
      <input type=\"text\" name=\"adresse\" value=\"\"  class=\"form-control\"  placeholder=\"Votre Adresse\" ><br />
      <input type=\"number\" name=\"tel\" value=\"\"  class=\"form-control\"  placeholder=\"Votre numero de telephone \" ><br />

      <input type=\"email\" name=\"email\" value=\"\"  class=\"form-control\"  placeholder=\"Votre E-mail \" ><br />

   <input type=\"password\" name=\"password\" value=\"\"  class=\"form-control\"><br />
  
   <button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Reserver</button>
</form>

</div>

 </div>         
</div> </p>
  </div>
  <div><h4><span class=\"glyphicon glyphicon-map-marker\"></span> Location</h4>
<div class=\"well\"><iframe width=\"100%\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed\"></iframe></div>
  </div>

  </div>
  <div class=\"col-lg-4\">
  <div class=\"col-lg-12  col-sm-6\">
<div class=\"property-info\">
<p class=\"price\">{{biens.prix}} frcfa</p>
  <p class=\"area\"><span class=\"glyphicon glyphicon-map-marker\"></span>{{biens.localite.nom}}</p>
  
  <div class=\"profile\">
  <span class=\"glyphicon glyphicon-user\"></span> Agent Details
  <p>Cheikh Gueye<br>77 426 22 78</p>
  </div>
</div>

    <h6><span class=\"glyphicon glyphicon-home\"></span> Disponibilité</h6>
    <div class=\"listing-detail\">
    <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Bed Room\">5</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Living Room\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Parking\">2</span> <span data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Kitchen\">1</span> </div>

</div>
<div class=\"col-lg-12 col-sm-6 \">
<div class=\"enquiry\">
  <h6><span class=\"glyphicon glyphicon-envelope\"></span> Post Enquiry</h6>
  <form role=\"form\"  action=\"{{ path('reservers') }}\"  method=\"POST\" class=\"form-group\">
                   <input type=\"hidden\" name=\"form\" value=\"message\"  class=\"form-control\"><br />
       <input type=\"hidden\" name=\"idbien\" value=\"{{biens.id}}\"  class=\"form-control\"><br />

                <input type=\"text\" name=\"NomComplet\" class=\"form-control\" placeholder=\"non complet\"/>
                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"kheuche@saintlouis.sn\"/>
                <input type=\"number\" name=\"Numero\" class=\"form-control\" placeholder=\"numero de call\"/>
                <textarea rows=\"6\" name=\"message\" class=\"form-control\" placeholder=\"ce que vous pensez?\"></textarea>
      <button type=\"submit\" class=\"btn btn-primary\" name=\"Submit\">Send Message</button>
      </form>
 </div>         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>
{% endblock %}

", "KEURGUIimmoBundle:front:details.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/details.html.twig");
    }
}
