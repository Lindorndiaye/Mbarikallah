<?php

namespace KEURGUI\immoBundle\Controller;

use KEURGUI\immoBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use KEURGUI\immoBundle\Entity\bien;
use KEURGUI\immoBundle\Entity\image;
use KEURGUI\immoBundle\Entity\Paiement;
use KEURGUI\immoBundle\Entity\localite;
use KEURGUI\immoBundle\Entity\typebien;
use KEURGUI\immoBundle\Entity\message;
use KEURGUI\immoBundle\Entity\contrat;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations\Get; // N'oublons pas d'inclure Get

/**
 * Reservation controller.
 *
 * @Route("reservation")
 */
class ReservationController extends Controller
{
    /**
     * Lists all reservation entities.
     *
     * @Route("/", name="reservation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('KEURGUIimmoBundle:Reservation')->findAll();

        return $this->render('reservation/index.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    /**
     * Creates a new reservation entity.
     *
     * @Route("/new", name="reservation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reservation = new Reservation();
        $form = $this->createForm('KEURGUI\immoBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('reservation_show', array('id' => $reservation->getId()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reservation entity.
     *
     * @Route("/{id}", name="reservation_show")
     * @Method("GET")
     */
    public function showAction(Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservation/show.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservation entity.
     *
     * @Route("/{id}/edit", name="reservation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $editForm = $this->createForm('KEURGUI\immoBundle\Form\ReservationType', $reservation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_edit', array('id' => $reservation->getId()));
        }

        return $this->render('reservation/edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reservation entity.
     *
     * @Route("/{id}", name="reservation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reservation $reservation)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }

    /**
     * Creates a form to delete a reservation entity.
     *
     * @param Reservation $reservation The reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reservation $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservation_delete', array('id' => $reservation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function adminAction()
    {
        $msg = $this->getDoctrine()
         ->getManager()
         ->getRepository('KEURGUIimmoBundle:message')
         ->findAll();
        $n = count($msg);

        return $this->render('KEURGUIimmoBundle:front:admin.html.twig',
                 array(
                     'nmsg' => $n,
                     'msg' => $msg,
                 )
           );

        return $this->render('KEURGUIimmoBundle:front:load.html.twig');
    }

    public function validationAction()
    {
        $id = $_GET['id'];
        $res = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:reservation')
        ->find($id);

        return $this->render('KEURGUIimmoBundle:front:validation.html.twig', array('res' => $res));
    }

    public function saveContratAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $contrat = new contrat();
            $reservation = new reservation();
            $reservation->setEtat(1);
            $date = date('Y/m/d');
            $contrat->setCaution(1000000);
            $contrat->setDatecontrat($date);
            $contrat->setBien($bien);
            $contrat->setDuree('1ans');
            $contrat->setClient($client);
            $em = $this->getDoctrine()->getManager();
            $em->persist($contrat);
            $em->flush();

            return new Response('contrat etablie');
        }
    }

    public function loadAction()
    {
        $msg = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:message')
        ->findAll();
        $n = count($msg);

        return $this->render('KEURGUIimmoBundle:front:load.html.twig', array(
            'nmsg' => $n,
            'msg' => $msg,
        ));
    }

    public function BienAction(Request $request)
    {
        $biens = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:bien')
        ->findAll();
        $types = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:typebien')
        ->findAll();
        $localite = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:localite')
        ->findAll();
        $image = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:image')
        ->findAll();

        return $this->render('KEURGUIimmoBundle:front:tableBien.html.twig', array(
            'biens' => $biens,
            'types' => $types,
            'localites' => $localite,
            'image' => $image,
        ));
    }

    public function LocaliteAction(Request $request)
    {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'You can access this only using Ajax!'), 400);
        } elseif ($request->isXmlHttpRequest()) {
            extract($_POST);
            $localite = new localite();
            $localite->setNom($nom);
            $em = $this->getDoctrine()->getManager();
            $em->persist($localite);
            $em->flush();

            return new JsonResponse(array('ms' => $localite->getNom()));
        }
    }

    public function TypeAction(Request $request)
    {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'You can access this only using Ajax!'), 400);
        } elseif ($request->isXmlHttpRequest()) {
            extract($_POST);
            $type = new typebien();
            $type->setNom($nom);
            $em = $this->getDoctrine()->getManager();
            $em->persist($type);
            $em->flush();

            return new JsonResponse(array('ms' => $type->getNom()));
        }
    }

    public function ajoutAction()
    {
        $biens = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:bien')
        ->findAll();
        $types = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:typebien')
        ->findAll();
        $localite = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:localite')
        ->findAll();

        return $this->render('KEURGUIimmoBundle:front:ajoutBien.html.twig', array(
            'biens' => $biens,
            'types' => $types,
            'localites' => $localite,
        ));
    }

    public function addAction(Request $request)
    {
        if (!$request->isXmlHttpRequest()) {
            if ($request->isMethod('POST') && $_POST['form'] == 'contrat') {
                //savecontrat

                extract($_POST);
                $res = $this->getDoctrine()
                ->getManager()
                ->getRepository('KEURGUIimmoBundle:reservation')
                ->find($res);

                $em = $this->getDoctrine()->getEntityManager();
                $reservations = $em->getRepository('KEURGUIimmoBundle:reservation')
                                    ->findBy(array('bien' => $res->getBien()));
                foreach ($reservations as $reservation) {
                    $em->remove($reservation);
                }

                $contrat = new contrat();
                $paiement = new Paiement();

                $date = date('Y/m/d');
                $contrat->setCaution($caution);
                $contrat->setDatecontrat($date);
                $contrat->setBien($res->getBien());
                $contrat->setDuree('1ans');
                $paiement->setMontant($mensualite);
                $paiement->setContrat($contrat);
                $contrat->setClient($res->getClient());
                $em = $this->getDoctrine()->getManager();
                $em->persist($contrat);
                $em->persist($paiement);
                $em->flush($contrat);
                $em->flush($paiement);

                return $this->redirectToRoute('pdf',
                array('client' => $contrat->getClient()->getId(),
                'client' => $contrat->getClient()->getNomComplet(),
                'bien' => $contrat->getBien()->getNom(),
                'localite' => $contrat->getBien()->getLocalite()->getNom(),
                'caution' => $caution,
                'date' => $date,
                'mensuel' => $mensualite,
            ));
            }
        }
        if ($request->isXmlHttpRequest()) {
            //inserrer bien
            extract($_POST);
            $files = $_FILES['files']['name'];

            $bien = new bien();
            $Type = $this->getDoctrine()
            ->getManager()
            ->getRepository('KEURGUIimmoBundle:typebien')
            ->find($type);
            $Localite = $this->getDoctrine()
            ->getManager()
            ->getRepository('KEURGUIimmoBundle:localite')
            ->find($localite);
            $bien->setNom($nom);
            $bien->setDescription($description);
            $bien->setPrix($prix);
            $bien->setEtat(0);
            $bien->settype($Type);
            $bien->setLocalite($Localite);
            $em = $this->getDoctrine()->getManager();
            $em->persist($bien);
            $em->flush();

            for ($i = 0; $i < 4; ++$i) {
                $image = new image();
                $image->setImage($files[$i]);
                $image->setBien($bien);
                $bien->addImage($image);
                $em = $this->getDoctrine()->getManager();

                $em->persist($image);
                $em->flush();
            }

            return new JsonResponse(array('ms' => $bien->getImage()[2]->getImage()));
        }

        return $this->render('KEURGUIimmoBundle:front:x.html.twig', array(
        ));
    }

    public function selectLocaliteAction()
    {
        $output = array();
        $localites = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:localite')
        ->findAll();
        foreach ($localites as $localite) {
            $output[] = array('id' => $localite->getId(), 'nom' => $localite->getNom());
        }

        return new JsonResponse($output);
    }

    public function selectTypeAction()
    {
        $output = array();
        $types = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:typebien')
        ->findAll();
        foreach ($types as $type) {
            $output[] = array('id' => $type->getId(), 'nom' => $type->getNom());
        }

        return new JsonResponse($output);
    }
}
