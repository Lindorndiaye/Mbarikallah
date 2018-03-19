<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_be9baa6144684acac34bbbe0fb2c6f15ff5d7351446ab80957dd2ff735d6d78f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_d15b68d7a2bb37358fc2f2d0fb1b48b262028e68d025d429e610e94f18fcd6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15b68d7a2bb37358fc2f2d0fb1b48b262028e68d025d429e610e94f18fcd6d0->enter($__internal_d15b68d7a2bb37358fc2f2d0fb1b48b262028e68d025d429e610e94f18fcd6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_0d62e83ab6ffac9523166d8f1b2a48022a778afdaf94b731566695983c0fcc4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d62e83ab6ffac9523166d8f1b2a48022a778afdaf94b731566695983c0fcc4b->enter($__internal_0d62e83ab6ffac9523166d8f1b2a48022a778afdaf94b731566695983c0fcc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15b68d7a2bb37358fc2f2d0fb1b48b262028e68d025d429e610e94f18fcd6d0->leave($__internal_d15b68d7a2bb37358fc2f2d0fb1b48b262028e68d025d429e610e94f18fcd6d0_prof);

        
        $__internal_0d62e83ab6ffac9523166d8f1b2a48022a778afdaf94b731566695983c0fcc4b->leave($__internal_0d62e83ab6ffac9523166d8f1b2a48022a778afdaf94b731566695983c0fcc4b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a2132dee320d5c705ebd20df06319384c37fb76ab86fbfed4f33efa849da7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2132dee320d5c705ebd20df06319384c37fb76ab86fbfed4f33efa849da7ff->enter($__internal_3a2132dee320d5c705ebd20df06319384c37fb76ab86fbfed4f33efa849da7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_556a1c76562a789f5f5d159fbc1e8b6c1ebfeae999f909b9e9bc8c55d54ecf2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556a1c76562a789f5f5d159fbc1e8b6c1ebfeae999f909b9e9bc8c55d54ecf2b->enter($__internal_556a1c76562a789f5f5d159fbc1e8b6c1ebfeae999f909b9e9bc8c55d54ecf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_556a1c76562a789f5f5d159fbc1e8b6c1ebfeae999f909b9e9bc8c55d54ecf2b->leave($__internal_556a1c76562a789f5f5d159fbc1e8b6c1ebfeae999f909b9e9bc8c55d54ecf2b_prof);

        
        $__internal_3a2132dee320d5c705ebd20df06319384c37fb76ab86fbfed4f33efa849da7ff->leave($__internal_3a2132dee320d5c705ebd20df06319384c37fb76ab86fbfed4f33efa849da7ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
