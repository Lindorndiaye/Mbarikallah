<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_08b7685e1d9fe579288c9219ba9d2587e39555fcc19bc3b18769122693857d82 extends Twig_Template
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
        $__internal_6d519869e082bb3c8e210fd29c2d27660d9436dbb2d99538e8b25fd0d798a0aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d519869e082bb3c8e210fd29c2d27660d9436dbb2d99538e8b25fd0d798a0aa->enter($__internal_6d519869e082bb3c8e210fd29c2d27660d9436dbb2d99538e8b25fd0d798a0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a900babb8499b27c90f105945cc98c74a8a174cdcc7487d62a2a709e06dda107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a900babb8499b27c90f105945cc98c74a8a174cdcc7487d62a2a709e06dda107->enter($__internal_a900babb8499b27c90f105945cc98c74a8a174cdcc7487d62a2a709e06dda107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_6d519869e082bb3c8e210fd29c2d27660d9436dbb2d99538e8b25fd0d798a0aa->leave($__internal_6d519869e082bb3c8e210fd29c2d27660d9436dbb2d99538e8b25fd0d798a0aa_prof);

        
        $__internal_a900babb8499b27c90f105945cc98c74a8a174cdcc7487d62a2a709e06dda107->leave($__internal_a900babb8499b27c90f105945cc98c74a8a174cdcc7487d62a2a709e06dda107_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
