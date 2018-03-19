<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5461990a16858af85a6a953f5b94a4ed8dd6b4bd56b55a68f88c470a555a6a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_45ab8659073cf00927636b2131e7a0ad7b1aa8cdf39c6070223b53cffac83260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ab8659073cf00927636b2131e7a0ad7b1aa8cdf39c6070223b53cffac83260->enter($__internal_45ab8659073cf00927636b2131e7a0ad7b1aa8cdf39c6070223b53cffac83260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_98ad1a95782c3e3356eb4cfdb438af8586410fc703b1d7ae04414327a44aa5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ad1a95782c3e3356eb4cfdb438af8586410fc703b1d7ae04414327a44aa5a6->enter($__internal_98ad1a95782c3e3356eb4cfdb438af8586410fc703b1d7ae04414327a44aa5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ab8659073cf00927636b2131e7a0ad7b1aa8cdf39c6070223b53cffac83260->leave($__internal_45ab8659073cf00927636b2131e7a0ad7b1aa8cdf39c6070223b53cffac83260_prof);

        
        $__internal_98ad1a95782c3e3356eb4cfdb438af8586410fc703b1d7ae04414327a44aa5a6->leave($__internal_98ad1a95782c3e3356eb4cfdb438af8586410fc703b1d7ae04414327a44aa5a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f28700534381cd63fdddb9482ac4c36cafb8ced24236e702dc955c38196e95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f28700534381cd63fdddb9482ac4c36cafb8ced24236e702dc955c38196e95e->enter($__internal_2f28700534381cd63fdddb9482ac4c36cafb8ced24236e702dc955c38196e95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9f4f47ec12400dabc642d6349ab7587565bd07c36486d0c716535e1e3459149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f4f47ec12400dabc642d6349ab7587565bd07c36486d0c716535e1e3459149->enter($__internal_b9f4f47ec12400dabc642d6349ab7587565bd07c36486d0c716535e1e3459149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b9f4f47ec12400dabc642d6349ab7587565bd07c36486d0c716535e1e3459149->leave($__internal_b9f4f47ec12400dabc642d6349ab7587565bd07c36486d0c716535e1e3459149_prof);

        
        $__internal_2f28700534381cd63fdddb9482ac4c36cafb8ced24236e702dc955c38196e95e->leave($__internal_2f28700534381cd63fdddb9482ac4c36cafb8ced24236e702dc955c38196e95e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
