<?php

/* :client:edit.html.twig */
class __TwigTemplate_5ebb8f95e21262ecfc0e1013d0645bdf9cfbf738404d1f699152f27597134af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:edit.html.twig", 1);
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
        $__internal_051743627673f13748b4542b7af81d597bcd29119b8e3f73b69c26faefbf51e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051743627673f13748b4542b7af81d597bcd29119b8e3f73b69c26faefbf51e4->enter($__internal_051743627673f13748b4542b7af81d597bcd29119b8e3f73b69c26faefbf51e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $__internal_6b9ae9615f731fdecd68cff25909fb9ea26a402db13ff97eb69651eb08d81eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9ae9615f731fdecd68cff25909fb9ea26a402db13ff97eb69651eb08d81eed->enter($__internal_6b9ae9615f731fdecd68cff25909fb9ea26a402db13ff97eb69651eb08d81eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_051743627673f13748b4542b7af81d597bcd29119b8e3f73b69c26faefbf51e4->leave($__internal_051743627673f13748b4542b7af81d597bcd29119b8e3f73b69c26faefbf51e4_prof);

        
        $__internal_6b9ae9615f731fdecd68cff25909fb9ea26a402db13ff97eb69651eb08d81eed->leave($__internal_6b9ae9615f731fdecd68cff25909fb9ea26a402db13ff97eb69651eb08d81eed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5f1efff6264be19e374a018477534d1c6bdf51bb4a657b07819520dccb77afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f1efff6264be19e374a018477534d1c6bdf51bb4a657b07819520dccb77afc->enter($__internal_f5f1efff6264be19e374a018477534d1c6bdf51bb4a657b07819520dccb77afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd8c48cf79d80f13647e1157b6bd1f47ffbee91826cff4c6a3d24ebec3d79418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8c48cf79d80f13647e1157b6bd1f47ffbee91826cff4c6a3d24ebec3d79418->enter($__internal_dd8c48cf79d80f13647e1157b6bd1f47ffbee91826cff4c6a3d24ebec3d79418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dd8c48cf79d80f13647e1157b6bd1f47ffbee91826cff4c6a3d24ebec3d79418->leave($__internal_dd8c48cf79d80f13647e1157b6bd1f47ffbee91826cff4c6a3d24ebec3d79418_prof);

        
        $__internal_f5f1efff6264be19e374a018477534d1c6bdf51bb4a657b07819520dccb77afc->leave($__internal_f5f1efff6264be19e374a018477534d1c6bdf51bb4a657b07819520dccb77afc_prof);

    }

    public function getTemplateName()
    {
        return ":client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/client/edit.html.twig");
    }
}
