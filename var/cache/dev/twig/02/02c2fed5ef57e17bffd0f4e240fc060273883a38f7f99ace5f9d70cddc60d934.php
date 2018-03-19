<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_31007d402553525873611d6945ef6623dbc78d54a450a76d47ca184a5a4f4196 extends Twig_Template
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
        $__internal_ba9b3936443163e57e6ea44b215ebedcd0c0535d4daace73ed9186bb0cfded12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9b3936443163e57e6ea44b215ebedcd0c0535d4daace73ed9186bb0cfded12->enter($__internal_ba9b3936443163e57e6ea44b215ebedcd0c0535d4daace73ed9186bb0cfded12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2585c48c0f47341ab12f104e8f83cfb069fadcedf6439440587239caa5e2d391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2585c48c0f47341ab12f104e8f83cfb069fadcedf6439440587239caa5e2d391->enter($__internal_2585c48c0f47341ab12f104e8f83cfb069fadcedf6439440587239caa5e2d391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_ba9b3936443163e57e6ea44b215ebedcd0c0535d4daace73ed9186bb0cfded12->leave($__internal_ba9b3936443163e57e6ea44b215ebedcd0c0535d4daace73ed9186bb0cfded12_prof);

        
        $__internal_2585c48c0f47341ab12f104e8f83cfb069fadcedf6439440587239caa5e2d391->leave($__internal_2585c48c0f47341ab12f104e8f83cfb069fadcedf6439440587239caa5e2d391_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
