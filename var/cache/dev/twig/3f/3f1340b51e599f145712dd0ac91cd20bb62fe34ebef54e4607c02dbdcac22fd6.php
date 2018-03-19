<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_b32f5bf1c6606206297fb62b1f132c9653d955fc9ce101b3a012417eb2c1a397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b54a135587cea44601d701613739093139b277b1d468e842e77bd7dd1a1e9467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54a135587cea44601d701613739093139b277b1d468e842e77bd7dd1a1e9467->enter($__internal_b54a135587cea44601d701613739093139b277b1d468e842e77bd7dd1a1e9467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_3680c49be5897d52924a6bd42f5f0b68bb03ece491f9bf5f6444e31089d10677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3680c49be5897d52924a6bd42f5f0b68bb03ece491f9bf5f6444e31089d10677->enter($__internal_3680c49be5897d52924a6bd42f5f0b68bb03ece491f9bf5f6444e31089d10677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b54a135587cea44601d701613739093139b277b1d468e842e77bd7dd1a1e9467->leave($__internal_b54a135587cea44601d701613739093139b277b1d468e842e77bd7dd1a1e9467_prof);

        
        $__internal_3680c49be5897d52924a6bd42f5f0b68bb03ece491f9bf5f6444e31089d10677->leave($__internal_3680c49be5897d52924a6bd42f5f0b68bb03ece491f9bf5f6444e31089d10677_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41e59718f34d9dfb984ace6006f988e95b0ddc4ebd090ff8faadf29d09c5cd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e59718f34d9dfb984ace6006f988e95b0ddc4ebd090ff8faadf29d09c5cd5c->enter($__internal_41e59718f34d9dfb984ace6006f988e95b0ddc4ebd090ff8faadf29d09c5cd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4510dbf9f615f74bac43954c64abf24301f7ac15f2bbfe8469f1329f34e9211c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4510dbf9f615f74bac43954c64abf24301f7ac15f2bbfe8469f1329f34e9211c->enter($__internal_4510dbf9f615f74bac43954c64abf24301f7ac15f2bbfe8469f1329f34e9211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_4510dbf9f615f74bac43954c64abf24301f7ac15f2bbfe8469f1329f34e9211c->leave($__internal_4510dbf9f615f74bac43954c64abf24301f7ac15f2bbfe8469f1329f34e9211c_prof);

        
        $__internal_41e59718f34d9dfb984ace6006f988e95b0ddc4ebd090ff8faadf29d09c5cd5c->leave($__internal_41e59718f34d9dfb984ace6006f988e95b0ddc4ebd090ff8faadf29d09c5cd5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
