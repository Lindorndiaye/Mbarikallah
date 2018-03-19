<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_6c9e3f0ccd453ea02e38423a89e264d6c8cf200b10ff2a93a26974fcd424a61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05af55bf266980e5a076f3c09c02e25a8fc1881b5a047f6fc07c9e5cc069de59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05af55bf266980e5a076f3c09c02e25a8fc1881b5a047f6fc07c9e5cc069de59->enter($__internal_05af55bf266980e5a076f3c09c02e25a8fc1881b5a047f6fc07c9e5cc069de59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_5e8399b3feadf7fc2f5c4407e449ca9a124afe958dc70aa209f3b2a8fb80106e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8399b3feadf7fc2f5c4407e449ca9a124afe958dc70aa209f3b2a8fb80106e->enter($__internal_5e8399b3feadf7fc2f5c4407e449ca9a124afe958dc70aa209f3b2a8fb80106e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05af55bf266980e5a076f3c09c02e25a8fc1881b5a047f6fc07c9e5cc069de59->leave($__internal_05af55bf266980e5a076f3c09c02e25a8fc1881b5a047f6fc07c9e5cc069de59_prof);

        
        $__internal_5e8399b3feadf7fc2f5c4407e449ca9a124afe958dc70aa209f3b2a8fb80106e->leave($__internal_5e8399b3feadf7fc2f5c4407e449ca9a124afe958dc70aa209f3b2a8fb80106e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ba97d9a30b3524605bd650fe34f8864810a00705e78958da198e619cc1246c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba97d9a30b3524605bd650fe34f8864810a00705e78958da198e619cc1246c52->enter($__internal_ba97d9a30b3524605bd650fe34f8864810a00705e78958da198e619cc1246c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a571c12c1fcc22c68607eb73a2f289371202fbcc7fcefc33b8363ff6c93f18db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a571c12c1fcc22c68607eb73a2f289371202fbcc7fcefc33b8363ff6c93f18db->enter($__internal_a571c12c1fcc22c68607eb73a2f289371202fbcc7fcefc33b8363ff6c93f18db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <div>
        ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            ";
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
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 13
        echo "    </div>
 ";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 16
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 17
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 18
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    <div>
        ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "    </div>

    ";
        
        $__internal_a571c12c1fcc22c68607eb73a2f289371202fbcc7fcefc33b8363ff6c93f18db->leave($__internal_a571c12c1fcc22c68607eb73a2f289371202fbcc7fcefc33b8363ff6c93f18db_prof);

        
        $__internal_ba97d9a30b3524605bd650fe34f8864810a00705e78958da198e619cc1246c52->leave($__internal_ba97d9a30b3524605bd650fe34f8864810a00705e78958da198e619cc1246c52_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdf42d00a172ef7470b9030bfe5e664159b850a706244e33e42c1f075f1d6a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf42d00a172ef7470b9030bfe5e664159b850a706244e33e42c1f075f1d6a01->enter($__internal_bdf42d00a172ef7470b9030bfe5e664159b850a706244e33e42c1f075f1d6a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1604f7a97806181cfa6ab916942eff8a60cf054d9f78854dde6f9e8dec32f955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1604f7a97806181cfa6ab916942eff8a60cf054d9f78854dde6f9e8dec32f955->enter($__internal_1604f7a97806181cfa6ab916942eff8a60cf054d9f78854dde6f9e8dec32f955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "        ";
        
        $__internal_1604f7a97806181cfa6ab916942eff8a60cf054d9f78854dde6f9e8dec32f955->leave($__internal_1604f7a97806181cfa6ab916942eff8a60cf054d9f78854dde6f9e8dec32f955_prof);

        
        $__internal_bdf42d00a172ef7470b9030bfe5e664159b850a706244e33e42c1f075f1d6a01->leave($__internal_bdf42d00a172ef7470b9030bfe5e664159b850a706244e33e42c1f075f1d6a01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 26,  135 => 25,  123 => 27,  121 => 25,  117 => 23,  114 => 22,  108 => 21,  99 => 18,  94 => 17,  89 => 16,  84 => 15,  82 => 14,  79 => 13,  71 => 11,  65 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends \"::base1.html.twig\" %}
      {% block content %}

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
 {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>

    {% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/projet00000/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
