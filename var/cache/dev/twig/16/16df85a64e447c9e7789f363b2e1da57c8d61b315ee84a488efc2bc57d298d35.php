<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b934fd361f8e57d8c4c8e7fe1883c2778d0a8c8bb29366b1c488934668d25afc extends Twig_Template
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
        $__internal_9bdd8ff6643fde4c2b884898099bc58e21f0c8cae272634d109a6dde6f2b8a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdd8ff6643fde4c2b884898099bc58e21f0c8cae272634d109a6dde6f2b8a80->enter($__internal_9bdd8ff6643fde4c2b884898099bc58e21f0c8cae272634d109a6dde6f2b8a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_1471ce76ab9309db3afa1cd916ca27db9debc69daccfd55a0a93c9c272534e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1471ce76ab9309db3afa1cd916ca27db9debc69daccfd55a0a93c9c272534e89->enter($__internal_1471ce76ab9309db3afa1cd916ca27db9debc69daccfd55a0a93c9c272534e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_9bdd8ff6643fde4c2b884898099bc58e21f0c8cae272634d109a6dde6f2b8a80->leave($__internal_9bdd8ff6643fde4c2b884898099bc58e21f0c8cae272634d109a6dde6f2b8a80_prof);

        
        $__internal_1471ce76ab9309db3afa1cd916ca27db9debc69daccfd55a0a93c9c272534e89->leave($__internal_1471ce76ab9309db3afa1cd916ca27db9debc69daccfd55a0a93c9c272534e89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
