<?php

/* KEURGUIimmoBundle:front:formLog.html.twig */
class __TwigTemplate_bbb75109b566abce76a93e73ced44d177c5df99452d4479c9f33240aa9e0044b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@KEURGUIimmo/layout.html.twig", "KEURGUIimmoBundle:front:formLog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@KEURGUIimmo/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d2d024e1aa0e86cbb170d6dab7d7b79adb67bc3d6f675601b91ac1b614004e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2d024e1aa0e86cbb170d6dab7d7b79adb67bc3d6f675601b91ac1b614004e7->enter($__internal_0d2d024e1aa0e86cbb170d6dab7d7b79adb67bc3d6f675601b91ac1b614004e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLog.html.twig"));

        $__internal_7c7a99d99d4a70a79cf470a3d05f75c03d6a087e5c12dc80a2ef024bf00993a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7a99d99d4a70a79cf470a3d05f75c03d6a087e5c12dc80a2ef024bf00993a7->enter($__internal_7c7a99d99d4a70a79cf470a3d05f75c03d6a087e5c12dc80a2ef024bf00993a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:front:formLog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d2d024e1aa0e86cbb170d6dab7d7b79adb67bc3d6f675601b91ac1b614004e7->leave($__internal_0d2d024e1aa0e86cbb170d6dab7d7b79adb67bc3d6f675601b91ac1b614004e7_prof);

        
        $__internal_7c7a99d99d4a70a79cf470a3d05f75c03d6a087e5c12dc80a2ef024bf00993a7->leave($__internal_7c7a99d99d4a70a79cf470a3d05f75c03d6a087e5c12dc80a2ef024bf00993a7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d2b3a865986bb00e1f7e0d72b9d149f6a4c6e2a36ca73a1749bab3961386d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2b3a865986bb00e1f7e0d72b9d149f6a4c6e2a36ca73a1749bab3961386d2b->enter($__internal_4d2b3a865986bb00e1f7e0d72b9d149f6a4c6e2a36ca73a1749bab3961386d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e25fa57f8607c86f6b1b40003372966f7af85f310c9c680f42226bbef1ac62c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25fa57f8607c86f6b1b40003372966f7af85f310c9c680f42226bbef1ac62c5->enter($__internal_e25fa57f8607c86f6b1b40003372966f7af85f310c9c680f42226bbef1ac62c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "



";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form');
        echo "


";
        
        $__internal_e25fa57f8607c86f6b1b40003372966f7af85f310c9c680f42226bbef1ac62c5->leave($__internal_e25fa57f8607c86f6b1b40003372966f7af85f310c9c680f42226bbef1ac62c5_prof);

        
        $__internal_4d2b3a865986bb00e1f7e0d72b9d149f6a4c6e2a36ca73a1749bab3961386d2b->leave($__internal_4d2b3a865986bb00e1f7e0d72b9d149f6a4c6e2a36ca73a1749bab3961386d2b_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_2c95b0d599cff0599ffae3b697308349c342b6704811ee09bc47eaf282141e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c95b0d599cff0599ffae3b697308349c342b6704811ee09bc47eaf282141e74->enter($__internal_2c95b0d599cff0599ffae3b697308349c342b6704811ee09bc47eaf282141e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_83575006194fc2526f76d2752ef8be7b849c524c1501e8c2a475925eb2b959d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83575006194fc2526f76d2752ef8be7b849c524c1501e8c2a475925eb2b959d5->enter($__internal_83575006194fc2526f76d2752ef8be7b849c524c1501e8c2a475925eb2b959d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_83575006194fc2526f76d2752ef8be7b849c524c1501e8c2a475925eb2b959d5->leave($__internal_83575006194fc2526f76d2752ef8be7b849c524c1501e8c2a475925eb2b959d5_prof);

        
        $__internal_2c95b0d599cff0599ffae3b697308349c342b6704811ee09bc47eaf282141e74->leave($__internal_2c95b0d599cff0599ffae3b697308349c342b6704811ee09bc47eaf282141e74_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:front:formLog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 6,  72 => 5,  58 => 12,  52 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@KEURGUIimmo/layout.html.twig\" %}


{% block body %}
{% block header %}
{{parent()}}
{% endblock %}




{{form(form)}}


{% endblock %}", "KEURGUIimmoBundle:front:formLog.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/formLog.html.twig");
    }
}
