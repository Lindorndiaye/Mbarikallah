<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b79eaeb61f32c56313d9cd006910c1fc8f57405d3cb00577579159e6f33e673d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f97b841330876f21a2ad544adc46c61db7341fb3a1e6e77662d94ae71ab5710e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97b841330876f21a2ad544adc46c61db7341fb3a1e6e77662d94ae71ab5710e->enter($__internal_f97b841330876f21a2ad544adc46c61db7341fb3a1e6e77662d94ae71ab5710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_979f1cde93de603850f918cba0fdd61444eae1debd2ad4a35132c51f206fe037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979f1cde93de603850f918cba0fdd61444eae1debd2ad4a35132c51f206fe037->enter($__internal_979f1cde93de603850f918cba0fdd61444eae1debd2ad4a35132c51f206fe037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f97b841330876f21a2ad544adc46c61db7341fb3a1e6e77662d94ae71ab5710e->leave($__internal_f97b841330876f21a2ad544adc46c61db7341fb3a1e6e77662d94ae71ab5710e_prof);

        
        $__internal_979f1cde93de603850f918cba0fdd61444eae1debd2ad4a35132c51f206fe037->leave($__internal_979f1cde93de603850f918cba0fdd61444eae1debd2ad4a35132c51f206fe037_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a4b04282377d1d1f016792f9cec15853e1744153cbd96995f83bfc5d033e520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4b04282377d1d1f016792f9cec15853e1744153cbd96995f83bfc5d033e520->enter($__internal_8a4b04282377d1d1f016792f9cec15853e1744153cbd96995f83bfc5d033e520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dd5497efacca3e90ece2d6bae12582b747a8a73ac74634a091c39aedb8aeb39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5497efacca3e90ece2d6bae12582b747a8a73ac74634a091c39aedb8aeb39d->enter($__internal_dd5497efacca3e90ece2d6bae12582b747a8a73ac74634a091c39aedb8aeb39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_dd5497efacca3e90ece2d6bae12582b747a8a73ac74634a091c39aedb8aeb39d->leave($__internal_dd5497efacca3e90ece2d6bae12582b747a8a73ac74634a091c39aedb8aeb39d_prof);

        
        $__internal_8a4b04282377d1d1f016792f9cec15853e1744153cbd96995f83bfc5d033e520->leave($__internal_8a4b04282377d1d1f016792f9cec15853e1744153cbd96995f83bfc5d033e520_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
