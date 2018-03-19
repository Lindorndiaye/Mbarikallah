<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_983f35d674c8d10421c504f7769687bb9b252c50c9ee65cf225eef47b979734b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e0ab544cf9fd4c2f275b27a7202a13c2d62278f9fb77d3d8372a7704ab16c552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ab544cf9fd4c2f275b27a7202a13c2d62278f9fb77d3d8372a7704ab16c552->enter($__internal_e0ab544cf9fd4c2f275b27a7202a13c2d62278f9fb77d3d8372a7704ab16c552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_9567733161957a39a35e5670ffae29303fad6d4a3889a4d04081eca5397e03a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9567733161957a39a35e5670ffae29303fad6d4a3889a4d04081eca5397e03a6->enter($__internal_9567733161957a39a35e5670ffae29303fad6d4a3889a4d04081eca5397e03a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ab544cf9fd4c2f275b27a7202a13c2d62278f9fb77d3d8372a7704ab16c552->leave($__internal_e0ab544cf9fd4c2f275b27a7202a13c2d62278f9fb77d3d8372a7704ab16c552_prof);

        
        $__internal_9567733161957a39a35e5670ffae29303fad6d4a3889a4d04081eca5397e03a6->leave($__internal_9567733161957a39a35e5670ffae29303fad6d4a3889a4d04081eca5397e03a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1dbf191e4cf02141cf3029902e9d886185cfea63d9e0bfe24e11d6de523a71d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbf191e4cf02141cf3029902e9d886185cfea63d9e0bfe24e11d6de523a71d5->enter($__internal_1dbf191e4cf02141cf3029902e9d886185cfea63d9e0bfe24e11d6de523a71d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_887af8635654265b613060c3f092fe3c035240ade0f8465c7631553f30784039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887af8635654265b613060c3f092fe3c035240ade0f8465c7631553f30784039->enter($__internal_887af8635654265b613060c3f092fe3c035240ade0f8465c7631553f30784039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_887af8635654265b613060c3f092fe3c035240ade0f8465c7631553f30784039->leave($__internal_887af8635654265b613060c3f092fe3c035240ade0f8465c7631553f30784039_prof);

        
        $__internal_1dbf191e4cf02141cf3029902e9d886185cfea63d9e0bfe24e11d6de523a71d5->leave($__internal_1dbf191e4cf02141cf3029902e9d886185cfea63d9e0bfe24e11d6de523a71d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
