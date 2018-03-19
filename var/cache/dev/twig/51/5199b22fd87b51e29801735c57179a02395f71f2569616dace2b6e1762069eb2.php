<?php

/* KEURGUIimmoBundle:front:formLocalite.html.twig */
class __TwigTemplate_10edfc9c579d66e0d5b87de5c44d3cc9984ff21858d27531e87b0e7e3dd8e9f5 extends Twig_Template
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
        $__internal_61d78f6adf9f64bc4874364ca577727fa561177612630b677a2bb3b695e5d0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d78f6adf9f64bc4874364ca577727fa561177612630b677a2bb3b695e5d0c7->enter($__internal_61d78f6adf9f64bc4874364ca577727fa561177612630b677a2bb3b695e5d0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLocalite.html.twig"));

        $__internal_8636554d15a8fa805e99cb1a56659a2206c31af300fedf908a57d2e5ca4ff30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8636554d15a8fa805e99cb1a56659a2206c31af300fedf908a57d2e5ca4ff30b->enter($__internal_8636554d15a8fa805e99cb1a56659a2206c31af300fedf908a57d2e5ca4ff30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLocalite.html.twig"));

        // line 1
        echo "<div class=\"row\">
<div class=\"col-md-1\">
</div>
<div class=\"col-md-3\">
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservers");
        echo "\" method=\"POST\" class=\"form-group\" role=\"form\">

   <input type=\"text\" name=\"\"  class=\"form-control\"><br />

  
   <button type=\"submit\" name=\"submit\" class=\"btn btn-success\">enregistrer</button>
</form>
</div>
<div class=\"col-md-8\">
<div class=\"content mt-3\">
            <div class=\"animated fadeIn\">
                <div class=\"row\">

                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <strong class=\"card-title\">Tous les localites</strong>
                        </div>
                        <div class=\"card-body\">
                  <table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered\">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>libelet</th>
                      
                   
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 34, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 35
            echo "                    <tr>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "id", array()), "html", null, true);
            echo "</td>
                         <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "nom", array()), "html", null, true);
            echo "</td>
                         
                        
                        
                        
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    
                    
                       
                     
                      
                    
                    
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

</div>
</div>

    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.print.min.js"), "html", null, true);
        echo "'\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables-init.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_61d78f6adf9f64bc4874364ca577727fa561177612630b677a2bb3b695e5d0c7->leave($__internal_61d78f6adf9f64bc4874364ca577727fa561177612630b677a2bb3b695e5d0c7_prof);

        
        $__internal_8636554d15a8fa805e99cb1a56659a2206c31af300fedf908a57d2e5ca4ff30b->leave($__internal_8636554d15a8fa805e99cb1a56659a2206c31af300fedf908a57d2e5ca4ff30b_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:formLocalite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 77,  145 => 76,  141 => 75,  137 => 74,  133 => 73,  129 => 72,  125 => 71,  121 => 70,  117 => 69,  113 => 68,  87 => 44,  74 => 37,  70 => 36,  67 => 35,  63 => 34,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
<div class=\"col-md-1\">
</div>
<div class=\"col-md-3\">
<form action=\"{{ path('reservers') }}\" method=\"POST\" class=\"form-group\" role=\"form\">

   <input type=\"text\" name=\"\"  class=\"form-control\"><br />

  
   <button type=\"submit\" name=\"submit\" class=\"btn btn-success\">enregistrer</button>
</form>
</div>
<div class=\"col-md-8\">
<div class=\"content mt-3\">
            <div class=\"animated fadeIn\">
                <div class=\"row\">

                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <strong class=\"card-title\">Tous les localites</strong>
                        </div>
                        <div class=\"card-body\">
                  <table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered\">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>libelet</th>
                      
                   
                      </tr>
                    </thead>
                    <tbody>
                    {% for localite in localites %}
                    <tr>
                        <td>{{localite.id}}</td>
                         <td>{{localite.nom}}</td>
                         
                        
                        
                        
                      </tr>
                    {% endfor %}
                    
                    
                       
                     
                      
                    
                    
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

</div>
</div>

    <script src=\"{{asset('assetss/js/lib/data-table/datatables.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/dataTables.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/dataTables.buttons.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/jszip.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/pdfmake.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/vfs_fonts.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.html5.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.print.min.js')}}'\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/datatables-init.js')}}\"></script>", "KEURGUIimmoBundle:front:formLocalite.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/formLocalite.html.twig");
    }
}
