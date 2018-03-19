<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ce5f0608b9e1ccfb3b9c02421d91ecd5c6236ef2ec6f10777dc92c0da5808a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c811cfa2b8ded5eb86ecf4d09e65294d9453858901bbe6473eecbf2824db661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c811cfa2b8ded5eb86ecf4d09e65294d9453858901bbe6473eecbf2824db661->enter($__internal_3c811cfa2b8ded5eb86ecf4d09e65294d9453858901bbe6473eecbf2824db661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_7e5d62104edda72ce5d8cf30b929b11257162f603af81bb6a1f6765e3e7a0b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5d62104edda72ce5d8cf30b929b11257162f603af81bb6a1f6765e3e7a0b66->enter($__internal_7e5d62104edda72ce5d8cf30b929b11257162f603af81bb6a1f6765e3e7a0b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c811cfa2b8ded5eb86ecf4d09e65294d9453858901bbe6473eecbf2824db661->leave($__internal_3c811cfa2b8ded5eb86ecf4d09e65294d9453858901bbe6473eecbf2824db661_prof);

        
        $__internal_7e5d62104edda72ce5d8cf30b929b11257162f603af81bb6a1f6765e3e7a0b66->leave($__internal_7e5d62104edda72ce5d8cf30b929b11257162f603af81bb6a1f6765e3e7a0b66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a8941313f4e34fa27c41bad2a95ebd12d211f1697b66710caf5ebae1ec8706b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8941313f4e34fa27c41bad2a95ebd12d211f1697b66710caf5ebae1ec8706b->enter($__internal_7a8941313f4e34fa27c41bad2a95ebd12d211f1697b66710caf5ebae1ec8706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2db136922ed8d8a0044953be6d9007c90516190aa8a416bb8bd4120c89c2c8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db136922ed8d8a0044953be6d9007c90516190aa8a416bb8bd4120c89c2c8a2->enter($__internal_2db136922ed8d8a0044953be6d9007c90516190aa8a416bb8bd4120c89c2c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2db136922ed8d8a0044953be6d9007c90516190aa8a416bb8bd4120c89c2c8a2->leave($__internal_2db136922ed8d8a0044953be6d9007c90516190aa8a416bb8bd4120c89c2c8a2_prof);

        
        $__internal_7a8941313f4e34fa27c41bad2a95ebd12d211f1697b66710caf5ebae1ec8706b->leave($__internal_7a8941313f4e34fa27c41bad2a95ebd12d211f1697b66710caf5ebae1ec8706b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
