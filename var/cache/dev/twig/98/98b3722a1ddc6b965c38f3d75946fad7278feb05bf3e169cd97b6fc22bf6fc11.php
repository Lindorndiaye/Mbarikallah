<?php

/* ::basel.html.twig */
class __TwigTemplate_55f49611a5b0b55c375494365135130d00f769164d2eb47c08890c107b0202d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d77a827c3cfdb8f72ae25aad7223fc0863a36534d1cf45840881d94b9550ecc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77a827c3cfdb8f72ae25aad7223fc0863a36534d1cf45840881d94b9550ecc5->enter($__internal_d77a827c3cfdb8f72ae25aad7223fc0863a36534d1cf45840881d94b9550ecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basel.html.twig"));

        $__internal_6c4889591b2d912427d8575fd554d80552c7f58fc4efa66c5dbe67075b7e473a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4889591b2d912427d8575fd554d80552c7f58fc4efa66c5dbe67075b7e473a->enter($__internal_6c4889591b2d912427d8575fd554d80552c7f58fc4efa66c5dbe67075b7e473a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basel.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
<script>


\$(document).ready(function () {

    \$('#table_id').DataTable({\"language\":{
                        \"sProcessing\":     \"Traitement en cours...\",
                        \"sSearch\":         \"Rechercher&nbsp;:\",
                        \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
                        \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                        \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                        \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                        \"sInfoPostFix\":    \"\",
                        \"sLoadingRecords\": \"Chargement en cours...\",
                        \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                        \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
                        \"oPaginate\": {
                            \"sFirst\":      \"Premier\",
                            \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
                            \"sNext\":       \"Suivant\",
                            \"sLast\":       \"Dernier\"
                        },
                        \"oAria\": {
                            \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                            \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                        }
                    }
    

        

    });

});


