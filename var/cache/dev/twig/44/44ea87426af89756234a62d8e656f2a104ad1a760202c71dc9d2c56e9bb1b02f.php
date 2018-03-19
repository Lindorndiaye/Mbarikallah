<?php

/* :image:show.html.twig */
class __TwigTemplate_1c1b016caae54614ccd35adea24eeb5a2d842b867ef4ff072c6bb241adf77d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:show.html.twig", 1);
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
        $__internal_f4177afa72eedbddec86f006a18fbb864301810a519781763d1fabedbd098463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4177afa72eedbddec86f006a18fbb864301810a519781763d1fabedbd098463->enter($__internal_f4177afa72eedbddec86f006a18fbb864301810a519781763d1fabedbd098463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:show.html.twig"));

        $__internal_6a8a6e19732712a82c1b1f0f9b2fd7ff03e68996c0df387d9fa59f6288687427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8a6e19732712a82c1b1f0f9b2fd7ff03e68996c0df387d9fa59f6288687427->enter($__internal_6a8a6e19732712a82c1b1f0f9b2fd7ff03e68996c0df387d9fa59f6288687427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4177afa72eedbddec86f006a18fbb864301810a519781763d1fabedbd098463->leave($__internal_f4177afa72eedbddec86f006a18fbb864301810a519781763d1fabedbd098463_prof);

        
        $__internal_6a8a6e19732712a82c1b1f0f9b2fd7ff03e68996c0df387d9fa59f6288687427->leave($__internal_6a8a6e19732712a82c1b1f0f9b2fd7ff03e68996c0df387d9fa59f6288687427_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_56b0fd5a55846f29d987f1453c58ecb20ea48d8241724c23ffbee75fb5401459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b0fd5a55846f29d987f1453c58ecb20ea48d8241724c23ffbee75fb5401459->enter($__internal_56b0fd5a55846f29d987f1453c58ecb20ea48d8241724c23ffbee75fb5401459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc52ba04eead96550602a98f21fd65911cd8e0eba151e16e34e0c6a5a7e97026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc52ba04eead96550602a98f21fd65911cd8e0eba151e16e34e0c6a5a7e97026->enter($__internal_fc52ba04eead96550602a98f21fd65911cd8e0eba151e16e34e0c6a5a7e97026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Image</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 14, $this->getSourceContext()); })()), "image", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 24, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 27, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fc52ba04eead96550602a98f21fd65911cd8e0eba151e16e34e0c6a5a7e97026->leave($__internal_fc52ba04eead96550602a98f21fd65911cd8e0eba151e16e34e0c6a5a7e97026_prof);

        
        $__internal_56b0fd5a55846f29d987f1453c58ecb20ea48d8241724c23ffbee75fb5401459->leave($__internal_56b0fd5a55846f29d987f1453c58ecb20ea48d8241724c23ffbee75fb5401459_prof);

    }

    public function getTemplateName()
    {
        return ":image:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Image</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ image.id }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ image.image }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('image_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('image_edit', { 'id': image.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":image:show.html.twig", "/var/www/html/projet00000/app/Resources/views/image/show.html.twig");
    }
}
