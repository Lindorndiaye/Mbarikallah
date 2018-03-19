<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6a1d5f0cd419d8a28e545115d85492f9ea21e86af66da2e88fecf679b8c6cb87 extends Twig_Template
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
        $__internal_5789e2e295b0cc2c3d0452c9e15bf499e702165e12d6da85efb0217d4ad4fad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5789e2e295b0cc2c3d0452c9e15bf499e702165e12d6da85efb0217d4ad4fad8->enter($__internal_5789e2e295b0cc2c3d0452c9e15bf499e702165e12d6da85efb0217d4ad4fad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e16a76c62d82d699dbb45b7ce7c1d88715be8603922b6f65a5f0c71f630a26b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16a76c62d82d699dbb45b7ce7c1d88715be8603922b6f65a5f0c71f630a26b9->enter($__internal_e16a76c62d82d699dbb45b7ce7c1d88715be8603922b6f65a5f0c71f630a26b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5789e2e295b0cc2c3d0452c9e15bf499e702165e12d6da85efb0217d4ad4fad8->leave($__internal_5789e2e295b0cc2c3d0452c9e15bf499e702165e12d6da85efb0217d4ad4fad8_prof);

        
        $__internal_e16a76c62d82d699dbb45b7ce7c1d88715be8603922b6f65a5f0c71f630a26b9->leave($__internal_e16a76c62d82d699dbb45b7ce7c1d88715be8603922b6f65a5f0c71f630a26b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
