<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_a7f9c08e41e10218da9835f4f30113ba3976f237902f9bc006e6aeebea456d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e61e0b5253a0eaa03e0000c79636b57b1bb21fc76952da9f56e91d65fcdbf53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e61e0b5253a0eaa03e0000c79636b57b1bb21fc76952da9f56e91d65fcdbf53->enter($__internal_6e61e0b5253a0eaa03e0000c79636b57b1bb21fc76952da9f56e91d65fcdbf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_1a7461ecb57212973633fc8a0a6ad3408b2ec5a03547dab8faf83a32f144a2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7461ecb57212973633fc8a0a6ad3408b2ec5a03547dab8faf83a32f144a2f0->enter($__internal_1a7461ecb57212973633fc8a0a6ad3408b2ec5a03547dab8faf83a32f144a2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.adress", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "adress", array()), "html", null, true);
        echo "</p>

</div>
";
        
        $__internal_6e61e0b5253a0eaa03e0000c79636b57b1bb21fc76952da9f56e91d65fcdbf53->leave($__internal_6e61e0b5253a0eaa03e0000c79636b57b1bb21fc76952da9f56e91d65fcdbf53_prof);

        
        $__internal_1a7461ecb57212973633fc8a0a6ad3408b2ec5a03547dab8faf83a32f144a2f0->leave($__internal_1a7461ecb57212973633fc8a0a6ad3408b2ec5a03547dab8faf83a32f144a2f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  38 => 6,  32 => 5,  28 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
        <p>{{ 'profile.show.adress'|trans }}: {{ user.adress }}</p>

</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
