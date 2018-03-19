<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_18923ced1e18d1b98d6b99cfad8558df2552f5bee4593d66424c8c464ffaf390 extends Twig_Template
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
        $__internal_cc1a3fa87092ceffca4e6399c4210756f1bbb7a341ceeff5bd31c33b7e3e64f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1a3fa87092ceffca4e6399c4210756f1bbb7a341ceeff5bd31c33b7e3e64f6->enter($__internal_cc1a3fa87092ceffca4e6399c4210756f1bbb7a341ceeff5bd31c33b7e3e64f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3ae5b07a7ef7f8a1143b1da93929e37932186bae715e3e69701e4f70132fda90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae5b07a7ef7f8a1143b1da93929e37932186bae715e3e69701e4f70132fda90->enter($__internal_3ae5b07a7ef7f8a1143b1da93929e37932186bae715e3e69701e4f70132fda90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_cc1a3fa87092ceffca4e6399c4210756f1bbb7a341ceeff5bd31c33b7e3e64f6->leave($__internal_cc1a3fa87092ceffca4e6399c4210756f1bbb7a341ceeff5bd31c33b7e3e64f6_prof);

        
        $__internal_3ae5b07a7ef7f8a1143b1da93929e37932186bae715e3e69701e4f70132fda90->leave($__internal_3ae5b07a7ef7f8a1143b1da93929e37932186bae715e3e69701e4f70132fda90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
