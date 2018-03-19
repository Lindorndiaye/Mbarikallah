<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_bf8beb5972d1e9c30b33ee774f79b3cc956fead3ebf07c165dacd7da51702485 extends Twig_Template
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
        $__internal_cd63f2ef4eda4ee228dd6f5680d80b15338fd818a0d7757a776d73d6ae90ee98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd63f2ef4eda4ee228dd6f5680d80b15338fd818a0d7757a776d73d6ae90ee98->enter($__internal_cd63f2ef4eda4ee228dd6f5680d80b15338fd818a0d7757a776d73d6ae90ee98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2caa1dbb5d0b1b80bfd2a6a786a8c5c9f99105d3f0e7587329adead042ce597f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2caa1dbb5d0b1b80bfd2a6a786a8c5c9f99105d3f0e7587329adead042ce597f->enter($__internal_2caa1dbb5d0b1b80bfd2a6a786a8c5c9f99105d3f0e7587329adead042ce597f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_cd63f2ef4eda4ee228dd6f5680d80b15338fd818a0d7757a776d73d6ae90ee98->leave($__internal_cd63f2ef4eda4ee228dd6f5680d80b15338fd818a0d7757a776d73d6ae90ee98_prof);

        
        $__internal_2caa1dbb5d0b1b80bfd2a6a786a8c5c9f99105d3f0e7587329adead042ce597f->leave($__internal_2caa1dbb5d0b1b80bfd2a6a786a8c5c9f99105d3f0e7587329adead042ce597f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
