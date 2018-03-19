<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c7304018ed5c484e38072ceee0b3f7c7bd18684e5f6f02994ec4677c42306303 extends Twig_Template
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
        $__internal_f444fe2c5232055eedbd8c7d93b35657bfe02104df377ca805cdb361bcb6cdae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f444fe2c5232055eedbd8c7d93b35657bfe02104df377ca805cdb361bcb6cdae->enter($__internal_f444fe2c5232055eedbd8c7d93b35657bfe02104df377ca805cdb361bcb6cdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3b767e223cf6917a25a5fd10884eb50328f00e82ccdb1b092ccf3f8655d50034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b767e223cf6917a25a5fd10884eb50328f00e82ccdb1b092ccf3f8655d50034->enter($__internal_3b767e223cf6917a25a5fd10884eb50328f00e82ccdb1b092ccf3f8655d50034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f444fe2c5232055eedbd8c7d93b35657bfe02104df377ca805cdb361bcb6cdae->leave($__internal_f444fe2c5232055eedbd8c7d93b35657bfe02104df377ca805cdb361bcb6cdae_prof);

        
        $__internal_3b767e223cf6917a25a5fd10884eb50328f00e82ccdb1b092ccf3f8655d50034->leave($__internal_3b767e223cf6917a25a5fd10884eb50328f00e82ccdb1b092ccf3f8655d50034_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
