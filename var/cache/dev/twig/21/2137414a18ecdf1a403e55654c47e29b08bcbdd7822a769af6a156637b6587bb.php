<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9fad7517a0067fffb2b15cba911510529f1def3f413ea4b563160e1164797fff extends Twig_Template
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
        $__internal_b5f69931ae090863d6d11527b5bcc90f32c7b9fad094ed78e0b3ed1f3f7b4948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f69931ae090863d6d11527b5bcc90f32c7b9fad094ed78e0b3ed1f3f7b4948->enter($__internal_b5f69931ae090863d6d11527b5bcc90f32c7b9fad094ed78e0b3ed1f3f7b4948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f148869f35b35800c80580b4b940b217ccc75610505b7e8f634c344a992d3628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f148869f35b35800c80580b4b940b217ccc75610505b7e8f634c344a992d3628->enter($__internal_f148869f35b35800c80580b4b940b217ccc75610505b7e8f634c344a992d3628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b5f69931ae090863d6d11527b5bcc90f32c7b9fad094ed78e0b3ed1f3f7b4948->leave($__internal_b5f69931ae090863d6d11527b5bcc90f32c7b9fad094ed78e0b3ed1f3f7b4948_prof);

        
        $__internal_f148869f35b35800c80580b4b940b217ccc75610505b7e8f634c344a992d3628->leave($__internal_f148869f35b35800c80580b4b940b217ccc75610505b7e8f634c344a992d3628_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
