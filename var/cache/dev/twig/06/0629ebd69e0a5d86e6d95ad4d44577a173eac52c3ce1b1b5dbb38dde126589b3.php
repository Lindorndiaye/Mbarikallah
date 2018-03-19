<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_70b5afcfc47e1d816daaea6c48c31fe39659b04298bff87affa5fe01749f4fde extends Twig_Template
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
        $__internal_c8b975fa2bf8a45db4a0700b5216bca29b9894f0dc93055a8e5ec3ca0076e4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b975fa2bf8a45db4a0700b5216bca29b9894f0dc93055a8e5ec3ca0076e4e7->enter($__internal_c8b975fa2bf8a45db4a0700b5216bca29b9894f0dc93055a8e5ec3ca0076e4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7ad48735cc2bf16b66f29734d339d699ff9a643b078a80c7e39b8e53ebc33420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad48735cc2bf16b66f29734d339d699ff9a643b078a80c7e39b8e53ebc33420->enter($__internal_7ad48735cc2bf16b66f29734d339d699ff9a643b078a80c7e39b8e53ebc33420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c8b975fa2bf8a45db4a0700b5216bca29b9894f0dc93055a8e5ec3ca0076e4e7->leave($__internal_c8b975fa2bf8a45db4a0700b5216bca29b9894f0dc93055a8e5ec3ca0076e4e7_prof);

        
        $__internal_7ad48735cc2bf16b66f29734d339d699ff9a643b078a80c7e39b8e53ebc33420->leave($__internal_7ad48735cc2bf16b66f29734d339d699ff9a643b078a80c7e39b8e53ebc33420_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
