<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_347bcc3a184b53d0dd10f9e34bca70eaff06c41c5ea4297fc54fc79a1b97581e extends Twig_Template
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
        $__internal_172702f5ac704445344c4f596c3bf9c53bd422dc0817bcb0a9a8aac462735f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172702f5ac704445344c4f596c3bf9c53bd422dc0817bcb0a9a8aac462735f53->enter($__internal_172702f5ac704445344c4f596c3bf9c53bd422dc0817bcb0a9a8aac462735f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9df5334b50fa6e914e35c19a23b67cea63842b484b3062f1bcfac66eebb1b772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df5334b50fa6e914e35c19a23b67cea63842b484b3062f1bcfac66eebb1b772->enter($__internal_9df5334b50fa6e914e35c19a23b67cea63842b484b3062f1bcfac66eebb1b772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_172702f5ac704445344c4f596c3bf9c53bd422dc0817bcb0a9a8aac462735f53->leave($__internal_172702f5ac704445344c4f596c3bf9c53bd422dc0817bcb0a9a8aac462735f53_prof);

        
        $__internal_9df5334b50fa6e914e35c19a23b67cea63842b484b3062f1bcfac66eebb1b772->leave($__internal_9df5334b50fa6e914e35c19a23b67cea63842b484b3062f1bcfac66eebb1b772_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
