<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7cbcab6c247151509fbe590b14373b9946c445d3222c14ae460884f63891ec18 extends Twig_Template
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
        $__internal_8c1dbae9937e6b201496dee65c2c846f66d151f58494a6f34b0e20aec3cf6820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1dbae9937e6b201496dee65c2c846f66d151f58494a6f34b0e20aec3cf6820->enter($__internal_8c1dbae9937e6b201496dee65c2c846f66d151f58494a6f34b0e20aec3cf6820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b983da58ce2ff565217b873c38cc2f8e1ef7396910380f4180473ee16e36dc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b983da58ce2ff565217b873c38cc2f8e1ef7396910380f4180473ee16e36dc69->enter($__internal_b983da58ce2ff565217b873c38cc2f8e1ef7396910380f4180473ee16e36dc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8c1dbae9937e6b201496dee65c2c846f66d151f58494a6f34b0e20aec3cf6820->leave($__internal_8c1dbae9937e6b201496dee65c2c846f66d151f58494a6f34b0e20aec3cf6820_prof);

        
        $__internal_b983da58ce2ff565217b873c38cc2f8e1ef7396910380f4180473ee16e36dc69->leave($__internal_b983da58ce2ff565217b873c38cc2f8e1ef7396910380f4180473ee16e36dc69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
