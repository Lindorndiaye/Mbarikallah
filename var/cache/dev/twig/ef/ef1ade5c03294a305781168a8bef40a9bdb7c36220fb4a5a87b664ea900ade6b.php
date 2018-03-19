<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_265124a5ee6a27329a7ecf09c3ceb4f8b89afa1afb958c8d967e3f9cd7ad5f7a extends Twig_Template
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
        $__internal_a24234d936b273457cfb327c5df2440dccb452aaa4f7f871401e9a016c42c17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24234d936b273457cfb327c5df2440dccb452aaa4f7f871401e9a016c42c17e->enter($__internal_a24234d936b273457cfb327c5df2440dccb452aaa4f7f871401e9a016c42c17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8d5344873581957fca8cbb1101a0a1911ce6f7327f9ef915d84e1ad220b1cbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5344873581957fca8cbb1101a0a1911ce6f7327f9ef915d84e1ad220b1cbbd->enter($__internal_8d5344873581957fca8cbb1101a0a1911ce6f7327f9ef915d84e1ad220b1cbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a24234d936b273457cfb327c5df2440dccb452aaa4f7f871401e9a016c42c17e->leave($__internal_a24234d936b273457cfb327c5df2440dccb452aaa4f7f871401e9a016c42c17e_prof);

        
        $__internal_8d5344873581957fca8cbb1101a0a1911ce6f7327f9ef915d84e1ad220b1cbbd->leave($__internal_8d5344873581957fca8cbb1101a0a1911ce6f7327f9ef915d84e1ad220b1cbbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
