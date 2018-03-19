<?php

/* :proprietaire:new.html.twig */
class __TwigTemplate_e5bae26ae64d92c7f2a82d4b80401babaa0d46e7c87f3defd942773d6f50c6be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proprietaire:new.html.twig", 1);
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
        $__internal_734aa846f31f658aef097658792b83ac72bcc42414b692292fb3fe1eb812a57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734aa846f31f658aef097658792b83ac72bcc42414b692292fb3fe1eb812a57c->enter($__internal_734aa846f31f658aef097658792b83ac72bcc42414b692292fb3fe1eb812a57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:new.html.twig"));

        $__internal_22579ea40a9432366ef01d747f9670f6267b7c26f742d757f21012ff5153e720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22579ea40a9432366ef01d747f9670f6267b7c26f742d757f21012ff5153e720->enter($__internal_22579ea40a9432366ef01d747f9670f6267b7c26f742d757f21012ff5153e720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734aa846f31f658aef097658792b83ac72bcc42414b692292fb3fe1eb812a57c->leave($__internal_734aa846f31f658aef097658792b83ac72bcc42414b692292fb3fe1eb812a57c_prof);

        
        $__internal_22579ea40a9432366ef01d747f9670f6267b7c26f742d757f21012ff5153e720->leave($__internal_22579ea40a9432366ef01d747f9670f6267b7c26f742d757f21012ff5153e720_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_499454494ea53ef5fb262e38c150f9bf067fc2e363ee81cdca0df346ae91f5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499454494ea53ef5fb262e38c150f9bf067fc2e363ee81cdca0df346ae91f5d3->enter($__internal_499454494ea53ef5fb262e38c150f9bf067fc2e363ee81cdca0df346ae91f5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_878b5635f5c4eb3c7e49035ac334e7bd13cb67b1a02f35affd79acd832ad404a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878b5635f5c4eb3c7e49035ac334e7bd13cb67b1a02f35affd79acd832ad404a->enter($__internal_878b5635f5c4eb3c7e49035ac334e7bd13cb67b1a02f35affd79acd832ad404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proprietaire creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_878b5635f5c4eb3c7e49035ac334e7bd13cb67b1a02f35affd79acd832ad404a->leave($__internal_878b5635f5c4eb3c7e49035ac334e7bd13cb67b1a02f35affd79acd832ad404a_prof);

        
        $__internal_499454494ea53ef5fb262e38c150f9bf067fc2e363ee81cdca0df346ae91f5d3->leave($__internal_499454494ea53ef5fb262e38c150f9bf067fc2e363ee81cdca0df346ae91f5d3_prof);

    }

    public function getTemplateName()
    {
        return ":proprietaire:new.html.twig";
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
    <h1>Proprietaire creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('proprietaire_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":proprietaire:new.html.twig", "/var/www/html/projet00000/app/Resources/views/proprietaire/new.html.twig");
    }
}
