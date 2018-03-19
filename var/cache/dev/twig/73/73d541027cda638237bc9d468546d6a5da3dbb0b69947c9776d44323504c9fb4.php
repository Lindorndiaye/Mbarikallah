<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e0d8107c2ad70e0966792326bd4387c41c793e2cd6ee4540f14e11f3320b83d8 extends Twig_Template
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
        $__internal_c1544bd49b677f012833363359437adbf68620762635b082f35b3cf95faaa00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1544bd49b677f012833363359437adbf68620762635b082f35b3cf95faaa00b->enter($__internal_c1544bd49b677f012833363359437adbf68620762635b082f35b3cf95faaa00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b4553a699c101c495fd99e9f5afc4b6e37b96a3f7c34e8e8eb9813b4252bd78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4553a699c101c495fd99e9f5afc4b6e37b96a3f7c34e8e8eb9813b4252bd78e->enter($__internal_b4553a699c101c495fd99e9f5afc4b6e37b96a3f7c34e8e8eb9813b4252bd78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c1544bd49b677f012833363359437adbf68620762635b082f35b3cf95faaa00b->leave($__internal_c1544bd49b677f012833363359437adbf68620762635b082f35b3cf95faaa00b_prof);

        
        $__internal_b4553a699c101c495fd99e9f5afc4b6e37b96a3f7c34e8e8eb9813b4252bd78e->leave($__internal_b4553a699c101c495fd99e9f5afc4b6e37b96a3f7c34e8e8eb9813b4252bd78e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
