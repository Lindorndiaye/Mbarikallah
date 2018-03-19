<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c9e1287c82e8444793f069c737ab18c0123dc44592f27135918f87828797181b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_813e1ef69d1500381c3b1a66890b661b6f1ca832e28a9f54cc9f825925e2b2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813e1ef69d1500381c3b1a66890b661b6f1ca832e28a9f54cc9f825925e2b2a3->enter($__internal_813e1ef69d1500381c3b1a66890b661b6f1ca832e28a9f54cc9f825925e2b2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_822d10aa25e9862be65e71bd9d5ccf20e7e07302cee20c556a374126f4e51828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822d10aa25e9862be65e71bd9d5ccf20e7e07302cee20c556a374126f4e51828->enter($__internal_822d10aa25e9862be65e71bd9d5ccf20e7e07302cee20c556a374126f4e51828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_813e1ef69d1500381c3b1a66890b661b6f1ca832e28a9f54cc9f825925e2b2a3->leave($__internal_813e1ef69d1500381c3b1a66890b661b6f1ca832e28a9f54cc9f825925e2b2a3_prof);

        
        $__internal_822d10aa25e9862be65e71bd9d5ccf20e7e07302cee20c556a374126f4e51828->leave($__internal_822d10aa25e9862be65e71bd9d5ccf20e7e07302cee20c556a374126f4e51828_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b10c7fc9518c382367592e172416af885c167afdb0fcb9f9177c188b9232ede9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10c7fc9518c382367592e172416af885c167afdb0fcb9f9177c188b9232ede9->enter($__internal_b10c7fc9518c382367592e172416af885c167afdb0fcb9f9177c188b9232ede9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ca7670c87d9cab26a931566c470b6d7e1e08602760d52816285284de9a41cc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7670c87d9cab26a931566c470b6d7e1e08602760d52816285284de9a41cc54->enter($__internal_ca7670c87d9cab26a931566c470b6d7e1e08602760d52816285284de9a41cc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ca7670c87d9cab26a931566c470b6d7e1e08602760d52816285284de9a41cc54->leave($__internal_ca7670c87d9cab26a931566c470b6d7e1e08602760d52816285284de9a41cc54_prof);

        
        $__internal_b10c7fc9518c382367592e172416af885c167afdb0fcb9f9177c188b9232ede9->leave($__internal_b10c7fc9518c382367592e172416af885c167afdb0fcb9f9177c188b9232ede9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
