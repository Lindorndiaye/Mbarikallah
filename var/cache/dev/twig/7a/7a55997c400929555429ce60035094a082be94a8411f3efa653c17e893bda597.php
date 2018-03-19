<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e8023d59594c8388363e34ccfc2b5dcccc6931bf3f479073e7370dcfb583673c extends Twig_Template
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
        $__internal_07ee66f7ebd3d1a492a4ec7531b4415485f38381acf850604dde575ad2961166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ee66f7ebd3d1a492a4ec7531b4415485f38381acf850604dde575ad2961166->enter($__internal_07ee66f7ebd3d1a492a4ec7531b4415485f38381acf850604dde575ad2961166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4ff8e162a8c18b60ff17f7badd26c84f794a8355a65e0b43b7bcb009008bca88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff8e162a8c18b60ff17f7badd26c84f794a8355a65e0b43b7bcb009008bca88->enter($__internal_4ff8e162a8c18b60ff17f7badd26c84f794a8355a65e0b43b7bcb009008bca88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_07ee66f7ebd3d1a492a4ec7531b4415485f38381acf850604dde575ad2961166->leave($__internal_07ee66f7ebd3d1a492a4ec7531b4415485f38381acf850604dde575ad2961166_prof);

        
        $__internal_4ff8e162a8c18b60ff17f7badd26c84f794a8355a65e0b43b7bcb009008bca88->leave($__internal_4ff8e162a8c18b60ff17f7badd26c84f794a8355a65e0b43b7bcb009008bca88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
