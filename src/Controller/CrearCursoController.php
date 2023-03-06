<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CrearCursoController extends AbstractController
{
    #[Route('/crear/curso', name: 'app_crear_curso')]
    public function index(): Response
    {
        return $this->render('crear_curso/index.html.twig', [
            'controller_name' => 'CrearCursoController',
        ]);
    }
}
