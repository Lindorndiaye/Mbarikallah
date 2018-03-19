<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_536960ac75bb62291d7d1d0852165944e5d296ca55adc62151410890c370ecc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10f9936d3b02b128a677bab4859b6b34a1fc4ebda36484349d1b490b289135c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f9936d3b02b128a677bab4859b6b34a1fc4ebda36484349d1b490b289135c0->enter($__internal_10f9936d3b02b128a677bab4859b6b34a1fc4ebda36484349d1b490b289135c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_d244e29d03b490e4e4a844309e728933be75cbd4d1ecf617f9c4d4845d6777b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d244e29d03b490e4e4a844309e728933be75cbd4d1ecf617f9c4d4845d6777b8->enter($__internal_d244e29d03b490e4e4a844309e728933be75cbd4d1ecf617f9c4d4845d6777b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_10f9936d3b02b128a677bab4859b6b34a1fc4ebda36484349d1b490b289135c0->leave($__internal_10f9936d3b02b128a677bab4859b6b34a1fc4ebda36484349d1b490b289135c0_prof);

        
        $__internal_d244e29d03b490e4e4a844309e728933be75cbd4d1ecf617f9c4d4845d6777b8->leave($__internal_d244e29d03b490e4e4a844309e728933be75cbd4d1ecf617f9c4d4845d6777b8_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_0c3df619aa37983b08b0dd539d2fae998750a2e071450baf5b985eb64803083e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3df619aa37983b08b0dd539d2fae998750a2e071450baf5b985eb64803083e->enter($__internal_0c3df619aa37983b08b0dd539d2fae998750a2e071450baf5b985eb64803083e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_9f68689eae474363389aec10a38992690415ad8d6f60ae47ea8cfc392cd9e948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f68689eae474363389aec10a38992690415ad8d6f60ae47ea8cfc392cd9e948->enter($__internal_9f68689eae474363389aec10a38992690415ad8d6f60ae47ea8cfc392cd9e948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_9f68689eae474363389aec10a38992690415ad8d6f60ae47ea8cfc392cd9e948->leave($__internal_9f68689eae474363389aec10a38992690415ad8d6f60ae47ea8cfc392cd9e948_prof);

        
        $__internal_0c3df619aa37983b08b0dd539d2fae998750a2e071450baf5b985eb64803083e->leave($__internal_0c3df619aa37983b08b0dd539d2fae998750a2e071450baf5b985eb64803083e_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9c958ed69c2e14103896e63e2f36f72b162f0ebedf5de70f4b09ca2926728c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c958ed69c2e14103896e63e2f36f72b162f0ebedf5de70f4b09ca2926728c8b->enter($__internal_9c958ed69c2e14103896e63e2f36f72b162f0ebedf5de70f4b09ca2926728c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b1174f2961402d7a38333298ef962a22e2259803be247e154e19a7bcf4925b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1174f2961402d7a38333298ef962a22e2259803be247e154e19a7bcf4925b0e->enter($__internal_b1174f2961402d7a38333298ef962a22e2259803be247e154e19a7bcf4925b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b1174f2961402d7a38333298ef962a22e2259803be247e154e19a7bcf4925b0e->leave($__internal_b1174f2961402d7a38333298ef962a22e2259803be247e154e19a7bcf4925b0e_prof);

        
        $__internal_9c958ed69c2e14103896e63e2f36f72b162f0ebedf5de70f4b09ca2926728c8b->leave($__internal_9c958ed69c2e14103896e63e2f36f72b162f0ebedf5de70f4b09ca2926728c8b_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_28b42b832aebdfa58fe412d6d6215494b18f92b72ed791427d6e57a69c87e7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b42b832aebdfa58fe412d6d6215494b18f92b72ed791427d6e57a69c87e7ac->enter($__internal_28b42b832aebdfa58fe412d6d6215494b18f92b72ed791427d6e57a69c87e7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d63385d360679c65160f4d12153361ae0935723f235c4261c1778da3bbb80926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63385d360679c65160f4d12153361ae0935723f235c4261c1778da3bbb80926->enter($__internal_d63385d360679c65160f4d12153361ae0935723f235c4261c1778da3bbb80926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_d63385d360679c65160f4d12153361ae0935723f235c4261c1778da3bbb80926->leave($__internal_d63385d360679c65160f4d12153361ae0935723f235c4261c1778da3bbb80926_prof);

        
        $__internal_28b42b832aebdfa58fe412d6d6215494b18f92b72ed791427d6e57a69c87e7ac->leave($__internal_28b42b832aebdfa58fe412d6d6215494b18f92b72ed791427d6e57a69c87e7ac_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c67c67859af884092163b0bd942751013348db3748ed609157cf4e0f2bccd64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67c67859af884092163b0bd942751013348db3748ed609157cf4e0f2bccd64e->enter($__internal_c67c67859af884092163b0bd942751013348db3748ed609157cf4e0f2bccd64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1719bb74e4ed4eaa58235fc22319b9b9c13e458cbc435a89499e9da7e222509e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1719bb74e4ed4eaa58235fc22319b9b9c13e458cbc435a89499e9da7e222509e->enter($__internal_1719bb74e4ed4eaa58235fc22319b9b9c13e458cbc435a89499e9da7e222509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_1719bb74e4ed4eaa58235fc22319b9b9c13e458cbc435a89499e9da7e222509e->leave($__internal_1719bb74e4ed4eaa58235fc22319b9b9c13e458cbc435a89499e9da7e222509e_prof);

        
        $__internal_c67c67859af884092163b0bd942751013348db3748ed609157cf4e0f2bccd64e->leave($__internal_c67c67859af884092163b0bd942751013348db3748ed609157cf4e0f2bccd64e_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_25784a6bd28073d85c087f2a84ab88c383aeb5f224b39b9f07430b71c4aa1967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25784a6bd28073d85c087f2a84ab88c383aeb5f224b39b9f07430b71c4aa1967->enter($__internal_25784a6bd28073d85c087f2a84ab88c383aeb5f224b39b9f07430b71c4aa1967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5d56f8cda2b9bde7aad3bb6bcc26a0f698678f6933fe7778f28d59ebfae6163c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d56f8cda2b9bde7aad3bb6bcc26a0f698678f6933fe7778f28d59ebfae6163c->enter($__internal_5d56f8cda2b9bde7aad3bb6bcc26a0f698678f6933fe7778f28d59ebfae6163c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_5d56f8cda2b9bde7aad3bb6bcc26a0f698678f6933fe7778f28d59ebfae6163c->leave($__internal_5d56f8cda2b9bde7aad3bb6bcc26a0f698678f6933fe7778f28d59ebfae6163c_prof);

        
        $__internal_25784a6bd28073d85c087f2a84ab88c383aeb5f224b39b9f07430b71c4aa1967->leave($__internal_25784a6bd28073d85c087f2a84ab88c383aeb5f224b39b9f07430b71c4aa1967_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_493d6179b3af550905d64a12820a10c086691702c31e703f2953d588e5f873fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493d6179b3af550905d64a12820a10c086691702c31e703f2953d588e5f873fd->enter($__internal_493d6179b3af550905d64a12820a10c086691702c31e703f2953d588e5f873fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_eb9ddd2713ac731f363750df5b033ab6512ecafc3eb8f3b334737d609bb0d81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9ddd2713ac731f363750df5b033ab6512ecafc3eb8f3b334737d609bb0d81a->enter($__internal_eb9ddd2713ac731f363750df5b033ab6512ecafc3eb8f3b334737d609bb0d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_eb9ddd2713ac731f363750df5b033ab6512ecafc3eb8f3b334737d609bb0d81a->leave($__internal_eb9ddd2713ac731f363750df5b033ab6512ecafc3eb8f3b334737d609bb0d81a_prof);

        
        $__internal_493d6179b3af550905d64a12820a10c086691702c31e703f2953d588e5f873fd->leave($__internal_493d6179b3af550905d64a12820a10c086691702c31e703f2953d588e5f873fd_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_99b84687955c8f930ee0891f8e15164913566f6cd1d5fe594da44060b960ad6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b84687955c8f930ee0891f8e15164913566f6cd1d5fe594da44060b960ad6a->enter($__internal_99b84687955c8f930ee0891f8e15164913566f6cd1d5fe594da44060b960ad6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_bb6792cdaed90d5403cc023358075f4bc074238af9435ee9d252b281bbf58acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6792cdaed90d5403cc023358075f4bc074238af9435ee9d252b281bbf58acb->enter($__internal_bb6792cdaed90d5403cc023358075f4bc074238af9435ee9d252b281bbf58acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bb6792cdaed90d5403cc023358075f4bc074238af9435ee9d252b281bbf58acb->leave($__internal_bb6792cdaed90d5403cc023358075f4bc074238af9435ee9d252b281bbf58acb_prof);

        
        $__internal_99b84687955c8f930ee0891f8e15164913566f6cd1d5fe594da44060b960ad6a->leave($__internal_99b84687955c8f930ee0891f8e15164913566f6cd1d5fe594da44060b960ad6a_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_718c5fd8326dcbd1e708f3e3409f87e04fea2ad41b909e69f6ad855e43fff932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718c5fd8326dcbd1e708f3e3409f87e04fea2ad41b909e69f6ad855e43fff932->enter($__internal_718c5fd8326dcbd1e708f3e3409f87e04fea2ad41b909e69f6ad855e43fff932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_45afa0e577fd5cb0cfccddfde39a5597f3a5de3b70cc6051272da30f3b32f168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45afa0e577fd5cb0cfccddfde39a5597f3a5de3b70cc6051272da30f3b32f168->enter($__internal_45afa0e577fd5cb0cfccddfde39a5597f3a5de3b70cc6051272da30f3b32f168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_45afa0e577fd5cb0cfccddfde39a5597f3a5de3b70cc6051272da30f3b32f168->leave($__internal_45afa0e577fd5cb0cfccddfde39a5597f3a5de3b70cc6051272da30f3b32f168_prof);

        
        $__internal_718c5fd8326dcbd1e708f3e3409f87e04fea2ad41b909e69f6ad855e43fff932->leave($__internal_718c5fd8326dcbd1e708f3e3409f87e04fea2ad41b909e69f6ad855e43fff932_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8c2ecae1a6a6d4298ddd119a6ee86f56c248ca61d1cd8f7f5db1cb94f8fa14ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2ecae1a6a6d4298ddd119a6ee86f56c248ca61d1cd8f7f5db1cb94f8fa14ec->enter($__internal_8c2ecae1a6a6d4298ddd119a6ee86f56c248ca61d1cd8f7f5db1cb94f8fa14ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7cb0fb5510e6a9a964d4292a82a9e0a13e87a50c84084bcccec1636ead42ec75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb0fb5510e6a9a964d4292a82a9e0a13e87a50c84084bcccec1636ead42ec75->enter($__internal_7cb0fb5510e6a9a964d4292a82a9e0a13e87a50c84084bcccec1636ead42ec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7cb0fb5510e6a9a964d4292a82a9e0a13e87a50c84084bcccec1636ead42ec75->leave($__internal_7cb0fb5510e6a9a964d4292a82a9e0a13e87a50c84084bcccec1636ead42ec75_prof);

        
        $__internal_8c2ecae1a6a6d4298ddd119a6ee86f56c248ca61d1cd8f7f5db1cb94f8fa14ec->leave($__internal_8c2ecae1a6a6d4298ddd119a6ee86f56c248ca61d1cd8f7f5db1cb94f8fa14ec_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3a208ae92e1d1d3666aec69a49b1322479eaddb138b2dab701b11f78816e4df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a208ae92e1d1d3666aec69a49b1322479eaddb138b2dab701b11f78816e4df0->enter($__internal_3a208ae92e1d1d3666aec69a49b1322479eaddb138b2dab701b11f78816e4df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b415be7e0cb1fa70060a62c3e58c25c2d3ed3ce50a69c1cd73581f90fc6e05ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b415be7e0cb1fa70060a62c3e58c25c2d3ed3ce50a69c1cd73581f90fc6e05ec->enter($__internal_b415be7e0cb1fa70060a62c3e58c25c2d3ed3ce50a69c1cd73581f90fc6e05ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_b415be7e0cb1fa70060a62c3e58c25c2d3ed3ce50a69c1cd73581f90fc6e05ec->leave($__internal_b415be7e0cb1fa70060a62c3e58c25c2d3ed3ce50a69c1cd73581f90fc6e05ec_prof);

        
        $__internal_3a208ae92e1d1d3666aec69a49b1322479eaddb138b2dab701b11f78816e4df0->leave($__internal_3a208ae92e1d1d3666aec69a49b1322479eaddb138b2dab701b11f78816e4df0_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
