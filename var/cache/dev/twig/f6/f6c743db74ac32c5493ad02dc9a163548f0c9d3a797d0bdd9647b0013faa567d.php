<?php

/* :image:edit.html.twig */
class __TwigTemplate_6313d166c252e95f93e5d4aa65a14e250da65131a2559b141e4194c7c0327b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:edit.html.twig", 1);
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
        $__internal_12588889f781bdd642c5b024cce92083cc2b87cd7c76d1926106f88551b87928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12588889f781bdd642c5b024cce92083cc2b87cd7c76d1926106f88551b87928->enter($__internal_12588889f781bdd642c5b024cce92083cc2b87cd7c76d1926106f88551b87928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:edit.html.twig"));

        $__internal_8277a7ed73c0d27be889f1745dc1f56a69fc9975b25efa46fb2430421d85cb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8277a7ed73c0d27be889f1745dc1f56a69fc9975b25efa46fb2430421d85cb80->enter($__internal_8277a7ed73c0d27be889f1745dc1f56a69fc9975b25efa46fb2430421d85cb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12588889f781bdd642c5b024cce92083cc2b87cd7c76d1926106f88551b87928->leave($__internal_12588889f781bdd642c5b024cce92083cc2b87cd7c76d1926106f88551b87928_prof);

        
        $__internal_8277a7ed73c0d27be889f1745dc1f56a69fc9975b25efa46fb2430421d85cb80->leave($__internal_8277a7ed73c0d27be889f1745dc1f56a69fc9975b25efa46fb2430421d85cb80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc06706de0313ad76d65e6b31eaa1a5db6fa3fac8cd2f43363bad51f9bf1e845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc06706de0313ad76d65e6b31eaa1a5db6fa3fac8cd2f43363bad51f9bf1e845->enter($__internal_bc06706de0313ad76d65e6b31eaa1a5db6fa3fac8cd2f43363bad51f9bf1e845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_544dcefb09413aaec6843b35bb85550f50c59bfd1da4704809605e5a88c07890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544dcefb09413aaec6843b35bb85550f50c59bfd1da4704809605e5a88c07890->enter($__internal_544dcefb09413aaec6843b35bb85550f50c59bfd1da4704809605e5a88c07890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Image edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_index");
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
        
        $__internal_544dcefb09413aaec6843b35bb85550f50c59bfd1da4704809605e5a88c07890->leave($__internal_544dcefb09413aaec6843b35bb85550f50c59bfd1da4704809605e5a88c07890_prof);

        
        $__internal_bc06706de0313ad76d65e6b31eaa1a5db6fa3fac8cd2f43363bad51f9bf1e845->leave($__internal_bc06706de0313ad76d65e6b31eaa1a5db6fa3fac8cd2f43363bad51f9bf1e845_prof);

    }

    public function getTemplateName()
    {
        return ":image:edit.html.twig";
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
    <h1>Image edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('image_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":image:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/image/edit.html.twig");
    }
}
