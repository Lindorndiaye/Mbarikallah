<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_69b3e64d659da9bea4afeb40f889b7b25b3c6685d1e3f5ab587b3f78b76d31ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c418f273d10dfd9f6771bb1c31dfe4ed3471f96a3893135aa0c1f6ea5e6995db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c418f273d10dfd9f6771bb1c31dfe4ed3471f96a3893135aa0c1f6ea5e6995db->enter($__internal_c418f273d10dfd9f6771bb1c31dfe4ed3471f96a3893135aa0c1f6ea5e6995db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b23f35eb8076b90bd8fe8567bd5cba0580537b01a80012e67aad0f4605454055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23f35eb8076b90bd8fe8567bd5cba0580537b01a80012e67aad0f4605454055->enter($__internal_b23f35eb8076b90bd8fe8567bd5cba0580537b01a80012e67aad0f4605454055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c418f273d10dfd9f6771bb1c31dfe4ed3471f96a3893135aa0c1f6ea5e6995db->leave($__internal_c418f273d10dfd9f6771bb1c31dfe4ed3471f96a3893135aa0c1f6ea5e6995db_prof);

        
        $__internal_b23f35eb8076b90bd8fe8567bd5cba0580537b01a80012e67aad0f4605454055->leave($__internal_b23f35eb8076b90bd8fe8567bd5cba0580537b01a80012e67aad0f4605454055_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01d151f85870aff372b9374f019cd60cd288b1fc913d91666df1196559e63a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d151f85870aff372b9374f019cd60cd288b1fc913d91666df1196559e63a1e->enter($__internal_01d151f85870aff372b9374f019cd60cd288b1fc913d91666df1196559e63a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0fb6e0b61cefc19baf2320375a85daee2ab167d803104c584a041cfe1a74bbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb6e0b61cefc19baf2320375a85daee2ab167d803104c584a041cfe1a74bbd6->enter($__internal_0fb6e0b61cefc19baf2320375a85daee2ab167d803104c584a041cfe1a74bbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0fb6e0b61cefc19baf2320375a85daee2ab167d803104c584a041cfe1a74bbd6->leave($__internal_0fb6e0b61cefc19baf2320375a85daee2ab167d803104c584a041cfe1a74bbd6_prof);

        
        $__internal_01d151f85870aff372b9374f019cd60cd288b1fc913d91666df1196559e63a1e->leave($__internal_01d151f85870aff372b9374f019cd60cd288b1fc913d91666df1196559e63a1e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca8f093692760dfd97b45ca08543363877206db29e5b7b5da7346e92cfc9ad57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8f093692760dfd97b45ca08543363877206db29e5b7b5da7346e92cfc9ad57->enter($__internal_ca8f093692760dfd97b45ca08543363877206db29e5b7b5da7346e92cfc9ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e24bcfa0f33761cc895b82c95dc3dbe32d673f913a5a569c804239671e358c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24bcfa0f33761cc895b82c95dc3dbe32d673f913a5a569c804239671e358c3a->enter($__internal_e24bcfa0f33761cc895b82c95dc3dbe32d673f913a5a569c804239671e358c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e24bcfa0f33761cc895b82c95dc3dbe32d673f913a5a569c804239671e358c3a->leave($__internal_e24bcfa0f33761cc895b82c95dc3dbe32d673f913a5a569c804239671e358c3a_prof);

        
        $__internal_ca8f093692760dfd97b45ca08543363877206db29e5b7b5da7346e92cfc9ad57->leave($__internal_ca8f093692760dfd97b45ca08543363877206db29e5b7b5da7346e92cfc9ad57_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_25911071fa66cc1e24fd6e049c082e2a4868675b0d904ea333288f75856f3f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25911071fa66cc1e24fd6e049c082e2a4868675b0d904ea333288f75856f3f0f->enter($__internal_25911071fa66cc1e24fd6e049c082e2a4868675b0d904ea333288f75856f3f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_921175b34b6a258902395a18f06ea5eea6aebd7445d858a224853073572c5595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921175b34b6a258902395a18f06ea5eea6aebd7445d858a224853073572c5595->enter($__internal_921175b34b6a258902395a18f06ea5eea6aebd7445d858a224853073572c5595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_921175b34b6a258902395a18f06ea5eea6aebd7445d858a224853073572c5595->leave($__internal_921175b34b6a258902395a18f06ea5eea6aebd7445d858a224853073572c5595_prof);

        
        $__internal_25911071fa66cc1e24fd6e049c082e2a4868675b0d904ea333288f75856f3f0f->leave($__internal_25911071fa66cc1e24fd6e049c082e2a4868675b0d904ea333288f75856f3f0f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
