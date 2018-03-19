<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_eb610b82edb0fcadc081d1039d650f5de39cd469ef87e5860492ea54d7dd44c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f3b4dd0d9420b36f3e5d0eec3ed6a285ae7a3a22a0e23732069e5ca39f79ffa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b4dd0d9420b36f3e5d0eec3ed6a285ae7a3a22a0e23732069e5ca39f79ffa9->enter($__internal_f3b4dd0d9420b36f3e5d0eec3ed6a285ae7a3a22a0e23732069e5ca39f79ffa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_93e0f3322f1d23b7c40a23f9ed546ce05a1563349f7c8f9ea9a0c649fa34558b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e0f3322f1d23b7c40a23f9ed546ce05a1563349f7c8f9ea9a0c649fa34558b->enter($__internal_93e0f3322f1d23b7c40a23f9ed546ce05a1563349f7c8f9ea9a0c649fa34558b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3b4dd0d9420b36f3e5d0eec3ed6a285ae7a3a22a0e23732069e5ca39f79ffa9->leave($__internal_f3b4dd0d9420b36f3e5d0eec3ed6a285ae7a3a22a0e23732069e5ca39f79ffa9_prof);

        
        $__internal_93e0f3322f1d23b7c40a23f9ed546ce05a1563349f7c8f9ea9a0c649fa34558b->leave($__internal_93e0f3322f1d23b7c40a23f9ed546ce05a1563349f7c8f9ea9a0c649fa34558b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_007e3150afb42716cf348d1d2c51d555b92b0f442f92c4718c5af42e3097fce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007e3150afb42716cf348d1d2c51d555b92b0f442f92c4718c5af42e3097fce7->enter($__internal_007e3150afb42716cf348d1d2c51d555b92b0f442f92c4718c5af42e3097fce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_56fcb4d163f8977fa8184ed92752b63f624f42901281e82e6312581fe8c1b615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fcb4d163f8977fa8184ed92752b63f624f42901281e82e6312581fe8c1b615->enter($__internal_56fcb4d163f8977fa8184ed92752b63f624f42901281e82e6312581fe8c1b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_56fcb4d163f8977fa8184ed92752b63f624f42901281e82e6312581fe8c1b615->leave($__internal_56fcb4d163f8977fa8184ed92752b63f624f42901281e82e6312581fe8c1b615_prof);

        
        $__internal_007e3150afb42716cf348d1d2c51d555b92b0f442f92c4718c5af42e3097fce7->leave($__internal_007e3150afb42716cf348d1d2c51d555b92b0f442f92c4718c5af42e3097fce7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
