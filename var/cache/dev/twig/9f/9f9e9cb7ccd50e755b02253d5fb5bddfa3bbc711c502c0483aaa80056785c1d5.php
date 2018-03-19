<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_df88dcbe2a563158613d4fc70f66d2478b554e4154ed4c5e0ea1f26f8a09a9df extends Twig_Template
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
        $__internal_44e71591e15b03de7895d1f12f3e16edf43472edd2bbc7036c4c7fc7c49fbbe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e71591e15b03de7895d1f12f3e16edf43472edd2bbc7036c4c7fc7c49fbbe6->enter($__internal_44e71591e15b03de7895d1f12f3e16edf43472edd2bbc7036c4c7fc7c49fbbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_08b398fe4ed8d5d3082d70ed020c7369e8e4abe41354d4f4a30b7a4d3d95f4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b398fe4ed8d5d3082d70ed020c7369e8e4abe41354d4f4a30b7a4d3d95f4a4->enter($__internal_08b398fe4ed8d5d3082d70ed020c7369e8e4abe41354d4f4a30b7a4d3d95f4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_44e71591e15b03de7895d1f12f3e16edf43472edd2bbc7036c4c7fc7c49fbbe6->leave($__internal_44e71591e15b03de7895d1f12f3e16edf43472edd2bbc7036c4c7fc7c49fbbe6_prof);

        
        $__internal_08b398fe4ed8d5d3082d70ed020c7369e8e4abe41354d4f4a30b7a4d3d95f4a4->leave($__internal_08b398fe4ed8d5d3082d70ed020c7369e8e4abe41354d4f4a30b7a4d3d95f4a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
