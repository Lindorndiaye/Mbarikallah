<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_0cddc32e3b495f870cc3cc08bb82086b59a4bed1b086e52a3ed25c985de66c04 extends Twig_Template
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
        $__internal_fa37a7b1082cfb235e50ac7bc5837c92015c039a6b783bd45f89aaa1d2106ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa37a7b1082cfb235e50ac7bc5837c92015c039a6b783bd45f89aaa1d2106ab4->enter($__internal_fa37a7b1082cfb235e50ac7bc5837c92015c039a6b783bd45f89aaa1d2106ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_ef739da84efaea2967e1f57c6bae93f303055e38109a823f9e06625f832d74a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef739da84efaea2967e1f57c6bae93f303055e38109a823f9e06625f832d74a0->enter($__internal_ef739da84efaea2967e1f57c6bae93f303055e38109a823f9e06625f832d74a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fa37a7b1082cfb235e50ac7bc5837c92015c039a6b783bd45f89aaa1d2106ab4->leave($__internal_fa37a7b1082cfb235e50ac7bc5837c92015c039a6b783bd45f89aaa1d2106ab4_prof);

        
        $__internal_ef739da84efaea2967e1f57c6bae93f303055e38109a823f9e06625f832d74a0->leave($__internal_ef739da84efaea2967e1f57c6bae93f303055e38109a823f9e06625f832d74a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
