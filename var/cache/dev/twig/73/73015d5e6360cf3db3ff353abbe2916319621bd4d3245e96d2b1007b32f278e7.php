<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_38691ed99025618abe58eadf5a88f2e3a54947717ce9fa299a4b50c9ed2e3fa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6494738ba7aaa76d89c90e929fc74b58321334855687d851c11385038c1a225d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6494738ba7aaa76d89c90e929fc74b58321334855687d851c11385038c1a225d->enter($__internal_6494738ba7aaa76d89c90e929fc74b58321334855687d851c11385038c1a225d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b1b6b0a10c995247e427b0334319ff6f94ba29d04e32993cf73f568bd790f641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b6b0a10c995247e427b0334319ff6f94ba29d04e32993cf73f568bd790f641->enter($__internal_b1b6b0a10c995247e427b0334319ff6f94ba29d04e32993cf73f568bd790f641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6494738ba7aaa76d89c90e929fc74b58321334855687d851c11385038c1a225d->leave($__internal_6494738ba7aaa76d89c90e929fc74b58321334855687d851c11385038c1a225d_prof);

        
        $__internal_b1b6b0a10c995247e427b0334319ff6f94ba29d04e32993cf73f568bd790f641->leave($__internal_b1b6b0a10c995247e427b0334319ff6f94ba29d04e32993cf73f568bd790f641_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c5c3a9b07868933e0db4bc784fac271e11d0fac81c51c496539e997b61d4f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5c3a9b07868933e0db4bc784fac271e11d0fac81c51c496539e997b61d4f99->enter($__internal_7c5c3a9b07868933e0db4bc784fac271e11d0fac81c51c496539e997b61d4f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b51ba18678d32f75e8eece177ab6787da12cffa073a380a9b1b1a849f26d93db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51ba18678d32f75e8eece177ab6787da12cffa073a380a9b1b1a849f26d93db->enter($__internal_b51ba18678d32f75e8eece177ab6787da12cffa073a380a9b1b1a849f26d93db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b51ba18678d32f75e8eece177ab6787da12cffa073a380a9b1b1a849f26d93db->leave($__internal_b51ba18678d32f75e8eece177ab6787da12cffa073a380a9b1b1a849f26d93db_prof);

        
        $__internal_7c5c3a9b07868933e0db4bc784fac271e11d0fac81c51c496539e997b61d4f99->leave($__internal_7c5c3a9b07868933e0db4bc784fac271e11d0fac81c51c496539e997b61d4f99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a5289620c94b3f048f9be7400cacd17be771171b0783f2a7ec9bc497a8844c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5289620c94b3f048f9be7400cacd17be771171b0783f2a7ec9bc497a8844c6->enter($__internal_2a5289620c94b3f048f9be7400cacd17be771171b0783f2a7ec9bc497a8844c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21a624f12c512878f1226f269d82ccab8a04e09294be027b111233355edc895c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a624f12c512878f1226f269d82ccab8a04e09294be027b111233355edc895c->enter($__internal_21a624f12c512878f1226f269d82ccab8a04e09294be027b111233355edc895c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_21a624f12c512878f1226f269d82ccab8a04e09294be027b111233355edc895c->leave($__internal_21a624f12c512878f1226f269d82ccab8a04e09294be027b111233355edc895c_prof);

        
        $__internal_2a5289620c94b3f048f9be7400cacd17be771171b0783f2a7ec9bc497a8844c6->leave($__internal_2a5289620c94b3f048f9be7400cacd17be771171b0783f2a7ec9bc497a8844c6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
