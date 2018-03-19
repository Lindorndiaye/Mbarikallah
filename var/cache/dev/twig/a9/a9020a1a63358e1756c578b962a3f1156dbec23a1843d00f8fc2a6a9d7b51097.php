<?php

/* KEURGUIimmoBundle:Security:login.html.twig */
class __TwigTemplate_d0fdd2692860cb0c2b8b51ac480bbd32684a3bf1cbed38ec21aacbd0302a14b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "KEURGUIimmoBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21cee03044b5aacb0c407e321ef6abfe976a5c2e9bc11b3f8f4d8f2d73318e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21cee03044b5aacb0c407e321ef6abfe976a5c2e9bc11b3f8f4d8f2d73318e1f->enter($__internal_21cee03044b5aacb0c407e321ef6abfe976a5c2e9bc11b3f8f4d8f2d73318e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:Security:login.html.twig"));

        $__internal_b8929f2bc6942559f32b96ff6b328292a6a914191b846e9a5a924f6be4836f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8929f2bc6942559f32b96ff6b328292a6a914191b846e9a5a924f6be4836f6f->enter($__internal_b8929f2bc6942559f32b96ff6b328292a6a914191b846e9a5a924f6be4836f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21cee03044b5aacb0c407e321ef6abfe976a5c2e9bc11b3f8f4d8f2d73318e1f->leave($__internal_21cee03044b5aacb0c407e321ef6abfe976a5c2e9bc11b3f8f4d8f2d73318e1f_prof);

        
        $__internal_b8929f2bc6942559f32b96ff6b328292a6a914191b846e9a5a924f6be4836f6f->leave($__internal_b8929f2bc6942559f32b96ff6b328292a6a914191b846e9a5a924f6be4836f6f_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b11a9c24814b25fb9776fe79088cb7540a3d5a3d05c3a3ff276a176abefedf9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11a9c24814b25fb9776fe79088cb7540a3d5a3d05c3a3ff276a176abefedf9e->enter($__internal_b11a9c24814b25fb9776fe79088cb7540a3d5a3d05c3a3ff276a176abefedf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_338229ca098882e074913e197efc7878658605dd7ef2ce8005db0a71a148562d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338229ca098882e074913e197efc7878658605dd7ef2ce8005db0a71a148562d->enter($__internal_338229ca098882e074913e197efc7878658605dd7ef2ce8005db0a71a148562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

    <div class=\"formgroup\">
        <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"formgroup\">
        <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    <div>

    <div class=\"checkbox\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>

        <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
    ";
        
        $__internal_338229ca098882e074913e197efc7878658605dd7ef2ce8005db0a71a148562d->leave($__internal_338229ca098882e074913e197efc7878658605dd7ef2ce8005db0a71a148562d_prof);

        
        $__internal_b11a9c24814b25fb9776fe79088cb7540a3d5a3d05c3a3ff276a176abefedf9e->leave($__internal_b11a9c24814b25fb9776fe79088cb7540a3d5a3d05c3a3ff276a176abefedf9e_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  91 => 24,  82 => 18,  75 => 14,  71 => 13,  65 => 10,  61 => 9,  58 => 8,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends \"FOSUserBundle::layout.html.twig\" %}
    {% trans_default_domain 'FOSUserBundle' %}

    {% block fos_user_content %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

    <div class=\"formgroup\">
        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
    </div>

    <div class=\"formgroup\">
        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    <div>

    <div class=\"checkbox\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
    </div>

        <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    </form>
    {% endblock fos_user_content %}", "KEURGUIimmoBundle:Security:login.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/Security/login.html.twig");
    }
}
