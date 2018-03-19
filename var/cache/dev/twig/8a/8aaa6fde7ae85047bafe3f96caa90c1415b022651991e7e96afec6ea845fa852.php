<?php

/* :client:new.html.twig */
class __TwigTemplate_819cc7c5cbd50a8f852b4114ac80ac398f9af7c68e1244b423b01cbd21c2e851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:new.html.twig", 1);
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
        $__internal_9a56a7ab5682f05e358291bac6a6c3acb8b03dc1ed2d982715e5abf4dc98ff2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a56a7ab5682f05e358291bac6a6c3acb8b03dc1ed2d982715e5abf4dc98ff2b->enter($__internal_9a56a7ab5682f05e358291bac6a6c3acb8b03dc1ed2d982715e5abf4dc98ff2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_f2d19b6753c1c1bcb17b5261cca8214d5021e3113ffb24f39cf874b43d5af615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d19b6753c1c1bcb17b5261cca8214d5021e3113ffb24f39cf874b43d5af615->enter($__internal_f2d19b6753c1c1bcb17b5261cca8214d5021e3113ffb24f39cf874b43d5af615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a56a7ab5682f05e358291bac6a6c3acb8b03dc1ed2d982715e5abf4dc98ff2b->leave($__internal_9a56a7ab5682f05e358291bac6a6c3acb8b03dc1ed2d982715e5abf4dc98ff2b_prof);

        
        $__internal_f2d19b6753c1c1bcb17b5261cca8214d5021e3113ffb24f39cf874b43d5af615->leave($__internal_f2d19b6753c1c1bcb17b5261cca8214d5021e3113ffb24f39cf874b43d5af615_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a937d8e05582b0a0006c41d99be32be1d270b712dc85748ff98eafe416e7f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a937d8e05582b0a0006c41d99be32be1d270b712dc85748ff98eafe416e7f4c->enter($__internal_2a937d8e05582b0a0006c41d99be32be1d270b712dc85748ff98eafe416e7f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50606317e5b101b13a1dccdf3c787bf57eb204979e638f608cb809141c3000ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50606317e5b101b13a1dccdf3c787bf57eb204979e638f608cb809141c3000ba->enter($__internal_50606317e5b101b13a1dccdf3c787bf57eb204979e638f608cb809141c3000ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_50606317e5b101b13a1dccdf3c787bf57eb204979e638f608cb809141c3000ba->leave($__internal_50606317e5b101b13a1dccdf3c787bf57eb204979e638f608cb809141c3000ba_prof);

        
        $__internal_2a937d8e05582b0a0006c41d99be32be1d270b712dc85748ff98eafe416e7f4c->leave($__internal_2a937d8e05582b0a0006c41d99be32be1d270b712dc85748ff98eafe416e7f4c_prof);

    }

    public function getTemplateName()
    {
        return ":client:new.html.twig";
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
    <h1>Client creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":client:new.html.twig", "/var/www/html/projet00000/app/Resources/views/client/new.html.twig");
    }
}
