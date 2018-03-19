<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_598c900341e5f10bb5bda0b271e4ea7b140d6ea6eb0a7e41e4f94eb680454786 extends Twig_Template
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
        $__internal_1472627316afdae18e7773d17a36d4a8e214edc399a364490858204c253405a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1472627316afdae18e7773d17a36d4a8e214edc399a364490858204c253405a3->enter($__internal_1472627316afdae18e7773d17a36d4a8e214edc399a364490858204c253405a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6fb8ce261f860dc4e0ac0b8a6e3cf2d3a42f2bbf551a2b9d602969577eee9033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb8ce261f860dc4e0ac0b8a6e3cf2d3a42f2bbf551a2b9d602969577eee9033->enter($__internal_6fb8ce261f860dc4e0ac0b8a6e3cf2d3a42f2bbf551a2b9d602969577eee9033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1472627316afdae18e7773d17a36d4a8e214edc399a364490858204c253405a3->leave($__internal_1472627316afdae18e7773d17a36d4a8e214edc399a364490858204c253405a3_prof);

        
        $__internal_6fb8ce261f860dc4e0ac0b8a6e3cf2d3a42f2bbf551a2b9d602969577eee9033->leave($__internal_6fb8ce261f860dc4e0ac0b8a6e3cf2d3a42f2bbf551a2b9d602969577eee9033_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
