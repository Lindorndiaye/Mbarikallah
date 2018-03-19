<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f188eaeeead10bf92de66e72a6afca18164f2b23704a09d024b16daa8c99c86a extends Twig_Template
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
        $__internal_9f4c47281d69053ff806fbfafd6c169e167e00f639158646e3ccb1a09059fdbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4c47281d69053ff806fbfafd6c169e167e00f639158646e3ccb1a09059fdbc->enter($__internal_9f4c47281d69053ff806fbfafd6c169e167e00f639158646e3ccb1a09059fdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_b6997b32600fe3df8654c7c7fa1dd7331240432c40cf80bc8e14e2182eeb568f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6997b32600fe3df8654c7c7fa1dd7331240432c40cf80bc8e14e2182eeb568f->enter($__internal_b6997b32600fe3df8654c7c7fa1dd7331240432c40cf80bc8e14e2182eeb568f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_9f4c47281d69053ff806fbfafd6c169e167e00f639158646e3ccb1a09059fdbc->leave($__internal_9f4c47281d69053ff806fbfafd6c169e167e00f639158646e3ccb1a09059fdbc_prof);

        
        $__internal_b6997b32600fe3df8654c7c7fa1dd7331240432c40cf80bc8e14e2182eeb568f->leave($__internal_b6997b32600fe3df8654c7c7fa1dd7331240432c40cf80bc8e14e2182eeb568f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
