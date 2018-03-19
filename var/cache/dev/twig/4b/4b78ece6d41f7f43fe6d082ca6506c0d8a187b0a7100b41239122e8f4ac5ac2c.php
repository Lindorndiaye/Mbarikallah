<?php

/* :paiement:index.html.twig */
class __TwigTemplate_7cc0d115e629eddfebe8712000e8be9a7cf376a3b15f55635bc4c9991755ef56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":paiement:index.html.twig", 1);
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
        $__internal_0b32469e97f28128a348d21c6067f1647646747aeb38aaf7b7fe243b1b9ba00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b32469e97f28128a348d21c6067f1647646747aeb38aaf7b7fe243b1b9ba00d->enter($__internal_0b32469e97f28128a348d21c6067f1647646747aeb38aaf7b7fe243b1b9ba00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:index.html.twig"));

        $__internal_995928643b87804f09998c0ebe548f9dfba046b3831098bbd45e951b9961b857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995928643b87804f09998c0ebe548f9dfba046b3831098bbd45e951b9961b857->enter($__internal_995928643b87804f09998c0ebe548f9dfba046b3831098bbd45e951b9961b857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":paiement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b32469e97f28128a348d21c6067f1647646747aeb38aaf7b7fe243b1b9ba00d->leave($__internal_0b32469e97f28128a348d21c6067f1647646747aeb38aaf7b7fe243b1b9ba00d_prof);

        
        $__internal_995928643b87804f09998c0ebe548f9dfba046b3831098bbd45e951b9961b857->leave($__internal_995928643b87804f09998c0ebe548f9dfba046b3831098bbd45e951b9961b857_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e90b70b8a2e5dfc2ab82057c3d505da4b2f936c88f1bcd503a034ef332452aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e90b70b8a2e5dfc2ab82057c3d505da4b2f936c88f1bcd503a034ef332452aa->enter($__internal_0e90b70b8a2e5dfc2ab82057c3d505da4b2f936c88f1bcd503a034ef332452aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a7a501a8e97f9904a63deefa3c27b753bce2ca91e11b5af6eb12178de15cc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7a501a8e97f9904a63deefa3c27b753bce2ca91e11b5af6eb12178de15cc36->enter($__internal_5a7a501a8e97f9904a63deefa3c27b753bce2ca91e11b5af6eb12178de15cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Paiements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datepaiement</th>
                <th>Montant</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paiements"]) || array_key_exists("paiements", $context) ? $context["paiements"] : (function () { throw new Twig_Error_Runtime('Variable "paiements" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "datePaiement", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "datePaiement", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "montant", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["paiement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_new");
        echo "\">Create a new paiement</a>
        </li>
    </ul>
";
        
        $__internal_5a7a501a8e97f9904a63deefa3c27b753bce2ca91e11b5af6eb12178de15cc36->leave($__internal_5a7a501a8e97f9904a63deefa3c27b753bce2ca91e11b5af6eb12178de15cc36_prof);

        
        $__internal_0e90b70b8a2e5dfc2ab82057c3d505da4b2f936c88f1bcd503a034ef332452aa->leave($__internal_0e90b70b8a2e5dfc2ab82057c3d505da4b2f936c88f1bcd503a034ef332452aa_prof);

    }

    public function getTemplateName()
    {
        return ":paiement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Paiements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datepaiement</th>
                <th>Montant</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for paiement in paiements %}
            <tr>
                <td><a href=\"{{ path('paiement_show', { 'id': paiement.id }) }}\">{{ paiement.id }}</a></td>
                <td>{% if paiement.datePaiement %}{{ paiement.datePaiement|date('Y-m-d') }}{% endif %}</td>
                <td>{{ paiement.montant }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('paiement_show', { 'id': paiement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('paiement_edit', { 'id': paiement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('paiement_new') }}\">Create a new paiement</a>
        </li>
    </ul>
{% endblock %}
", ":paiement:index.html.twig", "/var/www/html/projet00000/app/Resources/views/paiement/index.html.twig");
    }
}
