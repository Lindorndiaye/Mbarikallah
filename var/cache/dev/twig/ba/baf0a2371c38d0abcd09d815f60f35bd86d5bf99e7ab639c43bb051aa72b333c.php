<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_577ef8a46d379826ec775c418c9d0c4f98f7c0e921f21318e7696c9fa842568e extends Twig_Template
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
        $__internal_03d65c6627e831f14fef90c3568adc85b56217c231edd10cbac5aefab8639b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d65c6627e831f14fef90c3568adc85b56217c231edd10cbac5aefab8639b62->enter($__internal_03d65c6627e831f14fef90c3568adc85b56217c231edd10cbac5aefab8639b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1fa59c01b7eeb47e8f309faa57e19e913a916e1ac5abd60c4c5b6430fdb1794c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa59c01b7eeb47e8f309faa57e19e913a916e1ac5abd60c4c5b6430fdb1794c->enter($__internal_1fa59c01b7eeb47e8f309faa57e19e913a916e1ac5abd60c4c5b6430fdb1794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_03d65c6627e831f14fef90c3568adc85b56217c231edd10cbac5aefab8639b62->leave($__internal_03d65c6627e831f14fef90c3568adc85b56217c231edd10cbac5aefab8639b62_prof);

        
        $__internal_1fa59c01b7eeb47e8f309faa57e19e913a916e1ac5abd60c4c5b6430fdb1794c->leave($__internal_1fa59c01b7eeb47e8f309faa57e19e913a916e1ac5abd60c4c5b6430fdb1794c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
