<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ee4813555887a93e0b877a1927fe5c22461cb2a8a5baf0d4db2f83aa0d7944b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_df4c5f774b28b46b8d6b9163e193a9c4b40572ee13c11c2ef981804b4de7e9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4c5f774b28b46b8d6b9163e193a9c4b40572ee13c11c2ef981804b4de7e9d2->enter($__internal_df4c5f774b28b46b8d6b9163e193a9c4b40572ee13c11c2ef981804b4de7e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_ad1b4fb1cba316c6386f755840a4c94a6212ab0f8126f8c1b9b41507d54a72ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1b4fb1cba316c6386f755840a4c94a6212ab0f8126f8c1b9b41507d54a72ca->enter($__internal_ad1b4fb1cba316c6386f755840a4c94a6212ab0f8126f8c1b9b41507d54a72ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4c5f774b28b46b8d6b9163e193a9c4b40572ee13c11c2ef981804b4de7e9d2->leave($__internal_df4c5f774b28b46b8d6b9163e193a9c4b40572ee13c11c2ef981804b4de7e9d2_prof);

        
        $__internal_ad1b4fb1cba316c6386f755840a4c94a6212ab0f8126f8c1b9b41507d54a72ca->leave($__internal_ad1b4fb1cba316c6386f755840a4c94a6212ab0f8126f8c1b9b41507d54a72ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f5e49a57feb3702d916a4ac9682d03f18083b4abf2db3ed51798bc2111ab22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5e49a57feb3702d916a4ac9682d03f18083b4abf2db3ed51798bc2111ab22f->enter($__internal_4f5e49a57feb3702d916a4ac9682d03f18083b4abf2db3ed51798bc2111ab22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67add31499009c2c4ca9cb01fab63e9cf31431621b8712f190d8def868b2daf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67add31499009c2c4ca9cb01fab63e9cf31431621b8712f190d8def868b2daf5->enter($__internal_67add31499009c2c4ca9cb01fab63e9cf31431621b8712f190d8def868b2daf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_67add31499009c2c4ca9cb01fab63e9cf31431621b8712f190d8def868b2daf5->leave($__internal_67add31499009c2c4ca9cb01fab63e9cf31431621b8712f190d8def868b2daf5_prof);

        
        $__internal_4f5e49a57feb3702d916a4ac9682d03f18083b4abf2db3ed51798bc2111ab22f->leave($__internal_4f5e49a57feb3702d916a4ac9682d03f18083b4abf2db3ed51798bc2111ab22f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
