<?php

/* :bien:edit.html.twig */
class __TwigTemplate_efdc87f67d2f87a377647786d027b2a0323ea3950226bab635d674ed021eac23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":bien:edit.html.twig", 1);
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
        $__internal_931c9084a4c6918866fb631375185cae476bfdfab1e4bcdcb050d4de508cc619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931c9084a4c6918866fb631375185cae476bfdfab1e4bcdcb050d4de508cc619->enter($__internal_931c9084a4c6918866fb631375185cae476bfdfab1e4bcdcb050d4de508cc619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:edit.html.twig"));

        $__internal_68a2030bb2c576197bfa15b60b58db9878b8bfa70c53c30c1b94cbacf1393d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a2030bb2c576197bfa15b60b58db9878b8bfa70c53c30c1b94cbacf1393d75->enter($__internal_68a2030bb2c576197bfa15b60b58db9878b8bfa70c53c30c1b94cbacf1393d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931c9084a4c6918866fb631375185cae476bfdfab1e4bcdcb050d4de508cc619->leave($__internal_931c9084a4c6918866fb631375185cae476bfdfab1e4bcdcb050d4de508cc619_prof);

        
        $__internal_68a2030bb2c576197bfa15b60b58db9878b8bfa70c53c30c1b94cbacf1393d75->leave($__internal_68a2030bb2c576197bfa15b60b58db9878b8bfa70c53c30c1b94cbacf1393d75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c7249c13c9b44d35fa873f736095f87a42f5d3d72c43d4a28301b2f3446398b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7249c13c9b44d35fa873f736095f87a42f5d3d72c43d4a28301b2f3446398b->enter($__internal_0c7249c13c9b44d35fa873f736095f87a42f5d3d72c43d4a28301b2f3446398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afde1627b5857ccfca6aedc56409719f2845ba5cc6f00ddd8f7a978ddb0cf48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afde1627b5857ccfca6aedc56409719f2845ba5cc6f00ddd8f7a978ddb0cf48c->enter($__internal_afde1627b5857ccfca6aedc56409719f2845ba5cc6f00ddd8f7a978ddb0cf48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
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
        
        $__internal_afde1627b5857ccfca6aedc56409719f2845ba5cc6f00ddd8f7a978ddb0cf48c->leave($__internal_afde1627b5857ccfca6aedc56409719f2845ba5cc6f00ddd8f7a978ddb0cf48c_prof);

        
        $__internal_0c7249c13c9b44d35fa873f736095f87a42f5d3d72c43d4a28301b2f3446398b->leave($__internal_0c7249c13c9b44d35fa873f736095f87a42f5d3d72c43d4a28301b2f3446398b_prof);

    }

    public function getTemplateName()
    {
        return ":bien:edit.html.twig";
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
    <h1>Bien edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":bien:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/bien/edit.html.twig");
    }
}
