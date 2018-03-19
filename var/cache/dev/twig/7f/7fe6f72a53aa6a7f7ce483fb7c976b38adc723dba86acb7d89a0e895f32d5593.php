<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8bb2433433235aa76c4bb28e1e9188e027003ce5be40fb23cb4b196b8ff987e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_de1bfe2df822bf0a0522df19a5bc12511c11f9d5d41f0b9dd6d63779d55aa3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1bfe2df822bf0a0522df19a5bc12511c11f9d5d41f0b9dd6d63779d55aa3e2->enter($__internal_de1bfe2df822bf0a0522df19a5bc12511c11f9d5d41f0b9dd6d63779d55aa3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_6c412c643fae4705f6abee6d278fc5d60e30765b960e106188cb477de9031b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c412c643fae4705f6abee6d278fc5d60e30765b960e106188cb477de9031b65->enter($__internal_6c412c643fae4705f6abee6d278fc5d60e30765b960e106188cb477de9031b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de1bfe2df822bf0a0522df19a5bc12511c11f9d5d41f0b9dd6d63779d55aa3e2->leave($__internal_de1bfe2df822bf0a0522df19a5bc12511c11f9d5d41f0b9dd6d63779d55aa3e2_prof);

        
        $__internal_6c412c643fae4705f6abee6d278fc5d60e30765b960e106188cb477de9031b65->leave($__internal_6c412c643fae4705f6abee6d278fc5d60e30765b960e106188cb477de9031b65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5f97cb2695e6336255c695473f445590fd27d58f6d218aace9d1bb10376e5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f97cb2695e6336255c695473f445590fd27d58f6d218aace9d1bb10376e5b6->enter($__internal_a5f97cb2695e6336255c695473f445590fd27d58f6d218aace9d1bb10376e5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e88b3d0ddcf81106b3e49f113845da6fa06d7255f9ea533765970212f1969b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88b3d0ddcf81106b3e49f113845da6fa06d7255f9ea533765970212f1969b80->enter($__internal_e88b3d0ddcf81106b3e49f113845da6fa06d7255f9ea533765970212f1969b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e88b3d0ddcf81106b3e49f113845da6fa06d7255f9ea533765970212f1969b80->leave($__internal_e88b3d0ddcf81106b3e49f113845da6fa06d7255f9ea533765970212f1969b80_prof);

        
        $__internal_a5f97cb2695e6336255c695473f445590fd27d58f6d218aace9d1bb10376e5b6->leave($__internal_a5f97cb2695e6336255c695473f445590fd27d58f6d218aace9d1bb10376e5b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffcd24de5d8babd19d12ea94b56a953bc238177fef1993a852208449da95b804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcd24de5d8babd19d12ea94b56a953bc238177fef1993a852208449da95b804->enter($__internal_ffcd24de5d8babd19d12ea94b56a953bc238177fef1993a852208449da95b804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_96e41b3680e1cb33041d5ed8f970a2f5a5c623d9dbfca5b63cc6b986401e8bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e41b3680e1cb33041d5ed8f970a2f5a5c623d9dbfca5b63cc6b986401e8bcb->enter($__internal_96e41b3680e1cb33041d5ed8f970a2f5a5c623d9dbfca5b63cc6b986401e8bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96e41b3680e1cb33041d5ed8f970a2f5a5c623d9dbfca5b63cc6b986401e8bcb->leave($__internal_96e41b3680e1cb33041d5ed8f970a2f5a5c623d9dbfca5b63cc6b986401e8bcb_prof);

        
        $__internal_ffcd24de5d8babd19d12ea94b56a953bc238177fef1993a852208449da95b804->leave($__internal_ffcd24de5d8babd19d12ea94b56a953bc238177fef1993a852208449da95b804_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd1d307f32ac06b7a67b9913b3e5dab105469cf5e0776e3fd549439f4fae769b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1d307f32ac06b7a67b9913b3e5dab105469cf5e0776e3fd549439f4fae769b->enter($__internal_bd1d307f32ac06b7a67b9913b3e5dab105469cf5e0776e3fd549439f4fae769b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e33f47aadd63b5c453169c03a45016ada6d6c2f5868851d031821dd0f41d1b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33f47aadd63b5c453169c03a45016ada6d6c2f5868851d031821dd0f41d1b50->enter($__internal_e33f47aadd63b5c453169c03a45016ada6d6c2f5868851d031821dd0f41d1b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e33f47aadd63b5c453169c03a45016ada6d6c2f5868851d031821dd0f41d1b50->leave($__internal_e33f47aadd63b5c453169c03a45016ada6d6c2f5868851d031821dd0f41d1b50_prof);

        
        $__internal_bd1d307f32ac06b7a67b9913b3e5dab105469cf5e0776e3fd549439f4fae769b->leave($__internal_bd1d307f32ac06b7a67b9913b3e5dab105469cf5e0776e3fd549439f4fae769b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
