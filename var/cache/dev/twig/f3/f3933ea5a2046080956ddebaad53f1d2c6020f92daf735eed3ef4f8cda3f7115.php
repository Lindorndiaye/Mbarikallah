<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_faa376e811c273316321f3a597aeaa93aaca3dcb5ae875e4a24b7be19a8612e0 extends Twig_Template
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
        $__internal_b96bdf697ba592241d60fd81eba2b33adb6cce2388c2a076b31b18d474b3d9d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96bdf697ba592241d60fd81eba2b33adb6cce2388c2a076b31b18d474b3d9d6->enter($__internal_b96bdf697ba592241d60fd81eba2b33adb6cce2388c2a076b31b18d474b3d9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7fce0f588b8c57377b6b6a6b6109655d736dccc36e7cb57af4e93a5f582686e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fce0f588b8c57377b6b6a6b6109655d736dccc36e7cb57af4e93a5f582686e2->enter($__internal_7fce0f588b8c57377b6b6a6b6109655d736dccc36e7cb57af4e93a5f582686e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b96bdf697ba592241d60fd81eba2b33adb6cce2388c2a076b31b18d474b3d9d6->leave($__internal_b96bdf697ba592241d60fd81eba2b33adb6cce2388c2a076b31b18d474b3d9d6_prof);

        
        $__internal_7fce0f588b8c57377b6b6a6b6109655d736dccc36e7cb57af4e93a5f582686e2->leave($__internal_7fce0f588b8c57377b6b6a6b6109655d736dccc36e7cb57af4e93a5f582686e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
