<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CertificadoController extends AbstractController
{
    /**
     * @Route("/certificado", name="certificado")
     */
    public function index()
    {
        return $this->render('certificado/index.html.twig', [
            'controller_name' => 'CertificadoController',
        ]);
    }
}
/*
    $routeName = $request->attributes->get('_route');
    $routeParamenters = $request->atributes->get('_route_params');
    
// ↓ en las plantillas twig
{% set route_name = app.request.attributes.get('_route') %}
{% set route_parameters = app.request.attributes.get('_route_params') %}
