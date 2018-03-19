<?php

/* ::base1.html.twig */
class __TwigTemplate_f9fbba8de65dbb396ccb025b68e4ee088aae75c38d7a4ba0c77e4a700ba40758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df99df399956810cd68ce5b8aeff623df91e549f4d05d3cb856242acafc9ca32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df99df399956810cd68ce5b8aeff623df91e549f4d05d3cb856242acafc9ca32->enter($__internal_df99df399956810cd68ce5b8aeff623df91e549f4d05d3cb856242acafc9ca32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        $__internal_b2793f0f73e4d9d0bda1a59357b7d33209c94250bd0e321cae6e0b4d6ea99ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2793f0f73e4d9d0bda1a59357b7d33209c94250bd0e321cae6e0b4d6ea99ba4->enter($__internal_b2793f0f73e4d9d0bda1a59357b7d33209c94250bd0e321cae6e0b4d6ea99ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" />
    </head>
    <body>

    <div class=\"container\">
    ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </div>

        <script src = \"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src = \"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>";
        
        $__internal_df99df399956810cd68ce5b8aeff623df91e549f4d05d3cb856242acafc9ca32->leave($__internal_df99df399956810cd68ce5b8aeff623df91e549f4d05d3cb856242acafc9ca32_prof);

        
        $__internal_b2793f0f73e4d9d0bda1a59357b7d33209c94250bd0e321cae6e0b4d6ea99ba4->leave($__internal_b2793f0f73e4d9d0bda1a59357b7d33209c94250bd0e321cae6e0b4d6ea99ba4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b9071e0182f9edd4bee569474f25bf8c725ac7253313a8426fcbc51ac0abe3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9071e0182f9edd4bee569474f25bf8c725ac7253313a8426fcbc51ac0abe3d->enter($__internal_5b9071e0182f9edd4bee569474f25bf8c725ac7253313a8426fcbc51ac0abe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b170144c98a3bcf6fff9f8e5dda7b822626dbfbfd6cf993ff0f6c9f775d2e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b170144c98a3bcf6fff9f8e5dda7b822626dbfbfd6cf993ff0f6c9f775d2e79->enter($__internal_2b170144c98a3bcf6fff9f8e5dda7b822626dbfbfd6cf993ff0f6c9f775d2e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "shahroze nawaz!";
        
        $__internal_2b170144c98a3bcf6fff9f8e5dda7b822626dbfbfd6cf993ff0f6c9f775d2e79->leave($__internal_2b170144c98a3bcf6fff9f8e5dda7b822626dbfbfd6cf993ff0f6c9f775d2e79_prof);

        
        $__internal_5b9071e0182f9edd4bee569474f25bf8c725ac7253313a8426fcbc51ac0abe3d->leave($__internal_5b9071e0182f9edd4bee569474f25bf8c725ac7253313a8426fcbc51ac0abe3d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdb7bab4c3ea457b36d540adbf43e046e4d292cdf63d398c3459f0bcfe37fd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb7bab4c3ea457b36d540adbf43e046e4d292cdf63d398c3459f0bcfe37fd31->enter($__internal_fdb7bab4c3ea457b36d540adbf43e046e4d292cdf63d398c3459f0bcfe37fd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_41633d33160e3cbdab880945ea26276eb4388e33227175d46421c088576caf09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41633d33160e3cbdab880945ea26276eb4388e33227175d46421c088576caf09->enter($__internal_41633d33160e3cbdab880945ea26276eb4388e33227175d46421c088576caf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_41633d33160e3cbdab880945ea26276eb4388e33227175d46421c088576caf09->leave($__internal_41633d33160e3cbdab880945ea26276eb4388e33227175d46421c088576caf09_prof);

        
        $__internal_fdb7bab4c3ea457b36d540adbf43e046e4d292cdf63d398c3459f0bcfe37fd31->leave($__internal_fdb7bab4c3ea457b36d540adbf43e046e4d292cdf63d398c3459f0bcfe37fd31_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_46e99f7803e1e32ed53f4cb8b64622a8918dc5e356d19f508277b5f7b1d3cd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e99f7803e1e32ed53f4cb8b64622a8918dc5e356d19f508277b5f7b1d3cd1f->enter($__internal_46e99f7803e1e32ed53f4cb8b64622a8918dc5e356d19f508277b5f7b1d3cd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e39b6cdf2051a2d4df8da6b447f4bbea376da99f59844aed79810b062ee9de91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39b6cdf2051a2d4df8da6b447f4bbea376da99f59844aed79810b062ee9de91->enter($__internal_e39b6cdf2051a2d4df8da6b447f4bbea376da99f59844aed79810b062ee9de91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e39b6cdf2051a2d4df8da6b447f4bbea376da99f59844aed79810b062ee9de91->leave($__internal_e39b6cdf2051a2d4df8da6b447f4bbea376da99f59844aed79810b062ee9de91_prof);

        
        $__internal_46e99f7803e1e32ed53f4cb8b64622a8918dc5e356d19f508277b5f7b1d3cd1f->leave($__internal_46e99f7803e1e32ed53f4cb8b64622a8918dc5e356d19f508277b5f7b1d3cd1f_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42b0e47390ba5bbd61b3c26e45e773be4b37ba0ecfa9b780b93a8a086da48e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b0e47390ba5bbd61b3c26e45e773be4b37ba0ecfa9b780b93a8a086da48e42->enter($__internal_42b0e47390ba5bbd61b3c26e45e773be4b37ba0ecfa9b780b93a8a086da48e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_192fdb8915f8c291dcb8798521263da83f09675bef3bf3fd370cf43b9d9f9696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192fdb8915f8c291dcb8798521263da83f09675bef3bf3fd370cf43b9d9f9696->enter($__internal_192fdb8915f8c291dcb8798521263da83f09675bef3bf3fd370cf43b9d9f9696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_192fdb8915f8c291dcb8798521263da83f09675bef3bf3fd370cf43b9d9f9696->leave($__internal_192fdb8915f8c291dcb8798521263da83f09675bef3bf3fd370cf43b9d9f9696_prof);

        
        $__internal_42b0e47390ba5bbd61b3c26e45e773be4b37ba0ecfa9b780b93a8a086da48e42->leave($__internal_42b0e47390ba5bbd61b3c26e45e773be4b37ba0ecfa9b780b93a8a086da48e42_prof);

    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 19,  111 => 14,  94 => 6,  76 => 5,  65 => 20,  63 => 19,  57 => 15,  55 => 14,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}shahroze nawaz!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" />
    </head>
    <body>

    <div class=\"container\">
    {% block content %}{% endblock %}
    </div>

        <script src = \"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src = \"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>", "::base1.html.twig", "/var/www/html/projet00000/app/Resources/views/base1.html.twig");
    }
}
