<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0d6fc3c71b55c5c099e395f0b3d7cc8d348e99d7b31c4aca228ec243b9c47dcf extends Twig_Template
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
        $__internal_1c83029973cd7123cc0721e235cd2bb7cd35e250ba6039934377186d7f173b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c83029973cd7123cc0721e235cd2bb7cd35e250ba6039934377186d7f173b6d->enter($__internal_1c83029973cd7123cc0721e235cd2bb7cd35e250ba6039934377186d7f173b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_17f3e5ac772ab5fb7e86a9cf6f6a59a9b94a7f5e468c162ccf5db7d8246b71e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f3e5ac772ab5fb7e86a9cf6f6a59a9b94a7f5e468c162ccf5db7d8246b71e3->enter($__internal_17f3e5ac772ab5fb7e86a9cf6f6a59a9b94a7f5e468c162ccf5db7d8246b71e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1c83029973cd7123cc0721e235cd2bb7cd35e250ba6039934377186d7f173b6d->leave($__internal_1c83029973cd7123cc0721e235cd2bb7cd35e250ba6039934377186d7f173b6d_prof);

        
        $__internal_17f3e5ac772ab5fb7e86a9cf6f6a59a9b94a7f5e468c162ccf5db7d8246b71e3->leave($__internal_17f3e5ac772ab5fb7e86a9cf6f6a59a9b94a7f5e468c162ccf5db7d8246b71e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
