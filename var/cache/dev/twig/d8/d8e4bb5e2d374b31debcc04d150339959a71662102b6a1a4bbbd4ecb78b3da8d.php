<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ec7735b437caf91ca5b680247da50a4be5eae7835aa20dd86b0df0705d78bc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9b1df9c496eeee69cfd692a463bced31c35a2aee9d22c2349466321ae7249518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1df9c496eeee69cfd692a463bced31c35a2aee9d22c2349466321ae7249518->enter($__internal_9b1df9c496eeee69cfd692a463bced31c35a2aee9d22c2349466321ae7249518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5d965c4b62014d2ef2815e6842640df1c700b113658da8ef2b0d476f2689f3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d965c4b62014d2ef2815e6842640df1c700b113658da8ef2b0d476f2689f3bd->enter($__internal_5d965c4b62014d2ef2815e6842640df1c700b113658da8ef2b0d476f2689f3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b1df9c496eeee69cfd692a463bced31c35a2aee9d22c2349466321ae7249518->leave($__internal_9b1df9c496eeee69cfd692a463bced31c35a2aee9d22c2349466321ae7249518_prof);

        
        $__internal_5d965c4b62014d2ef2815e6842640df1c700b113658da8ef2b0d476f2689f3bd->leave($__internal_5d965c4b62014d2ef2815e6842640df1c700b113658da8ef2b0d476f2689f3bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4357e403000365b621ca16f0541612ec8b194707061b89785f59ee1c37990bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4357e403000365b621ca16f0541612ec8b194707061b89785f59ee1c37990bd8->enter($__internal_4357e403000365b621ca16f0541612ec8b194707061b89785f59ee1c37990bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_999c1034d182bf45a52aeeccf21281f7d4d581996b54580f27febd331775f498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999c1034d182bf45a52aeeccf21281f7d4d581996b54580f27febd331775f498->enter($__internal_999c1034d182bf45a52aeeccf21281f7d4d581996b54580f27febd331775f498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_999c1034d182bf45a52aeeccf21281f7d4d581996b54580f27febd331775f498->leave($__internal_999c1034d182bf45a52aeeccf21281f7d4d581996b54580f27febd331775f498_prof);

        
        $__internal_4357e403000365b621ca16f0541612ec8b194707061b89785f59ee1c37990bd8->leave($__internal_4357e403000365b621ca16f0541612ec8b194707061b89785f59ee1c37990bd8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
