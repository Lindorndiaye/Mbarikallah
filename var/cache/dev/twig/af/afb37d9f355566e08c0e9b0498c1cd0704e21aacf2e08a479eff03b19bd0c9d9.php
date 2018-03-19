<?php

/* :client:show.html.twig */
class __TwigTemplate_3b9c0c90dcaee36f6ba07467527f78c1b8dba8e2c02626408a036814c5fe338b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:show.html.twig", 1);
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
        $__internal_64c1e20d7fde50cd1df2e24a162cf6288c641e9f7ed931741db72ab396fea519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c1e20d7fde50cd1df2e24a162cf6288c641e9f7ed931741db72ab396fea519->enter($__internal_64c1e20d7fde50cd1df2e24a162cf6288c641e9f7ed931741db72ab396fea519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $__internal_ee246251ac103225496aea89281979761717a7cf9abebb3b2b6738f7c763545f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee246251ac103225496aea89281979761717a7cf9abebb3b2b6738f7c763545f->enter($__internal_ee246251ac103225496aea89281979761717a7cf9abebb3b2b6738f7c763545f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64c1e20d7fde50cd1df2e24a162cf6288c641e9f7ed931741db72ab396fea519->leave($__internal_64c1e20d7fde50cd1df2e24a162cf6288c641e9f7ed931741db72ab396fea519_prof);

        
        $__internal_ee246251ac103225496aea89281979761717a7cf9abebb3b2b6738f7c763545f->leave($__internal_ee246251ac103225496aea89281979761717a7cf9abebb3b2b6738f7c763545f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc37ab2db8ecabffae2f3203bb8df873d0fa31a88e64d198b2116e046e8302f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc37ab2db8ecabffae2f3203bb8df873d0fa31a88e64d198b2116e046e8302f5->enter($__internal_fc37ab2db8ecabffae2f3203bb8df873d0fa31a88e64d198b2116e046e8302f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66c0f7e284e64108018f3c8f3b6ad38406aed935963494e55edea26b8bc1c661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c0f7e284e64108018f3c8f3b6ad38406aed935963494e55edea26b8bc1c661->enter($__internal_66c0f7e284e64108018f3c8f3b6ad38406aed935963494e55edea26b8bc1c661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numpiece</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 14, $this->getSourceContext()); })()), "numpiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcomplet</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 18, $this->getSourceContext()); })()), "nomComplet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 22, $this->getSourceContext()); })()), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 26, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 30, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 40, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_66c0f7e284e64108018f3c8f3b6ad38406aed935963494e55edea26b8bc1c661->leave($__internal_66c0f7e284e64108018f3c8f3b6ad38406aed935963494e55edea26b8bc1c661_prof);

        
        $__internal_fc37ab2db8ecabffae2f3203bb8df873d0fa31a88e64d198b2116e046e8302f5->leave($__internal_fc37ab2db8ecabffae2f3203bb8df873d0fa31a88e64d198b2116e046e8302f5_prof);

    }

    public function getTemplateName()
    {
        return ":client:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ client.id }}</td>
            </tr>
            <tr>
                <th>Numpiece</th>
                <td>{{ client.numpiece }}</td>
            </tr>
            <tr>
                <th>Nomcomplet</th>
                <td>{{ client.nomComplet }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ client.tel }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ client.adresse }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ client.email }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('client_edit', { 'id': client.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:show.html.twig", "/var/www/html/projet00000/app/Resources/views/client/show.html.twig");
    }
}
