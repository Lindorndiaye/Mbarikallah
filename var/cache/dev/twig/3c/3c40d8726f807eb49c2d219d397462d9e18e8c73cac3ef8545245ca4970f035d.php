<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_80b2c34f1d80f820e18494401d3e4d9b7ae0259eecd20d8d8622697a8709d950 extends Twig_Template
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
        $__internal_b7c9b0aa79ff57752aefb46f15922e796e74c691d348157f0a8955581a28591b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c9b0aa79ff57752aefb46f15922e796e74c691d348157f0a8955581a28591b->enter($__internal_b7c9b0aa79ff57752aefb46f15922e796e74c691d348157f0a8955581a28591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b625c173fe4e3ed13487220c60a52e3d0fed47582a0920c2de9d944d610c8654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b625c173fe4e3ed13487220c60a52e3d0fed47582a0920c2de9d944d610c8654->enter($__internal_b625c173fe4e3ed13487220c60a52e3d0fed47582a0920c2de9d944d610c8654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b7c9b0aa79ff57752aefb46f15922e796e74c691d348157f0a8955581a28591b->leave($__internal_b7c9b0aa79ff57752aefb46f15922e796e74c691d348157f0a8955581a28591b_prof);

        
        $__internal_b625c173fe4e3ed13487220c60a52e3d0fed47582a0920c2de9d944d610c8654->leave($__internal_b625c173fe4e3ed13487220c60a52e3d0fed47582a0920c2de9d944d610c8654_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
