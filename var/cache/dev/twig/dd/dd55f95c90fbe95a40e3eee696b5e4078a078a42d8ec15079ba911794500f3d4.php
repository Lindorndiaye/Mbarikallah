<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_2d7b3928862b75f05e4fef3868771cfe7e849b4c6639755427d1b4fc8f93f55e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac2be0999f9eeb36ae49cb0ecad97368601322d548668836db039931f27354b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2be0999f9eeb36ae49cb0ecad97368601322d548668836db039931f27354b1->enter($__internal_ac2be0999f9eeb36ae49cb0ecad97368601322d548668836db039931f27354b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_af5152a61a340e1cc1673e30766536502c58990a0c6879a22fd49dfe25c7894f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5152a61a340e1cc1673e30766536502c58990a0c6879a22fd49dfe25c7894f->enter($__internal_af5152a61a340e1cc1673e30766536502c58990a0c6879a22fd49dfe25c7894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac2be0999f9eeb36ae49cb0ecad97368601322d548668836db039931f27354b1->leave($__internal_ac2be0999f9eeb36ae49cb0ecad97368601322d548668836db039931f27354b1_prof);

        
        $__internal_af5152a61a340e1cc1673e30766536502c58990a0c6879a22fd49dfe25c7894f->leave($__internal_af5152a61a340e1cc1673e30766536502c58990a0c6879a22fd49dfe25c7894f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_697a94eaa22608d935ee565698eadc561f6751d10e4ff3a2dfe45d290804ac0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697a94eaa22608d935ee565698eadc561f6751d10e4ff3a2dfe45d290804ac0c->enter($__internal_697a94eaa22608d935ee565698eadc561f6751d10e4ff3a2dfe45d290804ac0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_88312fd2a194680971634e72b7fb6230d9fcd49cceb3a99ee590205c227db1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88312fd2a194680971634e72b7fb6230d9fcd49cceb3a99ee590205c227db1d0->enter($__internal_88312fd2a194680971634e72b7fb6230d9fcd49cceb3a99ee590205c227db1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_88312fd2a194680971634e72b7fb6230d9fcd49cceb3a99ee590205c227db1d0->leave($__internal_88312fd2a194680971634e72b7fb6230d9fcd49cceb3a99ee590205c227db1d0_prof);

        
        $__internal_697a94eaa22608d935ee565698eadc561f6751d10e4ff3a2dfe45d290804ac0c->leave($__internal_697a94eaa22608d935ee565698eadc561f6751d10e4ff3a2dfe45d290804ac0c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9a3a6efff2debae11cf03a04418ac1f945135eadd3ffe861fd34774b0183362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a3a6efff2debae11cf03a04418ac1f945135eadd3ffe861fd34774b0183362->enter($__internal_f9a3a6efff2debae11cf03a04418ac1f945135eadd3ffe861fd34774b0183362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd598098639b2cd1b3ce88eeb4c8b4653c8c04a4f460a31c6e83274a1a08cd40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd598098639b2cd1b3ce88eeb4c8b4653c8c04a4f460a31c6e83274a1a08cd40->enter($__internal_cd598098639b2cd1b3ce88eeb4c8b4653c8c04a4f460a31c6e83274a1a08cd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_cd598098639b2cd1b3ce88eeb4c8b4653c8c04a4f460a31c6e83274a1a08cd40->leave($__internal_cd598098639b2cd1b3ce88eeb4c8b4653c8c04a4f460a31c6e83274a1a08cd40_prof);

        
        $__internal_f9a3a6efff2debae11cf03a04418ac1f945135eadd3ffe861fd34774b0183362->leave($__internal_f9a3a6efff2debae11cf03a04418ac1f945135eadd3ffe861fd34774b0183362_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
