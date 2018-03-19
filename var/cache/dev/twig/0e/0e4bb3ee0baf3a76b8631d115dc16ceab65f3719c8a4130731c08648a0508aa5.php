<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3adb704a89d6d14fc56112cb5b4b639dac2f7b8b3c6c9747d8efbab24d38da8c extends Twig_Template
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
        $__internal_dbe5b05111c1cfe2664b4f09def02a8463383c82f62c2747c106cb811b295ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe5b05111c1cfe2664b4f09def02a8463383c82f62c2747c106cb811b295ae2->enter($__internal_dbe5b05111c1cfe2664b4f09def02a8463383c82f62c2747c106cb811b295ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1b551cb5b0145d2b614aa64175efc33bbc4618f93837efc8b387a5a4c453632a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b551cb5b0145d2b614aa64175efc33bbc4618f93837efc8b387a5a4c453632a->enter($__internal_1b551cb5b0145d2b614aa64175efc33bbc4618f93837efc8b387a5a4c453632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dbe5b05111c1cfe2664b4f09def02a8463383c82f62c2747c106cb811b295ae2->leave($__internal_dbe5b05111c1cfe2664b4f09def02a8463383c82f62c2747c106cb811b295ae2_prof);

        
        $__internal_1b551cb5b0145d2b614aa64175efc33bbc4618f93837efc8b387a5a4c453632a->leave($__internal_1b551cb5b0145d2b614aa64175efc33bbc4618f93837efc8b387a5a4c453632a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
