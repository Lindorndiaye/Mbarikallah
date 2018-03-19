<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_8b6cb7dd720fa4b9247353bd983ad368030e9f976161dbd79596e57b0f53dee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_5caebd24714d6b9bd0f61c11247d3369de5589dbccae3f8be93d30cc504daa22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5caebd24714d6b9bd0f61c11247d3369de5589dbccae3f8be93d30cc504daa22->enter($__internal_5caebd24714d6b9bd0f61c11247d3369de5589dbccae3f8be93d30cc504daa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_08fd116008f8be0d24bd00b78379344f008e659f92e71a001da2dea9fb8de379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fd116008f8be0d24bd00b78379344f008e659f92e71a001da2dea9fb8de379->enter($__internal_08fd116008f8be0d24bd00b78379344f008e659f92e71a001da2dea9fb8de379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5caebd24714d6b9bd0f61c11247d3369de5589dbccae3f8be93d30cc504daa22->leave($__internal_5caebd24714d6b9bd0f61c11247d3369de5589dbccae3f8be93d30cc504daa22_prof);

        
        $__internal_08fd116008f8be0d24bd00b78379344f008e659f92e71a001da2dea9fb8de379->leave($__internal_08fd116008f8be0d24bd00b78379344f008e659f92e71a001da2dea9fb8de379_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_177fb36957947282986cf38425ca2fecc2a73be8ecc6782701b0cfb79f9b3c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177fb36957947282986cf38425ca2fecc2a73be8ecc6782701b0cfb79f9b3c01->enter($__internal_177fb36957947282986cf38425ca2fecc2a73be8ecc6782701b0cfb79f9b3c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6cf62b4e263ee52ae57255f2f8e82da9b88fe0a788c49bd3ce45352d0e41fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cf62b4e263ee52ae57255f2f8e82da9b88fe0a788c49bd3ce45352d0e41fdc->enter($__internal_b6cf62b4e263ee52ae57255f2f8e82da9b88fe0a788c49bd3ce45352d0e41fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b6cf62b4e263ee52ae57255f2f8e82da9b88fe0a788c49bd3ce45352d0e41fdc->leave($__internal_b6cf62b4e263ee52ae57255f2f8e82da9b88fe0a788c49bd3ce45352d0e41fdc_prof);

        
        $__internal_177fb36957947282986cf38425ca2fecc2a73be8ecc6782701b0cfb79f9b3c01->leave($__internal_177fb36957947282986cf38425ca2fecc2a73be8ecc6782701b0cfb79f9b3c01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/projet00000/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
