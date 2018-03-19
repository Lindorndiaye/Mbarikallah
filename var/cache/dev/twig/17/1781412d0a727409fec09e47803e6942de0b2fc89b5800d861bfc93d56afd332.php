<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_debbb8cb87027ad31f063bed64222bf24c7a28145c2565c90df902e218ef9e9e extends Twig_Template
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
        $__internal_83a6781013a981c439019ec371fafc6b9d0310850c0ef58946149fa84e5846ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a6781013a981c439019ec371fafc6b9d0310850c0ef58946149fa84e5846ad->enter($__internal_83a6781013a981c439019ec371fafc6b9d0310850c0ef58946149fa84e5846ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f499416b7e0b5a7893c0e8193a5e3f7c1106d79610312071fb0279910945414b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f499416b7e0b5a7893c0e8193a5e3f7c1106d79610312071fb0279910945414b->enter($__internal_f499416b7e0b5a7893c0e8193a5e3f7c1106d79610312071fb0279910945414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_83a6781013a981c439019ec371fafc6b9d0310850c0ef58946149fa84e5846ad->leave($__internal_83a6781013a981c439019ec371fafc6b9d0310850c0ef58946149fa84e5846ad_prof);

        
        $__internal_f499416b7e0b5a7893c0e8193a5e3f7c1106d79610312071fb0279910945414b->leave($__internal_f499416b7e0b5a7893c0e8193a5e3f7c1106d79610312071fb0279910945414b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
