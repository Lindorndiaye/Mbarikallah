<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_eabad89878253c9156cd60660ff2c56741338edb41cae4ab1b4204fb11500040 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2955c7eca5938dd65e31b360cae78d3609d4ba27c875bfbbcfa41a45c5f32e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2955c7eca5938dd65e31b360cae78d3609d4ba27c875bfbbcfa41a45c5f32e37->enter($__internal_2955c7eca5938dd65e31b360cae78d3609d4ba27c875bfbbcfa41a45c5f32e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_61c23086f07e40a4108e1fa99c6029511569a9cf85ff1cde620cc66ff430d9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c23086f07e40a4108e1fa99c6029511569a9cf85ff1cde620cc66ff430d9c4->enter($__internal_61c23086f07e40a4108e1fa99c6029511569a9cf85ff1cde620cc66ff430d9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2955c7eca5938dd65e31b360cae78d3609d4ba27c875bfbbcfa41a45c5f32e37->leave($__internal_2955c7eca5938dd65e31b360cae78d3609d4ba27c875bfbbcfa41a45c5f32e37_prof);

        
        $__internal_61c23086f07e40a4108e1fa99c6029511569a9cf85ff1cde620cc66ff430d9c4->leave($__internal_61c23086f07e40a4108e1fa99c6029511569a9cf85ff1cde620cc66ff430d9c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a76ddfcd29a9492b9c8b46c8d519a12009dc473ddf80859057f205bdffbf050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a76ddfcd29a9492b9c8b46c8d519a12009dc473ddf80859057f205bdffbf050->enter($__internal_9a76ddfcd29a9492b9c8b46c8d519a12009dc473ddf80859057f205bdffbf050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee745f1151135e25d5f31fce1aac76f5a2295b818716ed7adeefff3ea4a95141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee745f1151135e25d5f31fce1aac76f5a2295b818716ed7adeefff3ea4a95141->enter($__internal_ee745f1151135e25d5f31fce1aac76f5a2295b818716ed7adeefff3ea4a95141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ee745f1151135e25d5f31fce1aac76f5a2295b818716ed7adeefff3ea4a95141->leave($__internal_ee745f1151135e25d5f31fce1aac76f5a2295b818716ed7adeefff3ea4a95141_prof);

        
        $__internal_9a76ddfcd29a9492b9c8b46c8d519a12009dc473ddf80859057f205bdffbf050->leave($__internal_9a76ddfcd29a9492b9c8b46c8d519a12009dc473ddf80859057f205bdffbf050_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d230ec567eddd4b7fefb9107892d6f78721df070ae065f9b23ceae9be259bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d230ec567eddd4b7fefb9107892d6f78721df070ae065f9b23ceae9be259bfc->enter($__internal_5d230ec567eddd4b7fefb9107892d6f78721df070ae065f9b23ceae9be259bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5cefab50eb15d85d1ecb2af54516ab4859f460773441ff4d8c16c0446b20cdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cefab50eb15d85d1ecb2af54516ab4859f460773441ff4d8c16c0446b20cdf8->enter($__internal_5cefab50eb15d85d1ecb2af54516ab4859f460773441ff4d8c16c0446b20cdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5cefab50eb15d85d1ecb2af54516ab4859f460773441ff4d8c16c0446b20cdf8->leave($__internal_5cefab50eb15d85d1ecb2af54516ab4859f460773441ff4d8c16c0446b20cdf8_prof);

        
        $__internal_5d230ec567eddd4b7fefb9107892d6f78721df070ae065f9b23ceae9be259bfc->leave($__internal_5d230ec567eddd4b7fefb9107892d6f78721df070ae065f9b23ceae9be259bfc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_afaa6b5b07f29d29a4eaeb89434d1100fe0ea0209040f17a9d7b219c690bf556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afaa6b5b07f29d29a4eaeb89434d1100fe0ea0209040f17a9d7b219c690bf556->enter($__internal_afaa6b5b07f29d29a4eaeb89434d1100fe0ea0209040f17a9d7b219c690bf556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d78ef71f0917b9a47e64ec94a8e236f642affe92db75916672de46f9f8eee7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78ef71f0917b9a47e64ec94a8e236f642affe92db75916672de46f9f8eee7ec->enter($__internal_d78ef71f0917b9a47e64ec94a8e236f642affe92db75916672de46f9f8eee7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d78ef71f0917b9a47e64ec94a8e236f642affe92db75916672de46f9f8eee7ec->leave($__internal_d78ef71f0917b9a47e64ec94a8e236f642affe92db75916672de46f9f8eee7ec_prof);

        
        $__internal_afaa6b5b07f29d29a4eaeb89434d1100fe0ea0209040f17a9d7b219c690bf556->leave($__internal_afaa6b5b07f29d29a4eaeb89434d1100fe0ea0209040f17a9d7b219c690bf556_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
