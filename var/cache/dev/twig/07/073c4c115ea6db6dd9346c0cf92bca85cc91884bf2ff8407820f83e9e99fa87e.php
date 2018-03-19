<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5ec9cac48aef791d33d87bd85bfd8e01b0dd38e19e4ad71b7ac56d38caca504a extends Twig_Template
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
        $__internal_95d99263c906898c8a2dfc817fc31e92d4238d8776c05a22798db4fdbfafcf4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d99263c906898c8a2dfc817fc31e92d4238d8776c05a22798db4fdbfafcf4c->enter($__internal_95d99263c906898c8a2dfc817fc31e92d4238d8776c05a22798db4fdbfafcf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_1898a86b327caaeccf7a255a9dac911bb81e204d17da6bcca9bf892a66b7db0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1898a86b327caaeccf7a255a9dac911bb81e204d17da6bcca9bf892a66b7db0a->enter($__internal_1898a86b327caaeccf7a255a9dac911bb81e204d17da6bcca9bf892a66b7db0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_95d99263c906898c8a2dfc817fc31e92d4238d8776c05a22798db4fdbfafcf4c->leave($__internal_95d99263c906898c8a2dfc817fc31e92d4238d8776c05a22798db4fdbfafcf4c_prof);

        
        $__internal_1898a86b327caaeccf7a255a9dac911bb81e204d17da6bcca9bf892a66b7db0a->leave($__internal_1898a86b327caaeccf7a255a9dac911bb81e204d17da6bcca9bf892a66b7db0a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_da5615c5c8d6d6f55eb7e088e967c099095ede4925bb3c2b7639bd6952f1672f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5615c5c8d6d6f55eb7e088e967c099095ede4925bb3c2b7639bd6952f1672f->enter($__internal_da5615c5c8d6d6f55eb7e088e967c099095ede4925bb3c2b7639bd6952f1672f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8f9d1246e55352fa90b736ac9caaa0de4565d9dcb6546b4a94aa97088dea2da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9d1246e55352fa90b736ac9caaa0de4565d9dcb6546b4a94aa97088dea2da9->enter($__internal_8f9d1246e55352fa90b736ac9caaa0de4565d9dcb6546b4a94aa97088dea2da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_8f9d1246e55352fa90b736ac9caaa0de4565d9dcb6546b4a94aa97088dea2da9->leave($__internal_8f9d1246e55352fa90b736ac9caaa0de4565d9dcb6546b4a94aa97088dea2da9_prof);

        
        $__internal_da5615c5c8d6d6f55eb7e088e967c099095ede4925bb3c2b7639bd6952f1672f->leave($__internal_da5615c5c8d6d6f55eb7e088e967c099095ede4925bb3c2b7639bd6952f1672f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c8baf131f3e3327a3db337a8614a6c9e3acd68ee1268258c61635502dc9f5706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8baf131f3e3327a3db337a8614a6c9e3acd68ee1268258c61635502dc9f5706->enter($__internal_c8baf131f3e3327a3db337a8614a6c9e3acd68ee1268258c61635502dc9f5706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7aa21ecf3981cd383008e98f1b78d310f97e64aa4b78822ebabc37c74d34859b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa21ecf3981cd383008e98f1b78d310f97e64aa4b78822ebabc37c74d34859b->enter($__internal_7aa21ecf3981cd383008e98f1b78d310f97e64aa4b78822ebabc37c74d34859b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_7aa21ecf3981cd383008e98f1b78d310f97e64aa4b78822ebabc37c74d34859b->leave($__internal_7aa21ecf3981cd383008e98f1b78d310f97e64aa4b78822ebabc37c74d34859b_prof);

        
        $__internal_c8baf131f3e3327a3db337a8614a6c9e3acd68ee1268258c61635502dc9f5706->leave($__internal_c8baf131f3e3327a3db337a8614a6c9e3acd68ee1268258c61635502dc9f5706_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_05d9996f7abaaed9621355b0d336f7fc9217da7bf0556f8fc10e52e95e8c5de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d9996f7abaaed9621355b0d336f7fc9217da7bf0556f8fc10e52e95e8c5de4->enter($__internal_05d9996f7abaaed9621355b0d336f7fc9217da7bf0556f8fc10e52e95e8c5de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_66389497b26553b72f9815b01bcb56a5c6aea6ea8f778f07ee25480a450fb10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66389497b26553b72f9815b01bcb56a5c6aea6ea8f778f07ee25480a450fb10c->enter($__internal_66389497b26553b72f9815b01bcb56a5c6aea6ea8f778f07ee25480a450fb10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_66389497b26553b72f9815b01bcb56a5c6aea6ea8f778f07ee25480a450fb10c->leave($__internal_66389497b26553b72f9815b01bcb56a5c6aea6ea8f778f07ee25480a450fb10c_prof);

        
        $__internal_05d9996f7abaaed9621355b0d336f7fc9217da7bf0556f8fc10e52e95e8c5de4->leave($__internal_05d9996f7abaaed9621355b0d336f7fc9217da7bf0556f8fc10e52e95e8c5de4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
