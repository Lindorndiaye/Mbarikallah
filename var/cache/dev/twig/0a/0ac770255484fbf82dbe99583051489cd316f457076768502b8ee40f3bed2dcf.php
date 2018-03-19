<?php

/* KEURGUIimmoBundle::layout.html.twig */
class __TwigTemplate_7cb5c36cb5000c369a0f5f17c94bc36c17ad1f5df1176720a584154f2f8ed581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "KEURGUIimmoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47056bbd0d78e57cacfe13647b96a93517b39036d954db776c08cbce7aa12ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47056bbd0d78e57cacfe13647b96a93517b39036d954db776c08cbce7aa12ade->enter($__internal_47056bbd0d78e57cacfe13647b96a93517b39036d954db776c08cbce7aa12ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layout.html.twig"));

        $__internal_dc4682c80682b381e156ec9a656de6bdff8413d3fc45f7473baed4f167b3d6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4682c80682b381e156ec9a656de6bdff8413d3fc45f7473baed4f167b3d6bd->enter($__internal_dc4682c80682b381e156ec9a656de6bdff8413d3fc45f7473baed4f167b3d6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47056bbd0d78e57cacfe13647b96a93517b39036d954db776c08cbce7aa12ade->leave($__internal_47056bbd0d78e57cacfe13647b96a93517b39036d954db776c08cbce7aa12ade_prof);

        
        $__internal_dc4682c80682b381e156ec9a656de6bdff8413d3fc45f7473baed4f167b3d6bd->leave($__internal_dc4682c80682b381e156ec9a656de6bdff8413d3fc45f7473baed4f167b3d6bd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_badc23c9ca89f26529c44e9f4fd988fc55eeac463aef07985a76bcdd97e177f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_badc23c9ca89f26529c44e9f4fd988fc55eeac463aef07985a76bcdd97e177f8->enter($__internal_badc23c9ca89f26529c44e9f4fd988fc55eeac463aef07985a76bcdd97e177f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27e67d5532161e83cc58365a6d0d59942ab51634d92dc0e205a0b247a9bad3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e67d5532161e83cc58365a6d0d59942ab51634d92dc0e205a0b247a9bad3df->enter($__internal_27e67d5532161e83cc58365a6d0d59942ab51634d92dc0e205a0b247a9bad3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
       <div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>
      
";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "

";
        
        $__internal_27e67d5532161e83cc58365a6d0d59942ab51634d92dc0e205a0b247a9bad3df->leave($__internal_27e67d5532161e83cc58365a6d0d59942ab51634d92dc0e205a0b247a9bad3df_prof);

        
        $__internal_badc23c9ca89f26529c44e9f4fd988fc55eeac463aef07985a76bcdd97e177f8->leave($__internal_badc23c9ca89f26529c44e9f4fd988fc55eeac463aef07985a76bcdd97e177f8_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_883f3b422ef2f7c40e0fe4da6781e45882541432ce8bed044abc823ed4c34ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883f3b422ef2f7c40e0fe4da6781e45882541432ce8bed044abc823ed4c34ee7->enter($__internal_883f3b422ef2f7c40e0fe4da6781e45882541432ce8bed044abc823ed4c34ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_82fe791d3806852aff5c48af8b13c65495c8caaae8b5e4cc1004505bb13cf5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fe791d3806852aff5c48af8b13c65495c8caaae8b5e4cc1004505bb13cf5b1->enter($__internal_82fe791d3806852aff5c48af8b13c65495c8caaae8b5e4cc1004505bb13cf5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        $this->displayParentBlock("header", $context, $blocks);
        echo "

";
        
        $__internal_82fe791d3806852aff5c48af8b13c65495c8caaae8b5e4cc1004505bb13cf5b1->leave($__internal_82fe791d3806852aff5c48af8b13c65495c8caaae8b5e4cc1004505bb13cf5b1_prof);

        
        $__internal_883f3b422ef2f7c40e0fe4da6781e45882541432ce8bed044abc823ed4c34ee7->leave($__internal_883f3b422ef2f7c40e0fe4da6781e45882541432ce8bed044abc823ed4c34ee7_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_975bad8b51aac51e12ed7b2640d0c4e06b1ad136e7c5259f3e2928679f3f653b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975bad8b51aac51e12ed7b2640d0c4e06b1ad136e7c5259f3e2928679f3f653b->enter($__internal_975bad8b51aac51e12ed7b2640d0c4e06b1ad136e7c5259f3e2928679f3f653b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_315bbcc557bc02979f43c6149e4e47e68ccbb65b63d7dc7f69c7df94b56b87d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315bbcc557bc02979f43c6149e4e47e68ccbb65b63d7dc7f69c7df94b56b87d8->enter($__internal_315bbcc557bc02979f43c6149e4e47e68ccbb65b63d7dc7f69c7df94b56b87d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "

";
        
        $__internal_315bbcc557bc02979f43c6149e4e47e68ccbb65b63d7dc7f69c7df94b56b87d8->leave($__internal_315bbcc557bc02979f43c6149e4e47e68ccbb65b63d7dc7f69c7df94b56b87d8_prof);

        
        $__internal_975bad8b51aac51e12ed7b2640d0c4e06b1ad136e7c5259f3e2928679f3f653b->leave($__internal_975bad8b51aac51e12ed7b2640d0c4e06b1ad136e7c5259f3e2928679f3f653b_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 20,  122 => 19,  109 => 16,  100 => 15,  88 => 23,  86 => 19,  84 => 15,  80 => 13,  72 => 11,  66 => 8,  62 => 7,  57 => 6,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends \"::base.html.twig\" %}
{% block body %}

       <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>
      
{% block header %}
{{parent()}}

{% endblock %}
{% block content %}


{% endblock %}


{% endblock %}", "KEURGUIimmoBundle::layout.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/layout.html.twig");
    }
}
