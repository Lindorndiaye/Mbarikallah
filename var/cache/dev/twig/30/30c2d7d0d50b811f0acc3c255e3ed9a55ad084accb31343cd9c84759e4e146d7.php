<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_33a6b04d556cd5eeb8771deadc3106eac5295185517b12533095c71bc8be9bdd extends Twig_Template
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
        $__internal_2c0a5af0b0e21407f170a895bea005fa1919dd9414b5372198a7c779992ddc64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0a5af0b0e21407f170a895bea005fa1919dd9414b5372198a7c779992ddc64->enter($__internal_2c0a5af0b0e21407f170a895bea005fa1919dd9414b5372198a7c779992ddc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_45a621d328b0d9725d18b86158e2efada354ff46a54bc886c45d8d8e318e8428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a621d328b0d9725d18b86158e2efada354ff46a54bc886c45d8d8e318e8428->enter($__internal_45a621d328b0d9725d18b86158e2efada354ff46a54bc886c45d8d8e318e8428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2c0a5af0b0e21407f170a895bea005fa1919dd9414b5372198a7c779992ddc64->leave($__internal_2c0a5af0b0e21407f170a895bea005fa1919dd9414b5372198a7c779992ddc64_prof);

        
        $__internal_45a621d328b0d9725d18b86158e2efada354ff46a54bc886c45d8d8e318e8428->leave($__internal_45a621d328b0d9725d18b86158e2efada354ff46a54bc886c45d8d8e318e8428_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
