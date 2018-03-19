<?php

/* :contrat:edit.html.twig */
class __TwigTemplate_1d1df1492bfa0485257cccae9ce8a2c393edf5f7294f3942033b9ab9dfc20053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrat:edit.html.twig", 1);
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
        $__internal_15dca42ab176fc5c4e41f206d5003750c77f65bf317b453f8101c6ddfa8decd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15dca42ab176fc5c4e41f206d5003750c77f65bf317b453f8101c6ddfa8decd0->enter($__internal_15dca42ab176fc5c4e41f206d5003750c77f65bf317b453f8101c6ddfa8decd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:edit.html.twig"));

        $__internal_ca28467e9fa5c58731e586ff49054530a1d9da0c735288574ea4d602608e6d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca28467e9fa5c58731e586ff49054530a1d9da0c735288574ea4d602608e6d69->enter($__internal_ca28467e9fa5c58731e586ff49054530a1d9da0c735288574ea4d602608e6d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15dca42ab176fc5c4e41f206d5003750c77f65bf317b453f8101c6ddfa8decd0->leave($__internal_15dca42ab176fc5c4e41f206d5003750c77f65bf317b453f8101c6ddfa8decd0_prof);

        
        $__internal_ca28467e9fa5c58731e586ff49054530a1d9da0c735288574ea4d602608e6d69->leave($__internal_ca28467e9fa5c58731e586ff49054530a1d9da0c735288574ea4d602608e6d69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_816c0d6820f679c210829e8f8a56040fc0a779c755aea9398c09cc934f6aca3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816c0d6820f679c210829e8f8a56040fc0a779c755aea9398c09cc934f6aca3d->enter($__internal_816c0d6820f679c210829e8f8a56040fc0a779c755aea9398c09cc934f6aca3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4934e486dd1770c4862b4f503146f008aae1dfd52c07e06d6dd5a602b3f7dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4934e486dd1770c4862b4f503146f008aae1dfd52c07e06d6dd5a602b3f7dd5->enter($__internal_f4934e486dd1770c4862b4f503146f008aae1dfd52c07e06d6dd5a602b3f7dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contrat edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_index");
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
        
        $__internal_f4934e486dd1770c4862b4f503146f008aae1dfd52c07e06d6dd5a602b3f7dd5->leave($__internal_f4934e486dd1770c4862b4f503146f008aae1dfd52c07e06d6dd5a602b3f7dd5_prof);

        
        $__internal_816c0d6820f679c210829e8f8a56040fc0a779c755aea9398c09cc934f6aca3d->leave($__internal_816c0d6820f679c210829e8f8a56040fc0a779c755aea9398c09cc934f6aca3d_prof);

    }

    public function getTemplateName()
    {
        return ":contrat:edit.html.twig";
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
    <h1>Contrat edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('contrat_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":contrat:edit.html.twig", "/var/www/html/projet00000/app/Resources/views/contrat/edit.html.twig");
    }
}
