<?php

namespace KEURGUI\immoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use KEURGUI\immoBundle\Entity\CHERCHE;
use KEURGUI\immoBundle\Entity\client;
use KEURGUI\immoBundle\Entity\contrat;
use KEURGUI\immoBundle\Entity\bien;
use KEURGUI\immoBundle\Entity\message;
use KEURGUI\immoBundle\Entity\reservation;
use KEURGUI\immoBundle\Form\CHERCHEType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dompdf\Dompdf;
use Dompdf\Options;
use FOS\RestBundle\Controller\Annotations\Get; // N'oublons pas d'inclure Get

class frontController extends Controller
{
    public function CatalogAction()
    {
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:Bien')
        ->findAll();

        return $res;
    }

    public function trouverBienAction($id)
    {
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:Bien')
        ->findBy(array('id' => $id));

        return $res;
    }

    /**
     * @Route("front/bien/search")
     */
    public function resAction($id, $idb)
    {
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:reservation')
        ->fr();

        $client = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:client')
        ->find($id);
        $bien = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:bien')
        ->find($idb);
        $reservation = new reservation();
        $date = date('Y-m-d');
        $reservation->setEtat(0);
        $reservation->setDate($date);
        $reservation->setBien($bien);
        $reservation->setClient($client);
        $em = $this->getDoctrine()->getManager();
        $em->persist($reservation);
        $em->flush();

        return $this->render('KEURGUIimmoBundle:front:reser.html.twig', array(
           'bien' => $bien,
            'client' => $client,
            'x' => $res,
   ));
    }

    public function affResAction()
    {
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:reservation')
        ->fr();

        return $this->render('KEURGUIimmoBundle:front:y.html.twig', array(
            'x' => $res,
   ));
    }

    ////////////////////////////////////////////////////////

    public function accueilAction(Request $request)
    {
        $fine = new CHERCHE();
        $form = $this->createForm(CHERCHEType::class, $fine);
        $bien = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:bien')
        ->catalogue();
        if ($request->isMethod('POST')) {
            $type = $_POST['keurgui_immobundle_cherche']['types'];
            $localite = $_POST['keurgui_immobundle_cherche']['localites'];
            $prix = $_POST['keurgui_immobundle_cherche']['prix'];
            if ($type == '' && $localite == '' && $prix != '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienp($prix);

                return $this->render('KEURGUIimmoBundle:front:accueil.html.twig', array(
                        'bien' => $utrouv,
                        'form' => $form->createView(),
                        'x' => 'x',
               ));
            } elseif ($type != '' && $localite == '' && $prix == '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBient($type);

                return $this->render('KEURGUIimmoBundle:front:accueil.html.twig', array(
                        'bien' => $utrouv,
                        'form' => $form->createView(),
                        'x' => 'x',
               ));
            } elseif ($type == '' && $localite != '' && $prix == '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienl($localite);

                return $this->render('KEURGUIimmoBundle:front:accueil.html.twig', array(
                        'bien' => $utrouv,
                        'form' => $form->createView(),
                        'x' => 'x',
               ));
            } elseif ($type == '' && $localite == '' && $prix == '') {
                $res = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien')
                ->findBy(array(
                    'etat' => 0,
                ));

                return $this->render('KEURGUIimmoBundle:front:accueil.html.twig', array('form' => $form->createView(), 'biens' => $res));
            } elseif ($type == '' && $localite != '' && $prix != '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienlp($localite, $prix);

                return $this->render('KEURGUIimmoBundle:front:accueil.html.twig', array(
                        'bien' => $utrouv,
                        'form' => $form->createView(),
                        'x' => 'x',
               ));
            } elseif ($type != '' && $localite == '' && $prix != '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienpt($prix, $type);

                return $this->render('KEURGUIimmoBundle:front:accueil.html.twig', array(
                        'bien' => $utrouv,
                        'form' => $form->createView(),
                        'x' => 'x',
               ));
            } elseif ($type != '' && $localite != '' && $prix == '') {
                $em = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBienlt($localite, $type);

                return $this->render('KEURGUIimmoBundle:front:accueil.html.twig', array(
                        'bien' => $utrouv,
                        'form' => $form->createView(),
                        'x' => 'x',
               ));
            } else {
                $em = $this->getDoctrine()
           ->getManager()
           ->getRepository('KEURGUIimmoBundle:bien');
                $utrouv = $em->findBien($localite, $prix, $type);

                return $this->render('KEURGUIimmoBundle:front:accueil.html.twig', array(
          'bien' => $utrouv,
          'form' => $form->createView(),
          'x' => 'x',
 ));
            }
        }

        return $this->render('KEURGUIimmoBundle:front:accueil.html.twig', array('biens' => $bien, 'form' => $form->createView()));
    }

