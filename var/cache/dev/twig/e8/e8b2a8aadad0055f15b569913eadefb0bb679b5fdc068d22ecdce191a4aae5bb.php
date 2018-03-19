<?php

/* KEURGUIimmoBundle:front:affiche.html.twig */
class __TwigTemplate_071d076d9b248f4811ce137158d31b3174b5420490951915cee463e9ab14f665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:affiche.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'style' => array($this, 'block_style'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aedd81456c4a701ae990561940c3b08633edfcccfdbf7b27946ed7bc5f234394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aedd81456c4a701ae990561940c3b08633edfcccfdbf7b27946ed7bc5f234394->enter($__internal_aedd81456c4a701ae990561940c3b08633edfcccfdbf7b27946ed7bc5f234394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $__internal_44cfdc6566c9e4ea30e7b6ff50744ec3f51d748f64562e9813b062da37c034d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cfdc6566c9e4ea30e7b6ff50744ec3f51d748f64562e9813b062da37c034d5->enter($__internal_44cfdc6566c9e4ea30e7b6ff50744ec3f51d748f64562e9813b062da37c034d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aedd81456c4a701ae990561940c3b08633edfcccfdbf7b27946ed7bc5f234394->leave($__internal_aedd81456c4a701ae990561940c3b08633edfcccfdbf7b27946ed7bc5f234394_prof);

        
        $__internal_44cfdc6566c9e4ea30e7b6ff50744ec3f51d748f64562e9813b062da37c034d5->leave($__internal_44cfdc6566c9e4ea30e7b6ff50744ec3f51d748f64562e9813b062da37c034d5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a41f06ffb6854bccb5126d6c4041a8beddf4aebbea1dccb18c5ff32a372d569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a41f06ffb6854bccb5126d6c4041a8beddf4aebbea1dccb18c5ff32a372d569->enter($__internal_5a41f06ffb6854bccb5126d6c4041a8beddf4aebbea1dccb18c5ff32a372d569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b561c763610fd2c0c29290af3ac2b31c380a2dfab545b9c020c32676935211d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b561c763610fd2c0c29290af3ac2b31c380a2dfab545b9c020c32676935211d->enter($__internal_8b561c763610fd2c0c29290af3ac2b31c380a2dfab545b9c020c32676935211d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "  
";
        // line 9
        $this->displayBlock('style', $context, $blocks);
        // line 18
        echo " 
<div class=\"row\">

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new Twig_Error_Runtime('Variable "x" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
            // line 22
            echo "<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      ";
            // line 25
            $context["c"] = 0;
            // line 26
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "image", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "    ";
                if (((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 27, $this->getSourceContext()); })()) == 0)) {
                    // line 28
                    echo "       <td scope=\"col\" class=\"table-info\">  <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "image", array()))), "html", null, true);
                    echo "\" class=\"img-circle\" alt=\"Leanna!\"></td>
       ";
                    // line 29
                    $context["c"] = ((isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new Twig_Error_Runtime('Variable "c" does not exist.', 29, $this->getSourceContext()); })()) + 1);
                    echo " 
         ";
                }
                // line 31
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
         <div class=\"card-body\">
      <h4 class=\"card-title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "type", array()), "nom", array()), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "nom", array()), "html", null, true);
            echo "</h4>
       <h4 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "localite", array()), "html", null, true);
            echo "</h4>

      <p >";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "description", array()), "html", null, true);
            echo "</p>
   <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "id_client"), "method"), "idb" => twig_get_attribute($this->env, $this->getSourceContext(), $context["use"], "id", array()))), "html", null, true);
            echo "\">reserver</a>
    </div>
  </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8b561c763610fd2c0c29290af3ac2b31c380a2dfab545b9c020c32676935211d->leave($__internal_8b561c763610fd2c0c29290af3ac2b31c380a2dfab545b9c020c32676935211d_prof);

        
        $__internal_5a41f06ffb6854bccb5126d6c4041a8beddf4aebbea1dccb18c5ff32a372d569->leave($__internal_5a41f06ffb6854bccb5126d6c4041a8beddf4aebbea1dccb18c5ff32a372d569_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_9501f4a1b1b861d93d97f42fac143790ed7ecf1742eaf3cbb7e2f0743aaec2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9501f4a1b1b861d93d97f42fac143790ed7ecf1742eaf3cbb7e2f0743aaec2f6->enter($__internal_9501f4a1b1b861d93d97f42fac143790ed7ecf1742eaf3cbb7e2f0743aaec2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c5c9a0121650d48b30e36c5f459cf9033e6f2be3cdd4811fcae0d79faa2a2442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c9a0121650d48b30e36c5f459cf9033e6f2be3cdd4811fcae0d79faa2a2442->enter($__internal_c5c9a0121650d48b30e36c5f459cf9033e6f2be3cdd4811fcae0d79faa2a2442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_c5c9a0121650d48b30e36c5f459cf9033e6f2be3cdd4811fcae0d79faa2a2442->leave($__internal_c5c9a0121650d48b30e36c5f459cf9033e6f2be3cdd4811fcae0d79faa2a2442_prof);

        
        $__internal_9501f4a1b1b861d93d97f42fac143790ed7ecf1742eaf3cbb7e2f0743aaec2f6->leave($__internal_9501f4a1b1b861d93d97f42fac143790ed7ecf1742eaf3cbb7e2f0743aaec2f6_prof);

    }

    // line 9
    public function block_style($context, array $blocks = array())
    {
        $__internal_63cdf3292874794297a52557016fd46b06fed9fe11135e05ef5cc0255d30be9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cdf3292874794297a52557016fd46b06fed9fe11135e05ef5cc0255d30be9e->enter($__internal_63cdf3292874794297a52557016fd46b06fed9fe11135e05ef5cc0255d30be9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ae17eaef450e855cf379a3672d44b92343dbb60e08cd57ffc17c285ade8fa89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae17eaef450e855cf379a3672d44b92343dbb60e08cd57ffc17c285ade8fa89d->enter($__internal_ae17eaef450e855cf379a3672d44b92343dbb60e08cd57ffc17c285ade8fa89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 10
        echo "<style>

img{
  width:300px;
}

</style>
";
        
        $__internal_ae17eaef450e855cf379a3672d44b92343dbb60e08cd57ffc17c285ade8fa89d->leave($__internal_ae17eaef450e855cf379a3672d44b92343dbb60e08cd57ffc17c285ade8fa89d_prof);

        
        $__internal_63cdf3292874794297a52557016fd46b06fed9fe11135e05ef5cc0255d30be9e->leave($__internal_63cdf3292874794297a52557016fd46b06fed9fe11135e05ef5cc0255d30be9e_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 10,  157 => 9,  145 => 6,  136 => 5,  116 => 37,  112 => 36,  107 => 34,  101 => 33,  92 => 31,  87 => 29,  82 => 28,  79 => 27,  74 => 26,  72 => 25,  67 => 22,  63 => 21,  58 => 18,  56 => 9,  53 => 8,  51 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}
  
{% block style %}
<style>

img{
  width:300px;
}

</style>
{% endblock %}
 
<div class=\"row\">

{% for use in x %}
<div class=\"col-md-4\">
<div class=\"container\">
 <div class=\"card\" style=\"width:300px\">
      {% set c = 0 %}
  {% for i in use.image %}
    {% if c == 0 %}
       <td scope=\"col\" class=\"table-info\">  <img src=\"{{ asset('images/'~i.image) }}\" class=\"img-circle\" alt=\"Leanna!\"></td>
       {% set c = c+ 1 %} 
         {% endif %}
  {% endfor %} 
         <div class=\"card-body\">
      <h4 class=\"card-title\">{{ use.type.nom }}:{{use.nom }}</h4>
       <h4 class=\"card-title\">{{use.localite }}</h4>

      <p >{{use.description }}</p>
   <a href=\"{{path('reserver',{'id':app.session.get('id_client') ,'idb':use.id})}}\">reserver</a>
    </div>
  </div>
    </div>
  </div>
{% endfor %}
{% endblock %}
", "KEURGUIimmoBundle:front:affiche.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/affiche.html.twig");
    }
}
