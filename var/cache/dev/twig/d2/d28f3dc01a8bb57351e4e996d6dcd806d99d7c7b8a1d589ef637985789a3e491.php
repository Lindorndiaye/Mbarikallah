<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_63358f6329cfccf6f1e0828508b24a7ab40e0957597fd57fce1d4437d6e33709 extends Twig_Template
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
        $__internal_b45d18d06240837bbcf6e17a93fff2da85274525fca755840d58734853b64b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45d18d06240837bbcf6e17a93fff2da85274525fca755840d58734853b64b14->enter($__internal_b45d18d06240837bbcf6e17a93fff2da85274525fca755840d58734853b64b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_15dd4daaa9a638d4776be9395ebbe05e7c0d17f4de622e4bfbdc6831bff51c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dd4daaa9a638d4776be9395ebbe05e7c0d17f4de622e4bfbdc6831bff51c89->enter($__internal_15dd4daaa9a638d4776be9395ebbe05e7c0d17f4de622e4bfbdc6831bff51c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b45d18d06240837bbcf6e17a93fff2da85274525fca755840d58734853b64b14->leave($__internal_b45d18d06240837bbcf6e17a93fff2da85274525fca755840d58734853b64b14_prof);

        
        $__internal_15dd4daaa9a638d4776be9395ebbe05e7c0d17f4de622e4bfbdc6831bff51c89->leave($__internal_15dd4daaa9a638d4776be9395ebbe05e7c0d17f4de622e4bfbdc6831bff51c89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
