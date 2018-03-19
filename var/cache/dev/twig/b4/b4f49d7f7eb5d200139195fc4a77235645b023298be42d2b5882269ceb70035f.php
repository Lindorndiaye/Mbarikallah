<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a224514b30ae07afb4d2130e38a8bc20319a6ec4cde5ec4b872d7a97365865f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_f7bf28cf1dadea3e17381a70cbd7753a57c4925026eb3800b6c614f06cc22247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7bf28cf1dadea3e17381a70cbd7753a57c4925026eb3800b6c614f06cc22247->enter($__internal_f7bf28cf1dadea3e17381a70cbd7753a57c4925026eb3800b6c614f06cc22247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_3fa2ce0a0e10d98ab27799f6685c89f690527a7e336f59dc6e36a189c56848bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa2ce0a0e10d98ab27799f6685c89f690527a7e336f59dc6e36a189c56848bb->enter($__internal_3fa2ce0a0e10d98ab27799f6685c89f690527a7e336f59dc6e36a189c56848bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7bf28cf1dadea3e17381a70cbd7753a57c4925026eb3800b6c614f06cc22247->leave($__internal_f7bf28cf1dadea3e17381a70cbd7753a57c4925026eb3800b6c614f06cc22247_prof);

        
        $__internal_3fa2ce0a0e10d98ab27799f6685c89f690527a7e336f59dc6e36a189c56848bb->leave($__internal_3fa2ce0a0e10d98ab27799f6685c89f690527a7e336f59dc6e36a189c56848bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f2bd133d787b8d42c91813e6db4cbc50590d711ac823851346de929280c8b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2bd133d787b8d42c91813e6db4cbc50590d711ac823851346de929280c8b3f->enter($__internal_5f2bd133d787b8d42c91813e6db4cbc50590d711ac823851346de929280c8b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_33f75f945d94def12225c4d15fe2fa64df068eb4e7e5e72f4a579f668116cac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f75f945d94def12225c4d15fe2fa64df068eb4e7e5e72f4a579f668116cac0->enter($__internal_33f75f945d94def12225c4d15fe2fa64df068eb4e7e5e72f4a579f668116cac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_33f75f945d94def12225c4d15fe2fa64df068eb4e7e5e72f4a579f668116cac0->leave($__internal_33f75f945d94def12225c4d15fe2fa64df068eb4e7e5e72f4a579f668116cac0_prof);

        
        $__internal_5f2bd133d787b8d42c91813e6db4cbc50590d711ac823851346de929280c8b3f->leave($__internal_5f2bd133d787b8d42c91813e6db4cbc50590d711ac823851346de929280c8b3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
