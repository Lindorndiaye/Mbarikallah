<?php

/* KEURGUIimmoBundle:front:reser.html.twig */
class __TwigTemplate_9af4e025e7c5a2775a98b89dafeafe71d5798defbbaecc458a8f4b59c00b5d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layoutl.html.twig", "KEURGUIimmoBundle:front:reser.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'style' => array($this, 'block_style'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layoutl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7e45338b40e95c9da1d8c5c7c413ca679fad0b0923c01d75e562c6f5916092d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e45338b40e95c9da1d8c5c7c413ca679fad0b0923c01d75e562c6f5916092d->enter($__internal_a7e45338b40e95c9da1d8c5c7c413ca679fad0b0923c01d75e562c6f5916092d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $__internal_3a149f79ae39d7b6a8b902ab7752ff0d34690562bf7581f2a52417dbb98f9591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a149f79ae39d7b6a8b902ab7752ff0d34690562bf7581f2a52417dbb98f9591->enter($__internal_3a149f79ae39d7b6a8b902ab7752ff0d34690562bf7581f2a52417dbb98f9591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:reser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e45338b40e95c9da1d8c5c7c413ca679fad0b0923c01d75e562c6f5916092d->leave($__internal_a7e45338b40e95c9da1d8c5c7c413ca679fad0b0923c01d75e562c6f5916092d_prof);

        
        $__internal_3a149f79ae39d7b6a8b902ab7752ff0d34690562bf7581f2a52417dbb98f9591->leave($__internal_3a149f79ae39d7b6a8b902ab7752ff0d34690562bf7581f2a52417dbb98f9591_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c305b871ef3f5134f502c0d7adaf12a260bdbb37be6805c793fe74380d28dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c305b871ef3f5134f502c0d7adaf12a260bdbb37be6805c793fe74380d28dcf->enter($__internal_5c305b871ef3f5134f502c0d7adaf12a260bdbb37be6805c793fe74380d28dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_06bc9f5513fac50fc49dc70a4dc9b96974569c056d4f79902c63e4e81a6ecccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bc9f5513fac50fc49dc70a4dc9b96974569c056d4f79902c63e4e81a6ecccb->enter($__internal_06bc9f5513fac50fc49dc70a4dc9b96974569c056d4f79902c63e4e81a6ecccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo " <table border=1 class=\"table\" >
    <tr>
<th>nom du client</th>
<th>adresse client</th>
<th>nom du bien</th>
<th>adresse bien</th>
<th>type de bien</th>
<th>image</th>
<th>action</th>

</tr>
<tr>
";
        // line 16
        $this->displayBlock('style', $context, $blocks);
        // line 23
        echo " 
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["res"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 25
            echo "       <tr>
  
     

  <td scope=\"col\" class=\"table-info\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
          <td scope=\"col\" class=\"table-info\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "client", array()), "adresse", array()), "html", null, true);
            echo "</td>

    <td scope=\"col\" class=\"table-info\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "nom", array()), "html", null, true);
            echo "</td>
        <td scope=\"col\" class=\"table-info\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "localite", array()), "html", null, true);
            echo "</td>
         <td scope=\"col\" class=\"table-info\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "type", array()), "html", null, true);
            echo "</td>
          <td scope=\"col\" class=\"table-info\"><img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/properties/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "image", array()), 0, array(), "array"))), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"properties\"/></td>


        <td scope=\"col\" class=\"table-info\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("det", array("idb" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "bien", array()), "id", array()), "idc" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["res"], "client", array()), "id", array()))), "html", null, true);
            echo "\">details</a>
</td>

     </tr> 
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "      aucun utilisateur de ce login trouver
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </tr>
</table>

";
        
        $__internal_06bc9f5513fac50fc49dc70a4dc9b96974569c056d4f79902c63e4e81a6ecccb->leave($__internal_06bc9f5513fac50fc49dc70a4dc9b96974569c056d4f79902c63e4e81a6ecccb_prof);

        
        $__internal_5c305b871ef3f5134f502c0d7adaf12a260bdbb37be6805c793fe74380d28dcf->leave($__internal_5c305b871ef3f5134f502c0d7adaf12a260bdbb37be6805c793fe74380d28dcf_prof);

    }

    // line 16
    public function block_style($context, array $blocks = array())
    {
        $__internal_44bccafde6ababfafbd45e7dde2e828c9c65ac4ba23ab651ea89d3ff604c6036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bccafde6ababfafbd45e7dde2e828c9c65ac4ba23ab651ea89d3ff604c6036->enter($__internal_44bccafde6ababfafbd45e7dde2e828c9c65ac4ba23ab651ea89d3ff604c6036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_02d0be4af8dd5802fc1b17e7670a1feb0e5f9cf3a85fdc15b0e656cd27f00a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d0be4af8dd5802fc1b17e7670a1feb0e5f9cf3a85fdc15b0e656cd27f00a95->enter($__internal_02d0be4af8dd5802fc1b17e7670a1feb0e5f9cf3a85fdc15b0e656cd27f00a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 17
        echo "<style>
img{
  width:100px;
}
</style>
";
        
        $__internal_02d0be4af8dd5802fc1b17e7670a1feb0e5f9cf3a85fdc15b0e656cd27f00a95->leave($__internal_02d0be4af8dd5802fc1b17e7670a1feb0e5f9cf3a85fdc15b0e656cd27f00a95_prof);

        
        $__internal_44bccafde6ababfafbd45e7dde2e828c9c65ac4ba23ab651ea89d3ff604c6036->leave($__internal_44bccafde6ababfafbd45e7dde2e828c9c65ac4ba23ab651ea89d3ff604c6036_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:reser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 17,  137 => 16,  124 => 45,  117 => 43,  107 => 38,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  84 => 30,  80 => 29,  74 => 25,  69 => 24,  66 => 23,  64 => 16,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layoutl.html.twig\" %}

  {% block content %}
 <table border=1 class=\"table\" >
    <tr>
<th>nom du client</th>
<th>adresse client</th>
<th>nom du bien</th>
<th>adresse bien</th>
<th>type de bien</th>
<th>image</th>
<th>action</th>

</tr>
<tr>
{% block style %}
<style>
img{
  width:100px;
}
</style>
{% endblock %}
 
{% for res in res %}
       <tr>
  
     

  <td scope=\"col\" class=\"table-info\">{{res.client.nomComplet}}</td>
          <td scope=\"col\" class=\"table-info\">{{res.client.adresse}}</td>

    <td scope=\"col\" class=\"table-info\">{{res.bien.nom}}</td>
        <td scope=\"col\" class=\"table-info\">{{res.bien.localite}}</td>
         <td scope=\"col\" class=\"table-info\">{{res.bien.type}}</td>
          <td scope=\"col\" class=\"table-info\"><img src=\"{{asset('images/properties/'~res.bien.image[0])}}\" class=\"img-responsive\" alt=\"properties\"/></td>


        <td scope=\"col\" class=\"table-info\"><a href=\"{{path('det',{'idb':res.bien.id,'idc':res.client.id})}}\">details</a>
</td>

     </tr> 
      {% else %}
      aucun utilisateur de ce login trouver
{% endfor %}
  </tr>
</table>

{% endblock %}", "KEURGUIimmoBundle:front:reser.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/reser.html.twig");
    }
}
