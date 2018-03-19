<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_869cbe233b0abfb6ff77f7bbea92d8b2d0e67d526e26a89281162cd2842afd84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71d3b4fa24224b6f53ff0eb83ef07f5becb38ef91d66a218f660afc81fdee84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d3b4fa24224b6f53ff0eb83ef07f5becb38ef91d66a218f660afc81fdee84e->enter($__internal_71d3b4fa24224b6f53ff0eb83ef07f5becb38ef91d66a218f660afc81fdee84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e9f9e720a99e6e9ec123a370d9b6be298d0edc8778bad66ae61fb77f6327b5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f9e720a99e6e9ec123a370d9b6be298d0edc8778bad66ae61fb77f6327b5e2->enter($__internal_e9f9e720a99e6e9ec123a370d9b6be298d0edc8778bad66ae61fb77f6327b5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_71d3b4fa24224b6f53ff0eb83ef07f5becb38ef91d66a218f660afc81fdee84e->leave($__internal_71d3b4fa24224b6f53ff0eb83ef07f5becb38ef91d66a218f660afc81fdee84e_prof);

        
        $__internal_e9f9e720a99e6e9ec123a370d9b6be298d0edc8778bad66ae61fb77f6327b5e2->leave($__internal_e9f9e720a99e6e9ec123a370d9b6be298d0edc8778bad66ae61fb77f6327b5e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
