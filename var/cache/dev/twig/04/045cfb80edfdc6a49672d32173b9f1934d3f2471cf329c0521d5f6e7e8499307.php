<?php

/* :bien:show.html.twig */
class __TwigTemplate_faa86025ab13085b28d28a68c39ee9b5d56cd77b1ca7c7e6d6d738e8f45c21cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":bien:show.html.twig", 1);
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
        $__internal_ebbb34f014157ae4818aaa4a75a6c640d6474ff8b85189d31065c1f40431b5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbb34f014157ae4818aaa4a75a6c640d6474ff8b85189d31065c1f40431b5ab->enter($__internal_ebbb34f014157ae4818aaa4a75a6c640d6474ff8b85189d31065c1f40431b5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:show.html.twig"));

        $__internal_dc7b9b206f7a2b163b937ca2dc42ecef93ccfef9e683420638a8586cad762fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7b9b206f7a2b163b937ca2dc42ecef93ccfef9e683420638a8586cad762fbb->enter($__internal_dc7b9b206f7a2b163b937ca2dc42ecef93ccfef9e683420638a8586cad762fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bien:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebbb34f014157ae4818aaa4a75a6c640d6474ff8b85189d31065c1f40431b5ab->leave($__internal_ebbb34f014157ae4818aaa4a75a6c640d6474ff8b85189d31065c1f40431b5ab_prof);

        
        $__internal_dc7b9b206f7a2b163b937ca2dc42ecef93ccfef9e683420638a8586cad762fbb->leave($__internal_dc7b9b206f7a2b163b937ca2dc42ecef93ccfef9e683420638a8586cad762fbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6535ecba38bd9a0dc736de45bdbe69ff1596534732a7eba3c76a1bc785a523fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6535ecba38bd9a0dc736de45bdbe69ff1596534732a7eba3c76a1bc785a523fd->enter($__internal_6535ecba38bd9a0dc736de45bdbe69ff1596534732a7eba3c76a1bc785a523fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0064dd77c9ff97064fa887b7b04168f515c353fe043c95796fcaa5b9797c1d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0064dd77c9ff97064fa887b7b04168f515c353fe043c95796fcaa5b9797c1d59->enter($__internal_0064dd77c9ff97064fa887b7b04168f515c353fe043c95796fcaa5b9797c1d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombien</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 14, $this->getSourceContext()); })()), "nomBien", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 18, $this->getSourceContext()); })()), "etat", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 22, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prixlocation</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 26, $this->getSourceContext()); })()), "prixLocation", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new Twig_Error_Runtime('Variable "bien" does not exist.', 36, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 39, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 41, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0064dd77c9ff97064fa887b7b04168f515c353fe043c95796fcaa5b9797c1d59->leave($__internal_0064dd77c9ff97064fa887b7b04168f515c353fe043c95796fcaa5b9797c1d59_prof);

        
        $__internal_6535ecba38bd9a0dc736de45bdbe69ff1596534732a7eba3c76a1bc785a523fd->leave($__internal_6535ecba38bd9a0dc736de45bdbe69ff1596534732a7eba3c76a1bc785a523fd_prof);

    }

    public function getTemplateName()
    {
        return ":bien:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  111 => 39,  105 => 36,  99 => 33,  89 => 26,  82 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bien</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ bien.id }}</td>
            </tr>
            <tr>
                <th>Nombien</th>
                <td>{{ bien.nomBien }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{% if bien.etat %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ bien.description }}</td>
            </tr>
            <tr>
                <th>Prixlocation</th>
                <td>{{ bien.prixLocation }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('bien_edit', { 'id': bien.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":bien:show.html.twig", "/var/www/html/projet00000/app/Resources/views/bien/show.html.twig");
    }
}
