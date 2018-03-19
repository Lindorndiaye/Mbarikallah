<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_98c19c74cfe1328e99820d65fb28302e7eed1d4ecabd28909832823c59e0a4e0 extends Twig_Template
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
        $__internal_c3f9c969efb8e917042f154c79e92b7bc538a03b8ceefbbb96199f80668ef41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f9c969efb8e917042f154c79e92b7bc538a03b8ceefbbb96199f80668ef41f->enter($__internal_c3f9c969efb8e917042f154c79e92b7bc538a03b8ceefbbb96199f80668ef41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f3d2a18739042e2a541ff55550a87d65e53b7a43bb42c3c3cf26cc88721de872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d2a18739042e2a541ff55550a87d65e53b7a43bb42c3c3cf26cc88721de872->enter($__internal_f3d2a18739042e2a541ff55550a87d65e53b7a43bb42c3c3cf26cc88721de872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c3f9c969efb8e917042f154c79e92b7bc538a03b8ceefbbb96199f80668ef41f->leave($__internal_c3f9c969efb8e917042f154c79e92b7bc538a03b8ceefbbb96199f80668ef41f_prof);

        
        $__internal_f3d2a18739042e2a541ff55550a87d65e53b7a43bb42c3c3cf26cc88721de872->leave($__internal_f3d2a18739042e2a541ff55550a87d65e53b7a43bb42c3c3cf26cc88721de872_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
