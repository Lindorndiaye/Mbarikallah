<?php

/* KEURGUIimmoBundle:front:test.html.twig */
class __TwigTemplate_13cf50e6a8d4510cd282b9b863777d173dc54121c2fa7fc0ae8dc48d79b2bf69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:test.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30c90d51641126016e039389f9a7e7dd70a122d263c29526b4a62a73f49aa6e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c90d51641126016e039389f9a7e7dd70a122d263c29526b4a62a73f49aa6e8->enter($__internal_30c90d51641126016e039389f9a7e7dd70a122d263c29526b4a62a73f49aa6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:test.html.twig"));

        $__internal_8297c6b19238176d880c328b51d594c9c060ead29c7ca0d4cb3ecd33960a6776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8297c6b19238176d880c328b51d594c9c060ead29c7ca0d4cb3ecd33960a6776->enter($__internal_8297c6b19238176d880c328b51d594c9c060ead29c7ca0d4cb3ecd33960a6776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30c90d51641126016e039389f9a7e7dd70a122d263c29526b4a62a73f49aa6e8->leave($__internal_30c90d51641126016e039389f9a7e7dd70a122d263c29526b4a62a73f49aa6e8_prof);

        
        $__internal_8297c6b19238176d880c328b51d594c9c060ead29c7ca0d4cb3ecd33960a6776->leave($__internal_8297c6b19238176d880c328b51d594c9c060ead29c7ca0d4cb3ecd33960a6776_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_122e28c4e652011b130752e45f6815da231ad0bf517cdc79360c15089aaeaf02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122e28c4e652011b130752e45f6815da231ad0bf517cdc79360c15089aaeaf02->enter($__internal_122e28c4e652011b130752e45f6815da231ad0bf517cdc79360c15089aaeaf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_53498144842036e97eb03e8b42cfd6db3587d1fe7226279bb396c7001e1ded99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53498144842036e97eb03e8b42cfd6db3587d1fe7226279bb396c7001e1ded99->enter($__internal_53498144842036e97eb03e8b42cfd6db3587d1fe7226279bb396c7001e1ded99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <button class=\"ajax\">click me!</button>
    <div id=\"ajax-results\">here comes the result</div>
    <script>
        \$(document).on('click', 'button.ajax', function(){
            that = \$(this);
            \$.ajax({
                url:'";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_bundle_route");
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"some_var_name\": \"some_var_value\"
                },
                async: true,
                success: function (data)
                {
                    console.log(data)
                    \$('div#ajax-results').html(data.output);

                }
            });
            return false;

        });
    </script>
";
        
        $__internal_53498144842036e97eb03e8b42cfd6db3587d1fe7226279bb396c7001e1ded99->leave($__internal_53498144842036e97eb03e8b42cfd6db3587d1fe7226279bb396c7001e1ded99_prof);

        
        $__internal_122e28c4e652011b130752e45f6815da231ad0bf517cdc79360c15089aaeaf02->leave($__internal_122e28c4e652011b130752e45f6815da231ad0bf517cdc79360c15089aaeaf02_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  49 => 4,  40 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@KEURGUIimmo/layout.html.twig\" %}
{% block content %}
    <button class=\"ajax\">click me!</button>
    <div id=\"ajax-results\">here comes the result</div>
    <script>
        \$(document).on('click', 'button.ajax', function(){
            that = \$(this);
            \$.ajax({
                url:'{{ (path('app_bundle_route')) }}',
                type: \"POST\",
                dataType: \"json\",
                data: {
                    \"some_var_name\": \"some_var_value\"
                },
                async: true,
                success: function (data)
                {
                    console.log(data)
                    \$('div#ajax-results').html(data.output);

                }
            });
            return false;

        });
    </script>
{% endblock %}", "KEURGUIimmoBundle:front:test.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/test.html.twig");
    }
}
