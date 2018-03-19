<?php

/* :proprietaire:edit.html.twig */
class __TwigTemplate_af34a0031ce72032e7700849f622177c61506ef3eb90d567c6abea3de97d6774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proprietaire:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_904f8581addc6adff02ccbcb96b6da15a1fe4602971a42663f01d6c4a91f8f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904f8581addc6adff02ccbcb96b6da15a1fe4602971a42663f01d6c4a91f8f9e->enter($__internal_904f8581addc6adff02ccbcb96b6da15a1fe4602971a42663f01d6c4a91f8f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:edit.html.twig"));

        $__internal_1615393fa2e2f8e1b66fb4b36f95a90a1d715701cb8acfd0141c86de5776b0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1615393fa2e2f8e1b66fb4b36f95a90a1d715701cb8acfd0141c86de5776b0c5->enter($__internal_1615393fa2e2f8e1b66fb4b36f95a90a1d715701cb8acfd0141c86de5776b0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_904f8581addc6adff02ccbcb96b6da15a1fe4602971a42663f01d6c4a91f8f9e->leave($__internal_904f8581addc6adff02ccbcb96b6da15a1fe4602971a42663f01d6c4a91f8f9e_prof);

        
        $__internal_1615393fa2e2f8e1b66fb4b36f95a90a1d715701cb8acfd0141c86de5776b0c5->leave($__internal_1615393fa2e2f8e1b66fb4b36f95a90a1d715701cb8acfd0141c86de5776b0c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f600854c70ccada761c6c7bf10bcb7b2f8abda68751c7bf8a28d2d6088b8e346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f600854c70ccada761c6c7bf10bcb7b2f8abda68751c7bf8a28d2d6088b8e346->enter($__internal_f600854c70ccada761c6c7bf10bcb7b2f8abda68751c7bf8a28d2d6088b8e346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c98f8f8059ad345eb8cc823bed7992192acf5f097676fb951f6618c80c8fc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c98f8f8059ad345eb8cc823bed7992192acf5f097676fb951f6618c80c8fc5d->enter($__internal_1c98f8f8059ad345eb8cc823bed7992192acf5f097676fb951f6618c80c8fc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proprietaire edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1c98f8f8059ad345eb8cc823bed7992192acf5f097676fb951f6618c80c8fc5d->leave($__internal_1c98f8f8059ad345eb8cc823bed7992192acf5f097676fb951f6618c80c8fc5d_prof);

        
        $__internal_f600854c70ccada761c6c7bf10bcb7b2f8abda68751c7bf8a28d2d6088b8e346->leave($__internal_f600854c70ccada761c6c7bf10bcb7b2f8abda68751c7bf8a28d2d6088b8e346_prof);

    }

    public function getTemplateName()
    {
        return ":proprietaire:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Proprietaire edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('proprietaire_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":proprietaire:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/proprietaire/edit.html.twig");
    }
}
