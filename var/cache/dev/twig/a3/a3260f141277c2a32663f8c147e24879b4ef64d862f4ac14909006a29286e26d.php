<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_c4eb53871af8fa5cce2d061b9374aa11ee218c80c23ae8227d28dac4a291a1e6 extends Twig_Template
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
        $__internal_30fc21963ee043bfa84c3bdaf7c666e0e565928621d64f2c94698ebcba3d7e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30fc21963ee043bfa84c3bdaf7c666e0e565928621d64f2c94698ebcba3d7e3f->enter($__internal_30fc21963ee043bfa84c3bdaf7c666e0e565928621d64f2c94698ebcba3d7e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_97e6c9919b6302f942a287da170ae75e119909bc36c87357c8db4f95bf12e4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e6c9919b6302f942a287da170ae75e119909bc36c87357c8db4f95bf12e4b5->enter($__internal_97e6c9919b6302f942a287da170ae75e119909bc36c87357c8db4f95bf12e4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_30fc21963ee043bfa84c3bdaf7c666e0e565928621d64f2c94698ebcba3d7e3f->leave($__internal_30fc21963ee043bfa84c3bdaf7c666e0e565928621d64f2c94698ebcba3d7e3f_prof);

        
        $__internal_97e6c9919b6302f942a287da170ae75e119909bc36c87357c8db4f95bf12e4b5->leave($__internal_97e6c9919b6302f942a287da170ae75e119909bc36c87357c8db4f95bf12e4b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
