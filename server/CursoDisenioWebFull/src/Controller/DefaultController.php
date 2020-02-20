<?php

namespace App\Controller;

use App\Repository\CursoRepository;
use App\Repository\TemasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(CursoRepository $cursoRepository, TemasRepository $temasRepository):Response
    {
        $cursos = $cursoRepository->findAll();
        $temas = $temasRepository->findAll();

        return $this->render('default/index.html.twig', [
            'cursos' => $cursos,
            'temas' => $temas,
        ]);
    }
}
