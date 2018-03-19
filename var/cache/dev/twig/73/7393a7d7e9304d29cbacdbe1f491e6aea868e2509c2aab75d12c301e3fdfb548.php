<?php

/* :proprietaire:index.html.twig */
class __TwigTemplate_5aedbc6556131b8cac7cfb20c279d980454dab8ecf5c34f4f6ccb41f84959ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":proprietaire:index.html.twig", 1);
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
        $__internal_1f95171f3f629e31e0e687cc086b5f056075cf7c234c78975a157f4bbace84bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f95171f3f629e31e0e687cc086b5f056075cf7c234c78975a157f4bbace84bc->enter($__internal_1f95171f3f629e31e0e687cc086b5f056075cf7c234c78975a157f4bbace84bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:index.html.twig"));

        $__internal_dd428052d4f7c4e21e784664ecfdc5c1cc35fad8fb86b166d3de543e172f4b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd428052d4f7c4e21e784664ecfdc5c1cc35fad8fb86b166d3de543e172f4b33->enter($__internal_dd428052d4f7c4e21e784664ecfdc5c1cc35fad8fb86b166d3de543e172f4b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proprietaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f95171f3f629e31e0e687cc086b5f056075cf7c234c78975a157f4bbace84bc->leave($__internal_1f95171f3f629e31e0e687cc086b5f056075cf7c234c78975a157f4bbace84bc_prof);

        
        $__internal_dd428052d4f7c4e21e784664ecfdc5c1cc35fad8fb86b166d3de543e172f4b33->leave($__internal_dd428052d4f7c4e21e784664ecfdc5c1cc35fad8fb86b166d3de543e172f4b33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f419451e9621d38681b2bc5f0cb49588322b519673c4fc508ab88dbcc9f39bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f419451e9621d38681b2bc5f0cb49588322b519673c4fc508ab88dbcc9f39bd4->enter($__internal_f419451e9621d38681b2bc5f0cb49588322b519673c4fc508ab88dbcc9f39bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edd31548ee4fe1323d4badbb28bc14b6efbdafeaadf17ed6067a60852072717c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd31548ee4fe1323d4badbb28bc14b6efbdafeaadf17ed6067a60852072717c->enter($__internal_edd31548ee4fe1323d4badbb28bc14b6efbdafeaadf17ed6067a60852072717c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proprietaires list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numpiece</th>
                <th>Nomcomplet</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Comptebancaire</th>
                <th>Prixpropritaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proprietaires"]) || array_key_exists("proprietaires", $context) ? $context["proprietaires"] : (function () { throw new Twig_Error_Runtime('Variable "proprietaires" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proprietaire"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "numpiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "nomcomplet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "comptebancaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "prixPropritaire", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["proprietaire"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proprietaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_new");
        echo "\">Create a new proprietaire</a>
        </li>
    </ul>
";
        
        $__internal_edd31548ee4fe1323d4badbb28bc14b6efbdafeaadf17ed6067a60852072717c->leave($__internal_edd31548ee4fe1323d4badbb28bc14b6efbdafeaadf17ed6067a60852072717c_prof);

        
        $__internal_f419451e9621d38681b2bc5f0cb49588322b519673c4fc508ab88dbcc9f39bd4->leave($__internal_f419451e9621d38681b2bc5f0cb49588322b519673c4fc508ab88dbcc9f39bd4_prof);

    }

    public function getTemplateName()
    {
        return ":proprietaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  130 => 43,  118 => 37,  112 => 34,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Proprietaires list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numpiece</th>
                <th>Nomcomplet</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Comptebancaire</th>
                <th>Prixpropritaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for proprietaire in proprietaires %}
            <tr>
                <td><a href=\"{{ path('proprietaire_show', { 'id': proprietaire.id }) }}\">{{ proprietaire.id }}</a></td>
                <td>{{ proprietaire.numpiece }}</td>
                <td>{{ proprietaire.nomcomplet }}</td>
                <td>{{ proprietaire.adresse }}</td>
                <td>{{ proprietaire.tel }}</td>
                <td>{{ proprietaire.email }}</td>
                <td>{{ proprietaire.comptebancaire }}</td>
                <td>{{ proprietaire.prixPropritaire }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('proprietaire_show', { 'id': proprietaire.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('proprietaire_edit', { 'id': proprietaire.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('proprietaire_new') }}\">Create a new proprietaire</a>
        </li>
    </ul>
{% endblock %}
", ":proprietaire:index.html.twig", "/var/www/html/projet00000/app/Resources/views/proprietaire/index.html.twig");
    }
}
