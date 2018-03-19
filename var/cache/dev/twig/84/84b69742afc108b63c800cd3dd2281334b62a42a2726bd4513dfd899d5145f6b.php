<?php

/* :paiement:new.html.twig */
class __TwigTemplate_2dccbec366cfdd05954c56bf44c41da98a524c8a9e2ea3930b8230919ea1fdd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":paiement:new.html.twig", 1);
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
        $__internal_081c48ad94df9db22992d50b3b20c9177d54fb65fdf35bf008abc9245d97eeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081c48ad94df9db22992d50b3b20c9177d54fb65fdf35bf008abc9245d97eeee->enter($__internal_081c48ad94df9db22992d50b3b20c9177d54fb65fdf35bf008abc9245d97eeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:new.html.twig"));

        $__internal_992adc85b74dca303a10eb53227a2845e4dc948f1a8d23abf24246542b7d11c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992adc85b74dca303a10eb53227a2845e4dc948f1a8d23abf24246542b7d11c6->enter($__internal_992adc85b74dca303a10eb53227a2845e4dc948f1a8d23abf24246542b7d11c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_081c48ad94df9db22992d50b3b20c9177d54fb65fdf35bf008abc9245d97eeee->leave($__internal_081c48ad94df9db22992d50b3b20c9177d54fb65fdf35bf008abc9245d97eeee_prof);

        
        $__internal_992adc85b74dca303a10eb53227a2845e4dc948f1a8d23abf24246542b7d11c6->leave($__internal_992adc85b74dca303a10eb53227a2845e4dc948f1a8d23abf24246542b7d11c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b9dd5d77a322238316870e162faf57e4367bb0f59b2bc8ddb38f1a78d3bf02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9dd5d77a322238316870e162faf57e4367bb0f59b2bc8ddb38f1a78d3bf02b->enter($__internal_0b9dd5d77a322238316870e162faf57e4367bb0f59b2bc8ddb38f1a78d3bf02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b349dc492072e20649e291404247a304afad4c690220cd990044bdd82ae6e622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b349dc492072e20649e291404247a304afad4c690220cd990044bdd82ae6e622->enter($__internal_b349dc492072e20649e291404247a304afad4c690220cd990044bdd82ae6e622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paiement creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b349dc492072e20649e291404247a304afad4c690220cd990044bdd82ae6e622->leave($__internal_b349dc492072e20649e291404247a304afad4c690220cd990044bdd82ae6e622_prof);

        
        $__internal_0b9dd5d77a322238316870e162faf57e4367bb0f59b2bc8ddb38f1a78d3bf02b->leave($__internal_0b9dd5d77a322238316870e162faf57e4367bb0f59b2bc8ddb38f1a78d3bf02b_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:new.html.twig";
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
    <h1>Paiement creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('paiement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":paiement:new.html.twig", "/var/www/html/projet00000/app/Resources/views/paiement/new.html.twig");
    }
}