</script>";
        
        $__internal_d77a827c3cfdb8f72ae25aad7223fc0863a36534d1cf45840881d94b9550ecc5->leave($__internal_d77a827c3cfdb8f72ae25aad7223fc0863a36534d1cf45840881d94b9550ecc5_prof);

        
        $__internal_6c4889591b2d912427d8575fd554d80552c7f58fc4efa66c5dbe67075b7e473a->leave($__internal_6c4889591b2d912427d8575fd554d80552c7f58fc4efa66c5dbe67075b7e473a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0feb5a36a8de90883dbaf992414a04db070c8a83dd21215b99d48e78de65e3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0feb5a36a8de90883dbaf992414a04db070c8a83dd21215b99d48e78de65e3bc->enter($__internal_0feb5a36a8de90883dbaf992414a04db070c8a83dd21215b99d48e78de65e3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d68b61bd42a684e49e72348eeba9a914c97ada92fec2be985851f71d37e7ed5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68b61bd42a684e49e72348eeba9a914c97ada92fec2be985851f71d37e7ed5a->enter($__internal_d68b61bd42a684e49e72348eeba9a914c97ada92fec2be985851f71d37e7ed5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d68b61bd42a684e49e72348eeba9a914c97ada92fec2be985851f71d37e7ed5a->leave($__internal_d68b61bd42a684e49e72348eeba9a914c97ada92fec2be985851f71d37e7ed5a_prof);

        
        $__internal_0feb5a36a8de90883dbaf992414a04db070c8a83dd21215b99d48e78de65e3bc->leave($__internal_0feb5a36a8de90883dbaf992414a04db070c8a83dd21215b99d48e78de65e3bc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a510590db75c44b696b662e8bd4003e163916b1652103526b2ee9a073e9f9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a510590db75c44b696b662e8bd4003e163916b1652103526b2ee9a073e9f9c6->enter($__internal_0a510590db75c44b696b662e8bd4003e163916b1652103526b2ee9a073e9f9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_86c75d8df5c05cf4627d28e94bdc4af1a5234276d2da9353558110df9ca37052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c75d8df5c05cf4627d28e94bdc4af1a5234276d2da9353558110df9ca37052->enter($__internal_86c75d8df5c05cf4627d28e94bdc4af1a5234276d2da9353558110df9ca37052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/1.10.9/i18n/French.json\">
        ";
        
        $__internal_86c75d8df5c05cf4627d28e94bdc4af1a5234276d2da9353558110df9ca37052->leave($__internal_86c75d8df5c05cf4627d28e94bdc4af1a5234276d2da9353558110df9ca37052_prof);

        
        $__internal_0a510590db75c44b696b662e8bd4003e163916b1652103526b2ee9a073e9f9c6->leave($__internal_0a510590db75c44b696b662e8bd4003e163916b1652103526b2ee9a073e9f9c6_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd052ed61ef0e7da480d79aba49248ca8236e76dfe652f681824159d07d6f551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd052ed61ef0e7da480d79aba49248ca8236e76dfe652f681824159d07d6f551->enter($__internal_cd052ed61ef0e7da480d79aba49248ca8236e76dfe652f681824159d07d6f551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38c88c5112e62501b95501fca244652391541dff18cecc73e513033aaf88f043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c88c5112e62501b95501fca244652391541dff18cecc73e513033aaf88f043->enter($__internal_38c88c5112e62501b95501fca244652391541dff18cecc73e513033aaf88f043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_38c88c5112e62501b95501fca244652391541dff18cecc73e513033aaf88f043->leave($__internal_38c88c5112e62501b95501fca244652391541dff18cecc73e513033aaf88f043_prof);

        
        $__internal_cd052ed61ef0e7da480d79aba49248ca8236e76dfe652f681824159d07d6f551->leave($__internal_cd052ed61ef0e7da480d79aba49248ca8236e76dfe652f681824159d07d6f551_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da0e009927d9f6cee41514ca5703f61ef50d2c7f6c6d6141161fb53a31d7bf97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0e009927d9f6cee41514ca5703f61ef50d2c7f6c6d6141161fb53a31d7bf97->enter($__internal_da0e009927d9f6cee41514ca5703f61ef50d2c7f6c6d6141161fb53a31d7bf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0243bb80374da236ce4cb90b322533aee5a68142d73c2c45c395b2ea15084f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0243bb80374da236ce4cb90b322533aee5a68142d73c2c45c395b2ea15084f60->enter($__internal_0243bb80374da236ce4cb90b322533aee5a68142d73c2c45c395b2ea15084f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
          <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
        
        
        ";
        
        $__internal_0243bb80374da236ce4cb90b322533aee5a68142d73c2c45c395b2ea15084f60->leave($__internal_0243bb80374da236ce4cb90b322533aee5a68142d73c2c45c395b2ea15084f60_prof);

        
        $__internal_da0e009927d9f6cee41514ca5703f61ef50d2c7f6c6d6141161fb53a31d7bf97->leave($__internal_da0e009927d9f6cee41514ca5703f61ef50d2c7f6c6d6141161fb53a31d7bf97_prof);

    }

    public function getTemplateName()
    {
        return "::basel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 23,  165 => 22,  148 => 21,  128 => 7,  119 => 6,  101 => 5,  53 => 30,  50 => 22,  48 => 21,  41 => 18,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css\"/>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/DataTables/datatables.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.datatables.net/plug-ins/1.10.9/i18n/French.json\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
   
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
          <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.js\"></script>
        
        
        {% endblock %}
    </body>
</html>
<script>


\$(document).ready(function () {

    \$('#table_id').DataTable({\"language\":{
                        \"sProcessing\":     \"Traitement en cours...\",
                        \"sSearch\":         \"Rechercher&nbsp;:\",
                        \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
                        \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                        \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                        \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                        \"sInfoPostFix\":    \"\",
                        \"sLoadingRecords\": \"Chargement en cours...\",
                        \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                        \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
                        \"oPaginate\": {
                            \"sFirst\":      \"Premier\",
                            \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
                            \"sNext\":       \"Suivant\",
                            \"sLast\":       \"Dernier\"
                        },
                        \"oAria\": {
                            \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                            \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
                        }
                    }
    

        

    });

});


</script>", "::basel.html.twig", "/var/www/html/projet00000/app/Resources/views/basel.html.twig");
    }
}
