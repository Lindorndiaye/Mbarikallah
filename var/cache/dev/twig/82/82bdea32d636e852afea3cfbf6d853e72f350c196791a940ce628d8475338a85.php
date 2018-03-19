<?php

/* KEURGUIimmoBundle:front:formBien.html.twig */
class __TwigTemplate_73ce207b4821903f18c0d74ead5f4a1d99b909eb00d05a8955fc3b659797f513 extends Twig_Template
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
        $__internal_a44647fc00cb74df085c9bb0e0c6337f08bba548beee03ebed5a65df245fb9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44647fc00cb74df085c9bb0e0c6337f08bba548beee03ebed5a65df245fb9b8->enter($__internal_a44647fc00cb74df085c9bb0e0c6337f08bba548beee03ebed5a65df245fb9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formBien.html.twig"));

        $__internal_769e5c449412a2efe3872520523b8cf231169e33730f78e49e8dea1331ca1fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769e5c449412a2efe3872520523b8cf231169e33730f78e49e8dea1331ca1fc5->enter($__internal_769e5c449412a2efe3872520523b8cf231169e33730f78e49e8dea1331ca1fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formBien.html.twig"));

        // line 1
        echo "  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-1\">
    <script rel=\"javascript\" type=\"text/javascript\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
<div class=\"row\">

<div class=\"col-md-12\">
<div class=\"content mt-12\">
            <div class=\"animated fadeIn\">
                <div class=\"row\">
          
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <strong class=\"card-title\">Tous les biens</strong>
                        </div>
                        <div class=\"card-body\">
                        <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
        echo "\" method=\"POST\" class=\"form-group\" role=\"form\"  id=\"form\" enctype=\"multipart/form-data\">

                        
                        <button id=\"plus\" class=\"btn-info\">plus</button>

                    <input type=\"submit\" value=\"Upload File\" name=\"submit\" id=\"enregistrer\"  class=\"btn btn-success en upload\"/>

                  <table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered\">
                   
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>libelet</th>
                        <th>type</th>
                             <th>localite</th>

                    
                             <th>prix</th>
                               

                             <th>description</th>
                   
                      </tr>

                            <tr id='ajoutBien'>
                        <th>Id</th>
                        <th><input type=\"text\" name=\"nom\" value=\"\"  class=\"form-control\" ></th>
                        <th>   <select name=\"type\" class=\"form-control\">
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 45, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 46
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()), "html", null, true);
            echo "\"  id=\"tbien\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "nom", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "   
      </select>
</th>
                      <th>   <select name=\"localite\" class=\"form-control\">
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 52, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 53
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "id", array()), "html", null, true);
            echo "\"  id=\"tbien\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "nom", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "   
      </select>
</th>
      
<th><input type=\"text\" name=\"prix\" value=\"\"  class=\"form-control\" ></th>
<th><input type=\"texterea\" name=\"description\" value=\"\"  class=\"form-control\" ></th>

                      </tr>
                         

</form>
                    </thead>
                    <tbody>
              
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 69, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 70
            echo "                
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()), "html", null, true);
            echo "</td>
                         <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "nom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "type", array()), "nom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "localite", array()), "nom", array()), "html", null, true);
            echo "</td>
                           <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "description", array()), "html", null, true);
            echo "</td>
                        
                        
                        
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
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
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.print.min.js"), "html", null, true);
        echo "'\"></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables-init.js"), "html", null, true);
        echo "\"></script>




