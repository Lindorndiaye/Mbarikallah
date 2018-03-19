<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b80d24367f945c492f3929a379921514abfa20ea1f934d6430283e0d0638eacb extends Twig_Template
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
        $__internal_82df2d9e0e46c8f83bcfea8f4697090eeb0f9d84d7b35c848a32af535fbbf456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82df2d9e0e46c8f83bcfea8f4697090eeb0f9d84d7b35c848a32af535fbbf456->enter($__internal_82df2d9e0e46c8f83bcfea8f4697090eeb0f9d84d7b35c848a32af535fbbf456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7d84d8dd43e67cb1f16032132acf9a319ee431b74634ca1f4357c72b35a8ee91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d84d8dd43e67cb1f16032132acf9a319ee431b74634ca1f4357c72b35a8ee91->enter($__internal_7d84d8dd43e67cb1f16032132acf9a319ee431b74634ca1f4357c72b35a8ee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_82df2d9e0e46c8f83bcfea8f4697090eeb0f9d84d7b35c848a32af535fbbf456->leave($__internal_82df2d9e0e46c8f83bcfea8f4697090eeb0f9d84d7b35c848a32af535fbbf456_prof);

        
        $__internal_7d84d8dd43e67cb1f16032132acf9a319ee431b74634ca1f4357c72b35a8ee91->leave($__internal_7d84d8dd43e67cb1f16032132acf9a319ee431b74634ca1f4357c72b35a8ee91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
