<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1cc2c626f141beab71de9b6f1bab313b102df67bedf1e02ee9cc0fe3f8f6312a extends Twig_Template
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
        $__internal_8d29e66eed365050d5dfd20c8a16cccf8479e05d2aac673cad551162b10cc0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d29e66eed365050d5dfd20c8a16cccf8479e05d2aac673cad551162b10cc0f6->enter($__internal_8d29e66eed365050d5dfd20c8a16cccf8479e05d2aac673cad551162b10cc0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_56fe7a3b6864d272374d528b4cecf05788ada203ee800d4fbb45393136acf8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fe7a3b6864d272374d528b4cecf05788ada203ee800d4fbb45393136acf8ca->enter($__internal_56fe7a3b6864d272374d528b4cecf05788ada203ee800d4fbb45393136acf8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8d29e66eed365050d5dfd20c8a16cccf8479e05d2aac673cad551162b10cc0f6->leave($__internal_8d29e66eed365050d5dfd20c8a16cccf8479e05d2aac673cad551162b10cc0f6_prof);

        
        $__internal_56fe7a3b6864d272374d528b4cecf05788ada203ee800d4fbb45393136acf8ca->leave($__internal_56fe7a3b6864d272374d528b4cecf05788ada203ee800d4fbb45393136acf8ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
