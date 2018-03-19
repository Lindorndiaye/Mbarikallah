<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_af0f41ca3da9805411ecc1667f8e030adcbd34025407d626b0dd89f8b58c5f25 extends Twig_Template
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
        $__internal_ef1534ec7a33fe49af10312e36f16e72c9d2c898898102941d0c2072df7b528d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1534ec7a33fe49af10312e36f16e72c9d2c898898102941d0c2072df7b528d->enter($__internal_ef1534ec7a33fe49af10312e36f16e72c9d2c898898102941d0c2072df7b528d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1c5e3617bd2846f7125b8d00e2a47133bec22ee3f945350b0b7f745279de51fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5e3617bd2846f7125b8d00e2a47133bec22ee3f945350b0b7f745279de51fa->enter($__internal_1c5e3617bd2846f7125b8d00e2a47133bec22ee3f945350b0b7f745279de51fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_ef1534ec7a33fe49af10312e36f16e72c9d2c898898102941d0c2072df7b528d->leave($__internal_ef1534ec7a33fe49af10312e36f16e72c9d2c898898102941d0c2072df7b528d_prof);

        
        $__internal_1c5e3617bd2846f7125b8d00e2a47133bec22ee3f945350b0b7f745279de51fa->leave($__internal_1c5e3617bd2846f7125b8d00e2a47133bec22ee3f945350b0b7f745279de51fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
