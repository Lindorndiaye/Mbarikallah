<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_30859987ee8eb0e1cd88e404b8aae906afa70f968b2816afeab2ddd08cc20352 extends Twig_Template
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
        $__internal_930713793e70f361c01ae349d86a44f18a25916cf3fb6298016ced461ab2c23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930713793e70f361c01ae349d86a44f18a25916cf3fb6298016ced461ab2c23a->enter($__internal_930713793e70f361c01ae349d86a44f18a25916cf3fb6298016ced461ab2c23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a39f343799b63c5ed8a9a2a651f74b79d31b0b75fed84823884fb8430720cef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39f343799b63c5ed8a9a2a651f74b79d31b0b75fed84823884fb8430720cef7->enter($__internal_a39f343799b63c5ed8a9a2a651f74b79d31b0b75fed84823884fb8430720cef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_930713793e70f361c01ae349d86a44f18a25916cf3fb6298016ced461ab2c23a->leave($__internal_930713793e70f361c01ae349d86a44f18a25916cf3fb6298016ced461ab2c23a_prof);

        
        $__internal_a39f343799b63c5ed8a9a2a651f74b79d31b0b75fed84823884fb8430720cef7->leave($__internal_a39f343799b63c5ed8a9a2a651f74b79d31b0b75fed84823884fb8430720cef7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
