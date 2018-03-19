<?php

/* form_table_layout.html.twig */
class __TwigTemplate_a9d9e61439db4592eb05dd707b8fdd1102c398af384bb259d9b7112c2207ea35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382bc43bc9dd7f3f5dc0ede85754bbd82ec73d52e22bf7a848091f7f737d846a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382bc43bc9dd7f3f5dc0ede85754bbd82ec73d52e22bf7a848091f7f737d846a->enter($__internal_382bc43bc9dd7f3f5dc0ede85754bbd82ec73d52e22bf7a848091f7f737d846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_33088eace21d18a580f685af77193008002c007d24e627d39371b5a7ffd653c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33088eace21d18a580f685af77193008002c007d24e627d39371b5a7ffd653c9->enter($__internal_33088eace21d18a580f685af77193008002c007d24e627d39371b5a7ffd653c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_382bc43bc9dd7f3f5dc0ede85754bbd82ec73d52e22bf7a848091f7f737d846a->leave($__internal_382bc43bc9dd7f3f5dc0ede85754bbd82ec73d52e22bf7a848091f7f737d846a_prof);

        
        $__internal_33088eace21d18a580f685af77193008002c007d24e627d39371b5a7ffd653c9->leave($__internal_33088eace21d18a580f685af77193008002c007d24e627d39371b5a7ffd653c9_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_316e60ab69a73481321ea63f8b1ad288bd20ef607c83d431ad850c19143c9ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316e60ab69a73481321ea63f8b1ad288bd20ef607c83d431ad850c19143c9ca3->enter($__internal_316e60ab69a73481321ea63f8b1ad288bd20ef607c83d431ad850c19143c9ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_85dd2f412db2fa3d5aa9a5571cfb0ce3063c6684694ae5ca634e7405059b5d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dd2f412db2fa3d5aa9a5571cfb0ce3063c6684694ae5ca634e7405059b5d61->enter($__internal_85dd2f412db2fa3d5aa9a5571cfb0ce3063c6684694ae5ca634e7405059b5d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_85dd2f412db2fa3d5aa9a5571cfb0ce3063c6684694ae5ca634e7405059b5d61->leave($__internal_85dd2f412db2fa3d5aa9a5571cfb0ce3063c6684694ae5ca634e7405059b5d61_prof);

        
        $__internal_316e60ab69a73481321ea63f8b1ad288bd20ef607c83d431ad850c19143c9ca3->leave($__internal_316e60ab69a73481321ea63f8b1ad288bd20ef607c83d431ad850c19143c9ca3_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f8c3393eaf115ef82c56b055cdc95ad652a0cf2ca24468d9741f31db382a75bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c3393eaf115ef82c56b055cdc95ad652a0cf2ca24468d9741f31db382a75bc->enter($__internal_f8c3393eaf115ef82c56b055cdc95ad652a0cf2ca24468d9741f31db382a75bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d3c208387ec2a2f65c116feb7fc1053aeeb38528ba3d9bf9d649c2368a7ba006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c208387ec2a2f65c116feb7fc1053aeeb38528ba3d9bf9d649c2368a7ba006->enter($__internal_d3c208387ec2a2f65c116feb7fc1053aeeb38528ba3d9bf9d649c2368a7ba006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_d3c208387ec2a2f65c116feb7fc1053aeeb38528ba3d9bf9d649c2368a7ba006->leave($__internal_d3c208387ec2a2f65c116feb7fc1053aeeb38528ba3d9bf9d649c2368a7ba006_prof);

        
        $__internal_f8c3393eaf115ef82c56b055cdc95ad652a0cf2ca24468d9741f31db382a75bc->leave($__internal_f8c3393eaf115ef82c56b055cdc95ad652a0cf2ca24468d9741f31db382a75bc_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9670e021d84317028df667e68ec3f1f645cebb8d11cbb92f52f914e644a2148f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9670e021d84317028df667e68ec3f1f645cebb8d11cbb92f52f914e644a2148f->enter($__internal_9670e021d84317028df667e68ec3f1f645cebb8d11cbb92f52f914e644a2148f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_f585b4a677cf6d78a31c2fa1dd75c59290b88f9aabaac52fa8a4b41920c0dea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f585b4a677cf6d78a31c2fa1dd75c59290b88f9aabaac52fa8a4b41920c0dea4->enter($__internal_f585b4a677cf6d78a31c2fa1dd75c59290b88f9aabaac52fa8a4b41920c0dea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_f585b4a677cf6d78a31c2fa1dd75c59290b88f9aabaac52fa8a4b41920c0dea4->leave($__internal_f585b4a677cf6d78a31c2fa1dd75c59290b88f9aabaac52fa8a4b41920c0dea4_prof);

        
        $__internal_9670e021d84317028df667e68ec3f1f645cebb8d11cbb92f52f914e644a2148f->leave($__internal_9670e021d84317028df667e68ec3f1f645cebb8d11cbb92f52f914e644a2148f_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_fea77af8af693f32af1ab71fe19f3a254ea1998bdc394ebd6a099ef1e2fc49e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea77af8af693f32af1ab71fe19f3a254ea1998bdc394ebd6a099ef1e2fc49e2->enter($__internal_fea77af8af693f32af1ab71fe19f3a254ea1998bdc394ebd6a099ef1e2fc49e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_379e4ea8590f2fae1ea6cf96236a6c1620aaadc08abfd9b6690503dce554375f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379e4ea8590f2fae1ea6cf96236a6c1620aaadc08abfd9b6690503dce554375f->enter($__internal_379e4ea8590f2fae1ea6cf96236a6c1620aaadc08abfd9b6690503dce554375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_379e4ea8590f2fae1ea6cf96236a6c1620aaadc08abfd9b6690503dce554375f->leave($__internal_379e4ea8590f2fae1ea6cf96236a6c1620aaadc08abfd9b6690503dce554375f_prof);

        
        $__internal_fea77af8af693f32af1ab71fe19f3a254ea1998bdc394ebd6a099ef1e2fc49e2->leave($__internal_fea77af8af693f32af1ab71fe19f3a254ea1998bdc394ebd6a099ef1e2fc49e2_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/projet00000/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
