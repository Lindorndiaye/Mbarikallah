<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_eb2521ddb5fedc66146b1a23da0e58bf902da9cf9e3daa9e2b2f0dc19890bc7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b92a3151a29661cfee6676943e1fdf220baa3825552dc0198922d31619246957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92a3151a29661cfee6676943e1fdf220baa3825552dc0198922d31619246957->enter($__internal_b92a3151a29661cfee6676943e1fdf220baa3825552dc0198922d31619246957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_35f4c31b16bc04e820fbf7c3c15b6bd498e25ceb034b3ba326c5b136dcddf8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f4c31b16bc04e820fbf7c3c15b6bd498e25ceb034b3ba326c5b136dcddf8ca->enter($__internal_35f4c31b16bc04e820fbf7c3c15b6bd498e25ceb034b3ba326c5b136dcddf8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b92a3151a29661cfee6676943e1fdf220baa3825552dc0198922d31619246957->leave($__internal_b92a3151a29661cfee6676943e1fdf220baa3825552dc0198922d31619246957_prof);

        
        $__internal_35f4c31b16bc04e820fbf7c3c15b6bd498e25ceb034b3ba326c5b136dcddf8ca->leave($__internal_35f4c31b16bc04e820fbf7c3c15b6bd498e25ceb034b3ba326c5b136dcddf8ca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cffc039cfe7c63ffabb0d5f90792a0536b32593999f4bd41e4711a911eed88d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffc039cfe7c63ffabb0d5f90792a0536b32593999f4bd41e4711a911eed88d4->enter($__internal_cffc039cfe7c63ffabb0d5f90792a0536b32593999f4bd41e4711a911eed88d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c58c86445acb95ee553e9931c75397a97967d6b72d68051984dd51ac1d9fcd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58c86445acb95ee553e9931c75397a97967d6b72d68051984dd51ac1d9fcd1c->enter($__internal_c58c86445acb95ee553e9931c75397a97967d6b72d68051984dd51ac1d9fcd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_c58c86445acb95ee553e9931c75397a97967d6b72d68051984dd51ac1d9fcd1c->leave($__internal_c58c86445acb95ee553e9931c75397a97967d6b72d68051984dd51ac1d9fcd1c_prof);

        
        $__internal_cffc039cfe7c63ffabb0d5f90792a0536b32593999f4bd41e4711a911eed88d4->leave($__internal_cffc039cfe7c63ffabb0d5f90792a0536b32593999f4bd41e4711a911eed88d4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4002ab2daaf9ca08a9f4c96269c0a720a0083f3fd3342c3e59ae75789184ad59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4002ab2daaf9ca08a9f4c96269c0a720a0083f3fd3342c3e59ae75789184ad59->enter($__internal_4002ab2daaf9ca08a9f4c96269c0a720a0083f3fd3342c3e59ae75789184ad59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_fbd9aa394cf33cc031b2892c4c5eae9c85396da3b920cf0795e268dc823e6a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd9aa394cf33cc031b2892c4c5eae9c85396da3b920cf0795e268dc823e6a70->enter($__internal_fbd9aa394cf33cc031b2892c4c5eae9c85396da3b920cf0795e268dc823e6a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_fbd9aa394cf33cc031b2892c4c5eae9c85396da3b920cf0795e268dc823e6a70->leave($__internal_fbd9aa394cf33cc031b2892c4c5eae9c85396da3b920cf0795e268dc823e6a70_prof);

        
        $__internal_4002ab2daaf9ca08a9f4c96269c0a720a0083f3fd3342c3e59ae75789184ad59->leave($__internal_4002ab2daaf9ca08a9f4c96269c0a720a0083f3fd3342c3e59ae75789184ad59_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_291aafe3151efcc9fa56dbb56b222ad5f5e51c5091db2e868119d4c9bc0b8a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291aafe3151efcc9fa56dbb56b222ad5f5e51c5091db2e868119d4c9bc0b8a85->enter($__internal_291aafe3151efcc9fa56dbb56b222ad5f5e51c5091db2e868119d4c9bc0b8a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_885fd4ccd71ca84c44466d9652998980402e2abc0c24e190ec9e0ad404053ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885fd4ccd71ca84c44466d9652998980402e2abc0c24e190ec9e0ad404053ad6->enter($__internal_885fd4ccd71ca84c44466d9652998980402e2abc0c24e190ec9e0ad404053ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_885fd4ccd71ca84c44466d9652998980402e2abc0c24e190ec9e0ad404053ad6->leave($__internal_885fd4ccd71ca84c44466d9652998980402e2abc0c24e190ec9e0ad404053ad6_prof);

        
        $__internal_291aafe3151efcc9fa56dbb56b222ad5f5e51c5091db2e868119d4c9bc0b8a85->leave($__internal_291aafe3151efcc9fa56dbb56b222ad5f5e51c5091db2e868119d4c9bc0b8a85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
