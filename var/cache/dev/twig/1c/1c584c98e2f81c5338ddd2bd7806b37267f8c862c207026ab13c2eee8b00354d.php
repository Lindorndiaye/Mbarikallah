<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3f86979e949fdedff4833d38640f249db99f8d46173568f65442206b08306454 extends Twig_Template
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
        $__internal_d736324eb27d002d4492a733748139164ec174c62bb74828076a274a90ac886d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d736324eb27d002d4492a733748139164ec174c62bb74828076a274a90ac886d->enter($__internal_d736324eb27d002d4492a733748139164ec174c62bb74828076a274a90ac886d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c3bd89acb18b34d78cc807a764f8314541efa95fcc05321c1924cddab9b7454e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bd89acb18b34d78cc807a764f8314541efa95fcc05321c1924cddab9b7454e->enter($__internal_c3bd89acb18b34d78cc807a764f8314541efa95fcc05321c1924cddab9b7454e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_d736324eb27d002d4492a733748139164ec174c62bb74828076a274a90ac886d->leave($__internal_d736324eb27d002d4492a733748139164ec174c62bb74828076a274a90ac886d_prof);

        
        $__internal_c3bd89acb18b34d78cc807a764f8314541efa95fcc05321c1924cddab9b7454e->leave($__internal_c3bd89acb18b34d78cc807a764f8314541efa95fcc05321c1924cddab9b7454e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
