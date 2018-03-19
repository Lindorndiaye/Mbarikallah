<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_b72bbccc47235726c8357ef825e967064e71340b6000cbdd291463331d903f5e extends Twig_Template
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
        $__internal_695f8a96a05fba005d98beed89f6f81bf927de9a7092b50067ba0ed4e65f529d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695f8a96a05fba005d98beed89f6f81bf927de9a7092b50067ba0ed4e65f529d->enter($__internal_695f8a96a05fba005d98beed89f6f81bf927de9a7092b50067ba0ed4e65f529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_716965f87d8d53ff2ce4f8e149db6b269359a5f6321c38aefa5b6137c9c68eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716965f87d8d53ff2ce4f8e149db6b269359a5f6321c38aefa5b6137c9c68eab->enter($__internal_716965f87d8d53ff2ce4f8e149db6b269359a5f6321c38aefa5b6137c9c68eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_695f8a96a05fba005d98beed89f6f81bf927de9a7092b50067ba0ed4e65f529d->leave($__internal_695f8a96a05fba005d98beed89f6f81bf927de9a7092b50067ba0ed4e65f529d_prof);

        
        $__internal_716965f87d8d53ff2ce4f8e149db6b269359a5f6321c38aefa5b6137c9c68eab->leave($__internal_716965f87d8d53ff2ce4f8e149db6b269359a5f6321c38aefa5b6137c9c68eab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
