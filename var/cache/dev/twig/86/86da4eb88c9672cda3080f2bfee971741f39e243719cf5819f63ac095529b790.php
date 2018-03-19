<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_af2b9d5748763ca84864af92680b7094f6530a295ed21b33de66717188f0ef44 extends Twig_Template
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
        $__internal_8498eff485871b8ea9426995879593483a12b0c9605de68a753f8f517f8bb92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8498eff485871b8ea9426995879593483a12b0c9605de68a753f8f517f8bb92d->enter($__internal_8498eff485871b8ea9426995879593483a12b0c9605de68a753f8f517f8bb92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_87d0995ea45f4cfdc01018a43f7868d07923a782d8bb670b7975a3b8496c38b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d0995ea45f4cfdc01018a43f7868d07923a782d8bb670b7975a3b8496c38b5->enter($__internal_87d0995ea45f4cfdc01018a43f7868d07923a782d8bb670b7975a3b8496c38b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8498eff485871b8ea9426995879593483a12b0c9605de68a753f8f517f8bb92d->leave($__internal_8498eff485871b8ea9426995879593483a12b0c9605de68a753f8f517f8bb92d_prof);

        
        $__internal_87d0995ea45f4cfdc01018a43f7868d07923a782d8bb670b7975a3b8496c38b5->leave($__internal_87d0995ea45f4cfdc01018a43f7868d07923a782d8bb670b7975a3b8496c38b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
