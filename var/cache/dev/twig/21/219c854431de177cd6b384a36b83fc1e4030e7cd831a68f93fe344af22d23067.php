<?php

/* :reservation:new.html.twig */
class __TwigTemplate_c017403fd4f06906f042e365e7c794b8e9e5783358e67c313a0b3b3932c7f2f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:new.html.twig", 1);
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
        $__internal_10dd16ce07c4cc59862d1e390d0832175cd48017a5dff9102fc2a871964ea961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dd16ce07c4cc59862d1e390d0832175cd48017a5dff9102fc2a871964ea961->enter($__internal_10dd16ce07c4cc59862d1e390d0832175cd48017a5dff9102fc2a871964ea961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:new.html.twig"));

        $__internal_55bd8bf3b380d112d8ea576fea3a0737aabd9f36432852d0e25e662de9364b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bd8bf3b380d112d8ea576fea3a0737aabd9f36432852d0e25e662de9364b96->enter($__internal_55bd8bf3b380d112d8ea576fea3a0737aabd9f36432852d0e25e662de9364b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10dd16ce07c4cc59862d1e390d0832175cd48017a5dff9102fc2a871964ea961->leave($__internal_10dd16ce07c4cc59862d1e390d0832175cd48017a5dff9102fc2a871964ea961_prof);

        
        $__internal_55bd8bf3b380d112d8ea576fea3a0737aabd9f36432852d0e25e662de9364b96->leave($__internal_55bd8bf3b380d112d8ea576fea3a0737aabd9f36432852d0e25e662de9364b96_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fae311724972d59ae871b364394e65507ca53cbdea029826070f104b9b65492b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae311724972d59ae871b364394e65507ca53cbdea029826070f104b9b65492b->enter($__internal_fae311724972d59ae871b364394e65507ca53cbdea029826070f104b9b65492b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4215a7a6df6e42c0deddd69714451f61b37df9b03240ed69f4dd7da6d4bc599a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4215a7a6df6e42c0deddd69714451f61b37df9b03240ed69f4dd7da6d4bc599a->enter($__internal_4215a7a6df6e42c0deddd69714451f61b37df9b03240ed69f4dd7da6d4bc599a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4215a7a6df6e42c0deddd69714451f61b37df9b03240ed69f4dd7da6d4bc599a->leave($__internal_4215a7a6df6e42c0deddd69714451f61b37df9b03240ed69f4dd7da6d4bc599a_prof);

        
        $__internal_fae311724972d59ae871b364394e65507ca53cbdea029826070f104b9b65492b->leave($__internal_fae311724972d59ae871b364394e65507ca53cbdea029826070f104b9b65492b_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:new.html.twig";
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
    <h1>Reservation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":reservation:new.html.twig", "/var/www/html/projet00000/app/Resources/views/reservation/new.html.twig");
    }
}
