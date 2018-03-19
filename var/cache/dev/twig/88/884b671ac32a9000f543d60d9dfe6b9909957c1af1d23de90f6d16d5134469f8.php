<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_695ce60bf8195fb851496f0a94120aface1bd16b913589b44a339e7456a4e8d2 extends Twig_Template
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
        $__internal_bf256f3137c15c35b5309455b8e4f85e37f60a10d0c32eb01ba7d90a6d7fadbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf256f3137c15c35b5309455b8e4f85e37f60a10d0c32eb01ba7d90a6d7fadbc->enter($__internal_bf256f3137c15c35b5309455b8e4f85e37f60a10d0c32eb01ba7d90a6d7fadbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e66f9e3e07e138cccd70706ad7222674bd86336b45ccaa1f6cb8e0a6d6a3da83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66f9e3e07e138cccd70706ad7222674bd86336b45ccaa1f6cb8e0a6d6a3da83->enter($__internal_e66f9e3e07e138cccd70706ad7222674bd86336b45ccaa1f6cb8e0a6d6a3da83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bf256f3137c15c35b5309455b8e4f85e37f60a10d0c32eb01ba7d90a6d7fadbc->leave($__internal_bf256f3137c15c35b5309455b8e4f85e37f60a10d0c32eb01ba7d90a6d7fadbc_prof);

        
        $__internal_e66f9e3e07e138cccd70706ad7222674bd86336b45ccaa1f6cb8e0a6d6a3da83->leave($__internal_e66f9e3e07e138cccd70706ad7222674bd86336b45ccaa1f6cb8e0a6d6a3da83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