    public function detailAction()
    {
        $id = $_GET['id'];
        $bien = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:bien')
        ->find($id);

        return $this->render('KEURGUIimmoBundle:front:details.html.twig', array('biens' => $bien));
    }

    public function reserverAction(Request $request)
    {
        ////////////reservation//////////
        if ($request->isMethod('POST')) {
            extract($_POST);
            if ($form == 'client') {
                $client = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:client')
                ->findBy(array(
                    'email' => $email,
                    'password' => $password,
                ));
                if (count($client) != 0) {
                    $res = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('KEURGUIimmoBundle:reservation')
                    ->findBy(array(
                        'bien' => $idbien,
                        'client' => $client[0]->getId(),
                    ));
                    if (count($res) == 0) {
                        $bien = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('KEURGUIimmoBundle:bien')
                    ->find($idbien);
                        $reservation = new reservation();
                        $date = date('Y-m-d');
                        $reservation->setEtat(0);
                        $reservation->setDate($date);
                        $reservation->setBien($bien);
                        $reservation->setClient($client[0]);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($reservation);
                        $em->flush();

                        return $this->render('KEURGUIimmoBundle:front:details.html.twig', array('biens' => $bien, 'message' => 'Votre demande reservation a ete prise en charge'));
                    } else {
                        $bien = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('KEURGUIimmoBundle:bien')
                        ->find($idbien);

                        return $this->render('KEURGUIimmoBundle:front:details.html.twig', array('biens' => $bien, 'message' => 'Vous avez deja fait une demande de reservation de ce bien'));
                    }
                } else {
                    $bien = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('KEURGUIimmoBundle:bien')
                    ->find($idbien);

                    return $this->render('KEURGUIimmoBundle:front:details.html.twig', array('biens' => $bien, 'message' => 'inscrit tw'));
                }
            } elseif ($form == 'inconnu') {
                $client = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:client')
                ->findBy(array(
                    'email' => $email,
                ));
                if (count($client) != 0) {
                    $bien = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('KEURGUIimmoBundle:bien')
                    ->find($idbien);

                    return $this->render('KEURGUIimmoBundle:front:details.html.twig', array('biens' => $bien, 'message' => 'un clent avec cet email existe deja'));
                } else {
                    extract($_POST);
                    $client = new client();
                    $reservation = new reservation();
                    $bien = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('KEURGUIimmoBundle:bien')
                    ->find($idbien);
                    $client->setNomComplet($nomComplet);
                    $client->setAdresse($adresse);
                    $client->setEmail($email);
                    $client->setNumpiece($numpiece);
                    $client->setTel($tel);
                    $client->setPassword($password);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($client);
                    $em->flush();
                    $date = date('Y-m-d');
                    $reservation->setEtat(0);
                    $reservation->setDate($date);
                    $reservation->setBien($bien);
                    $reservation->setClient($client);
                    $em->persist($reservation);
                    $em->flush();

                    return $this->render('KEURGUIimmoBundle:front:details.html.twig', array('biens' => $bien, 'message' => 'Votre demande a ete prise en charche '));
                }
            } elseif ($form == 'message') {
                $bien = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:bien')
                ->find($idbien);
                $em = $this->getDoctrine()->getManager();

                $messages = new message();
                $messages->setNomComplet($NomComplet);
                $messages->setEmail($email);
                $messages->setNumero($Numero);
                $messages->setMessage($message);
                $em->persist($messages);
                $em->flush();

                return $this->render('KEURGUIimmoBundle:front:details.html.twig', array('biens' => $bien, 'message' => 'Message envoye'));
            }
        }

        return new Response('$_POST');
    }

    public function showReservationAction()
    {
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:reservation')
        ->fr();

        return $this->render('KEURGUIimmoBundle:front:reserver.html.twig', array('res' => $res));
    }

    public function detailsReservationAction($id)
    {
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:reservation')
        ->find($id);

        return $this->render('KEURGUIimmoBundle:front:detailRes.html.twig',
         array(
             'res' => $res,
        ));
    }

    public function contratpdfAction()
    {
        $options = new Options();
        $client = $_GET['client'];
        $bien = $_GET['bien'];
        $date = $_GET['date'];
        $localite = $_GET['localite'];

        $caution = $_GET['caution'];

        $mensuel = $_GET['mensuel'];
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $html = $this->renderView(
        'KEURGUIimmoBundle:front:pdf.html.twig',
        array('message' => 'loula nekh',
         'client' => $client,
        'bien' => $bien,
         'mensuel' => $mensuel,
         'date' => $date,
         'localite' => $localite,
         'caution' => $caution,
         )
        );
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response($dompdf->stream('contrat.pdf', array('Attachment' => 0)));
    }

    public function gerantAction()
    {
        return $this->render('KEURGUIimmoBundle:front:gerant.html.twig');
    }
}
