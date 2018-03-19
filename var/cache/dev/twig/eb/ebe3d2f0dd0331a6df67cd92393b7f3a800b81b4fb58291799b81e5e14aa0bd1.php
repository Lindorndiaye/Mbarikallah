<?php

/* :image:index.html.twig */
class __TwigTemplate_cd1df3e748f2b7eb7050a1da403efa02c2cc21d252fcacf2713d80619065a139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":image:index.html.twig", 1);
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
        $__internal_b1d22d07d34f49b00ee7ddb45e60917017b7306872f699bd3d79dd366344cc5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d22d07d34f49b00ee7ddb45e60917017b7306872f699bd3d79dd366344cc5f->enter($__internal_b1d22d07d34f49b00ee7ddb45e60917017b7306872f699bd3d79dd366344cc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:index.html.twig"));

        $__internal_d760c2e4959706ed773e0670b0205c6f44a143b3d717dae963869017907d625b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d760c2e4959706ed773e0670b0205c6f44a143b3d717dae963869017907d625b->enter($__internal_d760c2e4959706ed773e0670b0205c6f44a143b3d717dae963869017907d625b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":image:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d22d07d34f49b00ee7ddb45e60917017b7306872f699bd3d79dd366344cc5f->leave($__internal_b1d22d07d34f49b00ee7ddb45e60917017b7306872f699bd3d79dd366344cc5f_prof);

        
        $__internal_d760c2e4959706ed773e0670b0205c6f44a143b3d717dae963869017907d625b->leave($__internal_d760c2e4959706ed773e0670b0205c6f44a143b3d717dae963869017907d625b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7741eaffb18feb1ec709a198221213e1bce0a5877d1fb5821a4c8f1f8a7d23de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7741eaffb18feb1ec709a198221213e1bce0a5877d1fb5821a4c8f1f8a7d23de->enter($__internal_7741eaffb18feb1ec709a198221213e1bce0a5877d1fb5821a4c8f1f8a7d23de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d26df5e76428392df108ef0b316a74ee82e40e2e70cdf7c02b9d18300613248b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26df5e76428392df108ef0b316a74ee82e40e2e70cdf7c02b9d18300613248b->enter($__internal_d26df5e76428392df108ef0b316a74ee82e40e2e70cdf7c02b9d18300613248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Images list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_new");
        echo "\">Create a new image</a>
        </li>
    </ul>
";
        
        $__internal_d26df5e76428392df108ef0b316a74ee82e40e2e70cdf7c02b9d18300613248b->leave($__internal_d26df5e76428392df108ef0b316a74ee82e40e2e70cdf7c02b9d18300613248b_prof);

        
        $__internal_7741eaffb18feb1ec709a198221213e1bce0a5877d1fb5821a4c8f1f8a7d23de->leave($__internal_7741eaffb18feb1ec709a198221213e1bce0a5877d1fb5821a4c8f1f8a7d23de_prof);

    }

    public function getTemplateName()
    {
        return ":image:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Images list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for image in images %}
            <tr>
                <td><a href=\"{{ path('image_show', { 'id': image.id }) }}\">{{ image.id }}</a></td>
                <td>{{ image.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('image_show', { 'id': image.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('image_edit', { 'id': image.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('image_new') }}\">Create a new image</a>
        </li>
    </ul>
{% endblock %}
", ":image:index.html.twig", "/var/www/html/projet00000/app/Resources/views/image/index.html.twig");
    }
}
