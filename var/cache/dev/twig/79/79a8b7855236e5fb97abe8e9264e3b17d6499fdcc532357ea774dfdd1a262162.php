<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_527afdbc6f0c7a5a1ae85ccb9946c0a166f48478da4bd05768a47028f4c5b85d extends Twig_Template
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
        $__internal_c00bba35d515bb82fd8929cab0c6cb2fdc08e19cd5b377c73138324882e4fb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00bba35d515bb82fd8929cab0c6cb2fdc08e19cd5b377c73138324882e4fb56->enter($__internal_c00bba35d515bb82fd8929cab0c6cb2fdc08e19cd5b377c73138324882e4fb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9d241d89568d4177a58667d05bc289eefdcd4df142d745d5372b1748eefbb615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d241d89568d4177a58667d05bc289eefdcd4df142d745d5372b1748eefbb615->enter($__internal_9d241d89568d4177a58667d05bc289eefdcd4df142d745d5372b1748eefbb615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c00bba35d515bb82fd8929cab0c6cb2fdc08e19cd5b377c73138324882e4fb56->leave($__internal_c00bba35d515bb82fd8929cab0c6cb2fdc08e19cd5b377c73138324882e4fb56_prof);

        
        $__internal_9d241d89568d4177a58667d05bc289eefdcd4df142d745d5372b1748eefbb615->leave($__internal_9d241d89568d4177a58667d05bc289eefdcd4df142d745d5372b1748eefbb615_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
