<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class AyudaController extends AbstractController
{
    /**
     * @Route("/ayuda", name="ayuda")
     */
    public function index()
    {
        return $this->render('ayuda/index.html.twig', [
            'controller_name' => 'AyudaController',
        ]);
    }

    /**
     * @Route("/ayuda/{pagina}/", name="pagina")//, 
     *          requirements={"pagina"="matricula|examen"})
     */
    public function showPagina(string $pagina)
    {
        $loader = $this->get('twig')->getLoader();
        if (!$loader->exists('ayuda/'.$pagina.'html.twig')) {
            throw $this->createNotFoundException('Pagina no existe');
            throw new NotFoundHttpException('Pagina no existe');
        }
        return $this->render('ayuda/' . $pagina . '.html.twig', [
            'nombre_metodo' => 'showPagina',]);
    }

    /**
     * @Route("/ayuda/{certificado}/", name="certificado"), 
     *          requirements={"certificado"="desarrollador"})
     */
    public function showCertificado(string $certificado)
    {
        return $this->render('ayuda/' . $certificado . '.html.twig', [
            'nombre_metodo' => 'showCertificado',]);
    }
}
