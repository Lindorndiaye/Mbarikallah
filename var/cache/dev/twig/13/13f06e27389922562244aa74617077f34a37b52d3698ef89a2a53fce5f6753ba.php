<?php

/* KEURGUIimmoBundle::layoutl.html.twig */
class __TwigTemplate_3d0806f5c0dfacee82a0e9397ad0e5d3f39fd9116d7c2ff42ca299f62064bba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basel.html.twig", "KEURGUIimmoBundle::layoutl.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daffc5f59060b5d2df0bd82fcf834954ad5781f8b3de0e8deb6447180598ea84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daffc5f59060b5d2df0bd82fcf834954ad5781f8b3de0e8deb6447180598ea84->enter($__internal_daffc5f59060b5d2df0bd82fcf834954ad5781f8b3de0e8deb6447180598ea84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layoutl.html.twig"));

        $__internal_1b16fb4cc560c28903aa0bcb88cb050f1bd53dc0d170c357955f4d7991b082d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b16fb4cc560c28903aa0bcb88cb050f1bd53dc0d170c357955f4d7991b082d7->enter($__internal_1b16fb4cc560c28903aa0bcb88cb050f1bd53dc0d170c357955f4d7991b082d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KEURGUIimmoBundle::layoutl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daffc5f59060b5d2df0bd82fcf834954ad5781f8b3de0e8deb6447180598ea84->leave($__internal_daffc5f59060b5d2df0bd82fcf834954ad5781f8b3de0e8deb6447180598ea84_prof);

        
        $__internal_1b16fb4cc560c28903aa0bcb88cb050f1bd53dc0d170c357955f4d7991b082d7->leave($__internal_1b16fb4cc560c28903aa0bcb88cb050f1bd53dc0d170c357955f4d7991b082d7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7adf9071a9711da45341a0eb3494bcaac4f36493bf0b1e46e4eddb1b92c6aefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7adf9071a9711da45341a0eb3494bcaac4f36493bf0b1e46e4eddb1b92c6aefd->enter($__internal_7adf9071a9711da45341a0eb3494bcaac4f36493bf0b1e46e4eddb1b92c6aefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a90e1b10c14594bdc966f745853c7a65d0988dce00a00338738b2eb3609b6ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90e1b10c14594bdc966f745853c7a65d0988dce00a00338738b2eb3609b6ee4->enter($__internal_a90e1b10c14594bdc966f745853c7a65d0988dce00a00338738b2eb3609b6ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "      
        ";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "

";
        
        $__internal_a90e1b10c14594bdc966f745853c7a65d0988dce00a00338738b2eb3609b6ee4->leave($__internal_a90e1b10c14594bdc966f745853c7a65d0988dce00a00338738b2eb3609b6ee4_prof);

        
        $__internal_7adf9071a9711da45341a0eb3494bcaac4f36493bf0b1e46e4eddb1b92c6aefd->leave($__internal_7adf9071a9711da45341a0eb3494bcaac4f36493bf0b1e46e4eddb1b92c6aefd_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_45533ad12ea18995f56cf8c0f18db1b3df45775f7c433c05e9ce5b2beb71195c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45533ad12ea18995f56cf8c0f18db1b3df45775f7c433c05e9ce5b2beb71195c->enter($__internal_45533ad12ea18995f56cf8c0f18db1b3df45775f7c433c05e9ce5b2beb71195c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f833c7c8eedede456a9dc37bd87a80817989ab75c6889c72705f0b57fbeb746d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f833c7c8eedede456a9dc37bd87a80817989ab75c6889c72705f0b57fbeb746d->enter($__internal_f833c7c8eedede456a9dc37bd87a80817989ab75c6889c72705f0b57fbeb746d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "  <header class=\"row\" style=\"height:125px; margin-left:130px; margin-right:130px;\">
 <div class=\"col-3\"><a href=\"\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Capture du 2018-02-12 14-26-19.png"), "html", null, true);
        echo "\" style=\"width:200px\"alt=\"\"></a></div>
 
 
 
 <div class=\"col-7\">
 <ul style=\"display:flex; list-style:none; margin-top:35px;space-beetwen \" >
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black; text-decoration:none; \"> Accueil</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\"> Nos Annonces</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\">Notre Agence</a></li>
 </ul>
 
 </div>

 <div class=\"col-2\" style=\" margin-top:42px; color:black; \">
 <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("log");
        echo "\">se connecter</a>
 </ul>
 
 </div>
 
 </header>

";
        
        $__internal_f833c7c8eedede456a9dc37bd87a80817989ab75c6889c72705f0b57fbeb746d->leave($__internal_f833c7c8eedede456a9dc37bd87a80817989ab75c6889c72705f0b57fbeb746d_prof);

        
        $__internal_45533ad12ea18995f56cf8c0f18db1b3df45775f7c433c05e9ce5b2beb71195c->leave($__internal_45533ad12ea18995f56cf8c0f18db1b3df45775f7c433c05e9ce5b2beb71195c_prof);

    }

    public function getTemplateName()
    {
        return "KEURGUIimmoBundle::layoutl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  79 => 6,  76 => 5,  67 => 4,  55 => 28,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends \"::basel.html.twig\" %}
{% block body %}
      
        {% block header %}
  <header class=\"row\" style=\"height:125px; margin-left:130px; margin-right:130px;\">
 <div class=\"col-3\"><a href=\"\"><img src=\"{{ asset('images/Capture du 2018-02-12 14-26-19.png') }}\" style=\"width:200px\"alt=\"\"></a></div>
 
 
 
 <div class=\"col-7\">
 <ul style=\"display:flex; list-style:none; margin-top:35px;space-beetwen \" >
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black; text-decoration:none; \"> Accueil</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\"> Nos Annonces</a></li>
 <li style=\"margin:10px;\"><a href=\"\"style=\"color:black;text-decoration:none;\">Notre Agence</a></li>
 </ul>
 
 </div>

 <div class=\"col-2\" style=\" margin-top:42px; color:black; \">
 <a href=\"{{path('log')}}\">se connecter</a>
 </ul>
 
 </div>
 
 </header>

{% endblock %}


{% endblock %}", "KEURGUIimmoBundle::layoutl.html.twig", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/layoutl.html.twig");
    }
}
