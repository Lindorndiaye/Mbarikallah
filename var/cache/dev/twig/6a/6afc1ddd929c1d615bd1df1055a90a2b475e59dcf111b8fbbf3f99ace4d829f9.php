<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_b0dfca780ab67bdcd910d67adba215915a738cc36de7590108a0a3856ef7022c extends Twig_Template
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
        $__internal_7a3e20071fa6fc4f3e9706a60f91503683cbe8bdc372ccaf29f4c48f58ecfb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3e20071fa6fc4f3e9706a60f91503683cbe8bdc372ccaf29f4c48f58ecfb10->enter($__internal_7a3e20071fa6fc4f3e9706a60f91503683cbe8bdc372ccaf29f4c48f58ecfb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_ee01e5bf3dcbf28dd3a7bf1162c136781f9c550f0f5618cef4418dbcf500f507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee01e5bf3dcbf28dd3a7bf1162c136781f9c550f0f5618cef4418dbcf500f507->enter($__internal_ee01e5bf3dcbf28dd3a7bf1162c136781f9c550f0f5618cef4418dbcf500f507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_7a3e20071fa6fc4f3e9706a60f91503683cbe8bdc372ccaf29f4c48f58ecfb10->leave($__internal_7a3e20071fa6fc4f3e9706a60f91503683cbe8bdc372ccaf29f4c48f58ecfb10_prof);

        
        $__internal_ee01e5bf3dcbf28dd3a7bf1162c136781f9c550f0f5618cef4418dbcf500f507->leave($__internal_ee01e5bf3dcbf28dd3a7bf1162c136781f9c550f0f5618cef4418dbcf500f507_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
