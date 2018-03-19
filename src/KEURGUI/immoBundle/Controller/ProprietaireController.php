<?php

namespace KEURGUI\immoBundle\Controller;

use KEURGUI\immoBundle\Entity\Proprietaire;
use KEURGUI\immoBundle\Entity\archive;
use KEURGUI\immoBundle\Entity\image;
use KEURGUI\immoBundle\Entity\bien;
use KEURGUI\immoBundle\Entity\typebien;
use KEURGUI\immoBundle\Entity\localite;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Get; // N'oublons pas d'inclure Get

/**
 * Proprietaire controller.
 *
 * @Route("proprietaire")
 */
class ProprietaireController extends Controller
{
    public function AddProprietaireAction()
    {
        return $this->render('KEURGUIimmoBundle:front:proprietaire.html.twig', array(
        ));
    }

    public function addPAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            //inserrer bien
            extract($_POST);
            $files = $_FILES['files']['name'];
            $date = date('Y-m-d');

            $archive = new archive();
            $proprietaire = new Proprietaire();

            $Type = $this->getDoctrine()
              ->getManager()
              ->getRepository('KEURGUIimmoBundle:typebien')
              ->find($type);
            $Localite = $this->getDoctrine()
              ->getManager()
              ->getRepository('KEURGUIimmoBundle:localite')
              ->find($localite);
            $proprietaire->setNumPiece($numPiece);
            $proprietaire->setNomComplet($nomComplet);
            $proprietaire->setTel($tel);
            $proprietaire->setAdresse($adresse);
            $proprietaire->setEmail($email);
            $em = $this->getDoctrine()->getManager();

            $em->persist($proprietaire);
            $em->flush();

            $archive->setNom($nom);
            $archive->setDescription($description);
            $archive->setPrix($prix);
            $archive->setType($Type);
            $archive->setProprietaire($proprietaire);
            $archive->setArchiv3(0);
            $archive->setLocalite($Localite);
            $archive->setDate('2016-02-03');
            $em = $this->getDoctrine()->getManager();
            $em->persist($archive);
            $em->flush();

            for ($i = 0; $i < 4; ++$i) {
                $image = new image();
                $image->setImage($files[$i]);
                $image->setArchive($archive);
                $archive->addImage($image);
                $em = $this->getDoctrine()->getManager();

                $em->persist($image);
                $em->flush();
            }

            return new JsonResponse(array('ms' => 'enregistrement effectue'));
        }
    }

    public function validArchiveAction()
    {
        $date = date('Y-m-d');
        $archive = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:archive');
        $archives = $archive->autoArchive($date);
        $em = $this->getDoctrine()->getManager();

        echo count($archives);
        foreach ($archives as $archive) {
            $archive->setArchiv3(1);
            $em->flush();
        }
        $delete = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:archive');
        $deletes = $delete->autoSupprime($date);
        foreach ($deletes as $delete) {
            $em->remove($delete);
            $em->flush();
        }
        $biens = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:archive')->findBy(array('archiv3' => 0))
        ;

        return $this->render('KEURGUIimmoBundle:front:validArchive.html.twig', array(
            'biens' => $biens,
        ));
    }

    public function archiverAction()
    {
        $id = $_GET['id'];

        $bien->setArchiv3(1);
        $em = $this->getDoctrine()->getManager();

        $em->flush();

        return $this->redirectToRoute('validArchive');
    }

    public function validerAction()
    {
        $id = $_GET['id'];
        $bien = new bien();

        $archive = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:archive')
        ->find($id);
        $nom = $archive->getNom();
        $proprietaire = $archive->getProprietaire();
        $type = $archive->getType();
        $prix = $archive->getPrix();

        $localite = $archive->getLocalite();
        $description = $archive->getDescription();
        $images = $archive->getImage();
        $bien->setNom($nom);
        $bien->setDescription($description);
        $bien->setPrix($prix);
        $bien->setEtat(0);
        $bien->settype($type);
        $bien->setLocalite($localite);
        $bien->setProprietaire($proprietaire);

        $em = $this->getDoctrine()->getManager();
        $em->persist($bien);
        $em->flush();
        for ($i = 0; $i < 4; ++$i) {
            $image = new image();
            $image->setImage($images[$i]);
            $image->setBien($bien);
            $bien->addImage($image);
            $em = $this->getDoctrine()->getManager();

            $em->persist($image);
            $em->flush();
        }
        $IMAGE = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:image')
        ->findby(array('archive' => $archive));
        $em = $this->getDoctrine()->getManager();

        $em->remove($archive);
        $em->flush($archive);

        foreach ($IMAGE as $image) {
            $em->remove($image);
            $em->flush();
        }

        return $this->redirectToRoute('bail');
    }

    public function contratBailAction()
    {
        $options = new Options();

        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $html = $this->renderView(
        'KEURGUIimmoBundle:front:contratBail.html.twig',
        array('message' => 'bail',
         )
        );
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response($dompdf->stream('contratBail.pdf', array('Attachment' => 0)));
    }
}
