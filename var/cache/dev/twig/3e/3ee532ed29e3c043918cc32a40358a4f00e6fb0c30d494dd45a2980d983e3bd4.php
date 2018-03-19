<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b97aced41121113cccc34db04e3b2e168624fad06beccc969ad2c4692d19f2fe extends Twig_Template
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
        $__internal_1dbe8fa24818bc6b11d516e3443af351e39f81e433426f619d7979d7eb67cf8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbe8fa24818bc6b11d516e3443af351e39f81e433426f619d7979d7eb67cf8a->enter($__internal_1dbe8fa24818bc6b11d516e3443af351e39f81e433426f619d7979d7eb67cf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1bea679bedf76203de3914505d7761f0379e215dfff3fc058a7e93db57188eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bea679bedf76203de3914505d7761f0379e215dfff3fc058a7e93db57188eb0->enter($__internal_1bea679bedf76203de3914505d7761f0379e215dfff3fc058a7e93db57188eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1dbe8fa24818bc6b11d516e3443af351e39f81e433426f619d7979d7eb67cf8a->leave($__internal_1dbe8fa24818bc6b11d516e3443af351e39f81e433426f619d7979d7eb67cf8a_prof);

        
        $__internal_1bea679bedf76203de3914505d7761f0379e215dfff3fc058a7e93db57188eb0->leave($__internal_1bea679bedf76203de3914505d7761f0379e215dfff3fc058a7e93db57188eb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
