<?php

/* ::baseadmin.html.twig */
class __TwigTemplate_fffcad40df94f604ef0eb1b767106ecc45a1c69fea90fd99b00fe8ccc88887e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel_left' => array($this, 'block_panel_left'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0956b00e5f130d5f272295f397fff976f7cf17533b8dc6cf156b8666d6f5e671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0956b00e5f130d5f272295f397fff976f7cf17533b8dc6cf156b8666d6f5e671->enter($__internal_0956b00e5f130d5f272295f397fff976f7cf17533b8dc6cf156b8666d6f5e671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseadmin.html.twig"));

        $__internal_fd4df310e9faecf62981e720b55d063791b34f17726469ffb80ce9540c9683c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4df310e9faecf62981e720b55d063791b34f17726469ffb80ce9540c9683c1->enter($__internal_fd4df310e9faecf62981e720b55d063791b34f17726469ffb80ce9540c9683c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseadmin.html.twig"));

        // line 1
        echo "

<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
      <link rel=\"shortcut icon\" href=\"~/node_modules/bootstrap/dist/css/bootstrap.min.css\">
  

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/cs-skin-elastic.css"), "html", null, true);
        echo "\" >
      <script src=\"jquery-jvectormap-1.0.min.js\"></script>
        <script src=\"jquery-jvectormap-world-mill-en.js\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/lib/datatable/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/css/bootstrap-select.less"), "html", null, true);
        echo "\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/scss/style.css"), "html", null, true);
        echo "\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>


    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>


<body>

";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "








