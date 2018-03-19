<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_16202d1f4569db1304a79eca2e6947549ef9a7d6ba212a1f3a86580b089c9ccb extends Twig_Template
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
        $__internal_bfd6d6f4e06859922fe460d209e689fc7be2a820d932516fbf4f1d03f074edee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd6d6f4e06859922fe460d209e689fc7be2a820d932516fbf4f1d03f074edee->enter($__internal_bfd6d6f4e06859922fe460d209e689fc7be2a820d932516fbf4f1d03f074edee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_5f6726704daa1f48e602f256de6e012f571cc64d9271b5f20812f97f3114abe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6726704daa1f48e602f256de6e012f571cc64d9271b5f20812f97f3114abe0->enter($__internal_5f6726704daa1f48e602f256de6e012f571cc64d9271b5f20812f97f3114abe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_bfd6d6f4e06859922fe460d209e689fc7be2a820d932516fbf4f1d03f074edee->leave($__internal_bfd6d6f4e06859922fe460d209e689fc7be2a820d932516fbf4f1d03f074edee_prof);

        
        $__internal_5f6726704daa1f48e602f256de6e012f571cc64d9271b5f20812f97f3114abe0->leave($__internal_5f6726704daa1f48e602f256de6e012f571cc64d9271b5f20812f97f3114abe0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
