<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Estudiante;
use App\Form\EstudianteFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class EstudianteController extends AbstractController
{
    /**
     * @Route("/estudiante", name="estudiante")
     */
    public function index()
    {
        return $this->render('estudiante/index.html.twig', [
            'controller_name' => 'EstudianteController',
        ]);
    }

    /**
     * @Route("/estudiante/registro", name="registroEst")
     * @isGranted("IS_AUTHENTICATED_FULLY")
     */
    public function registroEst(Request $request)
    {
        $estudiante = new Estudiante();
        $form = $this->createForm(EstudianteFormType::class, $estudiante);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $estudiante->setUsuario($this->getUser());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($estudiante);
            $entityManager->flush();
            
            return $this->redirectToRoute('homepage');
        }

        return $this->render('estudiante/registroEst.html.twig', [
            'formRegistroEst' => $form->createView(),
        ]);
    }
}
