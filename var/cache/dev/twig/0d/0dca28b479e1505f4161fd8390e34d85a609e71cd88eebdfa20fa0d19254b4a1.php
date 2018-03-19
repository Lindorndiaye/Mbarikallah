<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d07c65a00382ade961e6b213f45346384910097076d531743ace2478219ef0de extends Twig_Template
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
        $__internal_3ea859357bec7ddc71fa37de63672eccb9ebd3af64e8373ec9adc7b6dadcd721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea859357bec7ddc71fa37de63672eccb9ebd3af64e8373ec9adc7b6dadcd721->enter($__internal_3ea859357bec7ddc71fa37de63672eccb9ebd3af64e8373ec9adc7b6dadcd721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2eac5c24ab331f7c5902995af8c9f5f42fa0285b81fca90af93835f4068e6a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eac5c24ab331f7c5902995af8c9f5f42fa0285b81fca90af93835f4068e6a9b->enter($__internal_2eac5c24ab331f7c5902995af8c9f5f42fa0285b81fca90af93835f4068e6a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3ea859357bec7ddc71fa37de63672eccb9ebd3af64e8373ec9adc7b6dadcd721->leave($__internal_3ea859357bec7ddc71fa37de63672eccb9ebd3af64e8373ec9adc7b6dadcd721_prof);

        
        $__internal_2eac5c24ab331f7c5902995af8c9f5f42fa0285b81fca90af93835f4068e6a9b->leave($__internal_2eac5c24ab331f7c5902995af8c9f5f42fa0285b81fca90af93835f4068e6a9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
