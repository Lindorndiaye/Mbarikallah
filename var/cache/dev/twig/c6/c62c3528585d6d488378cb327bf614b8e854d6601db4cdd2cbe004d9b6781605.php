<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ba79bf0fdea6a60767143980d304b566d3bb33a3fd1290d9215fe2207257daa7 extends Twig_Template
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
        $__internal_8b4c6bbde1a3fedb7ecddc1c842ad9f071ca51509be98dc025f9f21be186ade2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4c6bbde1a3fedb7ecddc1c842ad9f071ca51509be98dc025f9f21be186ade2->enter($__internal_8b4c6bbde1a3fedb7ecddc1c842ad9f071ca51509be98dc025f9f21be186ade2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_af8d2d645ab02d3b763525e324a0317a0b1c5c0b7f9912cee415203f6ad3eedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8d2d645ab02d3b763525e324a0317a0b1c5c0b7f9912cee415203f6ad3eedd->enter($__internal_af8d2d645ab02d3b763525e324a0317a0b1c5c0b7f9912cee415203f6ad3eedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8b4c6bbde1a3fedb7ecddc1c842ad9f071ca51509be98dc025f9f21be186ade2->leave($__internal_8b4c6bbde1a3fedb7ecddc1c842ad9f071ca51509be98dc025f9f21be186ade2_prof);

        
        $__internal_af8d2d645ab02d3b763525e324a0317a0b1c5c0b7f9912cee415203f6ad3eedd->leave($__internal_af8d2d645ab02d3b763525e324a0317a0b1c5c0b7f9912cee415203f6ad3eedd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
