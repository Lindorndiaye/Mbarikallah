<?php

/* :contrat:show.html.twig */
class __TwigTemplate_4f3d69ec79981456735931b45a0a69746b95a27ed2f534d12ba9b33bc78c522f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":contrat:show.html.twig", 1);
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
        $__internal_a87b6666de6fa6f23752efffd7f264a0d7f4c6f6b7ecb8a5dcab61419169d9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87b6666de6fa6f23752efffd7f264a0d7f4c6f6b7ecb8a5dcab61419169d9c8->enter($__internal_a87b6666de6fa6f23752efffd7f264a0d7f4c6f6b7ecb8a5dcab61419169d9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:show.html.twig"));

        $__internal_2d538bc99998a389f62786eec6a3e2193bae74755c48b04cb302a7e583f20dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d538bc99998a389f62786eec6a3e2193bae74755c48b04cb302a7e583f20dc2->enter($__internal_2d538bc99998a389f62786eec6a3e2193bae74755c48b04cb302a7e583f20dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":contrat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a87b6666de6fa6f23752efffd7f264a0d7f4c6f6b7ecb8a5dcab61419169d9c8->leave($__internal_a87b6666de6fa6f23752efffd7f264a0d7f4c6f6b7ecb8a5dcab61419169d9c8_prof);

        
        $__internal_2d538bc99998a389f62786eec6a3e2193bae74755c48b04cb302a7e583f20dc2->leave($__internal_2d538bc99998a389f62786eec6a3e2193bae74755c48b04cb302a7e583f20dc2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d90c2157599ea2bc4f7646eaa18efe2a66ba7d0456cf65664778ec6634728746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90c2157599ea2bc4f7646eaa18efe2a66ba7d0456cf65664778ec6634728746->enter($__internal_d90c2157599ea2bc4f7646eaa18efe2a66ba7d0456cf65664778ec6634728746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb3a7892191e12af644c5cc643956ea070fc29d517cd789e2fcdb525e8a87a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3a7892191e12af644c5cc643956ea070fc29d517cd789e2fcdb525e8a87a9a->enter($__internal_fb3a7892191e12af644c5cc643956ea070fc29d517cd789e2fcdb525e8a87a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contrat</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new Twig_Error_Runtime('Variable "contrat" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecontrat</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new Twig_Error_Runtime('Variable "contrat" does not exist.', 14, $this->getSourceContext()); })()), "datecontrat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new Twig_Error_Runtime('Variable "contrat" does not exist.', 14, $this->getSourceContext()); })()), "datecontrat", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Caution</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new Twig_Error_Runtime('Variable "contrat" does not exist.', 18, $this->getSourceContext()); })()), "caution", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 22
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new Twig_Error_Runtime('Variable "contrat" does not exist.', 22, $this->getSourceContext()); })()), "duree", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new Twig_Error_Runtime('Variable "contrat" does not exist.', 22, $this->getSourceContext()); })()), "duree", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new Twig_Error_Runtime('Variable "contrat" does not exist.', 32, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 35, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 37, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fb3a7892191e12af644c5cc643956ea070fc29d517cd789e2fcdb525e8a87a9a->leave($__internal_fb3a7892191e12af644c5cc643956ea070fc29d517cd789e2fcdb525e8a87a9a_prof);

        
        $__internal_d90c2157599ea2bc4f7646eaa18efe2a66ba7d0456cf65664778ec6634728746->leave($__internal_d90c2157599ea2bc4f7646eaa18efe2a66ba7d0456cf65664778ec6634728746_prof);

    }

    public function getTemplateName()
    {
        return ":contrat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  104 => 35,  98 => 32,  92 => 29,  80 => 22,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Contrat</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contrat.id }}</td>
            </tr>
            <tr>
                <th>Datecontrat</th>
                <td>{% if contrat.datecontrat %}{{ contrat.datecontrat|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Caution</th>
                <td>{{ contrat.caution }}</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>{% if contrat.duree %}{{ contrat.duree|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contrat_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('contrat_edit', { 'id': contrat.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":contrat:show.html.twig", "/var/www/html/projet00000/app/Resources/views/contrat/show.html.twig");
    }
}
