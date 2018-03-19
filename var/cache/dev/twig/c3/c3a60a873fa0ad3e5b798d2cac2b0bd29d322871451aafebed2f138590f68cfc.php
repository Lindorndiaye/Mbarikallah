<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b6f4d003337fb8586571dbc187c10e97e1b489a9ffb8d7b7a4ac015d49c89cb3 extends Twig_Template
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
        $__internal_d98c4046c7934fe483ac08baea531623da6f91ad853c43a9239aedc96e8fd6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98c4046c7934fe483ac08baea531623da6f91ad853c43a9239aedc96e8fd6b6->enter($__internal_d98c4046c7934fe483ac08baea531623da6f91ad853c43a9239aedc96e8fd6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_160bee4d0aff1c622cf7a3c388274e6f5ac6011e313a6eccb8073343f332e042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160bee4d0aff1c622cf7a3c388274e6f5ac6011e313a6eccb8073343f332e042->enter($__internal_160bee4d0aff1c622cf7a3c388274e6f5ac6011e313a6eccb8073343f332e042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d98c4046c7934fe483ac08baea531623da6f91ad853c43a9239aedc96e8fd6b6->leave($__internal_d98c4046c7934fe483ac08baea531623da6f91ad853c43a9239aedc96e8fd6b6_prof);

        
        $__internal_160bee4d0aff1c622cf7a3c388274e6f5ac6011e313a6eccb8073343f332e042->leave($__internal_160bee4d0aff1c622cf7a3c388274e6f5ac6011e313a6eccb8073343f332e042_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
