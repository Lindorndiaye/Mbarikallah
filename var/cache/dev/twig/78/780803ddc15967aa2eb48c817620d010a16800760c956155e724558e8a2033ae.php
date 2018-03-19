<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c7f20545214aec0afb3e5483023ebbe1692db77c3f404be2a609c5160020ed36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_874b0193b5b4214d6aebb2c4d6c2cfe7e5c1974ae803d1d844da54eea1bdba75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874b0193b5b4214d6aebb2c4d6c2cfe7e5c1974ae803d1d844da54eea1bdba75->enter($__internal_874b0193b5b4214d6aebb2c4d6c2cfe7e5c1974ae803d1d844da54eea1bdba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_50a6b36d5fedc647843cf25e702c1269796d0dfb703e562703119159ceca8c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a6b36d5fedc647843cf25e702c1269796d0dfb703e562703119159ceca8c49->enter($__internal_50a6b36d5fedc647843cf25e702c1269796d0dfb703e562703119159ceca8c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_874b0193b5b4214d6aebb2c4d6c2cfe7e5c1974ae803d1d844da54eea1bdba75->leave($__internal_874b0193b5b4214d6aebb2c4d6c2cfe7e5c1974ae803d1d844da54eea1bdba75_prof);

        
        $__internal_50a6b36d5fedc647843cf25e702c1269796d0dfb703e562703119159ceca8c49->leave($__internal_50a6b36d5fedc647843cf25e702c1269796d0dfb703e562703119159ceca8c49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab0e020ef87e53fdc8c69f7324021d656ed067b8eeea90e1e04fd5bebf5c9d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0e020ef87e53fdc8c69f7324021d656ed067b8eeea90e1e04fd5bebf5c9d6e->enter($__internal_ab0e020ef87e53fdc8c69f7324021d656ed067b8eeea90e1e04fd5bebf5c9d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e31df3ca8ae82370672f6d88f415f813c98c31ea5757c8fb07c6ef553c438dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31df3ca8ae82370672f6d88f415f813c98c31ea5757c8fb07c6ef553c438dbd->enter($__internal_e31df3ca8ae82370672f6d88f415f813c98c31ea5757c8fb07c6ef553c438dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e31df3ca8ae82370672f6d88f415f813c98c31ea5757c8fb07c6ef553c438dbd->leave($__internal_e31df3ca8ae82370672f6d88f415f813c98c31ea5757c8fb07c6ef553c438dbd_prof);

        
        $__internal_ab0e020ef87e53fdc8c69f7324021d656ed067b8eeea90e1e04fd5bebf5c9d6e->leave($__internal_ab0e020ef87e53fdc8c69f7324021d656ed067b8eeea90e1e04fd5bebf5c9d6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
