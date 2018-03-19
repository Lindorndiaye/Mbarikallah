<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5e5f82d0e8598d5fafb24793f96efcd76dddce1bbf6a316330e22cd1e6334bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6b39397ff1d8ce1d4ee265c31bf9c59f08fe3346e3b9fbce45f622644e74cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b39397ff1d8ce1d4ee265c31bf9c59f08fe3346e3b9fbce45f622644e74cbe->enter($__internal_d6b39397ff1d8ce1d4ee265c31bf9c59f08fe3346e3b9fbce45f622644e74cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b94d7a77b936b9e06d2412ad2d5a69af5317fb047a69d28d52b20e3a2de37924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94d7a77b936b9e06d2412ad2d5a69af5317fb047a69d28d52b20e3a2de37924->enter($__internal_b94d7a77b936b9e06d2412ad2d5a69af5317fb047a69d28d52b20e3a2de37924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b39397ff1d8ce1d4ee265c31bf9c59f08fe3346e3b9fbce45f622644e74cbe->leave($__internal_d6b39397ff1d8ce1d4ee265c31bf9c59f08fe3346e3b9fbce45f622644e74cbe_prof);

        
        $__internal_b94d7a77b936b9e06d2412ad2d5a69af5317fb047a69d28d52b20e3a2de37924->leave($__internal_b94d7a77b936b9e06d2412ad2d5a69af5317fb047a69d28d52b20e3a2de37924_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dcb597f0d2a54501960671f3e7dabe37debb5aee65cb8a754af4ade63935dadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb597f0d2a54501960671f3e7dabe37debb5aee65cb8a754af4ade63935dadb->enter($__internal_dcb597f0d2a54501960671f3e7dabe37debb5aee65cb8a754af4ade63935dadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3fba22ed887c6a8e8b5a038d864706a03b5367666494e94073e74d4cc5af554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fba22ed887c6a8e8b5a038d864706a03b5367666494e94073e74d4cc5af554->enter($__internal_d3fba22ed887c6a8e8b5a038d864706a03b5367666494e94073e74d4cc5af554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d3fba22ed887c6a8e8b5a038d864706a03b5367666494e94073e74d4cc5af554->leave($__internal_d3fba22ed887c6a8e8b5a038d864706a03b5367666494e94073e74d4cc5af554_prof);

        
        $__internal_dcb597f0d2a54501960671f3e7dabe37debb5aee65cb8a754af4ade63935dadb->leave($__internal_dcb597f0d2a54501960671f3e7dabe37debb5aee65cb8a754af4ade63935dadb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e24abdf3c56b6c34ef0507ddf70b650b9e58adb24fa9230cba84503eefdb4856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24abdf3c56b6c34ef0507ddf70b650b9e58adb24fa9230cba84503eefdb4856->enter($__internal_e24abdf3c56b6c34ef0507ddf70b650b9e58adb24fa9230cba84503eefdb4856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d85ba077afd66e0e46e01f48f27a0c3c2ad4b693aa70b420020f56e5bf1c2bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85ba077afd66e0e46e01f48f27a0c3c2ad4b693aa70b420020f56e5bf1c2bbc->enter($__internal_d85ba077afd66e0e46e01f48f27a0c3c2ad4b693aa70b420020f56e5bf1c2bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d85ba077afd66e0e46e01f48f27a0c3c2ad4b693aa70b420020f56e5bf1c2bbc->leave($__internal_d85ba077afd66e0e46e01f48f27a0c3c2ad4b693aa70b420020f56e5bf1c2bbc_prof);

        
        $__internal_e24abdf3c56b6c34ef0507ddf70b650b9e58adb24fa9230cba84503eefdb4856->leave($__internal_e24abdf3c56b6c34ef0507ddf70b650b9e58adb24fa9230cba84503eefdb4856_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c09aac5b481c15b6db01ca4061ba796ea213fa90a6ce2f4b6a30df0fe2016968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09aac5b481c15b6db01ca4061ba796ea213fa90a6ce2f4b6a30df0fe2016968->enter($__internal_c09aac5b481c15b6db01ca4061ba796ea213fa90a6ce2f4b6a30df0fe2016968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18ffb045036513e8e7279b2a64e5834dda220fdf71b4d1345b3bf44490d1637e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ffb045036513e8e7279b2a64e5834dda220fdf71b4d1345b3bf44490d1637e->enter($__internal_18ffb045036513e8e7279b2a64e5834dda220fdf71b4d1345b3bf44490d1637e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_18ffb045036513e8e7279b2a64e5834dda220fdf71b4d1345b3bf44490d1637e->leave($__internal_18ffb045036513e8e7279b2a64e5834dda220fdf71b4d1345b3bf44490d1637e_prof);

        
        $__internal_c09aac5b481c15b6db01ca4061ba796ea213fa90a6ce2f4b6a30df0fe2016968->leave($__internal_c09aac5b481c15b6db01ca4061ba796ea213fa90a6ce2f4b6a30df0fe2016968_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
