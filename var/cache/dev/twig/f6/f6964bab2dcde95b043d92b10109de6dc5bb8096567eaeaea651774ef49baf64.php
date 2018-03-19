<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bf315be19455e7f939c2d3e23dab1c0695f0438d0ef67364bbadef80793d2006 extends Twig_Template
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
        $__internal_0f91a0dc5f989760b5d88da6d01b5a29e171adf5c37dcfa913127be241274c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f91a0dc5f989760b5d88da6d01b5a29e171adf5c37dcfa913127be241274c95->enter($__internal_0f91a0dc5f989760b5d88da6d01b5a29e171adf5c37dcfa913127be241274c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_aaea2dc22402a64627f488e9f6d16042986613fcfa43ca2122752285edadd4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaea2dc22402a64627f488e9f6d16042986613fcfa43ca2122752285edadd4be->enter($__internal_aaea2dc22402a64627f488e9f6d16042986613fcfa43ca2122752285edadd4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0f91a0dc5f989760b5d88da6d01b5a29e171adf5c37dcfa913127be241274c95->leave($__internal_0f91a0dc5f989760b5d88da6d01b5a29e171adf5c37dcfa913127be241274c95_prof);

        
        $__internal_aaea2dc22402a64627f488e9f6d16042986613fcfa43ca2122752285edadd4be->leave($__internal_aaea2dc22402a64627f488e9f6d16042986613fcfa43ca2122752285edadd4be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
