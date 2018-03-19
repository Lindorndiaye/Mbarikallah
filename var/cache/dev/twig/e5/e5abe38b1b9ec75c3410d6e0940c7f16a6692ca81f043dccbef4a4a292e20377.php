<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e4bccb4f6d7476cb80393a6546997f32abd39e012d627a89e9f4a403c87989c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59b182c0db043193104a410f5293d2339dd90d17695f12f30e049f3dd1506f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b182c0db043193104a410f5293d2339dd90d17695f12f30e049f3dd1506f5a->enter($__internal_59b182c0db043193104a410f5293d2339dd90d17695f12f30e049f3dd1506f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_aa9aae8324b38b4c61e6b4b05825b8defac4355ccd5558ee29f02079d5061e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9aae8324b38b4c61e6b4b05825b8defac4355ccd5558ee29f02079d5061e3a->enter($__internal_aa9aae8324b38b4c61e6b4b05825b8defac4355ccd5558ee29f02079d5061e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59b182c0db043193104a410f5293d2339dd90d17695f12f30e049f3dd1506f5a->leave($__internal_59b182c0db043193104a410f5293d2339dd90d17695f12f30e049f3dd1506f5a_prof);

        
        $__internal_aa9aae8324b38b4c61e6b4b05825b8defac4355ccd5558ee29f02079d5061e3a->leave($__internal_aa9aae8324b38b4c61e6b4b05825b8defac4355ccd5558ee29f02079d5061e3a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a957e3d169ffd6ad77d5bd866cff97427411af8b342107d04a42398908916d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a957e3d169ffd6ad77d5bd866cff97427411af8b342107d04a42398908916d29->enter($__internal_a957e3d169ffd6ad77d5bd866cff97427411af8b342107d04a42398908916d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66e4a7d95a30cc8602852d9d2faa6570c6106edca801929dc02e9a794d26c2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e4a7d95a30cc8602852d9d2faa6570c6106edca801929dc02e9a794d26c2f4->enter($__internal_66e4a7d95a30cc8602852d9d2faa6570c6106edca801929dc02e9a794d26c2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_66e4a7d95a30cc8602852d9d2faa6570c6106edca801929dc02e9a794d26c2f4->leave($__internal_66e4a7d95a30cc8602852d9d2faa6570c6106edca801929dc02e9a794d26c2f4_prof);

        
        $__internal_a957e3d169ffd6ad77d5bd866cff97427411af8b342107d04a42398908916d29->leave($__internal_a957e3d169ffd6ad77d5bd866cff97427411af8b342107d04a42398908916d29_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbfd7294b4db145bc3fab73f21bead328d2fd2b29e8b926be0cbe3a8845a6e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbfd7294b4db145bc3fab73f21bead328d2fd2b29e8b926be0cbe3a8845a6e62->enter($__internal_fbfd7294b4db145bc3fab73f21bead328d2fd2b29e8b926be0cbe3a8845a6e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_001abba3ce8da9fbc148da2dae7aca508520afc70fd48e78a84f7ce045700ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001abba3ce8da9fbc148da2dae7aca508520afc70fd48e78a84f7ce045700ec4->enter($__internal_001abba3ce8da9fbc148da2dae7aca508520afc70fd48e78a84f7ce045700ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_001abba3ce8da9fbc148da2dae7aca508520afc70fd48e78a84f7ce045700ec4->leave($__internal_001abba3ce8da9fbc148da2dae7aca508520afc70fd48e78a84f7ce045700ec4_prof);

        
        $__internal_fbfd7294b4db145bc3fab73f21bead328d2fd2b29e8b926be0cbe3a8845a6e62->leave($__internal_fbfd7294b4db145bc3fab73f21bead328d2fd2b29e8b926be0cbe3a8845a6e62_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
