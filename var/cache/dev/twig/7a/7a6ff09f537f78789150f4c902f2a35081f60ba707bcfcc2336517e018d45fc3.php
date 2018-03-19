<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_04d6f0604ceebd21663b5cc25b228dacfc6a3ab7fef4f63b4de44d138c4c0841 extends Twig_Template
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
        $__internal_43e0002215357c63ea228f65d6fae24a8baa99339f092f91a482d42ea4571f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e0002215357c63ea228f65d6fae24a8baa99339f092f91a482d42ea4571f91->enter($__internal_43e0002215357c63ea228f65d6fae24a8baa99339f092f91a482d42ea4571f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2755913b99dea449288fbcb8522879928b6ee5567a683e108af9ef8fbfd73173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2755913b99dea449288fbcb8522879928b6ee5567a683e108af9ef8fbfd73173->enter($__internal_2755913b99dea449288fbcb8522879928b6ee5567a683e108af9ef8fbfd73173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_43e0002215357c63ea228f65d6fae24a8baa99339f092f91a482d42ea4571f91->leave($__internal_43e0002215357c63ea228f65d6fae24a8baa99339f092f91a482d42ea4571f91_prof);

        
        $__internal_2755913b99dea449288fbcb8522879928b6ee5567a683e108af9ef8fbfd73173->leave($__internal_2755913b99dea449288fbcb8522879928b6ee5567a683e108af9ef8fbfd73173_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
