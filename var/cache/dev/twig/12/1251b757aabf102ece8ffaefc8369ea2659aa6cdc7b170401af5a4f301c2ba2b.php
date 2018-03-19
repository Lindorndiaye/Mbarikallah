<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b0730c7665206ed623160a019eb2a3bf7c1959eba44ff7320a29b1322ae200a9 extends Twig_Template
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
        $__internal_d99fe5b4d5914a2a6e7d79f68bceca1a49bc3759b97a88fc241e6513cb5df579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99fe5b4d5914a2a6e7d79f68bceca1a49bc3759b97a88fc241e6513cb5df579->enter($__internal_d99fe5b4d5914a2a6e7d79f68bceca1a49bc3759b97a88fc241e6513cb5df579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c222f1b9d32b59718da18af5e187eb921f098662585c180396d09e53001aafb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c222f1b9d32b59718da18af5e187eb921f098662585c180396d09e53001aafb0->enter($__internal_c222f1b9d32b59718da18af5e187eb921f098662585c180396d09e53001aafb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d99fe5b4d5914a2a6e7d79f68bceca1a49bc3759b97a88fc241e6513cb5df579->leave($__internal_d99fe5b4d5914a2a6e7d79f68bceca1a49bc3759b97a88fc241e6513cb5df579_prof);

        
        $__internal_c222f1b9d32b59718da18af5e187eb921f098662585c180396d09e53001aafb0->leave($__internal_c222f1b9d32b59718da18af5e187eb921f098662585c180396d09e53001aafb0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