";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "
</body>
</html>
";
        
        $__internal_0956b00e5f130d5f272295f397fff976f7cf17533b8dc6cf156b8666d6f5e671->leave($__internal_0956b00e5f130d5f272295f397fff976f7cf17533b8dc6cf156b8666d6f5e671_prof);

        
        $__internal_fd4df310e9faecf62981e720b55d063791b34f17726469ffb80ce9540c9683c1->leave($__internal_fd4df310e9faecf62981e720b55d063791b34f17726469ffb80ce9540c9683c1_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_2efc2f48f139814c95ec741029fa485313448e18e2003aa96ef021748f7ac2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efc2f48f139814c95ec741029fa485313448e18e2003aa96ef021748f7ac2be->enter($__internal_2efc2f48f139814c95ec741029fa485313448e18e2003aa96ef021748f7ac2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_314cf68c5c921c69dcbf2ed3a1fcb19debbf0d7b08e0f3c250c7a6b3e453c04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314cf68c5c921c69dcbf2ed3a1fcb19debbf0d7b08e0f3c250c7a6b3e453c04f->enter($__internal_314cf68c5c921c69dcbf2ed3a1fcb19debbf0d7b08e0f3c250c7a6b3e453c04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo " ";
        $this->displayBlock('panel_left', $context, $blocks);
        // line 48
        echo "  ";
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_314cf68c5c921c69dcbf2ed3a1fcb19debbf0d7b08e0f3c250c7a6b3e453c04f->leave($__internal_314cf68c5c921c69dcbf2ed3a1fcb19debbf0d7b08e0f3c250c7a6b3e453c04f_prof);

        
        $__internal_2efc2f48f139814c95ec741029fa485313448e18e2003aa96ef021748f7ac2be->leave($__internal_2efc2f48f139814c95ec741029fa485313448e18e2003aa96ef021748f7ac2be_prof);

    }

    // line 46
    public function block_panel_left($context, array $blocks = array())
    {
        $__internal_0d87f20613d0e96542ec5a14a180d52f742dca22a8b470e782157b6ea89905b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d87f20613d0e96542ec5a14a180d52f742dca22a8b470e782157b6ea89905b8->enter($__internal_0d87f20613d0e96542ec5a14a180d52f742dca22a8b470e782157b6ea89905b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_left"));

        $__internal_d25e6762cc00313709a47d5cc112c727e0a715166ecca97fde2add4d3d2435af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25e6762cc00313709a47d5cc112c727e0a715166ecca97fde2add4d3d2435af->enter($__internal_d25e6762cc00313709a47d5cc112c727e0a715166ecca97fde2add4d3d2435af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_left"));

        // line 47
        echo " ";
        
        $__internal_d25e6762cc00313709a47d5cc112c727e0a715166ecca97fde2add4d3d2435af->leave($__internal_d25e6762cc00313709a47d5cc112c727e0a715166ecca97fde2add4d3d2435af_prof);

        
        $__internal_0d87f20613d0e96542ec5a14a180d52f742dca22a8b470e782157b6ea89905b8->leave($__internal_0d87f20613d0e96542ec5a14a180d52f742dca22a8b470e782157b6ea89905b8_prof);

    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        $__internal_ffe7f46b6f77076c775a9b6c5eb75c8c54f25940a89c32bf8c158472314ee919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe7f46b6f77076c775a9b6c5eb75c8c54f25940a89c32bf8c158472314ee919->enter($__internal_ffe7f46b6f77076c775a9b6c5eb75c8c54f25940a89c32bf8c158472314ee919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_88d310b0fd69e121e83803b5bbcd3c72370fe8987cf8eb190a3671cfedfa9ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d310b0fd69e121e83803b5bbcd3c72370fe8987cf8eb190a3671cfedfa9ec6->enter($__internal_88d310b0fd69e121e83803b5bbcd3c72370fe8987cf8eb190a3671cfedfa9ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 49
        echo " ";
        
        $__internal_88d310b0fd69e121e83803b5bbcd3c72370fe8987cf8eb190a3671cfedfa9ec6->leave($__internal_88d310b0fd69e121e83803b5bbcd3c72370fe8987cf8eb190a3671cfedfa9ec6_prof);

        
        $__internal_ffe7f46b6f77076c775a9b6c5eb75c8c54f25940a89c32bf8c158472314ee919->leave($__internal_ffe7f46b6f77076c775a9b6c5eb75c8c54f25940a89c32bf8c158472314ee919_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4f9b1db455e273df96d26ac176f1a909b4d2d06d40a7cd279e0905e33f858e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f9b1db455e273df96d26ac176f1a909b4d2d06d40a7cd279e0905e33f858e0->enter($__internal_e4f9b1db455e273df96d26ac176f1a909b4d2d06d40a7cd279e0905e33f858e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_26559c8a4add6a46b1bec8423c02a4a3089dc68ebfd48bc1180db2af6e84cd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26559c8a4add6a46b1bec8423c02a4a3089dc68ebfd48bc1180db2af6e84cd55->enter($__internal_26559c8a4add6a46b1bec8423c02a4a3089dc68ebfd48bc1180db2af6e84cd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo " ";
        
        $__internal_26559c8a4add6a46b1bec8423c02a4a3089dc68ebfd48bc1180db2af6e84cd55->leave($__internal_26559c8a4add6a46b1bec8423c02a4a3089dc68ebfd48bc1180db2af6e84cd55_prof);

        
        $__internal_e4f9b1db455e273df96d26ac176f1a909b4d2d06d40a7cd279e0905e33f858e0->leave($__internal_e4f9b1db455e273df96d26ac176f1a909b4d2d06d40a7cd279e0905e33f858e0_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dcbe801b5695bb0a0375a70a672955220efe71ec0a1b0c6509d28fd27dcdc30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcbe801b5695bb0a0375a70a672955220efe71ec0a1b0c6509d28fd27dcdc30->enter($__internal_4dcbe801b5695bb0a0375a70a672955220efe71ec0a1b0c6509d28fd27dcdc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dce46da6dfa3bae0363810621a136db82a3367e8c23617f0c5762e14cb9742aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce46da6dfa3bae0363810621a136db82a3367e8c23617f0c5762e14cb9742aa->enter($__internal_dce46da6dfa3bae0363810621a136db82a3367e8c23617f0c5762e14cb9742aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/main.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/vendor/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
   

    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.print.min.js"), "html", null, true);
        echo "'\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/data-table/datatables-init.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/vendor/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/main.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/chart-js/Chart.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/widgets.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetss/js/lib/vector-map/country/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.2.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>

            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
          

    <script>
    \$(document).ready(function(){});
 ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );

       
    </script>

        ";
        
        $__internal_dce46da6dfa3bae0363810621a136db82a3367e8c23617f0c5762e14cb9742aa->leave($__internal_dce46da6dfa3bae0363810621a136db82a3367e8c23617f0c5762e14cb9742aa_prof);

        
        $__internal_4dcbe801b5695bb0a0375a70a672955220efe71ec0a1b0c6509d28fd27dcdc30->leave($__internal_4dcbe801b5695bb0a0375a70a672955220efe71ec0a1b0c6509d28fd27dcdc30_prof);

    }

    public function getTemplateName()
    {
        return "::baseadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 92,  321 => 91,  317 => 90,  313 => 89,  309 => 88,  305 => 87,  301 => 86,  295 => 83,  291 => 82,  287 => 81,  283 => 80,  279 => 79,  275 => 78,  271 => 77,  267 => 76,  263 => 75,  259 => 74,  255 => 73,  251 => 72,  247 => 71,  243 => 70,  237 => 67,  232 => 65,  228 => 64,  223 => 63,  214 => 62,  204 => 51,  195 => 50,  185 => 49,  176 => 48,  166 => 47,  157 => 46,  146 => 50,  143 => 48,  140 => 46,  131 => 45,  118 => 123,  116 => 62,  105 => 53,  103 => 45,  86 => 31,  82 => 30,  78 => 29,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
      <link rel=\"shortcut icon\" href=\"~/node_modules/bootstrap/dist/css/bootstrap.min.css\">
  

    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/normalize.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/font-awesome.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/themify-icons.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/flag-icon.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/cs-skin-elastic.css')}}\" >
      <script src=\"jquery-jvectormap-1.0.min.js\"></script>
        <script src=\"jquery-jvectormap-world-mill-en.js\"></script>

    <link rel=\"stylesheet\" href=\"{{asset('assetss/css/lib/datatable/dataTables.bootstrap.min.css')}}\">
    <!-- <link rel=\"stylesheet\" href=\"{{asset('assetss/css/bootstrap-select.less')}}\"> -->
    <link rel=\"stylesheet\" href=\"{{asset('assetss/scss/style.css')}}\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>


    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>


<body>

{% block body %}
 {% block panel_left %}
 {% endblock %}
  {% block header %}
 {% endblock %}
  {% block content %}
 {% endblock %}
{% endblock %}









{% block javascripts %}
 <script src=\"{{asset('assetss/js/popper.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/plugins.js')}}\"></script>
    <script src=\"{{asset('assetss/js/main.js')}}\"></script>

    <script src=\"{{asset('assetss/js/vendor/jquery-2.1.4.min.js')}}\"></script>
   

    <script src=\"{{asset('assetss/js/lib/data-table/datatables.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/dataTables.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/dataTables.buttons.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/jszip.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/pdfmake.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/vfs_fonts.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.html5.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.print.min.js')}}'\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/buttons.colVis.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/data-table/datatables-init.js')}}\"></script>
        <script src=\"{{asset('assetss/js/vendor/jquery-2.1.4.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/plugins.js')}}\"></script>
    <script src=\"{{asset('assetss/js/main.js')}}\"></script>


    <script src=\"{{asset('assetss/js/lib/chart-js/Chart.bundle.js')}}\"></script>
    <script src=\"{{asset('assetss/js/dashboard.js')}}\"></script>
    <script src=\"{{asset('assetss/js/widgets.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/jquery.vmap.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/jquery.vmap.min.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/jquery.vmap.sampledata.js')}}\"></script>
    <script src=\"{{asset('assetss/js/lib/vector-map/country/jquery.vmap.world.js')}}\"></script>
     <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.2.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>

            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
          

    <script>
    \$(document).ready(function(){});
 ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );

       
    </script>

        {% endblock %}

</body>
</html>
", "::baseadmin.html.twig", "/var/www/html/projet00000/app/Resources/views/baseadmin.html.twig");
    }
}
