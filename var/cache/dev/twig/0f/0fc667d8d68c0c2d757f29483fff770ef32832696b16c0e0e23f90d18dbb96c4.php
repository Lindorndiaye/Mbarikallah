<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_000d6138ce70295d21559ee7ed2ff05bc9f15d97d0a77e7ea139ee17f1256902 extends Twig_Template
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
        $__internal_ed427b9248b4c006f5d41d2520d0b4fa21b6a7238607ee475d5a4aa6d5756c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed427b9248b4c006f5d41d2520d0b4fa21b6a7238607ee475d5a4aa6d5756c56->enter($__internal_ed427b9248b4c006f5d41d2520d0b4fa21b6a7238607ee475d5a4aa6d5756c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9e51137db7c3ee677d1b9777fa1f9c12dcf0630d299ac075d0d80d9e877b852d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e51137db7c3ee677d1b9777fa1f9c12dcf0630d299ac075d0d80d9e877b852d->enter($__internal_9e51137db7c3ee677d1b9777fa1f9c12dcf0630d299ac075d0d80d9e877b852d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ed427b9248b4c006f5d41d2520d0b4fa21b6a7238607ee475d5a4aa6d5756c56->leave($__internal_ed427b9248b4c006f5d41d2520d0b4fa21b6a7238607ee475d5a4aa6d5756c56_prof);

        
        $__internal_9e51137db7c3ee677d1b9777fa1f9c12dcf0630d299ac075d0d80d9e877b852d->leave($__internal_9e51137db7c3ee677d1b9777fa1f9c12dcf0630d299ac075d0d80d9e877b852d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
