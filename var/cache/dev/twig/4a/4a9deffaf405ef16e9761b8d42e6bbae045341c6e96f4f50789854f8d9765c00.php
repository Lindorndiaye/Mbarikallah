<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ae38a88d83c1083708e163032df406961bf94125b1e2f262900dfc8dd8820af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1cba33ed8886577b9a94475d932809603c4ce152199140a5f1bc09113d3603a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cba33ed8886577b9a94475d932809603c4ce152199140a5f1bc09113d3603a7->enter($__internal_1cba33ed8886577b9a94475d932809603c4ce152199140a5f1bc09113d3603a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_fff23fabb9015b422573c9867dc6309416394e08094a643415b2d9206f93f5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff23fabb9015b422573c9867dc6309416394e08094a643415b2d9206f93f5d0->enter($__internal_fff23fabb9015b422573c9867dc6309416394e08094a643415b2d9206f93f5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cba33ed8886577b9a94475d932809603c4ce152199140a5f1bc09113d3603a7->leave($__internal_1cba33ed8886577b9a94475d932809603c4ce152199140a5f1bc09113d3603a7_prof);

        
        $__internal_fff23fabb9015b422573c9867dc6309416394e08094a643415b2d9206f93f5d0->leave($__internal_fff23fabb9015b422573c9867dc6309416394e08094a643415b2d9206f93f5d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ada72a2605ad76b2623ca6af224d821a8fca6619a752eb985378317e1fce7631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada72a2605ad76b2623ca6af224d821a8fca6619a752eb985378317e1fce7631->enter($__internal_ada72a2605ad76b2623ca6af224d821a8fca6619a752eb985378317e1fce7631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d7c45002843b9b9ce1edaeedb107243e2eb5dd889e06fa97b78ee6e1820538c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7c45002843b9b9ce1edaeedb107243e2eb5dd889e06fa97b78ee6e1820538c->enter($__internal_6d7c45002843b9b9ce1edaeedb107243e2eb5dd889e06fa97b78ee6e1820538c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6d7c45002843b9b9ce1edaeedb107243e2eb5dd889e06fa97b78ee6e1820538c->leave($__internal_6d7c45002843b9b9ce1edaeedb107243e2eb5dd889e06fa97b78ee6e1820538c_prof);

        
        $__internal_ada72a2605ad76b2623ca6af224d821a8fca6619a752eb985378317e1fce7631->leave($__internal_ada72a2605ad76b2623ca6af224d821a8fca6619a752eb985378317e1fce7631_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
