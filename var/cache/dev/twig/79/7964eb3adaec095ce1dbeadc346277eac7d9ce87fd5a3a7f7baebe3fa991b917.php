<?php

/* :client:index.html.twig */
class __TwigTemplate_c2f6dfc8c3e9c30c9c3e05eb0d599fb040a8aed763ba9b0cc2cab7fc675b9354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:index.html.twig", 1);
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
        $__internal_1b57ace33dd537f309bf16b1a56c8d863d6db48564662442be3d55e75da99cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b57ace33dd537f309bf16b1a56c8d863d6db48564662442be3d55e75da99cb6->enter($__internal_1b57ace33dd537f309bf16b1a56c8d863d6db48564662442be3d55e75da99cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:index.html.twig"));

        $__internal_bb019036dbd2970c87d35c5813b8607950760063878454b4d139a38bddd8bd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb019036dbd2970c87d35c5813b8607950760063878454b4d139a38bddd8bd1d->enter($__internal_bb019036dbd2970c87d35c5813b8607950760063878454b4d139a38bddd8bd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b57ace33dd537f309bf16b1a56c8d863d6db48564662442be3d55e75da99cb6->leave($__internal_1b57ace33dd537f309bf16b1a56c8d863d6db48564662442be3d55e75da99cb6_prof);

        
        $__internal_bb019036dbd2970c87d35c5813b8607950760063878454b4d139a38bddd8bd1d->leave($__internal_bb019036dbd2970c87d35c5813b8607950760063878454b4d139a38bddd8bd1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f858712553ed13241bb36bd46d2899ef2bbe8cc3c9dcdae376ab52be4bd1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f858712553ed13241bb36bd46d2899ef2bbe8cc3c9dcdae376ab52be4bd1df->enter($__internal_23f858712553ed13241bb36bd46d2899ef2bbe8cc3c9dcdae376ab52be4bd1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bee355f14a26f8c0f852f586868884fef278ef1e70b30026b4e412b0c7fe24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bee355f14a26f8c0f852f586868884fef278ef1e70b30026b4e412b0c7fe24c->enter($__internal_4bee355f14a26f8c0f852f586868884fef278ef1e70b30026b4e412b0c7fe24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Clients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numpiece</th>
                <th>Nomcomplet</th>
                <th>Tel</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "numpiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "nomComplet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_new");
        echo "\">Create a new client</a>
        </li>
    </ul>
";
        
        $__internal_4bee355f14a26f8c0f852f586868884fef278ef1e70b30026b4e412b0c7fe24c->leave($__internal_4bee355f14a26f8c0f852f586868884fef278ef1e70b30026b4e412b0c7fe24c_prof);

        
        $__internal_23f858712553ed13241bb36bd46d2899ef2bbe8cc3c9dcdae376ab52be4bd1df->leave($__internal_23f858712553ed13241bb36bd46d2899ef2bbe8cc3c9dcdae376ab52be4bd1df_prof);

    }

    public function getTemplateName()
    {
        return ":client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Clients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numpiece</th>
                <th>Nomcomplet</th>
                <th>Tel</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td><a href=\"{{ path('client_show', { 'id': client.id }) }}\">{{ client.id }}</a></td>
                <td>{{ client.numpiece }}</td>
                <td>{{ client.nomComplet }}</td>
                <td>{{ client.tel }}</td>
                <td>{{ client.adresse }}</td>
                <td>{{ client.email }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('client_show', { 'id': client.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('client_edit', { 'id': client.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('client_new') }}\">Create a new client</a>
        </li>
    </ul>
{% endblock %}
", ":client:index.html.twig", "/var/www/html/projet00000/app/Resources/views/client/index.html.twig");
    }
}
