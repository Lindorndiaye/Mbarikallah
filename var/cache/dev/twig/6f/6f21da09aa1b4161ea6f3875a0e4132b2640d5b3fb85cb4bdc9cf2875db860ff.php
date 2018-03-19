<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_54ee613a4399005731d0b58ab5e13d9c986d50ac80f5c0b00366637b2edec0d7 extends Twig_Template
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
        $__internal_f9d3e63d6b2bfe422ac106b2be380e1a50bfaa042df5e366f4bb3413209ab84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d3e63d6b2bfe422ac106b2be380e1a50bfaa042df5e366f4bb3413209ab84c->enter($__internal_f9d3e63d6b2bfe422ac106b2be380e1a50bfaa042df5e366f4bb3413209ab84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ca03cba9957b956216301593f1d9d6bf8828911b9cb27712fe26815da6793c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca03cba9957b956216301593f1d9d6bf8828911b9cb27712fe26815da6793c86->enter($__internal_ca03cba9957b956216301593f1d9d6bf8828911b9cb27712fe26815da6793c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f9d3e63d6b2bfe422ac106b2be380e1a50bfaa042df5e366f4bb3413209ab84c->leave($__internal_f9d3e63d6b2bfe422ac106b2be380e1a50bfaa042df5e366f4bb3413209ab84c_prof);

        
        $__internal_ca03cba9957b956216301593f1d9d6bf8828911b9cb27712fe26815da6793c86->leave($__internal_ca03cba9957b956216301593f1d9d6bf8828911b9cb27712fe26815da6793c86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
