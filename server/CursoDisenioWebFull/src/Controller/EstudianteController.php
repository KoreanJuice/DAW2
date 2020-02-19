<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Estudiante;
use App\Form\EstudianteFormType;

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
     */
    public function registroEst(Request $request)
    {
        $estudiante = new Estudiante();
        $form = $this->createForm(EstudianteFormType::class, $estudiante);
        $form->handleRequest($request);

        return $this->render('estudiante/registroEst.html.twig', [
            'formRegistroEst' => $form->createView(),
        ]);
    }
}
