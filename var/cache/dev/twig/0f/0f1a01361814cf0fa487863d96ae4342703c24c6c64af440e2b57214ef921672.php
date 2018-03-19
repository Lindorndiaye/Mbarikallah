<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8b40b482cae1edbeba3fecef412beff93282c784c6300621d3578d75e0441adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9606a7a71d03f4a49021759d82dc04366d434cb0001c0558eb7ca93dc5a93faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9606a7a71d03f4a49021759d82dc04366d434cb0001c0558eb7ca93dc5a93faa->enter($__internal_9606a7a71d03f4a49021759d82dc04366d434cb0001c0558eb7ca93dc5a93faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_24b7b3ff1292c72d73f833285ae3aaf051b98abbf8f439c6c97bc7be4853f31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b7b3ff1292c72d73f833285ae3aaf051b98abbf8f439c6c97bc7be4853f31e->enter($__internal_24b7b3ff1292c72d73f833285ae3aaf051b98abbf8f439c6c97bc7be4853f31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9606a7a71d03f4a49021759d82dc04366d434cb0001c0558eb7ca93dc5a93faa->leave($__internal_9606a7a71d03f4a49021759d82dc04366d434cb0001c0558eb7ca93dc5a93faa_prof);

        
        $__internal_24b7b3ff1292c72d73f833285ae3aaf051b98abbf8f439c6c97bc7be4853f31e->leave($__internal_24b7b3ff1292c72d73f833285ae3aaf051b98abbf8f439c6c97bc7be4853f31e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_04236e412aa9d9d7014d8f4301498e376954046bbbb7ecb44fb353e5672776ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04236e412aa9d9d7014d8f4301498e376954046bbbb7ecb44fb353e5672776ee->enter($__internal_04236e412aa9d9d7014d8f4301498e376954046bbbb7ecb44fb353e5672776ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2994a5cd80c5170e2dab425bc0e4aed3ef07bf9e1e3806d928f8b248f3a9bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2994a5cd80c5170e2dab425bc0e4aed3ef07bf9e1e3806d928f8b248f3a9bdc->enter($__internal_e2994a5cd80c5170e2dab425bc0e4aed3ef07bf9e1e3806d928f8b248f3a9bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e2994a5cd80c5170e2dab425bc0e4aed3ef07bf9e1e3806d928f8b248f3a9bdc->leave($__internal_e2994a5cd80c5170e2dab425bc0e4aed3ef07bf9e1e3806d928f8b248f3a9bdc_prof);

        
        $__internal_04236e412aa9d9d7014d8f4301498e376954046bbbb7ecb44fb353e5672776ee->leave($__internal_04236e412aa9d9d7014d8f4301498e376954046bbbb7ecb44fb353e5672776ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
