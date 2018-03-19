<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_129c02e0f2752d0837436365e5861ed244db05e98ca6ac2de6076a6d017985c2 extends Twig_Template
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
        $__internal_cb8e7ffd18ae06a1f55ca4f8b04135278f8409e4f7ec1464c70ce020597f803a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8e7ffd18ae06a1f55ca4f8b04135278f8409e4f7ec1464c70ce020597f803a->enter($__internal_cb8e7ffd18ae06a1f55ca4f8b04135278f8409e4f7ec1464c70ce020597f803a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7905c8bfef6fa475954cab840a65425b7fead0710c16a59c71058e8aaba3a4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7905c8bfef6fa475954cab840a65425b7fead0710c16a59c71058e8aaba3a4a7->enter($__internal_7905c8bfef6fa475954cab840a65425b7fead0710c16a59c71058e8aaba3a4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_cb8e7ffd18ae06a1f55ca4f8b04135278f8409e4f7ec1464c70ce020597f803a->leave($__internal_cb8e7ffd18ae06a1f55ca4f8b04135278f8409e4f7ec1464c70ce020597f803a_prof);

        
        $__internal_7905c8bfef6fa475954cab840a65425b7fead0710c16a59c71058e8aaba3a4a7->leave($__internal_7905c8bfef6fa475954cab840a65425b7fead0710c16a59c71058e8aaba3a4a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
