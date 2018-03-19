<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4e36198a1a3813387a6497f4b6de36566d4937b092187d713de8ed88ddfcc5e6 extends Twig_Template
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
        $__internal_60073c56343726a3563cae2b1928f23015f58cbfadb21ae264a44f36e9fecafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60073c56343726a3563cae2b1928f23015f58cbfadb21ae264a44f36e9fecafe->enter($__internal_60073c56343726a3563cae2b1928f23015f58cbfadb21ae264a44f36e9fecafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_22b7cd1db98a9bef17c00d95c645226b2e17e58854990bd8195aea9b575fb894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b7cd1db98a9bef17c00d95c645226b2e17e58854990bd8195aea9b575fb894->enter($__internal_22b7cd1db98a9bef17c00d95c645226b2e17e58854990bd8195aea9b575fb894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_60073c56343726a3563cae2b1928f23015f58cbfadb21ae264a44f36e9fecafe->leave($__internal_60073c56343726a3563cae2b1928f23015f58cbfadb21ae264a44f36e9fecafe_prof);

        
        $__internal_22b7cd1db98a9bef17c00d95c645226b2e17e58854990bd8195aea9b575fb894->leave($__internal_22b7cd1db98a9bef17c00d95c645226b2e17e58854990bd8195aea9b575fb894_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
