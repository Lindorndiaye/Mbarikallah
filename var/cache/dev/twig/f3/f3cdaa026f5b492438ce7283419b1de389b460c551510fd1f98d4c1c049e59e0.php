<?php

/* :image:new.html.twig */
class __TwigTemplate_47c05fce2928dd7d64a526f26f5bb80ead54437e82dc95eb0379814daf4e0ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:new.html.twig", 1);
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
        $__internal_303b0e0468bf7de6a77606cf31c2f849fbb4dac040a4130691ef6175200ebab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303b0e0468bf7de6a77606cf31c2f849fbb4dac040a4130691ef6175200ebab6->enter($__internal_303b0e0468bf7de6a77606cf31c2f849fbb4dac040a4130691ef6175200ebab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:new.html.twig"));

        $__internal_4c9f815f7d369eba357d2670ad1bf2be6f7e20df169e74484be1c37258795eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9f815f7d369eba357d2670ad1bf2be6f7e20df169e74484be1c37258795eed->enter($__internal_4c9f815f7d369eba357d2670ad1bf2be6f7e20df169e74484be1c37258795eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303b0e0468bf7de6a77606cf31c2f849fbb4dac040a4130691ef6175200ebab6->leave($__internal_303b0e0468bf7de6a77606cf31c2f849fbb4dac040a4130691ef6175200ebab6_prof);

        
        $__internal_4c9f815f7d369eba357d2670ad1bf2be6f7e20df169e74484be1c37258795eed->leave($__internal_4c9f815f7d369eba357d2670ad1bf2be6f7e20df169e74484be1c37258795eed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0913fe115a5435574b1f775ef180c2e183455ed5e1c48423cbad082d6c06b9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0913fe115a5435574b1f775ef180c2e183455ed5e1c48423cbad082d6c06b9c9->enter($__internal_0913fe115a5435574b1f775ef180c2e183455ed5e1c48423cbad082d6c06b9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ceb476bb1c7f7e22287354cab81da0a731243c9bbb401380cb9c23d7e220d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceb476bb1c7f7e22287354cab81da0a731243c9bbb401380cb9c23d7e220d5b->enter($__internal_1ceb476bb1c7f7e22287354cab81da0a731243c9bbb401380cb9c23d7e220d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Image creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1ceb476bb1c7f7e22287354cab81da0a731243c9bbb401380cb9c23d7e220d5b->leave($__internal_1ceb476bb1c7f7e22287354cab81da0a731243c9bbb401380cb9c23d7e220d5b_prof);

        
        $__internal_0913fe115a5435574b1f775ef180c2e183455ed5e1c48423cbad082d6c06b9c9->leave($__internal_0913fe115a5435574b1f775ef180c2e183455ed5e1c48423cbad082d6c06b9c9_prof);

    }

    public function getTemplateName()
    {
        return ":image:new.html.twig";
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
    <h1>Image creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('image_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":image:new.html.twig", "/var/www/html/projet00000/app/Resources/views/image/new.html.twig");
    }
}
