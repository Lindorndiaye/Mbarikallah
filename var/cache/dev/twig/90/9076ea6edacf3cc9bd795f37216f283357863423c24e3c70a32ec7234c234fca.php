<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7a67c651b9a188610be1167762bcbc90bf90c5cd0a7d50c4951fa923939f4abc extends Twig_Template
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
        $__internal_66f3789becc04a9ac500330f2c0ba8a02ab969356784479095f15b7997c3f4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f3789becc04a9ac500330f2c0ba8a02ab969356784479095f15b7997c3f4d4->enter($__internal_66f3789becc04a9ac500330f2c0ba8a02ab969356784479095f15b7997c3f4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8bd23ae02e08a274614e5b4787c6f4925fa9888da7336d2984b0d31962cdce88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd23ae02e08a274614e5b4787c6f4925fa9888da7336d2984b0d31962cdce88->enter($__internal_8bd23ae02e08a274614e5b4787c6f4925fa9888da7336d2984b0d31962cdce88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_66f3789becc04a9ac500330f2c0ba8a02ab969356784479095f15b7997c3f4d4->leave($__internal_66f3789becc04a9ac500330f2c0ba8a02ab969356784479095f15b7997c3f4d4_prof);

        
        $__internal_8bd23ae02e08a274614e5b4787c6f4925fa9888da7336d2984b0d31962cdce88->leave($__internal_8bd23ae02e08a274614e5b4787c6f4925fa9888da7336d2984b0d31962cdce88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
