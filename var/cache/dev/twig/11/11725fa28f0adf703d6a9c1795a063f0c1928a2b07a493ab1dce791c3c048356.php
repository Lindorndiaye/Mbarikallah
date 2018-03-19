<?php

/* :bien:new.html.twig */
class __TwigTemplate_30a4cd8ef45f1cb04f345933dea2174c160282381ccb4c502ce6f7dd4cb46505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":bien:new.html.twig", 1);
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
        $__internal_edfcc96a94156f63d7decafe251d462cffcf476dac440c08ee71669f1f0fb668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfcc96a94156f63d7decafe251d462cffcf476dac440c08ee71669f1f0fb668->enter($__internal_edfcc96a94156f63d7decafe251d462cffcf476dac440c08ee71669f1f0fb668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:new.html.twig"));

        $__internal_c7a577e6a5c96aab5d6226195a8cd226374d9cec89416919c5b79dc23338f2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a577e6a5c96aab5d6226195a8cd226374d9cec89416919c5b79dc23338f2d5->enter($__internal_c7a577e6a5c96aab5d6226195a8cd226374d9cec89416919c5b79dc23338f2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfcc96a94156f63d7decafe251d462cffcf476dac440c08ee71669f1f0fb668->leave($__internal_edfcc96a94156f63d7decafe251d462cffcf476dac440c08ee71669f1f0fb668_prof);

        
        $__internal_c7a577e6a5c96aab5d6226195a8cd226374d9cec89416919c5b79dc23338f2d5->leave($__internal_c7a577e6a5c96aab5d6226195a8cd226374d9cec89416919c5b79dc23338f2d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d53a25286da340cebd3926c05581961ecad9ea4fa19334425b0d5da6e0b7530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d53a25286da340cebd3926c05581961ecad9ea4fa19334425b0d5da6e0b7530->enter($__internal_0d53a25286da340cebd3926c05581961ecad9ea4fa19334425b0d5da6e0b7530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c100dcc963ea2de907179789dd8e950debb68a22988e4c96b52a0c4d9e3b8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c100dcc963ea2de907179789dd8e950debb68a22988e4c96b52a0c4d9e3b8a1->enter($__internal_8c100dcc963ea2de907179789dd8e950debb68a22988e4c96b52a0c4d9e3b8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8c100dcc963ea2de907179789dd8e950debb68a22988e4c96b52a0c4d9e3b8a1->leave($__internal_8c100dcc963ea2de907179789dd8e950debb68a22988e4c96b52a0c4d9e3b8a1_prof);

        
        $__internal_0d53a25286da340cebd3926c05581961ecad9ea4fa19334425b0d5da6e0b7530->leave($__internal_0d53a25286da340cebd3926c05581961ecad9ea4fa19334425b0d5da6e0b7530_prof);

    }

    public function getTemplateName()
    {
        return ":bien:new.html.twig";
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
    <h1>Bien creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":bien:new.html.twig", "/var/www/html/projet00000/app/Resources/views/bien/new.html.twig");
    }
}
