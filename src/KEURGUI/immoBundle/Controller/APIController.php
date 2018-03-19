<?php

namespace KEURGUI\immoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use KEURGUI\immoBundle\Entity\localite;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class APIController extends Controller
{
    /**
     * @Rest\Put("/addl/")
     */
    public function addlAction(Request $request)
    {
        $nom = $request->get('nom');

        $data = new localite();

        if (empty($nom)) {
            return new JsonResponse(['message' => "l'ajout des valeurs nuls est impossible", 'code' => 0], Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setNom($nom);
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        return new JsonResponse(['message' => 'la localite a ete ajoute', 'code' => 1], Response::HTTP_OK);
    }

    /**
     * @Rest\Get("/all")
     */
    public function ListAction()
    {
        $datas = $this->getDoctrine()
        ->getManager()
        ->getRepository('KEURGUIimmoBundle:localite')
        ->findAll();
        if (empty($datas)) {
            return  JsonResponse('PAS DE LOCALITE', Response::HTTP_NOT_FOUND);
        }
        $data = $this->get('jms_serializer')->serialize($datas, 'json');
        $info = array(
         'code' => 1,
         'message' => 'liste des localites',
         'donnee' => json_decode($data),
     );

        $response = new JsonResponse($info, Response::HTTP_OK);

        //$data = $serializer->deserialize($inputStr, $typeName, $format);

        return   $response;
    }

    /**
     * @Rest\Put("/update/{id}")
     */
    public function updateAction($id, Request $request)
    {
        $nom = $request->get('nom');
        //$data = $serializer->deserialize($inputStr, $typeName, $format);

        $em = $this->getDoctrine()->getManager();
        $localite = $this->getDoctrine()->getRepository('KEURGUIimmoBundle:localite')->find($id);
        if (empty($localite)) {
            return new JsonResponse(['code' => 0, 'message' => 'pas de localite', 'donnee' => null], Response::HTTP_NOT_FOUND);
        } elseif (!empty($nom)) {
            $localite->setNom($nom);
            $em->flush();

            return new JsonResponse(['code' => 1, 'message' => 'localite mise a jour', 'donnee' => null], Response::HTTP_OK);
        } else {
            return new JsonResponse(['code' => 0, 'message' => 'la localite ne peut pas etre mise a jour'], Response::HTTP_NOT_ACCEPTABLE);
        }
    }

    /**
     * @Rest\Delete("/delate/{id}")
     */
    public function deleteAction($id)
    {
        $sn = $this->getDoctrine()->getManager();
        $localite = $this->getDoctrine()->getRepository('KEURGUIimmoBundle:localite')->find($id);
        if (empty($localite)) {
            return new JsonResponse(['message' => 'pas de localite', 'code' => 0], Response::HTTP_NOT_FOUND);
        } else {
            $sn->remove($localite);
            $sn->flush();
        }

        return new JsonResponse(['code' => 1, 'message' => 'localite supprimee', 'donnee' => null], Response::HTTP_OK);
    }
}
