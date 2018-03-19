<?php

/* @KEURGUIimmo/front/fpdf.php/fpdf.php */
class __TwigTemplate_0f2ca92dde38640cd05bd178274ed7dbcbcf008cc4b8be3a0af0b1bd0923cb46 extends Twig_Template
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
        $__internal_58df13b6e3172f8c201b59141a179931500ffcaa9800a419379036777b09e6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58df13b6e3172f8c201b59141a179931500ffcaa9800a419379036777b09e6a6->enter($__internal_58df13b6e3172f8c201b59141a179931500ffcaa9800a419379036777b09e6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/front/fpdf.php/fpdf.php"));

        $__internal_de4ad23441f538eda923126a26e9c6e155aae15960a0ae402855dcee495eeb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4ad23441f538eda923126a26e9c6e155aae15960a0ae402855dcee495eeb93->enter($__internal_de4ad23441f538eda923126a26e9c6e155aae15960a0ae402855dcee495eeb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KEURGUIimmo/front/fpdf.php/fpdf.php"));

        // line 1
        echo "<?php

define('FPDF_FONTPATH', ' Chemin_du_répertoire/font/');
//lien vers le dossier \" font \"
require 'Chemin_du_répertoire/fpdf.php';
//lien vers le fichier contenant la classe FPDF

\$pdf = new FPDF('P', 'pt', 'A4');
//création d'une instance de classe, P pour portrait
//, pt pour point en unité de mesure, A4 pour le format
\$pdf->Open(); //indique que l'on crée un fichier PDF
\$pdf->AddPage(); //permet d'ajouter une page
\$pdf->SetFont('Helvetica', 'B', 11); //choix de la police
\$pdf->SetXY(330, 25); // indique des coordonnées pour
////placer un élément
\$pdf->Cell(190, 50, 'texte dans le cadre', 0, 0, 'L');
//création d'une cellule
\$pdf->Text(498, 20, 'texte'); //insertion d'une ligne
//de texte
\$pdf->Output(); //génère le PDF et l'affiche
";
        
        $__internal_58df13b6e3172f8c201b59141a179931500ffcaa9800a419379036777b09e6a6->leave($__internal_58df13b6e3172f8c201b59141a179931500ffcaa9800a419379036777b09e6a6_prof);

        
        $__internal_de4ad23441f538eda923126a26e9c6e155aae15960a0ae402855dcee495eeb93->leave($__internal_de4ad23441f538eda923126a26e9c6e155aae15960a0ae402855dcee495eeb93_prof);

    }

    public function getTemplateName()
    {
        return "@KEURGUIimmo/front/fpdf.php/fpdf.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

define('FPDF_FONTPATH', ' Chemin_du_répertoire/font/');
//lien vers le dossier \" font \"
require 'Chemin_du_répertoire/fpdf.php';
//lien vers le fichier contenant la classe FPDF

\$pdf = new FPDF('P', 'pt', 'A4');
//création d'une instance de classe, P pour portrait
//, pt pour point en unité de mesure, A4 pour le format
\$pdf->Open(); //indique que l'on crée un fichier PDF
\$pdf->AddPage(); //permet d'ajouter une page
\$pdf->SetFont('Helvetica', 'B', 11); //choix de la police
\$pdf->SetXY(330, 25); // indique des coordonnées pour
////placer un élément
\$pdf->Cell(190, 50, 'texte dans le cadre', 0, 0, 'L');
//création d'une cellule
\$pdf->Text(498, 20, 'texte'); //insertion d'une ligne
//de texte
\$pdf->Output(); //génère le PDF et l'affiche
", "@KEURGUIimmo/front/fpdf.php/fpdf.php", "/var/www/html/projet00000/src/KEURGUI/immoBundle/Resources/views/front/fpdf.php/fpdf.php");
    }
}
