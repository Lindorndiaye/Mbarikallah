<?php

/* :contrat:new.html.twig */
class __TwigTemplate_5de4d52750b6118301d1186fd17493edbf32b96beb1ece1ca5b524746f01432f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrat:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_659c35aab9c0f3527319c0c1e233eb1b114946a9a523181e573bed1ba6bdb1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659c35aab9c0f3527319c0c1e233eb1b114946a9a523181e573bed1ba6bdb1d2->enter($__internal_659c35aab9c0f3527319c0c1e233eb1b114946a9a523181e573bed1ba6bdb1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:new.html.twig"));

        $__internal_5057c3cd44b9a95f085752d8c9c8f1e4c9b91932d1620db7fe948e941243c1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5057c3cd44b9a95f085752d8c9c8f1e4c9b91932d1620db7fe948e941243c1c4->enter($__internal_5057c3cd44b9a95f085752d8c9c8f1e4c9b91932d1620db7fe948e941243c1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659c35aab9c0f3527319c0c1e233eb1b114946a9a523181e573bed1ba6bdb1d2->leave($__internal_659c35aab9c0f3527319c0c1e233eb1b114946a9a523181e573bed1ba6bdb1d2_prof);

        
        $__internal_5057c3cd44b9a95f085752d8c9c8f1e4c9b91932d1620db7fe948e941243c1c4->leave($__internal_5057c3cd44b9a95f085752d8c9c8f1e4c9b91932d1620db7fe948e941243c1c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fe0c0dc030142f0f19e362bcf2b203533bb2ad77b46496f9fc0092d522d70b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe0c0dc030142f0f19e362bcf2b203533bb2ad77b46496f9fc0092d522d70b4->enter($__internal_8fe0c0dc030142f0f19e362bcf2b203533bb2ad77b46496f9fc0092d522d70b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7e9b15f67e2218d888ab2e4047f7abc6a5aabe45a9239688a7f8b2c81b86e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e9b15f67e2218d888ab2e4047f7abc6a5aabe45a9239688a7f8b2c81b86e15->enter($__internal_b7e9b15f67e2218d888ab2e4047f7abc6a5aabe45a9239688a7f8b2c81b86e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contrat creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b7e9b15f67e2218d888ab2e4047f7abc6a5aabe45a9239688a7f8b2c81b86e15->leave($__internal_b7e9b15f67e2218d888ab2e4047f7abc6a5aabe45a9239688a7f8b2c81b86e15_prof);

        
        $__internal_8fe0c0dc030142f0f19e362bcf2b203533bb2ad77b46496f9fc0092d522d70b4->leave($__internal_8fe0c0dc030142f0f19e362bcf2b203533bb2ad77b46496f9fc0092d522d70b4_prof);

    }

    public function getTemplateName()
    {
        return ":contrat:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Contrat creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('contrat_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":contrat:new.html.twig", "/var/www/html/projet00000/app/Resources/views/contrat/new.html.twig");
    }
}