<script >


  \$(document).ready(function(){
     \$('#ajoutBien').hide()
        \$('.en').hide()

\$('#plus').on('click',function(){
    \$('#ajoutBien').show()
      \$('.en').show()
         \$('#aplus').hide()
          return false
      
})
 
\$('#form').on('submit',function(e){
var img=\$('#file').val().substring(12,18)
\$('#file').val(img)
        e.preventDefault();
 
        \$.ajax({
            type: \$(this).attr('method'),
            url: \"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
        echo "\",
            data: \$(this).serialize()
        })
        .done(function (data) {
              alert(data.ms);
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
    
return false
     
})



  })


</script>";
        
        $__internal_a44647fc00cb74df085c9bb0e0c6337f08bba548beee03ebed5a65df245fb9b8->leave($__internal_a44647fc00cb74df085c9bb0e0c6337f08bba548beee03ebed5a65df245fb9b8_prof);

        
        $__internal_769e5c449412a2efe3872520523b8cf231169e33730f78e49e8dea1331ca1fc5->leave($__internal_769e5c449412a2efe3872520523b8cf231169e33730f78e49e8dea1331ca1fc5_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:formBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 142,  230 => 115,  226 => 114,  222 => 113,  218 => 112,  214 => 111,  210 => 110,  206 => 109,  202 => 108,  198 => 107,  194 => 106,  168 => 82,  156 => 76,  152 => 75,  148 => 74,  144 => 73,  140 => 72,  136 => 71,  133 => 70,  129 => 69,  113 => 55,  102 => 53,  98 => 52,  92 => 48,  81 => 46,  77 => 45,  46 => 17,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-1\">
    <script rel=\"javascript\" type=\"text/javascript\" href=\"{{asset('assetss/js/jquery-1.11.3.min.js')}}\"></script>
<div class=\"row\">

<div class=\"col-md-12\">
<div class=\"content mt-12\">
            <div class=\"animated fadeIn\">
                <div class=\"row\">
          
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <strong class=\"card-title\">Tous les biens</strong>
                        </div>
                        <div class=\"card-body\">
                        <form action=\"{{path('add')}}\" method=\"POST\" class=\"form-group\" role=\"form\"  id=\"form\" enctype=\"multipart/form-data\">

                        
                        <button id=\"plus\" class=\"btn-info\">plus</button>

                    <input type=\"submit\" value=\"Upload File\" name=\"submit\" id=\"enregistrer\"  class=\"btn btn-success en upload\"/>

                  <table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered\">
                   
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>libelet</th>
                        <th>type</th>
                             <th>localite</th>

                    
                             <th>prix</th>
                               

                             <th>description</th>
                   
                      </tr>

                            <tr id='ajoutBien'>
                        <th>Id</th>
                        <th><input type=\"text\" name=\"nom\" value=\"\"  class=\"form-control\" ></th>
                        <th>   <select name=\"type\" class=\"form-control\">
    {% for type in types %}
    <option value=\"{{type.id}}\"  id=\"tbien\" >{{type.nom}}</option>
    {% endfor %}
   
      </select>
</th>
                      <th>   <select name=\"localite\" class=\"form-control\">
    {% for localite in localites %}
    <option value=\"{{localite.id}}\"  id=\"tbien\" >{{localite.nom}}</option>
    {% endfor %}
   
      </select>
</th>
      
<th><input type=\"text\" name=\"prix\" value=\"\"  class=\"form-control\" ></th>
<th><input type=\"texterea\" name=\"description\" value=\"\"  class=\"form-control\" ></th>

                      </tr>
                         

</form>
                    </thead>
                    <tbody>
              
                    {% for bien in biens %}
                
                        <td>{{bien.id}}</td>
                         <td>{{bien.nom}}</td>
                          <td>{{bien.type.nom}}</td>
                          <td>{{bien.localite.nom}}</td>
                           <td>{{bien.prix}}</td>
                              <td>{{bien.description}}</td>
                        
                        
                        
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
    <script src=\"{{asset('assetss/js/lib/data-table/datatables-init.js')}}\"></script>




<script >


  \$(document).ready(function(){
     \$('#ajoutBien').hide()
        \$('.en').hide()

\$('#plus').on('click',function(){
    \$('#ajoutBien').show()
      \$('.en').show()
         \$('#aplus').hide()
          return false
      
})
 
\$('#form').on('submit',function(e){
var img=\$('#file').val().substring(12,18)
\$('#file').val(img)
        e.preventDefault();
 
        \$.ajax({
            type: \$(this).attr('method'),
            url: \"{{path('add')}}\",
            data: \$(this).serialize()
        })
        .done(function (data) {
              alert(data.ms);
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
    
return false
     
})



  })


</script>", "KEURGUIimmoBundle:front:formBien.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/formBien.html.twig");
    }
}
